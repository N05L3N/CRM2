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
	$_SESSION['dataview'] = $_GET["dataview"];

# Controllers

	include('controller/databases.php');
	include('controller/dataview.php');

# Head

	include('view/v.head.phtml');

# Vista

	# include('model/m.panel.administrador-eliminar.sql.php');
	# include('controller/c.panel.2.php'); 
	# include('view/v.panel.2.php');

	include('view/v.dashboard.phtml');

# Footer
	
	include('view/v.footer.phtml');
?>