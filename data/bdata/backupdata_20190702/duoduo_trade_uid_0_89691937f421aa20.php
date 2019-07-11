<?php exit;?>
DROP TABLE IF EXISTS `duoduo_trade_uid`;
CREATE TABLE `duoduo_trade_uid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_uid` varchar(4) NOT NULL,
  `uid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_uid` (`trade_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
