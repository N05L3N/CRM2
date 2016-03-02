<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'invoiced';
	$mt_title = 'Invoiced';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$llave = $_SESSION["llave"];
	$_SESSION["id_view"] = $id_view;

#controllers
	include('controller/databases.php');	
#inc
	include('inc/head.php');
#views
	include('view/v.invoiced.php');
#models
	


#inc
	include('inc/footer.php');
?>