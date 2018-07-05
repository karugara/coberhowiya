<?php session_start();
if (isset($_SESSION['usuario'])){
	header('Location: cobermed.php');
}else{
	header('Location: login.php');
}
?>
