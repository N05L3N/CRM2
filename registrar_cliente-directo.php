<?php
session_start();
#local vars
	$id_view = 'registrar_cliente';
	$mt_title = 'Registrar Cliente';
	$tipo = $_SESSION["tipo"];
	$usuario = $_SESSION["usuario"];
#inc
	include('inc/head-directo.php');
#models
	include('model/m.registrar-cliente.php');
#views
	include('view/v.registrar_cliente-directo.php');
#controllers

#inc
	include('inc/footer.php');
?>