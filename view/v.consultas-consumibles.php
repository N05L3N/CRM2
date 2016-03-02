<table class="table table-striped table-bordered" style="width:90%; margin:auto;">
	<caption style="text-align:left;">
		<h3>Consumibles</h3>
	</caption>
	<tr>
		<th>Vendedor</th>
		<th>Asignaciones para Hoy</th>
		<th>Asignaciones Totales</th>
		<th>Seguimientos Atrasados</th>
		<th></th>
	</tr>
	<tr>
		<td class="usuario">campochihuahua1
<?php
	$usuario_consultas = 'campochihuahua1';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dcampochihuahua1">
				<input type="hidden" value="campochihuahua1" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dcampochihuahua1').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">gaguirre
<?php
	$usuario_consultas = 'gaguirre';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dgaguirre">
				<input type="hidden" value="gaguirre" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dgaguirre').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
		<tr>
		<td class="usuario">lcera
<?php
	$usuario_consultas = 'lcera';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dlcera">
				<input type="hidden" value="lcera" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dlcera').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
		<tr>
		<td class="usuario">lesparza
<?php
	$usuario_consultas = 'lesparza';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dlesparza">
				<input type="hidden" value="lesparza" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dlesparza').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
		<tr>
		<td class="usuario">rgonzalez
<?php
	$usuario_consultas = 'rgonzalez';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="drgonzalez">
				<input type="hidden" value="rgonzalez" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('drgonzalez').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
		<tr>
		<td class="usuario">servicioalcliente1
<?php
	$usuario_consultas = 'servicioalcliente1';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dservicioalcliente1">
				<input type="hidden" value="servicioalcliente1" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dservicioalcliente1').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
		<tr>
		<td class="usuario">ventascat05
<?php
	$usuario_consultas = 'ventascat05';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventascat05">
				<input type="hidden" value="ventascat05" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventascat05').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">ventascat13
<?php
	$usuario_consultas = 'ventascat13';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dventascat13">
				<input type="hidden" value="ventascat13" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dventascat13').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	
	<tr>
		<td class="usuario">rubi
<?php
	$usuario_consultas = 'rubi';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="drubi">
				<input type="hidden" value="rubi" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('drubi').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">mario
<?php
	$usuario_consultas = 'mario';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dmario">
				<input type="hidden" value="mario" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dmario').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">angelica
<?php
	$usuario_consultas = 'angelica';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dangelica">
				<input type="hidden" value="angelica" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dangelica').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">leticia
<?php
	$usuario_consultas = 'leticia';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dleticia">
				<input type="hidden" value="leticia" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dleticia').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">gaguirre
<?php
	$usuario_consultas = 'gaguirre';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dgaguirre">
				<input type="hidden" value="gaguirre" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dgaguirre').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
	<tr>
		<td class="usuario">servicioalcliente1
<?php
	$usuario_consultas = 'servicioalcliente1';
	include('v.consultas.select.php');
?>
		</td>
		<td><?= $numero_asignacionesHoy ?></td>
		<td><?= $numero_asignacionesTotal ?></td>
		<td><?= $numero_pendientes ?></td>
		<td>
			<form action="reportes-10.php" method="post" id="dservicioalcliente1">
				<input type="hidden" value="servicioalcliente1" name="rep10_vendedor">
				<button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('dservicioalcliente1').submit();">
  					<span class="glyphicon glyphicon-download"></span> Descargar Excel
				</button>
			</form>
		</td>
	</tr>
</table>