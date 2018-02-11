<?php 
	header("content-typ:text/html;charset=utf-8");

	function multiplication($num){
		echo "<table>";
		for($i = 1; $i <= $num; $i++){
			echo "<tr>";
			for($j = 1; $j <= $i; $j++) {
				echo "<td>{$j} * {$i} = ".'"'.$j*$i.'"'."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";		
	}

	multiplication(9);
?>