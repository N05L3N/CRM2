<?php

# Incluir Filtro por fecha

$id_view = $_SESSION["id_view"];
$tipo = $_SESSION["tipo"];


if ($_POST['filtro1_2'] == '') {

	$classActive1 = 'active';
	$classActive2 = 'Noactive';

}

else {

	$classActive1 = 'Noactive';
	$classActive2 = 'active';

}


if ($id_view == 'diary' OR $id_view == 'late') {

}

else {

?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="width:75%; margin:auto;">
	<li class="<?= $classActive1 ?>">
		<a href="#home" role="tab" data-toggle="tab">
			Fecha de Contacto <?= ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].''; ?>
		</a>
	</li>
	<li class="<?= $classActive2 ?>">
		<a href="#filtros" role="tab" data-toggle="tab">
			Filtros
		</a>
	</li>

<?php

	if($tipo == 'administrador' || $tipo == 'programador') {

?>

	<li>
		<a href="#profile" role="tab" data-toggle="tab">
			Vendedor
		</a>
	</li>

<?php

	}

	else {

	}

?>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="width:75%; margin:auto;">
	<div class="tab-pane <?= $classActive1 ?>" id="home">
		<?php include('modules/m.filtro.fecha.php') ?>
	</div>
	<div class="tab-pane" id="profile">
		<?php include('modules/m.filtro.vendedor.php') ?>
	</div>
	<div class="tab-pane <?= $classActive2 ?>" id="filtros">
		<?php include('modules/m.filtro.individual.php') ?>
	</div>
</div>

<?php
	}
?>


<div class="table-responsive">
	<br>
		<table class="table table-bordered table-striped" style="width:75%; margin:auto;">
			<caption style="background-color:White;">
				<h4>Atrasados</h4>
			</caption>
<?php
# TR
include('view/v.asignaciones-01.php');

$c = $mysql->query($select);

while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

if ($rows['id_seguimiento'] =='') {
# TD
include('view/v.asignaciones-02.php');    
}
else {

$rowsid_seguimiento = $rows['id_seguimiento'];
$result = mysql_query("SELECT * FROM contacto WHERE id = '$rowsid_seguimiento' ORDER BY id desc");
# mysql_query ("SET NAMES 'utf8'");

$i = 0;

while ($row = mysql_fetch_array($result)) {
if ($i > 0) {
}

$rows['id'] = $row['id'];
$rows['apellidos'] = $row['apellidos'];
$rows['email'] = $row['email'];
# $rows['email'] = $rows['estadodeventa'].'/'.$row['asignadoa'].'';
$rows['telefono'] = $row['telefono'];
$rows['nombre_recomendador'] = $row['nombre_recomendador'];
$rows['pais'] = $row['pais'];
$rows['estado'] = $row['estado'];
$rows['ciudad'] = $row['ciudad'];
$rows['equipodeinteres'] = $row['equipodeinteres'];
$rows['formulario'] = $row['formulario'];
$rows['fecha'] = $row['fecha'];
$rows['comentarios'] = $row['comentarios'];

if ($row['asignadoa'] == 'trash') {
# include('view/v.asignaciones-02.php');

}
else {
include('view/v.asignaciones-02.php');
}

}

$i++;

}



}

?>
</tbody>
<table>
</div>

<center>
<div style="margin:auto;">
	<ul class="pagination pagination-sm">

<?php   

for($k=1; $k <= $total; $k++) {
	
	if($ini == $k) {

?>
	
	<li class="active"><a href='#'><b><?= $k ?></b></a></li>

<?php 
	
	}

	else {

?>      
	
	<li><a href='<?= $url ?>?pos=<?= $k ?>'><?= $k ?></a></li>

<?php

	}
}

?>
	</ul>
</div>
<center>


<?php
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
date_default_timezone_set('UTC');

$bitacora_fecha = array(
	'1' => date('l'), 
	'2' => date('j'), 
	'3' => date('F'), 
	'4' => date('Y'), 
	);

if ($bitacora_fecha[1] == 'Friday') {
	$bitacora_fecha[1] = 'Viernes';
}

if ($bitacora_fecha[3] == 'January') {
	$bitacora_fecha[3] = 'Enero';
}

$bitacora_fechaUS = date("Y-m-d");
$bitacora_fechaMX = date("d-m-Y");
?>

<style>

table.bitacora {
	
	width:75%;
	margin:auto;

}
</style>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<table class="table table-bordered table-condesed table-striped bitacora">
			<caption>
				Bitácora del día <?= $bitacora_fechaMX ?>
			</caption>
			<tr>
				<td>
					ID:
				</td>
				<td>
					Nombre:
				</td>
				<td>
					Fecha:
				</td>
			</tr>
<?php
	
	$where_bitacora_dia = "fecha = '$bitacora_fechaUS''";
	
	$result_bitacora = mysql_query("SELECT * FROM contacto WHERE $where_bitacora_dia ORDER BY fecha desc, id desc limit 1,999");
	mysql_query ("SET NAMES 'utf8'");
	
	$i_bitacora = 0;
	
	while ($row_bitacora = mysql_fetch_array($result_bitacora)) {
    
    		if ($i_bitacora > 0) {
    	  	
    	  	}
    	  	
    	  	$bitacoraResult_id = $row_bitacora['id'];
    	  	$bitacoraResult_nombre = $row_bitacora['nombre'];
    	  	$bitacoraResult_fecha = $row_bitacora['fecha'];

?>
	<tr>
		<td>
			<?= $bitacoraResult_id ?>
		</td>
		<td>
			<?= $bitacoraResult_nombre ?>
		</td>
		<td>
			<?= $bitacoraResult_fecha ?>
		</td>
	</tr>
    	  	
<?

	}
  
	$i++;

?>			
		</table>
	</div>
	<div class="col-md-4"></div>
</div>