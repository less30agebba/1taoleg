<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
?>
<?php if($_GET['app']==1 || (defined('DD_APP') && DD_APP==1)){?>

<?php }else{?>
<script type="text/javascript">    
$(function(){
	<?php if($dd_tpl_data['app']==1){?>
	var close_tishi=getCookie('close_tishi');
	if(close_tishi!=1){
		$('.down_app').show();
	}
	<?php }?>
});
function close_tishi(){
	setCookie('close_tishi',1);
	$('.down_app').hide();
}
$(document).scroll(function(){ 
	var scrollTop = $(document).scrollTop(),bodyHeight = 400;
	if(scrollTop > bodyHeight){ 
		$('.fixed-bar .gotop').css('display','none');
		<?php if($dd_tpl_data['app']==1){?>
		$('.down_app').hide();
		<?php }?>
	}else{
		$('.fixed-bar .gotop').css('display','block');
		<?php if($dd_tpl_data['app']==1){?>
		var close_tishi=getCookie('close_tishi');
		if(close_tishi!=1){
			$('.down_app').show();
		}
		<?php }?>
	} 
})
</script>
<style>
.fixed-bar{_position:absolute;_bottom:auto;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))-30);}
</style>
<div class="fixed-bar">
	<div class="user-footer clearfix gotop">
      <ul>
        <li><a href="<?=wap_l('index','index')?>"><i class="icon iconfont_app">&#xe6a7;</i>首页</a></li>
        <li><a href="<?=wap_l('goods','search_index')?>"><i class="icon iconfont_app">&#xe694;</i>搜索</a></li>
        <li><a href="<?=wap_l('goods','index',array('sort'=>1))?>"><i class="icon iconfont_app">&#xe631;</i>超高</a></li>
        <li><a href="<?=wap_l('mall','index')?>"><i class="icon iconfont_app">&#xe6b1;</i>商城</a></li>
        <li><a href="<?=wap_l('user','index')?>"><i class="icon iconfont_app">&#xe69f;</i>我的</a></li>
      </ul>
    </div>
    <p class="banquan"><span><?=$dd_tpl_data['banquan']?><?=$dd_tpl_data['tongji']?></span></p>
</div>
<?php if($dd_tpl_data['app']==1){?>
<div class="download-con" style="bottom:53px">
	<div class="down_app">
    	<div class="download-logo">
        	<img src="<?=$dd_tpl_data['tubiao']?>" width="100%" height="100%" />
        </div>
        <div class="alogo">
        	<p class="client-name"><?=$dd_tpl_data['tishi_words']?$dd_tpl_data['tishi_words']:'使用客户端拿返利更快捷方便'?></p>
        </div>
        <div class="open_now">
        	<a href="<?=u('app','phone')?>">
            	<span class="open_btn">立即打开</span>
            </a>
        </div>
        <div class="close-btn-con" onclick="close_tishi()">
        	<span class="close-btn-icon"></span>
        </div>
    </div>
</div>
<?php }?>
<?php }?>
<div id="weixindiv" onClick="document.getElementById('weixindiv').style.display='';"><img src="<?=TPLURL?>/inc/images/<?=$dd_wap_class->device_type()?>g.png"></div>
<div id="weixinshare" onClick="document.getElementById('weixinshare').style.display='';"><img src="<?=TPLURL?>/inc/images/weixinshare.png"></div>
</body></html>
</body></html>