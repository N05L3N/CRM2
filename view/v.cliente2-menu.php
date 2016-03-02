<?php
	# if ($_SESSION['departamento'] == 'consumibles' OR $_SESSION['departamento'] == 'telemarketing') {
	if ($_SESSION['tipo'] == 'administrador' OR $_SESSION['tipo'] == 'Encargado de Sucursal') {
		
	}
	else {


?>

<div class="row">
	<div class="col-xs-4 col-sm-4 col-md-4">

		<form action="model/mc.termometro.php" method="post" id="verde">
			<input type="hidden" name="termometro" value="verde">
	
		<?php
			$termometro = $_SESSION["termometro"];

			$termometro_actual = '';
			
			if ($termometro == 'verde' OR $termometro == '') {
				$termometro_actual = 'btn-lg';
					$text = 'Seguimiento';
					$color = 'primary';
			}
			
			else {
				$text = 'Seguimiento';
				$color = 'default';
			}
			
			# echo '('.$termometro.'-'.$termometro_actual.'-'.$color.')';
		?>

			<button type="button" class="btn btn-<?= $color ?> btn-xs <?= $termometro_actual ?>" onclick="document.getElementById('verde').submit();"><!-- Por Cierre --> <?= $text ?></button>
		</form>
	
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4">

		<form action="model/mc.termometro.php" method="post" id="rojo">
			<input type="hidden" name="termometro" value="rojo">
		<?php
			if  ($termometro == 'rojo') {
				$termometro_actual = 'btn-lg';
					$text = 'Postventa';
					$color = 'primary';
			}
			else {
				$text = 'Postventa';
				$color = 'default';
			}
		?>
			<button type="button" class="btn btn-<?= $color ?> btn-xs <?= $termometro_actual ?>" onclick="document.getElementById('rojo').submit();"><!-- Por Cierre --> <?= $text ?></button>
		</form>
	
	</div>
</div>

<?php
	
	}

?>