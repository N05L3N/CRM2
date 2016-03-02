<?php
  if ($_SESSION['filter'] != '') {
?>
<tr>
  <td colspan="5">
    <div class="alert alert-warning" role="alert">
      <strong>Filtro activado</strong> Actualmente se encuentran filtrados los registros.</strong>
    </div>
  </td>
</tr>
<?php
  }

  else {

  }
?>


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
      <li><a href="diary?vendedor=<?= $filtrarporvendedor ?>">Hoy » <button type="button" class="btn btn-success btn-xs"><?= $numero_asignacionesHoy ?></button></a></li>
      <li><a href="#">Asignaciones » <button type="button" class="btn btn-primary btn-xs"><?= $numero_asignacionesTotal ?></button></a></li>
      <li><a href="late?vendedor=<?= $filtrarporvendedor ?>">Atrasados » <button type="button" class="btn btn-danger btn-xs"> <?= $numero_pendientes?></button></a></li>
    </ul>
  </th>
  <th colspan="2">
<!-- -->
<div class="row">
    <div class="col-xs-9">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
          
        <li class="active"><a href="#pr2" role="tab" data-toggle="tab">Agenda 2014</a></li>
                                    <li><a href="#pr3" role="tab" data-toggle="tab">Agenda 2015</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          
          
          <div class="tab-pane active" id="pr2">
<!-- -->
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Noviembre
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
<?php
  include('inc/calendar.11.php');
?>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Diciembre
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
<?php
  include('inc/calendar.12.php');
?>        
    </div>
  </div>
</div>
<!-- -->
          </div>
<div class="tab-pane" id="pr3">
  <!-- -->
<div class="panel-group" id="accordion15">
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseThree15">
          Enero
        </a>
      </h4>
    </div>
    <div id="collapseThree15" class="panel-collapse collapse">
<?php
  include('inc/calendar.01.php');
?>        
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseFour15">
          Febrero
        </a>
      </h4>
    </div>
    <div id="collapseFour15" class="panel-collapse collapse">
<?php
  include('inc/calendar.02.php');
?>        
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseFive15">
          Marzo
        </a>
      </h4>
    </div>
    <div id="collapseFive15" class="panel-collapse collapse">
<?php
  include('inc/calendar.03.php');
?>        
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseAbril15">
          Abril
        </a>
      </h4>
    </div>
    <div id="collapseAbril15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1504.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseMayo15">
          Mayo
        </a>
      </h4>
    </div>
    <div id="collapseMayo15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1505.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseJunio15">
          Junio
        </a>
      </h4>
    </div>
    <div id="collapseJunio15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1506.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseJulio15">
          Julio
        </a>
      </h4>
    </div>
    <div id="collapseJulio15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1507.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseAgosto15">
          Agosto
        </a>
      </h4>
    </div>
    <div id="collapseAgosto15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1508.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseSeptiembre15">
          Septiembre
        </a>
      </h4>
    </div>
    <div id="collapseSeptiembre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1509.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseOctubre15">
          Octubre
        </a>
      </h4>
    </div>
    <div id="collapseOctubre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1510.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseNoviembre15">
          Noviembre
        </a>
      </h4>
    </div>
    <div id="collapseNoviembre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1511.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseDiciembre15">
          Diciembre
        </a>
      </h4>
    </div>
    <div id="collapseDiciembre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1512.php');
?>        
    </div>
  </div>



</div>
<!-- -->
</div>

      </div>    
    </div>
  </div>   
<!-- -->
  </th>


<?php
}
?>  
</tr>







<tr>
  <!--<th class="active">No:</th>-->
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active">Información General <small><?= $_SESSION['filter'] ?></small></th>
  <th class="active" width="20%">Comentarios</th>
  <th class="active" width="20%">Vendedor</th>
  <th class="active">Estado de la Venta</th>

<?php
  if ($_SESSION['filter'] == 'sinasignacion') {
?>
  <th class="active"></th>
<?php
}
else {
  
}
?>


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

if ($_SESSION["usuario"] == 'amariscal') {
  $per_page = 5;
}
else {
 $per_page = 20; 
}
  



$buscador = $_SESSION['buscador'];

  if ($buscador != '') {
      $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR formulario LIKE '%$buscador%' OR id LIKE '%$buscador%' ORDER BY fecha desc, id desc limit $start,$per_page");
      # echo 'TEST1';
  }

  else {



  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor == '') {

           # Con filto Superior
          if ($_SESSION['filter'] == 'sinasignacion') {

            $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND asignadoa = '' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
            
          }

          else if ($_SESSION['filter'] == 'conasignacion') {

$result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND asignadoa LIKE '%ventas%' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
            
          }

          else if ($_SESSION['filter'] == 'eliminados') {

            $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND asignadoa = 'trash' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
            
          }

          else {
            # Default
            $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND asignadoa != 'trash' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
            # echo 'TEST2';  
          }


          
          
      }
      else {
          $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");
          mysql_query ("SET NAMES 'utf8'");
        # echo 'TEST3';

          
      }
  }



  else {
      if ($filtrarporvendedor == '') {
        $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");   
        # echo 'TEST4';
      }
      else {
       $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");   
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

<?php
    
    if ($_SESSION['filter'] == 'sinasignacion') {

?>
  <td style="background-color:#ffffff;">
    <?php include('m.panel.administrador-eliminar.php') ?>
  </td>
<?php
} 

else {

}
?>


  
</tr>
<?php
      
  }
  
  $i++;
  $cont++;
?>