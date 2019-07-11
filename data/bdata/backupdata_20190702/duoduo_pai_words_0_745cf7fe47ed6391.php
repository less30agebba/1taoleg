<?php exit;?>
DROP TABLE IF EXISTS `duoduo_pai_words`;
CREATE TABLE `duoduo_pai_words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wordName` varchar(200) DEFAULT NULL,
  `sClassid` int(11) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wordName` (`wordName`),
  KEY `sClassid` (`sClassid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
