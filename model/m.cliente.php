<script>
	function enviado(){
		alert('Correo enviado con éxito');
	}
</script>
<?php

	session_start();
	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

	$dte = date(ymdhia);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	
	$hora = $hora - 1;

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
	
 
	$sql = "UPDATE jcnoble.contacto SET nombre='$nombre',empresa = '$empresa',contacto2 = '$contacto2',contacto3 = '$contacto3',direccion = '$direccion', email='$email', lada='$lada', telefono='$telefono', pais='$pais', comentarios='$comentarios', equipodeinteres='$equipodeinteres' WHERE id='$id';";

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

if (isset($_POST["plantilla_comentariosplantilla"])) { 




?>
<!--<script>
	function enviado(){
		alert('Correo enviado con éxito');
	}
	enviado();
</script>-->
<?php

	$id = $_POST["id"];
	$usuario = $_POST["plantilla_usuario"];
	$plantilla_usuario = $_POST["plantilla_usuario"];
	$plantilla_usuario = $_SESSION["user.correo"];

	# INICIA ENVIO

	/*if ($usuario == '') {
		
		$header = "From: auxdiseno@avanceytec.com.mx \r\n"; 

	}

	else {

		$header = "From: " . $plantilla_usuario . " \r\n";
		if ($_GET['plantilla'] != 'prueba') {
			$header .= "cc: $plantilla_usuario \r\n";
			$header .= "bcc: auditorcorreo@avanceytec.com.mx,  atptelemarketing@avanceytec.com.mx, auditorcat@avanceytec.com.mx \r\n";
		}
		else {

		}


	}*/
	/*
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	# $header .= "Content-Type: text/plain";
	$header .= "Content-Type: text/html"; 
	

*/

	$_GET['plantilla'];


	$plantilla_nombre = $_POST["plantilla_nombre"];
	
	$plantilla_email = $_POST["plantilla_email"];
	$plantilla_comentariosplantilla = $_POST["plantilla_comentariosplantilla"];
	
	$plantilla_adjuntos = $_POST["plantilla_adjuntos"];
	$cadena = str_replace(" ","%20",$plantilla_adjuntos);
	$plantilla_adjuntos = $cadena;

	$equipodeinteres = $_POST["plantilla_equipodeinteres"];

	if ($plantilla_adjuntos == '<b>Documentos&nbsp;Adjuntos</b><br>') {
		$plantilla_adjuntos = '';
	}
	else {

	}

/* INSERT */














	$id_plantillas_enviadas = 0;
	$id_seguimiento = $_POST['id'];
	$id_plantilla = $_GET['plantilla'];
	$nombre = $plantilla_nombre;
	$email = $plantilla_email;
	$producto = $equipodeinteres;
	$comentarios = $plantilla_comentariosplantilla;
	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';
	$hora = ''.$hora.':'.$minuto.' '.$ampm.'';
	$usuario_envia = $plantilla_usuario;

	$sql3 = "INSERT INTO ecrm_plantillas_enviadas (id_plantillas_enviadas, id_seguimiento, id_plantilla, nombre, email, producto, comentarios, fecha, hora, usuario_envia)";
	$sql3.= "VALUES ('".$id_plantillas_enviadas."','".$id_seguimiento."','".$id_plantilla."','".$nombre."','".$email."','".$producto."','".$comentarios."','".$fecha."','".$hora."','".$usuario_envia."')";	
	mysql_query($sql3, $conexion);





		$arrayTitle = array(
		'1' => 'Seguimiento a su solicitud de AVANCE',
		'2' => 'Seguimiento a su solicitud de AVANCE',
		'3' => 'Seguimiento a su solicitud de AVANCE',
		'4' => 'Seguimiento a su solicitud de AVANCE',
		'5' => 'Seguimiento a su solicitud de AVANCE',
		'6' => 'Seguimiento a su solicitud de AVANCE',
		'7' => 'Seguimiento a su solicitud de AVANCE',
		'8' => 'Seguimiento a su solicitud de AVANCE',
		'9' => 'Seguimiento a su solicitud de AVANCE',
		'10' => 'Seguimiento a su solicitud de AVANCE',
		'11' => 'Seguimiento a su solicitud de AVANCE',
		'12' => 'Seguimiento a su solicitud de AVANCE',
		'13' => 'Seguimiento a su solicitud de AVANCE',
		'14' => 'Seguimiento a su solicitud de AVANCE',
		 );


include ('class.phpmailer.php');
include ('class.smtp.php');
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth   = true;
$mail->Username   = 'auxdiseno@avanceytec.com.mx';
$mail->Password   = 'AH984TP6056';
$mail->IsHTML(true);

//Definimos el remitente (dirección y, opcionalmente, nombre)
$mail->SetFrom($usuario_envia, 'Avance y Tecnología');
#$mail->SetFrom($usuario_envia, 'Avance y Tecnología');
#$mail->From = $usuario_envia;
#$mail->FromName =  'ATEC';
//Esta línea es por si queréis enviar copia a alguien (dirección y, opcionalmente, nombre)
$mail->AddReplyTo($usuario_envia, 'Avance y Tecnología');
//Y, ahora sí, definimos el destinatario (dirección y, opcionalmente, nombre)
$mail->AddAddress($plantilla_email, 'Avance y Tecnología');
//Definimos el tema del email
$mail->Subject = 'Seguimiento a su solicitud de AVANCE';



/*Inicio de la Plantilla #0*/
if ($_GET['plantilla'] == 0) {
$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							". $arrayTitle[1] ."
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Atención:</strong> (" . $plantilla_nombre .")</p>
							
							<p style='text-align:justify;'>
								Nos permitimos  presentarnos ante usted
							</p>
							<p style='text-align:justify;'>
								Avance y Tecnología en Plásticos es una Empresa 100% Mexicana que se distingue y caracteriza por   estar siempre  a la vanguardia  en las últimas Tecnologías e Innovaciones para los mercados de Imagen Gráfica, Arquitectura, Decoración, Manualidades, entre otros, ofreciendo a nuestros  clientes productos de alta calidad variedad,  por lo somos el más importante distribuidor de las marcas más reconocidas a nivel Internacional  tales como: <b>Plastiglas de México, 3M, Avery, Reflectiv, Cooley, Signs Systems, Oracal, Graphtec, Roland, Mutoh, Orionjet y más…</b>
							</p>
							<p style='text-align:justify;'>
								Actualmente con  18 centros de distribución en el País y próximamente presentes   en Cd. de México Df. <b>26 años de Experiencia y Servicio</b>,  con atención a Centro América y USA,  así como un grupo de Asesores Especializados y  Equipo de Soporte Técnico,  siempre al pendiente de nuestros clientes. 
							</p>
							<p style='text-align:justify;'>
								Quedamos a sus atentas órdenes y agradecemos  su atención al presente, no sin antes haciéndole una cordial invitación a visitar nuestro sitio web www.avanceytec.com.mx donde estamos seguros encontrará una soluciones y oportunidades de Negocio para su Empresa.
							</p> 

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							
							<p style='text-align:justify;'>
								<b>
									Quedo a sus atentas ordenes
									Saludos Cordiales 
								</b>
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;width: 50%;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' alt=''>
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #0*/
/*
elseif ($_GET['plantilla'] == 1) {
	$mail->Body = "";
}
*/

/*Inicio de la Plantilla #1*/

else if ($_GET['plantilla'] == 1) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[1] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " . $plantilla_nombre .":</p>
							
							<p>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web, me permito informarle que en base al tipo de material que ustedes requieren, se lleva a cabo una  cotización especial,  ya que se trata de un producto sobre pedido con el que o se cuenta  stock, el trámite de esta cotización tiene un lapso aproximado  de  24 a 48 hrs. Una vez que contemos la información de precios y tiempos de entrega  la tendrá a su disposición esperando poder servirle y ésta sea de su agrado y utilidad. 
							</p>
							
							<p>
								Nos ponemos a su disposición nuestro <b>Centro de Atención Telefónica</b> en un horario de <b>Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)</b>  Teléfono lada sin costo 614 4 32 61 00  donde uno de nuestros asesores podrá atenderlo con gusto. 
							</p>
							
							<p>
								Quedo a la orden <br>
								Saludos Cordiales  
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #1*/
/*Inicio de la Plantilla #2*/

elseif ($_GET['plantilla'] == 2) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[2] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
							
							  <p>
		Le agradecemos que nos haga llegar sus comentarios al respecto del servicio que ofrecemos y de antemano le ofrecemos una disculpa por las molestias que le genera el proceso de asegurar los cheques.
	</p>
	<p>
		Al respecto, le comento que esta medida fue implementada en los procesos de la empresa para los pagos realizados con cheque debido a que fuimos victima de numerosos fraudes con cheques falsos o botados.
	</p>
	<p>
		Sin embargo, estamos consientes de las molestias que esta práctica ha generado en nuestros buenos clientes y tenemos las siguientes alternativas para evitar el cargo del importe correspondiente al 1.7% del monto del cheque.
	</p>
	<p>
		Las alternativas son las siguientes:
	</p>
	<p>
		1. Usted puede entregar el cheque en nuestras oficinas o depositarlo en cualquier banco distinto al emisor de la cuenta de cheques, con la única condición de que el material podrá ser liberado y la factura emitida hasta que el monto del mismo se acredite en las cuentas de la empresa, lo cual sería al siguiente día hábil, después de las 14:00 hrs.
	</p>
	<p>
		2. También puede realizar el pago con Cheque, depositándolo directamente en el banco emisor de la cuenta de cheques y de esta manera, al acreditarse el monto el mismo día en las cuentas de la empresa, se aplicaría dicho pago y se realizaría la entrega del material y la emisión de la factura sin necesidad de asegurar el cheque.
	</p>
	<p>
		3. Además, puede realizar el pago por medio de depósito bancario o transferencia electrónica en las siguientes cuentas:
	</p>

	<p>

	<table>
		<tr>	
			<th style='background-color:#000; color:#fff;'>BANCO</th>
			<th style='background-color:#000; color:#fff;'>CUENTA</th>
			<th style='background-color:#000; color:#fff;'>CLABE INTERBANCARIA</th>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>BANCOMER</td>
			<td style='background-color:#fff; color:black;'>0442666073</td>
			<td style='background-color:#d8d8d8; color:black;'>012150004426660735</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>BANCOMERDOLLARES</td>
			<td style='background-color:#fff; color:black;'>0442666065</td>
			<td style='background-color:#d8d8d8; color:black;'>012150004426660654</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>HSBCCHIHUAHUA</td>
			<td style='background-color:#fff; color:black;'>128301462-1</td>
			<td style='background-color:#d8d8d8; color:black;'>021150012830146213</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>BANORTE</td>
			<td style='background-color:#fff; color:black;'>198023159</td>
			<td style='background-color:#d8d8d8; color:black;'>072150001980231591</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>BANAMEX</td>
			<td style='background-color:#fff; color:black;'>673 SUC 4305</td>
			<td style='background-color:#d8d8d8; color:black;'>002150430500006734</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>SANTANDER</td>
			<td style='background-color:#fff; color:black;'>65174302218</td>
			<td style='background-color:#d8d8d8; color:black;'>014150651743022180</td>
		</tr>
		<tr>
			<th style='background-color:#000; color:#fff;'>HSBC SUCURSALES</th>
			<th style='background-color:#000; color:#fff;'>CUENTA</th>
			<th style='background-color:#000; color:#fff;'>CLABE INTERBANCARIA</th>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>JUAREZ</td>
			<td style='background-color:#fff; color:black;'>4029720653</td>
			<td style='background-color:#d8d8d8; color:black;'>21164040297206500</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>CULIACAN</td>
			<td style='background-color:#fff; color:black;'>4016412199</td>
			<td style='background-color:#d8d8d8; color:black;'>21730040164121900</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>LEON</td>
			<td style='background-color:#fff; color:black;'>4040642191</td>
			<td style='background-color:#d8d8d8; color:black;'>21225040406421900</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>TORRERON</td>
			<td style='background-color:#fff; color:black;'>4019550367</td>
			<td style='background-color:#d8d8d8; color:black;'>21060040195503600</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>SALTILLO</td>
			<td style='background-color:#fff; color:black;'>4023764715</td>
			<td style='background-color:#d8d8d8; color:black;'>21078040237647100</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>HERMOSILLO</td>
			<td style='background-color:#fff; color:black;'>4012608840</td>
			<td style='background-color:#d8d8d8; color:black;'>21760040126088400</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>MEXICALI</td>
			<td style='background-color:#fff; color:black;'>4026126383</td>
			<td style='background-color:#d8d8d8; color:black;'>21020040261263800</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>OBREGON</td>
			<td style='background-color:#fff; color:black;'>4044106789</td>
			<td style='background-color:#d8d8d8; color:black;'>21150040441067800</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>DURANGO</td>
			<td style='background-color:#fff; color:black;'>4039102272</td>
			<td style='background-color:#d8d8d8; color:black;'>21150040391022700</td>
		</tr>
		<tr>
			<td style='background-color:#d8d8d8; color:black;'>AGUASCALIENTES</td>
			<td style='background-color:#fff; color:black;'>4052554649	</td>
			<td style='background-color:#d8d8d8; color:black;'>21010040525546492</td>
		</tr>
	</table>		
</p>

	<p>
		4. Finalmente, puede hacer uso del resto de las opciones de pago que manejamos, tales como pago en efectivo, pago con Tarjeta de Crédito o Débito (Los pagos con tarjeta de crédito y débito manejan una comisión del 1.83%).
	</p>

	<p>
		Esperando que la presente sea de su agrado, ponemos a su disposición nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)  al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de ventas podrá responder a todas sus preguntas.  
	</p>
	<p>
		Gracias por su atención y quedo a la orden.
	</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #2*/
