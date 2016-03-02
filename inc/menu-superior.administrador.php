<script type='text/javascript'>if (top !== self) top.location.href = self.location.href;</script>
<?php

	$departamento = $_SESSION['departamento'];
	$buscador = $_SESSION['buscador'];
	
	if ($_SESSION["tipo"] == '') {
		# $_SESSION["tipo"] = 'administrador';
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
			<a class="navbar-brand" href="controller/c.crm-reset.php">CRM</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="panel.php">Escritorio</a></li>
							
<?php

	if ($_SESSION["departamento"] == 'ventascampo') {

	}
	
	else {

?>
						<li><a href="usuarios.php">Administrar Usuarios</a></li>
						<li><a href="config.php">Administrar Equipos</a></li>
						<li><a href="consultas-clientes-sin-seguimientos.php"> Número de Seguimientos</a></li>
						<li><a href="consultas.php"><span class="label label-danger">Nuevo</span> Reportes</a></li>
						<li><a href="bitacoras.php"><span class="label label-danger">Nuevo</span> Bitácoras</a></li>

<?php

		}

?>

						<li class="divider"></li>
						<li><a href="registrar_cliente.php">Registro de Prospecto</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Usuario: <?= $usuario ?></li>
						<li class="dropdown-header">Departamento: <?= $departamento ?></li>
						<li class="dropdown-header">Tipo: <?= $tipo ?></li>
						<li class="divider"></li>
						<li><a href="exit/">Cerrar Sesión</a></li>
					</ul>
				</li>
				<li><a href="panel.php">Inicio</a></li>

<?php
			
	if ($id_view == 'consultas') {

		$styleActive1 = "color:#fff;";

	}

	else {

		$styleActive1 = "";

	}

	if ($id_view == 'history') {

		$styleActive2 = "color:#fff;";

	}

	else {

		$styleActive2 = "";

	}

?>
				<li><a href="consultas.php" style="<?= $styleActive1 ?>">Seguimientos</a></li>
				<li><a href="history.php" style="<?= $styleActive2 ?>">Bitácoras</a></li>
				<li>
					<a href="atrasados.php" style="<?= $styleActive2 ?>">
						<span class="label label-danger">
							Reporte de Atrasados
						</span>
					</a>
				</li>
				<!-- <li><a href="consultas.php?v=asignaciones" style="<?= $styleActive3 ?>">Reportes de Asignaciones</a></li> -->

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