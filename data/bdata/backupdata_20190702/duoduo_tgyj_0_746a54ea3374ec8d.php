<?php exit;?>
DROP TABLE IF EXISTS `duoduo_tgyj`;
CREATE TABLE `duoduo_tgyj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tjrid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `hytx` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`),
  KEY `tjrid` (`tjrid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
