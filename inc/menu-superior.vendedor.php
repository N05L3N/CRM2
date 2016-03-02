<script type='text/javascript'>if (top !== self) top.location.href = self.location.href;</script>
<?php

	$departamento = $_SESSION['departamento'];
	$buscador = $_SESSION['buscador'];
	
	if ($_SESSION["usuario"] == '') {
		header('Location: http://www.avanceytec.com.mx/apps/crm2/exit/');
	}

	else {
		include('model/m.menu-superior.php');

?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="asignaciones">CRM</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="registrar_cliente.php">Registro de Prospecto</a></li>
				<li><a href="diary">Hoy » <button type="button" class="btn btn-success btn-xs"><?= $numero_asignacionesHoy ?></button></a></li>
				<li><a href="asignaciones">Asignaciones » <button type="button" class="btn btn-primary btn-xs"><?= $numero_asignacionesTotal ?></button></a></li>
				<li><a href="late">Atrasados » <button type="button" class="btn btn-danger btn-xs"> <?= $numero_pendientes?></button></a></li>
				<li><a href="panel.php">Inicio</a></li>
<?php

	if ($id_view == 'consultas' OR $id_view == 'history') {


	}

	else {
		
		echo '<li>';
		include('view/v.buscador.phtml');
		echo '</li>';

	}

?>

			</ul>
			<ul class="nav navbar-nav" style="float:right;">
				<li>
					<a href="exit/">
						<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
							Cerrar Sesión
					</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<?php

	if ($_SESSION["id_view"] == 'config') {
		
		include('inc/menu.config.php');

	}
		
	else {

	}

	if ($_SESSION["id_view"] == 'reportes') {
		
		#include('inc/menu.reportes.php');
	}
	
	else {

	}

}

?>