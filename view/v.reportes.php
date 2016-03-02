<?php
  include('inc/menu-superior.php');
?>

<div class="container theme-showcase">
	<div class="page-header">
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<?php
						$idReporte = $_GET['idReporte'];
						if ($idReporte == '01') {
							$h3 = 'Exportar a Excel base de datos por rango de fecha.</h3>';
						}
						else if ($idReporte == '02') {
							$h3 = 'Consultar Asignaciones por vendedor al mes.</h3>';
						}
						else if ($idReporte == '03') {
							$h3 = 'Consultar Asignaciones sin seguimiento.</h3>';
						}
						else if ($idReporte == '04') {
							$h3 = 'Consultar Asignaciones del día.</h3>';
						}
						else if ($idReporte == '05') {
							$h3 = 'Consultar el usuario con más recomendaciones realizadas.</h3>';
						}
						else if ($idReporte == '06') {
							$h3 = 'Gráfica "Como se enteró de nosotros".</h3>';
						}
						else if ($idReporte == '10') {
							$h3 = 'Exportar a Excel base de datos por Vendedor.</h3>';
						}

						else {

						}
						echo '<h3 class="panel-title">'.$h3.'</h3>';
					?>
				</div>
				<div class="panel-body"> 
					<?php
						include('view/v.reportes-'.$idReporte.'.php');
					?>
				</div>
			</div>
		</div>
	</div>
</div>