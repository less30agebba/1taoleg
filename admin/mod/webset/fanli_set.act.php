<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

function _trade_uid($uid,$trade_uid,$duoduo){
	if($trade_uid>0 && $uid>0){
		$user=$duoduo->select('user','id,trade_uid','id="'.$uid.'"');
		if($user['trade_uid']==0) $user['trade_uid']='';
		if($user['trade_uid']!=''){
			$trade_uid_arr=explode(',',$user['trade_uid']);
		}
		else{
			$trade_uid_arr=array();
		}
		if(!in_array($trade_uid,$trade_uid_arr)){
			$trade_uid_arr[]=$trade_uid;
			$data=array('trade_uid'=>implode(',',$trade_uid_arr));
			$duoduo->update('user',$data,'id="'.$uid.'"');
		}
		
		$b=$duoduo->select('trade_uid','*','trade_uid="'.$trade_uid.'"');
		if($b['id']>0){
			$uid_arr=explode(',',$b['uid']);
			if(!in_array($uid,$uid_arr)){
				$data=array('uid'=>$b['uid'].','.$uid);
				$duoduo->update('trade_uid',$data,'id="'.$b['id'].'"');
			}
		}
		else{
			$data=array('trade_uid'=>$trade_uid,'uid'=>$uid);
			$duoduo->insert('trade_uid',$data);
		}
	}
	unset($duoduo);
}

if($_GET['uphouwei']==1){
	$pagesize=1000;
	$page=$_GET['page']?$_GET['page']:1;
	$fromnum=($page-1)*$pagesize;
	$id=(int)$_GET['id'];
	if($id>0){
		$where_id=' and id<"'.$id.'"';
	}
	else{
		$where_id='';
	}	
	if($page==1){
		//$duoduo->delete('trade_uid','trade_uid<=9999');
		$duoduo->query('ALTER TABLE `'.BIAOTOU.'trade_uid` CHANGE  `trade_uid`  `trade_uid` VARCHAR( 11 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
		//$duoduo->update('user',array('trade_uid'=>''),'1=1',0);
	}
	
	$trade=$duoduo->select_all('tradelist','id,trade_id,uid,create_time','uid>0 and create_time>"2017-04-20 00:00:00" '.$where_id.' order by id desc limit '.$pagesize);
	if(empty($trade)){
		$duoduo->set_webset('HOUWEI',1);
		jump(u(MOD,ACT),'采集完毕');
	}
	else{
		$tmp=array();
		foreach($trade as $row){
			$trade_id=preg_replace('/_\d+/','',$row['trade_id']);
			$uid=$row['uid'];
			if(!isset($tmp[$uid])){
				$tmp[$uid]=array();
			}
			$trade_uid=substr($trade_id,-6,6);
			if(!in_array($trade_uid,$tmp[$uid])){
				$tmp[$uid][]=$trade_uid;
			}
		}
		$create_time=$row['create_time'];
		$id=$row['id'];
		file_put_contents(dirname(__FILE__).'/a.txt',$id);
		foreach($tmp as $uid=>$row){
			foreach($row as $trade_uid){
				_trade_uid($uid,$trade_uid,$duoduo);	
			}
		}
		$page++;
		$jump_url=u(MOD,ACT,array('uphouwei'=>1,'page'=>$page,'id'=>$id));
		PutInfo("接下来处理".$page.'页，id号为：'.$id.'，订单时间'.$create_time.'<br/><br/><img src="../images/wait2.gif" />',$jump_url);	
	}
}

if($_GET['rehouwei']==1){
	$pagesize=50;
	$page=$_GET['page']?$_GET['page']:1;
	$id=(int)$_GET['id'];
	$fromnum=($page-1)*$pagesize;
	$trade_uid=$duoduo->select_all('trade_uid','id,trade_uid,uid','LENGTH(trade_uid)=6 and id>"'.$id.'" order by id asc');
	if(empty($trade_uid)){
		jump(u(MOD,ACT),'纠错完毕');
	}
	else{
		foreach($trade_uid as $row){
			$uid_arr=explode(',',$row['uid']);
			foreach($uid_arr as $uid){
				$trades=$duoduo->select_all('tradelist','trade_id_former','uid="'.$uid.'" and create_time>"2017-04-20 00:00:00" order by id desc limit 500');
				$houwei_arr=array();
				foreach($trades as $arr){
					$houwei=substr($arr['trade_id_former'],-6,6);
					if(!in_array($houwei,$houwei_arr)){
						$houwei_arr[]=$houwei;
					}
				}
				if(!in_array($row['trade_uid'],$houwei_arr)){
					$duoduo->trade_uid($uid,$row['trade_uid'],'del');
				}
				foreach($houwei_arr as $v){
					$duoduo->trade_uid($uid,$v,'add');
				}
			}
			$id=$row['id'];
		}
		$page++;
		$jump_url=u(MOD,ACT,array('rehouwei'=>1,'page'=>$page,'id'=>$id));
		PutInfo("接下来处理".$page.'页<br/><br/><img src="../images/wait2.gif" />',$jump_url);
	}
}

if(isset($_POST['sub']) && $_POST['sub']!=''){	
	$_POST['jifenbl']=round($_POST['jifenbl']/100,2);
	
	$_POST['taoapi']['auto_fanli']=(int)$_POST['taoapi']['auto_fanli'];
	
	for($i=0;$i<4;$i++){
		$_POST['fxbl'][$i]=(string)round($_POST['fxbl'][$i]/100,2);
		$_POST['mallfxbl'][$i]=(string)round($_POST['mallfxbl'][$i]/100,2);
		$_POST['paipaifxbl'][$i]=(string)round($_POST['paipaifxbl'][$i]/100,2);
	}

	$diff_arr=array('level_name','level_dengji','sub','from');
	$_POST=logout_key($_POST, $diff_arr);
	foreach($_POST as $k=>$v){
		if(is_array($v)){
			$post_arr = $duoduo->webset_part($k,$v);
			$v=$post_arr[$k];
		}
		$duoduo->set_webset($k,$v);
	}
	$duoduo->webset(); //配置缓存
	jump(-1,'保存成功');
}
else{
	ksort($webset['fxbl']);
	ksort($webset['mallfxbl']);
	ksort($webset['paipaifxbl']);
}