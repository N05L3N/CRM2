<table class="table table-striped table-bordered" style="width:90%; margin:auto;">
	<caption style="text-align:left;">
		<h3>Equipo</h3>
	</caption>
	<tr>
		<th>Vendedor</th>
		<th>Asignaciones para Hoy</th>
		<th>Asignaciones Totales</th>
		<th>Seguimientos Atrasados</th>
		<th></th>
	</tr>
	<tr>
		<td class="usuario">ventasequipo1
<?php
	$usuario_consultas = 'ventasequipo1';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo1">
				<input type="hidden" value="ventasequipo1" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo1').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventasequipo2
<?php
	$usuario_consultas = 'ventasequipo2';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo2">
				<input type="hidden" value="ventasequipo2" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo2').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventasequipo3
<?php
	$usuario_consultas = 'ventasequipo3';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo3">
				<input type="hidden" value="ventasequipo3" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo3').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventasequipo4
<?php
	$usuario_consultas = 'ventasequipo4';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo4">
				<input type="hidden" value="ventasequipo4" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo4').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventasequipo5
<?php
	$usuario_consultas = 'ventasequipo5';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo5">
				<input type="hidden" value="ventasequipo5" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo5').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventasequipo6
<?php
	$usuario_consultas = 'ventasequipo6';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo6">
				<input type="hidden" value="ventasequipo6" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo6').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventasequipo7
<?php
	$usuario_consultas = 'ventasequipo7';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventasequipo6">
				<input type="hidden" value="ventasequipo8" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventasequipo6').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
		<tr>
		<td class="usuario">admsoporte
<?php
	$usuario_consultas = 'admsoporte';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dadmsoporte">
				<input type="hidden" value="admsoporte" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dadmsoporte').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">equipomerida
<?php
	$usuario_consultas = 'equipomerida';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dequipomerida">
				<input type="hidden" value="equipomerida" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dequipomerida').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">equiposmonterrey
<?php
	$usuario_consultas = 'equiposmonterrey';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dequiposmonterrey">
				<input type="hidden" value="equiposmonterrey" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dequiposmonterrey').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">equiposguadalajara
<?php
	$usuario_consultas = 'equiposguadalajara';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dequiposguadalajara">
				<input type="hidden" value="equiposguadalajara" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dequiposguadalajara').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
</table>