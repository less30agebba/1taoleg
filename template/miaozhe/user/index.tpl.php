<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
if($dduser['email']==''){
	jump(u('user','info',array('from'=>u('user','index'))),'请先绑定邮箱');
}
function act_user_index2($pagesize=10,$field='*',$field2='*'){
	global $duoduo;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	$tx_tool=include(DDROOT.'/data/tx_tool.php');
	$mingxi_tpl=include(TPLURL.'/user/mingxi.php'); //明细结构数据
	$keyword=$_GET["keyword"]; 
	$do=empty($_GET['do'])?'in':$_GET['do'];
	$page = !($_GET['page'])?'1':intval($_GET['page']);
	
	$page2=($page-1)*$pagesize;
	if($do=='in'){
		$total = $duoduo->count('mingxi',"uid='".$dduser['id']."'");	
		$mingxi=$duoduo->select_all('mingxi',$field,"uid='".$dduser['id']."' and (jifen>0 or money>0 or jifenbao>0) order by addtime desc limit $page2,$pagesize");
	}
	elseif($do=='tixian'){
		$total = $duoduo->count('tixian',"uid='".$dduser['id']."' and del=0");	
		$mingxi=$duoduo->select_all('tixian',$field2,"uid='".$dduser['id']."' and del=0 order by id desc limit $page2,$pagesize");
		$tixian_arr=array(0=>'<span style="color:#ff3300">提取待审核</span>',1=>'<span style="color:#009900">提取成功</span>',2=>'<span style="color:#333333">提取失败</span>');
	}
	elseif($do=='tui'){
		$total = $duoduo->count('mingxi',"uid='".$dduser['id']."' and shijian in (13,15)");	
		$mingxi=$duoduo->select_all('mingxi',$field,"uid='".$dduser['id']."' and shijian in (13,15) order by id desc limit $page2,$pagesize");
	}
	elseif($do=='kou'){
		$total = $duoduo->count('mingxi',"uid='".$dduser['id']."' and shijian in (21)");	
		$mingxi=$duoduo->select_all('mingxi',$field,"uid='".$dduser['id']."' and shijian in (21) order by id desc limit $page2,$pagesize");
	}
	if ($do == 'yaoqing') {
		$total = $duoduo -> count('user', " tjr='" . $dduser["id"] . "'");
		$tuiguang = $duoduo -> select_all('user',$field, " tjr='" . $dduser["id"] . "' order by id desc limit $page2,$pagesize");

		foreach($tuiguang as $k => $row) {
			$tuiguang[$k]['yj'] = (float)$duoduo -> select('tgyj', 'money', 'tjrid="' . $dduser["id"] . '" and uid="' . $row['id'] . '"');
		} 
	}
	unset($duoduo);
	$parameter['tuiguang']=$tuiguang;
	$parameter['tx_tool']=$tx_tool;
	$parameter['mingxi_tpl']=$mingxi_tpl;
	$parameter['keyword']=$keyword;
	$parameter['do']=$do;
	$parameter['page']=$page;
	$parameter['page2']=$page2;
	$parameter['total']=$total;
	$parameter['pagesize']=$pagesize;
	$parameter['mingxi']=$mingxi;
	$parameter['rec']=ddStrCode($dduser['id'],DDKEY);
	$parameter['tixian_arr']=$tixian_arr;
	return $parameter;
}

if($dduser['tbnick']=='' && TAOTYPE==1){
		$tbnick_tip=1;
	}
	else{
		$tbnick_tip=0;
	}
if($dduser['alipay']=='' && $dduser['tenpay']=='' && $dduser['bank_code']==''){
		$caiwu_tip=1;
	}
	else{
		$caiwu_tip=0;
	}
	
	if($webset['sms']['open']==1 && ($dduser['mobile']=='' || $dduser['mobile_test']==0)){
		$mobile_tip=1;
	}
	else{
		$mobile_tip=0;
	}
