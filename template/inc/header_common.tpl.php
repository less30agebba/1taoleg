<!--顶部导航栏开始-->
<div class="vipduo_top screen">
    <div class="vipduo_top_menu">
        <div class="vipduo_top_link">
            <div class="menu_list" onmouseover="this.className='menu_list active'"
                 onmouseout="this.className='menu_list'">

                <div class="vipduo_body">
                    <div class="menu_title">
                        <div>
                            <div class="zy"></div>
                            <a href="/m/">手机奖励</a></div>
                    </div>
                </div>
            </div>

            <div class="menu_list" onmouseover="this.className='menu_list active'"
                 onmouseout="this.className='menu_list'">
                <div class="menu_title">
                    <div>在线客服</div>
                    <div class="ico_menu"></div>
                </div>
                <div class="menu_content">
                    <ul>
                        <li><a id="kefu">
                                <div class="menu_list_title">
                                    <div class="vipduo_ico ico_online"></div>
                                    联系客服
                                </div>
                            </a></li>
                        <li><a href="/index.php?mod=user&act=getpassword" target="_blank">
                                <div class="menu_list_title">
                                    <div class="vipduo_ico ico_help"></div>
                                    找回密码
                                </div>
                            </a></li>
                        <li class="last"><a href="/index.php?mod=help&act=index" target="_blank">
                                <div class="menu_list_title">
                                    <div class="vipduo_ico ico_share"></div>
                                    帮助中心
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="menu_list" onmouseover="this.className='menu_list active'"
                 onmouseout="this.className='menu_list'">
                <div class="menu_title">
                    <div>收藏本站</div>
                    <div class="ico_menu"></div>
                </div>
                <div class="menu_content">
                    <ul>
                        <li><a onclick="AddFavorite('','一淘乐购')">
                                <div class="menu_list_title">
                                    <div class="vipduo_ico ico_collection"></div>
                                    加入收藏
                                </div>
                            </a></li>
                        <li class="last"><a href="comm/shortcut.php">
                                <div class="menu_list_title">
                                    <div class="vipduo_ico ico_desk"></div>
                                    保存桌面
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>

            <div style="margin-left:20px; cursor:pointer"><a href="/index.php?mod=user&act=chadan" target="_blank">
                    认领订单</a></div>

            <div style="margin-left:20px;"><a href="/index.php?mod=yaoqing&act=index" title="邀请好友拿奖励">邀请好友<font
                            color="#FF0000">奖200元</font></a></div>
            <div style="margin-left:20px; cursor:pointer"><a href="index.php?mod=user&act=tradelist&do=baoming"
                                                             target="_blank">
                    报名商品</a></div>
            <div style="margin-left:20px; cursor:pointer"><a href="/index.php?mod=hezuo&act=index" target="_blank">
                    商家报名</a></div>
        </div>
        <!--登录前-->
        <div class="vipduo_top_user" style="display:none">

            <div class="menu_title">

                <div class="vipduo_login"><a href="/index.php?mod=user&act=login" title="会员登录">请登录</a></div>
                <span></span>
                <div class="vipduo_reg"><a href="/index.php?mod=user&act=register" title="立即注册会员">免费注册</a></div>
            </div>
        </div>
        <!--登录后-->
        <script type="text/javascript">
            function topHtml() {/*<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
					<div class="menu_title">
						<div style="float:left;">
							<a href="/index.php?mod=user&act=index"><div class="user_head"><img src="{$avatar}" width="18" height="18"/></div></a>{$name}</div>
							<div class="ico_menu" style="float:left;"></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="/index.php?mod=user&act=index"><div class="menu_list_title"><div class="vipduo_ico ico_manager"></div>我的后台</div></a></li>
								<li><a href="/index.php?mod=user&act=tixian&type=1"><div class="menu_list_title"><div class="vipduo_ico ico_mall"></div>集分宝提取</div></a></li>
								<li><a href="/index.php?mod=user&act=tradelist"><div class="menu_list_title"><div class="vipduo_ico ico_order"></div>我的订单</div></a></li>
								<li><a href="/index.php?mod=user&act=mingxi"><div class="menu_list_title"><div class="vipduo_ico ico_onshare"></div>收入明细</div></a></li>
								<li><a href="/index.php?mod=user&act=huan"><div class="menu_list_title"><div class="vipduo_ico ico_score"></div>我的兑换</div></a></li>
								<li><a href="/index.php?mod=baobei&act=user&uid=0"><div class="menu_list_title"><div class="vipduo_ico ico_like"></div>我的分享</div></a></li>
								<li class="last"><a href="/index.php?mod=yaoqing&act=index"><div class="menu_list_title"><div class="vipduo_ico ico_invite"></div>邀请好友</div></a></li>
							</ul>
						</div>
					</div>
							<div style="float:left;padding-left:5px; padding-right:5px;"><a href="/index.php?mod=user&act=mingxi"><font color="ff6699">集分宝：{$jifenbao}个</font></a></div>
						
				
			
					<div class="vipduo_user_login" onmouseover="this.className='vipduo_user_login active'" onmouseout="this.className='vipduo_user_login'">
						<div class="menu_title" style="width:22px; padding-left:5px; padding-right:5px;">
							<div style="padding-top:8px; height:32px;"><div class="menu_set"></div></div>
						</div>
						<div class="menu_content">
							<ul>
								<li><a href="/index.php?mod=user&act=info"><div class="menu_list_title"><div class="vipduo_ico ico_profile"></div>账户资料</div></a></li>
								<li><a href="/index.php?mod=user&act=avatar"><div class="menu_list_title"><div class="vipduo_ico ico_head"></div>修改头像</div></a></li>
								<li class="last"><a href="/index.php?mod=user&act=info&do=apilogin"><div class="menu_list_title"><div class="vipduo_ico ico_safe"></div>帐号绑定</div></a></li>
							</ul>
						</div>
					</div>			
					<a href="/index.php?mod=user&act=exit&t=1558518432"><div class="menu_logout" title="退出登录"></div></a>			
				</div>*/
                ;
            }

            $.ajax({
                url: '/index.php?mod=ajax&act=userinfo',
                dataType: 'jsonp',
                jsonp: "callback",
                success: function (data) {
                    if (data.s == 1) {
                        topHtml = getTplObj(topHtml, data.user);
                        $('.vipduo_top_user').html(topHtml).show();
                    } else {
                        $('.vipduo_top_user').show();
                    }
                }
            });
        </script>

        <!-- 顶部导航结束 -->
    </div>
</div>
<div class="search">
    <div class="search1000">

        <div class="logo">

            <a href="<?= SITEURL ?>"><img src="<?= $dd_tpl_data['logo'] ?>" alt="<?= WEBNAME ?>"
                                          style="height:80px; width:250px"/></a></div>


        <div class="searchR">
            <div class='searchbox' id="searchbox">
                <div style="TEXT-AliGN: left;">
                    <FORM style="FLOAT: left" class='frombox' method='get' name='formname' action='index.php'
                          target="_blank" autocomplete="off" onsubmit="return checkSubFrom('#s-txt');">
                        <input type="hidden" id="mod" name="mod" value="goods" class="mod"/><input type="hidden"
                                                                                                   id="act" name="act"
                                                                                                   value="index"
                                                                                                   class="act"/>
                        <SPAN class="box-middle c_border">
<INPUT id=s-txt class=s-txt name='search' x-webkit-speech
       value=<?= isset($_GET['search']) ? $_GET['search'] : '请输入任意商城名、淘宝/天猫商品标题开始购物' ?> moren="<?= isset($_GET['search']) ? $_GET['search'] : $webset['search_key']['head'] ?>"/>

<INPUT class="sbutton c_bgcolor" type=submit value="购物搜索">
</SPAN>
                        <SPAN class=box-right>
<span><INPUT class="sbutton3 c_bgcolor search_quan" type=submit value="优惠券"></span>
</SPAN>
                    </FORM>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="header-fa">
            <?php
            if ($app_status == 1) {
                $phone_url = 'href="' . u('app', 'index') . '" target="_blank"';
            } else {
                $phone_url = 'href="javascript:alert(\'开发中，敬请期待\');"';
            }
            ?>
            <a class="fa-link" <?= $phone_url ?> ><img src="<?= TPLURL ?>/inc/images/right_sj_1.png"/></a>
        </div>
    </div>
