<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
/*$_GET['sort']=4;
include(DDROOT.'/m/mod/goods/index.act.php');
include(DDROOT.'/m/mod/tao/list.act.php');
$parameter=act_wap_list();
extract($parameter);*/

?>
<?php
$order_by=$_GET['order_by'];
$page=$_GET['page']?$_GET['page']:1;
$order_by='order by sell desc';
$cid=(int)$_GET['cid'];
$sort=$_GET['sort'];
$pagesize=20;
$fromnum=($page-1)*$pagesize;
$webtitle="热卖榜TOP60";
$where='1';
if($cid>0){
	$where.=' and cid="'.$cid.'"';
}	 
$shuju_data=$duoduo->select_all(goods,'*',$where.' '.$order_by.' limit '.$fromnum.','.$pagesize);
foreach($shuju_data as $k=>$row){
	if($row['id']){
		$shuju_data[$k]['url']=wap_l('goods','view',array('id'=>$row['id'],'rec'=>$dduser['id']));	
	}
	else{
		$shuju_data[$k]['url']=wap_l('goods','view',array('iid'=>$row['data_id'],'rec'=>$dduser['id']));
	}
	$shuju_data[$k]['img']=tb_img($row['img'],200);
	$shuju_data[$k]['discount_price']= floatval($shuju_data[$k]['discount_price']);
	$shuju_data[$k]['fanli_bl']= floatval($shuju_data[$k]['fanli_bl']);
	switch ($shuju_data[$k]['domain'])
	{
	case 'jd.com':
	  $shuju_data[$k]['icon']="jdmall";
	  break;  
	case 'tmall.com':
	  $shuju_data[$k]['icon']="mail"; 
	  break;
	case 'taobao.com':
	  $shuju_data[$k]['icon']="taob"; 
	  break;  
	default: 
	  $shuju_data[$k]['icon']="";    
	}
}	
if($_GET['page']>1 &&$_GET['page']<4){
	echo dd_json_encode(array('s'=>1,'r'=>$shuju_data));
	dd_exit();
}
include(TPLPATH.'/inc/header.tpl.php');
$webtitle=$seo_data['title']="热卖榜TOP60";
?>

<link href="<?=TPLURL?>/inc/css/list.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(function(){
	$('.m-list-nav-catlog a').click(function(){
		$('.m-list-nav-catlog a').toggleClass('open');
		$('.m-list-catlog').toggle();
		$('.g-body-bd-mask').toggle();
	})
})
</script>
<div class="m-list">
  <div class="g-wrap g-body-hd m-list-nav">
    <div class="m-list-nav-catlog " > <a href="javascript:void(0)" class=""><span class="txt-red">商品分类</span><i class="ico ico-arrow ico-arrow-down ico-arrow-s-gray"></i></a> </div>
    <div class="m-list-types">
                <ul class="m-list-types-list">
					<li id="one_1" ><a>最实惠</a></li>
					<li id="one_2"><a>返最多</a></li>
					<li id="one_3"><a>最热卖</a></li>
					<li id="one_4"style="border:none;"><a herf="<?=wap_l('phb','index',array('code'=>'jd'))?>">京东返<i class="ico ico-sort2Arrow"></i></a></li>
                </ul>
            </div>
    <!-- 所有分类列表 -->
    <div class="m-list-catlog" style="display: none;">
      <ul class="m-list-catlog-list">
	    <?php
		 foreach($type as $k=>$row){?>
        <li><a href="<?=wap_l('goods','index',array('cid'=>$k))?>"></i><?=$row?></a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</div>
<?php 
include(TPLPATH.'/goods/data.tpl.php');
include(TPLPATH.'/inc/footer.tpl.php');?>