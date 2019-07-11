<?php
$parameter=act_huan_list();
extract($parameter);
$css[]=TPLURL.'/inc/css/duihuan.css';
include(TPLPATH.'/inc/header.tpl.php');
?>

	
	<div class="jifendaohang" style="background:#FFFFFF">
<div class="tag_nav" >
			<ul>
			<li>商品分类:</li>
				<a href="<?=u('huan','list')?>"><li<?php if($cid==0){?> class="active"<?php }?>>全部</li></a>
				<?php foreach($huan_type as $catid=>$title){?>
				<a href="<?=u('huan','list',array('cid'=>$catid))?>"><li<?php if($cid==$catid){?> class="active"<?php }?>><?=$title?></li></a>
				<?php }?>
			</ul>
		</div></div>
<div class="mainbody">
<div class="mainbody1200">
	<div class="jifenview" style="height:260px" ><div class="tag_left2" style="width:853px">
	<img src="<?=TPLURL?>/inc/images/huan/huan_banner.jpg" width="853">
	</div>
		<div class="tag_right" style="padding-top:30px">
		<?php include(TPLPATH."/huan/right.tpl.php");?>
			</div>
		</div>
		
<div class="jf_duihuan">	
		<div class="jf_goods">
			<ul>
				<?php if($jifenbao_huan_goods==1){?>
				<li>
					<div class="goods_img"><a href="<?=u('user','tixian',array('type'=>1,'from'=>'huan'))?>" target="_blank"><img src="upload/jfblogo.gif" class="lazy" width="255" height="200" border="0"  alt="兑换集分宝"/></a></div>
					<div class="title" style="color:#F00;"><?=TBMONEY?>兑换集分宝专用通道</div>
					<div class="infor"><a href="<?=u('tao','jifenbao')?>" class="blue_link" target="_blank">什么是集分宝？</a> <br />
					<a href="https://jf.alipay.com/prod/integral.htm" class="blue_link" target="_blank">查看集分宝余额>></a></div>
					<div class="btn"><a href="<?=u('user','tixian',array('type'=>1,'from'=>'huan'))?>" target="_blank"><p></p></a></div>
					<div class="clear"></div>
				</li>
				<?php }?>
				<?php foreach($huan as $row){$n++;?>
				<li>
				<?php 
				if($row["edate"]<TIME && $row["edate"]>0){
					$fs="<div class=sgq></div>";
				}
				elseif($row["sdate"]>TIME){
					$fs="<div class=wks></div>";
				}
				else{
					$fs="<div class=syts></div>";
				}
				echo $fs;
				?>
					<div class="goods_img"><a href="<?=u('huan','view',array('id'=>$row["id"]))?>" target="_blank"><img src="<?php echo $row["img"];?>" class="lazy" width="255" height="255" border="0" alt="<?=$row["title"]?>"/></a></div>
				<div class="title"><a href="<?=u('huan','view',array('id'=>$row["id"]))?>" target="_blank"><?=$row["title"]?></a></div>
					<div class="infor">
					<span class="red12blod" style="font-size:16px; color:#ff5151; margin-top:15px"><?=jfb_data_type($row["jifen"])?></span> 积分
					<span class="red12blod" style="font-size:16px; color:#ff5151; margin-top:15px"><?=jfb_data_type($row["jifenbao"])?></span> 集分宝</div>
					<div class="btn"><a href="<?=u('huan','view',array('id'=>$row["id"]))?>"  target="_blank"><p></p></a></div>
					<div class="clear"></div>
				</li>
				<?php }$n=0;?>
			</ul></div>
			<div class="megas512" style="margin-top:20px"><?=pageft($total,$pagesize,$page_url,WJT)?></div>
		
</div>
<?php include(TPLPATH."/inc/footer.tpl.php");?>