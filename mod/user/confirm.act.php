<?php

/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if (!defined('INDEX')) {
	exit ('Access Denied');
}
/**
* @name 订单确认
* @copyright duoduo123.com
* @example 示例user_confirm();
* @return $parameter 结果集合
*/
function act_user_confirm() {
	global $duoduo;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	$errorData = $duoduo->errorData;
	$do = empty ($_GET['do']) ? 'tao' : $_GET['do'];

	if ($do == 'tao') {
		$id = $_GET["id"] ? intval($_GET["id"]) : intval($_POST["id"]); //订单ID
		if($id==0){
			jump(-1, $errorData[46]);
		}
		$trade = $duoduo->select('tradelist', '*', 'uid=0 and id="' . $id . '"');

		if (!$trade['id']) {
			jump(-1, $errorData[46]);
		}
		
		if ($_POST['sub'] == '') {
			if($trade['trade_id_former']==0){
				$trade['trade_id_former']=$trade['trade_id'];
			}
			$trade['trade_id'] = fuzzyTradeId($trade['trade_id_former']);
		} else {
			$captcha = $_POST['captcha'];
			if (reg_captcha($captcha) == 0) {
				jump(-1, $errorData[5]);
			}
			$trade_id = trim($_POST['trade_id']);
			if(!preg_match('/^\d+$/',$trade_id)){
				jump(-1, $errorData[46]);
			}
			
			if($trade['trade_id_former']!=0){
				if((float)$trade['trade_id_former']!=(float)$trade_id){
					jump(-1, $errorData[47]);
				}
			}
			else{
				if($trade['mini_trade_id']!=substr($trade_id,0,8).substr($trade_id,-4)) {
					jump(-1, $errorData[47]);
				}
			}
			
			if ($webset['taoapi']['trade_check'] == 1) { //人工审核
				$file_name=$_POST['ddjt'];
				if($file_name==''){
					jump(-1, $errorData[201]);
				}
			}
			else{
				$file_name='';
			}
			
			if($trade['trade_id_former']!=0){
				$where='trade_id_former="'.$trade_id.'"';
			}
			else{
				$where='mini_trade_id="'.substr($trade_id,0,8).substr($trade_id,-4).'"';
			}
			$duoduo->trade_uid($dduser['id'],$trade_id);
			$trades=$duoduo->select_all('tradelist','*','id<"'.($trade['id']+30).'" and id>"'.($trade['id']-30).'" and '.$where.' and shop_title="'.$trade['shop_title'].'"');
			foreach($trades as $k=>$trade){
				$re=$duoduo->use_fanlibl($dduser['id'],$trade['num_iid'],$trade['real_pay_fee'],$trade['create_time']);
				if($re>0){
					$fxje=fenduan($re,$webset['fxbl'],$dduser['type']);
				}
				else{
					$fxje=fenduan($trade['commission'],$webset['fxbl'],$dduser['type']);
				}
				$fxje=fanli_text($fxje,$dduser,$webset,1);
				$jifenbao=jfb_data_type($fxje*TBMONEYBL);
				$jifen=round($fxje*$webset['jifenbl']);
				$data = array (
					'ddjt' => $file_name,
					'qrsj' => TIME,
					'outer_code' => $dduser['id'],
					'uid' => $dduser['id'],
					'fxje'=>$fxje,
					'jifenbao'=>$jifenbao,
					'jifen'=>$jifen,
					'category_id'=>-1
				);
				if ($webset['taoapi']['trade_check'] == 1) {
					$data['checked']=1;
					$duoduo->update('tradelist', $data, 'id="' . $trade['id'] . '"');
				}
				else{
					if($trade['status']==5){
						$trade['checked'] = 2;
						$duoduo->rebate($dduser, $trade, 8); //8号明细，确认淘宝订
					}
					else{
						$data['checked']=3;
						$duoduo->update('tradelist', $data, 'id="' . $trade['id'] . '"');
					}
				}
			}
			if ($webset['taoapi']['trade_check'] == 1) {
				jump(u('user', 'tradelist'), ($k+1).'条订单确认成功，等待网站审核');
			}
			else{
				jump(u('user', 'tradelist'), ($k+1).'条订单确认成功');
			}
		}
	}
	elseif ($do == 'paipai') {
		if ($_POST['sub'] == '') {
			$id = $_GET["id"] ? intval($_GET["id"]) : 0; //订单ID
			$trade = $duoduo->select('paipai_order', '*', 'id="' . $id . '"');
			if (!$trade['id']) {
				jump(-1, $errorData[46]);
			}
			$trade['dealId'] = fuzzyTradeId($trade['dealId']);
		} else {
			dd_session_start();
			$captcha = $_POST['captcha'];
			if ($captcha != $_SESSION["captcha"]) {
				jump(-1, $errorData[5]);
			}
			$dealId = trim($_POST['dealId']);
			$id = $_POST["id"] ? intval($_POST["id"]) : 0; //订单ID
			$trade = $duoduo->select('paipai_order', '*', 'id="' . $id . '"');

			if ($trade['uid'] > 0) {
				jump(-1, $errorData[45]);
			}
			if ($trade['dealId'] != $dealId) {
				jump(-1, $errorData[47]);
			}
			$duoduo->rebate($dduser, $trade, 18); //18号明细，确拍拍认订单
			jump(u('user', 'tradelist', array (
				'do' => 'paipai'
			)), '确认成功');
		}
	}
	elseif ($do == 'mall') {
		if ($_POST['sub'] == '') {
			$id = $_GET["id"] ? intval($_GET["id"]) : 0; //订单ID
			$trade = $duoduo->select('mall_order', '*', 'id="' . $id . '"');
			if (!$trade['id']) {
				jump(-1, $errorData[46]);
			}
			$trade['order_code'] = fuzzyTradeId($trade['order_code']);
		} else {
			dd_session_start();
			$captcha = $_POST['captcha'];
			if ($captcha != $_SESSION["captcha"]) {
				jump(-1, $errorData[5]);
			}
			$order_code = trim($_POST['order_code']);
			$id = $_POST["id"] ? intval($_POST["id"]) : 0; //订单ID
			$trade = $duoduo->select('mall_order', '*', 'id="' . $id . '"');
			$trade['fxje']=fenduan($trade['commission'],$webset['mall_fxbl'],$dduser['type']);
			$trade['jifen']=round($trade['fxje']*$webset['jifenbl']);
			if ($trade['uid'] > 0) {
				jump(-1, $errorData[45]);
			}
			if ($trade['order_code'] != $order_code) {
				jump(-1, $errorData[47]);
			}
			if ($trade['status'] == 1) {
				$duoduo->rebate($dduser, $trade, 12); //12号明细，确认商城订单
			} else {
				$data = array (
					'uid' => $dduser['id'],
					'fxje' => $trade['fxje'],
					'jifen' => $trade['jifen']
				);
				$duoduo->update('mall_order', $data, 'id="' . $id . '"');
			}
			jump(u('user', 'tradelist', array (
				'do' => 'mall'
			)), '确认成功');
		}
	}
	unset ($duoduo);
	$parameter['do'] = $do;
	$parameter['trade'] = $trade;
	$parameter['id'] = $id;
	$parameter['errorData'] = $errorData;
	return $parameter;
}
?>