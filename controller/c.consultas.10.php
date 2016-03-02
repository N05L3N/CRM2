<?php


$filterDate1 =  $_POST['filterDate1'];
$filterDate2 =  $_POST['filterDate2'];

$filterDate1E = explode("-", $filterDate1);
$filterDate1 = ''. $filterDate1E[2]. '-'. $filterDate1E[1] .'-'. $filterDate1E[0] . '';

$filterDate2E = explode("-", $filterDate2);
$filterDate2 = ''. $filterDate2E[2]. '-'. $filterDate2E[1] .'-'. $filterDate2E[0] . '';

if ($filterDate1 == '--') { $filterDate1 = ''; } else { }
if ($filterDate2 == '--') { $filterDate2 = ''; } else { }

if ($filterDate1 == '') {
	$whereDate2 = '(fecharespuesta >= \'2015-05-07\' AND fecharespuesta <= \'2015-05-07\') AND';
	$whereDate2 = '';	
}
else {
	$whereDate2 = "(fecharespuesta >= ' $filterDate1' AND fecharespuesta <= '$filterDate2') AND";
}

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';
	$fecha_asignacionesHoy1 = ''.$ano.'-'.$mes.'-'.$dia.'';

/* Consumibles*/
  	$usuariosConsumibles = array(
		'1' => 'ventasequipo1',
		'2' => 'ventasequipo2',
		'3' => 'ventasequipo2',
		'4' => 'ventasequipo4',
		'5' => 'ventasequipo5',
		'6' => 'ventasequipo6',
		'7' => 'ventasequipo7',
		'8' => 'ventasequipo07',
		'9' => 'admsoporte',
		'10' => 'equipomerida',
	);

?>
<script src="js/Chart.min.js"></script>

<?php
	
	if ($filtrarporvendedor != '') {
		$where = "usuario = '$filtrarporvendedor' AND ";
	}

	else {
		$where = "";
	}

##############
	if ($filtrarporvendedor != '') {
##############

		if ($filterDate1 == '--' OR $filterDate1 == '') {
  			if ($filterDate2 == '--' OR $filterDate2 == '') {
    				$whereDate = '';
    				$whereUser = "(usuario = '$filtrarporvendedor') AND";
  			}
  			else {
    				$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    				$whereUser = "(usuario = '$filtrarporvendedor') AND";
  			}
		}
		else {
    			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    			$whereUser = "(usuario = '$filtrarporvendedor') AND";
		}
	}
	else {
##############
		$whereUser = '';
		$whereDate = '';
##############
	}


$whereEquipo = '(usuario != '%equipo%') AND';

/* Reporte de Status Telemarketing POR Vendedor */

# ventasequipo1 Status
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo1') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo1') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo1') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo1') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo1') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo1 = mysql_num_rows($result_interno);

# ventasequipo1 Asignaciones

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo1 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo1') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo1 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo1') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo1 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo1') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo1 = mysql_num_rows($result_interno);

# ventasequipo2
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo2 = mysql_num_rows($result_interno);

#
$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo2 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo2') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo2 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo2') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo2 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo2 = mysql_num_rows($result_interno);


# ventasequipo2
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo2') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo2 = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND estadodeventa != 'descartado'";
$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (fecha >= '2014-08-28') AND (estadodeventa != 'descartado')";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo2 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo2') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo2 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo2') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo2 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo2') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo2 = mysql_num_rows($result_interno);


# leticia
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'leticia') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'leticia') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'leticia') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'leticia') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'leticia') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_leticia = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_leticia = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'leticia') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_leticia = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'leticia') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_leticia = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_leticia = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'leticia') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_leticia = mysql_num_rows($result_interno);


# ventasequipo5
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo5') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo5') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo5') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo5') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo5') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo5 = mysql_num_rows($result_interno);

# 

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo5 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo5') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo5 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo5') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo5 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo5') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo5 = mysql_num_rows($result_interno);

# ventasequipo6
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo6') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo6') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo6') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo6') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo6') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo6 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo6') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo6 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo6') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo6 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo6') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo6 = mysql_num_rows($result_interno);


# ventasequipo7
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo7') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo7') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo7') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo7') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo7') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo7 = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo7 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo7') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo7 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo7') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo7 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo7 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo7') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo7 = mysql_num_rows($result_interno);


# ventasequipo07
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo07') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo07') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo07') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo07') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventasequipo07') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventasequipo07 = mysql_num_rows($result_interno);

# 

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventasequipo07 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo07') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventasequipo07 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventasequipo07') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventasequipo07 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventasequipo07 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventasequipo07') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventasequipo07 = mysql_num_rows($result_interno);


# admsoporte
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'admsoporte') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'admsoporte') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'admsoporte') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'admsoporte') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'admsoporte') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_admsoporte = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_admsoporte = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'admsoporte') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_admsoporte = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'admsoporte') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_admsoporte = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_admsoporte = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_admsoporte = mysql_num_rows($result_interno);



