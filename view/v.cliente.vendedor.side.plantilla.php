<?php
	
	if ($_SESSION['correo_enviado'] == 'ok') {

?>

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">X</span></button>
	<strong>Correo</strong> enviado con éxito
</div>

<?php		
	
	}
	
	else {

	}
	
?>

<form action="upload.php" method="post" enctype="multipart/form-data" id="form1" onSubmit="return validaCampos(this)">
	<input type="hidden" name="fechaprox" value="x">
	<input type="hidden" name="estadodeventa" value="x">
	<input type="hidden" name="comentariovendedor" value="x">

<div class="row">
	<div class="col-md-12">
		<h4>Adjuntar Cotización</h4>	
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		Seleccione Cotización:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="hidden" name="id" value="<?= $id ?>">
    	</div>
</div>
<br>
<div class="row" style="margin:top:10px;">
    	<div class="col-md-6" style="text-align:center;">
		<button class="btn btn-md btn-warning" type="submit">
		<span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Subir Cotización
		</button>
	</div>
	<div class="col-md-6" style="text-align:center;"></div>
</div>
</form>

<hr>

<form action="upload2.php" method="post" enctype="multipart/form-data" id="form1" onSubmit="return validaCampos(this)">
	<input type="hidden" name="fechaprox" value="x">
	<input type="hidden" name="estadodeventa" value="x">
	<input type="hidden" name="comentariovendedor" value="x">
<div class="row">
	<div class="col-md-12">
		<h4>Adjuntar Ficha Técnica</h4>	
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		Seleccione Ficha Técnica:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="hidden" name="id" value="<?= $id ?>">
    	</div>
</div>
<br>
<div class="row" style="margin:top:10px;">
    	<div class="col-md-6" style="text-align:center;">
		<button class="btn btn-md btn-warning" type="submit">
		<span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Subir Ficha Técnica
		</button>
	</div>
	<div class="col-md-6" style="text-align:center;"></div>
</div>
</form>

<hr>

<?php
	if ($_SESSION['departamento'] == 'ventascampo') {
		
		include('v.cliente.vendedor.side.plantilla-ventascampo.php');

	}

	else {

		include('v.cliente.vendedor.side.plantilla-telemarketing.php');

	}
?>