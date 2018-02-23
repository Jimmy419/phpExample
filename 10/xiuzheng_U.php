<?php 
	header("content-typ:text/html;charset=utf-8");

	$str="LINUX <SPAN>and</span> php are lamp linux <span>is</span> very much!";
	$ptn = '/<span>.+<\/span>/Ui';

	preg_match_all($ptn,$str,$arr);

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

?>