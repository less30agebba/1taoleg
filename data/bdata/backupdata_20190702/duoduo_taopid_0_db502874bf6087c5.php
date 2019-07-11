<?php exit;?>
DROP TABLE IF EXISTS `duoduo_taopid`;
CREATE TABLE `duoduo_taopid` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_taopid` (`id`,`pid`,`title`,`url`,`addtime`,`default`) VALUES('1','mm_121203267_398500431_108341950441','多多返利','http://www.98ifanli.com','1558879144','1');
