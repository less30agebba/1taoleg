<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
?>
<div class="mid_bg">
    <div class="zj_btn">
        <p>亲！因淘宝规则调整，将不再支持使用商品链接查返利！</p>
        <p>去我们网站看看，有很多性价比的商品，一样可以购物返利。</p>
    </div>
    <div style="clear:both"></div>
    <div class="anniu">
    	<ul>
        	<li>
            	<a class="one" target="_blank" href="<?=u('zhidemai','index')?>">去值得买</a>
            </li>
        	<li>
            	<a class="one" target="_blank" href="<?=u('jiu','index')?>">去9.9包邮</a>
            </li>
        	<li>
            	<a class="one" target="_blank" href="<?=u('shijiu','index')?>">去19.9包邮</a>
            </li>
        	<li>
            	<a class="one" target="_blank" href="<?=u('tejia','index')?>">去特价促销</a>
            </li>
        	<li>
            	<a class="one" target="_blank" href="<?=u('zhuanxiang','index')?>">去手机专享</a>
            </li>
        	<li>
            	<a class="one" target="_blank" href="<?=u('index','index')?>">去首页</a>
            </li>
        </ul>
    </div>
    <div style="clear:both"></div>
    <div class="anniu1">
    	<ul>
        <?php if($webset['paipai']['open']==1){?>
        	<li><a class="one" target="_blank" href="<?=l('paipai','list',array('q'=>$goods['title']))?>">去拍拍网购物拿返利</a></li>
        <?php }?>
        <?php if(BIJIA>0){?>
        	<li><a class="one" target="_blank" href="<?=u('mall','goods')?>">去全网比价拿返利</a></li>
        <?php }?>
        </ul>
    </div>
    <div style="clear:both"></div>
    <!--<a class="fl_btn1" href=""></a>-->
</div>