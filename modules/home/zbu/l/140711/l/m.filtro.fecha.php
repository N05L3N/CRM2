<?php
	$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
	$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

	$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
	$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';
?>


<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			Filtrar por Fecha de Contacto: <!-- Desde <?= $fecha_inicio_filtro_mx ?> Hasta <?= $fecha_fin_filtro_mx ?> -->
		</h3>
	</div>
	


	<form action="controller/c.filtro.fecha.php" method="post" id="filtrarporfecha">


<table>
	<tr>
		<td>
			
		

<table class="table-condensed">
	<tr>
		<th>Desde: </th>
		<td>
			<select name="v1" class="form-control">
			
<?php
	
	if ($fecha_inicio_filtro == '--') {

?>

				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>

<?php

	}

	else {

?>
	
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>

<?php

	}

?>			




<?php
$i = 10;
while ($i <= 31) {
    echo "<option value='".$i."'>".$i."</option>";
	echo $i++;  
}
?>
			</select>
		</td>
		<td>
			<select name="v2" class="form-control">
				<option value="01">Enero</option>
				<option value="02">Febrero</option>
				<option value="03">Marzo</option>
				<option value="04">Abril</option>
				<option value="05">Mayo</option>
				<option value="06">Junio</option>
				<option value="07">Julio</option>
				<option value="08">Agosto</option>
				<option value="09">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select>
		</td>
		<td>
			<select name="v3" class="form-control">
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
</select>
		</td>
		<th>Hasta</th>
		<td>
			<select name="v11" class="form-control">
				
<?php
	
	if ($fecha_fin_filtro == '--') {

?>

				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>

<?php

	}

	else {
?>

				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>

<?php

	}

?>

				<?php
				$i = 10;
				while ($i <= 31) {
				    echo "<option value='".$i."'>".$i."</option>";
					echo $i++;  
				}
				?>
				</select>
		<td>
			<select name="v22" class="form-control">
				<option value="01">Enero</option>
				<option value="02">Febrero</option>
				<option value="03">Marzo</option>
				<option value="04">Abril</option>
				<option value="05">Mayo</option>
				<option value="06">Junio</option>
				<option value="07">Julio</option>
				<option value="08">Agosto</option>
				<option value="09">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select>
		</td>
		<td>
			<select name="v33" class="form-control">
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
			</select>
		</td>
		<td>
			<!--
				<button type="button" class="btn btn-default btn-md" onclick="document.getElementById('filtrarporfecha').submit();">
	  				<span class="glyphicon glyphicon-search"></span> Filtrar
				</button>
			-->
			<input type="submit" value="Filtrar" class="form-control btn btn-primary btn-xs" />
		</td>
	
		<!--
		<td>
			<button type="button" class="btn btn-danger btn-xs">
  				<span class="glyphicon glyphicon-calendar"></span> Mostrar Registros desde: <?php echo ''.$fecha_inicio_filtro_mx.''; ?> Hasta <?php echo ''.$fecha_fin_filtro_mx.''; ?>
			</button>
		</td>
		-->
	</tr>
</table>
</form>

</td>
		<td>
			<form action="controller/c.filtro.fecha-reset.php" method="post">
				<input type="submit" value="Quitar Filtro" class="form-control btn btn-default btn-xs" />
			</form>	
		</td>
	</tr>
</table>
		

</div>