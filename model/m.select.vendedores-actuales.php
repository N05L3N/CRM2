<?php
	
	$departamento = $_SESSION['departamento'];
	#consumibles

	$result_vendedores_actuales_filtro = mysql_query("SELECT * FROM usuarios ORDER BY nombre1 ASC limit 0,1000");
	
	$i_vendedores_actuales = 0;
	
	while ($row_vendedores_actuales = mysql_fetch_array($result_vendedores_actuales_filtro)) {
		if ($i_vendedores_actuales > 0) {
		}

			
			if ($row_vendedores_actuales['usuario'] == 'atpdis' OR $row_vendedores_actuales['usuario'] == 'areynoso' OR $row_vendedores_actuales['usuario'] == 'amariscal' OR $row_vendedores_actuales['usuario'] == 'gaguirre' OR $row_vendedores_actuales['usuario'] == 'irodriguez') {
				
			}

			else if ($_SESSION['usuario'] == 'auditorcat') {


					if ($row_vendedores_actuales['departamento'] == 'telemarketing' OR $row_vendedores_actuales['departamento'] == 'consumibles') {
						if ($filtrarporvendedor == $row_vendedores_actuales['usuario'] OR $row['asignadoa'] == $row_vendedores_actuales['usuario']) {
							echo "<option value=".$row_vendedores_actuales['usuario']." selected>".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";
						}

						else {
							echo "<option value=".$row_vendedores_actuales['usuario'].">".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";	
						}	
					}
					else {

					}
			}

			else if ($_SESSION['usuario'] == 'atptelemarketing') {


					if ($row_vendedores_actuales['departamento'] == 'telemarketing') {
						if ($filtrarporvendedor == $row_vendedores_actuales['usuario'] OR $row['asignadoa'] == $row_vendedores_actuales['usuario']) {
							echo "<option value=".$row_vendedores_actuales['usuario']." selected>".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";
						}

						else {
							echo "<option value=".$row_vendedores_actuales['usuario'].">".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";	
						}	
					}
					else {

					}
			}

			else if ($_SESSION['usuario'] == 'esmex01') {

					if ($row_vendedores_actuales['apellido2'] == 'Estado de México') {
						if ($filtrarporvendedor == $row_vendedores_actuales['usuario'] OR $row['asignadoa'] == $row_vendedores_actuales['usuario']) {
							echo "<option value=".$row_vendedores_actuales['usuario']." selected>".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";
						}

						else {
							echo "<option value=".$row_vendedores_actuales['usuario'].">".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";	
						}	
					}
					else {

					}
				
			}

			else {


					if ($filtrarporvendedor == $row_vendedores_actuales['usuario'] OR $row['asignadoa'] == $row_vendedores_actuales['usuario']) {
						echo "<option value=".$row_vendedores_actuales['usuario']." selected>".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";
					}

					else {
						echo "<option value=".$row_vendedores_actuales['usuario'].">".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";	
					}




			}
	}

	$i_vendedores_actuales++;

?>