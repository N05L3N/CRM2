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
			
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Usuario: <?= $usuario ?></li>
						<li class="dropdown-header">Departamento: <?= $departamento ?></li>
						<li class="dropdown-header">Tipo: <?= $tipo ?></li>
						<li class="divider"></li>
						<li><a href="exit/">Cerrar Sesión</a></li>
					</ul>
				</li>
				<li>
					<a href="1.reportes?u=<?= $usuario ?>">Reporte de Seguimientos</a>
				</li>
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
<?

	}

?>