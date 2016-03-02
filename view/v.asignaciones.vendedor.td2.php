<table class="table table-bordered table-condensed table-striped" style="font-size:12px; margin:0;">
	<tr>
		<th style="width:25%;">Interesado en:</th>
		<td style="width:75%;"><?= $equipodeinteres ?></td>
	</tr>
	<tr>
		<td colspan="2">
			<div style="height:100px;overflow-y:scroll;overflow-x:hidden;" data-toggle="modal" data-target="#myModal<?= $rows['id'] ?>">			
				<?= $rows['comentarios'] ?>
			</div>
		</td>
	</tr>
	<tr>
		<th>Registro de: </th>
		<td><?= $formulario ?></td>
	</tr>
	<tr>
		<th style="text-align:left;">Fecha:</th>
		<td><?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?></td>
	</tr>
</table>	

<!-- Modal -->
<div class="modal fade" id="myModal<?= $rows['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> <?= $rows['nombre'] ?></h4>
					<h5 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> <i><?= $rows['email'] ?></i></h5>
			</div>
			<div class="modal-body">
				<?= $rows['comentarios'] ?>
			</div>
			<div class="modal-footer">
				<a href="cliente.php?id=<?= $rows['id'] ?>&vendedor=<?= $rows['asignadoa'] ?>" style="text-decoration:none; color:black;">
					<button type="button" class="btn btn-primary">Actualizar</button>
				</a>
			</div>
		</div>
	</div>
</div>