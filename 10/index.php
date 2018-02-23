<?php 
	header("content-typ:text/html;charset=utf-8");

	$str = "add123 php";
	$ptn = '/(\w+)\d+\s(\w+)/e';
	$rep = "strtoupper(\\2)";
	$str2 = preg_replace($ptn, $rep, $str);

	echo "<pre>";
	print_r($str2);
	echo "</pre>";

	echo "<hr>";
	$strs = "add123 php";
	$ptns = '/(\w+)\d+\s(\w+)/e';
	$reps = "strtoupper($2)";
	$str2s = preg_replace($ptns, $reps, $strs);

	echo "<pre>";
	print_r($str2s);
	echo "</pre>";

	echo "<hr>";
	$strss = "add123 php";
	$ptnss = '/(\w+)\d+\s(\w+)/e';
	$repss = "addMe($2)";
	function addMe($val){
		return $val.saaa;
	}
	$str2ss = preg_replace($ptnss, $repss, $strss);

	echo "<pre>";
	print_r($str2ss);
	echo "</pre>";

	echo "<hr>";
	$strsss = "add123 php";
	$ptnsss = '/([a-z]+)\d+\s(\w+)/';
	$repsss = '$1$2';
	$str2sss = preg_replace($ptnsss, $repsss, $strsss);

	echo "<pre>";
	print_r($str2sss);
	echo "</pre>";
?>