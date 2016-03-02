<?php
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';
	$fecha_asignacionesHoy1 = ''.$ano.'-'.$mes.'-'.$dia.'';

/* Consumibles*/
  	$usuariosConsumibles = array(
		'1' => 'angelica',
		'2' => 'campochihuahua1',
		'3' => 'lcera',
		'4' => 'lesparza',
		'5' => 'leticia',
		'6' => 'mario',
		'7' => 'rubi',
		'8' => 'ventascat05',
		'9' => 'ventascat13',
	);

/*
'7' => 'rgonzalez', 33
*/  	
/*
mmoreno, orios
*/

  	/* Equipo */
  	/*
	$usuariosEquipo = array(
		'1' => 'admsoporte',
		'2' => 'Coordinador',
		'3' => 'equipomerida',
		'4' => 'equiposguadalajara',
		'5' => 'equiposmonterrey',
		'6' => 'hvargas',
		'7' => 'jespino',
		'8' => 'rflores',
		'9' => 'rmarquez',
		'10' => 'rmata',
		'11' => 'ventasequipo1',
		'12' => 'ventasequipo2',
		'13' => 'ventasequipo3',
		'14' => 'ventasequipo4',
		'15' => 'ventasequipo5',
		'16' => 'ventasequipo6',
		'17' => 'ventasequipo7',
	);
	*/
	$usuariosEquipo = array(
		'1' => 'admsoporte',
		'2' => 'equipomerida',
		'3' => 'equiposguadalajara',
		'4' => 'equiposmonterrey',
		'5' => 'ventasequipo1',
		'6' => 'ventasequipo2',
		'7' => 'ventasequipo3',
		'8' => 'ventasequipo4',
		'9' => 'ventasequipo5',
		'10' => 'ventasequipo6',
		'11' => 'ventasequipo7',
	);

	$HTTP_HOST = $_SERVER['HTTP_HOST'];
	$REQUEST_URI = $_SERVER['REQUEST_URI'];

	$urlStrlen = strlen($REQUEST_URI);
	
	if ($urlStrlen == 18) {
		
		if ($usuario != '') {
			
			$url = 'http://' . $HTTP_HOST . $REQUEST_URI . '?';

		}
		
		else {
			
			$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '?';

		}

	}
	
	else {

		$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '';

	}

	

	
	$filtrarStatus = $_POST['filtrarStatus'];


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
    #echo '1';
    $whereDate = '';
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
  else {
    #echo '2';
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
}
else {
  #echo '3';
    #$whereDate = "(fecharespuesta >= '$filterDate1')";
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
}

#####################################
/*
$whereDate = "(fecharespuesta >= '$filterDate1')";
$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
*/
  
  
}
else {
##############
$whereUser = '';
$whereDate = '';
#####################################  
}


$whereEquipo = '(usuario != '%equipo%') AND';

