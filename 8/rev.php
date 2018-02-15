<?php 
	header("content-typ:text/html;charset=utf-8");
	session_start();

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	echo "<h1>欢迎{$_SESSION['name']}登录！！</h1>";
	echo "<h1>欢迎{$_COOKIE['name']}登录！！</h1>";
?>