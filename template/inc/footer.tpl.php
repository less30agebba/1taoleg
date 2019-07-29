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
?>
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

<div class="contact"><div class="dhmc">QQ号码</div>
		   <div class="dian_ico c_fcolor">476219037</div>
		   <div class="lxkf" style="margin-top:5px">售前客服</div>
               <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=476219037&amp;site=qq&amp;menu=yes" rel="nofollow" target="_blank" class="qq_ico" title="售前客服"></a>
           <div class="shkf" style="margin-top:10px">售后客服</div>
               <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=3365450533&amp;site=qq&amp;menu=yes" rel="nofollow" target="_blank" class="qq_ico1" title="售后客服"></a>


        </div>
  </div>  
   
	<div class="clear"></div>	
<p class="copyright" style="margin-top:10px">
<div align="center"><p>
	<br />
</p>
<p>
	<span style="font-size:12px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span> 
</p>&nbsp;&nbsp;&nbsp; <a href="http://www.miibeian.gov.cn/" target="_blank">闽ICP备19011600号-1</a>&nbsp;&nbsp;&nbsp;<a  target="cyxyv" target="cyxyv" href="https://v.yunaq.com/certificate?domain=www.1taoleg.com"><img src="
https://aqyzmedia.yunaq.com/labels/label_lg_90030.png
"></a></div></p>
<div align="center" style="margin-top:10px;margin-bottom:15px">
<a href="#" style="line-height:1.5;margin-right:15px"><img src="/T2D.OrXtVXXXXXXXXX-393927512.jpg" /></a>
<a href="#" style="line-height:1.5;margin-right:15px"><img src="/T2zytmXsBbXXXXXXXX-393927512.jpg" /></a>
<a  style="margin-right:15px"  href="#"><img src="https://static.anquan.org/static/outer/image/sm_124x47.png" /></a>
 <a  style=";margin-right:15px"  href="#"><img src="https://static.anquan.org/static/outer/image/aqkx_124x47.png" /></a> 
</div></div>
<script>
$.ajax({
	url: '/index.php?mod=ajax&act=userinfo',
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
			$dengluhou.find('.jifenbao2').html(''+userInfo.user.jifenbao/100+'');
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