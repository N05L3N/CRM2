<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<th colspan="2">Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Tipo</th>
		</tr>

<?php

	$result = mysql_query("SELECT * FROM usuarios WHERE departamento = 'cxc' ORDER BY id_usuario ASC limit 100");

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
	if ($i > 0) {}

?>

		<tr>
			<td><?= $row['nombre1'] ?></td>
			<td><?= $row['apellido1'] ?></td>
			<td><?= $row['usuario'] ?></td>
			<td><?= $row['clave'] ?></td>
			<td><?= $row['correo'] ?></td>
			<td><?= $row['departamento'] ?></td>
			<td><?= $row['tipo'] ?></td>
		</tr>

<?php

	$i++;
	
	}

?>

	</table>
</div>