<table class="table table-condensed">
	<caption>
		<b><a href="cliente.php?id=<?= $busca ?>&vendedor=<?= $_SESSION['vendedor'] ?>">Comentarios:</a></b><br />
	</caption>

<?php
	
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_vendedor' AND id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,100");
	mysql_query ("SET NAMES 'utf8'");

	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) { 
		if ($i3 > 0) {
	}

	$fecharespuestaE = explode("-", $row3['fecharespuesta']);

?>

	<tr>
		<td colspan="2">
			<?= $row3['comentariovendedor'] ?>
			<br />
			
			<ol class="breadcrumb">
  				<li><span class="glyphicon glyphicon-calendar"></span> <?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?> </li>
  				<li class="active"><span class="glyphicon glyphicon-time"></span> <?= $row3['horarespuesta'] ?></li>
			</ol>

			
		</td>
	</tr>


<?php
	
	$_SESSION['datetime20'] = $row3['fecharespuesta'];
	
	$i3++; 
	
	}
	
	$usuario_vendedor = '';
	$asignacion_vendedor = '';

?>
</table>