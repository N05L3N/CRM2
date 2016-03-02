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
				<option value=""></option>
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
$i = 10;
while ($i <= 31) {

	if ($_SESSION["v1"] == $i) {
		echo "<option value='".$i."' selected>".$i."</option>";	
	}
    else {
    	echo "<option value='".$i."'>".$i."</option>";		
    }

	echo $i++;  
}
?>

<?php

	}

	else {

?>
				<option value=""></option>


<?php 
	if ($_SESSION["v1"] == '01') {
?>
				<option value="01" selected>01</option>
<?php
	}
	else {
?>
				<option value="01">01</option>
<?php		
	}

	if ($_SESSION["v1"] == '02') {
?>
				<option value="02" selected>02</option>
<?php
	}
	else {
?>
				<option value="02">02</option>
<?php		
	}

	if ($_SESSION["v1"] == '03') {
?>
				<option value="03" selected>03</option>
<?php
	}
	else {
?>
				<option value="03">03</option>
<?php		
	}

	if ($_SESSION["v1"] == '04') {
?>
				<option value="04" selected>04</option>
<?php
	}
	else {
?>
				<option value="04">04</option>
<?php		
	}

	if ($_SESSION["v1"] == '05') {
?>
				<option value="05" selected>05</option>
<?php
	}
	else {
?>
				<option value="05">05</option>
<?php		
	}

	if ($_SESSION["v1"] == '06') {
?>
				<option value="06" selected>06</option>
<?php
	}
	else {
?>
				<option value="06">06</option>
<?php		
	}

	if ($_SESSION["v1"] == '07') {
?>
				<option value="07" selected>07</option>
<?php
	}
	else {
?>
				<option value="07">07</option>
<?php		
	}

	if ($_SESSION["v1"] == '08') {
?>
				<option value="08" selected>08</option>
<?php
	}
	else {
?>
				<option value="08">08</option>
<?php		
	}

	if ($_SESSION["v1"] == '09') {
?>
				<option value="09" selected>09</option>
<?php
	}
	else {
?>
				<option value="09">09</option>
<?php		
	}
?>


<?php
$i = 10;
while ($i <= 31) {

	if ($_SESSION["v1"] == $i) {
		echo "<option value='".$i."' selected>".$i."</option>";	
	}
    else {
    	echo "<option value='".$i."'>".$i."</option>";		
    }

	echo $i++;  
}

}
?>
			</select>
		</td>
		<td>
			<select name="v2" class="form-control">
<?php
	
	if ($fecha_inicio_filtro == '--') {

?>				
				<option value=""></option>
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
<?php
	}
	else {
?>


<?php 
	if ($_SESSION["v2"] == '01') {
?>
				<option value="01" selected>Enero</option>
<?php
	}
	else {
?>
				<option value="01">Enero</option>
<?php		
	}
?>
<?php
	if ($_SESSION["v2"] == '02') {
?>
				<option value="02" selected>Febrero</option>

<?php		
	}
	else {
?>			
				<option value="02">Febrero</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '03') {
?>
				<option value="03" selected>Marzo</option>

<?php		
	}
	else {
?>			
				<option value="03">Marzo</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '04') {
?>
				<option value="04" selected>Abril</option>

<?php		
	}
	else {
?>			
				<option value="04">Abril</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '05') {
?>
				<option value="05" selected>Mayo</option>

<?php		
	}
	else {
?>			
				<option value="05">Mayo</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '06') {
?>
				<option value="06" selected>Junio</option>

<?php		
	}
	else {
?>			
				<option value="06">Junio</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '07') {
?>
				<option value="07" selected>Julio</option>

<?php		
	}
	else {
?>			
				<option value="07">Julio</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '08') {
?>
				<option value="08" selected>Agosto</option>

<?php		
	}
	else {
?>			
				<option value="08">Agosto</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '09') {
?>
				<option value="09" selected>Septiembre</option>

<?php		
	}
	else {
?>			
				<option value="09">Septiembre</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '10') {
?>
				<option value="10" selected>Octubre</option>

<?php		
	}
	else {
?>			
				<option value="10">Octubre</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '11') {
?>
				<option value="11" selected>Noviembre</option>

<?php		
	}
	else {
?>			
				<option value="11">Noviembre</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v2"] == '12') {
?>
				<option value="12" selected>Diciembre</option>

<?php		
	}
	else {
?>			
				<option value="12">Diciembre</option>
<?php		
	}
}
?>
			</select>
		</td>
		<td>
			<select name="v3" class="form-control">
