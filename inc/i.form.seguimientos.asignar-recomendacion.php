<?php
	$trash = '';
	$dte = date(ymdhis);  
	$h0ra = date(h);
	$h0ra++;
	$minut0 = date(i);
	$pemeoaeme = date(a); 
	$dte2 = ''.$h0ra.':'.$minut0.' '.$pemeoaeme.'';
?>


<form method="post" id="form1" action="seguimientos.asignar-recomendacion.php" onSubmit="return validaCampos(this)" class="contacto" style="margin-top:-40px;">

	<input class="campos" type="hidden" id="termometro" size="40" name="termometro" value="<?php echo ''.$termometro.'';?>">
	<input class="campos" type="hidden" id="fecha" size="40" name="fecha" value="<?php echo "$dte"; ?>">
	<input class="campos" type="hidden" id="usuario" size="40" name="usuario" value="<?php echo $user; ?>">
	<input class="campos" type="hidden" id="horarespuesta" size="40" name="horarespuesta" value="<?php echo $dte2;?>">
	<input class="campos" type="hidden" id="tipo" size="40" name="tipo" value="datos">
	<input class="campos" type="hidden" name="formulario" size="0" value="VEN">
	<input class="campos" type="hidden" name="fechaasignacion" value="<?php echo "$dte"; ?>">
	<input class="campos" type="hidden" name="fechaventa" value="<?php echo "$fechaventa"; ?>">
	<input class="campos" type="hidden" name="idedit" value="<?php echo $idedit;?>">


<center>

<table width="500" cellpadding="0" border="0">
	<tr>
		<td>
			<label><?php echo "$obl";?>Asignar Recomendación: #<?php echo ''.$idedit.'';?></label>
			<br>
			<?php
$iif = mysql_real_escape_string($_REQUEST['iif']);
$result = mysql_query("SELECT * FROM jcnoble.formrecomiendaygana where idformrecomiendaygana = '$idedit' ORDER BY idformrecomiendaygana desc limit 0,1");
$i = 0; while ($row = mysql_fetch_array($result)) { if ($i > 0) { } 
	#echo "".$row['asignadoa'].""; 
	$asignadoa = $row['asignadoa'];
	$i++; 
}

	if ($asignadoa == '') {
		echo 'Recomendación aún sin vendedor asignado';
	}
	else {
		echo 'Recomendación actualmente asignada a: <strong>'.$asignadoa.'</strong>';
	}

?>

		</td>
	</tr>
	<tr>
		<td>
			<select name="asignadoa">
				<option value=""></option>
<?php
	$result = mysql_query("SELECT * FROM usuarios ORDER BY id_usuario ASC limit 100");
  	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) { }
  			 echo '<option value="'.$row['usuario'].'">'.$row['usuario'].'</option>';
	$i++;
	}
?>
			</select>
		</td>
	</tr>
</table>

<br />
<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
</form>