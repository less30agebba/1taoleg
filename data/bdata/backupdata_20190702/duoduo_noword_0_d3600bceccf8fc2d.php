<?php exit;?>
DROP TABLE IF EXISTS `duoduo_noword`;
CREATE TABLE `duoduo_noword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `replace` varchar(50) DEFAULT NULL,
  `title_arr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_noword` (`id`,`title`,`replace`,`title_arr`) VALUES('1','硬币','****','');
INSERT INTO `duoduo_noword` (`id`,`title`,`replace`,`title_arr`) VALUES('2','百家乐','****','');
INSERT INTO `duoduo_noword` (`id`,`title`,`replace`,`title_arr`) VALUES('3','网赚','****','');
