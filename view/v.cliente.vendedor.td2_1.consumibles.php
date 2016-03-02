<table class="table table-striped table-condensed" style="width:100%;">
	<tr>
		<th style="width:30%;">Nombre:</th>
		<td style="width:70%;"><input type="text" name="nombre" class="form-control" placeholder="Nombres" value="<?= $nombre ?>"></td>
	</tr>
	<tr>
		<th style="width:30%;">Empresa:</th>
		<td style="width:70%;"><input type="text" name="empresa" class="form-control" placeholder="Empresa" value="<?= $empresa ?>"></td>
	</tr>
	<tr>
		<th style="width:30%;">Nombre de Facturacion:</th>
		<td style="width:70%;"><input type="text" name="contacto2" class="form-control" placeholder="Nombre de Facturación" value="<?= $contacto2 ?>"></td>
	</tr>
	<tr>
		<th style="width:30%;">Número de Orden:</th>
		<td style="width:70%;"><input type="text" name="contacto3" class="form-control" placeholder="Número de Orden" value="<?= $contacto3 ?>"></td>
	</tr>
	<tr>
		<th>Dirección:</th>
		<td><input type="text" name="direccion" class="form-control" placeholder="Dirección" value="<?= $direccion ?>"></td>
	</tr>
	<tr>
		<th>Pais:</th>
		<td><input type="text" name="pais" class="form-control" placeholder="Pais" value="<?= $pais ?>" readonly="readonly"></td>
	</tr>
	<tr>
		<th>Estado:</th>
		<td><input type="text" name="estado" class="form-control" placeholder="Estado" value="<?= $estado ?>" readonly="readonly"></td>
	</tr>
	<tr>
		<th>Ciudad:</th>
		<td><input type="text" name="ciudad" class="form-control" placeholder="Ciudad" value="<?= $ciudad ?>"></td>
	</tr>
	<tr>
		<th>Télefono:</th>
		<td>
			<input type="text" name="lada" class="form-control" placeholder="Lada" value="<?= $lada ?>" style="float:left; width:25%;">
			<input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?= $telefono ?>" style="float:right; width:70%;">
		</td>
	</tr>
	<tr>
		<th>E-mail:</th>
		<td><input type="text" name="email" class="form-control" placeholder="Email" value="<?= $email ?>"></td>
	</tr>
	<tr>
		<th>Interesado en:</th>
		<td><input type="text" name="equipodeinteres" class="form-control" placeholder="" value="<?= $equipodeinteres ?>"></td>
	</tr>
	<tr>
		<th>Medio:</th>
		<td><input type="text" name="medio" class="form-control" placeholder="" value="<?= $medio ?>" readonly="readonly"></td>
	</tr>
	<tr>
		<th>Giro:</th>
		<td><input type="text" name="giro" class="form-control" placeholder="" value="<?= $giro ?>" readonly="readonly"></td>
	</tr>
	<tr>
		<th>Comentario:</th>
		<td>
			<textarea name="comentarios" class="form-control" rows="2" style="width:100%; height:150px; resize:none;"><?= $comentarios ?></textarea>
		</td>

	</tr>
</table>

<?php

	$action333 = 'update';

?>


<input type="hidden" value="<?= $action333 ?>" name="<?= $action333 ?>" size="10">