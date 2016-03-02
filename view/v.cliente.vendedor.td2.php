<form action="cliente.php?<?= $id ?>" name="actualizar_cliente" method="post">
	<input type="hidden" value="<?= $id ?>" name="id">
	<br />
<?php
	
	if ($departamento == 'consumibles' OR $departamento == 'telemarketing' OR $departamento == 'ventascampo') {

		include('view/v.cliente.vendedor.td2_1.consumibles.php');

	}

	else {

		include('view/v.cliente.vendedor.td2_1.equipo.php');

	}
?>
	<div style="width:200px;">
		<button class="btn btn-md btn-primary btn-block" type="submit">Confirmar Cambio</button>   
	</div>
</form>