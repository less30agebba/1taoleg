<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
define('VIEW_PAGE',1);
//幻灯片
$slides=dd_slides($duoduo,10);

//商城
include(DDROOT.'/comm/mall.class.php');
$mall_class=new mall($duoduo);
$num=11;
$paipai_arr=array();

$malls=$mall_class->index($num,$paipai_arr);
$chongzhi_url=$ddTaoapi->tdj_zujian(1,$dduser['id']);


//友情链接
$yqlj=dd_link($duoduo,30,0);

//合作伙伴
$hzhb=dd_link($duoduo,30,1);

$ajax_load_num=$dd_tpl_data['ajax_load_num'];

$bankuai=$duoduo->select_all('bankuai','id,title,code,bankuai_tpl,web_cid,yugao,yugao_time,huodong_time',"tuijian=1 and status=1 and del=0 ORDER BY sort=0 ASC,sort asc,id desc");
$baokuan=$duoduo->select_all('goods','id,title,quan_price,url,img,price,sell',"code='shijiu'  ORDER BY id desc Limit 0,10");
$baokuan=addLocalUrl($baokuan,'shijiu');
$rem=$duoduo->select_all('goods','id,title,quan_price,url,img,price,sell',"code='zhidemai'  ORDER BY id desc Limit 0,12 ");
$rem=addLocalUrl($rem,'zhidemai');
$dae=$duoduo->select_all('goods','id,title,quan_price,url,img,price,sell,endtime',"code='jd'  ORDER BY id desc Limit 0,4 ");
$dae=addLocalUrl($dae,'jd');
$t=array();
foreach($bankuai as $key=>$vo){
    if($key==0){
        if($vo['huodong_time']){
            $vo['huodong_etime']=strtotime(date('Y-m-d '.$vo['huodong_time'].":00:00",TIME))+24*3600;
        }
        $first_bankuai=$vo;
        $web_cid=$vo['web_cid'];
    }
    if(!in_array($vo['bankuai_tpl'],$t)){
        $css[]=TPLURL."/goods/".$vo['bankuai_tpl']."/css/list.css";
        $t[]=$vo['bankuai_tpl'];
    }
}
$web_cid=unserialize($web_cid);
if($web_cid){
    $where="id in(".implode(',',$web_cid).")";
}else{
    $where=" tag='goods' ";
}
if(!empty($web_cid)){
    $goods_type=$duoduo->select_all("type","id,title",$where."  order by sort=0 asc,sort asc,id desc");
//	获取到商品类型的时候，给商品类型数组添加商品地址链接
    foreach($goods_type as $k=>$vo){
        $canshu=array();
        if($bankuai_code){
            $canshu['code']=$bankuai_code;
        }
        $canshu['cid']=$vo['id'];
        if($_GET['do']){
            $canshu['do']=$_GET['do'];
        }
        $goods_type[$k]['url']=u('goods','index',$canshu);
    }
}
$yugao_time=date('Y-m-d '.$first_bankuai['yugao_time'].":00");
if(strtotime($yugao_time)>TIME){
    $yugao_close=true;
}

$css[]=TPLURL."/inc/css/index.css";

$css[]=TPLURL."/inc/css/malllist.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<script src="js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/scrollpagination.js"></script>
<script>
    $(function(){
        fixDiv('#ddlanmu .ddlanmu_c',0);
        countDown('.count_down');
    });
</script>
<div class="mainbanner">
    <div class="mainbanner_window">
        <ul id="slideContainer">
            <?php foreach($slides as $row){?>
                <li> <a href="<?=$row['url']?>" target="_blank" rel="nofollow"><img src="<?=$row['img']?>" width="1920" height="420" /></a></li>
            <?php }?></ul>

    </div>
    <ul class="mainbanner_list">
        <li><a href="javascript:void(0);"></a></li><li><a href="javascript:void(0);"></a></li><li><a href="javascript:void(0);"></a></li><li><a href="javascript:void(0);"></a></li>	</ul>
    <div class="hdpads"> <a href="/" target="_blank" rel="nofollow"><img src="https://image2.suning.cn/uimg/cms/img/154201517865538686.png" width="180" height="200" /></a>
        <a href="" target="_blank" rel="nofollow"><img src="https://image2.suning.cn/uimg/cms/img/154201517865538686.png" width="180" height="190" style="margin-top:10px" /></a></div>
    <div class="guanbihdp"></div>
</div>
<div class="slogon">
    <img src="/upload/slogo.png" width="1200"  />
</div>

<div class="main-title" id="qiang">
    <a class="limit" >限时抢购</a>
</div>
<div class="t-0">
    <div class="t-0left"><?=AD(cx)?></div>
    <div class="t-0right">
        <div class="ads0">
            <?=AD(cx1)?>
            <?=AD(cx2)?>
            <?=AD(cx3)?>
            <?=AD(cx4)?>
        </div>
    </div>
