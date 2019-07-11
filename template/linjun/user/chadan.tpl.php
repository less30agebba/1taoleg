<?php
if ( !defined( 'INDEX' ) ) {
	exit( 'Access Denied' );
}
$pagesize=10;

$page = $_GET['page'];
$q    =trim( $_GET['q'] );

if ( WJT==0&&!$q ) {
	$tmp  =explode( '-', PLUGIN_QUERY );
	$q    =trim( $tmp[1] );
	$page =trim( $tmp[2] );
	unset( $tmp );
}

$gonggao    =$plugin_data['gonggao'];
$color      =$plugin_data['color'];
$color      =$color?$color:'none';
$pstyle     =$plugin_data['pstyle'];
$page_arr   =array( 'q'=>$q );
$is_orderid =false;
/*判断是否是订单号，一般没有这么长的整数搜索*/
if ( strlen( $q )===15&&is_numeric( $q ) ) {
	$is_orderid =true;
}

if ( $pstyle<1 ) {$pstyle='';}

$page   =!$page?'1':intval( $page );
$frmnum =( $page-1 )*$pagesize;
$where  ='';
$where1 ='';
if ( TAOTYPE==1 ) {//有api用户不用status字段
	$where1 =' and status>1';
}

if ( !$q ) {
	$time  ='"'.$plugin_data['sdate'].' 00:00:00"';
	$where ='checked=0 and create_time>'.$time.$where1;
	$total =$duoduo->count( 'tradelist', $where );
	$dd    =$duoduo->select_all( 'tradelist', '*', $where.' order by id desc limit '.$frmnum.','.$pagesize, false );
}elseif ( $is_orderid===true ) {
	if ( TAOTYPE==1 ) {
		$where = ' and trade_id_former = "' . $q . '"';
	}
	else {
		$where = ' and trade_id = "' . $q . '"';
	}
	$where ='checked=0'.$where.$where1;
	$total =$duoduo->count( 'tradelist', $where );
	$dd    =$duoduo->select_all( 'tradelist', '*', $where.' order by create_time,id desc limit '.$frmnum.','.$pagesize, false );
}else {
	$where ='checked=0 and item_title like "%'.$q.'%"'.$where1;
	$total =$duoduo->count( 'tradelist', $where );
	$dd    =$duoduo->select_all( 'tradelist', '*', $where.' order by create_time,id desc limit '.$frmnum.','.$pagesize, false );
}

