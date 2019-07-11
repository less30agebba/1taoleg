<?php exit;?>
DROP TABLE IF EXISTS `duoduo_cron_content`;
CREATE TABLE `duoduo_cron_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `val` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
