<?php
session_start();
#local vars
	$id_view = 'registrar_cliente';
	$mt_title = 'Registrar Cliente';
#inc
	include('inc/head.php');
#models
	include('model/m.registrar-cliente.php');
#views
	include('view/v.registrar_cliente-super.php');
#controllers

#inc
	include('inc/footer.php');
?>