<?php 
	header("content-typ:text/html;charset=utf-8");
	session_start();
	echo $_SESSION['idcode'];
	echo "<hr>";
	$arr=$_REQUEST;
	$arr1=$_FILES;
	var_dump($arr);
	echo "<hr/>";
	print_r($arr1);
?>