<?php exit;?>
DROP TABLE IF EXISTS `duoduo_mall_order`;
CREATE TABLE `duoduo_mall_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_time` int(10) NOT NULL DEFAULT '0',
  `mall_name` varchar(30) DEFAULT NULL,
  `mall_id` int(11) NOT NULL DEFAULT '0',
  `adid` varchar(15) NOT NULL,
  `uid` int(11) DEFAULT '0',
  `order_code` varchar(50) DEFAULT NULL,
  `item_count` int(5) DEFAULT '0',
  `item_price` double(10,2) NOT NULL DEFAULT '0.00',
  `sales` double(15,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `fxje` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(10) NOT NULL DEFAULT '0',
  `tgyj` double(8,2) NOT NULL DEFAULT '0.00',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `qrsj` int(10) NOT NULL DEFAULT '0',
  `product_code` varchar(50) DEFAULT NULL,
  `lm` tinyint(1) NOT NULL DEFAULT '0',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `unique_id` varchar(100) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `domain` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`unique_id`),
  KEY `order_time` (`order_time`),
  KEY `mall_id` (`mall_id`),
  KEY `adid` (`adid`),
  KEY `uid` (`uid`),
  KEY `status` (`status`),
  KEY `platform` (`platform`),
  KEY `del` (`del`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
