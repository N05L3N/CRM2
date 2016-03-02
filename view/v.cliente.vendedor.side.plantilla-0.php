<form action="cliente.php?id=<?= $id ?>&plantilla=0" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="0">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Atención:</strong> (<?= $nombre ?>)
	</p>

	<p>
		Nos permitimos  presentarnos ante usted
	</p>
	<p>
		Avance y Tecnología en Plásticos es una Empresa 100% Mexicana que se distingue y caracteriza por   estar siempre  a la vanguardia  en las últimas Tecnologías e Innovaciones para los mercados de Imagen Gráfica, Arquitectura, Decoración, Manualidades, entre otros, ofreciendo a nuestros  clientes productos de alta calidad variedad,  por lo somos el más importante distribuidor de las marcas más reconocidas a nivel Internacional  tales como: <b>Plastiglas de México, 3M, Avery, Reflectiv, Cooley, Signs Systems, Oracal, Graphtec, Roland, Mutoh, Orionjet y más…</b>
	</p>
	<p>
		Actualmente con  18 centros de distribución en el País y próximamente presentes   en Cd. de México Df. <b>26 años de Experiencia y Servicio</b>,  con atención a Centro América y USA,  así como un grupo de Asesores Especializados y  Equipo de Soporte Técnico,  siempre al pendiente de nuestros clientes. 
	</p>
	<p>
		Quedamos a sus atentas órdenes y agradecemos  su atención al presente, no sin antes haciéndole una cordial invitación a visitar nuestro sitio web www.avanceytec.com.mx donde estamos seguros encontrará una soluciones y oportunidades de Negocio para su Empresa.
	</p> 
	<p>
		<b>
			Quedo a sus atentas ordenes
			Saludos Cordiales 
		</b>
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
		<textarea name="plantilla_comentariosplantilla" class="form-control" rows="2" style="width:100%; height:150px; resize:none;" required></textarea>

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