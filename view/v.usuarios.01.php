<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<th colspan="4">Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Tipo</th>
		</tr>

<?php
	
	$departamento = $_SESSION["departamento"];

	if ($departamento == 'consumibles') {
		
		if ($_SESSION["usuario"] == 'jcnoble' OR $_SESSION["usuario"] == 'irodriguez') {
			
			$result = mysql_query("SELECT * FROM usuarios WHERE (departamento != 'telemarketing' AND departamento != 'ventascampo') ORDER BY departamento, usuario ASC limit 100");

		}

		else {

			$result = mysql_query("SELECT * FROM usuarios WHERE departamento = 'consumibles' ORDER BY id_usuario ASC limit 100");

		}

	}

	else {

		$result = mysql_query("SELECT * FROM usuarios WHERE (departamento != 'consumibles' AND departamento != 'invitado') ORDER BY tipo, usuario ASC limit 100");

	}
	

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
	if ($i > 0) {}

?>

		<tr>
			<td><?= $row['nombre1'] ?></td>
			<td><?= $row['nombre2'] ?></td>
			<td><?= $row['apellido1'] ?></td>
			<td><?= $row['apellido2'] ?></td>
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



<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<caption>
			Telemarketing
		</caption>
		<tr>
			<th colspan="2">Nombre</th>
			<th>Sucursal</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Tipo</th>
		</tr>

<?php
	
	$departamento = $_SESSION["departamento"];


	$result = mysql_query("SELECT * FROM usuarios WHERE (departamento = 'telemarketing') ORDER BY tipo, usuario ASC limit 100");
	

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
	if ($i > 0) {}

?>

		<tr>
			<td><?= $row['nombre1'] ?></td>
			<td><?= $row['apellido1'] ?></td>
			<td><?= $row['apellido2'] ?></td>
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







<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<caption>
			Ventas Campo
		</caption>
		<tr>
			<th colspan="2">Nombre</th>
			<th>Sucursal</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Tipo</th>
		</tr>

<?php
	
	$departamento = $_SESSION["departamento"];


	$result = mysql_query("SELECT * FROM usuarios WHERE (departamento = 'ventascampo') ORDER BY tipo, usuario ASC limit 100");
	

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
	if ($i > 0) {}

?>

		<tr>
			<td><?= $row['nombre1'] ?></td>
			<td><?= $row['apellido1'] ?></td>
			<td><?= $row['apellido2'] ?></td>
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