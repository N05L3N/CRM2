<?php
	session_start();
	
	$_SESSION["v1"] = $_POST["v1"];
	$_SESSION["v2"] = $_POST["v2"];
	$_SESSION["v3"] = $_POST["v3"];
	$_SESSION["v11"] = $_POST["v11"];
	$_SESSION["v22"] = $_POST["v22"];
	$_SESSION["v33"] = $_POST["v33"];
	
	header("Location: {$_SERVER['HTTP_REFERER']}".SID);
		
?>