</div>

<div class="clear"></div>
<div class="main-title" id="baokuan">
    <p class='lg'>爆款推荐</p>
    <p class="sm">EXPLOSION RECOMMENDATION</p>
</div>


<div class="block-jxhh">
    <div class="hot-words title-div"><div class="title-text"><font size="+5" style="vertical-align: top;">●</font> 爆款推荐 <div class="title-text2">SELECT GOOD GOODS</div></div>

        <div class="title-hot-words">

            <a target="_blank" href="/index.php?mod=goods&act=index&code=jiu"> 查看更多☈ </a>
        </div>
    </div>
</div>


<div class="rexiao_list">
    <ul>
        <?php
        foreach($baokuan as $row){
            ?>
            <li>
                <div class="goods_pic img"><a href="<?=$row['url']?>" target="_blank"><img data-original="<?=$row['img']?>" src="images/lazy.gif"  /></a></div>
                <div class="goods_info">
                    <div class="goods_tit"><a href="" target="_blank"><?=$row['title']?></a></div>
                    <div class="goods_price_coupon">
                        <span class="goods_price"><b>￥</b><?=$row['quan_price']?><em>券后 <span class="fr" style="margin-top:5px">热销<?=$row['sell']?>件</span></em></span></span>
                    </div>
                </div>
            </li>
        <?php }?>

    </ul>



</div>

</div>

<div class="clear"></div>

<div class="main-title" id="kuaixun">
    <p class='lg'>最新快讯</p>
    <p class="sm">LATEST NEWS</p>
</div>

<div class="kuaixun">
    <ul>
        <li>
            <div class="bt"> 他们正在抢购 <span>热门商品</span></div>

            <div class="pos-box">
                <div class="pos-goods-list bot">
                    <?php
                    foreach($rem as $row){
                        ?>
                        <a class="pos-goods cnzzCounter"  href="<?=$row['url']?>" target="_blank">
                            <img  src="<?=$row['img']?>" />
                            <div class="bt1"> <?=$row['title']?></div>
                            <div class="bt2"> 券后价：<font>&yen;</font><span><?=$row['quan_price']?></span></div>
                            <div class="bt2" style="color:#999;">已抢购<?=$row['sell']?> 件</div>
                        </a>
                    <?php }?>

                </div>

            </div>

            <div class="pos-act">
                <a class="top-btn disabled" href="javascript:;"></a>
                <a class="bot-btn " href="javascript:;"></a>
            </div>


        </li>
        <li>
            <div class="bt"> 精选专辑 <span>优选好物清单</span></div>
            <?=AD(cx8)?>
        </li>
        <li>
            <div class="bt"> 先领券后购物 <span>大额优惠券</span></div>
            <div class="ads5">
                <a href="index.php?mod=goods&act=index&code=quan&keyword=&cid=&do=quan#fl" target="_blank" rel="nofollow"><img src="/quan1.png" width="355" height="120" /></a>
                <a href="index.php?mod=goods&act=index&code=quan&keyword=&cid=&do=quan#fl" target="_blank" rel="nofollow"><img src="/quan2.png" width="355" height="120" style="margin-top:1px" /></a>
                <a href="index.php?mod=goods&act=index&code=quan&keyword=&cid=&do=quan#fl" target="_blank" rel="nofollow"><img src="/quan3.png" width="355" height="120" style="margin-top:1px"  /></a>
            </div>
        </li>

    </ul>
</div>

<div class="clear"></div>

<div class="main-title" id="quan">
    <p class='lg'>大额优惠券</p>
    <p class="sm">LARGE COUPON</p>
</div>

<div class="brand_big_list">
    <ul class="goods_items">
        <?php
        foreach($dae as $row){
            ?>
            <li>
                <div class="list-good">
                    <div class="big_list">
                        <a href="<?=$row['url']?>" target="_blank">
	                                <span class="pic">
										<img   src="<?=$row['img']?>"  alt="祖玛珑夏季新款休闲裤男运动裤薄款男裤弹力冰丝空调裤凉凉九分裤" />
									</span></a>
                        <div class="right">
                            <div class="title yahei">
                                <div title="淘宝" class="tb"><i></i></div>                                       			                        <?=$row['title']?></div>
                            <div class="money_bg">
                                <div class="f_money2">优惠券 <span>500</span> 元  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

                                <div class="f_money3">销售额：<span><?=$row['sell']?></span>     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>

                                <div class="price mt-15 pb-5">
                                    <span class="l f-16 ml-20">劵后价：</span>
                                    <span class="l mr-5 mt-5">¥</span>
                                    <span class="l real"><?=$row['quan_price']?>					 </span>
                                </div>
                                <p class="buy"> <a class="left1" href="<?=$row['url']?>"  title="先领券再下单" target="_blank">点我领券——立省500元</a></p>



                            </div>	</div>
                    </div>
                </div></li>
        <?php }?>

    </ul></div>
