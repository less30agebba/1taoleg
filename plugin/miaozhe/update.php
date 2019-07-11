<?php //多多

if(!defined('PLUGIN_UPDATE')){
	exit('Access Denied');
}

if($do=='install'){
	$alias=dd_get_cache('alias');
	$alias['pinpai/index']=array('pinpai','index');
	dd_set_cache('alias',$alias);
	
	$slides=dd_get_cache('slides','array');  //安装幻灯片分类
	$slides[3]='标准版幻灯片742x300';
	$slides[4]='商城版幻灯片900x320';
	dd_set_cache('slides',$slides,'array');

	$alert_word='安装完成';
}
elseif($do=='uninstall'){
	$alias=dd_get_cache('alias');
	unset($alias['super/index']);
	dd_set_cache('alias',$alias);

	$slides=dd_get_cache('slides','array');  //卸载幻灯片分类
	unset($slides['3']);
	unset($slides['4']);
	dd_set_cache('slides',$slides,'array');

	$alert_word='卸载完成';
}
else{
	dd_exit('error do');
}
jump(-1,$alert_word);
?>