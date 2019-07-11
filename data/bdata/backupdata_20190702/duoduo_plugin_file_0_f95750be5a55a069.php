<?php exit;?>
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
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('1','w_chaofan','m/mod/jump.act.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('2','w_chaofan','m/template/w_chaofan/about/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('3','w_chaofan','m/template/w_chaofan/about/xieyi.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('4','w_chaofan','m/template/w_chaofan/admin_set/index.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('5','w_chaofan','m/template/w_chaofan/admin_set/public.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('6','w_chaofan','m/template/w_chaofan/app/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('7','w_chaofan','m/template/w_chaofan/brand/list.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('8','w_chaofan','m/template/w_chaofan/brand/view.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('9','w_chaofan','m/template/w_chaofan/goods/bankuai.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('10','w_chaofan','m/template/w_chaofan/goods/data.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('11','w_chaofan','m/template/w_chaofan/goods/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('12','w_chaofan','m/template/w_chaofan/goods/search.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('13','w_chaofan','m/template/w_chaofan/goods/search_index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('14','w_chaofan','m/template/w_chaofan/goods/view.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('15','w_chaofan','m/template/w_chaofan/help/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('16','w_chaofan','m/template/w_chaofan/inc/css/app.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('17','w_chaofan','m/template/w_chaofan/inc/css/cf_u.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('18','w_chaofan','m/template/w_chaofan/inc/css/cf_wap.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('19','w_chaofan','m/template/w_chaofan/inc/css/common.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('20','w_chaofan','m/template/w_chaofan/inc/css/cs.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('21','w_chaofan','m/template/w_chaofan/inc/css/invite.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('22','w_chaofan','m/template/w_chaofan/inc/css/list.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('23','w_chaofan','m/template/w_chaofan/inc/css/swiper.min.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('24','w_chaofan','m/template/w_chaofan/inc/css/u.css','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('25','w_chaofan','m/template/w_chaofan/inc/footer.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('26','w_chaofan','m/template/w_chaofan/inc/header.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('27','w_chaofan','m/template/w_chaofan/inc/header_2.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('28','w_chaofan','m/template/w_chaofan/inc/images/1.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('29','w_chaofan','m/template/w_chaofan/inc/images/2.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('30','w_chaofan','m/template/w_chaofan/inc/images/20fd.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('31','w_chaofan','m/template/w_chaofan/inc/images/3.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('32','w_chaofan','m/template/w_chaofan/inc/images/30fl.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('33','w_chaofan','m/template/w_chaofan/inc/images/4.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('34','w_chaofan','m/template/w_chaofan/inc/images/5.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('35','w_chaofan','m/template/w_chaofan/inc/images/a01.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('36','w_chaofan','m/template/w_chaofan/inc/images/a02.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('37','w_chaofan','m/template/w_chaofan/inc/images/a03.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('38','w_chaofan','m/template/w_chaofan/inc/images/a04.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('39','w_chaofan','m/template/w_chaofan/inc/images/a05.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('40','w_chaofan','m/template/w_chaofan/inc/images/a06.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('41','w_chaofan','m/template/w_chaofan/inc/images/android.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('42','w_chaofan','m/template/w_chaofan/inc/images/androidg.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('43','w_chaofan','m/template/w_chaofan/inc/images/app_download.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('44','w_chaofan','m/template/w_chaofan/inc/images/appdown.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('45','w_chaofan','m/template/w_chaofan/inc/images/bdsj.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('46','w_chaofan','m/template/w_chaofan/inc/images/bg_main.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('47','w_chaofan','m/template/w_chaofan/inc/images/bg_mobile.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('48','w_chaofan','m/template/w_chaofan/inc/images/bg_wrap.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('49','w_chaofan','m/template/w_chaofan/inc/images/btn_captcha_refresh_s.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('50','w_chaofan','m/template/w_chaofan/inc/images/cf_loading.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('51','w_chaofan','m/template/w_chaofan/inc/images/cu.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('52','w_chaofan','m/template/w_chaofan/inc/images/fuzhi.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('53','w_chaofan','m/template/w_chaofan/inc/images/gotop.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('54','w_chaofan','m/template/w_chaofan/inc/images/guide_ios.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('55','w_chaofan','m/template/w_chaofan/inc/images/header_bner.jpg','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('56','w_chaofan','m/template/w_chaofan/inc/images/hot.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('57','w_chaofan','m/template/w_chaofan/inc/images/icon.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('58','w_chaofan','m/template/w_chaofan/inc/images/icon1.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('59','w_chaofan','m/template/w_chaofan/inc/images/icon_mobile (1).png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('60','w_chaofan','m/template/w_chaofan/inc/images/icon_mobile.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('61','w_chaofan','m/template/w_chaofan/inc/images/img_nocontent.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('62','w_chaofan','m/template/w_chaofan/inc/images/index.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('63','w_chaofan','m/template/w_chaofan/inc/images/input_bg.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('64','w_chaofan','m/template/w_chaofan/inc/images/iosg.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('65','w_chaofan','m/template/w_chaofan/inc/images/iphone.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('66','w_chaofan','m/template/w_chaofan/inc/images/jd.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('67','w_chaofan','m/template/w_chaofan/inc/images/jd_lm_cf.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('68','w_chaofan','m/template/w_chaofan/inc/images/jfb.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('69','w_chaofan','m/template/w_chaofan/inc/images/jiu.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('70','w_chaofan','m/template/w_chaofan/inc/images/lazy.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('71','w_chaofan','m/template/w_chaofan/inc/images/logo.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('72','w_chaofan','m/template/w_chaofan/inc/images/more.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('73','w_chaofan','m/template/w_chaofan/inc/images/new.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('74','w_chaofan','m/template/w_chaofan/inc/images/otherg.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('75','w_chaofan','m/template/w_chaofan/inc/images/overnew.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('76','w_chaofan','m/template/w_chaofan/inc/images/phb_01.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('77','w_chaofan','m/template/w_chaofan/inc/images/ppt_01.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('78','w_chaofan','m/template/w_chaofan/inc/images/process.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('79','w_chaofan','m/template/w_chaofan/inc/images/qq.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('80','w_chaofan','m/template/w_chaofan/inc/images/qzone.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('81','w_chaofan','m/template/w_chaofan/inc/images/re.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('82','w_chaofan','m/template/w_chaofan/inc/images/search_bg.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('83','w_chaofan','m/template/w_chaofan/inc/images/share.jpg','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('84','w_chaofan','m/template/w_chaofan/inc/images/shijiu.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('85','w_chaofan','m/template/w_chaofan/inc/images/sign.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('86','w_chaofan','m/template/w_chaofan/inc/images/sina.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('87','w_chaofan','m/template/w_chaofan/inc/images/song10close.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('88','w_chaofan','m/template/w_chaofan/inc/images/sousuo.jpg','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('89','w_chaofan','m/template/w_chaofan/inc/images/tool-index.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('90','w_chaofan','m/template/w_chaofan/inc/images/tool-online.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('91','w_chaofan','m/template/w_chaofan/inc/images/tool-sms.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('92','w_chaofan','m/template/w_chaofan/inc/images/tool-tel.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('93','w_chaofan','m/template/w_chaofan/inc/images/tool-tel1.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('94','w_chaofan','m/template/w_chaofan/inc/images/txweibo.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('95','w_chaofan','m/template/w_chaofan/inc/images/v0.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('96','w_chaofan','m/template/w_chaofan/inc/images/v1.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('97','w_chaofan','m/template/w_chaofan/inc/images/v2.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('98','w_chaofan','m/template/w_chaofan/inc/images/v3.gif','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('99','w_chaofan','m/template/w_chaofan/inc/images/wap.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('100','w_chaofan','m/template/w_chaofan/inc/images/wap1.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('101','w_chaofan','m/template/w_chaofan/inc/images/weixin.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('102','w_chaofan','m/template/w_chaofan/inc/images/weixinshare.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('103','w_chaofan','m/template/w_chaofan/inc/images/zhidemai.png','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('104','w_chaofan','m/template/w_chaofan/inc/js/appcan.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('105','w_chaofan','m/template/w_chaofan/inc/js/base64.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('106','w_chaofan','m/template/w_chaofan/inc/js/fun.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('107','w_chaofan','m/template/w_chaofan/inc/js/iscroll-lite.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('108','w_chaofan','m/template/w_chaofan/inc/js/iscroll.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('109','w_chaofan','m/template/w_chaofan/inc/js/jquery.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('110','w_chaofan','m/template/w_chaofan/inc/js/jquery.lazyload.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('111','w_chaofan','m/template/w_chaofan/inc/js/jquery22.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('112','w_chaofan','m/template/w_chaofan/inc/js/shopping_flow.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('113','w_chaofan','m/template/w_chaofan/inc/js/swiper.jquery.min.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('114','w_chaofan','m/template/w_chaofan/inc/js/utils.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('115','w_chaofan','m/template/w_chaofan/inc/js/zepto.min.js','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('116','w_chaofan','m/template/w_chaofan/inc/style/upload/1.jpg','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('117','w_chaofan','m/template/w_chaofan/inc/style/upload/2.jpg','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('118','w_chaofan','m/template/w_chaofan/inc/tdj.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('119','w_chaofan','m/template/w_chaofan/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('120','w_chaofan','m/template/w_chaofan/jump.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('121','w_chaofan','m/template/w_chaofan/mall/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('122','w_chaofan','m/template/w_chaofan/phb/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('123','w_chaofan','m/template/w_chaofan/public.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('124','w_chaofan','m/template/w_chaofan/tao/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('125','w_chaofan','m/template/w_chaofan/tao/list.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('126','w_chaofan','m/template/w_chaofan/tao/search.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('127','w_chaofan','m/template/w_chaofan/tao/view.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('128','w_chaofan','m/template/w_chaofan/tpl_info/index.jpg','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('129','w_chaofan','m/template/w_chaofan/tpl_info/info.txt','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('130','w_chaofan','m/template/w_chaofan/tpl_info/jieshao.html','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('131','w_chaofan','m/template/w_chaofan/user/app.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('132','w_chaofan','m/template/w_chaofan/user/confirm.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('133','w_chaofan','m/template/w_chaofan/user/index.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('134','w_chaofan','m/template/w_chaofan/user/invite.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('135','w_chaofan','m/template/w_chaofan/user/login.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('136','w_chaofan','m/template/w_chaofan/user/mingxi.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('137','w_chaofan','m/template/w_chaofan/user/msg.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('138','w_chaofan','m/template/w_chaofan/user/order.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('139','w_chaofan','m/template/w_chaofan/user/pwd.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('140','w_chaofan','m/template/w_chaofan/user/register.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('141','w_chaofan','m/template/w_chaofan/user/set.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('142','w_chaofan','m/template/w_chaofan/user/set_1.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('143','w_chaofan','m/template/w_chaofan/user/sign.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('144','w_chaofan','m/template/w_chaofan/user/tbnick.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('145','w_chaofan','m/template/w_chaofan/user/tixian.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('146','w_chaofan','m/template/w_chaofan/user/zhaohui.tpl.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('147','w_chaofan','plugin/w_chaofan/admin/index.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('148','w_chaofan','plugin/w_chaofan/comm.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('149','w_chaofan','plugin/w_chaofan/rewrite.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('150','w_chaofan','plugin/w_chaofan/set.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('151','w_chaofan','plugin/w_chaofan/update.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('152','queqiao','plugin/queqiao/admin/index.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('153','queqiao','plugin/queqiao/admin/list.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('154','queqiao','plugin/queqiao/comm.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('155','queqiao','plugin/queqiao/dd.class.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('156','queqiao','plugin/queqiao/mod/index.act.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('157','queqiao','plugin/queqiao/set.php','0');
INSERT INTO `duoduo_plugin_file` (`id`,`code`,`file`,`update_tag`) VALUES('158','queqiao','plugin/queqiao/update.php','0');
