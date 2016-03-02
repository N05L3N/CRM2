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

    
# SELECT PARA MOSTRAR ADVERTENCIA
  $usuario = $_SESSION["usuario"];
  $dte = date(ymdhis);  
  $dia = date(d);
  $mes = date(m);
  $ano = date(Y);
  $fecha_actual = ''.$ano.''.$mes.''.$dia.'';
  $select_fechaproxima = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_actual' ORDER BY id_comentarios_v desc limit $start,$per_page");
    
  $i = 0;
  
  while ($row_fechaproxima = mysql_fetch_array($select_fechaproxima)) {
    if ($i > 0) {}            
  
    $control_fechaproxima = 'si';

  }
  $i++;
?>




<?php
  # IF PARA MOSTRAR ADVERTENCIA
  if($control_fechaproxima == 'si') {
?>
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>¡Atención!</strong> Tienes llamadas programadas para el día de hoy. | <a href="diary.php">Ver pendientes del día.</a>
</div>
<?php
  }
  else {

  }
?>


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
    
    # Verificamos si el usuario es un vendedor
    # Posibles pantallas = 2
    # Agenda y RYG
    
    if($id_view == 'diary'){

      include('model/m.panel.diary.php');

    }

    else if ($id_view == 'ryg'){
      #include('model/m.panel.ryg.php');
    }

    else {

      include('model/m.panel.vendedor.php');

    }

  }



  else {}

?>
</table>
</div>