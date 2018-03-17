<?php  
session_start();

session_unset();
//清空$_SESSION

session_destroy();

setcookie(session_name(),'',time()-3600,'/');

echo "<script>location='login.php'</script>";

?>