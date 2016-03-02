<table class="table table-condensed">
<?php
	
	$usuario = $_SESSION["usuario"];
	$id  = $_GET["id"];

	$result3 = mysql_query("SELECT usuario, comentariovendedor, fecharespuesta, horarespuesta, estadodeventa FROM ecrm_comentarios_v WHERE id_seguimiento = '$id' AND estadodeventa != 'Pendiente' ORDER BY id_comentarios_v desc limit 0,100");
	mysql_query ("SET NAMES 'utf8'");
	$i3 = 0;

	while ($row3 = mysql_fetch_array($result3)) {
		if ($i3 > 0) {
	}
?>
			<tr>
				<td>
					<i><?= $row3['comentariovendedor'] ?></i>
					<br>
<?php
	
	$fecharespuesta = explode("-", $row3['fecharespuesta']);

?>
					<ol class="breadcrumb">
						<li><span class="glyphicon glyphicon-user"></span> <?= $row3['usuario'] ?></li>
						<li class="active"><span class="glyphicon glyphicon-time"></span> <?= $row3['horarespuesta'] ?><small> <?= ''.$fecharespuesta[2].'-'.$fecharespuesta[1].'-'.$fecharespuesta[0].'' ?> </small></li>
					</ol>
				</td>
				<td>
<?php

if ($row3['estadodeventa'] == 'facturado') { echo '<span class="label label-success">Facturado</span>'; }
else if ($row3['estadodeventa'] == 'correo') { echo '<span class="label label-warning">Correo</span>'; }
else if ($row3['estadodeventa'] == 'llamada') { echo '<span class="label label-info">Llamada</span>'; }
else if ($row3['estadodeventa'] == 'llamadaycorreo') { echo '<span class="label label-primary">Llamada y Correo</span>'; }
else if ($row3['estadodeventa'] == 'descartado') { echo '<span class="label label-default">Descartado</span>'; }
else { }

?>      

				</td>
			</tr>
<?php

	$i3++; 

	}

?>
</table>