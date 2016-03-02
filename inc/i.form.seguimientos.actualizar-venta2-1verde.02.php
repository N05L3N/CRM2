<!-- Descartados -->

<div class="off" id="RadiosDescartado">
	<hr>
	<label><?= $obl ?>Descartados:</label>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosDescartado1();"> 
	  		Se canaliza a Socio (Cotización del Extranjero)
  		</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosDescartado2();"> 
	  		Se canaliza a Maplasa (No ofrecemos el Servicio)
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosDescartado3();"> 
	  		Se canaliza a lista de clientes autorizados
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosDescartado4();"> 
	  		Los datos (Teléfono y Correo) son incorrectos
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosDescartado5();"> 
	  		Ya compro con la competencia (Favor de escribir la razón en los comentarios)
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosDescartado6();"> 
	  		Otro
	  	</div>
	</div>
</div>

<!-- Llamada -->

<div class="off" id="RadiosLlamada">
	<hr>
	<label><?= $obl ?>Llamada:</label>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosLlamada1();"> 
	  		Se le informa por medio de Llamada
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosLlamada2();"> 
	  		No contesto llamada
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosLlamada3();"> 
	  		No existe telefono
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosLlamada4();"> 
	  		Se llamo, pero no se encontro a la persona interesada
	  	</div>
	</div>

</div>

<!-- Correo -->

<div class="off" id="RadiosCorreo">
	<hr>
	<label><?= $obl ?>Correo:</label>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosCorreo1();"> 
	  		Se Mando información por correo
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosCorreo2();"> 
	  		Se Solicita más Información acerca del producto por correo
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosCorreo3();"> 
	  		Se le envió información del producto y se le aviso por correo
	  	</div>
	</div>
	<div class="row">
	  	<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosCorreo4();"> 
	  		Otro
	  	</div>
	</div>
</div>

<!-- Llamada y Correo -->

<div class="off" id="RadiosLlamadayCorreo">
	<hr>
	<label><?= $obl ?>Llamada y Correo:</label>

	<div class="row">
  		<div class="col-xs-11 col-sm-11 col-md-11">
  			<input type="radio" name="prueba" onclick="RadiosLlamadayCorreo1();"> 
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
	  		<input type="text" name="productovendido" class="form-control" value=".">
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
	  		<input type="text" name="montodeventa" class="form-control" value=".">
	  	</div>
		<div class="col-xs-4 col-sm-4 col-md-4"></div>
	</div>

</div>






<!-- Ventas Campo -->



<!-- Descartados Ventas Campo -->

<div class="off" id="RadiosDescartadoVentasCampo">
	<hr>
	<label><?= $obl ?>Descartados Ventas Campo 1:</label>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosDescartadoVentasCampo1();"> 
	  		No pertenece al Giro, no corresponde a productos que comercializamos 
  		</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosDescartadoVentasCampo2();"> 
	  		No quisieron recibirnos 
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosDescartadoVentasCampo3();"> 
	  		Datos incorrectos, imposible localizar prospecto
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosDescartadoVentasCampo6();"> 
	  		Otro
	  	</div>
	</div>
</div>


<div class="off" id="RadiosVisitaNoConcretadaVentasCampo">
	<hr>
	<label><?= $obl ?>Visita sin Venta Concretada:</label>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosVisitaNoConcretadaVentasCampo1();"> 
	  		No se localizó a la persona de compras y/o encargado
  		</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
	  		<input type="radio" name="prueba" onclick="RadiosVisitaNoConcretadaVentasCampo2();"> 
			No nos recibieron (Cliente Ocupado)
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosVisitaNoConcretadaVentasCampo3();"> 
	  		Negocio Cerrado Temporalmente (Hora de comida, cierre temporal etc.)
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosVisitaNoConcretadaVentasCampo4();"> 
	  		Cambio de ubicación de negocio
	  	</div>
	</div>
	<div class="row">
  		<div class="col-md-12 col-sm-12 col-xs-12">
  			<input type="radio" name="prueba" onclick="RadiosVisitaNoConcretadaVentasCampo6();"> 
	  		Otro
	  	</div>
	</div>
</div>