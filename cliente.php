<?php
session_start();
#local vars
	$id_view = 'cliente';
	$mt_title = 'Cliente';
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["idedit"] = $_GET["id"];
	$id = $_SESSION["idedit"];
	$departamento = $_SESSION["departamento"];
	
#global vars
	 
#inc
	include('inc/head.php');
#models
	include('model/m.cliente.php');
#views
	# include('view/v.cliente.php');
	include('view/v.cliente2.php');
#controllers

#inc
	include('inc/footer.php');
?>