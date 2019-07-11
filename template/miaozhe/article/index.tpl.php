<?php
$parameter=act_article_index();
extract($parameter);
$css[]=TPLURL."/inc/css/article.css";
include(TPLPATH."/inc/header.tpl.php");
?>
<div class="mainbody">
<div class="mainbody1200">
<div class="fuleft">
    <div class="news_txt">
    <?php $i=-1; foreach($articles as $k=>$row){$i++;?>
        <div class="news_txt_<?=($i%2)==0?'l':'r'?>">
            <div class="news_txt_bt">
            <h3><?=$article_category[$k]?></h3>
            <div class="new_txt_more"> <a href="<?=$row['url']?>"> 更多...</a></div>
        </div>
        <ul>
        <?php foreach($row['data'] as $arr){?>
            <li><a href="<?=$arr['url']?>"><?=$arr['title']?></a> <span><?=$time?></span></li>
            <?php }?>
        </ul>
        </div>
    <?php }?>
    </div>
   

</div>
<div class="furight">
<?php include TPLPATH."/article/right.tpl.php";?>
</div>
</div>
<?php include TPLPATH."/inc/footer.tpl.php";?>