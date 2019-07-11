<?php //多多
return array (
	'admin_nav' => array (  //后台目录
		'index' => array ('title' => '基本设置'),  //键名“index”表示后台插件的do行为，如果应用需要后台设置，必须有index页面
		'url' => array ('title' => '查看教程','url' => 'http://bbs.duoduo123.com/read-1-1-207869.html'),  //如果数组中含有“url”，表示这是一个外部链接
  	),
  	'admin_auto' => array ('index' => 1),  //后台模块数据是否用框架自动处理
	'table' => array (  //数据库结构，键名“shijiu”表示应用安装时自动创建“duoduo_plugin_shijiu”的表，表结构不需要自己写明，只要在本地开发中创建表“duoduo_plugin_shijiu”，把debug模式改为1，可点击后自动生成
        //重复上面的数组可创建多个表
  	),
  	'act_arr' => array (  //应用前台模块，没有特别需求tag可重复应用标识码
		
  	),
  	'install_sql' => '',  //安装sql语句，假设应用需要对现有的表增加字段，便可在这里执行sql，例子中的select只是随便写的
  	'uninstall_sql' => '', //卸载sql语句，与安装sql对应，添加过什么字段必须在这里有对应的删除
  	'need_include' => 0,  //是否需要全局调用文件，文件目录在plugin/shijiu/comm.php
  	'rewrite' => 0,    //是否需要伪静态文件，文件目录在plugin/shijiu/rewrite.php 
  	'debug' => 0,    //调试模式，设置为1应用后台出现“生成配置文件（即set.php）”的按钮，生成后debug会自动置0，调试模式下，系统会自动判断后台代码的a和from表示是否有do和plugin_id，只是友好的提示，开发者自己确定没错可不用理会，本地开发时需要设置为1.
);
?>