<?php
	$HTTP_HOST = $_SERVER['HTTP_HOST'];
	$REQUEST_URI = $_SERVER['REQUEST_URI'];

	$urlStrlen = strlen($REQUEST_URI);
	
	if ($urlStrlen == 18) {
		
		if ($usuario != '') {
			
			$url = 'http://' . $HTTP_HOST . $REQUEST_URI . '?';

		}
		
		else {
			
			$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '?';

		}

	}
	
	else {

		$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '';

	}

	

	
	$filtrarStatus = $_POST['filtrarStatus'];


?>

<style>

body {
	background-color:#eee;
}

.hasDatepicker {
	display: inline-block;
}

img.ui-datepicker-trigger {
	cursor: pointer;
	display: inline-block;
	position: absolute;
	width: 26%;

}


</style>
<?php
	
	# Variables
	$h4 = $_SESSION["h4"];
	$id_view = $_SESSION["id_view"];

?>


<div class="row" style="margin-top:-40px;">
	<div class="col-md-1"></div>
	<div class="col-md-10">

	<script src="js/Chart.min.js"></script>
	
<?php
	
	if ($filtrarporvendedor != '') {
		$where = "usuario = '$filtrarporvendedor' AND ";
	}

	else {
		$where = "";
	}


##############
if ($filtrarporvendedor != '') {
##############


if ($filterDate1 == '--' OR $filterDate1 == '') {
  if ($filterDate2 == '--' OR $filterDate2 == '') {
    #echo '1';
    $whereDate = '';
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
  else {
    #echo '2';
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
}
else {
  #echo '3';
    #$whereDate = "(fecharespuesta >= '$filterDate1')";
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
}

#####################################
/*
$whereDate = "(fecharespuesta >= '$filterDate1')";
$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
*/
  
  
}
else {
##############
$whereUser = '';
$whereDate = '';
#####################################  
}


$whereEquipo = '(usuario != '%equipo%') AND';

/*
ventasequipo1
ventasequipo2
ventasequipo3
ventasequipo4
ventasequipo5
ventasequipo6
ventasequipo7
admsoporte
equipomerida
equiposmonterrey
*/







		
		$result_facturado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'facturado') AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");
		$i_facturado = 0;
			while ($row_facturado = mysql_fetch_array($result_facturado)) {
				if ($i_facturado > 0) {}
					$i_facturado++;
			}

		$result_caliente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_caliente = 0;while ($row_caliente = mysql_fetch_array($result_caliente)) { if ($i_caliente > 0) {}$i_caliente++;}
		$result_tibio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_tibio = 0;while ($row_tibio = mysql_fetch_array($result_tibio)) { if ($i_tibio > 0) {}$i_tibio++;}
		$result_frio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'frio')AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_frio = 0;while ($row_frio = mysql_fetch_array($result_frio)) { if ($i_frio > 0) {}$i_frio++;}
		
		$result_llamada = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'llamada') AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_llamada = 0;while ($row_llamada = mysql_fetch_array($result_llamada)) { if ($i_llamada > 0) {}$i_llamada++;}
		$result_correo = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'correo') AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_correo = 0;while ($row_correo = mysql_fetch_array($result_correo)) { if ($i_correo > 0) {}$i_correo++;}
		$result_llamadaycorreo = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'llamadaycorreo') AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_llamadaycorreo = 0;while ($row_llamadaycorreo = mysql_fetch_array($result_llamadaycorreo)) { if ($i_llamadaycorreo > 0) {}$i_llamadaycorreo++;}

		# echo '<pre>' . $whereUser . ' | ' . $whereDate . '[' . $i_correo . ']</pre>';

		$result_pendiente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'Pendiente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_pendiente = 0;while ($row_pendiente = mysql_fetch_array($result_pendiente)) { if ($i_pendiente > 0) {}$i_pendiente++;}
		$result_descartado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'descartado') AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_descartado = 0;while ($row_descartado = mysql_fetch_array($result_descartado)) { if ($i_descartado > 0) {}$i_descartado++;}
		
		$result_seguimiento = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'seguimiento') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_seguimiento = 0;while ($row_seguimiento = mysql_fetch_array($result_seguimiento)) { if ($i_seguimiento > 0) {}$i_seguimiento++;}
		$result_postventa = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $whereUser $whereDate (estadodeventa = 'postventa') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' ORDER BY fecharespuesta desc limit 0,99999");$i_postventa = 0;while ($row_postventa = mysql_fetch_array($result_postventa)) { if ($i_postventa > 0) {}$i_postventa++;}
