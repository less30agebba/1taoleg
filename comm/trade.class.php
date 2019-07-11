<?php
class trade{
	public $duoduo;
	public $webset;
	public $pagesize=100;
	public $filter_pid=0;
	public $pid=0;
	public $phplock;
	public $trade_id_uid_arr; //记录有uid的trade_id
	public $trade_id_uid_arr2; //记录无uid的trade_id
	public $trade_chongfu=array(); //记录重复订单
	function __construct($duoduo,$key=''){
		$this->duoduo=$duoduo;
		$this->webset=$duoduo->webset;
		unset($duoduo);
		include_once(DDROOT.'/comm/php_lock.class.php');
		$this->phplock=new phplock('trade_import'.$key);
		if($this->phplock->status==0){  //存在同进程
			$this->pid=1;
		}
		else{
			$this->pid=0;
		}
	}
	
	function __destruct(){
		$this->phplock->unlock();
		unset($this->duoduo);
	}
	
	function run($excel,$type=0){
		$data=$this->excel2data($excel,$type);
		$xlsnum=count($data);
		$data=$this->data2trade($data);
		$_data=array();
		$num=0;
		foreach($data as $vo){
			$num++;
			$_data[]=$vo;
			if($num==$this->pagesize){
				break;
			}
		}
		$insert_num=0;
		$update_num=0;
		$bubian_num=0;
		$shixiao_num=0;
		foreach($_data as $vo){
			$re =$this->trade_ruku($vo);
			if($re==1){
				$insert_num++;
			}
			elseif($re==2){
				$update_num++;
			}
			elseif($re==3){
				$bubian_num++;
			}
			elseif($re==4){
				$shixiao_num++;
			}
		}
		$msg="共".$xlsnum."条订单，合并后".count($data)."条订单，本次处理".count($_data)."条订单，插入".$insert_num."条新订单，更新".$update_num."条订单，不变".$bubian_num."条订单，失效".$shixiao_num."条订单";
		$re=array('s'=>1,'r'=>array('insert_num'=>$insert_num,'update_num'=>$update_num,'bubian_num'=>$bubian_num,'shixiao_num'=>$shixiao_num,'msg'=>$msg));
		return $re;
	}
	
	function excel2data($excel,$type=0){
		if($type==1){
			$excel=file_get_contents($excel);
		}
		include_once DDROOT . '/comm/readxls.php';
		$data = new Spreadsheet_Excel_Reader();
		$data->setOutputEncoding('utf-8');
		$re=$data->read($excel,2);
		if($re==-1){
			return -1;
		}
		$data=$data->sheets[0]['cells'];
		unset($data[1]);
		$_data=array();
		foreach($data as $row){
			$_data[]=$row;
		}
		return $_data;
	}
	
