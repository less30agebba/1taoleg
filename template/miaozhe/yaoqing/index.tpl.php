<?php
if (!defined('INDEX')) {
	exit('Access Denied');
} 
include(TPLPATH.'/admin_set/vipduo.tpl.php');
$css[]=TPLURL."/yaoqing/index.css";
$js[]=TPLURL."/yaoqing/js/jquery.js";
$js[]=TPLURL."/yaoqing/js/ZeroClipboard.js";
include(TPLPATH.'/yaoqing/header.tpl.php');
?>

<script type="text/javascript"> 
    function jsCopy(e){ 
        e.select(); //选择对象 
        document.execCommand("Copy"); //执行浏览器复制命令
       alert("已复制好，可贴粘。"); 
    } 
</script> 

<div class="yahei invite-wrap"><div class="invite-top-bg"><div class="container invite-top"><img src="<?=TPLURL?>/yaoqing/images/banner.jpg" border="0" alt="邀请好友" />
<!--<a href="<?=SITEURL?>"><img src="<?=$dd_tpl_data['yaoqinglogo']?>" alt="<?=WEBNAME?>" class="logo" style="height:80px; width:250px"/></a>-->
<h3 class="t"><?=WEBNAME?>累计已发放奖励<?=$dd_tpl_data['jine']?>元</h3><a href="/index.php?mod=yaoqing&act=index#guize" class="ht btn-rule">活动规则</a></div></div>
    <?php if($dduser['name']=NULL || $dduser['name']==''){?>
							<div class="invite-main-bg"><div class="container"><div class="invite-record clearfix"><div class="invite-logout-pic">登录就能邀请啦</div>	    <?php }else{?>	
							<div class="invite-main-bg"><div class="container"><div class="invite-category"><div class="clearfix"><div class="invite-info"><p>您还没有邀请好友<br />复制推广链接立即邀请吧！<br />快行动吧！么么哒</p></div>
<div class="invite-by-link"><div class="hd clearfix"><h3 class="t"><i class="ht">您可以选择</i>复制您的专属邀请链接</h3><INPUT class="btn btn-green btn-l btn-invite btn-copy" onclick="jsCopy(document.getElementById('recom_lt'))" value="复制" type="button" />

  <textarea class="yahei c" name="tuiguang"  id="recom_lt" cols="" rows="">推荐一个省钱的网站【<?=WEBNAME?>】，立即加入，让你一边购物一边赚钱，还等什么？马上加入！<?=$tg_url?> </textarea>
</div>

</div></div><div class="invite-by-sns"><h3 class="t"><i class="ht">也可以选择</i>分享到社交平台</h3>

								<div id="bdshare" class="share-list c clearfix">
                                            <a class="qq" target="_blank" href="javascript:shareThis('cqq','分享到QQ好友');">
                                            </a>
                                            <a class="qzone" target="_blank" href="javascript:shareThis('qzone','分享到QQ空间');">
                                            </a>
                                            <a class="sina" target="_blank" href="javascript:shareThis('tsina','分享到新浪微博');">
                                            </a>
								</div><div class="ft">直接发给qq好友更容易邀请到好友哟~<i></i></div></div>
								
								<div class="invite-by-code"><h3 class="t"><i class="ht">也可以选择</i>通过手机邀请</h3><div class="c clearfix"><div class="text">用手机微信扫码邀请也很方便哦~</div>
								<div class="pic"> <a class="weixin" target="_blank" href="javascript:shareThis('weixin','分享到微信');"><img src="<?=TPLURL?>/yaoqing/images/weixin.jpg" width="115" height="115" alt="邀请二维码" /></a></div></div></div></div>
							 <?php }?> 
							
							<?php if($dduser['name']=NULL || $dduser['name']==''){?>
								<div class="invite-record clearfix"><div class="record-box"><h3>我的邀请记录<span>
								您已累计获得奖励： <?=$total2?> 元
								</span></h3><div id="J_invite_record"></div><div class="decorated"></div> 
							<?php if($total>0){?>
								<table>
                                   <colgroup>
                                        <col width="25%">
                                                <col width="20%">
                                                    <col width="20%">
                                                        <col width="20%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="nickname"> 好友昵称</th>
                                             <th>会员等级</th>
                                            <th>登陆次数</th>
                                            <th> 获得奖励</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php foreach($tuiguang as $row){?>
										<?php
                                        $web_level=back_arr($webset['level']);
                                        $m=WEB_USER_LEVEL-1;
                                        foreach($web_level as $k=>$v){
                                            if($row['level']>=$k){
                                                $dengji_img = "<img src='images/v".$m.".gif' alt='".$v."' />";
                                            break;
                                        }
                                        $m--;
                                        }
                                        ?>
                                        <tr>
                                            <td class="nickname">
                                                <div class="nicknamediv">
                                                    <?=$row['ddusername']?>
                                                </div>
                                            </td>
                                            <td>
                                              <div align="center"><?=$dengji_img?></div>
                                            </td>
                                            <td>
                                                <div align="center"><?=$row['loginnum']?>次</div>
                                            </td>
                                            <td class="fanli"><div align="center"><?=$row['yj']?>元   </div>                                         </td>
                                      </tr>
                                        <?php }?>  </tbody>
                                </table> 
								<?php }else{?>	<div align="center"><img src="<?=TPLURL?>/yaoqing/images/no-invite-record.png" style="margin-top:40px" alt="暂无邀请记录" /></div> <?php }?> 
								</div>
								
								<?php }else{?>	
							<div class="record-box"><h3>我的邀请记录</h3>
							<div class="invite-record-logout"><p>登录就能看到邀请记录啦</p>
							<a class="btn btn-green btn-l btn-invite J_invite_login" href="<?=u('user','login')?>">登录</a></div><div class="decorated"></div></div>	
								 <?php }?> 
								<div class="record-box record-ranking"><h3>邀请排行榜</h3>
			<table border="0" cellspacing="0" cellpadding="0" class="table-top"><tr>
				<th class="th-num">排名</th><th class="th-name">用户昵称</th><th class="th-amount">累计奖励(元)</th><th class="th-month">成功邀请(人)</th></tr>    <?php if($dd_tpl_data['paihangbang']['open']==1){?> 
<tr><td class="td-num td-num-1"><i>1</i></td><td><div class="td-name"><?=$dd_tpl_data['shuju1']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju2']?></t><td class="td-month"><?=$dd_tpl_data['shuju3']?>人</td></tr>
<tr><td class="td-num td-num-2"><i>2</i></td><td><div class="td-name"><?=$dd_tpl_data['shuju4']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju5']?></t><td class="td-month"><?=$dd_tpl_data['shuju6']?>人</td></tr>
<tr><td class="td-num td-num-3"><i>3</i></td><td><div class="td-name"><?=$dd_tpl_data['shuju7']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju8']?></t><td class="td-month"><?=$dd_tpl_data['shuju9']?>人</td></tr>
				<tr><td class="td-num">4</td><td><div class="td-name" ><?=$dd_tpl_data['shuju10']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju11']?></t><td class="td-month"><?=$dd_tpl_data['shuju12']?>人</td></tr>
				<tr><td class="td-num">5</td><td><div class="td-name" ><?=$dd_tpl_data['shuju13']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju14']?></t><td class="td-month"><?=$dd_tpl_data['shuju15']?>人</td></tr>
				<tr><td class="td-num">6</td><td><div class="td-name" ><?=$dd_tpl_data['shuju16']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju17']?></t><td class="td-month"><?=$dd_tpl_data['shuju18']?>人</td></tr>
				<tr><td class="td-num">7</td><td><div class="td-name" ><?=$dd_tpl_data['shuju19']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju20']?></t><td class="td-month"><?=$dd_tpl_data['shuju21']?>人</td></tr>
				<tr><td class="td-num">8</td><td><div class="td-name" ><?=$dd_tpl_data['shuju22']?></div></td><td class="td-price"><?=$dd_tpl_data['shuju23']?></t><td class="td-month"><?=$dd_tpl_data['shuju24']?>人</td></tr>
				<?php }else{?>
 <?php $n=0; while($row=mysql_fetch_array($invite_zong)){$n++;?>
				<tr><td class="td-num td-num-<?=$n?>"><i><?=$n?></i></td>
				<td><div class="td-name"><?=$row['ddusername']?></div></td>
				<td class="td-price">
									<?=(float)$row['total']?>
                                          
                                        </td><td class="td-month"><?=number_format($row['total'])?>人</td></tr> <?php }?>
										<?php }?>

				</table>
				</div></div>
								
						<div id="guize"  class="invite-rule"><h3>其他规则</h3><ol><li>记得注册之后多多教教好友怎么用哦！获得更高奖励机会更高！</li></br>
