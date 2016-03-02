<?php

	if ($departamento == 'consumibles' OR $departamento == 'ventascampo' OR $departamento == 'telemarketing') {

		include('view/v.cliente.vendedor.side.consumibles.php');

	}

	else {

		include('view/v.cliente.vendedor.side.equipo.php');

	}

	
?>