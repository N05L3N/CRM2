<?php
	require('conf/config.php');
	#local vars
	$id_view = 'panel';
	$mt_title = 'Panel';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;

#controllers
	include('controller/databases.php');	
#inc
	include('inc/head.php');
#views
	include('view/v.panel.php');
#models
	


#inc
	include('inc/footer.php');
?>