<?php
$parameter=act_article_view();
extract($parameter);
$css[]=TPLURL."/inc/css/article.css";
include(TPLPATH."/inc/header3.tpl.php");
?>
<div class="mainbody">
<div class="mainbody1200">
<div class="fuleft">
	<div class="news_txt1">
   	    <div style=" margin-top:20px; margin-left:15px;float:left; font-size:13px; font-family:宋体"><a href="<?=u(MOD,'index')?>">文章首页</a> >> <a href="<?=u('article','list',array('cid'=>$article['cid']))?>"><?=$type[$article['cid']]?></a> >> <?=$article['title']?></div><br /><br />
    	<div class="news_txt_bt1"><h1><?=$article['title']?></h1><div style="margin-top:5px; padding-bottom:5px"><span>发布时间：<?=date('Y-m-d H:i:s',$article['addtime'])?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;来源：<?=$article['source']?$article['source']:WEBNICK?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;点击：<font color="#FF0000"><?=$article['hits']?></font></span></div></div>
        <div class="news_txt_txt1"><?=$article['content']?></div>
     <br />&nbsp;&nbsp;<br />
	    <div class="news_txt_links"> <br />&nbsp;&nbsp;<br />
        <ul>
      
        <li><span>上一篇：</span><a href="<?=$last_url?>"><?=$last_article?></a></li>
        <li><span>下一篇：</span><a href="<?=$next_url?>"><?=$next_article?></a></li>
        </ul>
        </div>
    </div>
    
</div>
<div class="furight">
<?php include TPLPATH."/article/right.tpl.php";?>
</div>

</div>

<?php 
include(TPLPATH."/inc/footer.tpl.php");
?>