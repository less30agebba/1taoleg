<?php exit;?>
DROP TABLE IF EXISTS `duoduo_mingxi`;
CREATE TABLE `duoduo_mingxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `shijian` varchar(50) NOT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `jifen` int(5) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `source` varchar(250) DEFAULT NULL,
  `relate_id` int(11) NOT NULL DEFAULT '0',
  `leave_money` double(10,2) DEFAULT '0.00',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `leave_jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `leave_jifen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `shijian` (`shijian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