	function data2trade($shuju,$log_chongfu=0){
		$data_arr=array();
        $status_arr = include (DDROOT . '/data/status_arr.php'); //订单状态
		foreach($status_arr as $k=>$v){
			$status_arr[$k]=strip_tags($v);
		}
        
		if (count($shuju[0])>8 && count($shuju[0]) < 20) {  //7格以内是如意淘的订单
            $re=array('s'=>0, 'r'=>"你导入的文件不符合，请重新导出淘宝客推广明细表");
			return $re;
        }

		if(count($shuju[0])==8){
			$_shuju=array();
			$cart=array();
			$i=0;
			$j=0;
			foreach($shuju as $k=>$row){
				if($row[4]=='订单失效'){
					unset($shuju[$k]);
					continue;
				}
				
				if(!isset($cart['a_'.$row[3]])){  //如果订单号不存在
					$cart['a_'.$row['3']]=array('k'=>$k,'status'=>$row[4]);
					$_shuju[$k]=$row;
					$i++;
				}
				else{ //如果订单号存在，增加佣金
					$_k=$cart['a_'.$row['3']]['k'];
					$_shuju[$_k][5]=$_shuju[$_k][5]+$row[5];
					$_shuju[$_k][7]=$_shuju[$_k][7]+$row[7];
					$j++;
				}
			}
			sort($_shuju);
			unset($shuju);
			foreach($_shuju as $k=>$row){
				$shuju[$k]=array(1=>$row[1],3=>'淘宝订单',4=>0,5=>'淘宝掌柜',6=>'淘宝掌柜',7=>1,8=>0,9=>$row[4],12=>0,13=>0,14=>$row[5],16=>$row[7],17=>$row[6],19=>$row[7],20=>0,21=>0,25=>$row[3]);
			}
		}
		//每个参数的坐标，下次只需要改这里
		$create_time_key=1;//创建日期
		$click_time_key=2;//点击日期
		$item_title_key=3;//商品信息
		$num_iid_key=4;//商品ID
		$seller_nick_key=5;//掌柜旺旺
		$shop_title_key=6;//所属店铺
		$item_num_key=7;//商品数
		$pay_price_key=8;//商品单价
		$status_key=9;//订单状态
		$fencheng_key=12;//分成比例
		$real_pay_fee_key=13;//实际成交额
		$yugu_key=14;//效果预估
		$commission_key=16;//预估收入（实际佣金）
		$pay_time_key=17;//结算时间
		$commission_rate_key=11;//商品佣金比例
		$commission_yongjin_key=19;//佣金金额
		if(count($shuju[0])==30 && isset($shuju[0][20])){
			$commission_rate_butie_key=20;//补贴比率
			$commission_butie_key=21;//补贴金额
			$trade_id_former_key=25;//订单编号
			$media_id_key=27;//媒体id
			$platform_key=23;//平台
			$adzone_id_key=29;//广告位id
		}else{
			$commission_rate_butie_key=21;//补贴比率
			$commission_butie_key=22;//补贴金额
			$trade_id_former_key=26;//订单编号
			$media_id_key=28;//媒体id
			$platform_key=24;//平台
			$adzone_id_key=30;//广告位id
		}
		if($this->filter_pid==1){
			$taopid=dd_get_cache('taopid');
			$media_id_arr=array();
			foreach($taopid as $row){
				$pid=$row['pid'];
				$pid=str_replace('mm_','',$pid);
				$pid=explode('_',$pid);
				$media_id_arr[]=$pid[1];
			}
		}
		
		$jilu_data=array();
        foreach ((array)$shuju as $key=>$row) {
			if((float)$row[$num_iid_key]==0){
				$row[$num_iid_key]=dd_crc32($row[$item_title_key].$row[$pay_price_key]);
			}
            if (!preg_match('/\d+/',$row[$trade_id_former_key]) || strlen($row[$trade_id_former_key])<8) { //订单号不存在的都删掉
                continue;
            }
			if($this->filter_pid==1 && !in_array($row[$media_id_key],$media_id_arr)){
				continue;
			}
            unset($arr);
			$arr['category_id']=$row[$adzone_id_key];
			$arr['status'] = array_search($row[$status_key], $status_arr);
			
			$arr['create_time'] = $row[$create_time_key];
			
            if ($row[$pay_time_key]) {
                $arr['pay_time'] = date("Y-m-d H:i:s", strtotime($row[$pay_time_key]));
            }
			$arr['item_title'] = preg_replace('/\'|"/','',$row[$item_title_key]);
			$arr['shop_title'] = preg_replace('/\'|"/','',$row[$shop_title_key]);
			$arr['seller_nick'] = preg_replace('/\'|"/','',$row[$seller_nick_key]);
            $arr['num_iid'] = $row[$num_iid_key];
			//商品ID必须是数字
			if(!is_numeric($arr['num_iid'])){
				$re=array('s'=>0, 'r'=>"文件格式不对");
				return $re;
			}
            $arr['item_num'] = $row[$item_num_key];
			if($arr['status']==4){
				$arr['item_num']=0;
			}
			//商品数必须是数字还是大于0
			if(!is_numeric($arr['item_num'])||$arr['item_num']<0){
				$re=array('s'=>0, 's'=>"文件格式不对");
				return $re;
			}
            $arr['pay_price'] = $row[$pay_price_key];
			//支付价格必须是数字
			if(!is_numeric($arr['pay_price'])){
				$re=array('s'=>0, 'r'=>"文件格式不对");
				return $re;
			}
            $arr['real_pay_fee'] = $row[$real_pay_fee_key];
			//支付价格必须是数字
			if(!is_numeric($arr['real_pay_fee'])){
				$re=array('s'=>0, 'r'=>"文件格式不对");
				return $re;
			}
			
            if ($row[$commission_rate_key] != '0.00%') {
                $commission_rate = $row[$commission_rate_key];
            } 
			elseif ($row[$commission_rate_butie_key] != '0.00%') {
                $commission_rate = $row[$commission_rate_butie_key];
            }
			else{
				$commission_rate='0.00%';
			}
			
			if($row[$commission_butie_key]==0){
				$_commission_rate_butie_key=sprintf("%01.3f", str_replace('%', '', $row[$commission_rate_butie_key]) / 100);
				$row[$commission_butie_key]=round($row[$real_pay_fee_key]*$_commission_rate_butie_key,2);
			}
			
			$zhiyoubutie=0;
            $arr['commission_rate'] = sprintf("%01.3f", str_replace('%', '', $commission_rate) / 100);
			
			$arr['commission']=0;
			$arr['commission'] =(float)$row[$commission_key];
			if($arr['commission']==0){
				$arr['commission'] =(float)$row[$yugu_key];
			}
			
			if($arr['commission']==0){
				if($row[$commission_butie_key]>0){
					$zhiyoubutie=1;
					$arr['commission'] =(float)$row[$commission_butie_key];
				}else{
					$arr['commission']=0;
				}
			}

			if((int)$this->webset['taoapi']['butie']==0 && $zhiyoubutie==0 && $arr['commission']>0){  //如果该订单不是只有补贴，那么佣金需要把补贴减去，如果商品佣金只有补贴，那就不减
				$a=$arr['commission']-(float)$row[$commission_butie_key];
				if($a>0){
					$arr['commission']=$a;
				}
			}
			//如果有第三方分成，把分出去的佣金剪掉
			/*$fencheng=$row[$fencheng_key];
			$fencheng=sprintf("%01.3f", str_replace('%', '', $fencheng) / 100);
			if($fencheng>0){
				$arr['commission']=$arr['commission']*$fencheng;	
			}*/
			
            $arr['trade_id_former'] = $row[$trade_id_former_key];
			$arr['mini_trade_id'] = substr($row[$trade_id_former_key],0,8).substr($row[$trade_id_former_key],-4,4);
			$arr['trade_id']=$row[$trade_id_former_key]."_".$arr['num_iid'];
            $arr['qrsj'] = 0;
            $arr['tgyj'] = 0;
            $arr['platform']=$row[$platform_key]=='无线'?2:1;
			$arr['app_key']=0;
			$arr['outer_code'] = '';
			$arr['uid'] = 0;
			$arr['category_name']=$row[$click_time_key];
			$arr['fxje'] = fenduan($arr['commission'], $this->webset['fxbl'], 0);
            $arr['jifenbao'] = jfb_data_type($arr['fxje'] * TBMONEYBL);
            $arr['jifen'] = (int)($arr['fxje'] * $this->webset['jifenbl']);
			if(!isset($jilu_data[$arr['trade_id']])){
				$k=array_push($data_arr,$arr);
				$jilu_data[$arr['trade_id']]=$k-1;
			}
			else{
				if($arr['status']!=4){
					$k=$jilu_data[$arr['trade_id']];
					
					if($arr['status']==2){
						$time_key='create_time';
					}
					elseif($arr['status']==5){
						$time_key='pay_time';
					}
					if($arr[$time_key]!=$data_arr[$k][$time_key]){
						if(!isset($this->trade_chongfu[$arr['trade_id']])){
							$this->trade_chongfu[$arr['trade_id']][]=$data_arr[$k];
						}
						$this->trade_chongfu[$arr['trade_id']][]=$arr;	
					}
					
					$data_arr[$k]['item_num']+=$arr['item_num'];
					$data_arr[$k]['real_pay_fee']+=$arr['real_pay_fee'];
					$data_arr[$k]['commission']+=$arr['commission'];
					$data_arr[$k]['fxje']+=$arr['fxje'];
					$data_arr[$k]['jifenbao']+=$arr['jifenbao'];
					$data_arr[$k]['jifen']+=$arr['jifen'];
				}
			}
        }
		unset($jilu_data);
		/*if($log_chongfu==1){
			//这组代码是为了记录订单时间，在当前逻辑内无用
			foreach($this->trade_chongfu as $arr){
				foreach($arr as $row){
					if($row['status']==2){
						$time_field='create_time';
					}
					else{
						$time_field='pay_time';
					}
					$time=$row[$time_field];
					$this->duoduo->insert_select('trade_time',array('trade_id'=>$row['trade_id'],'status'=>$row['status'],'time'=>$time),'trade_id="'.$row['trade_id'].'" and status="'.$row['status'].'" and time="'.$time.'"');
				}	
			}
			//这组代码是为了记录订单时间，在当前逻辑内无用
		}*/
		return $data_arr;
	}
	
