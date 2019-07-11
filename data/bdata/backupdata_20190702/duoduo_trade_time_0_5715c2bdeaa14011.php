<?php exit;?>
DROP TABLE IF EXISTS `duoduo_trade_time`;
CREATE TABLE `duoduo_trade_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trade_id` (`trade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
