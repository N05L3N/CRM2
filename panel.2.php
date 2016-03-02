<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'panel';
	$mt_title = 'Panel';
	$_SESSION["h4"] = $mt_title;
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
	# Vista
	$_SESSION['dataview'] = $_GET["dataview"];

#controllers
	include('controller/databases.php');
	include('controller/dataview.php');
#inc
	include('inc/head.php');
#views
	include('model/m.panel.administrador-eliminar.sql.php');
	if (isset($_GET['pos'])) {
		$ini=$_GET['pos'];
	}
	else {
		$ini=1; 
	}


	include('controller/c.panel.2.php'); 
	include('view/v.panel.2.php');
#models




#inc
	include('inc/footer.php');
?>