<!-- Descartados -->

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
			<input type="radio" name="prueba" onclick="RadiosDescartado6();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		Otro
	  	</div>
	</div>
</div>

<!-- Llamada -->

<div class="off" id="RadiosLlamada">
	<hr>
	<label><?= $obl ?>Llamada</label>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosLlamada1();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		Se le informa por medio de Llamada
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosLlamada2();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		No contesto llamada
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosLlamada3();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		No existe telefono
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosLlamada4();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		Se llamo, pero no se encontro a la persona interesada
	  	</div>
	</div>

</div>

<!-- Correo -->

<div class="off" id="RadiosCorreo">
	<hr>
	<label><?= $obl ?>Correo</label>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosCorreo1();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		Se Mando información por correo
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosCorreo2();">
	  	</div>
	  	<div class="col-xs-11 col-sm-11 col-md-11">
	  		Se Solicita más Información acerca del prodducto por correo
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosCorreo3();">
	  	</div>
	  	<div class="col-xs-11 col-sm-11 col-md-11">
	  		Pide Producto / Servicio que no ofrecemos (Se le informo por correo)
	  	</div>
	</div>
</div>

<!-- Llamada y Correo -->

<div class="off" id="RadiosLlamadayCorreo">
	<hr>
	<label><?= $obl ?>Llamada y Correo</label>

	<div class="row">
	  	<div class="col-xs-1 col-sm-1 col-md-1" style="text-align:right;">
			<input type="radio" name="prueba" onclick="RadiosLlamadayCorreo1();">
  		</div>
  		<div class="col-xs-11 col-sm-11 col-md-11">
	  		Se le brinda información por correo y llamada
	  	</div>
	</div>

</div>

<!-- Facturado -->
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