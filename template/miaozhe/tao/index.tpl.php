<?php
$parameter=act_tao_index();
extract($parameter);
$chongzhi_url=$ddTaoapi->tdj_zujian(1,$dduser['id']);
$css[]=TPLURL."/inc/css/tao_index.css";
include(TPLPATH.'/inc/header.tpl.php');
?></div>
<style>
body { background:#fffaea; }
</style>
</div>
<div class="search-wrap">
	<div class="bc pt20 w980">
		<div class="clearfix nav-tutorial"><a href="<?=u('help','taobao')?>" target="_blank">新手上路</a></div>
		<ul class="tb-search clearfix">
			<li><a class="current" href="javascript:void(0)">找宝贝<i></i></a></li>
			<li><a id="cz" style="cursor:pointer">充值返利<i></i></a></li>
			<li><a href="<?=u('tao','daohang')?>" style="cursor:pointer">分类导航<i></i></a></li>
		</ul>
		<div class="pane-tb">
			<div class="pane">
				<form action="index.php" amethod="get" class="t_frombox" target="_blank">
<input type="hidden" id="mod" name="mod" value="inc" class="mod" /><input type="hidden" id="act" name="act" value="check" class="act" />
					<p class="clearfix">
						<input x-webkit-speech id="search-fanli" class="search-input" type="text" placeholder="输入任意淘宝/天猫宝贝标题开始购物拿返利！" onfocus="if(this.value=='输入任意淘宝/天猫宝贝标题开始购物拿返利')this.value='';" onblur="if(this.value=='')this.value='输入任意淘宝/天猫宝贝标题开始购物拿返利';" autocomplete="off" name="q" />
						<input type="submit" value="" class="btn">
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="step_1"></div>
<div class="step_2"></div>
<div class="step_3"></div>
<div class="step_4"></div>

  <script>
$(function(){
    $('#cz').jumpBox({  
		LightBox:'show',
	    contain: '<iframe frameborder="0" style="height:200px; width:300px;margin-top:30px;" src="<?=$chongzhi_url?>"></iframe>',
		height:250,
		width:300
    });
});
</script>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>