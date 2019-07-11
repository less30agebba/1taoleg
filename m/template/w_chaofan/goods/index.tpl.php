<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}

?>
<?php include(TPLPATH.'/public.tpl.php');
	  include(TPLPATH.'/inc/header.tpl.php');
?>
<link href="<?=TPLURL?>/inc/css/list.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(function(){
	$('.m-list-nav-catlog a').click(function(){
		$('.m-list-nav-catlog a').toggleClass('open');
		$('.m-list-catlog').toggle();
		$('.g-body-bd-mask').toggle();
	})
})
</script>
<div class="m-list">
  <div class="g-wrap g-body-hd m-list-nav">
    <div class="m-list-nav-catlog " > <a href="javascript:void(0)" class=""><span class="txt-red">商品分类</span><i class="ico ico-arrow ico-arrow-down ico-arrow-s-gray"></i></a> </div>
    <div class="m-list-types">
                <ul class="m-list-types-list">
					<li id="one_1" ><a onClick="setTab('1','discount_price')">最实惠</a></li>
					<li id="one_2"><a onClick="setTab('2','fanli_bl')">返最多</a></li>
					<li id="one_3"><a onClick="setTab('3','sell')">最热卖</a></li>
					<li id="one_4"style="border:none;"><a onClick="setTab(4,'<?=$bankuai_jd?>')"><?=$bankuai_cache[$bankuai_jd]['title']?><i class="ico ico-sort2Arrow"></i></a></li>
                </ul>
            </div>
    <!-- 所有分类列表 -->
    <div class="m-list-catlog" style="display: none;">
      <ul class="m-list-catlog-list">
	    <?php
		 foreach($type as $k=>$row){?>
        <li><a href="<?=wap_l('goods','index',array('cid'=>$k))?>"></i><?=$row?></a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</div>
<?php 
include(TPLPATH.'/goods/data.tpl.php');
include(TPLPATH.'/inc/footer.tpl.php');?>