# equipomerida
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'equipomerida') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'equipomerida') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'equipomerida') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'equipomerida') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'equipomerida') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_equipomerida = mysql_num_rows($result_interno);
	
# 

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_equipomerida = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'equipomerida') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_equipomerida = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'equipomerida') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_equipomerida = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_equipomerida = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'equipomerida') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_equipomerida = mysql_num_rows($result_interno);

?>
<script>
/* Inician 10 Consumbiles */
	var pieDataStatusTelemarketingventasequipo1 = [
		{
			value: <?= $total_facturados_ventasequipo1 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo1 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo1 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo1 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo1 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingventasequipo2 = [
		{
			value: <?= $total_facturados_ventasequipo2 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo2 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo2 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo2 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo2 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingventasequipo2 = [
		{
			value: <?= $total_facturados_ventasequipo2 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo2 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo2 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo2 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo2 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingLeticia = [
		{
			value: <?= $total_facturados_leticia ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_leticia ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_leticia ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_leticia ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_leticia ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingventasequipo5 = [
		{
			value: <?= $total_facturados_ventasequipo5 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo5 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo5 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo5 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo5 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingventasequipo6 = [
		{
			value: <?= $total_facturados_ventasequipo6 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo6 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo6 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo6 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo6 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingventasequipo7 = [
		{
			value: <?= $total_facturados_ventasequipo7 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo7 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo7 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo7 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo7 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingventasequipo07 = [
		{
			value: <?= $total_facturados_ventasequipo07 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventasequipo07 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventasequipo07 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventasequipo07 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventasequipo07 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingadmsoporte = [
		{
			value: <?= $total_facturados_admsoporte ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_admsoporte ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_admsoporte ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_admsoporte ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_admsoporte ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingequipomerida = [
		{
			value: <?= $total_facturados_equipomerida ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_equipomerida ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_equipomerida ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_equipomerida ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_equipomerida ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];
//
	var pieDataStatusTelemarketingventasequipo1Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo1 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo1 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo1 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];
	
	var pieDataStatusTelemarketingventasequipo2Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo2 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo2 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo2 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

		var pieDataStatusTelemarketingventasequipo2Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo2 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo2 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo2 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingventasequipo6Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo6 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo6 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo6 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingventasequipo5Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo5 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo5 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo5 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingequipomeridaBar = [
		{
			value: <?= $asignacionesTotal_equipomerida ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_equipomerida ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_equipomerida ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingadmsoporteBar = [
		{
			value: <?= $asignacionesTotal_admsoporte ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_admsoporte ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_admsoporte ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingventasequipo7Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo7 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo7 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo7 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingventasequipo07Bar = [
		{
			value: <?= $asignacionesTotal_ventasequipo07 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventasequipo07 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventasequipo07 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];
 
	var pieDataStatusTelemarketingLeticiaBar = [
		{
			value: <?= $asignacionesTotal_leticia ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_leticia ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_leticia ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

// Medios
	var pieDataTelemarketingContactoMedio_ventasequipo1 = [
		{
			value: <?= $contactoMedio_01_ventasequipo1 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo1 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo1 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo1 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo1 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo1 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo1 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo1 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo1 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo1 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// ventasequipo2
	var pieDataTelemarketingContactoMedio_ventasequipo2 = [
		{
			value: <?= $contactoMedio_01_ventasequipo2 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo2 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo2 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo2 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo2 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo2 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo2 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo2 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo2 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo2 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// ventasequipo2
	var pieDataTelemarketingContactoMedio_ventasequipo2 = [
		{
			value: <?= $contactoMedio_01_ventasequipo2 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo2 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo2 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo2 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo2 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo2 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo2 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo2 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo2 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo2 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// ventasequipo6
	var pieDataTelemarketingContactoMedio_ventasequipo6 = [
		{
			value: <?= $contactoMedio_01_ventasequipo6 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo6 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo6 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo6 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo6 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo6 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo6 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo6 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo6 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo6 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// ventasequipo5
	var pieDataTelemarketingContactoMedio_ventasequipo5 = [
		{
			value: <?= $contactoMedio_01_ventasequipo5 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo5 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo5 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo5 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo5 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo5 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo5 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo5 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo5 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo5 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// equipomerida
	var pieDataTelemarketingContactoMedio_equipomerida = [
		{
			value: <?= $contactoMedio_01_equipomerida ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_equipomerida ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_equipomerida ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_equipomerida ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_equipomerida ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_equipomerida ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_equipomerida ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_equipomerida ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_equipomerida ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_equipomerida ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// admsoporte
	var pieDataTelemarketingContactoMedio_admsoporte = [
		{
			value: <?= $contactoMedio_01_admsoporte ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_admsoporte ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_admsoporte ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_admsoporte ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_admsoporte ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_admsoporte ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_admsoporte ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_admsoporte ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_admsoporte ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_admsoporte ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// ventasequipo7
	var pieDataTelemarketingContactoMedio_ventasequipo7 = [
		{
			value: <?= $contactoMedio_01_ventasequipo7 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo7 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo7 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo7 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo7 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo7 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo7 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo7 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo7 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo7 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// ventasequipo07
	var pieDataTelemarketingContactoMedio_ventasequipo07 = [
		{
			value: <?= $contactoMedio_01_ventasequipo07 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventasequipo07 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_ventasequipo07 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_ventasequipo07 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_ventasequipo07 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_ventasequipo07 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_ventasequipo07 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_ventasequipo07 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_ventasequipo07 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventasequipo07 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// leticia
	var pieDataTelemarketingContactoMedio_leticia = [
		{
			value: <?= $contactoMedio_01_leticia ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_leticia ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_leticia ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_leticia ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_leticia ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_leticia ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_leticia ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_leticia ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_leticia ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_leticia ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	

	window.onload = function(){

	var ctxStatusTelemarketingventasequipo1 = document.getElementById("chart-Statusventasequipo1").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo1).Pie(pieDataStatusTelemarketingventasequipo1);

	var ctxStatusTelemarketingventasequipo2 = document.getElementById("chart-Statusventasequipo2").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo2).Pie(pieDataStatusTelemarketingventasequipo2);

	var ctxStatusTelemarketingventasequipo2 = document.getElementById("chart-Statusventasequipo2").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo2).Pie(pieDataStatusTelemarketingventasequipo2);

	var ctxStatusTelemarketingLeticia = document.getElementById("chart-StatusLeticia").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingLeticia).Pie(pieDataStatusTelemarketingLeticia);

	var ctxStatusTelemarketingventasequipo5 = document.getElementById("chart-Statusventasequipo5").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo5).Pie(pieDataStatusTelemarketingventasequipo5);

	var ctxStatusTelemarketingventasequipo6 = document.getElementById("chart-Statusventasequipo6").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo6).Pie(pieDataStatusTelemarketingventasequipo6);

	var ctxStatusTelemarketingventasequipo7 = document.getElementById("chart-Statusventasequipo7").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo7).Pie(pieDataStatusTelemarketingventasequipo7);

	var ctxStatusTelemarketingventasequipo07 = document.getElementById("chart-Statusventasequipo07").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo07).Pie(pieDataStatusTelemarketingventasequipo07);

	var ctxStatusTelemarketingadmsoporte = document.getElementById("chart-Statusadmsoporte").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingadmsoporte).Pie(pieDataStatusTelemarketingadmsoporte);

	var ctxStatusTelemarketingequipomerida = document.getElementById("chart-Statusequipomerida").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingequipomerida).Pie(pieDataStatusTelemarketingequipomerida);

	//Bar 

	var ctxStatusTelemarketingventasequipo1Bar = document.getElementById("chart-Statusventasequipo1Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo1Bar).Doughnut(pieDataTelemarketingContactoMedio_ventasequipo1);

	var ctxStatusTelemarketingventasequipo2Bar = document.getElementById("chart-Statusventasequipo2Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo2Bar).Doughnut(pieDataStatusTelemarketingventasequipo2Bar);

	var ctxStatusTelemarketingventasequipo2Bar = document.getElementById("chart-Statusventasequipo2Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo2Bar).Doughnut(pieDataStatusTelemarketingventasequipo2Bar);

	var ctxStatusTelemarketingventasequipo6Bar = document.getElementById("chart-Statusventasequipo6Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo6Bar).Doughnut(pieDataStatusTelemarketingventasequipo6Bar);

	var ctxStatusTelemarketingventasequipo5Bar = document.getElementById("chart-Statusventasequipo5Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo5Bar).Doughnut(pieDataStatusTelemarketingventasequipo5Bar);

	var ctxStatusTelemarketingequipomeridaBar = document.getElementById("chart-StatusequipomeridaBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingequipomeridaBar).Doughnut(pieDataStatusTelemarketingequipomeridaBar);

	var ctxStatusTelemarketingadmsoporteBar = document.getElementById("chart-StatusadmsoporteBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingadmsoporteBar).Doughnut(pieDataStatusTelemarketingadmsoporteBar);

	var ctxStatusTelemarketingventasequipo7Bar = document.getElementById("chart-Statusventasequipo7Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo7Bar).Doughnut(pieDataStatusTelemarketingventasequipo7Bar);

	var ctxStatusTelemarketingventasequipo07Bar = document.getElementById("chart-Statusventasequipo07Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingventasequipo07Bar).Doughnut(pieDataStatusTelemarketingventasequipo07Bar);
	
	var ctxStatusTelemarketingLeticiaBar = document.getElementById("chart-StatusLeticiaBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingLeticiaBar).Doughnut(pieDataStatusTelemarketingLeticiaBar);
	
};
/* Terminan 10 Consumibles */

</script>

<!--
<pre>
	<?= $test_query_interno ?>
</pre>
  -->