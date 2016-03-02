<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'ryg';
	$mt_title = 'Recomienda y Gana';
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
	include('view/v.ryg.php');
#models
	


#inc
	include('inc/footer.php');
?>