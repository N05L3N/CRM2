<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
body {
	font-family: calibri;
}
a {
	text-decoration: none;
}
	</style>
</head>

<body>
<!-- 
history/lookup?hl=es-419&amp;max=1406613600000000&amp;month=7&amp;day=28&amp;yr=2014
-->
<table style="width:13em;">
	<tbody>
		<tr>
			<td>&nbsp;</td>
			<td>


<?php
# Total de Agendados al Día

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_asignacionesHoy = ''.$ano.'-'.$mes.'-'.$dia.'';

	# $sql_asignacionesHoy = "SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha = '$fecha_asignacionesHoy' ";
	$sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_asignacionesHoy' AND horaasignacion != 'ok' ";
  	$result_asignacionesHoy = mysql_query($sql_asignacionesHoy);
  	$numero_asignacionesHoy = mysql_num_rows($result_asignacionesHoy);

# Septiembre del 2014

      $color_fecha_asignaciones_00 = 'FFFFFF';

	$sql_fecha_asignaciones_01 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-01' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_01 = mysql_query($sql_fecha_asignaciones_01);
  	$numero_fecha_asignaciones_01 = mysql_num_rows($result_fecha_asignaciones_01);
  	
  	if ($numero_fecha_asignaciones_01 == 0) {
  		$color_fecha_asignaciones_01 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_01 == 1) {
  		$color_fecha_asignaciones_01 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_01 == 2) {
  		$color_fecha_asignaciones_01 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_01 == 3) {
  		$color_fecha_asignaciones_01 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_01 == 4) {
  		$color_fecha_asignaciones_01 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_01 > 4) {
  		$color_fecha_asignaciones_01 = '1273ff';
  	}

  	else { }

  	$sql_fecha_asignaciones_02 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-02' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_02 = mysql_query($sql_fecha_asignaciones_02);
  	$numero_fecha_asignaciones_02 = mysql_num_rows($result_fecha_asignaciones_02);

  	if ($numero_fecha_asignaciones_02 == 0) {
  		$color_fecha_asignaciones_02 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_02 == 1) {
  		$color_fecha_asignaciones_02 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_02 == 2) {
  		$color_fecha_asignaciones_02 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_02 == 3) {
  		$color_fecha_asignaciones_02 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_02 == 4) {
  		$color_fecha_asignaciones_02 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_02 > 4) {
  		$color_fecha_asignaciones_02 = '1273ff';
  	}

  	else { }

  	$sql_fecha_asignaciones_03 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-03' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_03 = mysql_query($sql_fecha_asignaciones_03);
  	$numero_fecha_asignaciones_03 = mysql_num_rows($result_fecha_asignaciones_03);

  	if ($numero_fecha_asignaciones_03 == 0) {
  		$color_fecha_asignaciones_03 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_03 == 1) {
  		$color_fecha_asignaciones_03 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_03 == 2) {
  		$color_fecha_asignaciones_03 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_03 == 3) {
  		$color_fecha_asignaciones_03 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_03 == 4) {
  		$color_fecha_asignaciones_03 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_03 > 4) {
  		$color_fecha_asignaciones_03 = '1273ff';
  	}

  	$sql_fecha_asignaciones_04 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-04' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_04 = mysql_query($sql_fecha_asignaciones_04);
  	$numero_fecha_asignaciones_04 = mysql_num_rows($result_fecha_asignaciones_04);

  	if ($numero_fecha_asignaciones_04 == 0) {
  		$color_fecha_asignaciones_04 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_04 == 1) {
  		$color_fecha_asignaciones_04 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_04 == 2) {
  		$color_fecha_asignaciones_04 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_04 == 3) {
  		$color_fecha_asignaciones_04 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_04 == 4) {
  		$color_fecha_asignaciones_04 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_04 > 4) {
  		$color_fecha_asignaciones_04 = '1273ff';
  	}

  	$sql_fecha_asignaciones_05 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-05' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_05 = mysql_query($sql_fecha_asignaciones_05);
  	$numero_fecha_asignaciones_05 = mysql_num_rows($result_fecha_asignaciones_05);

  	if ($numero_fecha_asignaciones_05 == 0) {
  		$color_fecha_asignaciones_05 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_05 == 1) {
  		$color_fecha_asignaciones_05 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_05 == 2) {
  		$color_fecha_asignaciones_05 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_05 == 3) {
  		$color_fecha_asignaciones_05 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_05 == 4) {
  		$color_fecha_asignaciones_05 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_05 > 4) {
  		$color_fecha_asignaciones_05 = '1273ff';
  	}

  	$sql_fecha_asignaciones_06 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-06' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_06 = mysql_query($sql_fecha_asignaciones_06);
  	$numero_fecha_asignaciones_06 = mysql_num_rows($result_fecha_asignaciones_06);

  	if ($numero_fecha_asignaciones_06 == 0) {
  		$color_fecha_asignaciones_06 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_06 == 1) {
  		$color_fecha_asignaciones_06 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_06 == 2) {
  		$color_fecha_asignaciones_06 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_06 == 3) {
  		$color_fecha_asignaciones_06 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_06 == 4) {
  		$color_fecha_asignaciones_06 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_06 > 4) {
  		$color_fecha_asignaciones_06 = '1273ff';
  	}

  	$sql_fecha_asignaciones_07 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-07' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_07 = mysql_query($sql_fecha_asignaciones_07);
  	$numero_fecha_asignaciones_07 = mysql_num_rows($result_fecha_asignaciones_07);

  	if ($numero_fecha_asignaciones_07 == 0) {
  		$color_fecha_asignaciones_07 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_07 == 1) {
  		$color_fecha_asignaciones_07 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_07 == 2) {
  		$color_fecha_asignaciones_07 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_07 == 3) {
  		$color_fecha_asignaciones_07 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_07 == 4) {
  		$color_fecha_asignaciones_07 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_07 > 4) {
  		$color_fecha_asignaciones_07 = '1273ff';
  	}

  	$sql_fecha_asignaciones_08 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-08' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_08 = mysql_query($sql_fecha_asignaciones_08);
  	$numero_fecha_asignaciones_08 = mysql_num_rows($result_fecha_asignaciones_08);

  	if ($numero_fecha_asignaciones_08 == 0) {
  		$color_fecha_asignaciones_08 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_08 == 1) {
  		$color_fecha_asignaciones_08 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_08 == 2) {
  		$color_fecha_asignaciones_08 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_08 == 3) {
  		$color_fecha_asignaciones_08 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_08 == 4) {
  		$color_fecha_asignaciones_08 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_08 > 4) {
  		$color_fecha_asignaciones_08 = '1273ff';
  	}

  	$sql_fecha_asignaciones_09 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-09' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_09 = mysql_query($sql_fecha_asignaciones_09);
  	$numero_fecha_asignaciones_09 = mysql_num_rows($result_fecha_asignaciones_09);

  	  	if ($numero_fecha_asignaciones_09 == 0) {
  		$color_fecha_asignaciones_09 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_09 == 1) {
  		$color_fecha_asignaciones_09 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_09 == 2) {
  		$color_fecha_asignaciones_09 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_09 == 3) {
  		$color_fecha_asignaciones_09 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_09 == 4) {
  		$color_fecha_asignaciones_09 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_09 > 4) {
  		$color_fecha_asignaciones_09 = '1273ff';
  	}

  	$sql_fecha_asignaciones_10 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-10' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_10 = mysql_query($sql_fecha_asignaciones_10);
  	$numero_fecha_asignaciones_10 = mysql_num_rows($result_fecha_asignaciones_10);

  	 if ($numero_fecha_asignaciones_10 == 0) {
  		$color_fecha_asignaciones_10 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_10 == 1) {
  		$color_fecha_asignaciones_10 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_10 == 2) {
  		$color_fecha_asignaciones_10 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_10 == 3) {
  		$color_fecha_asignaciones_10 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_10 == 4) {
  		$color_fecha_asignaciones_10 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_10 > 4) {
  		$color_fecha_asignaciones_10 = '1273ff';
  	}

  	$sql_fecha_asignaciones_11 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-11' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_11 = mysql_query($sql_fecha_asignaciones_11);
  	$numero_fecha_asignaciones_11 = mysql_num_rows($result_fecha_asignaciones_11);

  	if ($numero_fecha_asignaciones_11 == 0) {
  		$color_fecha_asignaciones_11 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_11 == 1) {
  		$color_fecha_asignaciones_11 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_11 == 2) {
  		$color_fecha_asignaciones_11 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_11 == 3) {
  		$color_fecha_asignaciones_11 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_11 == 4) {
  		$color_fecha_asignaciones_11 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_11 > 4) {
  		$color_fecha_asignaciones_11 = '1273ff';
  	}

  	$sql_fecha_asignaciones_12 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-12' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_12= mysql_query($sql_fecha_asignaciones_12);
  	$numero_fecha_asignaciones_12= mysql_num_rows($result_fecha_asignaciones_12);

	if ($numero_fecha_asignaciones_12 == 0) {
  		$color_fecha_asignaciones_12 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_12 == 1) {
  		$color_fecha_asignaciones_12 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_12 == 2) {
  		$color_fecha_asignaciones_12 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_12 == 3) {
  		$color_fecha_asignaciones_12 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_12 == 4) {
  		$color_fecha_asignaciones_12 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_12 > 4) {
  		$color_fecha_asignaciones_12 = '1273ff';
  	}

  	$sql_fecha_asignaciones_13 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-13' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_13 = mysql_query($sql_fecha_asignaciones_13);
  	$numero_fecha_asignaciones_13 = mysql_num_rows($result_fecha_asignaciones_13);

  	if ($numero_fecha_asignaciones_13 == 0) {
  		$color_fecha_asignaciones_13 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_13 == 1) {
  		$color_fecha_asignaciones_13 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_13 == 2) {
  		$color_fecha_asignaciones_13 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_13 == 3) {
  		$color_fecha_asignaciones_13 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_13 == 4) {
  		$color_fecha_asignaciones_13 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_13 > 4) {
  		$color_fecha_asignaciones_13 = '1273ff';
  	}

  	$sql_fecha_asignaciones_14 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-14' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_14 = mysql_query($sql_fecha_asignaciones_14);
  	$numero_fecha_asignaciones_14 = mysql_num_rows($result_fecha_asignaciones_14);

  	if ($numero_fecha_asignaciones_14 == 0) {
  		$color_fecha_asignaciones_14 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_14 == 1) {
  		$color_fecha_asignaciones_14 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_14 == 2) {
  		$color_fecha_asignaciones_14 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_14 == 3) {
  		$color_fecha_asignaciones_14 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_14 == 4) {
  		$color_fecha_asignaciones_14 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_14 > 4) {
  		$color_fecha_asignaciones_14 = '1273ff';
  	}

  	$sql_fecha_asignaciones_15 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-15' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_15 = mysql_query($sql_fecha_asignaciones_15);
  	$numero_fecha_asignaciones_15 = mysql_num_rows($result_fecha_asignaciones_15);

  	if ($numero_fecha_asignaciones_15 == 0) {
  		$color_fecha_asignaciones_15 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_15 == 1) {
  		$color_fecha_asignaciones_15 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_15 == 2) {
  		$color_fecha_asignaciones_15 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_15 == 3) {
  		$color_fecha_asignaciones_15 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_15 == 4) {
  		$color_fecha_asignaciones_15 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_15 > 4) {
  		$color_fecha_asignaciones_15 = '1273ff';
  	}

  	$sql_fecha_asignaciones_16 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-16' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_16 = mysql_query($sql_fecha_asignaciones_16);
  	$numero_fecha_asignaciones_16 = mysql_num_rows($result_fecha_asignaciones_16);

	if ($numero_fecha_asignaciones_16 == 0) {
  		$color_fecha_asignaciones_16 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_16 == 1) {
  		$color_fecha_asignaciones_16 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_16 == 2) {
  		$color_fecha_asignaciones_16 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_16 == 3) {
  		$color_fecha_asignaciones_16 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_16 == 4) {
  		$color_fecha_asignaciones_16 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_16 > 4) {
  		$color_fecha_asignaciones_16 = '1273ff';
  	}

  	$sql_fecha_asignaciones_17 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-17' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_17 = mysql_query($sql_fecha_asignaciones_17);
  	$numero_fecha_asignaciones_17 = mysql_num_rows($result_fecha_asignaciones_17);

  	  	if ($numero_fecha_asignaciones_17 == 0) {
  		$color_fecha_asignaciones_17 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_17 == 1) {
  		$color_fecha_asignaciones_17 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_17 == 2) {
  		$color_fecha_asignaciones_17 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_17 == 3) {
  		$color_fecha_asignaciones_17 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_17 == 4) {
  		$color_fecha_asignaciones_17 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_17 > 4) {
  		$color_fecha_asignaciones_17 = '1273ff';
  	}

  	$sql_fecha_asignaciones_18 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-18' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_18 = mysql_query($sql_fecha_asignaciones_18);
  	$numero_fecha_asignaciones_18 = mysql_num_rows($result_fecha_asignaciones_18);

  	  	if ($numero_fecha_asignaciones_18 == 0) {
  		$color_fecha_asignaciones_18 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_18 == 1) {
  		$color_fecha_asignaciones_18 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_18 == 2) {
  		$color_fecha_asignaciones_18 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_18 == 3) {
  		$color_fecha_asignaciones_18 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_18 == 4) {
  		$color_fecha_asignaciones_18 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_18 > 4) {
  		$color_fecha_asignaciones_18 = '1273ff';
  	}

  	$sql_fecha_asignaciones_19 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-19' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_19 = mysql_query($sql_fecha_asignaciones_19);
  	$numero_fecha_asignaciones_19 = mysql_num_rows($result_fecha_asignaciones_19);

  	  	if ($numero_fecha_asignaciones_19 == 0) {
  		$color_fecha_asignaciones_19 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_19 == 1) {
  		$color_fecha_asignaciones_19 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_19 == 2) {
  		$color_fecha_asignaciones_19 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_19 == 3) {
  		$color_fecha_asignaciones_19 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_19 == 4) {
  		$color_fecha_asignaciones_19 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_19 > 4) {
  		$color_fecha_asignaciones_19 = '1273ff';
  	}

  	$sql_fecha_asignaciones_20 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-20' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_20 = mysql_query($sql_fecha_asignaciones_20);
  	$numero_fecha_asignaciones_20 = mysql_num_rows($result_fecha_asignaciones_20);

  	  	if ($numero_fecha_asignaciones_20 == 0) {
  		$color_fecha_asignaciones_20 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_20 == 1) {
  		$color_fecha_asignaciones_20 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_20 == 2) {
  		$color_fecha_asignaciones_20 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_20 == 3) {
  		$color_fecha_asignaciones_20 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_20 == 4) {
  		$color_fecha_asignaciones_20 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_20 > 4) {
  		$color_fecha_asignaciones_20 = '1273ff';
  	}

  	$sql_fecha_asignaciones_21 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-21' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_21 = mysql_query($sql_fecha_asignaciones_21);
  	$numero_fecha_asignaciones_21 = mysql_num_rows($result_fecha_asignaciones_21);

	if ($numero_fecha_asignaciones_21 == 0) {
  		$color_fecha_asignaciones_21 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_21 == 1) {
  		$color_fecha_asignaciones_21 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_21 == 2) {
  		$color_fecha_asignaciones_21 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_21 == 3) {
  		$color_fecha_asignaciones_21 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_21 == 4) {
  		$color_fecha_asignaciones_21 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_21 > 4) {
  		$color_fecha_asignaciones_21 = '1273ff';
  	}

  	$sql_fecha_asignaciones_22 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-22' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_22 = mysql_query($sql_fecha_asignaciones_22);
  	$numero_fecha_asignaciones_22 = mysql_num_rows($result_fecha_asignaciones_22);

	if ($numero_fecha_asignaciones_22 == 0) {
  		$color_fecha_asignaciones_22 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_22 == 1) {
  		$color_fecha_asignaciones_22 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_22 == 2) {
  		$color_fecha_asignaciones_22 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_22 == 3) {
  		$color_fecha_asignaciones_22 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_22 == 4) {
  		$color_fecha_asignaciones_22 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_22 > 4) {
  		$color_fecha_asignaciones_22 = '1273ff';
  	}

  	$sql_fecha_asignaciones_23 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-23' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_23 = mysql_query($sql_fecha_asignaciones_23);
  	$numero_fecha_asignaciones_23 = mysql_num_rows($result_fecha_asignaciones_23);

  	  	if ($numero_fecha_asignaciones_23 == 0) {
  		$color_fecha_asignaciones_23 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_23 == 1) {
  		$color_fecha_asignaciones_23 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_23 == 2) {
  		$color_fecha_asignaciones_23 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_23 == 3) {
  		$color_fecha_asignaciones_23 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_23 == 4) {
  		$color_fecha_asignaciones_23 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_23 > 4) {
  		$color_fecha_asignaciones_23 = '1273ff';
  	}

  	$sql_fecha_asignaciones_24 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-24' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_24 = mysql_query($sql_fecha_asignaciones_24);
  	$numero_fecha_asignaciones_24 = mysql_num_rows($result_fecha_asignaciones_24);

	if ($numero_fecha_asignaciones_24 == 0) {
  		$color_fecha_asignaciones_24 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_24 == 1) {
  		$color_fecha_asignaciones_24 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_24 == 2) {
  		$color_fecha_asignaciones_24 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_24 == 3) {
  		$color_fecha_asignaciones_24 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_24 == 4) {
  		$color_fecha_asignaciones_24 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_24 > 4) {
  		$color_fecha_asignaciones_24 = '1273ff';
  	}

  	$sql_fecha_asignaciones_25 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-25' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_25 = mysql_query($sql_fecha_asignaciones_25);
  	$numero_fecha_asignaciones_25 = mysql_num_rows($result_fecha_asignaciones_25);

	if ($numero_fecha_asignaciones_25 == 0) {
  		$color_fecha_asignaciones_25 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_25 == 1) {
  		$color_fecha_asignaciones_25 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_25 == 2) {
  		$color_fecha_asignaciones_25 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_25 == 3) {
  		$color_fecha_asignaciones_25 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_25 == 4) {
  		$color_fecha_asignaciones_25 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_25 > 4) {
  		$color_fecha_asignaciones_25 = '1273ff';
  	}

  	$sql_fecha_asignaciones_26 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-26' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_26 = mysql_query($sql_fecha_asignaciones_26);
  	$numero_fecha_asignaciones_26 = mysql_num_rows($result_fecha_asignaciones_26);

	if ($numero_fecha_asignaciones_26 == 0) {
  		$color_fecha_asignaciones_26 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_26 == 1) {
  		$color_fecha_asignaciones_26 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_26 == 2) {
  		$color_fecha_asignaciones_26 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_26 == 3) {
  		$color_fecha_asignaciones_26 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_26 == 4) {
  		$color_fecha_asignaciones_26 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_26 > 4) {
  		$color_fecha_asignaciones_26 = '1273ff';
  	}

  	$sql_fecha_asignaciones_27 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-27' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_27 = mysql_query($sql_fecha_asignaciones_27);
  	$numero_fecha_asignaciones_27 = mysql_num_rows($result_fecha_asignaciones_27);

	if ($numero_fecha_asignaciones_27 == 0) {
  		$color_fecha_asignaciones_27 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_27 == 1) {
  		$color_fecha_asignaciones_27 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_27 == 2) {
  		$color_fecha_asignaciones_27 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_27 == 3) {
  		$color_fecha_asignaciones_27 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_27 == 4) {
  		$color_fecha_asignaciones_27 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_27 > 4) {
  		$color_fecha_asignaciones_27 = '1273ff';
  	}

  	$sql_fecha_asignaciones_28 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-28' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_28 = mysql_query($sql_fecha_asignaciones_28);
  	$numero_fecha_asignaciones_28 = mysql_num_rows($result_fecha_asignaciones_28);

	if ($numero_fecha_asignaciones_28 == 0) {
  		$color_fecha_asignaciones_28 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_28 == 1) {
  		$color_fecha_asignaciones_28 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_28 == 2) {
  		$color_fecha_asignaciones_28 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_28 == 3) {
  		$color_fecha_asignaciones_28 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_28 == 4) {
  		$color_fecha_asignaciones_28 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_28 > 4) {
  		$color_fecha_asignaciones_28 = '1273ff';
  	}

  	$sql_fecha_asignaciones_29 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-29' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_29 = mysql_query($sql_fecha_asignaciones_29);
  	$numero_fecha_asignaciones_29 = mysql_num_rows($result_fecha_asignaciones_29);

	if ($numero_fecha_asignaciones_29 == 0) {
  		$color_fecha_asignaciones_29 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_29 == 1) {
  		$color_fecha_asignaciones_29 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_29 == 2) {
  		$color_fecha_asignaciones_29 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_29 == 3) {
  		$color_fecha_asignaciones_29 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_29 == 4) {
  		$color_fecha_asignaciones_29 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_29 > 4) {
  		$color_fecha_asignaciones_29 = '1273ff';
  	}

  	$sql_fecha_asignaciones_30 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-09-30' AND horaasignacion != 'ok' ";
  	$result_fecha_asignaciones_30 = mysql_query($sql_fecha_asignaciones_30);
  	$numero_fecha_asignaciones_30 = mysql_num_rows($result_fecha_asignaciones_30);

	if ($numero_fecha_asignaciones_30 == 0) {
  		$color_fecha_asignaciones_30 = 'FFFFFF';
  	}

  	else if ($numero_fecha_asignaciones_30 == 1) {
  		$color_fecha_asignaciones_30 = 'D4E0F0';
  	}

  	else if ($numero_fecha_asignaciones_30 == 2) {
  		$color_fecha_asignaciones_30 = '92B9F0';
  	}

  	else if ($numero_fecha_asignaciones_30 == 3) {
  		$color_fecha_asignaciones_30 = '79ABF0';
  	}

  	else if ($numero_fecha_asignaciones_30 == 4) {
  		$color_fecha_asignaciones_30 = '4D90F0';
  	}

  	else if ($numero_fecha_asignaciones_30 > 4) {
  		$color_fecha_asignaciones_30 = '1273ff';
  	}
