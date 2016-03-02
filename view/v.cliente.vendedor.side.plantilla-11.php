<form action="cliente.php?id=<?= $id ?>&plantilla=11" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="11">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>

	<p>
		Le informamos en base a su solicitud:
	</p>
	
	<p>
		<textarea name="plantilla_comentariosplantilla" class="form-control" rows="2" style="width:100%; height:150px; resize:none;"></textarea>
	</p>

	<p>
		Le hacemos una cordial invitación a visitar nuestra página de internet en el siguiente link:  www.avanceytec.com.mx donde usted podrá ver todos los productos que manejamos, elegir  los de su preferencia y con gusto enviaremos la cotización correspondiente.
	</p>

	<p>
		O bien,  puede ponerse en contacto con nosotros a través de nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.), al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de venta podrá responder a todas sus preguntas.
	</p>

	<p>
		Estos son parte de la variedad de nuestros productos más novedosos, le invitamos a conocerlos:
	</p>
	
	<p>
		<table class="table table-bordered table-striped" style="width:100%;">
			<tr>
				<td>
					<img src="http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-01.jpg" alt=""  class="img-responsive" style="width:100%;" />
				</td>
				<td>
					<img src="http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-02.jpg" alt=""  class="img-responsive" style="width:100%;" />
				</td>
			</tr>
			<tr>
				<td>
					<img src="http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-03.jpg" alt=""  class="img-responsive" style="width:100%;" />
				</td>
				<td>
					<img src="http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-11-04.jpg" alt=""  class="img-responsive" style="width:100%;" />
				</td>
			</tr>
		</table>		
	</p>
	
	<p>
		Sin más por el momento y esperando una pronto respuesta, quedo a la orden.
	</p>

	<p>
<?php

	$accionid = $_GET['id'];
	$ruta = 'pdf/'.$accionid.'/';

	$filehandle = opendir($ruta);
	
		while ($file = readdir($filehandle)) {
      
        		if ($file != "." && $file != "..") {
                		
                		$factura_pass = 1;

                		$tamanyo = GetImageSize($ruta . $file);

?>

<div class="image photo ttip" data-tooltip="<?= $file ?>" alt="">
	<ul style="list-style:none;">
		<li>
			<a onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=500,status'); return false" href="<?= ''.$ruta.''.$file.'' ?>" style="text-decoration:none;">
				<span class="glyphicon glyphicon-file"></span> <?= $file ?>
			</a>        					
		</li>
	</ul>
                			
<?php
	
	$factura_pass++;

?>

</div>
                		
<?php

		}
	}
	
	closedir($filehandle);

?>
	</p>

	<p>
<input type="hidden" name="plantilla_adjuntos" value="<b>Documentos&nbsp;Adjuntos</b><br><?php

	$accionid = $_GET['id'];
	$ruta = 'pdf/'.$accionid.'/';

	$filehandle = opendir($ruta);
	
		while ($file = readdir($filehandle)) {
      
        		if ($file != "." && $file != "..") {
                		
                		$factura_pass = 1;

                		$tamanyo = GetImageSize($ruta . $file);
				echo 'http://avanceytec.com.mx/apps/crm2/'.$ruta.''.$file.'<br>';

				$factura_pass++;

			}
		}
	
	closedir($filehandle);

?>">
		
	</p>

	<p>
		<img src="view/<?= $usuario ?>.jpg" alt="" class="img-thumbnail img-responsive">
	</p>

	<p>
		<button class="btn btn-md btn-success btn-block" type="submit">
		 	<span class="glyphicon glyphicon-send" aria-hidden="true"></span> Enviar 
		</button>
	</p>
	
</form>