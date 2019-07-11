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
if (!defined('ADMIN')) {
    exit('Access Denied');
}

$id=(int)$_GET['id'];
$username=$_GET['username'];
$re=1;
if($username==''){
	$re='会员不能为空';
}
else{
	$user=$duoduo->select('user','*','ddusername="'.$username.'"');
	if(empty($user)){
		$re='会员不存在';
	}
	else{
		$trade=$duoduo->select('tradelist','*','id="'.$id.'"');
		if(empty($trade)){
			$re='订单不存在';
		}
		elseif($trade['uid']==0){
			$re='该订单无会员';
		}elseif($trade['uid']==$user['id']){
			$re='新会员不能是原会员';
		}
		elseif($trade['status']!=5){
			$duoduo->update('tradelist',array('uid'=>$user['id'],'outer_code'=>$user['id']),'id="'.$id.'"');
		}
		else{
			$duoduo->refund($id,1);
			$duoduo->rebate($user,$trade,8);
		}
	}
}
echo $re;
?>