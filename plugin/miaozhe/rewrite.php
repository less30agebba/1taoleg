<?php //多多
return array (
	'help' => array (
		'taobao' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'paipai' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'mall' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'shouji' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'jifenbao' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'fanli' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'weixin' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
	),
	'tao' => array (
		'daohang' => array (
			array (
				'a' => '.html',
				'b' => '',
			),
		),
		'view' => array (
			array (
				'a' => '-(.*)-(.*)-(.*).html',
				'b' => 'iid=$1&promotion_price=$2&promotion_endtime=$3'
			),
			array (
				'a' => '-(.*).html',
				'b' => 'iid=$1'
			),
		),
		'list' => array (
			array (
				'a' => '-(.*)-(.*)-(\d+)-(\d+).html',
				'b' => 'cid=$1&q=$2&list=$3&page=$4'
			),
			array (
				'a' => '-(.*)-(\d+).html',
				'b' => 'cid=$1&page=$2'
			),
			array (
				'a' => '-0-(.*).html',
				'b' => 'cid=0&q=$1'
			),
			array (
				'a' => '-(.*).html',
				'b' => 'cid=$1'
			),
			array (
				'a' => '.html',
				'b' => ''
			),
		),
	),	
	'mall' => array (
		'index' => array (
			array (
				'a' => '-(.*)-(\d+).html',
				'b' => 'cid=$1&page=$2'
			),
			array (
				'a' => '-(.*).html',
				'b' => 'cid=$1'
			),
			array (
				'a' => '.html',
				'b' => ''
			),
		),
	),
	'pinpai' => array (
		'index' => array (
			array (
				'a' => '.html',
				'b' => '',
			),
			array (
				'a' => '-(\d+).html',
				'b' => 'page=$1'
			),
		),
	),
	'shouji' => array (
		'index' => array (
			array (
				'a' => '.html',
				'b' => '',
			),
		),
	),
	'tui' => array (
		'index' => array (
			array (
				'a' => '.html',
				'b' => '',
			),
		),
	),
	'yaoqing' => array (
		'index' => array (
			array (
				'a' => '.html',
				'b' => '',
			),
		),
	),
);
?>