	function trade_ruku($arr) {
		$arr['real_pay_fee']=round($arr['real_pay_fee'],2);
		$arr['commission']=round($arr['commission'],2);
		$arr['jifenbao']=round($arr['jifenbao'],2);
		$arr['jifen']=round($arr['jifen'],2);
		$arr['fxje']=round($arr['fxje'],2);
		
		if(TAOTYPE==2){
			$tradelist_id = $this->duoduo->select('tradelist', 'id', 'trade_id_former="' . $arr['trade_id_former'] . '" and app_key=1 order by id desc');  //如果是api获取的，停止执行
			if($tradelist_id>0){
				return 3;
			}	
		}
		
		$tradedata = $this->duoduo->select('tradelist', '*', 'trade_id="' . $arr['trade_id'] . '" order by id asc');

		if($tradedata['id']>0){ //存在订单
			$arr['id']=$tradedata['id'];
			if($tradedata['status']==4){
				//订单是失效状态，不计算
				return 3;
			}
			$arr['commission']=round($arr['commission'],2);
			$tradedata['commission']=round($tradedata['commission'],2);
			if ($arr['status'] != $tradedata['status']){//状态发生变化
				if($tradedata['status']==5){
					//订单是结算状态，不计算
					return 3;
				}
				if($tradedata['uid']>0){
					$arr['uid']=$tradedata['uid'];
				}
				else{
					$arr=$this->complete_trade_uid($arr);
				}
				$tmp=$this->complete_trade_arr($arr);
				$arr=$tmp['trade'];
				$user=$tmp['user'];
				if($arr['status']==5){ //结算订单
					$this->duoduo->update('tradelist', $arr, 'id="' . $tradedata['id'] . '"');	
					if(!empty($user) && $arr['uid']>0){
						$this->duoduo->rebate($user, $arr, 8); //8号明细，确认淘宝订单
					}
					return 2;
				}
				else{
					$this->duoduo->update('tradelist', $arr, 'id="' . $tradedata['id'] . '"');
					return 2;
				}
			}
			else{
				if($tradedata['uid']>0){
					$arr['uid']=$tradedata['uid'];
				}
				if($arr['status']==2){
					$time_field='create_time';
				}
				else{
					$time_field='pay_time';
				}
				$buchong=0;
				if(1){ //如果是获取全部订单
					if($arr['commission']>$tradedata['commission'] && $arr['item_num']>$tradedata['item_num']){
						$arr['item_num']=round($arr['item_num']-$tradedata['item_num'],2);
						$arr['commission']=round($arr['commission']-$tradedata['commission'],2);
						$arr['fxje']=round($arr['fxje']-$tradedata['fxje'],2);
						$arr['jifenbao']=round($arr['jifenbao']-$tradedata['jifenbao'],2);
						$arr['jifen']=round($arr['jifen']-$tradedata['jifen'],2);
						$arr['real_pay_fee']=round($arr['real_pay_fee']-$tradedata['real_pay_fee'],2);
						if($arr['jifenbao']>=1){
							$buchong=1;
						}
					}
				}
				else{
					if(isset($this->trade_chongfu[$arr['trade_id']]) || ($arr[$time_field]!=$tradedata[$time_field] && $arr[$time_field]!='' && $arr[$time_field]!=NULL && $tradedata[$time_field]!='' && $tradedata[$time_field]!=NULL)){
						$this->duoduo->insert_select('trade_time',array('trade_id'=>$tradedata['trade_id'],'status'=>$tradedata['status'],'time'=>$tradedata[$time_field]),'trade_id="'.$tradedata['trade_id'].'" and status="'.$tradedata['status'].'" and time="'.$tradedata[$time_field].'"');
						//第一次是一条，第二次是一条，时间不同，此时trade_chongfu是空的，所以要把当前这条赋值给trade_chongfu
						if(!isset($this->trade_chongfu[$arr['trade_id']])){
							$this->trade_chongfu[$arr['trade_id']][]=$arr;
						}
						$_arr=array('item_num'=>0,'commission'=>0,'fxje'=>0,'jifenbao'=>0,'jifen'=>0,'real_pay_fee'=>0);
						foreach($this->trade_chongfu[$arr['trade_id']] as $row){
							$time=$row[$time_field];
							$id=$this->duoduo->insert_select('trade_time',array('trade_id'=>$row['trade_id'],'status'=>$row['status'],'time'=>$time),'trade_id="'.$row['trade_id'].'" and status="'.$row['status'].'" and time="'.$time.'"');
							if($id>0){
								$_arr['item_num']+=$row['item_num'];
								$_arr['commission']+=$row['commission'];
								$_arr['fxje']+=$row['fxje'];
								$_arr['jifenbao']+=$row['jifenbao'];
								$_arr['jifen']+=$row['jifen'];
								$_arr['real_pay_fee']+=$row['real_pay_fee'];
							}
						}
						if($_arr['item_num']>0 && $_arr['jifenbao']>=1){
							foreach($_arr as $k=>$v){
								$arr[$k]=$v;
							}	
							$buchong=1;
						}
					}	
				}

				if($buchong==1){
					$a=$this->complete_trade_arr($arr);
					$arr=$a['trade'];
					$user=$a['user'];
					$upData=array(
						array('f'=>'item_num','v'=>$arr['item_num'],'e'=>'+'),
						array('f'=>'commission','v'=>$arr['commission'],'e'=>'+'),
						array('f'=>'fxje','v'=>$arr['fxje'],'e'=>'+'),
						array('f'=>'jifenbao','v'=>$arr['jifenbao'],'e'=>'+'),
						array('f'=>'jifen','v'=>$arr['jifen'],'e'=>'+'),
						array('f'=>'real_pay_fee','v'=>$arr['real_pay_fee'],'e'=>'+'),
					);
					$this->duoduo->update('tradelist',$upData,'id="'.$tradedata['id'].'"');	
					if($arr['status']==5 && $arr['uid']>0){
						$this->duoduo->rebate($user,$arr,8,0);
					}
					return 4;
				}
				else{
					return 3;
				}
			}
		}
		else{
			if($arr['status']==4){  //失效订单不入库
				return 5;
			}
			$arr=$this->complete_trade_uid($arr);
			$arr['addtime'] = TIME;
			$tmp=$this->complete_trade_arr($arr);
			$arr=$tmp['trade'];
			$user=$tmp['user'];
			
            $insert_id = $this->duoduo->insert('tradelist', $arr);
			if($insert_id>0){
				//重复订单插入时间
				if(isset($this->trade_chongfu[$arr['trade_id']])){
					foreach($this->trade_chongfu[$arr['trade_id']] as $row){
						if($row['status']==2){
							$time=$row['create_time'];
						}
						elseif($row['status']==5){
							$time=$row['pay_time'];
						}
						$this->duoduo->insert_select('trade_time',array('trade_id'=>$row['trade_id'],'status'=>$row['status'],'time'=>$time),'trade_id="'.$row['trade_id'].'" and status="'.$row['status'].'" and time="'.$time.'"');
					}
				}
				$arr['id']=$insert_id;				
				if($arr['status']==5 && $arr['uid']>0){
                	$this->duoduo->rebate($user, $arr, 8); //8号明细，确认淘宝订单
				}
			}
            return 1;
		}
    }
	