<li>不要为了获得小小的邀请奖励而失掉了自己的诚信，我们会人工核查，对于查实的作弊行为，我们将收回该帐号全部的邀请奖励， 严重者将冻结所有收入并永久封号；</li></br>
<li>不要以注册送钱或注册送积分等利益诱导来吸引注册，否则将给予处罚；</li></br>
<li>新邀请奖励规则从2016年1月1日开始实施，即还未奖励成功的邀请记录将按新奖励规则执行。</li></br>
<li>为了合作商城的正常利益,请不要到本站的合作商城进行推广；</li></br>
<li><font color="#FF0000">*作弊行为：包括但不限于使用相同的电脑、相同的IP地址在同一天内注册多个帐号，以骗取邀请奖励的行为。。</font></li></ol>
</div>
</div>
</div>
</div>
		

<script type="text/javascript">
function shareThis(webid,name){
	<?php if($dduser['name']==NULL){?>
	<?php if($invite['zhe_optimize']==0){?>
	t.login();
	<?php }else{?>
	alert('亲，您还没有登录哦！');
	window.location.href='<?=u('user','login')?>';
	<?php }?>
	return false;
	<?php }?>
	title='<?=$dd_tpl_data['jine2']?>';
	url='<?=$tg_url?>';
	pic='<?=preg_match('/^http/',$dd_tpl_data['shoujitg'])?$dd_tpl_data['shoujitg']:SITEURL.'/'.$dd_tpl_data['shoujitg']?>';
	doShare(webid,name,title,url,pic);
}
function doShare(webid, name, title, url, pic) {
	if (webid == 'weixin') {
		var iWidth = 880;
		//弹出窗口的宽度;
		var iHeight = 780;
		//弹出窗口的高度;
	} else {
		var iWidth = 700;
		//弹出窗口的宽度;
		var iHeight = 680;
		//弹出窗口的高度;
	}
	var iscrollbars = "yes";
	//弹出窗口的是否有滚动条(auto/yes/no);
	var iresizable = "yes";
	//弹出窗口是否可调整大小(yes/no);
	var iTop = (window.screen.availHeight - 30 - iHeight) / 2;
	//获得窗口的垂直位置;
	var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;
	//获得窗口的水平位置;
    var e = encodeURIComponent;
	var shareurl='http://www.jiathis.com/send/?webid=' + webid + '&url=' + e(url) + '&title=' + e(title) + '&pic=' + e(pic) + '&uid=<?=$dd_tpl_data['fxid']?>';
	try {
		window.open(shareurl, name, 'width=' + iWidth + ', height=' + iHeight + ', top=' + iTop + ', left=' + iLeft + ', toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no');
	} catch(a) {
		window.open(shareurl);
	}
}
</script>
