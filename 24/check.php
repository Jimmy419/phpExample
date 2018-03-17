<?php
session_start();

$conn=mysql_connect("localhost","root","123456");

mysql_select_db("test");

mysql_query("set names utf8");


$sql = "select * from user where name='{$_POST[username]}' and pass='{$_POST[password]}'";
$userinfo=mysql_fetch_row($rstsc=mysql_query($sql));
if($userinfo){
	$_SESSION['username']=$_POST[username];
	$_SESSION['id']=$userinfo[0];
	echo "<script>alert('login successfully!')</script>";
	echo "<script>location='index.php'</script>";		
}else{
	echo "<script>alert('username or password is not correct')</script>";
	echo "<script>location='login.php'</script>";	
}


mysql_free_result($rstsc);
mysql_close($conn);


?>