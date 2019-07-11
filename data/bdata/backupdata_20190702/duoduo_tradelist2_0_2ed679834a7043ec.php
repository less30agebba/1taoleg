<?php exit;?>
DROP TABLE IF EXISTS `duoduo_tradelist2`;
CREATE TABLE `duoduo_tradelist2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_id` bigint(20) unsigned DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_id` (`trade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
