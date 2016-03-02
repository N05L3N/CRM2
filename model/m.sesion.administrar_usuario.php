<?php
session_start();
$administrar_usuario = $_POST["administrar_usuario"];
$_SESSION["administrar_usuario"] = $administrar_usuario;
echo $administrar_usuario;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>