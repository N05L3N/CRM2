<div class="sublime-test"></div>

	<div class="row">
		<div class="col-md-3"><h4>Folio #<?= $id ?></h4></div>
		<!--
		<div class="col-md-3"><h4>
			Fecha de Asignación: <?= $fechaasignacion ?>
		</h4></div>
	-->
	<?php
		$fechaproximaE = explode("-", $fechaproxima);
	?>
		<div class="col-md-3"><h4>Proxima Llamada: <?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?></h4></div>
		<div class="col-md-3"><h4>Estado de la venta: <?= $estadodeventa ?></h4></div>
	</div>

<table class="table table-bordered">
	<tr>
		<th class="active" align="center" width="40%" colspan="2">
			<?php include('view/v.cliente2-menu.php');?>
		</th>
		<th class="active" width="40%"></th>
	</tr>
		<td>
			<?php include('view/v.cliente2.vendedor.td1.php');?>
		</td>
		<td width="1%"></td>
		<td style="background-color:#ffffff;">
			<?php 
				include('view/v.cliente.vendedor.side.php') 
				# include('view/v.cliente.vendedor.td2.php')
			?>
		</td>
	</tr>
</table>