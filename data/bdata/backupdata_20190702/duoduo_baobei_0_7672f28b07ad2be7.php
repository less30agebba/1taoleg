<?php exit;?>
DROP TABLE IF EXISTS `duoduo_baobei`;
CREATE TABLE `duoduo_baobei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tao_id` bigint(12) NOT NULL,
  `trade_id` int(11) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `nick` varchar(50) DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `cid` int(2) NOT NULL DEFAULT '1',
  `click_url` text,
  `keywords` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  `hart` int(10) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL,
  `fabu_time` datetime DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `shop_title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `userimg` varchar(200) DEFAULT 'NULL',
  `status` int(1) DEFAULT '0',
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tao_id` (`tao_id`),
  KEY `trade_id` (`trade_id`),
  KEY `title` (`title`),
  KEY `cid` (`cid`),
  KEY `sort` (`sort`),
  KEY `del` (`del`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
