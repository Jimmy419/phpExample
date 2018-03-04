<?php

	function copydir($currentdir,$distdir){
		mkdir($distdir);

		//打开文件夹
		$opendir=opendir($currentdir);

		//循环文件夹文件
		while ($file=readdir($opendir)) {
			$path=$currentdir.'/'.$file;
			$distpath=$distdir.'/'.$file;
			if($file!='.' && $file!='..'){
				if(is_dir($path)){
					copydir($path,$distpath);
				}else{
					copy($path,$distpath);
				}
			}
		}

		//删除目录资源
		closedir($opendir);
	}

	copydir("test","text1");
?>