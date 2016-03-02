<?php

	$id_seguimientoBLOCK = $_GET['id'];

	$resultNEW = mysql_query("SELECT * FROM contacto WHERE id = '$id_seguimientoBLOCK' ORDER BY id DESC limit 0,1");
	$iNEW = 0;
		while ($rowNEW = mysql_fetch_array($resultNEW)) {
			if ($iNEW > 0) {}

 			$id = $rowNEW['id'];
			$nombre = $rowNEW['nombre'];
			$contacto2 = $rowNEW['contacto2'];
			$contacto3 = $rowNEW['contacto3'];
			$direccion = $rowNEW['direccion'];
			$ciudad = $rowNEW['ciudad'];
			$pais = $rowNEW['pais'];
			$estado = $rowNEW['estado'];
			$lada = $rowNEW['lada'];
			$telefono = $rowNEW['telefono'];
			$email = $rowNEW['email'];
			$medio = $rowNEW['medio'];
			$giro = $rowNEW['giro'];
			$comentarios = $rowNEW['comentarios'];
			$fecha = $rowNEW['fecha'];
			$Hora = $rowNEW['Hora'];
			$formulario = $rowNEW['formulario'];
			$equipodeinteres = $rowNEW['equipodeinteres'];
			$comeqenatp = $rowNEW['comeqenatp'];
			$eqclosqcuenta = $rowNEW['eqclosqcuenta'];
			$antacteq = $rowNEW['antacteq'];
			$escliente = $rowNEW['escliente'];
			$numerodecliente = $rowNEW['numerodecliente'];
			$motivodeconsulta = $rowNEW['motivodeconsulta'];
			$empresa = $rowNEW['empresa'];
			$nombre_recomendador = $rowNEW['nombre_recomendador'];
			$sucursal_recomendador = $rowNEW['sucursal_recomendador'];
			$comentario_vendedor = $rowNEW['comentario_vendedor'];
			$asignadoa = $rowNEW['asignadoa'];
			$fechadecontacto = $rowNEW['fechadecontacto'];
			$fechaasignacion = $rowNEW['fechaasignacion'];
			$fechaventa = $rowNEW['fechaventa'];
			$estadodeventa = $rowNEW['estadodeventa'];
			$numerodefactura = $rowNEW['numerodefactura'];
			$usuario = $rowNEW['usuario'];
?>
		<form action="registrar_cliente.php" name="registrar_cliente" method="post" onsubmit="return validaCampos(this)">
			<input type="hidden" readonly="readonly" value="0" name="id" title="id">
			<input type="hidden" readonly="readonly" value="<?= $nombre ?>" name="nombre" title="nombre">
			<input type="hidden" readonly="readonly" value="<?= $contacto2 ?>" name="contacto2" title="contacto2">
			<input type="hidden" readonly="readonly" value="<?= $contacto3 ?>" name="contacto3" title="contacto3">
			<input type="hidden" readonly="readonly" value="<?= $direccion ?>" name="direccion" title="direccion">
			<input type="hidden" readonly="readonly" value="<?= $ciudad ?>" name="ciudad" title="ciudad">
			<input type="hidden" readonly="readonly" value="<?= $pais ?>" name="pais" title="pais">
			<input type="hidden" readonly="readonly" value="<?= $estado ?>" name="estado" title="estado">
			<input type="hidden" readonly="readonly" value="<?= $lada ?>" name="lada" title="lada">
			<input type="hidden" readonly="readonly" value="<?= $telefono ?>" name="telefono" title="telefono">
			<input type="hidden" readonly="readonly" value="<?= $email ?>" name="email" title="email">
			<input type="hidden" readonly="readonly" value="<?= $medio ?>" name="medio" title="medio">
			<input type="hidden" readonly="readonly" value="<?= $giro ?>" name="giro" title="giro">
			<input type="hidden" readonly="readonly" value="<?= $comentarios ?>" name="comentarios" title="comentarios">
			<input type="hidden" readonly="readonly" value="<?= $fecha ?>" name="fecha" title="fecha">
			<input type="hidden" readonly="readonly" value="<?= $Hora ?>" name="Hora" title="Hora">
			<input type="hidden" readonly="readonly" value="CRM : Facturado" name="formulario" title="formulario">
				<input type="hidden" readonly="readonly" value="<?= $id_seguimientoBLOCK ?>" name="id_seguimientoBLOCK" title="id_seguimientoBLOCK">
			<input type="hidden" readonly="readonly" value="<?= $equipodeinteres ?>" name="equipodeinteres" title="equipodeinteres">
			<input type="hidden" readonly="readonly" value="<?= $comeqenatp ?>" name="comeqenatp" title="comeqenatp">
			<input type="hidden" readonly="readonly" value="<?= $eqclosqcuenta ?>" name="eqclosqcuenta" title="eqclosqcuenta">
			<input type="hidden" readonly="readonly" value="<?= $antacteq ?>" name="antacteq" title="antacteq">
			<input type="hidden" readonly="readonly" value="<?= $escliente ?>" name="escliente" title="escliente">
			<input type="hidden" readonly="readonly" value="<?= $numerodecliente ?>" name="numerodecliente" title="numerodecliente">
			<input type="hidden" readonly="readonly" value="<?= $motivodeconsulta ?>" name="motivodeconsulta" title="motivodeconsulta">
			<input type="hidden" readonly="readonly" value="<?= $empresa ?>" name="empresa" title="empresa">
			<input type="hidden" readonly="readonly" value="<?= $nombre_recomendador ?>" name="nombre_recomendador" title="nombre_recomendador">
			<input type="hidden" readonly="readonly" value="<?= $sucursal_recomendador ?>" name="sucursal_recomendador" title="sucursal_recomendador">
			<input type="hidden" readonly="readonly" value="<?= $comentario_vendedor ?>" name="comentario_vendedor" title="comentario_vendedor">
			<input type="hidden" readonly="readonly" value="<?= $asignadoa ?>" name="asignadoa" title="asignadoa">
			<input type="hidden" readonly="readonly" value="<?= $fechadecontacto ?>" name="fechadecontacto" title="fechadecontacto">
			<input type="hidden" readonly="readonly" value="<?= $fechaasignacion ?>" name="fechaasignacion" title="fechaasignacion">
			<input type="hidden" readonly="readonly" value="<?= $fechaventa ?>" name="fechaventa" title="fechaventa">
			<input type="hidden" readonly="readonly" value="<?= $estadodeventa ?>" name="estadodeventa" title="estadodeventa">
			<input type="hidden" readonly="readonly" value="<?= $numerodefactura ?>" name="numerodefactura" title="numerodefactura">
			<?php
				$usuario = $_SESSION["usuario"];
			?>
			<input type="hidden" value="<?= $usuario ?>" name="usuario">

			<input type="hidden" name="usuario"  value="<?= $usuario ?>">
			<p>
				Para migrar los datos de este cliente a un nuevo Folio de click en el botón <b>"Crear nuevo Folio"</b>
			</p>
			<button class="btn btn-lg btn-success btn-block" type="submit"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Nuevo Folio</button>
		</form>
<?php
			
		$iNEW++;

		}

?>


</form>
</div>