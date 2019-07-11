<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
include(DDROOT.'/m/mod/tao/search.act.php');
$parameter=act_wap_search();
extract($parameter);
if($_GET['q']!=''){
wap_jump($jump_arr['url'],$jump_arr['word']);}
$webtitle="商品搜索";
include(TPLPATH.'/inc/header.tpl.php');
?>
<body>
<header class="taobao_header">
        <div class="search_box">
		    <form action="" method="get" name="searchForm" target="_blank" id="searchForm" onSubmit="return s8Tijiao($(this))">
		    <input type="hidden" name="mod" value="tao" /><input type="hidden" name="act" value="search" />
			<input type="text" name="q" id="search_content" value="<?=$webset['search_key']['wap']?>" placeholder="搜索站内商品">
            <button type="submit" id="btnSearch">搜索拿返利</button>
			</form>
        </div>
        <img src="<?=TPLURL.'/inc/images/process.png' ?>" alt="" width="300px">
    </header>

	
	<!--<input class="button" value="" type="submit">-->



<div class="suggest-container" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
	<h3>看看大家在搜什么！</h3>
	<ul class="suggest-hotkey" data-sugg-type="2">
    	<li><a href="<?=wap_l('tao','search',array('q'=>'小西装男'))?>" target="_blank">小西装 男</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'假面骑士drive'))?>" target="_blank">假面骑士drive</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'男腰包'))?>" target="_blank">男腰包</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'英雄联盟皮肤'))?>" target="_blank">英雄联盟皮肤</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'豆豆鞋'))?>" target="_blank">豆豆鞋</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'衬衣女长袖'))?>" target="_blank">衬衣女长袖</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'羽绒服'))?>" target="_blank">羽绒服</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'裤子'))?>" target="_blank">裤子</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'手表'))?>" target="_blank">手表</a></li>
        <li><a href="<?=wap_l('tao','search',array('q'=>'女装'))?>" target="_blank">女装</a></li>
    </ul>
</div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>
