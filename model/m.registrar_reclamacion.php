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

	$accionid = $_SESSION["accionid"];

# PASO #1

# Insertar
	if (isset($_POST["cliente"])) {

		$id_reclamaciones = 0;
		$id_reclamaciones = $_POST["id_reclamaciones"];
		$cliente = $_POST["cliente"];
		$numero_cliente = $_POST["numero_cliente"];
		$numero_factura = $_POST["numero_factura"];
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["ciudad"];
		$estado = $_POST["estado"];
		$cp = $_POST["cp"];
		$vendedor = $_POST["vendedor"];
		$telefono = $_POST["telefono"];
		$nombre_producto = $_POST["nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		$ubicacion_material = $_POST["ubicacion_material"];
		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];
		$descripcion_del_problema = $_POST["descripcion_del_problema"];
		$proveedor = $_POST["proveedor"];
		$costo = $_POST["costo"];
		$entrego = $_POST["entrego"];
		$fecha = $_POST["fecha"];
		$fecha_captura = ''.$ano.'-'.$mes.'-'.$dia.'';
		$hora_captura = ''.$hora.':'.$minuto.' '.$ampm.'';
		$usuario_captura = $_SESSION["usuario"];

		$sql = "INSERT INTO app_reclamaciones (id_reclamaciones,cliente,numero_cliente,numero_factura,direccion,ciudad,estado,cp,vendedor,telefono,nombre_producto,clave_producto,numero_lote,cantidad_material_defectuoso,ubicacion_material,pieza_stock,original_equipo,nombre_equipo,clave_sia,numero_serie,descripcion_del_problema,proveedor,costo,entrego,fecha,fecha_captura,hora_captura,usuario_captura)";
		$sql.= "VALUES ('".$id_reclamaciones."','".$cliente."','".$numero_cliente."','".$numero_factura."','".$direccion."','".$ciudad."','".$estado."','".$cp."','".$vendedor."','".$telefono."','".$nombre_producto."','".$clave_producto."','".$numero_lote."','".$cantidad_material_defectuoso."','".$ubicacion_material."','".$pieza_stock."','".$original_equipo."','".$nombre_equipo."','".$clave_sia."','".$numero_serie."','".$descripcion_del_problema."','".$proveedor."','".$costo."','".$entrego."','".$fecha."','".$fecha_captura."','".$hora_captura."','".$usuario_captura."')";

		mysql_query($sql, $conexion);

		$breadcrumb = 'step2';
		$_SESSION["breadcrumb"] = $breadcrumb;
		$_SESSION["step1"] = 'pass';
	
	}

	# Actualizar
	if (isset($_POST["u_cliente"])) {

		$id_reclamaciones = 0;
		$id_reclamaciones = $_POST["id_reclamaciones"];
		$cliente = $_POST["u_cliente"];
		$numero_cliente = $_POST["numero_cliente"];
		$numero_factura = $_POST["numero_factura"];
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["ciudad"];
		$estado = $_POST["estado"];
		$cp = $_POST["cp"];
		$vendedor = $_POST["vendedor"];
		$telefono = $_POST["telefono"];
		$nombre_producto = $_POST["nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		$ubicacion_material = $_POST["ubicacion_material"];
		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];
		$descripcion_del_problema = $_POST["descripcion_del_problema"];
		$proveedor = $_POST["proveedor"];
		$costo = $_POST["costo"];
		$entrego = $_POST["entrego"];
		$fecha = $_POST["fecha"];
		$fecha_captura = ''.$ano.'-'.$mes.'-'.$dia.'';
		$hora_captura = ''.$hora.':'.$minuto.' '.$ampm.'';
		$usuario_captura = $_SESSION["usuario"];

		$sql = "UPDATE `jcnoble`.`app_reclamaciones` SET `cliente`='$cliente', `numero_cliente`='$numero_cliente', `numero_factura`='$numero_factura', `direccion`='$direccion', `numero_factura`='$numero_factura', `ciudad`='$ciudad', `estado`='$estado', `cp`='$cp', `vendedor`='$vendedor', `telefono`='$telefono' WHERE `id_reclamaciones`='$accionid';";

		mysql_query($sql, $conexion);

		$breadcrumb = 'step2';
		$_SESSION["breadcrumb"] = $breadcrumb;
		$_SESSION["step1"] = 'pass';
	
	}


