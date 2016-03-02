<?php 

  #$id = $row['id'];
  $_SESSION["idedit"] = $_GET["id"];
  $idedit = $id;

?>
<!-- Button trigger modal -->
<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
  Actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Recomendación: #<?php echo $idedit;?></h4>
      </div>
      <div class="modal-body">
        <iframe src="seguimientos.actualizar-venta.php?id=<?php echo $id;?>" width="100%;" height="300" frameborder="no" scrolling="no"></iframe>
        <?php # include('seguimientos.php');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->