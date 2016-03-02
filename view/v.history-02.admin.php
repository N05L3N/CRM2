<?php
	
	if ($estadodeventa == 'Caliente' OR $estadodeventa == 'caliente') {
		$CRM_estadodeventa = 'danger';
	}
	else if ($estadodeventa == 'tibio') {
		$CRM_estadodeventa = 'warning';
	}
	else if ($estadodeventa == 'frio') {
		$CRM_estadodeventa = 'info';
	}
	else if ($estadodeventa == 'Facturado' OR $estadodeventa == 'facturado') {
		$CRM_estadodeventa = 'success';
	}
	else if ($estadodeventa == 'Pendiente') {
		$CRM_estadodeventa = 'default';
	}

	else if ($estadodeventa == 'correo') {
		$CRM_estadodeventa = 'warning';
	}
	else if ($estadodeventa == 'llamada') {
		$CRM_estadodeventa = 'info';
	}
	else if ($estadodeventa == 'llamadaycorreo') {
		$CRM_estadodeventa = 'primary';
	}

	else  {
		$CRM_estadodeventa = 'default';
	}

?>
<tr>	
	<td style="text-align:center;">
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
			<span class="label" style="background-color:Black; color:White;">
				<?= $id_seguimiento ?>
			</span>
		</a>
	</td>
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
			<?= $usuario ?>
		</a>
	</td>
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
		<?php

	$result_nombre = mysql_query("SELECT nombre FROM contacto WHERE id = '$id_seguimiento' ORDER BY id desc limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

					$enc = mb_detect_encoding($row_nombre['nombre'], "UTF-8,ISO-8859-1");

			 		if ($enc == 'ISO-8859-1') {
			 	
						echo iconv("ISO-8859-1", "UTF-8", $row_nombre['nombre']);

			 		}

			 		else {

			 			# echo $row_nombre['nombre'];
			 			echo iconv("ISO-8859-1", "UTF-8", $row_nombre['nombre']);

			 		}

				$i_nombre++;
			}

	?>
		</a>
	</td>
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
		<?php

			 $enc = mb_detect_encoding($comentariovendedor, "UTF-8,ISO-8859-1");

			 if ($enc == 'ISO-8859-1') {
			 	
			 	# $string = utf8_decode($comentariovendedor);

			 	# echo $string;

			 	
				echo iconv("ISO-8859-1", "UTF-8", $comentariovendedor);

			 }

			 else {

			 	echo $comentariovendedor;

			 }

			  
		?>
		</a>
	</td>
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
			<div style="width:75px;">
				<small>
					<?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?>
				</small>
			</div>
		</a>
	</td>
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
			<div style="width:75px;">
				<small>
					<?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?>
				</small>
			</div>
		</a>
	</td>
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>" style="color:#111;">
			<button type="button" class="btn btn-<?= $CRM_estadodeventa ?> btn-xs" style="width:80px;">
				<span style="text-transform:capitalize;">
					<?= $estadodeventa ?>
				</span>
			</button>
		</a>
	</td>
<!--	
	72226
	<td>
		
<?php

	$result_facturado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_comentarios_v desc limit 0,2");
	$i_facturado = 0;
		while ($row_facturado = mysql_fetch_array($result_facturado)) {
			if ($i_facturado > 0) {}

				?>
			<button type="button" class="btn btn-<?= $CRM_estadodeventa ?> btn-xs" style="width:80px;"><span style="text-transform:capitalize;"><?= $row_facturado['estadodeventa'] ?>

				<?php

				$i_facturado++;
			}

?>

	</td>
-->
</tr>
