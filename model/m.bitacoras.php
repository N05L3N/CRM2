<?php 
session_start();

if (isset($_GET["xls"])) {

$dbh = 'localhost';


$dbu = 'jcnoble';
$dbp = '4tp2009jk';
$dbn = 'jcnoble';

$mysql_hostname = $dbh;
$mysql_user = $dbu;
$mysql_password = $dbp;
$mysql_database = "$dbn";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
#mysql_query ("SET NAMES 'utf8'");

$fecha = date(ymd);
 header('Content-type: application/vnd.ms-excel');
 header("Content-Disposition: attachment; filename=dbdate($fecha).xls");
 header("Pragma: no-cache");
 header("Expires: 0");
?>
<table class="table table-bordered table-condesed" border="1" style="width:1200px; margin:auto; background-color:White;" id="bitacora">
	<tr class="active">
		<th>Fecha</th>
		<th>Nombre del Cliente</th>
		<th>Sucursal del Cliente</th>
		<th>Datos de Contacto</th>
		<th>Nombre de quien Reporta</th>
		<th>Motivo del Reporte</th>
		<th>Descripcion (Breve)</th>
		<th>Comentarios</th>
		<th>Acción realizada</th>
		<th>Respuesta</th>
		<th>Area</th>
	</tr>
<?php 

	 include('../view/v.bitacoras.quejas.php');

?>
</table>
<?php
	
	}

?>