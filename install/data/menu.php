<?php
return "INSERT INTO `".$BIAOTOU."menu` (`id`, `parent_id`, `node`, `mod`, `act`, `listorder`, `sort`, `title`, `url`, `hide`, `sys`) VALUES
(1, 0, 'base', '', '', 11092, 0, '网站设置', '', 0, 1),
(2, 1, 'base', 'webset', 'center', 0, 100, '后台中心', '', 1, 1),
(3, 1, 'base', 'webset', 'set', 0, 999999, '基本设置', '', 0, 1),
(5, 1, 'base', 'ad', 'addedi', 0, 0, '广告添加修改', '', 1, 1),
(6, 214, 'tuiguang', 'ad', 'list', 0, 999999, '广告管理', '', 0, 1),
(7, 0, 'fun', '', '', 10113, 0, '功能模块', '', 1, 1),
(8, 7, 'fun', 'fun', 'upload', 0, 0, '图片上传', '', 1, 1),
(9, 1, 'base', 'ad', 'del', 0, 0, '广告删除', '', 1, 1),
(10, 214, 'tuiguang', 'slides', 'list', 0, 999999, '幻灯片管理', '', 0, 1),
(11, 214, 'tuiguang', 'slides', 'addedi', 0, 0, '幻灯片添加修改', '', 1, 1),
(12, 214, 'tuiguang', 'slides', 'del', 0, 0, '幻灯片删除', '', 1, 1),
(17, 213, 'tradelist', 'tradelist', 'list', 0, 9, '淘宝订单', '', 0, 1),
(18, 213, 'tradelist', 'tradelist', 'del', 0, 0, '删除订单', '', 1, 1),
(19, 213, 'tradelist', 'tradelist', 'report', 0, 0, '获取订单', '', 1, 1),
(20, 213, 'tradelist', 'tradelist', 'addedi', 0, 0, '查看订单', '', 1, 1),
(21, 1, 'base', 'tradelist', 'set', 0, 94, '联盟设置', '', 0, 1),
(347, 1, 'base', 'domain', 'del', 0, 0, '域名删除', '', 1, 1),
(341, 333, 'mobile', 'mobile', 'wap_set', 0, 0, 'wap设置', '', 0, 1),
(26, 56, 'user', 'msg', 'list', 0, 4, '会员咨询', '', 0, 1),
(27, 214, 'tuiguang', 'link', 'list', 0, 999999, '友情链接', '', 0, 1),
(28, 56, 'user', 'msg', 'addedi', 0, 0, '发送站内信', '', 1, 1),
(29, 214, 'tuiguang', 'link', 'addedi', 0, 0, '友情链接添加修改', '', 1, 1),
(30, 1, 'base', 'nav', 'list', 0, 96, '导航设置', '', 0, 1),
(31, 1, 'base', 'nav', 'addedi', 0, 0, '导航添加修改', '', 1, 1),
(32, 1, 'base', 'service', 'list', 0, 86, '客服设置', '', 0, 1),
(33, 1, 'base', 'service', 'addedi', 0, 0, '客服添加修改', '', 1, 1),
(34, 1, 'base', 'smtp', 'set', 0, 80, '邮件服务器管理', '', 1, 1),
(35, 0, 'mall', '', '', 11096, 0, '商家管理', '', 0, 1),
(36, 1, 'base', 'mall', 'set', 0, 92, '电商联盟设置', '', 1, 1),
(37, 35, 'mall', 'mall', 'list', 0, 999999, '商家商城', '', 0, 1),
(38, 35, 'mall', 'mall', 'addedi', 0, 0, '商城添加修改', '', 1, 1),
(41, 1, 'base', 'msgset', 'list', 0, 96, '短信邮件设置', '', 0, 1),
(42, 1, 'base', 'msgset', 'addedi', 0, 0, '站内信修改', '', 1, 1),
(43, 56, 'user', 'mall_comment', 'list', 0, 6, '商城评论', '', 0, 1),
(44, 56, 'user', 'mall_comment', 'addedi', 0, 0, '查看商城评论', '', 1, 1),
(45, 35, 'mall', 'mall_type', 'list', 0, 0, '商城类别管理', '', 1, 1),
(46, 35, 'mall', 'mall_type', 'addedi', 0, 0, '商城类别添加修改', '', 1, 1),
(351, 58, 'database', 'kuaijie', 'del', 0, 0, '快捷菜单添加修改', '', 1, 1),
(53, 212, 'goods', 'tuan_goods', 'update', 0, 0, '内容更新', '', 1, 1),
(352, 58, 'database', 'kuaijie', 'addedi', 0, 0, '快捷菜单删除', '', 1, 1),
(353, 212, 'goods', 'collect', 'yun_cid', 0, 0, '采集', '', 1, 1),
(56, 0, 'user', '', '', 11098, 0, '会员管理', '', 0, 1),
(57, 56, 'user', 'user', 'list', 0, 8, '会员列表', '', 0, 1),
(58, 0, 'database', '', '', 11090, 0, '系统维护', '', 0, 1),
(59, 58, 'database', 'data', 'list', 0, 97, '数据库管理', '', 0, 1),
(60, 56, 'user', 'user', 'addedi', 0, 0, '会员修改', '', 1, 1),
(61, 56, 'user', 'tixian', 'list', 0, 9, '提现列表', '', 0, 1),
(62, 56, 'user', 'tixian', 'addedi', 0, 0, '处理提现', '', 1, 1),
(63, 56, 'user', 'mingxi', 'list', 0, 3, '会员明细', '', 0, 1),
(64, 56, 'user', 'user', 'del', 0, 0, '会员删除', '', 1, 1),
(66, 212, 'goods', 'huan_goods', 'list', 0, 60, '兑换商品', '', 0, 1),
(67, 212, 'goods', 'huan_goods', 'addedi', 0, 0, '兑换添加修改', '', 1, 1),
(68, 213, 'tradelist', 'duihuan', 'list', 0, 3, '兑换订单', '', 0, 1),
(69, 213, 'tradelist', 'duihuan', 'addedi', 0, 0, '审核兑换', '', 1, 1),
(70, 58, 'database', 'data', 'backup', 0, 0, '还原数据库', '', 1, 1),
(71, 58, 'database', 'data', 'check', 0, 0, '数据库检测', '', 1, 1),
(72, 0, 'plug', '', '', 11093, 0, '百宝箱', '', 0, 1),
(73, 1, 'base', 'ucenter', 'set', 0, 84, '论坛整合', '', 0, 1),
(74, 56, 'user', 'ucenter', 'import', 0, 0, '会员导入UC', '', 1, 1),
(75, 1, 'base', 'user', 'set', 0, 89, '会员设置', '', 0, 1),
(76, 0, 'article', '', '', 11095, 0, '文章管理', '', 0, 1),
(77, 76, 'article', 'article_type', 'list', 0, 999999, '文章分类', '', 0, 1),
(78, 76, 'article', 'article_type', 'addedi', 0, 0, '文章类别添加修改', '', 1, 1),
(79, 76, 'article', 'article', 'list', 0, 999999, '文章列表', '', 0, 1),
(80, 76, 'article', 'article', 'addedi', 0, 0, '文章添加修改', '', 1, 1),
(81, 1, 'base', 'api', 'list', 0, 85, '账号通设置', '', 1, 1),
(82, 1, 'base', 'api', 'addedi', 0, 0, '第三方登录修改', '', 1, 1),
(83, 58, 'database', 'scan', 'check', 0, 88, '木马查杀', '', 0, 1),
(84, 72, 'plug', 'scan', 'do', 0, 0, '处理木马文件', '', 1, 1),
(86, 212, 'goods', 'baobei', 'list', 0, 40, '晒单分享', '', 0, 1),
(87, 212, 'goods', 'baobei', 'addedi', 0, 0, '宝贝添加修改', '', 1, 1),
(88, 1, 'base', 'baobei', 'set', 0, 90, '晒单设置', '', 0, 1),
(89, 56, 'user', 'baobei_comment', 'list', 0, 5, '晒单评论', '', 0, 1),
(90, 56, 'user', 'baobei_comment', 'addedi', 0, 0, '查看评论', '', 1, 1),
(91, 212, 'goods', 'baobei', 'del', 0, 0, '宝贝删除', '', 1, 1),
(92, 212, 'goods', 'baobei_blacklist', 'del', 0, 0, '宝贝黑名单删除', '', 1, 1),
(93, 212, 'goods', 'baobei_blacklist', 'list', 0, 0, '宝贝黑名单', '', 1, 1),
(94, 58, 'database', 'noword', 'list', 0, 95, '敏感词管理', '', 1, 1),
(95, 58, 'database', 'noword', 'addedi', 0, 0, '敏感词添加修改', '', 1, 1),
(97, 58, 'database', 'spider', 'set', 0, 0, '蜘蛛限制', '', 0, 1),
(98, 1, 'base', 'seo', 'set', 0, 87, '加密设置', '', 1, 1),
(99, 1, 'base', 'seo', 'list', 0, 87, 'seo管理', '', 0, 1),
(100, 1, 'base', 'seo', 'addedi', 0, 0, 'seo添加修改', '', 1, 1),
(101, 1, 'base', 'seo', 'del', 0, 0, 'seo删除', '', 1, 1),
(102, 0, 'admin', '', '', 11090, 0, '管理员', '', 0, 1),
(103, 102, 'admin', 'role', 'list', 0, 999999, '管理员组', '', 0, 1),
(104, 102, 'admin', 'role', 'addedi', 0, 0, '管理员组添加修改', '', 1, 1),
(105, 102, 'admin', 'role', 'del', 0, 0, '管理员组删除', '', 1, 1),
(106, 102, 'admin', 'duoduo2010', 'list', 0, 999999, '管理员列表', '', 0, 1),
(107, 102, 'admin', 'duoduo2010', 'addedi', 0, 0, '管理员添加修改', '', 1, 1),
(108, 102, 'admin', 'duoduo2010', 'del', 0, 0, '管理员删除', '', 1, 1),
(109, 102, 'admin', 'menu', 'list', 0, 97, '管理菜单', '', 0, 1),
(110, 102, 'admin', 'menu', 'addedi', 0, 0, '菜单添加修改', '', 1, 1),
(113, 58, 'database', 'adminlog', 'list', 0, 91, '系统日志', '', 0, 1),
(114, 102, 'admin', 'adminlog', 'del', 0, 0, '日志删除', '', 1, 1),
(115, 58, 'database', 'webserver', 'info', 0, 92, '时间校对', '', 0, 1),
(116, 58, 'database', 'webserver', 'set', 0, 93, '环境检测', '', 0, 1),
(118, 214, 'tuiguang', 'link', 'del', 0, 0, '友情链接删除', '', 1, 1),
(119, 1, 'base', 'nav', 'del', 0, 0, '导航删除', '', 1, 1),
(120, 1, 'base', 'service', 'del', 0, 0, '客服删除', '', 1, 1),
(121, 58, 'database', 'noword', 'del', 0, 0, '敏感词删除', '', 1, 1),
(339, 333, 'mobile', 'mobile', 'wap_templete', 0, 0, 'wap模板设置', '', 0, 1),
(123, 35, 'mall', 'mall', 'del', 0, 0, '商城删除', '', 1, 1),
(125, 56, 'user', 'mall_comment', 'del', 0, 0, '商城评论删除', '', 1, 1),
(126, 35, 'mall', 'mall_type', 'del', 0, 0, '商城类别删除', '', 1, 1),
(129, 56, 'user', 'tixian', 'del', 0, 0, '提现删除', '', 1, 1),
(130, 56, 'user', 'mingxi', 'del', 0, 0, '明细删除', '', 1, 1),
(131, 1, 'base', 'api', 'del', 0, 0, '第三方api删除', '', 1, 1),
(132, 212, 'goods', 'huan_goods', 'del', 0, 0, '兑换商品删除', '', 1, 1),
(133, 213, 'tradelist', 'duihuan', 'del', 0, 0, '兑换申请删除', '', 1, 1),
(134, 76, 'article', 'article_type', 'del', 0, 0, '文章栏目删除', '', 1, 1),
(135, 76, 'article', 'article', 'del', 0, 0, '文章删除', '', 1, 1),
(136, 56, 'user', 'baobei_comment', 'del', 0, 0, '宝贝评论删除', '', 1, 1),
(137, 7, 'fun', 'fun', 'cache', 0, 0, '更新全站缓存', '', 1, 1),
(321, 213, 'tradelist', 'tradelist', 'list_temp', 0, 0, '淘宝临时订单', '', 1, 1),
(142, 213, 'tradelist', 'mall_order', 'list', 0, 6, '商城订单', '', 0, 1),
(143, 213, 'tradelist', 'mall_order', 'addedi', 0, 0, '商城订单查看', '', 1, 1),
(144, 213, 'tradelist', 'mall_order', 'del', 0, 0, '商城订单删除', '', 1, 1),
(145, 35, 'mall', 'mall_order', 'get', 0, 0, '获取商城订单', '', 1, 1),
(148, 56, 'user', 'phpwind', 'set', 0, 0, 'phpwind整合', '', 1, 1),
(151, 56, 'user', 'phpwind', 'import', 0, 0, 'phpwind会员导入', '', 1, 1),
(150, 102, 'admin', 'menu', 'del', 0, 0, '删除后台菜单', '', 1, 1),
(381, 214, 'tuiguang', 'user_temp', 'list', 0, 0, '临时会员数据', NULL, 1, 1),
(328, 212, 'goods', 'bankuai', 'del', 0, 0, '版块删除', '', 1, 1),
(349, 212, 'goods', 'goods', 'paixu', 0, 0, '商品', '', 1, 1),
(155, 213, 'tradelist', 'tradelist', 'import', 0, 0, '导入淘宝订单', '', 1, 1),
(156, 72, 'plug', 'bshare', 'set', 0, 0, 'bshare分享', '', 1, 1),
(157, 72, 'plug', 'bshare', 'code', 0, 0, 'bshare代码调用', '', 1, 1),
(158, 72, 'plug', 'bshare', 'count', 0, 0, 'bshare统计', '', 1, 1),
(159, 212, 'goods', 'huan_goods_type', 'list', 0, 0, '兑换类别管理', '', 1, 1),
(160, 212, 'goods', 'huan_goods_type', 'addedi', 0, 0, '兑换类别增加修改', '', 1, 1),
(161, 212, 'goods', 'huan_goods_type', 'del', 0, 0, '兑换类别删除', '', 1, 1),
(164, 214, 'tuiguang', 'seo', 'arr', 0, 0, '自定义网址', '', 1, 1),
(166, 35, 'mall', 'yiqifaapi', 'set', 0, 0, '亿起发开放平台', '', 1, 1),
(168, 1, 'base', 'tao_index', 'tag', 0, 0, '淘宝首页tag设置', '', 1, 1),
(169, 58, 'database', 'upgrade', 'index', 0, 95, '程序升级', '', 0, 1),
(170, 58, 'database', 'scan', 'file', 0, 89, '文件校对', '', 0, 1),
(173, 1, 'base', 'template', 'set', 0, 999999, '模板设置', '', 0, 1),
(175, 56, 'user', 'msg', 'del', 0, 0, '站内信删除', '', 1, 1),
(176, 76, 'article', 'article', 'removecid', 0, 0, '文章移动栏目', '', 1, 1),
(178, 1, 'base', 'paipai_order', 'set', 0, 93, '拍拍易推广设置', '', 1, 1),
(179, 213, 'tradelist', 'paipai_order', 'list', 0, 4, '拍拍订单', '', 0, 1),
(180, 213, 'tradelist', 'paipai_order', 'report', 0, 0, '获取订单', '', 1, 1),
(181, 213, 'tradelist', 'paipai_order', 'addedi', 0, 0, '退款确认', '', 1, 1),
(182, 1, 'base', 'paipai_index', 'tag', 0, 0, '拍拍首页tag设置', '', 1, 1),
(183, 213, 'tradelist', 'paipai_order', 'del', 0, 0, '拍拍订单删除', '', 1, 1),
(186, 35, 'mall', 'wujiumiao', 'set', 0, 0, '59秒开放平台', '', 1, 1),
(187, 72, 'plug', 'plugin', 'bbx', 0, 999999, '产品列表', '', 0, 1),
(189, 1, 'base', 'tixian', 'set', 0, 88, '提现设置', '', 0, 1),
(190, 1, 'base', 'tixian', 'bank', 0, 0, '提现银行管理', '', 1, 1),
(191, 56, 'user', 'user', 'award', 0, 0, '金额积分修改', '', 1, 1),
(192, 1, 'base', 'sms', 'set', 0, 0, '短信设置', '', 1, 1),
(197, 72, 'plug', 'plugin', 'list', 0, 999999, '订单列表', '', 0, 1),
(198, 72, 'plug', 'plugin', 'addedi', 0, 0, '百宝箱订单添加修改', '', 1, 1),
(199, 72, 'plug', 'plugin', 'del', 0, 0, '百宝箱订单删除', '', 1, 1),
(201, 72, 'plug', 'plugin', 'down', 0, 0, '应用下载', '', 1, 1),
(202, 72, 'plug', 'plugin', 'loading', 0, 0, '应用加载', '', 1, 1),
(203, 72, 'plug', 'plugin', 'admin', 0, 0, '应用设置', '', 1, 1),
(204, 72, 'plug', 'plugin', 'update', 0, 0, '应用更新', '', 1, 1),
(205, 212, 'goods', 'goods_type', 'list', 0, 10, '商品分类', '', 0, 1),
(206, 212, 'goods', 'goods_type', 'addedi', 0, 0, '添加修改自定义分类', '', 1, 1),
(207, 212, 'goods', 'goods_type', 'del', 0, 0, '删除分类', '', 1, 1),
(208, 1, 'base', 'tradelist', 'taodianjin', 0, 80, '淘点金设置', '', 1, 1),
(209, 72, 'plug', 'plugin', 'file', 0, 0, '应用文件', '', 1, 1),
(210, 56, 'user', 'buy_log', 'list', 0, 0, '淘宝浏览历史', '', 1, 1),
(211, 72, 'plug', 'plugin', 'alimama', 0, 0, '淘宝联盟设置', '', 1, 1),
(212, 0, 'goods', '', '', 11100, 0, '商品管理', '', 0, 1),
(213, 0, 'tradelist', '', '', 11099, 0, '订单管理', '', 0, 1),
(214, 0, 'tuiguang', '', '', 11097, 0, '运营推广', '', 0, 1),
(215, 0, 'baobiao', '', '', 11094, 0, '统计报表', '', 0, 1),
(333, 0, 'mobile', '', '', 11091, 0, '无线设置', '', 0, 1),
(233, 214, 'tuiguang', 'tuiguang', 'share', 0, 88, '会员激励', '', 1, 1),
(220, 213, 'tradelist', 'task', 'list', 0, 7, '任务订单', '', 0, 1),
(221, 1, 'base', 'sitemap', 'list', 0, 97, '网站地图', '', 1, 1),
(222, 214, 'tuiguang', 'tuiguang', 'zhuce', 0, 94, '注册营销', '', 1, 1),
(223, 214, 'tuiguang', 'tuiguang', 'sign', 0, 92, '签到营销', '', 1, 1),
(224, 214, 'tuiguang', 'tuiguang', 'zhuanti', 0, 91, '专题制作', '', 1, 1),
(225, 214, 'tuiguang', 'tuiguang', 'tuiguang', 0, 90, '邀请好友', '', 0, 1),
(226, 215, 'baobiao', 'baobiao', 'list', 0, 999999, '收入报表', '', 0, 1),
(227, 215, 'baobiao', 'baobiao', 'rank', 0, 999999, '返利排名', '', 1, 1),
(228, 215, 'baobiao', 'baobiao', 'tuiguang', 0, 96, '推广排名', '', 1, 1),
(229, 215, 'baobiao', 'baobiao', 'yunying', 0, 95, '运营报表', '', 1, 1),
(230, 215, 'baobiao', 'baobiao', 'share', 0, 94, '分享排名', '', 1, 1),
(288, 214, 'tuiguang', 'tuiguang', 'jiang', 0, 0, '会员奖励', '', 1, 1),
(234, 58, 'database', 'database', 'overdue', 0, 999999, '过期/下架检测', '', 0, 1),
(345, 212, 'goods', 'collect', 'del', 0, 0, '采集删除', '', 1, 1),
(236, 58, 'database', 'database', 'cache', 0, 96, '缓存管理', '', 0, 1),
(237, 58, 'database', 'database', 'plugin', 0, 94, '插件升级', '', 0, 1),
(238, 58, 'database', 'database', 'recycle', 0, 90, '回收站', '', 0, 1),
(325, 58, 'database', 'cron', 'addedi', 0, 0, '计划任务添加/修改', '', 1, 1),
(322, 212, 'goods', 'goods_attribute', 'list', 0, 0, '属性表', '', 1, 1),
(323, 212, 'goods', 'goods_attribute', 'addedi', 0, 0, '商品属性增加', '', 1, 1),
(324, 58, 'database', 'cron', 'list', 0, 0, '计划任务管理', '', 0, 1),
(244, 212, 'goods', 'ddzhidemai', 'list', 0, 100, '值得买商品', '', 1, 1),
(245, 212, 'goods', 'goods', 'lanmu', 0, 1, '栏目设置', '', 1, 1),
(326, 58, 'database', 'cron', 'del', 0, 0, '计划任务删除', '', 1, 1),
(249, 1, 'base', 'task', 'set_2', 0, 91, '任务模块二', '', 1, 1),
(250, 1, 'base', 'task', 'set_1', 0, 91, '任务网赚设置', '', 1, 1),
(253, 212, 'goods', 'ddzhidemai', 'del', 0, 0, '值得买删除', '', 1, 1),
(254, 212, 'goods', 'ddzhidemai', 'addedi', 0, 0, '值得买修改', '', 1, 1),
(255, 212, 'goods', 'goods', 'addedi', 0, 0, '添加/修改', '', 1, 1),
(256, 212, 'goods', 'goods', 'list', 0, 70, '网站商品', '', 0, 1),
(257, 1, 'base', 'gametask', 'iframe', 0, 0, '查看信息', '', 1, 1),
(258, 1, 'base', 'offer', 'iframe', 0, 0, '查看信息', '', 1, 1),
(259, 1, 'base', 'ddzhidemai', 'set', 0, 0, '值得买设置', '', 1, 1),
(343, 1, 'base', 'template', 'admin_set', 0, 0, '模板设置', '', 1, 1),
(263, 1, 'base', 'task', 'set', 0, 0, '任务网赚设置', '', 0, 1),
(264, 1, 'base', 'task', 'report', 0, 0, '任务返利获取订单', '', 1, 1),
(265, 1, 'base', 'task', 'tixian', 0, 0, '任务返利结算列表', '', 1, 1),
(273, 1, 'base', 'baobiao', 'addedi', 0, 0, '报表更新', '', 1, 1),
(275, 212, 'goods', 'goods', 'del', 0, 0, '网站商品删除', '', 1, 1),
(371, 1, 'base', 'mall', 'weiyi_set', 0, 0, '唯一联盟设置', NULL, 1, 1),
(370, 1, 'base', 'mall', 'duomai_set', 0, 0, '多麦联盟设置', NULL, 1, 1),
(357, 56, 'user', 'goods_comment', 'del', 0, 0, '商品评论删除', '', 1, 1),
(283, 58, 'database', 'database', 'debug', 0, 0, '技术调试', '', 0, 1),
(282, 58, 'database', 'database', 'del', 0, 0, '删除过期商品', '', 1, 1),
(285, 214, 'tuiguang', 'tuiguang', 'jiangli', 0, 999999, '会员奖励', '', 0, 1),
(350, 58, 'database', 'kuaijie', 'list', 0, 0, '快捷菜单列表', '', 0, 1),
(287, 215, 'baobiao', 'baobiao', 'paiming', 0, 0, '会员排名', '', 0, 1),
(289, 56, 'user', 'tuiguang', 'list', 0, 2, '晒单奖励', '', 0, 1),
(290, 215, 'baobiao', 'baobiao', 'tixian', 0, 0, '结算报表', '', 0, 1),
(291, 7, 'fun', 'type', 'list', 0, 0, '分类管理', '', 1, 1),
(292, 215, 'baobiao', 'baobiao', 'rank_jine', 0, 0, '金额排名', '', 1, 1),
(293, 215, 'baobiao', 'baobiao', 'share_jifen', 0, 0, '晒单积分排名', '', 1, 1),
(295, 213, 'tradelist', 'task', 'del', 0, 0, '任务订单删除', '', 1, 1),
(298, 58, 'database', 'database', 'jiance', 0, 0, '违规词检测', '', 0, 1),
(299, 214, 'tuiguang', 'tuiguang', 'search', 0, 0, '搜索推广', '', 0, 1),
(300, 1, 'base', 'shangjia', 'set', 0, 0, '商家报名设置', '', 0, 1),
(302, 212, 'goods', 'hezuo', 'addedi', 0, 0, '卖家报名查看', NULL, 1, 1),
(303, 212, 'goods', 'hezuo', 'del', 0, 0, '卖家报名删除', NULL, 1, 1),
(304, 212, 'goods', 'bankuai', 'list', 0, 30, '板块分类', '', 0, 1),
(305, 212, 'goods', 'ddgoods_type', 'list', 0, 0, '商品分类', '', 1, 1),
(306, 212, 'goods', 'bankuai', 'addedi', 0, 0, '板块添加修改', '', 1, 1),
(319, 1, 'base', 'webset', 'fanli_set', 0, 0, '返利设置', '', 0, 1),
(307, 1, 'base', 'domain', 'list', 0, 0, '域名设置', '', 0, 1),
(308, 1, 'base', 'domain', 'addedi', 0, 0, '添加域名', '', 1, 1),
(309, 212, 'goods', 'ddgoods_type', 'addedi', 0, 0, '商品分类', '', 1, 1),
(310, 212, 'goods', 'ddgoods_type', 'del', 0, 0, '商品分类删除', '', 1, 1),
(311, 212, 'goods', 'bankuai', 'caiji', 0, 0, '版块采集', '', 1, 1),
(312, 212, 'goods', 'ddgoods_attribute', 'list', 0, 0, '商品属性', '', 1, 1),
(313, 1, 'base', 'ddgoods_attribute', 'addedi', 0, 0, '商品属性添加/需改', '', 1, 1),
(314, 212, 'goods', 'goods', 'time_set', 0, 0, '默认时间设置', '', 1, 1),
(315, 212, 'goods', 'bankuai', 'yun', 0, 0, '云规则', '', 1, 1),
(316, 212, 'goods', 'collect', 'list', 0, 20, '采集管理', '', 0, 1),
(317, 212, 'goods', 'collect', 'yun', 0, 0, '云规则', '', 1, 1),
(318, 212, 'goods', 'collect', 'addedi', 0, 0, '规则添加/修改', '', 1, 1),
(320, 102, 'admin', 'menu', 's_list', 0, 0, '后台菜单搜索', '', 1, 1),
(377, 35, 'mall', 'hezuo', 'list', 0, 0, '商家报名列表', '', 0, 1),
(346, 212, 'goods', 'collect', 'caiji', 0, 0, '规则采集', '', 1, 1),
(348, 1, 'base', 'bijia', 'set', 0, 0, '全网搜索设置', '', 1, 1),
(354, 56, 'user', 'goods_comment', 'list', 0, 7, '商品评论', '', 0, 1),
(355, 56, 'user', 'goods_comment', 'addedi', 0, 0, '商品评论编辑', '', 1, 1),
(372, 1, 'base', 'mall', 'wujiumiao_set', 0, 0, '59秒联盟设置', NULL, 1, 1),
(373, 1, 'base', 'mall', 'yiqifa_set', 0, 0, '亿起发联盟设置', NULL, 1, 1),
(374, 1, 'base', 'mall', 'linktech_set', 0, 0, '领科特联盟设置', NULL, 1, 1),
(375, 1, 'base', 'mall', 'chanet_set', 0, 0, '成果联盟设置', NULL, 1, 1),
(376, 1, 'base', 'mall', 'yqh_set', 0, 0, '一起惠联盟设置', NULL, 1, 1),
(378, 212, 'goods', 'goods_attribute', 'del', 0, 0, '商品属性删除', '', 1, 1),
(379, 1, 'base', 'webset', 'upload_set', 0, 0, '上传设置', '', 0, 1),
(380, 333, 'mobile', 'phone_app', 'phone', 0, 0, '手机客户端设置', '', 0, 1),
(382, 214, 'tuiguang', 'user_temp', 'del', 0, 0, '临时会员数据删除', NULL, 1, 1),
(383, 214, 'tuiguang', 'user_temp', 'qunfa_set', 0, 0, '群发设置', NULL, 1, 1),
(384, 214, 'tuiguang', 'user_temp', 'qunfa', 0, 0, '会员群发', NULL, 1, 1),
(385, 214, 'tuiguang', 'user_temp', 'qunfa_tag', 0, 0, '消息群发', NULL, 0, 1),
(386, 214, 'tuiguang', 'user_temp', 'qunfa_jilu', 0, 0, '已发记录', NULL, 1, 1),
(387, 1, 'base', 'tradelist', 'tbname', 0, 0, '设置淘宝账号', '', 1, 1),
(388, 212, 'goods', 'goods', 's_list', 0, 0, '商品排序', '', 1, 0),
(389, 1, 'base', 'taopid', 'addedi', 0, 0, '修改pid', NULL, 1, 1),
(390, 1, 'base', 'taopid', 'list', 0, 0, '淘宝联盟PID', NULL, 1, 1),
(391, 1, 'base', 'taopid', 'del', 0, 0, '删除pid', NULL, 1, 1),
(431, 213, 'tradelist', 'tradelist', 'huanren', 0, 0, '淘宝订单更换会员', '', 1, 1),
(432, 213, 'tradelist', 'tradelist', 'dingwei', 0, 0, '查看淘宝订单会员来源', '', 1, 0),
(433, 213, 'tradelist', 'tradelist', 'cha', 0, 0, '淘宝订单检查', NULL, 1, 1);";
?>