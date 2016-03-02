<?php
session_start();
#local vars
	$id_view = 'menu';
	$mt_title = 'CRM';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.menu.php');
#controllers

#views
	include('view/v.menu.php');

#inc
	include('inc/footer.php');
?>