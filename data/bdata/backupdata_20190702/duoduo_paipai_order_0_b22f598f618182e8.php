<?php exit;?>
DROP TABLE IF EXISTS `duoduo_paipai_order`;
CREATE TABLE `duoduo_paipai_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dealId` int(11) NOT NULL DEFAULT '0',
  `discount` double(3,2) NOT NULL DEFAULT '0.00',
  `careAmount` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(8,2) NOT NULL DEFAULT '0.00',
  `realCost` double(8,2) NOT NULL DEFAULT '0.00',
  `bargainState` tinyint(1) NOT NULL DEFAULT '0',
  `chargeTime` int(11) NOT NULL DEFAULT '0',
  `commNum` int(11) NOT NULL,
  `commId` varchar(50) DEFAULT NULL,
  `commName` varchar(100) DEFAULT NULL,
  `classId` int(11) NOT NULL DEFAULT '0',
  `className` varchar(20) DEFAULT NULL,
  `shopId` bigint(20) NOT NULL DEFAULT '0',
  `shopName` varchar(100) NOT NULL,
  `outInfo` varchar(50) DEFAULT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `fxje` double(8,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `tgyj` double(5,2) NOT NULL DEFAULT '0.00',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `checked` tinyint(10) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `dealId` (`dealId`),
  KEY `uid` (`uid`),
  KEY `addtime` (`addtime`),
  KEY `checked` (`checked`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
