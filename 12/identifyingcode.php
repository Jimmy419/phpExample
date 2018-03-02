<?php  

	//开启session
	session_start();

	//准备画布资源
	$im=imagecreatetruecolor(100,50);

	//准备涂料
	$black=imagecolorallocate($im,0,0,0);
	$gray=imagecolorallocate($im,200,200,200);

	//背景填充
	imagefill($im,0,0,$gray);

	//文字坐标
	$x=(100-20*4)/2;
	$y=(50-20)/2+20;

	//准备文字
	// print_r(range(0,9));
	// echo "<hr>";
	$strarr=array_merge(range(0,9),range(a,z),range(A,Z));
	// print_r($strarr);
	shuffle($strarr);
	$str=join('',array_slice($strarr,0,4));
	$_SESSION['idcode']=$str;

	$file="fonts/msyh.ttf";
	imagettftext($im,20,0,$x,$y,$black,$file,$str);

	//输出最终图像或保存最终图像
	header("content-type:image/png");
	imagepng($im);

	//释放画布资源
	imagedestroy($im);
?>