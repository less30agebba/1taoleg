<?php exit;?>
DROP TABLE IF EXISTS `duoduo_slides`;
CREATE TABLE `duoduo_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `url` text,
  `title` varchar(100) DEFAULT NULL,
  `hide` int(11) DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '10',
  `cid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('6','upload/2019/0611/20431156651.06','https://item.taobao.com/item.htm?id=565290850993','3','0','1560246668','3','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('2','images/wap_1.jpg','女装','女装','0','1350221002','0','wap');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('3','upload/2019/0611/20480697188.06','https://detail.tmall.com/item.htm?id=555686276952','1','0','1558540484','0','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('4','upload/2019/0611/21055048180.06','https://detail.tmall.com/item.htm?id=592291654707','2','0','1558541277','0','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('7','upload/2019/0611/19292721130.06','https://item.taobao.com/item.htm?id=582715799959','4','0','1560252573','0','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('8','upload/2019/0611/19465959257.06','https://item.taobao.com/item.htm?id=588793847245','5','0','1560253623','0','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('9','upload/2019/0611/20280350414.06','https://detail.tmall.com/item.htm?id=532651714566','','0','1560256087','0','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('10','upload/2019/0612/16364034404.06','https://detail.tmall.com/item.htm?id=539385181370&spm=a310p.7395725.1998038907.1.78405564SVPGTe','6','0','1560256445','0','1');
INSERT INTO `duoduo_slides` (`id`,`img`,`url`,`title`,`hide`,`addtime`,`sort`,`cid`) VALUES('11','upload/2019/0611/20591958938.06','https://item.taobao.com/item.htm?id=575071256580','7','0','1560257971','0','1');
