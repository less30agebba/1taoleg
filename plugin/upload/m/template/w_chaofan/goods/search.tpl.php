<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
include(DDROOT.'/m/mod/tao/search.act.php');
$parameter=act_wap_search();
extract($parameter);
include(TPLPATH.'/inc/header.tpl.php');?>
<header class="taobao_header">
  <div class="search_box">
    <form  action="" method="get">
      <input type="text" name="keywords" id="search_content" value="<?=$_GET['keywords']?>" placeholder="搜索站内商品">
      <button type="submit" id="btnSearch">搜索拿返利</button>
      <input type="hidden" name="mod" value="<?=MOD?>">
      <input type="hidden" name="act" value="<?=ACT?>">
    </form>
  </div>
  <img src="<?=TPLURL?>/inc/images/process.png" alt="" width="300px"> </header>
<div class="index_menu">
  <ul class="clear">
    <li <?php if(empty($_GET['sort'])&&empty($_GET['code'])){?>class="curr"<?php }?>> <a href="<?=wap_l(MOD,ACT,array('sort'=>0,'keywords'=>$_GET['keywords']))?>" class="index_menu_li_a" id="openCategory"> <span>默认排序</span> </a> </li>
    <li <?php if($_GET['sort']==3){?>class="curr"<?php }?>> <a href="<?=wap_l(MOD,ACT,array('sort'=>3,'keywords'=>$_GET['keywords']))?>"  class="index_menu_li_a" id="openCategory"> <span>最实惠</span> </a> </li>
    <li <?php if($_GET['sort']==1){?>class="curr"<?php }?>> <a href="<?=wap_l(MOD,ACT,array('sort'=>1,'keywords'=>$_GET['keywords']))?>"  class="index_menu_li_a" id="openCategory"> <span>返利最高</span> </a> </li>
    <li <?php if($_GET['sort']==2){?>class="curr"<?php }?>> <a href="<?=wap_l(MOD,ACT,array('sort'=>2,'keywords'=>$_GET['keywords']))?>"  class="index_menu_li_a" id="openCategory"> <span>人气最高</span> </a> </li>
    <li <?php if($_GET['code']=='jd'){?>class="curr"<?php }?> style="border-right:none;"> <a href="<?=wap_l(MOD,ACT,array('sort'=>0,'keywords'=>$_GET['keywords'],'code'=>'jd'))?>"  class="index_menu_li_a" id="openCategory"> <span>京东商品</span> </a> </li>
  </ul>
</div>
<?php
include(TPLPATH.'/goods/data.tpl.php');
include(TPLPATH.'/inc/footer.tpl.php');?>
