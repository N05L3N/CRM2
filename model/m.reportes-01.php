<?php
	session_start();

	$test = '0';
	
	$_SESSION["v1"] = $_POST["v1"];
	$_SESSION["v2"] = $_POST["v2"];
	$_SESSION["v3"] = $_POST["v3"];
	$_SESSION["v11"] = $_POST["v11"];
	$_SESSION["v22"] = $_POST["v22"];
	$_SESSION["v33"] = $_POST["v33"];

	$_SESSION["v_estado"] = $_POST["v_estado"];
	$_SESSION["v_giro"] = $_POST["v_giro"];

	if ($test == '1') {

		if ($_POST["v_estado"] == '' AND $_POST["v_giro"] == '') {
			echo 'Filtro Normal';
		}

		else if ($_POST["v_estado"] != '' AND $_POST["v_giro"] == '') {
			echo 'Filtro por Estado';
		}

		else if ($_POST["v_estado"] == '' AND $_POST["v_giro"] != '') {
			echo 'Filtro por Giro';
		}

		else if ($_POST["v_estado"] != '' AND $_POST["v_giro"] != '') {
			echo 'Filtro Doble';
		}

		echo "<ul>";
		echo '<li>'.$_SESSION["v1"].'</li>';
		echo '<li>'.$_SESSION["v2"].'</li>';
		echo '<li>'.$_SESSION["v3"].'</li>';
		echo '<li>'.$_SESSION["v11"].'</li>';
		echo '<li>'.$_SESSION["v22"].'</li>';
		echo '<li>'.$_SESSION["v33"].'</li>';
		echo '<li>'.$_SESSION["v_estado"].'</li>';
		echo '<li>'.$_SESSION["v_giro"].'</li>';
		echo '<li>'.$_SESSION["usu"].'</li>';
		echo "</ul>";
	}
	
	else {

		header('location:model/m.reportes-01-dbdate.php');

	}
?>