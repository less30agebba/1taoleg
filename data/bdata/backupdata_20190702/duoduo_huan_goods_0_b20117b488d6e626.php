<?php exit;?>
DROP TABLE IF EXISTS `duoduo_huan_goods`;
CREATE TABLE `duoduo_huan_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `jifen` int(10) NOT NULL DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `title` varchar(100) DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `content` text,
  `num` int(11) NOT NULL DEFAULT '1',
  `array` text,
  `auto` tinyint(1) NOT NULL DEFAULT '0',
  `sdate` int(10) NOT NULL DEFAULT '0',
  `edate` bigint(11) NOT NULL DEFAULT '0',
  `limit` int(11) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `hide` (`hide`),
  KEY `sort` (`sort`),
  KEY `sdate` (`sdate`),
  KEY `edate` (`edate`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_huan_goods` (`id`,`cid`,`img`,`jifen`,`jifenbao`,`title`,`hide`,`addtime`,`sort`,`content`,`num`,`array`,`auto`,`sdate`,`edate`,`limit`,`del`) VALUES('1','13','images/qbi.jpg','0','1000.00','10Q币','0','1335529021','0','&nbsp;\r\n<p align=\"center\">\r\n	<img border=\"0\" alt=\"\" src=\"images/qbi.jpg\" /> \r\n</p>','100','','0','0','0','0','0');
INSERT INTO `duoduo_huan_goods` (`id`,`cid`,`img`,`jifen`,`jifenbao`,`title`,`hide`,`addtime`,`sort`,`content`,`num`,`array`,`auto`,`sdate`,`edate`,`limit`,`del`) VALUES('2','13','images/qbi.jpg','0','2000.00','20Q币','0','1335529021','0','&nbsp;\r\n<p align=\"center\">\r\n	<img border=\"0\" alt=\"\" src=\"images/qbi.jpg\" />\r\n</p>','100','','0','0','0','0','0');
INSERT INTO `duoduo_huan_goods` (`id`,`cid`,`img`,`jifen`,`jifenbao`,`title`,`hide`,`addtime`,`sort`,`content`,`num`,`array`,`auto`,`sdate`,`edate`,`limit`,`del`) VALUES('3','13','images/qbi.jpg','0','3000.00','30Q币','0','1335529021','0','&nbsp;\r\n<p align=\"center\">\r\n	<img border=\"0\" alt=\"\" src=\"images/qbi.jpg\" />\r\n</p>','100','','0','0','0','0','0');
INSERT INTO `duoduo_huan_goods` (`id`,`cid`,`img`,`jifen`,`jifenbao`,`title`,`hide`,`addtime`,`sort`,`content`,`num`,`array`,`auto`,`sdate`,`edate`,`limit`,`del`) VALUES('4','13','images/qbi.jpg','0','4000.00','40Q币','0','1335529021','0','&nbsp;\r\n<p align=\"center\">\r\n	<img border=\"0\" alt=\"\" src=\"images/qbi.jpg\" />\r\n</p>','100','','0','0','0','0','0');
