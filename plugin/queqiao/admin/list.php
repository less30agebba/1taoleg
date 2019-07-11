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
$p=$_GET['p'];
$ids=implode($_GET['ids'],',');
switch($p){
	case 'insert_one': //单个入库
		$rk_id=(int)$_GET['rk_id'];
		if($_GET['rk_id']>0){
			$good=$duoduo->select('plugin_queqiao','*','id='.$rk_id.'');
			$cun=$duoduo->select('goods','id,fanli_bl,endtime',"data_id=".$good['data_id']." and code='".$good['code']."'");
			unset($good['id']);
			if($cun['id']==0){
				$goods_id=$duoduo->insert('goods',$good);
				if($goods_id>0){
					$duoduo->delete('plugin_queqiao','id='.$rk_id.'');
					$re=dd_json_encode(array('s'=>1,'t'=>'入库成功'));
					echo $re;exit;
				}
			}
			else{
				if($good['fanli_bl']>$cun['fanli_bl'] || $cun['endtime']<TIME){
					$duoduo->update('goods',$good,'id='.$cun['id']);
					$duoduo->delete('plugin_queqiao','id='.$rk_id.'');
					$re=dd_json_encode(array('s'=>1,'t'=>'入库成功，智能更新已存在的商品'));
					echo $re;exit;
				}
				else{
					$re=dd_json_encode(array('s'=>0,'t'=>'入库失败，该商品已存在'));
					echo $re;exit;
				}
			}	
		}
	break;
	case 'insert_batch': //批量入库
		$num=0;
		$up_num=0;
		$filter_num=0;
		$list=$duoduo->select_all('plugin_queqiao','*',"id IN (".$ids.")");
		$row=array();
		foreach($list as $row){
			$id=$row['id'];
			unset($row['id']);
			$cun=$duoduo->select('goods','id,fanli_bl,endtime',"data_id=".$row['data_id']." and code='".$row['code']."'");
			if($cun['id']==0){
				$goods_id=$duoduo->insert('goods',$row);
				if($goods_id>0){
					$duoduo->delete('plugin_queqiao','id='.$id.'');
					$num++;
				}
			}
			else{
				if($row['fanli_bl']>$cun['fanli_bl'] || $cun['endtime']<TIME){
					$duoduo->update('goods',$row,'id='.$cun['id']);
					$duoduo->delete('plugin_queqiao','id='.$id.'');
					$up_num++;
				}
				else{
					$filter_num++;
				}
			}
		}
		jump(-1,'成功'.$num.'，更新'.$up_num.'，过滤'.$filter_num.'');
	break;
	case 'huan_img': //更换图片
		if(isset($_GET['img']) && $_GET['img_id']>0){
			$duoduo->update('plugin_queqiao',array('img'=>$_GET['img']),'id='.$_GET['img_id'].'');
			$re=dd_json_encode(array('s'=>1,'t'=>'更换成功'));
			echo $re;exit;
		}
	break;
	case 'del': //批量删除
		$duoduo->delete_id_in($ids,'plugin_queqiao');
		jump(-1,"删除完成");
	break;
	case 'qingkong': //清空数据
		$duoduo->delete('plugin_queqiao','1=1');
		jump(-1,"已清空！");
	break;
	default:
		$page = !($_GET['page'])?'1':intval($_GET['page']);
		$pagesize=20;
		$frmnum=($page-1)*$pagesize;
		$q=$_GET['q'];
		$sort=$_GET['sort'];
		if(isset($sort)){
			if($sort=='sell'){
   				$by='sell desc,';
			}
			if($sort=='rate'){
   				$by='fanli_bl desc,';
			}
		}
		$total=$duoduo->count('plugin_queqiao','`title` like "%'.$q.'%" and endtime>'.TIME);
		$row=$duoduo->select_all('plugin_queqiao','*','`title` like "%'.$q.'%" and endtime>'.TIME.' order by '.$by.' id desc limit '.$frmnum.','.$pagesize);
		foreach($row as $key=>$vo){
			if(strpos($vo['img'],'meiquan8.com')===false){
				$row[$key]['img_40']=$vo['img'].'_40x40.jpg';
				$row[$key]['img_310']=$vo['img'].'_310x310.jpg';
			}else{
				$row[$key]['img_310']=$vo['img'];
				$row[$key]['img_40']=$vo['img'];
			}
		}
		$type_arr=$duoduo->select_2_field('type','id,title','tag="goods" order by sort=0 asc,sort asc,id desc');
		$bankuai_arr=$duoduo->select_2_field('bankuai','code,title');
	break;
}
?>
<style>
#listtable tr { height:40px; }
#listtable tr td { padding:0 5px; }
.J_preview { padding:2px; border:1px #DDD solid; cursor:pointer }
#TaoPic { position:absolute; padding:5px; background:#000; background-color:transparent;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);zoom:1;background-color:rgba(0,0,0,.8); }
#TaoPic img { height:120px; border:1px #999 solid; padding:4px; background:#EEE; margin:5px; cursor:pointer }
#TaoPic img:hover { border:1px #8d0000 solid; background:#CC0000; }
</style>
<form name="form1" action="" method="get">
	<table cellspacing="0" width="100%" style="height:40px; border:1px  solid #DCEAF7; border-bottom:0px; background:#E9F2FB">
		<tr>
			<td>&nbsp;<img src="images/arrow.gif" width="16" height="22" align="absmiddle" />&nbsp;<a href="<?=u(MOD,ACT,array('do'=>$do,'plugin_id'=>$plugin_id,'p'=>'qingkong','no_header'=>1))?>" class="link3">[全部清空]</a></td>
			<td align="right">商品名称：<input type="text" name="q" value="<?=$q?>" />&nbsp;<input type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;共有 <b><?php echo $total;?></b> 条记录&nbsp;&nbsp;</td>
		</tr>
	</table>
	<input type="hidden" name="mod" value="<?=MOD?>" />
	<input type="hidden" name="act" value="<?=ACT?>" />
	<input type="hidden" name="do" value="<?=$do?>" />
	<input type="hidden" name="plugin_id" value="<?=$plugin_id?>" />
	<input type="hidden" name="sort" value="<?=$sort?>" />
	<input type="hidden" name="id" value="<?=$id?>" />
</form>
<form name="form2" method="get" action="" style="margin:0px; padding:0px">
	<table id="listtable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd">
		<tr>
			<th width="5%"><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
			<th width="60">缩略图</th>
			<th width="">商品名称</th>
			<th width="70">促销价</th>
			<th width="70">手机价</th>
			<th width="70">原价</th>
			<th width="70"><a href="<?=u(MOD,ACT,array('do'=>$do,'plugin_id'=>$plugin_id,'sort'=>'rate','id'=>$id,'q'=>$q))?>" style="color:#00F" title="点击按照佣金比例从高到低排序">佣金比例</a></th>
			<th width="70"><a href="<?=u(MOD,ACT,array('do'=>$do,'plugin_id'=>$plugin_id,'sort'=>'sell','id'=>$id,'q'=>$q))?>" style="color:#00F" title="点击按照销量从高到低排序">销量</a></th>
			<th width="70">商品来源</th>
			<th width="70">包邮</th>
			<th width="80">入库板块</th>
			<th width="100">入库分类</th>
            <th width="100">满多少</th>
            <th width="100">减多少</th>
			<th width="100">操作</th>
		</tr>
		<?php foreach ($row as $r){?>
		<tr id="list_id_<?=$r['id']?>">
			<td><input type='checkbox' name='ids[]' value='<?=$r['id']?>' id='content_<?=$r['id']?>' /></td>
			<td style="padding:5px;" title="点击更换商品图片"><img src="<?=$r['img_40']?>" style="width:40px;" class="J_preview" data_img="<?=$r['img_310']?>" data_url="<?=$r['url']?>" data_id="<?=$r['id']?>" /></td>
			<td><a href="<?=$r['tg_url']?>" target="_blank" class="ddnowrap" title="点击通过推广链接进入<?=$r["laiyuan"]?>"><?=$r['title']?></a></td>
			<td><?=$r['discount_price']?></td>
			<td><?php if($r['shouji_price']!=0.00){?><span class="STYLE2"><?=$r['shouji_price']?></span><?php }else{?>——<?php }?></td>
			<td><?=$r['price']?></td>
			<td class="STYLE1"><?=round($r['fanli_bl'],2)?>%</td>
			<td><?=$r["sell"]?></td>
			<td>
				<?php if($r['laiyuan_type']==1){?>
				<?=$r["laiyuan"]?>
				<?php }else{?>
				<span style="color:#c00"><?=$r["laiyuan"]?></span>
				<?php }?>
			</td>
			<td>
				<?php if(!$r['goods_attribute']){?>
				包邮
				<?php }else{?>
				——
				<?php }?>
			</td>
			<td><?=$bankuai_arr[$r['code']]?></td>
			<td><?=$type_arr[$r['cid']]?></td>
            <td><?=$r['price_man']?></td>
            <td><a href="<?=$r['lq_url']?>" target="_blank"><?=$r['price_jian']?></a></td>
			<td>
				<a href="javascript:;" data_id="<?=$r['id']?>" onClick="Insert_one(this);" style="color:#00F">入库</a>
			</td>
		</tr>
		<?php }?>
		<tr>
			<th width="40" ><input type="checkbox" onClick="checkAll(this,'ids[]')" /></th>
			<th colspan="100">
				<div align="left" style="padding-left:10px">
					<input type="hidden" name="mod" value="<?=MOD?>" />
					<input type="hidden" name="act" value="<?=ACT?>" />
					<input type="hidden" name="do" value="<?=$do?>" />
					<input type="hidden" name="plugin_id" value="<?=$plugin_id?>" />
					<input type="hidden" name="no_header" value="1" />
					<input type="hidden" id="get_p" name="p" value="del" />
					<input type="submit" value="删除" onclick='return confirm("确认要删除?")'/> 
					<input id="plrk" type="submit" value="批量入库" onclick='return Insert_batch();'/>
				</div>
			</th>
        </tr>
	</table>
	<div style="position:relative; padding-bottom:10px">
		<div class="megas512" style=" margin-top:15px;"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do,'plugin_id'=>$plugin_id,'sort'=>$sort,'id'=>$id,'q'=>$q)));?></div>
	</div>
