<?php exit;?>
DROP TABLE IF EXISTS `duoduo_bankuai`;
CREATE TABLE `duoduo_bankuai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_color` varchar(20) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `bankuai_tpl` varchar(255) DEFAULT NULL,
  `fenlei` int(11) DEFAULT '0',
  `api_cid` int(11) DEFAULT '0',
  `baoming` tinyint(4) DEFAULT '1',
  `bankuai_img` varchar(255) DEFAULT NULL,
  `bankuai_desc` varchar(255) DEFAULT NULL,
  `tuijian` tinyint(1) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `web_cid` text,
  `sort` int(11) DEFAULT '0',
  `mobile_status` int(1) NOT NULL DEFAULT '0',
  `mobile_logo` varchar(250) NOT NULL,
  `mobile_title` varchar(100) NOT NULL,
  `del` tinyint(1) DEFAULT '0',
  `quanju` tinyint(1) DEFAULT '0',
  `yugao` tinyint(1) DEFAULT '0',
  `data_from` tinyint(1) DEFAULT '0',
  `dan_api` varchar(255) DEFAULT NULL,
  `yun_cid` text,
  `time_type` tinyint(1) DEFAULT '0',
  `zj_stime` int(11) DEFAULT '0',
  `gd_stime` tinyint(1) DEFAULT '0',
  `gd_minute` varchar(255) DEFAULT '0',
  `etime` int(11) DEFAULT '0',
  `yugao_time` varchar(255) DEFAULT NULL,
  `huodong_time` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sys` tinyint(1) DEFAULT '0',
  `api_sort` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_bankuai` (`id`,`title`,`code`,`banner_img`,`banner_color`,`bg_color`,`bankuai_tpl`,`fenlei`,`api_cid`,`baoming`,`bankuai_img`,`bankuai_desc`,`tuijian`,`addtime`,`status`,`web_cid`,`sort`,`mobile_status`,`mobile_logo`,`mobile_title`,`del`,`quanju`,`yugao`,`data_from`,`dan_api`,`yun_cid`,`time_type`,`zj_stime`,`gd_stime`,`gd_minute`,`etime`,`yugao_time`,`huodong_time`,`url`,`sys`,`api_sort`) VALUES('3','精选好货','shijiu','images/shijiu.png','#fbec85','','315','1','0','0','template/default/inc/images/baoming/shijiukuai.gif','<dl>\r\n	<dd>\r\n		1、20元内的商品；\r\n	</dd>\r\n	<dd>\r\n		2、大部分地区包邮；\r\n	</dd>\r\n	<dd>\r\n		3、要求品牌质量有保证、性价比高,符合大众要求\r\n	</dd>\r\n	<dd>\r\n		4、历史价格大于活动价格\r\n	</dd>\r\n</dl>','1','1429000919','1','a:8:{i:10006;s:5:\"10006\";i:10005;s:5:\"10005\";i:10004;s:5:\"10004\";i:10003;s:5:\"10003\";i:10002;s:5:\"10002\";i:10001;s:5:\"10001\";i:10007;s:5:\"10007\";i:10008;s:5:\"10008\";}','2','1','m/template/default/inc/images/shijiu.png','','0','1','1','0','a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}','a:9:{i:10006;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10005;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10004;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10003;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10002;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10001;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10007;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10008;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10010;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}}','0','0','0','','30','12:00','9','','1','total_sales_des');
