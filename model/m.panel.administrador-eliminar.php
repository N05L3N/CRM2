<form action="panel.php" method="post" class="navbar-form navbar-right" role="form">
	
	<input class="form-control" name="id_eliminar" type="hidden" value="">
	
	<button type="submit" class="btn btn-danger btn-xs" onMouseOver="javascript:id_eliminar.value='<?= $row['id'] ?>';">
		<span class="glyphicon glyphicon-trash"></span> Eliminar
	</button>

</form>