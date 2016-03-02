<?php
session_start();
$idedit = $_SESSION["idedit"];
$id_view = $_SESSION["id_view"];

#controllers
# Configuración de base de datos para la paginación
  include('controller/databases.php');

$per_page = 30;

if($_GET) {
  $page=$_GET['page'];
}

//get table contents
$start = ($page-1)*$per_page;
?>

<?php
  if($_SESSION["llave"] == 'administrador' || $_SESSION["llave"] == 'programador'){
?>

<?php
  }

  else if ($_SESSION["llave"] == 'vendedor'){
    $usuario = $_SESSION["usuario"];
?>

<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>¡Atención!</strong> Tienes llamadas programadas para el día de hoy. | <a href="diary.php">Ver pendientes del día.</a>
</div>

<?php
  }

  else {}

?>










<div class="table-responsive">
  <br>
  <table class="table table-bordered">
<?php
  
  $usuario = $_SESSION["usuario"];

  if($_SESSION["llave"] == 'administrador' || $_SESSION["llave"] == 'programador'){
    include('model/m.panel.administrador.php');
  }

  else if ($_SESSION["llave"] == 'vendedor'){
    if($id_view == 'diary'){
      include('model/m.panel.diary.php');
    }
    else {
      include('model/m.panel.vendedor.php');
    }

  }

  else {}

?>
</table>
</div>