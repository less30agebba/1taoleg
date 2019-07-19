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

if(!defined('INDEX')){
	exit('Access Denied');
}

function act_goods_list($bankuai_code='',$do,$ajax_load_num,$pagesize=10,$page=1,$cid=0, $search='',$goods_total,$order_by){
	global $duoduo,$webset,$dduser;
	include(DDROOT.'/comm/goods.class.php');
	$goods_class=new goods($duoduo);
	if($page==0) $page=1;
	$page=($page-1)*($ajax_load_num+1)+1;
	$where=' 1 ';
	if($do=='xianjinquan'){
		$where.=" and coupon=1";
	}elseif($do=='chaofan'){
		$where.=" and fanli_ico=1";
	}
	
	if($bankuai_code){
		$where.=" and code='".$bankuai_code."'";
	}
	if($cid){
		if(!is_numeric($cid)){
			dd_parse_str($cid,$p);
			$cid=$p['cid'];
			foreach($p as $k=>$v){
				if($v!=''){
					$where.=' and '.$k.'="'.$v.'"';
				}
			}
		}
		else{
			$where.=" and cid=".(int)$cid;
		}
	}
	if($search){

		$type_all=dd_get_cache('type');
		$web_cid_arr=$type_all['goods'];
		//先注释 等需要搜索实时更新时候 加钱取消下列注释
//		$type=$duoduo->select_all('type','id,title',"tag='goods'");
//		foreach($type as $vo){
//			$web_cid_arr[$vo['id']]=$vo['title'];
//		}
		foreach (explode(' ', $search) as $contition) {

			$tid = array_search($contition, $web_cid_arr);

			if(isset($tid) && $tid>1) {
				$where.=" and cid=".(int)$tid;
			}
			else {
				$where.=" and title like '%".$contition."%'";
			}
		}
		echo $where;
	}
	$data=$goods_class->index_list(array('code'=>$bankuai_code,'cid'=>(int)$cid),$pagesize,$page,$where,$goods_total,$order_by);
	if($goods_total==1){
		$total=$data['total'];
		$goods_list=$data['data'];
	}
	else{
		$goods_list=$data;
	}
	unset($duoduo);
	$parameter['goods_list']=$goods_list;
	$parameter['total']=$total;
	$parameter['page']=$page;
	$parameter['pagesize']=$pagesize;
	$parameter['ajax_stop']=empty($goods_list)?1:0;
	return $parameter;
}
?>
