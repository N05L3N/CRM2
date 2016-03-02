<?php
	
	include('inc/menu-superior.php');

?>

<style>

table.menu-principal {
	background-color: #fff;
	margin:auto; 
	width: 90%;
}

table.menu-principal td {
	width: 25%;
}

ul.menu-principal {
	list-style: none;
}

span.subtitulo {
	font-size: 20px;
	font-weight: bold;
}

</style>

<table class="table table-bordered table-striped table-condensed menu-principal">
	<tr>
		<th colspan="4">Administración</th>
	</tr>
	<tr>
		<td>
			<ul class="menu-principal">
				<li><span class="subtitulo">Usuarios</span></li>
				<li>Lista de Usuarios</li>
				<li><a href="usuarios.php">Agregar Usuario</a></li>
			</ul>
		</td>
		<td>
			<ul>
				<li><span class="subtitulo">Equipos</span></li>
				<li><a href="config.php#pr1">Consultar Todos</a></li>
				<li><a href="config.php#pr2">Agregar Equipo</a></li>
				<li><a href="config.php#pr3">Actualizar Equipos</a></li>
				<li><a href="config.php#pr4">Eliminar Equipos</a></li>
			</ul>
		</td>
		<td>
			<ul>
				<li><span class="subtitulo">Clientes</span></li>
				<li>Lista de Clientes</li>
				<li>Agregar Cliente</li>
			</ul>
		</td>
		<td>
			<ul>
				<li><span class="subtitulo">Reportes</span></li>
				<li>Lista de Equipos</li>
				<li>Agregar Equipo</li>
			</ul>
		</td>
	</tr>
</table>