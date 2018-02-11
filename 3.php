<?php 
	header("content-typ:text/html;charset=utf-8");

	$num = 5;

	function changeNum(){
		$num = 6;
	}

	changeNum();
	echo $num;
	echo "<br>";
	// 函数内部变量作用域只能是内部，不能改变外部变量的值


	$one = 1;
	function changeOne(&$i){
		$i = 10;
	}
	changeOne($one);
	echo $one;
	echo "<br>";
	// 通过改变变量作用域所在的内存值来达到从函数内部改变函数外部变量的目的

	$two = 10;
	function fun(&$i){
		$i++;
	}
	fun($two);
	echo $two;
?>