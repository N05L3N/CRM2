<?php 
session_start();
//
$fecha = date(ymd);
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Reporte-Asignaciones-sin-seguimiento($fecha).xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border='1' cellpadding='0'cellspacing='0' width='1024' style='font-size:12px;'>";

	echo "<tr>";
	echo "<td colspan='2' height='62'><a href='http://avanceytec.com.mx'><img src='http://avanceytec.com.mx/images/logo_avance_small.gif' /></a></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td align='left'><b>Vendedor</b></td>";
	echo "<td align='left'><b>Total de Pendientes al día</b></td>";
	
	echo "</tr>";

/////////////////////////////////////////////// filtro por fecha


$contacto = 'contacto';

$v1 = $_SESSION["v1"];
$v2 = $_SESSION["v2"];
$v3 = $_SESSION["v3"];
$inicio = ''.$v3.'-'.$v2.'-'.$v1.'';
$v11 = $_SESSION["v11"];
$v22 = $_SESSION["v22"];
$v33 = $_SESSION["v33"];
$fin = ''.$v33.'-'.$v22.'-'.$v11.''; 
$v_estado = $_SESSION["v_estado"];
$v_giro = $_SESSION["v_giro"];


///////////////////////////////////////////////	

if(!@mysql_connect("localhost", "jcnoble", "4tp2009jk")) 
	{}

	#$result = mysql_query("");


/* FILTRO POR FILTROS */

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';

	#$sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' ORDER By usuario";
	$sql_pendientes = "SELECT * FROM jcnoble.ecrm_comentarios_v WHERE horaasignacion != 'ok' AND horaasignacion != 'oktemporal' ORDER BY usuario desc limit 0,999999";
  	$result_pendientes = mysql_query($sql_pendientes);
  	$numero_pendientes = mysql_num_rows($result_pendientes);

/* FILTRO POR FILTROS */


	
	
	
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
	if ($i > 0) { 
	
	}
					echo "<tr>";
					echo "<td align='left'><font color='black'>".$row['usuario']."</font></td>";
					echo "<td align='left'><font color='black'>".$numero_pendientes."</font></td>";
					
                    echo "</tr>";
                    $i++;
					
                }
?>
<tr>
	<td>
		ventasequipo4
	</td>
	<td>
		125
	</td>
</tr>
<?php
/*
}

else{
echo 'Error de conexión';
}
*/
?>