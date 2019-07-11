<?php 
/**
 * ============================================================================
 * 版权所有 2008-2012 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('ADMIN')){
	exit('Access Denied');
}

$plugin_data=dd_get_cache('plugin/queqiao');
$queqiao_cid=$plugin_data['queqiao_cid'];

//板块分类
$bankuai_arr=$duoduo->select_all('bankuai','id,code,title','status=1');
$bankuai[0]='--请选择--';
foreach($bankuai_arr as $arr){
	$bankuai[$arr['code']]=$arr['title'];
}

//商品分类
$type=$duoduo->select_all('type','*',"tag='goods'");
$cid_arr[0]="--请选择--";
foreach($type as $vo){
	$cid_arr[$vo['id']]=$vo['title'];
}

//鹊桥分类
$qq_cid_arr=array(
	'1'=>'女装',
	'2'=>'男装',
	'3'=>'鞋包',
	'4'=>'配饰',
	'5'=>'户外',
	'6'=>'美妆',
	'7'=>'母婴',
	'8'=>'食品',
	'9'=>'内衣',
	'10'=>'数码',
	'11'=>'家装',
	'12'=>'家居',
	'13'=>'家电',
	'14'=>'汽车',
	'15'=>'服务',
	'16'=>'图书',
	'17'=>'游戏',
	'64'=>'其它'
);
?>
<style>
#addeditable tr { height:40px; }
#addeditable tr.trbg .zhushi { color:#000 }
</style>
<script>
$(function(){
    $('#addeditable tr').hover(function(){
	    $(this).addClass('trbg');
	},function(){
        $(this).removeClass('trbg');
	});
})
</script>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>&do=<?=$do?>&plugin_id=<?=$plugin_id?>" method="post" name="form1">
	<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
		<?php include(ADMINROOT.'/template/plugin/dd_set.tpl.php');?>
		<tr>
			<td align="right">通信密钥：</td>
			<td>&nbsp;
				<input name="key" id="key" type="text" value="<?=$plugin_data['key']?>" style="width:260px" />
				<span class="zhushi">请勿泄露，切记！<a href="http://vip.taoqueqiao.com/help/index-3.html#69" target="_blank">查看教程</a></span>
			</td>
		</tr>
		<tr>
			<td align="right">商品校检：</td>
			<td>&nbsp;
				<?=html_radio($shifou_arr,$plugin_data['check'],'check')?>
				<span class="zhushi">是否接收商品时校检商品信息，如判断商品是否下架，校正商品价格、包邮、销量等。（可能会影响接收速度和效率）</span>
			</td>
		</tr>
		<tr>
			<td align="right">商品延时：</td>
			<td>&nbsp;
				<input name="delay" type="text" value="<?=$plugin_data['delay']?>" style="width:85px" />天
				<span class="zhushi">整数，0为不延时。一般鹊桥商品在活动结束后15天内还是有佣金的，可以根据自己的情况适当延时。</span>
			</td>
		</tr>
		<tr>
			<td align="right">获取手机价：</td>
			<td>&nbsp;
				<?=html_radio($shifou_arr,$plugin_data['shouji_price'],'shouji_price')?>
				<span class="zhushi">是否接收商品时获取商品手机价（可能会影响接收速度和效率）</span>
			</td>
		</tr>
		<tr>
			<td align="right">直接入库：</td>
			<td>&nbsp;
				<?=html_radio($shifou_arr,$plugin_data['storage'],'storage')?>
				<span class="zhushi">是否直接入库，如果选择“否”，那么商品需要在"待入库商品"内挑选商品手动入库</span>
			</td>
		</tr>
		<tr>
			<td align="right">入库板块：</td>
			<td>&nbsp;
				<?=select($bankuai,$plugin_data['bankuai'],'bankuai')?>
				<span class="zhushi">请选择一个入库板块</span>
			</td>
		</tr>
		<tr>
			<td align="right">入库分类：</td>
			<td>&nbsp;
				<table width="220" border="0" cellspacing="0" cellpadding="0" style="text-align:center" bordercolor="#dddddd">
					<tr>
						<td>鹊桥分类</td>
						<td></td>
						<td>本站分类</td>
					</tr>
					<?php foreach($qq_cid_arr as $type_key=>$type_title){$i++?>
					<tr>
						<td><input type="hidden" name="queqiao_cid[<?=$i?>][queqiao]" value="<?=$type_key?>"><?=$type_title?></td>
						<td>→</td>
						<td>
							<select name="queqiao_cid[<?=$i?>][bendi]">
								<?php foreach($cid_arr as $cid_key=>$cid_title){?>
								<option <?php if($queqiao_cid[$i]["bendi"]&&$queqiao_cid[$i]["bendi"]==$cid_key){?>selected<?php }elseif($cid_key==$type_key){?> selected<?php }?> value="<?=$cid_key?>"><?=$cid_title?></option><?php }?>
							</select>
						</td>
					</tr>
					<?php }?>
				</table>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;
				<input type="submit" name="sub" value=" 保 存 设 置 " />
			</td>
		</tr>
	</table>
</form>
