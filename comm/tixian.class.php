<?php
class tixian{
	public $duoduo;
	public $webset;
	public $pid=0;
	public $phplock='';
	function __construct($duoduo){
		$this->duoduo=$duoduo;
		$this->webset=$duoduo->webset;
		unset($duoduo);
	}
	
	function __destruct(){
		if($this->phplock!=''){
			$this->phplock->unlock();	
		}
		unset($this->duoduo);
	}
	
	function check($type){
		$duoduo=$this->duoduo;
		$dduser=$this->duoduo->dduser;
		$webset=$this->duoduo->webset;
		
		if(!defined('PLUGIN')){
			if ($webset['sms']['open'] == 1 && $webset['sms']['need_yz'] == 1 && $dduser['mobile_test'] == 0) {
				return array('s'=>0,'r'=>'请验证您的手机号码','do'=>'mobile');
			}	
		}
		
		if ($webset['tixian']['day']>0 && $webset['tixian']['day']>date("d")){
			return array('s'=>0, 'r'=>'亲，每月'.$webset['tixian']['day'].'号之后开放提现哦！');
		}	
		
		if ($type == 1) {
			if ($dduser['alipay'] == '') {
				return array('s'=>0,'r'=>'请设置您的支付宝账号信息','do'=>'caiwu');
			}
			if ($dduser['tbtxstatus'] == 1) {
				return array('s'=>0, 'r'=>'您的提现正在处理中');
			}
		}
		elseif ($type == 2) {
			if ($dduser['alipay'] == '' && $dduser['tenpay'] == '' && $dduser['bank_code'] == '') {
				return array('s'=>0,'r'=>'请设置您的支付宝账号信息','do'=>'caiwu');
			}
			if ($dduser['txstatus'] == 1) {
				return array('s'=>0, 'r'=>'您的提现正在处理中');
			}
		}
		
		if ($webset['tixian']['level'] > 0 && $webset['tixian']['level'] > $dduser['level']) {
			return array('s'=>0, 'r'=>'用户等级（' . $dduser['level'] . '）达到等级（' . $webset['tixian']['level'] . "）时方可提现");
		}
	
		if ($dduser['realname'] == '') {
			return array('s'=>0,'r'=>'请设置您的真实姓名','do'=>'caiwu');
		}
		return array('s'=>1);
	}
	
