<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$parameter=act_goods_index($dd_tpl_data['ajax_load_num']);
//echo "<pre>";print_r($parameter);echo "<pre>";
extract($parameter);
$bankuai_tpl=$bankuai_tpl?$bankuai_tpl:$dd_tpl_data['bankuai_tpl'];
$yugao_time=date('Y-m-d '.$bankuai['yugao_time'].":00");
if(strtotime($yugao_time)>TIME){
	$yugao_close=true;
}
if($bankuai['huodong_time']){
	$bankuai['huodong_etime']=strtotime(date('Y-m-d '.$bankuai['huodong_time'].":00:00",TIME))+24*3600;
}
$phone_app_status=$app_status;
$css[]=TPLURL."/goods/250/css/list.css";
?>
<?php include(TPLPATH.'/inc/header3.tpl.php');?>


<div class="wrap<?=$bankuai['code']?>">
<div class="superindex<?=$bankuai['code']?>">
<div class="top01<?=$bankuai['code']?>"></div></div>
<script type="text/javascript" src="js/scrollpagination.js"></script>
<?php if($bankuai['bg_color']!='' && $bankuai['bg_color']!='none'){?>
<style>body {background:<?=$bankuai['bg_color']?>;}</style>
<?php }?>

<?php if(empty($bankuai_code)||$bankuai['fenlei']==1||$bankuai['yugao']==1){?>
<div id="ddlanmu" style=" width:100%">
<div class="jy_tl" id="fl">
            <div class="jy_auto">
              <?php if($goods_type||$first_bankuai['yugao']==1){?>
              <div class="jy_nav" id="<?=$first_bankuai['code']?>_nav"> 
               <?php 
		if(($bankuai['fenlei']==1 || $_GET['code']=='')&&$goods_type){
		$url_canshu=array("code"=>$bankuai_code);
		if($_GET['do']!=''){
			$url_canshu['cid']=0;
			$url_canshu['do']=$_GET['do'];
		}
		?>
              <div class="up_fenlei">
            	<a <?php if(empty($_GET['cid'])){?>class="cur"<?php }?> href="<?=u('goods','index',$url_canshu)?>#fl">全部</a>
                <?php foreach($goods_type as $vo){?>
          <a href="<?=$vo['url']?>#fl" <?php if($_GET['cid']==$vo['id']){?>class="cur c_border"<?php }?>>
          <?=$vo['title']?>
          </a>
          <?php }?> </div>
                <?php }?> <a>排序：</a>
				 	  <a class="<?php if($_GET['do']=='addtime_desc'){?>cur<?php }?> c_border" href="<?=l('goods','index',array('code'=>$_GET['code'],'keyword'=>$_GET['keyword'],'cid'=>$_GET['cid'],'do'=>'addtime_desc'))?>#fl">最新↓</a>
         <a class="<?php if($_GET['do']=='sell_desc'){?>cur<?php }?> c_border" href="<?=l('goods','index',array('code'=>$_GET['code'],'keyword'=>$_GET['keyword'],'cid'=>$_GET['cid'],'do'=>'sell_desc'))?>#fl">最热↓</a>
         <a class="<?php if($_GET['do']=='price_asc'){?>cur<?php }?> c_border" href="<?=l('goods','index',array('code'=>$_GET['code'],'keyword'=>$_GET['keyword'],'cid'=>$_GET['cid'],'do'=>'price_asc'))?>#fl"><span class="ff">价格↓ </span></a>
		 
         <div style="float:right;">
         <?php if($_GET['do']=='yugao'){?>
         <a class="cur2 c_border" href="<?=l('goods','index',array('code'=>$_GET['code']))?>">返回列表</a>
         <?php }else{?>
         <a class="cur2 c_border" <?php if($yugao_close){?>onClick="alert('对不起，亲！<?=$bankuai['yugao_time']?>后公布预告商品。');"<?php }else{?>href="<?=u('goods','index',array('code'=>$bankuai['code'],'do'=>'yugao'))?>"<?php }?> style="cursor:pointer"><span class="yg">明日预告</span></a>
         <?php }?>
         </div>
              
               
              </div>
              <?php }?>
            </div>
          </div>
		  </div>
<?php }?>

<div style=" height:0px; overflow:hidden">&nbsp;</div>
<div class="goods_list" style="min-height:400px">
  <?php include(TPLPATH."/goods/250/list.tpl.php");?>
</div>
<div style="clear:both;"></div>
<div id="ajax_goods_loading" style="margin-bottom:10px"><img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品</div>
<div class="megas512" style="padding:10px; display:none">
  <?php if($goods_total==1){?>
  <?=pageft($total,$pagesize*(1+$ajax_load_num),u(MOD,ACT,$url_arr),WJT)?>
  <?php }?>
</div>
<?php include(TPLPATH.'/goods/jumpbox.tpl.php');?>
<?php
$a=$url_arr;
$a['do']=trim($_GET['do']);
unset($a['code']);
$contentData=json_encode($a);
?>
<script type="text/javascript">
scrollPaginationPage=(<?=$ajax_load_num?>-1)*<?=($page-1)?>+1;
$(function(){
	LazyLoad($('.list-good'));
	<?php if($ajax_stop!=1 && $ajax_load_num>0){?>
	ajaxLoad('.goods_list .goods_items','.megas512',<?=$ajax_load_num?>,'<?=CURURL.'/?mod=goods&act=data&code='.$_GET['code']?>',<?=$contentData?>,500,LazyLoad);
	<?php }else{?>
	$('.megas512').show();
	<?php }?>
	fixDiv('#ddlanmu',0);
})
countDown('.count_down');
</script>

<?php 
include(TPLPATH."/inc/footer.tpl.php");
?>