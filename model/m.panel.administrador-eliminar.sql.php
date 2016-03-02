<?php
	
	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);

if (isset($_POST["id_eliminar"])) {

	$id_eliminar = $_POST["id_eliminar"];

	$dte = date(ymdhis);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$horaasignacion_eliminar = ''.$hora.':'.$minuto.'';
	$fechaasignacion_eliminar = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_eliminar = "UPDATE `jcnoble`.`contacto` SET `asignadoa`='trash', `fechaasignacion`='$fechaasignacion_eliminar' WHERE `id`='$id_eliminar';";

	mysql_query($sql_eliminar, $conexion);
	
	}

if (isset($_POST["filter"])) {

		if ($_POST["filter"] == 'sinasignacion') {
		
			$_SESSION['filter'] = 'sinasignacion';

		}

		if ($_POST["filter"] == 'conasignacion') {
		
			$_SESSION['filter'] = 'conasignacion';

		}

		else if ($_POST["filter"] == 'eliminados'){

			$_SESSION['filter'] = 'eliminados';

		}

		else if ($_POST["filter"] == 'quitarfiltro'){

			$_SESSION['filter'] = '';

		}

		else {

		}
		
	}
?>