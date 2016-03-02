<?php
session_start();
#local vars
	$id_view = 'login';
	$mt_title = 'Bienvenido';
#inc
	include('inc/head.php');
#views
	include('view/v.login.php');
#models
	
#controllers
	include('controller/c.login.php');
	#local vars
	$usuario = $_POST["usuario"];
?>