<?php
$buscador = $_SESSION['buscador'];

# Todas las asignaciones
$per_page = $_SESSION['numero_asignacionesTotal'];
# $per_page = '100';

  if ($buscador != '') {
      $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
  }

  else {

    if ($fecha_inicio_filtro == '--') {
      # $result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");
      $result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");
      /*
      */
      mysql_query ("SET NAMES 'utf8'");
    }

    else {
      $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND asignadoa = '$usuario' ORDER BY fechaasignacion desc, id desc limit $start,500");
      # SELECT * FROM contacto WHERE fecha <= '2014-03-20' AND fecha >= '2014-03-26' ORDER BY fecha desc, id desc
    }

  } // Termina IF del Buscador
?>