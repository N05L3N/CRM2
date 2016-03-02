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
		'1' => 'telemarketing01',
		'2' => 'telemarketing02',
		'3' => 'telemarketing03',
		'4' => 'telemarketing05',
		'5' => 'telemarketing04',
		'6' => 'telemarketing08',
		'7' => 'telemarketing07',
		'8' => 'telemarketing06',
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

# telemarketing01 Status
# $query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing01') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing01') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing01') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing01') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing01') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing01') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing01 = mysql_num_rows($result_interno);

# telemarketing01 Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing01 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing01') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing01 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing01') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing01 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing01 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing01') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing01 = mysql_num_rows($result_interno);

# telemarketing02
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing02') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing02') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing02') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing02') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing02') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing02 = mysql_num_rows($result_interno);

#
$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing02 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing02') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing02 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing02') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing02 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing02 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing02') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing02 = mysql_num_rows($result_interno);


# telemarketing03
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing03') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing03') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing03') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing03') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing03') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing03 = mysql_num_rows($result_interno);

#

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND estadodeventa != 'descartado'";
$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (fecha >= '2014-08-28') AND (estadodeventa != 'descartado')";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing03 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing03') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing03 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing03') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing03 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing03 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing03') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing03 = mysql_num_rows($result_interno);

# telemarketing05
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing05') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing05') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing05') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing05') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing05') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing05 = mysql_num_rows($result_interno);

# 

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing05 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing05') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing05 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing05') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing05 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing05 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing05') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing05 = mysql_num_rows($result_interno);

# telemarketing04
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing04') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing04') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing04') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing04') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing04') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing04 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing04') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing04 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing04') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing04 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing04 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing04') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing04 = mysql_num_rows($result_interno);


# telemarketing06
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing06') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing06') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing06') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing06') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing06') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing06 = mysql_num_rows($result_interno);
	
# 

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing06 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing06') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing06 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing06') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing06 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing06 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing06') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing06 = mysql_num_rows($result_interno);




# telemarketing07
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing07') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing07') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing07') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing07') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing07') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing07 = mysql_num_rows($result_interno);

#

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing07 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing07') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing07 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing07') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing07 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing07 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing07') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing07 = mysql_num_rows($result_interno);


# telemarketing08
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing08') AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing08') AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing08') AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing08') AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'telemarketing08') AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_telemarketing08 = mysql_num_rows($result_interno);

#

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_telemarketing08 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing08') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_telemarketing08 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = 'telemarketing08') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_telemarketing08 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Llamada ENTRANTE por cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Llamada ENTRANTE por cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Llamada REALIZADA a cliente PROSPECTO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Llamada REALIZADA a cliente REGISTRADO')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Mercado Libre')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Seguimiento Tintas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Seguimiento Ventas Equipo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_telemarketing08 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = 'telemarketing08') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_telemarketing08 = mysql_num_rows($result_interno);