if($dduser['txstatus']=='1'){
	$txstate_msg = "您当前有一笔提取申请正在处理当中，请耐心等待！ <a href='".u('user','mingxi',array('do'=>'out'))."'>>>查看详细</a>";
}else{
	if($dduser['money']==0){
		$txstate_msg = "感谢您使用".WEBNAME."，当您购物累积获得返利超过".$webset['tixian']['limit']."元，就可以申请提取。祝您购物愉快！";
	}elseif($dduser['live_money']<$webset['tixian']['limit']){
		$txstate_msg = '亲！您当前的可用余额是 <span>'.$dduser['live_money'].'</span> 元，还差 <span>'.($webset['tixian']['limit']-$dduser['live_money']).'</span> 元就可以申请提取了！';
	}else{
		$txstate_msg = "亲！您当前的可用余额是<span>".$dduser['live_money']."</span> 元，可以申请提取了！&nbsp;&nbsp;&nbsp;&nbsp;<a href='".u('user','tixian',array('type'=>2))."'><img src='".TPLURL."/inc/images/user/sqtx.gif'/></a>";
	}
}

if(JIFENBAO==2){
	if($dduser['live_jifenbao']>0){
		$tbtxstate_msg = "亲！您当前的可用".TBMONEY."是<span>".$dduser['live_jifenbao'].TBMONEYUNIT."</span>，可以兑换商品了！&nbsp;&nbsp;&nbsp;&nbsp;<img style='margin-bottom:-10px' src='images/face/2.gif'/><a href='".u('huan','list')."'><b style='color:red;cursor:pointer'>兑换商品</b>>>></a>";
	}
	else{
		$tbtxstate_msg = "亲！您当前的可用".TBMONEY."是<span>".$dduser['live_jifenbao'].TBMONEYUNIT."</span>，抓紧购物吧！";
	}
}
else{
	if($dduser['tbtxstatus']=='1'){
		$tbtxstate_msg = "您当前有一笔".TBMONEY."提取申请正在处理当中，我们将支付到您的支付宝中，请注意查收！ <a href='".u('user','mingxi',array('do'=>'out'))."'>>>查看详细</a>";
	}else{
		if($dduser['jifenbao']==0){
			$tbtxstate_msg = "感谢您使用".WEBNAME."，当您购物累积获得返利超过".$webset['tixian']['tblimit'].TBMONEYUNIT.TBMONEY."，就可以申请提取。祝您购物愉快！";
		}elseif($dduser['live_jifenbao']<$webset['tixian']['tblimit']){
			$tbtxstate_msg = '亲！您当前的可用'.TBMONEY.'是 <span>'.$dduser['live_jifenbao'].TBMONEYUNIT.'</span>，还差 <span>'.($webset['tixian']['tblimit']-$dduser['live_jifenbao']).'</span>'.TBMONEY.'就可以申请提取了！';
		}else{
			$tbtxstate_msg = "亲！您当前的可用".TBMONEY."是<span>".$dduser['live_jifenbao'].TBMONEYUNIT."</span>，可以申请提取了！&nbsp;&nbsp;&nbsp;&nbsp;<a href='".u('user','tixian',array('type'=>1))."'><img src='".TPLURL."/inc/images/user/sqtx2.gif'/></a>";
		}
	}
}
$sign=0;
	if($webset['sign']['open']==1){
		$todaytime=strtotime(date('Y-m-d 00:00:00'));
		if($dduser['signtime']<$todaytime){
			$sign=1;
		}
		else{
			$sign=0;
		}
	}
if($sign==1){
	$sign_word='亲！您今天还没有签到哦！签到可获得';
	$sign_get='';
	if($webset['sign']['money']>0){
		$sign_get.='<span>'.$webset['sign']['money'].'</span>元 ';
	}
	if($webset['sign']['jifenbao']>0){
		$sign_get.='<span>'.$webset['sign']['jifenbao'].'</span>'.TBMONEY;
	}
	if($webset['sign']['jifen']>0){
		$sign_get.='<span>'.$webset['sign']['jifen'].'</span>积分 ';
	}
	$sign_word=$sign_word.$sign_get;
	$sign_word.='&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" id="sign"><img src="'.TPLURL.'/inc/images/user/qd.gif"/></a>';
}
elseif($sign==0){
    $sign_word='<span style="color:#999">亲！您今天的签到奖励已经领取完毕，明天继续吧！</span> ';
}

