<?php exit;?>
DROP TABLE IF EXISTS `duoduo_user`;
CREATE TABLE `duoduo_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ddusername` varchar(30) DEFAULT NULL,
  `ddpassword` varchar(50) DEFAULT NULL,
  `realname` varchar(50) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `regip` varchar(20) DEFAULT NULL,
  `logip` varchar(20) DEFAULT NULL,
  `loginnum` int(11) DEFAULT '0',
  `lastlogintime` datetime DEFAULT NULL,
  `lasttixian` int(10) NOT NULL DEFAULT '0',
  `alipay` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `txstatus` tinyint(1) DEFAULT '0',
  `dhstate` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `tjr` int(11) NOT NULL DEFAULT '0',
  `tjr_over` int(11) NOT NULL DEFAULT '0',
  `mobile` bigint(15) NOT NULL DEFAULT '0',
  `mobile_test` tinyint(1) NOT NULL DEFAULT '0',
  `qq` varchar(20) DEFAULT NULL,
  `pass_question` varchar(250) DEFAULT NULL,
  `pass_answer` varchar(250) DEFAULT NULL,
  `yitixian` double(10,2) DEFAULT '0.00',
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `jihuo` tinyint(1) NOT NULL DEFAULT '0',
  `hart` int(10) NOT NULL DEFAULT '0',
  `tbyitixian` double(11,2) NOT NULL DEFAULT '0.00',
  `ucid` int(11) NOT NULL DEFAULT '0',
  `hytx` tinyint(1) NOT NULL DEFAULT '0',
  `signtime` int(10) NOT NULL DEFAULT '0',
  `tenpay` varchar(50) DEFAULT NULL,
  `bank_name` varchar(20) DEFAULT NULL,
  `tbtxstatus` tinyint(1) NOT NULL DEFAULT '0',
  `txtool` tinyint(1) NOT NULL DEFAULT '1',
  `bank_code` varchar(20) DEFAULT '0',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `trade_uid` varchar(200) DEFAULT '0',
  `tbnick` varchar(200) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(1) DEFAULT '0',
  `signnum` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ddusername` (`ddusername`),
  UNIQUE KEY `email` (`email`),
  KEY `loginnum` (`loginnum`),
  KEY `lastlogintime` (`lastlogintime`),
  KEY `alipay` (`alipay`),
  KEY `money` (`money`),
  KEY `jifenbao` (`jifenbao`),
  KEY `jifen` (`jifen`),
  KEY `txstatus` (`txstatus`),
  KEY `dhstate` (`dhstate`),
  KEY `level` (`level`),
  KEY `tjr` (`tjr`),
  KEY `mobile` (`mobile`),
  KEY `ucid` (`ucid`),
  KEY `tbtxstatus` (`tbtxstatus`),
  KEY `platform` (`platform`),
  KEY `trade_uid` (`trade_uid`),
  KEY `del` (`del`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_user` (`id`,`ddusername`,`ddpassword`,`realname`,`regtime`,`regip`,`logip`,`loginnum`,`lastlogintime`,`lasttixian`,`alipay`,`email`,`money`,`jifenbao`,`jifen`,`txstatus`,`dhstate`,`level`,`tjr`,`tjr_over`,`mobile`,`mobile_test`,`qq`,`pass_question`,`pass_answer`,`yitixian`,`search`,`jihuo`,`hart`,`tbyitixian`,`ucid`,`hytx`,`signtime`,`tenpay`,`bank_name`,`tbtxstatus`,`txtool`,`bank_code`,`platform`,`trade_uid`,`tbnick`,`del`,`type`,`signnum`) VALUES('1','15659176979','666c4bf6071c3aa6e03ed3a5a5d9a5dd','','2019-05-23 13:38:38','220.249.163.101','117.28.194.73','17','2019-06-20 00:08:23','0','','5706436@qq.com','0.00','0.00','0','0','0','0','0','0','15659176979','0','5706436','','','0.00','0','1','0','0.00','0','0','0','','','0','1','0','1','0','','0','0','0');
INSERT INTO `duoduo_user` (`id`,`ddusername`,`ddpassword`,`realname`,`regtime`,`regip`,`logip`,`loginnum`,`lastlogintime`,`lasttixian`,`alipay`,`email`,`money`,`jifenbao`,`jifen`,`txstatus`,`dhstate`,`level`,`tjr`,`tjr_over`,`mobile`,`mobile_test`,`qq`,`pass_question`,`pass_answer`,`yitixian`,`search`,`jihuo`,`hart`,`tbyitixian`,`ucid`,`hytx`,`signtime`,`tenpay`,`bank_name`,`tbtxstatus`,`txtool`,`bank_code`,`platform`,`trade_uid`,`tbnick`,`del`,`type`,`signnum`) VALUES('2','516063878','d6f050b3c10ff2f046afee1c5723a6d2','','2019-05-24 14:30:22','117.28.195.155','125.77.66.230','2','2019-06-04 14:01:04','0','','516063878@qq.com','0.00','0.00','0','0','0','0','0','0','0','0','','','','0.00','0','1','0','0.00','0','0','0','','','0','1','0','1','0','','0','0','0');
INSERT INTO `duoduo_user` (`id`,`ddusername`,`ddpassword`,`realname`,`regtime`,`regip`,`logip`,`loginnum`,`lastlogintime`,`lasttixian`,`alipay`,`email`,`money`,`jifenbao`,`jifen`,`txstatus`,`dhstate`,`level`,`tjr`,`tjr_over`,`mobile`,`mobile_test`,`qq`,`pass_question`,`pass_answer`,`yitixian`,`search`,`jihuo`,`hart`,`tbyitixian`,`ucid`,`hytx`,`signtime`,`tenpay`,`bank_name`,`tbtxstatus`,`txtool`,`bank_code`,`platform`,`trade_uid`,`tbnick`,`del`,`type`,`signnum`) VALUES('3','test123','e10adc3949ba59abbe56e057f20f883e','','2019-07-02 09:37:44','116.233.115.174','116.233.115.174','2','2019-07-02 13:20:03','0','','wsnkqpht@bccto.me','0.00','0.00','0','0','0','0','0','0','0','0','','','','0.00','0','1','0','0.00','0','0','0','','','0','1','0','1','0','','0','0','0');
