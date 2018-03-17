<?php
	header("content-typ:text/html;charset=utf-8");


	$conn=mysql_connect("localhost","root","123456");

	mysql_select_db("test");

	mysql_query("set names utf8");

	$sql = "delete from user where id={$_GET[id]}";
	if(mysql_query($sql)){
		echo "<script>alert('delete user successfully')</script>";
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('fail to delete')</script>";
		echo "<script>location='index.php'</script>";
	}

	mysql_close($conn);



?>
