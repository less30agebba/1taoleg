<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付</title>
</head>
<?php
require_once dirname(dirname(__FILE__)).'/config.php';
require_once dirname(__FILE__).'/service/AlipayTradeService.php';
require_once dirname(__FILE__).'/buildermodel/AlipayTradePagePayContentBuilder.php';

    //商户订单号，商户网站订单系统中唯一订单号，必填
    $out_trade_no = trim($_POST['WIDout_trade_no']);
    //订单名称，必填
    $subject = trim($_POST['WIDsubject'])==null?"http://item.taobao.com/item.htm?id":trim($_POST['WIDsubject']);
    //付款金额，必填
    $total_amount = trim($_POST['WIDtotal_amount'])==null||trim($_POST['WIDtotal_amount'])==0?"0.01":trim($_POST['WIDtotal_amount']);
	//判断订单号显示金额
	$jine = trim($_POST['product_id']);
	/*
	if($jine==1){
		$total_amount=1500;
	}
	*/
	
	switch($jine){
		case 1:
		$total_amount=1500;
		break; 
		case 2:
		$total_amount=1500;
		break; 
		case 3:
		$total_amount=3000;
			break; 
			case 4:
		$total_amount=6000;
			break; 
			case 5:
		$total_amount=9000;
			break;
			case 6:
		$total_amount=18000;
			break;
			case 7:
		$total_amount=750;
			break;
				case 8:
		$total_amount=1500;
			break;
			case 9:
		$total_amount=2250;
			break;
			case 10:
		$total_amount=4500;
			break;
			case 11:
		$total_amount=9000;
			break;
				case 12:
		$total_amount=18000;
			break;
				case 13:
		$total_amount=300;
			break;
			case 14:
		$total_amount=750;
			break;
			case 15:
		$total_amount=1500;
			break;
			case 16:
		$total_amount=2250;
			break;
			case 17:
		$total_amount=4500;
			break;
			case 18:
		$total_amount=9000;
			break;
			case 19:
		$total_amount=450;
			break;
			case 20:
		$total_amount=600;
			break;
			case 21:
		$total_amount=1200;
			break;
			case 22:
		$total_amount=1800;
			break;
			case 23:
		$total_amount=3600;
			break;
			case 24:
		$total_amount=7200;
			break;
			case 25:
		$total_amount=300;
			break;
case 26:
		$total_amount=600;
			break;		
case 27:
		$total_amount=1200;
			break;		
case 28:
		$total_amount=1800;
			break;		
case 29:
		$total_amount=3600;
			break;	
case 30:
		$total_amount=7200;
			break;					
	}
    //商品描述，可空
    $body = trim($_POST['WIDbody']);
	$add=array();
	$buytype = trim($_POST['buytype']);
	if($buytype==1){
		$add['goumai']="新购买";
	}else{
		$add['goumai']="续费";
	}
	$add['lianjie']=$subject;
	$add['taocan']=$total_amount;
$adtype = trim($_POST['adtype']);
switch($adtype){
	case ggw:
	$add['leixing']="首页广告位";
			break;	
			case baokuan:
	$add['leixing']="爆款推荐";
			break;	
			case quan:
	$add['leixing']="优惠券板块";
			break;	
			case jd:
	$add['leixing']="京东商品";
			break;	
			case pdd:
	$add['leixing']="拼多多商品";
			break;	
			case budan:
	$add['leixing']="特殊通道";
			break;	
}
$add['wangwang']=trim($_POST['weixin']);
$add['shouji']=trim($_POST['wangwang']);
$add['shijian']=date("Y-m-d H:i:s");
$duoduo->insert('xinbiao',$add);

	//构造参数
	$payRequestBuilder = new AlipayTradePagePayContentBuilder();
	$payRequestBuilder->setBody($body);
	$payRequestBuilder->setSubject($subject);
	$payRequestBuilder->setTotalAmount($total_amount);
	$payRequestBuilder->setOutTradeNo($out_trade_no);

	$aop = new AlipayTradeService($config);

	/**
	 * pagePay 电脑网站支付请求
	 * @param $builder 业务参数，使用buildmodel中的对象生成。
	 * @param $return_url 同步跳转地址，公网可以访问
	 * @param $notify_url 异步通知地址，公网可以访问
	 * @return $response 支付宝返回的信息
 	*/
	$response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);

	//输出表单
	var_dump($response);
?>
</body>

</html>