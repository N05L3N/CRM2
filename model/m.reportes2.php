<?php
	for ($i=1; $i < 1; $i++) { 
		
	}
	
	# Fechas

	$hoy = date("d-m-Y");
	$hoy_d = date("d");
	$hoy_m = date("m");
	$hoy_Y = date("Y");

	# Filtros 

	$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
	$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

	$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
	$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';

	# Comparación para aplicar el filtro de fechas

	if ($fecha_inicio_filtro != '--') {
		$where = 'AND fecha >= \''.$fecha_inicio_filtro.'\' AND fecha <= \''.$fecha_fin_filtro.'\'';
	}

	else {
		$where = '';
	}

/*
id_comentarios_v
id_seguimiento
*/

	$result_1 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE estadodeventa = 'frio' $where ORDER BY id_seguimiento desc limit 0,9999");	

		$i_1 = 0;  

  		while ($row_1 = mysql_fetch_array($result_1)) {
    	
    			if ($i_1 > 0) {}

			$i_1++;
		}

		$_SESSION['en_proceso'] = $i_1;

	$result_2 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE estadodeventa = 'tibio' $where ORDER BY id_seguimiento desc limit 0,9999");	

		$i_2 = 0;  

  		while ($row_2 = mysql_fetch_array($result_2)) {
    	
    			if ($i_2 > 0) {}

			$i_2++;
		}

		$_SESSION['aceptado'] = $i_2;

	$result_3 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE estadodeventa = 'caliente' $where ORDER BY id_seguimiento desc limit 0,9999");	

		$i_3 = 0;  

  		while ($row_3 = mysql_fetch_array($result_3)) {
    	
    			if ($i_3 > 0) {}

			$i_3++;
		}

		$_SESSION['rechazado'] = $i_3;

		$arcaico = $i_2 * 100;
		$suma = $i_2 + $i_3;
		$_SESSION['porcentaje'] = $arcaico / $suma;



	$result_4 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE estadodeventa = 'facturado' $where ORDER BY id_seguimiento desc limit 0,9999");	

		$i_4 = 0;  

  		while ($row_4 = mysql_fetch_array($result_4)) {
    	
    			if ($i_4 > 0) {}

			$i_4++;
		}

		$_SESSION['atrasados'] = 8;

	$result_5 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE estadodeventa = 'descartado' $where ORDER BY id_seguimiento desc limit 0,9999");	

		$i_5 = 0;  

  		while ($row_5 = mysql_fetch_array($result_5)) {
    	
    			if ($i_5 > 0) {}

			$i_5++;
		}

		$_SESSION['cancelado'] = $i_5;

	$result_6 = mysql_query("SELECT DISTINCT(id_seguimiento) FROM ecrm_comentarios_v WHERE estadodeventa = 'postventa' $where ORDER BY id_seguimiento desc limit 0,9999");	

		$i_6 = 0;  

  		while ($row_6 = mysql_fetch_array($result_6)) {
    	
    			if ($i_6 > 0) {}

			$i_6++;
		}

		$_SESSION['detenido'] = $i_6;
	
?>