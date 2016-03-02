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
	# $whereDate2 = '(fecharespuesta >= \'2015-05-07\' AND fecharespuesta <= \'2015-05-07\') AND';
	$whereDate2 = "(fecharespuesta >= '2010-01-01' AND fecharespuesta <= '2017-01-01') AND";
}
else {
	$whereDate2 = "(fecharespuesta >= ' $filterDate1' AND fecharespuesta <= '$filterDate2') AND";
}




	
	# Reporte de Status

/* Reporte de Status > Equipo */

for ($i=1; $i < 12; $i++) { 

$fxyE1 = ''.$fxyE1.'asignadoa = \''.$usuariosEquipo[$i].'\' OR ';
$fxyE2 = ''.$fxyE2.'usuario = \''.$usuariosEquipo[$i].'\' OR ';

}

$whereEquipoUsuarios1 = substr($fxyE1, 0, -4);
$whereEquipoUsuarios2 = substr($fxyE2, 0, -4);

$fxyE1 = '';
$fxyE2 = '';

$query_interno = "SELECT * FROM contacto WHERE ($whereEquipoUsuarios1) AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasEquipo_numero_asignacionesTotal = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$consultasEquipo_numero_pendientes = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$consultasEquipo_numero_asignacionesHoy = mysql_num_rows($result_interno);
  	
/* Reporte de Status > Telemarketing */

for ($i=1; $i < 9; $i++) { 

$fxyT1 = ''.$fxyT1.'asignadoa = \''.$usuariosConsumibles[$i].'\' OR ';
$fxyT2 = ''.$fxyT2.'usuario = \''.$usuariosConsumibles[$i].'\' OR ';

}

$whereConsumiblesUsuarios1 = substr($fxyT1, 0, -4);
$whereConsumiblesUsuarios2 = substr($fxyT2, 0, -4);

$query_interno = "SELECT * FROM contacto WHERE ($whereConsumiblesUsuarios1) AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasConsumibles_numero_asignacionesTotal = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereConsumiblesUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasConsumibles_numero_pendientes = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereConsumiblesUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$consultasConsumibles_numero_asignacionesHoy = mysql_num_rows($result_interno);

/* Reporte de Status > Ventas Campo > Chihuahua, Juárez, Monterrey, Saltillo */

$whereVentasCampoUsuarios1 = "asignadoa = 'evargas' OR asignadoa = 'campojuarez' OR asignadoa = 'campomonterrey' OR asignadoa = 'ventascamposaltillo'";
$whereVentasCampoUsuarios2 = "usuario = 'evargas' OR usuario = 'campojuarez' OR usuario = 'campomonterrey' OR usuario = 'ventascamposaltillo'";

$query_interno = "SELECT * FROM contacto WHERE ($whereVentasCampoUsuarios1) AND estadodeventa = 'facturado'";
$result_interno = mysql_query($query_interno);
$consultasVentasCampo_numero_facturadosTotal = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereVentasCampoUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasVentasCampo_numero_pendientes = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereVentasCampoUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$consultasVentasCampo_numero_asignacionesHoy = mysql_num_rows($result_interno);

/* Reporte de Status > Ventas Campo > San Luis Potosí, Veracruz, Guadalajara, Queretaro, Puebla, Aguascalientes */

$whereVentasCampoC1Usuarios1 = "asignadoa = 'airigoyen' OR asignadoa = 'ealvarez' OR asignadoa = 'jhernandez' OR asignadoa = 'jvazquez' OR asignadoa = 'mramirez' OR asignadoa = 'naguilar' OR asignadoa = 'rlopez'";
$whereVentasCampoC1Usuarios2 = "usuario = 'airigoyen' OR usuario = 'ealvarez' OR usuario = 'jhernandez' OR usuario = 'jvazquez' OR usuario = 'mramirez' OR usuario = 'naguilar' OR usuario = 'rlopez'";

$query_interno = "SELECT * FROM contacto WHERE ($whereVentasCampoC1Usuarios1) AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasVentasCampoC1_numero_asignacionesTotal = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereVentasCampoC1Usuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasVentasCampoC1_numero_pendientes = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereVentasCampoC1Usuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$consultasVentasCampoC1_numero_asignacionesHoy = mysql_num_rows($result_interno);

