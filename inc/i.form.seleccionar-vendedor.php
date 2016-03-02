<?php
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

<form method="post" id="form1" action="seguimientos.php" onSubmit="return validaCampos(this)" class="contacto">
<input class="campos" type="hidden" id="asignacion" name="asignacion" value="N/A">
<input class="campos" type="hidden" id="estadodeventa" name="estadodeventa" value="N/A">
<input class="campos" type="hidden" id="comentariovendedor" name="comentariovendedor" value="N/A">
<input class="campos" type="hidden" id="fechaasignacion"  name="fechaasignacion" value="<?php echo "$dte"; ?>">
<input class="campos" type="hidden" id="horaasignacion" name="horaasignacion" value="<?php echo $dte2;?>">
<input class="campos" type="hidden" id="factura" name="factura" value="0">
<input class="campos" type="hidden" id="fecharespuesta" name="fecharespuesta" value="N/A">
<input class="campos" type="hidden" id="horarespuesta" name="horarespuesta" value="N/A">

<input class="campos" type="hidden" name="idedit" value="<?php echo $idedit;?>">

<table cellpadding="1" cellspacing="2" border="0">
	<tr>
		<td>
			<select name="usuario" class="usuario" style="width:100%;">
				<option value=""></option>
				<?php include('model/m.select.vendedores-actuales.php');?>
				<option value="">Quitar Asignación</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<input type="hidden" name="idedit" value="<?php echo ''.$row['id'].'';?>">
			<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
		</td>
	</tr>
</table>

</form>