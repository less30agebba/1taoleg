<?php exit;?>
DROP TABLE IF EXISTS `duoduo_tixian`;
CREATE TABLE `duoduo_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `money2` double(10,2) NOT NULL DEFAULT '0.00',
  `code` varchar(50) DEFAULT NULL,
  `addtime` int(10) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `realname` varchar(30) DEFAULT NULL,
  `mobile` bigint(20) NOT NULL DEFAULT '0',
  `why` varchar(255) DEFAULT NULL,
  `remark` text,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `api_return` varchar(100) DEFAULT NULL,
  `tool` int(1) NOT NULL DEFAULT '1',
  `wait` tinyint(1) NOT NULL DEFAULT '0',
  `dotime` int(10) DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `code` (`code`),
  KEY `ip` (`ip`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
