<?php
if ($_SESSION["tipo"] == 'administrador') {
   $usuario = $_SESSION["admincomovendedor"];
  # echo '<div style="width:1px; height:1px; background-color:green;"></div>';

}
else {
  $usuario = $_SESSION["usuario"];
}
  
  $dte = date(ymd);
  $dia = date(d);
  $mes = date(m);
  $ano = date(Y);

  $hora = date(h);
  $hora24 = date(G);


  if ($hora24 == 0 OR $hora24 == 1 OR $hora24 == 2 OR $hora24 == 3 ) {
    $dia = $dia-1;
  }

  else {
   
  }


  $minuto = date(m);

  $fecha_actual = ''.$ano.'-'.$mes.'-'.$dia.'';

  $query = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_actual' AND horaasignacion != 'ok' ORDER BY fechaproxima desc limit 1 ";
?>

  <tr>
      <th class="active" align="center" width="10" style="background-color:white;"></th>
      <th class="active" width="200" style="background-color:white;"><acronym title="<?= $fecha_actual ?>">Información general</acronym></th>
      <th class="active" width="200" style="background-color:white;"><acronym title="<?= $query ?>">Comentario</acronym></th>
      <th class="active" style="background-color:white;">
          <!-- Fecha del Sistema: <?= $fecha_actual ?> Hora del Sistema: <?= ''.$hora.':'.$hora.' ('.$hora24.')' ?>-->
      </th>
  </tr>

<!-- Primera Columna -->
<?php
  # Pruebas
  /*
  $fecha_actual = '2014-07-17';
    echo '<pre>SELECT * FROM ecrm_comentarios_v WHERE usuario = '.$usuario.' AND fechaproxima = '.$fecha_actual.' AND horaasignacion != \'ok\' ORDER BY id_comentarios_v desc limit $start,$per_page</pre>';
  */
   

  #$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_actual' AND horaasignacion != 'ok' ORDER BY id_comentarios_v desc limit $start,$per_page");
    $query = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_actual' AND horaasignacion != 'ok' ORDER BY id_comentarios_v desc limit 100";
    # $query = "SELECT * FROM ecrm_comentarios_v WHERE usuario = 'auxdiseno' AND fechaproxima = '2014-11-28' AND horaasignacion != 'ok' ORDER BY fechaproxima desc limit 1";
   $result = mysql_query("$query");
   # GROUP BY id_seguimiento para quitar duplicados


    
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
?>

<!--
<tr>
  <td colspan="4">
    <small style="color:#eee; font-size:2px;">
      <?= $query ?>
    </small>
    </td>
</tr>
-->


<?php

  if ($row2['asignadoa'] == 'trash') {

  }
else {

?>

<tr>
    <td style="background-color:#ffffff;" width="5%">
        <?php include('model/m.panel.diary.td1.php');?>
    </td>
    <td style="background-color:#ffffff;" width="20%">
        <?php include('model/m.panel.diary.td2.php');?>
    </td>
    <td style="background-color:#ffffff;" width="50%">
        <?php include('model/m.panel.diary.td3.php');?>
    </td>
    <td style="background-color:#ffffff;" width="25%">
        <?php include('model/m.panel.diary.td5.php');?>
    </td>
</tr>
<?php

}

?>




<?php
  $i++;
  } # Segundo Select



  }

$i1++; 
      }
?>