</form>
<script>
//显示大图
;(function($){
	$.fn.preview = function(){
		var w = $(window).width();
		var h = $(window).height();
		
		$(this).each(function(){
			$(this).hover(function(e){
				if(/.png$|.gif$|.jpg$|.bmp$|.jpeg$/.test($(this).attr("data_img"))){
					$("body").append("<div id='preview'><img src='"+$(this).attr('data_img')+"' /></div>");
				}
				var show_x = $(this).offset().left + $(this).width() + 10;
				var show_y = $(this).offset().top -5;
				var scroll_y = $(window).scrollTop();
				$("#preview").css({
					position:"absolute",
					padding:"4px",
					border:"1px solid #f3f3f3",
					backgroundColor:"#eeeeee",
					top:show_y + "px",
					left:show_x + "px",
					zIndex:1000
				});
				$("#preview > div").css({
					padding:"5px",
					backgroundColor:"white",
					border:"1px solid #cccccc"
				});
				if (show_y + 310 > h + scroll_y) {
					$("#preview").css("bottom", h - show_y - $(this).height() + "px").css("top", "auto");
				} else {
					$("#preview").css("top", show_y + "px").css("bottom", "auto");
				}
				$("#preview").fadeIn("fast")
			},function(){
				$("#preview").remove();
			})					  
		});
	};
	
})(jQuery);

