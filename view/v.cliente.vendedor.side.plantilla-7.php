<form action="cliente.php?id=<?= $id ?>&plantilla=7" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="7">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>

	<p>
		Dando seguimiento a la solicitud de información por medio de nuestra página web,  nos ponemos nuevamente a sus órdenes para conocer sus comentarios respecto a nuestros productos y precios, 
		(<?= $equipodeinteres ?>), nuestro interés es resolver  todas sus dudas y mantener contacto,  para atenderle como usted  merece. 
	</p>

	<p>
		Le recuerdo que puede conocer nuestros productos a través de la página www.avanceytec.com.mx y solicitarnos la información que requiera por este medio, o bien, puede ponerse en contacto con nosotros a través de nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.), al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de venta podrá responder a todas sus preguntas.
	</p>
	
	<p>
		Sin más por el momento y esperando una pronta respuesta, quedo a la orden.
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
		<textarea name="plantilla_comentariosplantilla" class="form-control" rows="2" style="width:100%; height:150px; resize:none;"></textarea>

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