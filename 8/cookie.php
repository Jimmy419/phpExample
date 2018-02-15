<?php 
	header("content-typ:text/html;charset=utf-8");
	setcookie("name","asdf",time()+3600,"/");
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	echo "<h1>{$_COOKIE['name']}用户登录成功！！</h1>";
	echo "<a href='rev.php'>另一个页面</a>";
?>