	function add($data){
		$duoduo=$this->duoduo;
		$dduser=$this->duoduo->dduser;
		$uid=$dduser['id'];
		
		include_once(DDROOT.'/comm/php_lock.class.php');
		$this->phplock=new phplock('tixian_'.$uid);
		if($this->phplock->status==0){  //存在同进程
			return array('s'=>0,'r'=>'并发太多，请稍后访问');
		}
		
		if ($data['mobile'] != '') {
			$mobile = (float)$data['mobile'];
		} else {
			$mobile = (float)$dduser['mobile'];
		}
		if ($dduser['alipay'] != '') {
			$alipay = $dduser['alipay'];
		} else {
			$alipay = $data['alipay'];
		}
		if ($dduser['realname'] != '') {
			$realname = $dduser['realname'];
		} else {
			$realname = $data['realname'];
		}
		if ($dduser['tenpay'] != '') {
			$tenpay = $dduser['tenpay'];
		} else {
			$tenpay = $data['tenpay'];
		}
		$type=(int)$data['type'];
		$money=(float)$data['money'];
		$remark=htmlspecialchars($data['remark']);
		$ddpassword = $data['ddpassword'];
		$tool = (int)$data['tool'];
		$bank_id=$data['bank_id'];
		$bank_code=$data['bank_code'];
		if ($dduser['ddpassword'] != md5($ddpassword) && $dduser['ddpassword'] != $ddpassword) {
			return array('s'=>0,'r'=>'密码错误');
		}
		
		$check=$this->check($type);
		if($check['s']==0){
			return $check;
		}
		
		$info=$this->info($type);
		extract($info);
		
		if( $money>$max_money){
			return array('s'=>0,'id'=>42,'r'=>'最多提取'.$max_money);
		}
		
		if ($money > $live_money) {
			return array('s'=>0,'id'=>42,'r'=>'最提取现'.$live_money);
		}
		
		if ($money < $tixian_limit) {
			return array('s'=>0,'id'=>42,'r'=>'最少提取'.$tixian_limit);
		}
		
		if ($txxz > 0 && zhengchu($money, $txxz) == 0) {
			return array('s'=>0,'id'=>42,'r'=>'必须是'.$txxz.'的整数倍');
		}
		
		$data = array (
			'uid' => $dduser['id'],'money' => $money,'addtime' => TIME,'ip' => get_client_ip(), 'realname' => $realname, 'remark' => $remark, 'mobile' => $mobile, 'status' => 0, 'type' => $type
		);
		
		$user_data=array();
		if ($type == 1) {
			if($alipay==''){
				return array('s'=>0,'r'=>'支付宝格式错误');
			}
			$data['code']=$alipay;
			if ($dduser['alipay'] == '') {
				$user_data[] = array (
					'f' => 'alipay',
					'e' => '=',
					'v' => $data['code']
				);
			}
			$money2 = (int) ($money * (100 / TBMONEYBL));
		}
		elseif ($type == 2) {
			$money2 = $money;
			$data['tool'] = $tool;
			if ($tool == 1) {
				if(reg_alipay($alipay)==0){
					return array('s'=>0,'r'=>'支付宝格式错误');
				}
				$data['code']=$alipay;
				if ($dduser['alipay'] == '') {
					$user_data[] = array (
						'f' => 'alipay',
						'e' => '=',
						'v' => $data['code']
					);
				}
			}
			elseif ($tool == 2) {
				if(reg_tenpay($tenpay)==0){
					return array('s'=>0,'r'=>'财付通格式错误');
				}
				$data['code']=$tenpay;
				if ($dduser['tenpay'] == '') {
					$user_data[] = array (
						'f' => 'tenpay',
						'e' => '=',
						'v' => $data['code']
					);
				}
			}
			elseif ($tool == 3) {
				if ($dduser['bank_name'] != '' && $dduser['bank_code'] != '') {
					$data['code'] = $dduser['bank_name'] . '|' . $dduser['bank_code'];
				}
				elseif ($bank_id > 0 && $bank_code != '') {
					$bank_name = $bank_arr[$bank_id];
					$data['code'] = $bank_name . '|' . $bank_code;
					$user_data[] = array (
						'f' => 'bank_name',
						'e' => '=',
						'v' => $bank_name
					);
					$user_data[] = array (
						'f' => 'bank_code',
						'e' => '=',
						'v' => $bank_code
					);
				} else {
					return array('s'=>0,'r'=>'银行格式错误');
				}
			}
		}
		
		$data['money2'] = $money2;

		$user_data[] = array (
			'f' => $tx_field,
			'v' => 1
		);
		$user_data[] = array (
			'f' => $money_field,
			'e' => '-',
			'v' => $money
		);
		$user_data[] = array (
			'f' => 'lasttixian',
			'e' => '=',
			'v' => TIME
		);

		if ($dduser['mobile'] == '' && $mobile != '') {
			$user_data[] = array (
				'f' => 'mobile',
				'e' => '=',
				'v' => $mobile
			);
		}
		
		$id=$duoduo->insert('tixian', $data);
		if($id>0){
			$duoduo->update('user', $user_data, 'id="' . $dduser['id'] . '"');
			$re=array('s'=>1,'r'=>'提取成功，等待审核');
		}
		else{
			$re=array('s'=>0,'r'=>'提现插入异常错误');
		}
		return $re;
	}
	
