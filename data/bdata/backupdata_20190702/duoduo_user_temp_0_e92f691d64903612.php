<?php exit;?>
DROP TABLE IF EXISTS `duoduo_user_temp`;
CREATE TABLE `duoduo_user_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `sign` int(11) DEFAULT '0',
  `ddusername` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `sign` (`sign`),
  KEY `ddusername` (`ddusername`),
  KEY `mobile` (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
