<?php

	echo 'Z'.$_SERVER['SERVER_ADDR'].'Z';
	echo "<br />";
	echo 'Z'.$_SERVER['REMOTE_ADDR'].'Z';



?>
<form action="registrar_cliente.php" name="registrar_cliente" method="post">
	<input type="hidden" name="fecha" class="form-control" placeholder="Fecha">
	<input type="hidden" name="hora" class="form-control" placeholder="Hora">
	<input type="hidden" name="formulario" class="form-control" placeholder="Formulario">
	<input type="hidden" name="usuario" class="form-control" placeholder="Usuario">
	<input type="hidden" name="id" class="form-control" placeholder="ID">
	
	<div class="row">
        <div class="col-md-6">
        	<div>Nombres</div>
			<input type="text" name="nombre" class="form-control" placeholder="Nombres">
		</div>
		<div class="col-md-6">
			<div clas="label">Apellidos</div>
			<input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
		</div>
	</div>

	<hr>

	<div class="row">
        <div class="col-md-6">
        	<div>Nombre de contacto #2</div>
			<input type="text" name="contacto2" class="form-control" placeholder="contacto2">
		</div>
		<div class="col-md-6">
			<div>Nombre de contacto #3</div>
			<input type="text" name="contacto3" class="form-control" placeholder="contacto3">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-3">
			<div clas="label">Direccion"</div>
			<input type="text" name="direccion" class="form-control" placeholder="Direccion">	
		</div>
		<div class="col-md-3">
			<div clas="label">Ciudad</div>
			<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
		</div>
		<div class="col-md-3">
			<div clas="label">Pais</div>
			<input type="text" name="pais" class="form-control" placeholder="Pais">
		</div>
		<div class="col-md-3">
			<div clas="label">Estado</div>
			<input type="text" name="estado" class="form-control" placeholder="Estado">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<div clas="label">Lada</div>
			<input type="text" name="lada" class="form-control" placeholder="Lada">
		</div>
		<div class="col-md-4">
			<div clas="label">Telefono</div>
			<input type="text" name="telefono" class="form-control" placeholder="Telefono">
		</div>
		<div class="col-md-4">
			<div clas="label">Email</div>
			<input type="text" name="email" class="form-control" placeholder="Email">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			<div clas="label">Medio</div>
			<input type="text" name="medio" class="form-control" placeholder="Medio">
		</div>
		<div class="col-md-4">
			<div clas="label">Giro</div>
			<input type="text" name="giro" class="form-control" placeholder="Giro">
		</div>
		<div class="col-md-4">
			<div clas="label">Comentarios</div>
			<input type="text" name="comentarios" class="form-control" placeholder="Comentarios">
		</div>
	</div>
	
	<hr>

	<div class="row">
		<div class="col-md-4">
			<div clas="label">Equipo de interes</div>
			<input type="text" name="equipodeinteres" class="form-control" placeholder="Equipodeinteres">
		</div>
		<div class="col-md-4">
			<div clas="label">¿Compro equipo en ATP?</div>
			<input type="text" name="comeqenatp" class="form-control" placeholder="Comeqenatp">
		</div>
		<div class="col-md-4">
			<div clas="label">Equipos con los que cuenta</div>
			<input type="text" name="eqclosqcuenta" class="form-control" placeholder="Eqclosqcuenta">
		</div>
	</div>

	<hr>

	<div>
		<div class="col-md-4">
			<div clas="label">Antiguedad actual del equipo</div>
			<input type="text" name="antacteq" class="form-control" placeholder="Antacteq">
		</div>
		<div class="col-md-4">
			<div clas="label">Es cliente</div>
			<input type="text" name="escliente" class="form-control" placeholder="Escliente">
		</div>
		<div class="col-md-4">
			<div clas="label">Numero de cliente</div>
			<input type="text" name="numerodecliente" class="form-control" placeholder="Numerodecliente">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-6">
			<div clas="label">Motivo de consulta</div>
			<input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivodeconsulta">
		</div>
		<div class="col-md-6">
			<div clas="label">Empresa</div>
			<input type="text" name="empresa" class="form-control" placeholder="Empresa">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>		
		</div>
		<div class="col-md-4">
			
		</div>
	</div>	

</form>