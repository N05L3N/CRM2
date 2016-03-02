<?php
session_start();
#local vars
	$id_view = 'consultas-clientes-sin-seguimientos';
	$mt_title = 'Consultas';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.consultas-clientes-sin-seguimientos.php');
#controllers

#views
	include('view/v.consultas-clientes-sin-seguimientos.php');

#inc
	include('inc/footer.php');
?>