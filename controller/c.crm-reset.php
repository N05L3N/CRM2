<?php
	session_start();
	
	$_SESSION["v1"] = '';
	$_SESSION["v2"] = '';
	$_SESSION["v3"] = '';
	$_SESSION["v11"] = '';
	$_SESSION["v22"] = '';
	$_SESSION["v33"] = '';

	$_SESSION["buscador"] = $_POST["buscador"];
	
	$fecha_inicio_filtro = '';
	$fecha_fin_filtro = '';
	$fecha_inicio_filtro_mx = '';
	$fecha_fin_filtro_mx = '';

	# header("Location: {$_SERVER['HTTP_REFERER']}".SID);

	 header("Location: ../panel.php");
	
	
?>