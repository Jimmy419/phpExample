<?php 
	header("content-typ:text/html;charset=utf-8");

	function tot() {
		echo func_num_args();
		echo "<br>";
		var_dump(func_get_args());
		return array_sum(func_get_args());
	}

	tot(2,3);
	echo tot(2,3,4);
?>