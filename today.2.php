<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'today';
	$mt_title = 'Today';
	$_SESSION["h4"] = 'Por día';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["admincomovendedor"] = $_GET["vendedor"];
	$llave = $_SESSION["llave"];
	$_SESSION["id_view"] = $id_view;

	#CALENDAR
	$_SESSION["calendar_d"] = $_GET['d'];
	$_SESSION["calendar_m"] = $_GET['m'];
	$_SESSION["calendar_y"] = $_GET['y'];

#controllers
	include('controller/databases.php');	
#inc
	include('inc/head.php');
#views
	include('view/v.today.php');
#models
	


#inc
	include('inc/footer.php');
?>