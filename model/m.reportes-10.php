<?php
	session_start();

	$_SESSION["rep10_vendedor"] = $_POST["rep10_vendedor"];

	header('location:model/m.reportes-10-dbdate.php');

?>