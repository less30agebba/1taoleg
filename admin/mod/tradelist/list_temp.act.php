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
if($_GET['do']=='daoru'){
	define('IMPORT_ONLINE',1);
	$pagesize=$_GET['pagesize']?$_GET['pagesize']:100;
	$page=$_GET['page']?$_GET['page']:1;
	$update_num=(int)$_GET['update_num'];
	$increase_num=(int)$_GET['increase_num'];
	$insert_num=(int)$_GET['insert_num'];
	
	include_once(DDROOT.'/comm/trade.class.php');
	$trade=new trade($duoduo);
	
	$file=$_SESSION['xlsfile'];
	$file2=$_SESSION['trade_chongfu'];
	
	$data=file_get_contents($file);
	$data=dd_json_decode($data,1);
	$data2=file_get_contents($file2);
	$data2=dd_json_decode($data2,1);
	
	$i=0;
	foreach($data as $k=>$row){
		if($i==$pagesize){
			break;
		}
		$re=$trade->trade_ruku($row);
		if($re==2){
			$update_num++;
		}
		elseif($re==1){
			$insert_num++;
		}
		elseif($re==4){
			$increase_num++;
		}
		unset($data[$k]);
		$i++;
	}
	
	$j=0;
	foreach($data2 as $k=>$arr){
		if($j==$pagesize){
			break;
		}
		foreach($arr as $row){
			if($row['status']==2){
				$time_field='create_time';
			}
			else{
				$time_field='pay_time';
			}
			$time=$row[$time_field];
			$duoduo->insert_select('trade_time',array('trade_id'=>$row['trade_id'],'status'=>$row['status'],'time'=>$time),'trade_id="'.$row['trade_id'].'" and status="'.$row['status'].'" and time="'.$time.'"');
		}
		unset($data2[$k]);
		$j++;
	}
	
	if($i==0){
		unlink($file);
		unlink($file2);
		PutInfo('导入完成：插入'.$insert_num.'，更新'.$update_num.'，补充'.$increase_num);
	}
	else{
		$data=dd_json_encode($data);
		file_put_contents($file,$data);
		$data2=dd_json_encode($data2);
		file_put_contents($file2,$data2);
		$page++;
		$url=u(MOD,ACT,array('page'=>$page,'update_num'=>$update_num,'insert_num'=>$insert_num,'increase_num'=>$increase_num,'do'=>'daoru'));
		PutInfo('当前页码['.($page-1).']插入'.$insert_num.'，更新'.$update_num.'，补充'.$increase_num.'<br/><br/><img src="../images/wait2.gif" />',$url,1);
	}
	exit;	
}