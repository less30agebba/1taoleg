<?php
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

$ids_arr=$_GET['ids'];
$table=$_GET['table']?$_GET['table']:MOD;
if($ids_arr==''){
    jump('-1','无效参数');
}
else{
	$d=$duoduo->get_table_struct(MOD);
	$ids=implode($ids_arr,',');
	$do=$_GET['do'];
	
	if($do=='' && empty($d['del'])){
		$do='del';
	}
	if($do=='' && !empty($d['del'])){
		$duoduo->update($table,array('del'=>1),'id IN('.$ids.')',DEFAULT_SORT);
		$reycle=1;
		$word='已经转移至回收站';
	}
	elseif($do=='del'){
		foreach($ids_arr as $id){
			$duoduo->refund($id,2);
			$duoduo->delete('tradelist','id="'.$id.'"');
			$duoduo->delete('tradelist2','id="'.$id.'"');
		}
		$word='删除完成';
	}
	elseif($do=='reset'){
		$duoduo->update($table,array('del'=>0),'id IN('.$ids.')',DEFAULT_SORT);
		$word='还原完成';
	}
	$error=mysql_error();
    if(empty($error)){
		include(ADMINROOT.'/mod/public/mod.update.php');
        if($reycle==1){
			$to=$_SERVER['HTTP_REFERER'].'&reycle=1';
		}
		else{
			$to=-1;
		}
        jump($to,$word);
    }
    else{
        echo $error;
    }
}
?>