</div>
</div>
<div class="daohang">
    <div class="daohang1000">
        <ul class="ulnav">
            <li class="linav1">   <!--首页分类开始-->

                <div class="menu_bd" style="margin: 0 auto;">
                    <div id="shownav">
                        <ul class="nav_main" id="nav_main">
                            <li class="fenlei"
                                onmouseover="document.getElementById('category_list').style.height='auto';"
                                onmouseout="document.getElementById('category_list').style.height='0'"
                                onclick="document.getElementById('category_list').style.height='auto'"
                                style="width:240px;height: 39px;overflow: hidden;"></li>
                        </ul>
                    </div>

                    <div class="tb-categories">
                        <div class="tb-cat-inner">
                            <div class="flbg"></div>
                            <ul class="tb-cat">
                                <li data-submenu-id="tb-subcat1">
                                    <i class="catico-1"></i>
                                    <a target="_blank" href="index.php?mod=goods&act=index&cid=10001" class="biaotis">潮流女装</a>
                                    <div class="menu_pop">
                                        <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E4%B8%8A%E8%A3%85"><span
                                                            class="text2">女士上装</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9B%AA%E7%BA%BA%E8%A1%AB"><span
                                                            class="text">雪纺衫</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%A1%AC%E8%A1%AB"><span
                                                            class="text orange">衬衫</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%ABT%E6%81%A4"><span
                                                            class="text yellow">T恤</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%85%E8%A1%A3"><span
                                                            class="text orange">内衣</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%A4%96%E5%A5%97"><span
                                                            class="text">外套</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%9F%AD%E8%A2%96"><span
                                                            class="text">短袖</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%95%BF%E8%A2%96"><span
                                                            class="text">长袖</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E9%92%88%E7%BB%87%E8%A1%AB"><span
                                                            class="text">针织衫</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%83%8C%E5%BF%83"><span
                                                            class="text pink">背心</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%A3%8E%E8%A1%A3"><span
                                                            class="text">风衣</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%8D%AB%E8%A1%A3"><span
                                                            class="text orange">卫衣</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%BC%80%E8%A1%AB"><span
                                                            class="text">开衫</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%B0%8F%E8%A5%BF%E8%A3%85"><span
                                                            class="text">小西装</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%86%B2%E9%94%8B%E8%A1%A3"><span
                                                            class="text green">冲锋衣</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%90%8A%E5%B8%A6"><span
                                                            class="text">吊带</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%9A%AE%E8%A1%A3"><span
                                                            class="text pink">皮衣</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%A9%AC%E5%A4%B9"><span
                                                            class="text">马夹</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%AF%9B%E8%A1%A3"><span
                                                            class="text orange">毛衣</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%8F%E6%B8%85%E6%96%B0"><span
                                                            class="text">小清新</span></a>
                                                <a target="_blank"
                                                   href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B0%E5%9B%AD"><span
                                                            class="text">田园</span></a>
                                        <div class="jiange"></div>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E4%B8%8B%E8%A3%85"><span
                                                        class="text2 c_bgcolor">女士下装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%9E%E8%A1%A3%E8%A3%99"><span
                                                        class="text orange">连衣裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%8A%E8%BA%AB%E8%A3%99"><span
                                                        class="text">半身裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%95%BE%E4%B8%9D%E8%A3%99"><span
                                                        class="text">蕾丝裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B6%85%E7%9F%AD%E8%A3%99"><span
                                                        class="text">超短裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E9%95%BF%E8%A3%99"><span
                                                        class="text">长裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%89%9B%E4%BB%94%E8%A3%A4"><span
                                                        class="text">牛仔裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%AB%98%E8%85%B0%E8%A3%A4"><span
                                                        class="text">高腰裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%93%85%E7%AC%94%E8%A3%A4"><span
                                                        class="text">铅笔裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%9F%AD%E8%A3%A4"><span
                                                        class="text orange">短裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E4%B9%9D%E5%88%86%E8%A3%A4"><span
                                                        class="text">九分裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%89%93%E5%BA%95%E8%A3%A4"><span
                                                        class="text green">打底裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%83%8C%E5%B8%A6%E8%A3%A4"><span
                                                        class="text">背带裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%BF%9E%E4%BD%93%E8%A3%A4"><span
                                                        class="text">连体裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E4%BC%91%E9%97%B2%E8%A3%A4"><span
                                                        class="text orange">休闲裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%94%A5%E8%A3%A4"><span
                                                        class="text">锥裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%BF%90%E5%8A%A8%E8%A3%A4"><span
                                                        class="text">运动裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%9B%B4%E7%AD%92%E8%A3%A4"><span
                                                        class="text">直筒裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%8C%85%E8%85%BF%E8%A3%A4"><span
                                                        class="text pink">包腿裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%B7%A5%E8%A3%85%E8%A3%A4"><span
                                                        class="text">工装裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%A5%BF%E8%A3%85%E8%A3%A4"><span
                                                        class="text orange">西装裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%B0%8F%E8%84%9A%E8%A3%A4"><span
                                                        class="text">小脚裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%93%88%E4%BC%A6%E8%A3%A4"><span
                                                        class="text">哈伦裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%98%8E%E6%98%9F%E9%98%94%E8%85%BF%E8%A3%A4"><span
                                                        class="text">明星阔腿裤</span></a>

                                            <div class="jiange"></div>

                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%BF%90%E5%8A%A8%E8%A3%85"><span
                                                        class="text2 c_bgcolor">女士套装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%BF%90%E5%8A%A8%E8%A1%AB%20"><span
                                                        class="text">运动衫</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%89%E4%BB%B6%E5%A5%97"><span
                                                        class="text green">三件套</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%A3%92%E7%90%83%E6%9C%8D"><span
                                                        class="text">棒球服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%83%85%E4%BE%A3%E8%A3%85"><span
                                                        class="text orange">情侣装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%9A%E7%BA%B1"><span
                                                        class="text">婚纱</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%90%E5%8A%A8%E5%A5%97%E8%A3%85"><span
                                                        class="text">运动套装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%81%8C%E4%B8%9A%E5%A5%97%E8%A3%85"><span
                                                        class="text">职业套装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E8%B4%B5%E5%90%8D%E5%AA%9B"><span
                                                        class="text">高贵名媛 </span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%A5%E7%B3%BB%E5%AD%A6%E9%99%A2"><span
                                                        class="text">日系学院</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%97%B6%E5%B0%9A%E5%A5%97%E8%A3%85"><span
                                                        class="text orange">时尚套装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AF%9B%E5%91%A2%E5%A4%96%E5%A5%97"><span
                                                        class="text green">毛呢外套</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%BF%B7%E5%BD%A9%E5%A4%96%E5%A5%97"><span
                                                        class="text">迷彩外套</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E4%B8%AD%E8%80%81%E5%B9%B4"><span
                                                        class="text pink">中老年</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%A4%A7%E7%A0%81"><span
                                                        class="text">大码</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%94%90%E8%A3%85"><span
                                                        class="text">唐装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%97%E8%A2%8D%20"><span
                                                        class="text orange">旗袍 </span></a>

                                            <div class="jiange"></div>

                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%B6%E5%B1%85%E6%9C%8D"><span
                                                        class="text2 c_bgcolor">家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%98%A5%E5%A4%8F%E5%AE%B6%E5%B1%85%E6%9C%8D%20"><span
                                                        class="text">春夏家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BA%AF%E6%A3%89%E5%AE%B6%E5%B1%85%E6%9C%8D"><span
                                                        class="text green">纯棉家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8E%AB%E4%BB%A3%E5%B0%94%E5%AE%B6%E5%B1%85%E6%9C%8D"><span
                                                        class="text">莫代尔家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%9F%E4%B8%9D%E5%AE%B6%E5%B1%85%E6%9C%8D"><span
                                                        class="text orange">真丝家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%98%A5%E5%A4%8F%E7%9D%A1%E8%A3%99"><span
                                                        class="text">春夏睡裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%AE%B6%E5%B1%85%E6%9C%8D"><span
                                                        class="text">男士家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%83%85%E4%BE%A3%E5%AE%B6%E5%B1%85%E6%9C%8D"><span
                                                        class="text">情侣家居服</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%80%A7%E6%84%9F%E7%9D%A1%E8%A3%99"><span
                                                        class="text">性感睡裙</span></a>


                                            <div class="jiange"></div>

                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%86%85%E8%A1%A3"><span
                                                        class="text2 c_bgcolor">女士内衣</span></a>

                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E5%86%85%E8%A1%A3"><span
                                                        class="text orange">品牌内衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%98%A5%E5%A4%8F%E6%96%B0%E5%93%81"><span
                                                        class="text">春夏新品</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%96%87%E8%83%B8"><span
                                                        class="text">文胸</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%81%9A%E6%8B%A2%E6%96%87%E8%83%B8"><span
                                                        class="text orange">聚拢文胸</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A4%A7%E7%A0%81%E6%96%87%E8%83%B8"><span
                                                        class="text pink">大码文胸</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%91%E5%A5%B3%E6%96%87%E8%83%B8"><span
                                                        class="text">少女文胸</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%96%87%E8%83%B8%E5%A5%97%E8%A3%85"><span
                                                        class="text">文胸套装</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%A0%E9%92%A2%E5%9C%88%E6%96%87%E8%83%B8"><span
                                                        class="text">无钢圈文胸</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%86%85%E8%A3%A4"><span
                                                        class="text">女士内裤</span></a>
                                            <div class="jiange"></div>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%9D%A1%E8%A1%A3"><span
                                                        class="text2 c_bgcolor">女士睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E9%95%BF%E8%A2%96%E7%9D%A1%E8%A1%A3"><span
                                                        class="text">长袖睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%80%A7%E6%84%9F%E7%9D%A1%E8%A1%A3"><span
                                                        class="text orange">性感睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BA%AF%E6%A3%89%E7%9D%A1%E8%A1%A3"><span
                                                        class="text">纯棉睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%83%85%E4%BE%A3%E7%9D%A1%E8%A1%A3"><span
                                                        class="text">情侣睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9D%A1%E8%A3%99"><span
                                                        class="text">睡裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E5%90%8A%E5%B8%A6%E7%9D%A1%E8%A1%A3"><span
                                                        class="text green">吊带</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%9E%E8%A3%A4%E8%A2%9C"><span
                                                        class="text pink">连裤袜</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%9D%E8%A2%9C"><span
                                                        class="text">丝袜</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%90%E5%8A%A8%E4%BC%91%E9%97%B2%E7%9D%A1%E8%A1%A3"><span
                                                        class="text orange">运动休闲睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%9C%E7%BE%8E%E7%9D%A1%E8%A1%A3"><span
                                                        class="text">甜美睡衣</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%9F%E4%B8%9D%E7%9D%A1%E8%A3%99"><span
                                                        class="text">真丝睡裙</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%93%E5%BA%95%E8%A3%A4"><span
                                                        class="text orange">打底裤</span></a>
                                            <a target="_blank"
                                               href="/index.php?mod=tao&amp;act=list&amp;q=%E8%88%B9%E8%A2%9C"><span
                                                        class="text">船袜</span></a>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat2">
                                    <i class="catico-2"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10011" class="biaotis">时尚男装</a>
                                    <div class="menu_pop">

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%B8%8A%E8%A3%85"><span
                                                    class="text2 c_bgcolor">男士上装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%9F%AD%E8%A2%96"><span
                                                    class="text orange">短袖</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%ABT%E6%81%A4"><span
                                                    class="text">T恤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%A3%89%E9%BA%BB"><span
                                                    class="text">棉麻</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%ABPOLO%E8%A1%AB"><span
                                                    class="text">POLO衫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%9F%AD%E8%A2%96"><span
                                                    class="text green">短袖</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%A1%AC%E8%A1%AB"><span
                                                    class="text">衬衫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%95%BF%E8%A2%96"><span
                                                    class="text">长袖</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%A9%AC%E5%A4%B9"><span
                                                    class="text pink">马夹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%B0%E8%8A%B1%E8%A1%AC"><span
                                                    class="text">印花衬</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%89%9B%E4%BB%94%E8%A1%A3"><span
                                                    class="text green">牛仔衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%A4%B9%E5%85%8B"><span
                                                    class="text">夹克</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%A3%8E%E8%A1%A3"><span
                                                    class="text">风衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%92%88%E7%BB%87%E8%A1%AB"><span
                                                    class="text pink">针织衫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%8D%AB%E8%A1%A3"><span
                                                    class="text">卫衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%8D%95%E8%A5%BF%E6%9C%8D"><span
                                                    class="text">单西服</span></a>

                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%B8%8B%E8%A3%85"><span
                                                    class="text2 c_bgcolor">男士下装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%9F%AD%E8%A3%A4"><span
                                                    class="text">短裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%BA%94%E5%88%86%E8%A3%A4"><span
                                                    class="text green">五分裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%B8%83%E5%88%86%E8%A3%A4"><span
                                                    class="text">七分裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%89%9B%E4%BB%94%E8%A3%A4"><span
                                                    class="text orange">牛仔裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%BC%91%E9%97%B2%E8%A3%A4"><span
                                                    class="text">休闲裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B0%8F%E8%84%9A%E8%A3%A4"><span
                                                    class="text">小脚裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%8D%A1%E5%85%B6%E8%A3%A4"><span
                                                    class="text">卡其裤</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%A5%97%E8%A3%85"><span
                                                    class="text2 c_bgcolor">男士套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%BF%90%E5%8A%A8%E6%9C%8D"><span
                                                    class="text">运动服</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%A5%BF%E6%9C%8D%E5%A5%97%E8%A3%85"><span
                                                    class="text orange">西服套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%86%9B%E8%BF%B7%E6%9C%8D"><span
                                                    class="text">军迷服</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%80%9F%E5%B9%B2%E8%A1%A3"><span
                                                    class="text">速干衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%8A%93%E7%BB%92%E8%A1%A3"><span
                                                    class="text">抓绒衣</span></a>


                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%88%B7%E5%A4%96"><span
                                                    class="text2 c_bgcolor">运动类</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B7%91%E6%AD%A5%E6%9C%BA"><span
                                                    class="text orange">跑步机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%81%A5%E8%BA%AB%E8%BD%A6"><span
                                                    class="text">健身车</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B8%B8%E6%B3%B3"><span
                                                    class="text">游泳</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BD%AE%E6%BB%91"><span
                                                    class="text">轮滑</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%BD%E6%AF%9B%E7%90%83"><span
                                                    class="text">羽毛球</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%91%9C%E4%BC%BD"><span
                                                    class="text">瑜伽</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%88%9E%E8%B9%88"><span
                                                    class="text green">舞蹈</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B7%86%E6%8B%B3%E9%81%93"><span
                                                    class="text orange">跆拳道</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B9%92%E4%B9%93%E7%90%83"><span
                                                    class="text">乒乓球</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AF%AE%E7%90%83"><span
                                                    class="text">篮球</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%AD%90%E5%87%8F%E8%82%A5"><span
                                                    class="text">女子减肥</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%BA%BB%E5%B0%86"><span
                                                    class="text">麻将</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%B1%BC%E7%AB%BF"><span
                                                    class="text pink">鱼竿</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9D%A1%E8%A2%8B"><span
                                                    class="text">睡袋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E5%8A%A8%E8%BD%A6"><span
                                                    class="text">电动车</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%88%B7%E5%A4%96"><span
                                                    class="text2 c_bgcolor">户外用品</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%87%AA%E8%A1%8C%E8%BD%A6"><span
                                                    class="text">自行车</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%BD%9C%E6%B0%B4"><span
                                                    class="text">潜水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%94%80%E5%B2%A9"><span
                                                    class="text orange">攀岩</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%9B%E8%BF%B7%E8%A3%85%E5%A4%87"><span
                                                    class="text">军迷装备</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%9B%E5%88%80"><span
                                                    class="text green">军刀</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%8C%E8%82%A9%E5%8C%85"><span
                                                    class="text">双肩包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%83%A7%E7%83%A4%E7%82%89"><span
                                                    class="text">烧烤炉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%90%8A%E5%BA%8A"><span
                                                    class="text">吊床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B8%90%E7%AF%B7"><span
                                                    class="text">帐篷</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%87%8E%E9%A4%90%E5%9E%AB"><span
                                                    class="text">野餐垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%8B%E7%94%B5%E7%AD%92"><span
                                                    class="text orange">手电筒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9C%9B%E8%BF%9C%E9%95%9C"><span
                                                    class="text">望远镜</span></a>

                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat3">
                                    <i class="catico-3"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10002" class="biaotis">男鞋/女鞋/箱包</a>
                                    <div class="menu_pop">

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E9%9E%8B%20"><span
                                                    class="text2 c_bgcolor">女鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%8D%95%E9%9E%8B%20"><span
                                                    class="text orange">单鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%87%89%E9%9E%8B"><span
                                                    class="text">凉鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E7%9A%AE%E9%9E%8B"><span
                                                    class="text">皮鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%BF%90%E5%8A%A8%E9%9E%8B"><span
                                                    class="text">运动鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E8%B7%9F%E9%9E%8B"><span
                                                    class="text orange">高跟鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B3%E5%BA%95%E9%9E%8B"><span
                                                    class="text">平底鞋 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9F%AD%E9%9D%B4"><span
                                                    class="text">短靴</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A9%AC%E4%B8%81%E9%9D%B4"><span
                                                    class="text orange">马丁靴</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B8%86%E5%B8%83%E9%9E%8B"><span
                                                    class="text green">帆布鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9D%BE%E7%B3%95%E9%9E%8B"><span
                                                    class="text">松糕鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E8%B7%9F%E9%9E%8B%20"><span
                                                    class="text">高跟鞋 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9D%A1%E8%B7%9F%E9%9E%8B"><span
                                                    class="text">坡跟鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%B9%B3%E5%BA%95%E9%9E%8B"><span
                                                    class="text pink">平底鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%AB%98%E5%B8%AE%E9%9E%8B"><span
                                                    class="text orange">高帮鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%B5%85%E5%8F%A3%E9%9E%8B"><span
                                                    class="text">浅口鞋</span></a>


                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%B7%91%E6%AD%A5%E9%9E%8B"><span
                                                    class="text2 c_bgcolor">跑步鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%9D%BF%E9%9E%8B"><span
                                                    class="text orange">板鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%AF%AE%E7%90%83%E9%9E%8B"><span
                                                    class="text">篮球鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%B6%B3%E7%90%83%E9%9E%8B"><span
                                                    class="text">足球鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%BD%91%E7%BE%BD%E9%9E%8B"><span
                                                    class="text">网羽鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%ABT%E6%81%A4%E7%BB%BC%E8%AE%AD%E9%9E%8B"><span
                                                    class="text">T恤综训鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B8%86%E5%B8%83%E9%9E%8B"><span
                                                    class="text">帆布鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%99%BB%E5%B1%B1%E9%9E%8B"><span
                                                    class="text orange">登山鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%BE%92%E6%AD%A5%E9%9E%8B"><span
                                                    class="text">徒步鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%BD%91%E9%9E%8B"><span
                                                    class="text">网鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%BC%91%E9%97%B2%E9%9E%8B"><span
                                                    class="text green">休闲鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%BA%AF%E6%BA%AA%E9%9E%8B"><span
                                                    class="text">溯溪鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%B6%8A%E9%87%8E%E8%B7%91%E9%9E%8B"><span
                                                    class="text">越野跑鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%88%B7%E5%A4%96%E9%9E%8B"><span
                                                    class="text orange">户外鞋</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%BC%91%E9%97%B2%E9%9E%8B"><span
                                                    class="text2 c_bgcolor">休闲鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%97%B6%E5%B0%9A%E6%BD%AE%E9%9E%8B"><span
                                                    class="text">时尚潮鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%AD%A3%E8%A3%85%E7%9A%AE%E9%9E%8B"><span
                                                    class="text">正装皮鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%BD%91%E9%9D%A2%E9%9E%8B"><span
                                                    class="text orange">网面鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B8%83%E6%B4%9B%E5%85%8B%E6%88%B7%E5%A4%96"><span
                                                    class="text">布洛克户外</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B8%86%E5%B8%83%E9%9E%8B"><span
                                                    class="text">帆布鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%B1%86%E8%B1%86%E9%9E%8B"><span
                                                    class="text pink">豆豆鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B8%86%E8%88%B9%E9%9E%8B"><span
                                                    class="text">帆船鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B8%83%E9%9E%8B"><span
                                                    class="text green">布鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%86%85%E5%A2%9E%E9%AB%98"><span
                                                    class="text orange">内增高</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B7%A5%E8%A3%85%E9%9E%8B"><span
                                                    class="text">工装鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%BC%91%E9%97%B2%E7%9A%AE%E9%9E%8B"><span
                                                    class="text">休闲皮鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%BC%90%E6%9C%A8%E9%9E%8B"><span
                                                    class="text">伐木鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%B9%90%E7%A6%8F%E9%9E%8B"><span
                                                    class="text">乐福鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%BF%90%E5%8A%A8%E4%BC%91%E9%97%B2"><span
                                                    class="text">运动休闲</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%B2%99%E6%BB%A9%E5%87%89%E9%9E%8B"><span
                                                    class="text">沙滩凉鞋</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%8C%85"><span
                                                    class="text2 c_bgcolor">女包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E8%B4%9D%E9%9B%B7%E5%8C%85"><span
                                                    class="text">贝雷包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%93%BE%E6%9D%A1%E5%8C%85"><span
                                                    class="text">链条包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%89%8B%E6%8F%90%E5%8C%85"><span
                                                    class="text orange"> 手提包 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%89%8B%E6%8B%BF%E5%8C%85"><span
                                                    class="text">手拿包 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%8D%95%E8%82%A9%E5%8C%85"><span
                                                    class="text orange"> 单肩包 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%96%9C%E6%8C%8E%E5%8C%85"><span
                                                    class="text green">斜挎包 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E5%8F%8C%E8%82%A9%E5%8C%85"><span
                                                    class="text">双肩包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E9%92%B1%E5%8C%85"><span
                                                    class="text orange">钱包 </span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E5%A3%AB%E6%9C%BA%E8%BD%A6%E5%8C%85"><span
                                                    class="text">机车包</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AE%B1%E5%8C%85%E9%A6%86"><span
                                                    class="text2 c_bgcolor">箱包馆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%8D%95%E8%82%A9%E7%94%B7%E5%8C%85"><span
                                                    class="text">单肩男包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%89%8B%E6%8F%90%E7%94%B7%E5%8C%85"><span
                                                    class="text orange">手提男包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%96%9C%E8%B7%A8%E5%A5%B3%E5%8C%85"><span
                                                    class="text green">斜跨男包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%9C%9F%E7%9A%AE%E7%94%B7%E5%8C%85"><span
                                                    class="text">真皮男包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%8F%8C%E8%82%A9"><span
                                                    class="text">男士双肩</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%92%B1%E5%8C%85"><span
                                                    class="text orange">男士钱包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E8%B4%9D%E9%9B%B7%E5%8C%85"><span
                                                    class="text">贝雷包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%82%AE%E5%B7%AE%E5%8C%85"><span
                                                    class="text pink">邮差包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%B0%B4%E6%A1%B6%E5%8C%85"><span
                                                    class="text">水桶包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%9C%BA%E8%BD%A6%E5%8C%85"><span
                                                    class="text green">机车包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E4%B8%AD%E5%8C%85"><span
                                                    class="text">中包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%A4%A7%E5%8C%85%20"><span
                                                    class="text">大包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%B8%86%E5%B8%83%E7%94%B7%E5%8C%85"><span
                                                    class="text">帆布男包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%95%86%E5%8A%A1%E7%94%B7%E5%8C%85"><span
                                                    class="text">商务男包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%85%E8%A1%8C%E7%AE%B1"><span
                                                    class="text orange">旅行箱</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8B%89%E6%9D%86%E7%AE%B1"><span
                                                    class="text">拉杆箱</span></a>

                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat4">
                                    <i class="catico-4"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10003" class="biaotis">护肤/美妆</a>
                                    <div class="menu_pop">

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%A4%E8%82%A4%E5%A5%97%E8%A3%85"><span
                                                    class="text2 c_bgcolor">护肤套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B4%81%E9%9D%A2"><span
                                                    class="text">洁面</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8C%96%E5%A6%86%E6%B0%B4"><span
                                                    class="text orange">化妆水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9D%A2%E8%86%9C"><span
                                                    class="text green">面膜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B2%BE%E5%8D%8E%E4%B9%B3%E6%B6%B2"><span
                                                    class="text">精华乳液</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9D%A2%E9%9C%9C"><span
                                                    class="text orange">面霜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%BC%E9%9C%9C"><span
                                                    class="text">眼霜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%B8%E5%A6%86"><span
                                                    class="text">卸妆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BA%AB%E4%BD%93%E6%8A%A4%E7%90%86"><span
                                                    class="text">身体护理</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%8A%A4%E7%90%86"><span
                                                    class="text pink">男士护理</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B2%BE%E6%B2%B9%E8%8A%B3%E7%96%97"><span
                                                    class="text">精油芳疗</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%B0%E8%83%B8"><span
                                                    class="text">丰胸</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%A4%E6%89%8B%E9%9C%9C"><span
                                                    class="text">护手霜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%98%B2%E6%99%92"><span
                                                    class="text">防晒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%94%87%E9%83%A8%E6%8A%A4%E7%90%86"><span
                                                    class="text orange">唇部护理</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8E%BB%E8%A7%92%E8%B4%A8"><span
                                                    class="text">去角质</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%95%8F%E6%84%9F%E4%BF%AE%E6%8A%A4"><span
                                                    class="text green">敏感修护</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%87%BB%E7%BE%8E%E4%B8%9C%E6%96%B9"><span
                                                    class="text">臻美东方</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%85%8D%E8%B4%B9%E8%AF%95%E7%94%A8"><span
                                                    class="text">免费试用</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%A2%E7%BE%8E%E6%B1%87"><span
                                                    class="text">奢美汇</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E7%99%BD"><span
                                                    class="text orange">美白</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%A1%A5%E6%B0%B4"><span
                                                    class="text">补水</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9B%BD%E9%99%85%E5%93%81%E7%89%8C"><span
                                                    class="text2 c_bgcolor">国际品牌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9B%85%E8%AF%97%E5%85%B0%E9%BB%9B"><span
                                                    class="text">雅诗兰黛</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%85%B0%E8%94%BB"><span
                                                    class="text orange">兰蔻</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B7%E8%93%9D%E4%B9%8B%E8%B0%9C"><span
                                                    class="text">海蓝之谜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=SK-II"><span
                                                    class="text">SK-II</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=whoo%2F%E5%90%8E"><span
                                                    class="text">whoo/后</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A8%87%E9%9F%B5%E8%AF%97"><span
                                                    class="text green">娇韵诗</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B5%AB%E8%8E%B2%E5%A8%9C"><span
                                                    class="text">赫莲娜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%80%A9%E7%A2%A7"><span
                                                    class="text pink">倩碧</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%85%B0%E8%8A%9D"><span
                                                    class="text">兰芝</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A2%A7%E6%AC%A7%E6%B3%89"><span
                                                    class="text orange">碧欧泉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9B%AA%E8%82%8C%E7%B2%BE"><span
                                                    class="text">雪肌精</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AC%A7%E8%88%92%E4%B8%B9"><span
                                                    class="text">欧舒丹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B5%84%E7%94%9F%E5%A0%82"><span
                                                    class="text">资生堂</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E6%B0%B4"><span
                                                    class="text2 c_bgcolor">女士香水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B7%A1%E9%A6%99%E6%B0%B4EDT"><span
                                                    class="text">淡香水EDT</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E6%B0%B4EDP"><span
                                                    class="text">香水EDP</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E7%B2%BEparfum"><span
                                                    class="text green">香精parfum</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9B%BA%E4%BD%93%E9%A6%99%E6%B0%B4"><span
                                                    class="text">固体香水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E4%BD%93%E4%B9%B3"><span
                                                    class="text">香体乳</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%A4%E9%BE%99%E9%A6%99%E6%B0%B4"><span
                                                    class="text orange">古龙香水</span></a>

                                        <div class="jiange"></div>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%B6%E5%B0%9A%E5%BD%A9%E5%A6%86"><span
                                                    class="text2 c_bgcolor">时尚彩妆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=BB%E9%9C%9C"><span
                                                    class="text">BB霜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E6%B0%B4"><span
                                                    class="text">香水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E5%AE%B9%E5%B7%A5%E5%85%B7"><span
                                                    class="text">美容工具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%A3%E7%BA%A2"><span
                                                    class="text">口红</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BD%A9%E5%A6%86%E5%A5%97%E8%A3%85"><span
                                                    class="text orange">彩妆套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B2%89%E9%A5%BC"><span
                                                    class="text">粉饼</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9D%AB%E6%AF%9B%E8%86%8F"><span
                                                    class="text">睫毛膏</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%BC%E7%BA%BF"><span
                                                    class="text green">眼线</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9A%94%E7%A6%BB%E9%9C%9C"><span
                                                    class="text">隔离霜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B2%89%E5%BA%95"><span
                                                    class="text orange">粉底</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%89%E7%AC%94"><span
                                                    class="text">眉笔</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%89%E7%B2%89"><span
                                                    class="text">眉粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E7%94%B2"><span
                                                    class="text">美甲</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%9C%9C%E7%B2%89"><span
                                                    class="text pink">蜜粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%BC%E5%BD%B1"><span
                                                    class="text">眼影</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%81%AE%E7%91%95"><span
                                                    class="text">遮瑕</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%94%87%E5%BD%A9"><span
                                                    class="text">唇彩</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%85%AE%E7%BA%A2"><span
                                                    class="text">腮红</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%81%87%E7%9D%AB%E6%AF%9B"><span
                                                    class="text">假睫毛</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%B8%E5%A6%86"><span
                                                    class="text">卸妆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E5%85%89%E9%98%B4%E5%BD%B1"><span
                                                    class="text">高光阴影</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8C%96%E5%A6%86%E5%88%B7"><span
                                                    class="text orange">化妆刷</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%94%87%E7%AC%94"><span
                                                    class="text">唇笔</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E6%B0%B4%E9%A6%86"><span
                                                    class="text green">香水馆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BD%A9%E5%A6%86%E5%AD%A6%E9%99%A2"><span
                                                    class="text">彩妆学院</span></a>
                                        <div class="jiange"></div>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B4%97%E5%8F%91%E6%B0%B4"><span
                                                    class="text2 c_bgcolor">洗发系列</span></a>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B4%97%E5%8F%91%E6%B0%B4"><span
                                                    class="text">洗发水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%A4%E5%8F%91%E7%B4%A0"><span
                                                    class="text">护发素</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B4%97%E6%8A%A4%E5%A5%97%E8%A3%85"><span
                                                    class="text">洗护套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A4%B4%E5%8F%91%E9%80%A0%E5%9E%8B"><span
                                                    class="text pink">头发造型</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9F%93%E5%8F%91%E7%83%AB%E5%8F%91"><span
                                                    class="text">染发烫发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%81%87%E5%8F%91"><span
                                                    class="text">假发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%AB%E7%94%9F%E5%B7%BE"><span
                                                    class="text">卫生巾</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%A4%E5%9E%AB"><span
                                                    class="text">护垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%99%E8%86%8F"><span
                                                    class="text">牙膏</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%99%E5%88%B7"><span
                                                    class="text">牙刷</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%BC%B1%E5%8F%A3%E6%B0%B4"><span
                                                    class="text">漱口水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%99%E7%BA%BF"><span
                                                    class="text">牙线</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%A3%E8%85%94"><span
                                                    class="text">口腔</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E7%99%BD%E6%B2%90%E6%B5%B4%E9%9C%B2"><span
                                                    class="text">美白沐浴露</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E7%9A%82"><span
                                                    class="text">香皂</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B3%A1%E6%BE%A1"><span
                                                    class="text green">泡澡</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B4%E7%9B%90"><span
                                                    class="text">浴盐</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%A4%E8%B6%B3"><span
                                                    class="text">护足</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B4%97%E6%89%8B%E6%B6%B2"><span
                                                    class="text">洗手液</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%81%E5%A4%84%E6%B4%97%E6%B6%B2"><span
                                                    class="text">私处洗液</span></a>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%B4%81%E9%9D%A2"><span
                                                    class="text">洁面</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%88%BD%E8%82%A4%E6%B0%B4"><span
                                                    class="text">爽肤水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%9D%A2%E8%86%9C"><span
                                                    class="text">面膜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E6%8A%A4%E7%90%86%E5%A5%97%E8%A3%85"><span
                                                    class="text orange">套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%9D%A2%E9%83%A8%E7%B2%BE%E5%8D%8E"><span
                                                    class="text green">面部精华</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E7%9C%BC%E9%83%A8%E6%8A%A4%E7%90%86"><span
                                                    class="text">眼部护理</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%A6%99%E6%B0%B4"><span
                                                    class="text">男士香水</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%BD%A9%E5%A6%86"><span
                                                    class="text pink">男士彩妆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E9%98%B2%E6%99%92"><span
                                                    class="text">防晒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%89%83%E9%A1%BB%E5%88%80"><span
                                                    class="text orange">剃须刀</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E5%A3%AB%E5%94%87%E9%83%A8%E6%8A%A4%E7%90%86"><span
                                                    class="text">唇部护理</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%89%83%E9%A1%BB%E6%B3%A1%E6%B2%AB%2F%E5%89%83%E9%A1%BB%E8%86%8F"><span
                                                    class="text">剃须泡沫/剃须膏</span></a>


                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat5">
                                    <i class="catico-5"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10005" class="biaotis">母婴用品</a>
                                    <div class="menu_pop">

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AB%A5%E8%A3%85"><span
                                                    class="text2 c_bgcolor">热搜童装</span></a>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AB%A5%E8%A3%85%E6%98%A5%E6%AC%BE"><span
                                                    class="text">童装春款</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%84%BF%E7%AB%A5%E5%A5%97%E8%A3%85"><span
                                                    class="text">儿童套装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B3%E7%AB%A5%E6%98%A5%E8%A3%85"><span
                                                    class="text">女童春装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BA%B2%E5%AD%90%E8%A3%85"><span
                                                    class="text">亲子装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=T%E6%81%A4%E7%AB%A5"><span
                                                    class="text">T恤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%95%BF%E8%A2%96%E8%A1%AC%E8%A1%A3%E7%AB%A5"><span
                                                    class="text orange">长袖衬衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%9E%E8%A1%A3%E8%A3%99%E7%AB%A5"><span
                                                    class="text">连衣裙</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BA%B2%E5%AD%90%E8%A3%85"><span
                                                    class="text green">亲子装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B7%E7%AB%A5%E6%98%A5%E8%A3%85"><span
                                                    class="text pink">男童春装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%93%E5%BA%95%E8%A3%A4%E6%98%A5%E7%AB%A5"><span
                                                    class="text">打底裤春</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%AB%E8%A1%A3%E7%AB%A5"><span
                                                    class="text orange">卫衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E8%A1%A3%E6%9C%8D"><span
                                                    class="text">婴儿衣服</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E9%9E%8B"><span
                                                    class="text">婴儿鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%90%E5%8A%A8%E9%9E%8B%E7%AB%A5"><span
                                                    class="text orange">运动鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BC%91%E9%97%B2%E9%9E%8B%E7%AB%A5"><span
                                                    class="text">休闲鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9A%AE%E9%9E%8B%E7%AB%A5"><span
                                                    class="text orange">皮鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B8%86%E5%B8%83%E9%9E%8B%E7%AB%A5"><span
                                                    class="text">帆布鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AD%A6%E6%AD%A5%E9%9E%8B"><span
                                                    class="text orange">学步鞋</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E7%AB%A5%E8%A3%85"><span
                                                    class="text2 c_bgcolor">品牌童装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%AA%E5%A3%AB%E5%B0%BC"><span
                                                    class="text green">迪士尼</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=GAP"><span
                                                    class="text">GAP</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BC%98%E8%A1%A3%E5%BA%93"><span
                                                    class="text orange">优衣库</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=Zara"><span
                                                    class="text pink">Zara</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%83%E8%B6%A3%E4%BC%9A"><span
                                                    class="text">千趣会</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B7%B4%E6%8B%89%E5%B7%B4%E6%8B%89"><span
                                                    class="text orange">巴拉巴拉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%8F%E7%8C%AA%E7%8F%AD%E7%BA%B3"><span
                                                    class="text orange">小猪班纳</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=Twinkids"><span
                                                    class="text">Twinkids</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=E%C2%B7LAND"><span
                                                    class="text">E·LAND</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%A7%E7%AB%A5"><span
                                                    class="text">牧童</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B7%B4%E5%B8%83%E8%B1%86"><span
                                                    class="text">巴布豆</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E7%8E%A9%E5%85%B7"><span
                                                    class="text2 c_bgcolor">婴儿玩具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AF%9B%E7%BB%92%E7%8E%A9%E5%85%B7"><span
                                                    class="text">毛绒玩具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%A9%E6%95%99%E7%9B%8A%E6%99%BA"><span
                                                    class="text orange">早教益智</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%88%AC%E8%A1%8C%E5%81%A5%E8%BA%AB"><span
                                                    class="text">爬行健身</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A8%A1%E5%9E%8B"><span
                                                    class="text">模型</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AB%A5%E8%BD%A6%E8%BD%AE%E6%BB%91"><span
                                                    class="text orange">童车轮滑</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E5%8A%A8%E9%81%A5%E6%8E%A7"><span
                                                    class="text">电动遥控</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%AF%E6%9C%A8%E6%8B%BC%E5%9B%BE"><span
                                                    class="text">积木拼图</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%A8%E6%BC%AB"><span
                                                    class="text">动漫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%84%BF%E7%AB%A5%E7%AE%B1%E5%8C%85"><span
                                                    class="text orange">儿童箱包</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E7%8E%A9%E5%85%B7"><span
                                                    class="text2 c_bgcolor">婴儿出行</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E6%8E%A8%E8%BD%A6"><span
                                                    class="text green">婴儿推车</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%89%E5%85%A8%E5%BA%A7%E6%A4%85"><span
                                                    class="text">安全座椅</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%83%8C%E8%A2%8B%E5%87%BA%E8%A1%8C"><span
                                                    class="text pink">背袋出行</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E5%BA%8A"><span
                                                    class="text">婴儿床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E6%A4%85"><span
                                                    class="text">婴儿椅</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AD%A6%E6%AD%A5%E8%BD%A6"><span
                                                    class="text orange">学步车</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%84%BF%E7%AB%A5%E6%88%B7%E5%A4%96"><span
                                                    class="text2 c_bgcolor">儿童户外</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%BB%91%E8%A1%8C%E8%BD%A6"><span
                                                    class="text">滑行车</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%AD%E6%89%AD%E8%BD%A6"><span
                                                    class="text">扭扭车</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E5%8A%A8%E8%BD%A6%E7%AB%A5"><span
                                                    class="text">电动车</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BD%AE%E6%BB%91"><span
                                                    class="text orange">轮滑</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%89%E5%85%A8%E6%8A%A4%E5%85%B7"><span
                                                    class="text">安全护具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B8%90%E7%AF%B7"><span
                                                    class="text pink">帐篷</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%84%BF%E7%AB%A5%E7%AE%B1%E5%8C%85"><span
                                                    class="text">儿童箱包</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%90%83%E7%B1%BB%2F%E9%A3%9E%E7%9B%98"><span
                                                    class="text">球类/飞盘</span></a>

                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AF%8D%E5%A9%B4%E7%94%A8%E5%93%81"><span
                                                    class="text2 c_bgcolor">母婴用品</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AD%95%E5%A6%88%E6%B4%97%E6%8A%A4"><span
                                                    class="text">孕妈洗护</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AD%95%E4%BA%A7%E7%94%A8%E5%93%81"><span
                                                    class="text">孕产用品</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AD%95%E5%A6%88%E8%A3%85"><span
                                                    class="text orange">孕妈装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B6%E7%93%B6%E6%B0%B4%E6%9D%AF"><span
                                                    class="text">奶瓶水杯</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%BA%E4%B9%B3%E6%9C%8D"><span
                                                    class="text pink">哺乳服</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B9%BF%E5%B7%BE%E6%B4%97%E6%B6%A4"><span
                                                    class="text">湿巾洗涤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%9D%E5%AE%9D%E6%B4%97%E6%8A%A4"><span
                                                    class="text">宝宝洗护</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%BF%E8%A3%A4"><span
                                                    class="text orange">尿裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9D%A1%E8%A2%8B%E5%BA%8A%E5%93%81"><span
                                                    class="text">睡袋床品</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B6%88%E6%AF%92%E6%9A%96%E5%A5%B6"><span
                                                    class="text green">消毒暖奶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%98%B2%E8%BE%90%E5%B0%84"><span
                                                    class="text">防辐射</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%89%E5%85%A8%E9%98%B2%E6%8A%A4"><span
                                                    class="text">安全防护</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BF%9D%E6%B8%A9%E5%A5%B6%E7%93%B6"><span
                                                    class="text orange">保温奶瓶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B6%A6%E8%82%A4%E4%B9%B3"><span
                                                    class="text">润肤乳</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%90%86%E5%8F%91%E5%99%A8"><span
                                                    class="text">理发器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%88%BD%E8%BA%AB%E7%B2%89"><span
                                                    class="text">爽身粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B9%BF%E5%B7%BE"><span
                                                    class="text">湿巾</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B6%E5%98%B4"><span
                                                    class="text">奶嘴</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%BA%E4%B9%B3%E5%86%85%E8%A1%A3"><span
                                                    class="text">哺乳内衣</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AD%95%E5%A6%87%E8%A3%A4"><span
                                                    class="text">孕妇裤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%90%B8%E5%A5%B6%E5%99%A8"><span
                                                    class="text orange">吸奶器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B4%E7%9B%86"><span
                                                    class="text">浴盆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%84%BF%E7%AB%A5%E9%A4%90%E5%85%B7"><span
                                                    class="text orange">儿童餐具</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B6%E7%B2%89"><span
                                                    class="text2 c_bgcolor">奶粉</span></a>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%9B%E5%A5%B6%E7%B2%89"><span
                                                    class="text orange">牛奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=1%E6%AE%B5%E5%A5%B6%E7%B2%89"><span
                                                    class="text green">1段奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=2%E6%AE%B5%E5%A5%B6%E7%B2%89"><span
                                                    class="text">2段奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=3%E6%AE%B5%E5%A5%B6%E7%B2%89"><span
                                                    class="text">3段奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=4%E6%AE%B5%E5%A5%B6%E7%B2%89"><span
                                                    class="text">4段奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%96%B0%E5%A6%885%E6%8A%98"><span
                                                    class="text pink">新妈5折</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%B4%E5%84%BF%E8%BE%85%E9%A3%9F"><span
                                                    class="text">婴儿辅食</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%9D%E5%AE%9D%E9%9B%B6%E9%A3%9F"><span
                                                    class="text">宝宝零食</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B1%B3%E7%B2%89"><span
                                                    class="text orange">米粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8A%E5%A5%B6%E7%B2%89"><span
                                                    class="text">羊奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%B9%E9%85%8D%E5%A5%B6%E7%B2%89"><span
                                                    class="text green">特配奶粉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%9D%E5%AE%9D%E8%90%A5%E5%85%BB"><span
                                                    class="text">宝宝营养</span></a>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat6">
                                    <i class="catico-6"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10006" class="biaotis">居家家具</a>
                                    <div class="menu_pop">

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B2%99%E5%8F%91%E7%BB%84%E5%90%88"><span
                                                    class="text2 c_bgcolor">沙发组合</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B2%99%E5%8F%91"><span
                                                    class="text">沙发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AC%A7%E5%BC%8F%E6%B2%99%E5%8F%91"><span
                                                    class="text">欧式</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B2%99%E5%8F%91%E5%BA%8A"><span
                                                    class="text orange">沙发床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9C%9F%E7%9A%AE%E6%B2%99%E5%8F%91"><span
                                                    class="text pink">真皮沙发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B8%83%E8%89%BA%E6%B2%99%E5%8F%91"><span
                                                    class="text">布沙发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%9E%E6%9C%A8%E6%B2%99%E5%8F%91"><span
                                                    class="text green">实木沙发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%95%E4%BA%BA%E6%B2%99%E5%8F%91"><span
                                                    class="text">单人沙发</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%87%92%E4%BA%BA%E6%B2%99%E5%8F%91"><span
                                                    class="text">懒人沙发</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A"><span
                                                    class="text2 c_bgcolor">床品</span></a>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AC%A7%E5%BC%8F%E5%BA%8A"><span
                                                    class="text">欧式床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%9E%E6%9C%A8%E5%BA%8A"><span
                                                    class="text orange">实木床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9A%AE%E5%BA%8A"><span
                                                    class="text">皮床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%98%E5%8F%A0%E5%BA%8A"><span
                                                    class="text">折叠床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%95%E4%BA%BA%E5%BA%8A"><span
                                                    class="text green">单人床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A6%BB%E6%A6%BB%E7%B1%B3%E5%BA%8A"><span
                                                    class="text pink">榻榻米床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%85%AC%E4%B8%BB%E5%BA%8A"><span
                                                    class="text">公主床</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A%E5%9E%AB"><span
                                                    class="text">床垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B9%B3%E8%83%B6%E5%BA%8A%E5%9E%AB"><span
                                                    class="text">乳胶床垫</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9F%9C%E5%AD%90"><span
                                                    class="text2 c_bgcolor">柜子</span></a>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E8%A7%86%E6%9F%9C"><span
                                                    class="text">电视柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A%E5%A4%B4%E6%9F%9C"><span
                                                    class="text">床头柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8C%B6%E5%87%A0"><span
                                                    class="text">茶几</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A4%90%E8%BE%B9%E6%9F%9C"><span
                                                    class="text">餐边柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%95%B4%E4%BD%93%E8%A1%A3%E6%9F%9C"><span
                                                    class="text">整体衣柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AE%80%E6%98%93%E8%A1%A3%E6%9F%9C"><span
                                                    class="text pink">简易衣柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E5%AE%B6%E5%85%B7"><span
                                                    class="text">办公家具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%88%90%E5%A5%97%E5%AE%B6%E5%85%B7"><span
                                                    class="text">成套家具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%88%B7%E5%A4%96%E5%AE%B6%E5%85%B7"><span
                                                    class="text green">户外家具</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9E%8B%E6%9F%9C"><span
                                                    class="text">鞋柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%A1%A3%E5%B8%BD%E6%9E%B6"><span
                                                    class="text">衣帽架</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B9%A6%E6%9E%B6"><span
                                                    class="text">书架</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9E%8B%E6%9E%B6"><span
                                                    class="text">鞋架</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9F%9C%E5%AD%90"><span
                                                    class="text2 c_bgcolor">桌椅板凳</span></a>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E8%84%91%E6%A1%8C"><span
                                                    class="text orange">电脑桌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%9E%E6%9C%A8%E9%A4%90%E6%A1%8C"><span
                                                    class="text">实木餐桌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A4%90%E6%A1%8C"><span
                                                    class="text">餐桌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B9%A6%E6%A1%8C"><span
                                                    class="text">书桌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%84%BF%E7%AB%A5%E5%AD%A6%E4%B9%A0%E6%A1%8C"><span
                                                    class="text">儿童学习桌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E6%A1%8C"><span
                                                    class="text orange">办公桌</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%87%B3%E5%AD%90"><span
                                                    class="text pink">凳子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8C%B6%E5%87%A0"><span
                                                    class="text">茶几</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A4%85%E5%AD%90"><span
                                                    class="text green">椅子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A4%90%E6%A1%8C%E6%A4%85"><span
                                                    class="text">餐桌椅</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E6%A4%85"><span
                                                    class="text">办公椅</span></a>

                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A%E4%B8%8A%E7%94%A8%E5%93%81"><span
                                                    class="text2 c_bgcolor">床上用品</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9B%9B%E4%BB%B6%E5%A5%97"><span
                                                    class="text">四件套</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%89%E4%BB%B6%E5%A5%97"><span
                                                    class="text">三件套</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BA%AF%E6%A3%89"><span
                                                    class="text orange">纯棉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A3%A8%E6%AF%9B"><span
                                                    class="text">磨毛</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%8F%8A%E7%91%9A%E7%BB%92"><span
                                                    class="text green">珊瑚绒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B3%95%E5%85%B0%E7%BB%92"><span
                                                    class="text">法兰绒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A9%9A%E5%BA%86"><span
                                                    class="text">婚庆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%A2%AB%E5%AD%90"><span
                                                    class="text">被子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%AC%E8%A2%AB"><span
                                                    class="text">冬被</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%BD%E7%BB%92%E8%A2%AB"><span
                                                    class="text orange">羽绒被</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%9A%95%E4%B8%9D%E8%A2%AB"><span
                                                    class="text">蚕丝被</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8A%E6%AF%9B%E8%A2%AB"><span
                                                    class="text pink">羊毛被</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%B9%85%E7%BB%92%E8%A2%AB"><span
                                                    class="text">鹅绒被</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A3%89%E8%8A%B1%E8%A2%AB"><span
                                                    class="text">棉花被</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A%E4%B8%8A%E5%A5%97%E4%BB%B6"><span
                                                    class="text2 c_bgcolor">床上套件</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9E%95%E5%A4%B4"><span
                                                    class="text orange">枕头</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9E%95%E8%8A%AF"><span
                                                    class="text">枕芯</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%AE%B0%E5%BF%86%E6%9E%95"><span
                                                    class="text green">记忆枕</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%A4%E9%A2%88%E6%9E%95"><span
                                                    class="text">护颈枕</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AF%9B%E5%B7%BE"><span
                                                    class="text orange">毛巾</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B4%E5%B7%BE"><span
                                                    class="text">浴巾</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A%E5%9E%AB"><span
                                                    class="text">床垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%8A%E8%A4%A5"><span
                                                    class="text">床褥</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%AF%9B%E6%AF%AF"><span
                                                    class="text">毛毯</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E5%AE%B6%E8%A3%85"><span
                                                    class="text2 c_bgcolor">品牌家装</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AF%8C%E5%AE%89%E5%A8%9C"><span
                                                    class="text orange">富安娜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BD%97%E8%8E%B1"><span
                                                    class="text">罗莱</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A2%A6%E6%B4%81"><span
                                                    class="text">梦洁</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%97%A0%E5%8D%B0%E8%89%AF%E5%93%81"><span
                                                    class="text">无印良品</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%92%B1%E7%9A%87"><span
                                                    class="text">钱皇</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9B%81%E7%9A%87"><span
                                                    class="text">雁皇</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%97%E4%BB%B6"><span
                                                    class="text2 c_bgcolor">套、垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B2%99%E5%8F%91%E5%9E%AB"><span
                                                    class="text orange">沙发垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B2%99%E5%8F%91%E5%A5%97"><span
                                                    class="text green">沙发套</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A4%85%E5%9E%AB"><span
                                                    class="text">椅垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9D%90%E5%9E%AB"><span
                                                    class="text pink">坐垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A3%98%E7%AA%97%E5%9E%AB"><span
                                                    class="text">飘窗垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B3%95%E5%85%B0%E7%BB%92"><span
                                                    class="text">法兰绒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BF%9D%E6%9A%96%E5%9E%AB"><span
                                                    class="text orange">保暖垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B1%85%E5%AE%B6%E6%8B%96%E9%9E%8B"><span
                                                    class="text">居家拖鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A3%89%E6%8B%96%E9%9E%8B"><span
                                                    class="text">棉拖鞋</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9C%B0%E6%9D%BF%E6%8B%96"><span
                                                    class="text">地板拖</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B4%E5%AE%A4%E6%8B%96"><span
                                                    class="text">浴室拖</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8C%85%E8%B7%9F%E6%A3%89%E6%8B%96"><span
                                                    class="text">包跟棉拖</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%B1%E6%9E%95%E9%9D%A0%E5%9E%AB"><span
                                                    class="text green">抱枕靠垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9C%B0%E5%9E%AB"><span
                                                    class="text">地垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B4%E5%AE%A4%E5%9E%AB"><span
                                                    class="text orange">浴室垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A4%90%E6%A1%8C%E5%B8%83%E8%89%BA"><span
                                                    class="text">餐桌布艺</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%98%B2%E5%B0%98%E7%BD%A9"><span
                                                    class="text">防尘罩</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AA%97%E5%B8%98"><span
                                                    class="text orange">窗帘</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%97%A8%E5%B8%98"><span
                                                    class="text">门帘</span></a>

                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat10">
                                    <i class="catico-7"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10007" class="biaotis">生活家电</a>
                                    <div class="menu_pop">

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E8%A7%86"><span
                                                    class="text2 c_bgcolor">电视</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B3%E6%9D%BF%E7%94%B5%E8%A7%86"><span
                                                    class="text">平板电视</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%89%E5%8D%93%E7%94%B5%E8%A7%86"><span
                                                    class="text orange">安卓电视</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=LED%E7%94%B5%E8%A7%86"><span
                                                    class="text">LED电视</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BD%91%E7%BB%9C%E7%94%B5%E8%A7%86"><span
                                                    class="text pink">网络电视</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=3D%E7%94%B5%E8%A7%86"><span
                                                    class="text green">3D电视</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=4K%E8%B6%85%E9%AB%98%E6%B8%85"><span
                                                    class="text">4K超高清</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%B6%E5%BA%AD%E5%BD%B1%E9%99%A2"><span
                                                    class="text">家庭影院</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B4%97%E8%A1%A3%E6%9C%BA"><span
                                                    class="text2 c_bgcolor">洗衣机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%BB%9A%E7%AD%92"><span
                                                    class="text">滚筒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%85%A8%E8%87%AA%E5%8A%A8"><span
                                                    class="text orange">全自动</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BF%B7%E4%BD%A0%E6%B4%97%E8%A1%A3%E6%9C%BA"><span
                                                    class="text">迷你洗衣机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%8C%E6%9D%A0%E6%B4%97%E8%A1%A3%E6%9C%BA"><span
                                                    class="text">双杠</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%B0%E7%AE%B1"><span
                                                    class="text2 c_bgcolor">冰箱</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%B7%E6%9F%9C"><span
                                                    class="text">冷柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%8F%E5%86%B0%E7%AE%B1"><span
                                                    class="text orange">小冰箱</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BA%8C%E9%97%A8"><span
                                                    class="text green">二门</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%89%E9%97%A8"><span
                                                    class="text">三门</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A4%9A%E9%97%A8"><span
                                                    class="text">多门</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AF%B9%E5%BC%80%E9%97%A8"><span
                                                    class="text">对开门</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%85%92%E6%9F%9C"><span
                                                    class="text">酒柜</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A9%BA%E8%B0%83"><span
                                                    class="text2 c_bgcolor">空调</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A9%BA%E8%B0%83%E5%8F%98%E9%A2%91"><span
                                                    class="text orange">空调变频</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8C%82%E6%9C%BA%2F%E5%A3%81%E6%8C%82%E5%BC%8F%E7%A9%BA%E8%B0%83"><span
                                                    class="text">挂机/壁挂式</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9F%9C%E6%9C%BA%2F%E7%AB%8B%E5%BC%8F%E7%A9%BA%E8%B0%83"><span
                                                    class="text">柜机/立式</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%BB%E5%8A%A8%E7%A9%BA%E8%B0%83"><span
                                                    class="text orange">移动空调</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%AD%E5%A4%AE%E7%A9%BA%E8%B0%83"><span
                                                    class="text">中央空调</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%98%E9%A2%91%E5%AE%9A%E9%A2%91%E7%A9%BA%E8%B0%83"><span
                                                    class="text green">变频定频</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%86%B7%E6%9A%96%E5%9E%8B%E7%A9%BA%E8%B0%83"><span
                                                    class="text">冷暖型</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%95%E5%86%B7%E5%9E%8B1%E5%8C%B9%E7%A9%BA%E8%B0%83"><span
                                                    class="text">单冷型1匹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=1%E5%8C%B9%E7%A9%BA%E8%B0%83"><span
                                                    class="text">1匹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=1.5%E5%8C%B9%E7%A9%BA%E8%B0%83"><span
                                                    class="text">1.5匹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=2%E5%8C%B9%E7%A9%BA%E8%B0%83"><span
                                                    class="text">2匹</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%83%AD%E6%B0%B4%E5%99%A8"><span
                                                    class="text2 c_bgcolor">水器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E7%83%AD%E6%B0%B4%E5%99%A8"><span
                                                    class="text green">电热水器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%87%83%E6%B0%94%E7%83%AD%E6%B0%B4%E5%99%A8"><span
                                                    class="text orange">燃气热水器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BE%AE%E7%94%B5%E8%84%91%E7%83%AD%E6%B0%B4%E5%99%A8"><span
                                                    class="text">微电脑热水器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%81%A5%E6%8E%A7%E7%83%AD%E6%B0%B4%E5%99%A8"><span
                                                    class="text">遥控</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8E%A8%E5%AE%9D"><span
                                                    class="text">厨宝</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E5%AE%B6%E7%94%B5"><span
                                                    class="text2 c_bgcolor">品牌家电</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B7%E5%B0%94"><span
                                                    class="text">海尔</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E7%9A%84"><span
                                                    class="text">美的</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A0%BC%E5%8A%9B"><span
                                                    class="text orange">格力</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%88%9B%E7%BB%B4"><span
                                                    class="text">创维</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BA%B7%E4%BD%B3"><span
                                                    class="text pink">康佳</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B5%B7%E4%BF%A1"><span
                                                    class="text">海信</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=TCL"><span
                                                    class="text orange">TCL</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BF%97%E9%AB%98"><span
                                                    class="text">志高</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%95%BF%E8%99%B9"><span
                                                    class="text">长虹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%A5%E5%85%8B%E6%96%AF"><span
                                                    class="text">奥克斯</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%A5%BF%E9%97%A8%E5%AD%90"><span
                                                    class="text">西门子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%B9%E5%A3%B0"><span
                                                    class="text">容声</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E8%8F%B1"><span
                                                    class="text">美菱</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A3%9E%E5%88%A9%E6%B5%A6"><span
                                                    class="text">飞利浦</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B9%9D%E9%98%B3"><span
                                                    class="text">九阳</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8B%8F%E6%B3%8A%E5%B0%94"><span
                                                    class="text orange">苏泊尔</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8E%A8%E6%88%BF%E7%94%B5%E5%99%A8"><span
                                                    class="text2 c_bgcolor">厨房电器</span></a>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E9%A5%AD%E7%85%B2"><span
                                                    class="text green">电饭煲</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B2%B9%E7%83%9F%E6%9C%BA"><span
                                                    class="text">油烟机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%87%83%E6%B0%94%E7%81%B6"><span
                                                    class="text orange">燃气灶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B6%88%E6%AF%92%E6%9F%9C"><span
                                                    class="text">消毒柜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E5%8E%8B%E5%8A%9B%E9%94%85"><span
                                                    class="text">电压力锅</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E7%A3%81%E7%82%89"><span
                                                    class="text orange">电磁炉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E7%83%AD%E6%B0%B4%E5%A3%B6"><span
                                                    class="text">电热水壶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E7%83%A4%E7%AE%B1"><span
                                                    class="text">电烤箱</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BE%AE%E6%B3%A2%E7%82%89"><span
                                                    class="text green">微波炉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9D%A2%E5%8C%85%E6%9C%BA"><span
                                                    class="text">面包机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A6%A8%E6%B1%81%E6%9C%BA"><span
                                                    class="text orange">榨汁机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E7%82%96%E9%94%85"><span
                                                    class="text">电炖锅</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A5%AE%E6%B0%B4%E6%9C%BA"><span
                                                    class="text green">饮水机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%AB%E5%9C%B0%E6%9C%BA"><span
                                                    class="text">扫地机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E9%A3%8E%E6%89%87"><span
                                                    class="text">电风扇</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%90%B8%E5%B0%98%E5%99%A8"><span
                                                    class="text green">吸尘器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8C%82%E7%83%AB%E6%9C%BA"><span
                                                    class="text">挂烫机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B2%E8%A1%A3%E6%9C%BA"><span
                                                    class="text">干衣机</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%8F%E7%94%B5%E5%99%A8"><span
                                                    class="text2 c_bgcolor">小电器</span></a>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%87%80%E6%B0%B4%E5%99%A8"><span
                                                    class="text">净水器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BA%AF%E6%B0%B4%E6%9C%BA"><span
                                                    class="text">纯水机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A9%BA%E6%B0%94%E5%87%80%E5%8C%96%E5%99%A8"><span
                                                    class="text orange">空气净化器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%BD%E6%B9%BF%E5%99%A8"><span
                                                    class="text">抽湿器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%B6%E7%94%A8%E6%B0%A7%E5%90%A7"><span
                                                    class="text">家用氧吧</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%89%83%E9%A1%BB%E5%88%80"><span
                                                    class="text green">剃须刀</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E5%90%B9%E9%A3%8E"><span
                                                    class="text">电吹风</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E5%8A%A8%E7%89%99%E5%88%B7"><span
                                                    class="text">电动牙刷</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%BE%8E%E5%AE%B9%E4%BB%AA"><span
                                                    class="text orange">美容仪</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%B7%2F%E7%9B%B4%E5%8F%91%E5%99%A8"><span
                                                    class="text">卷/直发器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BD%93%E9%87%8D%E7%A7%A4"><span
                                                    class="text pink">体重秤</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8C%89%E6%91%A9%E6%A4%85"><span
                                                    class="text">按摩椅</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8C%89%E6%91%A9%E9%9D%A0%E5%9E%AB"><span
                                                    class="text green">按摩靠垫</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8C%89%E6%91%A9%E6%8A%AB%E8%82%A9"><span
                                                    class="text">按摩披肩</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B6%B3%E6%B5%B4%E5%99%A8"><span
                                                    class="text">足浴器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%90%86%E5%8F%91%E5%99%A8"><span
                                                    class="text">理发器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%98%A6%E8%BA%AB%E8%85%B0%E5%B8%A6"><span
                                                    class="text">瘦身腰带</span></a>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat8">
                                    <i class="catico-8"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10007" class="biaotis">数码手机电脑</a>
                                    <div class="menu_pop">


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E6%89%8B%E6%9C%BA"><span
                                                    class="text2 c_bgcolor">精品推荐</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AD%85%E6%97%8F%E6%89%8B%E6%9C%BA"><span
                                                    class="text">魅族手机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%8F%E7%B1%B3%E7%89%B9%E4%BE%9B"><span
                                                    class="text orange">小米特供</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%8E%E4%B8%BA%E8%8D%A3%E8%80%80"><span
                                                    class="text green">华为荣耀</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A4%A7%E7%A5%9EF2"><span
                                                    class="text">大神F2</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%83%AD%E5%8D%96%E6%89%8B%E6%9C%BA"><span
                                                    class="text">热卖手机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%89%E6%98%9F%E7%9B%96%E4%B8%96"><span
                                                    class="text">三星盖世</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=iPhone"><span
                                                    class="text orange">iPhone</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8F%8C%E5%8D%A1%E5%8F%8C%E5%BE%85"><span
                                                    class="text">双卡双待</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E6%B8%85%E5%A4%A7%E5%B1%8F"><span
                                                    class="text pink">高清大屏</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%87%AA%E6%8B%8D%E7%A5%9E%E5%99%A8"><span
                                                    class="text">自拍神器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E6%B8%85%E6%8B%8D%E6%91%84"><span
                                                    class="text">高清拍摄</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%BB%E5%8A%A84G"><span
                                                    class="text">移动4G</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%81%94%E9%80%9A4G"><span
                                                    class="text">联通4G</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E4%BF%A14G"><span
                                                    class="text orange">电信4G</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%90%88%E7%BA%A6%E6%9C%BA"><span
                                                    class="text">合约机</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E6%89%8B%E6%9C%BA"><span
                                                    class="text2 c_bgcolor">品牌手机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8B%B9%E6%9E%9C"><span
                                                    class="text orange">苹果</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%89%E6%98%9F"><span
                                                    class="text">三星</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B0%8F%E7%B1%B3"><span
                                                    class="text">小米</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=HTC"><span
                                                    class="text">HTC</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%AF%BA%E5%9F%BA%E4%BA%9A"><span
                                                    class="text">诺基亚</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%8E%E4%B8%BA"><span
                                                    class="text orange">华为</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%81%94%E6%83%B3"><span
                                                    class="text">联想</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AD%85%E6%97%8F"><span
                                                    class="text green">魅族</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B4%A2%E5%B0%BC"><span
                                                    class="text">索尼</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%AD%E5%85%B4"><span
                                                    class="text pink">中兴</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%85%B7%E6%B4%BE"><span
                                                    class="text">酷派</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=OPPO"><span
                                                    class="text">OPPO</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=vivo"><span
                                                    class="text">vivo</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=InFocus"><span
                                                    class="text">InFocus</span></a>
                                        <div class="jiange"></div>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%AC%94%E8%AE%B0%E6%9C%AC"><span
                                                    class="text2 c_bgcolor">笔记本</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B8%B8%E6%88%8F%E6%9C%AC"><span
                                                    class="text orange">游戏本</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B6%85%E7%BA%A7%E6%9C%AC"><span
                                                    class="text">超级本</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%A0%A1%E5%9B%AD%E6%9C%AC"><span
                                                    class="text green">校园本</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=PC%E5%B9%B3%E6%9D%BF%E4%BA%8C%E5%90%88%E4%B8%80"><span
                                                    class="text">PC平板二合一</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%95%86%E5%8A%A1%E9%A2%86%E8%A2%96"><span
                                                    class="text">商务领袖</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B3%E6%9D%BF%E7%94%B5%E8%84%91"><span
                                                    class="text2 c_bgcolor">平板电脑</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=iPad"><span
                                                    class="text orange">iPad</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%AE%89%E5%8D%93%E5%B9%B3%E6%9D%BF"><span
                                                    class="text">安卓平板</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=Windows"><span
                                                    class="text">Windows</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%80%9A%E8%AF%9D%E5%B9%B3%E6%9D%BF"><span
                                                    class="text pink">通话平板</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B3%E6%9D%BF%E7%94%B5%E8%84%91"><span
                                                    class="text orange">平板电脑</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E5%B9%B3%E6%9D%BF"><span
                                                    class="text">办公平板</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9B%9B%E6%A0%B8%E5%B9%B3%E6%9D%BF"><span
                                                    class="text">四核平板</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B3%E6%9D%BF%E7%94%B5%E8%84%91"><span
                                                    class="text2 c_bgcolor">台式机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B8%B8%E6%88%8F%E6%82%8D%E5%B0%86"><span
                                                    class="text green">游戏悍将</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E5%88%A9%E5%99%A8"><span
                                                    class="text">办公利器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%B8%80%E4%BD%93%E6%9C%BA"><span
                                                    class="text">一体机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%81%E7%89%8C%E5%8F%B0%E5%BC%8F%E6%9C%BA"><span
                                                    class="text orange">品牌台式机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%88%9B%E4%B8%9A%E6%98%8E%E6%98%9F"><span
                                                    class="text">创业明星</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E8%84%91%E9%85%8D%E4%BB%B6"><span
                                                    class="text2 c_bgcolor">电脑配件</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=DIY%E7%94%B5%E8%84%91"><span
                                                    class="text">DIY电脑</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E8%84%91%E7%A1%AC%E4%BB%B6"><span
                                                    class="text pink">电脑硬件</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%98%BE%E7%A4%BA%E5%99%A8"><span
                                                    class="text">显示器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9C%BA%E6%A2%B0%E9%94%AE%E7%9B%98"><span
                                                    class="text">机械键盘</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%BC%A0%E6%A0%87"><span
                                                    class="text orange">鼠标</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B7%AF%E7%94%B1%E5%99%A8"><span
                                                    class="text">路由器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%95%B0%E6%8D%AE%E7%BA%BF"><span
                                                    class="text">数据线</span></a>

                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E8%AE%BE%E5%A4%87"><span
                                                    class="text2 c_bgcolor">办公设备</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%BB%E5%8A%A8%E7%A1%AC%E7%9B%98"><span
                                                    class="text green">移动硬盘</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=U%E7%9B%98"><span
                                                    class="text orange">U盘</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%97%AA%E5%AD%98%E5%8D%A1"><span
                                                    class="text">闪存卡</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8A%95%E5%BD%B1%E4%BB%AA"><span
                                                    class="text orange">投影仪</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%93%E5%8D%B0%E6%9C%BA"><span
                                                    class="text">打印机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8A%9E%E5%85%AC%E8%80%97%E6%9D%90"><span
                                                    class="text">办公耗材</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%B5%E6%95%99%E6%96%87%E5%85%B7"><span
                                                    class="text pink">电教文具</span></a>

                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%95%B0%E7%A0%81%E7%9B%B8%E6%9C%BA"><span
                                                    class="text2 c_bgcolor">数码相机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%87%AA%E6%8B%8D%E7%A5%9E%E5%99%A8"><span
                                                    class="text">自拍神器</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%95%E5%8F%8D"><span
                                                    class="text">单反</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BE%AE%E5%8D%95"><span
                                                    class="text">微单</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%95%9C%E5%A4%B4"><span
                                                    class="text green">镜头</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8B%8D%E7%AB%8B%E5%BE%97"><span
                                                    class="text orange">拍立得</span></a>
                                        <div class="jiange"></div>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BD%B1%E9%9F%B3%E9%85%8D%E4%BB%B6"><span
                                                    class="text2 c_bgcolor">影音配件</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%80%B3%E6%9C%BA%E8%80%B3%E9%BA%A6"><span
                                                    class="text orange">耳机耳麦</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9F%B3%E7%AE%B1%E9%9F%B3%E5%93%8D"><span
                                                    class="text">音箱音响</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%AB%98%E6%B8%85%E7%9B%92%E5%AD%90"><span
                                                    class="text">高清盒子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%BB%E5%8A%A8%E7%94%B5%E6%BA%90"><span
                                                    class="text pink">移动电源</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%93%9D%E7%89%99%E8%80%B3%E6%9C%BA"><span
                                                    class="text green">蓝牙耳机</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%89%8B%E6%9C%BA%E9%85%8D%E4%BB%B6"><span
                                                    class="text">手机配件</span></a>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat9">
                                    <i class="catico-9"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10004" class="biaotis">零食酒水</a>
                                    <div class="menu_pop">


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E4%BC%91%E9%97%B2%E9%9B%B6%E9%A3%9F"><span
                                                    class="text2 c_bgcolor">休闲零食</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B1%B1%E6%A0%B8%E6%A1%83"><span
                                                    class="text">山核桃</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B3%96%E6%9E%9C"><span
                                                    class="text orange">糖果</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A4%8F%E5%A8%81%E5%A4%B7%E6%9E%9C"><span
                                                    class="text">夏威夷果</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%BC%80%E5%BF%83%E6%9E%9C"><span
                                                    class="text">开心果</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BE%A3%E6%9D%A1"><span
                                                    class="text">辣条</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%20%E9%A5%BC%E5%B9%B2"><span
                                                    class="text green"> 饼干</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B3%95%E7%82%B9"><span
                                                    class="text">糕点</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%B1%86%E5%B9%B2"><span
                                                    class="text orange">豆干</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%93%9C%E5%AD%90"><span
                                                    class="text">瓜子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%B1%BC%E5%B9%B2"><span
                                                    class="text pink">鱼干</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B9%B2%E8%B4%A7"><span
                                                    class="text">干货</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%B2%BD%E5%AD%90"><span
                                                    class="text">粽子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%89%9B%E8%82%89%E5%B9%B2"><span
                                                    class="text orange">牛肉干</span></a>
                                        <div class="jiange"></div>

                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A5%AE%E6%96%99"><span
                                                    class="text2 c_bgcolor">饮料</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A5%B6%E8%8C%B6"><span
                                                    class="text orange">奶茶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%86%8F%E8%9C%A1%E9%85%B8%E5%A5%B6"><span
                                                    class="text">熏蜡酸奶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%BA%A6%E7%89%87"><span
                                                    class="text">麦片</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%92%96%E5%95%A1"><span
                                                    class="text orange">咖啡</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%20%E7%89%9B%E5%A5%B6"><span
                                                    class="text">牛奶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%20%E7%BA%AF%E7%89%9B%E5%A5%B6"><span
                                                    class="text green">纯牛奶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%20%E9%85%B8%E7%89%9B%E5%A5%B6"><span
                                                    class="text">酸牛奶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%20%E9%A6%99%E8%95%89%E7%89%9B%E5%A5%B6"><span
                                                    class="text">香蕉牛奶</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9E%9C%E6%B1%81"><span
                                                    class="text orange">果汁</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%91%A1%E8%90%84%E9%85%92"><span
                                                    class="text">葡萄酒</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%9D%A2%E9%A3%9F"><span
                                                    class="text">面食</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A5%AE%E6%96%99"><span
                                                    class="text">饮料</span></a>
                                        <div class="jiange"></div>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%9F%E9%B2%9C%E8%94%AC%E8%8F%9C"><span
                                                    class="text2 c_bgcolor">生鲜蔬菜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%9C%9F%E8%B1%86"><span
                                                    class="text">土豆</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%95%AA%E8%96%AF"><span
                                                    class="text">番薯</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B1%B1%E8%8D%AF"><span
                                                    class="text orange">山药</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8E%B2%E8%97%95"><span
                                                    class="text">莲藕</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%20%E5%87%80%E8%8F%9C"><span
                                                    class="text green">净菜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%8E%89%E7%B1%B3"><span
                                                    class="text">玉米</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%A7%8B%E8%91%B5"><span
                                                    class="text orange">秋葵</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%A4%A7%E8%92%9C"><span
                                                    class="text">大蒜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%94%9F%E5%A7%9C"><span
                                                    class="text">生姜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%8D%97%E7%93%9C"><span
                                                    class="text">南瓜</span></a>
                                        <div class="jiange"></div>


                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%B0%B4%E6%9E%9C"><span
                                                    class="text2 c_bgcolor">水果类</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8B%B9%E6%9E%9C"><span
                                                    class="text orange">苹果</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8D%94%E6%9E%9D"><span
                                                    class="text">荔枝</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%A5%BF%E7%93%9C"><span
                                                    class="text">西瓜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%91%A1%E8%90%84"><span
                                                    class="text">葡萄</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E9%A6%99%E8%95%89"><span
                                                    class="text">香蕉</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%93%88%E5%AF%86%E7%93%9C"><span
                                                    class="text">哈密瓜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%BD%A6%E5%8E%98%E5%AD%90"><span
                                                    class="text orange">车厘子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8A%92%E6%9E%9C"><span
                                                    class="text green">芒果</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%8F%90%E5%AD%90"><span
                                                    class="text pink">提子</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E8%8D%89%E8%8E%93"><span
                                                    class="text">草莓</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%9F%B3%E6%A6%B4"><span
                                                    class="text orange">石榴</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9F%A0%E6%AA%AC"><span
                                                    class="text">柠檬</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E5%B1%B1%E7%AB%B9"><span
                                                    class="text">山竹</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E6%9C%A8%E7%93%9C"><span
                                                    class="text">木瓜</span></a>
                                        <a target="_blank"
                                           href="/index.php?mod=tao&amp;act=list&amp;q=%E7%81%AB%E9%BE%99%E6%9E%9C"><span
                                                    class="text green">火龙果</span></a>

                                    </div>
                                </li>

                            </ul>


                        </div>

                    </div>
                    <script src="/fenleimulu.js" type="text/javascript"></script>
            </li>

            <?php
            $nav_c = count($nav);
            $nav_num = 10; //导航个数
            $nav_c = $nav_c >= $nav_num ? $nav_num : $nav_c;

            $nav_cur_ok = 0;
            if ($_GET['code'] != '') {
                for ($i = 0; $i < $nav_c; $i++) {
                    $dom_id = "";
                    if ($nav[$i]['code'] == $_GET['code'] && $nav_cur_ok == 0) {
                        $nav[$i]['dom_id'] = "id='fontt'";
                        $nav_cur_ok = 1;
                    } else {
                        $nav[$i]['dom_id'] = "";
                    }
                }
            }

            for ($i = 0; $i < $nav_c; $i++) {
                $have_child_class = '';
                if ($nav_cur_ok == 0) {
                    $dom_id = "";
                    if ($nav[$i]['tag'] == PAGETAG && $nav_cur_ok == 0) {
                        $dom_id = "id='fontt'";
                        $nav_cur_ok = 1;
                    }
                } else {
                    $dom_id = $nav[$i]['dom_id'];
                }

                if (!empty($nav[$i]['child'])) {
                    $have_child_class = '';
                    $em = '<em></em>';
                } else {
                    $have_child_id = '';
                    $em = '';
                }
                if ($i == $nav_c - 1) {
                    $lastclass = '';
                } else {
                    $lastclass = ' ';
                }
                ?>
                <li class="linav<?= $have_child_class ?><?= $lastclass ?>" <?= $dom_id ?>><a <?= $nav[$i]['target'] ?>
                            class="anav"
                            href="<?= $nav[$i]['link'] ?>"><?= $nav[$i]['title'] ?><?= $nav[$i]['type_img'] ?><?= $em ?></a>
                </li>
            <?php } ?>

        </ul>
    </div>
