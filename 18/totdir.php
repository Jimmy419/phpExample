<?php

	function totdir($dirname){
		static $tot;

		//打开文件夹
		$opendir=opendir($dirname);

		//循环文件夹文件
		while ($file=readdir($opendir)) {
			$path=$dirname.'/'.$file;
			if($file!='.' && $file!='..'){
				if(is_dir($path)){
					totdir($path);
				}else{
					$tot+=filesize($path);
				}
			}
		}

		//删除目录资源
		closedir($opendir);

		return $tot;
	}

	echo totdir("test");
?>