?>
<script>
		var pieData = [
				{
					value: <?= $i_facturado ?>,
					color:"#5cb85c",
					highlight: "#5cb85c",
					label: "Facturado"
				},
				/*
				{
					value: <?= $i_caliente ?>,
					color: "#d9534f",
					highlight: "#d9534f",
					label: "Caliente"
				},
				{
					value: <?= $i_tibio ?>,
					color: "#f0ad4e",
					highlight: "#f0ad4e",
					label: "Tibio"
				},
				{
					value: <?= $i_frio ?>,
					color: "#5bc0de",
					highlight: "#5bc0de",
					link: "http://google.com",
					label: "Frio"
				},
				*/
				{
					value: <?= $i_correo ?>,
					color: "#f0ad4e",
					highlight: "#f0ad4e",
					label: "Correo"
				},
				{
					value: <?= $i_llamada ?>,
					color: "#5bc0de",
					highlight: "#5bc0de",
					label: "Llamada"
				},
				{
					value: <?= $i_llamadaycorreo ?>,
					color: "#428bca",
					highlight: "#428bca",
					link: "http://google.com",
					label: "Llamada y Correo"
				},
				{
					value: <?= $i_descartado ?>,
					color: "#777777",
					highlight: "#eee",
					label: "Descartado"
				}
				/*
				,
				{
					value: <?= $i_pendiente ?>,
					color: "#222",
					highlight: "#222",
					label: "Pendiente"
				}
				*/

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};

	</script>

<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" style="margin:auto; max-width:85%; width:85%; ">
		<caption style="background-color:White;">
			<h3 style="margin-left:15px;">Bitácoras por Vendedor</h3>
		</caption>
		<tr>
			<td colspan="7" align="center">
				<div class="row">
  					<div class="col-lg-1 col-md-1" style=""></div>
  					<div class="col-lg-3 col-md-3 thumbnail" style="">
						<h4>Filtrar por Vendedor</h4>
						<form action="<?= $url ?>" method="post" id="filtrarporvendedor">
<?php

$filterDate1E = explode("-", $filterDate1);
$filterDate1 = ''.$filterDate1E[2].'-'.$filterDate1E[1].'-'.$filterDate1E[0].'';
$filterDate2E = explode("-", $filterDate2);
$filterDate2 = ''.$filterDate2E[2].'-'.$filterDate2E[1].'-'.$filterDate2E[0].'';

?>							
							<select name="filtrarporvendedor" class="form-control" onchange="this.form.submit()">
								<option value="">Todos</option>
								<?php 
									include('model/m.select.vendedores-actuales.php')
								?>
							</select>
							<input type="hidden" name="filtrarStatus" value="<?= $filtrarStatus ?>">
							<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
							<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
						</form>
  					</div>
  					<div class="col-lg-1 col-md-1" style=""></div>
  					<div class="col-lg-6 col-md-6 thumbnail">
						<div class="row" >
							<h4>Filtrar por Fecha</h4>
							<form action="<?= $url ?>" method="post" id="filtrarporfecha">
								<div class="col-md-1 col-lg-1"></div>
								<div class="col-md-1 col-lg-1">
									<strong>Desde:</strong>
								</div>
								<div class="col-md-3 col-lg-3">
									<div class="input-group input-group-md vista" id="campoparafecha">
										<input type="text" name="filterDate1" onlyread="onlyread" class="form-control datepicker" id="datepickerDesde" placeholder="<?= $filterDate1 ?>" value="<?= $filterDate1 ?>">
									</div>
								</div>
								<div class="col-md-1 col-lg-1">
									<strong>Hasta:</strong>
								</div>
								<div class="col-md-3 col-lg-3">
									<div class="input-group input-group-md vista" id="campoparafecha">
										<input type="text" name="filterDate2" onlyread="onlyread" class="form-control datepicker" id="datepickerHasta" placeholder="<?= $filterDate2 ?>" value="<?= $filterDate2 ?>">
									</div>
								</div>
								<div class="col-md-2 col-lg-2">
									<button type="button" class="btn btn-default btn-md" onclick="document.getElementById('filtrarporfecha').submit();">
										<span class="glyphicon glyphicon-filter"></span> Filtrar
									</button>
								</div>
								<div class="col-md-1 col-lg-1"></div>
								<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
								<input type="hidden" name="filtrarStatus" value="<?= $filtrarStatus ?>">
							</form>
						</div>
  					</div>
  					<div class="col-lg-1 col-md-1" style=""></div>
				</div>

				</td>
			</tr>
			<tr>
			<td colspan="7" style="background-color:White;" >
				<div class="row">
					<div class="col-md-3"></div>
  					<div class="col-md-6" style="text-align:center;">
  						<h4>Reporte de Status</h4>
						<table class="table table-striped table-bordered" width="100%">
							<tr>
								<td width="30%" style="vertical-align:middle;">
									<div style="width:200px; height150px; margin:auto;">
										<?php

											$i_total = $i_facturado + $i_correo + $i_llamada + $i_llamadaycorreo + $i_descartado;

											if ($i_total == 0) { 

												$i_datos = '<div class="sinDatos"></div><canvas id="chart-area" width="0" height="0"/>';

											}

											else {

												$i_datos = '<canvas id="chart-area" width="120" height="120"/>';

											}

										?>
										<?= $i_datos ?>
									</div>
								</td>
								<td width="70%">
									<ul>
										<!--
										<li>Caliente: <?= $i_caliente ?></li>
										<li>Tibio: <?= $i_tibio ?></li>
										<li>Frio: <?= $i_frio ?></li>
										-->