INSERT INTO `duoduo_bankuai` (`id`,`title`,`code`,`banner_img`,`banner_color`,`bg_color`,`bankuai_tpl`,`fenlei`,`api_cid`,`baoming`,`bankuai_img`,`bankuai_desc`,`tuijian`,`addtime`,`status`,`web_cid`,`sort`,`mobile_status`,`mobile_logo`,`mobile_title`,`del`,`quanju`,`yugao`,`data_from`,`dan_api`,`yun_cid`,`time_type`,`zj_stime`,`gd_stime`,`gd_minute`,`etime`,`yugao_time`,`huodong_time`,`url`,`sys`,`api_sort`) VALUES('4','热门商品','zhidemai','images/zhidemai.png','#fdf528','','315','1','0','0','template/default/inc/images/baoming/zhidemai.gif','<dl>\r\n	<dd>\r\n		1、接受各大商城商品（如京东，唯品会）；\r\n	</dd>\r\n	<dd>\r\n		2、商品描述想尽清晰；\r\n	</dd>\r\n	<dd>\r\n		3、要求品牌质量有保证、性价比高,符合大众要求\r\n	</dd>\r\n	<dd>\r\n		4、历史价格大于活动价格\r\n	</dd>\r\n</dl>','1','1428734258','1','a:8:{i:10006;s:5:\"10006\";i:10005;s:5:\"10005\";i:10004;s:5:\"10004\";i:10003;s:5:\"10003\";i:10002;s:5:\"10002\";i:10001;s:5:\"10001\";i:10007;s:5:\"10007\";i:10008;s:5:\"10008\";}','3','1','m/template/default/inc/images/zhidemai.png','','0','0','0','0','a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}','a:8:{i:10006;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10005;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10004;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10003;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10002;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10001;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10007;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10008;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}}','0','0','0','','30','16:00','0','','1','total_sales_des');
INSERT INTO `duoduo_bankuai` (`id`,`title`,`code`,`banner_img`,`banner_color`,`bg_color`,`bankuai_tpl`,`fenlei`,`api_cid`,`baoming`,`bankuai_img`,`bankuai_desc`,`tuijian`,`addtime`,`status`,`web_cid`,`sort`,`mobile_status`,`mobile_logo`,`mobile_title`,`del`,`quanju`,`yugao`,`data_from`,`dan_api`,`yun_cid`,`time_type`,`zj_stime`,`gd_stime`,`gd_minute`,`etime`,`yugao_time`,`huodong_time`,`url`,`sys`,`api_sort`) VALUES('1','猜你喜欢','jiu','images/jiu.png','#fff9bc','none','315','1','0','0','template/default/inc/images/baoming/jiukuai.gif','<dl>\r\n	<dd>\r\n		1、10元内的商品；\r\n	</dd>\r\n	<dd>\r\n		2、大部分地区包邮；\r\n	</dd>\r\n	<dd>\r\n		3、要求品牌质量有保证、性价比高,符合大众要求\r\n	</dd>\r\n	<dd>\r\n		4、历史价格大于活动价格\r\n	</dd>\r\n</dl>','1','1428989767','1','a:8:{i:10006;s:5:\"10006\";i:10005;s:5:\"10005\";i:10004;s:5:\"10004\";i:10003;s:5:\"10003\";i:10002;s:5:\"10002\";i:10001;s:5:\"10001\";i:10007;s:5:\"10007\";i:10008;s:5:\"10008\";}','1','1','m/template/default/inc/images/jiu.png','','0','1','1','0','a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}','a:8:{i:10006;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10005;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10004;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10003;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10002;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10001;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10007;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10008;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}}','0','0','1','7:00','30','12:00','9','','1','total_sales_des');
INSERT INTO `duoduo_bankuai` (`id`,`title`,`code`,`banner_img`,`banner_color`,`bg_color`,`bankuai_tpl`,`fenlei`,`api_cid`,`baoming`,`bankuai_img`,`bankuai_desc`,`tuijian`,`addtime`,`status`,`web_cid`,`sort`,`mobile_status`,`mobile_logo`,`mobile_title`,`del`,`quanju`,`yugao`,`data_from`,`dan_api`,`yun_cid`,`time_type`,`zj_stime`,`gd_stime`,`gd_minute`,`etime`,`yugao_time`,`huodong_time`,`url`,`sys`,`api_sort`) VALUES('2','大额优惠卷','jd','','','','315','1','0','0','','','1','1433208470','1','a:8:{i:10006;s:5:\"10006\";i:10005;s:5:\"10005\";i:10004;s:5:\"10004\";i:10003;s:5:\"10003\";i:10002;s:5:\"10002\";i:10001;s:5:\"10001\";i:10007;s:5:\"10007\";i:10008;s:5:\"10008\";}','0','1','m/template/default/inc/images/jd.png','','0','1','0','0','a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}','a:8:{i:10006;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10005;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10004;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10003;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10002;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10001;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10007;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10008;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}}','0','0','0','','30','16:00','0','','1','total_sales_des');
INSERT INTO `duoduo_bankuai` (`id`,`title`,`code`,`banner_img`,`banner_color`,`bg_color`,`bankuai_tpl`,`fenlei`,`api_cid`,`baoming`,`bankuai_img`,`bankuai_desc`,`tuijian`,`addtime`,`status`,`web_cid`,`sort`,`mobile_status`,`mobile_logo`,`mobile_title`,`del`,`quanju`,`yugao`,`data_from`,`dan_api`,`yun_cid`,`time_type`,`zj_stime`,`gd_stime`,`gd_minute`,`etime`,`yugao_time`,`huodong_time`,`url`,`sys`,`api_sort`) VALUES('6','今日爆款','bk','images/zhidemai.png','#fdf528','','315','1','0','0','','','0','1561044454','1','a:9:{i:10006;s:5:\"10006\";i:10005;s:5:\"10005\";i:10004;s:5:\"10004\";i:10003;s:5:\"10003\";i:10002;s:5:\"10002\";i:10001;s:5:\"10001\";i:10007;s:5:\"10007\";i:10008;s:5:\"10008\";i:10010;s:5:\"10010\";}','0','1','m/template/default/inc/images/zhidemai.png','','0','0','0','0','a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}','a:9:{i:10006;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10005;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10004;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10003;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10002;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10001;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10007;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10008;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}i:10010;a:2:{s:3:\"cat\";s:1:\"0\";s:1:\"q\";s:0:\"\";}}','0','0','0','','30','','0','','0','total_sales_des');
