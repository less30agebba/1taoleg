
<div class="menu_bd" style="margin: 0 auto;">
<div id="shownav">
    <ul class="nav_main" id="nav_main" >
        <li class="fenlei" onmouseover="document.getElementById('category_list').style.height='auto';"
            onmouseout="document.getElementById('category_list').style.height='0'" onclick="document.getElementById('category_list').style.height='auto'" style="width:220px;height: 46px;overflow: hidden;">所以分类</li>
    </ul>
</div>

<?php if($index!==1 && $index!==2){?>
<div class="category_wrap" id="category_list" onmouseout="document.getElementById('category_list').style.height='0'"
    onmouseover="document.getElementById('category_list').style.height='auto';"><?php }?>
		

<div class="top_wrap">
<div class="banner_l">
<dl>
<dd><a href="<?=l('goods','index',array('cid'=>10001))?>"><i class="ct-icon ct-icon-nvzhuang"></i>女装<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10002))?>"><i class="ct-icon ct-icon-nanzhuang"></i>男装</a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10003))?>"><i class="ct-icon ct-icon-xiezi"></i>鞋子<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10004))?>"><i class="ct-icon ct-icon-muying"></i>母婴</a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10005))?>"><i class="ct-icon ct-icon-jujia"></i>居家<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10006))?>"><i class="ct-icon ct-icon-meizhuang"></i>美妆</a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10007))?>"><i class="ct-icon ct-icon-shuma"></i>数码<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10008))?>"><i class="ct-icon ct-icon-meishi"></i>美食</a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10009))?>"><i class="ct-icon ct-icon-wenti"></i>文体<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10010))?>"><i class="ct-icon ct-icon-neiyi"></i>内衣<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10011))?>"><i class="ct-icon ct-icon-xiangbao"></i>箱包</a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10012))?>"><i class="ct-icon ct-icon-dianqi"></i>电器<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10013))?>"><i class="ct-icon ct-icon-jiafang"></i>家纺<em class="ct-line"></em></a></dd>
<dd><a href="<?=l('goods','index',array('cid'=>10014))?>"><i class="ct-icon ct-icon-peishi"></i>户外</a></dd>
</dl>
</div>
</div>












	  </div>
<script src="<?=TPLURL?>/vip/js/fenleimulu.js" type="text/javascript"></script>
