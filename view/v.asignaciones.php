<?php

# Incluir Filtro por fecha

	if ($_SESSION["id_view"] == 'diary' OR $_SESSION["id_view"] == 'late' OR $_SESSION["id_view"] == 'asignaciones') {

	}

	else {

?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="width:75%; margin:auto;">
	<li class="active">
    		<a href="#home" role="tab" data-toggle="tab">
      			Fecha de Contacto
			<?= ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].''; ?>
    		</a>
  	</li>

<?php
  
	if($_SESSION["tipo"] == 'administrador' || $_SESSION["tipo"] == 'programador'){

  ?>
	
	<li><a href="#profile" role="tab" data-toggle="tab">Vendedor</a></li>

<?php
	
	}
  
	else {
  
	}

?>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="width:75%; margin:auto;">
	<div class="tab-pane active" id="home">
		<?php include('modules/m.filtro.fecha.php') ?>
  	</div>
  	<div class="tab-pane" id="profile">
	      <?php include('modules/m.filtro.vendedor.php') ?>
  	</div>
</div>

<?php

	}

?>




<style>

table.menu-principal {
	background-color: #fff;
	margin:auto; 
	width: 90%;
}

table.menu-principal td {
	width: 25%;
}

ul.menu-principal {
	list-style: none;
}

span.subtitulo {
	font-size: 20px;
	font-weight: bold;
}

</style>

<div class="table-responsive">
<table class="table table-striped table-condensed menu-principal" style="width:75%; margin:auto;">
	<tr>
		<td style="width:25%">
			<ul class="menu-principal">
				<li><span class="subtitulo">Prospectos</span></li>
<?php
	
	if ($_SESSION["departamento"] == 'ventascampo') {

?>
				<li><a href="registrar_cliente.php">Registrar Visita</a></li>
<?php

	}

	else {

?>
				<li><a href="registrar_cliente.php">Registrar Prospecto</a></li>
<?php

	}
	
?>
			</ul>
		</td>
		<td style="width:25%">
			<ul class="menu-principal">
				<li><span class="subtitulo">Bitácoras</span></li>
				<li><a href="bitacoras.php">Consultar mis registros</a></li>
			</ul>
		</td>
		<td style="width:50%"></td>
	</tr>
</table>
</div>

<br>

<div class="table-responsive">
	<table class="table table-bordered table-striped" style="width:75%; margin:auto;">
		<caption style="background-color:White;">
			 <h4><?= $_SESSION["h4"] ?></h4>
		</caption>

<?php

	# TR
	include('view/v.asignaciones-01.php');
	
	$c = $mysql->query($select);
	
	while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

		include('controller/c.asignaciones.resultados.php');

	# TD
	include('view/v.asignaciones-02.php');

	}

?>
	<table>
</div>

<center>
	<div style="margin:auto;">
		<ul class="pagination pagination-sm">

<?php   
	
	for($k=1; $k <= $total; $k++) {
		if($ini == $k) {
?>
		<li class="active"><a href='#'><b><?= $k ?></b></a></li>
<?php	
		}
		
		else {
?>			
		<li><a href='<?= $url ?>?pos=<?= $k ?>'><?= $k ?></a></li>
<?php
		}
	}
	
?>
		</ul>
	</div>
<center>

<table class="table table-bordered table-condesed table-striped" style="width:1200px; margin:auto;">
	<caption>
		<h2 id="bitacora">
			Bitácora del día
		</h2>
	</caption>
	<tr>
	<?php
		$fecha_actual = date('Y-m-d');

		$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fecharespuesta = '$fecha_actual' ORDER BY fechaproxima desc limit 999";
		$result_bitacora = mysql_query("$query_bitacora");
		# echo '<pre>' .$query_bitacora. '</pre>';
		$i_bitacora = 0;
  		while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    			if ($i_bitacora > 0) {}
				# $id_bitacora = $row_bitacora['id_seguimiento'];
			$i_bitacora++;
    		}

	?>
		<th style="width:25%;">
			Seguimientos en el día
		</th>
		
		<td style="width:75%;"><?= $i_bitacora ?></td>
	</tr>
</table>

<table class="table table-bordered table-condesed table-striped" style="width:1200px; margin:auto;">
	<tr>
		<th>Hora</th>
		<th>Folio</th>
		<th>Comentarios</th>
		<th>Status</th>
	</tr>
	<?php
		$fecha_actual = date('Y-m-d');

		$query_bitacora = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = '$usuario' AND fecharespuesta = '$fecha_actual') AND (comentariovendedor != 'Dar seguimiento') ORDER BY id_comentarios_v ASC limit 999";
		$result_bitacora = mysql_query("$query_bitacora");
		# echo '<pre>' .$query_bitacora. '</pre>';
		$i_bitacora = 0;
  		while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    			if ($i_bitacora > 0) {}
				$id_seguimiento = $row_bitacora['id_seguimiento'];
				$horarespuesta = $row_bitacora['horarespuesta'];
				$comentariovendedor = $row_bitacora['comentariovendedor'];
				$estadodeventa = $row_bitacora['estadodeventa'];
	?>
		<tr>
			<td style="width:10%;"><?= $horarespuesta ?></td>
			<td style="width:10%;">
				<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
					<?= $id_seguimiento ?>
				</a>
			</td>
			<td style="width:70%;"><?= $comentariovendedor ?></td>
			<td style="width:10%;">
				<?php
					if ($estadodeventa == 'frio') {
						$classStatus = 'info';
					}
					else if ($estadodeventa == 'tibio') {
						$classStatus = 'warning';
					}
					else if ($estadodeventa == 'caliente') {
						$classStatus = 'danger';
					}
					else if ($estadodeventa == 'facturado') {
						$classStatus = 'success';
					}
					else {
						$classStatus = 'default';
					}
				?>
				<div class="label label-<?= $classStatus ?>" style="width:100px; display: inline-block; text-transform: capitalize;">
					<?= $estadodeventa ?>
				</div>
			</td>
		</tr>
	<?php
		$i_bitacora++;
    		}
	?>
</table>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
</div>