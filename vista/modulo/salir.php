<?php if (!isset($_POST["user"])) {
	$_POST["user"]=$_COOKIE["prueba"];
setcookie("prueba",$_POST["user"], time()-84600);
header("location:index.php");
}else{
	setcookie("prueba",$_POST["user"], time()-84600);
	
	header("location:index.php");
}


 ?>