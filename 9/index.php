<?php 
	header("content-typ:text/html;charset=utf-8");
	$arr = array(0,1,2);

	function je($val){
		if($val>=1){
			return true;
		}		
	}

	// $arr2 = array_filter($arr,function($val){
	// 	if($val>=1){
	// 		return true;
	// 	}
	// });

	$arr2 = array_filter($arr,"je");

	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
?>