/*Inicio de la Plantilla #3*/

elseif ($_GET['plantilla'] == 3) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[3] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
							
							 <p style='text-align:justify;'>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web. Me permito canalizar su solicitud con la empresa <b>ACRICOLOR GRAFICA SRL</b> quienes amablemente atenderán su solicitud esto debido al País donde ustedes se encuentran.
							</p>
							 <p style='text-align:justify;'>
								Por lo tanto, para que se dé el debido seguimiento a su solicitud me permito copiar en este correo al  Lic. Salomón Ribera, cuyos datos de contacto son los siguientes:
							</p>
							 <p style='text-align:justify;'>
								E-mail: <a href='mailto:almcomercial@acricolor.com.bo'>almcomercial@acricolor.com.bo</a>
							</p>
							 <p style='text-align:justify;'>
								Agradeciendo de antemano su atención, quedo a sus órdenes para cualquier duda o aclaración,
							</p>
							 <p style='text-align:justify;'>
								Quedo a la orden 
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}
/*Inicio de la Plantilla #3*/
/*Inicio de la Plantilla #4*/

elseif ($_GET['plantilla'] == 4) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[4] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
							
							<p style='text-align:justify;'>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web. Me permito canalizar su solicitud con la empresa <b>PROCAD</b> quienes amablemente atenderán su solicitud esto debido al País donde ustedes se encuentran.
							</p>
							<p style='text-align:justify;'>
								Por lo tanto, para que se dé el debido seguimiento a su solicitud me permito copiar en este correo al  Lic., Fernando Concha, cuyos datos de contacto son los siguientes:
							</p>
							<p style='text-align:justify;'>
								<table>
									<tr>
										<th style='text-align:left;'>E-mail:</th>
										<td style='text-align:left;'>
											<a href='mailto:fconcha@procad.cl'>fconcha@procad.cl</a>
										</td>
									</tr>
									<tr>
										<th style='text-align:left;'>Web site:</th>
										<td style='text-align:left;'>
											<a href='http://www.procad.cl'>http://www.procad.cl</a>
										</td>
									</tr>
								</table>
							</p>
							<p style='text-align:justify;'>
								Agradeciendo de antemano su atención, quedo a sus órdenes para cualquier duda o aclaración,
							</p>
							<p style='text-align:justify;'>
								Quedo a la orden  <br>
								Saludos Cordiales 
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Final de la Plantilla #4*/
/*Inicio de la Plantilla #5*/

