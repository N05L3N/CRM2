<div class="row">
	<div class="col-md-4">
		<a href="cliente.php?id=<?= $id ?>&vendedor=<?= $usuario_vendedor ?>">Historial:</a>	
	</div>
	<div class="col-md-8">
		<div class="btn-group btn-group-xs">
			<button type="button" class="btn btn-default" style="cursor:help;">
				<acronym title="Fecha de Asignación">
					<span class="glyphicon glyphicon-calendar"></span>
					<?= ''.$fechaasignacionE[2].'-'.$fechaasignacionE[1].'-'.$fechaasignacionE[0].'' ?>
				</acronym>
			</button>
			<button type="button" class="btn btn-default" style="cursor:help;">
				<acronym title="Próxima llamada">
					<span class="glyphicon glyphicon-earphone"></span>
					<?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?>
				</acronym>
			</button>
			<button type="button" class="btn btn-default btn btn-<?= $CRM_estadodeventa ?>">
				<span style="text-transform:capitalize;"><?= $estadodeventa ?></span>
			</button>
		</div>
	</div>
</div>

<div style="<?= $style ?>">
<!-- -->

<table class="table table-condensed">
<?php
	
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id' ORDER BY id_comentarios_v desc limit 0,100");
	
	mysql_query ("SET NAMES 'utf8'");

	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) { 
		if ($i3 > 0) {
	}

		$fecharespuestaE = explode("-", $row3['fecharespuesta']);
		$fecharespuesta = ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'';
		$comentariovendedor = $row3['comentariovendedor'];
		$publicadopor = $row3['usuario'];
		$horarespuesta = $row3['horarespuesta'];

		$_SESSION['datetime20'] = $row3['fecharespuesta'];

?>

	<tr>
		<td colspan="2">
			<p>
				<?= $comentariovendedor ?>
			</p>
			<ol class="breadcrumb">
  				<li class="active"><span class="glyphicon glyphicon-user"></span> <?= $publicadopor ?> </li>
  				<li><span class="glyphicon glyphicon-calendar"></span> <?= $fecharespuesta ?> </li>
  				<li><span class="glyphicon glyphicon-time"></span> <?= $horarespuesta ?></li>
			</ol>
		</td>
	</tr>

<?php
	
	$i3++; 
	
	}
	
	$usuario_vendedor = '';
	$id = '';

?>
</table>

<!-- -->
</div>