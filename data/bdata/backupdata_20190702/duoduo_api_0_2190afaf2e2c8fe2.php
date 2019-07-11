<?php exit;?>
DROP TABLE IF EXISTS `duoduo_api`;
CREATE TABLE `duoduo_api` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `open` int(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `back_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_api` (`id`,`key`,`secret`,`title`,`code`,`open`,`sort`,`addtime`,`sys`,`back_url`) VALUES('1','','','新浪微博','sina','0','0','1334223685','1','');
INSERT INTO `duoduo_api` (`id`,`key`,`secret`,`title`,`code`,`open`,`sort`,`addtime`,`sys`,`back_url`) VALUES('2','','','QQ账号','qq','0','0','1334223685','1','');
INSERT INTO `duoduo_api` (`id`,`key`,`secret`,`title`,`code`,`open`,`sort`,`addtime`,`sys`,`back_url`) VALUES('3','','','淘宝账号','tb','0','0','1334771963','1','');
INSERT INTO `duoduo_api` (`id`,`key`,`secret`,`title`,`code`,`open`,`sort`,`addtime`,`sys`,`back_url`) VALUES('4','','','腾讯微博','qqweibo','0','0','1334811155','1','');
INSERT INTO `duoduo_api` (`id`,`key`,`secret`,`title`,`code`,`open`,`sort`,`addtime`,`sys`,`back_url`) VALUES('5','','','开心账号','kaixin','0','0','1334811175','1','');
