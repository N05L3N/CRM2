<?php
session_start();
#local vars
	$id_view = 'ajustes';
	$mt_title = 'ajustes';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.ajustes.php');
#controllers

#views
	include('view/v.ajustes.php');

#inc
	include('inc/footer.php');
?>