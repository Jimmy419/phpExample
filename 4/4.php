<?php 
	header("content-typ:text/html;charset=utf-8");


	function sum($i,$j) {
		return $i + $j;
	}

	function sss ($a,$b,$c) {
		echo '第一个参数:'.$a;
		echo "<br>";
		echo '第二个参数:'.$b;
		echo "<br>";
		return $c;
	}

	echo sss(1,3,sum(1,3));

	// echo returnFun(1,3,function(){
	// 	return "new";
	// });
?>