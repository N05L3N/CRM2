<?php
	$trash = '';
	$dte = date(ymdhis);  
	$h0ra = date(h);
	$h0ra++;
	$minut0 = date(i);
	$pemeoaeme = date(a); 
	$dte2 = ''.$h0ra.':'.$minut0.' '.$pemeoaeme.'';
?>


<form method="post" id="form1" action="seguimientos.actualizar-recomendacion.php" onSubmit="return validaCampos(this)" class="contacto" style="margin-top:-40px;">

	<input class="campos" type="hidden" id="termometro" size="40" name="termometro" value="<?php echo ''.$termometro.'';?>">
	<input class="campos" type="hidden" id="fecha" size="40" name="fecha" value="<?php echo "$dte"; ?>">
	<input class="campos" type="hidden" id="usuario" size="40" name="usuario" value="<?php echo $user; ?>">
	<input class="campos" type="hidden" id="horarespuesta" size="40" name="horarespuesta" value="<?php echo $dte2;?>">
	<input class="campos" type="hidden" id="tipo" size="40" name="tipo" value="datos">
	<input class="campos" type="hidden" name="formulario" size="0" value="VEN">
	<input class="campos" type="hidden" name="asignadoa" value="<?php echo "$asignadoa"; ?>">
	<input class="campos" type="hidden" name="fechaasignacion" value="<?php echo "$dte"; ?>">
	<input class="campos" type="hidden" name="fechaventa" value="<?php echo "$fechaventa"; ?>">
	<input class="campos" type="hidden" name="idedit" value="<?php echo $idedit;?>">


<center>

<?php
	if ($termometro == 'verde') {
?>
<table width="500" cellpadding="0" border="0">
	<tr>
		<td style="width:50%;">
			<label><?php echo "$obl";?>Próxima llamada el:</label>
		</td>
		<td style="width:45%;">
			<table cellpadding="0" cellspacing="0" border="0">		
				<tr>
					<td>
						<select name="fechadiaprox">
							<option value=""></option>
<?php
		$i = '0';
		for ($n=0; $n<31; $n++) {
			$l = ++$i;
			echo '<option value="'.$l.'">'.$l.'</option>';
		}
?>	
						</select>		
					</td>
					<td>
						<select name="fechamesprox">
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
					</td>
					<td>
						<select name="fechaanoprox">
							<option value=""></option>
							<option value="2014">2014</option>
						</select>		
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="width:50%;">
			<label><?php echo "$obl";?>¿Venta exitosa?:</label>
		</td>
		<td style="width:45%;">
			<select name="estadodeventa">
				<option value=""></option>
				<option value="si">si</option>
				<option value="En proceso">En proceso</option>
			</select>		
		</td>
	</tr>
	<tr>
		<td style="width:55%;">
			<label><?php echo "$obl";?>Si se realizo la venta <br />introduzca la fecha:</label>
		</td>
		<td style="width:50%;">
			<table cellpadding="0" cellspacing="0" border="0">		
				<tr>
					<td>
						<select name="fechadia">
							<option value=""></option>
<?php
		$i = '0';
		for ($n=0; $n<31; $n++) {
			$l = ++$i;
			echo '<option value="'.$l.'">'.$l.'</option>';
		}
?>	
						</select>		
					</td>
					<td>
						<select name="fechames">
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
					</td>
					<td>
						<select name="fechaano">
							<option value=""></option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
						</select>		
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="width:50%;">
			<label><?php echo "$obl";?>Número de factura:</label>
		</td>
		<td style="width:45%;">
			<input type="text" name="numerodefactura" class="numerodefactura" value="<?php echo "$numerodefactura"; ?>" style="width:80%;" tabindex="1">
		</td>
	</tr>
	<tr>
		<td style="width:55%;vertical-align:top;">
			<label><?php #echo "$obl";?>Comentarios:</label>
		</td>
		<td style="width:45%;">
			<textarea name="comentariovendedor" rows="5" style="width:80%; height:50px; rezise:no;"></textarea>
		</td>
	</tr>
</table>

<br />
<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
<?php
	}
	else {

	}
?>
<?php
	if ($termometro == 'amarillo') {
?>

<input type="hidden" value="" name="fechadia" />
<input type="hidden" value="" name="fechames" />
<input type="hidden" value="" name="fechaano" />
<input type="hidden" value="" name="numerodefactura" />

<table width="500" cellpadding="0" border="0">
	<tr>
		<td style="width:50%;">
			<label><?php echo "$obl";?>Próxima llamada el:</label>
		</td>
		<td style="width:45%;">
			<table cellpadding="0" cellspacing="0" border="0">		
				<tr>
					<td>
						<select name="fechadiaprox">
							<option value=""></option>
<?php
		$i = '0';
		for ($n=0; $n<31; $n++) {
			$l = ++$i;
			echo '<option value="'.$l.'">'.$l.'</option>';
		}
?>	
						</select>		
					</td>
					<td>
						<select name="fechamesprox">
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
					</td>
					<td>
						<select name="fechaanoprox">
							<option value=""></option>
							<option value="2014">2014</option>
						</select>		
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="width:50%;">
			<label><?php echo "$obl";?>¿Venta exitosa?:</label>
		</td>
		<td style="width:45%;">
			<select name="estadodeventa">
				<option value=""></option>
				<option value="no">no</option>
				<option value="En proceso">En proceso</option>
			</select>		
		</td>
	</tr>
	<tr>
		<td style="width:55%;vertical-align:top;">
			<label>Comentarios:</label>
		</td>
		<td style="width:45%;">
			<textarea name="comentariovendedor" rows="5" style="width:80%; height:50px; rezise:no;"></textarea>
		</td>
	</tr>
</table>

<br />
<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
<?php
	}
	else {

	}
?>
<?php
	if ($termometro == 'rojo') {
?>
<input type="hidden" value="no" name="estadodeventa" />
<input type="hidden" value="" name="fechadia" />
<input type="hidden" value="" name="fechames" />
<input type="hidden" value="" name="fechaano" />
<input type="hidden" value="" name="numerodefactura" />



<table width="500" cellpadding="0" border="0">
	<tr>
		<td style="width:50%;">
			<label><?php echo "$obl";?>Próxima llamada el:</label>
		</td>
		<td style="width:45%;">
			<table cellpadding="0" cellspacing="0" border="0">		
				<tr>
					<td>
						<select name="fechadiaprox">
							<option value=""></option>
<?php
		$i = '0';
		for ($n=0; $n<31; $n++) {
			$l = ++$i;
			echo '<option value="'.$l.'">'.$l.'</option>';
		}
?>	
						</select>		
					</td>
					<td>
						<select name="fechamesprox">
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
					</td>
					<td>
						<select name="fechaanoprox">
							<option value=""></option>
							<option value="2014">2014</option>
						</select>		
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="width:55%;vertical-align:top;">
			<label>Comentarios:</label>
		</td>
		<td style="width:45%;">
			<textarea name="comentariovendedor" rows="5" style="width:80%; height:50px; rezise:no;"></textarea>
		</td>
	</tr>
</table>

<br />
<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
<?php
	}
	else {

	}
?>

</form>