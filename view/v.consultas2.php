<?php
	
	include('inc/menu-superior.php');
	include('controller/c.consultas.php');


?>

<div class="row" style="margin-top:-20px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-10" style="background-color:White;">

<?php

	include('v.consultas-graficas.phtml');
	
	# Tablas con Semaforo y Seguimientos por Mes / Año
	
	if ($departamento == 'equipo') {
		
		include('v.consultas-equipo.php');
		include('v.consultas-seguimientos-por-mes.php');

	}

	else if ($departamento == 'consumibles') {
		
	#	include('v.consultas-consumibles.php');

	}

	else {

	}	

?>

	</div>
	<div class="col-sm-1"></div>
</div>