<?php

$conn=mysql_connect("localhost","root","123456");

mysql_select_db("test");

mysql_query("set names utf8");

$sql="select * from user order by id limit 0,5";


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<div>用户信息表</div>
<table>
	<thead>
		<th>姓名</th>
		<th>密码</th>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
<div><a href="index.php?page=<?php echo {$page}?>">上一页</a>|<a href="index.php?page=<?php echo {$page} ?>"></a></div>
</body>
</html>