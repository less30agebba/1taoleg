<?php exit;?>
DROP TABLE IF EXISTS `duoduo_tradelist_temp`;
CREATE TABLE `duoduo_tradelist_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_time` datetime DEFAULT NULL,
  `item_title` varchar(255) DEFAULT NULL,
  `shop_title` varchar(255) DEFAULT NULL,
  `num_iid` bigint(15) NOT NULL DEFAULT '0',
  `seller_nick` varchar(50) DEFAULT NULL,
  `pay_price` double(10,2) NOT NULL DEFAULT '0.00',
  `real_pay_fee` double(10,2) NOT NULL DEFAULT '0.00',
  `commission_rate` double(6,3) NOT NULL DEFAULT '0.000',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `item_num` int(11) NOT NULL DEFAULT '0',
  `trade_id` varchar(40) NOT NULL,
  `trade_id_former` bigint(20) NOT NULL DEFAULT '0',
  `outer_code` varchar(12) DEFAULT NULL,
  `qrsj` int(10) NOT NULL DEFAULT '0',
  `fxje` double DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `checked` int(1) DEFAULT '0',
  `ddjt` varchar(255) DEFAULT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `app_key` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category_name` varchar(20) DEFAULT NULL,
  `jifen` int(11) NOT NULL DEFAULT '0',
  `tgyj` double(5,2) NOT NULL DEFAULT '0.00',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `status` int(2) DEFAULT '0',
  `guanlian` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `mini_trade_id` bigint(20) NOT NULL DEFAULT '0',
  `pic_url` varchar(255) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_id` (`trade_id`),
  KEY `pay_time` (`pay_time`),
  KEY `num_iid` (`num_iid`),
  KEY `trade_id_former` (`trade_id_former`),
  KEY `checked` (`checked`),
  KEY `uid` (`uid`),
  KEY `mini_trade_id` (`mini_trade_id`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