	function up_trade($trade_id_former,$uid){
		$trade=$this->duoduo->select_all('tradelist','*','uid=0 && trade_id_former="'.$trade_id_former.'"');
		foreach($trade as $arr){
			$arr['addtime'] = TIME;
			$arr['uid']=$uid;
			$arr['category_id']=-3;
			$tmp=$this->complete_trade_arr($arr);
			$arr=$tmp['trade'];
			$user=$tmp['user'];
			$this->duoduo->update('tradelist',$arr,'id="'.$arr['id'].'"');
			if($arr['status']==5 && $arr['uid']>0){
               	$this->duoduo->rebate($user, $arr, 8); //8号明细，确认淘宝订单
			}
		}
	}
	
	function complete_trade_uid($trade){
		/*if($this->webset['taoapi']['auto_fanli']==0){
			return $trade;
		}*/
		$trade_id_uid_arr=$this->trade_id_uid_arr;
		if(!isset($trade[0])){
			$weidu=1;
			$trade=array($trade);
		}
		else{
			$weidu=2;
		}
		foreach($trade as $key=>$arr){
			if($arr['status']==4){
				continue;
			}

			$trade_id=$arr['trade_id_former'];
			$num_iid=$arr['num_iid'];
			$create_time=$arr['create_time'];
			$click_time=$arr['category_name'];
			$item_title=$arr['item_title'];
			$adzone_id=$arr['category_id'];
			$uid=0;
			if(isset($trade_id_uid_arr['a'.$trade_id]) && $trade_id_uid_arr['a'.$trade_id]>0){
				$uid=$trade_id_uid_arr['a'.$trade_id];
			}
			else{
				$a=$this->reg_trade_uid($trade_id,$num_iid,$click_time,$item_title,$adzone_id);
				if($a['uid']>0){
					$uid=$trade_id_uid_arr['a'.$trade_id]=$a['uid'];
					if(isset($this->trade_id_uid_arr2['a'.$trade_id])){
						$this->up_trade($trade_id,$uid);
						unset($this->trade_id_uid_arr2['a'.$trade_id]);
					}
				}
				else{
					$this->trade_id_uid_arr2['a'.$trade_id]=0;
				}
			}
			$trade[$key]['uid']=$uid;
			if($uid>0){
				$trade[$key]['category_id']=-2;
			}
		}
		$this->trade_id_uid_arr=$trade_id_uid_arr;
		if($weidu==1){
			$trade=$trade[0];
		}
		return $trade;
	}
	
