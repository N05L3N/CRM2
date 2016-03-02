<?php

	include('inc/menu-superior.php');
		
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
<?php

	if ($usuario == 'areynoso' OR $usuario == 'Coordinador' OR $usuario == 'coordinador' OR $usuario == 'amariscal') {
		
?>


			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">CRM Equipo</a></li>
				<li>
					<form action="model/m.sesion.administrar_usuario.php" method="post">
						<input type="hidden" id="administrar_usuario" name="administrar_usuario" value="crmequipo" />
						<button type="button" onClick="this.form.submit();">Administrar</button>
					</form>
				</li>
			</ul>

			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Recomienda y Gana</a></li>
				<li>
					<form action="model/m.sesion.administrar_usuario.php" method="post">
						<input type="hidden" id="administrar_usuario" name="administrar_usuario" value="ryg" />
						<button type="button" onClick="this.form.submit();">Administrar</button>
					</form>
				</li>
			</ul>
<?php


	}

	else if ($usuario == 'gerentecredito') {
		
?>

			<ul class="nav nav-sidebar">
				<li class="active"><a href="#" style="cursor:pointer;">Usuarios de Crédito</a></li>
			</ul>


<?php

	}

	else {

?>


			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Administrar Usuarios</a></li>
				<li>
					<form action="model/m.sesion.administrar_usuario.php" method="post">
						<input type="hidden" id="administrar_usuario" name="administrar_usuario" value="crmequipo" />
						<button type="button" onClick="this.form.submit();">Administrar</button>
					</form>
				</li>
			</ul>


<?php



	}

?>
		</div>






<?php
	
	if ($usuario == 'gerentecredito') {
		
		include('view/v.usuarios.crm.cxc.php');

	}

	else {

		require('controller/c.usuarios.php');

	}

?>




	</div>
</div>