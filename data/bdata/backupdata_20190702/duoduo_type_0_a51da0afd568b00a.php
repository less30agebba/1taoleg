<?php exit;?>
DROP TABLE IF EXISTS `duoduo_type`;
CREATE TABLE `duoduo_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `tag` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('1','0','站点帮助','999999','article','0','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('2','0','网站公告','999999','article','0','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('3','1','新手教程说明','3','article','0','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('4','1','用户常见问题','4','article','0','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('5','1','网站频道说明','5','article','0','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('12','0','优惠券','0','huan_goods','1341645730','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('13','0','物品','0','huan_goods','1341645771','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('25','0','食品饮料','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('24','0','虚拟商品','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('23','0','旅行酒店','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('22','0','鞋包配饰','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('21','0','团购返利','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('20','0','图书音像','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('19','0','母婴用品','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('18','0','家庭生活','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('17','0','美容化妆','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('16','0','数码家电','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('15','0','服装服饰','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('14','0','综合商城','0','mall','0','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('26','2','会员中心公告','999999','article','1342668262','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('28','0','关于我们','999999','article','1345478179','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10006','0','居家','6','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10005','0','母婴','5','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10004','0','美食','4','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10003','0','美妆','3','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10002','0','鞋包','2','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10001','0','女装','1','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10007','0','数码','7','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10008','0','其他','8','goods','1427783899','1');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10010','0','口红','0','goods','1559627813','0');
INSERT INTO `duoduo_type` (`id`,`pid`,`title`,`sort`,`tag`,`addtime`,`sys`) VALUES('10011','0','男装','9','goods','1561821571','0');
