<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="es-mx">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script type="text/javascript">
function mostrardiv() {
div = document.getElementById('flotante');
div.style.display = '';
}

function cerrar() {
div = document.getElementById('flotante');
div.style.display='none';
}

function mostrardiv2() {
div = document.getElementById('flotante2');
div.style.display = '';
}

function cerrar2() {
div = document.getElementById('flotante2');
div.style.display='none';
}
</script>

<script type="text/javascript" src="js/verificador.js"></script>
<script type="text/javascript" src="js/wforms.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
<link type="text/css" rel="stylesheet"href="css/form-style.css" media="screen" />

<script type="text/javascript">
wFORMS.behaviors['validation'].errMsg_email = "------";
wFORMS.behaviors['validation'].errMsg_integer = "------";
wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados ='%%' \nPor favor, cheque la informaci&oacute;n suministrada."; // %% will be replaced by the actual number of errors
</script>
<title></title>


<style>
.f1 {font-size:14px; color:#1b291d}
.obl {font-size:16px; color:#ff0000; font-weight:bold;}
<?php 
$obl = '<span class="obl">* </span>';?>
</style>


</head>