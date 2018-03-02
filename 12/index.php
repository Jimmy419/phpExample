<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="rev.php" method="post" enctype="multipart/form-data">
		<div>Name</div>
		<div><input type="text" name="name"></div>
		<div>File</div>
		<div><input type="file" name="file"></div>
		<div>Identifying code</div>
		<div><input type="text" name="idcode"><img src="identifyingcode.php"></div>
		<div><button type="submit">Submit</button></div>
	</form>
</body>
</html>