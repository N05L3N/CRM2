<table class="table table-striped table-condensed" style="width:100%;">
	<tr>
		<th style="width:30%;">Nombre:</th>
		<td style="width:70%;"><input type="text" name="nombre" class="form-control" placeholder="Nombres" value="<?= $nombre ?>"></td>
	</tr>
	<tr>
		<th>E-mail:</th>
		<td><input type="text" name="email" class="form-control" placeholder="Email" value="<?= $email ?>"></td>
	</tr>
	<tr>
		<th>Télefono:</th>
		<td>
			<input type="text" name="lada" class="form-control" placeholder="Lada" value="<?= $lada ?>" style="float:left; width:25%;">
			<input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?= $telefono ?>" style="float:right; width:70%;">
		</td>
	</tr>
	<tr>
		<th>Pais:</th>
		<td><input type="text" name="pais" class="form-control" placeholder="pais" value="<?= $pais ?>"></td>
	</tr>
	<tr>
		<th>Comentario:</th>
		<td>
			<textarea name="comentarios" class="form-control" rows="2" style="width:100%; height:150px; resize:none;"><?= $comentarios ?></textarea>
		</td>

	</tr>
	<tr>
		<th>Interesado en:</th>
		<td><input type="text" name="equipodeinteres" class="form-control" placeholder="" value="<?= $equipodeinteres ?>"></td>
	</tr>
	<tr>
		<th>Registro de:</th>
		<td>
			<?php

				if ($formulario == 'RYG' OR $formulario == 'RYG1') {

			?>

			Recomienda y Gana
			<br />
			Factura: <?= $numerodefactura ?>
			<br />
			Asignado a:<?= $asignadoa ?>
			<br />
			<i><?= $comentariovendedor ?></i>

			
			<?php

				}

				else {

			?>

			Seguimiento
			
			<?php

				}

			?>
		</td>
	</tr>

<?php

	$id  = $_GET["id"];	
	$result_333 = mysql_query("SELECT * FROM ecrm_equipos_data WHERE id_seguimiento = '$id';");
	mysql_query ("SET NAMES 'utf8'");
	$i_333 = 0;
	
	while ($row_333 = mysql_fetch_array($result_333)) {
		if ($i_333 > 0) {

		}

		 $equipos_marca = $row_333['marca'];
		 $equipos_equipo = $row_333['equipo'];
		 $equipos_precio = $row_333['precio'];
		 $muestra = $row_333['estadodeventa'];

		$i_333++;

		if ($i_333 == 1) {
			$action333 = 'update';
		}

		else {
			$confirm333 = 'insert';
		}
	}

?>

	<tr>
		<th>Marca:</th>
		<td>
			<select name="equipos_marca" class="form-control">
				<option value=""></option>
				<!-- onchange="this.form.submit();" -->
<?php
	$query_smarca = "SELECT DISTINCT (marca) FROM ecrm_equipos_data2 ORDER BY marca;";
	$result_smarca = mysql_query("$query_smarca");
	
	$i_smarca = 0;
  	
  	while ($row_smarca = mysql_fetch_array($result_smarca)) {
    	
    		if ($i_smarca > 0) {}            
    			
    		$smarca = $row_smarca['marca'];

    			if ($equipos_marca == $smarca) {
?>
				<option value="<?= $smarca ?>" selected><?= $smarca ?></option>
<?php    				
    			}
    			else {
?>
				<option value="<?= $smarca ?>"><?= $smarca ?></option>
<?php    				
    			}
	
	$i_smarca++; 

	}

?>		
			</select>
		</td>
	</tr>
	<tr>
		<th>Equipo:</th>
		<td>
			<select name="equipos_equipo"  class="form-control">
				<option value=""></option>
<?php
	$query_snombre = "SELECT DISTINCT (nombre) FROM ecrm_equipos_data2 ORDER BY nombre;";
	$result_snombre = mysql_query("$query_snombre");
	
	$i_snombre = 0;
  	
  	while ($row_snombre = mysql_fetch_array($result_snombre)) {
    	
    		if ($i_snombre > 0) {}            
    			
    		$snombre = $row_snombre['nombre'];
			if ($equipos_equipo == $snombre) {
?>
				<option value="<?= $snombre ?>" selected><?= $snombre ?></option>
<?php    				
    			}
    			else {
?>
				<option value="<?= $snombre ?>"><?= $snombre ?></option>
<?php    				
    			}

	$i_snombre++; 

	}

?>		
			</select>			
		</td>
	</tr>
	<tr>
		<th>Precio:</th>
		<td><input type="text" name="equipos_precio" class="form-control" placeholder="Precio" value="<?= $equipos_precio ?>"></td>
	</tr>	

	<tr>
		<th>Envio Muestra:</th>

		<td align="left">
			
			<?php
				if ($muestra == 'si') {
			?>
				<table width="100%">
					<tr>
						<td align="center">
							<input type="radio" name="muestra" value="no">	
							No 
						</td>
						<td align="center">
							<input type="radio" name="muestra" value="si" checked>
							Si 
						</td>
					</tr>
				</table>
			<?php
				}
				else if ($muestra == 'no') {
			?>
				<table width="100%">
					<tr>
						<td align="center">
							<input type="radio" name="muestra" value="no" checked>
							No 
						</td>
						<td align="center">
							<input type="radio" name="muestra" value="si">
							Si 
						</td>
					</tr>
				</table>
			<?php
				}
				else {
			?>
				<table width="100%">
					<tr>
						<td align="center">
							<input type="radio" name="muestra" value="no">
							No 
						</td>
						<td align="center">
							<input type="radio" name="muestra" value="si">
							Si 
						</td>
					</tr>
				</table>
			<?php
				}
			?>

			
		</td>

		
	</tr>
</table>

<input type="hidden" value="<?= $action333 ?>" name="<?= $action333 ?>" size="10">