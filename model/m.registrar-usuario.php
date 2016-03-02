<?php

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);
	mysql_query("SET NAMES 'utf8'");

	$sql_nombre1 = $_POST["nombre1"];
	$sql_nombre2 = $_POST["nombre2"];
	$sql_apellido1 = $_POST["apellido1"];
	$sql_apellido2 = $_POST["apellido2"];
	$sql_usuario = $_POST["usuario"];
	$sql_clave = $_POST["clave"];
	$sql_correo = $_POST["correo"];
	$sql_departamento = $_POST["departamento"];
	$sql_tipo = $_POST["tipo"];

if (isset($_POST["nombre1"])) {

	$id_usuario = 0;

	$sql = "INSERT INTO usuarios (id_usuario,nombre1,nombre2,apellido1,apellido2,usuario,clave,correo,departamento,tipo)";
	$sql.= "VALUES ('".$sql_id_usuario."','".$sql_nombre1."','".$sql_nombre2."','".$sql_apellido1."','".$sql_apellido2."','".$sql_usuario."','".$sql_clave."','".$sql_correo."','".$sql_departamento."','".$sql_tipo."')";
	
	if ($_SESSION['usuario'] == 'amariscal') {
		mysql_query($sql, $conexion);	
	}
	else {

	}
	
}

if (isset($_POST["u_nombre1"])) {
	
	$sql_id_usuario = $_POST["u_id_usuario"];
	$sql_nombre1 = $_POST["u_nombre1"];
	
	$sql = "UPDATE usuarios SET nombre1 = '$sql_nombre1', nombre2 = '$sql_nombre2' , apellido1 = '$sql_apellido1' , apellido2 = '$sql_apellido2' , usuario = '$sql_usuario' , clave = '$sql_clave' , correo = '$sql_correo' WHERE id_usuario = $sql_id_usuario";
	mysql_query($sql, $conexion);
	# echo '<pre style="margin:auto; width:50%; background-color:black; color: yellow;">' . $sql . '</pre>';
}

if (isset($_POST["d_confirmar"])) {
	
	$sql_id_usuario = $_POST["d_id_usuario"];
	
	$sql = "DELETE FROM usuarios WHERE id_usuario = $sql_id_usuario";
    
	mysql_query($sql, $conexion);
}

# RYG

if (isset($_POST["nombre1_ryg"])) {
	$id_usuario = 0;
	$nombre1 = $_POST["nombre1_ryg"];
	$nombre2 = $_POST["nombre2_ryg"];
	$apellido1 = $_POST["apellido1_ryg"];
	$apellido2 = $_POST["apellido2_ryg"];
	$usuario = $_POST["usuario_ryg"];
	$clave = $_POST["clave_ryg"];
	$correo = $_POST["correo_ryg"];
	$tipo = $_POST["tipo_ryg"];
	
	$sql = "INSERT INTO usuarios_ryg (id_usuario,nombre1,nombre2,apellido1,apellido2,usuario,clave,correo,tipo)";
	$sql.= "VALUES ('".$id_usuario."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$usuario."','".$clave."','".$correo."','".$tipo."')";
	
	mysql_query($sql, $conexion);
}

if (isset($_POST["u_nombre1_ryg"])) {
	$id_usuario = $_POST["u_id_usuario_ryg"];
	$nombre1 = $_POST["u_nombre1_ryg"];
	$nombre2 = $_POST["u_nombre2_ryg"];
	$apellido1 = $_POST["u_apellido1_ryg"];
	$apellido2 = $_POST["u_apellido2_ryg"];
	$usuario = $_POST["u_usuario_ryg"];
	$clave = $_POST["u_clave_ryg"];
	$correo = $_POST["u_correo_ryg"];
	$tipo = $_POST["u_tipo_ryg"];
	
	$sql = "UPDATE usuarios_ryg SET nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',usuario='$usuario',clave='$clave',correo='$correo',tipo='$tipo' WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
}

if (isset($_POST["d_confirmar_ryg"])) {
	$id_usuario = $_POST["d_id_usuario_ryg"];
	
	$sql = "DELETE FROM usuarios_ryg WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
}




?>