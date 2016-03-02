<div style="background-color:white;">
<center>
<table style="margin-top:-75px;">
	<tr>
		<td>
			<form action="model/mc.termometro.php" method="post" id="verde">
				<input type="hidden" name="termometro" value="verde">
				<?php
					$termometro_actual = '';
					if ($termometro == 'verde') {
						$termometro_actual = 'btn-lg';
					}
					else {}
				?>
				<button type="button" class="btn btn-success <?php echo $termometro_actual;?>" onclick="document.getElementById('verde').submit();">Verde</button>
			</form>
		</td>
		<td>
			<form action="model/mc.termometro.php" method="post" id="amarillo">
				<input type="hidden" name="termometro" value="amarillo">
				<?php
					$termometro_actual = '';
					if ($termometro == 'amarillo') {
						$termometro_actual = 'btn-lg';
					}
					else {}
				?>
				<button type="button" class="btn btn-warning <?php echo $termometro_actual;?>" onclick="document.getElementById('amarillo').submit();">Amarillo</button>
			</form>
		</td>
		<td>
			<form action="model/mc.termometro.php" method="post" id="rojo">
				<input type="hidden" name="termometro" value="rojo">
				<?php
					$termometro_actual = '';
					if ($termometro == 'rojo') {
						$termometro_actual = 'btn-lg';
					}
					else {}
				?>
				<button type="button" class="btn btn-danger <?php echo $termometro_actual;?>" onclick="document.getElementById('rojo').submit();">Rojo</button>
			</form>
		</td>
	</tr>
</table>
</center>

<br><br><br>

<div style="background-color:white;">

<?php
  include('inc/i.form.seguimientos.actualizar-recomendacion.php');
?>
</div>
</div>