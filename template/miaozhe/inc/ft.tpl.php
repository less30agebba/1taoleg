<?php
if(!isset($article_class)){
	include_once(DDROOT.'/comm/article.class.php');
	$article_class=new article($duoduo);
}
$about_us_article=$article_class->select_all('cid="28" order by sort asc limit 4',0,'id,title');

$web_help_title=array(4=>'常见问题',5=>'频道说明',3=>'新手教程');
foreach($web_help_title as $k=>$v){
	$web_help_article[$k]=$article_class->select_all('cid="'.$k.'" order by sort asc limit 4',0,'id,title');
}
$sign=0;
	if($webset['sign']['open']==1){
		$todaytime=strtotime(date('Y-m-d 00:00:00'));
		if($dduser['signtime']<$todaytime){
			$sign=1;
		}
		else{
			$sign=0;
		}
	}
?>
	<div class="clear"></div>	
<p class="footer-nav2">
	<a rel="nofollow" href="/index.php?mod=about&act=index&id=1" target="_blank">关于我们</a><i>|</i>
	<a rel="nofollow" href="/index.php?mod=about&act=index&id=2" target="_blank">联系我们</a><i>|</i>
	<a rel="nofollow" href="/sitemap.html" target="_blank">网站地图</a><i>|</i>
	<a rel="nofollow" href="/index.php?mod=about&act=index&id=4" target="_blank">商务合作</a><i>|</i>
	<a rel="nofollow" href="/index.php?mod=about&act=index&id=5" target="_blank">人才招聘</a><i>|</i>
	<a rel="nofollow" href="/index.php?mod=user&act=msg&do=send" target="_blank"><span style="color:#FF0000">意见反馈</span></a><i>|</i>
	<a rel="nofollow" href="<?=u('help','index',array('cid'=>3))?>" target="_blank">常见问题</a><i>|</i>
	<a rel="nofollow" href="<?=u('help','index')?>" target="_blank">帮助中心</a><i>|</i>
	<?php if($webset['user']['shoutu']==1){?>
	<a rel="nofollow" href="<?=u('yaoqing','index')?>" target="_blank"><span style="color:#FF0000">推广赚钱</span></a><i>|</i>
	<?php }?>
	<a rel="nofollow" href="/index.php?mod=about&act=index&id=3" target="_blank">广告合作</a><i>|</i>
	  <?php if($webset['shangjia']['status']==1){?><a rel="nofollow" href="<?=u('hezuo','index')?>" target="_blank">商家报名</a><?php }?></p>
 

	<p class="copyright" style="margin-top:10px">
<div align="center"><?=$webset['banquan']?>&nbsp;&nbsp;&nbsp; <a href="http://www.miibeian.gov.cn/" target="_blank"><?=$dd_tpl_data['icp']?></a>&nbsp;&nbsp;&nbsp;<?=$dd_tpl_data['tongji']?></div></p>

</div><?php if($dd_tpl_data['left-kg']['open']==0){?>
<?php include(TPLPATH.'/vip/top.tpl.php');?>
	<?php }?>


<?php
$kefu=dd_get_cache('kefu');
if(!empty($kefu)){
?>
<div class="LightBox" id="LightBox"></div>
<div id="jumpbox_kefu" show="0" class="jumpbox" style="position:absolute;z-index:99999999;"><div class="top_left"></div><div class="top_center"></div><div class="top_right"></div><div class="middle_left"></div><div class="middle_center"><div class="close"><a></a></div>
<div class="blank12px"></div>
<div class="onlineMenu">
	<h3 class="tele">QQ在线客服</h3>
	<ul>
	<li class="tli phone"><?=$dd_tpl_data['del']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#0099CC">客服服务时间：</font><span>8:30 - 22:00</span></li>
			</ul>
		</div>
<div class="onlineMenu"><h3 class="tQQ">QQ在线客服</h3></div>
<div class="kefu_vipduo">
	<ul>
		<?php foreach($kefu as $row){?>
        <?php if($row['type']==1){?>
		<li><?=$row['title']?>：<?=qq($row['code'])?></li>
        <?php }else{?>
       	<li><?=$row['title']?>：<?=wangwang($row['code'])?></li>
       <?php }?>
		<?php }?>
	<ul>
		
</div>
</div><div class="middle_right"></div><div class="end_left"></div><div class="end_center"></div><div class="end_right"></div></div>
<script>
/* 客服浮窗 */
$(function(){
    $('#kefu,#kefu1,#kefu2,#kefu3').jumpBox({  
		id:'jumpbox_kefu',
		height:250,
		width:360
    });
});
</script>
<?php }?>
<script>
$.ajax({
	url: '<?=u('ajax','userinfo')?>',
	dataType:'jsonp',
	jsonp:"callback",
	success: function(userInfo){
		if(userInfo.s==1){
			$('.dengluqian').hide();
			$dengluhou=$('.dengluhou');
			$dengluhou.find('.avatar img').attr('src',userInfo.user.avatar).attr('alt',userInfo.user.name);
			$dengluhou.find('.mc').html(userInfo.user.name);
			$dengluhou.find('.jifenbao').html(userInfo.user.jifenbao);
			$dengluhou.find('.money').html(userInfo.user.money1);
			$dengluhou.find('.level').html(userInfo.user.level);
			$dengluhou.find('.jifenbao2').html(''+userInfo.user.jifenbao/<?=TBMONEYBL?>+'');
			$dengluhou.show();
		}
		else{
			$('.dengluqian').show();
		}
	}
});
</script>
</body>
</html>