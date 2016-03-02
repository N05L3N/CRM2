<h1><?= $comentariovendedor  ?></h1>


<table class="table table-condensed">
	<tr>
		<th>Folio</th>
		<th>Usuario <?= '_'. $filtrarporvendedor .'_'?></th>
		<th>Estadodeventa</th>
		<th>Comentariovendedor</th>
		<th>Fecharespuesta</th>
		<th>Horarespuesta</th>
	</tr>

<?php
	
	if ($filtrarporvendedor == '') {
		$query = "SELECT * FROM ecrm_comentarios_v ORDER BY fecharespuesta desc limit 0,100";
		echo '<pre>' . $query .'</pre>';
	}
	else {
		$query = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$filtrarporvendedor' ORDER BY fecharespuesta desc limit 0,100";
		echo '<pre>' . $query .'</pre>';
	}
	$result3 = mysql_query("$query");
	mysql_query ("SET NAMES 'utf8'");	

	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) { 
		if ($i3 > 0) {
	}

	$fecharespuestaE = explode("-", $row3['fecharespuesta']);
	
	$usuario = $row3['usuario'];
	$estadodeventa = $row3['estadodeventa'];

		$id_seguimiento = $row3['id_seguimiento'];
		$usuario = $row3['usuario'];
		$termometro = $row3['termometro'];
		$estadodeventa = $row3['estadodeventa'];
		$comentariovendedor = $row3['comentariovendedor'];
		$factura = $row3['factura'];
		$fechaasignacion = $row3['fechaasignacion'];
		$horaasignacion = $row3['horaasignacion'];
		$fecharespuesta = $row3['fecharespuesta'];
		$horarespuesta = $row3['horarespuesta'];

?>
	<tr>	
		<td>
			<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
				<?= $id_seguimiento ?>
			</a>
		</td>
		<td><?= $usuario ?></td>
		<td><?= $estadodeventa ?></td>
		<td><?= $comentariovendedor ?></td>
		<td><?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?> </td>
		<td><?= $horarespuesta ?></td>
		<td><?= $fechaproxima ?></td>
	</tr>
	</a>

<?php
	
	$_SESSION['datetime20'] = $row3['fecharespuesta'];
	
	$i3++; 
	
	}
	
	$usuario_vendedor = '';
	$asignacion_vendedor = '';

?>
</table>