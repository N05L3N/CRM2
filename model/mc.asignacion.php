<?php
session_start();
$idedit = $_POST["idedit"];
$_SESSION["idedit"] = $idedit;
echo $idedit;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>