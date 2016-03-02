<tr>

<?php

	$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND (fecharespuesta >= '$fecha2014_01' AND fecharespuesta <= '$fecha2014_02') AND (comentariovendedor != 'Dar seguimiento') ORDER BY fechaproxima desc limit 9999";
	$result_bitacora = mysql_query("$query_bitacora");

	$i_bitacora = 0;
	
	while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
		if ($i_bitacora > 0) {}
		
			$i_bitacora++;
		}

?>
	<th style="width:20%;">
		<?= $mesNombre ?>
	</th>
	<td style="width:40%;"><?= $i_bitacora ?></td>


<?php

	$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND (fecharespuesta >= '$fecha2015_01' AND fecharespuesta <= '$fecha2015_02') AND (comentariovendedor != 'Dar seguimiento') ORDER BY fechaproxima desc limit 9999";
	$result_bitacora = mysql_query("$query_bitacora");

	$i_bitacora = 0;
	
	while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
		if ($i_bitacora > 0) {}
		
			$i_bitacora++;
		}

?>

	<td style="width:40%;"><?= $i_bitacora ?></td>
</tr>