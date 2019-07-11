<?php exit;?>
DROP TABLE IF EXISTS `duoduo_service`;
CREATE TABLE `duoduo_service` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `sort` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
