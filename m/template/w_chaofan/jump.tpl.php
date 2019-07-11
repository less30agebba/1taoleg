<?php //多多
if (!defined('INDEX')) {
	exit ('Access Denied');
}

if($dduser['id']==0 && $webset['user']['login_tip']==1){
	wap_jump(wap_l('user','login'),'请先登录');
	exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?=$goods['title']?></title>
<style>
html,body{ height:100%}
*{ margin:0; padding:0}
</style>
</head>

<body>
<div>
<iframe style="width:100%; height:100%" src="<?=$url?>" frameborder="0" id="url"></iframe>
</div>
<script>
document.getElementById('url').style.height=document.body.offsetHeight+'px';
</script>
</body>
</html>