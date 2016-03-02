<?php
if ($_SESSION["tipo"] == 'administrador') {
   $usuario = $_SESSION["admincomovendedor"];
}
else {
  $usuario = $_SESSION["usuario"];
}
  ?>
  <tr>
      <th class="active" align="center" width="10" style="background-color:white;"></th>
      <th class="active" width="200" style="background-color:white;">Información general</th>
      <th class="active" width="200" style="background-color:white;">Comentario</th>      
      <th class="active" style="background-color:white;"></th>
  </tr>

<!-- Primera Columna -->
<?php

$getGrid = htmlspecialchars($_GET["grid"]);

  
  $dte = date(ymd);
  $dia = date(d);
  $mes = date(m);
  $ano = date(Y);
  $fecha_actual = ''.$ano.''.$mes.''.$dia.'';
  $result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima < '$fecha_actual' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND fechaasignacion >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY id_comentarios_v desc limit $start,$per_page");

  
    
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



if ($_GET["grid"] == 'compact') {
echo '('.$_GET["grid"].')';




?>

<tr>
    <td style="background-color:white;">
    <?php 
      $id = $row2['id']; 
    ?>
    <a href="cliente.php?id=<?= $id ?>">
    <button class="btn btn-primary btn-xs">
    Actualizar
    </button>
    </a>
    </td>
    <td style="background-color:#ffffff;" width="250">
        <?= $row2['comentarios'] ?>
    </td>
    <td style="background-color:#ffffff;">
        <b>Población:</b><?= ''.$row2['pais'].'<br />'.$row2['estado'].'<br />'.$row2['ciudad'].''; ?>
    </td>
    <td style="background-color:#ffffff;">
        <?php include('model/m.panel.late.td4-compact.php');?>
    </td>
</tr>

<?php
  
}

else {

?>

<tr>
    <td style="background-color:#ffffff;" width="5%">
        <?php include('model/m.panel.late.td1.php');?>
    </td>
    <td style="background-color:#ffffff;" width="20%">
        <?php include('model/m.panel.late.td2.php');?>
    </td>
    <td style="background-color:#ffffff;" width="50%">
        <?php include('model/m.panel.late.td3.php');?>
    </td>
    <td style="background-color:#ffffff;" width="25%">
        <?php include('model/m.panel.late.td5.php');?>
    </td>
</tr>
<?php

} # Compact IF



  $i++;
  }

  }

$i1++; 
      }
?>