$js_sign_get_tip=strip_tags($sign_get);
if($js_sign_get_tip!=''){
	$js_sign_get_tip='签到完成，获得'.$js_sign_get_tip;
}
else{
	$js_sign_get_tip='签到完成';
}
?>
<?php
$parameter=act_user_index2();
extract($parameter);
$js[]=TPLURL."/yaoqing/js/jquery.js";
$js[]=TPLURL."/yaoqing/js/ZeroClipboard.js";
$css[]=TPLURL."/inc/css/usercss.css";
include(TPLPATH."/inc/header.tpl.php");
?>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script>
$(function(){
    $('#sign').click(function(){
		if(typeof post=='undefined'){
			post=1;
			$.ajax({
		    	url:'<?=u('ajax','sign')?>&time=<?=TIME?>',
				dataType:'jsonp',
				jsonp:"callback",
				success: function(data){
			    	if(data.s==0){
				    	alert(errorArr[data.id]);
					}
					else if(data.s==1){
						alert('<?=$js_sign_get_tip?>');
				    	location.replace(location.href);
					}
		    	}
			});
		}
    });
	
	$('.tubiao_closew').click(function(){
	    $('.adminright_ts1').fadeOut('slow');
		return false;
	});
})

</script>
<style type="text/css">
table,table td,table th{border:1px solid #e1e1e1;border-collapse:collapse; height:50px; font-size:16px}
</style>
<script type="text/javascript"> 
    function jsCopy(e){ 
        e.select(); //选择对象 
        document.execCommand("Copy"); //执行浏览器复制命令

       alert("已复制好，可贴粘。"); 
    } 
</script> 
<div class="mainbody">
	<div class="mainbody1200">
    	<div class="adminmain">
    <?php if($dd_tpl_data['fanli-kg']['open']==0){?>  <?php include(TPLPATH."/user/top.tpl.php");?><?php }?>
        <div class="adminleft">
        	<?php include(TPLPATH."/user/left.tpl.php");?>
          </div>
        	<div class="adminright">
			 <?php if($webset['sign']['open']==1){?>
                <div class="adminright_qd">
                    <div class="tishitubiao"></div>
                    <p><?=$sign_word?></p>
                </div>
                <?php }?>
				 <?php if($dd_tpl_data['fanli-kg']['open']==0){?>     <?php if(FANLI==1){?>
              <div class="adminright_qd">
                    <div class="tishitubiao"></div>
                    <p><?=$txstate_msg?></p>
                </div>
                <div class="adminright_qd">
                    <div class="tishitubiao"></div>
                    <p><?=$tbtxstate_msg?></p>
                </div>
                <?php }?><?php }?>
                <?php include(TPLPATH."/user/notice.tpl.php");?>
                <div class="userdaohang">
                    <ul>
                    <li id="in"><a href="<?=u('user','index',array('do'=>'in'))?>">我的收入记录</a> </li>
                   <?php if($webset['user']['shoutu']==1){?> <li id="yaoqing" ><a href="<?=u('user','index',array('do'=>'yaoqing'))?>">我的邀请记录</a> </li>
                    <li id="yao" ><a href="<?=u('user','index',array('do'=>'yao'))?>">邀请好友赚钱</a> </li> <?php }?>
                   <?php if($dd_tpl_data['fanli-kg']['open']==0){?> <li id="tixian" ><a href="<?=u('user','index',array('do'=>'tixian'))?>">我的提取记录</a> </li> <?php }?>
                    </ul>
                    <script>
                    $(function(){
					    $('.userdaohang li#<?=$do?>').addClass('userdaohang_xz');
					})
                    </script>
				<div class="tabs-nav"> 

                 <div class="btn withdraw">
                  <?php if($dd_tpl_data['fanli-kg']['open']==0){?>  <a href="<?=u('user','tixian',array('type'=>'1'))?>">申请提现</a><?php }?>
                </div></div>
              	</div>
				
				
                <div class="admin_table" style="border:none; padding:0">
                    <table width="928" border="0" cellpadding="0" cellspacing="1">
                    <?php if($do=='in'){?>	
				<?php if($webset['user']['shoutu']==1){?> 	<tr><td colspan="7"  style="color:#E4393C; padding-left:35px; margin-top:-15px">  
					   <div class="step-one" style="margin-left:40px; margin-top:20px"> 
					   <span class="bt">邀请好友拿奖励：发送邀请链接，邀请越多、奖励越多！</span>
					   <div class="step-links"><span class="i-input"><i class="i-link"></i><input type="text" id="invite_code" value="<?=$webset['tgurl']?>rec=<?=$rec?>"></span><span> <INPUT class=copy-link onclick="jsCopy(document.getElementById('invite_code'))" style="border:0px" value="复制" type="button" /> </span><span><div id="invite-act"></div></span>
					   </DIV>
					 
					 
					   </td></tr> <?php }?>
                      <tr>
					  	<td colspan="5" align="center" style="color:#E4393C;">注意：以下站内收入明细表，交易获得的<?=TBMONEY?>申请提取后，我们将存入到您留下的支付宝账户！</td>
                      </tr>
					  <tr>
                        <th width="22%">奖励时间</th>
                        <th width="11%" height="50">收入来源</th>
                        <th width="35%" height="50">收入说明</th>
                        <th width="15%">获得余额</th>
                        <th width="20%">获得<?=TBMONEY?></th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td><?=$r["addtime"]?></td>
                        <td height="33"><?=$mingxi_tpl[$r["shijian"]]['title']?></td>
                        <td><?=mingxi_content($r,$mingxi_tpl[$r["shijian"]]['content'])?></td>
                        <td><font color="#FF99CC"><?=$r["money"]?><span style="font-size:14px">（元）</span></font></td>
                        <td><font color="#FF0000">+<?=jfb_data_type($r["jifenbao"])?><span style="font-size:14px">（<?=TBMONEY?>）</span></font></td>
                      </tr>
                      <?php }?>
                     <?php }?>
					 
					 
					 <?php if($do=='list'){?> 
                      <tr>
                        <th width="200">邀请时间</th>
                        <th width="150" height="26">用户名</th>
                        <th width="70px">第几代</th>
                        <th width="150px">推荐人</th>
                        <th width="80">登录</th>
                        <th width="118">QQ</th>
                        <th width="70">朋友圈</th>
                      </tr>
					  
                       <?php foreach($shifu_user as $k=>$r){?>
                      <tr>
                        <td><?=$r['regtime']?></td>
                        <td height="33"><?=$r['ddusername']?></td>
                        <td><font color="#FF6600">第<?=$r['daishu']?>代</font></td>
                        <td><?=$duoduo->select('user','ddusername','id="'.$r["tjr"].'"')?></td>
                        <td><?=$r['loginnum']?>次</td>
                        <td><?=$r['qq']?></td>
                        <td><?=$r['haoyou']?>人</td>
                      </tr>
                      <?php }?>
					  <?php }?> 
					  
                       <?php if($do=='yao'){?>
					     <tr>
					  	<td colspan="4" align="center" style="color:#E4393C;">邀请好友您将获得<?=$webset['tgbl']*100?>%下线提成。最高可获得<b><font color="#FF0000"><?=$webset['tgfz']?></font></b>元/每位好友！</td>
                      </tr>
					   <tr>	<td colspan="7"  style="color:#E4393C; padding-left:35px">  
					   <div class="step-one" style="margin-left:40px; margin-top:20px"><span class="bt">邀请方法一：发送邀请链接</span>
					   <div class="step-links"><span class="i-input"><i class="i-link"></i><input type="text" id="invite_code" value="<?=$webset['tgurl']?>rec=<?=$rec?>"></span><span> <INPUT class=copy-link onclick="jsCopy(document.getElementById('invite_code'))" style="border:0px" value="复制" type="button" /> </span><div id="invite-act"></div>
					   
					   <div class="step-one noline"><span class="bt">邀请方法二：分享到朋友圈</span>
					   <div class="step-links"><span class="i-input fr-cle"><i class="i-link"></i><textarea id="share_text">我刚加入<?=WEBNICK?>，通过它去淘宝网购物，最高可获得90%的返利，真心超赞！推荐给大家一起省钱哦~<?=$webset['tgurl']?>rec=<?=$rec?>！</textarea></span></div>
					   <div class="share-adderss">
					   <a href="javascript:void(0" class="qzone-but"><i class="qzone"></i>QQ空间</a>
					   <a href="javascript:void(0" class="sina-but"><i class="sina"></i>新浪微博</a>
					   <a href="javascript:void(0" class="tqq-but"><i class="tqq"></i>腾讯微博</a>
					   <a href="javascript:void(0" class="qqpy-but" style="margin-right:0px !important;"><i class="qqpy"></i>人人网</a></div>
					   </td></tr>
					     <?php }?> 
						 
						 
					    <?php if($do=='yaoqing'){?>
                      <tr  id="invite_copy">
					  	<td colspan="7" align="center" style="color:#E4393C;">您一共邀请了<font style="font-size:24px; font-weight:bold" color="#0099FF"> 
				  	    <?=$total1?></font> 人，获得奖励<font style="font-size:24px; font-weight:bold" color="#0099FF"><?=$total2?> </font>元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;              
					    </td> 	
                      </tr>
                        <tr>
                        <th width="25%">注册时间</th>
                        <th width="20%">徒弟昵称</th>
                        <th width="20%">徒弟QQ</th>
                        <th width="15%">登录次数</th>
                        <th width="20%">获得奖励</th>
                      </tr>
                      <?php foreach($tuiguang as $arr){?>
                      <tr>
                        <td><?=$arr['regtime']?></td>
                        <td height="33"><?=$arr['ddusername']?></td>
                        <td><?=qq($arr["qq"])?></td>
                        <td><?=$arr['loginnum']?></td>
                        <td><font color="#FF0000">+<?=$arr['yj']?>元</font></td>
                      </tr>
                      <?php }?>
                     <?php }?>
					 
                     <?php if($do=='tixian'){?>
                      <tr>
					  	<td colspan="4" align="center" style="color:#E4393C;">注意：申请的提取一般8小时之内处理，如需快速审核请联系在线客服！&nbsp;&nbsp;<a href="tencent://message/?uin=<?=$dd_tpl_data['qq']?>"  rel="nofollow"><img src="<?=TPLURL?>/inc/images/user/qq.png" width="74" height="22" alt=""></a></td>
                      </tr>
                     <tr  id="invite_copy">
                        <th width="25%">提取时间</th>
                        <th width="25%" height="26">支付宝账号</th>
                        <th width="25%"><?=TBMONEY?></th>
                        <th width="25%">提取状态</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td><?=date('Y-m-d H:i:s',$r["addtime"])?></td>
                        <td height="50"><?=$tx_tool[$r["tool"]].'：'.$r["code"]?></td>
                        <td><font color="#FF0000"><?=$r["type"]==1?(jfb_data_type($r["money"]).' '.TBMONEY):$r["money"].' 元'?></font></td>
                        <td><?=$tixian_arr[$r["status"]]?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                     
                     <?php if($do=='tui'){?>
                      <tr bgcolor="#FBF7D5">
                        <th width="120" height="26">事件</th>
                        <th>说明</th>
                        <th width="60">金额</th>
                        <th width="60"><?=TBMONEY?></th>
                        <th width="60">积分</th>
                        <th width="130">时间</th>
                      </tr>
                      <?php foreach($mingxi as $r){?>
                      <tr>
                        <td height="33"><?=$mingxi_tpl[$r["shijian"]]['title']?></td>
                        <td style="text-align:left"><?=mingxi_content($r,$mingxi_tpl[$r["shijian"]]['content'])?></td>
                        <td><?=$r["money"]?></td>
                        <td><?=jfb_data_type($r["jifenbao"])?></td>
                        <td><?=$r["jifen"]?></td>
                        <td><?=$r["addtime"]?></td>
                      </tr>
                      <?php }?>
                     <?php }?>
                     
                   
                    </table> <?php if($do=='tui'){?> 
                    <?php if($total==0){?>
                    <div align="center"><div style="margin-top:105px; margin-bottom:40px; text-align:center"><img src="<?=TPLURL?>/inc/images/user/wu.jpg" border="0" /></div> </div>
                    <?php }?>    <?php }?> 
              </div>
              <div class="page" style="clear:both; margin-bottom:25px"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)));?></div>
            </div>
    	</div>
  </div>