elseif ($_GET['plantilla'] == 5) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[5] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
							
							<p style='text-align:justify;'>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web. Me permito canalizar su solicitud con la empresa <b>SIGN PRODUCTS</b> quienes amablemente atenderán su solicitud esto debido al País donde ustedes se encuentran.
							</p>
							<p style='text-align:justify;'>
								Por lo tanto, para que se dé el debido seguimiento a su solicitud me permito copiar en este correo al  Lic., Edgar Salinas , cuyos datos de contacto son los siguientes:
							</p>
							<p style='text-align:justify;'>
								<table>
									<tr>
										<th style='text-align:left;'>E-mail:</th>
										<td style='text-align:left;'>
											<a href='mailto:presidencia@signproducts.com.co'>presidencia@signproducts.com.co</a>
										</td>
									</tr>
									<tr>
										<th style='text-align:left;'>Web site:</th>
										<td style='text-align:left;'>
											<a href='http://signproducts.com.co'>http://signproducts.com.co</a>
										</td>
									</tr>
								</table>
							</p>
							<p style='text-align:justify;'>
								Agradeciendo de antemano su atención, quedo a sus órdenes para cualquier duda o aclaración.
							</p>
							<p style='text-align:justify;'>
								Quedo a la orden 
								Saludos Cordiales 
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #5*/
/*Inicio de la Plantilla #6*/

