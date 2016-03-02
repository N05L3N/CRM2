<div class="container-fluid">

	<input type="hidden" name="fechadiaprox" value="0">
	<input type="hidden" name="fechamesprox" value="0">
	<input type="hidden" name="fechaanoprox" value="0">
	<input type="text" name="estadodeventa" value="">
	<input type="hidden" name="fechadia" value="0">
	<input type="hidden" name="fechames" value="0">
	<input type="hidden" name="fechaano" value="0">

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
		<button type="submit" class="btn btn-primary" tabindex="17" onclick="javascript:this.form.estadodeventa.value='seguimiento';" >Guardar comentario</button>
	</div>
</div>

</div>