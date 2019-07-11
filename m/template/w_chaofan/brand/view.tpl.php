<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('INDEX')){
	exit('Access Denied');
}
$brand_id=(int)$_GET['brand_id'];
$url='http://cf.fanlicheng.com/app/index.php?mod=brand&act=view&page=1&id='.$brand_id;
$a=dd_get_json($url);
$brand=$a['r']['brand'];
if(empty($brand)){
	jump(-1,'没有这个品牌');
}
$webtitle=$brand['title'].'品牌团';
define('VIEW_PAGE',1);
define('BRADN',1);
$goods_total=1;
$ajax_load_num=$dd_tpl_data['ajax_load_num'];
$bankuai_tpl="cf285";

$css[]=TPLURL."/inc/css/cf_wap.css";
$css[]=TPLURL."/inc/css/cf_u.css";
include(TPLPATH.'/inc/header.tpl.php');?>
<img style="display: block;" src="<?=$brand['l_pic']?>" width="100%" height="auto">
<div class="u_v">
  <!--<div class="u_l">
    <div class="u_logo"> <img title="<?=$row['title']?>" src="<?=$brand['img']?>"> </div>
  </div>-->
  <div class="u_le">
    <p class="u_title">
      <?=$brand['tbnick']?><span class="s_first">返:<?=$brand['fan']?>
      %</span>
    </p>
    <p class="spn">
      <?=$brand['des']?>
    </p>
  </div>
</div>
<?php 
include(TPLPATH.'/goods/data.tpl.php');
include(TPLPATH.'/inc/footer.tpl.php');?>
