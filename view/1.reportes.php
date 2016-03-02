<div class="row" style="margin-top:-20px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-10" style="background-color:White;">

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
		<h3 style="margin-bottom:10px;">Reporte de Seguimientos</h3>
	</div>
	<div class="col-md-7 col-lg-7 col-sm-7 col-xs-7">
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
	</div>
</div>
	<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
	<input type="hidden" name="filtrarStatus" value="<?= $filtrarStatus ?>">	
</form>

<hr>


<?php
	
	if ($_SESSION['tipo'] == 'Encargado de Sucursal') {

		include('view/1.reportes.01-telemarketing.php');
		include('view/1.reportes.02-sucursales.php');
		
		if ($_SESSION['usuario'] == 'esmex01') {
			include('view/1.reportes.02-sucursal.estadodemexico.php');
		}
		else if ($_SESSION['usuario'] == 'esaguascalientes01') {
			include('view/1.reportes.02-sucursal.aguascalientes.php');
		}
		else if ($_SESSION['usuario'] == 'esguadalajara01') {
			include('view/1.reportes.02-sucursal.guadalajara.php');
		}
		else {

		}
	}

	else if ($_SESSION['tipo'] == 'administrador') {

		include('view/1.reportes-am.php');
		include('view/1.reportes-sucursales.php');

		# Modals
		include('view/1.reportes.01-telemarketing.php');
		include('view/1.reportes.02-sucursales.php');

	}

	else {

	}


?>

		</div>
	</div>
</div>