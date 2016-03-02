<?php
	
	$HTTP_HOST = $_SERVER['HTTP_HOST'];
	$REQUEST_URI = $_SERVER['REQUEST_URI'];
	
	if ($usuario != '') {
		$url = 'http://' . $HTTP_HOST . $REQUEST_URI . '';	
	}
	else {
		$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '?';
	}
	
	
	
?>

<!-- -->
<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr>
		<td style="width:50%;">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Filtrar por Fecha de Registro</h3>
				</div>
				<div class="panel-body">
					<?php include('view/v.bitacoras_02-filtro-por-fecha_01datepicker.phtml') ?>
				</div>
			</div>
		</td>
		<td style="width:50%;">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Filtrar por Status de Seguimiento</h3>
				</div>
				<div class="panel-body">
					<?php include('view/v.bitacoras_02-filtro-por-fecha_01datepicker2.phtml') ?>
				</div>
			</div>
		</td>
	</tr>
</table>
<br>

<!-- -->
<span id="<?= $usuario ?>"></span>
<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr class="active">
		<th colspan="2">
			Bitácora de <?= $usuario ?>
		</th>
	</tr>
	<tr>
		<td colspan="2">
			
		</td>
	</tr>
	<tr>

	<?php

		# QUERIES

		$orderBy = $_GET['orderBy'];
		$whereStatus = $_GET['filterStatus'];


		if ($orderBy != '') {
			
		}

		else {
			
			$orderBy = 'fecharespuesta';
			
		}

# USUARIO

		if ($usuario != '') {

			$wereUser = 'usuario = \'' . $usuario . '\' AND';
				
		}

		else {
			
			if ($departamento == 'consumibles') {
				
				$wereUser = 'usuario = \'consumibles\' AND';

				for ($i=$iniciarFOR; $i < 25; $i++) { 
					# echo 'usuario = \''. $usuarios[$i] .'\' OR ';
					$fxy = ''.$fxy.' usuario = \''. $usuarios[$i] .'\' OR ';
				}

				$where10 = substr($fxy, 0, -4);

				# echo $where10;
				$wereUser = $where10 .' AND';

			}
			
			else {

				$wereUser = '';

			}
			
			$wereUser = '(' . $where10 .') AND';
		}

# / USUARIO

		if ($whereStatus == 2) {
			
			$whereStatus = '(estadodeventa = \'Llamada\' OR estadodeventa = \'llamada\') AND';

		}

		else if ($whereStatus == 3) {
			
			$whereStatus = '(estadodeventa = \'Correo\' OR estadodeventa = \'correo\') AND';

		}

		else if ($whereStatus == 4) {
			
			$whereStatus = '(estadodeventa = \'LlamadayCorreo\' OR estadodeventa = \'Llamadaycorreo\') AND';

		}

		else if ($whereStatus == 5) {
			
			$whereStatus = '(estadodeventa = \'Facturado\') AND';

		}

		else {

		}


			if ($view == 'diaria') {
			
				$fecha_actual = date('Y-m-d');
				$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus fecharespuesta = '$fecha_actual' AND (comentariovendedor != 'Dar seguimiento') ORDER BY fechaproxima desc limit 999";

			}

			else if ($view == 'mensual') {
			
				$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus (fecharespuesta >= '2015-03-01' AND fecharespuesta <= '2015-03-31') AND (comentariovendedor != 'Dar seguimiento') ORDER BY fechaproxima desc limit 999";

			}

			else if ($view == 'anual') {
			
				$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus (fecharespuesta >= '2015-01-01' AND fecharespuesta <= '2015-12-31') AND (comentariovendedor != 'Dar seguimiento') ORDER BY $orderBy desc limit 9999";
				 # echo '<pre>' . $query_bitacora . '</pre>';

			}

			else if ($view == 'toda') {
			
				$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus AND (fecharespuesta >= '2010-01-01' AND fecharespuesta <= '2020-12-31') AND (comentariovendedor != 'Dar seguimiento') ORDER BY fechaproxima desc limit 9999";

			}

			else {

			}

		
		

		
		$result_bitacora = mysql_query("$query_bitacora");
		# echo '<pre>' .$query_bitacora. '</pre>';
		$i_bitacora = 0;
  		while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    			if ($i_bitacora > 0) {}
				# $id_bitacora = $row_bitacora['id_seguimiento'];
			$i_bitacora++;
    		}
	?>
		<th style="width:25%;">
			Total:
		</th>
		<td style="width:75%;"><?= $i_bitacora ?></td>
	</tr>
