<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		img{
			width:100px;
			height: 100px;
		}
		table th{
			border:1px solid red;
		}
		table td{
			border:1px solid red;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<th>图片</th>
			<th>下载</th>
		</thead>
		<tbody>
		<?php

			function listdir($dirname){

				//打开文件夹
				$opendir=opendir($dirname);

				//循环文件夹文件
				while ($file=readdir($opendir)) {
					$path=$dirname.'/'.$file;
					if($file!='.' && $file!='..'){
						if(is_dir($path)){
							listdir($path);
						}else{
							echo "<tr>";
							echo "<td><img src='{$path}'></td>";
							echo '<td>{$file}</td>';
							echo "<td><a href='download.php?imagepath={$file}'>下载</a></td>";
							echo "</tr>";
						}
					}
				}

				//删除目录资源
				closedir($opendir);
			}

			listdir("uploads/images");
		?>
		</tbody>
	</table>
	<div><a href="uploadform.php">去上传</a></div>
</body>
</html>