  <tr>
      <th class="active" align="center" width="10" style="background-color:white;"></th>
      <th class="active" width="200" style="background-color:white;">Información general</th>
      <th class="active" width="200" style="background-color:white;">Datos cliente <?= $buscador ?></th>
      <th class="active" style="background-color:white;"></th>
  </tr>

<!-- Primera Columna -->
<?php
  # mysql_query ("SET NAMES 'utf8'");
  # Comentar el SET NAMES Evita código de acentos


$buscador = $_SESSION['buscador'];

  if ($buscador != '') {
      $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' AND asignadoa = '$usuario' ORDER BY fecha desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
  }

  else {


    if ($fecha_inicio_filtro == '--') {
      $result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' ORDER BY fecha desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
    }

    else {
      $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND asignadoa = '$usuario' ORDER BY fecha desc, id desc limit $start,500");
      # SELECT * FROM contacto WHERE fecha <= '2014-03-20' AND fecha >= '2014-03-26' ORDER BY fecha desc, id desc
    }

  } // Termina IF del Buscador


  
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    
    if ($i > 0) {
    }





if ($row['id'] >= '2014-08-28') {
  











      echo "<tr>";
?>
    <td style="background-color:white;">
        <?php include('model/m.panel.vendedor.td1.php');?>
    </td>
    <td style="background-color:#ffffff;" width="250">
        <?php include('model/m.panel.vendedor.td2.php');?>
    </td>
    <td style="background-color:#ffffff;">
        <?php include('model/m.panel.vendedor.td3.php');?>
    </td>
<?php


# Cuarta Columna

echo '<td style="background-color:#ffffff;" width="250">';

# Informacion de la tabla Asignaciones

#COMETARIO
$busca = $row['id'];


#$result2 = mysql_query("SELECT * FROM eqasignacion WHERE asignacion = '$busca' ORDER BY id desc limit 0,1");
$result2 = mysql_query("SELECT * FROM contacto WHERE id = '$busca' ORDER BY id desc limit 0,1");
  $i2 = 0;
    while ($row2 = mysql_fetch_array($result2))
      {
        if ($i2 > 0)
          { }

          $fechaE = explode("-", $row2['fechaasignacion']);
          
?>
            <b>Fecha asignación: </b><?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?><br />
<?php          
            
            $usuario_vendedor = $row2['asignadoa'];
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

            $row_result_ecrm_comentarios_v1E = explode("-", $row_result_ecrm_comentarios_v1['fechaproxima']);
?>        
            <b>Próxima llamada: </b><?= ''.$row_result_ecrm_comentarios_v1E[2].'-'.$row_result_ecrm_comentarios_v1E[1].'-'.$row_result_ecrm_comentarios_v1E[0].'' ?><br />
            <b>Estado de la venta: </b><?= $row_result_ecrm_comentarios_v1['estadodeventa'] ?>
<?php
                    if ($row_result_ecrm_comentarios_v1['fechaproxima'] == '' OR $row_result_ecrm_comentarios_v1['fechaproxima'] == '0000-00-00') {
                          $style = "width:500px;height:10px;";
                    }
                    else {
                        $style = "width:500px;height:200px;overflow-y:scroll;overflow-x:hidden;";
                      }

            $i_result_ecrm_comentarios_v1++; 
      }      
#PRUEBA EXTRA



?>
<div style="<?= $style ?>">
<table class="table table-condensed">
  <caption>
    <b>Comentarios:</b><br />
  </caption>
<?php
$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario_vendedor' AND id_seguimiento = '$asignacion_vendedor' ORDER BY id_comentarios_v desc limit 0,100");
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

$usuario_vendedor = '';
$asignacion_vendedor = '';

echo '</td>';
# Fin de la cuarta Columna
/*COMENTARIO */
      
  }
  
  echo "</tr>";


} // Filtro limitador
else {
  
}


  $i++;
?>