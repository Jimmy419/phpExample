<?php

$imagefile=$_GET['imagepath'];
$path="uploads/images/".$imagefile;
$imgsize=filesize($path);

header("content-type:image/png");
header("content-disposition:attachment;filename={$imagefile}");
header("content-length:{$imgsize}");
readfile($path);

?>