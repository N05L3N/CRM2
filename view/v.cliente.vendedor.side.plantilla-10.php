<form action="cliente.php?id=<?= $id ?>&plantilla=10" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="10">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>

	<p>
		Le agradecemos su  interés en nuestros productos  y en respuesta a su solicitud por medio de nuestra página web,  le informamos que nuestra empresa no es fabricante de manufacturas plásticas ni manufactura el trabajo que usted nos solicita Lo invitamos  a visitar la página de la empresa <a href="http://www.maplasa.com/">MAPLASA, Manufacturas Plásticas</a>, la cual se dedica a la manufactura de productos elaborados con plásticos.
	</p>

	<p>
		Para darle  el seguimiento oportuno a su solicitud me permito copiar este correo a los siguientes contactos:
	</p>
	
	<p>
		<table>
			<tr>
				<th style="text-align:left;">Josefina Alarcón</th>
				<td style="text-align:left;"><a href="mailto:ventascampo@maplasa.com">&nbsp;ventascampo@maplasa.com</a></td>
			</tr>
			<tr>
				<th style="text-align:left;">Alonso Garcia</th>
				<td style="text-align:left;"><a href="mailto:gerencia@maplasa.com">&nbsp;gerencia@maplasa.com</a></td>
			</tr>
			<tr>
				<th style="text-align:left;">Griselda Morales</th>
				<td style="text-align:left;"><a href="mailto:cat1@maplasa.com">&nbsp;cat1@maplasa.com</a></td>
			</tr>
		</table>
	</p>

	<p>
		Así mismo le informamos que contamos con una lista de clientes registrados con nosotros que pueden realizar este tipo de trabajo, los cuales recomendamos y que tal vez puedan brindarle el soporte a la necesidad que actualmente  presentan. 
	</p>
	<p>
		Agradecemos de antemano su atención,  quedo a sus órdenes para cualquier aclaración.
	</p>
	<p>
		Quedo a la orden 
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