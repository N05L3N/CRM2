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
?>          

<?php $fechaasignacionE = explode("-", $row2['fechaasignacion']); ?>
            <b>Fecha asignacion: </b><?= ''.$fechaasignacionE[2].'-'.$fechaasignacionE[1].'-'.$fechaasignacionE[0].'' ?>

      
            

            <br />


            <hr>
<?php
            
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
            echo '<b>Próxima llamada: </b>'.$row_result_ecrm_comentarios_v1['fechaproxima'].'<br />';
            echo '<b>Estado de la venta: </b>'.$row_result_ecrm_comentarios_v1['estadodeventa'].'<br />';

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
<div style="<?= $style ?>">
<table class="table table-condensed">
  <caption>
    <b><a href="cliente.php?id=<?= $busca ?>&vendedor=<?= $_SESSION['vendedor'] ?>">Comentarios:</a></b><br />
  </caption>
<?php
$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_vendedor' AND id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,100");
mysql_query ("SET NAMES 'utf8'");
  $i3 = 0;
    while ($row3 = mysql_fetch_array($result3))
      {
        if ($i3 > 0)
          { }
            
            echo '<tr>';
            echo '<td colspan="2">'.$row3['comentariovendedor'].'</td>';
            
            echo '<td>'.$row3['fecharespuesta'].'</td>';

            echo '<td>'.$row3['horarespuesta'].'</td>';
            echo '</tr>';
            #$datetime20 = $row3['fecharespuesta'];
            $_SESSION['datetime20'] = $row3['fecharespuesta'];
              $i3++; 
      }
echo '</table>';
$usuario_vendedor = '';
$asignacion_vendedor = '';
?>
</div>


<!-- -->