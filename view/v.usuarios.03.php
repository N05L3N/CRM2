<?php
	
	$departamento = $_SESSION['departamento'];

?>
<div class="table-responsive">

		<table class="table table-striped table-bordered">
			<tr>
				<th colspan="4">Nombre</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th colspan="2">Correo</th>
				<th>Departamento <?= $departamento ?></th>
				<th>Tipo</th>
			</tr>

<?php

	if ($departamento == 'consumibles') {
		
		$result = mysql_query("SELECT * FROM usuarios WHERE departamento = 'consumibles' ORDER BY id_usuario ASC limit 100");	

	}

	else {

		$result = mysql_query("SELECT * FROM usuarios WHERE (departamento != 'consumibles' AND departamento != 'invitado') ORDER BY tipo, usuario ASC limit 100");	

	}

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
		
		if ($i > 0) {}

?>

			<tr>
				<td>
					<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">
					<input type="hidden" value="<?= $row['id_usuario'] ?>" name="u_id_usuario">
					<input type="text" class="form-control" name="u_nombre1" value="<?= $row['nombre1'] ?>">
				</td>
				<td><input type="text" class="form-control" name="nombre2" value="<?= $row['nombre2'] ?>"></td>
				<td><input type="text" class="form-control" name="apellido1" value="<?= $row['apellido1'] ?>"></td>
				<td><input type="text" class="form-control" name="apellido2" value="<?= $row['apellido2'] ?>"></td>
				<td><input type="text" class="form-control" name="usuario" value="<?= $row['usuario'] ?>"></td>
				<td><input type="text" class="form-control" name="clave" value="<?= $row['clave'] ?>"></td>
				<td colspan="2"><input type="text" class="form-control" name="correo" value="<?= $row['correo'] ?>"></td>
				<td><input type="text" class="form-control" name="departamento" value="<?= $row['departamento'] ?>" readonly="readonly"></td>
				<td><input type="text" class="form-control" name="tipo" value="<?= $row['tipo'] ?>" readonly="readonly"></td>
				<td align="center" style="vertical-align:middle;"><button class="btn btn-primary btn-xs" type="submit">Actualizar</button>
				</form></td>
			</tr>

<?php
	
		$i++;

	}

?>

		</table>
</div>