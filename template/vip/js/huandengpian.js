//�õ�Ƭ
$(function(){
        var $banner=$('.banner');
        var $banner_ul=$('.banner-img');
        var $btn=$('.banner-btn');
        var $btn_a=$btn.find('a')
        var v_width=$banner.width();
        
        var page=1;
        
        var timer=null;
        var btnClass=null;

        var page_count=$banner_ul.find('li').length;//�����ֵ����СԲ��ĸ���
        
        var banner_cir="<li class='selected' href='javascript:;'><a></a></li>";
        for(var i=1;i<page_count;i++){
                //��̬���СԲ��
                banner_cir+="<li><a href='javascript:;'></a></li>";
                }
        $('.banner-circle').append(banner_cir);
        
        var cirLeft=$('.banner-circle').width()*(-0.5);
        $('.banner-circle').css({'marginLeft':cirLeft});
        
        $banner_ul.width(page_count*v_width);
        
        function move(obj,classname){
                //�ֶ����Զ�����
        if(!$banner_ul.is(':animated')){
                if(classname=='prevBtn'){
                        if(page==1){
                                        $banner_ul.animate({left:-v_width*(page_count-1)});
                                        page=page_count; 
                                        cirMove();
                        }
                        else{
                                        $banner_ul.animate({left:'+='+v_width},"slow");
                                        page--;
                                        cirMove();
                        }        
                }
                else{
                        if(page==page_count){
                                        $banner_ul.animate({left:0});
                                        page=1;
                                        cirMove();
                                }
                        else{
                                        $banner_ul.animate({left:'-='+v_width},"slow");
                                        page++;
                                        cirMove();
                                }
                        }
                }
        }
        
        function cirMove(){
                //���page��ֵ��ʹ��ǰ��page��selected��СԲ��һ��
                $('.banner-circle li').eq(page-1).addClass('selected')
                 .siblings().removeClass('selected');
        }
        
        $banner.mouseover(function(){
                $btn.css({'display':'block'});
                clearInterval(timer);
                                }).mouseout(function(){
                $btn.css({'display':'none'});                
                clearInterval(timer);
                timer=setInterval(move,3000);
                                }).trigger("mouseout");//�����Զ�����

        $btn_a.mouseover(function(){
                //ʵ��͸�����䣬��ֹð��
                        $(this).animate({opacity:0.6},'fast');
                        $btn.css({'display':'block'});
                         return false;
                }).mouseleave(function(){
                        $(this).animate({opacity:0.3},'fast');
                        $btn.css({'display':'none'});
                         return false;
                }).click(function(){
                        //�ֶ���������ʱ��
                        btnClass=this.className;
                        clearInterval(timer);
                        timer=setInterval(move,3000);
                        move($(this),this.className);
                });
                
        $('.banner-circle li').live('click',function(){
                        var index=$('.banner-circle li').index(this);
                        $banner_ul.animate({left:-v_width*index},'slow');
                        page=index+1;
                        cirMove();
                });
});


//ad����

$(document).ready(function(e) {
	/***����Ҫ�Զ�������ȥ������***/
	time = window.setInterval(function(){
		$('.og_next').click();
	},5000);
	/***����Ҫ�Զ�������ȥ������***/
	linum = $('.mainlist li').length;//ͼƬ����
	w = linum * 480;//ul���
	$('.piclist').css('width', w + 'px');//ul���
	$('.swaplist').html($('.mainlist').html());//��������
	$('.og_next').click(function(){
		if($('.swaplist,.mainlist').is(':animated')){
			$('.swaplist,.mainlist').stop(true,true);
		}
		if($('.mainlist li').length>2){//����4��ͼƬ
			ml = parseInt($('.mainlist').css('left'));//Ĭ��ͼƬulλ��
			sl = parseInt($('.swaplist').css('left'));//����ͼƬulλ��
			if(ml<=0 && ml>w*-1){//Ĭ��ͼƬ��ʾʱ
				$('.swaplist').css({left: '960px'});//����ͼƬ������ʾ�����Ҳ�
				$('.mainlist').animate({left: ml - 960 + 'px'},'slow');//Ĭ��ͼƬ����
				if(ml==(w-960)*-1){//Ĭ��ͼƬ���һ��ʱ
					$('.swaplist').animate({left: '0px'},'slow');//����ͼƬ����
				}
			}else{//����ͼƬ��ʾʱ
				$('.mainlist').css({left: '960px'})//Ĭ��ͼƬ������ʾ������
				$('.swaplist').animate({left: sl - 960 + 'px'},'slow');//����ͼƬ����
				if(sl==(w-960)*-1){//����ͼƬ���һ��ʱ
					$('.mainlist').animate({left: '0px'},'slow');//Ĭ��ͼƬ����
				}
			}
		}
	})
	$('.og_prev').click(function(){

		if($('.swaplist,.mainlist').is(':animated')){
			$('.swaplist,.mainlist').stop(true,true);
		}
		if($('.mainlist li').length>2){
			ml = parseInt($('.mainlist').css('left'));
			sl = parseInt($('.swaplist').css('left'));
			if(ml<=0 && ml>w*-1){
				$('.swaplist').css({left: w * -1 + 'px'});
				$('.mainlist').animate({left: ml + 960 + 'px'},'slow');
				if(ml==0){
					$('.swaplist').animate({left: (w - 960) * -1 + 'px'},'slow');
				}
			}else{
				$('.mainlist').css({left: (w - 960) * -1 + 'px'});
				$('.swaplist').animate({left: sl + 960 + 'px'},'slow');
				if(sl==0){
					$('.mainlist').animate({left: '0px'},'slow');
				}
			}
		}
	})
});
$(document).ready(function(){
	$('.og_prev,.og_next').hover(function(){
			$(this).fadeTo('fast',1);
		},function(){
			$(this).fadeTo('fast',0.7);
	})
})