/*  	*/
?>

				<table>
					<tbody>
						<tr>
							<td style="text-align:left" width="100%"><h6>Calendario en desarrollo (No muestra datos reales)</h6></td>
						</tr>
						<tr>
							<td class="calcell" style="text-align:left;color:#999999">Sep 2014</td>
							<td class="calcell">
								<a href="#">&lt;</a>&nbsp;<a href="#">&gt;</a>
							</td>
						</tr>
					</tbody>
				</table>

<table width="100%">
	<tbody>
	<tr>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">L</font></span></td>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">M</font></span></td>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">M</font></span></td>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">J</font></span></td>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">V</font></span></td>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">S</font></span></td>
		<td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">D</font></span></td>
	</tr>
	<tr>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_01 ?>"><span><a href="" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Sep 1"><font color="#333333">1</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_02 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_02 ?> llamadas programadas para: Sep 2"><font color="#333333">2</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_03 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_03 ?> llamadas programadas para: Sep 3"><font color="#333333">3</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_04 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_04 ?> llamadas programadas para: Sep 4"><font color="#333333">4</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_05 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_05 ?> llamadas programadas para: Sep 5"><font color="#333333">5</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_06 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_06 ?> llamadas programadas para: Sep 6"><font color="#333333">6</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_07 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_07 ?> llamadas programadas para: Sep 7"><font color="#333333">7</font></a></span></td>
	</tr>
	<tr>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_08 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_08 ?> llamadas programadas para: Sep 8"><font color="#333333">8</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_09 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_09 ?> llamadas programadas para: Sep 9"><font color="#333333">9</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_10 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_10 ?> llamadas programadas para: Sep 10"><font color="#333333">10</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_11 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_11 ?> llamadas programadas para: Sep 11"><font color="#333333">11</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_12 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_12 ?> llamadas programadas para: Sep 12" class="bold"><font color="#333333">12</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_13 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_13 ?> llamadas programadas para: Sep 13"><font color="#333333">13</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_14 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_14 ?> llamadas programadas para: Sep 14"><font color="#333333">14</font></a></span></td>
	</tr>
	<tr>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_15 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_15 ?> llamadas programadas para: Sep 15"><font color="#333333">15</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_16 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_16 ?> llamadas programadas para: Sep 16"><font color="#333333">16</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_17 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_17 ?> llamadas programadas para: Sep 17"><font color="#333333">17</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_18 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_18 ?> llamadas programadas para: Sep 17"><font color="#333333">18</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_19 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_19 ?> llamadas programadas para: Sep 18"><font color="#333333">19</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_20 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_20 ?> llamadas programadas para: Sep 19"><font color="#333333">20</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_21 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_21 ?> llamadas programadas para: Sep 20"><font color="#333333">21</font></a></span></td>
	</tr>
	<tr>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_22 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_22 ?> llamadas programadas para: Sep 21"><font color="#333333">22</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_23 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_23 ?> llamadas programadas para: Sep 22"><font color="#333333">23</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_24 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_24 ?> llamadas programadas para: Sep 23"><font color="#333333">24</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_25 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_25 ?> llamadas programadas para: Sep 24"><font color="#333333">25</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_26 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_26 ?> llamadas programadas para: Sep 25"><font color="#333333">26</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_27 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_27 ?> llamadas programadas para: Sep 26"><font color="#333333">27</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_28 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_28 ?> llamadas programadas para: Sep 27"><font color="#333333">28</font></a></span></td>
	</tr>
	<tr>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_29 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_29 ?> llamadas programadas para: Sep 28"><font color="#333333">29</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_30 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_30 ?> llamadas programadas para: Sep 29"><font color="#333333">30</font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Sep 30"><font color="#333333"></font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Sep 28"><font color="#333333"></font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Sep 29"><font color="#333333"></font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Sep 30"><font color="#333333"></font></a></span></td>
		<td class="calcell" style="text-align:center" width="14%" bgcolor="#<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Sep 31"><font color="#333333"><b></b></font></a></span></td>
	</tr>
	</tbody>
</table>


<center>
<table width="100%">
	<tbody>
	<tr>
		<td style="padding-top:6px"></td>
	</tr>
	<tr>
		<td bgcolor="#D4E0F0" height="10px" width="20%"></td>
		<td bgcolor="#92B9F0" height="10px" width="20%"></td>
		<td bgcolor="#79ABF0" height="10px" width="20%"></td>
		<td bgcolor="#4D90F0" height="10px" width="20%"></td>
              <td bgcolor="#1273ff" height="10px" width="20%"></td>
	</tr>
	<tr>
		<td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">1 Llamada</td>
		<td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">2 Llamadas</td>
		<td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">3 Llamadas</td>
                  <td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">4 Llamadas</td>
		<td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">5 Llamadas</td>
	</tr>
        <tr>
            <td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">10 - 20 Llamada</td>
            <td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">20 - 30 Llamadas</td>
            <td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">30 - 40 Llamadas</td>
                    <td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">40 - 50 Llamadas</td>
          <td width="20%" nowrap="nowrap" style="font-size:70%;text-align:center">50+ Llamadas</td>
  </tr>
</tbody>
</table>


			</center>
		</td>
		<td>&nbsp;</td>
	</tr>
	</tbody>
</table>

</body>

</html>