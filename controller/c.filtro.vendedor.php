<?php
	session_start();
	
	$_SESSION["filtrarporvendedor"] = $_POST["filtrarporvendedor"];
	
	header("Location: {$_SERVER['HTTP_REFERER']}".SID);
		
?>