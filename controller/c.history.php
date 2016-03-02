<?php

echo '<style>pre {background-color: #112435;color:#f4dd0b;width: 100%;}</style>';

 

$filterDate1E = explode("-", $_POST['filterDate1']);
$filterDate1 = ''.$filterDate1E[2].'-'.$filterDate1E[1].'-'.$filterDate1E[0].'';
$filterDate2E = explode("-", $_POST['filterDate2']);
$filterDate2 = ''.$filterDate2E[2].'-'.$filterDate2E[1].'-'.$filterDate2E[0].'';


if ($_POST["filtrarporvendedor"] == '') {
	
	if ($_GET['vendedor'] != '')  {
		
		$filtrarporvendedor = $_GET['vendedor'];

	}

	else {
		
		$filtrarporvendedor = $_POST["filtrarporvendedor"];

	}

}

else {

	$filtrarporvendedor = $_POST["filtrarporvendedor"];

}


$filtrarStatus = $_POST['filtrarStatus'];


include('inc/menu-superior.php');

require('controller/c.history-query.php');







# PAGINATION
const HOST = 'localhost';
const USER = 'jcnoble';
const PASSWD = '4tp2009jk';
const DB = 'jcnoble';
const TABLE = 'contacto';
const TABLE2 = 'ecrm_comentarios_v';

/* variables */


$orderFolio = $_GET['orderFolio'];
$orderUsuario = $_GET['orderUsuario'];
$orderComentario = $_GET['orderComentario'];
$orderFecha = $_GET['orderFecha'];
$orderProximaLlamada = $_GET['orderProximaLlamada'];
$orderStatus = $_GET['orderStatus'];

$orderList = 'fecharespuesta DESC';

if ($orderFolio != '') {
    $orderList = 'id_comentarios_v '.$orderFolio.'';
}
else {
}

if ($orderUsuario != '') {
    $orderList = 'usuario '.$orderUsuario.'';
}
else {
}

if ($orderComentario != '') {
    $orderList = 'comentariovendedor '.$orderComentario.'';
}
else {
}

if ($orderFecha != '') {
    $orderList = 'fecharespuesta '.$orderFecha.'';
}
else {
}

if ($orderProximaLlamada != '') {
    $orderList = 'fechaproxima '.$orderProximaLlamada.'';
}
else {
}

if ($orderStatus != '') {
    $orderList = 'estadodeventa '.$orderStatus.'';
}
else {
}

$order = $orderList;
$url = basename($_SERVER ["PHP_SELF"]);

if ($filtrarporvendedor == '') {
  $limit_end = 100;
}
else {
 $limit_end = 100;
}


$init = ($ini-1) * $limit_end;

# / PAGINATION

# echo '' . $WHERE . '' . $whereUser . '' . $whereDate . '' . $whereStatus . '';
$count="SELECT COUNT(*) FROM ".TABLE2." $WHERE $whereUser $whereDate $whereStatus";
$select = "SELECT * FROM ".TABLE2." $WHERE $whereUser $whereDate $whereStatus ORDER BY $order";
$select .= " LIMIT $init, $limit_end";

# PAGINATION >

$mysql = new mysqli(HOST, USER, PASSWD, DB);

$num = $mysql->query($count);
$x = $num->fetch_array();

$total = ceil($x[0]/$limit_end);

# PAGINATION <

# echo '<pre>' . $select .  ' /  <marquee behavior="alternate" direction="right">'. $filtrarporvendedor. ''. $filtrarStatus . ''. $filterDate1 . '' . $filterDate2 . '</marquee></pre>';

?>