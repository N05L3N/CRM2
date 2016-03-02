<div class="row">
	<div class="col-xs-4 col-sm-4 col-md-4">
		<label><?= $obl ?>Estatus de la venta:</label>
	</div>
  	<div class="col-xs-8 col-sm-8 col-md-8">
		<div style="text-align:left; width:100%;">
		
		<?php

			if ($_SESSION['departamento'] == 'consumibles' OR $_SESSION['departamento'] == 'telemarketing') {

		?>
			<input type="radio" value="descartado" name="estadodeventa" onclick="mostrarRadiosDescartado(); RadiosLimpiar();"> Descartado
			<br />
			<input type="radio" value="llamada" name="estadodeventa" onclick="mostrarRadiosLlamada(); RadiosLimpiar();"> Llamada
  			<br />
  			<input type="radio" value="correo" name="estadodeventa" onclick="mostrarRadiosCorreo(); RadiosLimpiar();"> Correo
  			<br />
  			<input type="radio" value="llamadaycorreo" name="estadodeventa" onclick="mostrarRadiosLlamadayCorreo(); RadiosLimpiar();"> Llamada y Correo
  			<br />
			<input type="radio" value="facturado" name="estadodeventa" onclick="mostrarFechaDeVenta(); RadiosLimpiar();"> Facturado

		<?php

			}

			else if ($_SESSION['departamento'] == 'ventascampo') {

?>

			<input type="radio" value="descartado" name="estadodeventa" onclick="mostrarRadiosDescartadoVentasCampo(); RadiosLimpiar();"> Descartado
			<br />
  			<input type="radio" value="correo" name="estadodeventa" onclick="mostrarRadiosVisitaNoConcretadaVentasCampo(); RadiosLimpiar();"> Visita sin Venta
  			<br />
			<input type="radio" value="facturado" name="estadodeventa" onclick="mostrarFechaDeVenta(); RadiosLimpiar();"> Visita con Venta


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

		<?php

			}

		?>

		</div>
	</div>
</div>