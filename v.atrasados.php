<?php
	
	include('inc/menu-superior.php');
	include('controller/c.atrasados.php');

?>

<div class="row" style="margin-top:-20px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-10" style="background-color:White;">
	<!-- 1111111111111111111111111111111111111111111111111111 -->

<?php

	$filtrarporvendedor = $_POST['filtrarporvendedor'];

	$filterDate1E = explode("-", $filterDate1);
	$filterDate1 = ''. $filterDate1E[2]. '-'. $filterDate1E[1] .'-'. $filterDate1E[0] . '';

	$filterDate2E = explode("-", $filterDate2);
	$filterDate2 = ''. $filterDate2E[2]. '-'. $filterDate2E[1] .'-'. $filterDate2E[0] . '';


	if ($filterDate1 == '--') {
		$filterDate1 = '';
	}
	else {
	
	}

	if ($filterDate2 == '--') {
		$filterDate2 = '';
	}
	else {

	}

?>

<form action="<?= $url ?>" method="post" id="filtrarporfecha">

<div class="row" style="background-color:#fff;">
	<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
		<h3 style="margin-bottom:10px;">Reporte de <span class="label label-danger">Atrasados</span></h3>
	</div>
	<div class="col-md-7 col-lg-7 col-sm-7 col-xs-7">
		<!--
		<div class="row">
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
				<h5>Filtrar por Fecha</h5>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
				<strong>Desde:</strong>
				<div class="input-group input-group-md vista" id="campoparafecha">
					<input type="text" name="filterDate1" onlyread="onlyread" class="form-control datepicker" id="datepickerDesde" placeholder="<?= $filterDate1 ?>" value="<?= $filterDate1 ?>" style="width:140px;" value="<?= $filterDate1 ?>">
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
				<strong>Hasta:</strong>
				<div class="input-group input-group-md vista" id="campoparafecha">
					<input type="text" name="filterDate2" onlyread="onlyread" class="form-control datepicker" id="datepickerHasta" placeholder="<?= $filterDate2 ?>" value="<?= $filterDate2 ?>" style="width:140px;" value="<?= $filterDate2 ?>">
				</div>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
				<br>
				<button type="button" class="btn btn-default btn-md" onclick="document.getElementById('filtrarporfecha').submit();" style="margin:auto; margin-right:50px;">
					<span class="glyphicon glyphicon-filter"></span> Filtrar
				</button>
			</div>
		</div>
		-->
	</div>
</div>
	<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
	<input type="hidden" name="filtrarStatus" value="<?= $filtrarStatus ?>">	
</form>


<div class="row" style="margin-top:10px;">
	<div class="col-md-12" style="background-color:#fff;">
						
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="panel panel-primary">
  					<div class="panel-heading">Equipo</div>
  					<div class="panel-body">
    						<table class="table table-condensed" style="width:100%; background-color:white;">
							<tr>
								<td width="40%" style="vertical-align:middle;">
									<div style="width:125px; height125px; margin:auto;">
										<canvas id="chart-StatusEquipo" width="125" height="125"/>
									</div>
								</td>
								<td width="60%">
									<?php
										$a = $consultas_numero_asignacionesHoy + $consultas_numero_pendientes;
										$b = $consultas_numero_asignacionesTotal - $a;
									?>
									<table class="table table-bordered table-striped table-condensed table-hover" style="width:100%; margin-bottom:0;">
										<tr>
											<th class=""><span class="label label-success"><?= $total_correos_angelica ?></span></th><td>Hoy</td>
										</tr>
										<tr>
											<th class=""><span class="label label-warning"><?= $total_correosT ?></span></th><td>Asignaciones</td>
										</tr>
										<tr>
											<th class=""><span class="label label-danger"><?= $total_llamadasT ?></span></th><td>Atrasados</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td colspan="2" style="text-align:center;">
									<a href="if.consultas?iframe=02">
										<button type="button" class="btn btn-primary">Detalles</button>
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<table class="table table-bordered table-striped table-condensed table-hover">
					<tr>
						<th>Usuario</th>
						<th>Hoy</th>
						<th>Asignaciones</th>
						<th>Atrasados</th>
					</tr>
					<?php

						for ($i=1; $i < 12; $i++) { 

					?>
						
					<tr>
						<th><?= $usuariosEquipo[$i] ?></th>
						<td><?php semaforoHoy($usuariosEquipo[$i]) ?></td>
						<td><?php semaforoAsignaciones($usuariosEquipo[$i]) ?></td>
						<td>
							<span class="label label-danger"><?php semaforoAtrasados($usuariosEquipo[$i]) ?></span>
						</td>
					</tr>

					<?php

						}

					?>
					<tr>
						<th><?= $usuariosEquipo[$i] ?></th>
						<td><?php semaforoHoy($usuariosEquipo[$i]) ?></td>
						<td><?php semaforoAsignaciones($usuariosEquipo[$i]) ?></td>
						<td>
							<span class="label label-danger"><?php semaforoAtrasados($usuariosEquipo[$i],'0') ?></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>



	<!-- 1111111111111111111111111111111111111111111111111111 -->
	</div>
	<div class="col-sm-1"></div>
</div>