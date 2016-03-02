<?php
session_start();
# Corrige problemas con las variables en ie
header('P3P: CP="CAO PSA OUR"');
header('Content-Type: text/html;charset=utf-8');
#local vars
	$id_view = 'seguimientos';
	$mt_title = 'Seguimientos';
	$idedit = $_SESSION["idedit"];
#inc
	include('inc/head.php');
#models
	include('model/m.seguimientos.php');
#views
	include('view/v.seguimientos.php');
#controllers

#inc
	include('inc/footer.php');
?>