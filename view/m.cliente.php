<?php

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

	$dte = date(ymdhia);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$ampm = date(a);

if (isset($_POST["nombre"])) {

	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$contacto2 = $_POST["contacto2"];
	$contacto3 = $_POST["contacto3"];
	$direccion = $_POST["direccion"];
	$ciudad = $_POST["ciudad"];
	$pais = $_POST["pais"];
	$estado = $_POST["estado"];
	$lada = $_POST["lada"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	$medio = $_POST["medio"];
	$giro = $_POST["giro"];
	$comentarios = $_POST["comentarios"];
	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';
	$Hora = ''.$hora.':'.$minuto.' '.$ampm.'';
	$formulario = 'CRM';
	$equipodeinteres = $_POST["equipodeinteres"];
	$comeqenatp = $_POST["comeqenatp"];
	$eqclosqcuenta = $_POST["eqclosqcuenta"];
	$antacteq = $_POST["antacteq"];
	$escliente = $_POST["escliente"];
	$numerodecliente = $_POST["numerodecliente"];
	$motivodeconsulta = $_POST["motivodeconsulta"];
	$empresa = $_POST["empresa"];
	$nombre_recomendador = $_POST["nombre_recomendador"];
	$sucursal_recomendador = $_POST["sucursal_recomendador"];
	$comentario_vendedor = $_POST["comentario_vendedor"];
	$asignadoa = $_POST["usuario"];
	$fechadecontacto = $_POST["fechadecontacto"];
	$fechaasignacion = $_POST["fechaasignacion"];
	$fechaventa = $_POST["fechaventa"];
	$estadodeventa = $_POST["estadodeventa"];
	$numerodefactura = $_POST["numerodefactura"];
	$usuario = $_POST["usuario"];

	$equipos_marca = $_POST["equipos_marca"];
	$equipos_equipo = $_POST["equipos_equipo"];
	$equipos_precio = $_POST["equipos_precio"];
	$muestra = $_POST["muestra"];
	
 
	$sql = "UPDATE `jcnoble`.`contacto` SET `nombre`='$nombre', `email`='$email', `lada`='$lada', `telefono`='$telefono', `pais`='$pais', `comentarios`='$comentarios', `equipodeinteres`='$equipodeinteres' WHERE `id`='$id';";

	if ($_POST["update"] == 'update') {
		$sql2 = "UPDATE `jcnoble`.`ecrm_equipos_data` SET `equipo`='$equipos_equipo', `precio`='$equipos_precio', `marca`='$equipos_marca', `estadodeventa`='$muestra' WHERE `id_seguimiento`='$id';";
	}

	else {
		$sql2 = "INSERT INTO ecrm_equipos_data (id_ecrm_equipos_data,id_seguimiento,equipo,precio,marca,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
		$sql2.= "VALUES ('".$id_ecrm_equipos_data."','".$id."','".$equipos_equipo."','".$equipos_precio."','".$equipos_marca."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";	
	}

	mysql_query($sql, $conexion);
	mysql_query($sql2, $conexion);
	header("Location: cliente.php?id=$id");
	#header("Location: http://www.avanceytec.com.mx");

	echo '('.$_POST["id"].')';
	echo '<div style="width:200px; height:200px; background-color:red;"></div>';
	
}

if (isset($_POST["comentariosplantilla"])) {

	# INICIA ENVIO

	$jcnoble = ''.$usuario.'@avanceytec.com.mx';
	$header = "From: " . $jcnoble . " \r\n"; 
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	# $header .= "Content-Type: text/plain";
	$header .= "Content-Type: text/html"; 

	$mensaje .= '
<table width="100%">
		<tr>
			<td style="text-align:center;">
				<center>

				<table width="800" cellspacing="10" border="0">
					<tr>
						<td style="background-color:Gray; color:White;">
							FORMATO DE SOLICITUD DE PRODUCTO SOBRE PEDIDO
						</td>
					</tr>
					<tr>
						<td style="font-family:arial;text-align:left;">
							<p><strong>Estimado</strong> <?= $nombre ?>:</p>
							<p style="text-align:justify;">
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web, me permito informarle que debido al tipo de material que requiere, es necesario hacer una cotización especial,  ya que se trata de un producto sobre pedido o nuevo, el trámite de esta cotización tardará un lapso de  24 a 72 hrs., en caso de requerir información adicional acerca de su solicitud,  nos pondremos en contacto con usted y una vez concluido el trámite de cotización,  se le hará llegar de forma inmediata.
							</p>
							<p style="text-align:justify;">
								Puede  contactarnos a través de nuestro Centro de Atención Telefónica en un horario de <strong>Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)</strong>, al teléfono 01800-7772871 donde uno de nuestros ejecutivos de venta podrá responder a todas sus preguntas.
							</p>
							<p style="text-align:justify;">
								<?= $_POST["comentariosplantilla"] ?>
							</p>
							<p style="text-align:center;">
								<img src="http://avanceytec.com.mx/apps/crm2/view/lcera.jpg" alt="">
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>
	';

	$mensaje .= "\r\n";

	$para = "$usuario@avanceytec.com.mx, $email, auxdiseno@avanceytec.com.mx";
	

	$asunto = 'Mensaje de Prueba';
	mail($para, $asunto,utf8_decode($mensaje), $header); 
	# TERMINA ENVIO

}

?>

