<?php

	function deldir($dirname){
		//打开文件夹
		$opendir=opendir($dirname);

		//循环文件夹文件
		while ($file=readdir($opendir)) {
			$path=$dirname.'/'.$file;
			if($file!='.' && $file!='..'){
				if(is_dir($path)){
					deldir($path);
				}else{
					unlink($path);
				}
			}
		}

		//删除目录资源
		closedir($opendir);

		rmdir($dirname);
	}

	deldir("test");
?>