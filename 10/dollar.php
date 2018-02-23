<?php  

	$str="LINUX and php are lamp\nlinux is very much";
	$ptn='/^linux/im';

	preg_match_all($ptn, $str, $arr);

	echo "<pre>";
	print_r($arr);
	echo "</pre>";


	echo "<hr>";
	$strs="LINUX and php are lamp\nlinux is very much";
	$ptns='/.+p$/im';

	preg_match_all($ptns, $strs, $arrs);

	echo "<pre>";
	print_r($arrs);
	echo "</pre>";

	echo "<hr>";
?>