<?php exit;?>
DROP TABLE IF EXISTS `duoduo_link`;
CREATE TABLE `duoduo_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_link` (`id`,`url`,`title`,`addtime`,`type`,`img`,`sort`) VALUES('1','http://soft.duoduo123.com','多多返利系统','1335529021','1','images/pic_13026200801729.gif','0');
INSERT INTO `duoduo_link` (`id`,`url`,`title`,`addtime`,`type`,`img`,`sort`) VALUES('2','http://soft.duoduo123.com','多多返利系统','1342425747','0','','0');
