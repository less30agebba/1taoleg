<?php exit;?>
DROP TABLE IF EXISTS `duoduo_duoduo2010`;
CREATE TABLE `duoduo_duoduo2010` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(30) DEFAULT NULL,
  `adminpass` varchar(50) DEFAULT NULL,
  `lastlogintime` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `lastloginip` varchar(15) DEFAULT NULL,
  `loginnum` int(11) DEFAULT '0',
  `logintime` int(10) NOT NULL DEFAULT '0',
  `loginip` varchar(15) DEFAULT NULL,
  `role` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('1','admin','b5be04365e28b445ef40f35440869235','1562046508','1558449410','121.204.26.253','35','1562058378','211.97.109.180','1');
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('2','01','b980bc2f33a155c31a5b5e787587976e','0','1558965426','','1','1558965439','117.28.195.253','4');
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('3','02','b980bc2f33a155c31a5b5e787587976e','1558965598','1558965586','117.28.195.253','2','1558967504','117.28.195.253','5');
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('4','z123456','b980bc2f33a155c31a5b5e787587976e','0','1559640479','','1','1559640531','125.77.66.230','4');
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('5','南客','b980bc2f33a155c31a5b5e787587976e','1561976453','1559736929','121.204.26.253','16','1562048675','125.77.66.57','7');
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('6','浮笙','c62a040a6622a2fb158cbd321df60a4b','1561907072','1559736978','121.204.26.253','6','1562052983','121.204.26.253','7');
INSERT INTO `duoduo_duoduo2010` (`id`,`adminname`,`adminpass`,`lastlogintime`,`addtime`,`lastloginip`,`loginnum`,`logintime`,`loginip`,`role`) VALUES('7','小南','b980bc2f33a155c31a5b5e787587976e','0','1561706186','','1','1561706201','125.77.66.57','4');
