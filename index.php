<?php 
	session_start();

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		
		$ip = $_SERVER['HTTP_CLIENT_IP'];

	} 

	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} 

	else {

		$ip = $_SERVER['REMOTE_ADDR'];

	}

$aguascalientes = '201.116.239.98';
$chihuahua = '201.174.26.110';
$culiacan = '187.141.136.34';
$durango = '187.216.28.18';
$guadalajara = '201.116.197.66';
$hermosillo = '187.216.116.242';
$juarez = '187.141.160.114';
$leon = '189.254.234.226';
$mexicali = '201.171.244.202';
$monterrey = '201.144.184.178';
$obregón = '187.216.77.194';
$puebla = '187.217.112.66';
$querétaro = '187.210.127.18';
$saltillo = '187.141.229.50';
$sanluispotosi = '187.216.63.242';
$tijuana = '189.223.119.124';
$torreon = '187.216.28.34';
$veracruz = '187.217.113.50';

	if ($ip == $aguascalientes OR $ip == $chihuahua OR $ip == $culiacan OR $ip == $durango OR $ip == $guadalajara OR $ip == $hermosillo OR $ip == $juarez OR $ip == $leon OR $ip == $mexicali OR $ip == $monterrey OR $ip == $obregón OR $ip == $puebla OR $ip == $querétaro OR $ip == $saltillo OR $ip == $sanluispotosi OR $ip == $tijuana OR $ip == $torreon OR $ip == $veracruz) {
#	if ($ip != $chihuahua) {
		
		if ($_SESSION['intranet_tkn'] == 1) {
			header('location:login.php');
		}
		
		else {
			header("location:http://avanceytec.com.mx/i");		
		}

		

	}

	else {

function dameURL(){
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}

	$conexion = mysql_connect("localhost", "KF42FS89JK3", "89jk35kF42fs") or trigger_error(mysql_error(),E_USER_ERROR);
	mysql_select_db("portal", $conexion);
	mysql_query("SET NAMES 'utf8'");
	
	$dte = date(ymdhia);
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$segundo = date(s);
	$ampm = date(a);
		
	$id = 0;
	$usuario = '';
	$ip;
	$url = dameURL();
	$fecha = ''.$ano.':'.$mes.':'.$dia.'';
	$hora = ''.$hora.':'.$minuto.':'.$segundo.'';

	$sql = "INSERT INTO semilogs (id,usuario,ip,url,fecha,hora)";
	$sql.= "VALUES ('".$id."','".$usuario."','".$ip."','".$url."',now(),'".$hora."')";

	mysql_query($sql, $conexion);
		
		header("location:http://avanceytec.com.mx/i");
		# header("location:z.php");
	}
?>