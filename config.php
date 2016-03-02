<?php
session_start();
#local vars
	$id_view = 'config';
	$mt_title = 'config';
	$_SESSION["id_view"] = $id_view;
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$administrar_usuario = $_SESSION["administrar_usuario"];
#inc
	include('inc/head.php');
#models
	# include('model/m.registrar-usuario.php');
	include('model/m.config.php');

#views
	# include('view/v.registrar-usuario.php');
	include('view/v.config.php');
#controllers

#inc
	include('inc/footer.php');
?>