<?php
	$usuario = $_SESSION["usuario"];
?>

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

<form action="registrar_cliente.php" name="registrar_cliente" method="post" onsubmit="return validaCampos(this)">

	<input type="hidden" name="contacto2" class="form-control" placeholder="Nombre de Facturación">
	<input type="hidden" name="contacto3" class="form-control" placeholder="Número de Orden">
	<input type="hidden" name="pais" class="form-control" placeholder="Número de Orden" value="Mexico">
	<input type="hidden" name="lada" class="form-control" placeholder="Lada">
	<input type="hidden" name="ciudad" class="form-control" placeholder="Ciudad">
	<input type="hidden" name="usuario" readonly="readonly" value="<?= $usuario ?>" class="form-control" placeholder="Usuario">

	<div class="row">
		<div class="col-md-4">
			<div>* Nombre del cliente</div>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
		</div>
		<div class="col-md-4">
			<div clas="label">Teléfono del Cliente</div>
			<input type="text" name="telefono" class="form-control" placeholder="Teléfono del Cliente">
		</div>
		<div class="col-md-4">
			<div clas="label">Email del Cliente</div>
			<input type="text" name="email" class="form-control" placeholder="Email">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<div clas="label">Estado</div>
			<select class="form-control" id="estado" name="estado" >
				<option value=""></option>
				<option value="Aguascalientes">Aguascalientes</option>
				<option value="Baja California">Baja California</option>
				<option value="Baja California">Baja California</option>
				<option value="Campeche">Campeche</option>
				<option value="Chiapas">Chiapas</option>
				<option value="Chihuahua">Chihuahua</option>
				<option value="Coahuila">Coahuila</option>
				<option value="Colima">Colima</option>
				<option value="Distrito Federal">Distrito Federal</option>
				<option value="Durango">Durango</option>
				<option value="Guanajuato">Guanajuato</option>
				<option value="Guerrero">Guerrero</option>
				<option value="Hidalgo">Hidalgo</option>
				<option value="Jalisco">Jalisco</option>
				<option value="Mexico">Mexico</option>
				<option value="Michoacan">Michoacan</option>
				<option value="Morelos">Morelos</option>
				<option value="Nayarit">Nayarit</option>
				<option value="Nuevo Leon">Nuevo Leon</option>
				<option value="Oaxaca">Oaxaca</option>
				<option value="Puebla">Puebla</option>
				<option value="Queretaro">Queretaro</option>
				<option value="Quintana Roo">Quintana Roo</option>
				<option value="San Luis Potosí">San Luis Potosí</option>
				<option value="Sinaloa">Sinaloa</option>
				<option value="Sonora">Sonora</option>
				<option value="Tabasco">Tabasco</option>
				<option value="Tamaulipas">Tamaulipas</option>
				<option value="Tlaxcala">Tlaxcala</option>
				<option value="Veracruz">Veracruz</option>
				<option value="Yucatan">Yucatan</option>
				<option value="Zacatecas">Zacatecas</option>
				<option value="Otro">-- No soy de Mexico --</option>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">Dirección</div>
			<input type="text" name="direccion" class="form-control" placeholder="Direccion"> 
		</div>
		<div class="col-md-4">
			<div>Razón Social</div>
			<input type="text" name="empresa" class="form-control" placeholder="Empresa">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<div clas="label">* Productos Ofrecidos</div>
			<input type="text" name="equipodeinteres" class="form-control" placeholder="Productos Ofrecidos">
		</div>
		<div class="col-md-4">
			<div clas="label">* Giro del cliente</div>
			<select class="form-control" id="giro" name="giro" >
				<option></option>
				<option value="Impresores Digitales">&nbsp;Impresores Digitales</option>
				<option value="Rotulistas">&nbsp;Rotulistas</option>
				<option value="Disenadores y Publicistas">&nbsp;Diseñadores y Publicistas</option>
				<option value="Anuncieros">&nbsp;Anuncieros</option>
				<option value="Manufactureros">&nbsp;Manufactureros</option>
				<option value="Promocionales">&nbsp;Promocionales</option>
				<option value="Maquiladora">&nbsp;Maquiladora</option>
				<option value="Comercio">&nbsp;Comercio</option>
				<option value="Industria">&nbsp;Industria</option>
				<option value="Gobierno">&nbsp;Gobierno</option>
				<option value="Serigrafistas">&nbsp;Serigrafistas</option>
				<option value="Envasador">&nbsp;Envasador</option>
				<option value="Publico en General">&nbsp;Público en General</option>
				<option value="Otros">&nbsp;Otros</option>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">Medio</div>
			<select class="form-control" id="medio" name="medio" >
				<option value=""></option>
					<option value="Prospecto Nuevo ">Prospecto Nuevo </option>
					<option value="Cliente Registrado (Mantenimiento de cartera)">Cliente Registrado (Mantenimiento de cartera)</option>
					<option value="Cliente de recuperación de 6  meses a 1 año ">Cliente de recuperación de 6  meses a 1 año </option>
					<option value="Clientes de una sola compra">Clientes de una sola compra</option>
					<option value="Mercados Alternativos">Mercados Alternativos</option>
			</select>
		</div>

	</div>

<!-- 
	<hr>

	<div class="row">
		<div class="col-md-12">
		<div clas="label">Comentarios</div>
			<textarea name="comentarios" placeholder="Comentarios" class="form-control" cols="30" rows="5" style="resize: none;"></textarea>
		</div>
	</div>

-->

	<hr>

	<div class="row">				
		<div class="col-md-4"><div>Fecha de Visita:</div>
			<div class="input-group input-group-md" style="width:200px;">
				<input type="text" id="fechaprogramadaparavisita" name="fechaprogramadaparavisita" onlyread="onlyread" class="form-control" placeholder="Fecha de Visita">
			</div>
		</div>
		<div class="col-md-4"><div>Hora de Visita:</div><input type="text" name="horadevisita" class="form-control" placeholder="Hora de Visita"></div>
		<div class="col-md-4"><div>Duración de Visita:</div><input type="text" name="duracionenvisita" class="form-control" placeholder="Duración de Visita"></div>
	</div>
	
	<hr>
	
	<div class="row">				
		<div class="col-md-3">
			<div clas="label">* Venta realizada</div>
			<select class="form-control" id="ventarealizada" name="ventarealizada" >
				<option></option>
				<option value="Si">Si</option>
				<option value="No">No</option>
			</select>
		</div>
		<div class="col-md-3"><div>No. de Orden:</div><input type="text" name="numerodeorden" class="form-control" placeholder="No. de Orden"></div>
		<div class="col-md-3"><div>No. Factura:</div><input type="text" name="numerodefactura" class="form-control" placeholder="No. Factura"></div>
		<div class="col-md-3"><div>Cantidad facturada:</div><input type="text" name="cantidadfacturada" class="form-control" placeholder="Cantidad facturada"></div>
	</div>
	
	<hr>

	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div>* Próxima Visita:</div>
			<div class="input-group input-group-md" style="width:200px;">
				<input type="text" id="proximavisita" name="proximavisita" onlyread="onlyread" class="form-control"  placeholder="Próxima Visita">
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>   
		</div>
		<div class="col-md-4"></div>
	</div>

</form>