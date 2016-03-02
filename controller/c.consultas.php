<?php
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';
	$fecha_asignacionesHoy1 = ''.$ano.'-'.$mes.'-'.$dia.'';

	/* Consumibles */

		# '1' => 'angelica','2' => 'lcera','3' => 'lesparza','4' => 'leticia','5' => 'mario','6' => 'rubi','7' => 'ventascat05','8' => 'ventascat13','9' => 'gabriela','10' => 'baragon',
		# '1' => 'telemarketing01','2' => 'telemarketing02','3' => 'telemarketing03','4' => 'telemarketing04','5' => 'telemarketing05','6' => 'telemarketing06','7' => 'telemarketing07','8' => 'telemarketing08',
  	$usuariosConsumibles = array(
  		'1' => 'telemarketing01','2' => 'telemarketing02','3' => 'telemarketing03','4' => 'telemarketing04','5' => 'telemarketing05','6' => 'telemarketing06','7' => 'telemarketing07','8' => 'telemarketing08',
	);

  	/* Equipo */

	$usuariosEquipo = array(
		'1' => 'admsoporte',
		'2' => 'equipomerida',
		'3' => 'equiposguadalajara',
		'4' => 'equiposmonterrey',
		'5' => 'ventasequipo1',
		'6' => 'ventasequipo2',
		'7' => 'ventasequipo3',
		'8' => 'ventasequipo4',
		'9' => 'ventasequipo5',
		'10' => 'ventasequipo6',
		'11' => 'ventasequipo7',
	);

	$HTTP_HOST = $_SERVER['HTTP_HOST'];
	$REQUEST_URI = $_SERVER['REQUEST_URI'];

	$urlStrlen = strlen($REQUEST_URI);
	
	if ($urlStrlen == 18) {
		
		if ($usuario != '') {
			
			$url = 'http://' . $HTTP_HOST . $REQUEST_URI . '?';

		}
		
		else {
			
			$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '?';

		}

	}
	
	else {

		$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '';

	}
	
	$filtrarStatus = $_POST['filtrarStatus'];


?>
<script src="js/Chart.min.js"></script>

<?php
	
	if ($filtrarporvendedor != '') {
		$where = "usuario = '$filtrarporvendedor' AND ";
	}

	else {
		$where = "";
	}

##############
if ($filtrarporvendedor != '') {
##############


if ($filterDate1 == '--' OR $filterDate1 == '') {
  if ($filterDate2 == '--' OR $filterDate2 == '') {
    #echo '1';
    $whereDate = '';
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
  else {
    #echo '2';
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
}
else {
  #echo '3';
    #$whereDate = "(fecharespuesta >= '$filterDate1')";
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
}

#####################################
/*
$whereDate = "(fecharespuesta >= '$filterDate1')";
$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
*/

}
else {
##############
$whereUser = '';
$whereDate = '';
#####################################  
}


$whereEquipo = '(usuario != '%equipo%') AND';

include('c.consultas-02.php');
	
?>
<script>
<?php
	include('c.consultas-05.php');
	include('c.consultas-06.php');
?>
</script>

<!--
<pre>
	<?= $test_query_interno ?>
</pre>
  -->