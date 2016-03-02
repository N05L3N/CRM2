<?php
#echo '<div style="font-family:calibri; margin:auto; text-align:center; width:350px; padding:5px; background-color:#e7e7e7; color:White; margin-bottom:50px;" >';



$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

#echo $fecha_inicio_filtro;
#echo '-';
#echo $fecha_fin_filtro;
/*
echo ''.$_SESSION["v1"].'<br />';
echo ''.$_SESSION["v2"].'<br />';
echo ''.$_SESSION["v3"].'<br />';
echo ''.$_SESSION["v11"] .'<br />';
echo ''.$_SESSION["v22"] .'<br />';
echo ''.$_SESSION["v33"] .'<br />';
*/

?>


<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			Filtrar por Fecha
		</h3>
	</div>
	


	<form action="controller/c.filtro.fecha.php" method="post" id="filtrarporfecha">


<table class="table-condensed">
	<tr>
		<th>Desde</th>
		<td>
			<input type="hidden" value="amariscal@avanceytec.com.mx" name="usuario"  /><input type="hidden"  value="1" name="password"  size="15"/>
<select name="v1">
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
    echo "<option value='".$i."'>".$i."</option>";
	echo $i++;  
}
?>
</select>
		</td>
		<td>
			<select name="v2">
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
			<select name="v3">
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>
		</td>
		<th>Hasta</th>
		<td>
			<select name="v11">
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
				    echo "<option value='".$i."'>".$i."</option>";
					echo $i++;  
				}
				?>
				</select>
		<td>
			<select name="v22">
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
			<div class="form-group">
    			<label class="sr-only" for="exampleInputEmail2">Email address</label>
				<select name="v33" class="form-control">
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
			</select>
			</div>
		</td>
		<td>
			<!--
				<button type="button" class="btn btn-default btn-md" onclick="document.getElementById('filtrarporfecha').submit();">
	  				<span class="glyphicon glyphicon-search"></span> Filtrar
				</button>
			-->
			
			<input type="submit" value="&nbsp;Filtrar&nbsp;" src="<?php echo "$ruta"; ?>" style="margin-left:5px; margin-right:5px;"/>

		</td>
	</tr>
</table>
</form>

<h4 style="color:#000; margin:0;">Mostrar Registros</h4>
<div style="color:#000; margin:0;">
<?php
echo 'Desde:'.$fecha_inicio_filtro.'<br />';
echo 'Hasta:'.$fecha_inicio_filtro.'';
?>
</div>
</div>