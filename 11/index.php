<?php  
	//修改页面编码
	header("content-type:text/html;charset=utf-8");

	//获取当前年
	$year=$_GET['y']?$_GET['y']:date('Y');

	//获取当前月
	$month=$_GET['m']?$_GET['m']:date('M');

	//获取当前日
	$day=$_GET['d']?$_GET['d']:date('D');

	//获取当前月的天数
	$days=date('t',strtotime("{$year}-{$month}-1"));

	//当前一号是周几
	$week=date('w',strtotime("{$year}-{$month}-1"));

	echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<th style='border:1px solid red;'>周日</th><th style='border:1px solid red;'>周一</th><th style='border:1px solid red;'>周二</th><th style='border:1px solid red;'>周三</th><th style='border:1px solid red;'>周四</th><th style='border:1px solid red;'>周五</th><th style='border:1px solid red;'>周六</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
			for ($j=1; $j <= $days;) {
				echo "<tr>"; 
				for ($i=1; $i <= 7 ; $i++) { 
					echo "<td style='border:1px solid red;'>{$j}</td>";
					$j++;
				}
				
				echo "</tr>";
			}

		echo "</tbody>";
	echo "</table>";

?>