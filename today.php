<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'today';
	$mt_title = 'Today';
	$_SESSION["h4"] = 'Por Día';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"]; $llave = $_SESSION["llave"];
	$_SESSION["id_view"] = $id_view;
	# Vista
	$_SESSION['dataview'] = $_GET["dataview"];
	#CALENDAR
	$_SESSION["calendar_d"] = $_GET['d'];
	$_SESSION["calendar_m"] = $_GET['m'];
	$_SESSION["calendar_y"] = $_GET['y'];
#controllers
	include('controller/databases.php');	
	include('controller/dataview.php');
#inc
	include('inc/head.php');
#views
	# include('model/m.panel.administrador-eliminar.sql.php');
	if (isset($_GET['pos'])) {
		$ini=$_GET['pos'];
	}
	else {
		$ini=1; 
	}

	# Filtros
	$_SESSION['form-filters-status'] = $_POST['form-filters-status'];
	# $_SESSION['form-filters-status'] = 'Caliente';
	include('controller/c.today.2.php'); 
	include('view/v.today.2.php');
#models
	



#inc
	include('inc/footer.php');
?>