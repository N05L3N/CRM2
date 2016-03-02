<style>
    .hasDatepicker {
    	display: inline-block;
    }
    img.ui-datepicker-trigger {
    	cursor: pointer;
    	display: inline-block;
    	position: absolute;
    	width: 16%;
    }

</style>

<script type="text/javascript">
	function RadiosDescartado1 (){
		document.getElementById ("comentariovendedor").value = "Se canaliza a Socio (Cotización del Extranjero";
	}

	function RadiosDescartado2 (){
		document.getElementById ("comentariovendedor").value = "Se canaliza a Maplasa (No ofrecemos el Servicio";
	}

	function RadiosDescartado3 (){
		document.getElementById ("comentariovendedor").value = "Pide Producto / Servicio que no ofrecemos (Se le informo por correo";
	}

	function RadiosDescartado4 (){
		document.getElementById ("comentariovendedor").value = "Los datos (Teléfono y Correo) son incorrecto";
	}

	function RadiosDescartado5 (){
		document.getElementById ("comentariovendedor").value = "Ya compro con la competencia (Favor de escribir la razón en los comentarios";
	}
</script>

<div class="container-fluid">

<?php

	if ($_SESSION["h4Mensaje"] == 11) {
		
?>	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="alert alert-warning fade in" role="alert">
      				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
      				<h5>La fecha no puede ser antes de la fecha actual</h5>
      			</div>
		</div>
	</div>

<?php

	}

	else {

	}

	$POSTestadodeventa = $_SESSION["POSTestadodeventa"];
	$POSTfechaanoprox = $_SESSION["POSTfechaanoprox"] ;
	$POSTfechamesprox = $_SESSION["POSTfechamesprox"] ;
	$POSTfechadiaprox = $_SESSION["POSTfechadiaprox"] ;
	$POSTestadodeventa = $_SESSION["POSTestadodeventa"] ;
	$POSTcomentariovendedor = $_SESSION["POSTcomentariovendedor"] ;
?>
	
    
	<div class="row">
	  	<div class="col-xs-4 col-sm-4 col-md-4">
  			<label><?= $obl ?>Próximo Seguimiento:</label>
  		</div>
  		<div class="col-xs-8 col-sm-8 col-md-8">
  			<div class="input-group input-group-md" style="width:200px;">
				<input type="text" id="datepicker" name="fechaprox" onlyread="onlyread" class="form-control">
			</div>
  		</div>
	</div>
</div>

<hr />

<div class="row">
	<script type="text/javascript">

	function mostrarFechaDeVenta () {
		$("#FechaDeVenta").addClass("on");
		$("#FechaDeVenta").removeClass("off");

		$("#RadiosDescartado").addClass("off");
	}
	
	function ocultarFechaDeVenta () {
		$("#FechaDeVenta").removeClass("on");
		$("#FechaDeVenta").addClass("off");
	}



	function mostrarRadiosDescartado () {
		$("#RadiosDescartado").addClass("on");
		$("#RadiosDescartado").removeClass("off");

		$("#FechaDeVenta").addClass("off");

	}
	
	function ocultarRadiosDescartado () {
		$("#RadiosDescartado").removeClass("on");
		$("#RadiosDescartado").addClass("off");
	}

	function mostrarRadiosLlamada () {
		$("#RadiosLlamada").addClass("on");
		$("#RadiosLlamada").removeClass("off");
	}
	
	function ocultarRadiosLlamada () {
		$("#RadiosLlamada").removeClass("on");
		$("#RadiosLlamada").addClass("off");
	}

	function mostrarRadiosCorreo () {
		$("#RadiosCorreo").addClass("on");
		$("#RadiosCorreo").removeClass("off");
	}
	
	function ocultarRadiosCorreo () {
		$("#RadiosCorreo").removeClass("on");
		$("#RadiosCorreo").addClass("off");
	}

	function mostrarRadiosLlamadayCorreo () {
		$("#RadiosLlamadayCorreo").addClass("on");
		$("#RadiosLlamadayCorreo").removeClass("off");
	}
	
	function ocultarRadiosLlamadayCorreo () {
		$("#RadiosLlamadayCorreo").removeClass("on");
		$("#RadiosLlamadayCorreo").addClass("off");
	}

	</script>

	<div class="col-xs-4 col-sm-4 col-md-4">
		<label><?= $obl ?>Estatus de la venta:</label>
	</div>
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		
  		<div style="text-align:left; width:100%;">
		
		<?php
			if ($_SESSION['departamento'] == 'consumibles') {
		?>
		<input type="radio" value="descartado" name="estadodeventa" onclick="javascript:this.form.fechaprox.value='31-12-2050'; mostrarRadiosDescartado();"> Descartado
		<br />
		<input type="radio" value="llamada" name="estadodeventa" onclick="ocultarFechaDeVenta(); mostrarRadiosLlamada();"> Llamada
  		<br />
  		<input type="radio" value="correo" name="estadodeventa" onclick="ocultarFechaDeVenta(); mostrarRadiosCorreo();"> Correo
  		<br />
  		<input type="radio" value="llamadaycorreo" name="estadodeventa" onclick="ocultarFechaDeVenta(); mostrarRadiosLlamadayCorreo();"> Llamada y Correo
  		<br />
		<input type="radio" value="facturado" name="estadodeventa" onclick="mostrarFechaDeVenta();"> Facturado
		</div>
		<?php

			}
			else {

		?>
		<input type="radio" value="descartado" name="estadodeventa" onclick="ocultarFechaDeVenta(); javascript:this.form.fechaprox.value='31-12-2050';"> Descartado
		<br />
		<input type="radio" value="frio" name="estadodeventa"> Frio (76 a 180 dias)
  		<br />
  		<input type="radio" value="tibio" name="estadodeventa"> Tibio (31 a 75 dias)
  		<br />
  		<input type="radio" value="caliente" name="estadodeventa"> Caliente (1 a 30 dias)
  		<br />
		<input type="radio" value="facturado" name="estadodeventa" onclick="mostrarFechaDeVenta();"> Facturado
		</div>
		<?php
			}
		?>

  	</div>
