<?php
session_start();
#local vars
	$id_view = 'usuarios';
	$mt_title = 'Usuarios';
	$_SESSION["id_view"] = $id_view;
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$administrar_usuario = $_SESSION["administrar_usuario"];
#inc
	include('inc/head.php');
#models
	include('model/m.registrar-usuario.php');
#views
	include('view/v.registrar-usuario.php');
#controllers

#inc
	include('inc/footer.php');
?>