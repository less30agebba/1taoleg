<?php exit;?>
DROP TABLE IF EXISTS `duoduo_adminlog`;
CREATE TABLE `duoduo_adminlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `mod` varchar(50) NOT NULL,
  `do` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_name` (`admin_name`),
  KEY `mod` (`mod`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('1','admin','211.97.109.180','mall','set','1558449464');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('2','admin','211.97.109.180','webset','set','1558449598');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('3','admin','211.97.109.180','tradelist','set','1558454779');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('4','admin','211.97.109.180','goods_type','update','1558496399');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('5','admin','211.97.109.180','seo','update','1558518967');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('6','admin','211.97.109.180','shangjia','set','1558529575');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('7','admin','211.97.109.180','slides','update','1558540279');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('8','admin','211.97.109.180','slides','insert','1558540484');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('9','admin','211.97.109.180','tradelist','set','1558541238');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('10','admin','211.97.109.180','slides','insert','1558541277');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('11','admin','211.97.109.180','nav','update','1558544547');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('12','admin','211.97.109.180','duoduo2010','update','1558547192');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('13','admin','211.97.109.180','webset','set','1558547458');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('14','admin','211.97.109.180','mall','set','1558580293');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('15','admin','211.97.109.180','ad','insert','1558581675');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('16','admin','211.97.109.180','ad','insert','1558581961');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('17','admin','211.97.109.180','ad','insert','1558582105');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('18','admin','211.97.109.180','ad','insert','1558582160');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('19','admin','211.97.109.180','ad','insert','1558582194');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('20','admin','211.97.109.180','goods_type','insert','1558582643');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('21','admin','211.97.109.180','goods_type','delete','1558582723');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('22','admin','211.97.109.180','goods','insert','1558590923');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('23','admin','211.97.109.180','goods','update','1558593792');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('24','admin','211.97.109.180','goods','update','1558593875');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('25','admin','211.97.109.180','goods','update','1558594019');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('26','admin','211.97.109.180','goods','update','1558595761');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('27','admin','211.97.109.180','nav','update','1558612200');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('28','admin','211.97.109.180','nav','update','1558612296');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('29','admin','211.97.109.180','webset','set','1558612345');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('30','admin','211.97.109.180','nav','insert','1558613598');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('31','admin','211.97.109.180','nav','update','1558613695');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('32','admin','211.97.109.180','nav','update','1558613914');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('33','admin','211.97.109.180','nav','update','1558613923');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('34','admin','211.97.109.180','mall','set','1558627540');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('35','admin','211.97.109.180','tradelist','set','1558627544');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('36','admin','211.97.109.180','webset','set','1558628763');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('37','admin','211.97.109.180','webset','set','1558629020');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('38','admin','211.97.109.180','taopid','insert','1558635735');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('39','admin','211.97.109.180','tradelist','set','1558677484');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('40','admin','211.97.109.180','taopid','update','1558677542');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('41','admin','112.49.108.94','taopid','update','1558879144');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('42','admin','112.49.108.94','goods','delete','1558879263');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('43','admin','112.49.108.94','webset','set','1558880060');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('44','admin','112.49.108.94','webset','set','1558880143');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('45','admin','117.28.195.253','slides','insert','1558964024');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('46','admin','117.28.195.253','slides','update','1558964076');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('47','admin','117.28.195.253','slides','update','1558964118');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('48','admin','117.28.195.253','ad','update','1558964245');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('49','admin','117.28.195.253','goods','insert','1558964561');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('50','admin','117.28.195.253','role','insert','1558965410');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('51','admin','117.28.195.253','duoduo2010','insert','1558965426');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('52','01','117.28.195.253','goods','insert','1558965476');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('53','admin','117.28.195.253','role','insert','1558965566');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('54','admin','117.28.195.253','duoduo2010','insert','1558965586');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('55','admin','117.28.195.253','goods','insert','1558965681');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('56','admin','117.28.195.253','goods','update','1558967399');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('57','02','117.28.195.253','goods','insert','1558967582');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('58','admin','121.204.26.24','slides','delete','1559290404');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('59','admin','211.97.109.180','bankuai','update','1559554210');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('60','admin','211.97.109.180','goods','update','1559554294');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('61','admin','211.97.109.180','goods','update','1559554302');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('62','admin','211.97.109.180','bankuai','update','1559556143');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('63','admin','211.97.109.180','goods','update','1559556254');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('64','admin','211.97.109.180','goods','update','1559582410');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('65','admin','211.97.109.180','ad','insert','1559583631');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('66','admin','211.97.109.180','ad','update','1559583649');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('67','admin','211.97.109.180','ad','update','1559583708');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('68','admin','211.97.109.180','bankuai','update','1559583877');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('69','admin','211.97.109.180','nav','update','1559584695');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('70','admin','211.97.109.180','nav','update','1559584750');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('71','admin','211.97.109.180','nav','update','1559584768');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('72','admin','211.97.109.180','nav','update','1559584857');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('73','admin','211.97.109.180','nav','update','1559584884');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('74','admin','211.97.109.180','nav','update','1559584915');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('75','admin','211.97.109.180','bankuai','update','1559584978');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('76','admin','211.97.109.180','bankuai','update','1559585197');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('77','admin','211.97.109.180','goods','update','1559585450');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('78','admin','211.97.109.180','goods','update','1559585797');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('79','admin','211.97.109.180','nav','update','1559585960');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('80','admin','211.97.109.180','nav','update','1559585998');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('81','admin','125.77.66.230','goods_type','insert','1559627813');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('82','admin','125.77.66.230','goods','insert','1559627901');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('83','admin','125.77.66.230','goods','insert','1559628212');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('84','admin','125.77.66.230','goods','delete','1559628340');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('85','admin','125.77.66.230','goods','delete','1559628406');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('86','admin','125.77.66.230','goods','insert','1559628578');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('87','admin','125.77.66.230','goods','update','1559628634');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('88','admin','125.77.66.230','goods','update','1559628890');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('89','admin','125.77.66.230','goods','update','1559628971');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('90','admin','125.77.66.230','goods','insert','1559629048');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('91','admin','125.77.66.230','goods','delete','1559629211');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('92','admin','125.77.66.230','goods','insert','1559640289');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('93','admin','125.77.66.230','role','insert','1559640441');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('94','admin','125.77.66.230','duoduo2010','insert','1559640479');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('95','z123456','125.77.66.230','goods','insert','1559640634');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('96','admin','125.77.66.230','role','update','1559640883');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('97','admin','125.77.66.230','role','delete','1559640891');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('98','admin','211.97.109.180','webset','set','1559731733');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('99','admin','125.77.66.230','goods','insert','1559734623');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('100','admin','125.77.66.230','goods','insert','1559734683');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('101','admin','125.77.66.230','goods','insert','1559734727');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('102','admin','125.77.66.230','goods','insert','1559734762');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('103','admin','125.77.66.230','goods','insert','1559734846');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('104','admin','125.77.66.230','goods','insert','1559734894');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('105','admin','125.77.66.230','goods','insert','1559734935');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('106','admin','125.77.66.230','goods','insert','1559734977');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('107','admin','125.77.66.230','goods','insert','1559735092');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('108','admin','125.77.66.230','goods','insert','1559735155');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('109','admin','125.77.66.230','goods','insert','1559735189');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('110','admin','125.77.66.230','goods','insert','1559735230');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('111','admin','125.77.66.230','goods','insert','1559735260');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('112','admin','125.77.66.230','goods','insert','1559735292');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('113','admin','125.77.66.230','goods','insert','1559735323');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('114','admin','125.77.66.230','goods','insert','1559735356');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('115','admin','125.77.66.230','goods','insert','1559735389');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('116','admin','125.77.66.230','goods','insert','1559735416');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('117','admin','125.77.66.230','goods','insert','1559735438');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('118','admin','125.77.66.230','goods','insert','1559735477');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('119','admin','125.77.66.230','goods','insert','1559735517');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('120','admin','125.77.66.230','goods','insert','1559735556');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('121','admin','125.77.66.230','goods','insert','1559736628');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('122','admin','125.77.66.230','goods','delete','1559736675');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('123','admin','125.77.66.230','goods','delete','1559736690');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('124','admin','125.77.66.230','goods','delete','1559736798');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('125','admin','125.77.66.230','role','insert','1559736889');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('126','admin','125.77.66.230','duoduo2010','insert','1559736929');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('127','admin','125.77.66.230','duoduo2010','insert','1559736978');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('128','admin','125.77.66.230','goods','delete','1559736996');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('129','admin','125.77.66.230','goods','insert','1559737167');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('130','admin','125.77.66.230','goods','insert','1559737213');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('131','admin','125.77.66.230','goods','insert','1559737252');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('132','admin','125.77.66.230','goods','insert','1559737283');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('133','admin','125.77.66.230','goods','insert','1559737334');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('134','admin','125.77.66.230','goods','insert','1559737430');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('135','admin','125.77.66.230','goods','insert','1559737475');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('136','admin','125.77.66.230','goods','insert','1559737525');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('137','admin','125.77.66.230','goods','insert','1559737576');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('138','南客','125.77.66.230','goods','insert','1559737602');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('139','admin','125.77.66.230','goods','insert','1559737618');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('140','admin','125.77.66.230','goods','insert','1559737650');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('141','admin','125.77.66.230','goods','update','1559737887');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('142','admin','125.77.66.230','goods','insert','1559737958');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('143','admin','125.77.66.230','goods','delete','1559738020');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('144','admin','125.77.66.230','goods','delete','1559738044');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('145','admin','125.77.66.230','goods','insert','1559738117');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('146','admin','125.77.66.230','goods','insert','1559738232');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('147','admin','125.77.66.230','goods','delete','1559738307');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('148','admin','125.77.66.230','goods','delete','1559738319');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('149','admin','125.77.66.230','goods','insert','1559738369');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('150','南客','125.77.66.230','slides','update','1559741082');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('151','南客','125.77.66.230','slides','update','1559741127');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('152','南客','125.77.66.230','slides','update','1559741346');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('153','南客','125.77.66.230','slides','update','1559741425');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('154','南客','125.77.66.230','slides','delete','1559741441');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('155','南客','125.77.66.230','nav','update','1559742188');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('156','南客','125.77.66.230','goods','update','1559890817');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('157','南客','125.77.66.230','goods','update','1559890902');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('158','南客','125.77.66.230','goods','insert','1559891017');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('159','南客','125.77.66.230','goods','update','1559891145');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('160','南客','125.77.66.230','goods','update','1559891164');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('161','南客','125.77.66.230','goods','update','1559891181');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('162','南客','125.77.66.230','goods','update','1559891193');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('163','南客','125.77.66.230','goods','update','1559891203');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('164','南客','125.77.66.230','goods','update','1559891220');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('165','南客','125.77.66.230','goods','update','1559891237');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('166','南客','125.77.66.230','goods','update','1559891248');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('167','南客','125.77.66.230','goods','update','1559891276');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('168','南客','125.77.66.230','goods','update','1559891299');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('169','南客','125.77.66.230','goods','update','1559891315');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('170','南客','125.77.66.230','goods','update','1559891519');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('171','南客','125.77.66.230','goods','update','1559891535');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('172','南客','125.77.66.230','goods','update','1559891548');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('173','南客','125.77.66.230','goods','update','1559891561');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('174','南客','125.77.66.230','goods','update','1559891577');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('175','南客','125.77.66.230','goods','update','1559891587');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('176','南客','125.77.66.230','goods','update','1559891603');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('177','南客','125.77.66.230','goods','update','1559891626');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('178','南客','125.77.66.230','goods','update','1559891655');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('179','南客','125.77.66.230','goods','update','1559891667');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('180','南客','125.77.66.230','goods','update','1559891684');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('181','南客','125.77.66.230','goods','update','1559891699');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('182','南客','125.77.66.230','goods','update','1559891724');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('183','南客','125.77.66.230','goods','update','1559891814');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('184','南客','124.72.46.203','goods','insert','1560231536');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('185','南客','124.72.46.203','ad','update','1560237728');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('186','南客','124.72.46.203','ad','update','1560237929');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('187','南客','124.72.46.203','ad','update','1560238043');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('188','南客','124.72.46.203','ad','update','1560238076');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('189','南客','124.72.46.203','ad','update','1560238163');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('190','南客','124.72.46.203','ad','update','1560238189');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('191','南客','124.72.46.203','ad','update','1560238241');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('192','南客','124.72.46.203','ad','update','1560238296');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('193','南客','124.72.46.203','ad','update','1560238380');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('194','南客','124.72.46.203','ad','update','1560238425');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('195','南客','124.72.46.203','ad','update','1560238526');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('196','南客','124.72.46.203','ad','update','1560238813');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('197','南客','124.72.46.203','ad','update','1560238916');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('198','南客','124.72.46.203','ad','update','1560239055');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('199','南客','124.72.46.203','ad','update','1560239597');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('200','南客','124.72.46.203','ad','update','1560239630');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('201','南客','124.72.46.203','ad','update','1560239669');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('202','南客','124.72.46.203','ad','update','1560239898');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('203','南客','124.72.46.203','ad','update','1560240438');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('204','南客','124.72.46.203','ad','update','1560240723');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('205','南客','124.72.46.203','ad','update','1560240755');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('206','南客','124.72.46.203','ad','update','1560240771');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('207','南客','124.72.46.203','ad','update','1560240883');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('208','南客','124.72.46.203','ad','update','1560241141');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('209','南客','124.72.46.203','ad','update','1560241332');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('210','南客','124.72.46.203','ad','update','1560241759');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('211','南客','124.72.46.203','ad','update','1560241977');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('212','南客','124.72.46.203','ad','update','1560242130');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('213','南客','124.72.46.203','ad','update','1560242682');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('214','南客','124.72.46.203','ad','update','1560242959');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('215','南客','124.72.46.203','ad','update','1560243171');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('216','南客','124.72.46.203','ad','update','1560243526');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('217','南客','124.72.46.203','slides','insert','1560246668');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('218','南客','124.72.46.203','slides','update','1560246767');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('219','南客','124.72.46.203','slides','update','1560246841');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('220','南客','124.72.46.203','slides','update','1560246865');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('221','南客','124.72.46.203','slides','update','1560247684');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('222','南客','124.72.46.203','slides','update','1560248497');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('223','南客','124.72.46.203','slides','update','1560248537');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('224','南客','124.72.46.203','slides','update','1560249016');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('225','南客','124.72.46.203','slides','update','1560249029');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('226','南客','124.72.46.203','slides','update','1560250457');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('227','南客','124.72.46.203','slides','update','1560251461');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('228','南客','124.72.46.203','slides','update','1560252000');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('229','南客','124.72.46.203','slides','insert','1560252573');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('230','南客','124.72.46.203','slides','update','1560253167');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('231','南客','124.72.46.203','slides','insert','1560253623');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('232','南客','124.72.46.203','slides','insert','1560256087');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('233','南客','124.72.46.203','slides','insert','1560256445');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('234','南客','124.72.46.203','slides','update','1560256996');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('235','南客','124.72.46.203','slides','update','1560257290');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('236','南客','124.72.46.203','slides','insert','1560257971');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('237','南客','124.72.46.203','slides','update','1560258355');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('238','南客','124.72.46.203','slides','update','1560328108');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('239','南客','124.72.46.203','slides','update','1560328539');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('240','南客','124.72.46.203','slides','update','1560328602');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('241','浮笙','124.72.46.203','ad','update','1560331688');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('242','浮笙','124.72.46.203','ad','update','1560333125');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('243','浮笙','124.72.46.203','ad','update','1560333558');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('244','浮笙','124.72.46.203','ad','update','1560333761');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('245','浮笙','124.72.46.203','ad','update','1560334313');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('246','admin','211.97.109.180','webset','set','1560791401');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('247','admin','211.97.109.180','mall','set','1560836889');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('248','admin','211.97.109.180','mall','set','1560838726');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('249','admin','211.97.109.180','menu','update','1560858472');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('250','admin','211.97.109.180','menu','update','1560858527');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('251','admin','211.97.109.180','menu','update','1560858612');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('252','admin','211.97.109.180','menu','update','1560858672');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('253','admin','211.97.109.180','menu','update','1560858978');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('254','admin','211.97.109.180','menu','update','1560859026');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('255','admin','211.97.109.180','menu','update','1560859036');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('256','admin','211.97.109.180','menu','update','1560859077');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('257','admin','211.97.109.180','hezuo','delete','1560859217');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('258','admin','211.97.109.180','hezuo','delete','1560859227');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('259','南客','124.72.47.132','hezuo','delete','1560860406');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('260','admin','211.97.109.180','menu','update','1560860503');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('261','admin','211.97.109.180','menu','update','1560860634');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('262','admin','211.97.109.180','menu','update','1560860709');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('263','admin','211.97.109.180','hezuo','delete','1560860725');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('264','admin','211.97.109.180','menu','update','1560860845');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('265','admin','211.97.109.180','menu','update','1560860855');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('266','admin','112.49.108.67','nav','update','1561028149');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('267','admin','112.49.108.67','nav','update','1561031953');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('268','admin','112.49.108.67','nav','update','1561032021');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('269','admin','112.49.108.67','bankuai','update','1561039568');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('270','admin','112.49.108.67','nav','update','1561039711');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('271','admin','112.49.108.67','bankuai','insert','1561039884');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('272','admin','112.49.108.67','bankuai','insert','1561039938');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('273','admin','112.49.108.67','goods','update','1561039950');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('274','admin','112.49.108.67','goods','update','1561039990');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('275','admin','112.49.108.67','bankuai','update','1561040011');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('276','admin','112.49.108.67','bankuai','update','1561040102');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('277','admin','112.49.108.67','goods','update','1561040112');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('278','admin','112.49.108.67','goods','update','1561040145');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('279','admin','112.49.108.67','nav','update','1561043803');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('280','admin','112.49.108.67','nav','update','1561043848');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('281','admin','112.49.108.67','goods','update','1561043868');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('282','admin','112.49.108.67','bankuai','delete','1561044343');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('283','admin','112.49.108.67','bankuai','insert','1561044454');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('284','admin','112.49.108.67','nav','update','1561044511');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('285','admin','112.49.108.67','nav','update','1561044554');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('286','admin','112.49.108.67','nav','delete','1561044566');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('287','admin','112.49.108.67','nav','insert','1561044584');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('288','admin','112.49.108.67','goods','update','1561044596');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('289','admin','112.49.108.67','bankuai','delete','1561044627');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('290','admin','112.49.108.67','nav','update','1561044684');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('291','admin','211.97.109.180','nav','update','1561373120');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('292','南客','120.32.54.58','goods','delete','1561443359');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('293','南客','120.32.54.58','goods','delete','1561443365');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('294','南客','120.32.54.58','goods','delete','1561443401');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('295','南客','120.32.54.58','goods','delete','1561443461');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('296','南客','120.32.54.58','goods','delete','1561443501');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('297','南客','120.32.54.58','goods','delete','1561443509');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('298','南客','120.32.54.58','goods','delete','1561443527');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('299','南客','125.77.66.57','mall','update','1561617598');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('300','南客','125.77.66.57','mall','update','1561617665');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('301','南客','125.77.66.57','goods','insert','1561626305');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('302','南客','125.77.66.57','goods','update','1561626314');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('303','南客','125.77.66.57','goods','insert','1561626376');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('304','南客','125.77.66.57','duoduo2010','insert','1561706186');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('305','南客','125.77.66.57','goods','insert','1561821437');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('306','南客','125.77.66.57','goods_type','insert','1561821571');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('307','南客','125.77.66.57','goods','insert','1561821660');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('308','南客','125.77.66.57','goods','insert','1561821760');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('309','南客','125.77.66.57','goods','insert','1561821822');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('310','南客','125.77.66.57','goods','update','1561821832');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('311','南客','125.77.66.57','goods','insert','1561821887');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('312','南客','125.77.66.57','goods','insert','1561821951');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('313','南客','125.77.66.57','goods','update','1561822026');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('314','南客','125.77.66.57','goods','update','1561822037');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('315','南客','125.77.66.57','goods','update','1561822048');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('316','南客','125.77.66.57','goods','update','1561822066');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('317','南客','125.77.66.57','goods','insert','1561822133');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('318','南客','125.77.66.57','goods','insert','1561822173');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('319','南客','125.77.66.57','goods','insert','1561822229');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('320','南客','125.77.66.57','goods','insert','1561822264');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('321','南客','125.77.66.57','goods','insert','1561822320');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('322','南客','125.77.66.57','goods','insert','1561822396');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('323','南客','125.77.66.57','goods','insert','1561822717');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('324','南客','125.77.66.57','goods','insert','1561823170');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('325','南客','125.77.66.57','goods','insert','1561823225');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('326','南客','125.77.66.57','goods','insert','1561823284');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('327','南客','125.77.66.57','goods','update','1561823293');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('328','南客','125.77.66.57','goods','insert','1561823392');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('329','南客','125.77.66.57','goods','insert','1561823502');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('330','南客','125.77.66.57','goods','insert','1561823542');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('331','南客','125.77.66.57','goods','insert','1561823652');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('332','南客','125.77.66.57','goods','update','1561823665');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('333','南客','125.77.66.57','goods','insert','1561823719');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('334','admin','121.204.26.253','goods','insert','1561823732');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('335','南客','125.77.66.57','goods','insert','1561823778');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('336','南客','125.77.66.57','goods','insert','1561823821');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('337','南客','125.77.66.57','goods','update','1561823833');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('338','admin','121.204.26.253','goods','insert','1561823853');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('339','南客','125.77.66.57','goods','insert','1561823933');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('340','南客','125.77.66.57','goods','update','1561823941');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('341','南客','125.77.66.57','goods','insert','1561824007');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('342','admin','121.204.26.253','goods','insert','1561824077');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('343','南客','125.77.66.57','goods','insert','1561824093');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('344','admin','121.204.26.253','goods','delete','1561824094');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('345','admin','121.204.26.253','goods','delete','1561824100');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('346','南客','125.77.66.57','goods','insert','1561824127');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('347','admin','121.204.26.253','goods','insert','1561824145');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('348','南客','125.77.66.57','goods','insert','1561824154');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('349','admin','121.204.26.253','goods','update','1561824171');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('350','admin','121.204.26.253','goods','update','1561824191');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('351','南客','125.77.66.57','goods','insert','1561824209');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('352','南客','125.77.66.57','goods','update','1561824236');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('353','南客','125.77.66.57','goods','insert','1561824288');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('354','南客','125.77.66.57','goods','update','1561824309');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('355','admin','121.204.26.253','goods','insert','1561824364');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('356','南客','125.77.66.57','goods','insert','1561824372');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('357','南客','125.77.66.57','goods','insert','1561824425');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('358','admin','121.204.26.253','goods','insert','1561824464');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('359','南客','125.77.66.57','goods','insert','1561824492');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('360','admin','121.204.26.253','goods','delete','1561824494');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('361','admin','121.204.26.253','goods','delete','1561824506');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('362','admin','121.204.26.253','goods','insert','1561824556');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('363','南客','125.77.66.57','goods','insert','1561824568');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('364','南客','125.77.66.57','goods','update','1561824589');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('365','南客','125.77.66.57','goods','update','1561824600');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('366','admin','121.204.26.253','goods','insert','1561824628');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('367','南客','125.77.66.57','goods','insert','1561824700');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('368','admin','121.204.26.253','goods','insert','1561824727');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('369','南客','125.77.66.57','goods','insert','1561824737');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('370','南客','125.77.66.57','goods','insert','1561824818');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('371','admin','121.204.26.253','goods','insert','1561824835');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('372','admin','121.204.26.253','goods','update','1561824857');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('373','南客','125.77.66.57','goods','insert','1561824884');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('374','admin','121.204.26.253','goods','update','1561824911');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('375','南客','125.77.66.57','goods','insert','1561824974');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('376','南客','125.77.66.57','goods','insert','1561825003');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('377','南客','125.77.66.57','goods','update','1561825014');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('378','admin','121.204.26.253','goods','insert','1561825016');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('379','南客','125.77.66.57','goods','insert','1561825075');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('380','南客','125.77.66.57','goods','insert','1561825113');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('381','南客','125.77.66.57','goods','insert','1561825144');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('382','admin','121.204.26.253','goods','insert','1561825150');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('383','南客','125.77.66.57','goods','insert','1561825190');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('384','南客','125.77.66.57','goods','insert','1561825250');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('385','admin','121.204.26.253','goods','insert','1561825260');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('386','南客','125.77.66.57','goods','insert','1561825316');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('387','admin','121.204.26.253','goods','insert','1561825329');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('388','南客','125.77.66.57','goods','insert','1561825386');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('389','南客','125.77.66.57','goods','insert','1561825446');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('390','admin','121.204.26.253','goods','insert','1561825454');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('391','南客','125.77.66.57','goods','insert','1561825495');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('392','南客','125.77.66.57','goods','update','1561825510');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('393','admin','121.204.26.253','goods','insert','1561825517');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('394','南客','125.77.66.57','goods','insert','1561825541');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('395','南客','125.77.66.57','goods','insert','1561825579');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('396','admin','121.204.26.253','goods','insert','1561825598');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('397','南客','125.77.66.57','goods','insert','1561825617');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('398','南客','125.77.66.57','goods','insert','1561825642');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('399','南客','125.77.66.57','goods','update','1561825651');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('400','admin','121.204.26.253','goods','insert','1561825674');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('401','南客','125.77.66.57','goods','update','1561825705');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('402','admin','121.204.26.253','goods','update','1561825757');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('403','南客','125.77.66.57','goods','update','1561825763');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('404','南客','125.77.66.57','goods','update','1561825794');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('405','南客','125.77.66.57','goods','update','1561825805');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('406','南客','125.77.66.57','goods','update','1561825830');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('407','admin','121.204.26.253','goods','delete','1561825839');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('408','admin','121.204.26.253','goods','delete','1561825848');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('409','南客','125.77.66.57','goods','update','1561826041');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('410','admin','121.204.26.253','goods','insert','1561826164');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('411','admin','121.204.26.253','goods','update','1561826227');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('412','admin','121.204.26.253','goods','insert','1561826282');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('413','admin','121.204.26.253','goods','insert','1561826345');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('414','admin','121.204.26.253','goods','insert','1561826446');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('415','admin','121.204.26.253','role','insert','1561858101');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('416','南客','125.77.66.57','hezuo','delete','1561869445');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('417','南客','125.77.66.57','hezuo','delete','1561869458');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('418','admin','121.204.26.253','goods','insert','1561902633');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('419','admin','121.204.26.253','goods','insert','1561902702');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('420','admin','121.204.26.253','goods','insert','1561902761');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('421','admin','121.204.26.253','goods','insert','1561902843');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('422','admin','121.204.26.253','goods','insert','1561902916');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('423','南客','121.204.26.253','goods','insert','1561976517');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('424','南客','121.204.26.253','goods','update','1561976536');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('425','南客','121.204.26.253','goods','update','1561976558');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('426','admin','121.204.26.253','goods','delete','1561978513');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('427','admin','121.204.26.253','goods','delete','1561978521');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('428','南客','125.77.66.57','goods','delete','1561979544');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('429','南客','125.77.66.57','goods','delete','1561979579');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('430','南客','121.204.26.253','goods','insert','1562051926');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('431','浮笙','121.204.26.253','goods','delete','1562053083');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('432','浮笙','121.204.26.253','goods','delete','1562053089');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('433','南客','125.77.66.57','slides','insert','1562058070');
INSERT INTO `duoduo_adminlog` (`id`,`admin_name`,`ip`,`mod`,`do`,`addtime`) VALUES('434','南客','125.77.66.57','slides','delete','1562058241');
