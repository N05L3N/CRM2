<form action="cliente.php?id=<?= $id ?>&plantilla=14" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="14">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>

	<p>
		Agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página web nos permitimos enviarle la información solicitada y una cotización con los  precios vigentes. Anexamos formato de registro para en caso de vernos favorecidos con su preferencia darlo de alta y con esto pueda gozar de algunos privilegios.
	</p>
	<p>
		Para mayor información al respecto de (<?= $equipodeinteres ?>), puede visitar nuestra página en el siguiente link: <a href="http://avanceytec.com.mx/busqueda.php?cx=014313635730003193707%3Akuuxljthx-w&cof=FORID%3A9&ie=UTF-8&q=<?= $equipodeinteres ?>&sa=+Buscar+"><?= $equipodeinteres ?></a>
	</p>
	<p>
		Le informamos que contamos  con tarifas especiales y convenios en paqueterías Nacionales  para hacerle llegar su material, contamos con las siguientes formas de pago: Depósito bancario o transferencia electrónica para su comodidad. 
	</p>
	<p>
		Esperando que la presente sea de su agrado, ponemos a su disposición nuestro <b>Centro de Atención Telefónica</b> en un horario de <b>Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)</b> Telefono lada sin costo 614 4 32 61 00  donde uno de nuestros asesores podrá atenderlo con gusto. 
	</p>
	<p>
		Quedamos a la orden.
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