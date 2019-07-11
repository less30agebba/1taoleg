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

<div style="clear:both; height:10px">&nbsp;</div>

<div class="footer">

<div class="services">
		<div class="services-cont">
		<div class="services-list">
		  <?php foreach($web_help_article as $k=>$row){?>
			<div class="line"></div>
			<dl style="text-align: left; width:180px">
				<dt style="text-align: left;"><?=$web_help_title[$k]?></dt>

				<dd>
					<?php foreach($row as $arr){?>
<p>·<a target="_blank" href="<?=u('article','view',array('id'=>$arr['id']))?>"><?=$arr['title']?></a></p>
<?php }?>
				</dd>

			</dl>
			<?php }?>
            <div class="line"></div>

			<dl style="text-align: left; width:120px">
					<dt style="text-align: left;">关于我们</dt>
				<dd>
					<?php foreach($about_us_article as $arr){?>
<p>·<a target="_blank" href="<?=u('about','index',array('id'=>$arr['id']))?>"><?=$arr['title']?></a></p>
<?php }?>
				</dd>
			</dl>
			     <div class="line"></div>
		</div>

  <div class="contact"><div class="dhmc">客服服务电话</div>
		   <div class="dian_ico c_fcolor"><?=$dd_tpl_data['del']?></div>
		   <div class="lxkf" style="margin-top:5px">在线客服</div>
			 <a class="qq_ico" id="kefu2" title="在线客服"></a>
        </div>
	
	</div>
  </div>  
   <?php if($dd_tpl_data['foot_wap']==1){?>
   <ul class="footer_app_list"> 
    <?php if($dd_tpl_data['foot_vipduo']==1){?>
	 <li>
          	<div class="app_pic"><img name="<?=WEBNAME?>客户端" src="<?=$dd_tpl_data['app']?>" width="88" height="88" alt="" /></div>
                <dl class="app_right">
                	<dt><?=WEBNAME?>客户端</dt>
                    <dd class="sub_title">将<?=WEBNAME?>装进手机</dd>
                    <dd><a href="<?=$dd_tpl_data['apkurl']?>" class="btn_app btn_android" target="_blank"></a><a href="<?=$dd_tpl_data['ipaurl']?>" target="_blank" class="btn_app btn_store"></a></dd>
                </dl>
            </li> <li>
			<? }else{?>
	<?php if($app_status==1){?>  <li>
          	<div class="app_pic"><img name="<?=WEBNAME?>客户端" src="<?=$dd_tpl_data['app']?>" width="88" height="88" alt="" /></div>
                <dl class="app_right">
                	<dt><?=WEBNAME?>客户端</dt>
                    <dd class="sub_title">将<?=WEBNAME?>装进手机</dd>
                    <dd><a href="<?=$dd_tpl_data['apkurl']?>" class="btn_app btn_android" target="_blank"></a><a href="<?=$dd_tpl_data['ipaurl']?>" target="_blank" class="btn_app btn_store"></a></dd>
                </dl>
            </li> <li>
			<? }else{?>
			 <li style="margin-left:200px"> 
			<?php }?>
			<?php }?>
            	<div class="app_pic"><a href="<?=wap_l()?>" target="_blank"><img name="手机WAP站" src="<?=$dd_tpl_data['wap']?>" width="88" height="88" alt="" /></a></div>
                <dl class="app_right">
                	<dt>手机WAP站</dt>
                    <dd class="sub_title">随时随地拿返利</dd>
                    <dd class="sub_title">扫描二维码,即刻访问官方WAP站</dd>
                </dl>
            </li>
			<li class="last" style="margin-top:-5px">
            	<div class="app_pic"><a href="<?=u('help','weixin')?>" target="_blank"><img name="关注官方微信" src="<?=$dd_tpl_data['erweima']?>" width="88" height="88" alt="" /></a></div>
                <dl class="app_right">
                	<dt>关注官方微信</dt>
                    <dd class="sub_name font12" style="margin-top:5px; margin-bottom:5px">微信号：<font color="#FF0000"><?=$dd_tpl_data['weixinhao']?></font></dd>
                    <dd class="sub_title">扫描二维码,即刻关注<br>随时随地抢优惠</dd>
                </dl>
            </li>
    		<div class="clear"></div>
        </ul>
<?php }?>
  <?php if($mod=='index'){?>
	<!-- 友情连接开始 -->	
<div class="friends">
 <div class="link">
		<div class="t1">友情链接：</div>
		<div class="link-box">
			<div class="link-list"><?php foreach($yqlj as $row){?>
				<a href="<?=$row['url']?>" target="_blank"><?=$row['title']?></a>
                <?php }?>
			</div>
		</div>
		<div class="tr">	<a href="/index.php?mod=vip&act=link" target="_blank" style="float:right; color:#0099CC">查看更多>></a>	</div>
	</div></div>
	<!-- 友情连接结束 -->	
	    <?php }?>
	<div class="clear"></div>	
<p class="footer-nav" style="margin-top:20px">
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
			$dengluhou.find('.money').html(userInfo.user.money);
			$dengluhou.find('.jifen').html(userInfo.user.jifen);
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