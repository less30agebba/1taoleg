<?php //多多
if(!defined('INDEX')){
	exit('Access Denied');
}
function insert_all($table, $data, $alert = 0){
	global $duoduo;
		foreach($data as $key=>$vo){
			foreach($vo as $k=>$v){
				if($k=='id'){
					unset($vo['id']);
					continue;
				}
				$fields_arr[$k]=1;
				$vo[$k]="'".$duoduo->real_escape_string($v)."'";
			}
			$data[$key]='('.implode(',',$vo).')';
		}
		$table_struct=$duoduo->get_table_struct($table);
		echo mysql_error();
		unset($table_struct['id']);
		unset($table_struct['duoduo_table_index']);
		foreach($fields_arr as $key=>$vo){
			foreach($table_struct as $kk=>$vo){
				if($key==$kk){
					$fields[]='`'.$key.'`';
				}	
			}
		}		
		$sql="insert into `".$duoduo->BIAOTOU.$table."` (".implode(',',$fields).") VALUES ".implode(',',$data);
		$return=$duoduo->query($sql);
		if($alert){
			echo $sql;
		}
		echo mysql_error();
		return $return;
	}