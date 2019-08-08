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
                                                                        <div><label style="width:100%;display: block;height:55px;line-height:25px; font-size: 14px;" for="product_1"><input type="radio" name="product_id" id="product_1" value="1" checked/> 5天：全首页霸屏大图（淘客联盟群推,淘宝优惠券,有好货,必买清单,微淘,手机专享,）推广费用天一300元</label></div>
                                                                        <div><label style="width:100%;display: block;height:55px;line-height:25px; font-size: 14px;" for="product_2"><input type="radio" name="product_id" id="product_2" value="2" /> 40天：首页限时抢购30天+赠送10天（淘客联盟群推,淘宝优惠券,有好货,必买清单,爱逛街,微淘,手机专享,首页大图展示10天,）</label></div>
                                                                        <div><label style="width:100%;display: block;height:55px;line-height:25px; font-size: 14px;" for="product_3"><input type="radio" name="product_id" id="product_3" value="3" /> 90天：首页限时抢购60天+赠送30天（淘客联盟群推,淘宝优惠券,有好货,必买清单,爱逛街,微淘,手机专享,抖音短视频,首页大图展示20天,）</label></div>
                                                                        <div><label style="width:100%;display: block;height:55px;line-height:25px; font-size: 14px;" for="product_4"><input type="radio" name="product_id" id="product_4" value="4" /> 150天：首页限时抢购120天+赠送30天（淘客联盟群推,淘宝优惠券,有好货,必买清单,猜你喜欢,爱逛街,微淘,手机专享,抖音短视频,首页大图展示30天,）</label></div>
                                                                        <div><label style="width:100%;display: block;height:55px;line-height:25px; font-size: 14px;" for="product_5"><input type="radio" name="product_id" id="product_5" value="5" /> 210天：首页限时抢购180天+赠送30天（淘客联盟群推,淘宝优惠券,有好货,必买清单,猜你喜欢,爱逛街,微淘,手机专享,抖音短视频,首页大图展示30天,））</label></div>
                                                                        <div><label style="width:100%;display: block;height:55px;line-height:25px; font-size: 14px;" for="product_6"><input type="radio" name="product_id" id="product_6" value="6" /> 480天：360天+赠送120天抢购展示推广期限 首页钻展，60天展示 淘宝店铺代报名活动（合作直接咨询客服）</label></div>
                                                                  </div> 
                            </li>

                            <li><label>商品类型：</label>
							<input name="adtype" type="radio" value="ggw" checked="checked"> 首页广告位&nbsp;&nbsp;&nbsp;&nbsp;
                                <input name="adtype" type="radio" value="baokuan"> 爆款推荐&nbsp;&nbsp;&nbsp;&nbsp;
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