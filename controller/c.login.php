<?php
$conexion = mysql_connect("localhost", "jcnoble", "4tp2009jk") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("jcnoble", $conexion); 



function quitar($mensaje)
{
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}

if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{
	$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
	$password = $_POST["password"];
	$result = mysql_query('SELECT * FROM usuarios WHERE usuario=\''.$usuario.'\'');
	if($row = mysql_fetch_array($result)){
		if($row["clave"] == $password){
			
			$_SESSION["usuario"] = $usuario;
			$_SESSION["tipo"] = $row["tipo"];
			$_SESSION["departamento"] = $row["departamento"];
			$_SESSION["user.nombre"] = $row["nombre1"];
			$_SESSION["user.apellido"] = $row["apellido1"];
			$_SESSION["user.correo"] = $row["correo"];
			$_SESSION["tkn"] = 'CRM';
				
				if ($row["tipo"] != 'vendedor') {
					if ($row["usuario"] == 'irodriguez' OR $row["usuario"] == 'atptelemarketing' OR $row["usuario"] == 'coordinadorventas1' OR $row["usuario"] == 'coordinadorventas2' OR $row["usuario"] == 'jcnoble' OR $row["usuario"] == 'esmex01' OR $row["usuario"] == 'esaguascalientes01' OR $row["usuario"] == 'esguadalajara01') {
						# header('location:consultas.php');
						header("location:1.reportes?u=$usuario");
					}
					else {
						header('location:panel.php');
					}
				}
				else {
					if ($row["usuario"] == 'rgonzalez' OR $row["usuario"] == 'servicioalcliente') {
						header('location:../cs/?v=c');
						# R8250
						# SAC15
					}
					else {
						header('location:late.php');
					}
				}
			 
			
			
		}else{
			header('location:login.php');
			$_SESSION["error"] = 'Contraseña incorrecta';
		}
	}else{
		echo 'el e-mail ingresado no existe.';
	}
	mysql_free_result($result);
}else{
	echo '';
}
mysql_close();

?>