<?php

	$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE usuario = 'rgonzalez' AND (fecharespuesta >= '2015-01-01' AND fecharespuesta <= '2015-12-31') AND (estadodeventa = 'facturado') ORDER BY fechaproxima desc limit 9999";
	$result_bitacora = mysql_query("$query_bitacora");

	$i_bitacora = 0;
	
	while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
		if ($i_bitacora > 0) {}
		
			
			$id_seguimiento = $row_bitacora['id_seguimiento'];
			$fecharespuestaE = explode("-", $row_bitacora['fecharespuesta']);
			$comentariovendedor = $row_bitacora['comentariovendedor'];


			/**/
			$query_interna = "SELECT * FROM contacto WHERE id = '$id_seguimiento' ORDER BY id desc limit 1";
			$result_interna = mysql_query("$query_interna");

			$i_interna = 0;
	
			while ($row_interna = mysql_fetch_array($result_interna)) {
				if ($i_interna > 0) {}
		
					$nombre = $row_interna['nombre'];
					$estado = $row_interna['estado'];
					$email = $row_interna['email'];
					$i_interna++;	
				}
			/**/
?>
	<tr>
		<td><?= '' . $fecharespuestaE[2]. '-' . $fecharespuestaE[1]. '-' . $fecharespuestaE[0]. ''  ?></td>
		<td><?= $nombre ?></td>
		<td><?= $estado ?></td>
		<td><?= $email ?></td>
		<td></td>
		<td></td>
		<td><?= $comentariovendedor ?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
<?php		
		$i_bitacora++;	
		}

?>