	function complete_trade_arr($arr){  //完善返利，同时检测会员是否存在
		$user_id=0;
		$arr['checked']=0;
		if($arr['uid']>0){
			$user_id=$arr['uid'];
			$user=$this->duoduo->select('user','*','id="'.$user_id.'"');
			if(empty($user)){
				$user_id=0;
				$user['type']=0;
			}
			
			if($arr['status']==5){
				$arr['checked']=2;
			}
			else{
				$arr['checked']=3;
			}
		}
		else{
			$user=array();
			$user['type']=0;
		}
				
		$re=$this->duoduo->use_fanlibl($user_id,$num_iid,$arr['real_pay_fee'],$create_time);
		if($re>0){
			$arr['fxje']=fenduan($re,$this->webset['fxbl'],$user['type']);
		}
		else{
			$arr['fxje']=fenduan($arr['commission'],$this->webset['fxbl'],$user['type']);
		}
		if($user['id']>0){
			$arr['fxje']=fanli_text($arr['fxje'],$user,$this->webset,1);
			$arr['jifenbao']=jfb_data_type($arr['fxje'] * TBMONEYBL);
			$arr['jifen']=(int)($arr['fxje']*$this->webset['jifenbl']);	
		}
		$arr['outer_code']=$arr['uid']=$user_id;
		return array('trade'=>$arr,'user'=>$user);
	}
	
