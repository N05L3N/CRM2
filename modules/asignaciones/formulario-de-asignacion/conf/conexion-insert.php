<?php
	#$conexion = mysql_connect("localhost", "root", "") or trigger_error(mysql_error(),E_USER_ERROR); 
	$conexion = mysql_connect("localhost", "jcnoble", "4tp2009jk") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("jcnoble", $conexion); 
?>