<?php

	if(!@mysql_connect("$dbh", "$dbu", "$dbp")) {

		die();

	}

	mysql_select_db("$dbn1");

	mysql_query("SET NAMES 'utf8'");

	#$result_home = mysql_query("SELECT * FROM contacto WHERE usuario = '$usuario' AND fechaproxima = '2014-03-08' ORDER BY id_comentarios_v desc limit $start,$per_page");
	$result_home = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario' ORDER BY id desc limit 1,1");
    
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

	# $sql_asignacionesHoy = "SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha = '$fecha_asignacionesHoy' ";
	$sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_asignacionesHoy' AND horaasignacion != 'ok' AND (estadodeventa != 'facturado y clonado')";
  	$result_asignacionesHoy = mysql_query($sql_asignacionesHoy);
  	$numero_asignacionesHoy = mysql_num_rows($result_asignacionesHoy);








  	# Agendados

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_agendados = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_agendados = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_agendados' AND horaasignacion != 'ok'";
	# SELECT * FROM ecrm_comentarios_v WHERE usuario = 'admsoporte' AND fechaproxima = '2014-07-18';
  	$result_agendados = mysql_query($sql_agendados);
  	$numero_agendados = mysql_num_rows($result_agendados);



	# Descartados

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$sql_descartados = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND estadodeventa = 'descartado' AND horaasignacion != 'ok' ";
	# SELECT * FROM ecrm_comentarios_v WHERE usuario = 'admsoporte' AND fechaproxima = '2014-07-18';
  	$result_descartados = mysql_query($sql_descartados);
  	$numero_descartados = mysql_num_rows($result_descartados);










	# Total de Asignaciones

	$sql_asignacionesTotal = "SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28'";
  	$result_asignacionesTotal = mysql_query($sql_asignacionesTotal);
  	$numero_asignacionesTotal = mysql_num_rows($result_asignacionesTotal);








  	# Total de Pendientes

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';
	# 2014-08-28
	$sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
	# $sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE usuario = 'vendedorprueba' AND fechaproxima < '2014-07-18' AND horaasignacion != 'ok' ";
	# SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '';
	# SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '' ORDER by `fecharespuesta` DESC;
	# SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '';

	# UPDATE `jcnoble`.`ecrm_comentarios_v` SET `horaasignacion`='oktemporal' WHERE `id_seguimiento`=''; 94
  	$result_pendientes = mysql_query($sql_pendientes);
  	$numero_pendientes = mysql_num_rows($result_pendientes);
?>