<?php
/**
 * =====================================================
 * 建议不要修改下面的代码，否则造成的后果，自己负责！
 * =====================================================
*/
if(!defined('INDEX')){
	exit('Access Denied');
}
include (DDROOT.'/plugin/queqiao/dd.class.php');
if($_GET['do']=='bankuai'){
	$bankuai_data=$duoduo->select_all('bankuai','code,title',"1");
	$bankuai=array();
	foreach($bankuai_data as $vo){
		$bankuai[$vo['code']]=$vo['title'];
	}
	echo json_encode($bankuai);
	exit();
}
$goods_info=$_POST['goods_info'];
if(empty($goods_info)){
	$re = dd_json_encode(array('status'=>0,'error'=>'请升级插件'));
	dd_exit($re);
}
$plugin_data=dd_get_cache('plugin/queqiao');
$goods_info=urldecode($goods_info);
$goods_info=dd_json_decode($goods_info,1);
if(empty($goods_info)){
	$re = dd_json_encode(array('status'=>0,'error'=>1002));
	dd_exit($re);
}
$key = trim($_POST['key']); //通信密钥
if($key=='' || $key!=$plugin_data['key']){ //通信验证
	$re = dd_json_encode(array('status'=>0,'error'=>1001));
	dd_exit($re);
}
$code = $_POST['bankuai_code']?$_POST['bankuai_code']:$plugin_data['bankuai']; //入库板块		
$bankuai=$duoduo->select('bankuai','time_type,zj_stime,gd_stime,gd_minute',"code='".$code."'");
foreach($plugin_data['queqiao_cid'] as $arr){
	$queqiao_cid[$arr['queqiao']]=$arr['bendi'];
}
if($plugin_data['storage']==1){
	$table_name='goods';
}
else{
	$table_name='plugin_queqiao';
}
foreach($goods_info as $goods){
	$cun_data_id[]=trim($goods['itemId']);
}
$bucun_num=(int)$_POST['bucun_num'];
$error_arr=array();
$cun_good = $duoduo -> select_all($table_name, 'id,data_id,fanli_bl,endtime', 'data_id in ('.implode(',',$cun_data_id).')');
$cun_good_arr=array();
foreach($cun_good as $vo){
	$cun_good_arr[$vo['data_id']]['id']=$vo['id'];
	$cun_good_arr[$vo['data_id']]['fanli_bl']=$vo['fanli_bl'];
	$cun_good_arr[$vo['data_id']]['endtime']=$vo['endtime'];
}
$insert_goods=array();
$cun_num=0;
foreach($goods_info as $goods){
	$quan_total=(int)$goods['quan_total'];
	$quan_surplus=(int)$goods['quan_surplus'];
	$quan_receive=(int)$goods['quan_receive'];
	$quan_condition=$goods['quan_condition'];
	$quan_price=floatval($goods['quan_price']);
	$quan_stime=$goods['quan_stime'];
	$quan_etime=$goods['quan_etime'];
	$data_id = trim($goods['itemId']); //IID
	$cid = (int)$goods['catId']; //分类
	$title = trim($goods['itemTitle']); //名称
	$img = trim($goods['picUrl']); //图片
	$price = trim($goods['auctionPrice']); //原价
	$discount_price = trim($goods['discountPrice']); //促销价
	$shouji_price = 0; //手机价
	$fanli_bl = trim($goods['getRate']); //佣金比例
	$sell = (int)$goods['soldQuantity']; //销量
	$tmall = intval($goods['Tmall']); //来源
	$tg_url = trim($goods['clickUrl']); //推广链接
	$starttime = (int)$goods['startTime']; //开始时间
	$endtime = (int)$goods['endTime']; //结束时间
	$price_man = (float)$goods['price_man']; //优惠券满多少
	$price_jian = (float)$goods['price_jian']; //优惠券减多少
	$lq_url = $goods['lq_url']; //优惠券领取地址
	$content = $goods['content']; //内容
	$goods_attribute = ''; //包邮字段
	
	if(empty($tg_url)){
		$error_arr[]='缺少推广链接';
		continue;
	}elseif($data_id=='' || $title=='' || $img=='' || $price=='' || $fanli_bl=='' || $tg_url=='' || $starttime=='' || $endtime==''){
		$error_arr[]='缺参';
		continue;
	}
				
	if($plugin_data['check']==1){ //商品信息校检
		$ddTaoapi = new ddTaoapi();
		$tao_arr = $ddTaoapi->taobao_tbk_tdj_get($data_id,1,1);
					
		if($tao_arr['ds_title']==''){
			$error_arr[]='抓取不到信息';
			continue;
		}
					
		$price = $tao_arr['ds_reserve_price'];
		$discount_price = $tao_arr['ds_discount_price'];
		$sell = $tao_arr['ds_sell'];
		if($tao_arr['ds_postfee']>0){
			$goods_attribute = 'a:1:{i:0;i:2;}';
		}
	}
				
	if($plugin_data['shouji_price']==1){ //获取手机价
		$mobile_price = get_tao_mobile_price($data_id);
		if($mobile_price>0 && $mobile_price<$discount_price-0.5){
			$shouji_price = $mobile_price;
		}
	}
			
	if($tmall==1){
		$laiyuan = '天猫';
		$laiyuan_type = 2;
	}
	else{
		$laiyuan = '淘宝';
		$laiyuan_type = 1;
	}
	
	if($plugin_data['delay']>0){ //商品延时
		$endtime = $endtime+($plugin_data['delay']*86400);
	}
	
	//根据板块设置的时间重置开始时间，解决排序错乱的问题
	if($bankuai['time_type']==0){ //直接开始
		$starttime=strtotime(date('Y-m-d H:00:00',TIME))+$bankuai['zj_stime']*3600;
	}elseif($bankuai['time_type']==1){ //固定时间
		//重置商品开始时间，这里不能参照板块设置的“今天”、“明天”开始时间
		if($starttime<=TIME){ //今天
			$starttime=strtotime(date('Y-m-d'.$bankuai['gd_minute'],strtotime(date('Y-m-d H:00:00',TIME))));
		}elseif($starttime>TIME){ //明天
			$starttime=strtotime(date('Y-m-d'.$bankuai['gd_minute'],strtotime(date('Y-m-d H:00:00',TIME))+3600*24));
		}
	}
	
	
	$cid=$queqiao_cid[$cid]; //分类
			
	$data = array(
		'cid'=>(int)$cid,
		'code'=>$code,
		'data_id'=>$data_id,
		'title'=>$title,
		'url'=>'http://item.taobao.com/item.htm?id='.$data_id,
		'img'=>$img,
		'price'=>$price,
		'discount_price'=>$discount_price,
		'shouji_price'=>$shouji_price,
		'fanli_bl'=>$fanli_bl,
		'sell'=>$sell,
		'laiyuan_type'=>$laiyuan_type,
		'laiyuan'=>$laiyuan,
		'goods_attribute'=>$goods_attribute,
		'tg_url'=>$tg_url,
		'starttime'=>$starttime,
		'endtime'=>$endtime,
		'price_man'=>$price_man,
		'price_jian'=>$price_jian,
		'lq_url'=>$lq_url,
		'content'=>$content,
		'quan_total'=>$quan_total,
		'quan_surplus'=>$quan_surplus,
		'quan_receive'=>$quan_receive,
		'quan_condition'=>$quan_condition,
		'quan_stime'=>$quan_stime,
		'quan_etime'=>$quan_etime,
		'quan_price'=>$quan_price
	);
	$cun_good=$cun_good_arr[$data_id];
	if($cun_good){
		//更新
		if ($cun_good['fanli_bl'] < $good['fanli_bl'] || $good['endtime']>$cun_good['endtime']) { 
			$data['id']=$cun_good['id'];
			$update_goods[]=$data;
		}else{
			$cun_num++;
		}
	}else{
		$data['addtime']=TIME;
		$insert_goods[]=$data;
	}
}
if($insert_goods){
	$goods_id=insert_all($table_name,$insert_goods);
	echo mysql_error();
}
if($update_goods){
	foreach($update_goods as $vo){
		$id=$vo['id'];
		$duoduo->update($table_name,$data,'id='.$id);
	}
}
if(mysql_error()||$error_arr){
	$re = dd_json_encode(array('status'=>0,'error'=>'多多系统更新商品出错'.implode(',',$error_arr)));
}else{
	$re = dd_json_encode(array('status'=>1,'error'=>"接收".count($goods_info)."件商品，新增".count($insert_goods).'件，更新'.count($update_goods).'件，存在'.$cun_num.'件，没获取到推广链接'.$bucun_num.'件'));
}
dd_exit($re);
?>