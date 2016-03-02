<?php
	$filtrarporvendedor = ''.$_SESSION["filtrarporvendedor"].'';
?>


<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			Filtrar por Vendedor: <?= $filtrarporvendedor ?>
		</h3>
	</div>
	
	<form action="controller/c.filtro.vendedor.php" method="post" id="filtrarporvendedor">

	<table class="table-condensed">
		<tr>
			<th>Seleccionar Vendedor</th>
			<td>
				<select name="filtrarporvendedor" class="form-control">
					<option value="">Todos</option>
					<?php include('model/m.select.vendedores-actuales.php');?>
				</select>
			</td>
			<td>
				<input type="submit" value="Aceptar" class="form-control btn btn-primary btn-xs" />
			</td>
		</tr>
	</table>

</form>

</div>