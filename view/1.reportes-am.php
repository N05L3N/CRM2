<table class="table table-bordered table-striped table-condensed table-hover" style="width:100%; margin-bottom:0;">
	<tr>
		<th>Departamento</th>
		<th>Facturado</th>
		<th>Correo</th>
		<th>Llamada</th>
		<th>Correo y Llamada</th>
		<th>Descartado</th>
		<th></th>
	</tr>
	<tr>
		<th>Telemarketing</th>
		<th><?= $total_facturadosT ?></th>
		<th><?= $total_correosT ?></th>
		<th><?= $total_llamadasT ?></th>
		<th><?= $total_llamadasycorreosT ?></th>
		<th><?= $total_descartadosT ?></th>
		<th>
			<!--
			<a href="if.consultas?iframe=02">
				<button type="button" class="btn btn-primary">Detalles</button>
			</a>-->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
					Detalles
				</button>
		</th>
	</tr>
	<tr>
		<th>Playeras y Gorras Textiles</th>
		<th><?= $total_facturados_campochihuahua1 ?></th>
		<th><?= $total_correos_campochihuahua1 ?></th>
		<th><?= $total_llamadas_campochihuahua1 ?></th>
		<th><?= $total_llamadasycorreos_campochihuahua1 ?></th>
		<th><?= $total_descartados_campochihuahua1 ?></th>
		<th>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSucursalChihuahuaPlayeras">
				Detalles
			</button>
		</th>
	</tr>
</table>

<hr>