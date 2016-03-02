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
  	# $usuariosConsumibles = array( 10
		
	

/* Force */

if ($_GET['usuarioF'] == 'coordinadorventas1') {

	$usuario = 'coordinadorventas1';

}

else if ($_GET['usuarioF'] == 'coordinadorventas2') {

	$usuario = 'coordinadorventas2';

}

else {

	$nombreAdministrador = 'Gabriela Aguirre';

}

/* Force */



	if ($usuario == 'coordinadorventas1') {

		$usuariosVentasCampo = array(
		'1' => 'airigoyen',
		'2' => 'ealvarez',
		'3' => 'jhernandez',
		'4' => 'jvazquez',
		'5' => 'vctijuana01',
		'6' => 'naguilar',
		'7' => 'rlopez',
		);

	}

	else if ($usuario == 'coordinadorventas2') {

		$usuariosVentasCampo = array(
		'1' => 'ckarem',
		'2' => 'ggalvan',
		'3' => 'nenriq',
		'4' => 'rrojas',
		'5' => 'slopez',
		'6' => '',
		'7' => '',
		);
	
	}

	else {

		$usuariosVentasCampo = array(
		#'1' => 'aestrada',
		'1' => 'evargas',
		'2' => 'campojuarez',
		'3' => 'campomonterrey',
		'4' => 'ventascamposaltillo',
		'5' => '',
		'6' => '',
		'7' => '',
		);		

	}







  	#13

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

/* Reporte de Status  POR Vendedor */

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[1]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[1]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[1]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[1]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[1]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_1 = mysql_num_rows($result_interno);

	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[1]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_1 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[1]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_1 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[1]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_1 = mysql_num_rows($result_interno);

	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[1]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[1]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[1]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[1]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_1 = mysql_num_rows($result_interno);

# 2

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[2]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_2 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[2]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_2 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[2]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_2 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[2]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_2 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[2]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_2 = mysql_num_rows($result_interno);

	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[2]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_2 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[2]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_2 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[2]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_2 = mysql_num_rows($result_interno);


	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[2]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[2]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_2 = mysql_num_rows($result_interno);
mysql_query ("SET NAMES 'utf8'");

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[2]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[2]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_2 = mysql_num_rows($result_interno);

# 3
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[3]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_3 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[3]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_3 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[3]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_3 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[3]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_3 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[3]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_3 = mysql_num_rows($result_interno);

	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[3]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_3 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[3]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_3 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[3]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_3 = mysql_num_rows($result_interno);

	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[3]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_3 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[3]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_3 = mysql_num_rows($result_interno);
mysql_query ("SET NAMES 'utf8'");

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[3]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_3 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[3]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_3 = mysql_num_rows($result_interno);

# 4
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[4]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_4 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[4]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_4 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[4]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_4 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[4]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_4 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[4]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_4 = mysql_num_rows($result_interno);
	
	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[4]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_4 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[4]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_4 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[4]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_4 = mysql_num_rows($result_interno);

	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[4]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_4 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[4]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_4 = mysql_num_rows($result_interno);
mysql_query ("SET NAMES 'utf8'");

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[4]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_4 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[4]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_4 = mysql_num_rows($result_interno);

# 5
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[5]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_5 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[5]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_5 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[5]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_5 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[5]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_5 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[5]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_5 = mysql_num_rows($result_interno);

	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[5]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_5 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[5]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_5 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[5]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_5 = mysql_num_rows($result_interno);

	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[5]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[5]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_5 = mysql_num_rows($result_interno);
mysql_query ("SET NAMES 'utf8'");

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[5]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_5 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[5]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_5 = mysql_num_rows($result_interno);

# 6
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[6]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_6 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[6]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_6 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[6]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_6 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[6]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_6 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[6]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_6 = mysql_num_rows($result_interno);

	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[6]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_6 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[6]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_6 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[6]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_6 = mysql_num_rows($result_interno);

	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[6]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[6]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_6 = mysql_num_rows($result_interno);
mysql_query ("SET NAMES 'utf8'");

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[6]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_6 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[6]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_6 = mysql_num_rows($result_interno);

# 7
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[7]') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_7 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[7]') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_7 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[7]') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_7 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[7]') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_7 = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = '$usuariosVentasCampo[7]') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_7 = mysql_num_rows($result_interno);

	# Asignaciones

$query_interno = "SELECT usuario FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[7]') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_7 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[7]') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_7 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE (usuario = '$usuariosVentasCampo[7]') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_7 = mysql_num_rows($result_interno);

	# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[7]') AND (medio = 'Cliente Registrado (Mantenimiento de cartera)')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_8 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[7]') AND (medio = 'Cliente de recuperacion de 6 meses a 1 año')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_8 = mysql_num_rows($result_interno);
mysql_query ("SET NAMES 'utf8'");

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[7]') AND (medio = 'Clientes de una sola compra')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_8 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = '$usuariosVentasCampo[7]') AND (medio = 'Mercados Alternativos')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_8 = mysql_num_rows($result_interno);

?>
<script>

		var pieDataStatus1 = [
		{
			value: <?= $total_facturados_1 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_1 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_1 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_1 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_1 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatus2 = [
		{
			value: <?= $total_facturados_2 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_2 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_2 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_2 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_2 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatus3 = [
		{
			value: <?= $total_facturados_3 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_3 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_3 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_3 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_3 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatus4 = [
		{
			value: <?= $total_facturados_4 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_4 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_4 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_4 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_4 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatus5 = [
		{
			value: <?= $total_facturados_5 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_5 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_5 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_5 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_5 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatus6 = [
		{
			value: <?= $total_facturados_6 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_6 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_6 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_6 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_6 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatus7 = [
		{
			value: <?= $total_facturados_7 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_7 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Sin Venta"
		},
		{
			value: <?= $total_llamadas_7 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_7 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_7 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	window.onload = function(){

	var ctxStatus1 = document.getElementById("chart-Status1").getContext("2d");
	window.myPie = new Chart(ctxStatus1).Pie(pieDataStatus1);

	var ctxStatus2 = document.getElementById("chart-Status2").getContext("2d");
	window.myPie = new Chart(ctxStatus2).Pie(pieDataStatus2);

	var ctxStatus3 = document.getElementById("chart-Status3").getContext("2d");
	window.myPie = new Chart(ctxStatus3).Pie(pieDataStatus3);

	var ctxStatus4 = document.getElementById("chart-Status4").getContext("2d");
	window.myPie = new Chart(ctxStatus4).Pie(pieDataStatus4);

	var ctxStatus5 = document.getElementById("chart-Status5").getContext("2d");
	window.myPie = new Chart(ctxStatus5).Pie(pieDataStatus5);

	var ctxStatus6 = document.getElementById("chart-Status6").getContext("2d");
	window.myPie = new Chart(ctxStatus6).Pie(pieDataStatus6);

	var ctxStatus7 = document.getElementById("chart-Status7").getContext("2d");
	window.myPie = new Chart(ctxStatus7).Pie(pieDataStatus7);

};


</script>