if ( !function_exists( 'dingdan_page' ) ) {
	function dingdan_page( $totle, $displaypg = 20, $url = '', $wjt=0, $wjtmodel=0, $shownum = 1, $showlvtao = 7 ) {
		if ( $wjtmodel==0 ) {
			$page = $_GET['p']?(int)$_GET['p']:1;
		}
		else {
			if ( $wjt ==1 ) {
				$tmp  =explode( '-', PLUGIN_QUERY );
				$page =$tmp[2];unset( $tmp );
			}else {
				$page = $_GET['page'];
			}
			$page =!$page?'1':intval( $page );
		}
		if ( $wjt ==0 ) {
			if ( $wjtmodel ==0 ) {
				$url .='&page';
			}
			else {
				$url .='&page';
			}
		}
		elseif ( $wjt ==1 ) {
			$url =preg_replace( '/\.html$/', '', $url );
		}

		//页码计算：
		$lastpg     = ceil( $totle / $displaypg ); //最后页，也是总页数
		$page       = min( $lastpg, $page );
		$prepg      = $page -1; //上一页
		$nextpg     = ( $page == $lastpg ? 0 : $page +1 ); //下一页
		$firstcount = ( $page -1 ) * $displaypg;

		//如果只有一页则跳出函数：
		if ( $lastpg <= 1 )
			return false;

		if ( $wjt == '0' ) {
			if ( $prepg )
				if ( $wjtmodel ==0 ) {
					$pagenav .= "<a href='$url/$prepg' class='pg-prev'>上一页</a>";
				}
			else {
				$pagenav .= "<a href='$url-$prepg.html' class='pg-prev'>上一页</a>";
			}
			else
				$pagenav .= "<span class='pg-prev'>上一页</span>";

		} else {
			if ( $prepg )
				$pagenav .= "<a href='$url=$prepg' class='pg-prev'>上一页</a>";
			else
				$pagenav .= "<span class='pg-prev'>上一页</span>";
		}
		if ( $shownum == 1 ) {
			$o = $showlvtao; //中间页码表总长度，为奇数
			$u = ceil( $o / 2 ); //根据$o计算单侧页码宽度$u
			$f = $page - $u; //根据当前页$currentPage和单侧宽度$u计算出第一页的起始数字
			//str_replace('{p}',,$fn)//替换格式
			if ( $f < 0 ) {
				$f = 0;
			} //当第一页小于0时，赋值为0
			$n = $lastpg; //总页数,20页
			if ( $n < 1 ) {
				$n = 1;
			} //当总数小于1时，赋值为1
			if ( $page == 1 ) {
				$pagenav .= '<span>1</span>';
			} else {
				if ( $wjt == '1' ) {
					if ( $wjtmodel==0 ) {
						$pagenav .= "<a href='$url/1'>1</a>";
					}
					else {
						$pagenav .= "<a href='$url-1.html'>1</a>";
					}
				} else {
					$pagenav .= "<a href='$url=1'>1</a>";
				}
			}
			///////////////////////////////////////
			for ( $i = 1; $i <= $o; $i++ ) {
				if ( $n <= 1 ) {
					break;
				} //当总页数为1时
				$c = $f + $i; //从第$c开始累加计算
				if ( $i == 1 && $c > 2 ) {
					$pagenav .= '<i>...</i>';
				}
				if ( $c == 1 ) {
					continue;
				}
				if ( $c == $n ) {
					break;
				}
				if ( $c == $page ) {
					$pagenav .= '<span>' . $page . '</span>';
				} else {
					if ( $wjt == '1' ) {
						if ( $wjtmodel==0 ) {
							$pagenav .= "<a href='$url/$c'>$c</a>";
						}
						else {
							$pagenav .= "<a href='$url-$c.html'>$c</a>";
						}
					} else {
						$pagenav .= "<a href='$url=$c'>$c</a>";
					}
				}
				if ( $i == $o && $c < $n -1 ) {
					$pagenav .= '<i>...</i>';
				}
				if ( $i > $n ) {
					break;
				} //当总页数小于页码表长度时
			}
			if ( $page == $n && $n != 1 ) {
				$pagenav .= '<span>' . $n . '</span>';
			} else {
				if ( $wjt == '1' ) {
					if ( $wjtmodel==0 ) {
						$pagenav .= "<a href='$url/$n'>$n</a>";
					}
					else {
						$pagenav .= "<a href='$url-$n.html'>$n</a>";
					}
				} else {
					$pagenav .= "<a href='$url=$n'>$n</a>";
				}
			}
		}

		if ( $wjt == '0' ) {
			if ( $nextpg )
				if ( $wjtmodel==0 ) {
					$pagenav .= "<a href='$url/$nextpg' class='pg-next'>下一页</a>";
				}
			else {
				$pagenav .= "<a href='$url-$nextpg.html' class='pg-next'>下一页</a>";
			}
			else
				$pagenav .= "<span class='pg-next'>下一页</span>";
			;
		} else {
			if ( $nextpg )
				$pagenav .= "<a href='$url=$nextpg' class='pg-next'>下一页</a>";
			else
				$pagenav .= "<span class='pg-next'>下一页</span>";
			;
		}
		return $pagenav;
	}
}
$css[]=TPLURL."/inc/css/usercss.css";
include(TPLPATH."/inc/header3.tpl.php");
?>
<style type="text/css">
table,table td,table th{border:1px solid #e1e1e1;border-collapse:collapse; height:50px; font-size:16px}
</style>
<script>
function checkTradelist(){
    var q=document.getElementById('q').value;
	if(q=='输入订单号' || q==''){
	    alert('订单号不能为空');
		return false;
	}
}
</script>
<div class="mainbody">
	<div class="mainbody1200">
    	<div class="adminmain">
    <?php include(TPLPATH."/user/top.tpl.php");?>
        	<div class="adminleft">
                <?php include(TPLPATH."/user/left.tpl.php");?>
            </div>
        	<div class="adminright">
                <?php include(TPLPATH."/user/notice.tpl.php");?>
                <div class="admin_searchx">
                <form action="index.php" onsubmit="return checkTradelist()">
                <input type="hidden" name="mod" value="user" /><input type="hidden" name="act" value="tradelist" />
                  <input class="admin_searchx_input1" type="text" id="q" name="q" value=" 输入订单号" onclick="this.value=''" />
                 <select name="do"  class="xx"><option value="lost">淘宝订单</option><option value="malllost">商城订单</option></select><input class="admin_searchx_b" type="submit" value="找回订单" style="margin-left:10px; font-size:16px;font-weight:bold;" /></form>
                </div>
                <div class="userdaohang">
                    <ul>
                    <li id="taobao"><a href="<?=u('user','tradelist',array('do'=>'taobao'))?>">淘宝订单</a> </li>
                    <li id="mall"><a href="<?=u('user','tradelist',array('do'=>'mall'))?>">商城订单</a> </li>
                    <li id="chadan"><a href="<?=u('user','chadan')?>">认领订单</a> </li>
						 <?php if($webset['gametask']['status']==1){?>
                    <li id="gametask"><a href="<?=u('user','tradelist',array('do'=>'gametask'))?>">游戏订单</a> </li>
                    <?php }?>
                    <?php if($webset['task']['status']==1){?>
                    <li id="task"><a href="<?=u('user','tradelist',array('do'=>'task'))?>">任务订单</a> </li>
                    <?php }?>
                    </ul>
              	</div>
                <script>$('.userdaohang ul #chadan').addClass('userdaohang_xz');</script>
				
                    <div class="admin_table" style="border:none; padding:0">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1">
                      <tr>
					  	<td colspan="5" align="center" style="color:#E4393C;">注意：如有订单遗漏没有跟踪到您的会员名下，请提交订单认领！</td>
                      </tr>
                   
                      <tr>
                        <th width="20%" height="35">交易日期</th>
                         <th width="43%">商品名称</th>
                        <th width="13%">成交价格</th>
                         <th width="13%">数量</th>
                        <th width="13%">操作</th>
                      </tr>
                    <?php foreach($dd as $row){?>   <tr>
                        <td height="33"><?=date('Y-m-d',strtotime($row['create_time']))?></td>
                        <td style="padding-left:10px;text-align:left"><a href="<?=u('tao','view',array('iid'=>$row['num_iid']))?>"   target="_blank"><font size="+0.4"><?=utf_substr($row["item_title"],41)?>.....</font></a></td>
                        <td height="33"><?=$row['real_pay_fee']!='0.00'?$row['real_pay_fee'].'元':'--'?></td>
                        <td height="33"><?=$row['item_num']?>件</td>
                        <td height="33"><a href="<?=u('user','confirm',array('id'=>$row['id'],'do'=>'tao'))?>"><font color="#009933"><font size="+0.4">我要认领</font></font></a></td>
						 	</tr><?php }?> 
                    </table>
                </div>
                <div class="page" style="clear:both"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)));?></div>
                
               
                
              
            </div>
    	</div>
  </div>
</div>

<?php include(TPLPATH."/inc/footer.tpl.php"); ?>