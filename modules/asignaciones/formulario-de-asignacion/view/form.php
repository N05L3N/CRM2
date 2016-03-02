<body topmargin="0" leftmargin="0" onLoad="goforit()" style="font-family: Arial; font-size: 8pt">
<form method="post" id="form1" action="index.php" onSubmit="return validaCampos(this)" class="contacto">
<?php
//PHS 
$phstablaform = 'font-family:calibri; font-size:16px; color:#3d3d3d;text-align:left;';

$trash = '';
$dte = date(ymdhis);  
$h0ra = date(h);
$h0ra++;
$minut0 = date(i);
//$fecha2=time()-3600; 
$fecha2=time()-7200; 
$pemeoaeme = date(a); 
$dte2 = ''.$h0ra.':'.$minut0.' '.$pemeoaeme.'';
//date("H:i");
?>


<!--<input class="campos" type="hidden" id="usuario" name="usuario" value="<?php echo $_SESSION["usu"] ; ?>">-->
<input class="campos" type="hidden" id="asignacion" name="asignacion" value="N/A">
<input class="campos" type="hidden" id="estadodeventa" name="estadodeventa" value="N/A">
<input class="campos" type="hidden" id="comentariovendedor" name="comentariovendedor" value="N/A">
<input class="campos" type="hidden" id="fechaasignacion"  name="fechaasignacion" value="<?php echo "$dte"; ?>">
<input class="campos" type="hidden" id="horaasignacion" name="horaasignacion" value="<?php echo $dte2;?>">
<input class="campos" type="hidden" id="factura" name="factura" value="0">
<input class="campos" type="hidden" id="fecharespuesta" name="fecharespuesta" value="N/A">
<input class="campos" type="hidden" id="horarespuesta" name="horarespuesta" value="N/A">

<input class="campos" type="hidden" name="idedit" value="<?php echo $idedit;?>">


<br /><br />

<center>
	<fieldset style="width:600px;" align="left">
		<legend style="font-family:calibri; font-size:18px; color:#3d3d3d;">Asignar recomendación #: 
<?php
echo ''.$idedit.'';
?>

		</legend>
<table width="600" cellpadding="1" cellspacing="2" border="0" style="<?php echo "$phstablaform";?>">
	<tr>
		<td style="width:55%;">
			<label>Vendedor: 
<?php
$iif = mysql_real_escape_string($_REQUEST['iif']);
$result = mysql_query("SELECT * FROM jcnoble.eqasignacion where asignacion = '$idedit' ORDER BY id desc limit 0,1");
#$result = mysql_query("SELECT * FROM jcnoble.eqasignacion where asignacion = '7035' ORDER BY id desc limit 0,1");
$i = 0; while ($row = mysql_fetch_array($result)) { if ($i > 0) { } echo "".$row['usuario'].""; $i++; }	
?>			
			</label>
		</td>
		<td style="width:45%;">
			<select name="usuario" class="usuario" style="width:80%;" onchange="this.form.submit();">
				<option value="pendiente">Seleccione vendedor</option>
				<option value="ventasequipo4">Areli Magdaleno</option>
				<option value="ventasequipo7">Carlos Alberto Saenzpardo</option>
				<option value="ventasequipo2">Francisco Manríquez </option>
				<option value="ventasequipo3">Gabriela Sacristan</option>
				<option value="equiposmonterrey">Gerardo Guzman</option>
				<option value="jespino">Jesus Espino</option>
				<option value="orios">Octavio Rios</option>
				<option value="rmata">Raul Mata</option>
				<option value="rflores">Roberto Flores</option>
				
				<?php
					if ($_SESSION["usu"] == 'administrador.prueba' ){
					
					
					echo '
					
					<optgroup label="Solo visible para pruebas">
					<option value="vendedor.prueba">Vendedor de Prueba</option>
					
					';
					}
					else {}
				?>
				
				
				<!-- <option value="auxdiseno">Armando Pruebas</option> -->
				<?php
				if ($_SESSION["usu"] == 'xamariscalequipo')
				{
					echo '<option value="auxdiseno">Armando Mariscal</option>';
				}
				else {}
				?>
			</select>
		</td>
	</tr>
</table>

	</fieldset>
<div>

<input type="submit" value="Aceptar" class="boton" style="cursor:pointer;" tabindex="17">

</div>


</form>
</body>
</html>