<table class="table table-bordered table-condesed" style="width:90%; margin:auto;" id="bitacora">
	<caption style="text-align:left;">
		<h3>Seguimientos por Mes y Año</h3>
	</caption>
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
	
		include('v.consultas_03.php');
	}

?>
<!-- -->
</table>
<br>