<div class="clear"></div>
<div class="main-title" id="pinpai">
    <p class='lg'>品牌专区</p>
    <p class="sm">BRAND SALE</p>
</div>
<div class="pinpai-jxhh">
    <div class="jxhh-outer">
        <div class="hot-words title-div"><div class="title-text"><font size="+5" style="vertical-align: top;">●</font> 品牌专区 <div class="title-text2">BRAND SALE</div></div>
            <div class="title-hot-words">
                <a href="/index.php?mod=mall&act=index&cid=14" target="_blank" >综合商场</a>
                <a href="/index.php?mod=mall&act=index&cid=18" target="_blank" >服装类</a>
                <a href="/index.php?mod=mall&act=index&cid=17" target="_blank" >美容化妆</a>
                <a href="/index.php?mod=mall&act=index&cid=19" target="_blank" >母婴类</a>
                <a href="/index.php?mod=mall&act=index&cid=22" target="_blank" >鞋包类</a>
                <a href="/index.php?mod=mall&act=index&cid=16" target="_blank" >数码家电</a>
                <a href="/index.php?mod=mall&act=index&cid=25" target="_blank" >美食酒水</a>
                <a href="/index.php?mod=mall&act=index&cid=18" target="_blank" >生活类</a>
                <a href="/index.php?mod=mall&act=index&cid=20" target="_blank" >图书音像</a>
                <a href="/index.php?mod=mall&act=index&cid=23" target="_blank" >旅行酒店</a>

                <a target="_blank" href="/index.php?mod=mall&act=index"> 查看更多☈ </a>
            </div>
        </div>
    </div>
