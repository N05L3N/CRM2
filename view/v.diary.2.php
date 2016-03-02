<?php

# Incluir Filtro por fecha

$id_view = $_SESSION["id_view"];
$tipo = $_SESSION["tipo"];


if ($_POST['filtro1_2'] == '') {

  $classActive1 = 'active';
  $classActive2 = 'Noactive';

}

else {

  $classActive1 = 'Noactive';
  $classActive2 = 'active';

}


if ($id_view == 'diary' OR $id_view == 'late') {

}

else {

?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="width:75%; margin:auto;">
  <li class="<?= $classActive1 ?>">
    <a href="#home" role="tab" data-toggle="tab">
      Fecha de Contacto <?= ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].''; ?>
    </a>
  </li>
  <li class="<?= $classActive2 ?>">
    <a href="#filtros" role="tab" data-toggle="tab">
      Filtros
    </a>
  </li>

<?php

  if($tipo == 'administrador' || $tipo == 'programador') {

?>

  <li>
    <a href="#profile" role="tab" data-toggle="tab">
      Vendedor
    </a>
  </li>

<?php
  
  }
  
  else {

  }

?>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="width:75%; margin:auto;">
  <div class="tab-pane <?= $classActive1 ?>" id="home">
    <?php include('modules/m.filtro.fecha.php'); ?>
    </div>
  <div class="tab-pane" id="profile">
    <?php include('modules/m.filtro.vendedor.php'); ?>
  </div>
    <div class="tab-pane <?= $classActive2 ?>" id="filtros">
      <?php include('modules/m.filtro.individual.php'); ?>
    </div>
</div>
<?php
}
?>


<div class="table-responsive">
<br>
  <table class="table table-bordered table-striped" style="width:75%; margin:auto;">
    <caption style="background-color:White;">
       <h4>Asignaciones de <?= $_SESSION["h4"] ?></h4>
    </caption>
<?php
  # TR
  include('view/v.asignaciones-01.php');
  
  $c = $mysql->query($select);
  
  while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

    if ($rows['id_seguimiento'] =='') {
      # TD
      include('view/v.asignaciones-02.php');    
    }
    else {

      $rowsid_seguimiento = $rows['id_seguimiento'];
      $result = mysql_query("SELECT * FROM contacto WHERE id = '$rowsid_seguimiento' ORDER BY id desc");
      # mysql_query ("SET NAMES 'utf8'");

      $i = 0;

        while ($row = mysql_fetch_array($result)) {
            if ($i > 0) {
            }
            
            $rows['id'] = $row['id'];
        $rows['apellidos'] = $row['apellidos'];
        $rows['email'] = $row['email'];
        # $rows['email'] = $rows['estadodeventa'].'/'.$row['asignadoa'].'';
        $rows['telefono'] = $row['telefono'];
        $rows['nombre_recomendador'] = $row['nombre_recomendador'];
        $rows['pais'] = $row['pais'];
        $rows['estado'] = $row['estado'];
        $rows['ciudad'] = $row['ciudad'];
        $rows['equipodeinteres'] = $row['equipodeinteres'];
        $rows['formulario'] = $row['formulario'];
        $rows['fecha'] = $row['fecha'];
        $rows['comentarios'] = $row['comentarios'];

        if ($row['asignadoa'] == 'trash') {
            # include('view/v.asignaciones-02.php');

          }
          else {
            include('view/v.asignaciones-02.php');
          }

      }

        $i++;
      
    }

  

  }

?>
  </tbody>
<table>
</div>

<center>
<div style="margin:auto;">
  <ul class="pagination pagination-sm">

<?php   
  /*
  if(($ini - 1) == 0) {
    echo "<li><a href='#'>&laquo;</a></li>";
  }
  
  else {
    echo "<li><a href='$url?pos=".($ini-1)."'><b>&laquo;</b></a></li>";
  }
  */

  for($k=1; $k <= $total; $k++) {
    if($ini == $k) {
?>
    <li class="active"><a href='#'><b><?= $k ?></b></a></li>
<?php 
    }
    
    else {
?>      
    <li><a href='<?= $url ?>?pos=<?= $k ?>'><?= $k ?></a></li>
<?php
    }
  }
  /*
  if($ini == $total) {
  */
?>
    <!-- <li><a href='#'>&raquo;</a></li> -->
<?php
/*
  }
  
  else {    
    echo "<li><a href='$url?pos=".($ini+1)."'><b>&raquo;</b></a></li>";
  }
*/
?>
  </ul>
</div>
<center>