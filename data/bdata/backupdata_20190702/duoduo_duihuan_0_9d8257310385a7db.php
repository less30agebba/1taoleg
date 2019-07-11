<?php exit;?>
DROP TABLE IF EXISTS `duoduo_duihuan`;
CREATE TABLE `duoduo_duihuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `spend` double(11,2) NOT NULL DEFAULT '0.00',
  `ip` varchar(20) DEFAULT NULL,
  `huan_goods_id` int(11) NOT NULL DEFAULT '0',
  `realname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` bigint(15) NOT NULL DEFAULT '0',
  `qq` varchar(20) DEFAULT NULL,
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `shoptime` int(10) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `mode` tinyint(1) NOT NULL DEFAULT '1',
  `why` varchar(255) DEFAULT NULL,
  `num` int(11) NOT NULL DEFAULT '1',
  `alipay` varchar(50) DEFAULT NULL,
  `code` text,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `huan_goods_id` (`huan_goods_id`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
