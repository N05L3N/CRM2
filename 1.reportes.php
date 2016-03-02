<?php
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
session_cache_expire(9999);
$cache_expire = session_cache_expire();
session_start();
#local vars
	$id_view = 'consultas';
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
	include('controller/c.1.reportes.php');
#views
	include('view/1.reportes.php');

#inc
	include('inc/footer.php');
?>