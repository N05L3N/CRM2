<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<th colspan="4">Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Tipo</th>
		</tr>

<?php
	
	$departamento = $_SESSION["departamento"];

	if ($departamento == 'consumibles') {
		
		$result = mysql_query("SELECT * FROM usuarios WHERE departamento = 'consumibles' ORDER BY id_usuario ASC limit 100");

	}

	else {

		$result = mysql_query("SELECT * FROM usuarios WHERE (departamento != 'consumibles' AND departamento != 'invitado') ORDER BY tipo, usuario ASC limit 100");

	}
	

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
	if ($i > 0) {}

?>

		<tr>
			<td><?= $row['nombre1'] ?></td>
			<td><?= $row['nombre2'] ?></td>
			<td><?= $row['apellido1'] ?></td>
			<td><?= $row['apellido2'] ?></td>
			<td><?= $row['usuario'] ?></td>
			<td><?= $row['clave'] ?></td>
			<td><?= $row['correo'] ?></td>
			<td><?= $row['departamento'] ?></td>
			<td><?= $row['tipo'] ?></td>
		</tr>

<?php

	$i++;
	
	}

?>

	</table>
</div>



<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<caption>
			Ventas Campo
		</caption>
		<tr>
			<th colspan="2">Nombre</th>
			<th>Sucursal</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Tipo</th>
		</tr>

<?php
	
	$departamento = $_SESSION["departamento"];


	$result = mysql_query("SELECT * FROM usuarios WHERE (departamento = 'ventascampo') ORDER BY tipo, usuario ASC limit 100");
	

	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
	if ($i > 0) {}

?>

		<tr>
			<td><?= $row['nombre1'] ?></td>
			<td><?= $row['apellido1'] ?></td>
			<td><?= $row['apellido2'] ?></td>
			<td><?= $row['usuario'] ?></td>
			<td><?= $row['clave'] ?></td>
			<td><?= $row['correo'] ?></td>
			<td><?= $row['departamento'] ?></td>
			<td><?= $row['tipo'] ?></td>
		</tr>

<?php

	$i++;
	
	}

?>

	</table>
</div>


<div class="container">
	<div class="row">
		<h3>Centered Processing Modal <br /><small>Create a simpler, auto-centered modal to tell the user something is processing and block their input!</small></h3>
        <p><code>NOTE: The 'X' button in the modal is provided for testing purposes only, and can be removed to make the modal uninterruptable.</code></p>
        <br />
        
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#processing-modal">
            <i class="glyphicon glyphicon-play"></i> Start Processing
        </button>   
	</div>
</div>

<style>
.on{
	display:block;	
}
.off {
	display:none;
}
</style>

<!-- Static Modal -->
<div class="modal modal-static fade in" id="processing-modal" role="dialog" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <img src="http://www.travislayne.com/images/loading.gif" class="icon" />
                    <h4>Processing... <button type="button" class="close" style="float: none;" data-dismiss="modal" aria-hidden="true">×</button></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="lasombra" class="modal-backdrop fade in"></div>

<style>
	body {
		/*<body class="modal-open" style="">*/
	}
	.modal-static { 
    position: fixed;
    top: 50% !important; 
    left: 50% !important; 
    margin-top: -100px;  
    margin-left: -100px; 
    overflow: visible !important;
}
.modal-static,
.modal-static .modal-dialog,
.modal-static .modal-content {
    width: 200px; 
    height: 200px; 
}
.modal-static .modal-dialog,
.modal-static .modal-content {
    padding: 0 !important; 
    margin: 0 !important;
}
.modal-static .modal-content .icon {
}
</style>