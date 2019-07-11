<?php exit;?>
DROP TABLE IF EXISTS `duoduo_plugin`;
CREATE TABLE `duoduo_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `key` varchar(50) DEFAULT NULL,
  `authcode` varchar(200) DEFAULT NULL,
  `mod` varchar(20) DEFAULT NULL,
  `act` varchar(20) DEFAULT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `admin_set` tinyint(1) NOT NULL DEFAULT '0',
  `endtime` datetime DEFAULT NULL,
  `search_open` tinyint(1) NOT NULL DEFAULT '0',
  `search_name` varchar(10) DEFAULT NULL,
  `search_width` int(11) NOT NULL DEFAULT '40',
  `search_tip` varchar(30) DEFAULT NULL,
  `toper_name` varchar(30) DEFAULT NULL,
  `toper_qq` varchar(30) DEFAULT NULL,
  `banben` int(11) NOT NULL DEFAULT '0',
  `install` tinyint(1) NOT NULL DEFAULT '0',
  `jiaocheng` varchar(255) DEFAULT NULL,
  `need_include` tinyint(1) NOT NULL DEFAULT '0',
  `version` double(10,1) DEFAULT '0.0',
  `level` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_plugin` (`id`,`code`,`status`,`title`,`addtime`,`price`,`key`,`authcode`,`mod`,`act`,`tag`,`admin_set`,`endtime`,`search_open`,`search_name`,`search_width`,`search_tip`,`toper_name`,`toper_qq`,`banben`,`install`,`jiaocheng`,`need_include`,`version`,`level`) VALUES('1','w_chaofan','0','超返主题wap模版','1457159274','0.00','xiaogangcha','7fa3CKlTSHMqT1BQJCXWOyoqK4RqdmPaANiD6tw+oSBAPkunKG/YQos+1BgAEhuxQoW4uv+Ko93OVF1o04xyG358UI2AGxgoIllwXUd54Hd5S9VgiU6+CIWylELK2ze2DPxwaQ','','','','0','2029-05-20 10:31:50','0','','40','','多多科技','613639803','20150804','1','http://bbs.duoduo123.com/read-1-1-207869.html','0','2.5','1');
INSERT INTO `duoduo_plugin` (`id`,`code`,`status`,`title`,`addtime`,`price`,`key`,`authcode`,`mod`,`act`,`tag`,`admin_set`,`endtime`,`search_open`,`search_name`,`search_width`,`search_tip`,`toper_name`,`toper_qq`,`banben`,`install`,`jiaocheng`,`need_include`,`version`,`level`) VALUES('2','queqiao','0','【选品神器】鹊桥商品一键推送','1452952902','0.00','cpxy','7810XpX4ReoN6owWFojDJlDHOi+R28Cv3wb1YyAeDGKt9dUfbJJc2MzpdCDPraGL/wxTwkB2TAkMBSnPNDYmEy4/323zp618xQoB3zO9cT4nvRgLuvPqtPZSgioCipRax/d9+A','','','','0','2029-05-20 11:09:27','0','','40','','多多科技','613639803','20131204','1','http://bbs.duoduo123.com/read-1-1-207236.html','0','2.9','1');
INSERT INTO `duoduo_plugin` (`id`,`code`,`status`,`title`,`addtime`,`price`,`key`,`authcode`,`mod`,`act`,`tag`,`admin_set`,`endtime`,`search_open`,`search_name`,`search_width`,`search_tip`,`toper_name`,`toper_qq`,`banben`,`install`,`jiaocheng`,`need_include`,`version`,`level`) VALUES('3','miaozhe','0','秒折网仿卷皮模板','1470717989','500.00','miaozhe','83fbjGuylAaqnx8wdBYzrzu90EOk4oiNt/z9H6GQ6Dp8zLqJ3eky4palDpQcl4v1iY559BLfCf/36+uJlxXyiQjzs1RmH7U+ISrCbV14QLJq4iGFr/8B1sDmgk5R/wP1CapshA','','','','0','2020-05-22 18:03:55','0','','40','','来购物','873917633','20170705','1','http://bbs.duoduo123.com/forum.php?mod=viewthread&tid=212489','0','1.3','1');
