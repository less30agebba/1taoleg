<?php exit;?>
DROP TABLE IF EXISTS `duoduo_role`;
CREATE TABLE `duoduo_role` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('1','超级管理员','1','1');
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('2','普通管理员','1','0');
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('3','商品管理员','1','0');
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('4','员工管理','1','0');
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('5','高层','1','0');
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('7','森','1','0');
INSERT INTO `duoduo_role` (`id`,`title`,`status`,`sys`) VALUES('8','鬼才二十三','1','0');
