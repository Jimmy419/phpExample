<?php 
	header("content-typ:text/html;charset=utf-8");

	$str = "[b]boldstrccc[/b]adfasdasdf[i]adfasdf[/i]asdfasd[h1]asdfasdf[/h1]";

	$patn = array(
		'/\[b\](.+)\[\/b\]/',
		'/\[i\](.+)\[\/i\]/' 
	);

	$rep = array(
		'<b>$1</b>',
		'<i>$1</i>'
	);

	$str2 = preg_replace($patn, $rep, $str);

	echo $str2;


	echo "<hr>";
	$var = "2013-01-02";
	$pat = '/(\d+)-(\d+)-(\d+)/';
	$reps = '$3/$2/$1';
	$str3 = preg_replace($pat, $reps, $var);
	echo $str3;
?>