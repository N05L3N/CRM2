<?php
	include('inc/menu-superior.php');
?>
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<br>
<div class="container theme-showcase">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Dar de alta un cliente</h3>
				</div>
				<div class="panel-body">
<?php

	if ($_SESSION["usuario"] == 'coordinadorventas1' OR $_SESSION["usuario"] == 'coordinadorventas2' OR $_SESSION["departamento"] == 'ventascampo') {
			
			# echo '<h1>' . $_SESSION["usuario"] . '</h1>';
			include('view/v.registrar_cliente_form.consumibles-ventascampo.php');

	}

	else {

		if ($_SESSION['departamento'] == 'telemarketing') {
			
			include('view/v.registrar_cliente_form.consumibles.php');

		}

		else {

			include('view/v.registrar_cliente_form.php');

		}

	}

?>
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>