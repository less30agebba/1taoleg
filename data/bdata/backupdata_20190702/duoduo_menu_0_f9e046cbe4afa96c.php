<?php exit;?>
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
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('1','0','base','','','11092','0','网站设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('2','1','base','webset','center','0','100','后台中心','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('3','1','base','webset','set','0','999999','基本设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('5','1','base','ad','addedi','0','0','广告添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('6','214','tuiguang','ad','list','0','999999','广告管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('7','0','fun','','','10113','0','功能模块','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('8','7','fun','fun','upload','0','0','图片上传','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('9','1','base','ad','del','0','0','广告删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('10','214','tuiguang','slides','list','0','999999','幻灯片管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('11','214','tuiguang','slides','addedi','0','0','幻灯片添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('12','214','tuiguang','slides','del','0','0','幻灯片删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('17','213','tradelist','tradelist','list','0','9','淘宝订单','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('18','213','tradelist','tradelist','del','0','0','删除订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('19','213','tradelist','tradelist','report','0','0','获取订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('20','213','tradelist','tradelist','addedi','0','0','查看订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('21','1','base','tradelist','set','0','94','联盟设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('347','1','base','domain','del','0','0','域名删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('341','333','mobile','mobile','wap_set','0','0','wap设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('26','56','user','msg','list','0','4','会员咨询','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('27','214','tuiguang','link','list','0','999999','友情链接','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('28','56','user','msg','addedi','0','0','发送站内信','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('29','214','tuiguang','link','addedi','0','0','友情链接添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('30','1','base','nav','list','0','96','导航设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('31','1','base','nav','addedi','0','0','导航添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('32','1','base','service','list','0','86','客服设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('33','1','base','service','addedi','0','0','客服添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('34','1','base','smtp','set','0','80','邮件服务器管理','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('35','0','mall','','','11096','0','商家管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('36','1','base','mall','set','0','92','电商联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('37','35','mall','mall','list','0','999999','商家商城','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('38','35','mall','mall','addedi','0','0','商城添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('41','1','base','msgset','list','0','96','短信邮件设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('42','1','base','msgset','addedi','0','0','站内信修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('43','56','user','mall_comment','list','0','6','商城评论','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('44','56','user','mall_comment','addedi','0','0','查看商城评论','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('45','35','mall','mall_type','list','0','0','商城类别管理','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('46','35','mall','mall_type','addedi','0','0','商城类别添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('351','58','database','kuaijie','del','0','0','快捷菜单添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('53','212','goods','tuan_goods','update','0','0','内容更新','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('352','58','database','kuaijie','addedi','0','0','快捷菜单删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('353','212','goods','collect','yun_cid','0','0','采集','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('56','0','user','','','11098','0','会员管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('57','56','user','user','list','0','8','会员列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('58','0','database','','','11090','0','系统维护','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('59','58','database','data','list','0','97','数据库管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('60','56','user','user','addedi','0','0','会员修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('61','56','user','tixian','list','0','9','提现列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('62','56','user','tixian','addedi','0','0','处理提现','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('63','56','user','mingxi','list','0','3','会员明细','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('64','56','user','user','del','0','0','会员删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('66','212','goods','huan_goods','list','0','60','兑换商品','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('67','212','goods','huan_goods','addedi','0','0','兑换添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('68','213','tradelist','duihuan','list','0','3','兑换订单','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('69','213','tradelist','duihuan','addedi','0','0','审核兑换','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('70','58','database','data','backup','0','0','还原数据库','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('71','58','database','data','check','0','0','数据库检测','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('72','0','plug','','','11093','0','百宝箱','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('73','1','base','ucenter','set','0','84','论坛整合','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('74','56','user','ucenter','import','0','0','会员导入UC','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('75','1','base','user','set','0','89','会员设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('76','0','article','','','11095','0','文章管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('77','76','article','article_type','list','0','999999','文章分类','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('78','76','article','article_type','addedi','0','0','文章类别添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('79','76','article','article','list','0','999999','文章列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('80','76','article','article','addedi','0','0','文章添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('81','1','base','api','list','0','85','账号通设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('82','1','base','api','addedi','0','0','第三方登录修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('83','58','database','scan','check','0','88','木马查杀','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('84','72','plug','scan','do','0','0','处理木马文件','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('86','212','goods','baobei','list','0','40','晒单分享','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('87','212','goods','baobei','addedi','0','0','宝贝添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('88','1','base','baobei','set','0','90','晒单设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('89','56','user','baobei_comment','list','0','5','晒单评论','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('90','56','user','baobei_comment','addedi','0','0','查看评论','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('91','212','goods','baobei','del','0','0','宝贝删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('92','212','goods','baobei_blacklist','del','0','0','宝贝黑名单删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('93','212','goods','baobei_blacklist','list','0','0','宝贝黑名单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('94','58','database','noword','list','0','95','敏感词管理','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('95','58','database','noword','addedi','0','0','敏感词添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('97','58','database','spider','set','0','0','蜘蛛限制','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('98','1','base','seo','set','0','87','加密设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('99','1','base','seo','list','0','87','seo管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('100','1','base','seo','addedi','0','0','seo添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('101','1','base','seo','del','0','0','seo删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('102','0','admin','','','11090','0','管理员','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('103','102','admin','role','list','0','999999','管理员组','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('104','102','admin','role','addedi','0','0','管理员组添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('105','102','admin','role','del','0','0','管理员组删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('106','102','admin','duoduo2010','list','0','999999','管理员列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('107','102','admin','duoduo2010','addedi','0','0','管理员添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('108','102','admin','duoduo2010','del','0','0','管理员删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('109','102','admin','menu','list','0','97','管理菜单','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('110','102','admin','menu','addedi','0','0','菜单添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('113','58','database','adminlog','list','0','91','系统日志','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('114','102','admin','adminlog','del','0','0','日志删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('115','58','database','webserver','info','0','92','时间校对','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('116','58','database','webserver','set','0','93','环境检测','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('118','214','tuiguang','link','del','0','0','友情链接删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('119','1','base','nav','del','0','0','导航删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('120','1','base','service','del','0','0','客服删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('121','58','database','noword','del','0','0','敏感词删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('339','333','mobile','mobile','wap_templete','0','0','wap模板设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('123','35','mall','mall','del','0','0','商城删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('125','56','user','mall_comment','del','0','0','商城评论删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('126','35','mall','mall_type','del','0','0','商城类别删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('129','56','user','tixian','del','0','0','提现删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('130','56','user','mingxi','del','0','0','明细删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('131','1','base','api','del','0','0','第三方api删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('132','212','goods','huan_goods','del','0','0','兑换商品删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('133','213','tradelist','duihuan','del','0','0','兑换申请删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('134','76','article','article_type','del','0','0','文章栏目删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('135','76','article','article','del','0','0','文章删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('136','56','user','baobei_comment','del','0','0','宝贝评论删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('137','7','fun','fun','cache','0','0','更新全站缓存','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('321','213','tradelist','tradelist','list_temp','0','0','淘宝临时订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('142','213','tradelist','mall_order','list','0','6','商城订单','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('143','213','tradelist','mall_order','addedi','0','0','商城订单查看','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('144','213','tradelist','mall_order','del','0','0','商城订单删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('145','35','mall','mall_order','get','0','0','获取商城订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('148','56','user','phpwind','set','0','0','phpwind整合','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('151','56','user','phpwind','import','0','0','phpwind会员导入','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('150','102','admin','menu','del','0','0','删除后台菜单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('381','214','tuiguang','user_temp','list','0','0','临时会员数据','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('328','212','goods','bankuai','del','0','0','版块删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('349','212','goods','goods','paixu','0','0','商品','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('155','213','tradelist','tradelist','import','0','0','导入淘宝订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('156','72','plug','bshare','set','0','0','bshare分享','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('157','72','plug','bshare','code','0','0','bshare代码调用','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('158','72','plug','bshare','count','0','0','bshare统计','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('159','212','goods','huan_goods_type','list','0','0','兑换类别管理','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('160','212','goods','huan_goods_type','addedi','0','0','兑换类别增加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('161','212','goods','huan_goods_type','del','0','0','兑换类别删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('164','214','tuiguang','seo','arr','0','0','自定义网址','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('166','35','mall','yiqifaapi','set','0','0','亿起发开放平台','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('168','1','base','tao_index','tag','0','0','淘宝首页tag设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('169','58','database','upgrade','index','0','95','程序升级','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('170','58','database','scan','file','0','89','文件校对','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('173','1','base','template','set','0','999999','模板设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('175','56','user','msg','del','0','0','站内信删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('176','76','article','article','removecid','0','0','文章移动栏目','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('178','1','base','paipai_order','set','0','93','拍拍易推广设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('179','213','tradelist','paipai_order','list','0','4','拍拍订单','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('180','213','tradelist','paipai_order','report','0','0','获取订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('181','213','tradelist','paipai_order','addedi','0','0','退款确认','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('182','1','base','paipai_index','tag','0','0','拍拍首页tag设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('183','213','tradelist','paipai_order','del','0','0','拍拍订单删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('186','35','mall','wujiumiao','set','0','0','59秒开放平台','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('187','72','plug','plugin','bbx','0','999999','产品列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('189','1','base','tixian','set','0','88','提现设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('190','1','base','tixian','bank','0','0','提现银行管理','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('191','56','user','user','award','0','0','金额积分修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('192','1','base','sms','set','0','0','短信设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('197','72','plug','plugin','list','0','999999','订单列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('198','72','plug','plugin','addedi','0','0','百宝箱订单添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('199','72','plug','plugin','del','0','0','百宝箱订单删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('201','72','plug','plugin','down','0','0','应用下载','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('202','72','plug','plugin','loading','0','0','应用加载','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('203','72','plug','plugin','admin','0','0','应用设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('204','72','plug','plugin','update','0','0','应用更新','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('205','212','goods','goods_type','list','0','10','商品分类','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('206','212','goods','goods_type','addedi','0','0','添加修改自定义分类','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('207','212','goods','goods_type','del','0','0','删除分类','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('208','1','base','tradelist','taodianjin','0','80','淘点金设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('209','72','plug','plugin','file','0','0','应用文件','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('210','56','user','buy_log','list','0','0','淘宝浏览历史','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('211','72','plug','plugin','alimama','0','0','淘宝联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('212','0','goods','','','11100','0','商品管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('213','0','tradelist','','','11099','0','订单管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('214','0','tuiguang','','','11097','0','运营推广','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('215','0','baobiao','','','11094','0','统计报表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('333','0','mobile','','','11091','0','无线设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('233','214','tuiguang','tuiguang','share','0','88','会员激励','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('220','213','tradelist','task','list','0','7','任务订单','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('221','1','base','sitemap','list','0','97','网站地图','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('222','214','tuiguang','tuiguang','zhuce','0','94','注册营销','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('223','214','tuiguang','tuiguang','sign','0','92','签到营销','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('224','214','tuiguang','tuiguang','zhuanti','0','91','专题制作','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('225','214','tuiguang','tuiguang','tuiguang','0','90','邀请好友','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('226','215','baobiao','baobiao','list','0','999999','收入报表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('227','215','baobiao','baobiao','rank','0','999999','返利排名','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('228','215','baobiao','baobiao','tuiguang','0','96','推广排名','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('229','215','baobiao','baobiao','yunying','0','95','运营报表','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('230','215','baobiao','baobiao','share','0','94','分享排名','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('288','214','tuiguang','tuiguang','jiang','0','0','会员奖励','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('234','58','database','database','overdue','0','999999','过期/下架检测','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('345','212','goods','collect','del','0','0','采集删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('236','58','database','database','cache','0','96','缓存管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('237','58','database','database','plugin','0','94','插件升级','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('238','58','database','database','recycle','0','90','回收站','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('325','58','database','cron','addedi','0','0','计划任务添加/修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('322','212','goods','goods_attribute','list','0','0','属性表','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('323','212','goods','goods_attribute','addedi','0','0','商品属性增加','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('324','58','database','cron','list','0','0','计划任务管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('244','212','goods','ddzhidemai','list','0','100','值得买商品','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('245','212','goods','goods','lanmu','0','1','栏目设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('326','58','database','cron','del','0','0','计划任务删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('249','1','base','task','set_2','0','91','任务模块二','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('250','1','base','task','set_1','0','91','任务网赚设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('253','212','goods','ddzhidemai','del','0','0','值得买删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('254','212','goods','ddzhidemai','addedi','0','0','值得买修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('255','212','goods','goods','addedi','0','0','添加/修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('256','212','goods','goods','list','0','70','网站商品','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('257','1','base','gametask','iframe','0','0','查看信息','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('258','1','base','offer','iframe','0','0','查看信息','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('259','1','base','ddzhidemai','set','0','0','值得买设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('343','1','base','template','admin_set','0','0','模板设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('263','1','base','task','set','0','0','任务网赚设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('264','1','base','task','report','0','0','任务返利获取订单','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('265','1','base','task','tixian','0','0','任务返利结算列表','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('273','1','base','baobiao','addedi','0','0','报表更新','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('275','212','goods','goods','del','0','0','网站商品删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('371','1','base','mall','weiyi_set','0','0','唯一联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('370','1','base','mall','duomai_set','0','0','多麦联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('357','56','user','goods_comment','del','0','0','商品评论删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('283','58','database','database','debug','0','0','技术调试','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('282','58','database','database','del','0','0','删除过期商品','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('285','214','tuiguang','tuiguang','jiangli','0','999999','会员奖励','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('350','58','database','kuaijie','list','0','0','快捷菜单列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('287','215','baobiao','baobiao','paiming','0','0','会员排名','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('289','56','user','tuiguang','list','0','2','晒单奖励','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('290','215','baobiao','baobiao','tixian','0','0','结算报表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('291','7','fun','type','list','0','0','分类管理','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('292','215','baobiao','baobiao','rank_jine','0','0','金额排名','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('293','215','baobiao','baobiao','share_jifen','0','0','晒单积分排名','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('295','213','tradelist','task','del','0','0','任务订单删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('298','58','database','database','jiance','0','0','违规词检测','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('299','214','tuiguang','tuiguang','search','0','0','搜索推广','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('300','1','base','shangjia','set','0','0','商家报名设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('302','212','goods','hezuo','addedi','0','0','卖家报名查看','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('303','212','goods','hezuo','del','0','0','卖家报名删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('304','212','goods','bankuai','list','0','30','板块分类','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('305','212','goods','ddgoods_type','list','0','0','商品分类','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('306','212','goods','bankuai','addedi','0','0','板块添加修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('319','1','base','webset','fanli_set','0','0','返利设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('307','1','base','domain','list','0','0','域名设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('308','1','base','domain','addedi','0','0','添加域名','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('309','212','goods','ddgoods_type','addedi','0','0','商品分类','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('310','212','goods','ddgoods_type','del','0','0','商品分类删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('311','212','goods','bankuai','caiji','0','0','版块采集','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('312','212','goods','ddgoods_attribute','list','0','0','商品属性','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('313','1','base','ddgoods_attribute','addedi','0','0','商品属性添加/需改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('314','212','goods','goods','time_set','0','0','默认时间设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('315','212','goods','bankuai','yun','0','0','云规则','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('316','212','goods','collect','list','0','20','采集管理','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('317','212','goods','collect','yun','0','0','云规则','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('318','212','goods','collect','addedi','0','0','规则添加/修改','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('320','102','admin','menu','s_list','0','0','后台菜单搜索','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('377','35','mall','hezuo','list','0','0','商家报名列表','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('346','212','goods','collect','caiji','0','0','规则采集','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('348','1','base','bijia','set','0','0','全网搜索设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('354','56','user','goods_comment','list','0','7','商品评论','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('355','56','user','goods_comment','addedi','0','0','商品评论编辑','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('372','1','base','mall','wujiumiao_set','0','0','59秒联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('373','1','base','mall','yiqifa_set','0','0','亿起发联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('374','1','base','mall','linktech_set','0','0','领科特联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('375','1','base','mall','chanet_set','0','0','成果联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('376','1','base','mall','yqh_set','0','0','一起惠联盟设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('378','212','goods','goods_attribute','del','0','0','商品属性删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('379','1','base','webset','upload_set','0','0','上传设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('380','333','mobile','phone_app','phone','0','0','手机客户端设置','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('382','214','tuiguang','user_temp','del','0','0','临时会员数据删除','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('383','214','tuiguang','user_temp','qunfa_set','0','0','群发设置','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('384','214','tuiguang','user_temp','qunfa','0','0','会员群发','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('385','214','tuiguang','user_temp','qunfa_tag','0','0','消息群发','','0','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('386','214','tuiguang','user_temp','qunfa_jilu','0','0','已发记录','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('387','1','base','tradelist','tbname','0','0','设置淘宝账号','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('388','212','goods','goods','s_list','0','0','商品排序','','1','0');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('389','1','base','taopid','addedi','0','0','修改pid','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('390','1','base','taopid','list','0','0','淘宝联盟PID','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('391','1','base','taopid','del','0','0','删除pid','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('431','213','tradelist','tradelist','huanren','0','0','淘宝订单更换会员','','1','1');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('432','213','tradelist','tradelist','dingwei','0','0','查看淘宝订单会员来源','','1','0');
INSERT INTO `duoduo_menu` (`id`,`parent_id`,`node`,`mod`,`act`,`listorder`,`sort`,`title`,`url`,`hide`,`sys`) VALUES('433','213','tradelist','tradelist','cha','0','0','淘宝订单检查','','1','1');
