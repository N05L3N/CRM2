<form action="cliente.php" name="actualizar_cliente.php" method="post">
	<input type="hidden" value="<?php echo ''.$id.'';?>" name="id">
	<br />

<?php include('view/v.cliente.vendedor.td2_1.php');?>
	<div style="width:200px;">
		<button class="btn btn-md btn-primary btn-block" type="submit">Confirmar Cambio</button>   
	</div>
</form>

<!--
Información de colores
<td style="background-color:#c6efce;">
if ($estadodeventa == 'si')
if ($estadodeventa == 'no')
if ($estadodeventa == 'En proceso')
if ($estadodeventa == '')
<td style="background-color:#ffc7ce;"><b>No se vendio</b>
<td style="background-color:#ffeb9c;"><b>En proceso</b>
-->