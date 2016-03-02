<?php
$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

$user = $_SESSION["usu"];
$fechadia = $_POST["fechadia"];
$fechames = $_POST["fechames"];
$fechaano = $_POST["fechaano"];


		

		if ($_POST["estadodeventa"] == 'seguimiento') {
			
			$fechadiaprox = '01';
			$fechamesprox = '01';
			$fechaanoprox = '3000';

		}
		
		else {

				$fechadiaprox = $_POST["fechadiaprox"];

				if ($fechadiaprox == '1' OR $fechadiaprox == '2' OR $fechadiaprox == '3' OR $fechadiaprox == '4' OR $fechadiaprox == '5' OR $fechadiaprox == '6' OR $fechadiaprox == '7' OR $fechadiaprox == '8' OR $fechadiaprox == '9') {
					$fechadiaprox = '0'.$fechadiaprox.'';
				}
				else {
				}

			$fechamesprox = $_POST["fechamesprox"];
			$fechaanoprox = $_POST["fechaanoprox"];

		}

		$fechaprox = $_POST["fechaprox"];
		$fechaproxE = explode("-", $fechaprox);	
	
		$fechadiaprox = $fechaproxE[0];
		$fechamesprox = $fechaproxE[1];
		$fechaanoprox = $fechaproxE[2];

		




$numerodefactura = $_POST["numerodefactura"];

#$idedit = $_SESSION["idedit"];

