<?php
  
  $busca = $row['id'];
  $result2 = mysql_query("SELECT * FROM contacto WHERE id = '$busca' ORDER BY id desc limit 0,1");
  
  $i2 = 0;
  
  while ($row2 = mysql_fetch_array($result2)) {
    
    if ($i2 > 0) {
    }

  $_SESSION['datetime10'] = $row2['fechaasignacion'];

?>          

<?php 
  # Explode
  $fechaasignacionE = explode("-", $row2['fechaasignacion']);
  # Fecha asignacion:
  # ''.$fechaasignacionE[2].'-'.$fechaasignacionE[1].'-'.$fechaasignacionE[0].''

    $usuario_vendedor = $row2['asignadoa'];
    $_SESSION['vendedor'] = $row2['asignadoa'];
    $asignacion_vendedor = $row2['id'];

  $i2++; 

  }

# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

  $result_ecrm_comentarios_v1 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_vendedor' AND id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,1");
  $i_result_ecrm_comentarios_v1 = 0;
  
  while ($row_result_ecrm_comentarios_v1 = mysql_fetch_array($result_ecrm_comentarios_v1)) {
  
    if ($i_result_ecrm_comentarios_v1 > 0) {
    }

    # Explotar la fecha proxima llamada
    $fechaproximaE = explode("-", $row_result_ecrm_comentarios_v1['fechaproxima']);
?>
<div class="btn-group btn-group-xs">
  <button type="button" class="btn btn-default" style="cursor:help;">
    <acronym title="Fecha de Asignación">
      <span class="glyphicon glyphicon-calendar"></span>
      <?= ''.$fechaasignacionE[2].'-'.$fechaasignacionE[1].'-'.$fechaasignacionE[0].'' ?>
    </acronym>
  </button>
  <button type="button" class="btn btn-default" style="cursor:help;">
    <acronym title="Próxima llamada">
      <span class="glyphicon glyphicon-earphone"></span>
      <?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?>
    </acronym>
  </button>
  <?php
    if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'Caliente') {
      $CRM_estadodeventa = 'danger';
    }
    else if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'tibio') {
      $CRM_estadodeventa = 'warning';
    }
    else if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'frio') {
      $CRM_estadodeventa = 'info';
    }
    else if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'Facturado' OR $row_result_ecrm_comentarios_v1['estadodeventa'] == 'facturado') {
      $CRM_estadodeventa = 'success';
    }
    else if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'Pendiente') {
      $CRM_estadodeventa = 'default';
    }
    else  {
      $CRM_estadodeventa = 'default';
    }
  ?>
  <button type="button" class="btn btn-default btn btn-<?= $CRM_estadodeventa ?>">
    <span style="text-transform:capitalize;"><?= $row_result_ecrm_comentarios_v1['estadodeventa'] ?></span>
  </button>
</div>



<?php
  
  $_SESSION['estadodeventa'] = $row_result_ecrm_comentarios_v1['estadodeventa'];

  if ($row_result_ecrm_comentarios_v1['fechaproxima'] == '' OR $row_result_ecrm_comentarios_v1['fechaproxima'] == '0000-00-00') {
    
    $style = "width:300px;height:10px;";
  
  }
  
  else {
    
    $style = "width:400px;height:200px;overflow-y:scroll;overflow-x:hidden;";

  }

  $i_result_ecrm_comentarios_v1++; 

  }

/*PRUEBA EXTRA*/

?>

<!-- -->

<div style="<?= $style ?>">
  <?php include('m.panel.administrador.td5_1.php') ?>
</div>


<!-- -->