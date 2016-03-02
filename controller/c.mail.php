<?php

if (isset($_POST["destinatario"])) {

/*
	$destinatario = $_POST["destinatario"];
	$asunto = $_POST["asunto"];
	$comentario = $_POST["comentario"];
	
	$remitenteNombre = $_POST["remitenteNombre"];
	$remitenteCorreo = $_POST["remitenteCorreo"];

	include("class.phpmailer.php");
	include("class.smtp.php");
	  
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "$remitenteCorreo";
	$mail->Password = "GA647DP3972";
	
	$mail->From = "$remitenteCorreo";
	$mail->FromName = "$remitenteNombre";
	$mail->Subject = "$asunto";
	$mail->AltBody = "$comentario\n.";
	$mail->MsgHTML("$comentario<br>.");
	$mail->AddAttachment("files/files.zip");
	$mail->AddAttachment("files/img03.jpg");
	$mail->AddAddress("$destinatario", "Destinatario");
	$mail->IsHTML(true);
	  
	if(!$mail->Send()) {
	echo "Error: " . $mail->ErrorInfo;
	} else {
	echo "Mensaje enviado correctamente";
	}
*/

	$destinatario = $_POST["destinatario"];
	$asunto = $_POST["asunto"];
	$comentario = $_POST["comentario"];
	
	$remitenteNombre = $_POST["remitenteNombre"];
	$remitenteCorreo = $_POST["remitenteCorreo"];
	
	$header = "From: " . $remitenteCorreo . " \r\n"; 
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	# $header .= "Content-Type: text/plain";
	$header .= "Content-Type: text/html"; 
	$mensaje .= " " . $comentario . " \r\n";
	$para = "$destinatario";

	$asunto = ''.$asunto.'.';
	mail($para, $asunto,utf8_decode($mensaje), $header); 
}

?>