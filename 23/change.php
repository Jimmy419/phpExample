<?php
	header("content-typ:text/html;charset=utf-8");


	$conn=@mysql_connect("localhost","root","123456");

	if(!$conn){
		echo "you have input the wrong username or password!";
	}else{
		mysql_select_db("test");

		mysql_query("set names utf8");

		$sql = "update user set name='{$_POST[username]}',pass='{$_POST[password]}' where id={$_POST[id]}";

		if($result=mysql_query($sql)){
			echo "<script>alert('update success')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>alert('update fail')</script>";
			echo "<script>location='index.php'</script>";
		};

		@mysql_free_result($result);
		@mysql_close($conn);
	}
?>