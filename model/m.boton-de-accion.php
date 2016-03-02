<form action="model/mc.asignacion.php" method="post">    
  <table cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td>
        <input type="hidden" name="idedit" value="<?php echo ''.$row['id'].'';?>" onmouseout ="document.thisform.submit()"></td>
      <td></td>
      <td>
        <input type="submit" value="<?php echo '#'.$row['id'].'';?>" class="boton" style="cursor:pointer;" tabindex="17">
<?php
  if ($row['id'] == $idedit) { 
?>
<br />
<!-- Button trigger modal -->
<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
  Asignar
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
        <iframe src="seguimientos.php" width="100%;" height="200" frameborder="yes" scrolling="no"></iframe>
        <?php # include('seguimientos.php');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php    
  }
  
  else {
  
  }
?>

    </td>
  </tr>
</table>
</form>