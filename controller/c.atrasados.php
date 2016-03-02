
<?php

if ($_GET['dev'] == '1') {

$result = mysql_query("SELECT usuario
FROM usuarios
WHERE departamento =  'equipo'
AND tipo =  'vendedor'
ORDER BY  'usuario'
LIMIT 0 , 300");

$i = 1;

while ($row = mysql_fetch_array($result)) {

        if ($i > 0) {}
            
            if ($row['usuario'] == '') {
              
            }
            else {

		$fxy = ''.$fxy.'id = '.$row['usuario'].' OR ';
		$fxyATM = ''.$fxyATM. '\'' . $i .  '\'=> \''.$row['usuario'].'\', ';

		}
            
	$i++; 
}


?>

<?php

	$usuariosEquipoATM = array($fxyATM);

?>

<p><?= $usuariosEquipoATM[1] ?></p>






<?php
}
else {}
?>







<?php

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
		'11' => 'ventasequipo07',
	);

?>

<script src="js/Chart.min.js"></script>

<?php

function semaforoAtrasados($x,$y) {

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';

	$usuario = $x;

	if ($y == 1) {
		$sql_q = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima < '$fecha' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28' ORDER BY id_comentarios_v desc limit 9999";	
	}
	else {
		$sql_q = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'admsoporte' OR usuario = 'equipomerida' OR usuario = 'equiposguadalajara' OR usuario = 'equiposmonterrey' OR usuario = 'ventasequipo1' OR usuario = 'ventasequipo2' OR usuario = 'ventasequipo3' OR usuario = 'ventasequipo4' OR usuario = 'ventasequipo5' OR usuario = 'ventasequipo6' OR usuario = 'ventasequipo07') AND fechaproxima < '$fecha' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28' ORDER BY id_comentarios_v desc limit 9999";		
	}
	
	$sql_r = mysql_query($sql_q);
	$chart_atrasados = mysql_num_rows($sql_r);

	echo '' . $chart_atrasados . '';

}

function semaforoHoy($x,$y) {

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';

	$usuario = $x;

	if ($y == 1) {
		$sql_q = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28' ORDER BY id_comentarios_v desc limit 9999";
	}
	else {
		$sql_q = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'admsoporte' OR usuario = 'equipomerida' OR usuario = 'equiposguadalajara' OR usuario = 'equiposmonterrey' OR usuario = 'ventasequipo1' OR usuario = 'ventasequipo2' OR usuario = 'ventasequipo3' OR usuario = 'ventasequipo4' OR usuario = 'ventasequipo5' OR usuario = 'ventasequipo6' OR usuario = 'ventasequipo07') AND fechaproxima = '$fecha' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado') AND fechaasignacion >= '2014-08-28' ORDER BY id_comentarios_v desc limit 9999";		
	}

	$sql_r = mysql_query($sql_q);
	$chart_atrasados = mysql_num_rows($sql_r);

	echo '' . $chart_atrasados . '';

}

function semaforoAsignaciones($x,$y) {

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';

	$usuario = $x;

	if ($y == 1) {
		
		$sql_q = "SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' ORDER BY id desc limit 9999";

	}
	else {
		
		$sql_q = "SELECT * FROM contacto WHERE (asignadoa = 'admsoporte' OR asignadoa = 'equipomerida' OR asignadoa = 'equiposguadalajara' OR asignadoa = 'equiposmonterrey' OR asignadoa = 'ventasequipo1' OR asignadoa = 'ventasequipo2' OR asignadoa = 'ventasequipo3' OR asignadoa = 'ventasequipo4' OR asignadoa = 'ventasequipo5' OR asignadoa = 'ventasequipo6' OR asignadoa = 'ventasequipo07') AND fecha >= '2014-08-28' ORDER BY id desc limit 9999";
	}



	$sql_r = mysql_query($sql_q);
	$chart_atrasados = mysql_num_rows($sql_r);

	echo '' . $chart_atrasados . '';

}

?>
<script>

	var pieDataStatusEquipo = [
		{
			value: <?php semaforoHoy('ventasequipo07','0') ?>,
			color:"#428bca",
			highlight: "#428bca",
			label: "Hoy"
		},
		{
			value: <?php semaforoAtrasados('ventasequipo07','0') ?>,
			color: "#ff0000",
			highlight: "#ff0000",
			label: "Atrasados"
		}
	];


	window.onload = function(){
		
	var ctxStatusEquipo = document.getElementById("chart-StatusEquipo").getContext("2d");
	window.myPie = new Chart(ctxStatusEquipo).Pie(pieDataStatusEquipo);

};

</script>