<?php
/**
 * ============================================================================
 * 版权所有 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
if($_GET['sub']!=''){
	$page_arr=array();
	$page_arr['sub']=1;
	$reg_time=$page_arr['reg_time']=$_GET['reg_time'];
	$level=$page_arr['level']=(int)$_GET['level'];
	$trade_time=$page_arr['trade_time']=$_GET['trade_time'];
	$pagesize=$page_arr['size']=$_GET['size']>0?(int)$_GET['size']:100;
	$id=$_GET['id']?(int)$_GET['id']:0;
	$num=$page_arr['num']=$_GET['num'];

	$where='id >'.$id.' and search=0';
	if($level>0){
		$where.=' and level>="'.$level.'"';
	}
	if(!empty($reg_time)){
		$where.=' and regtime<="'.$reg_time.'"';
	}
	$row=$duoduo->select_all('user','id',$where.' limit '.$pagesize);
	$id_arr=array();
	foreach($row as $v){
		$uid=$v['id'];
		if(!empty($trade_time)){
			$id=$duoduo->select('tradelist','id','uid ='.$uid.' and create_time <="'.$trade_time.'"');
		}else{
			$id=1;
		}
		if($id>0){
			$id_arr[]=$uid;
			$num++;
		}
		$page_arr['id']=$uid;
	}
	if(!empty($id_arr)){
		$ids=implode($id_arr,',');
		$duoduo->update('user',array('search'=>1),'id IN('.$ids.')',0);
	}
	$page_arr['num']=$num;
	if(count($row)<$pagesize){
		if($num>0){
			$str='批量设置返利权限完成，总共处理'.$num.'。<a href="'.u('database','permission').'">[返回]</a>';
		}else{
			$str='暂无数据需要处理';
		}
		PutInfo(date("H:i:s").' '.$str);
	}else{
		PutInfo(date("H:i:s").' 批量设置返利权限中，已处理'.$num.'个<br/><br/><img src="../images/wait2.gif" />',u(MOD,ACT,$page_arr));
	}
}