<?php
	
	if ($fecha_inicio_filtro == '--') {

?>					
				<option value=""></option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
<?php
	}
	else {
?>



<?php 
	if ($_SESSION["v3"] == '2016') {
?>
				<option value="2016" selected>2016</option>
<?php
	}
	else {
?>
				<option value="2016">2016</option>
<?php		
	}
?>



<?php 
	if ($_SESSION["v3"] == '2015') {
?>
				<option value="2015" selected>2015</option>
<?php
	}
	else {
?>
				<option value="2015">2015</option>
<?php		
	}
?>



<?php 
	if ($_SESSION["v3"] == '2014') {
?>
				<option value="2014" selected>2014</option>
<?php
	}
	else {
?>
				<option value="2014">2014</option>
<?php		
	}
?>

<?php 
	if ($_SESSION["v3"] == '2013') {
?>
				<option value="2013" selected>2013</option>
<?php
	}
	else {
?>
				<option value="2013">2013</option>
<?php		
	}
?>

<?php 
	if ($_SESSION["v3"] == '2012') {
?>
				<option value="2012" selected>2012</option>
<?php
	}
	else {
?>
				<option value="2012">2012</option>
<?php		
	}
?>

<?php 
	if ($_SESSION["v3"] == '2011') {
?>
				<option value="2011" selected>2011</option>
<?php
	}
	else {
?>
				<option value="2011">2011</option>
<?php		
	}
?>


<?php

	}

?>	
</select>
		</td>
		<th>Hasta</th>
		<td>
			<select name="v11" class="form-control">
<?php
	
	if ($fecha_fin_filtro == '--') {

?>
				<option value=""></option>
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
$i = 10;
while ($i <= 31) {

	if ($_SESSION["v1"] == $i) {
		echo "<option value='".$i."' selected>".$i."</option>";	
	}
    else {
    	echo "<option value='".$i."'>".$i."</option>";		
    }

	echo $i++;  
}
?>


<?php

	}

	else {

?>
				<option value=""></option>


<?php 
	if ($_SESSION["v11"] == '01') {
?>
				<option value="01" selected>01</option>
<?php
	}
	else {
?>
				<option value="01">01</option>
<?php		
	}

	if ($_SESSION["v11"] == '02') {
?>
				<option value="02" selected>02</option>
<?php
	}
	else {
?>
				<option value="02">02</option>
<?php		
	}

	if ($_SESSION["v11"] == '03') {
?>
				<option value="03" selected>03</option>
<?php
	}
	else {
?>
				<option value="03">03</option>
<?php		
	}

	if ($_SESSION["v11"] == '04') {
?>
				<option value="04" selected>04</option>
<?php
	}
	else {
?>
				<option value="04">04</option>
<?php		
	}

	if ($_SESSION["v11"] == '05') {
?>
				<option value="05" selected>05</option>
<?php
	}
	else {
?>
				<option value="05">05</option>
<?php		
	}

	if ($_SESSION["v11"] == '06') {
?>
				<option value="06" selected>06</option>
<?php
	}
	else {
?>
				<option value="06">06</option>
<?php		
	}

	if ($_SESSION["v11"] == '07') {
?>
				<option value="07" selected>07</option>
<?php
	}
	else {
?>
				<option value="07">07</option>
<?php		
	}

	if ($_SESSION["v11"] == '08') {
?>
				<option value="08" selected>08</option>
<?php
	}
	else {
?>
				<option value="08">08</option>
<?php		
	}

	if ($_SESSION["v11"] == '09') {
?>
				<option value="09" selected>09</option>
<?php
	}
	else {
?>
				<option value="09">09</option>
<?php		
	}
?>


<?php
$i = 10;
while ($i <= 31) {

	if ($_SESSION["v11"] == $i) {
		echo "<option value='".$i."' selected>".$i."</option>";	
	}
    else {
    	echo "<option value='".$i."'>".$i."</option>";		
    }

	echo $i++;  
}

}
?>
				</select>
		<td>
			<select name="v22" class="form-control">
