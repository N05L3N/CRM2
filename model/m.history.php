<?php
	
	$filtrarporvendedor = $_SESSION["filtrarporvendedor"];

	if ($filtrarporvendedor != '') {
		
		$whereUsuario1 = 'asignadoa = \'' . $filtrarporvendedor . '\' AND';
		$whereUsuario2 = 'usuario = \'' . $filtrarporvendedor . '\' AND';

	}

	else {
		
		$whereUsuario1 = '';
		$whereUsuario2 = '';

	}
	
	# Total de Agendados al Día

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$hora24 = date(G);
	if ($hora24 == 0 OR $hora24 == 1 OR $hora24 == 2 OR $hora24 == 3 ) {
   		 $dia = $dia-1;
	 }

  	else {
   
  	}

	$fecha_asignacionesHoy = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE $whereUsuario2 fechaproxima = '$fecha_asignacionesHoy' AND horaasignacion != 'ok' ORDER BY fechaproxima";
	$_SESSION['armando'] = $sql_asignacionesHoy;
  	$result_asignacionesHoy = mysql_query($sql_asignacionesHoy);
  	$numero_asignacionesHoy = mysql_num_rows($result_asignacionesHoy);
  	$_SESSION['numero_asignacionesHoy'] = $numero_asignacionesHoy;

	# Total de Asignaciones

	$sql_asignacionesTotal = "SELECT * FROM contacto WHERE $whereUsuario1 estadodeventa != 'descartado'";
  	$result_asignacionesTotal = mysql_query($sql_asignacionesTotal);
  	$numero_asignacionesTotal = mysql_num_rows($result_asignacionesTotal);
  	$_SESSION['numero_asignacionesTotal2'] = $numero_asignacionesTotal;

  	# Total de Pendientes

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE $whereUsuario2 fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
  	$result_pendientes = mysql_query($sql_pendientes);
  	$numero_pendientes = mysql_num_rows($result_pendientes);
  	$_SESSION['numero_pendientes'] = $numero_pendientes;
?>