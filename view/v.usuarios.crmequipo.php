<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h3 class="page-header">Administración Usuarios</h3>
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#pr1" role="tab" data-toggle="tab">Consultar Todos</a></li>
				<li><a href="#pr2" role="tab" data-toggle="tab">Agregar Usuario</a></li>
				<li><a href="#pr3" role="tab" data-toggle="tab">Actualizar Usuario</a></li>
				<li><a href="#pr4" role="tab" data-toggle="tab">Eliminar  Usuario</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="pr1">
					<?php include('view/v.usuarios.01.php') ?>
				</div>
				<div class="tab-pane" id="pr2">
					<?php include('view/v.usuarios.02.php') ?>
				</div>
				<div class="tab-pane" id="pr3">
					<?php include('view/v.usuarios.03.php') ?>
				</div>
				<div class="tab-pane" id="pr4">
					<?php include('view/v.usuarios.04.php') ?>
				</div>
			</div>
		</div>
	</div>
</div>