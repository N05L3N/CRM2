  <tr>
      <th class="active" align="center" width="10" style="background-color:white;"></th>
      <th class="active" width="200" style="background-color:white;">Información general</th>
      <th class="active" width="200" style="background-color:white;">Datos cliente</th>
      <th class="active" style="background-color:white;"></th>
  </tr>

<!-- Primera Columna -->
<?php
  $usuario = $_SESSION["usuario"];
  $dte = date(ymd);
  $dia = date(d);
  $mes = date(m);
  $ano = date(Y);
  $fecha_actual = ''.$ano.'-'.$mes.'-'.$dia.'';
  # Pruebas
  /*
  $fecha_actual = '2014-07-17';
    echo '<pre>SELECT * FROM ecrm_comentarios_v WHERE usuario = '.$usuario.' AND fechaproxima = '.$fecha_actual.' AND horaasignacion != \'ok\' ORDER BY id_comentarios_v desc limit $start,$per_page</pre>';
  */
   

  #$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_actual' AND horaasignacion != 'ok' ORDER BY id_comentarios_v desc limit $start,$per_page");
  
   $result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND estadodeventa = 'facturado' AND horaasignacion != 'ok' ORDER BY id_comentarios_v desc limit $start,$per_page");


    
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
?>
    <td style="background-color:white;">
        <?php include('model/m.panel.diary.td1.php');?>
    </td>
    <td style="background-color:#ffffff;" width="250">
        <?php include('model/m.panel.diary.td2.php');?>
    </td>
    <td style="background-color:#ffffff;">
        <?php include('model/m.panel.diary.td3.php');?>
    </td>
    <td style="background-color:#ffffff;">
        <?php include('model/m.panel.diary.td4.php');?>
    </td>

</tr>
<?php
  $i++;
  }

  }

$i1++; 
      }
?>
