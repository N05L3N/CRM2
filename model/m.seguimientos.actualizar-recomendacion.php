<?php
$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

$user = $_SESSION["usu"];
$fechadia = $_POST["fechadia"];
$fechames = $_POST["fechames"];
$fechaano = $_POST["fechaano"];

$fechadiaprox = $_POST["fechadiaprox"];
$fechamesprox = $_POST["fechamesprox"];
$fechaanoprox = $_POST["fechaanoprox"];




$numerodefactura = $_POST["numerodefactura"];

$idedit = $_SESSION["idedit"];

if (isset($_POST["estadodeventa"])) {

	$id_comentarios_vryg = 0;
	$id_seguimiento = $idedit;
	#$usuario = $_POST["usuario"];
	$usuario = $_SESSION["usuario"];
	$termometro = $_POST["termometro"];
	$estadodeventa = $_POST["estadodeventa"];
	$comentariovendedor = $_POST["comentariovendedor"];
	$num_factura = $_POST["num_factura"];
	#$fechaasignacion = $_POST["fechaasignacion"];	
	#$horaasignacion = $_POST["horaasignacion"];
	$fechaasignacion = '0000-00-00';	
	$horaasignacion = 'a';
	$dte = date(ymdhis);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
	$horarespuesta = $_POST["horarespuesta"];
	$fechaproxima = ''.$fechaanoprox.'-'.$fechamesprox.'-'.$fechadiaprox.'';

	$sql = "INSERT INTO ecrm_comentarios_vryg (id_comentarios_vryg,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
    	$sql.= "VALUES ('".$id_comentarios_vryg."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
   
	#$sql = "UPDATE eqasignacion SET estadodeventa='$estadodeventa',comentariovendedor='$comentariovendedor',factura='$numerodefactura',fecharespuesta='$fecharespuesta',horarespuesta='$horarespuesta' WHERE asignacion=$idedit;";
	#$sql = "UPDATE eqasignacion SET estadodeventa='$estadodeventa',comentariovendedor='$comentariovendedor',factura='$numerodefactura',fecharespuesta='$fecharespuesta',horarespuesta='$horarespuesta' WHERE asignacion=$idedit;";

	mysql_query($sql, $conexion);
	$status = "ok";
	
}

# Variables
$status = "";
$im1 = $_SESSION["im1"];
#$idedit = $_SESSION["idedit"];
$conf = 'test';

?>