elseif ($_GET['plantilla'] == 6) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[6] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web. Me permito canalizar su solicitud con la empresa  <b>TUBELITE</b> quienes amablemente atenderán su solicitud esto debido al País donde ustedes se encuentran.
							</p>
							<p>
								Por lo tanto, para que se dé el debido seguimiento a su solicitud me permito copiar en este correo a la Srita. Carmen Ferazo, cuyos datos de contacto son los siguientes:
							</p>
							<p>
								<table>
									<tr>
										<th style='text-align:left;'>E-mail:</th>
										<td style='text-align:left;'>
											<a href='mailto:cferazo@tubelite-de-ca.com'>cferazo@tubelite-de-ca.com</a>
										</td>
									</tr>
									<tr>
										<th style='text-align:left;'>Web site:</th>
										<td style='text-align:left;'>
											<a href='http://tubelitecentroamerica.com'>http://tubelitecentroamerica.com</a>
										</td>
									</tr>
								</table>
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #6*/
/*Inicio de la Plantilla #7*/

elseif ($_GET['plantilla'] == 7) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[7] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p>
		Dando seguimiento a la solicitud de información por medio de nuestra página web,  nos ponemos nuevamente a sus órdenes para conocer sus comentarios respecto a nuestros productos y precios, 
		(". $equipodeinteres ."), nuestro interés es resolver  todas sus dudas y mantener contacto,  para atenderle como usted  merece. 
	</p>

	<p>
		Le recuerdo que puede conocer nuestros productos a través de la página www.avanceytec.com.mx y solicitarnos la información que requiera por este medio, o bien, puede ponerse en contacto con nosotros a través de nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.), al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de venta podrá responder a todas sus preguntas.
	</p>
	
	<p>
		Sin más por el momento y esperando una pronta respuesta, quedo a la orden.
	</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #7*/
