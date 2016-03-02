  <tr>
    <th width="100" colspan="2">No.</th>
    <th width="400">Datos del cliente</th>
    <th width="400">Datos de la Recomendación:</th>
    <th width="400">Datos del Seguimiento:</th>
  </tr>
<?php

  $usuario = $_SESSION["usuario"];
  $result = mysql_query("SELECT * FROM formrecomiendaygana WHERE asignadoa = '$usuario' ORDER BY idformrecomiendaygana desc limit $start,$per_page");
    
  $i = 0;
  /**/
  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}            
  
    $idedit2 = $row['idformrecomiendaygana'];
  {
    
    $result2 = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana = '$idedit2' ORDER BY idformrecomiendaygana desc limit 0,1");
      $i2 = 0;
                while ($row2 = mysql_fetch_array($result2)) {
                    if ($i2 > 0) { }
$cont = $i2;
$cont++;


echo '<tr>';

/* Asignaciones */
if ($row2['idformrecomiendaygana'] == $idedit)
  { 
    echo '<td style="text-align:center; background-color:#94df7d;"><acronym title="1"></acronym></td>';
  }
  else {
    echo '<td style="text-align:center; background-color:#e4ecf7;"><acronym title="2"></acronym></td>';
  }
echo '
<td style="background-color:#ffffff;">
<form action="model/mc.asignacion.php" method="post">    
<table cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td><input type="hidden" name="idedit" value="'.$row2['idformrecomiendaygana'].'" onmouseout ="document.thisform.submit()"></td>
    <td></td>
    <td>';

echo '<input type="submit" value="#'.$row2['idformrecomiendaygana'].'" class="boton" style="cursor:pointer;" tabindex="17">';
    ?>


<?php
if ($row2['idformrecomiendaygana'] == $idedit)
  { 
?>

<br />
<!-- Button trigger modal -->
<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
  Seguimiento
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Seguimiento: #<?php echo $idedit;?></h4>
      </div>
      <div class="modal-body" style="background-color:White">
        <iframe src="seguimientos.actualizar-recomendacion.php" width="100%;" height="300" frameborder="no" scrolling="no"></iframe>
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






<?php
echo '  
      
    </td>
  </tr>
</table>
</form>
</td>
';
/* /Asignaciones */




echo '<td style="background-color:#ffffff;">';

echo '
<b>Nombre:</b> '.$row2['recomendado'].'
<br />
<b>E-mail:</b><acronym title="'.$row2['email'].'">'.$row2['email'].'</acronym>
<br />
<b>Telefono:</b>'.$row2['telefono'].'
<br />
<b>Número de cliente: </b>'.$row['numerodecliente'].'
<br />
<b>Producto de interes: </b>'.$row['productodeinteres'].'
<br />
<b>Población: </b>'.$row['poblacion'].'
</td>';






echo '<td style="background-color:#ffffff;">';


# Informacion de la tabla Asignaciones

$busca = $row['idformrecomiendaygana'];
#echo $row['id'];

$result2 = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana = '$busca' ORDER BY idformrecomiendaygana desc limit 0,1");
mysql_set_charset('utf8');
  $i2 = 0;
    while ($row2 = mysql_fetch_array($result2))
      {
        if ($i2 > 0)
          { }
            
            echo '<b>Recomendado por: </b>'.$row2['usuario'].'<br />';
            echo '<b>Comentario: </b>'.$row2['comentario'].'<br />';
            echo '<b>Fecha de captura: </b><acronym title="'.$row2['hora'].'">'.$row2['fecha'].'</acronym><br />';
            echo '<b>1er Comentario: </b>'.$row2['comentariovendedor'].'<br />';

            $fechaasignacion = $row2['fechaasignacion'];
            $i2++; 
      }

    echo '</td>';
    echo '<td style="background-color:#ffffff;">';

# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

  $result_ecrm_comentarios_v1 = mysql_query("SELECT * FROM ecrm_comentarios_vryg WHERE id_seguimiento = '$idedit2' ORDER BY id_comentarios_vryg desc limit 0,1");
  $i_result_ecrm_comentarios_v1 = 0;
    while ($row_result_ecrm_comentarios_v1 = mysql_fetch_array($result_ecrm_comentarios_v1))
      {
        if ($i_result_ecrm_comentarios_v1 > 0)
          { }
            echo '<b>Fecha de Asignación: </b>'.$fechaasignacion.'<br />';
            echo '<b>Próxima llamada: </b>'.$row_result_ecrm_comentarios_v1['fechaproxima'].'<br />';
            echo '<b>Estado de la venta: </b>'.$row_result_ecrm_comentarios_v1['estadodeventa'].'<br />';
            $i_result_ecrm_comentarios_v1++; 
      }      
/*PRUEBA EXTRA*/
?>

<div style="width:400px;height:100px;overflow:scroll;">
<table class="table table-condensed">
  <caption>
    <b>Comentarios:</b><br />
  </caption>
<?php
$result3 = mysql_query("SELECT * FROM ecrm_comentarios_vryg WHERE id_seguimiento = '$idedit2' ORDER BY id_comentarios_vryg desc limit 0,100");
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
              $i3++; 
      }
echo '</table>';
/*PRUEBA EXTRA*/

echo '</td>';


echo '</tr>';
                    $i++;
                }
#echo '</table>'; desde la mexic
  }
  

$i1++; 
      }
  /**/
?>