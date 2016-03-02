<?php
	
	$departamento = $_SESSION['departamento'];

?>
<div class="table-responsive">
	<form class="form-signin" action="usuarios.php" name="registrar_usuario" method="post">
		<table class="table table-striped table-bordered">
			<tr>
				<th colspan="3">Nombre</th>
				<th>Sucursal</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th colspan="2">Correo</th>
				<th>Departamento</th>
				<th>Tipo</th>
			</tr>
<?php

	if ($departamento == 'consumibles') {
		
		$result = mysql_query("SELECT * FROM usuarios WHERE departamento = 'consumibles' ORDER BY id_usuario ASC limit 100");	

	}

	else {

		$result = mysql_query("SELECT * FROM usuarios ORDER BY id_usuario ASC limit 100");	

	}

	$keygen = 'C'.rand(1000,10000).'';
	
	if ($usuario == 'areynoso' OR $usuario == 'Coordinador' OR $usuario == 'coordinador'  OR $usuario == 'amariscal') {

		$departamento = 'equipo';
		
	}

	else {

		$departamento = 'consumibles';


	}
?>
			<tr>
				<td colspan="2">
					<input type="text" name="nombre1" class="form-control" placeholder="Nombre(s)">
					<input type="hidden" name="nombre2" class="form-control" placeholder="2do Nombre">
				</td>
				<td><input type="text" name="apellido1" class="form-control" placeholder="Apellido(s)"></td>
				<td><input type="text" name="apellido2" class="form-control" placeholder="Sucursal"></td>
				<td><input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario"></td>
				<td><input type="text" name="clave" readonly="readonly" value="<?= $keygen ?>" class="form-control" placeholder="Contraseña"></td>
				<td colspan="2"><input type="text" name="correo" class="form-control" placeholder="Correo"></td>
				<td>
					<select name="departamento" class="form-control">
						<option value="ventascampo">Ventas Campo</option>
						<option value="consumibles">Consumibles</option>
						<option value="equipo">Equipo</option>
						<option value="manualidades">Manualidades</option>
					</select>
					<!-- <input type="text" name="departamento" readonly="readonly" value="<?= $departamento ?>" class="form-control" placeholder="Departamento"> -->
				</td>
				<td>
					<select name="tipo" class="form-control">
						
<?php
							
	if ($usuario == 'areynoso' OR $usuario == 'Coordinador' OR $usuario == 'amariscal' OR $usuario == 'irodriguez' OR $usuario == 'jcnoble' )  {
	
?>

						<option value="administrador">Administrador</option>

<?php

	}

	else  {

	}

?>
						<option value="vendedor">Vendedor</option>
					</select>
				</td>
				<td>
					<button class="btn btn-success btn-xs" type="submit" onfocus="javascript:this.form.d_confirmar.value =\'confirm\';">Agregar Usuario</button>
				</td>
			</tr>			
		</table>
	</form>
</div>