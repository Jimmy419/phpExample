<?php
	header("content-typ:text/html;charset=utf-8");


	$conn=@mysql_connect("localhost","root","123456");

	if(!$conn){
		echo "you have input the wrong username or password!";
	}else{
		mysql_select_db("test");

		mysql_query("set names utf8");

		$sql = "select * from user where id={$_GET[id]}";

		$rst=mysql_fetch_assoc($result=mysql_query($sql));

		@mysql_free_result($result);
		@mysql_close($conn);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="change.php" method="post">
		<div>username</div>
		<input type="text" name="username" value="<?php echo $rst[name]?>">
		<div>password</div>
		<input type="password" name="password" value="<?php echo $rst[pass]?>">
		<input type="hidden" name="id" value="<?php echo $rst[id]?>">
		<button type="submit">Submit</button>
	</form>
</body>
</html>