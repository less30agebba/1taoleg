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
$trade=$duoduo->select('tradelist','*','id="'.$id.'"');
if($trade['category_id']==-1){
	echo '会员找回';
}
elseif($trade['category_id']==-2){
	echo $duoduo->select('tradelist2','reason','trade_id="'.$trade['trade_id_former'].'"');
}
else{
	echo '其他';
}
?>