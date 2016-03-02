<?php
session_start();
#local vars
	$id_view = 'bitacoras';
	$mt_title = 'bitacoras';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.bitacoras.php');
#controllers

#views
	include('view/v.bitacoras.php');

#inc
	include('inc/footer.php');
?>