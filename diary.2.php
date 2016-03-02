<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'diary';
	$mt_title = 'Diary';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["admincomovendedor"] = $_GET["vendedor"];
	$llave = $_SESSION["llave"];
	$_SESSION["id_view"] = $id_view;

#controllers
	include('controller/databases.php');	
#inc
	include('inc/head.php');
#views
	include('view/v.diary.php');
#models
	


#inc
	include('inc/footer.php');
?>