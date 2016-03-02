<?php

include('inc/menu-superior.php');

$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';

# $dbh
# $dbu
# $dbp

# PAGINATION
const HOST = 'localhost';
const USER = 'jcnoble';
const PASSWD = '4tp2009jk';
const DB = 'jcnoble';
const TABLE = 'contacto';

/* variables */
$order="id ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 50;
$init = ($ini-1) * $limit_end;

# / PAGINATION



$buscador = $_SESSION['buscador'];

  if ($_SESSION['tipo'] == 'administrador') {
    if ($buscador != '') {
      # $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') ";
      $select = "SELECT *FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%')  ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

  }

  else {

  if ($fecha_inicio_filtro == '--') {

      # DEFAULT
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado'";
      $select = "SELECT *FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

    else {      

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro'";
      $select = "SELECT *FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

  } // Termina IF del Buscador
  }
  else {


  if ($buscador != '') {
      # $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') AND asignadoa = '$usuario'";
      $select = "SELECT *FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') AND asignadoa = '$usuario' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

  }

  else {

  if ($fecha_inicio_filtro == '--') {

      # DEFAULT
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado'";
      $select = "SELECT *FROM ".TABLE." WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

    else {      

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro'";
      $select = "SELECT *FROM ".TABLE." WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

  } // Termina IF del Buscador
}

# PAGINATION >

$mysql = new mysqli(HOST, USER, PASSWD, DB);

$num = $mysql->query($count);
$x = $num->fetch_array();

$total = ceil($x[0]/$limit_end);

# PAGINATION <

?>