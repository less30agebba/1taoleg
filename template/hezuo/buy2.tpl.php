<?php
include(TPLPATH.'/hezuo/top.tpl.php');
?><div  style="margin:0 auto; width:1200px"> 
   <div class="baomingview">
                <div class="re_content">
                    <form class="GoodAddform" name="form" id="form" method="post" action="/index.php?mod=hezuo&act=to">
                        <ul>
                            <li><label>购买方式：</label>
                                <input name="buytype" type="radio" value="1" checked="checked"> 新购买&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="buytype" type="radio" value="2"> 续费
                            </li>
							
                            <li><label>宝贝链接：</label><input id="WIDsubject" name="WIDsubject" class="txt txt01" value="" type="text">
                                <p id="good_link_error" style="display:none;" class="s1"></p>
                                <p class="tips"> 标准格式为：http://item.taobao.com/item.htm?id=22453800680 </p>
                            </li>

                            <li>
                                <label>购买套餐：</label>
                                <div style="width: 680px; float: left;line-height:30px;font-size:14px">
                                                                        <div><label style="width:100%;display: block; height:55px;line-height:25px;font-size: 14px;" for="product_7"><input type="radio" name="product_id" id="product_7" value="7" checked/> 40天：30天+赠送10天推广期限（今日爆款+无线端+淘宝优惠券,有好货,必买清单,爱逛街,微淘,手机专享,）推广费用一天25元</label></div>
                                                                        <div><label style="width:100%;display: block; height:55px;line-height:25px;font-size: 14px;" for="product_8"><input type="radio" name="product_id" id="product_8" value="8" /> 70天：60天+赠送10天推广期限（今日爆款+无线端+淘宝优惠券,有好货,必买清单,猜你喜欢,爱逛街,微淘,手机专享,抖音短视频，首页大图展示5天）</label></div>
                                                                        <div><label style="width:100%;display: block; height:55px;line-height:25px;font-size: 14px;" for="product_9"><input type="radio" name="product_id" id="product_9" value="9" /> 120天：90天+赠送30天推广期限（今日爆款+无线端+淘宝优惠券,有好货,必买清单,猜你喜欢,爱逛街,微淘,手机专享,抖音短视频,首页大图展示15天,置顶10天）</label></div>
                                                                        <div><label style="width:100%;display: block; height:55px;line-height:25px;font-size: 14px;" for="product_10"><input type="radio" name="product_id" id="product_10" value="10" /> 210天：180天+赠送30天推广期限（今日爆款+无线端+淘宝优惠券,有好货,必买清单,猜你喜欢,爱逛街,微淘,手机专享,抖音短视频,首页大图展示30天,置顶30天）</label></div>
                                                                        <div><label style="width:100%;display: block; height:55px;line-height:25px;font-size: 14px;" for="product_11"><input type="radio" name="product_id" id="product_11" value="11" /> 480天：360天+赠送120天抢购展示推广期限 首页钻展60天 置顶60天 淘宝店铺代报名活动（合作直接咨询客服）</label></div>
                                                                        <div><label style="width:100%;display: block; height:55px;line-height:25px;font-size: 14px;" for="product_12"><input type="radio" name="product_id" id="product_12" value="12" /> 720天：全店全方位策划+匹配资深运营顾问                       （ 合作直接咨询客服）</label></div>
                                                                  </div> 

                            </li>

                            <li><label>商品类型：</label>
							<input name="adtype" type="radio" value="ggw" > 首页广告位&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="adtype" type="radio" value="baokuan" checked="checked"> 爆款推荐&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="adtype" type="radio" value="quan"> 优惠券板块&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="adtype" type="radio" value="jd"> 京东商品&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="adtype" type="radio" value="pdd"> 拼多多商品&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="adtype" type="radio" value="budan" > 其它服务
                            </li>

                            <li class="tipss">
                                <label>旺旺：</label>
                                <input name="weixin" class="txt good_price" value="" type="text">
                            </li>

                            <li class="tipss">
                                <label>手机/微信：</label>
                                <input name="wangwang" class="txt good_price" value="" type="text">
                            </li>
							</ul>
                   
                        <div class="anniu">
						<input type="hidden" id="WIDout_trade_no" name="WIDout_trade_no" type="text"/>
							<input type="hidden" id="WIDtotal_amount" name="WIDtotal_amount" type="text"/>
                            <input name="dgg_page"  value="1" type="hidden">
                            <input name="submit" value="提交报名" id="submit" class="smt submit" type="submit">
                        </div>    
                    </form>
                </div>
            </div> 
   </div>
			<script language="javascript">
			function GetDateNow() {
		var vNow = new Date();
		var sNow = "";
		sNow += String(vNow.getFullYear());
		sNow += String(vNow.getMonth() + 1);
		sNow += String(vNow.getDate());
		sNow += String(vNow.getHours());
		sNow += String(vNow.getMinutes());
		sNow += String(vNow.getSeconds());
		sNow += String(vNow.getMilliseconds());
		document.getElementById("WIDout_trade_no").value =  sNow;
	}
	GetDateNow();
</script>


  

<?php include(TPLPATH.'/inc/footer.tpl.php'); ?>