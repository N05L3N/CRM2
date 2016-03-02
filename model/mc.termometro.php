<?php
session_start();
$termometro = $_POST["termometro"];
$_SESSION["termometro"] = $termometro;
echo $termometro;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>