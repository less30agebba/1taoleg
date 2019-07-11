<?php exit;?>
DROP TABLE IF EXISTS `duoduo_task`;
CREATE TABLE `duoduo_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `programname` varchar(100) DEFAULT NULL,
  `point` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `eventid` varchar(100) DEFAULT NULL,
  `immediate` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventid` (`eventid`),
  KEY `memberid` (`memberid`),
  KEY `del` (`del`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