</div>

<script>
    var sousuoxiala = new Array();
    sousuoxiala[0] = new Array("tao", "view", "淘宝相关宝贝");
    <?php if(BIJIA > 1){?>
    sousuoxiala[1] = new Array("mall", "goods", "全网比价");
    <?php }?>

    //sousuoxiala[3]=new Array("zhannei","index","站内精选宝贝");
    /*sousuoxiala[4]=new Array("zhidemai","index","值得买精选宝贝"); */

    $searchInput = $("#s-txt");

    $(".have_child").hover(function () {
        thisId = $(this).attr('id');
        $(this).attr('id', 'navc');
        $(this).find("a").eq(0).addClass("sub_on").removeClass("sub");
        $(this).find("ul").show();
    }, function () {
        if (typeof (thisId) == "undefined") {
            thisId = '';
        }
        $(this).attr('id', thisId);
        $(this).find("a").eq(0).addClass("sub").removeClass("sub_on");
        $(this).find("ul").hide()
    });
    $searchInput.focusClear();
    $(function () {
        $(".search_quan").click(function () {
            location.href = "index.php?mod=goods&act=index&search=" + $searchInput.val();
            return false;
        });
        $(".search_super").click(function () {
            location.href = "index.php?mod=goods&act=index&search=" + $searchInput.val();
            return false;
        });
    })
</script>
<div id="header-bottom" style="height:0px; overflow:hidden"></div>