/*
ventasequipo1
ventasequipo2
ventasequipo3
ventasequipo4
ventasequipo5
ventasequipo6
ventasequipo7
admsoporte
equipomerida
equiposmonterrey
*/


  	/* Equipo */

  	for ($i=1; $i < 11; $i++) { 

		$fxy1 = ''.$fxy1.'asignadoa = \''.$usuariosEquipo[$i].'\' OR ';
		$fxy2 = ''.$fxy2.'usuario = \''.$usuariosEquipo[$i].'\' OR ';

	}

	$whereEquipoUsuarios1 = substr($fxy1, 0, -4);
	$whereEquipoUsuarios2 = substr($fxy2, 0, -4);
	$fxy1 = '';
	$fxy2 = '';

  	$consultasEquipo_sql_asignacionesTotal = "SELECT * FROM contacto WHERE ($whereEquipoUsuarios1) AND estadodeventa != 'descartado'";
  	$consultasEquipo_result_asignacionesTotal = mysql_query($consultasEquipo_sql_asignacionesTotal);
  	$consultasEquipo_numero_asignacionesTotal = mysql_num_rows($consultasEquipo_result_asignacionesTotal);

  	# $consultasEquipo_sql_sinAsignacionesTotal = "SELECT * FROM contacto WHERE ($whereEquipoUsuarios1) AND estadodeventa != 'descartado'";
  	# $consultasEquipo_result_sinAsignacionesTotal = mysql_query($consultasEquipo_sql_sinAsignacionesTotal);
  	# $consultasEquipo_numero_sinAsignacionesTotal = mysql_num_rows($consultasEquipo_result_sinAsignacionesTotal);
	
	$consultasEquipo_sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' AND fechaasignacion >= '2014-08-28'";
	$consultasEquipo_result_pendientes = mysql_query($consultasEquipo_sql_pendientes);
  	$consultasEquipo_numero_pendientes = mysql_num_rows($consultasEquipo_result_pendientes);
	
	$consultasEquipo_sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
  	$consultasEquipo_result_asignacionesHoy = mysql_query($consultasEquipo_sql_asignacionesHoy);
  	$consultasEquipo_numero_asignacionesHoy = mysql_num_rows($consultasEquipo_result_asignacionesHoy);
  	
  	/* Consumibles*/	

  	for ($i=1; $i < 9; $i++) { 

		$fxy1 = ''.$fxy1.'asignadoa = \''.$usuariosConsumibles[$i].'\' OR ';
		$fxy2 = ''.$fxy2.'usuario = \''.$usuariosConsumibles[$i].'\' OR ';

	}

	$whereConsumiblesUsuarios1 = substr($fxy1, 0, -4);
	$whereConsumiblesUsuarios2 = substr($fxy2, 0, -4);

  	$consultasConsumibles_sql_asignacionesTotal = "SELECT * FROM contacto WHERE ($whereConsumiblesUsuarios1) AND estadodeventa != 'descartado'";
  	$consultasConsumibles_result_asignacionesTotal = mysql_query($consultasConsumibles_sql_asignacionesTotal);
  	$consultasConsumibles_numero_asignacionesTotal = mysql_num_rows($consultasConsumibles_result_asignacionesTotal);

  	# $consultasConsumibles_sql_sinAsignacionesTotal = "SELECT * FROM contacto WHERE ($whereConsumiblesUsuarios1) AND estadodeventa != 'descartado'";
  	# $consultasConsumibles_result_sinAsignacionesTotal = mysql_query($consultasConsumibles_sql_sinAsignacionesTotal);
  	# $consultasConsumibles_numero_sinAsignacionesTotal = mysql_num_rows($consultasConsumibles_result_sinAsignacionesTotal);
	
	$consultasConsumibles_sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE ($whereConsumiblesUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
	$consultasConsumibles_result_pendientes = mysql_query($consultasConsumibles_sql_pendientes);
  	$consultasConsumibles_numero_pendientes = mysql_num_rows($consultasConsumibles_result_pendientes);
	
	$consultasConsumibles_sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE ($whereConsumiblesUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
  	$consultasConsumibles_result_asignacionesHoy = mysql_query($consultasConsumibles_sql_asignacionesHoy);
  	$consultasConsumibles_numero_asignacionesHoy = mysql_num_rows($consultasConsumibles_result_asignacionesHoy);


  	/* Reporte de Asignaciones */
	
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

	$consultas_sql_asignacionesTotal = "SELECT * FROM contacto WHERE ($whereEquipoUsuarios1 OR $whereConsumiblesUsuarios1) AND estadodeventa != 'descartado' AND fecha >= '2014-08-28'";
  	$consultas_result_asignacionesTotal = mysql_query($consultas_sql_asignacionesTotal);
  	$consultas_numero_asignacionesTotal = mysql_num_rows($consultas_result_asignacionesTotal);

  	$consultas_sql_sinAsignacionesTotal = "SELECT * FROM contacto WHERE asignadoa = '' AND estadodeventa != 'descartado' AND fecha >= '2014-08-28'";
  	$consultas_result_sinAsignacionesTotal = mysql_query($consultas_sql_sinAsignacionesTotal);
  	$consultas_numero_sinAsignacionesTotal = mysql_num_rows($consultas_result_sinAsignacionesTotal);
	
	$consultas_sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2 OR $whereConsumiblesUsuarios2) AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' AND fechaasignacion >= '2014-08-28'";
	$consultas_result_pendientes = mysql_query($consultas_sql_pendientes);
  	$consultas_numero_pendientes = mysql_num_rows($consultas_result_pendientes);

	$consultas_sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2 OR $whereConsumiblesUsuarios2) AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
  	$consultas_result_asignacionesHoy = mysql_query($consultas_sql_asignacionesHoy);
  	$consultas_numero_asignacionesHoy = mysql_num_rows($consultas_result_asignacionesHoy);


	/* Reporte de Status Equipo*/
	
	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_calientes = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2) AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_descartados = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereEquipoUsuarios2) AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_facturados = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_frios = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_tibios = mysql_num_rows($result_interno);

	/* Reporte de Status Telemarketing */

	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_correosT = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereConsumiblesUsuarios2 ) AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_descartadosT = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE ($whereConsumiblesUsuarios2) AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
  	$test_query_interno = $query_interno;
	$result_interno = mysql_query($query_interno);
  	$total_facturadosT = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_llamadasT = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_llamadasycorreosT = mysql_num_rows($result_interno);

  	/* Reporte de Status Telemarketing POR Vendedor */
  	
  	$filtrarporvendedor = $_POST['filtrarporvendedor'];

	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$filtrarporvendedor') AND (estadodeventa = 'correo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_correosTV = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$filtrarporvendedor') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_descartadosTV = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$filtrarporvendedor') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_facturadosTV = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$filtrarporvendedor') AND (estadodeventa = 'llamada') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_llamadasTV = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$filtrarporvendedor') AND (estadodeventa = 'llamadaycorreo') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_llamadasycorreosTV = mysql_num_rows($result_interno);

  	/* Reporte de Status Telemarketing POR Servicio al Cliente */

	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'rgonzalez') AND (estadodeventa = 'Pendiente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_pendientesSAC = mysql_num_rows($result_interno);

  	$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'rgonzalez') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28'";
	$result_interno = mysql_query($query_interno);
  	$total_facturadosSAC = mysql_num_rows($result_interno);

