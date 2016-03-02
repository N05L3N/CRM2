<?php 

	$id = $rows['id'];
	$nombre = $rows['nombre'];
	$apellidos = $rows['apellidos'];
	$email = $rows['email'];
	$lada = $rows['lada'];
	$telefono = $rows['telefono'];
	$pais = $rows['pais'];
	$estado = $rows['estado'];
	$ciudad = $rows['ciudad'];
	$equipodeinteres = $rows['equipodeinteres'];
	$formulario = $rows['formulario'];
	$fecha = $rows['fecha'];
	$usuario_vendedor = $rows['asignadoa'];

	if ($formulario == 'Lateral' OR $formulario == 'Contacto') {
		$formulario = 'Formulario de Contacto';
	}

	else {

	}

	$fechaE = explode("-", $fecha);





	$_SESSION['datetime10'] = $rows['fechaasignacion'];
	$_SESSION['vendedor'] = $rows['asignadoa'];
	
	# Explode
	$fechaasignacionE = explode("-", $rows['fechaasignacion']);

	/* Historial */

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

	$result_ecrm_comentarios_v1 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id' ORDER BY id_comentarios_v ASC limit 0,999");
	$i_result_ecrm_comentarios_v1 = 0;
	
	while ($row_result_ecrm_comentarios_v1 = mysql_fetch_array($result_ecrm_comentarios_v1)) {
	
		if ($i_result_ecrm_comentarios_v1 > 0) {
		}

		# Explotar la fecha proxima llamada
		$fechaproximaE = explode("-", $row_result_ecrm_comentarios_v1['fechaproxima']);

		$estadodeventa = $row_result_ecrm_comentarios_v1['estadodeventa'];
		$_SESSION['estadodeventa'] = $estadodeventa;

		# Definir color según estado de venta

		if ($estadodeventa == 'Caliente' OR $estadodeventa == 'caliente') {
			$CRM_estadodeventa = 'danger';
			$CRM_estadodeventaTxt = 'Caliente';
		}
		else if ($estadodeventa == 'tibio') {
			$CRM_estadodeventa = 'warning';
			$CRM_estadodeventaTxt = 'Tibio';

		}
		else if ($estadodeventa == 'frio') {
			$CRM_estadodeventa = 'info';
			$CRM_estadodeventaTxt = 'Frio';
		}
		else if ($estadodeventa == 'Facturado' OR $estadodeventa == 'facturado' OR $estadodeventa == 'facturado y clonado') {
			$CRM_estadodeventa = 'success';
			$CRM_estadodeventaTxt = 'Facturado';
		}
		else if ($estadodeventa == 'llamada' OR $estadodeventa == 'llamada') {
			$CRM_estadodeventa = 'info';
			$CRM_estadodeventaTxt = 'Llamada';
		}
		else if ($estadodeventa == 'Correo' OR $estadodeventa == 'correo') {
			$CRM_estadodeventa = 'warning';
			$CRM_estadodeventaTxt = 'Correo';
		}
		else if ($estadodeventa == 'Llamada y Correo' OR $estadodeventa == 'LlamadayCorreo' OR $estadodeventa == 'llamadaycorreo') {
			$CRM_estadodeventa = 'primary';
			$CRM_estadodeventaTxt = 'Llamada y Correo';
		}
		else if ($estadodeventa == 'Pendiente') {
			$CRM_estadodeventa = 'default';
			$CRM_estadodeventaTxt = 'Pendiente';
		}
		else  {
			$CRM_estadodeventa = 'default';
			$CRM_estadodeventaTxt = $estadodeventa;
		}

		# Definir alto para registros sin asignación

		if ($row_result_ecrm_comentarios_v1['fechaproxima'] == '' OR $row_result_ecrm_comentarios_v1['fechaproxima'] == '0000-00-00') {
	
			$style = "width:300px;height:10px; font-size:12px;";
		}
	
		else {

			$style = "width:400px;height:150px;overflow-y:scroll;overflow-x:hidden; font-size:12px;";
	
		}

		$i_result_ecrm_comentarios_v1++; 
	
	}

	/* \ Historial */

?>

<table class="table table-bordered table-condensed table-striped" style="font-size:12px; margin:0;">
	<tr>
		<th style="width:25%;">Folio:</th>
		<td style="width:75%;"><?= $id ?></td>
	</tr>
	<tr>
		<th>Nombre:</th>
		<td><?= $nombre ?><?= $apellidos ?></td>
	</tr>
	<tr>
		<th>E-mail:</th>
		<td><?= $email ?></td>
	</tr>
	<tr>
		<th>Télefono:</th>
		<td><?= $lada ?> <?= $telefono ?></td>
	</tr>
	<tr>
		<th>Pais</th>
		<td>
			<?= $pais ?>	
		</td>
	</tr>
	<tr>
		<th>Estado</th>
		<td>
			<?= $estado ?>
		</td>
	</tr>
	<tr>
		<th>Ciudad</th>
		<td>
			<?= $ciudad ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:center;">
			<a href="cliente.php?id=<?= $id ?>&vendedor=<?= $usuario_vendedor ?>">
				<button class="btn btn-primary btn-xs">
					Actualizar
				</button>
			</a>
		</td>
	</tr>
</table>