<?php
	
	if ($fecha_fin_filtro == '--') {

?>				
				<option value=""></option>
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
<?php
	}
	else {
?>


<?php 
	if ($_SESSION["v22"] == '01') {
?>
				<option value="01" selected>Enero</option>
<?php
	}
	else {
?>
				<option value="01">Enero</option>
<?php		
	}
?>
<?php
	if ($_SESSION["v22"] == '02') {
?>
				<option value="02" selected>Febrero</option>

<?php		
	}
	else {
?>			
				<option value="02">Febrero</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '03') {
?>
				<option value="03" selected>Marzo</option>

<?php		
	}
	else {
?>			
				<option value="03">Marzo</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '04') {
?>
				<option value="04" selected>Abril</option>

<?php		
	}
	else {
?>			
				<option value="04">Abril</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '05') {
?>
				<option value="05" selected>Mayo</option>

<?php		
	}
	else {
?>			
				<option value="05">Mayo</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '06') {
?>
				<option value="06" selected>Junio</option>

<?php		
	}
	else {
?>			
				<option value="06">Junio</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '07') {
?>
				<option value="07" selected>Julio</option>

<?php		
	}
	else {
?>			
				<option value="07">Julio</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '08') {
?>
				<option value="08" selected>Agosto</option>

<?php		
	}
	else {
?>			
				<option value="08">Agosto</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '09') {
?>
				<option value="09" selected>Septiembre</option>

<?php		
	}
	else {
?>			
				<option value="09">Septiembre</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '10') {
?>
				<option value="10" selected>Octubre</option>

<?php		
	}
	else {
?>			
				<option value="10">Octubre</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '11') {
?>
				<option value="11" selected>Noviembre</option>

<?php		
	}
	else {
?>			
				<option value="11">Noviembre</option>
<?php		
	}	
?>
<?php
	if ($_SESSION["v22"] == '12') {
?>
				<option value="12" selected>Diciembre</option>

<?php		
	}
	else {
?>			
				<option value="12">Diciembre</option>
<?php		
	}
}
?>
			</select>
		</td>
		<td>
			<select name="v33" class="form-control">
<?php
	
	if ($fecha_fin_filtro == '--') {

?>					
				<option value=""></option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
<?php
	}
	else {
?>




<?php 
	if ($_SESSION["v33"] == '2016') {
?>
				<option value="2016" selected>2016</option>
<?php
	}
	else {
?>
				<option value="2016">2016</option>
<?php		
	}
?>




<?php 
	if ($_SESSION["v33"] == '2015') {
?>
				<option value="2015" selected>2015</option>
<?php
	}
	else {
?>
				<option value="2015">2015</option>
<?php		
	}
?>





<?php 
	if ($_SESSION["v33"] == '2014') {
?>
				<option value="2014" selected>2014</option>
<?php
	}
	else {
?>
				<option value="2014">2014</option>
<?php		
	}
?>

<?php 
	if ($_SESSION["v33"] == '2013') {
?>
				<option value="2013" selected>2013</option>
<?php
	}
	else {
?>
				<option value="2013">2013</option>
<?php		
	}
?>

<?php 
	if ($_SESSION["v33"] == '2012') {
?>
				<option value="2012" selected>2012</option>
<?php
	}
	else {
?>
				<option value="2012">2012</option>
<?php		
	}
?>

<?php 
	if ($_SESSION["v33"] == '2011') {
?>
				<option value="2011" selected>2011</option>
<?php
	}
	else {
?>
				<option value="2011">2011</option>
<?php		
	}
?>


<?php

	}

?>
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
  				<span class="glyphicon glyphicon-calendar"></span> Mostrar Registros desde: <?= ''.$fecha_inicio_filtro_mx.'' ?> Hasta <?= ''.$fecha_fin_filtro_mx.'' ?>
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