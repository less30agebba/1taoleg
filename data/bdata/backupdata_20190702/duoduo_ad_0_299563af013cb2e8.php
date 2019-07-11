<?php exit;?>
DROP TABLE IF EXISTS `duoduo_ad`;
CREATE TABLE `duoduo_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `link` text,
  `title` varchar(100) DEFAULT NULL,
  `height` varchar(5) DEFAULT NULL,
  `width` varchar(5) DEFAULT NULL,
  `content` text,
  `adtype` varchar(255) DEFAULT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `edate` int(10) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `tag` varchar(200) DEFAULT NULL,
  `bgcolor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('1','','','广告位1','','','','首页中部','1343318193','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('2','','','广告位2','','','','购物返利中部','1343319319','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('3','','','广告位3','','','','商家详细页中部','1343319977','1','1483113600','1','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('4','','','广告位4（默认无）','','','','商城比价列表右侧','1343320101','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('5','images/zhidemai.jpg','','广告位5','313','240','','淘宝商品详细页右侧','1343320309','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('6','','','广告位6','','','','预留','1343320493','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('7','','','广告位7','','','','预留','1403660651','1','1483113600','1','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('10','','','广告位10','','','','积分兑换列表页/详细页','1343321928','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('11','','','广告位11','','1000','','分享晒单列表页/详细页','1343322076','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('13','','','广告位13','','','','会员中心顶部','1343322698','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('14','','','广告位14','','','','注册页面','1343323268','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('15','','','广告位15','','','','登陆页面','1343323332','1','1483113600','2','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('108','images/jifenbao.png','index.php?mod=tao&act=jifenbao','集分宝介绍','90','1000','','淘宝详细页下','1403660651','1','1483113600','1','','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('109','upload/2019/0612/18113815355.06','https://detail.tmall.com/item.htm?spm=a220m.1000858.1000725.13.360310bb8DJtpa&id=579267911344&user_id=3529560461&is_b=1&cat_id=2&q=%25CE%25DE%25C8%25CB%25BB%25FA%25BA%25BD%25C5%25C4%25B7%25C9%25D0%25D0%25C6%25F74k+%25B8%25DF%25C7%25E5+%25D7%25A8%25D2%25B5&rn=5fd22e4d92ad019689a1d2cff58022b9','','','','','首页广告','1558581675','0','1590163200','2','cx','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('110','upload/2019/0612/18023681464.06','https://detail.tmall.com/item.htm?id=558183852639&ali_refid=a3_420434_1006:1123215225:N:JAgPDeE/6BHhPZDOAScWPg==:5615026b125b78dbc7ecad29','','','','','首页广告2','1558581961','0','1590163200','2','cx1','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('111','upload/2019/0612/17515910187.06','https://item.taobao.com/item.htm?spm=a1z10.5-c-s.w4002-20542888400.50.674f60f3TuDhUP&id=595965619638','','','','','首页广告3','1558582105','0','1590163200','2','cx2','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('112','upload/2019/0611/16444075776.png','https://item.taobao.com/item.htm?id=585908858916','','','','','首页广告4','1558582160','0','1590163200','2','cx3','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('113','upload/2019/0611/16291179531.png','https://item.taobao.com/item.htm?id=590102551885','','','','','首页广告5','1558582194','0','1590163200','2','cx4','');
INSERT INTO `duoduo_ad` (`id`,`img`,`link`,`title`,`height`,`width`,`content`,`adtype`,`addtime`,`sys`,`edate`,`type`,`tag`,`bgcolor`) VALUES('114','upload/2019/0611/16584459808.png','https://item.taobao.com/item.htm?id=581378497429','','360','355','','cx8','1559583631','0','1591200000','2','cx8','');
