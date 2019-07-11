<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}

$parameter=act_wap_mingxi();
extract($parameter);
$right_jump='<a class="denglu" href="'.wap_l(MOD,'tixian',array('type'=>1)).'"><i class="icon iconfont">提现</i></a>';
include(TPLPATH.'/inc/header_2.tpl.php');
?>
<!--b显示列表-->
<?php if(!empty($shuju_data)){?>
<div class="mc radius">
	<ul class="mu-l2w">
<?php foreach($shuju_data as $row){ if($webset['jifenbl']==0){ $row['content']=str_replace('，积分0',' ',$row['content']);}?>
<li style="padding: 10px;border-top: none;overflow: hidden; line-height: 20px;border-top: 1px dashed #DED6C9;"> 
  <span style="display: block;overflow: hidden;lear: both;padding: 3px 0;"><span><?=$row['content']?></span>
  <span class="pricecolor" style="display: block;margin-top:10px; color:#666"><?=$row['addtime']?><?php if($do=='out'){?>&nbsp;&nbsp;<?=$row['status']?><?php }?></span></span> 
</li>
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