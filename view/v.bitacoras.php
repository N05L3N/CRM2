<?php
		
	include('inc/menu-superior.php');

	if ($departamento == 'consumibles') {
		
		$usuarios = array(0 => '', 11 => 'campochihuahua1', 12 => 'gaguirre', 13 => 'lcera', 14 => 'lesparza', 15 => 'rgonzalez', 16 => 'servicioalcliente1', 17 => 'ventascat05', 18 => 'ventascat13', 19 => 'rubi', 20 => 'mario', 21 => 'angelica', 22 => 'leticia', 23 => 'gaguirre', 24 => 'servicioalcliente1');
		$iniciarFOR = 11;

	}

	else {
		$usuarios = array(0 => '', 1 => 'ventasequipo1', 2 => 'ventasequipo2', 3 => 'ventasequipo3', 4 => 'ventasequipo4', 5 => 'ventasequipo5', 6 => 'ventasequipo6', 7 => 'ventasequipo7', 8 => 'admsoporte', 9 => 'equipomerida', 10 => 'equiposmonterrey', 11 => 'campochihuahua1', 12 => 'gaguirre', 13 => 'lcera', 14 => 'lesparza', 15 => 'rgonzalez', 16 => 'servicioalcliente1', 17 => 'ventascat05', 18 => 'ventascat13', 19 => 'rubi', 20 => 'mario', 21 => 'angelica', 22 => 'leticia', 23 => 'gaguirre', 24 => 'servicioalcliente1');	
		$iniciarFOR = 1;
	}
 

?>



<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Bitácora</h1>
		
		<table>
			<tr>
				<th>
					Vendedor:
				</th>
				<td>
					<form action="bitacoras.php" method="get">
						
						<select name="vendedor" id="" class="form-control" onchange="this.form.submit()">
							<?php
								
								if ($_SESSION['tipo'] == 'vendedor') {
							?>
							<option value="<?= $_SESSION['usuario'] ?>"><?= $_SESSION['usuario'] ?></option>

							<?php
								}
								else {

							?>
							<option value=""></option>
							<?php
								
								for ($i=$iniciarFOR; $i < 25; $i++) { 
			
								$usuario = $usuarios[$i];

									if ($usuario == $_GET['vendedor']) {

							?>
										<option value="<?= $usuario ?>" selected><?= $usuario ?></option>
							<?php

									}
									else {

							?>
										<option value="<?= $usuario ?>"><?= $usuario ?></option>
							<?php

									}
								}
							}

							?>
						</select>
					</form>
				</td>
			</tr>
		</table>

		<br>



	</div>
	<div class="col-md-4"></div>
</div>




<div class="row">
	<div class="col-md-12">

<?php
	
	if ($_SESSION['tipo'] == 'vendedor') {
		
		$usuario = $_SESSION['usuario'];

	}

	else {

		$usuario = $_GET['vendedor'];

	}

?>



	</div>
</div>



<!-- -->
<!-- -->


<?php	

	$view = 'anual';
	include('v.bitacoras_02.php');


?>

<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr class="active">
		<th>Mes</th>
		<th>Número de Seguimientos (2014)</th>
		<th>Número de Seguimientos (2015)</th>
	</tr>
<?php 

	$meses = array(0 => '', 1 => '01', 2 => '02', 3 => '03', 4 => '04', 5 => '05', 6 => '06', 7 => '07', 8 => '08', 9 => '09', 10 => '10', 11 => '11', 12 => '12');

	for ($i=1; $i < 13; $i++) { 
		
		$mes = $meses[$i];

		if ($mes == '01') {
			$mesNombre = 'Enero';
		}
		else if ($mes == '02') {
			$mesNombre = 'Febrero';
		}
		else if ($mes == '03') {
			$mesNombre = 'Marzo';
		}
		else if ($mes == '04') {
			$mesNombre = 'Abril';
		}
		else if ($mes == '05') {
			$mesNombre = 'Mayo';
		}
		else if ($mes == '06') {
			$mesNombre = 'Junio';
		}
		else if ($mes == '07') {
			$mesNombre = 'Julio';
		}
		else if ($mes == '08') {
			$mesNombre = 'Agosto';
		}
		else if ($mes == '09') {
			$mesNombre = 'Septiembre';
		}
		else if ($mes == '10') {
			$mesNombre = 'Octubre';
		}
		else if ($mes == '11') {
			$mesNombre = 'Noviembre';
		}
		else if ($mes == '12') {
			$mesNombre = 'Diciembre';
		}
		else {
			$mesNombre;
		}

		$fecha_01 = '2014-'.$mes.'-01';
		$fecha_02 = '2014-'.$mes.'-31';

		$fecha2014_01 = '2014-'.$mes.'-01';
		$fecha2014_02 = '2014-'.$mes.'-31';

		$fecha2015_01 = '2015-'.$mes.'-01';
		$fecha2015_02 = '2015-'.$mes.'-31';
	
		include('v.bitacoras_03.php');
	}


?>
</table>
<!-- -->

<!-- -->

















<?php

	if ($usuario == 'rgonzalez') {
?>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Bitacora Quejas</h1>
	</div>
	<div class="col-md-4"></div>
</div>



<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<caption>
		<a href="model/m.bitacoras.php?xls=download">
			<button>
				Descargar en Excel
			</button>
		</a>
	</caption>
	<tr class="active">
		<th>Fecha</th>
		<th>Nombre del Cliente</th>
		<th>Sucursal del Cliente</th>
		<th>Datos de Contacto</th>
		<th>Nombre de quien Reporta</th>
		<th>Motivo del Reporte</th>
		<th>Descripción (Breve)</th>
		<th>Comentarios</th>
		<th>Acción realizada</th>
		<th>Respuesta</th>
		<th>Area</th>
	</tr>
<?php 

	include('v.bitacoras.quejas.php');

?>
</table>

<?php		
	}
	else {

	}

?>