/* Reporte de Asignaciones */

		$result_facturado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'facturado' ORDER BY fecharespuesta desc limit 0,99999");
		$i_facturado = 0;
			while ($row_facturado = mysql_fetch_array($result_facturado)) {
				if ($i_facturado > 0) {}
					$i_facturado++;
			}

		$result_caliente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'caliente' ORDER BY fecharespuesta desc limit 0,99999");$i_caliente = 0;while ($row_caliente = mysql_fetch_array($result_caliente)) { if ($i_caliente > 0) {}$i_caliente++;}
		$result_tibio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'tibio' ORDER BY fecharespuesta desc limit 0,99999");$i_tibio = 0;while ($row_tibio = mysql_fetch_array($result_tibio)) { if ($i_tibio > 0) {}$i_tibio++;}
		$result_frio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'frio' ORDER BY fecharespuesta desc limit 0,99999");$i_frio = 0;while ($row_frio = mysql_fetch_array($result_frio)) { if ($i_frio > 0) {}$i_frio++;}
		
		$result_llamada = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'llamada' ORDER BY fecharespuesta desc limit 0,99999");$i_llamada = 0;while ($row_llamada = mysql_fetch_array($result_llamada)) { if ($i_llamada > 0) {}$i_llamada++;}
		$result_correo = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'correo' ORDER BY fecharespuesta desc limit 0,99999");$i_correo = 0;while ($row_correo = mysql_fetch_array($result_correo)) { if ($i_correo > 0) {}$i_correo++;}
		$result_llamadaycorreo = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'llamadaycorreo' ORDER BY fecharespuesta desc limit 0,99999");$i_llamadaycorreo = 0;while ($row_llamadaycorreo = mysql_fetch_array($result_llamadaycorreo)) { if ($i_llamadaycorreo > 0) {}$i_llamadaycorreo++;}

		$result_pendiente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'Pendiente' ORDER BY fecharespuesta desc limit 0,99999");$i_pendiente = 0;while ($row_pendiente = mysql_fetch_array($result_pendiente)) { if ($i_pendiente > 0) {}$i_pendiente++;}
		$result_descartado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'descartado' ORDER BY fecharespuesta desc limit 0,99999");$i_descartado = 0;while ($row_descartado = mysql_fetch_array($result_descartado)) { if ($i_descartado > 0) {}$i_descartado++;}
		
		$result_seguimiento = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'seguimiento' ORDER BY fecharespuesta desc limit 0,99999");$i_seguimiento = 0;while ($row_seguimiento = mysql_fetch_array($result_seguimiento)) { if ($i_seguimiento > 0) {}$i_seguimiento++;}
		$result_postventa = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate estadodeventa = 'postventa' ORDER BY fecharespuesta desc limit 0,99999");$i_postventa = 0;while ($row_postventa = mysql_fetch_array($result_postventa)) { if ($i_postventa > 0) {}$i_postventa++;}


		$a_equipo = $consultasEquipo_numero_asignacionesHoy + $consultasEquipo_numero_pendientes;
		$b_equipo = $consultasEquipo_numero_asignacionesTotal - $a_equipo;

		$a_consumibles = $consultasConsumibles_numero_asignacionesHoy + $consultasConsumibles_numero_pendientes;
		$b_consumibles = $consultasConsumibles_numero_asignacionesTotal - $a_consumibles;		
