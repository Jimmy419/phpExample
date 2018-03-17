<?php  
session_start();
if(!$_SESSION['id']){
	echo "<script>location='login.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>asdfad</title>
</head>
<body>
<h2>welcome <?php echo $_SESSION[username]?></h2>
<div>asdfasdfsdfasd
asdfasdfasdfas
dfasd
asdfad
asdfasdfasdfasasdfas
df</div>
<div><a href="logout.php">logout</a></div>
</body>
</html>