if (isset($_POST["estadodeventa"])) {

	$id_comentarios_v = 0;
	$id_seguimiento = $_POST["idedit"];
	#$usuario = $_POST["usuario"];
	$usuario = $_SESSION["usuario"];
	$termometro = $_POST["termometro"];
	$estadodeventa = $_POST["estadodeventa"];
	$comentariovendedor = $_POST["comentariovendedor"];
	$num_factura = $_POST["num_factura"];
	#$fechaasignacion = $_POST["fechaasignacion"];	
	#$horaasignacion = $_POST["horaasignacion"];
	$fechaasignacion = '2014-08-28';	
	$horaasignacion = 'a';
	$dte = date(ymdhis);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
	$horarespuesta = $_POST["horarespuesta"];
	$fechaproxima = ''.$fechaanoprox.'-'.$fechamesprox.'-'.$fechadiaprox.'';

	/* Facturado */
	$montodeventa = $_POST['montodeventa'];
	$productovendido = $_POST['productovendido'];
	$factura = $_POST['factura'];
	$fechaventa = $_POST['fechaventa'];
	$fechaventaE = explode("-", $fechaventa);
	$fechaventa = ''.$fechaventaE[2].'-'.$fechaventaE[1].'-'.$fechaventaE[0].'';

	$sql = "INSERT INTO ecrm_comentarios_v (id_comentarios_v,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
    	$sql.= "VALUES ('".$id_comentarios_v."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
  	
  	if ($fechaventa != '') {
  		
  		$sql_facturado = "INSERT INTO ecrm_seguimiento_facturado (id_seguimiento_facturado,id_seguimiento,usuario,montodeventa,productovendido,factura,fechaventa,fecha)";
		$sql_facturado.= "VALUES (0,'".$id_seguimiento."','".$usuario."','".$montodeventa."','".$productovendido."','".$factura."','".$fechaventa."',now())";
		mysql_query($sql_facturado, $conexion);
  	}

  	else {

  	}

	

	$fecharespuestaValidator = ''.$ano.''.$mes.''.$dia.'';
	$fechaproximaValidator = ''.$fechaanoprox.''.$fechamesprox.''.$fechadiaprox.'';

	if ($fechaproximaValidator < $fecharespuestaValidator) {
		# mysql_query($sql2, $conexion);
		# echo 'No puedes programar una llamada antes de la fecha actual.';
		$_SESSION["titleMensaje"] = '11';
		$_SESSION["h4Mensaje"] = '11';
		
		$_SESSION["POSTfechaanoprox"] = $fechaanoprox;
		$_SESSION["POSTfechamesprox"] = $fechamesprox;
		$_SESSION["POSTfechadiaprox"] = $fechadiaprox;
		$_SESSION["POSTestadodeventa"] = $estadodeventa;
		$_SESSION["POSTcomentariovendedor"] = $comentariovendedor;
		

	}

	else {

		if ($_POST["estadodeventa"] == 'seguimiento') {
			mysql_query($sql, $conexion);

			# INICIA ENVIO

	$fcasignadoa = $_POST["fcasignadoa"];

	$jcnoble = ''.$usuario.'@avanceytec.com.mx';
	$header = "From: " . $jcnoble . " \r\n"; 
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	# $header .= "Content-Type: text/plain";
	$header .= "Content-Type: text/html"; 


	# $mensaje .= "MENSAJE DE SEGUIMIENTO \r\n";
	# $mensaje .= "______________________________  \r\n";
	$mensaje .= " " . $comentariovendedor . " \r\n";
	$mensaje .= " <a href=\"http://avanceytec.com.mx/apps/crm2/cliente.php?id=$id_seguimiento&vendedor=$fcasignadoa\">Folio: #" . $id_seguimiento . "</a> \r\n";

	$mensaje .= "\r\n";

	# $para = "$fcasignadoa@avanceytec.com.mx, $usuario@avanceytec.com.mx, auxdiseno@avanceytec.com.mx";
	if ($usuario == 'amariscal') {
		$para = "$usuario@avanceytec.com.mx, auxdiseno@avanceytec.com.mx";
	}
	else {
		$para = "$fcasignadoa@avanceytec.com.mx, $usuario@avanceytec.com.mx, auxdiseno@avanceytec.com.mx";
	}

	$asunto = 'Mensaje de Seguimiento Folio #'.$id_seguimiento.'.';
	mail($para, $asunto,utf8_decode($mensaje), $header); 
	# TERMINA ENVIO
/**/
			
		}
		else {

			$sql2 = "UPDATE `jcnoble`.`ecrm_comentarios_v` SET `horaasignacion`='ok' WHERE `id_seguimiento`='$id_seguimiento';";
			mysql_query($sql2, $conexion);

			mysql_query($sql, $conexion);
			$status = "ok";
			$_SESSION["titleMensaje"] = '22';
			$_SESSION["h4Mensaje"] = '22';

			# BUSQUEDA
			
			$busqueda = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario' AND id = $id_seguimiento");
      			mysql_query ("SET NAMES 'utf8'");
      			$i_busqueda = 0;

  			while ($row_busqueda = mysql_fetch_array($busqueda)) {
    
    				if ($i_busqueda > 0) {
    				}
    				
    				$_SESSION["formularioRYG"] = $row_busqueda['formulario'];
    				$_SESSION["usuarioRYG"] = $row_busqueda['usuario'];
    			}

  			$i_busqueda++;

			# BUSQUEDA

			# INICIA ENVIO

	$fcasignadoa = $_POST["fcasignadoa"];

	$jcnoble = ''.$usuario.'@avanceytec.com.mx';
	$header = "From: " . $jcnoble . " \r\n"; 
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	# $header .= "Content-Type: text/plain";
	$header .= "Content-Type: text/html"; 


	# $mensaje .= "MENSAJE DE SEGUIMIENTO \r\n";
	# $mensaje .= "______________________________  \r\n";
	$mensaje .= "<i>" . $comentariovendedor . "</i> \r\n";
	$mensaje .= "<br />";
	# $mensaje .= " <a href=\"http://avanceytec.com.mx/apps/crm2/cliente.php?id=$id_seguimiento&vendedor=$fcasignadoa\">Folio: #" . $id_seguimiento . "</a> \r\n";
	$mensaje .= "<strong> Folio: #" . $id_seguimiento . "</strong> \r\n";

	$mensaje .= "\r\n";

	# 
	if ($_SESSION["formularioRYG"] == 'RYG') {
		$usuarioRYG = $_SESSION["usuarioRYG"];
		if ($fcasignadoa == '') {
			$para = "$usuario@avanceytec.com.mx, auxdiseno@avanceytec.com.mx, $usuarioRYG@avanceytec.com.mx";
		}
		else {
			$para = "$fcasignadoa@avanceytec.com.mx, $usuario@avanceytec.com.mx, auxdiseno@avanceytec.com.mx, $usuarioRYG@avanceytec.com.mx";
		}
	}
	else {
		$para = "auxdiseno@avanceytec.com.mx";	
	}
	

	$asunto = 'Mensaje de Seguimiento Folio #'.$id_seguimiento.'';
	mail($para, $asunto,utf8_decode($mensaje), $header); 
	# TERMINA ENVIO

		}
	}

	$_SESSION["titleMensaje"] = 'fechaproximaValidator: '.$fechaproximaValidator.' - fecharespuestaValidator: '.$fecharespuestaValidator.'';


		
		# header("Location: {$_SERVER['HTTP_REFERER']}".SID);
		$fcasignadoa = $_POST["fcasignadoa"];
		header("Location: refresh?id=$id_seguimiento&vendedor=$fcasignadoa");
	

	
	
}



# Variables
$status = "";
$im1 = $_SESSION["im1"];
#$idedit = $_SESSION["idedit"];
$conf = 'test';

?>