function tips(text){
	$('body').append('<div id="mcover" style="width:100%;height:100%;position: fixed;top:0;	left:0;	display:none;z-index:20000;"><div style="z-index:20001; margin:auto; text-align:center;" class="rongqi"><span style="background:#666; font-size:18px; padding:1em 2em; color:#FFF;">'+text+'</span></div></div>');
	var h=$(window).height();
	$('#mcover').fadeIn().find('.rongqi').css('margin-top',(h*0.4)+'px');
	setTimeout(function(){
		$('#mcover').fadeOut();
		setTimeout(function(){$('#mcover').remove()},1000);
	},800);
}

window.alert = function(text) {
	tips(text);
}

//批量入库
function Insert_batch(){
	var jinzhi=$('#plrk');
	var submitCopy = jinzhi.clone();
	$("#get_p").val("insert_batch");
	if (confirm('确定要批量入库?')) {
		submitCopy.prop('id', '').prop('disabled', true).prop('value', '入库中,请勿刷新页面...').insertAfter(jinzhi);
		jinzhi.hide();
		return;
	}
	else{
		jinzhi.show();
		submitCopy.hide();
		return false;
	}
}

//单个入库
function Insert_one(obj){
	var id = $(obj).attr('data_id');
	var $list_id=$("#list_id_"+id);
	$(obj).html('入库中');
	$.getJSON('<?=u(MOD,ACT,array('do'=>$do,'plugin_id'=>$plugin_id,'p'=>'insert_one','no_header'=>1))?>',{'rk_id':id},function(data){
		if(data.s==0){
			alert(data.t);
			$(obj).html('入库');
			return false;
		}
		else if(data.s==1){ 
			alert(data.t);
			$list_id.fadeOut();
		}
	})
}

