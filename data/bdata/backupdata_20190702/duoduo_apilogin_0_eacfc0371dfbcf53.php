<?php exit;?>
DROP TABLE IF EXISTS `duoduo_apilogin`;
CREATE TABLE `duoduo_apilogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `webid` varchar(50) NOT NULL,
  `webname` varchar(50) NOT NULL,
  `web` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `webid` (`webid`),
  KEY `web` (`web`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
