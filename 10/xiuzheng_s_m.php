<?php 
	header("content-typ:text/html;charset=utf-8");

	$str="LINUX and php are lamp\nlinux is very much!";
	$ptn = '/.*/m';

	preg_match_all($ptn,$str,$arr);

	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	echo "<hr>";
	$strs="LINUX and php are lamp\nlinux is very much!";
	$ptns = '/.*/s';

	preg_match_all($ptns,$strs,$arrs);

	echo "<pre>";
	print_r($arrs);
	echo "</pre>";
?>