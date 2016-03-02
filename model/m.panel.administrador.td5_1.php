
<br />

<table class="table table-condensed">
	<caption>
		<b><a href="cliente.php?id=<?= $busca ?>&vendedor=<?= $_SESSION['vendedor'] ?>">Comentarios:</a></b><br />
	</caption>

<?php
	
	

	if ($_SESSION['usuario'] == 'amariscal') {
		$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE  id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,100");
	}

	else {
		# $result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_vendedor' AND id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,100");
		$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE  id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,100");
	}

	mysql_query ("SET NAMES 'utf8'");

	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) {
		if ($i3 > 0) {
	}
?>

	<tr>
		<td colspan="2">
			<?= $row3['comentariovendedor'] ?>
			<br />
			
			<?php 

				$fecharespuestaE = explode("-", $row3['fecharespuesta'])

			?>
			
			<ol class="breadcrumb">
  				<li><span class="glyphicon glyphicon-user"></span> <?= $row3['usuario'] ?> </li>
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