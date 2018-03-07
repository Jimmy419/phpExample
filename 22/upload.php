<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$files=count($_FILES['file']['name']);

for($i=0;$i<$files;$i++){
	$tmpfile=$_FILES['file']['tmp_name'][$i];
	$dstfile='uploads/images/'.$_FILES['file']['name'][$i];
	// copy($tmpfile,$dstfile);
	move_uploaded_file($tmpfile,$dstfile);
}

echo "<script>location='index.php'</script>";
?>