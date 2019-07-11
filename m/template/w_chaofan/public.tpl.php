<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
$bankuai_jd= $dd_tpl_data['bankuai_jd'];
$bankuai_cache=dd_get_cache('bankuai');
$type=array('10001'=>'服饰','10002'=>'鞋包','10003'=>'美妆','10005'=>'母婴','10006'=>'家居','10004'=>'美食','10007'=>'数码','10008'=>'其他');
$order_by=$_GET['order_by']?$_GET['order_by']:'id';
$page=$_GET['page']?$_GET['page']:1;
$cid=(int)$_GET['cid'];
$do=$_GET['do'];
$code=$_GET['code'];
$sort=$_GET['sort'];
$keywords=$_GET['keywords'];
$pagesize=20;
$fromnum=($page-1)*$pagesize;
$webtitle=$_GET['cid']?$type[$_GET['cid']]:"商品列表";
$where='1';
if($cid>0){
	$where.=' and cid="'.$cid.'"';
}
$type_arr=dd_get_cache('type');
if($_GET['code']!=''){
    $where.=' and code="'.$code.'"';
	$webtitle=$bankuai_cache[$code]['title'];
	
	$web_cid=unserialize($bankuai_cache['jiu']['web_cid']);
	$type=array();
	foreach($web_cid as $v){
		$type[$v]=$type_arr['goods'][$v];
	}
}else{
	$type=$type_arr['goods'];
}

switch ($do)
	{
	case 1:
	  $where.=' and discount_price<20';
	  $webtitle='20元封顶';
	  break;  
	case 2:
	  $where.=' and fanli_bl>30';
	  $webtitle='返利30%以上'; 
	  break;
	case 3:
	  $where.=' and fanli_bl>30';
	  $webtitle='热卖榜TOP60'; 
	  break ; 
	case 'yugao':
	  $where.=' and starttime>"'.time().'"';
	  $webtitle='预告';  
	  break;     
	}
if($_GET['keywords']!=''){
   $where.=' and title like \'%'.$keywords.'%\'';	  
}
if($order_by!=''){
   if($order_by=='sell' || $order_by=='fanli_bl' || $order_by=='id'){
		 $order_by='order by '.$order_by.' desc';
   }elseif($order_by==$bankuai_jd){
   		$where.=' and code="'.$order_by.'" ';
		$order_by='order by id desc';
   }else{
		 $order_by='order by '.$order_by.' asc';
   } 
} 	 
$shuju_data=$duoduo->select_all('goods','*',$where.' '.$order_by.' limit '.$fromnum.','.$pagesize);
foreach($shuju_data as $k=>$row){
	if($shuju_data[$k]['laiyuan_type']==1||$shuju_data[$k]['laiyuan_type']==2){
		$shuju_data[$k]['jump']='';//u('jump','goods',array('iid'=>iid_encode($shuju_data[$k]['data_id']),'num_iid'=>$shuju_data[$k]['data_id'],'yun_jump'=>$shuju_data[$k]['yun_jump']));
		$shuju_data[$k]['wap_jump']='';//wap_l('jump','index',array('a'=>'tb','id'=>$shuju_data[$k]['id']));
	}
	elseif($shuju_data[$k]['laiyuan_type']==3){
		$shuju_data[$k]['jump']=u('jump','mall',array('url'=>$shuju_data[$k]['url']));
		$shuju_data[$k]['wap_jump']=wap_l('jump','index',array('a'=>'mall','url'=>$shuju_data[$k]['url']));
	}
	elseif($shuju_data[$k]['laiyuan_type']==4){
		$commId=str_replace('paipai_','',$shuju_data[$k]['data_id']);
		$shuju_data[$k]['jump']=u('jump','paipaigoods',array('commId'=>$commId,'price'=>$shuju_data[$k]['discount_price'],'name'=>$shuju_data[$k]['title']));
	}
	if($row['id']){
		$shuju_data[$k]['url']=wap_l('goods','view',array('id'=>$row['id'],'rec'=>$dduser['id']));	
	}
	else{
		$shuju_data[$k]['url']=wap_l('goods','view',array('iid'=>$row['data_id'],'rec'=>$dduser['id']));
	}
	$shuju_data[$k]['img']=tb_img($row['img'],200);
	$shuju_data[$k]['discount_price']=$shuju_data[$k]['discount_price']>0?$shuju_data[$k]['discount_price']:$shuju_data[$k]['price'];
	$shuju_data[$k]['discount_price']= floatval($shuju_data[$k]['discount_price']);
	$shuju_data[$k]['fanli_bl']= floatval(fenduan($shuju_data[$k]['fanli_bl'],$webset['fxbl'],(int)$dduser['type']));
	if($row['laiyuan_type']==1){
		$shuju_data[$k]['icon']='taob';
	}
	elseif($row['laiyuan_type']==2){
		$shuju_data[$k]['icon']='mail';
	}
	elseif($row['laiyuan_type']==3){
		$shuju_data[$k]['icon']='jdmall';
	}
	$shuju_data[$k]['yugao_a']='';
	$shuju_data[$k]['yg_url']='';
	if($_GET['do']=='yugao'){
		$shuju_data[$k]['icon']='yugao';
		$shuju_data[$k]['yg_url']=$shuju_data[$k]['url'];
		$shuju_data[$k]['yugao_a']='yugao_a';
		$shuju_data[$k]['url']='javascript:void(0);';
	}
	if($row['sell']<10){
		$shuju_data[$k]['sell_title']="热销中";
	}else{
		$shuju_data[$k]['sell_title']='已售:'.$row['sell'];
	}

	if($shuju_data[$k]['laiyuan_type']<3){
		//现价*返利比例*最高等级比例*设置的兑换比例
		if($dduser['id']>0){
			$fxbl=$webset['fxbl'][(int)$dduser['type']];
		}else{
			$fxbl=$webset['fxbl'][0];
		}
		$shuju_data[$k]['fanli']=(float)$shuju_data[$k]['discount_price']*(float)$shuju_data[$k]['fanli_bl']*0.01*$fxbl;
		$shuju_data[$k]['fanli']=fanli_text($shuju_data[$k]['fanli'],$dduser,$webset,1);
		$shuju_data[$k]['fanli']=intval($shuju_data[$k]['fanli']*TBMONEYBL);
	}
	$shuju_data[$k]['fanli_tip']=$shuju_data[$k]['fanli']>0?'<b>有返利</b>':'';
}
if($_GET['ajax']==1){
	echo dd_json_encode(array('s'=>1,'r'=>$shuju_data));
	dd_exit();
}
