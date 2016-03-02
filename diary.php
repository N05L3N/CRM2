<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'diary';
	$mt_title = 'Diary';
	$_SESSION["h4"] = 'Hoy';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"]; $llave = $_SESSION["llave"];
	$_SESSION["id_view"] = $id_view;
	# Vista
	$_SESSION['dataview'] = $_GET["dataview"];
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
	include('controller/c.diary.2.php'); 
	include('view/v.diary.2.php');
#models
	



#inc
	include('inc/footer.php');
?>