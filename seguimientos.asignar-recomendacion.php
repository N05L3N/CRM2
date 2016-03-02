<?php
session_start();
# Corrige problemas con las variables en ie
header('P3P: CP="CAO PSA OUR"');
header('Content-Type: text/html;charset=utf-8');
#local vars
	$id_view = 'seguimientos.asignar-recomendacion';
	$mt_title = 'Seguimientos Asignar Recomendación';
	$idedit = $_SESSION["idedit"];
	$termometro = $_SESSION["termometro"];
#inc
	include('inc/head.php');
#models
	include('model/m.seguimientos.asignar-recomendacion.php');
#views
	include('view/v.seguimientos.asignar-recomendacion.php');
#controllers

#inc
	include('inc/footer.php');
?>