<?php
  include('inc/menu-superior.php');

	mysql_query ("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM contacto WHERE id = ".$id." ORDER BY fecha desc, id desc limit 0,1");
	mysql_query ("SET NAMES 'utf8'");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
    
		if ($i > 0) {
		}

		$id = $row['id'];
		$nombre = $row['nombre'];
      		$email = $row['email'];
		$email = $row['email'];
		$lada = $row['lada'];
		$telefono = $row['telefono'];
		$pais = $row['pais'];
		$fecha = $row['fecha'];
		$fechaasignacion = $row['fechaasignacion'];
		$comentarios = $row['comentarios'];
		$equipodeinteres = $row['equipodeinteres'];
		$formulario = $row['formulario'];
		$formulario = $row['formulario'];
		$numerodefactura = $row['numerodefactura'];
		$asignadoa = $row['asignadoa'];
		$comentariovendedor = $row['comentariovendedor'];
		$estadodeventa = $row['estadodeventa'];

	}
	$i++;

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$asignadoa' AND id_seguimiento = '$id' ORDER BY id_comentarios_v desc limit 0,1");
	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		$fechaproxima = $row_result3['fechaproxima'];
		$estadodeventa = $row_result3['estadodeventa'];
		$i_result3++; 
	}      
?>
<div class="container-fluid">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 col-md-9 col-md-offset-3 main">
<div class="sublime-test">
</div>
<div class="row">
	
<div class="col-md-3"><h4><?= '.'. $nombre .'' ?>ID #<?php echo ''.$id.'';?></h4></div>
<div class="col-md-3"><h4>Fecha de Asignación: <?php echo $fechaasignacion;?></h4></div>
<div class="col-md-3"><h4>Proxima Llamada:<?php echo $fechaproxima;?></h4></div>
<div class="col-md-3"><h4>Estado de la venta: <?php echo $estadodeventa;?></h4></div>
</div>
<table class="table table-bordered">
<tr>
<th class="active" align="center" width="10"></th>
<th class="active">Información general</th>
</tr>
<td>
<?php include('view/v.cliente.vendedor.td1.php');?>
</td>
<td style="background-color:#ffffff;" width="250">
<?php include('view/v.cliente.vendedor.td2.php');?>
</td>
</tr>
</table>
</div>

<div class="col-sm-4 col-md-3 sidebar">
<?php
	include('view/v.cliente.vendedor.side.php');
?>
</div>
</div>
</div>