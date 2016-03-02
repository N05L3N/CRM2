<hr>
<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<label><?php $obl ?>Comentarios:</label>
  	</div>			
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		<textarea id="comentariovendedor" name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:50px; resize: none;"><?= $POSTcomentariovendedor ?></textarea>
  		<script></script>
  	</div>
</div>

<br />

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

<hr>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
	</div>
</div>