<?php
	header('content-type:text/html;charset=utf-8');
	$filename="mes.db";
	$str=$_POST['mname'];
	if(!empty($str)){
		$str.="<hr>";
		file_put_contents($filename, $str, FILE_APPEND);
		echo "<script>location='index.php'</script>";
	}else{
		echo "<script>alert('留言不能为空')</script>";
		echo "<script>location='index.php'</script>";
	}
?>