	function info($type){
		$dduser=$this->duoduo->dduser;
		$webset=$this->duoduo->webset;
		$bank = dd_get_cache('bank');
		foreach ($bank as $k => $row) {
			if ($row['name'] == $dduser['bank_name']) {
				$bank_id = $k;
			}
			$bank_arr[$k] = $row['name'];
		}
		
		if ($type == 1) {
			$tipword = '您申请的提现我们会打入您的支付宝账户，请仔细填写您的支付宝和对应姓名！支付宝规定集分宝提现一次最多'.JFB_TX_MAX;
			$txxz = $webset['tixian']['tbtxxz'];
			$tixian_limit = $webset['tixian']['tblimit'] ? $webset['tixian']['tblimit'] : 1;
			$live_money = $dduser['live_jifenbao'];
			$money_name = '集分宝';
			$unit = TBMONEY;
			$money_field = 'jifenbao';
			$tx_field = 'tbtxstatus';
		}
		elseif ($type == 2) {
			$tipword = '您申请的提现我们会打入您的支付宝或者银行账户，请仔细填写您的汇款信息，以免出错！';
			$txxz = $webset['tixian']['txxz'];
			$tixian_limit = $webset['tixian']['limit'] ? $webset['tixian']['limit'] : 0.01;
			$live_money = $dduser['live_money'];
			$money_name = '金额';
			$unit = '元';
			$money_field = 'money';
			$tx_field = 'txstatus';
		}
	
		if ($txxz > 0) {
			$max_money = $live_money - $live_money % $txxz;
		} else {
			$max_money = $live_money;
		}
		
		if($type == 1 && $max_money>JFB_TX_MAX){
			$max_money=JFB_TX_MAX;
		}
		
		return array('bank_arr'=>$bank_arr,'tipword'=>$tipword,'txxz'=>$txxz,'tixian_limit'=>$tixian_limit,'tipword'=>$tipword,'live_money'=>$live_money,'money_name'=>$money_name,'unit'=>$unit,'max_money'=>$max_money,'money_field'=>$money_field,'tx_field'=>$tx_field);
	}
	
