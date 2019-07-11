<?php exit;?>
DROP TABLE IF EXISTS `duoduo_msg`;
CREATE TABLE `duoduo_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `see` int(11) DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `senduser` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `admin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `senduser` (`senduser`),
  KEY `admin` (`admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_msg` (`id`,`title`,`content`,`addtime`,`see`,`uid`,`senduser`,`sid`,`admin`) VALUES('1','网站注册','尊敬的15659176979您好:欢迎注册一淘乐购，去淘宝网、淘宝商城购物最高返利35%。当当网、卓越网、凡客等上百家网上知名商城购物！一淘乐购让你省得多，活得更好，谢谢！','2019-05-23 13:38:38','1','1','0','0','');
INSERT INTO `duoduo_msg` (`id`,`title`,`content`,`addtime`,`see`,`uid`,`senduser`,`sid`,`admin`) VALUES('2','网站注册','尊敬的516063878您好:欢迎注册一淘乐购，去淘宝网、淘宝商城购物最高返利35%。当当网、卓越网、凡客等上百家网上知名商城购物！一淘乐购让你省得多，活得更好，谢谢！','2019-05-24 14:30:22','0','2','0','0','');
INSERT INTO `duoduo_msg` (`id`,`title`,`content`,`addtime`,`see`,`uid`,`senduser`,`sid`,`admin`) VALUES('3','网站注册','尊敬的test123您好:欢迎注册一淘乐购，去淘宝网、淘宝商城购物最高返利35%。当当网、卓越网、凡客等上百家网上知名商城购物！一淘乐购让你省得多，活得更好，谢谢！','2019-07-02 09:37:44','1','3','0','0','');
