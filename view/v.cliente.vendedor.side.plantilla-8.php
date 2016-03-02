<form action="cliente.php?id=<?= $id ?>&plantilla=8" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="8">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>

	<p>
		Le agradecemos su interés en nuestros productos y en respuesta a su solicitud lamentamos informarle que no manejamos franquicias, por lo que los productos son exclusivos de venta a clientes registrados y público en general.
	</p>

	<p>
		Le hacemos una cordial invitación a visitar nuestra página de internet en el siguiente link: <a href="http://www.avanceytec.com.mx">www.avanceytec.com.mx</a> donde usted podrá ver toda la línea de productos que manejamos,   y poder elegir  los de su preferencia y con gusto enviaremos la cotización correspondiente.
	</p>

	<p>
		O bien,  puede ponerse en contacto con nosotros a través de nuestro <b>Centro de Atención Telefónica</b> en un horario de <b>Lunes a Viernes de 7:30 am a 7:00 pm  y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)</b>, Teléfono lada sin costo 614 4 32 61 00  donde uno de nuestros asesores podrá atenderlo con gusto. 
	</p>
	
	<p>
		Quedo a la orden 
		<br>
		Saludos Cordiales 
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