</div>


<style>

div.on {
	display: block;
}

div.off {
	display: none;
}

</style>








<!-- Fecha de Venta -->
<div class="off" id="FechaDeVenta">
	<hr>

<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<label><?= $obl ?>Fecha de venta:</label>
  	</div>
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		<div class="input-group input-group-md" style="width:200px;">
			<input type="text" id="datepickerfechaventa" name="fechaventa" onlyread="onlyread" class="form-control">
		</div>
  	</div>
</div>

<br>

<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
		<strong>Producto:</strong>
	</div>
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<input type="text" name="productovendido" class="form-control" value="">
  	</div>
  	<div class="col-xs-4 col-sm-4 col-md-4"></div>
</div>
<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
		<strong>Orden de Venta:</strong>
	</div>
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<input type="text" name="factura" class="form-control" value="">
  	</div>
  	<div class="col-xs-4 col-sm-4 col-md-4"></div>
</div>
<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
		<strong>Monto:</strong>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4">
  		<input type="text" name="montodeventa" class="form-control" value="">
  	</div>
  	<div class="col-xs-4 col-sm-4 col-md-4"></div>
  </div>

</div>
<!-- Fecha de Venta -->







<div class="off" id="RadiosDescartado">
<hr>
<label><?= $obl ?>Descartados:</label>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba" onclick="RadiosDescartado1();">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Se canaliza a Socio (Cotización del Extranjero)
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba" onclick="RadiosDescartado2();">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Se canaliza a Maplasa (No ofrecemos el Servicio)
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba" onclick="RadiosDescartado3();">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Pide Producto / Servicio que no ofrecemos (Se le informo por correo)
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba" onclick="RadiosDescartado4();">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Los datos (Teléfono y Correo) son incorrectos
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba" onclick="RadiosDescartado5();">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Ya compro con la competencia (Favor de escribir la razón en los comentarios)
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Otro
  	</div>
</div>
</div>







<div class="off" id="RadiosLlamada">
	<hr>
	<h4>Llamada</h4>
</div>






<div class="off" id="RadiosCorreo">
<hr>
<h4>Correo</h4>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Se Mando información por correo
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Se Solicita más Información acerca del prodducto poe correo
  	</div>
</div>
<div class="row">
  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
		<input type="radio" name="prueba">
  	</div>
  	<div class="col-xs-11 col-sm-11 col-md-11">
  		Pide Producto / Servicio que no ofrecemos (Se le informo por correo)
  	</div>
</div>
</div>





<div class="off" id="RadiosLlamadayCorreo">
	<hr>
	<h4>Llamada y Correo</h4>
</div>






<hr>
<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<label><?php $obl ?>Comentarios:</label>
  	</div>			
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		<textarea name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:50px; resize: none;"><?= $POSTcomentariovendedor ?></textarea>
  	</div>
</div>

<br />

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
	</div>
</div>