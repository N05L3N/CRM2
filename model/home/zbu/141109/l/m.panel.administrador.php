<tr>
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active" colspan="4">

<div class="row">
  <div class="col-md-2">
    <a href="panel.php?dataview=grid">
        <button type="submit" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-th"></span> Vista Detallada
        </button>
      </a>
  </div>
  <div class="col-md-2">
        <a href="panel.php?dataview=list">
          <button type="submit" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-th-list"></span> Vista Compacta
          </button>
        </a>
  </div>
  <div class="col-md-8"></div>
</div>

  </th>
<?php
}
else {

  include('model/m.menu-superior-vendedor.php');
?>

  <th class="active">
    <ul>
      <li><a href="">Hoy » <button type="button" class="btn btn-success btn-xs"><?= $numero_asignacionesHoy ?></button></a></li>
      <li><a href="">Asignaciones » <button type="button" class="btn btn-primary btn-xs"><?= $numero_asignacionesTotal ?></button></a></li>
      <li><a href="">Atrasados » <button type="button" class="btn btn-danger btn-xs"> <?= $numero_pendientes?></button></a></li>
    </ul>
  </th>
  <th colspan="2"></th>


<?php
}
?>  
</tr>







<tr>
  <!--<th class="active">No:</th>-->
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active">Información General</th>
  <th class="active" width="20%">Datos del Cliente</th>
  <th class="active" width="20%">Vendedor</th>
  <th class="active">Estado de la Venta</th>
<?php
}
else {
?>
  <th class="active">Información General</th>
  <th class="active" width="20%">Datos del Cliente</th>
  <th class="active">Estado de la Venta</th>
<?php
}
?>  
  
</tr>
<!-- Primera Columna -->
<?php
  # mysql_query ("SET NAMES 'utf8'");

  $per_page = 20;



$buscador = $_SESSION['buscador'];

  if ($buscador != '') {
      $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR formulario LIKE '%$buscador%' OR id LIKE '%$buscador%' ORDER BY fecha desc, id desc limit $start,$per_page");
      # echo 'TEST1';
  }

  else {



  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor == '') {
          $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
        # echo 'TEST2';
          
      }
      else {
          $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");
          mysql_query ("SET NAMES 'utf8'");
        # echo 'TEST3';

          
      }
  }



  else {
      if ($filtrarporvendedor == '') {
        $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,500");   
        # echo 'TEST4';
      }
      else {
       $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,500");   
       # echo 'TEST5';
      }
  }


  } # Buscador
  
  # SELECT * FROM contacto WHERE fecha <= '2014-03-20' AND fecha >= '2014-03-26' ORDER BY fecha desc, id desc
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    
    if ($i > 0) {

    }



?>
<tr>
  <!--
  <td style="background-color:#ffffff;">
    <?php # include('model/m.panel.administrador.td1.php');?>
  </td>
  -->
  <td style="background-color:#ffffff;" width="300">
    <div id="<?= $row['id'] ?>"></div>
    <?php  include('model/m.panel.administrador.td2.php');?>
  </td>
  <td style="background-color:#ffffff;">
    <?php  include('model/m.panel.administrador.td3.php');?>
  </td>
  
<?php  

if ($filtrarporvendedor == '') {
?>
<td style="background-color:#ffffff;">
<?php

  include('model/m.panel.administrador.td4.php');
  include('model/m.panel.administrador.td6.php');
?>
</td>
<?php
}
else {
  
}
?>
  
  <td style="background-color:#ffffff;" width="300">
    <?php  include('model/m.panel.administrador.td5.php');?>

    <?php

  if ($_SESSION['estadodeventa'] == 'no') {
    $td_color = 'ffc7ce';
  }
   
   else if ($_SESSION['estadodeventa'] == 'si') {
    $td_color = 'c6efce';
  }

  else if ($_SESSION['estadodeventa'] == 'En proceso') {
    $td_color = 'ffeb9c';
  }

    if ($_SESSION['estadodeventa'] == '') {
    $td_color = 'ffffff';
  }

  else {

  }
?>


  <!--
  <div style="background-color:#<?= $td_color ?>;">
    Tiempo de Respuesta:
    <?php  include('model/m.panel.administrador.td7.php');?>
  </div>
-->

  </td>



  
</tr>
<?php
      
  }
  
  $i++;
  $cont++;
?>