# DATOS

	# Insert Datos
	# Finalizar Paso

	if (isset($_POST["nombre_producto"])) {

		$id_datos = 0;
		$id_reclamaciones = $accionid;
		$id_control = $_POST["id_control"];
		$nombre_producto = $_POST["nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		$ubicacion_material_01 = $_POST["ubicacion_material_01"];
		$ubicacion_material_02 = $_POST["ubicacion_material_02"];
		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];

		$sql = "INSERT INTO app_reclamaciones_datos (id_datos,id_reclamaciones,id_control,nombre_producto,clave_producto,numero_lote,cantidad_material_defectuoso,ubicacion_material_01,ubicacion_material_02,pieza_stock,original_equipo,nombre_equipo,clave_sia,numero_serie)";
		$sql.= "VALUES ('".$id_datos."','".$id_reclamaciones."','".$id_control."','".$nombre_producto."','".$clave_producto."','".$numero_lote."','".$cantidad_material_defectuoso."','".$ubicacion_material_01."','".$ubicacion_material_02."','".$pieza_stock."','".$original_equipo."','".$nombre_equipo."','".$clave_sia."','".$numero_serie."')";

		mysql_query($sql, $conexion);

		$_SESSION["breadcrumb"] = 'step3';
		$_SESSION["step1"] = 'pass';
		$_SESSION["step2"] = 'pass';


		if ($_POST["id_control"] == '1') {
			$_SESSION["control_01"] = 'pass';
		}
		
		else if ($_POST["id_control"] == '2') {
			$_SESSION["control_02"] = 'pass';
		}

		else if ($_POST["id_control"] == '3') {
			$_SESSION["control_03"] = 'pass';
		}

	
	}

	# Insert Datos
	# Guardar y Continuar

	if (isset($_POST["gyc_nombre_producto"])) {

		$id_datos = 0;
		$id_reclamaciones = $accionid;
		$id_control = $_POST["id_control"];
		$nombre_producto = $_POST["gyc_nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		$ubicacion_material_01 = $_POST["ubicacion_material_01"];
		$ubicacion_material_02 = $_POST["ubicacion_material_02"];
		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];

		$sql = "INSERT INTO app_reclamaciones_datos (id_datos,id_reclamaciones,id_control,nombre_producto,clave_producto,numero_lote,cantidad_material_defectuoso,ubicacion_material_01,ubicacion_material_02,pieza_stock,original_equipo,nombre_equipo,clave_sia,numero_serie)";
		$sql.= "VALUES ('".$id_datos."','".$id_reclamaciones."','".$id_control."','".$nombre_producto."','".$clave_producto."','".$numero_lote."','".$cantidad_material_defectuoso."','".$ubicacion_material_01."','".$ubicacion_material_02."','".$pieza_stock."','".$original_equipo."','".$nombre_equipo."','".$clave_sia."','".$numero_serie."')";


		mysql_query($sql, $conexion);

		$breadcrumb = 'step2';
		$_SESSION["breadcrumb"] = $breadcrumb;
		$_SESSION["step1"] = 'pass';

		if ($_POST["id_control"] == '1') {
			$_SESSION["control_01"] = 'pass';
		}
		
		else if ($_POST["id_control"] == '2') {
			$_SESSION["control_02"] = 'pass';
		}

		else if ($_POST["id_control"] == '3') {
			$_SESSION["control_03"] = 'pass';
		}

		else if ($_POST["id_control"] == '4') {
			$_SESSION["control_04"] = 'pass';
		}

		else if ($_POST["id_control"] == '5') {
			$_SESSION["control_05"] = 'pass';
		}

		else if ($_POST["id_control"] == '6') {
			$_SESSION["control_06"] = 'pass';
		}

		else if ($_POST["id_control"] == '7') {
			$_SESSION["control_07"] = 'pass';
		}

		else if ($_POST["id_control"] == '8') {
			$_SESSION["control_08"] = 'pass';
		}

		else if ($_POST["id_control"] == '9') {
			$_SESSION["control_09"] = 'pass';
		}

		else if ($_POST["id_control"] == '10') {
			$_SESSION["control_10"] = 'pass';
		}
	
	}





	# Insert Datos
	# Guardar y Pasar

	if (isset($_POST["gyp_nombre_producto"])) {

		$id_datos = 0;
		$id_reclamaciones = $accionid;
		$id_control = $_POST["id_control"];
		$nombre_producto = $_POST["gyp_nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		
		$ubicacion_material_01 = $_POST["ubicacion_material_01"];
		$ubicacion_material_02 = $_POST["ubicacion_material_02"];

		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];

		$sql = "INSERT INTO app_reclamaciones_datos (id_datos,id_reclamaciones,id_control,nombre_producto,clave_producto,numero_lote,cantidad_material_defectuoso,ubicacion_material_01,ubicacion_material_02,pieza_stock,original_equipo,nombre_equipo,clave_sia,numero_serie)";
		$sql.= "VALUES ('".$id_datos."','".$id_reclamaciones."','".$id_control."','".$nombre_producto."','".$clave_producto."','".$numero_lote."','".$cantidad_material_defectuoso."','".$ubicacion_material_01."','".$ubicacion_material_02."','".$pieza_stock."','".$original_equipo."','".$nombre_equipo."','".$clave_sia."','".$numero_serie."')";


		mysql_query($sql, $conexion);

		$breadcrumb = 'step3';
		$_SESSION["breadcrumb"] = $breadcrumb;
		$_SESSION["step1"] = 'pass';
		$_SESSION["step2"] = 'pass';

		if ($_POST["id_control"] == '1') {
			$_SESSION["control_01"] = 'pass';
		}
		
		else if ($_POST["id_control"] == '2') {
			$_SESSION["control_02"] = 'pass';
		}

		else if ($_POST["id_control"] == '3') {
			$_SESSION["control_03"] = 'pass';
		}

		else if ($_POST["id_control"] == '4') {
			$_SESSION["control_04"] = 'pass';
		}

		else if ($_POST["id_control"] == '5') {
			$_SESSION["control_05"] = 'pass';
		}

		else if ($_POST["id_control"] == '6') {
			$_SESSION["control_06"] = 'pass';
		}

		else if ($_POST["id_control"] == '7') {
			$_SESSION["control_07"] = 'pass';
		}

		else if ($_POST["id_control"] == '8') {
			$_SESSION["control_08"] = 'pass';
		}

		else if ($_POST["id_control"] == '9') {
			$_SESSION["control_09"] = 'pass';
		}

		else if ($_POST["id_control"] == '10') {
			$_SESSION["control_10"] = 'pass';
		}
	
	}





		# Actualizar

	if (isset($_POST["u_nombre_producto"])) {

		$id_datos = 0;
		$id_reclamaciones = $accionid;
		$id_control = $_POST["id_control"];
		$nombre_producto = $_POST["u_nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		$ubicacion_material_01 = $_POST["ubicacion_material_01"];
		$ubicacion_material_02 = $_POST["ubicacion_material_02"];
		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];
		
		$sql = "UPDATE `jcnoble`.`app_reclamaciones_datos` SET `nombre_producto`='$nombre_producto', `clave_producto`='$clave_producto', `numero_lote`='$numero_lote', `cantidad_material_defectuoso`='$cantidad_material_defectuoso', `ubicacion_material_01`='$ubicacion_material_01',`ubicacion_material_02`='$ubicacion_material_02', `pieza_stock`='$pieza_stock', `original_equipo`='$original_equipo', `nombre_equipo`='$nombre_equipo', `clave_sia`='$clave_sia', `numero_serie`='$numero_serie' WHERE `id_reclamaciones`='$accionid' AND `id_control`='$id_control';";

		mysql_query($sql, $conexion);
	
	}

	# Actualizar y Continuar

	if (isset($_POST["ayc_nombre_producto"])) {

		$id_datos = 0;
		$id_reclamaciones = $accionid;
		$id_control = $_POST["id_control"];
		$nombre_producto = $_POST["ayc_nombre_producto"];
		$clave_producto = $_POST["clave_producto"];
		$numero_lote = $_POST["numero_lote"];
		$cantidad_material_defectuoso = $_POST["cantidad_material_defectuoso"];
		$ubicacion_material_01 = $_POST["ubicacion_material_01"];
		$ubicacion_material_02 = $_POST["ubicacion_material_02"];
		$pieza_stock = $_POST["pieza_stock"];
		$original_equipo = $_POST["original_equipo"];
		$nombre_equipo = $_POST["nombre_equipo"];
		$clave_sia = $_POST["clave_sia"];
		$numero_serie = $_POST["numero_serie"];
		
		$sql = "UPDATE `jcnoble`.`app_reclamaciones_datos` SET `nombre_producto`='$nombre_producto', `clave_producto`='$clave_producto', `numero_lote`='$numero_lote', `cantidad_material_defectuoso`='$cantidad_material_defectuoso', `ubicacion_material_01`='$ubicacion_material_01',`ubicacion_material_02`='$ubicacion_material_02', `pieza_stock`='$pieza_stock', `original_equipo`='$original_equipo', `nombre_equipo`='$nombre_equipo', `clave_sia`='$clave_sia', `numero_serie`='$numero_serie' WHERE `id_reclamaciones`='$accionid' AND `id_control`='$id_control';";
		
		#$sql = "INSERT INTO app_reclamaciones_datos (id_datos,id_reclamaciones,id_control,nombre_producto,clave_producto,numero_lote,cantidad_material_defectuoso,ubicacion_material_01,ubicacion_material_02,pieza_stock,original_equipo,nombre_equipo,clave_sia,numero_serie)";
		#$sql.= "VALUES ('".$id_datos."','".$id_reclamaciones."','".$id_control."','".$nombre_producto."','".$clave_producto."','".$numero_lote."','".$cantidad_material_defectuoso."','".$ubicacion_material_01."','".$ubicacion_material_02."','".$pieza_stock."','".$original_equipo."','".$nombre_equipo."','".$clave_sia."','".$numero_serie."')";

		mysql_query($sql, $conexion);
		
		$_SESSION["breadcrumb"] = 'step3';
		$_SESSION["step1"] = 'pass';
		$_SESSION["step2"] = 'pass';


		if ($_POST["id_control"] == '1') {
			$_SESSION["control_01"] = 'pass';
		}
		
		else if ($_POST["id_control"] == '2') {
			$_SESSION["control_02"] = 'pass';
		}

		else if ($_POST["id_control"] == '3') {
			$_SESSION["control_03"] = 'pass';
		}

		else if ($_POST["id_control"] == '4') {
			$_SESSION["control_04"] = 'pass';
		}

		else if ($_POST["id_control"] == '5') {
			$_SESSION["control_05"] = 'pass';
		}

		else if ($_POST["id_control"] == '6') {
			$_SESSION["control_06"] = 'pass';
		}

		else if ($_POST["id_control"] == '7') {
			$_SESSION["control_07"] = 'pass';
		}

		else if ($_POST["id_control"] == '8') {
			$_SESSION["control_08"] = 'pass';
		}

		else if ($_POST["id_control"] == '9') {
			$_SESSION["control_09"] = 'pass';
		}

		else if ($_POST["id_control"] == '10') {
			$_SESSION["control_10"] = 'pass';
		}

	}



