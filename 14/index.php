<?php
	$currentfile="./current/timg.jpg";
	$targetfile="./target/";
	$aimw=200;
	$aimh=100;
	changepicsize($currentfile,$targetfile,$aimw,$aimh);

	function changepicsize($currentfile,$targetfile,$aimw,$aimh){
		//获取当前图宽高以及图片类型
		$currentimsize=getimagesize($currentfile);
		$currentw=$currentimsize[0];
		$currenth=$currentimsize[1];
		$currenttype=$currentimsize[2];

		//获取当前图片的资源
		$currentim=imagecreatefromjpeg($currentfile);

		//设置目标图片的资源
		$targetw = $aimw;
		$targeth = $aimh;
		$targetim = imagecreatetruecolor($targetw, $targeth);

		//图片复制到目标图片去
		imagecopyresampled($targetim, $currentim, 0, 0, 0, 0, $targetw, $targeth, $currentw, $currenth);

		//图片输出
		switch ($currenttype) {
			case 1:
				$imgout="imagegif";
				break;
			case 2:
				$imgout="imagejpeg";
				break;
			case 3:
				$imgout="imagepng";
				break;
		}
		$outputname=$targetfile."new_".basename($currentfile);
		$imgout($targetim,$outputname);

		//释放图片资源
		imagedestroy($currentim);
		imagedestroy($targetim);
	}
?>