/*Inicio de la Plantilla #8*/

elseif ($_GET['plantilla'] == 8) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[8] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud lamentamos informarle que no manejamos franquicias, por lo que los productos son exclusivos de venta a clientes registrados y público en general.
							</p>
							<p>	
								Le hacemos una cordial invitación a visitar nuestra página de internet en el siguiente link: www.avanceytec.com.mx donde usted podrá ver toda la línea de productos que manejamos, y poder elegir los de su preferencia y con gusto enviaremos la cotización correspondiente.
							</p>
							<p>
								O bien,  puede ponerse en contacto con nosotros a través de nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.), Teléfono lada sin costo 614 4 32 61 00  donde uno de nuestros asesores podrá atenderlo con gusto.
							</p>
							<p>
								Quedo a la orden 
								<br>
								Saludos Cordiales 
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #8*/
/*Inicio de la Plantilla #9*/

elseif ($_GET['plantilla'] == 9) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[9] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p>
		Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página, me permito enviarle la información solicitada y una cotización con los precios vigentes. Le anexamos un formato de registro para darlo de alta con nosotros o en caso de ya ser registrado de favor indicarnos su nombre de facturación.
	</p>

	<p>
		Para mayor información al respecto de las ". $equipodeinteres. "  solicitadas, puede visitar nuestra página en el siguiente link:  <a href='http://avanceytec.com.mx/busqueda.php?cx=014313635730003193707%3Akuuxljthx-w&cof=FORID%3A9&ie=UTF-8&q=". $equipodeinteres. "&sa=+Buscar+'>". $equipodeinteres. "</a>
	</p>

	<p>
		En caso de vernos favorecidos con su compra, le informamos que  contamos con convenios y tarifas especiales para hacerle llegar su pedido al mejor precio por cualquiera de las siguientes paqueterías:
	</p>
	
	<p>
		Las paqueterías disponibles para su ciudad son:
	</p>

	<ul>
		<li>	Estafeta</li>
		<li>	Multipack</li>
		<li>	Paquetexpress</li>
	</ul>
	<p>
		El costo del envío se determina en base al volumen y peso de los productos; usted puede pagar al recibir su mercancía (solo aplica en algunas paqueterías) o bien podemos incluir el costo del envío en nuestra factura.
	</p>
	<p>
		<strong>
			**El tipo de cambio puede variar al día de la facturación, por lo que deberá confirmar el importe total  antes de efectuar su depósito.
		</strong>
	</p>
	<p>
		<strong>
			**Para realizar envíos de paquetería deberá enviar comprobante de pago antes de las 15:00 hrs (hora local chihuahua) de Lunes a Viernes (envíos aéreos y terrestres)
		</strong>
	</p>
	<p>
		Contamos con las siguientes formas de pago: Depósito bancario o transferencia electrónica.
	</p>
	<p>
		Esperando que la presente sea de su agrado, ponemos a su disposición nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)  al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de ventas podrá responder a todas sus preguntas.
	</p>
	<p>
		Algunos de los productos que manejamos son:
	</p>
	<p>
		<img src='http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-09.jpg' alt='  class='img-responsive' />
	</p>
	<p>
		Gracias por su atención y quedo a la orden.
	</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #9*/
