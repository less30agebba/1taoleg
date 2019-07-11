<?php //多多
return array (
  'admin_nav' => 
  array (
    'index' => 
    array (
      'title' => '基本设置',
    ),
    'list' => 
    array (
      'title' => '待入库商品',
    ),
    'url_1' => 
    array (
      'title' => '查看教程',
      'url' => 'http://www.taoqueqiao.com/help/index-3.html#69',
    ),
    'url_2' => 
    array (
      'title' => '【淘鹊桥】商品推送',
      'url' => 'http://www.taoqueqiao.com',
    ),
    'url_3' => 
    array (
      'title' => '【查淘客】佣金助手',
      'url' => 'http://www.chataoke.com',
    ),
  ),
  'admin_auto' => 
  array (
    'index' => 1,
    'list' => 1,
  ),
  'table' => 
  array (
    'queqiao' => 
    array (
      'id' => 'int(11) NOT NULL auto_increment',
      'cid' => 'int(11) NOT NULL default "0"',
      'code' => 'varchar(50) default NULL',
      'data_id' => 'bigint(12) NOT NULL',
      'title' => 'varchar(100) NOT NULL',
      'content' => 'text default NULL',
      'img' => 'varchar(255) NOT NULL',
      'url' => 'varchar(255) default NULL',
      'price' => 'double(10,2) NOT NULL default "0.00"',
      'discount_price' => 'double(10,2) NOT NULL default "0.00"',
      'shouji_price' => 'double(10,2) NOT NULL default "0.00"',
      'fanli_bl' => 'double(4,2) NOT NULL default "0.00"',
      'sell' => 'int(11) default "0"',
      'goods_attribute' => 'text default NULL',
      'laiyuan' => 'varchar(10) default NULL',
      'laiyuan_type' => 'tinyint(1) default "0"',
      'tg_url' => 'text default NULL',
      'starttime' => 'int(11) NOT NULL default "0"',
      'endtime' => 'int(11) NOT NULL default "0"',
      'price_man' => 'double(10,2) NOT NULL default "0.00"',
      'price_jian' => 'double(10,2) NOT NULL default "0.00"',
      'lq_url' => 'text default NULL',
      'addtime' => 'int(11) NOT NULL default "0"',
      'quan_total' => 'int(11) default "0"',
      'quan_surplus' => 'int(11) default "0"',
      'quan_receive' => 'int(11) default "0"',
      'quan_condition' => 'varchar(255) default NULL',
      'quan_stime' => 'int(11) default "0"',
      'quan_etime' => 'int(11) default "0"',
	  'quan_price' => 'double(10,2) NOT NULL default "0.00"',
      'duoduo_table_index' => 'PRIMARY KEY  (`id`),KEY `quan_stime` (`quan_stime`),KEY `quan_etime` (`quan_etime`)',
    ),
  ),
  'need_include' => 1,
  'debug' => 0,
);
?>