?>
<script>
		var pieData = [
				
				{
					value: <?= $i_facturado ?>,
					color:"#5cb85c",
					highlight: "#5cb85c",
					label: "Facturado"
				},
				{
					value: <?= $i_correo ?>,
					color: "#f0ad4e",
					highlight: "#f0ad4e",
					label: "Correo"
				},
				{
					value: <?= $i_llamada ?>,
					color: "#5bc0de",
					highlight: "#5bc0de",
					label: "Llamada"
				},
				{
					value: <?= $i_llamadaycorreo ?>,
					color: "#428bca",
					highlight: "#428bca",
					link: "http://google.com",
					label: "Llamada y Correo"
				},
				{
					value: <?= $i_descartado ?>,
					color: "#999999",
					highlight: "#999999",
					label: "Descartado"
				}
			];
	
	var pieDataStatusEquipo = [
		{
			value: <?= $total_calientes ?>,
			color:"#d9534f",
			highlight: "#d9534f",
			label: "Calientes"
		},
		{
			value: <?= $total_descartados ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturados ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_frios ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Frios"
		},
		{
			value: <?= $total_tibios ?>,
			color: "#f0ad4e",
			highlight: "#f0ad4e",
			label: "Tibios"
		}
	];

		var pieDataStatusTelemarketing = [
		{
			value: <?= $total_correosT ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_descartadosT ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturadosT ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_llamadasT ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreosT ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Correos y Llamadas"
		}
	];

	var pieDataStatusTelemarketingVendedor = [
		{
			value: <?= $total_correosTV ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_descartadosTV ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
		{
			value: <?= $total_facturadosTV ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_llamadasTV ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreosTV ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		}
	];

	var pieDataStatusTelemarketingSAC = [
		{
			value: <?= $total_pendientesSAC ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Pendientes"
		},
		{
			value: <?= $total_facturadosSAC ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		}
	];

	var pieData2 = [
		{
			value: <?= $consultas_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $consultas_numero_asignacionesTotal ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Total"
		},
		{
			value: <?= $consultas_numero_sinAsignacionesTotal ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Sin Asignaciones"
		},
		{
			value: <?= $consultas_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];

	var pieDataEquipo = [
		{
			value: <?= $consultasEquipo_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $b_equipo ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $consultasEquipo_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];

		var pieDataConsumibles = [
		{
			value: <?= $consultasConsumibles_numero_asignacionesHoy ?>,
			color:"#5bc0de",
			highlight: "#5bc0de",
			label: "Hoy"
		},
		{
			value: <?= $b_consumibles ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $consultasConsumibles_numero_pendientes ?>,
			color: "#d9534f",
			highlight: "#d9534f",
			label: "Atrasados"
		}
	];

			window.onload = function(){
				<?php
					include('c.consultas-06.php');
				?>
			};

	</script>

<!-- 
<pre>
	<?= $test_query_interno ?>
</pre>
-->