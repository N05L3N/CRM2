  <tr>
    <th style="background:url(2-img/excel/header.jpg);" width="100" colspan="2">AdmNo.</th>
    <th style="background:url(2-img/excel/header.jpg);" width="400"><?php ?>Datos del cliente</th>
    <th style="background:url(2-img/excel/header.jpg);" width="400">Asignación desde:</th>
  </tr>
<?php

  $usuario = $_SESSION["usuario"];
  $result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2014-03-08' ORDER BY id_comentarios_v desc limit $start,$per_page");
    
  $i = 0;
  /**/
  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}            
  
    $idedit2 = $row['id_seguimiento'];
  {
    
    $result2 = mysql_query("SELECT * FROM contacto WHERE id = '$idedit2' ORDER BY id desc limit 0,1");
      $i2 = 0;
                while ($row2 = mysql_fetch_array($result2)) {
                    if ($i2 > 0) { }
$cont = $i2;
$cont++;


echo '<tr>';

/* Asignaciones */
if ($row2['id'] == $idedit)
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
    <td><input type="hidden" name="idedit" value="'.$row2['id'].'" onmouseout ="document.thisform.submit()"></td>
    <td></td>
    <td>';

echo '<input type="submit" value="#'.$row2['id'].'" class="boton" style="cursor:pointer;" tabindex="17">';
    ?>


<?php
if ($row2['id'] == $idedit)
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
        <iframe src="seguimientos.actualizar-venta.php" width="100%;" height="250" frameborder="1" scrolling="no"></iframe>
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




echo '<td style="background-color:#ffffff;" width="250">';

echo '
<b>Nombre:</b> '.$row2['nombre'].'
<br />
<b>E-mail:</b><acronym title="'.$row2['email'].'">'.$row2['email'].'</acronym>
<br />
<b>Telefono:</b>('.$row2['lada'].')'.$row2['telefono'].'
<br />
<b>Pais:</b> '.$row2['pais'].'
<br />
<b>Fecha:</b> '.$row2['fecha'].'
<br />

<b>Comentario:</b> '.$row2['comentarios'].'
</td>';






echo '<td style="background-color:#ffffff;">';


# Informacion de la tabla Asignaciones

$busca = $row['id'];
#echo $row['id'];

$result2 = mysql_query("SELECT * FROM eqasignacion WHERE id = '$busca' ORDER BY id desc limit 0,1");
  $i2 = 0;
    while ($row2 = mysql_fetch_array($result2))
      {
        if ($i2 > 0)
          { }
            echo '<b>Fecha asignacion: </b><acronym title="'.$row2['usuario'].'">'.$row2['fechaasignacion'].'</acronym><br />';
            echo '<b>Hora asignacion: </b>'.$row2['horaasignacion'].'<br />';
            $i2++; 
      }

# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

  $result_ecrm_comentarios_v1 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND id_seguimiento = '$idedit2' ORDER BY id_comentarios_v desc limit 0,1");
  $i_result_ecrm_comentarios_v1 = 0;
    while ($row_result_ecrm_comentarios_v1 = mysql_fetch_array($result_ecrm_comentarios_v1))
      {
        if ($i_result_ecrm_comentarios_v1 > 0)
          { }
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
$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND id_seguimiento = '$idedit2' ORDER BY id_comentarios_v desc limit 0,100");
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