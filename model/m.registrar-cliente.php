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

	$id = 0;
	$nombre = str_replace("'","",$_POST["nombre"]);
	$contacto2 = str_replace("'","",$_POST["contacto2"]);
	$contacto3 = str_replace("'","",$_POST["contacto3"]);
	$direccion = str_replace("'","",$_POST["direccion"]);
	$ciudad = str_replace("'","",$_POST["ciudad"]);
	$pais = str_replace("'","",$_POST["pais"]);
	$estado = str_replace("'","",$_POST["estado"]);
	$lada = str_replace("'","",$_POST["lada"]);
	$telefono = str_replace("'","",$_POST["telefono"]);
	$email = str_replace("'","",$_POST["email"]);
	$medio = str_replace("'","",$_POST["medio"]);
	$giro = str_replace("'","",$_POST["giro"]);
	$comentarios = str_replace("'","",$_POST["comentarios"]);
	#
	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';
	$Hora = ''.$hora.':'.$minuto.' '.$ampm.'';
	$formulario = 'CRM';
	$equipodeinteres = str_replace("'","",$_POST["equipodeinteres"]);
	$comeqenatp = $_POST["comeqenatp"];
	$eqclosqcuenta = $_POST["eqclosqcuenta"];
	$antacteq = $_POST["antacteq"];
	$escliente = $_POST["escliente"];
	$numerodecliente = $_POST["numerodecliente"];
	$motivodeconsulta = $_POST["motivodeconsulta"];
	$empresa = str_replace("'","",$_POST["empresa"]);
	$nombre_recomendador = $_POST["nombre_recomendador"];
	$sucursal_recomendador = $_POST["sucursal_recomendador"];

	$comentario_vendedor = $_POST["comentario_vendedor"];

	$asignadoa = $_POST["usuario"];
	$fechadecontacto = $_POST["fechadecontacto"];
	$fechaasignacion = ''.$ano.'-'.$mes.'-'.$dia.'';
	$fechaventa = $_POST["fechaventa"];
	$estadodeventa = $_POST["estadodeventa"];
	$numerodefactura = $_POST["numerodefactura"];
	$usuario = $_POST["usuario"];
	
	$equipos_marca = $_POST["marca"];
	$equipos_equipo = $_POST["equipo"];
	$equipos_precio = $_POST["precio"];

	# Ventas Campo
	$id_comentarios_vc_id_comentarios_vc = $_POST['id_comentarios_vc'];
	$id_comentarios_vc_id_seguimiento = $_POST['id_seguimiento'];
	$id_comentarios_vc_usuario = $_POST['usuario'];
	$id_comentarios_vc_productosofrecidos = $equipodeinteres;
	$id_comentarios_vc_duracionenvisita = $_POST['duracionenvisita'];
	$id_comentarios_vc_fechaprogramadaparavisita = $_POST['fechaprogramadaparavisita'];
	$id_comentarios_vc_horadevisita = $_POST['horadevisita'];
	$id_comentarios_vc_ventarealizada = $_POST['ventarealizada'];
	$id_comentarios_vc_numerodeorden = $_POST['numerodeorden'];
	$id_comentarios_vc_numerodefactura = $_POST['numerodefactura'];
	$id_comentarios_vc_cantidadfacturada = $_POST['cantidadfacturada'];
	$id_comentarios_vc_proximavisita = $_POST['proximavisita'];
	$id_comentarios_vc_fecha = $_POST['fecha'];

	if ($usuario  == 'directo') {
		$formulario = 'CRM-DIRECTO';
	}
	else {

	}

	$formulario = 'CRM';

	$sql = "INSERT INTO contacto (id,nombre,contacto2,contacto3,direccion,ciudad,pais,estado,lada,telefono,email,medio,giro,comentarios,fecha,Hora,formulario,equipodeinteres,comeqenatp,eqclosqcuenta,antacteq,escliente,numerodecliente,motivodeconsulta,empresa,nombre_recomendador,sucursal_recomendador,comentario_vendedor,asignadoa,fechadecontacto,fechaasignacion,fechaventa,estadodeventa,numerodefactura,usuario) ";
	$sql.= "VALUES ('".$id."', '".$nombre."', '".$contacto2."', '".$contacto3."', '".$direccion."', '".$ciudad."', '".$pais."', '".$estado."', '".$lada."', '".$telefono."', '".$email."', '".$medio."', '".$giro."', '".$comentarios."', '".$fecha."', '".$Hora."', '".$formulario."', '".$equipodeinteres."', '".$comeqenatp."', '".$eqclosqcuenta."', '".$antacteq."', '".$escliente."', '".$numerodecliente."', '".$motivodeconsulta."', '".$empresa."', '".$nombre_recomendador."', '".$sucursal_recomendador."', '".$comentario_vendedor."', '".$asignadoa."', '".$fechadecontacto."', '".$fechaasignacion."', '".$fechaventa."', '".$estadodeventa."', '".$numerodefactura."', '".$usuario."')";

	mysql_query($sql, $conexion);

	$resultado = mysql_query("SELECT * FROM contacto WHERE nombre = '$nombre' ORDER BY id DESC limit 1");
	$i_resultado = 0;
	
	while ($row_resultado = mysql_fetch_array($resultado)) {
		
		if ($i_resultado > 0){

		}

		$id_resultado = $row_resultado['id'];

		$i_resultado++; 
	
	}

	/* <Doble Insert para el Equipo / Producto */

	$sql2 = "INSERT INTO ecrm_equipos_data (id_ecrm_equipos_data,id_seguimiento,equipo,precio,marca,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
	$sql2.= "VALUES ('".$id_ecrm_equipos_data."','".$id_resultado."','".$equipos_equipo."','".$equipos_precio."','".$equipos_marca."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')"; 
	mysql_query($sql2, $conexion);

	/* >Doble Insert para el Equipo / Producto */


	/* <Doble Insert para el Ventas Campo / Producto */

	$sql_ecrm_comentarios_vc = "INSERT INTO ecrm_comentarios_vc (id_comentarios_vc,id_seguimiento,usuario,productosofrecidos,duracionenvisita,fechaprogramadaparavisita,horadevisita,ventarealizada,numerodeorden,numerodefactura,cantidadfacturada,proximavisita,fecha)";
	$sql_ecrm_comentarios_vc.= "VALUES ('".$id_comentarios_vc_id_comentarios_vc."','".$id_resultado."','".$id_comentarios_vc_usuario."','".$id_comentarios_vc_productosofrecidos."','".$id_comentarios_vc_duracionenvisita."','".$id_comentarios_vc_fechaprogramadaparavisita."','".$id_comentarios_vc_horadevisita."','".$id_comentarios_vc_ventarealizada."','".$id_comentarios_vc_numerodeorden."','".$id_comentarios_vc_numerodefactura."','".$id_comentarios_vc_cantidadfacturada."','".$id_comentarios_vc_proximavisita."',NOW())";

	if ($id_comentarios_vc_productosofrecidos != '') {
		mysql_query($sql_ecrm_comentarios_vc, $conexion);
	}
	else {

	}

	/* >Doble Insert para el Ventas Campo / Producto */


	$result_registrar_cliente = mysql_query("SELECT id FROM contacto ORDER BY id desc limit 0,1");
	mysql_query ("SET NAMES 'utf8'");


	$i = 0;
	
	while ($row_registrar_cliente = mysql_fetch_array($result_registrar_cliente)) {
	
		if ($i > 0) {
	
	}
	
	$id = $row_registrar_cliente['id'];


	/* Triple Insert */

	$id_comentarios_v = 0;
	$id_seguimiento = $id;
	$usuario = $_SESSION["usuario"];
	$termometro = $_POST["termometro"];
	$estadodeventa = $_POST["estadodeventa"];
	$estadodeventa = 'Pendiente';
	$comentariovendedor = 'Dar seguimiento';
	$num_factura = $_POST["num_factura"];
	$fechaasignacion = '2014-08-28';  
	$horaasignacion = 'a';
	$dte = date(ymdhis);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
	$horarespuesta = $_POST["horarespuesta"];
	$fechaproxima = ''.$ano.''.$mes.''.$dia.'';

	$sql3 = "INSERT INTO ecrm_comentarios_v (id_comentarios_v,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
	$sql3.= "VALUES ('".$id_comentarios_v."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
	mysql_query($sql3, $conexion);

	# $sql4 = "UPDATE `jcnoble`.`ecrm_comentarios_v` SET `horaasignacion`='ok' WHERE `id_seguimiento`='$id_seguimiento';";
	# mysql_query($sql4, $conexion);

	/* Triple Insert */

		if ($departamento == 'consumibles' OR $departamento == 'telemarketing' OR $departamento == 'ventascampo') {
	
			header("Location: cliente.php?id=$id");
	
		}
	
		else {

		}

		$i++;
	
	}



	if ($_POST['formulario'] == 'CRM : Facturado') {
		
		$id_seguimientoBLOCK = $_POST['id_seguimientoBLOCK'];

		$sqlBlock = "UPDATE jcnoble.ecrm_comentarios_v SET estadodeventa='facturado y clonado' WHERE id_seguimiento = '$id_seguimientoBLOCK' AND estadodeventa = 'facturado' AND horaasignacion = 'a';";
		mysql_query($sqlBlock, $conexion);

	}

	else {

	}



}

?>