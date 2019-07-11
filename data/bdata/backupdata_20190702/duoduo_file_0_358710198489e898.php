<?php exit;?>
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
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('1','/comm/pic_upload.class.php','14495','1498279293','feb50135194bb73fe39dd90140de4b2e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('2','/comm/getchanet.php','73','1437354809','3a2771297d6f1fe1ac2629beeef19512');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('3','/comm/get59miao.php','73','1437354816','8c6fd6ce776debb0ee299f7802e229af');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('4','/comm/taoapi_Util.php','37801','1434590490','09c75f77ef6c2e5fede53e61e3d78182');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('5','/comm/lib.php','446','1434590490','603ef9cf7e648c9f156c29319f348612');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('6','/comm/trade.class.php','23476','1529989720','ebec2baa805c09fa03ff6d931f1e3cf2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('7','/comm/mallapi.config.php','524','1437354809','54ead5c3a99c609ba40bc6d2dc465fe9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('8','/comm/taoapi_Session.php','4381','1434590490','75f3caffb53a2bb69dd34dfc10630143');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('9','/comm/ddyun.class.php','237','1437354816','7c5b7a432e2b60f81317c10c86eb8176');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('10','/comm/yzm.php','5316','1437354809','42631293777f617f5e0d0a440bf019b6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('11','/comm/uc_define.php','802','1437354816','92161fdfb204e1c179fc86482b150465');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('12','/comm/dd.func.php','17944','1499064305','5ca24f5aa3577c1dd38d2d16d5e13788');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('13','/comm/paipai.class.php','9110','1434590490','ff11a106a4e11c0556f64f3bac411f0f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('14','/comm/ddTaoapi.class.php','34271','1542616901','257e7db006d862bfd07c9068f71beee4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('15','/comm/taoapi_Config.inc.php','3263','1434590490','dde8b125d4ee525d5d56555bda87bf9a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('16','/comm/converter.php','700846','1437354816','e41807eca192023cb2ef011381ef1edf');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('17','/comm/cron.class.php','8009','1500873225','298b95ede1f93c0d8b098099e7b27fee');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('18','/comm/readxls.php','49061','1506592169','27ebecf8e3f26f7440ac12705f5d383e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('19','/comm/json.php','34652','1440239310','2d9f2cfe9cb8f72d78fa3770188eb8cb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('20','/comm/rewrite.class.php','3731','1461652147','31818c4efd8de33d27629491fa0d9dd8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('21','/comm/getddopen.php','833','1437354809','8faff5cfc8fd9f7955ec06f389d988bd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('22','/comm/ddTuan.class.php','13230','1437354809','74850aef214eedb911cee37e139ce8a6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('23','/comm/pinyin.class.php','6538','1434590490','9d4c045b36412a1e306b53ba07c68198');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('24','/comm/jssdk.error.php','18','1437354809','86c452b1b619dc8c0d23f283ee3ec9af');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('25','/comm/tdj_tpl.php','593','1467162438','f4f289ac19e045c369c59a5f5bc3e594');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('26','/comm/upload.class.php','14481','1437354809','0037b20a486527d6afaac60babe8594e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('27','/comm/thumb.class.php','24162','1434590490','049e811546157c70693175498611321a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('28','/comm/collect.class.php','16484','1436144716','4bdaa32b145b1d3e582e1e1ef4c5e2b4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('29','/comm/tblm.class.php','5130','1437102857','140fe5ebee90a4b536f14e14713acdc0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('30','/comm/ftp.class.php','11604','1435285976','56e5798fa5eb311dfb7a926374ab3ae7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('31','/comm/ddUpgrade.class.php','11672','1434590490','222aa1631a8e3ab98ad4d5f5195e928d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('32','/comm/Taoapi.php','21975','1493975699','5b7210f1950b0ba69d8c6f4d8345cc61');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('33','/comm/phpqrcode.php','121894','1437354816','f03c4d6681e372dbf3bb9cd78efb69e7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('34','/comm/goods.class.php','21750','1542606372','a065248270e4c48ee796e0bbb1ff2105');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('35','/comm/ddopen.class.php','6231','1493013388','83d79b5edac44df54af1671a4a3cbc37');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('36','/comm/mall.class.php','2893','1434613766','6e83b3a4c9bb24a3803260cf90143234');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('37','/comm/define.php','1387','1475915732','d8aeb75bc426f6811d0194167101bba0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('38','/comm/alimama.class.php','5477','1436144716','f502bae25a23fd76d834558950f8d2fd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('39','/comm/OLERead.inc','8574','1437354816','6c21a9a3727957af18996b11c539e408');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('40','/comm/yiqifa.class.php','5268','1437354809','2af67f224e3e8454e971e3ff4005224b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('41','/comm/sms.class.php','6272','1493013388','30a54b7994a2660ca1e90c0c2879741d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('42','/comm/dd.class.php','109836','1511762420','c4f23a5bf2cc7ddfeda5871a25b9fa83');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('43','/comm/class.phpmailer.php','59049','1437354815','0b5cd255b17419dfdbb4f1213d954cc1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('44','/comm/class.smtp.php','32860','1437354816','52f374f4c8c2dab3ceb16de8bd172a61');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('45','/comm/ddu.class.php','4479','1450676932','4e83a4fe8db2e10f1296c144735daf46');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('46','/comm/checkpostandget.php','24','1437354809','b6bb6d0b9ade5c883633f51f0cf62575');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('47','/comm/mysendmail.class.php','14207','1493975699','d6d70cec67f673e3fea158a84a827335');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('48','/comm/cron.php','2125','1434590490','210e0d7ba7d12e1cb2b8df1f777d0865');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('49','/comm/getyiqifa.php','64','1437354816','de3bd741b284030c6aba56013057d1ca');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('50','/comm/ddYiqifa.class.php','2264','1437354815','1d8c21ab385e9630f2ecf33c05b03223');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('51','/comm/Zip.class.php','202891','1437354816','4c05cf2cb97358c0ddc2c78e151fc118');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('52','/comm/taoapi_Cache.php','5338','1434590490','f480738e05bfbca983d6d23b87a7b84a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('53','/comm/dd.config.php','2772','1523609599','1a74fd9b2c8b16f01a8b104d98bfa5fa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('54','/comm/php_lock.class.php','1037','1507538970','f426ecd791f58769942cc5b46ea74c11');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('55','/comm/index.html','47','1437354816','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('56','/comm/phpzip.lib.php','9729','1437354815','a50b38757a561606a084793294411b82');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('57','/comm/comm.func.php','49657','1509108333','0a89acbd37b12647115906c8d4d6b9c4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('58','/comm/plugin_mod_act.php','901','1437354815','5e61c3a60527c6fba2c910aa73ed662e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('59','/comm/taoapi_Exception.php','16799','1434590490','0e3440edc7832d2defec34c107ab5d74');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('60','/comm/phpLock.class.php','2664','1437354809','628641270f5b5a43dab4a0df7fb8cc6e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('61','/comm/echo_gbk.php','317','1434590490','16df803b56ace8e94ab735d15f9ab8ee');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('62','/comm/plugin.class.php','25902','1437354816','7248f837bf3253f9e927e677b4c7fcca');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('63','/comm/mod.func.php','31605','1517306093','4984c6430a0ca0799ced1eb204aba690');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('64','/comm/getlinktech.php','66','1437354815','5961c86c859ea482a301e76217d89f21');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('65','/comm/getduomai.php','64','1437354816','730fb51223dd0deb037574f0cd95603c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('66','/comm/cron/cron_paipai_order.php','2641','1434613766','b9d61ebe65460e4311518606a4dd98a3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('67','/comm/cron/cron_tradelist.php','4101','1450676930','21876a850936b3957f29915661521b3f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('68','/comm/cron/cron_bijiacache.php','455','1434613766','db2db6d64163a9c2699ac5585a024770');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('69','/comm/cron/cron_caiji.php','4816','1467162438','34052bc30f8bce49851c605ec50b52ce');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('70','/comm/cron/cron_delurlcache.php','465','1434613766','e52c3afa27731c3f0191e3bb27b23b81');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('71','/comm/cron/cron_mall.php','2636','1453856951','ea3756bee63d2345b1c776718b4fde3b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('72','/comm/cron/cron_delsqlcache.php','459','1434613766','2e0d1a7a7fa8551a31ea37c9c42327e5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('73','/comm/cron/cron_del59miaocache.php','460','1434613766','70f128f1f41f04d2613a397a3bf84bbe');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('74','/comm/cron/cron_delallcache.php','574','1434613766','c9868e2814a92f75593495e9149763c2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('75','/comm/cron/cron_email.php','186','1434613766','94d31a87653ab1f8031a193d65e13ea4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('76','/comm/cron/cron_delpaipaicache.php','569','1434613766','7ab237b64bc99ddf738cdbf2644e4686');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('77','/comm/cron/cron_delsessioncache.php','457','1434613766','e904c6b989563d14f3f9ccdbe62c4f11');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('78','/comm/cron/cron_deltaocache.php','459','1434613766','4fb2648304f5b773a010e7192c2bd11f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('79','/comm/cron/cron_delyiqifacache.php','465','1434613766','ef277ac896f564c6c7c7b79de1f12da7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('80','/comm/tixian.class.php','12910','1542613712','ff48e741235015eabadcc99d3766fa33');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('81','/comm/59miao.config.php','350','1437354809','c60eb562ac26f921a0c6cff5812c170d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('82','/comm/zhidemai.class.php','12660','1437354809','276b53be4e84c2fc5dc022bdda6673c2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('83','/comm/page.class.php','6499','1487684735','1876eb9ba5c0b18f6a3802ce8d9cd9e8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('84','/comm/showpic.php','2140','1430704215','636344f4f092447f094b0541893a3caf');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('85','/comm/taoapi_Config.php','5536','1434590490','e37884ad1a9efc02c5adad9db6c37364');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('86','/comm/59miao.class.php','7839','1434590490','b4d4af92f42172a8f3176b60967edb60');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('87','/comm/getweiyi.php','63','1437354815','6837bf61e3ed27e2000ea71d08f68f2b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('88','/comm/shortcut.php','340','1434590490','1499a79e82e8c4f75bff3e98a369875e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('89','/comm/class_xml.php','2622','1437354816','1f5c3b2ff50085207bc45a2afea3f608');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('90','/comm/sms/yituo/yituo_sms.class.php','4140','1437720873','d0c1302a69c5e4a869dba734770c50c7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('91','/comm/sms/sms.class.php','4064','1437720873','a3c1e25ad059d7bc67ce09c72b757eb0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('92','/comm/sms/b2m/b2m_sms.class.php','16136','1437720873','a1a1c93946606e692c6e3821300cf16e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('93','/comm/sms/b2m/nusoaplib/class.soap_transport_http.php','45784','1437720873','dc62ca14a7602865c8afafb4b6fa1650');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('94','/comm/sms/b2m/nusoaplib/class.xmlschema.php','36211','1437720873','db262b852109780fd3f63909d785be67');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('95','/comm/sms/b2m/nusoaplib/class.soap_server.php','41067','1437720873','5192ee6089797b2d5c89b29cb285475d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('96','/comm/sms/b2m/nusoaplib/class.soap_fault.php','2309','1437720873','a8f5a9a4e7dd155548b7c65bb78803c9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('97','/comm/sms/b2m/nusoaplib/class.soap_parser.php','25772','1437720873','4e1e1dce71e32eafe4f5c840ddba59e1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('98','/comm/sms/b2m/nusoaplib/class.soap_val.php','2406','1437720873','0a42c13026e8d7c834363d71b092746f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('99','/comm/sms/b2m/nusoaplib/class.wsdl.php','80274','1437720873','74b663bc33638081ee77278487e15cfd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('100','/comm/sms/b2m/nusoaplib/nusoapmime.php','15551','1437720873','be4d186701bcd823144bd797aff9ba26');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('101','/comm/sms/b2m/nusoaplib/nusoap.php','297573','1437720873','0824d2ec824d9591cbab4fc60ace2441');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('102','/comm/sms/b2m/nusoaplib/class.soapclient.php','33651','1437720873','1d9a6d977ae88ca09faedf2aa94f6b06');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('103','/comm/sms/b2m/nusoaplib/class.nusoap_base.php','30224','1437720873','0b69f7414080c51318eaf0666a75caa8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('104','/comm/sms/b2m/nusoaplib/class.wsdlcache.php','5590','1437720873','4b29ee6819f0a7a396090b25c30bae6c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('105','/comm/jssdk.php','1853','1437354815','9b0ca3fc4d7293f2207eed5e23daa833');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('106','/comm/article.class.php','1779','1434590490','9b5377de55e3e581885c63d073eda1d2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('107','/comm/yiqifa.config.php','555','1437354815','07933265150cec9638474e88dec6fdc9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('108','/css/jumpbox.css','3482','1438306550','e6e04e45bd33abe602446d4062b017ee');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('109','/css/helpWindows.css','1226','1437354806','8b2b64198d72be11dc8d411425f84c54');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('110','/css/qqFace.css','255','1437354806','c65592faf0e054877567a547c0b558de');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('111','/css/lhgcalendar.css','3039','1437354806','a454a68243c16c63163ea9c9dbc46ead');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('112','/fanxianbao','0','0','');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('113','/kindeditor','0','0','');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('114','/mod/user/huan.act.php','1871','1434590485','0c803ee377d5e0f06e2789664d49e0df');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('115','/mod/user/shoutu.act.php','2231','1438306549','d5f78b4d037e5e54eaa766f4c6a413b1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('116','/mod/user/yaoqing.act.php','2233','1437102856','499c84546eaa1c5fe859320c72ae75d3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('117','/mod/user/msg.act.php','2531','1444806626','762294740df1dc8e93a73e5a2343f17d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('118','/mod/user/baobei.act.php','3237','1437355031','44e5768dc90517d185ae5d6740d6b111');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('119','/mod/user/fun.class.php','583','1437354745','10f29ffe10172573446ec687a440e6b3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('120','/mod/user/tuiguang.act.php','2079','1437354745','4bb7e6cb5694b4342a835ba52587110f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('121','/mod/user/tixian.act.php','8343','1437354745','9b7fd06e25a02eab5b5e3f4d3d1610b2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('122','/mod/user/confirm.act.php','6395','1523608781','fddabdf711330ec8b5cd966c0470f1ac');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('123','/mod/user/info.act.php','13358','1458549262','3decadcb7d133e4fb76cf596ae3536da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('124','/mod/user/register.act.php','741','1434590485','6f80ec57a6ef86f6624df2de8b9e90bb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('125','/mod/user/index.act.php','2733','1434590485','0374facb4ba861e698d63cd0cbd8dbdc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('126','/mod/user/favorite.act.php','3181','1436317409','d0ee882990c383b493ec1e7565c44218');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('127','/mod/user/up_avatar.act.php','3582','1437354745','d2c1d24a4cf505f584c5a02280840be6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('128','/mod/user/info.txt','24','1434590485','fb88512c2e2801c2d47d6b015714aa71');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('129','/mod/user/tradelist.act.php','4926','1497685791','1cb14e83a3dc6f1509074eecfa659132');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('130','/mod/user/login.act.php','845','1434590485','aa473e1c0709fe621f4066902bfe01ed');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('131','/mod/user/getpassword.act.php','3963','1453856951','a57751db25dc8d2903839498a012c7c3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('132','/mod/user/exit.act.php','1246','1434590485','92e6ce7d663e50a723e02242da5f76fa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('133','/mod/user/avatar.act.php','2432','1434590485','c6b2c1e400650b24c34559f64cc2fea7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('134','/mod/user/fenxiang.act.php','3236','1437355031','eb707310d0e3508def69da8f893cd4a9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('135','/mod/user/mypath.act.php','3144','1436317409','482205446c3078a803aeb257faca5b42');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('136','/mod/user/jihuo.act.php','2805','1437354745','554a290865ca2d14ce3282c64c47502c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('137','/mod/user/mingxi.act.php','3416','1434590485','b72ce0fe5de11ff4d7130adae5939588');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('138','/mod/help/index.act.php','1584','1434590484','fb1515708b31eb3321511ff7332cc556');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('139','/mod/help/info.txt','24','1434590484','8e10c77571922cf2dcba56bde2429a79');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('140','/mod/jump.act.php','12031','1512790330','dca02123c88532b5221ea0d42e9f8ed8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('141','/mod/tao/fun.class.php','2782','1434590484','a4b505ebb849cb986affdfa5c3d0f2dc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('142','/mod/tao/report.act.php','6850','1434590484','48f119caaefbfd5f24cfd10fbdafe2e3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('143','/mod/tao/view.act.php','8346','1476683855','cf43f0e6ec05deb8d09906a6c3d341f2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('144','/mod/tao/index.act.php','947','1445847166','63a43a6be3aaec4d1921660bbc56559f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('145','/mod/tao/info.txt','24','1434590484','9643f54fa9d978817d9f462d75e1d218');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('146','/mod/mall/view.act.php','3072','1444801159','7b2141a7fe255edc33916213908c3790');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('147','/mod/mall/index.act.php','2758','1434613766','4f8251ff004142dd65b2a604688dda21');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('148','/mod/mall/goods.act.php','5620','1437354743','c29ce8f0877811d704caaec8e9ffb46f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('149','/mod/mall/info.txt','24','1434590484','572fd44c9bece7fc0fa05b9601b5a659');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('150','/mod/wap/info.txt','21','1434590484','26461c8e4c7897cfc7485a801ca021e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('151','/mod/index.act.php','1553','1446538654','45cbe09cd11684d0fe2ff945031d8236');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('152','/mod/about/index.act.php','1532','1434613766','f087df8d2efaea3df2f084c84519b0a5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('153','/mod/about/info.txt','24','1434590484','7601b1f168a4246fafd46c0704ad371a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('154','/mod/article/view.act.php','2301','1439382210','d44b7997ae9c14efd4d927d5f6bf1d8d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('155','/mod/article/index.act.php','1853','1437102856','98463874c0d3093f486b9399a115404f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('156','/mod/article/list.act.php','2184','1434590484','d8b6c46bc091708be937cc4841697faf');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('157','/mod/article/info.txt','24','1434590484','5e364bf286fc734d28945936a7743bb0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('158','/mod/inc/click_jump.act.php','1425','1444962375','0812c503c105928b242a7f54b1c155da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('159','/mod/inc/header.act.php','2455','1458549262','51c85f26130d28f445b4cf4b1f2d7657');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('160','/mod/inc/check.act.php','3747','1489829546','49f4d5d82d5cab3ec3c0325aaf76e18d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('161','/mod/goods/view.act.php','4279','1489981689','3558bffbf80bf1e97d8e1a3267bbf0e4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('162','/mod/goods/index.act.php','2289','1436924277','9330a45e593f2b412b94abbb097aa296');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('163','/mod/goods/public.act.php','1812','1511575178','756922abc40cfb6ebfe9fd66cc23cefb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('164','/mod/goods/info.txt','24','1436747602','de72bb89293fd3302b9a97a9f8c69480');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('165','/mod/baobei/user.act.php','3165','1434590484','138aa3a80f31127ff4da92dc8c4e33d8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('166','/mod/baobei/view.act.php','5145','1511703462','bacd97b3f16373304fc68c6fd62910a2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('167','/mod/baobei/index.act.php','648','1434590484','23180e7a60be9a947c293d964030e215');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('168','/mod/baobei/list.act.php','1399','1437355031','2999fd598e13fc6a335b6c38a3fe4c4a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('169','/mod/baobei/info.txt','24','1434590484','60d2f61b1231dbac3658a28379146c48');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('170','/mod/index.html','47','1437354744','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('171','/mod/app/phone.act.php','635','1434613766','6425e508017dd0508c0ba4d3d7359105');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('172','/mod/app/index.act.php','635','1435309626','b7c68a0cd2df06e7072f5c5bfd0ba9af');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('173','/mod/hezuo/fun.class.php','688','1441462014','a116906822a4db0ac5492d533f54ff04');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('174','/mod/hezuo/index.act.php','717','1434590484','ae3aa1ee0f503b7c8949b26002f81bf6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('175','/mod/hezuo/list.act.php','1287','1434590484','57d0f1a15f9242d6ff0fe2c5118fb4fa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('176','/mod/hezuo/baoming.act.php','2149','1434590484','51d8e998382820da28a9d2249443f254');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('177','/mod/hezuo/info.txt','24','1434590484','6642b79e775c36d101ca235122c906be');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('178','/mod/ajax.act.php','33370','1474860894','25297acf353534c322e23f3eaf62f66e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('179','/mod/task/index.act.php','1035','1453688582','9c42a705073cb8d858401994af635a89');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('180','/mod/task/gametask.act.php','1237','1453688582','709d9896d3d28c8cedb4007160c26110');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('181','/mod/task/douwan.act.php','1240','1453688582','396b5f932d4aef133eefefc94bf12911');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('182','/mod/task/wami.act.php','1228','1453688582','e0854138ac01b40bf9931ce416233aad');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('183','/mod/task/info.txt','24','1453688582','54360ec13414a91ce663e59ce3130d19');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('184','/mod/task/offer.act.php','1299','1453688582','f92d07a6be0a5cc37caaf1a4038baceb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('185','/mod/huan/view.act.php','3367','1434590484','ff888630c1b31d8efc699da0a0e1e0a8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('186','/mod/huan/index.act.php','648','1434590484','23180e7a60be9a947c293d964030e215');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('187','/mod/huan/list.act.php','2540','1434590484','cebf66ec46efa7c5bc698092ad588a3d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('188','/mod/huan/info.txt','24','1434590484','656da9edcae3e814da282d28cf80166b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('189','/mod/cron/run.act.php','662','1438306549','8b8dea557d7105c77ef357b0f55cdc0b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('190','/mod/cron/index.act.php','1661','1467162438','24a98f9adad849a6956b1b2f544fa2a3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('191','/mod/paipai/index.act.php','1187','1434590484','69f0017b909805cef7027f24148c5855');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('192','/mod/paipai/list.act.php','4881','1434590484','e6331799ce454b3e702ac491ccaf5b63');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('193','/mod/paipai/info.txt','24','1434590484','f1e0c49e5686ec4ae36d3cf48ae94783');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('194','/mod/fun/upload.act.php','6024','1470902392','52f5e9ce36cb4b36ff1a37d1175900ba');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('195','/mod/api/user.act.php','963','1437354744','c6b1dd8fed72dcc59fb2d7a563875870');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('196','/mod/api/sina.act.php','3138','1436747602','7696c2e700ad7e419eaa94b196368018');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('197','/mod/api/tb_bind.act.php','7650','1468920681','5e43abbf428e37557105a7b3aa1d69d9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('198','/mod/api/qqweibo.act.php','1840','1437354744','01c35517c7237c8fa1348b1cdb022b2c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('199','/mod/api/do.act.php','3624','1468477963','78e827a695b4754fe4fe09a7a145b22c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('200','/mod/api/qq.act.php','4953','1437102856','71cb08a0a5c1b5c5802ca5fe5209f411');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('201','/mod/api/tb.act.php','4831','1468545751','51c125028accab208d1972a9ff72484a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('202','/mod/api/kaixin.act.php','1974','1437354744','5d3f092582e731e2b2030860132fad65');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('203','/page/getchanet.php','3450','1434590530','81c39aa1b284c2ca64af7fad494a3d6b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('204','/page/get59miao.php','4175','1434590530','7b3438f35c7b6fc41a43469e5561dd3c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('205','/page/getdd.php','13258','1438658886','11f75a445e2c18b7301030d8de249167');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('206','/page/chongzhi.php','62086','1437355029','92c90833bc4896f26c5545ad00a94f54');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('207','/page/backstage.php','113','1453856951','23bcc6771ce0b240c57ba13724571fb8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('208','/page/getddopen.php','892','1437355029','062b6a928fa8c8757fb68a634fdd9d9a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('209','/page/getoffer.php','2808','1439799324','5166450ab54414279c74751a6d4c86c2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('210','/page/getgametask.php','2625','1459928141','c397bcea5ca6e166e65000d1a1785f63');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('211','/page/getyiqifa.php','4851','1434590530','02ee4191a23655818e1862916f35d19e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('212','/page/index.html','47','1437355029','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('213','/page/sitemap.php','6309','1436519900','fa300702b11f2da603c41bc1956cb349');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('214','/page/getyqh.php','4417','1434590530','7a88f373c8cf40110687777974a15f57');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('215','/page/getlinktech.php','3347','1434590530','696647681d432407ff2dea7fda3af351');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('216','/page/getduomai.php','4451','1434590530','4ab06c6c6ce98df42509719538161a59');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('217','/page/page.php','976','1437355029','7d96c974052fa2e99070f61deac16d12');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('218','/page/getweiyi.php','5850','1434590530','0b597c2761ae6f6490eb8479c7a03320');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('219','/template/default/user/index.tpl.php','13525','1513923386','47407cb53e47400eab2025766c0b6553');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('220','/template/default/user/tradelist.tpl.php','20360','1513923386','77dd3c9715bf498b1f2a3c44ae596cdb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('221','/template/default/user/huan.tpl.php','2735','1434590523','61824cbe071805c870ed0521f4afbc92');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('222','/template/default/user/mypath.tpl.php','6584','1513923386','ce7a3bd099602db52fde24a4d0a07cd9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('223','/template/default/user/tixian.tpl.php','11023','1437720873','f2da3e657f27087f92e5c03e646595f6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('224','/template/default/user/shoutu.tpl.php','8449','1513923386','9877e7ff77c782c3bf5e10ca1f7650de');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('225','/template/default/user/top.tpl.php','11','1437355028','4b8365d5f0967c456e67196d36e10570');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('226','/template/default/user/baobei.tpl.php','5989','1513923386','0067c12dcb678703f983c9f388b0904e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('227','/template/default/user/register.tpl.php','16275','1461652151','f8253df9794ace438029d601b6163798');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('228','/template/default/user/mingxi.tpl.php','4808','1434590523','f640a7ae2a3cb160d1951e26007cead8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('229','/template/default/user/yaoqing.tpl.php','10677','1513923386','6738c0d528cb3da7434b73f5ca8876b8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('230','/template/default/user/confirm.tpl.php','9859','1511773295','5c5b16c9c84444e193a313fb9be8ebac');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('231','/template/default/user/notice.tpl.php','802','1434590523','1045cefa70e6980e4de6f237c7ca99e7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('232','/template/default/user/tuiguang.tpl.php','2089','1513923386','04b996534de93aafc0e7344ae4b9cf7d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('233','/template/default/user/login.tpl.php','5591','1434590523','3cf608a8f681f75aced68dbba25129b3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('234','/template/default/user/avatar.tpl.php','6615','1434590523','cd79887d07a45020b6a0baba75235803');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('235','/template/default/user/info.tpl.php','37487','1513923386','420ecc5cf44c68d413851ec7170dcd5e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('236','/template/default/user/left.tpl.php','1599','1435309626','02a5bcc9e19157a897d274987af27582');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('237','/template/default/user/favorite.tpl.php','6585','1513923386','8a4407504780f53095d3fd9ccb788d4a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('238','/template/default/user/getpassword.tpl.php','5357','1438306551','76ef6c342cec65e0ee4c92d33a0c8a33');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('239','/template/default/user/msg.tpl.php','5609','1441897731','e79f6b70a909d1ca9728bc6cf8bf5436');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('240','/template/default/user/jihuo.tpl.php','1106','1438306551','5d777a3aa30dfc1f9b7a8ecfceb58460');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('241','/template/default/user/fenxiang.tpl.php','5965','1513923386','1287a0cd3683ded729a5fdb4b00da6dd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('242','/template/default/index.tpl.php','12262','1511771443','db21544479491564031acd997de644a0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('243','/template/default/help/index.tpl.php','4580','1434590494','7a1445e6f752fb2bb7116c7d261e7d64');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('244','/template/default/help/search_tpl.tpl.php','299','1514450167','44316df7d683f906aadec4b9565d8c06');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('245','/template/default/help/guang_tip.tpl.php','1249','1513923386','ff86e06f11c51e399998bd11381d9c8a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('246','/template/default/help/flbz.tpl.php','4802','1513923386','1ee0f88bf4ee073b42d665146fc28ae6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('247','/template/default/tao/index.tpl.php','3346','1511770813','deb83e8735dff064c308f7a873dc86db');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('248','/template/default/tao/view_goods.tpl.php','9989','1511771513','2f4fd348d67f3755dd748bc91fcdc078');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('249','/template/default/tao/jifenbao.tpl.php','6073','1513923386','db393e931e0f3e734dd847fbf334d6ac');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('250','/template/default/tao/view.tpl.php','638','1513923386','1e25754fd8ece9ce24352fa2d673b91a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('251','/template/default/mall/index.tpl.php','11421','1467162436','a52111e19be5c47a5dae9271f243c219');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('252','/template/default/mall/goods1.tpl.php','1984','1437354980','b6b2fd3ef24c7e611192f6eaebd25907');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('253','/template/default/mall/category_right.tpl.php','7192','1438306551','082cc368738efade17bb1c01f8ccd38e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('254','/template/default/mall/goods.tpl.php','2571','1438306551','7c20480994e9fb296633949dba9cb274');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('255','/template/default/mall/view.tpl.php','12161','1436344911','d247ec8e5230d24d5c882b4725e564b4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('256','/template/default/mall/goods2.tpl.php','1440','1437354980','b2f2a3db6f5130269dab1a444e9827b4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('257','/template/default/jump.tpl.php','18130','1513923386','cbb7885973bdba6bc755c008e2374fa6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('258','/template/default/about/index.tpl.php','1250','1434590522','d7b92743f3e794e306a42a974f8b9184');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('259','/template/default/error.tpl.php','49','1434353853','e0e2b87363c84a65f669b30f866d653a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('260','/template/default/article/index.tpl.php','1097','1437102856','baa68f75abfc3613ee9c59435892093a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('261','/template/default/article/list.tpl.php','1018','1434590494','7712002b718dd553a3779a0ddaf6a061');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('262','/template/default/article/view.tpl.php','1336','1434590494','d6ebb008da339849270bee8364c1f3e5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('263','/template/default/article/right.tpl.php','2358','1437102856','dce08d8b6057a0f82a52d4a024e3f292');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('264','/template/default/inc/tdj.tpl.php','1720','1508951364','d835dc174c33b4068138cc8853133560');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('265','/template/default/inc/error.tpl.php','2345','1434590522','e6d79be560acf5db601c9fc725039a74');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('266','/template/default/inc/header_common.tpl.php','7571','1467162436','534f3adaf409b328962772aec6a0ac53');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('267','/template/default/inc/js.config.tpl.php','219','1434590504','03a8a2ec05b7972865fa9b2ab6e8613a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('268','/template/default/inc/login.tpl.php','11924','1435309626','f9236ead3ae451c994bc183699e38b36');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('269','/template/default/inc/top1.tpl.php','647','1434590519','a598ef4d2faf67f9500a167a0aaab691');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('270','/template/default/inc/header.tpl.php','1612','1467162439','b49428ac61699c37851263bd39665205');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('271','/template/default/inc/footer.tpl.php','3002','1435309626','64f1016de322dfcda1e42b7fa2fbddc4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('272','/template/default/inc/css/douwan/offer_css.css','2525','1439967431','3626d3ac2a70f853871d34ed23f9a49a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('273','/template/default/inc/css/list.css','8100','1434590520','c93200147c5b11117cd15935620a546a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('274','/template/default/inc/css/about.css','9532','1434590519','4c7ace6104b7956baa4988a99c00e666');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('275','/template/default/inc/css/hf.css','15481','1434590519','62669656acf477b8b9c299b1c5fb0e3e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('276','/template/default/inc/css/index.css','4757','1434590519','fdb100d5c68732af6c17afa8e99defac');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('277','/template/default/inc/css/ad.css','1402','1438306551','64131127eb32b047e95239daee1f099e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('278','/template/default/inc/css/paipai_index.css','11691','1434590519','105485b47e9f606fd27bcb87e3f3984c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('279','/template/default/inc/css/mall_view.css','4455','1436144716','29b6b455495ad364786b04a1e67b1912');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('280','/template/default/inc/css/malllist.css','23016','1434590520','4523956e6992b0e6bc646f60997b1ef1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('281','/template/default/inc/css/alert.css','13280','1434590519','59bdfe62f874b76bf0464361d44e3f60');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('282','/template/default/inc/css/zhi.css','35558','1434590519','0444cef0be55cb1015ddfe4607b0bfa9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('283','/template/default/inc/css/gametask/offer_css.css','3651','1436239646','7d0decf85697fa37ba7108fc0400ec04');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('284','/template/default/inc/css/offer/offer_css.css','2653','1434590519','b5757892f76e75ac5ebfd9fa39d7ee33');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('285','/template/default/inc/css/offer/offer_csss.css','2523','1474441740','4cb083c1d044568896031f5628cdc4ed');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('286','/template/default/inc/css/goods.css','4227','1434590519','116b92d8c31ea076253d04728e57f4ce');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('287','/template/default/inc/css/shai_l.css','15694','1434590519','02a209b3b51f8a545d9b8a3b1da6a36e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('288','/template/default/inc/css/error.css','3241','1434590519','bc1f803d448d204b2789db363e58a11a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('289','/template/default/inc/css/mallindex.css','5165','1434590519','684241be5841af18836f8ac4c90ce0ee');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('290','/template/default/inc/css/list_g.css','9155','1436747609','8e68464f393a11040314ca513edfdb58');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('291','/template/default/inc/css/goos.css','7975','1437102857','19072f790951e54ae371d252513d0360');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('292','/template/default/inc/css/shai_n.css','8031','1436144717','03cb9b02796d95e31243d51a236d5561');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('293','/template/default/inc/css/shai_c.css','8794','1434590519','9ee01c5527879af6e1c20bd5d021b27a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('294','/template/default/inc/css/article.css','5017','1434590519','d5f5763fec0b752607d1463777c937da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('295','/template/default/inc/css/usercss.css','26616','1434590519','47f273f4551081a5547bae1375a99f69');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('296','/template/default/inc/css/shai.css','9240','1434590520','2e2541b2d9694ad893268e50f583d0da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('297','/template/default/inc/css/view.css','15721','1437102856','8fb2e673a473288cb2182971d1a86dc9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('298','/template/default/inc/css/redirect.css','3478','1434590519','6f180ae54e00d2dd9941fc113ae7c91a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('299','/template/default/inc/css/baoming.css','13968','1434590520','13b4f84dd26f320565e52ac52c419393');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('300','/template/default/inc/css/baobei.css','2057','1434590520','52377a23d4773cf171fccf4dcf8a9a60');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('301','/template/default/inc/css/common.css','23853','1437102856','c87c37d0927055f4f603286502a286ba');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('302','/template/default/inc/css/help.css','11412','1434590519','53a02985b85f250591936e5d4f97013e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('303','/template/default/inc/css/duihuan.css','6320','1434590519','5b65d9012e94db06fde4daa5da17b62e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('304','/template/default/inc/css/default.css','9100','1434590520','359d097ff680dc3db0b2523147b5bb1e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('305','/template/default/inc/css/flbz.css','3449','1434590519','6f53dbf3dc873bed2f60d6eb682b1616');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('306','/template/default/inc/css/tao_index.css','13411','1434590520','604dd1761fec45373a2377996c13151c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('307','/template/default/admin_set/jiaocheng.php','3132','1513923386','b28c9ebf866f3595f48d96e8fa1b9bf8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('308','/template/default/admin_set/public.php','728','1434590495','9bcf7dc9030b21d99285b0f8f193a3e4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('309','/template/default/admin_set/color.php','4358','1436747609','4670a352969d7a29344fd7d90f97e57a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('310','/template/default/admin_set/index.php','4180','1436747609','c1d67a73a59601af550c791c51374421');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('311','/template/default/admin_set/paipai.php','2419','1436747609','99ae1862b72a13c0de99d160e96b0dd3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('312','/template/default/goods/index.tpl.php','5371','1438306551','c7b85aeb55e084a651ce83992ab5b72d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('313','/template/default/goods/315/list.tpl.php','5553','1542606588','0193e53f5d788e7ae016857e72a211f8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('314','/template/default/goods/315/view.tpl.php','116','1436747609','679e02fb518822db4d41428c4eb7ee09');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('315','/template/default/goods/315/css/list.css','4935','1437102857','d4c6eac9498298b31a14149df1e3a3bd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('316','/template/default/goods/tao/view_goods.tpl.php','9675','1542606525','d0f2c3d72c60efa4c5bd9fad60662ccf');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('317','/template/default/goods/inc/list.tpl.php','5862','1511772131','bf15b0862fd0454860ad207cfe4626a7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('318','/template/default/goods/inc/view.tpl.php','14135','1511771800','15aa239580dcc8a7d60794877341c57b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('319','/template/default/goods/view.tpl.php','549','1434590522','cf7b8c72dce42dc793cd2609e50cf8af');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('320','/template/default/goods/zhi/js.tpl.php','2069','1434590522','bf84356436734459e120131b9cb61090');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('321','/template/default/goods/zhi/list.tpl.php','6636','1491995122','4d7173c50616c0414057adf34d8d5ba7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('322','/template/default/goods/zhi/view.tpl.php','7404','1475915732','3731b912ecb05b3787d0c811e2f232c0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('323','/template/default/goods/zhi/ajax.php','4517','1434590522','4a63d9b751d0277b13dd6a2af766cfdd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('324','/template/default/goods/zhi/right.tpl.php','785','1434590522','1ff0340c95123a3ced9a1cbc07732bb0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('325','/template/default/goods/zhi/css/list.css','22210','1434590522','0c1492b35f85e2088694a414a5880f7d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('326','/template/default/goods/zhi/css/zhide-css.css','35558','1434590522','0444cef0be55cb1015ddfe4607b0bfa9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('327','/template/default/goods/jumpbox.tpl.php','1471','1435309626','a58acb9391594f9a036010b7f7498aad');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('328','/template/default/goods/cf/list.tpl.php','2247','1542606619','7fef64102e9084e787f0414773d34341');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('329','/template/default/goods/cf/view.tpl.php','116','1436747609','679e02fb518822db4d41428c4eb7ee09');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('330','/template/default/goods/cf/css/list.css','3162','1434613766','09a9877022cfefbf9e0d314ea389a2b8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('331','/template/default/goods/data.tpl.php','326','1434590522','78c952bdeb5cd2289b3691f638b98a27');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('332','/template/default/goods/250/list.tpl.php','6247','1542604472','a421e172777059fdac2641a12a979e79');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('333','/template/default/goods/250/view.tpl.php','116','1436747609','679e02fb518822db4d41428c4eb7ee09');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('334','/template/default/goods/250/css/list.css','4920','1436747609','73d80a6d8248630c9bb27d16b8c30b89');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('335','/template/default/baobei/index.tpl.php','655','1434590494','c9e4286473bba96a9de3ed5865b6f441');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('336','/template/default/baobei/topuser.tpl.php','1883','1434590494','a44834d1c3d988e7bcd405cad11dee7a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('337','/template/default/baobei/baobei.tpl.php','4128','1513923386','1d22be78e6ba3c94d9e235dd519b4500');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('338','/template/default/baobei/list.tpl.php','2323','1461652147','86faed2a505654b6dabf75fcebd23aff');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('339','/template/default/baobei/topcat.tpl.php','593','1434590494','c393b2c97ca8627fadcd165e5bad7d8b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('340','/template/default/baobei/view.tpl.php','15912','1511587832','8949bcbeb5d066c7eab2c8b6c399ba49');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('341','/template/default/baobei/user.tpl.php','2353','1461652147','5f9159362a7ce7b4b2fd7fe231682d87');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('342','/template/default/baobei/share.tpl.php','8180','1440080169','d42c53337d0ef65cd40e794326debe0b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('343','/template/default/tpl_info/info.txt','24','1434590522','ab62b2dae5c64f4805fe83cdf55a08d6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('344','/template/default/tpl_info/jieshao.html','327','1436317410','7ca3861f3ba8e8a0ed44f691cfae5365');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('345','/template/default/hezuo/index.tpl.php','938','1434590494','c4172fa1cb4959f0b2fb64c7892bc5aa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('346','/template/default/hezuo/top.tpl.php','6506','1513923386','98c4b61296a49c889e9225bf05a55818');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('347','/template/default/hezuo/xuzhi.tpl.php','491','1434590494','bd851764fb224f599c499a595ea53605');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('348','/template/default/hezuo/baoming.tpl.php','2304','1434590494','7c329a0f349e4ac46193381f31da3cc0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('349','/template/default/hezuo/list.tpl.php','5933','1434590494','2d5cc035f7a574db5f710bfa3ef6741c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('350','/template/default/header.tpl.php','50','1434353827','31e5cc3318c58455f7f2977bde4aa634');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('351','/template/default/task/index.tpl.php','1897','1453688619','8ef8056df227e172e7785ee4266980ce');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('352','/template/default/task/wami.tpl.php','6073','1475915940','27a094502f4ff501cc4ef82eb3587907');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('353','/template/default/task/douwan.tpl.php','5283','1475915940','3b59f47f9858ad51a54c76086df8a085');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('354','/template/default/task/offer.tpl.php','5296','1475915940','ad43e155ec268ff5a576aaa9f97fb5b6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('355','/template/default/task/gametask.tpl.php','5571','1475915940','7da1491be2de2cb4464f129944570dab');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('356','/template/default/huan/index.tpl.php','655','1434590494','c9e4286473bba96a9de3ed5865b6f441');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('357','/template/default/huan/top.tpl.php','291','1437354980','bfb42fffafa9f559baa2a5c8f2d4c336');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('358','/template/default/huan/list.tpl.php','2551','1434590494','ed256350341e2d27f9545f4344bf453f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('359','/template/default/huan/view.tpl.php','12758','1438658886','4e6dfcb29d0ec8fcdafdf381098c09e8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('360','/template/default/huan/left.tpl.php','1399','1434590494','9ab6ab4ca355f336a030968b17975308');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('361','/template/default/paipai/index.tpl.php','41347','1434590495','4ccf69cc8b1ec43327b77f62dc1e3379');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('362','/template/default/paipai/list.tpl.php','3047','1434590495','c6873f0e3934fa211292e1e01a6f765c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('363','/template/default/paipai/category_right.tpl.php','7302','1434590536','dc4e5c355160f88fc3521f7f81ce0156');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('364','/template/default/paipai/list2.tpl.php','1613','1434590495','4af0a443b1e06b694508b70fd3411c3f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('365','/template/default/paipai/list1.tpl.php','5797','1434590495','60c88ac8d9c45ca71c5796d463b9219f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('366','/template/default/footer.tpl.php','50','1436407977','b6f769409242772568d71b06f41999d8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('367','/uc_client/data/cache/apps.php','714','1437354836','4380ba2994b38c2b71618f466594587a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('368','/uc_client/data/cache/badwords.php','46','1437354836','98b3674ac4f368d2c3ae97cc70148eef');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('369','/uc_client/data/cache/settings.php','777','1437354836','f30d3286c0785fc7b01672debc4f9102');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('370','/uc_client/client.php','21261','1437354836','6339c700564faa151d64be0291007c04');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('371','/uc_client/model/cache.php','2201','1437354836','cadc129e4566b9ab5a8ad754fe462fcc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('372','/uc_client/model/friend.php','3569','1437354836','87d25e6d940ccc1358c63e83e21474a3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('373','/uc_client/model/base.php','6442','1437354836','7078fb07b3969b7637efa482ddadb296');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('374','/uc_client/model/mail.php','5069','1437354836','3d88419ccfb08f8889811fe7d4c7f9bd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('375','/uc_client/model/note.php','6592','1437354836','67654991a641829d5d0669e18bdc324c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('376','/uc_client/model/user.php','7977','1437354836','9391a36969f913c76359f51530f4432a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('377','/uc_client/model/misc.php','4387','1437354836','753b907eda997b25f3984f492526bff1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('378','/uc_client/model/app.php','778','1437354836','248c2118437d41b61e3f95671ad14161');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('379','/uc_client/model/tag.php','2210','1437354836','d7b379d38fbc0e8a120454a334a54499');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('380','/uc_client/model/pm.php','38962','1437354836','9a5c7ab3873147d44e20d91cafb0970d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('381','/uc_client/model/domain.php','1386','1437354836','3630cc657498dfbfefe78f0129dd69e2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('382','/uc_client/control/cache.php','471','1437354835','902a8c8deb80ef03eacc2bec3e9d5ee9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('383','/uc_client/control/friend.php','1530','1437354836','984b3ca201d58e21e3d6a165255f4623');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('384','/uc_client/control/mail.php','991','1437354835','26c1e9fab987830f7fd5d44a9814bd7f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('385','/uc_client/control/user.php','8140','1437354835','0e9fc4bd9d112ecd86a48d4214ada1cc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('386','/uc_client/control/feed.php','4023','1437354836','a8aad552eec21e938c3feb39b92f7fc5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('387','/uc_client/control/app.php','926','1437354835','5109765cecdab58d611e0751656059f4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('388','/uc_client/control/tag.php','2010','1437354835','0d2d3e7e61f7834c5133d1151e493368');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('389','/uc_client/control/pm.php','11055','1437354835','64af5c516378857d9ee9803c9d9ce6c4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('390','/uc_client/control/domain.php','509','1437354836','aba07c0e38ad0875a303ef418658afc2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('391','/uc_client/lib/xml.class.php','2787','1437354836','dd8f21e6948c6c12ae073a59fcea5895');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('392','/uc_client/lib/uccode.class.php','5018','1437354836','43ba48c9bf42c960d4d4d1307dcf78af');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('393','/uc_client/lib/sendmail.inc.php','5006','1437354836','4521c9941db9397cc1b3a477b8b4dd41');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('394','/uc_client/lib/db.class.php','4172','1437354836','649c288d4bca89348dd219879ba67c19');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('395','/admin/kindeditor/license.txt','35','1437354787','0584ffec56b0fb98cb327af7f9e48f49');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('396','/admin/kindeditor/plugins/file_manager/file_manager.html','979','1437354802','8bbe0aeb0eb00e659891859651430209');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('397','/admin/kindeditor/plugins/file_manager/file_manager.css','1034','1437354802','43255f891551cce07469eb71e0dd61a0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('398','/admin/kindeditor/plugins/flash.html','1798','1437354802','48e33bd2ce5fca31460a6587db6fb9e3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('399','/admin/kindeditor/plugins/code/prettify.css','973','1437354802','5b7db15771cd3d95009fd0c508f9c5e1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('400','/admin/kindeditor/plugins/media.html','1971','1437354787','57c7509123a8a45dfcf5e80bd80dd8c4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('401','/admin/kindeditor/plugins/map/map.html','1752','1437354802','47d47f6bd2bc7fca0f6469db7b583a87');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('402','/admin/kindeditor/plugins/image/image.html','9368','1437354787','218e97e199a70ba7a1de1d7e11ec7d56');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('403','/admin/kindeditor/plugins/advtable/advtable.html','8123','1437354787','2f38ebea4768aceb1547d87acc3a9591');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('404','/admin/kindeditor/plugins/about.html','1175','1437354802','8f4cfd5a5cfa484821554381c4226e87');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('405','/admin/kindeditor/plugins/baidumap/map.html','1222','1437354787','e5692cbd8762dccb717091fc170535ab');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('406','/admin/kindeditor/plugins/plainpaste.html','984','1437354802','9a4eb118a5e19d0eb04ec24ed0852c0f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('407','/admin/kindeditor/plugins/template/html/1.html','243','1437354802','a1ee69ba1c74c4bb965bc651ba4c7f16');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('408','/admin/kindeditor/plugins/template/html/2.html','539','1437354802','8c8c788d4ed91425bf368e4cdee6f812');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('409','/admin/kindeditor/plugins/template/html/3.html','373','1437354802','5589f3900da11d9d4538ea555ba79afe');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('410','/admin/kindeditor/plugins/link/link.html','2362','1437354789','c083d5c46fe11a1973c66ca3a308a8e8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('411','/admin/kindeditor/plugins/wordpaste.html','1483','1437354802','d4f80e40b73504a9eb2034748b9e8183');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('412','/admin/kindeditor/skins/default.css','16747','1437354806','4f56c7788683e0c3b13f2f2f910af3f5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('413','/admin/kindeditor/skins/common/editor.css','901','1437354805','341f9960f5408f4b1488eeb83be3f2e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('414','/admin/kindeditor/php/upload_json.php','657','1475915732','d6384d76fa14bf493757d64c0f652e41');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('415','/admin/kindeditor/themes/qq/qq.css','3101','1437354802','3da18bb3215e97da3553c0d930f8d151');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('416','/admin/kindeditor/themes/simple/simple.css','2217','1437354803','ad4796082d1d4311fa4959b702eda721');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('417','/admin/kindeditor/themes/default/default.css','21964','1437354803','bd303ba897a39cfb1369b17a9fb460ae');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('418','/admin/js/index.html','47','1437354787','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('419','/admin/index.php','38','1436239646','24750c32dcc944abc6a64f10bcb5aade');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('420','/admin/login.php','77','1437354806','6243a9a55348da4da5941dd0d27d6511');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('421','/admin/mod/user/addedi.act.php','5176','1450676931','269828676c2a56e61e1595ea7f6b33db');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('422','/admin/mod/user/set.act.php','1873','1437720829','3d437371bbf01e6b1a1e542107998b6f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('423','/admin/mod/user/list.act.php','4795','1435021751','958ecf88449a805da28fefa1ffef3593');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('424','/admin/mod/user/award.act.php','2859','1474860894','547545fc79acb62880fa5b45c6df415b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('425','/admin/mod/user/del.act.php','1670','1437354753','944a803d95ab19ae0fc82d083d100b0b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('426','/admin/mod/data/list.act.php','9833','1437102856','e38dbd497ed8e147e689caba3e250551');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('427','/admin/mod/data/check.act.php','9156','1437354750','45435885433b9dccad72ecf59bb8a648');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('428','/admin/mod/data/backup.act.php','5151','1437354750','a56cbbcb75e90b4dfc2b9a15e56cd1c4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('429','/admin/mod/paipai_order/addedi.act.php','1363','1437354752','2e4676a4c5689f063c5c9101a8a102c6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('430','/admin/mod/paipai_order/list.act.php','2026','1437354752','519d35225ca35af511f8abe99e04f3b3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('431','/admin/mod/taopid/addedi.act.php','1749','1467168259','f79f5e6db655515905a02350b20be449');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('432','/admin/mod/baobiao/rank.act.php','892','1437354749','1b60c063c3ba9a687cb714c21a35b510');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('433','/admin/mod/baobiao/share.act.php','1138','1437354749','926f8c70c8b4275a0ec8745b3e6ffff7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('434','/admin/mod/baobiao/share_jifen.act.php','1134','1437354749','cac1be5953c9049a0fef5aa7707c3e5b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('435','/admin/mod/baobiao/rank_jine.act.php','885','1437354749','64e5ebdd8f195d0bf157ba97e02d33aa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('436','/admin/mod/baobiao/tuiguang.act.php','1180','1437354749','7124602ae21c17fabf22d0dbabbb6cb1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('437','/admin/mod/baobiao/tixian.act.php','925','1437354749','0fb94e970f19317325996c2ab9eaf494');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('438','/admin/mod/baobiao/addedi.act.php','807','1437354749','a1b8a804fd32da50937e1de980831b34');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('439','/admin/mod/baobiao/list.act.php','1284','1434590485','685b512818c24eda69e465018e5de38b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('440','/admin/mod/collect/addedi.act.php','3470','1437121235','c6741d41674b04c71b0ce834b54b8a35');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('441','/admin/mod/collect/public.act.php','756','1434590486','e52a8525f7e38105ec0dd6460efa84e3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('442','/admin/mod/collect/list.act.php','947','1434590486','05f352f0a6a5d874233f66b7d73469de');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('443','/admin/mod/collect/yun_cid.act.php','1188','1434590486','73132dfb634421cad3bff67c379e4396');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('444','/admin/mod/kuaijie/addedi.act.php','827','1434590485','ce7a3779d77a6321385b8c2f08d41d9b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('445','/admin/mod/seo/addedi.act.php','1761','1434590486','117d8f14d83e88375904652d8225f606');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('446','/admin/mod/seo/arr.act.php','1580','1437354751','d67510ea10663b24ce37b5694c5bf853');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('447','/admin/mod/seo/set.act.php','964','1437354751','6e1f321822f0b275f980e92ce810ac9c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('448','/admin/mod/msgset/addedi.act.php','924','1437354752','e66195f12f2f494e8e1a522e20ed71da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('449','/admin/mod/mingxi/list.act.php','1175','1437354752','7ff58ab82703165d7a00e941ca2c87fd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('450','/admin/mod/tixian/addedi.act.php','2133','1437354752','d9bf85ed389ccdd21fac4d2540f2da11');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('451','/admin/mod/tixian/public.act.php','2928','1437354752','fb3d10a1483e3ab291f7126ca66f5534');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('452','/admin/mod/tixian/list.act.php','5340','1434590486','1caf03b6d8fbdc0bf4524ccb51e38071');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('453','/admin/mod/tixian/del.act.php','1923','1437354752','5ab4a38d2b535d48034ec321d7ebdec1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('454','/admin/mod/buy_log/list.act.php','1139','1437354749','d65d9cc86177514d1e615d2bfc648b4f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('455','/admin/mod/webserver/info.act.php','1021','1523587074','8a10e4f6e01096aa9b955ea5458e8cbf');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('456','/admin/mod/webserver/set.act.php','4380','1461652594','c322ac18e94055b6d7ffaec0263ad3d9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('457','/admin/mod/public/addedi.act.php','4448','1434590485','bf9e03717c182e8823a2e559823b1a85');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('458','/admin/mod/public/arr.act.php','1432','1437354751','3d3882f292b9416284bfea25c6d566f4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('459','/admin/mod/public/set.act.php','1172','1435539461','db2a29bf7fde55fefad76202713c5e7f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('460','/admin/mod/public/admin.act.php','15214','1493716646','e9765a9dd92ed796706992bb81066d32');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('461','/admin/mod/public/tag.act.php','762','1437354751','814769b484ff8f85a0a1ef45f3afead7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('462','/admin/mod/public/list.act.php','2674','1434590485','6171238643170df82b1d415d0ec12794');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('463','/admin/mod/public/mod.update.php','5226','1438049937','1f94b71f6f6c8fb7adcc1045e64e1304');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('464','/admin/mod/public/part_set.act.php','1499','1437354751','b8cf2065e6dfc700f3d9a474382d8f7e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('465','/admin/mod/public/del.act.php','1779','1437720873','d69e0e1109f72dfd8c44855064f163e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('466','/admin/mod/login/login.act.php','2429','1525239403','941bb93d022e39c212a9eb6e51858498');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('467','/admin/mod/login/exit.act.php','687','1470896135','ecda3e098a1364d26921b6fe8a22816a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('468','/admin/mod/database/overdue.act.php','4934','1516870357','c42d62118dfae658d75c1a020c2ff2d9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('469','/admin/mod/database/center.act.php','3854','1437354750','ab9c3aac5d50c5872c3e20717bc81cbc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('470','/admin/mod/database/debug.act.php','608','1437354750','02f379b749365274b2a4235651888342');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('471','/admin/mod/database/cache.act.php','1009','1434590485','aa13d435ddb97685fed95454bc666d3a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('472','/admin/mod/database/permission.act.php','2016','1511704175','2951d580ac17d95ab579bdac59473ee9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('473','/admin/mod/database/recycle.act.php','1858','1434590485','1dc75c3ff693a8a20f3addd51fc7cf73');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('474','/admin/mod/database/jiance.act.php','3967','1514450167','cce5faf1e29fad26090dac43dd74de9c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('475','/admin/mod/mall/lm_set.php','1331','1438306549','0e5f03c9fdcc3293aa79b52af1c78ba7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('476','/admin/mod/mall/addedi.act.php','4153','1434613766','d4371f5fd7ab78375110f1096924db54');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('477','/admin/mod/mall/set.act.php','1860','1434590485','311df8d3b14db9d8ddbb782e752ca4eb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('478','/admin/mod/mall/list.act.php','1939','1434590485','d18b280d50779fdf6f07f6f3b908bc7b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('479','/admin/mod/mall/get.act.php','31719','1434590485','d8b4743a3f0e266e441979f28e367437');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('480','/admin/mod/mall/del.act.php','784','1434590485','810fde7eb8f89026dcaada9386de3b60');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('481','/admin/mod/plugin/alimama.act.php','2642','1438306549','3bd035b709322b35c965790b327bd159');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('482','/admin/mod/plugin/keyword.act.php','1265','1437354749','1da0111d4627aafadb31cd1087c09d1c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('483','/admin/mod/plugin/huodong.act.php','788','1437354749','de3ae0d6ffffdbd497bfb11be155d4e8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('484','/admin/mod/plugin/addedi.act.php','1515','1437354749','f769a7121ffdd73094063038a63eb287');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('485','/admin/mod/plugin/down.act.php','5212','1437354749','6abd6223e2be3346bfc4d63cba821c1d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('486','/admin/mod/plugin/public.act.php','1516','1437354749','d2085030a062ff0e5ecc70ac7d5a0cdf');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('487','/admin/mod/plugin/loading.act.php','1066','1437354749','59079ef7df65f0f28bcbb2cb53ecad87');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('488','/admin/mod/plugin/admin.act.php','9767','1497954704','4556da9cbe12995a92c46087e6f0bafa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('489','/admin/mod/plugin/file.act.php','972','1437354749','ffee4d5c1ed03875a50924728f825f6e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('490','/admin/mod/plugin/update.act.php','2420','1437354749','8c9caac537bd52de4b64af457fe9c4a2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('491','/admin/mod/index/left.act.php','636','1437354752','930a3f6095390c247633c09614849202');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('492','/admin/mod/index/index.act.php','1103','1438306550','4ac93ce5455f6f2305a6d21acd6a3489');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('493','/admin/mod/index/top.act.php','681','1437354752','523f94eb789fd3ab1701e5ffe24b7b6c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('494','/admin/mod/user_temp/public.act.php','687','1437354750','ebf4fecc6219373d0a5ad1dea23ab52d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('495','/admin/mod/user_temp/list.act.php','2396','1434590485','33d18352f3ea52267eb6b7c9733ef5bc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('496','/admin/mod/user_temp/qunfa.act.php','3827','1434590485','d01ff87d5040d541a6aa2ae0d13ebd6e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('497','/admin/mod/user_temp/qunfa_set.act.php','5774','1434590485','0d43388ebe12854ee97fac95fd465f2b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('498','/admin/mod/user_temp/del.act.php','1171','1434590485','0980ac6669523cd5d3d29da9dedf5c26');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('499','/admin/mod/sitemap/list.act.php','2418','1437354749','5df8c1eb4cf601ee5854f548b2d3c511');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('500','/admin/mod/sitemap/sitemapxml.php','3761','1436519900','b12fdf99375c2c6677dd0725822797b2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('501','/admin/mod/ucenter/set.act.php','2146','1437354752','39ed0834ec8bfb1e809de145c52fc39b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('502','/admin/mod/ucenter/import.act.php','2382','1437354752','d1cdd8809103970ed8fe86dbd9af6ef6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('503','/admin/mod/article/removecid.act.php','856','1437354748','1f29490b49efddc9cefcc18006dcfb12');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('504','/admin/mod/article/list.act.php','1649','1437354748','cefd13869758bb0538f6b362eee17244');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('505','/admin/mod/webset/center.act.php','7563','1467162438','57ecbf41f3b0d4a9f8fd41d327571a34');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('506','/admin/mod/webset/upload_set.act.php','1256','1435285975','8b6f1e8248fb0c9b0c4234dac3bdaa94');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('507','/admin/mod/webset/set.act.php','651','1434590485','95105ff27dfa71c6d44a001e19a222e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('508','/admin/mod/webset/fanli_set.act.php','5124','1498279320','46857f2b7e9bc5978709073f399baca9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('509','/admin/mod/goods_attribute/del.act.php','1361','1434590485','8ae4fbb3df8aa56b4d2978a29b23cf02');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('510','/admin/mod/bankuai/addedi.act.php','2639','1444718399','bf23b973a74e8ab00f1a08666d50f8dc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('511','/admin/mod/bankuai/public.act.php','1324','1434590486','aad3fe0401b60134b79507e3c4c827e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('512','/admin/mod/bankuai/caiji.act.php','1853','1434590486','278f2b3996f5f225cc4ba2e49a5fcb19');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('513','/admin/mod/bankuai/list.act.php','1113','1434590486','c992537a988d604a0dddc88aa2ab4358');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('514','/admin/mod/domain/addedi.act.php','1136','1436747602','331e7409fad8e0c543a39e02a55f9fbb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('515','/admin/mod/domain/public.act.php','917','1434590486','612b3e895e0ef9e09dde9f8539826977');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('516','/admin/mod/mall_comment/list.act.php','1426','1437354752','f23ac1fc92266f6710420dd8b5d519e1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('517','/admin/mod/goods/time_set.act.php','770','1434590486','e37bc9607de79478260af32a7e3a1737');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('518','/admin/mod/goods/s_list.act.php','4985','1434590486','cac467bd6ef83fb3b1eeba062d0311a6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('519','/admin/mod/goods/addedi.act.php','6128','1499304232','109eb5c8aa47c7b784da6922e6b9ced1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('520','/admin/mod/goods/set.act.php','768','1434590486','009878d42090b6abb4fd16f550fd3b3f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('521','/admin/mod/goods/public.act.php','695','1434590486','e178d2f9cf2a0aa8b120ccc9dab1b272');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('522','/admin/mod/goods/list.act.php','3673','1442198738','708e078e01eca6cd57819fa757a9d8ea');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('523','/admin/mod/goods/paixu.act.php','1613','1438049937','4dad21f400baa7d81e40084eb7e58c13');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('524','/admin/mod/goods/del.act.php','851','1434590486','ebdbe1d13afbbeedd819fd16647be759');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('525','/admin/mod/goods_comment/addedi.act.php','1151','1436317409','98dcaa87be0ffd4bd8de185d22386271');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('526','/admin/mod/goods_comment/list.act.php','1452','1434590486','b6eb976d3d0478b6fb2e886390f0e5b6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('527','/admin/mod/baobei/addedi.act.php','1300','1445592108','40b229731fb5e55f2fefc400b9be7f5a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('528','/admin/mod/baobei/list.act.php','2862','1445657449','7e9c9f816dd5f9ee6d12523069bf622c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('529','/admin/mod/baobei/del.act.php','1508','1434590485','0c136da0436454bfda469b322112b72a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('530','/admin/mod/index.html','47','1437354752','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('531','/admin/mod/role/addedi.act.php','2391','1438306550','32bb5d2b8858b9e4d94744e77eefb4f0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('532','/admin/mod/template/index.act.php','773','1437354753','35863f4cd41aaae0fe239cd2e11ecac0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('533','/admin/mod/adminlog/list.act.php','1152','1437354752','4f0d1a34cbdcbbbec1049464d8aa7d01');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('534','/admin/mod/adminlog/del.act.php','1233','1437354752','64273f2e0d510d2076ebdb75debdecb7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('535','/admin/mod/msg/addedi.act.php','4486','1434590486','392b70a71b10e5908f32b155eeaf5769');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('536','/admin/mod/msg/list.act.php','1816','1437354751','001b6292290af5c86801427415a06926');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('537','/admin/mod/phone_app/phone.act.php','996','1436239646','e4a90685088337db89ff53d054dc0984');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('538','/admin/mod/duihuan/addedi.act.php','2531','1434590486','db016f04171a11481c4d437ddd3aa8df');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('539','/admin/mod/duihuan/list.act.php','1265','1437354752','c467f515fa2f81889a11f782ae35c16f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('540','/admin/mod/ad/addedi.act.php','1631','1434590486','6377b3209d5653626f468c4abb0e4c9f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('541','/admin/mod/mobile/app_set.act.php','2486','1438306549','62feb2a233ca9f2928d418f34efdaae8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('542','/admin/mod/mobile/wap_set.act.php','1271','1437102856','50bad1cb23ee2adf5b16f04414e2c60a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('543','/admin/mod/hezuo/addedi.act.php','827','1434590486','32beb36af17ecd4f70b9f82cb5a687ef');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('544','/admin/mod/hezuo/list.act.php','1252','1434590486','042fc8c08a9535d12aa9685da9cc54f6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('545','/admin/mod/type/addedi.act.php','1915','1434590485','cfbed590e563a3c9347fb6e4fbdb59c9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('546','/admin/mod/type/list.act.php','3745','1434590485','bee46872d24716bfb04be3768c7a4750');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('547','/admin/mod/type/del.act.php','915','1437354748','9f9e835a6a7aefc0642ffe305dfb9490');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('548','/admin/mod/phpwind/import.act.php','1749','1437354750','600351923a176b20a42f0e521a812438');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('549','/admin/mod/scan/file.act.php','4109','1434590486','9bde8fb87127ddf32c3f282b5163202c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('550','/admin/mod/scan/check.act.php','4189','1434590486','71e9ef9963b3a63dcaa7b033add74d47');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('551','/admin/mod/scan/do.act.php','1054','1437354751','19621525586538ece673092935aa8994');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('552','/admin/mod/duoduo2010/addedi.act.php','1508','1437354752','11c05a23bb305b229a0144cd930d9a32');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('553','/admin/mod/link/list.act.php','923','1437354752','59adab72190e63c744a94216d9108acc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('554','/admin/mod/menu/s_list.act.php','1335','1438580556','22007d1d083af764cc2877b21514cc9c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('555','/admin/mod/menu/addedi.act.php','4106','1437354750','858fab059fd8c22522c0deedc9b21165');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('556','/admin/mod/menu/list.act.php','1057','1437354750','71fbc534726ba0975c1e8e884c051271');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('557','/admin/mod/menu/del.act.php','863','1437354750','7e020dcd27eaa6173907b6ebf56b77d5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('558','/admin/mod/upgrade/index.act.php','4427','1437354751','66af660242cd8bb108f1476f88b15671');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('559','/admin/mod/tradelist/list_temp.act.php','2558','1517278175','4ceca8c0c9ea7e6b392ab5d15be3774c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('560','/admin/mod/tradelist/taodianjin.act.php','1368','1437354752','49a6c4b2508fb232ae4b2cf8d29ba649');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('561','/admin/mod/tradelist/tbname.act.php','651','1434590486','95105ff27dfa71c6d44a001e19a222e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('562','/admin/mod/tradelist/huanren.act.php','1346','1492478870','abe7711c8fabe7d883410f687721fd43');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('563','/admin/mod/tradelist/report.act.php','2715','1461652150','0c63eac04c11e21ef504dd2d1c1c5ff8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('564','/admin/mod/tradelist/addedi.act.php','11054','1512023448','da4f772cb1118bc719c2c34b502bb0b6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('565','/admin/mod/tradelist/set.act.php','2479','1512360962','ebdbfe61398e330707e6c76ebe0c274d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('566','/admin/mod/tradelist/list.act.php','4534','1514450167','6ce7038f01e1fa3d3833ce99c8d56032');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('567','/admin/mod/tradelist/import.act.php','3387','1513513075','38e1c139e42df1acadb30d24385d6794');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('568','/admin/mod/tradelist/session.act.php','1965','1437354752','dae5e47856280eabc91f4118afe40948');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('569','/admin/mod/tradelist/cha.act.php','906','1492233017','7b881813017bca6387e359feceae63d4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('570','/admin/mod/tradelist/del.act.php','1675','1492153055','d2d937d77ed42b59ef16f70d8db95004');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('571','/admin/mod/task/report.act.php','3546','1439799727','2890e85ac7a943266270da0ce710a25d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('572','/admin/mod/task/set.act.php','1135','1434590485','34b670e4c8b7dd0704f685ae935f4a33');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('573','/admin/mod/task/list.act.php','2082','1434590485','e0d4bd9d2e56969bdfbd824861ac53ea');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('574','/admin/mod/cron/addedi.act.php','846','1439383052','0fdd203572154f6c92ab7f4df1a4bdfe');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('575','/admin/mod/cron/public.act.php','1072','1450676931','dfac9ab9d52a23517d71f2d9af11c084');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('576','/admin/mod/cron/list.act.php','1025','1450676931','a0eba1c68ade04882bbc027c312296f7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('577','/admin/mod/noword/addedi.act.php','1519','1437354752','1dd243401d75b117a299cf4c48799467');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('578','/admin/mod/noword/del.act.php','887','1437354752','1f8fae740f68fb1d33c99200dcfb63cb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('579','/admin/mod/tuiguang/jiangli.act.php','950','1434590486','3bc36e9da7bedb371d00e2da481b1359');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('580','/admin/mod/tuiguang/addedi.act.php','609','1435021751','483e6a596c19493b16618c53b8b1205d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('581','/admin/mod/tuiguang/search.act.php','1139','1434590486','39c61aa74a5d89c20473f11d8569950d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('582','/admin/mod/tuiguang/list.act.php','1969','1435021751','08aedc6faa1e18d23767108ab9e4f0b4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('583','/admin/mod/baobei_comment/list.act.php','1245','1434590485','4c00dece21c813e44910dc8aaf0b47e2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('584','/admin/mod/fun/upload.act.php','5093','1476531357','b37966defc547153b5e4210b5ece9494');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('585','/admin/mod/fun/cache.act.php','4361','1467162438','90f99d47b1cfe47608ef6e1001199cf4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('586','/admin/mod/sms/set.act.php','2030','1493716646','5b0a4c2fe31a15dc4f064b49e1347c16');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('587','/admin/mod/mall_order/addedi.act.php','3261','1434590485','901ca4aee20127cbf724c0e6ac24c5eb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('588','/admin/mod/mall_order/list.act.php','2314','1434590485','3863e05653ffad9e157ad4f560e8ee8d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('589','/admin/mod/mall_order/get.act.php','36747','1434590485','1c446fe2e84e4db37870534f8a4bf018');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('590','/admin/images/skin.css','12361','1435021751','79edf8ae9cbe4911f0deb1686d38d962');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('591','/admin/images/index.html','47','1437354781','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('592','/admin/template/user/award.tpl.php','2329','1474860894','782e506ef3a0dafba0deb1452f69a644');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('593','/admin/template/user/list.tpl.php','6071','1437355031','4aaf7404f0ca99e82c3cce282750c716');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('594','/admin/template/user/set.tpl.php','8556','1438658886','afe4b62a18fa9c9734c27d6fe800e57c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('595','/admin/template/user/addedi.tpl.php','9496','1511701270','e3c71da1ecc8cfa0627ad6352839889a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('596','/admin/template/data/list.tpl.php','12115','1450676930','6a49f85164aa1b423b5abe1b03dd514f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('597','/admin/template/data/check.tpl.php','3531','1437354784','0b44266545a1bb50c3833805982b981b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('598','/admin/template/data/backup.tpl.php','6289','1437354784','c1114cce02cec1b8246a2ee934205e28');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('599','/admin/template/paipai_order/report.tpl.php','1840','1434590488','46f8218c08ab9b5c922b0caa97298634');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('600','/admin/template/paipai_order/list.tpl.php','5035','1437354782','e45f53b499d68a3e7bafd0ffe0bc78cc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('601','/admin/template/paipai_order/set.tpl.php','2948','1434590488','381454d179c0800736852e01797573a8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('602','/admin/template/paipai_order/import.tpl.php','1373','1437354782','46c9cb1cebc45bd3bcb6085b371888de');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('603','/admin/template/paipai_order/addedi.tpl.php','3443','1437354782','eaf461c199be7c1491db1a88b2f426b4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('604','/admin/template/taopid/list.tpl.php','3150','1467162438','8d1afe2ce40d00f3224f199c500c77e4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('605','/admin/template/taopid/addedi.tpl.php','2850','1467162438','c57625e807ae4ed171d6fbaebe3cf034');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('606','/admin/template/base/jifenbao.tpl.php','939','1437354786','0319dd99e9052db15b4b060bc66def04');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('607','/admin/template/baobiao/rank.tpl.php','2934','1437354781','6460637f11f489e5dd7c9b4251ad64d1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('608','/admin/template/baobiao/tixian.tpl.php','2385','1437102856','7abd016786f10c5b416c3973e73ba98e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('609','/admin/template/baobiao/list.tpl.php','6232','1434590487','764ada8b354fd7eb502b65a23f1bdeb0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('610','/admin/template/baobiao/statement.php','3992','1446811074','f4fc623f132ca5d33e0033d70787307a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('611','/admin/template/baobiao/rank_jine.tpl.php','2896','1437354781','14b3d882e3c1bb3374a033136cc85e2f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('612','/admin/template/baobiao/share_jifen.tpl.php','2483','1437354781','1491bc6b38e0f4342957db7404039781');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('613','/admin/template/baobiao/tuiguang.tpl.php','2637','1437354781','65dae7b7c92d68ca6252b4b6d56c4e94');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('614','/admin/template/baobiao/paiming.tpl.php','630','1437354781','4b560fd56fcd486d871c3a96323f719f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('615','/admin/template/baobiao/share.tpl.php','2517','1437354781','cc73923f41f0a5276537b50cc03fbea5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('616','/admin/template/baobiao/FusionCharts.php','7662','1437354781','103fa21525c84e9e8ba3e86af0fc1bb4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('617','/admin/template/collect/list.tpl.php','4794','1438658886','b49b9d0ee505d2f4f9c8d645c7c0cb2e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('618','/admin/template/collect/yun.tpl.php','5315','1434590488','c44fcb2f3ea825eea2290de30922a04a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('619','/admin/template/collect/addedi.tpl.php','8837','1468054908','f7cac3c957628e13a1bc6ff5bb567ba9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('620','/admin/template/kuaijie/list.tpl.php','2995','1434590486','097343dbd3bc939e174a898593c116cb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('621','/admin/template/kuaijie/addedi.tpl.php','1573','1434590486','539e6f5a6f3c6a7fbbf852e5015cabbc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('622','/admin/template/spider/set.tpl.php','3868','1434590488','0a31c4224dcdeb55e1c09149ef95e4ab');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('623','/admin/template/seo/list.tpl.php','3198','1437354782','aeaeec87a6df84ac420caddf3756e236');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('624','/admin/template/seo/arr.tpl.php','2850','1467162437','3ede350bcfc5208580ac49051e1a2574');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('625','/admin/template/seo/set.tpl.php','1900','1436239646','8c00fbed55e474e4fff2d032b288a510');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('626','/admin/template/seo/addedi.tpl.php','4015','1434613766','dc51802e5c2ababf4fa1b47399448f81');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('627','/admin/template/msgset/list.tpl.php','3005','1437354783','543ec9530361da5d715b0c296f48a9fa');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('628','/admin/template/msgset/addedi.tpl.php','2727','1438306550','0160bcef46bfcdd4361bbef1a5bb7586');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('629','/admin/template/mingxi/list.tpl.php','3664','1437354782','acada27562b370ce331a1b2974c42cd1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('630','/admin/template/tixian/list.tpl.php','7255','1507538970','47aa30e24fe98e38dc52d7b6b64686c4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('631','/admin/template/tixian/set.tpl.php','7060','1542610611','0aee3bd56de8c41444cd40a71a33f752');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('632','/admin/template/tixian/bank.tpl.php','2463','1437354786','9dc76df29193ca14f298a55ba2e761a0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('633','/admin/template/tixian/ddshouquan.tpl.php','5007','1438306550','4d1d20cb4a335cd3c10b66b540e9eaa3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('634','/admin/template/tixian/addedi.tpl.php','4742','1437354786','091296467bf1a40b67370768def2ef8f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('635','/admin/template/buy_log/list.tpl.php','2926','1437354781','9a9fd7d46cdfd4f356d1eb7ad3bfc40b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('636','/admin/template/bijia/set.tpl.php','4194','1434590489','1defc1f620687827f6acb459dd1f2dd7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('637','/admin/template/webserver/set.tpl.php','6380','1450676931','a9dbd0fc5456db4d91a13f35ec8a016d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('638','/admin/template/webserver/info.tpl.php','2565','1437354786','f9d11dff53c4973ddcda61967b2030a3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('639','/admin/template/login/login.tpl.php','2255','1437354782','2f6f4f8c193105602ae85c6f30fb4051');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('640','/admin/template/database/cache.tpl.php','3244','1453856951','aa170f959556b324038b4395c7c9b0b3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('641','/admin/template/database/recycle.tpl.php','1412','1437354784','d50010f66f78982b91148bf45cd9a15d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('642','/admin/template/database/plugin.tpl.php','6024','1437354784','da6b5d8b9e2e42c298a652346dddca48');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('643','/admin/template/database/permission.tpl.php','2596','1511746601','ffa6b9a81bdcc3f86e7f3825a8faa137');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('644','/admin/template/database/jiance.tpl.php','2347','1437354784','1f19b94dc599dfe0acb17baf3908a000');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('645','/admin/template/database/overdue.tpl.php','3514','1437355031','05d1ddd783e3fad7261f1168eb6bd516');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('646','/admin/template/database/debug.tpl.php','4492','1434590487','d46c404ac8b8aeed735e508e876262d7');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('647','/admin/template/mall/list.tpl.php','6050','1434613766','3079b39c2d06cf08d57b555d6081652f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('648','/admin/template/mall/set.tpl.php','3754','1435021751','1bb994b15ba3af626f3029be34c289ed');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('649','/admin/template/mall/addedi.tpl.php','23496','1438658886','22c277d9cba2a5eb052d62f699e81fa9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('650','/admin/template/plugin/sys.tpl.php','1408','1437354784','306f9ef3bb75658e79cffdce4820b52c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('651','/admin/template/plugin/keyword.tpl.php','1602','1437354784','921abb671586e786050de4b8b9f6faf1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('652','/admin/template/plugin/loading.tpl.php','2562','1437354784','177d7946fa45c6d9c30eb366368d58df');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('653','/admin/template/plugin/list.tpl.php','7557','1437354784','02f7045c05e9a159c1bd2ba9377e2e5b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('654','/admin/template/plugin/dd_set.tpl.php','1816','1437354784','10ac624b23ad59ff7fe3d4142aeae0db');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('655','/admin/template/plugin/file.tpl.php','2866','1437354784','51805e9856895b18c03722093eddf325');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('656','/admin/template/plugin/huodong.tpl.php','3221','1437354784','f61c988305bcf7e5bf413bbdda07f541');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('657','/admin/template/plugin/down.tpl.php','3176','1437354784','42610082fea17630bab53b290a0f4dee');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('658','/admin/template/plugin/bbx.tpl.php','1314','1438306550','03e8a68b41bc52a8f05911817ee88e46');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('659','/admin/template/plugin/addedi.tpl.php','5392','1437354784','f3fa032b1282db5bc841fd5de86ab0fd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('660','/admin/template/plugin/alimama.tpl.php','7887','1436144716','2c1f1d897878149c5dfa266495b71944');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('661','/admin/template/index/index.tpl.php','1397','1437354786','b0980d3634f96c705991e31e2a16e709');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('662','/admin/template/index/top.tpl.php','2567','1438311300','02888622cd0de5049ac43cc11b592873');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('663','/admin/template/index/left.tpl.php','5454','1434590488','f41977ac31d1a9c3c6ffe24a78fbd6dd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('664','/admin/template/user_temp/qunfa_jilu.tpl.php','1277','1434590487','b78225dc113fb3c9b0f6a591d6666254');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('665','/admin/template/user_temp/list.tpl.php','5730','1434590487','26b4db713ff8f4c75ddc690c4d054adb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('666','/admin/template/user_temp/qunfa_tag.tpl.php','8306','1434613766','f72bab0c5181265591a59150d9f0e54d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('667','/admin/template/user_temp/qunfa_set.tpl.php','6586','1470895830','8fb0a958650c619ef55c362b4ff55dda');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('668','/admin/template/sitemap/list.tpl.php','7463','1436519900','03764c93b94936f64f6efcbe594a3fad');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('669','/admin/template/ucenter/header.php','143','1437354786','0ba4ed6d464541ea4ff2bc6fcad3da3d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('670','/admin/template/ucenter/set.tpl.php','10409','1434613766','faa9dccf0b827aa42c45d8fa034fad4f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('671','/admin/template/ucenter/import.tpl.php','2228','1437354786','9a006f29dca508c75b7b74814a81dd0b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('672','/admin/template/statement/list.tpl.php','3618','1437354786','1f7b1567889762ba4c6040983d93f57d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('673','/admin/template/yiqifaapi/set.tpl.php','2559','1437354782','c7e18671590c856f3fd60e64595c607a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('674','/admin/template/article/list.tpl.php','4973','1439004071','a974d4be635d5aec8fce9a1d9802e9f6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('675','/admin/template/article/addedi.tpl.php','2806','1437354781','3df034af697c9cc6e6bf69e8cd13f2a3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('676','/admin/template/webset/center.tpl.php','15444','1467162438','ced620db7643205b2e5b27a807910549');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('677','/admin/template/webset/fanli_set.tpl.php','17330','1523608614','a20acedd2c956c333a34e5a4f378b264');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('678','/admin/template/webset/set.tpl.php','5106','1437355031','f864b42d73aa9f958d6a3e5a238d7aeb');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('679','/admin/template/webset/upload_set.tpl.php','5284','1435285975','9acbecdf51f921d96ff5b449065efd33');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('680','/admin/template/goods_attribute/list.tpl.php','3333','1434590487','5f9f727c8a3d1f52285064a1c73c32e1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('681','/admin/template/goods_attribute/addedi.tpl.php','2690','1435309625','fd80723ee45fe15288b775dbdd53d421');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('682','/admin/template/bankuai/list.tpl.php','4725','1435036449','3d8dba1778080889552b9769c854e05a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('683','/admin/template/bankuai/yun.tpl.php','5315','1434590488','c44fcb2f3ea825eea2290de30922a04a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('684','/admin/template/bankuai/addedi.tpl.php','13969','1444718399','539f757cacfcda116bacf6a50d601ed0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('685','/admin/template/domain/list.tpl.php','3007','1434590488','d280e12bd5ff892340f4ade945d634e6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('686','/admin/template/domain/addedi.tpl.php','4401','1467162438','0ca94715dcf5e2a6245c98ee81176b9b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('687','/admin/template/nav/list.tpl.php','5966','1437354785','fe0cc791c2ecbddd9e22f611160cfc22');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('688','/admin/template/nav/addedi.tpl.php','7837','1434613766','3aaafba641ef730e3b9a75572296d01d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('689','/admin/template/mall_comment/list.tpl.php','3343','1435021751','4f7da49afb6b4361a1537b0e8e0c6f46');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('690','/admin/template/mall_comment/addedi.tpl.php','1596','1437354783','3d0182e59f2458530955346bba4f91de');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('691','/admin/template/goods/list.tpl.php','9513','1442198706','15362d288a173f0fdb9baddf4435cc43');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('692','/admin/template/goods/addedi.tpl.php','13525','1493716646','47b08b96e18c995efd270618b932b212');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('693','/admin/template/goods/s_list.tpl.php','6696','1438049937','c0ae974fea32df5aeb741699753ab369');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('694','/admin/template/mall_type/list.tpl.php','3047','1437354785','0e282b5fdfa623e99a6f7ab5b7a25fb8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('695','/admin/template/mall_type/addedi.tpl.php','1393','1437354785','d275c3191840f76f2b1009961b54acb4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('696','/admin/template/goods_comment/list.tpl.php','3303','1434590488','ed0e71f8ce0b4ddde81c514a3f36652a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('697','/admin/template/goods_comment/addedi.tpl.php','1575','1434590488','f3b034e7c85dff85ad5f0ac8c6892877');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('698','/admin/template/wujiumiao/set.tpl.php','2719','1437354782','d56b89ba4faadd4843435080548b2805');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('699','/admin/template/baobei/list.tpl.php','5666','1434613766','fec8affea031db1c15fd83ef01797861');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('700','/admin/template/baobei/set.tpl.php','2480','1434613766','93eb79b9921e1a4c08e840e17d1d78d6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('701','/admin/template/baobei/addedi.tpl.php','5251','1434590487','7a103a938498ecef2e949e01bf0db3a5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('702','/admin/template/index.html','47','1437354786','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('703','/admin/template/role/list.tpl.php','2835','1437354782','c7a7d81c64450222878dd886b3c4f3b0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('704','/admin/template/role/addedi.tpl.php','3293','1434590488','295dc40a55f8e4dd47ed91556aa4e968');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('705','/admin/template/template/index.tpl.php','2148','1437354786','a195aef224cfe58d9f105e78c26436da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('706','/admin/template/template/admin_set.tpl.php','1838','1436747602','b9288eb688db499027778f2a05a7473b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('707','/admin/template/template/set.tpl.php','4733','1444719825','43483a08e06ee0ac4ecfcd49316e628d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('708','/admin/template/adminlog/list.tpl.php','3063','1437354785','51cc4dd1d09239966665b616849b3489');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('709','/admin/template/huan_goods/list.tpl.php','4520','1437354783','a54c313cd0a4ab5ee776d7127931a3c6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('710','/admin/template/huan_goods/addedi.tpl.php','4721','1434613766','f908a381f7167dc45d3e52e3b681f308');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('711','/admin/template/msg/list.tpl.php','3669','1434590488','e7165a9c38e8fba26ff5591fe13d4a9a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('712','/admin/template/msg/addedi.tpl.php','3116','1434590488','8862e092e45408a939f4c78b2d15d987');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('713','/admin/template/duihuan/list.tpl.php','4602','1434590488','7f38f65b9af8d5c0a80171b576fad21d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('714','/admin/template/duihuan/addedi.tpl.php','3172','1437354786','af99d3bc1bb86609e953364d635c878e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('715','/admin/template/ad/list.tpl.php','3621','1434590488','5f96334d4a3bf61cff3945cbb8f06e53');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('716','/admin/template/ad/addedi.tpl.php','6065','1437354785','d2b4b2a9b4964986ed14f4b5d5c5bd2d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('717','/admin/template/mobile/wap_templete.tpl.php','4376','1437121235','ae7c56224aba41ccb6ce5515abf6fcc0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('718','/admin/template/mobile/app_set.tpl.php','13593','1434590487','b1f46a5d9fd4019cb684ac2053fbe6b6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('719','/admin/template/mobile/weixin.tpl.php','949','1435285975','4afd7aafc43b1305b965377394262611');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('720','/admin/template/mobile/wap_set.tpl.php','5682','1437102856','e117e7a66afe509dc7e1759a1d2a6e0f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('721','/admin/template/hezuo/list.tpl.php','3542','1438311300','74dd81c7bf578d47f2b0d4c8e6100ac2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('722','/admin/template/hezuo/addedi.tpl.php','1526','1434590488','00edcf1897adb4a52bdb448dcb92319e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('723','/admin/template/type/list.tpl.php','2680','1434590486','32594155721380fbe85bfc34125e03f5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('724','/admin/template/type/addedi.tpl.php','1884','1434590486','4095561ed5bc7b8e98edacf14ad7e9a3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('725','/admin/template/header.tpl.php','9380','1437963499','83931582d4e63c4e520ad2d4c10baa24');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('726','/admin/template/phpwind/set.tpl.php','4586','1437354782','45d7cccacfaaaf483c7c44e04b536fb5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('727','/admin/template/phpwind/import.tpl.php','2148','1437354782','afc8ebb73a7e8b08c7f96f7d67fd8bf3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('728','/admin/template/scan/file.tpl.php','2651','1437354782','e5400cb48ee7b8c19547c4fa5e47f0ac');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('729','/admin/template/scan/check.tpl.php','2365','1437354782','e2ebc75207aa02a1f93222b4f35f24e6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('730','/admin/template/duoduo2010/list.tpl.php','3625','1437354786','72d0192d01b1e4e22dd6f8014ce93ec4');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('731','/admin/template/duoduo2010/addedi.tpl.php','1741','1437354786','aad5879972e0b639952c0a306c78669f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('732','/admin/template/link/list.tpl.php','3476','1437354782','2a22b6a8ecdff54eeadcf9c0ab1e568f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('733','/admin/template/link/addedi.tpl.php','2219','1437354782','6be48f73b76151cc0bb09304d8533232');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('734','/admin/template/menu/list.tpl.php','3714','1438580556','16a8517ebec4d99107fe9ce31225e0ae');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('735','/admin/template/menu/addedi.tpl.php','3505','1437354782','ac935e9e5953e30c35d7378cc1d57ded');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('736','/admin/template/menu/s_list.tpl.php','2293','1434590487','317a6c223497b9e3da25101492418a6e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('737','/admin/template/upgrade/index.tpl.php','1888','1437354782','f62e8643b84383d525af36031060748f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('738','/admin/template/upgrade/step_2.tpl.php','2211','1437354782','94bd005a47ef363fc70dd2882feb779f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('739','/admin/template/upgrade/step/step_7.tpl.php','1068','1437354782','80f2c21f7ea025fc8a9b3d96380e78b3');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('740','/admin/template/upgrade/step/step_2.tpl.php','1910','1437354782','7893ec1b3e3f7a3b0d11845c7e1473c8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('741','/admin/template/upgrade/step/step_6.tpl.php','2558','1437354782','1b3b844501206efe2f4ac4465db6f6fc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('742','/admin/template/upgrade/step/step_5.tpl.php','1746','1437354782','1a614daab49f49b73c1f77dc0919acba');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('743','/admin/template/upgrade/step/step_4.tpl.php','2465','1434590488','fdd722018c625467409a28e7f749ad60');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('744','/admin/template/upgrade/step/step_3.tpl.php','1542','1437354782','eecca7412d4c9a19a623fda750b98ee6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('745','/admin/template/upgrade/step/step_8.tpl.php','1156','1474860894','5c8441c5839f04f87fa1c2bbdc210421');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('746','/admin/template/upgrade/step/step_1.tpl.php','4077','1437354782','9ded31302fc431df1fd4c10466b37cab');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('747','/admin/template/tradelist/report.tpl.php','9264','1461652150','b2c75fb2aa5b4227e21afb94c7126751');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('748','/admin/template/tradelist/tbname.tpl.php','1429','1434590488','3551fc9aa142886f9378a2242cac862d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('749','/admin/template/tradelist/list.tpl.php','7414','1495266343','6bc7d751a9f5638a1857eba8ea388981');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('750','/admin/template/tradelist/session.tpl.php','3695','1437354785','22bd7dda4c0cf04f261f9ff04d1d9861');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('751','/admin/template/tradelist/list_temp.tpl.php','4457','1434590488','cfc63645f8518dbfc207937e83afa6a6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('752','/admin/template/tradelist/set.tpl.php','5965','1467162438','e2210f9f679f8f2ed8a9df575c41339c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('753','/admin/template/tradelist/import.tpl.php','2423','1513328034','425ffb07a493a6850bd4f4caaefcaaa2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('754','/admin/template/tradelist/addedi.tpl.php','8740','1492153055','8eb421fd5b91746237f2218368c50124');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('755','/admin/template/tradelist/taodianjin.tpl.php','3058','1437354785','f2c631315e353e926b2950fb22f7fe76');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('756','/admin/template/task/report.tpl.php','1819','1434590487','c9c4552ac28e5d9672e74826098e0b46');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('757','/admin/template/task/list.tpl.php','4573','1434590487','a3097d4b25dcb67587ef0a900a55cdd5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('758','/admin/template/task/wami.tpl.php','4041','1436188368','3f40b15c959e1b64e71c480f26c4f065');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('759','/admin/template/task/douwan.tpl.php','4154','1474872044','236e5ffd481217923208d42862a97a41');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('760','/admin/template/task/set.tpl.php','603','1434590487','5bafcff976934030113a048fe90c7093');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('761','/admin/template/task/offer.tpl.php','5592','1474460847','419216f9bfce50e2f6df1f5fc57d4e83');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('762','/admin/template/task/gametask.tpl.php','4443','1434590487','d78b48a60d5236ed2b2716a15aee5f90');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('763','/admin/template/cron/list.tpl.php','5779','1467162438','ca116a1b4659927c69d7db91b8bafc3e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('764','/admin/template/cron/addedi.tpl.php','8008','1467162438','b0dcd35b3926564ace297c1a926da3e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('765','/admin/template/noword/list.tpl.php','3080','1437354786','012960d6980a44840ff99a265169a40f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('766','/admin/template/noword/addedi.tpl.php','1836','1437354786','77e263c473eca084e576d0dd611c3cc0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('767','/admin/template/tuiguang/my_huodong.tpl.php','6266','1436239646','75de7b443de8d2e8d6858a3810fce558');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('768','/admin/template/tuiguang/search.tpl.php','1339','1461652150','8d72d5d80f62c6a389787dfe428d8cdc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('769','/admin/template/tuiguang/zhuce.tpl.php','2245','1434590488','8e217c7a8e5df3a21413aefae16f5dc2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('770','/admin/template/tuiguang/list.tpl.php','2948','1438311300','88b008368de362a34a65a9af0d074829');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('771','/admin/template/tuiguang/huodong.tpl.php','4900','1436239646','9a1eb9f6d3359eb6c116f91d0ac69d88');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('772','/admin/template/tuiguang/tuiguang.tpl.php','3220','1434590488','0d8b135060e4469ad3a5156720f8ffdc');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('773','/admin/template/tuiguang/jiangli.tpl.php','5773','1438573154','aa0b6f1da13132afcd27cc48f990690a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('774','/admin/template/tuiguang/sign.tpl.php','2706','1434590488','81fd451305ebc374f63c7566d9187373');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('775','/admin/template/tuiguang/addedi.tpl.php','8112','1436239646','a24f4fd37ce7697b76a68664c8b39092');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('776','/admin/template/tuiguang/share.tpl.php','2748','1434590488','b4a02b8bfa711cf5667f099913414c19');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('777','/admin/template/service/list.tpl.php','3406','1437354782','4dfb5d79b94a734ccc166b9cebf25c24');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('778','/admin/template/service/addedi.tpl.php','1755','1437354782','391b2875f1da206f2253e3e24fc1b996');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('779','/admin/template/shangjia/set.tpl.php','2055','1434590486','5f534bdcaf54841ed8b7c8265fb5d205');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('780','/admin/template/baobei_comment/list.tpl.php','3295','1434590487','dc3f4b290d2153da3e4bab45bbc85659');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('781','/admin/template/baobei_comment/addedi.tpl.php','1625','1437354784','7eb58aa577ddf88dae45122023682c43');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('782','/admin/template/smtp/set.tpl.php','5087','1493975699','9aaf50b128d629af3146fec095b18ab6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('783','/admin/template/footer.tpl.php','994','1437354781','6de3106b604901a0d0218bb492e0c7e9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('784','/admin/template/api/list.tpl.php','3462','1437354786','780c49b8d8e6d1ccf53853cd6c0cdd34');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('785','/admin/template/api/addedi.tpl.php','3597','1520475188','3574b29c21ce1997c4baf9c608f2805b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('786','/admin/template/slides/list.tpl.php','3543','1437354785','3e377316b364885f5734352e5d17205d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('787','/admin/template/slides/addedi.tpl.php','2546','1434590488','ae807db9167b6b0fb7c12ce01097524b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('788','/admin/template/sms/set.tpl.php','9438','1499150395','5e35145cac5eaa36a76dcba5a1053533');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('789','/admin/template/mall_order/list.tpl.php','5542','1438306550','a5b1424352b0181726768b609b5612db');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('790','/admin/template/mall_order/get.tpl.php','2428','1434590486','6873b29b852c5127fed0387e5c8fdc26');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('791','/admin/template/mall_order/addedi.tpl.php','5483','1438306550','11d62d23582be2a04d6e7c4d94ef2aee');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('792','/admin/admin_index.php','8018','1544513170','f0b0369a94e4d7b1c416c0544e6cb468');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('793','/admin/css/bshare.css','5618','1437354781','9288112c8f6aa721bfa25cc2bb5724a1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('794','/admin/css/upgrade.css','5934','1437354781','341bb0cb0259d7fb33577c8e3c7dfe48');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('795','/admin/css/login.css','771','1437354781','64d0fd1d11787b640fa9fd47742505e8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('796','/admin/css/index.html','47','1437354781','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('797','/api/YinXiangMa_Local/securimage.php','51093','1437354961','f8310d8d3390d26ef1795d09c273d0cd');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('798','/api/YinXiangMa_Local/words/words.txt','123656','1437354961','77f4be347b16ae94888e28f9091a25b0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('799','/api/YinXiangMa_Local/securimage_show.php','1656','1437354961','1107d2e2b0e16869af4d2cfb04421398');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('800','/api/YinXiangMa_Local/securimage_valid.php','588','1437354961','aa3ba262ef332a956087b85aa741f250');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('801','/api/Lib/config.php','1078','1437354951','ba61d3134ae8983268dd39ad00cabe1c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('802','/api/Lib/Inter/Error.php','15742','1437354951','07db4847c01c9e19c494b6e239081e7e');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('803','/api/Lib/Controller/Base.php','3022','1437354951','312b393ca7823a199fe148faf1a0ed2d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('804','/api/Lib/Controller/AvatarFlashUpload.php','12525','1434590494','caa8398870e1fe2329c257367b3d8e9b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('805','/api/Lib/common.php','7340','1437354951','0a6b6b8ad4bb2f9f9b8aa360acec6c47');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('806','/api/qq/user/get_user_info.php','861','1437354951','ec966cdd81ba5174ced0afa7db890e6d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('807','/api/qq/oauth/qq_login.php','537','1437354950','a22abc97e037afc2472cdfda86c1910f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('808','/api/qq/oauth/qq_callback.php','2325','1437354950','32f2923ee4246227091bf10c5cb8f075');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('809','/api/qq/share/add_share.php','741','1437354950','cc9c826753923cfbab902ce32f101a26');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('810','/api/qq/share/add_share.html','910','1437354950','dc8deaf57b1ab144d80803aada146fad');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('811','/api/qq/comm/session.php','5545','1437354951','c48d591f8a442851ba353f544ea61ab0');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('812','/api/qq/comm/config.php','1473','1437354951','e5399fbc232c46ec830db3d7822d442d');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('813','/api/qq/comm/utils.php','893','1437354951','df934590874dcbe3d0a94fdf674fd052');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('814','/api/qq/photo/add_album.html','639','1437354951','8472a9d52efa9c6c81ce0005b3fd9e3b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('815','/api/qq/photo/list_album.php','568','1437354951','e9d1939e9bb4bd339d85f32a48c5c848');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('816','/api/qq/photo/upload_pic.php','1032','1437354951','88e2b4d565d904072739f16f40c63726');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('817','/api/qq/photo/add_album.php','629','1437354951','ba452f0c89427007a5ac6312a1c706e1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('818','/api/qq/photo/upload_pic.html','772','1437354951','725d211be4b3ff830c36f2c89be428a1');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('819','/api/qq/weibo/add_weibo.html','808','1437354951','3ffe1320a2f251398ca9510fc1968e80');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('820','/api/qq/weibo/add_weibo.php','600','1437354951','74ebe578dc7ee5b3abfb027de0ff904b');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('821','/api/qq/callback.php','194','1520475265','fe5a0224cfc75d1ebd36f1bc2437ad50');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('822','/api/qq/topic/add_topic.php','778','1437354951','34d7c4dea600d995282ba523d27b94af');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('823','/api/qq/topic/add_topic.html','1015','1437354951','1aefdf0939c68cb4ef8d744ca23b8c16');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('824','/api/qq/blog/add_blog.php','564','1437354950','6a72a3b4d022fba82420e8021b20efd6');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('825','/api/qq/blog/add_blog.html','589','1437354950','37c98a0456cdb34c9d5c93b7c486d909');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('826','/api/YinXiangMaLib.php','2579','1437354950','3ba5125872a7100d29bc2bce2825787f');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('827','/api/qqweibo/Services/JSON.php','40613','1437354952','345ae1faf0fb2351ad31406bfbe50ef5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('828','/api/qqweibo/OpenSDK/Tencent/Weibo.php','7651','1437354952','e1dc5f06cbfc5e91e55f4f74496c8e97');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('829','/api/qqweibo/OpenSDK/OAuth/sns_sig_check.php','1134','1437354952','268bf88b99c341121010f2c653a787a2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('830','/api/qqweibo/OpenSDK/OAuth/Client.php','7992','1437354952','36c711a57e286fd6ee8044cb66489d6c');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('831','/api/qqweibo/OpenSDK/OAuth/Interface.php','2590','1437354952','e7a0cd991dd96acb29b26081f795ea1a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('832','/api/qqweibo/OpenSDK/Util.php','2588','1437354952','32c4fb455c4b17c57290ffc1a8014045');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('833','/api/qrcode.php','713','1438306550','0786bf7e921ea8ef44b2664ef27a24c9');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('834','/api/kaixin/kxClient.php','11993','1437354951','0c3ecebc0e6b4b759a258ef7ed09b8da');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('835','/api/kaixin/kxHttpClient.php','6964','1437354951','89ba0dcb0f4369fd9a7fa57be0b9c4a2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('836','/api/uc.php','3935','1434590494','d1fe8c1952aed68f0afa680a29d2ccf5');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('837','/api/index.html','47','1437354952','7e1dac41875d67f3f29b9ffd8c492cb2');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('838','/api/sina/saetv2.ex.class.php','109611','1437354952','3a7ae22c619b02ebedd9f2214fe2172a');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('839','/api/sina/weibooauth.php','55775','1437354952','0d8c8ae320fac84d05e6a4ca8803d520');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('840','/index.php','5832','1458549846','2b960c2e01b7af4ebf681b3a70eacec8');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('841','/robots.txt','497','1438306549','220e153bbd2ba2fb4a9aedc8b0881e14');
INSERT INTO `duoduo_file` (`id`,`path`,`size`,`time`,`md5`) VALUES('842','/favicon.ico','1150','1437354835','1e1271e5f9faeda5d375528b376f5561');
