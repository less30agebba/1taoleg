<?php //多多

if(!defined('PLUGIN_UPDATE')){
	exit('Access Denied');
}
if($do=='update'){
	$duoduo->query("ALTER TABLE `".BIAOTOU."plugin_queqiao` ADD COLUMN `price_man`  double(10,2) NULL DEFAULT 0.00 ;");
	$duoduo->query("ALTER TABLE `".BIAOTOU."plugin_queqiao` ADD COLUMN `price_jian`  double(10,2) NULL DEFAULT 0.00 ;");
	$duoduo->query("ALTER TABLE `".BIAOTOU."plugin_queqiao` ADD COLUMN `quan_price`  double(10,2) NULL DEFAULT 0.00 ;");
	$duoduo->query("ALTER TABLE `".BIAOTOU."goods` ADD COLUMN `quan_price`  double(10,2) NULL DEFAULT 0.00 ;");
	$duoduo->query("ALTER TABLE `".BIAOTOU."plugin_queqiao` ADD COLUMN `lq_url`  text default NULL;");
	$duoduo->query("ALTER TABLE `".BIAOTOU."plugin_queqiao` ADD COLUMN `content`  text default NULL;");
	$sql="ALTER TABLE `".BIAOTOU."plugin_queqiao` ADD `quan_total` int(11) DEFAULT '0',ADD `quan_surplus` int(11) DEFAULT '0',ADD `quan_receive` int(11) DEFAULT '0',ADD `quan_condition` varchar(255) DEFAULT NULL,ADD `quan_stime` int(11) DEFAULT '0',ADD `quan_etime` int(11) DEFAULT '0',ADD INDEX ( `quan_stime` ),ADD INDEX ( `quan_etime` )";
	$duoduo->query($sql);
}
?>