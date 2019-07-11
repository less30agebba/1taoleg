<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$webtitle=WEBNAME.'-帮助中心';
$css[]=TPLURL.'/inc/css/swiper.min.css';
$js[]=TPLURL.'/inc/js/swiper.jquery.min.js';
include(TPLPATH.'/inc/header.tpl.php');
?>
<script>
function size(obj){
	var size = 0;
	for(var i in obj){
		size++;
	}
	return size;
}

function imgsLoad(arr,i){
	i=i||0;
	var s=size(arr);
	if(i<s){
		$('#img'+i).attr('src',arr[i]);
		$('#img'+i).load(function(){
			imgsLoad(arr,i+1);
		});
	}
	else{
		gundong();
	}
}

$(function(){
	var arr=['<?=TPLURL?>/inc/images/a01.png','<?=TPLURL?>/inc/images/a02.png','<?=TPLURL?>/inc/images/a03.png','<?=TPLURL?>/inc/images/a04.png','<?=TPLURL?>/inc/images/a05.png','<?=TPLURL?>/inc/images/a06.png'];
	imgsLoad(arr);
})
</script>
<style>
.swiper-container {
    width: 100%;
}  
</style>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img id="img0" src="" width="100%"></div>
        <div class="swiper-slide"><img id="img1" src="" width="100%"></div>
        <div class="swiper-slide"><img id="img2" src="" width="100%"></div>
        <div class="swiper-slide"><img id="img3" src="" width="100%"></div>
        <div class="swiper-slide"><img id="img4" src="" width="100%"></div>
        <div class="swiper-slide"><img id="img5" src="" width="100%"></div>
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>
    <!-- 如果需要导航按钮 -->

    <!-- 如果需要滚动条 -->
    <div class="swiper-scrollbar"></div>
</div>
<script>
function gundong(){
	var mySwiper = new Swiper ('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    
    // 如果需要分页器
    pagination: '.swiper-pagination',
    
    // 如果需要前进后退按钮
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    
    // 如果需要滚动条
    scrollbar: '.swiper-scrollbar',
	autoplay:3000,
	paginationClickable: true,
    loop: true
  })
}
          
  </script>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>