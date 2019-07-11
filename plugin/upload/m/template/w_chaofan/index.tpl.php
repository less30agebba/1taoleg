<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$css[]=TPLURL.'/inc/css/swiper.min.css';
$js[]=TPLURL.'/inc/js/swiper.jquery.min.js';
$parameter=act_wap_index();
extract($parameter);
?>
<?php include(TPLPATH.'/public.tpl.php');
$webtitle=$dd_tpl_data['title'].'-超级返利';
include(TPLPATH.'/inc/header.tpl.php');
?>
<?php if(!empty($slides)){?>
<div class="new-ct main">
  <div class="banner scroll-wrapper">
    <div class="swiper-wrapper">
      <?php foreach($slides as $row){?>
     <div class="swiper-slide"> <a href="<?=$row['url']?>" <?php if($row['waibu_url']==1){?> target="_blank"<?php }?>> <img src="<?=$row['img']?>"  > </a> </div>
      <?php }?>
    </div> 
    <div class="swiper-pagination"></div>
  </div>
</div>
<script type="text/javascript">
var swiper = new Swiper('.scroll-wrapper', {
	pagination: '.swiper-pagination',
	autoplay:3000,
	paginationClickable: true,
    loop: true
});
</script>
<style>
.clear1 {
  clear: both;
}
.clear1 {
  zoom: 1;
}
.clear1:after {
  content: '\20';
  display: block;
  clear: both;
  height: 0;
}
</style>
<?php }?>
<section class="taobao_nav">
<nav> 
	<a href="<?=wap_l('goods','index',array('cid'=>0))?>"> <span class="i_quanbu"><i class="icon iconfont">&#xe68c;</i></span> 全部 </a>
	<a href="<?=wap_l('goods','index',array('cid'=>10001))?>"> <span class="i_meizhuang"><i class="icon iconfont">&#xe65b;</i></span> 服饰 </a>
	<a href="<?=wap_l('goods','index',array('cid'=>10002))?>"> <span class="i_xiebao"><i class="icon iconfont">&#xe7db;</i></span> 鞋包 </a>
	<a href="<?=wap_l('goods','index',array('cid'=>10003))?>"> <span class="i_meishi"><i class="icon iconfont">&#xe67b;</i></span> 美妆 </a> 
	<a href="<?=wap_l('goods','index',array('cid'=>10005))?>"> <span class="i_jiaju"><i class="icon iconfont">&#xe682;</i></span> 母婴 </a> 
	<a href="<?=wap_l('goods','index',array('cid'=>10006))?>"> <span class="i_shuma"><i class="icon iconfont">&#xe678;</i></span> 家居 </a>
	<a href="<?=wap_l('goods','index',array('cid'=>10004))?>"> <span class="i_muying"><i class="icon iconfont">&#xe675;</i></span> 美食 </a> 
	<a href="<?=wap_l('goods','index',array('cid'=>10007))?>"> <span class="i_fushi"><i class="icon iconfont">&#xe654;</i></span> 数码 </a> 
	<a href="<?=wap_l('goods','index',array('cid'=>10008))?>"> <span class="i_qita"><i class="icon iconfont">&#xe7d5;</i></span> 其它 </a>
	<a href="<?=wap_l('goods','index',array('do'=>'yugao'))?>"> <span class="i_jingdong"><i class="icon iconfont">&#xe62a;</i></span> 预告 </a> 
		
</nav>
</section>
<!--<div style="border-bottom:1px solid #e9e9e9;">
	<a style="width:43%; float:left;border-right:1px solid #e9e9e9;"  href="<?=wap_l('1111','hongbao')?>"><img src="http://cfimg.b0.upaiyun.com/upload/2015/1027/16222575832.png" width="100%" /></a>
    <a style="width:56.5%; float:left;"  href="<?=wap_l('1111','index')?>"><img src="http://cfimg.b0.upaiyun.com/upload/2015/1027/16173518941.png" width="100%" /></a>
       <div style="clear:both;"></div>
</div>-->
<div style="border-bottom:1px solid #e9e9e9; background:#fff;">
    <a style="width:43%; float:left; border-right:1px solid #e9e9e9;" href="<?=wap_l('goods','index',array('code'=>'jd'))?>"><img src="<?=TPLURL?>/inc/images/jd_lm_cf.png" width="100%" /></a>
	<a style="width:56.5%; float:left; border-bottom:1px solid #e9e9e9;" href="<?=wap_l('goods','index',array('do'=>1))?>"><img src="<?=TPLURL?>/inc/images/20fd.png" width="100%" /></a>
	<a style="width:56.5%; float:left;"  href="<?=wap_l('goods','index',array('do'=>2))?>"><img src="<?=TPLURL?>/inc/images/30fl.png" width="100%" /></a>
    <div style="clear:both"></div>
    <a style="width:43%; float:left; border-right:1px solid #e9e9e9;border-top:1px solid #e9e9e9;" href="<?=wap_l('phb','index')?>"><img src="<?=TPLURL?>/inc/images/phb_01.png" width="100%" /></a>
	<a style="width:56.5%; float:left;border-top:1px solid #e9e9e9;" href="<?=wap_l('mall','index')?>"><img src="<?=TPLURL?>/inc/images/ppt_01.png" width="100%" /></a>
    <div style="clear:both;"></div>
</div>
<div class="index_menu">
	<ul  class="clear1">
    	<li id="one_1"  class="curr">
        	<a class="index_menu_li_a" id="openCategory"  onClick="setTab('1','id')">
            	<span >默认排序</span>
            </a>
        </li>
    	<li id="one_2">
        	<a class="index_menu_li_a" id="openCategory" onClick="setTab('2','discount_price')">
            	<span >最实惠</span>
            </a>
        </li>
    	<li id="one_3" >
        	<a class="index_menu_li_a" id="openCategory" onClick="setTab('3','fanli_bl')">
            	<span>返利最高</span>
            </a>
        </li>
    	<li  id="one_4" >
        	<a class="index_menu_li_a" id="openCategory" onClick="setTab('4','sell')">
            	<span>人气最高</span>
            </a>
        </li>
        <li style="border-right:none;" id="one_5" >
        	<a class="index_menu_li_a" id="openCategory"  onClick="setTab('5','<?=$bankuai_jd?>')">
            	<span><?=$bankuai_cache[$bankuai_jd]['title']?></span>
            </a>
        </li>
    </ul>
</div>
<?php
include(TPLPATH.'/goods/data.tpl.php');
include(TPLPATH.'/inc/footer.tpl.php');?>