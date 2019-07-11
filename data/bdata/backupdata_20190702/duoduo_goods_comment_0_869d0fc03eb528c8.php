<?php exit;?>
DROP TABLE IF EXISTS `duoduo_goods_comment`;
CREATE TABLE `duoduo_goods_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
