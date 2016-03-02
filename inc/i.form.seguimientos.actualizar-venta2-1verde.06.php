<?php
	$trash = '';
	$dte = date(ymdhis);  
	$h0ra = date(h);
	$h0ra = $h0ra - 1;
	# $h0ra++;
	$minut0 = date(i);
	$pemeoaeme = date(a); 
	$dte2 = ''.$h0ra.':'.$minut0.' '.$pemeoaeme.'';
?>


<form name="registrar-seguimiento" method="post" id="form1" action="seguimientos.actualizar-venta2.php" onSubmit="return validaCampos(this)" class="contacto" style="margin-top:-40px;">

	<input class="campos" type="hidden" id="termometro" size="40" name="termometro" value="<?= $termometro ?>">
	<input class="campos" type="hidden" id="fecha" size="40" name="fecha" value="<?= $dte ?>">
	<input class="campos" type="hidden" id="usuario" size="40" name="usuario" value="<?= $user ?>">
	<input class="campos" type="hidden" id="horarespuesta" size="40" name="horarespuesta" value="<?= $dte2 ?>">
	<input class="campos" type="hidden" id="tipo" size="40" name="tipo" value="datos">
	<input class="campos" type="hidden" name="formulario" size="0" value="VEN">
	<input class="campos" type="hidden" name="asignadoa" value="<?= $asignadoa ?>">
	<input class="campos" type="hidden" name="fechaasignacion" value="<?= $dte ?>">
	<input class="campos" type="hidden" name="fechaventa" value="<?= $fechaventa ?>">
	<input class="campos" type="hidden" name="idedit" readonly="readonly" value="<?= $_GET["id"] ?>">
	<input class="campos" type="hidden" id="fileToUpload" size="40" name="fileToUpload" value="x">


<?php
	$tipo = $_SESSION['tipo'];
?>
<!-- <center><small style="color:#eee;">(<?= $tipo ?>)</small> -->

<?php
	# Seguimiento

if ($tipo == 'administrador' OR $tipo == 'Encargado de Sucursal') {

	
	 include('inc/i.form.seguimientos.actualizar-venta2-1verde-admin.php');
	

}

else {

	if ($termometro == 'verde' OR $termometro == '') {
		include('inc/i.form.seguimientos.actualizar-venta2-1verde.php');
	}
	else {

	}

	if ($termometro == 'rojo') {
		
		include('inc/i.form.seguimientos.actualizar-venta2-1rojo.php');

	}

	if ($termometro == 'azul') {

	}
	else {

	}

}
?>

</form>