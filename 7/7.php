<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>发送请求</title>
</head>
<body>
<div><a href="7.1.php?name=jimmy&age=18">链接</a></div>
<form action="7.2.php" method="post">
	<div>name</div>
	<div><input type="text" name="name"></div>
	<div>age</div>
	<div><input type="number" name="age"></div>
	<button type="submit">提交</button>
</form>

<form action="7.3.php" method="post">
	<div>name</div>
	<div><input type="text" name="name"></div>
	<div>age</div>
	<div><input type="number" name="age"></div>
	<div>file</div>
	<div><input type="file" name="file"></div>
	<button type="submit">提交</button>
</form>


</body>
</html>