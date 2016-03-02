<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

<div class="panel panel-primary">
	<div class="panel-heading">Sucursal Aguascalientes</div>
	<div class="panel-body">
<!-- PANEL -->	
		<table class="table table-bordered table-striped table-condensed table-hover center" style="width:100%; margin-bottom:0;">
					<tr>
						<th class="bordeInferior">Vendedor</th>
						<th class="bordeInferior"><small>Asignaciones</small> <br> para Hoy</th>
        						<th class="bordeInferior"><small>Asignaciones</small> <br> Totales</th>
        						<th class="bordeInferior"><small>Asignaciones</small> <br> Atrasadas</th>
						<th class="bordeInferior">Visita con Venta</th>
						<th class="bordeInferior">Visita sin Venta</th>
						<th class="bordeInferior">Descartado</th>
						<th class="bordeInferior"></th>
					</tr>
					<tr>
						<th class="bordeInferior">
							<?= $uaguascalientesNombre01 ?><br>
							<small>Usuario: slopez</small><br>
            						<small><?= $uaguascalientesEmail01 ?></small>
        					</th>
        					<td class="bordeInferior"><span class="label label-info"><?= $semaforoHoySucursalAguascalientes01 ?></span></td>
        					<td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalSucursalAguascalientes01 ?></span></td>
        					<td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosSucursalAguascalientes01 ?></span></td>
						<td class="bordeInferior"><?= $facturadoSucursalAguascalientes01 ?></td>
						<td class="bordeInferior"><?= $correoSucursalAguascalientes01 ?></td>
						<td class="bordeInferior"><?= $descartadoSucursalAguascalientes01 ?></td>
						<td class="bordeInferior">
							<a href="history?vendedor=slopez" target="_blank">
								<button type="button" class="btn btn-primary btn-xs">Bitácora</button>
							</a>
						</td>
					</tr>
					<tr>
						<th class="bordeInferior">
							<?= $uaguascalientesNombre02 ?><br>
							<small>Usuario: vmaguascalientes01</small><br>
            						<small><?= $uaguascalientesEmail02 ?></small>
        					</th>
        					<td class="bordeInferior"><span class="label label-info"><?= $semaforoHoySucursalAguascalientes02 ?></span></td>
        					<td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalSucursalAguascalientes02 ?></span></td>
        					<td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosSucursalAguascalientes02 ?></span></td>
						<td class="bordeInferior"><?= $facturadoSucursalAguascalientes02 ?></td>
						<td class="bordeInferior"><?= $correoSucursalAguascalientes02 ?></td>
						<td class="bordeInferior"><?= $descartadoSucursalAguascalientes02 ?></td>
						<td class="bordeInferior">
							<a href="history?vendedor=vmaguascalientes01" target="_blank">
								<button type="button" class="btn btn-primary btn-xs">Bitácora</button>
							</a>
						</td>
					</tr>
					<tr>
						<th class="bordeInferior">
							Total
        					</th>
        					<td></td>
        					<td></td>
        					<td></td>
        					<td><?= $facturadoSucursalAguascalientes ?></td>
						<td><?= $correoSucursalAguascalientes ?></td>
						<td><?= $descartadoSucursalAguascalientes ?></td>
						<td></td>
					</tr>
				</table>

<!-- /PANEL -->
	</div>
</div>



</div>
			<div class="col-md-2"></div>
	</div>