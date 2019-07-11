<?php
if(!defined('DDROOT')){
	exit('Access Denied');
}

$sys_mingxi=array (
	1 => array('title'=>'注册赠送','content'=>'注册赠送：金额{money}，'.TBMONEY.'{jifenbao}，积分{jifen}'),
	2 => array('title'=>'淘宝返利','content'=>'淘宝订单号：{source}，{jifenbao}'.TBMONEY.''),
	3 => array('title'=>'商城返利','content'=>'{source}，返利：{money}，积分{jifen}'),
	4 => array('title'=>'<font color="#ff0000">每日签到</font>','content'=>'{source} 获得'.TBMONEY.'：{jifenbao}个'),
	5 => array('title'=>'分享奖励','content'=>'分享商品奖励：积分{jifen}，'.TBMONEY.'{jifenbao}'),
	6 => array('title'=>'<font color="#ff3399">邀请奖励</font>','content'=>'好友：{source}，获得奖励：{money}元'),
	7 => array('title'=>'晒单奖励','content'=>'晒单商品奖励：积分{jifen}，'.TBMONEY.'{jifenbao}'),
	8 => array('title'=>'淘宝返利','content'=>'淘宝订单号：{source}'), //淘宝找回订单
	9 => array('title'=>'提取成功','content'=>'提取成功：'.TBMONEY.'{jifenbao}，金额{money}，{source}'),
	10 => array('title'=>'兑换成功','content'=>'兑换成功：'.TBMONEY.'：{jifenbao}，积分{jifen}，商品：{source}'),
	11 => array('title'=>'好友提取','content'=>'好友提取奖励：金额{money}，好友：{source}'),
	12 => array('title'=>'商城返利','content'=>'{source}，金额：{money}，积分{jifen}'), //商城返利
	13 => array('title'=>'淘宝退款','content'=>'淘宝订单号：{source}，'.TBMONEY.'：{jifenbao}，积分{jifen}'), //退款
	14 => array('title'=>'淘宝退单','content'=>'淘宝订单号：{source}，'.TBMONEY.'：{jifenbao}，积分{jifen}'), //删除订单
	15 => array('title'=>'取消推广','content'=>'取消推广奖励：金额：{money}，好友：{source}'),
	16 => array('title'=>'红心奖励','content'=>'红心奖励：积分{jifen}，分享晒单商品id：{source}'),
	17 => array('title'=>'拍拍返利','content'=>'拍拍订单号：{source}，返利：{money}，积分{jifen}'),
	18 => array('title'=>'拍拍返利','content'=>'拍拍订单号：{source}，返利：{money}，积分{jifen}'), //拍拍找回订单
	19 => array('title'=>'余额修改','content'=>'改动金额：{money}'), //兼容老版程序
	20 => array('title'=>'站长奖励','content'=>'金额：{money}元，'.TBMONEY.'：{jifenbao}个，积分{jifen}个'),
	21 => array('title'=>'站长扣除','content'=>'金额：{money}，'.TBMONEY.'：{jifenbao}，积分{jifen}'), 
	22 => array('title'=>'金额转换','content'=>'金额：{money}，'.TBMONEY.'：{jifenbao}'), 
	23 => array('title'=>'商城退款','content' => '{source}，金额：{money}，积分{jifen}'), 
	24 => array('title'=>'爆料有效奖励','content' => '{source}，金额：{money}，'.TBMONEY.'{jifenbao}，积分{jifen}'), 
	25 => array('title'=>'爆料推广奖励','content' => '{source}，金额：{money}'), 
	26 => array('title'=>'分享推广奖励','content' => '{source}，金额：{money}'), 
	27 => array('title'=>'爆料推广退回','content' => '{source}，金额：{money}'), 
	28 => array('title'=>'分享推广退回','content' => '{source}，金额：{money}'),
	29 => array('title'=>'下线奖励','content' => '{source}'),
	30 => array('title'=>'慈善捐助','content' => '好友：{source}，金额：{money}'),
	31 => array('title'=>'活动返利','content' => '首次返利额外奖励：{jifenbao}个'.TBMONEY),
	
	'gametask_1' => array('title'=>'游戏返利','content'=>'{source}，金额：{money}'), 
	'task_1' => array('title'=>'任务返利','content'=>'{source}，金额：{money}'), 
	
	'youjian_1' => array ('title'=>'邮件激活','content'=>'{source}'.TBMONEY.'：{jifenbao}'),
	'mobile_1' => array ('title'=>'手机激活','content'=>'{source}'.TBMONEY.'：{jifenbao}'),
	'qiandao_1' => array ('title'=>'连续签到','content'=>'{source}'.TBMONEY.'：{jifenbao}'),
	
	'tj_1' => array ('title'=>'推广奖励','content'=>'{source}'.TBMONEY.'：{jifenbao}'),
	'tuijian' => array ('title'=>'<font color="#FF0000">推荐前十</font>','content'=>'{source}  <font color="#00A600"> {jifenbao} </font>'.TBMONEY.''),
	
);

$plugin=glob(DDROOT.'/plugin/*');
$plugin_mingxi=array();
foreach($plugin as $v){
	if(is_dir($v) && file_exists($v.'/set.php')){
		$set=include($v.'/set.php');
		if($set['mingxi']==1){
			$plugin_mingxi=include($v.'/mingxi.php');
			if(is_array($plugin_mingxi)){
				foreach($plugin_mingxi as $k=>$v){
					$sys_mingxi[$k]=$v;
				}
			}
		}
	}
}

foreach($plugin_mingxi as $k=>$row){
	$sys_mingxi[$k]=$row;
}

return $sys_mingxi;
?>