/*Inicio de la Plantilla #10*/

elseif ($_GET['plantilla'] == 10) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[10] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p>
								Le agradecemos su  interés en nuestros productos  y en respuesta a su solicitud por medio de nuestra página web,  le informamos que nuestra empresa no es fabricante de manufacturas plásticas ni manufactura el trabajo que usted nos solicita Lo invitamos  a visitar la página de la empresa <a href='http://www.maplasa.com/'>MAPLASA, Manufacturas Plásticas</a>, la cual se dedica a la manufactura de productos elaborados con plásticos.
							</p>
							
							<p>
								Para darle  el seguimiento oportuno a su solicitud me permito copiar este correo a los siguientes contactos:
							</p>
							
							<p>
								<table>
									<tr>
										<th style='text-align:left;'>Josefina Alarcón</th>
										<td style='text-align:left;'><a href='mailto:ventascampo@maplasa.com'>ventascampo@maplasa.com</a></td>
									</tr>
									<tr>
										<th style='text-align:left;'>Alonso Garcia</th>
										<td style='text-align:left;'><a href='mailto:gerencia@maplasa.com'>gerencia@maplasa.com</a></td>
									</tr>
									<tr>
										<th style='text-align:left;'>Griselda Morales</th>
										<td style='text-align:left;'><a href='mailto:cat1@maplasa.com'>cat1@maplasa.com</a></td>
									</tr>
								</table>
							</p>
							
							<p>
								Así mismo le informamos que contamos con una lista de clientes registrados con nosotros que pueden realizar este tipo de trabajo, los cuales recomendamos y que tal vez puedan brindarle el soporte a la necesidad que actualmente  presentan. 
							</p>
							<p>
								Agradecemos de antemano su atención,  quedo a sus órdenes para cualquier aclaración.
							</p>
							<p>
								Quedo a la orden 
								Saludos Cordiales 
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #10*/
/*Inicio de la Plantilla #11*/

