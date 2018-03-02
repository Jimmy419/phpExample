<?php
	$maxim=imagecreatefromjpeg("./current/timg.jpg");
	$minim=imagecreatefromjpeg("./target/new_timg.jpg");
	$minw=imagesx($minim);
	$minh=imagesy($minim);

	imagecopy($maxim, $minim, 0, 0, 0, 0, $minw, $minh);
	header("content-type:image/jpeg");
	imagejpeg($maxim);
?>