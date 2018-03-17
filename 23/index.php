<?php
$conn=mysql_connect("localhost","root","123456");

mysql_select_db("test");

mysql_query("set names utf8");

$number = 5;

$totsql = "select count(*) from user";
$totarr=mysql_fetch_row(mysql_query($totsql));

$tot = ceil($totarr[0]/$number);

$page = $_GET['page']?$_GET['page']:1;
$pre = ($page-1<=0)? 1:($page-1);
$nxt = ($page+1>=$tot)?$tot:($page+1);


$sql="select * from user order by id desc limit ".($number*($page-1)).",{$number}";
$result=mysql_query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table td, th{
			border:1px solid #d8d8d8;
		}
	</style>
</head>
<body>
<div>用户信息表</div>
<a href="add.php">添加用户</a>
<table>
	<thead>
		<th>姓名</th>
		<th>密码</th>
		<th>编辑</th>
		<th>删除</th>
	</thead>
	<tbody>
		<?php
			while ($row=mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>{$row['name']}</td>";
				echo "<td>{$row['pass']}</td>";
				echo "<td><a href='update.php?id={$row[id]}'>编辑</a></td>";
				echo "<td><a href='del.php?id={$row[id]}'>删除</a></td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
<div><a href="index.php?page=<?php echo $pre?>">上一页</a>|<a href="index.php?page=<?php echo $nxt?>">下一页</a></div>
</body>
</html>

<?php  
	mysql_free_result($result);
	mysql_close($conn);
?>