<?php

	if(!@mysql_connect("$dbh", "$dbu", "$dbp")) {

		die();

	}

	mysql_select_db("$dbn1");

	mysql_query("SET NAMES 'utf8'");

	$result_home = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario_consultas' ORDER BY id desc limit 1,1");
    
	#

  	$i_result_home = 0;

	while ($row_result_home = mysql_fetch_array($result_home)) {

		if ($i_result_home > 0) {}            
  
			# echo '['.$row_result_home['id'].']';
  		}

	$i_result_home++;

	





	# Total de Agendados al Día

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_asignacionesHoy = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND fechaproxima = '$fecha_asignacionesHoy' AND horaasignacion != 'ok' ";
  	$result_asignacionesHoy = mysql_query($sql_asignacionesHoy);
  	$numero_asignacionesHoy = mysql_num_rows($result_asignacionesHoy);








  	# Agendados

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_agendados = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_agendados = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND fechaproxima = '$fecha_agendados' AND horaasignacion != 'ok' ";

  	$result_agendados = mysql_query($sql_agendados);
  	$numero_agendados = mysql_num_rows($result_agendados);



	# Descartados

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$sql_descartados = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND estadodeventa = 'descartado' AND horaasignacion != 'ok' ";

  	$result_descartados = mysql_query($sql_descartados);
  	$numero_descartados = mysql_num_rows($result_descartados);










	# Total de Asignaciones

	$sql_asignacionesTotal = "SELECT * FROM contacto WHERE asignadoa = '$usuario_consultas' AND fecha >= '2014-08-28' ";
  	$result_asignacionesTotal = mysql_query($sql_asignacionesTotal);
  	$numero_asignacionesTotal = mysql_num_rows($result_asignacionesTotal);








  	# Total de Pendientes

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' AND estadodeventa != 'descartado'";

  	$result_pendientes = mysql_query($sql_pendientes);
  	$numero_pendientes = mysql_num_rows($result_pendientes);
?>