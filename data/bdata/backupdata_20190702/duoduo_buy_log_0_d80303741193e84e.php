<?php exit;?>
DROP TABLE IF EXISTS `duoduo_buy_log`;
CREATE TABLE `duoduo_buy_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` bigint(15) NOT NULL DEFAULT '0',
  `iid` bigint(15) DEFAULT NULL,
  `day` datetime DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `fxje` double(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `iid` (`iid`),
  KEY `day` (`day`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('88','1','592830064849','2019-06-28 18:01:12','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('87','1','592830064849','2019-06-28 17:08:58','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('53','1','586652173354','2019-06-02 23:47:48','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('54','2','527053891680','2019-06-05 19:48:37','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('55','2','580794294144','2019-06-05 19:49:45','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('56','2','546088593507','2019-06-05 19:51:06','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('57','2','595320029811','2019-06-05 21:26:09','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('58','2','546088593507','2019-06-07 14:58:22','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('59','2','567329823526','2019-06-07 15:03:58','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('60','1','569797169957','2019-06-11 14:53:12','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('61','2','589320445490','2019-06-16 04:08:53','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('62','1','551988550874','2019-06-18 01:11:35','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('63','1','581724363065','2019-06-18 01:13:40','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('64','1','580794294144','2019-06-18 01:16:17','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('65','1','595320029811','2019-06-18 01:17:55','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('66','1','589320445490','2019-06-18 01:18:39','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('67','1','568920890196','2019-06-18 01:20:29','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('68','1','568920890196','2019-06-18 01:21:59','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('69','1','567329823526','2019-06-18 01:23:33','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('70','1','580794294144','2019-06-18 01:26:23','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('71','1','593624676858','2019-06-18 01:26:39','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('72','1','567329823526','2019-06-18 01:28:50','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('73','1','583865198133','2019-06-18 01:31:02','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('74','1','583865198133','2019-06-18 01:31:14','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('75','1','583865198133','2019-06-18 01:31:39','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('76','1','569797169957','2019-06-18 01:31:51','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('77','1','551449484166','2019-06-18 01:32:03','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('78','1','546088593507','2019-06-18 10:05:10','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('79','1','546088593507','2019-06-18 10:05:41','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('80','1','580794294144','2019-06-18 10:08:00','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('81','1','546088593507','2019-06-18 14:05:07','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('82','1','593624676858','2019-06-18 14:19:36','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('83','1','580794294144','2019-06-18 14:56:57','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('84','1','593624676858','2019-06-18 20:20:56','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('85','1','555244834343','2019-06-20 00:08:24','','0.00');
INSERT INTO `duoduo_buy_log` (`id`,`uid`,`iid`,`day`,`keyword`,`fxje`) VALUES('86','1','555244834343','2019-06-20 00:10:39','','0.00');
