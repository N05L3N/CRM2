<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
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
				<span style="text-transform:capitalize;"><?= $CRM_estadodeventaTxt ?></span>
			</button>
		</div>
	</div>
</div>

<div style="<?= $style ?>">
<!-- -->

<table class="table table-condensed">
	<caption>
		<b><a href="cliente?id=<?= $id ?>&amp;vendedor=<?= $usuario?>">Comentarios:</a></b><br>
	</caption>
<?php
	
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id' ORDER BY ecrm_comentarios_v.id_comentarios_v DESC limit 0,100");
	
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

		if ($comentariovendedor == 'no se encontro a nadie en el domicilio, pero ya me contacte con el por telefono y me dijo que estaba ineteresado en los precios de la malla sombra la cual es su especialidad, ya se le contacto con un agente de TMK para darle seguimiento. El lunes 3 de agosto estara en la tienda para checar precios y en su caso hacer la compra correspondiente') {
		
		}
		else {
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
		}
?>



<?php
	
	$i3++; 
	
	}
	
	$usuario_vendedor = '';
	$id = '';

?>
</table>

<!-- -->
</div>