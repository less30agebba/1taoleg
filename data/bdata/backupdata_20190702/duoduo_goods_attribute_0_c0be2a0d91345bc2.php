<?php exit;?>
DROP TABLE IF EXISTS `duoduo_goods_attribute`;
CREATE TABLE `duoduo_goods_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `font_color` varchar(255) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `ico` varchar(255) DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `sys` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_goods_attribute` (`id`,`title`,`font_color`,`bg_color`,`ico`,`beizhu`,`sort`,`sys`) VALUES('1','拍改','#ffffff','#ff0000','','拍下改价格','3','1');
INSERT INTO `duoduo_goods_attribute` (`id`,`title`,`font_color`,`bg_color`,`ico`,`beizhu`,`sort`,`sys`) VALUES('2','包邮','#ffffff','#3399ff','','大部分地区包邮','1','1');
INSERT INTO `duoduo_goods_attribute` (`id`,`title`,`font_color`,`bg_color`,`ico`,`beizhu`,`sort`,`sys`) VALUES('3','专享','#ffffff','#0000ff','','本站专享','2','1');
INSERT INTO `duoduo_goods_attribute` (`id`,`title`,`font_color`,`bg_color`,`ico`,`beizhu`,`sort`,`sys`) VALUES('4','限购','#FFFFFF','#636','','限购','4','1');
INSERT INTO `duoduo_goods_attribute` (`id`,`title`,`font_color`,`bg_color`,`ico`,`beizhu`,`sort`,`sys`) VALUES('5','到付','#FFFFFF','#EC1A5B','','货到付款','5','1');