	function reg_trade_uid($trade_id,$num_iid,$create_time,$item_title,$adzone_id){
		$uid=0;
		$alimama_plugin=dd_get_cache('plugin/alimama');
		if(is_array($alimama_plugin) && $alimama_plugin['user_adzone']==1){
			$uid=(int)$this->duoduo->select('plugin_alimama_adzoneId','uid','adzone_id="'.$adzone_id.'"');
		}
		if($uid>0){
			$_re='广告位匹配';
		}
		else{
			$trade_uid6=substr($trade_id,-6,6);
			$trade_uid4=substr($trade_id,-4,6);
			if(HOUWEI==1){
				$uid=$this->duoduo->select('trade_uid','uid','trade_uid="'.$trade_uid4.'" or trade_uid="'.$trade_uid6.'" order by id desc');	
			}
			else{
				$uid=$this->duoduo->select('trade_uid','uid','trade_uid="'.$trade_uid4.'"');
			}
	
			if($uid!=''){
				$uid=preg_replace('/^,/','',$uid);
				$uid=preg_replace('/,$/','',$uid); //防止出现数据库数据错误，开头和结尾有逗号
				$uid_step1=explode(',',$uid);
			}
			else{
				$uid_step1=array();
			}
			
			$uid=0;
			$where='1=1';
			$t=(int)$this->webset['taoapi']['auto_fanli_plan']['time'];
			if($t>0){
				$st=date("Y-m-d H:i:s",strtotime($create_time." -".$t." second"));
				$et=date("Y-m-d H:i:s",strtotime($create_time." +".$t." second"));
				$where.=' and day>"'.$st.'" and day<"'.$et.'"';
			}
			if($this->webset['taoapi']['auto_fanli_plan']['equal']==1){
				$where.=' and (iid="'.$num_iid.'" or (keyword<>"" and LOCATE(`keyword` , "'.$item_title.'")))';
			}
			$buy_log=$this->duoduo->select_all('buy_log','*',$where);
			if(!empty($buy_log)){
				$_buy_log=array();
				if($this->webset['taoapi']['auto_fanli_plan']['equal']==1){
					$pre=$this->webset['taoapi']['auto_fanli_plan']['per'];
					$pre=round($pre/100,2);
					foreach($buy_log as $row){
						if($row['iid']!='' && $row['iid']!=0 && $row['iid']==$num_iid){
							$_re='商品匹配 时间差'.abs(strtotime($create_time)-strtotime($row['day'])).'秒';
							$row['miaoshu']=$_re;
							$_buy_log[$row['uid']]=$row;
						}
						elseif($row['keyword']!='' && utf8_count($item_title,$row['keyword'])>=$pre){
							$_re='搜索匹配 时间差'.abs(strtotime($create_time)-strtotime($row['day'])).'秒';
							$row['miaoshu']=$_re;
							$_buy_log[$row['uid']]=$row;
						}
					}
				}
				$buy_log=$_buy_log;
			}
			if(count($buy_log)==1){
				$t=array_pop($buy_log);
				$uid=$t['uid'];
				if($this->webset['taoapi']['auto_fanli_plan']['level_force']==1){
					if(!in_array($uid,$uid_step1)){
						$uid=0;
					}
					else{
						$_re=$_re.'+后位匹配';
					}	
				}
				else{
					if(count($uid_step1)>0 && !in_array($uid,$uid_step1)){
						$uid=0;
					}
				}
			}
			elseif(count($buy_log)>1){
				$_buy_log=array();
				foreach($buy_log as $k=>$row){
					if(in_array($row['uid'],$uid_step1)){
						$_buy_log[]=$row['uid'];
						$_re=$row['miaoshu'];
					}
				}
				if(count($_buy_log)==1){
					$uid=$_buy_log[0];
					$_re=$_re.'+后位匹配';
				}
			}
			
			if($uid==0 && count($uid_step1)==1 && $this->webset['taoapi']['auto_fanli_plan']['trade_uid_force']==1){
				$_re='后位强匹配';
				$uid=$uid_step1[0];	
			}
		}

		if($uid>0){
			$this->duoduo->trade_uid($uid,$trade_id);
			$this->duoduo->insert_select('tradelist2',array('trade_id'=>$trade_id,'reason'=>$_re),'trade_id="'.$trade_id.'"');
			return array('uid'=>$uid,'trade_id'=>$trade_id);
		}
		else{
			return array('uid'=>0,'trade_id'=>0);
		}
	}
}
?>