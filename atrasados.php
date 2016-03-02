<?php
session_start();
#local vars
	$id_view = 'atrasados';
	$mt_title = 'Atrasados';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.atrasados.php');
#controllers

#views
	include('view/v.atrasados.php');

#inc
	include('inc/footer.php');
?>