<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="receive.php" method="post">
		<div>留言板</div>
		<textarea name="mname" cols="100" rows="10"></textarea>
		<div><button type="submit">Submit</button></div>
	</form>
	<h2>查看留言</h2>
	<div>
		<?php
			readfile("mes.db");
		?>
	</div>
</body>
</html>