<?php exit;?>
DROP TABLE IF EXISTS `duoduo_mall_comment`;
CREATE TABLE `duoduo_mall_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mall_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fen` tinyint(1) NOT NULL DEFAULT '0',
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mall_id` (`mall_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
