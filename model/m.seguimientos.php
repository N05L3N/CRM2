<?php
$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

#$idedit = $_SESSION["idedit"];

if (isset($_POST["usuario"])) {

	$id = '0';
	$usuario = $_POST["usuario"];
	$asignacion = $idedit;
	$estadodeventa = $_POST["estadodeventa"];
	$comentariovendedor = $_POST["comentariovendedor"];
	$factura = $_POST["factura"];
	$fechaasignacion = $_POST["fechaasignacion"];	
	$horaasignacion = $_POST["horaasignacion"];
	$fecharespuesta = $_POST["fecharespuesta"];
	$horarespuesta = $_POST["horarespuesta"];
	$idedit = $_POST["idedit"];


	# DATOS DE RYG

	#$id_seguimiento = $idedit;
	$id_seguimiento = $_POST["idedit"];
	$asignadoa = $_POST["asignadoa"];
	$asignadoa = $_POST["usuario"];
	$dte = date(ymdhis);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$horaasignacion = ''.$hora.':'.$minuto.'';
	$fecharespuesta = ''.$ano.'-'.$mes.'-'.$dia.'';
	$fechaasignacion = ''.$ano.'-'.$mes.'-'.$dia.'';
	$formulario = 'ADM';
	$horarespuesta = $_POST["horarespuesta"];
	$fechaproxima = ''.$fechaanoprox.'-'.$fechamesprox.'-'.$fechadiaprox.'';

	#$sql = "INSERT INTO eqasignacion (id, usuario, asignacion, estadodeventa,  comentariovendedor, factura, fechaasignacion, horaasignacion, fecharespuesta, horarespuesta) ";
    	#$sql.= "VALUES ('".$id."', '".$usuario."', '".$asignacion."', '".$estadodeventa."', '".$comentariovendedor."', '".$factura."', '".$fechaasignacion."', '".$horaasignacion."', '".$fecharespuesta."', '".$horarespuesta."')";

    	#$sql = "UPDATE `jcnoble`.`contacto` SET `asignadoa`='$asignadoa', `fechaasignacion`='$fechaasignacion', WHERE `id`='$id_seguimiento';";
	$sql = "UPDATE `jcnoble`.`contacto` SET `asignadoa`='$asignadoa', `fechaasignacion`='$fechaasignacion' WHERE `id`='$id_seguimiento';";
		

		/*
			Agregar un registro con la proxima llamada para el dia actual
			"Inicia"
		*/
			$m_id_comentarios_v = 0;
			$m_id_seguimiento = $_POST["idedit"];
			#m_$usuario = $_POST["usuario"];
			$m_usuario = $asignadoa;
			$m_termometro = $_POST["termometro"];
			$m_estadodeventa = 'Pendiente';
			$m_comentariovendedor = 'Dar seguimiento';
			$m_num_factura = $_POST["num_factura"];
			#m_$fechaasignacion = $_POST["fechaasignacion"];	
			#m_$horaasignacion = $_POST["horaasignacion"];
			$m_fechaasignacion = ''.$ano.''.$mes.''.$dia.'';
			$m_horaasignacion = 'a';
			$m_dte = date(ymdhis);  
			$m_dia = date(d);
			$m_mes = date(m);
			$m_ano = date(Y);
			$m_fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
			$m_horarespuesta = ''.$hora.':'.$minuto.'';
			$m_fechaproxima = ''.$ano.'-'.$mes.'-'.$dia.'';

		$m_sql = "INSERT INTO ecrm_comentarios_v (id_comentarios_v,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
    		$m_sql.= "VALUES ('".$m_id_comentarios_v."','".$m_id_seguimiento."','".$m_usuario."','".$m_termometro."','".$m_estadodeventa."','".$m_comentariovendedor."','".$m_factura."','".$m_fechaasignacion."','".$m_horaasignacion."','".$m_fecharespuesta."','".$m_horarespuesta."','".$m_fechaproxima."')";
    		/*
			"Termina"
    		*/







/* Servicio al Cliente */

				if ($asignadoa == 'rgonzalez') {

					$sql_q2 = mysql_query("SELECT * FROM contacto WHERE id = '$id_seguimiento'");
					mysql_query ("SET NAMES 'utf8'");
    
					$sql_i2 = 0;

					while ($sql_r2 = mysql_fetch_array($sql_q2)) {
						
						if ($sql_i2 > 0) { }

						$cs_id_seguimiento = $sql_r2['id'];
						$cs_fecha = $sql_r2['fecha'];
						$cs_nombredelcliente = $sql_r2['nombre'];
						$cs_email = $sql_r2['email'];
						
						if ($sql_r2['estado'] == '') { $cs_sucursaldelcliente = ''; }
						else if ($sql_r2['estado'] == 'Aguascalientes') { $cs_sucursaldelcliente = '1'; }
						else if ($sql_r2['estado'] == 'Chihuahua') { $cs_sucursaldelcliente = '2'; }
						else if ($sql_r2['estado'] == 'Culiacan') { $cs_sucursaldelcliente = '3'; }
						else if ($sql_r2['estado'] == 'Durango') { $cs_sucursaldelcliente = '4'; }
						else if ($sql_r2['estado'] == 'Estado de Mexico') { $cs_sucursaldelcliente = '5'; }
						else if ($sql_r2['estado'] == 'Guadalajara') { $cs_sucursaldelcliente = '6'; }
						else if ($sql_r2['estado'] == 'Hermosillo') { $cs_sucursaldelcliente = '7'; }
						else if ($sql_r2['estado'] == 'Juarez') { $cs_sucursaldelcliente = '8'; }
						else if ($sql_r2['estado'] == 'Leon') { $cs_sucursaldelcliente = '9'; }
						else if ($sql_r2['estado'] == 'Mexicali') { $cs_sucursaldelcliente = '10'; }
						else if ($sql_r2['estado'] == 'Monterrey') { $cs_sucursaldelcliente = '11'; }
						else if ($sql_r2['estado'] == 'Obregon') { $cs_sucursaldelcliente = '12'; }
						else if ($sql_r2['estado'] == 'Puebla') { $cs_sucursaldelcliente = '13'; }
						else if ($sql_r2['estado'] == 'Queretaro') { $cs_sucursaldelcliente = '14'; }
						else if ($sql_r2['estado'] == 'Saltillo') { $cs_sucursaldelcliente = '15'; }
						else if ($sql_r2['estado'] == 'San Luis Potosí') { $cs_sucursaldelcliente = '16'; }
						else if ($sql_r2['estado'] == 'Tijuana') { $cs_sucursaldelcliente = '17'; }
						else if ($sql_r2['estado'] == 'Torreon') { $cs_sucursaldelcliente = '18'; }
						else if ($sql_r2['estado'] == 'Veracruz') { $cs_sucursaldelcliente = '19'; }
						else { $cs_sucursaldelcliente = ''; }

						$cs_datosdecontacto = '' . $sql_r2['lada'] . ' ' . $sql_r2['telefono'] . '';
						$cs_nombredequienreporta = '';
						$cs_motivodelreporte = '';
						$cs_origendelaqueja = '';
						$cs_descripcionbreve = $sql_r2['comentarios'];
						$cs_comentarios = '';
						$cs_accionrealizada = '';
						$cs_calificacion = '';
						$cs_usuario = 'CRM';
						$cs_fechats;
  
						$sql_i2++;

  					}


					$cs_sql = "INSERT INTO cs_clientes (id,id_seguimiento,fecha,nombredelcliente,email,sucursaldelcliente,datosdecontacto,nombredequienreporta,motivodelreporte,origendelaqueja,descripcionbreve,comentarios,accionrealizada,calificacion,usuario,fechats)";
    					$cs_sql.= "VALUES (0,'".$cs_id_seguimiento."','".$cs_fecha."','".$cs_nombredelcliente."','".$cs_email."','".$cs_sucursaldelcliente."','".$cs_datosdecontacto."','".$cs_nombredequienreporta."','".$cs_motivodelreporte."','".$cs_origendelaqueja."','".$cs_descripcionbreve."','".$cs_comentarios."','".$cs_accionrealizada."','".$cs_calificacion."','".$cs_usuario."',NOW())";
					
					mysql_query($cs_sql, $conexion);

				}

				else {

				}

/* Servicio al Cliente */				
			





	mysql_query($sql, $conexion);
	mysql_query($m_sql, $conexion);

	$pos = $_GET['pos'];
	if ($pos == '') {
		header('Location: panel.php?dataview='.$_POST["dataview"].'#'.$_POST["idedit"].'');	
	}
	else {
		header('Location: panel.php?dataview='.$_POST["dataview"].'&pos='.$pos.'#'.$_POST["idedit"].'');		
	}
	
	
	
	# INICIA ENVIO
	#$usuario = $_SESSION["usuario"];

	
	$result = mysql_query("SELECT * FROM contacto WHERE id = '$id_seguimiento'");
	mysql_query ("SET NAMES 'utf8'");
    
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	if ($i > 0) {}

	$asignadoa = $row['asignadoa'];
	$id = $row['id'];
	$nombre = $row['nombre'];
	$contacto2 = $row['contacto2'];
	$contacto3 = $row['contacto3'];
	$direccion = $row['direccion'];
	$ciudad = $row['ciudad'];
	$pais = $row['pais'];
	$estado = $row['estado'];
	$lada = $row['lada'];
	$telefono = $row['telefono'];
	$email = $row['email'];
	$medio = $row['medio'];
	$giro = $row['giro'];
	$comentarios = $row['comentarios'];
	$fecha = $row['fecha'];
	$Hora = $row['Hora'];
	$formulario = $row['formulario'];
	$equipodeinteres = $row['equipodeinteres'];
	$comeqenatp = $row['comeqenatp'];
	$eqclosqcuenta = $row['eqclosqcuenta'];
	$antacteq = $row['antacteq'];
	$escliente = $row['escliente'];
	$numerodecliente = $row['numerodecliente'];
	$motivodeconsulta = $row['motivodeconsulta'];
	$empresa = $row['empresa'];
	$usuario = $row['usuario'];
  
      $i++;

  }



	$jcnoble = 'atpcontacto@avanceytec.com.mx';
	$header = "From: " . $jcnoble . " \r\n"; 
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	#$header .= "Content-Type: text/html"; 


