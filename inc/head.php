<?php

include('controller/databases.php');

?>

<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="assets/ico/favicon.png">

<title><?= ''.$mt_title.'-'.$_SESSION['titleMensaje'].'-'.$_SESSION['dataview'].''?></title>
<script type="text/javascript"> setInterval(function() { var myelement = document.getElementById('myimg'); myelement.src = 'image.jpg?rand=' + Math.random(); }, 100000); </script>

<!-- Pagination -->
<link href="css/pagination.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="dist/css/bootstrap-theme.css" rel="stylesheet">

<?php

if ($id_view == 'login') {
echo '<link href="signin.css" rel="stylesheet">';
}

else if ($id_view == 'usuarios') {
?>
<link href="dashboard.css" rel="stylesheet">
<?php
}








# Registrar Cliente ID View

else if ( $id_view == 'registrar_cliente') {

?>

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="signin.css" rel="stylesheet">
<link href="theme.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>

<script src="js/jquery-ui.js"></script>

<script type="text/javascript">
    
    $(function(){
        $("#fechaprogramadaparavisita" ).datepicker({ 
            //minDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });

    $(function(){
        $("#proximavisita" ).datepicker({ 
            minDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });


    
</script>
<!-- Calendario -->

<?php

    if ($departamento == 'consumibles' OR $departamento == 'telemarketing' OR $departamento == 'ventascampo') {

?>

    <link href="dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="js/verificador-registrar_cliente.consumibles.js"></script>

<?php

    }
    else { 
    
?>

    <link href="dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="js/verificador-registrar_cliente.js"></script>

<?php 

    }

}
















else if ( $id_view == 'cliente') {
?>
<link href="dashboard.css" rel="stylesheet">
<script type="text/javascript" src="js/verificador-cliente.js"></script>
<?php

}

else if ($id_view == 'bitacoras') {
?>

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="signin.css" rel="stylesheet">
<link href="theme.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">

    $(function(){
        $( "#datepickerDesde" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    $(function(){
        $( "#datepickerHasta" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>
<!-- Calendario -->

<?php
}

else if ($id_view == 'history') {

?>

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="signin.css" rel="stylesheet">
<link href="theme.css" rel="stylesheet">
<script src="js/jquery-1.10.2.js"></script>

<script src="js/jquery-ui.js"></script>

<script type="text/javascript">

    $(function(){
        $( "#datepickerDesde" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    $(function(){
        $( "#datepickerHasta" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>
<!-- Calendario -->

<?php
}

else if ($id_view == 'consultas') {

?>

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="signin.css" rel="stylesheet">
<link href="theme.css" rel="stylesheet">

<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>


<script type="text/javascript">

    $(function(){
        $( "#datepickerDesde" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    $(function(){
        $( "#datepickerHasta" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    $(function(){
        $( "#datepickerDesde2" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    $(function(){
        $( "#datepickerHasta2" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>
<!-- Calendario -->

<?php
}

else if ($id_view == 'seguimientos.actualizar-venta') {
echo '<link href="dashboard.css" rel="stylesheet">';

?>

<!-- Calendario -->
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">

    $(function(){
        $( "#datepicker" ).datepicker({ 
            minDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    $(function(){
        $( "#datepickerfechaventa" ).datepicker({ 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>
<!-- Calendario -->


<script type="text/javascript" src="js/verificador-cliente.js"></script>
<script type="text/javascript" src="js/wforms.js"></script>
<script type="text/javascript">
wFORMS.behaviors['validation'].errMsg_email = "Ingresar un e-mail valido";
wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados ='%%' \nPor favor, cheque la información suministrada."; // %% will be replaced by the actual number of errors
wFORMS.behaviors['validation'].errMsg_integer = "Poner numero.";
wFORMS.behaviors['validation'].errMsg_notification = "Total de errores detectados:(%%)\n Verifique los campos marcados:(----).\n Datos sugeridos: \n 1.- Correo@dominio.com.\n 2.- Lada: (Numeros) Tel: (Numeros)"; // %% will be replaced by the actual number of errors
</script>    
<?php
}
else {
echo '<link href="signin.css" rel="stylesheet">';
echo '<link href="theme.css" rel="stylesheet">';
}
?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../../assets/js/html5shiv.js"></script>
<script src="../../assets/js/respond.min.js"></script>
<![endif]-->

<!-- Paginación -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>-->

<?php

if ($id_view == 'seguimientos.actualizar-venta' OR $id_view == 'bitacoras' OR $id_view == 'history' OR $id_view == 'consultas' OR $id_view == 'registrar_cliente') {
}

else {
?>
<script type="text/javascript" src="inc/jquery.min.js"></script>
<?php	
}
?>



<link rel="stylesheet" href="main.css" />    
<!-- /Paginación -->

</head>
<?php
    
    if ($id_view == 'consultas') {

?>



<body>
<!--
<body class="modal-open" onload="cargando()" id="body">
<script>
function cargando () {
    $("#processing-modalXXX").addClass("offXXX");
    $("#processing-modalXXX").removeClass("onXXX");
    
    $("#body").removeClass("modal-open");
    $("#lasombra").removeClass("modal-backdrop fade in");
    }
$(document).on('ready', cargando);
</script>
-->

<!-- 
<script src="js/jquery.blockUI.js"></script>
<script type="text/javascript"> 
$(document).ready(function() { 
    $('#demo2').ready(function() { 
        $.blockUI({ css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff' 
        } }); 
 
        setTimeout($.unblockUI, 2000); 
    }); 
}); 

</script> 
<div id="demo2" style="display:none;"> </div>
-->
        <?php
    }
    else {
        ?>
        <body>
        <?php
    }
?>

<img src="image.jpg" width="1" height="1" id="myimg" />