/* Reporte de Status > Ventas Campo > Durango, Culiacan, Obregon, Mexicali, Tijuana, Torreon, Hermosillo */

$whereVentasCampoC2Usuarios1 = "asignadoa = 'ckarem' OR asignadoa = 'ggalvan' OR asignadoa = 'nenriq' OR asignadoa = 'rrojas' OR asignadoa = 'slopez'";
$whereVentasCampoC2Usuarios2 = "usuario = 'ckarem' OR usuario = 'ggalvan' OR usuario = 'nenriq' OR usuario = 'rrojas' OR usuario = 'slopez'";

$query_interno = "SELECT * FROM contacto WHERE ($whereVentasCampoC2Usuarios1) AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasVentasCampoC2_numero_asignacionesTotal = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereVentasCampoC2Usuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$consultasVentasCampoC2_numero_pendientes = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereVentasCampoC2Usuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$consultasVentasCampoC2_numero_asignacionesHoy = mysql_num_rows($result_interno);

/* Reporte de Status Telemarketing POR Vendedor */
    
# campochihuahua1
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correos_campochihuahua1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados_campochihuahua1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados_campochihuahua1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadas_campochihuahua1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'campochihuahua1') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_campochihuahua1 = mysql_num_rows($result_interno);


# Reporte de Asignaciones
	
if ($filtrarporvendedor != '') {
$reportedeasignaciones_where = "asignadoa = '$filtrarporvendedor' AND";
$reportedeasignaciones_where2 = "usuario = '$filtrarporvendedor' AND";
$reportedeasignaciones_where3 = "usuario = '$filtrarporvendedor' AND";
}
else {
$reportedeasignaciones_where = '';
$reportedeasignaciones_where2 = '';
$reportedeasignaciones_where3 = '';
}

$query_interno = "SELECT * FROM contacto WHERE ($whereEquipoUsuarios1 OR $whereConsumiblesUsuarios1) AND estadodeventa != 'descartado' AND fecha >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$consultas_numero_asignacionesTotal = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE asignadoa = '' AND estadodeventa != 'descartado' AND fecha >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$consultas_numero_sinAsignacionesTotal = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2 OR $whereConsumiblesUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$consultas_numero_pendientes = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2 OR $whereConsumiblesUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$consultas_numero_asignacionesHoy = mysql_num_rows($result_interno);


/* Reporte de Status Equipo*/
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereEquipoUsuarios2) AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_calientes = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereEquipoUsuarios2) AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartados = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereEquipoUsuarios2) AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturados = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereEquipoUsuarios2) AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_frios = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereEquipoUsuarios2) AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_tibios = mysql_num_rows($result_interno);






/* Reporte de Status Telemarketing */

#$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28'";
$queryTest = $query_interno;
$result_interno = mysql_query($query_interno);
$total_correosT = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartadosT = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28'";
$test_query_interno = $query_interno;
$result_interno = mysql_query($query_interno);
$total_facturadosT = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasT = mysql_num_rows($result_interno);

$query_interno = "SELECT usuario FROM ecrm_comentarios_v WHERE $whereDate2 ($whereConsumiblesUsuarios2) AND (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreosT = mysql_num_rows($result_interno);








/* Reporte de Status Ventas Campo */

/* Reporte de Status > Ventas Campo > Chihuahua, Juárez, Monterrey, Saltillo */

$whereVentasCampoUsuarios1 = "asignadoa = 'evargas' OR asignadoa = 'campojuarez' OR asignadoa = 'campomonterrey' OR asignadoa = 'ventascamposaltillo'";
$whereVentasCampoUsuarios2 = "usuario = 'evargas' OR usuario = 'campojuarez' OR usuario = 'campomonterrey' OR usuario = 'ventascamposaltillo'";

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoUsuarios2) AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correosVC = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoUsuarios2) AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartadosVC = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoUsuarios2) AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$test_query_interno = $query_interno;
$result_interno = mysql_query($query_interno);
$total_facturadosVC = mysql_num_rows($result_interno);

/* Reporte de Status Ventas Campo C1 */

