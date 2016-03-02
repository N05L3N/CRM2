<?php
	session_start();
	
	$_SESSION["v1"] = '';
	$_SESSION["v2"] = '';
	$_SESSION["v3"] = '';
	$_SESSION["v11"] = '';
	$_SESSION["v22"] = '';
	$_SESSION["v33"] = '';
	$_SESSION["calendar_y"] = '';
	$_SESSION["calendar_m"] = '';
	$_SESSION["calendar_d"] = '';
	
	$fecha_inicio_filtro = '';
	$fecha_fin_filtro = '';
	$fecha_inicio_filtro_mx = '';
	$fecha_fin_filtro_mx = '';

	 header("Location: {$_SERVER['HTTP_REFERER']}".SID);
	# echo '_';
		
?>