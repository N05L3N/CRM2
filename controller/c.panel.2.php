<?php

if (isset($_GET['pos'])) {
    $ini=$_GET['pos'];
  }
  else {
    $ini=1; 
  }

include('inc/menu-superior.php');

$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';

$filtrarporvendedor = ''.$_SESSION["filtrarporvendedor"].'';


if ($fecha_inicio_filtro != '--') {
  $whereFechaRango = "AND (fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro')";
}
else {
  $whereFechaRango = '';
}


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
#$order="fecha DESC, id DESC";
$order="id DESC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 30;
$init = ($ini-1) * $limit_end;

# / PAGINATION



$buscador = $_SESSION['buscador'];

  if ($_SESSION['tipo'] == 'administrador') {
    if ($buscador != '') {

      if ($filtrarporvendedor != '') {
        # <VENDEDOR>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') $where $whereFechaRango";
      $select = "SELECT * FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' OR formulario LIKE '%$buscador%') AND (fecha >= '2000-08-28' AND estadodeventa != 'descartado') $where $whereFechaRango ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
         # echo '<pre>' .$select. '</pre>';  
      # </VENDEDOR>
      }

      else {
      # <BUSCADOR>
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') ";
      $select = "SELECT * FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' OR formulario LIKE '%$buscador%') AND (fecha >= '2000-08-28' AND estadodeventa != 'descartado') ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # echo '<pre>' .$select. '</pre>';  
      # </BUSCADOR>
      }

      

  }

  else {

  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor != '') {
        # <SOLO POR VENDEDOR>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' $where";
      $select = "SELECT * FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </SOLO POR VENDEDOR>
      }
      else {
      # <DEFAULT>
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado'";
      $select = "SELECT * FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </DEFAULT>
      }

    }

    else {



      if ($filtrarporvendedor != '') {
        # <VENDEDOR Y FECHA>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' $where";
      $select = "SELECT *FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </VENDEDOR Y FECHA>
      }
      else {
      # <FECHA>
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro'";
      $select = "SELECT *FROM ".TABLE." WHERE fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </FECHA>
      }




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
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE usuario != 'perlA' AND asignadoa != 'trash' AND email != 'automail@portal-cosmos.com'";
      $select = "SELECT *FROM ".TABLE." WHERE usuario != 'perlA' AND asignadoa != 'trash' AND email != 'automail@portal-cosmos.com' ORDER BY $order";
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

$cjConexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("$dbn", $cjConexion);


$cjQuery_pais_a1 = "UPDATE jcnoble.contacto SET pais = replace(pais,'Ã¡', 'á') WHERE usuario = 'perl';";
$cjQuery_pais_e1 = "UPDATE jcnoble.contacto SET pais = replace(pais,'Ã©', 'é') WHERE usuario = 'perl';";
$cjQuery_pais_i1 = "UPDATE jcnoble.contacto SET pais = replace(pais,'Ã­', 'í') WHERE usuario = 'perl';";
$cjQuery_pais_o1 = "UPDATE jcnoble.contacto SET pais = replace(pais,'Ã³', 'ó') WHERE usuario = 'perl';";

$cjQuery_pais_a2 = "UPDATE jcnoble.contacto SET pais = replace(pais,'á', 'a') WHERE usuario = 'perl';";
$cjQuery_pais_e2 = "UPDATE jcnoble.contacto SET pais = replace(pais,'é', 'e') WHERE usuario = 'perl';";
$cjQuery_pais_i2 = "UPDATE jcnoble.contacto SET pais = replace(pais,'í', 'i') WHERE usuario = 'perl';";
$cjQuery_pais_o2 = "UPDATE jcnoble.contacto SET pais = replace(pais,'ó', 'o') WHERE usuario = 'perl';";

$cjQuery_comentarios_a1 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Ã¡', 'a') WHERE usuario = 'perl';";
$cjQuery_comentarios_e1 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Ã©', 'e') WHERE usuario = 'perl';";
$cjQuery_comentarios_i1 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Ã­', 'i') WHERE usuario = 'perl';";
$cjQuery_comentarios_o1 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Ã³', 'o') WHERE usuario = 'perl';";

$cjQuery_comentarios_s1 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Â¡', '¡') WHERE usuario = 'perl';";;



$cjQuery_comentarios_a2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'á', 'a') WHERE usuario = 'perl';";
$cjQuery_comentarios_e2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'é', 'e') WHERE usuario = 'perl';";
$cjQuery_comentarios_i2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'í', 'i') WHERE usuario = 'perl';";
$cjQuery_comentarios_o2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'ó', 'o') WHERE usuario = 'perl';";
$cjQuery_comentarios_u2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'ú', 'u') WHERE usuario = 'perl';";

$cjQuery_comentarios_s2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'¡', '') WHERE usuario = 'perl';";
$cjQuery_comentarios_n2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'ñ', 'n') WHERE usuario = 'perl';";;

$cjQuery_comentarios_A2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Á', 'A') WHERE usuario = 'perl';";
$cjQuery_comentarios_E2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'É', 'E') WHERE usuario = 'perl';";
$cjQuery_comentarios_I2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Í', 'I') WHERE usuario = 'perl';";
$cjQuery_comentarios_O2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Ó', 'O') WHERE usuario = 'perl';";
$cjQuery_comentarios_U2 = "UPDATE jcnoble.contacto SET comentarios = replace(comentarios,'Ú', 'U') WHERE usuario = 'perl';";

$cleaner = $_GET['cleaner'];

if ($cleaner == 1) {

  mysql_query($cjQuery_pais_a1, $cjConexion);
  mysql_query($cjQuery_pais_e1, $cjConexion);
  mysql_query($cjQuery_pais_i1, $cjConexion);
  mysql_query($cjQuery_pais_o1, $cjConexion);
  
  mysql_query($cjQuery_pais_a2, $cjConexion);
  mysql_query($cjQuery_pais_e2, $cjConexion);
  mysql_query($cjQuery_pais_i2, $cjConexion);
  mysql_query($cjQuery_pais_o2, $cjConexion);
  
  mysql_query($cjQuery_comentarios_a1, $cjConexion);
  mysql_query($cjQuery_comentarios_e1, $cjConexion);
  mysql_query($cjQuery_comentarios_i1, $cjConexion);
  mysql_query($cjQuery_comentarios_o1, $cjConexion);
  
  mysql_query($cjQuery_comentarios_s1, $cjConexion);
  
  mysql_query($cjQuery_comentarios_a2, $cjConexion);
  mysql_query($cjQuery_comentarios_e2, $cjConexion);
  mysql_query($cjQuery_comentarios_i2, $cjConexion);
  mysql_query($cjQuery_comentarios_o2, $cjConexion);
  mysql_query($cjQuery_comentarios_u2, $cjConexion);
  
  mysql_query($cjQuery_comentarios_s2, $cjConexion);
  mysql_query($cjQuery_comentarios_n2, $cjConexion);
  
  mysql_query($cjQuery_comentarios_A2, $cjConexion);
  mysql_query($cjQuery_comentarios_E2, $cjConexion);
  mysql_query($cjQuery_comentarios_I2, $cjConexion);
  mysql_query($cjQuery_comentarios_O2, $cjConexion);
  mysql_query($cjQuery_comentarios_U2, $cjConexion);
}

else {

}
?>