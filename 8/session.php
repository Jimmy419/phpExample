<?php 
	header("content-typ:text/html;charset=utf-8");
	session_start();
	echo "<h1>用户登录页面</h1>";
	$_SESSION['name']='user1';

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	echo "<h1>{$_SESSION['name']}用户登录成功！！</h1>";
	echo "<a href='rev.php'>另一个页面</a>";
?>