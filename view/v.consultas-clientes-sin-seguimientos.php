<style>
<?php
	for ($icss=1; $icss < 50; $icss++) { 
?>
	.on<?= $icss ?> {
		display: none;
	}

<?php		
	}
?>

</style>

<?php

	include('inc/menu-superior.php');

	$arrayUsuarios = array("","ventasequipo1", "ventasequipo2", "ventasequipo3", "ventasequipo4", "ventasequipo5", "ventasequipo6", "ventasequipo7", "admsoporte", "equipomerida", "equiposmonterrey", "achavez", "nramirez");

?>

<div class="row">
	<div class="col-sm-11">

<table class="table table-striped table-bordered table-condensed">
	<caption>
		Seguimientos
	</caption>
	<tr>
		<th style="width:10%">Vendedor</th>
		<th style="width:10%">0 </th>
		<th style="width:10%">1 </th>
		<th style="width:10%">2 </th>
		<th style="width:10%">3 </th>
		<th style="width:10%">4 </th>
		<th style="width:10%">5 </th>
		<th style="width:10%">6 </th>
		<th style="width:10%">7 </th>
		<th style="width:10%">8 </th>
		<th style="width:10%">9 </th>
		<th style="width:10%">10 </th>
		<th style="width:10%">11 </th>
		<th style="width:10%">12 </th>
		<th style="width:10%">13 </th>
		<th style="width:10%">14 </th>
		<th style="width:10%">15 </th>
		<th style="width:10%">16 </th>
		<th style="width:10%">17 </th>
		<th style="width:10%">18 </th>
		<th style="width:10%">19 </th>
		<th style="width:10%">20 </th>

	</tr>

<?php
	#for ($i=1; $i < 22; $i++) { 
		# for ($i=1; $i < 11; $i++) { 
			for ($i=1; $i < 13; $i++) { 
	
		$usuario_consultas = $arrayUsuarios[$i];
		$columna = 1;
?>
	<tr>
		<td><?= $arrayUsuarios[$i] ?>
			<ul style="list-style:none;">
				<li onclick="javascript:mostrar<?= $i ?>();" class="mostrar<?= $i ?>" style="cursor:pointer;"><small>Mostrar</small></li>
				<li onclick="javascript:ocultar<?= $i ?>();" class="ocultar<?= $i ?> on<?= $i ?>" style="cursor:pointer;"><small>Ocultar</small></li>
			</ul>
		</td>
		<td><center></center><br /><?php include('v.consultas-clientes-sin-seguimientos.select.php') ?></td>
		
		<?php
			for ($ir=1; $ir < 21; $ir++) { 
		?>
			<td><center><?php $columna++ ?></center><br /><?php include('v.consultas-clientes-sin-seguimientos.select.php') ?></td>
		<?php
			}
		?>

	</tr>
<?php
	}
?>	

</table>

	</div>
	<div class="col-sm-1"></div>
</div>