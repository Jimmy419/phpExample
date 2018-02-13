<?php 
	header("content-typ:text/html;charset=utf-8");

	$arr[] = "user1";
	$arr[] = "user21";
	$arr[] = "user13";
	$arr[] = "user14";
	$arr[] = "user15";
	$arr[] = "user16";

	/*******************方法一*******************/
	/**for 方法**begin**/
	for ($i=0; $i < 6; $i++) { 
		echo $i;
		echo "<br>";
		if($i%2 == 0){
			echo "<h1>{$arr[$i]}</h1>";
		}else{
			echo "<h1 style='background-color:red;'>{$arr[$i]}</h1>";
		}
	}
	/**for 方法**end**/


	// $arr1['name'] = "jimmy";
	// $arr1['age'] = 16;
	/*******************方法二*******************/
	// while(list($key,$val)=each($arr)){
	// 	echo $key.$val;
	// }

	$arr2['name'] = "James";
	$arr2['age'] = 16;
	$arr2['sex'] ="man";

	/*******************方法三*******************/
	/**foreach 方法**begin**/
	echo "<hr/>";
	foreach ($arr2 as $key => $value) {
		$j++;
		echo $j;
		echo "<br>";
		if($j%2==0){
			echo "<h1>Someone's {$key} is {$value}</h1>";
		}else{
			echo "<h1 style='background-color:red;'>Someone's {$key} is {$value}</h1>";
		}	
	}

	echo "<hr/>";
	foreach ($arr2 as $value) {
		echo "<h1>Someone's {$key} is {$value}</h1>";
	}
	/**foreach 方法**end**/



?>