</div>
<div class="pinpai">

    <div class="ads1">
        <a href="/" target="_blank" rel="nofollow"><img src="/ad6.png" width="392" height="120" /></a>
        <a href="/" target="_blank" rel="nofollow"><img src="/ad7.png" width="392" height="120" /></a>
        <a href="/" target="_blank" rel="nofollow"><img src="/ad8.png" width="392" height="120" /></a>
    </div>

    <div class="home_list">
        <div class="clearfix home-shop" style="position:relative;">

            <ul>
                <?php foreach($malls as $row){?>
                    <li>
                        <a href="<?=$row['view']?>" target="_blank">
                            <img alt="京东商城"  src="<?=$row['img']?>" style="width:120px;height:55px; display:block;margin:5px auto;">
                            <p>最高奖励 <font color="#f43556"><B> <?=$row['fan']?></B></font></p>
                        </a>

                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <!-- 首页商城结束 -->
</div>


<div class="clear"></div>




<div class="wrap-rx" style="margin-top:15px" id="xihuan">
    <div class="main-title">
        <p class='lg'>猜你喜欢</p>
        <p class="sm">GUESS YOU LIKE</p>
    </div>

    <div class="rx-list-wrapper">
        <div class="fixed-outer">
            <div class="rx-list-fixed" data-bk="rx_hot_words">
                <ul class="rx-list clearfix">
                    <?php if(empty($bankuai_code)||$bankuai['fenlei']==1||$bankuai['yugao']==1){?>
                        <div class="jy_auto">
                            <?php if($goods_type||$first_bankuai['yugao']==1){?>
                                <div class="jy_nav" id="<?=$first_bankuai['code']?>_nav">
                                    <?php
                                    if(($bankuai['fenlei']==1 || $_GET['code']=='')&&$goods_type){
                                        $url_canshu=array("code"=>$bankuai_code);
                                        if($_GET['do']!=''){
                                            $url_canshu['cid']=0;
                                            $url_canshu['do']=$_GET['do'];
                                        }
                                        ?>
                                        <div class="up_fenlei">
                                            <a <?php if(empty($_GET['cid'])){?>class="cur"<?php }?> href="<?=u('goods','index',$url_canshu)?>#fl">全部</a>
                                            <?php foreach($goods_type as $k=>$vo){?>
                                                <a href="<?=$vo['url']?>#fl" <?php if($_GET['cid']==$vo['id']){?>class="cur c_border"<?php }?>><?=$vo['title']?></a>
                                            <?php }?>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="rexiao_guang">
    <?php
    foreach($bankuai as $key=>$vo){
    ?>

    <?php if($key==0){
        $bankuai_tpl=$vo['bankuai_tpl'];
        $bankuai_code=$vo['code'];
        include(TPLPATH."/goods/".$bankuai_tpl."/list.tpl.php");
    }
    ?>
</div>
<?php }?>


</div>

<script src="/hdp.js" type="text/javascript"></script>
<?php
$a=$url_arr;
$a['code']=trim($_GET['code']);
$contentData=json_encode($a);
?>
<script>
    $(function() {
        $("img").lazyload({
            effect : "fadeIn"
        });
    });
    (function(){
        // 领券箭头移动
        var direction='right';
        $(".buy-step").hover(function(){
            var css={
                'margin-left':'-12px'
            };
            if(direction==='right'){
                direction='left';
                css['margin-left']='-5px';
            }else{
                direction='right';
            }
            $('.double-arrow span').animate(css,arguments.callee);
        },function(){
            $('.double-arrow span').stop().css("margin-left","-12px");
        })
        // 右侧广告位
        var list = $(".pos-goods-list"),
            goods = $(".pos-goods"),
            hg = goods.outerHeight(true),
            len = goods.length,
            time = 500,
            timer = null;
        list.height(hg * len);
        $(".top-btn").on("click",function(){
            var _this = $(this),
                _top = parseInt(list.css("top"));
            if(_this.hasClass("disabled") || list.is(":animated")){
                return;
            }
            list.animate({
                "top" : _top + hg * 3
            },time,function(){
                if(parseInt(list.css("top")) == 0){
                    _this.addClass("disabled");
                    list.removeClass("top").addClass("bot");
                }else{
                    list.removeClass("bot").addClass("top");
                }
                $(".bot-btn").removeClass("disabled");
            });
        });
        $(".bot-btn").on("click",function(){
            var _this = $(this),
                _top = parseInt(list.css("top"));
            if(_this.hasClass("disabled") || list.is(":animated")){
                return;
            }
            list.animate({
                "top" : _top - hg * 3
            },time,function(){
                if(Math.abs(parseInt(list.css("top"))) == hg * (len - 3)){
                    _this.addClass("disabled");
                    list.removeClass("bot").addClass("top");
                }else{
                    list.removeClass("top").addClass("bot");
                }
                $(".top-btn").removeClass("disabled");
            });
        });
        timer = setInterval(function(){
            if(list.hasClass("bot")){
                $(".bot-btn").trigger("click");
            }else if(list.hasClass("top")){
                $(".top-btn").trigger("click");
            }
        },time * 10);
        $(".pos-right").hover(function(){
            clearInterval(timer);
        },function(){
            timer = setInterval(function(){
                if(list.hasClass("bot")){
                    $(".bot-btn").trigger("click");
                }else if(list.hasClass("top")){
                    $(".top-btn").trigger("click");
                }
            },time * 10);
        })
    })();


</script>
<style type="text/css">
    .ysbj{width:100%;}
    .kjdh{ position:fixed; right:100px; top:180px;width:60px; }
    .kjdh a{ font-size:14px; margin-bottom:5px;color:#000000;border-radius: 50%;cursor:pointer}
    .kjdh a span{float:left;}
    .kjdh a .fldh{float:left; font-size:14px; margin:0px 0 0 22px}
    .kjdh a .banben{float:left; font-size:12px; margin-bottom:5px;width:28px; height:28px; color:#ffffff;}
    .fldh1:hover,.fldh2:hover,.fldh3:hover,.fldh4:hover,.fldh5:hover,.fldh6:hover,.fldh7:hover,.fldh8:hover,.fldh9:hover,.fldh10:hover{background:#000;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh1{background:#FF5151;width:28px; height:28px;border-radius: 50%;  display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh2{background:#2894FF;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh3{background:#02C874;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh4{background:#FF77FF;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh5{background:#00BB00;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh6{background:#AD5A5A;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh7{background:#EA7500;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh8{background:#A5A552;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh9{background:#999999;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}
    #fldh,.fldh10{background:#666666;width:28px; height:28px;border-radius: 50%; display:block; padding:10px 7px 10px 13px;color:#FFFFFF}

</style>

<div class="clear"></div>
<div class="daohang-top">
    <div class="kjdh">
        <a href="#qiang" class="fldh1"><span class="banben">限时抢购</span></a>
        <a href="#baokuan" class="fldh2"><span class="banben">爆款推荐</span></a>
        <a href="#kuaixun" class="fldh3"><span class="banben">最新快讯</span></a>
        <a href="#quan" class="fldh4"><span class="banben">大额好券</span></a>
        <a href="#pinpai" class="fldh5"><span class="banben">品牌专区</span></a>
        <a href="#xihuan" class="fldh6"><span class="banben">猜您喜欢</span></a>
        <a href="/index.php?mod=hezuo&act=index" class="fldh7" target="_blank"><span class="banben">商家合作</span></a>
        </br>
        <a id="kefu1" class="fldh9"><span class="banben">在线客服</span></a>
        <a href="javascript:void(0);" onClick="window.scrollTo(0,0)" class="fldh10"><span class="banben">TOP顶部</span></a>

    </div>
</div>
<div class="clear"></div>


<?php include(TPLPATH.'/inc/footer.tpl.php');?>