	function chuli($id,$do='yes',$ddback=0,$api_ok='',$api_return=''){
		$duoduo=$this->duoduo;
		$data=array();
		$row=$duoduo->select('tixian as a,user as b','a.*,b.txstatus as user_status,b.tbtxstatus as user_tbstatus,b.ddusername,b.email,b.mobile as user_mobile,b.mobile_test','a.id="'.$id.'" and a.uid=b.id');
		$money=(float)$row['money'];
		$money2=(float)$row['money2'];
		$type=$row['type'];
		
		if($row['wait']==1 && $do=='yes' && $ddback==0 && $this->webset['tixian']['ddpay']==1){
			if(strpos($_SERVER['HTTP_REFERER'],'act=addedi')!==false){ //来源是提现处理页，返回错误状态
				return array('s'=>0,'r'=>$row['api_return']);
			}
			else{  //来源是提现列表页，返回正确状态（批量提现）
				return array('s'=>1,'r'=>$row);
			}
		}
		
		if($row['tool']==3){
			$txtool=$row['code'];
		}
		elseif($row['tool']==2){
			$txtool='财付通：'.$row['code'];


		}
		elseif($row['tool']==1){
			$txtool='支付宝：'.$row['code'];
		}

		if($row['status']!=0){
	    	return array('s'=>0,'r'=>'ID：'.$row['id'].'此订单状态不是待审核'); //数据错误
		}
		
		if($type==1){
			$alipay=$row['code'];
			$yitixian_f='tbyitixian';  //集分宝提现，已提现字段名
			$money_f='jifenbao';
			$txstatus_f='tbtxstatus';
			if($row['user_tbstatus']!=1) return array('s'=>0,'r'=>'ID：'.$row['id'].'会员集分宝提现不是提现中'); //数据错误
		}
		elseif($type==2){
			$yitixian_f='yitixian';  //金额提现，已提现字段名
			$money_f='money';
			$txstatus_f='txstatus';
			if($row['user_status']!=1) return array('s'=>0,'r'=>'ID：'.$row['id'].'会员金额提现不是提现中'); //数据错误
		}
	
		$user_data=array(array('f'=>$txstatus_f,'e'=>'=','v'=>0));  //不管提现处理的结果，会员的提现状态都是0
	
		$msg_data=array('uid'=>$row['uid'],'username'=>$row['ddusername'],'money'=>$money.($type==1?TBMONEY:'元'),'txtool'=>$txtool,'email'=>$row['email']);
	
		if($do=='yes'){
			if($ddback==1){
				if($api_ok=='' || $api_return==''){
					return array('s'=>0,'r'=>'参数错误'); //数据错误
				}
			}
			else{
				if($type==1 && $this->webset['tixian']['ddpay']==1){
					$ddopen=fs('ddopen');
					$ddopen->ini();
					$api=$ddopen->pay_jifenbao($alipay,$money2,$id,$row['realname'],$row['mobile']);
					$api_return=$api['r']?$api['r']:'未知错误';
					if($api['s']==1){
						$api_ok=1;
					}
					else{
						$api_ok=0;
					}
				}
				else{
					$api_ok=1;
					$api_return='';
				}
			}

			if($api_ok==1){
				unset($data);
				$data=array('uid'=>$row['uid'],$money_f=>-$money,'shijian'=>9,'source'=>$txtool,'relate_id'=>$row['id']);
				$duoduo->mingxi_insert($data);
				$txstatus=0;
				$msg=$duoduo->msg_insert($msg_data,2); //提现成功2号站内信
				unset($data);
				$data=array(array('f'=>'status','e'=>'=','v'=>'1'),array('f'=>'wait','e'=>'=','v'=>'0'),array('f'=>'api_return','e'=>'=','v'=>$api_return));
				$user_data[]=array('f'=>$yitixian_f,'e'=>'+','v'=>$row['money']);
				$user_data[]=array('f'=>'lasttixian','e'=>'=','v'=>TIME);
		
				if($this->webset['tixian']['hytxjl']>0){
		    		$user=$duoduo->select('user','ddusername,tjr,tjr_over,hytx','id="'.$row['uid'].'"');
					if($user['tjr_over']>0) $user['tjr']=$user['tjr_over'];
		    		if($user['tjr']>0 && $user['hytx']==0){
		        		$tjr_data=array('f'=>'money','e'=>'+','v'=>$this->webset['tixian']['hytxjl']);
						$duoduo->update_user_mingxi($tjr_data, (int)$user['tjr'],11,$user['ddusername']); //好友提现奖励，11号明细
						$duoduo->update('user',array('hytx'=>1),'id="'.$row['uid'].'"');
		    		}
				}
			}
			else{  //如果多多集分宝发放接口反馈错误码，会员和提现数据的状态不变
				unset($data);
				$data[]=array('f'=>'api_return','e'=>'=','v'=>$api_return);
				if($api['s']==2){ //等待发送中
					$data[]=array('f'=>'wait','e'=>'=','v'=>1); 
				}
				$duoduo->update('tixian',$data,'id="'.$id.'"');
				
				if(strpos($_SERVER['HTTP_REFERER'],'act=addedi')!==false){ //来源是提现处理页，返回错误状态
					return array('s'=>0,'r'=>$api_return);
				}
				else{  //来源是提现列表页，返回正确状态（批量提现）
					return array('s'=>1,'r'=>$row);
				}
			}
		}
		elseif($do=='no'){
			if($row['wait']==1){
				$ddopen=fs('ddopen');
				$ddopen->ini();
				$api=$ddopen->cancel_jifenbao($id);
			}
			$user_data[]=array('f'=>$money_f,'e'=>'+','v'=>$money);
			$msg_data['why']=$_POST['why'];
			$msg=$duoduo->msg_insert($msg_data,3); //提现失败3号站内信
			$data[]=array('f'=>'status','e'=>'=','v'=>'2');
			$data[]=array('f'=>'why','e'=>'=','v'=>$_POST['why']);
		}
		$data[]=array('f'=>'dotime','e'=>'=','v'=>TIME);
		$duoduo->update('tixian',$data,'id="'.$id.'"');
		$duoduo->update('user',$user_data,'id="'.$row['uid'].'"');
		$a=array('s'=>1,'r'=>$row);
		return $a;
	}
}
?>