<form action="cliente.php?id=<?= $id ?>&plantilla=9" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="9">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>

	<p>
		Le agradecemos su interés en nuestros productos y en respuesta a su solicitud por medio de nuestra página, me permito enviarle la información solicitada y una cotización con los precios vigentes. Le anexamos un formato de registro para darlo de alta con nosotros o en caso de ya ser registrado de favor indicarnos su nombre de facturación.
	</p>

	<p>
		Para mayor información al respecto de las <?= $equipodeinteres ?>  solicitadas, puede visitar nuestra página en el siguiente link:  <a href="http://avanceytec.com.mx/busqueda.php?cx=014313635730003193707%3Akuuxljthx-w&cof=FORID%3A9&ie=UTF-8&q=<?= $equipodeinteres ?>&sa=+Buscar+"><?= $equipodeinteres ?></a>
	</p>

	<p>
		En caso de vernos favorecidos con su compra, le informamos que  contamos con convenios y tarifas especiales para hacerle llegar su pedido al mejor precio por cualquiera de las siguientes paqueterías:
	</p>
	
	<p>
		Las paqueterías disponibles para su ciudad son:
	</p>

	<ul>
		<li>	Estafeta</li>
		<li>	Multipack</li>
		<li>	Paquetexpress</li>
	</ul>
	<p>
		El costo del envío se determina en base al volumen y peso de los productos; usted puede pagar al recibir su mercancía (solo aplica en algunas paqueterías) o bien podemos incluir el costo del envío en nuestra factura.
	</p>
	<p>
		<strong>
			**El tipo de cambio puede variar al día de la facturación, por lo que deberá confirmar el importe total  antes de efectuar su depósito.
		</strong>
	</p>
	<p>
		<strong>
			**Para realizar envíos de paquetería deberá enviar comprobante de pago antes de las 15:00 hrs (hora local chihuahua) de Lunes a Viernes (envíos aéreos y terrestres)
		</strong>
	</p>
	<p>
		Contamos con las siguientes formas de pago: Depósito bancario o transferencia electrónica.
	</p>
	<p>
		Esperando que la presente sea de su agrado, ponemos a su disposición nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)  al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de ventas podrá responder a todas sus preguntas.
	</p>
	<p>
		Algunos de los productos que manejamos son:
	</p>
	<p>
		<img src="http://avanceytec.com.mx/apps/crm2/img/plantillas/plantilla-09.jpg" alt=""  class="img-responsive" />
	</p>
	<p>
		Gracias por su atención y quedo a la orden.
	</p>

















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