<br><br>
<span id="<?= $usuario ?>"></span>
<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr class="active">
		<th colspan="2">
			Bitácora del día de <?= $usuario ?>
		</th>
	</tr>
	<tr>
	<?php

		$fecha_actual = date('Y-m-d');

		$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fecharespuesta = '$fecha_actual' AND (comentariovendedor != 'Dar seguimiento') ORDER BY fechaproxima desc limit 999";
		$result_bitacora = mysql_query("$query_bitacora");
		# echo '<pre>' .$query_bitacora. '</pre>';
		$i_bitacora = 0;
  		while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    			if ($i_bitacora > 0) {}
				# $id_bitacora = $row_bitacora['id_seguimiento'];
			$i_bitacora++;
    		}
	?>
		<th style="width:25%;">
			Seguimientos en el día
		</th>
		<td style="width:75%;"><?= $i_bitacora ?></td>
	</tr>
</table>

<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr>
		<th>Hora</th>
		<th>Folio</th>
		<th>Comentarios</th>
		<th>Status</th>
	</tr>
	<?php

		$fecha_actual = date('Y-m-d');

		$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$usuario' AND fecharespuesta = '$fecha_actual') AND (comentariovendedor != 'Dar seguimiento') ORDER BY id_comentarios_v ASC limit 999";
		$result_bitacora = mysql_query("$query_bitacora");
		# echo '<pre>' .$query_bitacora. '</pre>';
		$i_bitacora = 0;
  		while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    			if ($i_bitacora > 0) {}
				$id_seguimiento = $row_bitacora['id_seguimiento'];
				$horarespuesta = $row_bitacora['horarespuesta'];
				$comentariovendedor = $row_bitacora['comentariovendedor'];
				$estadodeventa = $row_bitacora['estadodeventa'];

	?>
		<tr>
			<td style="width:10%;"><?= $horarespuesta ?></td>
			<td style="width:10%;">
				<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
					<?= $id_seguimiento ?>
				</a>
			</td>
			<td style="width:70%;"><?= $comentariovendedor ?></td>
			<td style="width:10%;">
				<?php

					if ($estadodeventa == 'frio') {
						$classStatus = 'info';
					}
					else if ($estadodeventa == 'tibio') {
						$classStatus = 'warning';
					}
					else if ($estadodeventa == 'caliente') {
						$classStatus = 'danger';
					}
					else if ($estadodeventa == 'facturado') {
						$classStatus = 'success';
					}
					else {
						$classStatus = 'default';
					}

				?>
				<div class="label label-<?= $classStatus ?>" style="width:100px; display: inline-block; text-transform: capitalize;">
					<?= $estadodeventa ?>
				</div>
			</td>
		</tr>
	<?php

		$i_bitacora++;
    		}

	?>
</table>

<br>