# PASO 3



# Insertar
	if (isset($_POST["descripcion_del_problema"])) {

		$id_reclamaciones = $accionid;
	
		$descripcion_del_problema = $_POST["descripcion_del_problema"];


		$sql = "UPDATE `jcnoble`.`app_reclamaciones` SET `descripcion_del_problema`='$descripcion_del_problema' WHERE `id_reclamaciones`='$id_reclamaciones';";
		#UPDATE `jcnoble`.`app_reclamaciones` SET `descripcion_del_problema`='HOLA' WHERE `id_reclamaciones`='27';

		mysql_query($sql, $conexion);

		$_SESSION["breadcrumb"] = 'step4';
		$_SESSION["step1"] = 'pass';
		$_SESSION["step2"] = 'pass';
		$_SESSION["step3"] = 'pass';
	
	}

# PASO #4

	if (isset($_POST["p4_1"])) {

		$id_reclamaciones = $accionid;

		$_SESSION["breadcrumb"] = 'step5';
		$_SESSION["step4"] = 'pass';
	
	}

# PASO #5

# Insertar
	if (isset($_POST["proveedor"])) {

		$id_reclamaciones = $accionid;
	
		$proveedor = $_POST["proveedor"];
		$costo = $_POST["costo"];
		$entrego = $_POST["entrego"];
		$fecha = $_POST["fecha"];


		$sql = "UPDATE `jcnoble`.`app_reclamaciones` SET `proveedor`='$proveedor',`costo`='$costo',`entrego`='$entrego',`fecha`='$fecha' WHERE `id_reclamaciones`='$id_reclamaciones';";

		mysql_query($sql, $conexion);

		$_SESSION["breadcrumb"] = 'step5';
		$_SESSION["step5"] = 'pass';
	
	}

	if (isset($_POST["u_proveedor"])) {

		$id_reclamaciones = $accionid;
	
		$proveedor = $_POST["u_proveedor"];
		$costo = $_POST["costo"];
		$entrego = $_POST["entrego"];
		$fecha = $_POST["fecha"];


		$sql = "UPDATE `jcnoble`.`app_reclamaciones` SET `proveedor`='$proveedor',`costo`='$costo',`entrego`='$entrego',`fecha`='$fecha' WHERE `id_reclamaciones`='$id_reclamaciones';";

		mysql_query($sql, $conexion);

		$_SESSION["breadcrumb"] = 'step5';
		$_SESSION["step5"] = 'pass';
	
	}	


?>