<div style="height:150px;overflow-y:scroll;overflow-x:hidden; font-size:13px;" data-toggle="modal" data-target="#myModal<?= $rows['id'] ?>">
<table class="table table-bordered table-condensed" style="font-size:12px; margin:0;">
          <tr>
            <td>	
  <p style="width:600px; background-color:#fff;">
          <?= $rows['comentarios'] ?>
        </p>
      </td>
    </tr>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal<?= $rows['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> <?= $rows['nombre'] ?></h4>
        <h5 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> <i><?= $rows['email'] ?></i></h5>
      </div>
      <div class="modal-body">
        
            <?= $rows['comentarios'] ?>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="cliente.php?id=<?= $rows['id'] ?>&vendedor=<?= $rows['asignadoa'] ?>" style="text-decoration:none; color:black;">
        	<button type="button" class="btn btn-primary">Más Información</button>
        </a>
      </div>
    </div>
  </div>
</div>