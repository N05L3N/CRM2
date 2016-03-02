<?php 
session_start();
//
$fecha = date(ymd);
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Reporte-Asignaciones-por-vendedor-al-mes($fecha).xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border='1' cellpadding='0'cellspacing='0' width='1024' style='font-size:12px;'>";

	echo "<tr>";
	echo "<td colspan='27' height='62'><a href='http://avanceytec.com.mx'><img src='http://avanceytec.com.mx/images/logo_avance_small.gif' /></a></td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td align='left'><b>Nombre</b></td>";
	echo "<td align='left'><b>Contacto #2</b></td>";
	echo "<td align='left'><b>Contacto #3</b></td>";
	echo "<td align='left' width='200'><b>Dirección</b></td>";
	echo "<td align='left'><b>Ciudad</b></td>";
	echo "<td align='left'><b>Pais</b></td>";
	echo "<td align='left'><b>Estado</b></td>";
	echo "<td align='left'><b>Lada</b></td>";
	echo "<td align='left'><b>Telefono</b></td>";
	echo "<td align='left'><b>E-mail</b></td>";
	echo "<td align='left'><b>Medio</b></td>";
	echo "<td align='left'><b>Giro</b></td>";
	
	echo "<td align='left'><b>Equipo de interes</b></td>";
	echo "<td align='left'><b>Compro equipo en ATP</b></td>";
	echo "<td align='left'><b>Equipos con los que cuenta</b></td>";
	echo "<td align='left'><b>Antigüedad del equipo</b></td>";
	echo "<td align='left'><b>Cliente</b></td>";
	echo "<td align='left'><b># de cliente</b></td>";
	echo "<td align='left'><b>Motivo de consulta</b></td>";
	echo "<td align='left'><b>Empresa</b></td>";
	
	echo "<td align='left' width='750'><b>Comentarios</b></td>";
	echo "<td align='left'><b>Fecha</b></td>";
	echo "<td align='left'><b>Hora</b></td>";
	echo "<td align='left'><b>Formulario</b></td>";
	echo "<td align='left'><b>Usuario</b></td>";
	echo "<td align='left'><b>ID</b></td>";
	echo "<td align='left'><b>Asignaciones</b></td>";
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

	$result = mysql_query("SELECT * FROM jcnoble.contacto WHERE fecha >= '2014-08-01' AND fecha <= '2014-08-31' AND usuario != 'perl' AND asignadoa != '' ORDER BY asignadoa desc limit 0,999999");

/* FILTRO POR FILTROS */



	
	

	
	
	
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
	if ($i > 0) { 
	
	}
					echo "<tr>";
					echo "<td align='left'><font color='black'>".$row['nombre']."</font></td>";
					echo "<td align='left'>".$row['contacto2']."</td>";
					echo "<td align='left'>".$row['contacto3']."</td>";
					echo "<td align='left'>".$row['direccion']."</td>";
					echo "<td align='left'>".$row['ciudad']."</td>";
					echo "<td align='left'>".$row['pais']."</td>";
					echo "<td align='left'>".$row['estado']."</td>";
					echo "<td align='left'>".$row['lada']."</td>";
					echo "<td align='left'>".$row['telefono']."</td>";
					echo "<td align='left'><font color='blue'>".$row['email']."</font></td>";
					echo "<td align='left'>".$row['medio']."</td>";
					echo "<td align='left'>".$row['giro']."</td>";
echo "<td align='left'>".$row['equipodeinteres']."</td>";
echo "<td align='left'>".$row['comeqenatp']."</td>";
echo "<td align='left'>".$row['eqclosqcuenta']."</td>";
echo "<td align='left'>".$row['antacteq']."</td>";
echo "<td align='left'>".$row['escliente']."</td>";
echo "<td align='left'>".$row['numerodecliente']."</td>";
echo "<td align='left'>".$row['motivodeconsulta']."</td>";
echo "<td align='left'>".$row['empresa']."</td>";

					echo "<td align='left'>".$row['comentarios']."</td>";
					echo "<td align='left'>".$row['fecha']."</td>";
					echo "<td align='left'>".$row['Hora']."</td>";
					echo "<td align='left'>".$row['formulario']."</td>";
					echo "<td align='left'>".$row['usuario']."</td>";
					
					echo "<td align='left'>".$row['id']."</td>";
					
					






echo '<td style="background-color:#ffffff;">';

$busca = $row['id'];
#echo $row['id'];

$result2 = mysql_query("SELECT * FROM jcnoble.contacto WHERE id = '$busca' ORDER BY id desc limit 0,1");
	$i2 = 0;
		while ($row2 = mysql_fetch_array($result2))
			{
				if ($i2 > 0)
					{ }
						
						echo '<b>Asignado a: </b>'.$row2['asignadoa'].'<br />';
						/*
						echo '<b>Estado de venta: </b>'.$row2['estadodeventa'].'<br />';
						echo '<b>Fecha asignacion: </b>'.$row2['fecha_asignacion'].'<br />';
						echo '<b>Hora asignacion: </b>'.$row2['hora_asignacion'].'<br />';
						echo '<b>Fecha respuesta: </b>'.$row2['fecha_respuesta'].'<br />';
						echo '<b>Hora respuesta: </b>'.$row2['hora_respuesta'].'<br />';
						echo '<b>Comentario: </b>'.$row2['comentario_vendedor'].'<br />';
						echo '<b>Factura: </b>'.$row2['factura'].'<br />';
						*/
						

							$i2++; 
			}

echo '</td>';



					
					
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