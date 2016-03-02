<!--
<form class="form-signin" action="usuarios.php" name="registrar_usuario" method="post">
	<div class="row">
        <div class="col-sm-12">
			<input type="text" name="nombre1" class="form-control" placeholder="1er Nombre">
			<input type="text" name="nombre2" class="form-control" placeholder="2do Nombre">
			<input type="text" name="apellido1" class="form-control" placeholder="Apellido Paterno">	
			<input type="text" name="apellido2" class="form-control" placeholder="Apellido Materno">
			<input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario">
			<input type="text" name="clave" readonly="readonly" value="<?php echo 'C'.rand(1000,10000).'';?>" class="form-control" placeholder="Contraseña">
			<input type="text" name="correo" class="form-control" placeholder="Correo">
		</div>
	</div>
	<br />
	<div class="row">
        <div class="col-sm-12">
        	Seleccione el tipo de usuario<br/>
			<select name="tipo" class="form-control">
				<option value=""></option>
				<option value="administrador">Administrador</option>
				<option value="vendedor">Vendedor</option>
			</select>
        </div>
    </div>
	
	<br />
	<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
</form>
-->
<?php
/*
  $result = mysql_query("SELECT * FROM usuarios ORDER BY id_usuario ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    	echo '<div class="table-responsive">';
    	echo '<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">';
    	echo '<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario">';
  		echo '<table class="table table-bordered">';
    	echo "<tr>";
		echo '<td><input type="text" class="form-control" name="u_nombre1" value="'.$row['nombre1'].'"></td>';
		echo '<td><input type="text" class="form-control" name="u_nombre2" value="'.$row['nombre2'].'"></td>';
		echo "</tr>";
		echo "<tr>";
		echo '<td><input type="text" class="form-control" name="u_apellido1" value="'.$row['apellido1'].'"></td>';
		echo '<td><input type="text" class="form-control" name="u_apellido2" value="'.$row['apellido2'].'"></td>';
		echo "</tr>";
		echo "<tr>";
		echo '<td><input type="text" class="form-control" name="u_usuario" value="'.$row['usuario'].'"></td>';
		echo '<td><input type="text" class="form-control" name="u_clave" value="'.$row['clave'].'"></td>';
		echo "</tr>";
		echo "<tr>";
		echo '<td colspan="2"><input type="text" class="form-control" name="u_correo" value="'.$row['correo'].'"></td>';
		echo "</tr>";
		echo "<tr>";
		echo '<td align="center" style="vertical-align:middle;"><button class="btn btn-primary btn-xs" type="submit">Actualizar</button></form></td>';
		echo '<td align="center">
		<form class="form-signin" action="usuarios.php" name="eliminar_usuario" method="post">
		<input type="hidden" value="'.$row['id_usuario'].'" name="d_id_usuario">
  		<input type="hidden" class="form-control" name="d_confirmar" value="">
  		<button class="btn btn-danger btn-xs" type="submit" onfocus="javascript:this.form.d_confirmar.value =\'confirm\';">Eliminar Usuario</button></form></td>';
		echo '</tr>';
		echo '</table>';
		echo '</div>';
	$i++;
	}
*/
?>