$whereVentasCampoC1Usuarios1 = "asignadoa = 'airigoyen' OR asignadoa = 'ealvarez' OR asignadoa = 'jhernandez' OR asignadoa = 'jvazquez' OR asignadoa = 'mramirez' OR asignadoa = 'naguilar' OR asignadoa = 'rlopez'";
$whereVentasCampoC1Usuarios2 = "usuario = 'airigoyen' OR usuario = 'ealvarez' OR usuario = 'jhernandez' OR usuario = 'jvazquez' OR usuario = 'mramirez' OR usuario = 'naguilar' OR usuario = 'rlopez'";

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoC1Usuarios2) AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correosVC1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoC1Usuarios2) AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartadosVC1 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoC1Usuarios2) AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$test_query_interno = $query_interno;
$result_interno = mysql_query($query_interno);
$total_facturadosVC1 = mysql_num_rows($result_interno);

/* Reporte de Status Ventas Campo C2 */

/* Reporte de Status > Ventas Campo > Durango, Culiacan, Obregon, Mexicali, Tijuana, Torreon, Hermosillo */

$whereVentasCampoC2Usuarios1 = "asignadoa = 'ckarem' OR asignadoa = 'ggalvan' OR asignadoa = 'nenriq' OR asignadoa = 'rrojas' OR asignadoa = 'slopez'";
$whereVentasCampoC2Usuarios2 = "usuario = 'ckarem' OR usuario = 'ggalvan' OR usuario = 'nenriq' OR usuario = 'rrojas' OR usuario = 'slopez'";

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoC2Usuarios2) AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_correosVC2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoC2Usuarios2) AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_descartadosVC2 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 ($whereVentasCampoC2Usuarios2) AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$test_query_interno = $query_interno;
$result_interno = mysql_query($query_interno);
$total_facturadosVC2 = mysql_num_rows($result_interno);

/* Reporte de Status Telemarketing POR Servicio al Cliente */

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'rgonzalez') AND (estadodeventa = 'Pendiente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_pendientesSAC = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'rgonzalez') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
$result_interno = mysql_query($query_interno);
$total_facturadosSAC = mysql_num_rows($result_interno);

/* Reporte de Asignaciones */



$result_caliente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'caliente' ORDER BY fecharespuesta desc limit 0,99999");$i_caliente = 0;while ($row_caliente = mysql_fetch_array($result_caliente)) { if ($i_caliente > 0) {}$i_caliente++;}
$result_tibio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'tibio' ORDER BY fecharespuesta desc limit 0,99999");$i_tibio = 0;while ($row_tibio = mysql_fetch_array($result_tibio)) { if ($i_tibio > 0) {}$i_tibio++;}
$result_frio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'frio' ORDER BY fecharespuesta desc limit 0,99999");$i_frio = 0;while ($row_frio = mysql_fetch_array($result_frio)) { if ($i_frio > 0) {}$i_frio++;}		
$result_pendiente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'Pendiente' ORDER BY fecharespuesta desc limit 0,99999");$i_pendiente = 0;while ($row_pendiente = mysql_fetch_array($result_pendiente)) { if ($i_pendiente > 0) {}$i_pendiente++;}
$result_seguimiento = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'seguimiento' ORDER BY fecharespuesta desc limit 0,99999");$i_seguimiento = 0;while ($row_seguimiento = mysql_fetch_array($result_seguimiento)) { if ($i_seguimiento > 0) {}$i_seguimiento++;}
$result_postventa = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'postventa' ORDER BY fecharespuesta desc limit 0,99999");$i_postventa = 0;while ($row_postventa = mysql_fetch_array($result_postventa)) { if ($i_postventa > 0) {}$i_postventa++;}


$a_equipo = $consultasEquipo_numero_asignacionesHoy + $consultasEquipo_numero_pendientes;
$b_equipo = $consultasEquipo_numero_asignacionesTotal - $a_equipo;

$a_consumibles = $consultasConsumibles_numero_asignacionesHoy + $consultasConsumibles_numero_pendientes;
$b_consumibles = $consultasConsumibles_numero_asignacionesTotal - $a_consumibles;	
?>


<!-- <?= $queryTest ?> -->
<!-- <?= $whereConsumiblesUsuarios2 ?> -->