function setTp($t){
	var img=$t.attr('src');
	var img_id=$t.attr('data_id');
	var list_id=$('#list_id_'+img_id).find('.J_preview');
	img=img.replace('_120x120.jpg','');
	$.getJSON('<?=u(MOD,ACT,array('do'=>$do,'plugin_id'=>$plugin_id,'p'=>'huan_img','no_header'=>1))?>',{'img':img,'img_id':img_id},function(data){
		if(data.s==0){
			alert(data.t);
			return false;
		}
		else if(data.s==1){ 
			alert(data.t);
			$("#TaoPic").remove();
			list_id.attr('src',img+'_40x40.jpg');;
			list_id.attr('data_img',img+'_310x310.jpg');;
		}
	})
	src=src.replace('_80x80.jpg','');
	$('#img').val(src);
}

$(function(){
	$('.J_preview').preview();

	$('.J_preview').click(function(){
		var id = $(this).attr('data_id');
		var url = $(this).attr('data_url');
		var ajax_url='<?=u('goods','addedi')?>&url='+encodeURIComponent(url)+'&t=<?=time()?>';
		var w = $(window).width();
		var h = $(window).height();
		
		$("#TaoPic").remove();
		$("#preview").remove(); //移除
		$("body").append("<div id='TaoPic'></div>"); //插入
		var show_x = $(this).offset().left + $(this).width() + 10;
		var show_y = $(this).offset().top - 5;
		var scroll_y = $(window).scrollTop();
		$("#TaoPic").css({
			top:show_y + "px",
			left:show_x + "px",
			zIndex:1000
		});
		if (show_y + 132 > h + scroll_y) {
			$("#TaoPic").css("bottom", h - show_y - $(this).height() + "px").css("top", "auto");
		} else {
			$("#TaoPic").css("top", show_y + "px").css("bottom", "auto");
		}

		$.getJSON(ajax_url,function(result){
			if(result.s==0){
				alert(result['r']);
				return false;
			}
			data=result['r'];
			if(typeof data.title=='undefined'){
				alert('商品已下架在或者退出淘客了');
				return false;
			}
			if(typeof data['small_images']!='undefined'){
				var html='';
				for(var i in data['small_images']){
					html+='<img onclick="setTp($(this))" src="'+data['small_images'][i]+'_120x120.jpg" data_id="'+id+'" title="点击更换" />'
				}
				$('#TaoPic').show().html(html);
			} else {
				alert('暂无更多图片');
				return false;
			}
		});	
	});
	$(document).bind("click",function(e){
		var target  = $(e.target);
		if(target.closest("#TaoPic").length == 0){
			$("#TaoPic").hide();
		}
	})
});
</script>