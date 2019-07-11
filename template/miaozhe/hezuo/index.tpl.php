<?php
include(TPLPATH.'/hezuo/top.tpl.php');
?>


            <div id="content" class="wrapper">
			<div class="content">
<div class="bt">参加9.9元、19.9元和独家折扣活动能获得什么</div>
<img alt="" src="<?=TPLURL?>/hezuo/images/1.jpg" width="921" height="170" class="img-get">
<p>通过<?=WEBNICK?>获得以下优势推广资源，参加<?=WEBNICK?>特价活动的商家将可以获得大量的曝光宣传：<br />
1、<span class="highlight">高流量</span>：我们每天花千元成本的广告费用去做宣传，上万优质买家用户；<br />
2、<span class="highlight">好品牌</span>：<?=WEBNICK?>一直在走品牌路线，数百家媒体正在为我们报道，具体媒体后续会一一公布，请随时关注我们；<br />
3、<span class="highlight">强渠道</span>：<?=WEBNICK?>官方网站、手机客户端、微信平台等多渠道曝光，数十万微博微信粉丝互动推荐，邮件、短信、站内信等不定期推送；</p>
</div>

<div class="content">
<div class="bt">商家报名流程</div>
<img alt="" src="<?=TPLURL?>/hezuo/images/2.jpg" width="916" height="150" class="img-lc">
<p>1、商家报名<?=WEBNICK?>促销活动必须是参加淘宝客的商品，并提供独家【<?=WEBNICK?>】促销价格！<br />
2、要求提供商家所在行业的热销商品，高性价比的商品可优先推荐；商品类目主要包含服装、鞋包、居家、配饰等；要求商品质量有保证、库存足够、性价<br />比高、符合大众需求；<br />
3、活动期间请提供优质服务，并能做好售后工作，如有投诉能配合工作人员进行处理。<br />
4、请认真阅读<?=WEBNICK?>10元购及品牌特卖报名活动流程及要求（店铺及商品要求）： <a class="rule-entry" href="<?=u('hezuo','xuzhi')?>"><font color="#0099CC">[ <?=WEBNICK?>报名规则 ]</font></a><br /></p>
</div>
</div>

		</div>
	</div>
	</div>
</div>




<div class="content wrapper">
        		<div class="z-sellpartners clearfix">
                <?php foreach($bankuai as $k=>$v){
					if(empty($v['url'])){
						$view_url=u('hezuo','baoming',array('code'=>$v['code']));
					}else{
						$view_url=$v['url'];
					}
				?>
                   <a class="z-sellpartners-fir"  <?php if($v['url']){?>target="_blank"<?php }?>  href="<?=$view_url?>">           
                       <span class="icon"><img src="<?=$v['bankuai_img']?>" /></span>
                       <h3><?=$v['title']?></h3>
                          <?=$v['bankuai_desc']?>
                       <p class="baoming-icon"><i class="btn btn-1"><span>立即报名</span></i></p>
                   </a>
                <?php }?>
           </div>
        </div>
    </div>    
</div>
<?php include(TPLPATH.'/inc/footer.tpl.php'); ?>