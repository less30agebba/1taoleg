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
DROP TABLE IF EXISTS `duoduo_adminlog`;
CREATE TABLE `duoduo_adminlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `mod` varchar(50) NOT NULL,
  `do` varchar(20) NOT NULL,
  `addtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_name` (`admin_name`),
  KEY `mod` (`mod`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_api`;
CREATE TABLE `duoduo_api` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `key` varchar(100) NOT NULL,
  `secret` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `open` int(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `back_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_apilogin`;
CREATE TABLE `duoduo_apilogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `webid` varchar(50) NOT NULL,
  `webname` varchar(50) NOT NULL,
  `web` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `webid` (`webid`),
  KEY `web` (`web`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_article`;
CREATE TABLE `duoduo_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `source` varchar(200) DEFAULT NULL,
  `content` text,
  `hits` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `keyword` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `sort` (`sort`),
  KEY `addtime` (`addtime`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_bankuai`;
CREATE TABLE `duoduo_bankuai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_color` varchar(20) DEFAULT NULL,
  `bg_color` varchar(255) DEFAULT NULL,
  `bankuai_tpl` varchar(255) DEFAULT NULL,
  `fenlei` int(11) DEFAULT '0',
  `api_cid` int(11) DEFAULT '0',
  `baoming` tinyint(4) DEFAULT '1',
  `bankuai_img` varchar(255) DEFAULT NULL,
  `bankuai_desc` varchar(255) DEFAULT NULL,
  `tuijian` tinyint(1) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `web_cid` text,
  `sort` int(11) DEFAULT '0',
  `mobile_status` int(1) NOT NULL DEFAULT '0',
  `mobile_logo` varchar(250) NOT NULL,
  `mobile_title` varchar(100) NOT NULL,
  `del` tinyint(1) DEFAULT '0',
  `quanju` tinyint(1) DEFAULT '0',
  `yugao` tinyint(1) DEFAULT '0',
  `data_from` tinyint(1) DEFAULT '0',
  `dan_api` varchar(255) DEFAULT NULL,
  `yun_cid` text,
  `time_type` tinyint(1) DEFAULT '0',
  `zj_stime` int(11) DEFAULT '0',
  `gd_stime` tinyint(1) DEFAULT '0',
  `gd_minute` varchar(255) DEFAULT '0',
  `etime` int(11) DEFAULT '0',
  `yugao_time` varchar(255) DEFAULT NULL,
  `huodong_time` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sys` tinyint(1) DEFAULT '0',
  `api_sort` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_baobei`;
CREATE TABLE `duoduo_baobei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `tao_id` bigint(12) NOT NULL,
  `trade_id` int(11) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `nick` varchar(50) DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `cid` int(2) NOT NULL DEFAULT '1',
  `click_url` text,
  `keywords` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  `hart` int(10) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL,
  `fabu_time` datetime DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `shop_title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `userimg` varchar(200) DEFAULT 'NULL',
  `status` int(1) DEFAULT '0',
  `reason` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tao_id` (`tao_id`),
  KEY `trade_id` (`trade_id`),
  KEY `title` (`title`),
  KEY `cid` (`cid`),
  KEY `sort` (`sort`),
  KEY `del` (`del`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_baobei_comment`;
CREATE TABLE `duoduo_baobei_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `baobei_id` int(11) NOT NULL,
  `comment` varchar(140) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `baobei_id` (`baobei_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_baobei_hart`;
CREATE TABLE `duoduo_baobei_hart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `baobei_id` int(11) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `baobei_id` (`baobei_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_buy_log`;
CREATE TABLE `duoduo_buy_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` bigint(15) NOT NULL DEFAULT '0',
  `iid` bigint(15) DEFAULT NULL,
  `day` datetime DEFAULT NULL,
  `keyword` varchar(200) DEFAULT NULL,
  `fxje` double(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `iid` (`iid`),
  KEY `day` (`day`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_collect`;
CREATE TABLE `duoduo_collect` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `laiyuan` tinyint(1) DEFAULT '0',
  `api_url` varchar(255) DEFAULT NULL,
  `sprice` double(10,2) DEFAULT '0.00',
  `eprice` double(10,2) DEFAULT '0.00',
  `cid_arr` text,
  `update_time` int(11) DEFAULT '0',
  `web_cid` int(11) DEFAULT '0',
  `api_kwd` varchar(255) DEFAULT NULL,
  `api_cid` int(11) DEFAULT '0',
  `yun_cid` text,
  `api_sort` char(20) DEFAULT NULL,
  `is_mall` char(50) DEFAULT NULL,
  `start_price` int(11) DEFAULT '0',
  `end_price` int(11) DEFAULT '0',
  `start_tk_rate` int(11) DEFAULT '0',
  `end_tk_rate` int(11) DEFAULT '0',
  `page_no` int(11) DEFAULT '0',
  `page_size` int(11) DEFAULT '0',
  `admin_name` varchar(255) DEFAULT NULL,
  `sys` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_cron`;
CREATE TABLE `duoduo_cron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `leixing` int(1) NOT NULL DEFAULT '0',
  `plugin_name` varchar(30) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `fangshi` int(1) NOT NULL DEFAULT '0',
  `execute_time` int(5) NOT NULL DEFAULT '0',
  `last_time` varchar(30) DEFAULT NULL,
  `jindu` int(1) NOT NULL DEFAULT '0',
  `dd` int(1) NOT NULL DEFAULT '0',
  `msg` varchar(200) DEFAULT NULL,
  `dev` varchar(200) DEFAULT NULL,
  `interval_time` int(10) NOT NULL DEFAULT '0',
  `random` int(10) NOT NULL DEFAULT '0',
  `sys` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_cron_content`;
CREATE TABLE `duoduo_cron_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `val` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_ddgoods`;
CREATE TABLE `duoduo_ddgoods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `lanmu` int(11) NOT NULL DEFAULT '0',
  `code` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `rate` double(4,2) NOT NULL DEFAULT '0.00',
  `level` int(3) NOT NULL DEFAULT '1',
  `nick` varchar(50) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `iid` bigint(20) NOT NULL DEFAULT '0',
  `diqu` varchar(200) DEFAULT NULL,
  `sell` int(11) NOT NULL DEFAULT '0',
  `logo` varchar(200) DEFAULT NULL,
  `shopname` varchar(200) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `dsr_cas` double(3,2) NOT NULL DEFAULT '0.00',
  `dsr_mas` double(3,2) NOT NULL DEFAULT '0.00',
  `dsr_sas` double(3,2) NOT NULL DEFAULT '0.00',
  `starttime` int(11) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '999999',
  `data_id` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `del` int(1) NOT NULL DEFAULT '0',
  `auditor` varchar(50) DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `baoyou` int(1) NOT NULL DEFAULT '0',
  `baoming` int(1) NOT NULL DEFAULT '0',
  `xiajia` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `lanmu` (`lanmu`),
  KEY `code` (`code`),
  KEY `price` (`price`),
  KEY `discount_price` (`discount_price`),
  KEY `shouji_price` (`shouji_price`),
  KEY `rate` (`rate`),
  KEY `level` (`level`),
  KEY `nick` (`nick`),
  KEY `user_id` (`user_id`),
  KEY `iid` (`iid`),
  KEY `endtime` (`endtime`),
  KEY `addtime` (`addtime`),
  KEY `sort` (`sort`),
  KEY `data_id` (`data_id`),
  KEY `del` (`del`),
  KEY `baoyou` (`baoyou`),
  KEY `xiajia` (`xiajia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_ddtuiguang`;
CREATE TABLE `duoduo_ddtuiguang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuid` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `order_id` int(11) NOT NULL DEFAULT '0',
  `mall` int(2) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `code` varchar(10) NOT NULL,
  `shuju_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `date` int(10) NOT NULL DEFAULT '0',
  `goods_id` varchar(32) DEFAULT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `weiyi` varchar(16) NOT NULL,
  `pay_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `weiyi` (`weiyi`),
  KEY `fuid` (`fuid`),
  KEY `status` (`status`),
  KEY `code` (`code`),
  KEY `shuju_id` (`shuju_id`),
  KEY `date` (`date`),
  KEY `goods_id` (`goods_id`),
  KEY `pay_time` (`pay_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_domain`;
CREATE TABLE `duoduo_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mod` varchar(20) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `close` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_duihuan`;
CREATE TABLE `duoduo_duihuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `spend` double(11,2) NOT NULL DEFAULT '0.00',
  `ip` varchar(20) DEFAULT NULL,
  `huan_goods_id` int(11) NOT NULL DEFAULT '0',
  `realname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` bigint(15) NOT NULL DEFAULT '0',
  `qq` varchar(20) DEFAULT NULL,
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `shoptime` int(10) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `mode` tinyint(1) NOT NULL DEFAULT '1',
  `why` varchar(255) DEFAULT NULL,
  `num` int(11) NOT NULL DEFAULT '1',
  `alipay` varchar(50) DEFAULT NULL,
  `code` text,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `huan_goods_id` (`huan_goods_id`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_duoduo2010`;
CREATE TABLE `duoduo_duoduo2010` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(30) DEFAULT NULL,
  `adminpass` varchar(50) DEFAULT NULL,
  `lastlogintime` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `lastloginip` varchar(15) DEFAULT NULL,
  `loginnum` int(11) DEFAULT '0',
  `logintime` int(10) NOT NULL DEFAULT '0',
  `loginip` varchar(15) DEFAULT NULL,
  `role` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminname` (`adminname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_file`;
CREATE TABLE `duoduo_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  `md5` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `path` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_gametask`;
CREATE TABLE `duoduo_gametask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `programname` varchar(100) DEFAULT NULL,
  `point` double(10,2) NOT NULL DEFAULT '0.00',
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `eventid` varchar(100) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventid` (`eventid`),
  KEY `memberid` (`memberid`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_goods`;
CREATE TABLE `duoduo_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `laiyuan` varchar(20) DEFAULT NULL,
  `laiyuan_type` tinyint(1) DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `content` text,
  `starttime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `fanli_bl` double(4,2) DEFAULT '0.00',
  `fanli_ico` tinyint(1) DEFAULT '0',
  `price_man` double(10,2) DEFAULT '0.00',
  `price_jian` double(10,2) DEFAULT '0.00',
  `lq_url` text,
  `nick` varchar(20) DEFAULT NULL,
  `sell` int(11) NOT NULL DEFAULT '0',
  `tg_url` text,
  `auditor` varchar(50) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `data_id` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `del` int(1) NOT NULL DEFAULT '0',
  `top` tinyint(1) DEFAULT '0',
  `top_stime` int(11) DEFAULT '0',
  `top_etime` int(11) DEFAULT '0',
  `goods_attribute` text,
  `oversell` tinyint(1) DEFAULT '0',
  `pinglun` int(11) DEFAULT '0',
  `ding` int(11) DEFAULT '0',
  `cai` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT '0',
  `spread` tinyint(1) DEFAULT '0',
  `xiajia` int(1) NOT NULL DEFAULT '0',
  `domain` varchar(255) DEFAULT NULL,
  `yun_jump` int(1) NOT NULL DEFAULT '0',
  `web_id` int(11) NOT NULL DEFAULT '0',
  `quan_total` int(11) DEFAULT '0',
  `quan_surplus` int(11) DEFAULT '0',
  `quan_receive` int(11) DEFAULT '0',
  `quan_condition` varchar(255) DEFAULT NULL,
  `quan_stime` int(11) DEFAULT '0',
  `quan_etime` int(11) DEFAULT '0',
  `quan_price` double(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `laiyuan_type` (`laiyuan_type`),
  KEY `cid` (`cid`),
  KEY `code` (`code`),
  KEY `title` (`title`),
  KEY `discount_price` (`discount_price`),
  KEY `price` (`price`),
  KEY `shouji_price` (`shouji_price`),
  KEY `starttime` (`starttime`),
  KEY `endtime` (`endtime`),
  KEY `nick` (`nick`),
  KEY `data_id` (`data_id`),
  KEY `addtime` (`addtime`),
  KEY `del` (`del`),
  KEY `top` (`top`),
  KEY `top_stime` (`top_stime`),
  KEY `top_etime` (`top_etime`),
  KEY `oversell` (`oversell`),
  KEY `sort` (`sort`),
  KEY `xiajia` (`xiajia`),
  KEY `domain` (`domain`),
  KEY `web_id` (`web_id`),
  KEY `quan_stime` (`quan_stime`),
  KEY `quan_etime` (`quan_etime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
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
DROP TABLE IF EXISTS `duoduo_goods_comment`;
CREATE TABLE `duoduo_goods_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_goods_vote`;
CREATE TABLE `duoduo_goods_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_id` (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_hezuo`;
CREATE TABLE `duoduo_hezuo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `content` text,
  `addtime` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `code` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_huan_goods`;
CREATE TABLE `duoduo_huan_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `jifen` int(10) NOT NULL DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `title` varchar(100) DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sort` int(10) DEFAULT '0',
  `content` text,
  `num` int(11) NOT NULL DEFAULT '1',
  `array` text,
  `auto` tinyint(1) NOT NULL DEFAULT '0',
  `sdate` int(10) NOT NULL DEFAULT '0',
  `edate` bigint(11) NOT NULL DEFAULT '0',
  `limit` int(11) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `hide` (`hide`),
  KEY `sort` (`sort`),
  KEY `sdate` (`sdate`),
  KEY `edate` (`edate`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_income`;
CREATE TABLE `duoduo_income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `date` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_kuaijie`;
CREATE TABLE `duoduo_kuaijie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_link`;
CREATE TABLE `duoduo_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_mall`;
CREATE TABLE `duoduo_mall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `pinyin` varchar(100) DEFAULT NULL,
  `merchant` varchar(20) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pindao_url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `cid` int(11) NOT NULL DEFAULT '0',
  `fan` varchar(15) DEFAULT NULL,
  `des` varchar(255) DEFAULT '暂无',
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `yiqifaurl` varchar(255) DEFAULT NULL,
  `lm` tinyint(2) NOT NULL DEFAULT '0',
  `edate` bigint(11) NOT NULL DEFAULT '0',
  `renzheng` tinyint(1) NOT NULL DEFAULT '1',
  `duomaiid` int(11) DEFAULT '0',
  `yiqifaid` int(11) DEFAULT '0',
  `chanetid` int(11) DEFAULT '0',
  `chanet_draftid` int(11) DEFAULT '0',
  `chaneturl` varchar(255) DEFAULT NULL,
  `weiyiid` varchar(20) DEFAULT NULL,
  `wujiumiaoid` int(10) NOT NULL DEFAULT '0',
  `wujiumiaourl` varchar(255) DEFAULT NULL,
  `yqhid` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `merchantId` int(11) DEFAULT '0',
  `score` double(3,2) NOT NULL DEFAULT '0.00',
  `pjnum` int(11) NOT NULL DEFAULT '0',
  `fuwu` varchar(255) DEFAULT '货到付款：有 正规发票：有 运费政策：购满XX免',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `domain` varchar(30) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `tbnick` varchar(50) DEFAULT NULL,
  `is_search` tinyint(1) DEFAULT '0',
  `banner` varchar(255) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `suoding` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `merchant` (`merchant`),
  KEY `cid` (`cid`),
  KEY `sort` (`sort`),
  KEY `edate` (`edate`),
  KEY `duomaiid` (`duomaiid`),
  KEY `yiqifaid` (`yiqifaid`),
  KEY `chanetid` (`chanetid`),
  KEY `wujiumiaoid` (`wujiumiaoid`),
  KEY `yqhid` (`yqhid`),
  KEY `del` (`del`),
  KEY `domain` (`domain`),
  KEY `host` (`host`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_mall_comment`;
CREATE TABLE `duoduo_mall_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mall_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fen` tinyint(1) NOT NULL DEFAULT '0',
  `content` text,
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mall_id` (`mall_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_mall_order`;
CREATE TABLE `duoduo_mall_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_time` int(10) NOT NULL DEFAULT '0',
  `mall_name` varchar(30) DEFAULT NULL,
  `mall_id` int(11) NOT NULL DEFAULT '0',
  `adid` varchar(15) NOT NULL,
  `uid` int(11) DEFAULT '0',
  `order_code` varchar(50) DEFAULT NULL,
  `item_count` int(5) DEFAULT '0',
  `item_price` double(10,2) NOT NULL DEFAULT '0.00',
  `sales` double(15,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `fxje` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(10) NOT NULL DEFAULT '0',
  `tgyj` double(8,2) NOT NULL DEFAULT '0.00',
  `addtime` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `qrsj` int(10) NOT NULL DEFAULT '0',
  `product_code` varchar(50) DEFAULT NULL,
  `lm` tinyint(1) NOT NULL DEFAULT '0',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `unique_id` varchar(100) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `domain` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`unique_id`),
  KEY `order_time` (`order_time`),
  KEY `mall_id` (`mall_id`),
  KEY `adid` (`adid`),
  KEY `uid` (`uid`),
  KEY `status` (`status`),
  KEY `platform` (`platform`),
  KEY `del` (`del`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_menu`;
CREATE TABLE `duoduo_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `node` varchar(20) NOT NULL,
  `mod` varchar(50) NOT NULL,
  `act` varchar(15) NOT NULL,
  `listorder` int(11) NOT NULL DEFAULT '0',
  `sort` int(5) NOT NULL DEFAULT '0',
  `title` varchar(20) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mod` (`mod`),
  KEY `act` (`act`),
  KEY `sort` (`sort`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_menu_access`;
CREATE TABLE `duoduo_menu_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_mingxi`;
CREATE TABLE `duoduo_mingxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `shijian` varchar(50) NOT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `jifen` int(5) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `source` varchar(250) DEFAULT NULL,
  `relate_id` int(11) NOT NULL DEFAULT '0',
  `leave_money` double(10,2) DEFAULT '0.00',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `leave_jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `leave_jifen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `shijian` (`shijian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
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
DROP TABLE IF EXISTS `duoduo_msgset`;
CREATE TABLE `duoduo_msgset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web` text,
  `email` text,
  `sms` text,
  `title` varchar(255) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `web_open` tinyint(1) NOT NULL DEFAULT '0',
  `email_open` tinyint(1) NOT NULL DEFAULT '0',
  `sms_open` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_nav`;
CREATE TABLE `duoduo_nav` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `url` text,
  `tip` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(5) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `auto` tinyint(1) NOT NULL DEFAULT '0',
  `target` tinyint(1) NOT NULL DEFAULT '0',
  `custom` varchar(255) DEFAULT NULL,
  `mod` varchar(50) DEFAULT NULL,
  `act` varchar(50) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `tag` varchar(10) DEFAULT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `alt` varchar(30) DEFAULT NULL,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `plugin` tinyint(1) NOT NULL DEFAULT '0',
  `lianjie` int(1) NOT NULL DEFAULT '0',
  `bankuai_name` varchar(50) DEFAULT NULL,
  `mod_name` varchar(50) DEFAULT NULL,
  `diaoyong` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
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
DROP TABLE IF EXISTS `duoduo_paipai_order`;
CREATE TABLE `duoduo_paipai_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dealId` int(11) NOT NULL DEFAULT '0',
  `discount` double(3,2) NOT NULL DEFAULT '0.00',
  `careAmount` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(8,2) NOT NULL DEFAULT '0.00',
  `realCost` double(8,2) NOT NULL DEFAULT '0.00',
  `bargainState` tinyint(1) NOT NULL DEFAULT '0',
  `chargeTime` int(11) NOT NULL DEFAULT '0',
  `commNum` int(11) NOT NULL,
  `commId` varchar(50) DEFAULT NULL,
  `commName` varchar(100) DEFAULT NULL,
  `classId` int(11) NOT NULL DEFAULT '0',
  `className` varchar(20) DEFAULT NULL,
  `shopId` bigint(20) NOT NULL DEFAULT '0',
  `shopName` varchar(100) NOT NULL,
  `outInfo` varchar(50) DEFAULT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `fxje` double(8,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `tgyj` double(5,2) NOT NULL DEFAULT '0.00',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `checked` tinyint(10) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `dealId` (`dealId`),
  KEY `uid` (`uid`),
  KEY `addtime` (`addtime`),
  KEY `checked` (`checked`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_plugin`;
CREATE TABLE `duoduo_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `key` varchar(50) DEFAULT NULL,
  `authcode` varchar(200) DEFAULT NULL,
  `mod` varchar(20) DEFAULT NULL,
  `act` varchar(20) DEFAULT NULL,
  `tag` varchar(20) DEFAULT NULL,
  `admin_set` tinyint(1) NOT NULL DEFAULT '0',
  `endtime` datetime DEFAULT NULL,
  `search_open` tinyint(1) NOT NULL DEFAULT '0',
  `search_name` varchar(10) DEFAULT NULL,
  `search_width` int(11) NOT NULL DEFAULT '40',
  `search_tip` varchar(30) DEFAULT NULL,
  `toper_name` varchar(30) DEFAULT NULL,
  `toper_qq` varchar(30) DEFAULT NULL,
  `banben` int(11) NOT NULL DEFAULT '0',
  `install` tinyint(1) NOT NULL DEFAULT '0',
  `jiaocheng` varchar(255) DEFAULT NULL,
  `need_include` tinyint(1) NOT NULL DEFAULT '0',
  `version` double(10,1) DEFAULT '0.0',
  `level` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_plugin_file`;
CREATE TABLE `duoduo_plugin_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `update_tag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `update_tag` (`update_tag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
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
DROP TABLE IF EXISTS `duoduo_qunfa_tag`;
CREATE TABLE `duoduo_qunfa_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sign` int(11) DEFAULT '0',
  `title` varchar(200) DEFAULT NULL,
  `num` int(11) DEFAULT '0',
  `ynum` int(11) DEFAULT '0',
  `msg` varchar(200) DEFAULT NULL,
  `content` text,
  `addtime` datetime DEFAULT NULL,
  `reset` int(11) DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sign` (`sign`),
  KEY `title` (`title`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_record_goods`;
CREATE TABLE `duoduo_record_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `laiyuan` varchar(20) DEFAULT NULL,
  `laiyuan_type` tinyint(1) DEFAULT '0',
  `cid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `discount_price` double(10,2) NOT NULL DEFAULT '0.00',
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `shouji_price` double(10,2) NOT NULL DEFAULT '0.00',
  `starttime` int(11) DEFAULT NULL,
  `endtime` int(11) DEFAULT NULL,
  `fanli_bl` double(4,2) DEFAULT '0.00',
  `fanli_ico` tinyint(1) DEFAULT '0',
  `price_man` double(10,2) DEFAULT '0.00',
  `price_jian` double(10,2) DEFAULT '0.00',
  `sell` int(11) NOT NULL DEFAULT '0',
  `goods_attribute` text,
  `type` int(1) NOT NULL DEFAULT '0',
  `goods_id` int(11) NOT NULL DEFAULT '0',
  `data_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `cid` (`cid`),
  KEY `title` (`title`),
  KEY `discount_price` (`discount_price`),
  KEY `price` (`price`),
  KEY `shouji_price` (`shouji_price`),
  KEY `starttime` (`starttime`),
  KEY `endtime` (`endtime`),
  KEY `type` (`type`),
  KEY `goods_id` (`goods_id`),
  KEY `data_id` (`data_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_role`;
CREATE TABLE `duoduo_role` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_seo`;
CREATE TABLE `duoduo_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mod` varchar(10) NOT NULL,
  `act` varchar(10) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `label` text,
  `sys` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_service`;
CREATE TABLE `duoduo_service` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `sort` int(10) NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_slides`;
CREATE TABLE `duoduo_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `url` text,
  `title` varchar(100) DEFAULT NULL,
  `hide` int(11) DEFAULT '0',
  `addtime` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '10',
  `cid` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_statement`;
CREATE TABLE `duoduo_statement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) DEFAULT NULL,
  `taocj` double(10,2) NOT NULL DEFAULT '0.00',
  `taoyj` double(10,2) NOT NULL DEFAULT '0.00',
  `taolr` double(10,2) NOT NULL DEFAULT '0.00',
  `paicj` double(10,2) NOT NULL DEFAULT '0.00',
  `paiyj` double(10,2) NOT NULL DEFAULT '0.00',
  `pailr` double(10,2) NOT NULL DEFAULT '0.00',
  `mallcj` double(10,2) NOT NULL DEFAULT '0.00',
  `mallyj` double(10,2) NOT NULL DEFAULT '0.00',
  `malllr` double(10,2) NOT NULL DEFAULT '0.00',
  `taskyj` double(10,2) NOT NULL DEFAULT '0.00',
  `tasklr` double(10,2) NOT NULL DEFAULT '0.00',
  `gameyj` double(10,2) NOT NULL DEFAULT '0.00',
  `gamelr` double(10,2) NOT NULL DEFAULT '0.00',
  `stime` datetime DEFAULT NULL,
  `dtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_taopid`;
CREATE TABLE `duoduo_taopid` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_task`;
CREATE TABLE `duoduo_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` int(11) DEFAULT NULL,
  `programname` varchar(100) DEFAULT NULL,
  `point` double(10,2) NOT NULL DEFAULT '0.00',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `eventid` varchar(100) DEFAULT NULL,
  `immediate` tinyint(1) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventid` (`eventid`),
  KEY `memberid` (`memberid`),
  KEY `del` (`del`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_tgyj`;
CREATE TABLE `duoduo_tgyj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tjrid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `hytx` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`),
  KEY `tjrid` (`tjrid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_tixian`;
CREATE TABLE `duoduo_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `money` double(10,2) NOT NULL DEFAULT '0.00',
  `money2` double(10,2) NOT NULL DEFAULT '0.00',
  `code` varchar(50) DEFAULT NULL,
  `addtime` int(10) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `realname` varchar(30) DEFAULT NULL,
  `mobile` bigint(20) NOT NULL DEFAULT '0',
  `why` varchar(255) DEFAULT NULL,
  `remark` text,
  `type` tinyint(1) NOT NULL DEFAULT '2',
  `api_return` varchar(100) DEFAULT NULL,
  `tool` int(1) NOT NULL DEFAULT '1',
  `wait` tinyint(1) NOT NULL DEFAULT '0',
  `dotime` int(10) DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `code` (`code`),
  KEY `ip` (`ip`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_tpl`;
CREATE TABLE `duoduo_tpl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `data` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_trade_time`;
CREATE TABLE `duoduo_trade_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trade_id` (`trade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_trade_uid`;
CREATE TABLE `duoduo_trade_uid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_uid` varchar(4) NOT NULL,
  `uid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_uid` (`trade_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_tradelist`;
CREATE TABLE `duoduo_tradelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_time` datetime DEFAULT NULL,
  `item_title` varchar(255) DEFAULT NULL,
  `shop_title` varchar(255) DEFAULT NULL,
  `num_iid` bigint(15) NOT NULL DEFAULT '0',
  `seller_nick` varchar(50) DEFAULT NULL,
  `pay_price` double(10,2) NOT NULL DEFAULT '0.00',
  `real_pay_fee` double(10,2) NOT NULL DEFAULT '0.00',
  `commission_rate` double(6,3) NOT NULL DEFAULT '0.000',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `item_num` int(11) NOT NULL DEFAULT '0',
  `trade_id` varchar(40) NOT NULL,
  `trade_id_former` bigint(20) NOT NULL DEFAULT '0',
  `outer_code` varchar(12) DEFAULT NULL,
  `qrsj` int(10) NOT NULL DEFAULT '0',
  `fxje` double DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `checked` int(1) DEFAULT '0',
  `ddjt` varchar(255) DEFAULT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `app_key` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category_name` varchar(20) DEFAULT NULL,
  `jifen` int(11) NOT NULL DEFAULT '0',
  `tgyj` double(5,2) NOT NULL DEFAULT '0.00',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `status` int(2) DEFAULT '0',
  `guanlian` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `mini_trade_id` bigint(20) NOT NULL DEFAULT '0',
  `pic_url` varchar(255) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_id` (`trade_id`),
  KEY `pay_time` (`pay_time`),
  KEY `num_iid` (`num_iid`),
  KEY `trade_id_former` (`trade_id_former`),
  KEY `checked` (`checked`),
  KEY `uid` (`uid`),
  KEY `mini_trade_id` (`mini_trade_id`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_tradelist2`;
CREATE TABLE `duoduo_tradelist2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_id` bigint(20) unsigned DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_id` (`trade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_tradelist_temp`;
CREATE TABLE `duoduo_tradelist_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_time` datetime DEFAULT NULL,
  `item_title` varchar(255) DEFAULT NULL,
  `shop_title` varchar(255) DEFAULT NULL,
  `num_iid` bigint(15) NOT NULL DEFAULT '0',
  `seller_nick` varchar(50) DEFAULT NULL,
  `pay_price` double(10,2) NOT NULL DEFAULT '0.00',
  `real_pay_fee` double(10,2) NOT NULL DEFAULT '0.00',
  `commission_rate` double(6,3) NOT NULL DEFAULT '0.000',
  `commission` double(10,2) NOT NULL DEFAULT '0.00',
  `item_num` int(11) NOT NULL DEFAULT '0',
  `trade_id` varchar(40) NOT NULL,
  `trade_id_former` bigint(20) NOT NULL DEFAULT '0',
  `outer_code` varchar(12) DEFAULT NULL,
  `qrsj` int(10) NOT NULL DEFAULT '0',
  `fxje` double DEFAULT '0',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `checked` int(1) DEFAULT '0',
  `ddjt` varchar(255) DEFAULT NULL,
  `uid` int(11) NOT NULL DEFAULT '0',
  `app_key` int(11) NOT NULL DEFAULT '0',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category_name` varchar(20) DEFAULT NULL,
  `jifen` int(11) NOT NULL DEFAULT '0',
  `tgyj` double(5,2) NOT NULL DEFAULT '0.00',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `status` int(2) DEFAULT '0',
  `guanlian` varchar(255) DEFAULT NULL,
  `addtime` int(11) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `mini_trade_id` bigint(20) NOT NULL DEFAULT '0',
  `pic_url` varchar(255) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `trade_id` (`trade_id`),
  KEY `pay_time` (`pay_time`),
  KEY `num_iid` (`num_iid`),
  KEY `trade_id_former` (`trade_id_former`),
  KEY `checked` (`checked`),
  KEY `uid` (`uid`),
  KEY `mini_trade_id` (`mini_trade_id`),
  KEY `del` (`del`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
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
DROP TABLE IF EXISTS `duoduo_user`;
CREATE TABLE `duoduo_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ddusername` varchar(30) DEFAULT NULL,
  `ddpassword` varchar(50) DEFAULT NULL,
  `realname` varchar(50) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `regip` varchar(20) DEFAULT NULL,
  `logip` varchar(20) DEFAULT NULL,
  `loginnum` int(11) DEFAULT '0',
  `lastlogintime` datetime DEFAULT NULL,
  `lasttixian` int(10) NOT NULL DEFAULT '0',
  `alipay` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `money` double(10,2) DEFAULT '0.00',
  `jifenbao` double(10,2) NOT NULL DEFAULT '0.00',
  `jifen` int(11) NOT NULL DEFAULT '0',
  `txstatus` tinyint(1) DEFAULT '0',
  `dhstate` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `tjr` int(11) NOT NULL DEFAULT '0',
  `tjr_over` int(11) NOT NULL DEFAULT '0',
  `mobile` bigint(15) NOT NULL DEFAULT '0',
  `mobile_test` tinyint(1) NOT NULL DEFAULT '0',
  `qq` varchar(20) DEFAULT NULL,
  `pass_question` varchar(250) DEFAULT NULL,
  `pass_answer` varchar(250) DEFAULT NULL,
  `yitixian` double(10,2) DEFAULT '0.00',
  `search` tinyint(1) NOT NULL DEFAULT '0',
  `jihuo` tinyint(1) NOT NULL DEFAULT '0',
  `hart` int(10) NOT NULL DEFAULT '0',
  `tbyitixian` double(11,2) NOT NULL DEFAULT '0.00',
  `ucid` int(11) NOT NULL DEFAULT '0',
  `hytx` tinyint(1) NOT NULL DEFAULT '0',
  `signtime` int(10) NOT NULL DEFAULT '0',
  `tenpay` varchar(50) DEFAULT NULL,
  `bank_name` varchar(20) DEFAULT NULL,
  `tbtxstatus` tinyint(1) NOT NULL DEFAULT '0',
  `txtool` tinyint(1) NOT NULL DEFAULT '1',
  `bank_code` varchar(20) DEFAULT '0',
  `platform` tinyint(1) NOT NULL DEFAULT '1',
  `trade_uid` varchar(200) DEFAULT '0',
  `tbnick` varchar(200) DEFAULT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(1) DEFAULT '0',
  `signnum` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ddusername` (`ddusername`),
  UNIQUE KEY `email` (`email`),
  KEY `loginnum` (`loginnum`),
  KEY `lastlogintime` (`lastlogintime`),
  KEY `alipay` (`alipay`),
  KEY `money` (`money`),
  KEY `jifenbao` (`jifenbao`),
  KEY `jifen` (`jifen`),
  KEY `txstatus` (`txstatus`),
  KEY `dhstate` (`dhstate`),
  KEY `level` (`level`),
  KEY `tjr` (`tjr`),
  KEY `mobile` (`mobile`),
  KEY `ucid` (`ucid`),
  KEY `tbtxstatus` (`tbtxstatus`),
  KEY `platform` (`platform`),
  KEY `trade_uid` (`trade_uid`),
  KEY `del` (`del`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_user_temp`;
CREATE TABLE `duoduo_user_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `sign` int(11) DEFAULT '0',
  `ddusername` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `sign` (`sign`),
  KEY `ddusername` (`ddusername`),
  KEY `mobile` (`mobile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_webset`;
CREATE TABLE `duoduo_webset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var` varchar(50) NOT NULL,
  `val` text,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `var` (`var`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
DROP TABLE IF EXISTS `duoduo_xinbiao`;
CREATE TABLE `duoduo_xinbiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goumai` varchar(30) DEFAULT NULL,
  `lianjie` varchar(50) DEFAULT NULL,
  `taocan` varchar(50) DEFAULT NULL,
  `leixing` varchar(50) DEFAULT NULL,
  `wangwang` varchar(50) DEFAULT NULL,
  `shouji` varchar(50) DEFAULT NULL,
  `shijian` varchar(50) DEFAULT NULL,
  `zhifu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
