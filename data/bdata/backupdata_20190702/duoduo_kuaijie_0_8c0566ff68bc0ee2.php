<?php exit;?>
DROP TABLE IF EXISTS `duoduo_kuaijie`;
CREATE TABLE `duoduo_kuaijie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('1','淘宝订单','index.php?mod=tradelist&act=list','2015-07-18 00:00:00');
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('2','商家订单','index.php?mod=mall_order&act=list','2015-07-18 00:00:00');
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('3','会员列表','index.php?mod=user&act=list','2015-07-18 00:00:00');
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('4','提现列表','index.php?mod=tixian&act=list','2015-07-18 00:00:00');
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('5','兑换记录','index.php?mod=duihuan&act=list','2015-07-18 00:00:00');
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('6','添加文章','index.php?mod=article&act=addedi','2015-07-18 00:00:00');
INSERT INTO `duoduo_kuaijie` (`id`,`title`,`url`,`addtime`) VALUES('8','收入报表','index.php?mod=baobiao&act=list','2015-07-18 00:00:00');
