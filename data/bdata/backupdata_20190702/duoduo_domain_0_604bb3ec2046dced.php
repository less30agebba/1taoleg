<?php exit;?>
DROP TABLE IF EXISTS `duoduo_domain`;
CREATE TABLE `duoduo_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mod` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `close` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
