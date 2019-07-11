<?php //多多 
return array (
	'jiuyuan' => array (
		'is_plugin'=>1,  //如果是应用伪静态，增加这一条，
		'index' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'list' => array (
			array (
				'a' => '-(\d+)-(\d+)-(.*)-(\d+)-(\d+).html',
				'b' => 'type=$1&cid=$2&sort=$3&yugao=$4&page=$5'
			),
		),
		'view' => array (
			array (
				'a' => '-(\d+).html',
				'b' => 'id=$1'
			),
		),
		'baoming' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
		'bmlist' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
	),
	'aaa' => array (
		'index' => array (
			array (
				'a' => '.html',
				'b' => ''
			),
		),
	),
);
?>