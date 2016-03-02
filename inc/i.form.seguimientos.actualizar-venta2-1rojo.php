<input type="hidden" value="postventa" name="estadodeventa" />
<input type="hidden" value="" name="fechadia" />
<input type="hidden" value="" name="fechames" />
<input type="hidden" value="" name="fechaano" />
<input type="hidden" value="" name="numerodefactura" />

<div class="container-fluid">
	<div class="row">
	  	<div class="col-xs-4 col-sm-4 col-md-4">
  			<label><?= $obl ?>Próxima llamada: <i>día/mes/año</i></label>
  		</div>
  		<div class="col-xs-8 col-sm-8 col-md-8">
			<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
				<tr>
					<td>
						<select name="fechadiaprox" class="form-control">
							<option value=""></option>
							<?php
								$i = '0';
								for ($n=0; $n<31; $n++) {
									$l = ++$i;
									echo '<option value="'.$l.'">'.$l.'</option>';
								}
							?>	
						</select>		
					</td>
					<td>
						<select name="fechamesprox" class="form-control">
							<option value=""></option>
							<option value="01">Enero</option>
							<option value="02">Febrero</option>
							<option value="03">Marzo</option>
							<option value="04">Abril</option>
							<option value="05">Mayo</option>
							<option value="06">Junio</option>
							<option value="07">Julio</option>
							<option value="08">Agosto</option>
							<option value="09">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
					</td>
					<td>
						<select name="fechaanoprox" class="form-control">
							<option value="2014">2014</option>
						</select>		
					</td>
				</tr>
			</table>
  		</div>
	</div>
</div>

<hr />

<hr>

<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<label><?php $obl ?>Comentarios:</label>
  	</div>			
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		<textarea name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:50px; resize:no;"></textarea>
  	</div>
</div>

<br />

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
	</div>
</div>