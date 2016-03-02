<?php
session_start();
#local vars
	$id_view = 'reportes';
	$mt_title = 'Reportes';
	$_SESSION["id_view"] = $id_view;
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$administrar_usuario = $_SESSION["administrar_usuario"];
#controllers
	include('controller/databases.php');	
#inc
	include('inc/head.php');
#models
	#include('model/m.registrar-usuario.php');
	#include('model/m.reportes-01.php');
#views
	#include('view/v.registrar-usuario.php');
	 include('view/v.reportes2-00.phtml');
#controllers

#inc
	include('inc/footer.php');
?>