<!--										
										<li>Descartado: <?= $i_descartado ?></li>
										<li>Correo: <?= $i_correo ?></li>
										<li>Llamada: <?= $i_llamada ?></li>
										<li>Correo y Llamada: <?= $i_llamadaycorreo ?></li>
										<li>Facturado: <?= $i_facturado ?></li>
-->
									</ul>
									<table class="table table-bordered table-striped table-condensed table-hover" style="width:100%;">
										<tr>
											<tr>
												<th class=""><span class="label label-success"><?= $i_facturado ?></span></th><td style="text-align:left;">Facturado</td>
											</tr>
											<tr>
												<th class=""><span class="label label-warning"><?= $i_correo ?></span></th><td style="text-align:left;">Correo</td>
											</tr>
											<tr>
												<th class=""><span class="label label-info"><?= $i_llamada ?></span></th><td style="text-align:left;">Llamada</td>
											</tr>
											<tr>
												<th class=""><span class="label label-primary"><?= $i_llamadaycorreo ?></span></th><td style="text-align:left;">Correo y Llamada</td>
											</tr>
											<tr>
												<th style="width:5%;"><span class="label label-default"><?= $i_descartado ?></span></th><td style="text-align:left; width:95%;">Descartado</td>
											</tr>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-md-3"></div>
				</div>
			</td>
		</tr>

<?php
	
	# TR
	

	$c = $mysql->query($select);

		$contador = 0;

	while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

		if ($contador == 0) {
			include('view/v.history-01.admin.php');
		}

		else {

		}

		$contador++;

		$fecharespuestaE = explode("-", $rows['fecharespuesta']);	
		$usuario = $rows['usuario'];
		$id_seguimiento = $rows['id_seguimiento'];
		$usuario = $rows['usuario'];
		$termometro = $rows['termometro'];
		$estadodeventa = $rows['estadodeventa'];
		$comentariovendedor = $rows['comentariovendedor'];
		$factura = $rows['factura'];
		$fechaasignacion = $rows['fechaasignacion'];
		$horaasignacion = $rows['horaasignacion'];
		$fecharespuesta = $rows['fecharespuesta'];
		$fechaproximaE = explode("-", $rows['fechaproxima']);	
		$horarespuesta = $rows['horarespuesta'];


		# TD

		if ($comentariovendedor == 'Dar seguimiento') {
			
		}
		else {
			include('view/v.history-02.admin.php');	
		}
		

	}

?>
		<tr>
			<td colspan="7" style="background-color:White; text-align:center;" >
<?php

	if ($contador == 0) {
		?>
			<div class="alert alert-warning" role="alert">
				<h2>
				 	<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> 
				 	La búsqueda ha devuelto un conjunto de valores vacío.
				</h2>
			</div>
		<?php
	}

	else {

	}
	
?>
			</td>
		</tr>
	</table>
</div>

<center>
	<div style="margin:auto;">
		<ul class="pagination pagination-sm">

<?php

	for($k=1; $k <= $total; $k++) {
		
		if($ini == $k) {

?>

			<li class="active"><a href='#'><b><?= $k ?></b></a></li>

<?php

		}

		else {

?>
			
			<li><a href='<?= $url ?>&pos=<?= $k ?>'><?= $k ?></a></li>

<?php
		
		}

	}

?>
		</ul>
	</div>
</center>

	<!--/ Contenido Dinamico-->
	</div>
	<div class="col-md-1"></div>
</div>