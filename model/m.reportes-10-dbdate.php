<?php 
session_start();
//
$fecha = date(ymd);
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=dbdate($fecha).xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border='1' cellpadding='0'cellspacing='0' width='1024' style='font-size:12px;'>";

	echo "<tr>";
	echo "<td colspan='10' height='62'><a href='http://avanceytec.com.mx'><img src='http://avanceytec.com.mx/images/logo_avance_small.gif' /></a></td>";
	echo "</tr>";
	
	echo "<tr>";
	?>
	<td align='left'><b>Vendedor</b></td>
	<td align='left'><b>Cliente</b></td>
	<td align='left'><b>Telefono</b></td>
	<td align='left'><b>Correo</b></td>
	<td align='left'><b>Poblacion</b></td>
	<td align='left'><b>Fecha</b></td>
	<td align='left'><b>Interesado en</b></td>
	<td align='left'><b>Origen</b></td>
	<td align='left'><b>Status</b></td>
	<td align='left'><b>Comentarios</b></td>
	</tr>
	<?php

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

$rep10_vendedor = $_SESSION["rep10_vendedor"];


///////////////////////////////////////////////	

if(!@mysql_connect("localhost", "jcnoble", "4tp2009jk")) 
	{}

	#$result = mysql_query("");


/* FILTRO POR FILTROS */

	$result = mysql_query("SELECT * FROM jcnoble.contacto WHERE asignadoa = '".$rep10_vendedor."' AND fecha >= '2014-08-28' ORDER BY id desc limit 0,999999");

/* FILTRO POR FILTROS */



	
	

	
	
	
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
	if ($i > 0) { 
	
	}
					echo "<tr>";


?>
	<td align='left'><?= $row['asignadoa'] ?></td>
	<td align='left'><?= $row['nombre'] ?></td>
	<td align='left'><?= $row['telefono'] ?></td>
	<td align='left'><?= $row['email'] ?></td>
	<td align='left'><?= $row['ciudad'] ?></td>
	<td align='left'><?= $row['fecha'] ?></td>
	<td align='left'><?= $row['equipodeinteres'] ?></td>
	<td align='left'><?= $row['medio'] ?></td>
	

<!--
<?= $row['contacto2'] ?>
<?= $row['contacto3'] ?>
<?= $row['direccion'] ?>
<?= $row['ciudad'] ?>
<?= $row['pais'] ?>
<?= $row['estado'] ?>
<?= $row['lada'] ?>
<?= $row['telefono'] ?>
<?= $row['email'] ?>
<?= $row['medio'] ?>
<?= $row['giro'] ?>
<?= $row['equipodeinteres'] ?>
<?= $row['comeqenatp'] ?>
<?= $row['eqclosqcuenta'] ?>
<?= $row['antacteq'] ?>
<?= $row['escliente'] ?>
<?= $row['numerodecliente'] ?>
<?= $row['motivodeconsulta'] ?>
<?= $row['empresa'] ?>
<?= $row['comentarios'] ?>
<?= $row['fecha'] ?>
<?= $row['Hora'] ?>
<?= $row['formulario'] ?>
<?= $row['usuario'] ?>
<?= $row['id'] ?>
-->


<?php




$busca = $row['id'];
#echo $row['id'];

$result2 = mysql_query("SELECT * FROM jcnoble.ecrm_comentarios_v WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento desc limit 0,1");
	$i2 = 0;
		while ($row2 = mysql_fetch_array($result2))
			{
				if ($i2 > 0)
					{ }
?>
	
	
<td align='left'><?= $row2['estadodeventa'] ?></td>
<td align='left'><?= $row2['comentariovendedor'] ?></td>


<?php						

							$i2++; 
			}
?>



					
		<?php			
                    echo "</tr>";
                    $i++;
					
                }
/*
}

else{
echo 'Error de conexión';
}
*/
?>