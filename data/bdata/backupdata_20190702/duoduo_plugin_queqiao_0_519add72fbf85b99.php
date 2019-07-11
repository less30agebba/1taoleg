<?php exit;?>
DROP TABLE IF EXISTS `duoduo_plugin_queqiao`;
CREATE TABLE `duoduo_plugin_queqiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(50) DEFAULT NULL,
  `data_id` bigint(12) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `fanli_bl` double(4,2) NOT NULL DEFAULT '0.00',
  `sell` int(11) DEFAULT '0',
  `goods_attribute` text,
  `laiyuan` varchar(10) DEFAULT NULL,
  `laiyuan_type` tinyint(1) DEFAULT '0',
  `tg_url` text,
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `price_man` double(10,2) NOT NULL DEFAULT '0.00',
  `price_jian` double(10,2) NOT NULL DEFAULT '0.00',
  `lq_url` text,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `quan_total` int(11) DEFAULT '0',
  `quan_surplus` int(11) DEFAULT '0',
  `quan_receive` int(11) DEFAULT '0',
  `quan_condition` varchar(255) DEFAULT NULL,
  `quan_stime` int(11) DEFAULT '0',
  `quan_etime` int(11) DEFAULT '0',
  `quan_price` double(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `quan_stime` (`quan_stime`),
  KEY `quan_etime` (`quan_etime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