elseif ($_GET['plantilla'] == 11) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[11] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
							<p style='text-align:justify;'>
								Le informamos en base a su solicitud:
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p>
								Le hacemos una cordial invitación a visitar nuestra página de internet en el siguiente link:  www.avanceytec.com.mx donde usted podrá ver todos los productos que manejamos, elegir  los de su preferencia y con gusto enviaremos la cotización correspondiente.
							</p>
							<p>
								O bien,  puede ponerse en contacto con nosotros a través de nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.), al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de venta podrá responder a todas sus preguntas.
							</p>
							<p>
								Estos son parte de la variedad de nuestros productos más novedosos, le invitamos a conocerlos:
							</p>	
							<p>
								<table class='table table-bordered table-striped' style='width:100%;'>
									<tr>
										<td>
											<img src='http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-01.jpg' alt='  class='img-responsive' style='width:100%;' />
										</td>
										<td>
											<img src='http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-02.jpg' alt='  class='img-responsive' style='width:100%;' />
										</td>
									</tr>
									<tr>
										<td>
											<img src='http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-03.jpg' alt='  class='img-responsive' style='width:100%;' />
										</td>
										<td>
											<img src='http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-04.jpg' alt='  class='img-responsive' style='width:100%;' />
										</td>
									</tr>
								</table>
							</p>
							<p>
								Sin más por el momento y esperando una pronto respuesta, quedo a la orden.
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg'>
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #11*/
/*Fin de la Plantilla #12*/

elseif ($_GET['plantilla'] == 12) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[12] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p>
		Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página, me permito canalizar su solicitud con la empresa GRAFIMUNDO ya que es quien puede atender a su solicitud de material por la ciudad en que se encuentra.
	</p>

	<p>
		Por lo tanto, para que se dé el seguimiento a su solicitud me permito copiar en este correo a la Sr. Luis Rodríguez, cuyos datos de contacto son los siguientes:
	</p>

	<p>
		E-mail: grafimundo@grafimundo.com.pe <br>
		Web site: http://www.grafimundo.com.pe
	</p>

	<p>
		Agradeciendo de antemano su atención, quedo a sus órdenes para cualquier duda o aclaración,
	</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."
							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #12*/
/*Inicio de la Plantilla #13*/

elseif ($_GET['plantilla'] == 13) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[1] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>

							<p style='text-align:justify;'>
								Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web. Me permito canalizar su solicitud con la empresa <b>GRIMCO</b> quienes amablemente atenderán su solicitud esto debido al País donde ustedes se encuentran.
							</p>
							<p>
								Por lo tanto, para que se dé el debido seguimiento a su solicitud me permito copiar en este correo los datos de contacto de esta Empresa. 
							</p>
							<p>
								<table>
									<tr>
										<th style='text-align:left;'>E-mail:</th>
										<td style='text-align:left;'>
											<a href='mailto:shelms@grimco.com'>shelms@grimco.com</a>
										</td>
									</tr>
									<tr>
										<th style='text-align:left;'>Web site:</th>
										<td style='text-align:left;'>
											<a href='http://www.grimco.com'>http://www.grimco.com</a>
										</td>
									</tr>
								</table>
							</p>
							<p>
								Agradeciendo de antemano su atención, quedo a sus órdenes para cualquier duda o aclaración,
							</p>
							<p>
								Quedo a la orden <br>
								Saludos Cordiales 
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."

							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #13*/
/*Inicio de la Plantilla #14*/

