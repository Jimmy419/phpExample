<?php
	header("content-typ:text/html;charset=utf-8");

	if($_POST['password']===$_POST['repassword']){
		$conn=mysql_connect("localhost","root","123456");

		mysql_select_db("test");

		mysql_query("set names utf8");

		$sql = "insert into user(name,pass) value('{$_POST[username]}','{$_POST[password]}')";
		if(mysql_query($sql)){
			echo "<script>alert('add user successfully')</script>";
			echo "<script>location='index.php'</script>";
		};

		mysql_close($conn);
	}else{
		echo "<script>alert('password and repassword not the same')</script>";
		echo "<script>location='index.php'</script>";
	}



?>
