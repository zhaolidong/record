<?php
	$nav=isset($_POST['nav'])?$_POST['nav']:'';
//	$nav=true;
	$arr=array(
		'err_code'=>$nav?'100':'200',
		'err_message'=>$nav?'success':'nav失败',
		'data'=>array(
					array(
						'nav'=>'活动详情',
						 'url'=>'../index/index' 
					),
					array(
						 'nav'=>'活动签到',
						 'url'=>'../signin/signin' 
					),
					array(
						 'nav'=>'活动抽奖',
						 'url'=>'' 
					),
					array(
						 'nav'=>'活动心得',
						 'url'=>'' 
					)
			)
	);
	echo json_encode($arr);


?>