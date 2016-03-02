<?php

	$arrayTitle = array(
		'0' => 'Formato de Llamada',
	);

?>

<div class="row">
	<div class="col-md-12">
		<table class="table table-striped table-condensed table-responsive" style="width:100%;">
			<tr>
				<td style="width:50%; text-align:center;">
					<figcaption class="img-thumbnail img-responsive">
						Formato de Llamada
						<img src="img/plantillas/formato0.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#plantilla0" style="cursor:pointer;" title="0">
					</figcaption>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="modal fade" id="plantilla0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?= $arrayTitle0 ?></h4>
			</div>
			<div class="modal-body">
				<?php include('view/v.cliente.vendedor.side.plantilla-vc-0.php') ?>
			</div>
		</div>
	</div>
</div>

	
<?php

	for ($i=0; $i < 1; $i++) { 

?>

<div class="modal fade" id="plantilla<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><?= $arrayTitle[$i] ?></h4>
			</div>
			<div class="modal-body">
				<?php include('view/v.cliente.vendedor.side.plantilla-'. $i  .'.php') ?>
			</div>
		</div>
	</div>
</div>

<?php
		
	}

?>