</table>

<table class="table table-bordered table-condesed" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr>
		<th>
			<a href="<?= $url ?>&orderBy=id_seguimiento">
			Folio
			</a>
		</th>
		<th style="width:10%;">
			<a href="<?= $url ?>&orderBy=usuario">
				Vendedor
			</a>
		</th>
		<th style="width:10%;">
			<a href="<?= $url ?>&orderBy=fecharespuesta">
				Fecha
			</a>
		</th>
		<th>
			<a href="<?= $url ?>&orderBy=horarespuesta">
			Hora
			</a>
		</th>
		<th>
			<a href="<?= $url ?>&orderBy=comentariovendedor">
			Comentarios
			</a>
		</th>
		<th>
			<a href="<?= $url ?>&orderBy=estadodeventa">
				Status
			</a>
		</th>
	</tr>
	<?php


		if ($view == 'diaria') {
			
			$fecha_actual = date('Y-m-d');
			$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE ($wereUser fecharespuesta = '$fecha_actual') AND (comentariovendedor != 'Dar seguimiento') ORDER BY id_comentarios_v ASC limit 999";

		}

		else if ($view == 'mensual') {
			
			$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus (fecharespuesta >= '2015-03-01' AND fecharespuesta <= '2015-03-31') AND (comentariovendedor != 'Dar seguimiento') ORDER BY id_comentarios_v ASC limit 999";
			#echo '<pre>'. $query_bitacora .  '</pre>';

		}

		else if ($view == 'anual') {
			
			$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus (fecharespuesta >= '2015-01-01' AND fecharespuesta <= '2015-12-31') AND (comentariovendedor != 'Dar seguimiento') ORDER BY $orderBy ASC limit 9999";
			#echo '<pre>'. $query_bitacora .  '</pre>';

		}

		else if ($view == 'toda') {
			
			$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE $wereUser $whereStatus (fecharespuesta >= '2010-01-01' AND fecharespuesta <= '2020-12-31') AND (comentariovendedor != 'Dar seguimiento') ORDER BY id_comentarios_v ASC limit 9999";
			#echo '<pre>'. $query_bitacora .  '</pre>';

		}

		else {
			
		}
		
		$result_bitacora = mysql_query("$query_bitacora");
		# echo '<pre>' .$query_bitacora. '</pre>';
		$i_bitacora = 0;
  		while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    			if ($i_bitacora > 0) {}
				$id_seguimiento = $row_bitacora['id_seguimiento'];
				$usuario = $row_bitacora['usuario'];
				$horarespuesta = $row_bitacora['horarespuesta'];
				$comentariovendedor = $row_bitacora['comentariovendedor'];
				$estadodeventa = $row_bitacora['estadodeventa'];
				
				$fecharespuesta = $row_bitacora['fecharespuesta'];
				$fecharespuestaE = explode("-", $fecharespuesta);
?>

		<tr>
			<td style="width:10%;">
				<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
					<?= $id_seguimiento ?>
				</a>
			</td>
			<td style="width:10%;"><?= $usuario ?></td>
			<td style="width:10%;"><?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?></td>
			<td style="width:10%;"><?= $horarespuesta ?></td>
			<td style="width:70%;"><?= $comentariovendedor ?></td>
			<td style="width:10%;">
				
				<?php

					if ($estadodeventa == 'frio') {
						$classStatus = 'info';
					}
					else if ($estadodeventa == 'tibio') {
						$classStatus = 'warning';
					}
					else if ($estadodeventa == 'caliente') {
						$classStatus = 'danger';
					}
					else if ($estadodeventa == 'facturado') {
						$classStatus = 'success';
					}
					
					else if ($estadodeventa == 'correo') {
						$classStatus = 'warning';
					}
					else if ($estadodeventa == 'llamada') {
						$classStatus = 'info';
					}
					else if ($estadodeventa == 'llamadaycorreo') {
						$classStatus = 'primary';
					}

					else {
						$classStatus = 'default';
					}


					if ($estadodeventa == 'no' OR $estadodeventa == '') {
						$estadodeventa = 'Descartado';
					}
					else {}
				?>

				<div class="label label-<?= $classStatus ?>" style="width:100px; display: inline-block; text-transform: capitalize;">
					<?= $estadodeventa ?>
				</div>
			</td>
		</tr>
	<?php

		$i_bitacora++;
    		}

	?>
</table>
