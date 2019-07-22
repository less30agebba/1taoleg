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
                                    <a target="_blank" href="index.php?mod=goods&act=index&cid=10001" class="biaotis">女装/Women's
                                        wear</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=流行+女装">流行女装</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=女装+鞋">女鞋</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=内衣" >女士内衣/男士内衣</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=服+居家">家居服</a></dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat2">
                                    <i class="catico-2"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10002" class="biaotis">鞋包/Shoe
                                        bag</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=鞋+运动">运动鞋</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=鞋+男">流行男鞋</a>/<a href="/index.php?mod=goods&act=index&search=鞋+皮">皮鞋</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=鞋+女" >女鞋</a></dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat3">
                                    <i class="catico-3"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10003" class="biaotis">美妆/Beauty
                                        makeup</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=口红">口红</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=护肤">护肤</a>/<a href="/index.php?mod=goods&act=index&search=洁面">洁面</a>/<a href="/index.php?mod=goods&act=index&search=爽肤水">爽肤水</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=防晒" >防晒霜</a>/<a href="/index.php?mod=goods&act=index&search=防晒" >防晒乳</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=面膜">面膜</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=粉底">粉底</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=眼线">眼线</a>/<a href="/index.php?mod=goods&act=index&search=眉笔">眉笔</a></dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat4">
                                    <i class="catico-4"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10004" class="biaotis">美食/Delicious
                                        food</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=零食">零食</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=特产">特产</a></dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat5">
                                    <i class="catico-5"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10005" class="biaotis">母婴/
                                        Children's</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=奶粉">奶粉</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=保健">保健品</a>/<a href="/index.php?mod=goods&act=index&search=滋补品">滋补品</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=孕妇装" >孕妇装</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=尿布">尿布</a></dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat6">
                                    <i class="catico-6"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10006" class="biaotis">居家/Home</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=居家+水">桶装水</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=桌布">桌布</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=道具" >道具</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=伞">伞</a> / <a href="/index.php?mod=goods&act=index&search=居家+包">包</a> </dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=床" >床上用品</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=风扇">风扇</a> / <a href="/index.php?mod=goods&act=index&search=电吹风">电吹风</a> / <a href="/index.php?mod=goods&act=index&search=路由器">路由器</a> </dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=桌">木质家具</a> / <a href="/index.php?mod=goods&act=index&search=植物">绿色植物</a> </dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat10">
                                    <i class="catico-7"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10007" class="biaotis">数码/Digital</a>
                                    <div class="menu_pop">
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=平板电脑">平板电脑</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=耳机">耳机</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=手机壳" >手机壳</a> / <a href="/index.php?mod=goods&act=index&search=贴膜" >手机膜</a></dt>
                                        </dl>
                                        <dl>
                                            <dt><a href="/index.php?mod=goods&act=index&search=数据线">数据线</a></dt>
                                        </dl>
                                    </div>
                                </li>
                                <li data-submenu-id="tb-subcat8">
                                    <i class="catico-8"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10008" class="biaotis">手机/Mobile
                                        phone</a>
                                </li>
                                <li data-submenu-id="tb-subcat9">
                                    <i class="catico-9"></i>
                                    <a target="_blank" href="/index.php?mod=goods&act=index&cid=10008" class="biaotis">其它/Other</a>
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