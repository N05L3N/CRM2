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

if (isset($_POST["asignadoa"])) {

	$id_comentarios_vryg = 0;
	$id_seguimiento = $idedit;
	$asignadoa = $_POST["asignadoa"];
	$dte = date(ymdhis);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$horaasignacion = ''.$hora.''.$minuto.'';
	$fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
	$fechaasignacion = ''.$ano.''.$mes.''.$dia.'';
	$formulario = 'ADM';
	$horarespuesta = $_POST["horarespuesta"];
	$fechaproxima = ''.$fechaanoprox.'-'.$fechamesprox.'-'.$fechadiaprox.'';

	#$sql = "UPDATE `jcnoble`.`formrecomiendaygana` SET `asignadoa`='$asignadoa', `fechaasignacion`='$fechaasignacion', `formulario`='$formulario' WHERE `idformrecomiendaygana`='$idedit';";
	$sql = "UPDATE `jcnoble`.`formrecomiendaygana` SET `asignadoa`='$asignadoa', `fechaasignacion`='$fechaasignacion', `formulario`='$formulario' WHERE `idformrecomiendaygana`='1369';";

	#$sql = "INSERT INTO ecrm_comentarios_vryg (id_comentarios_vryg,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
    	#$sql.= "VALUES ('".$id_comentarios_vryg."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
   
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