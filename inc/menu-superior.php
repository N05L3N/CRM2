<?php
	
	if ($_SESSION["tipo"] == 'vendedor') {

		include('inc/menu-superior.vendedor.php');

	}

	else if ($_SESSION["tipo"] == 'Encargado de Sucursal') {

		include('inc/menu-superior.es.php');

	}

	else {

		include('inc/menu-superior.administrador.php');

	}
	
?>



<?php


	if ($_SESSION['usuario'] == 'rgonzalez') {

?>
	
	<a href="http://avanceytec.com.mx/apps/cs/?v=a"><b>Nuevo</b></a>

<?php
	
	}
	
	else {

?>

	<?php
	
	}

?>