<?php

	# Incluir Filtro por fecha

	$id_view = $_SESSION["id_view"];
	$tipo = $_SESSION["tipo"];

	$userNombre = $_SESSION["user.nombre"];
	$userApellido = $_SESSION["user.apellido"];
	$userCorreo = $_SESSION["user.correo"];

?>

<form action="mail" method="post" id="enviar-correo">

<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3"></div>
	<div class="col-lg-6 col-md-6 col-sm-6">
		<table class="table table-condensed table-bordered" style="background-color:white;">
			<tr>
				<td>
					De: <?= $userNombre ?> <?= $userApellido ?> 
					<input type="hidden" class="form-control" name="remitenteNombre" value="<?= $userNombre ?> <?= $userApellido ?> ">
					<input type="text" class="form-control" name="remitenteCorreo" value="<?= $userCorreo ?>" >
					<!-- readonly="readonly" -->
				</td>
			</tr>
			<tr>
				<td>
					Para: <input type="text" class="form-control" name="destinatario">
				</td>
			</tr>
			<tr>
				<td>
					Asunto: <input type="text" class="form-control" name="asunto">
				</td>
			</tr>
			<tr>
				<td>
					Comentario: <textarea name="comentario" id="" cols="30" rows="10" class="form-control"></textarea>
				</td>
			</tr>
			<tr>
				<td style="text-align:right">
					<button type="button" class="btn btn-primary" aria-label="Left Align" onclick="document.getElementById('enviar-correo').submit();">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span> Enviar
					</button>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3"></div>
</div>

</form>