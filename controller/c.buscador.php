<?php

	session_start();
	
	$_SESSION["buscador"] = $_POST["buscador"];

	
	header("Location: {$_SERVER['HTTP_REFERER']}".SID);
		
?>