<script type="text/javascript">

	function mostrar<?= $i ?> () {
		$(".datos<?= $i ?>").removeClass("on<?= $i ?>");
		$(".mostrar<?= $i ?>").addClass("on<?= $i ?>");
		$(".ocultar<?= $i ?>").removeClass("on<?= $i ?>");
	}

	function ocultar<?= $i ?> () {
		$(".datos<?= $i ?>").addClass("on<?= $i ?>");
		$(".mostrar<?= $i ?>").removeClass("on<?= $i ?>");
		$(".ocultar<?= $i ?>").addClass("on<?= $i ?>");
/*
		$('.cd-panel[data-panel="' + i + '"]').addClass('is-visible');
*/
	}

</script>

<?php

	if(!@mysql_connect("$dbh", "$dbu", "$dbp")) {

		die();

	}

	mysql_select_db("$dbn1");

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';

	mysql_query("SET NAMES 'utf8'");

	$result_home = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND fechaproxima >=  '2014-08-08' AND fechaproxima <=  '$fecha' ORDER BY id_comentarios_v desc limit 0,9999");
		while ($row_result_home = mysql_fetch_array($result_home)) {
			$id_seguimiento = $row_result_home['id_seguimiento'];
			# echo '[1]'.$id_seguimiento.'';
	
				/* INICIA CONTACTO */
				$result_contacto = mysql_query("SELECT id,asignadoa FROM contacto WHERE id = '$id_seguimiento' AND fecha >=  '2014-08-28' AND asignadoa !=  'trash' ORDER BY id desc limit 0,9999");
					while ($row_contacto = mysql_fetch_array($result_contacto)) {
						$id_seguimiento = $row_contacto['id'];
						$asignadoa = $row_contacto['asignadoa'];
						# echo '('.$id_seguimiento.').'.$asignadoa.'';


				/* INICIA DISTINTOS ID*/

				$result_home2 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE id_seguimiento = $id_seguimiento AND estadodeventa != 'descartado' ORDER BY id_comentarios_v DESC  LIMIT 0,9999");
					while ($row_result_home2 = mysql_fetch_array($result_home2)) {
						$id_seguimiento = $row_result_home2['id_seguimiento'];
						$estadodeventa = $row_result_home2['estadodeventa'];
						# echo '('.$id_seguimiento.')-('.$estadodeventa.')';


/**/
								#$sql_asignacionesCuantos = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND id_seguimiento = $id_seguimiento ORDER BY id_comentarios_v desc limit 0,9999";
								$sql_asignacionesCuantos = "SELECT id_seguimiento FROM ecrm_comentarios_v WHERE usuario = '$usuario_consultas' AND id_seguimiento = $id_seguimiento ORDER BY id_comentarios_v desc limit 0,9999";
								
  								$result_asignacionesCuantos = mysql_query($sql_asignacionesCuantos);
  								$numero_asignacionesCuantos = mysql_num_rows($result_asignacionesCuantos);

	  								if ($numero_asignacionesCuantos == $columna) {
  						
  							?>

		  							<div style="background-color:#fff; border:0px dashed black;" class="datos<?= $i ?> on<?= $i ?>">
  										<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $arrayUsuarios[$i] ?>"><?= $id_seguimiento ?></a>
  									</div>

  							<?php
  
  								$contador++;
	
	  								}
	
	  								else {
	
  									}
/**/
  							

					} 
				/* TERMINA DISTINTOS ID*/



				}
				/* TERMINA CONTACTO */

  		}
  		/* TERMINA EL PRINCIPAL */
?>

<ol class="breadcrumb">
	<li class="active"><span class="badge"><?= $contador ?></span></li>
</ol>

<?= $contador1 ?>
<?php
	$contador = 0;
?>