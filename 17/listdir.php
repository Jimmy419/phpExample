<?php

	function listdir($dirname){

		//打开文件夹
		$opendir=opendir($dirname);

		//循环文件夹文件
		while ($file=readdir($opendir)) {
			$path=$dirname.'/'.$file;
			if($file!='.' && $file!='..'){
				if(is_dir($path)){
					echo $path."<br>";
					listdir($path);
				}else{
					echo $path."<br>";
				}
			}
		}

		//删除目录资源
		closedir($opendir);
	}

	listdir("test");
?>