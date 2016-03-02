<?php
# Modelo para conectarse a la base de datos
# Sistema: Todos

$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

# Modelo para registrar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["nombre_equipo"])) {
	$id = 0;
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$nombre = $_POST["nombre_equipo"];
	$var1 = $_POST["var1"];
	$fechayhora = $_POST["fechayhora"];
	
	$sql = "INSERT INTO ecrm_equipos_data2 (id,marca,modelo,nombre,var1,fechayhora)";
	$sql.= "VALUES ('".$id."','".$marca."','".$modelo."','".$nombre."','".$var1."','".$fechayhora."')";
	
	mysql_query($sql, $conexion);
	
}

# Modelo para actualizar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["u_nombre_equipo"])) {
	$id = $_POST["u_id"];
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$nombre = $_POST["u_nombre_equipo"];
	$var1 = $_POST["var1"];
	$fechayhora = $_POST["fechayhora"];
	
	$sql = "UPDATE ecrm_equipos_data2 SET marca='$marca',modelo='$modelo',nombre='$nombre',var1='$var1',fechayhora='$fechayhora' WHERE id = $id";
    
	mysql_query($sql, $conexion);
}

# Modelo para eliminar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if ($_POST["confirmar"] == 'Aceptar') {
	
	$id = $_POST["id"];
	
	$sql = "DELETE FROM ecrm_equipos_data2 WHERE id = $id";
    
	mysql_query($sql, $conexion);
}	
else {}




?>