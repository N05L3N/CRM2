<?php
session_start();
# Corrige problemas con las variables en ie
header('P3P: CP="CAO PSA OUR"');
# 
header( 'Content-Type: text/html;charset=utf-8' );
# Conexión
require("conf/conexion-insert.php");

# Modelo para insertar
include("model/insert-asignacion.php");

# Variables
$status = "";
$im1 = $_SESSION["im1"];
$idedit = $_SESSION["idedit"];
$conf = 'test';

# 
include('inc/head.php');
include('view/form.php');
?>