<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min,js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
		<script>
			$(function(){
				$('.dates #user1').datepicker({
					'format':'yyyy-mm-dd',
					'autoclose' : true
				});
			});
		</script>
	</head>
	<body>
<?php session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: login.php');
}
require 'vista/usuarios_vista.php';

?>
