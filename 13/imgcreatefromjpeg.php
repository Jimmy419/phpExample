<?php
	$im=imagecreatefromjpeg('timg.jpg');
	header("content-type:image/jpeg");
	imagejpeg($im);
?>