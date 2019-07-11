<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}

$parameter=act_wap_order();
extract($parameter);
if($_GET['do']=='taobao'){
    $right_jump='<a class="denglu" href="'.wap_l('user','zhaohui').'"><i class="icon iconfont">找回</i></a>';
}
include(TPLPATH.'/inc/header_2.tpl.php');
?>
<style>
.gtspan span{
	font-size:14px;
}
</style>
<!--b显示列表-->
<?php 
if(!empty($shuju_data)){?>
<div class="mc radius">
	<ul>
<?php 
foreach($shuju_data as $row){?>
<?php if($_GET['do']=='lost'){?><a href="<?=wap_l('user','confirm',array('do'=>'tao',id=>$row["id"]))?>" ><?php }?>
<li style="padding: 10px;border-top: none; line-height: 24px;border-top: 1px dashed #DED6C9;"> 
  <div style=" font-size:14px;"><?=$row['item_title']?></div>
  <div style="margin-top:10px; color:#666; font-size:14px;" class="gtspan"><?=$row['status_tip']?>&nbsp;&nbsp;<?=$row['create_time']?> &nbsp;&nbsp;&nbsp;<?php if($row['fxje']>0){?>返<?php }?> <span style="color:#F00 ;font-size:14px;"><?=$row['fxje']?></span></div>
</li>
<?php if($_GET['do']=='lost'){?></a><?php }?>
<?php }?>
</ul>
</div>

<?=$dd_wap_class->page()?>
<?php }?>
<!-- E -->
<!--b 无数据显示-->
<?php if(empty($shuju_data)){?>
<div class="mc radius">
	<ul class="mu-l2w" ><div style=" width:185px; height:115px; margin:0 auto;"><img src="<?=TPLURL?>/inc/images/img_nocontent.png"/></div></ul>
</div>
<?php }?>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>