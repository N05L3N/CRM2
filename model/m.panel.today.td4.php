<?php

# Informacion de la tabla Asignaciones

#$busca = $row['id'];
$busca = $row2['id'];
#echo '('.$busca.')';
#echo $row['id'];

#$result2 = mysql_query("SELECT * FROM eqasignacion WHERE id = '$busca' ORDER BY id desc limit 0,1");
$result2 = mysql_query("SELECT * FROM contacto WHERE id = '$busca' ORDER BY id desc limit 0,1");
  $i2 = 0;
    while ($row2 = mysql_fetch_array($result2))
      {
        if ($i2 > 0)
          { }

            $fechaasignacionE = explode("-", $row2['fechaasignacion']);
            ?>
            <b>Fecha asignacion: </b><?= ''.$fechaasignacionE[2].'-'.$fechaasignacionE[1].'-'.$fechaasignacionE[0].'' ?><br />
            <?php
            #echo '<b>Hora asignacion: </b>'.$row2['horaasignacion'].'<br />';
            $i2++; 
      }

# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

  $result_ecrm_comentarios_v1 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND id_seguimiento = '$idedit2' ORDER BY id_comentarios_v desc limit 0,1");
  $i_result_ecrm_comentarios_v1 = 0;
    while ($row_result_ecrm_comentarios_v1 = mysql_fetch_array($result_ecrm_comentarios_v1))
      {
        if ($i_result_ecrm_comentarios_v1 > 0)
          { }
            $row_result_ecrm_comentarios_v1E = explode("-", $row_result_ecrm_comentarios_v1['fechaproxima']);
        ?>
            <b>Próxima llamada: </b><?= ''.$row_result_ecrm_comentarios_v1E[2].'-'.$row_result_ecrm_comentarios_v1E[1].'-'.$row_result_ecrm_comentarios_v1E[0].'' ?><br />
        <?php
            echo '<b>Estado de la venta: </b>'.$row_result_ecrm_comentarios_v1['estadodeventa'].'<br />';

            if ($row_result_ecrm_comentarios_v1['fechaproxima'] == '' OR $row_result_ecrm_comentarios_v1['fechaproxima'] == '0000-00-00') {
                          $style = "width:500px;height:10px;";
                    }
                    else {
                        $style = "width:500px;height:200px;overflow-y:scroll;overflow-x:hidden;";
                      }
            
            $i_result_ecrm_comentarios_v1++; 
      }      
/*PRUEBA EXTRA*/
?>

<div style="<?= $style ?>">
<table class="table table-condensed">
  <caption>
    <b>Comentarios:</b><br />
  </caption>
<?php
$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND id_seguimiento = '$idedit2' ORDER BY id_comentarios_v desc limit 0,100");
mysql_query ("SET NAMES 'utf8'");
  $i3 = 0;
    while ($row3 = mysql_fetch_array($result3))
      {
        if ($i3 > 0)
          { }

            $fecharespuestaE = explode("-", $row3['fecharespuesta']);
            ?>
            <tr>
              <td colspan="2"><?= $row3['comentariovendedor'] ?></td>
              <td><?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?></td>
              <td><?= $row3['horarespuesta'] ?></td>
            </tr>
            <?php
              $i3++; 
      }
echo '</table>';
/*PRUEBA EXTRA*/
?>
