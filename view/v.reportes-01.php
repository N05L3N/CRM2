<form action="reportes-<?= $idReporte ?>.php" method="post">
<table cellpadding="0" cellspacing="0" style="border-collapse: collapse; border: 1px solid #cccccc;" border="1">
	<tr>
		<td></td>
		<td align="center">Dia</td>
		<td align="center">Mes</td>
		<td align="center">A&ntilde;o</td>
	</tr>
	<tr>
		<td style="background:#0f3b7e; color:#ffffff;">Fecha de inicio</td>
		<td colspan="3">
			
			<input type="hidden" value="amariscal@avanceytec.com.mx" name="usuario"  /><input type="hidden"  value="1" name="password"  size="15"/>
			
			<select name="v1">
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
		echo "<option value='".$i."'>".$i."</option>";
		echo $i++;  
	}

?>
			</select>
			
			<select name="v2">
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
			</select>
			
			<select name="v3">
				<option value=""></option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015" selected>2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
			</select>
		</td>
	</tr>
	<tr>
		<td style="background:#0f3b7e; color:#ffffff;">Fecha de final</td>
		<td colspan="3">
			<select name="v11">
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
		echo "<option value='".$i."'>".$i."</option>";
		echo $i++;  
	}

?>
			</select>

			<select name="v22">
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
			</select>

			<select name="v33">
				<option value=""></option>
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015" selected>2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
			</select>
		</td>
	</tr>
</table>

<br />

<table cellpadding="0" cellspacing="0" style="border-collapse: collapse; border: 1px solid #cccccc;" border="1">
	<tr>
		<td colspan="4" align="center">
			<input type="submit" value="Confirmara fecha" src="" style="margin-left:5px; margin-right:5px;"/>
		</td>
	</tr>
</table>	
</form>