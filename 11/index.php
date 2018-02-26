<?php  
	//修改页面编码
	header("content-type:text/html;charset=utf-8");

	//获取当前年
	$year=$_GET['y']?$_GET['y']:date('Y');
	echo $year;
	echo "<hr>";

	//获取当前月
	$month=$_GET['m']?$_GET['m']:date('m');
	echo $month;
	echo "<hr>";

	//获取当前周几
	$day=$_GET['d']?$_GET['d']:date('D');
	echo $day;
	echo "<hr>";

	//获取当前月的天数
	$days=date('t',strtotime("{$year}-{$month}-1"));

	//当前一号是周几
	$week=date('w',strtotime("{$year}-{$month}-1"));

	$preyear=($month==1)?($year-1):$year;
	$premonth=($month==1)?12:($month-1);
	$nextyear=($month==12)?($year+1):$year;
	$nextmonth=($month==12)?1:($month+1);

	echo "<div>";
	echo "<table style='width:100%'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th style='border:1px solid red;'>周日</th><th style='border:1px solid red;'>周一</th><th style='border:1px solid red;'>周二</th><th style='border:1px solid red;'>周三</th><th style='border:1px solid red;'>周四</th><th style='border:1px solid red;'>周五</th><th style='border:1px solid red;'>周六</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
			for ($j=1; $j <= ($days+$week);) {
				echo "<tr>"; 
				for ($i=1; $i <= 7 ; $i++) { 
					if(($j-$week > $days) || ($j-$week<=0)){
						echo "<td style='border:1px solid red;'></td>";
					}else{
						echo "<td style='border:1px solid red;'>".($j-$week)."</td>";
					}
					$j++;
				}
				echo "</tr>";
			}
		echo "</tbody>";
	echo "</table>";
	echo "<div style='text-align:center;'><a href='index.php?y={$preyear}&m={$premonth}'>上一月</a> | <a href='index.php?y={$nextyear}&m={$nextmonth}'>下一月</a></div>";
	echo "</div>";
?>