<?php
session_start();
#local vars
	$id_view = 'reportedeseguimientos';
	$mt_title = 'Reporte de Seguimientos';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.consultas.php');
#controllers

#views
	include('view/v.v1.reporte-de-seguimientos.php');

#inc
	include('inc/footer.php');
?>