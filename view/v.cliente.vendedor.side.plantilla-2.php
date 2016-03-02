<form action="cliente.php?id=<?= $id ?>&plantilla=2" method="post">
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="hidden" name="plantilla_usuario" value="<?= $usuario ?>">
	<input type="hidden" name="plantilla_email" value="<?= $email ?>">
	<input type="hidden" name="plantilla_nombre" value="<?= $nombre ?>">
	<input type="hidden" name="plantilla_equipodeinteres" value="<?= $equipodeinteres ?>">

	<p>
		<strong><acronym title="2">Para:</acronym></strong> <?= $email ?>
	</p>

	<p>
		<strong>Estimado:</strong> <?= $nombre ?>
	</p>
	
       <p>
		Le agradecemos que nos haga llegar sus comentarios al respecto del servicio que ofrecemos y de antemano le ofrecemos una disculpa por las molestias que le genera el proceso de asegurar los cheques.
	</p>
	<p>
		Al respecto, le comento que esta medida fue implementada en los procesos de la empresa para los pagos realizados con cheque debido a que fuimos victima de numerosos fraudes con cheques falsos o botados.
	</p>
	<p>
		Sin embargo, estamos consientes de las molestias que esta práctica ha generado en nuestros buenos clientes y tenemos las siguientes alternativas para evitar el cargo del importe correspondiente al 1.7% del monto del cheque.
	</p>
	<p>
		Las alternativas son las siguientes:
	</p>
	<p>
		1. Usted puede entregar el cheque en nuestras oficinas o depositarlo en cualquier banco distinto al emisor de la cuenta de cheques, con la única condición de que el material podrá ser liberado y la factura emitida hasta que el monto del mismo se acredite en las cuentas de la empresa, lo cual sería al siguiente día hábil, después de las 14:00 hrs.
	</p>
	<p>
		2. También puede realizar el pago con Cheque, depositándolo directamente en el banco emisor de la cuenta de cheques y de esta manera, al acreditarse el monto el mismo día en las cuentas de la empresa, se aplicaría dicho pago y se realizaría la entrega del material y la emisión de la factura sin necesidad de asegurar el cheque.
	</p>
	<p>
		3. Además, puede realizar el pago por medio de depósito bancario o transferencia electrónica en las siguientes cuentas:
	</p>

	<p>

	<table>
		<tr>	
			<th style="background-color:#000; color:#fff;">BANCO</th>
			<th style="background-color:#000; color:#fff;">CUENTA</th>
			<th style="background-color:#000; color:#fff;">CLABE INTERBANCARIA</th>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">BANCOMER</td>
			<td style="background-color:#fff; color:black;">0442666073</td>
			<td style="background-color:#d8d8d8; color:black;">012150004426660735</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">BANCOMERDOLLARES</td>
			<td style="background-color:#fff; color:black;">0442666065</td>
			<td style="background-color:#d8d8d8; color:black;">012150004426660654</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">HSBCCHIHUAHUA</td>
			<td style="background-color:#fff; color:black;">128301462-1</td>
			<td style="background-color:#d8d8d8; color:black;">021150012830146213</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">BANORTE</td>
			<td style="background-color:#fff; color:black;">198023159</td>
			<td style="background-color:#d8d8d8; color:black;">072150001980231591</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">BANAMEX</td>
			<td style="background-color:#fff; color:black;">673 SUC 4305</td>
			<td style="background-color:#d8d8d8; color:black;">002150430500006734</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">SANTANDER</td>
			<td style="background-color:#fff; color:black;">65174302218</td>
			<td style="background-color:#d8d8d8; color:black;">014150651743022180</td>
		</tr>
		<tr>
			<th style="background-color:#000; color:#fff;">HSBC SUCURSALES</th>
			<th style="background-color:#000; color:#fff;">CUENTA</th>
			<th style="background-color:#000; color:#fff;">CLABE INTERBANCARIA</th>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">JUAREZ</td>
			<td style="background-color:#fff; color:black;">4029720653</td>
			<td style="background-color:#d8d8d8; color:black;">21164040297206500</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">CULIACAN</td>
			<td style="background-color:#fff; color:black;">4016412199</td>
			<td style="background-color:#d8d8d8; color:black;">21730040164121900</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">LEON</td>
			<td style="background-color:#fff; color:black;">4040642191</td>
			<td style="background-color:#d8d8d8; color:black;">21225040406421900</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">TORRERON</td>
			<td style="background-color:#fff; color:black;">4019550367</td>
			<td style="background-color:#d8d8d8; color:black;">21060040195503600</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">SALTILLO</td>
			<td style="background-color:#fff; color:black;">4023764715</td>
			<td style="background-color:#d8d8d8; color:black;">21078040237647100</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">HERMOSILLO</td>
			<td style="background-color:#fff; color:black;">4012608840</td>
			<td style="background-color:#d8d8d8; color:black;">21760040126088400</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">MEXICALI</td>
			<td style="background-color:#fff; color:black;">4026126383</td>
			<td style="background-color:#d8d8d8; color:black;">21020040261263800</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">OBREGON</td>
			<td style="background-color:#fff; color:black;">4044106789</td>
			<td style="background-color:#d8d8d8; color:black;">21150040441067800</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">DURANGO</td>
			<td style="background-color:#fff; color:black;">4039102272</td>
			<td style="background-color:#d8d8d8; color:black;">21150040391022700</td>
		</tr>
		<tr>
			<td style="background-color:#d8d8d8; color:black;">AGUASCALIENTES</td>
			<td style="background-color:#fff; color:black;">4052554649	</td>
			<td style="background-color:#d8d8d8; color:black;">21010040525546492</td>
		</tr>
	</table>		
</p>

	<p>
		4. Finalmente, puede hacer uso del resto de las opciones de pago que manejamos, tales como pago en efectivo, pago con Tarjeta de Crédito o Débito (Los pagos con tarjeta de crédito y débito manejan una comisión del 1.83%).
	</p>

	<p>
		Esperando que la presente sea de su agrado, ponemos a su disposición nuestro Centro de Atención Telefónica en un horario de Lunes a Viernes 7:30 am. A 7:00 p.m. y Sábado de 8:00 am a 2:00 pm (Hora local Chih.)  al teléfono 01 (614) 432 6100 donde uno de nuestros ejecutivos de ventas podrá responder a todas sus preguntas.  
	</p>
	<p>
		Gracias por su atención y quedo a la orden.
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