elseif ($_GET['plantilla'] == 14) {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[1] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
						
							<p style='text-align:justify;'>
								Agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web nos permitimos enviarle la información solicitada y una cotización con los  precios vigentes. Anexamos formato de registro para en caso de vernos favorecidos con su preferencia darlo de alta y con esto pueda gozar de algunos privilegios.
							</p>
							<p style='text-align:justify;'>
								Para mayor información al respecto de (" .$equipodeinteres ."), puede visitar nuestra página en el siguiente link: <a href='http://avanceytec.com.mx/busqueda.php?cx=014313635730003193707%3Akuuxljthx-w&cof=FORID%3A9&ie=UTF-8&q=" . $equipodeinteres . "&sa=+Buscar+'>".  $equipodeinteres . "</a>
							</p>
							<p style='text-align:justify;'>
								Le informamos que contamos  con tarifas especiales y convenios en paqueterías Nacionales  para hacerle llegar su material, contamos con las siguientes formas de pago: Depósito bancario o transferencia electrónica para su comodidad. 
							</p>
							<p style='text-align:justify;'>
								Esperando que la presente sea de su agrado, ponemos a su disposición nuestro <b>Centro de Atención Telefónica</b> en un horario de <b>Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)</b> Telefono lada sin costo 614 4 32 61 00  donde uno de nuestros asesores podrá atenderlo con gusto. 
							</p>
							<p style='text-align:justify;'>
								Quedamos a la orden.
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."

							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}/*Fin de la Plantilla #14*/

	/* Ventas Campo */

elseif ($_GET['plantilla'] == 'vc0') {
	$mail->Body = "<table width='100%'>
		<tr>
			<td style='text-align:center;'>
				<center>

				<table width='800' cellspacing='10' border='0'>
					<tr>
						<td style='background-color:Gray; color:White; font-family:arial; '>
							" . $arrayTitle[1] . "
						</td>
					</tr>
					<tr>
						<td style='font-family:arial; text-align:left;'>
							<p><strong>Estimado</strong> " .$plantilla_nombre .":</p>
						
							<p style='text-align:justify;'>
								Nos permitimos presentarnos ante ustedes
							</p>
							<p style='text-align:justify;'>
								Avance y Tecnología en Plásticos es una Empresa 100% Mexicana que se distingue y caracteriza por   estar siempre  a la vanguardia  en las últimas Tecnologías e Innovaciones para los mercados de Imagen Gráfica, Arquitectura, Decoración, Manualidades, entre otros, ofreciendo a nuestros  clientes productos de alta calidad variedad,  por lo cual somos el más importante distribuidor de marcas reconocidas a nivel Internacional  tales como: <b>3M, Avery, Plastiglass,  Reflectiv, Cooley Signs Systems, Oracal, Graphtec, Roland, Orionjet y más…</b>
							</p>
							<p style='text-align:justify;'>
								Actualmente con  18 centros de distribución en el País, contando con <b>26 años de Experiencia y Servicio</b> en el mercado, así como un grupo de Asesores Especializados y un  Equipo de Soporte Técnico,  siempre al pendiente de nuestros clientes.
							</p>
							<p style='text-align:justify;'>
								Quedamos a sus atentas órdenes y agradecemos  su atención al presente, no sin antes haciéndole una cordial invitación a visitar nuestro sitio web www.avanceytec.com.mx donde estamos seguros encontrará  soluciones y oportunidades de Negocio para su Empresa.
							</p> 
							<p style='text-align:justify;'>
								<b>
									Quedo a sus atentas ordenes
									Saludos Cordiales 
								</b>
							</p>

							<p style='text-align:justify;'>
								" .$plantilla_comentariosplantilla ."
							</p>
							<p style='text-align:justify;'>
								" .$plantilla_adjuntos ."

							</p>
							<p style='text-align:center;'>
								<img src='http://avanceytec.com.mx/apps/crm2/img/firmas/" . $usuario . ".jpg' >
							</p>
						</td>
					</tr>
				</table>
				
				<center>
			</td>
		</tr>
	</table>";
}

/*

	else {

		if ($_GET['plantilla'] == 'prueba') {
			$para = "auxdiseno@avanceytec.com.mx";
		}

		else {
			$para = "$plantilla_email";	
		}
	}

	
?>
<script>
	enviado();
</script>
<?php	
	$_SESSION['correo_enviado'] = 'ok';

	mail($para, $asunto,utf8_decode($mensaje), $header); 



	# TERMINA ENVIO




	header("Location: cliente.php?id=$id");
	*/
$mail->CharSet = 'UTF-8';
//Enviamos el correo
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
	header("Location: cliente.php?id=$id");
}


}


?>