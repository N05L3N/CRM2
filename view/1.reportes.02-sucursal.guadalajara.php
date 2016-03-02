<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

<div class="panel panel-primary">
	<div class="panel-heading">Sucursal Guadalajara</div>
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
							<?= $uguadalajaraNombre01 ?><br>
							<small>Usuario: ventasguadalajara</small><br>
            						<small><?= $uguadalajaraEmail01 ?></small>
        					</th>
        					<td class="bordeInferior"><span class="label label-info"><?= $semaforoHoySucursalGuadalajara01 ?></span></td>
        					<td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalSucursalGuadalajara01 ?></span></td>
        					<td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosSucursalGuadalajara01 ?></span></td>
						<td class="bordeInferior"><?= $facturadoSucursalGuadalajara01 ?></td>
						<td class="bordeInferior"><?= $correoSucursalGuadalajara01 ?></td>
						<td class="bordeInferior"><?= $descartadoSucursalGuadalajara01 ?></td>
						<td class="bordeInferior">
							<a href="history?vendedor=ventasguadalajara" target="_blank">
								<button type="button" class="btn btn-primary btn-xs">Bitácora</button>
							</a>
						</td>
					</tr>
					<tr>
						<th class="bordeInferior">
							<?= $uguadalajaraNombre02 ?><br>
							<small>Usuario: vcguadalajara01</small><br>
            						<small><?= $uguadalajaraEmail02 ?></small>
        					</th>
        					<td class="bordeInferior"><span class="label label-info"><?= $semaforoHoySucursalGuadalajara02 ?></span></td>
        					<td class="bordeInferior"><span class="label label-primary"><?= $semaforoTotalSucursalGuadalajara02 ?></span></td>
        					<td class="bordeInferior"><span class="label label-danger"><?= $semaforoAtrasadosSucursalGuadalajara02 ?></span></td>
						<td class="bordeInferior"><?= $facturadoSucursalGuadalajara02 ?></td>
						<td class="bordeInferior"><?= $correoSucursalGuadalajara02 ?></td>
						<td class="bordeInferior"><?= $descartadoSucursalGuadalajara02 ?></td>
						<td class="bordeInferior">
							<a href="history?vendedor=vcguadalajara01" target="_blank">
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
        					<td><?= $facturadoSucursalGuadalajara ?></td>
						<td><?= $correoSucursalGuadalajara ?></td>
						<td><?= $descartadoSucursalGuadalajara ?></td>
						<td></td>
					</tr>
				</table>

<!-- /PANEL -->
	</div>
</div>



</div>
			<div class="col-md-2"></div>
	</div>