$mensaje .= "NUEVA ASIGNACION \r\n";
$mensaje .= "______________________________  \r\n";
#$mensaje .= "Vendedor: " . $usuario . " \r\n";
$mensaje .= "Vendedor: " . $asignadoa . " \r\n";
#$mensaje .= "ID Venta: " . $asignacion . " \r\n";
$mensaje .= "ID Venta: " . $id . " \r\n";
$mensaje .= "______________________________  \r\n";
$mensaje .= "DATOS \r\n";
$mensaje .= "______________________________  \r\n";
$mensaje .= "Nombre: " . $nombre . " \r\n";
$mensaje .= "contacto2: " . $contacto2 . " \r\n";
$mensaje .= "contacto3: " . $contacto3 . " \r\n";
$mensaje .= "direccion: " . $direccion . " \r\n";
$mensaje .= "ciudad: " . $ciudad . " \r\n";
$mensaje .= "pais: " . $pais . " \r\n";
$mensaje .= "estado: " . $estado . " \r\n";
$mensaje .= "lada: " . $lada . " \r\n";
$mensaje .= "telefono: " . $telefono . " \r\n";
$mensaje .= "email: " . $email . " \r\n";
$mensaje .= "medio: " . $medio . " \r\n";
$mensaje .= "giro: " . $giro . " \r\n";
$mensaje .= "comentarios: " . $comentarios . " \r\n";
$mensaje .= "fecha: " . $fecha . " \r\n";
$mensaje .= "Hora: " . $Hora . " \r\n";
$mensaje .= "formulario: " . $formulario . " \r\n";
$mensaje .= "equipodeinteres: " . $equipodeinteres . " \r\n";
$mensaje .= "comeqenatp: " . $comeqenatp . " \r\n";
$mensaje .= "eqclosqcuenta: " . $eqclosqcuenta . " \r\n";
$mensaje .= "antacteq: " . $antacteq . " \r\n";
$mensaje .= "escliente: " . $escliente . " \r\n";
$mensaje .= "numerodecliente: " . $numerodecliente . " \r\n";
$mensaje .= "motivodeconsulta: " . $motivodeconsulta . " \r\n";
$mensaje .= "empresa: " . $empresa . " \r\n";
$mensaje .= "usuario: " . $usuario . " \r\n";

$mensaje .= "\r\n";

	
#$para = "areynoso@avanceytec.com.mx, dochoa@avanceytec.com.mx, $usuario@avanceytec.com.mx";


if ($asignadoa == 'diseno'){
	$para = "$asignadoa@maplasa.com";
}

else {
	#$para = "areynoso@avanceytec.com.mx, albertofernandez@avanceytec.com.mx, $usuario@avanceytec.com.mx";
	$para = "areynoso@avanceytec.com.mx, coordinadorequipo@avanceytec.com.mx, $asignadoa@avanceytec.com.mx";
}




$asunto = 'Nueva Asignacion';
mail($para, $asunto,utf8_decode($mensaje), $header); 
	# TERMINA ENVIO
/**/



	echo 'Capturado';
	echo '<div style="height:150px;></div>';
	#echo '<div style="background-color:red;">'.$asignadoa.'-'.$fechaasignacion.'-'.$id_seguimiento.'-'.$horaasignacion.'</div>';
	echo '<div style="background-color:red;"></div>';
	
}

# Variables
$status = "";
$im1 = $_SESSION["im1"];
#$idedit = $_SESSION["idedit"];
$conf = 'test';

?>