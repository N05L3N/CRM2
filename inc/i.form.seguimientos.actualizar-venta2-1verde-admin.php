<?php
$asignadoa = $_SESSION['asignadoa'];
?>
<div class="container-fluid">

	<input type="hidden" name="fechadiaprox" value="01">
	<input type="hidden" name="fechamesprox" value="01">
	<input type="hidden" name="fechaanoprox" value="3000">
	<input type="hidden" name="estadodeventa" value="" onlyread="onlyread">
	<!-- <pre><?= $_SESSION["test150521"] ?></pre> -->
	<input type="hidden" name="fechadia" value="01">
	<input type="hidden" name="fechames" value="01">
	<input type="hidden" name="fechaano" value="3000">
	<input type="hidden" name="fcasignadoa" value="<?= $asignadoa ?>">
	

<div class="row">
  	<div class="col-xs-12 col-sm-12 col-md-12">
  		<label><?= $obl ?><acronym title="<?= $asignadoa ?>">Comentarios de Seguimiento:</acronym></label>
  	</div>
</div>
<div class="row">
  	<div class="col-xs-12 col-sm-12 col-md-12">
  		<textarea name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:200px; resize: none;" onfocus="javascript:this.form.estadodeventa.value='seguimiento';"><?= $POSTcomentariovendedor ?></textarea>
  	</div>
</div>

<br />

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit" class="btn btn-primary" tabindex="17">Guardar comentario</button>
	</div>
</div>

</div>