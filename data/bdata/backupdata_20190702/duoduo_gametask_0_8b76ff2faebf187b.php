<?php exit;?>
DROP TABLE IF EXISTS `duoduo_gametask`;
CREATE TABLE `duoduo_gametask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `programname` varchar(100) DEFAULT NULL,
  `point` double(10,2) NOT NULL DEFAULT '0.00',
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `eventid` varchar(100) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventid` (`eventid`),
  KEY `memberid` (`memberid`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