</div>

<?php if($tbnick_tip==1 || (TAOTYPE==2 && ($dduser['alipay']=='' || $dduser['qq']=='' || $dduser['mobile']==''))){?>
<div class="jc_fullbg"></div>
<div class="jc_bg">
	<div class="jc_box">
		<?php if($tbnick_tip==1){?>
		<img src="<?=TPLURL?>/inc/images/user/jc_tbbd.png" border="0" usemap="#Map"/>
		<map name="Map">
  			<area shape="rect" coords="480,20,500,40" href="javascript:void(0);" id="close_bd">
			<area shape="rect" coords="214,235,338,278" href="<?=u('user','info',array('do'=>'tbnick'))?>">
		</map>
		<?php }else{?>
		<img src="<?=TPLURL?>/inc/images/user/jc_wszl.png" border="0" usemap="#Map"/>
		<map name="Map">
  			<area shape="rect" coords="480,20,500,40" href="javascript:void(0);" id="close_bd">
			<area shape="rect" coords="214,235,338,278" href="<?=u('user','info')?>">
		</map>
		<?php }?>
	</div>
</div>
<script type="text/javascript">
(function($) {
	if(getCookie('jc_user')!=1){
		var hei = $("body").height();
		var top = $(window).height() / 2 - $(".jc_box").height() / 2;
		var left = $(window).width() / 2 - $(".jc_box").width() / 2;
		$(".jc_bg").css("left", left);
		$(".jc_bg").css("top", top);
		$(".jc_fullbg").css('height',hei);
		$(".jc_fullbg").show();
		$(".jc_bg").show();
		$("#close_bd").on("click",function(){
			$(".jc_fullbg").hide();
			$(".jc_bg").hide();
		})
		setCookie('jc_user',1);
	}
})(jQuery);
</script>
<?php }?> 
<script type="text/javascript">
$(function() {
 //分享
    $(".share-adderss a").click(function() {
		<?php if($dduser['name']=NULL || $dduser['name']==''){?>
        alert('亲，您还没有登录哦！');
		window.location.href='<?=u('user','login')?>';
		<?php }else{?>
        var base = "";
        var url = "";
        var name;
        //网页名称，可为空;
        var fhUrl = encodeURIComponent("<?=$webset['tgurl']?>rec=<?=$dduser['id']?>");
        var logo = encodeURIComponent("cs.vipduo.com/template/butieba/img/yaoqing.jpg");
        switch ($(this).attr("class")) {
            case "sina-but":
            fhUrl = "";
            name = "<?=WEBNICK?>-新浪";
            base = "http://service.weibo.com/share/share.php?url={0}&appkey=2514801882&title={1}&pic={2}";
            url = String.Format(base, fhUrl, encodeURIComponent("我刚加入<?=WEBNICK?>，通过它去淘宝网购物，最高可获得90%的返利，真心超赞！推荐给大家一起省钱哦~<?=$webset['tgurl']?>rec=<?=$dduser['id']?>"), logo);
            break;
            case "tqq-but":
            name = "<?=WEBNICK?>-腾讯微博";
            base = "http://v.t.qq.com/share/share.php?appkey=215345&site=&url={0}&title={1}&pic={2}";
            url = String.Format(base, fhUrl, encodeURIComponent("我刚加入<?=WEBNICK?>，通过它去淘宝网购物，最高可获得90%的返利，真心超赞！推荐给大家一起省钱哦~<?=$webset['tgurl']?>rec=<?=$dduser['id']?>"), logo);
            break;
            case "qzone-but":
            name = "<?=WEBNICK?>-QQ空间";
            base = "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url={0}&title={1}&pics={2}&desc={3}&summary={4}&site={5}";
            url = String.Format(base, fhUrl, encodeURIComponent("我刚加入<?=WEBNICK?>，通过它去淘宝网购物，最高可获得90%的返利，真心超赞！推荐给大家一起省钱哦~<?=$webset['tgurl']?>rec=<?=$dduser['id']?>"), logo, encodeURIComponent("赚钱是一种能力，花钱是一种技术，我能力有限，技术却很高。幸好及时发现了<?=WEBNICK?>，挣钱能力虽然没涨，但省钱能力猛增！！"), encodeURIComponent("<?=WEBNICK?>现有400多家合作商城，同时提供上万张优惠券任你领，已有超过2000万的人正在使用<?=WEBNICK?>省钱，再不注册，你就out了~"), "<?=URL?>");
            break;
            case "qqpy-but":
            name = "<?=WEBNICK?>-人人";
            base = "http://widget.renren.com/dialog/share?resourceUrl={0}&title={4}&pic={2}&description={3}&message={1}";
            url = String.Format(base, fhUrl, encodeURIComponent("听说，每个网购前先上<?=WEBNICK?>的孩纸上辈子都是折翼的天使。如果你遇到，请好好珍惜TA，也好好珍惜<?=WEBNICK?>！！！"), logo, encodeURIComponent("<?=WEBNICK?>现有400多家合作商城，同时提供上万张优惠券任你领，已有超过2000万的人正在使用<?=WEBNICK?>省钱，再不注册，你就out了~"), encodeURIComponent("我刚加入<?=WEBNICK?>，通过它去淘宝网购物，最高可获得90%的返利，真心超赞！推荐给大家一起省钱哦~<?=$webset['tgurl']?>rec=<?=$dduser['id']?>"));
            break;
            default:
            return false;
        }
        var iWidth = 650;
        //弹出窗口的宽度;
        var iHeight = 700;
        //弹出窗口的高度;
        var iscrollbars = "yes";
        //弹出窗口的是否有滚动条(auto/yes/no);
        var iresizable = "yes";
        //弹出窗口是否可调整大小(yes/no);
        var iTop = (window.screen.availHeight - 30 - iHeight) / 2;
        //获得窗口的垂直位置;
        var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;
        //获得窗口的水平位置;
        try {
            if (name == "<?=WEBNICK?>-新浪") {
                window.open(url, name, 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no');

            } else {
                window.open(url, name, 'width=700, height=680, top=' + iTop + ', left=' + iLeft + ', toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no');

            }

        } catch(e) {
            window.open(url);
        }
        return false;
		<?php }?>
    });
    //复制
    var invite_timeout = null;
    function copyText() {
        var clip = new ZeroClipboard.Client();
        clip.setHandCursor(true);
        clip.setCSSEffects(true);
        $(window).resize(function() {
            clip.reposition();
        });
        clip.addEventListener("mouseOver", 
        function(client) {
            client.setText($('#invite_code').val());
        });
        clip.addEventListener('complete', 
        function(client) {
            if (CurrentUser.UserId != undefined || CurrentUser.UserId != "") {
                if ($("#invite-act").find(".tip-success").length > 0) {
                    clearTimeout(invite_timeout);
                    invite_timeout = setTimeout(function() {
                        $("#invite-act").find(".tip-success").remove();

                    },
                    3000);
                } else {
                    $("#invite-act").append('<span class="tip-success"><i class="ico-invite i-invite-true"></i>链接复制成功</span>');
                    invite_timeout = setTimeout(function() {
                        $("#invite-act").find(".tip-success").remove();

                    },
                    3000);
                }
            }
        });
        clip.glue("invite_copy");
    }
    copyText();
})
</script>
<?php include(TPLPATH."/inc/footer.tpl.php"); ?>