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
$url='http://api.k780.com:88/?app=life.time&appkey=10003&sign=b59bc3ef6191eb9f747dd4e83c99f2a4&format=json';
$a=dd_get_json($url);
$beijing_time=$a['result']['timestamp'];
if($beijing_time==0){
	$beijing_time=time();
}

if($_POST['sub']!=''){
    $a=$beijing_time-time();
	$data=array('val'=>$a);
	$duoduo->update('webset',$data,'var="corrent_time"');
	$duoduo->webset(1);
	jump(-1,'设置完毕');
}
?>