<div style="height:150px;overflow-y:scroll;overflow-x:hidden; font-size:13px;" data-toggle="modal" data-target="#myModal<?= $row2['id'] ?>">
	<?= $row2['comentarios'] ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal<?= $row2['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> <?= $row2['nombre'] ?></h4>
        <h5 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> <i><?= $row2['email'] ?></i></h5>
      </div>
      <div class="modal-body">
        <?= $row2['comentarios'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="cliente.php?id=<?= $row2['id'] ?>&vendedor=<?= $row2['asignadoa'] ?>" style="text-decoration:none; color:black;">
        	<button type="button" class="btn btn-primary">Más Información</button>
        </a>
      </div>
    </div>
  </div>
</div>