?>
<script>
/* Inician 10 Consumbiles */
	var pieDataStatusTelemarketingtelemarketing01 = [
		{
			value: <?= $total_facturados_telemarketing01 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing01 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing01 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing01 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing01 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing02 = [
		{
			value: <?= $total_facturados_telemarketing02 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing02 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing02 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing02 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing02 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing03 = [
		{
			value: <?= $total_facturados_telemarketing03 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing03 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing03 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing03 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing03 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing05 = [
		{
			value: <?= $total_facturados_telemarketing05 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing05 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing05 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing05 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing05 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing04 = [
		{
			value: <?= $total_facturados_telemarketing04 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing04 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing04 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing04 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing04 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing08 = [
		{
			value: <?= $total_facturados_telemarketing08 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing08 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing08 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing08 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing08 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing07 = [
		{
			value: <?= $total_facturados_telemarketing07 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing07 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing07 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing07 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing07 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingtelemarketing06 = [
		{
			value: <?= $total_facturados_telemarketing06 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_telemarketing06 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_telemarketing06 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_telemarketing06 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_telemarketing06 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];
//
	var pieDataStatusTelemarketingtelemarketing01Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing01 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing01 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing01 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];
	
	var pieDataStatusTelemarketingtelemarketing02Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing02 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing02 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing02 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

		var pieDataStatusTelemarketingtelemarketing03Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing03 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing03 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing03 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingtelemarketing04Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing04 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing04 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing04 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingtelemarketing05Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing05 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing05 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing05 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingtelemarketing06Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing06 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing06 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing06 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingtelemarketing07Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing07 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing07 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing07 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingtelemarketing08Bar = [
		{
			value: <?= $asignacionesTotal_telemarketing08 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_telemarketing08 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_telemarketing08 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

// Medios
	var pieDataTelemarketingContactoMedio_telemarketing01 = [
		{
			value: <?= $contactoMedio_01_telemarketing01 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing01 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing01 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing01 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing01 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing01 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing01 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing01 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing01 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing01 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// telemarketing02
	var pieDataTelemarketingContactoMedio_telemarketing02 = [
		{
			value: <?= $contactoMedio_01_telemarketing02 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing02 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing02 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing02 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing02 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing02 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing02 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing02 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing02 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing02 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// telemarketing03
	var pieDataTelemarketingContactoMedio_telemarketing03 = [
		{
			value: <?= $contactoMedio_01_telemarketing03 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing03 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing03 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing03 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing03 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing03 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing03 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing03 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing03 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing03 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// telemarketing04
	var pieDataTelemarketingContactoMedio_telemarketing04 = [
		{
			value: <?= $contactoMedio_01_telemarketing04 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing04 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing04 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing04 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing04 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing04 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing04 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing04 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing04 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing04 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// telemarketing05
	var pieDataTelemarketingContactoMedio_telemarketing05 = [
		{
			value: <?= $contactoMedio_01_telemarketing05 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing05 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing05 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing05 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing05 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing05 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing05 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing05 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing05 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing05 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// telemarketing06
	var pieDataTelemarketingContactoMedio_telemarketing06 = [
		{
			value: <?= $contactoMedio_01_telemarketing06 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing06 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing06 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing06 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing06 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing06 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing06 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing06 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing06 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing06 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// telemarketing07
	var pieDataTelemarketingContactoMedio_telemarketing07 = [
		{
			value: <?= $contactoMedio_01_telemarketing07 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing07 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing07 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing07 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing07 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing07 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing07 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing07 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing07 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing07 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// telemarketing08
	var pieDataTelemarketingContactoMedio_telemarketing08 = [
		{
			value: <?= $contactoMedio_01_telemarketing08 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_telemarketing08 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Llamada ENTRANTE por cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_03_telemarketing08 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Llamada ENTRANTE por cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_04_telemarketing08 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Llamada REALIZADA a cliente PROSPECTO"
		},
		{
			value: <?= $contactoMedio_05_telemarketing08 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Llamada REALIZADA a cliente REGISTRADO"
		},
		{
			value: <?= $contactoMedio_06_telemarketing08 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Mercado Libre"
		},
		{
			value: <?= $contactoMedio_07_telemarketing08 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Seguimiento Tintas"
		},
		{
			value: <?= $contactoMedio_08_telemarketing08 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Seguimiento Ventas Equipo"
		},
		{
			value: <?= $contactoMedio_09_telemarketing08 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_telemarketing08 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	window.onload = function(){

	var ctxStatusTelemarketingtelemarketing01 = document.getElementById("chart-Statustelemarketing01").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing01).Pie(pieDataStatusTelemarketingtelemarketing01);

	var ctxStatusTelemarketingtelemarketing02 = document.getElementById("chart-Statustelemarketing02").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing02).Pie(pieDataStatusTelemarketingtelemarketing02);

	var ctxStatusTelemarketingtelemarketing03 = document.getElementById("chart-Statustelemarketing03").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing03).Pie(pieDataStatusTelemarketingtelemarketing03);

	var ctxStatusTelemarketingtelemarketing04 = document.getElementById("chart-Statustelemarketing04").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing04).Pie(pieDataStatusTelemarketingtelemarketing04);

	var ctxStatusTelemarketingtelemarketing05 = document.getElementById("chart-Statustelemarketing05").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing05).Pie(pieDataStatusTelemarketingtelemarketing05);

	var ctxStatusTelemarketingtelemarketing06 = document.getElementById("chart-Statustelemarketing06").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing06).Pie(pieDataStatusTelemarketingtelemarketing06);

	var ctxStatusTelemarketingtelemarketing07 = document.getElementById("chart-Statustelemarketing07").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing07).Pie(pieDataStatusTelemarketingtelemarketing07);

	var ctxStatusTelemarketingtelemarketing08 = document.getElementById("chart-Statustelemarketing08").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing08).Pie(pieDataStatusTelemarketingtelemarketing08);

	//Bar 

	var ctxStatusTelemarketingtelemarketing01Bar = document.getElementById("chart-Statustelemarketing01Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing01Bar).Doughnut(pieDataTelemarketingContactoMedio_telemarketing01);

	var ctxStatusTelemarketingtelemarketing02Bar = document.getElementById("chart-Statustelemarketing02Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing02Bar).Doughnut(pieDataStatusTelemarketingtelemarketing02Bar);

	var ctxStatusTelemarketingtelemarketing03Bar = document.getElementById("chart-Statustelemarketing03Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing03Bar).Doughnut(pieDataStatusTelemarketingtelemarketing03Bar);

	var ctxStatusTelemarketingtelemarketing04Bar = document.getElementById("chart-Statustelemarketing04Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing04Bar).Doughnut(pieDataStatusTelemarketingtelemarketing04Bar);

	var ctxStatusTelemarketingtelemarketing05Bar = document.getElementById("chart-Statustelemarketing05Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing05Bar).Doughnut(pieDataStatusTelemarketingtelemarketing05Bar);

	var ctxStatusTelemarketingtelemarketing06Bar = document.getElementById("chart-Statustelemarketing06Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing06Bar).Doughnut(pieDataStatusTelemarketingtelemarketing06Bar);

	var ctxStatusTelemarketingtelemarketing07Bar = document.getElementById("chart-Statustelemarketing07Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing07Bar).Doughnut(pieDataStatusTelemarketingtelemarketing07Bar);

	var ctxStatusTelemarketingtelemarketing08Bar = document.getElementById("chart-Statustelemarketing08Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingtelemarketing08Bar).Doughnut(pieDataStatusTelemarketingtelemarketing08Bar);
	
};
/* Terminan 8 Consumibles */

</script>



<!--
<pre>
	<?= $test_query_interno ?>
</pre>
  -->