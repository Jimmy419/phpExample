<?php

	function movedir($currentdir,$distdir){
		mkdir($distdir);

		//打开文件夹
		$opendir=opendir($currentdir);

		//循环文件夹文件
		while ($file=readdir($opendir)) {
			$path=$currentdir.'/'.$file;
			$distpath=$distdir.'/'.$file;
			if($file!='.' && $file!='..'){
				if(is_dir($path)){
					movedir($path,$distpath);
				}else{
					copy($path,$distpath);
					unlink($path);
				}
			}
		}

		//删除目录资源
		closedir($opendir);

		rmdir($currentdir);
	}

	movedir("text1","text2");
?>