<?php
$busca = $row['id'];
#echo $row['id'];

#$result2 = mysql_query("SELECT * FROM eqasignacion WHERE asignacion = '$busca' ORDER BY id desc limit 0,1");
$result2 = mysql_query("SELECT * FROM contacto WHERE id = '$busca' ORDER BY id desc limit 0,1");
  $i2 = 0;
    while ($row2 = mysql_fetch_array($result2))
      {
        if ($i2 > 0)
          { }
        $_SESSION['datetime10'] = $row2['fechaasignacion'];
        # echo '('.$_SESSION['datetime10'].')';
            
            $usuario_vendedor = $row2['asignadoa'];
            $_SESSION['vendedor'] = $row2['asignadoa'];
            $asignacion_vendedor = $row2['id'];

            $i2++; 
      }

# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

  $result_ecrm_comentarios_v1 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_vendedor' AND id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,1");
  $i_result_ecrm_comentarios_v1 = 0;
    while ($row_result_ecrm_comentarios_v1 = mysql_fetch_array($result_ecrm_comentarios_v1))
      {
        if ($i_result_ecrm_comentarios_v1 > 0)
          { }
            
            if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'frio') {
              ?>
              <span class="label label-info"><?= $row_result_ecrm_comentarios_v1['estadodeventa'] ?></span>
              <?php
            }

            else if ($row_result_ecrm_comentarios_v1['estadodeventa'] == 'descartado') {
             ?>
              <span class="label label-warning"><?= $row_result_ecrm_comentarios_v1['estadodeventa'] ?></span>
              <?php 
            }

            else {
              ?>
              <span class="label label-default"><?= $row_result_ecrm_comentarios_v1['estadodeventa'] ?></span>
              <?php 
            }



            $_SESSION['estadodeventa'] = $row_result_ecrm_comentarios_v1['estadodeventa'];

            if ($row_result_ecrm_comentarios_v1['fechaproxima'] == '' OR $row_result_ecrm_comentarios_v1['fechaproxima'] == '0000-00-00') {
                          $style = "width:300px;height:10px;";
                    }
                    else {
                        #$style = "width:500px;height:200px;overflow-y:scroll;overflow-x:hidden;";
                          $style = "width:300px;height:100px;overflow-y:scroll;overflow-x:hidden;";
                      }

            $i_result_ecrm_comentarios_v1++; 
      }      
/*PRUEBA EXTRA*/

?>
<!-- -->



<!-- -->