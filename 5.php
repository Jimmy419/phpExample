<?php 
	header("content-typ:text/html;charset=utf-8");

	function tot($num){
		static $t;
		if($num > 0) {
			$t += $num;
			$num = $num - 1;
			echo "<br>";
			echo '$num:'.$num;
			echo "<br>";
			echo $t;
			tot($num);
		}else{
			return $t;
		}
	}

	echo tot(7);
?>