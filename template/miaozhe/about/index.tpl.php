<?php //关于我们
$parameter=act_about_index();
extract($parameter);
$css[]=TPLURL."/inc/css/help.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<div id="main1200">	<div style="margin-top:20px"></div>
	<div class="help_main">
		<div class="help_left">
			<div class="help_img2"></div>
			<ul>
				<?php foreach($articles as $row){?>
				<li><a href="<?=u('about','index',array('id'=>$row['id']))?>"><p <?php if($id==$row['id']){?>id="about"<?php }?>><?=$row['title']?></p></a></li>
				<?php }?>
			</ul>    
		</div>
        <script>
			$('#about').addClass('left_active');
		</script>
		<div class="help_right" style="background:#FFFFFF">
			<div style="font-size:21px;color:#333; font-weight:bold;font-family:"微软雅黑";"><?=$article['title']?></div>
			<div class="about_wrap">
				<?=$article['content']?>
				
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div style="margin-top:15px"></div>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>