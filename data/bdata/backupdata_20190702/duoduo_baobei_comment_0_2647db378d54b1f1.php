<?php exit;?>
DROP TABLE IF EXISTS `duoduo_baobei_comment`;
CREATE TABLE `duoduo_baobei_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `baobei_id` int(11) NOT NULL,
  `comment` varchar(140) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `baobei_id` (`baobei_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
