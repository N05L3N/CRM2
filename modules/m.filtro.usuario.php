<?php
	$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
	$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

	$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
	$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';
?>


<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">
			Filtrar por Vendedor
		</h3>
	</div>
	
	<form action="controller/c.filtro.fecha.php" method="post" id="filtrarporfecha">


<table class="table-condensed">
	<tr>
		<th>Seleccionar Vendedor</th>
		<td>
			<select name="v1" class="form-control">
				<?php include('model/m.select.vendedores-actuales.php');?>
			</select>
		</td>
		<td>
			<input type="submit" value="Aceptar" class="form-control btn btn-primary btn-xs" />
		</td>
		<td>
			Mostrar Registros de: <?php echo ''.$fecha_inicio_filtro_mx.''; ?>
		</td>
	</tr>
</table>
</form>

</div>