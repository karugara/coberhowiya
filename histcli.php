<?php session_start();
if(isset($_SESSION['usuario'])){
	require 'vista/histcli_vista.php';
}else{
	header('Location: login.php');
}
?>
