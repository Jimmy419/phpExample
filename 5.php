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
			//tot($num); 这里不能用这种方法，否则在返回值仍然在$num>0的条件中；
			return tot($num);
		}else{
			return $t;
		}
	}

	echo tot(7);
?>