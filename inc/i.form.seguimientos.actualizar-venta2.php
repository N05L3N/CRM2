<?php

	$userUsuario = $_SESSION["usuario"];
	$userTipo = $_SESSION["tipo"];
	$userDepartamento = $_SESSION["departamento"];

	$id_seguimientoBLOCK = $_GET['id'];
	
	if ($userTipo != 'vendedor') {
		# Formulario de Administrador
		include('inc/i.form.seguimientos.actualizar-venta2-1verde.06.php');
	}
	else {
		# Formulario de Vendedor
		include('inc/i.form.seguimientos.actualizar-venta2-1verde.06.php');		
	}
	
/*

	$resultBLOCK = mysql_query("SELECT estadodeventa FROM ecrm_comentarios_v WHERE id_seguimiento = '$id_seguimientoBLOCK' AND horaasignacion != 'ok' ORDER BY id_comentarios_v desc limit 0,1");
	$iBLOCK = 0;

		while ($rowBLOCK = mysql_fetch_array($resultBLOCK)) {
			if ($iBLOCK > 0) {}

				$estadodeventaBLOCK = $rowBLOCK['estadodeventa'];

				$iBLOCK++;

		}

		if ($estadodeventaBLOCK == 'facturado') {
			
			#if ($userUsuario == "rgonzalez" OR $userDepartamento == "equipo") {
			if ($userUsuario == "rgonzalez" OR $userUsuario == "coordinadorventas1" OR $userUsuario == "coordinadorventas2" OR $userUsuario == "jcnoble" OR $userUsuario == "amariscal") {
				
				# Formulario de Administrador
				include('inc/i.form.seguimientos.actualizar-venta2-1verde.06.php');

			}

			else {

				# Botón crear nuevo folio
				include('inc/i.form.seguimientos.actualizar-venta2-1verde.05.php');

			}

		}

		else if ($estadodeventaBLOCK == 'facturado y clonado') {

		}

		else {

			# Formulario de Vendedor
			include('inc/i.form.seguimientos.actualizar-venta2-1verde.06.php');

		}

*/

?>