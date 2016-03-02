<?php 
include('calendar-config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
body {
  font-family: calibri;
}
a {
  text-decoration: none;
}
  </style>
</head>

<body>
<!-- 
history/lookup?hl=es-419&amp;max=1406613600000000&amp;month=7&amp;day=28&amp;yr=2014
-->
<table style="width:13em;">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>


<?php
# Total de Agendados al Día

    $dia = date(d);
  $mes = date(m);
  $ano = date(Y);

  $fecha_asignacionesHoy = ''.$ano.'-'.$mes.'-'.$dia.'';

  # $sql_asignacionesHoy = "SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha = '$fecha_asignacionesHoy' ";
  $sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_asignacionesHoy' AND horaasignacion != 'ok' ";
    $result_asignacionesHoy = mysql_query($sql_asignacionesHoy);
    $numero_asignacionesHoy = mysql_num_rows($result_asignacionesHoy);

# Marzo del 2015

      $color_fecha_asignaciones_00 = 'FFFFFF';

  $sql_fecha_asignaciones_01 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-01' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_01 = mysql_query($sql_fecha_asignaciones_01);
    $numero_fecha_asignaciones_01 = mysql_num_rows($result_fecha_asignaciones_01);
    
  if ($numero_fecha_asignaciones_01 == 0) {
      $color_fecha_asignaciones_01 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_01 == 1) {
      $color_fecha_asignaciones_01 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_01 == 2) {
      $color_fecha_asignaciones_01 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_01 == 3) {
      $color_fecha_asignaciones_01 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_01 == 4) {
      $color_fecha_asignaciones_01 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_01 >= 5 AND $numero_fecha_asignaciones_01 <= 10) {
      $color_fecha_asignaciones_01 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_01 >= 11 AND $numero_fecha_asignaciones_01 <= 20) {
      $color_fecha_asignaciones_01 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_01 >= 21 AND $numero_fecha_asignaciones_01 <= 30) {
      $color_fecha_asignaciones_01 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_01 >= 31 AND $numero_fecha_asignaciones_01 <= 40) {
      $color_fecha_asignaciones_01 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_01 >= 41 AND $numero_fecha_asignaciones_01 <= 50) {
      $color_fecha_asignaciones_01 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_01 >= 51) {
      $color_fecha_asignaciones_01 = 'd70098';
    }



    else { }

    $sql_fecha_asignaciones_02 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-02' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_02 = mysql_query($sql_fecha_asignaciones_02);
    $numero_fecha_asignaciones_02 = mysql_num_rows($result_fecha_asignaciones_02);

  if ($numero_fecha_asignaciones_02 == 0) {
      $color_fecha_asignaciones_02 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_02 == 1) {
      $color_fecha_asignaciones_02 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_02 == 2) {
      $color_fecha_asignaciones_02 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_02 == 3) {
      $color_fecha_asignaciones_02 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_02 == 4) {
      $color_fecha_asignaciones_02 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_02 >= 5 AND $numero_fecha_asignaciones_02 <= 10) {
      $color_fecha_asignaciones_02 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_02 >= 11 AND $numero_fecha_asignaciones_02 <= 20) {
      $color_fecha_asignaciones_02 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_02 >= 21 AND $numero_fecha_asignaciones_02 <= 30) {
      $color_fecha_asignaciones_02 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_02 >= 31 AND $numero_fecha_asignaciones_02 <= 40) {
      $color_fecha_asignaciones_02 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_02 >= 41 AND $numero_fecha_asignaciones_02 <= 50) {
      $color_fecha_asignaciones_02 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_02 >= 51) {
      $color_fecha_asignaciones_02 = 'd70098';
    }

    else { }

    $sql_fecha_asignaciones_03 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-03' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_03 = mysql_query($sql_fecha_asignaciones_03);
    $numero_fecha_asignaciones_03 = mysql_num_rows($result_fecha_asignaciones_03);

  if ($numero_fecha_asignaciones_03 == 0) {
      $color_fecha_asignaciones_03 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_03 == 1) {
      $color_fecha_asignaciones_03 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_03 == 2) {
      $color_fecha_asignaciones_03 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_03 == 3) {
      $color_fecha_asignaciones_03 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_03 == 4) {
      $color_fecha_asignaciones_03 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_03 >= 5 AND $numero_fecha_asignaciones_03 <= 10) {
      $color_fecha_asignaciones_03 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_03 >= 11 AND $numero_fecha_asignaciones_03 <= 20) {
      $color_fecha_asignaciones_03 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_03 >= 21 AND $numero_fecha_asignaciones_03 <= 30) {
      $color_fecha_asignaciones_03 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_03 >= 31 AND $numero_fecha_asignaciones_03 <= 40) {
      $color_fecha_asignaciones_03 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_03 >= 41 AND $numero_fecha_asignaciones_03 <= 50) {
      $color_fecha_asignaciones_03 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_03 >= 51) {
      $color_fecha_asignaciones_03 = 'd70098';
    }

    $sql_fecha_asignaciones_04 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-04' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_04 = mysql_query($sql_fecha_asignaciones_04);
    $numero_fecha_asignaciones_04 = mysql_num_rows($result_fecha_asignaciones_04);

  if ($numero_fecha_asignaciones_04 == 0) {
      $color_fecha_asignaciones_04 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_04 == 1) {
      $color_fecha_asignaciones_04 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_04 == 2) {
      $color_fecha_asignaciones_04 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_04 == 3) {
      $color_fecha_asignaciones_04 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_04 == 4) {
      $color_fecha_asignaciones_04 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_04 >= 5 AND $numero_fecha_asignaciones_04 <= 10) {
      $color_fecha_asignaciones_04 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_04 >= 11 AND $numero_fecha_asignaciones_04 <= 20) {
      $color_fecha_asignaciones_04 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_04 >= 21 AND $numero_fecha_asignaciones_04 <= 30) {
      $color_fecha_asignaciones_04 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_04 >= 31 AND $numero_fecha_asignaciones_04 <= 40) {
      $color_fecha_asignaciones_04 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_04 >= 41 AND $numero_fecha_asignaciones_04 <= 50) {
      $color_fecha_asignaciones_04 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_04 >= 51) {
      $color_fecha_asignaciones_04 = 'd70098';
    }

    $sql_fecha_asignaciones_05 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-05' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_05 = mysql_query($sql_fecha_asignaciones_05);
    $numero_fecha_asignaciones_05 = mysql_num_rows($result_fecha_asignaciones_05);

  if ($numero_fecha_asignaciones_05 == 0) {
      $color_fecha_asignaciones_05 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_05 == 1) {
      $color_fecha_asignaciones_05 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_05 == 2) {
      $color_fecha_asignaciones_05 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_05 == 3) {
      $color_fecha_asignaciones_05 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_05 == 4) {
      $color_fecha_asignaciones_05 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_05 >= 5 AND $numero_fecha_asignaciones_05 <= 10) {
      $color_fecha_asignaciones_05 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_05 >= 11 AND $numero_fecha_asignaciones_05 <= 20) {
      $color_fecha_asignaciones_05 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_05 >= 21 AND $numero_fecha_asignaciones_05 <= 30) {
      $color_fecha_asignaciones_05 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_05 >= 31 AND $numero_fecha_asignaciones_05 <= 40) {
      $color_fecha_asignaciones_05 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_05 >= 41 AND $numero_fecha_asignaciones_05 <= 50) {
      $color_fecha_asignaciones_05 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_05 >= 51) {
      $color_fecha_asignaciones_05 = 'd70098';
    }

    $sql_fecha_asignaciones_06 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-06' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_06 = mysql_query($sql_fecha_asignaciones_06);
    $numero_fecha_asignaciones_06 = mysql_num_rows($result_fecha_asignaciones_06);

  if ($numero_fecha_asignaciones_06 == 0) {
      $color_fecha_asignaciones_06 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_06 == 1) {
      $color_fecha_asignaciones_06 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_06 == 2) {
      $color_fecha_asignaciones_06 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_06 == 3) {
      $color_fecha_asignaciones_06 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_06 == 4) {
      $color_fecha_asignaciones_06 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_06 >= 5 AND $numero_fecha_asignaciones_06 <= 10) {
      $color_fecha_asignaciones_06 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_06 >= 11 AND $numero_fecha_asignaciones_06 <= 20) {
      $color_fecha_asignaciones_06 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_06 >= 21 AND $numero_fecha_asignaciones_06 <= 30) {
      $color_fecha_asignaciones_06 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_06 >= 31 AND $numero_fecha_asignaciones_06 <= 40) {
      $color_fecha_asignaciones_06 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_06 >= 41 AND $numero_fecha_asignaciones_06 <= 50) {
      $color_fecha_asignaciones_06 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_06 >= 51) {
      $color_fecha_asignaciones_06 = 'd70098';
    }

    $sql_fecha_asignaciones_07 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-07' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_07 = mysql_query($sql_fecha_asignaciones_07);
    $numero_fecha_asignaciones_07 = mysql_num_rows($result_fecha_asignaciones_07);

      if ($numero_fecha_asignaciones_07 == 0) {
      $color_fecha_asignaciones_07 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_07 == 1) {
      $color_fecha_asignaciones_07 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_07 == 2) {
      $color_fecha_asignaciones_07 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_07 == 3) {
      $color_fecha_asignaciones_07 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_07 == 4) {
      $color_fecha_asignaciones_07 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_07 >= 5 AND $numero_fecha_asignaciones_07 <= 10) {
      $color_fecha_asignaciones_07 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_07 >= 11 AND $numero_fecha_asignaciones_07 <= 20) {
      $color_fecha_asignaciones_07 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_07 >= 21 AND $numero_fecha_asignaciones_07 <= 30) {
      $color_fecha_asignaciones_07 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_07 >= 31 AND $numero_fecha_asignaciones_07 <= 40) {
      $color_fecha_asignaciones_07 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_07 >= 41 AND $numero_fecha_asignaciones_07 <= 50) {
      $color_fecha_asignaciones_07 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_07 >= 51) {
      $color_fecha_asignaciones_07 = 'd70098';
    }

    $sql_fecha_asignaciones_08 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-08' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_08 = mysql_query($sql_fecha_asignaciones_08);
    $numero_fecha_asignaciones_08 = mysql_num_rows($result_fecha_asignaciones_08);

  if ($numero_fecha_asignaciones_08 == 0) {
      $color_fecha_asignaciones_08 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_08 == 1) {
      $color_fecha_asignaciones_08 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_08 == 2) {
      $color_fecha_asignaciones_08 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_08 == 3) {
      $color_fecha_asignaciones_08 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_08 == 4) {
      $color_fecha_asignaciones_08 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_08 >= 5 AND $numero_fecha_asignaciones_08 <= 10) {
      $color_fecha_asignaciones_08 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_08 >= 11 AND $numero_fecha_asignaciones_08 <= 20) {
      $color_fecha_asignaciones_08 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_08 >= 21 AND $numero_fecha_asignaciones_08 <= 30) {
      $color_fecha_asignaciones_08 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_08 >= 31 AND $numero_fecha_asignaciones_08 <= 40) {
      $color_fecha_asignaciones_08 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_08 >= 41 AND $numero_fecha_asignaciones_08 <= 50) {
      $color_fecha_asignaciones_08 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_08 >= 51) {
      $color_fecha_asignaciones_08 = 'd70098';
    }

    $sql_fecha_asignaciones_09 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-09' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_09 = mysql_query($sql_fecha_asignaciones_09);
    $numero_fecha_asignaciones_09 = mysql_num_rows($result_fecha_asignaciones_09);

  if ($numero_fecha_asignaciones_09 == 0) {
      $color_fecha_asignaciones_09 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_09 == 1) {
      $color_fecha_asignaciones_09 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_09 == 2) {
      $color_fecha_asignaciones_09 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_09 == 3) {
      $color_fecha_asignaciones_09 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_09 == 4) {
      $color_fecha_asignaciones_09 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_09 >= 5 AND $numero_fecha_asignaciones_09 <= 10) {
      $color_fecha_asignaciones_09 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_09 >= 11 AND $numero_fecha_asignaciones_09 <= 20) {
      $color_fecha_asignaciones_09 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_09 >= 21 AND $numero_fecha_asignaciones_09 <= 30) {
      $color_fecha_asignaciones_09 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_09 >= 31 AND $numero_fecha_asignaciones_09 <= 40) {
      $color_fecha_asignaciones_09 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_09 >= 41 AND $numero_fecha_asignaciones_09 <= 50) {
      $color_fecha_asignaciones_09 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_09 >= 51) {
      $color_fecha_asignaciones_09 = 'd70098';
    }

    $sql_fecha_asignaciones_10 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-10' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_10 = mysql_query($sql_fecha_asignaciones_10);
    $numero_fecha_asignaciones_10 = mysql_num_rows($result_fecha_asignaciones_10);

  if ($numero_fecha_asignaciones_10 == 0) {
      $color_fecha_asignaciones_10 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_10 == 1) {
      $color_fecha_asignaciones_10 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_10 == 2) {
      $color_fecha_asignaciones_10 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_10 == 3) {
      $color_fecha_asignaciones_10 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_10 == 4) {
      $color_fecha_asignaciones_10 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_10 >= 5 AND $numero_fecha_asignaciones_10 <= 10) {
      $color_fecha_asignaciones_10 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_10 >= 11 AND $numero_fecha_asignaciones_10 <= 20) {
      $color_fecha_asignaciones_10 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_10 >= 21 AND $numero_fecha_asignaciones_10 <= 30) {
      $color_fecha_asignaciones_10 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_10 >= 31 AND $numero_fecha_asignaciones_10 <= 40) {
      $color_fecha_asignaciones_10 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_10 >= 41 AND $numero_fecha_asignaciones_10 <= 50) {
      $color_fecha_asignaciones_10 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_10 >= 51) {
      $color_fecha_asignaciones_10 = 'd70098';
    }

    $sql_fecha_asignaciones_11 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-11' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_11 = mysql_query($sql_fecha_asignaciones_11);
    $numero_fecha_asignaciones_11 = mysql_num_rows($result_fecha_asignaciones_11);

  if ($numero_fecha_asignaciones_11 == 0) {
      $color_fecha_asignaciones_11 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_11 == 1) {
      $color_fecha_asignaciones_11 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_11 == 2) {
      $color_fecha_asignaciones_11 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_11 == 3) {
      $color_fecha_asignaciones_11 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_11 == 4) {
      $color_fecha_asignaciones_11 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_11 >= 5 AND $numero_fecha_asignaciones_11 <= 10) {
      $color_fecha_asignaciones_11 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_11 >= 11 AND $numero_fecha_asignaciones_11 <= 20) {
      $color_fecha_asignaciones_11 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_11 >= 21 AND $numero_fecha_asignaciones_11 <= 30) {
      $color_fecha_asignaciones_11 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_11 >= 31 AND $numero_fecha_asignaciones_11 <= 40) {
      $color_fecha_asignaciones_11 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_11 >= 41 AND $numero_fecha_asignaciones_11 <= 50) {
      $color_fecha_asignaciones_11 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_11 >= 51) {
      $color_fecha_asignaciones_11 = 'd70098';
    }

    $sql_fecha_asignaciones_12 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-12' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_12= mysql_query($sql_fecha_asignaciones_12);
    $numero_fecha_asignaciones_12= mysql_num_rows($result_fecha_asignaciones_12);

  if ($numero_fecha_asignaciones_12 == 0) {
      $color_fecha_asignaciones_12 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_12 == 1) {
      $color_fecha_asignaciones_12 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_12 == 2) {
      $color_fecha_asignaciones_12 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_12 == 3) {
      $color_fecha_asignaciones_12 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_12 == 4) {
      $color_fecha_asignaciones_12 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_12 >= 5 AND $numero_fecha_asignaciones_12 <= 10) {
      $color_fecha_asignaciones_12 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_12 >= 11 AND $numero_fecha_asignaciones_12 <= 20) {
      $color_fecha_asignaciones_12 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_12 >= 21 AND $numero_fecha_asignaciones_12 <= 30) {
      $color_fecha_asignaciones_12 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_12 >= 31 AND $numero_fecha_asignaciones_12 <= 40) {
      $color_fecha_asignaciones_12 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_12 >= 41 AND $numero_fecha_asignaciones_12 <= 50) {
      $color_fecha_asignaciones_12 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_12 >= 51) {
      $color_fecha_asignaciones_12 = 'd70098';
    }

    $sql_fecha_asignaciones_13 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-13' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_13 = mysql_query($sql_fecha_asignaciones_13);
    $numero_fecha_asignaciones_13 = mysql_num_rows($result_fecha_asignaciones_13);

  if ($numero_fecha_asignaciones_13 == 0) {
      $color_fecha_asignaciones_13 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_13 == 1) {
      $color_fecha_asignaciones_13 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_13 == 2) {
      $color_fecha_asignaciones_13 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_13 == 3) {
      $color_fecha_asignaciones_13 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_13 == 4) {
      $color_fecha_asignaciones_13 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_13 >= 5 AND $numero_fecha_asignaciones_13 <= 10) {
      $color_fecha_asignaciones_13 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_13 >= 11 AND $numero_fecha_asignaciones_13 <= 20) {
      $color_fecha_asignaciones_13 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_13 >= 21 AND $numero_fecha_asignaciones_13 <= 30) {
      $color_fecha_asignaciones_13 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_13 >= 31 AND $numero_fecha_asignaciones_13 <= 40) {
      $color_fecha_asignaciones_13 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_13 >= 41 AND $numero_fecha_asignaciones_13 <= 50) {
      $color_fecha_asignaciones_13 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_13 >= 51) {
      $color_fecha_asignaciones_13 = 'd70098';
    }

    $sql_fecha_asignaciones_14 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-14' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_14 = mysql_query($sql_fecha_asignaciones_14);
    $numero_fecha_asignaciones_14 = mysql_num_rows($result_fecha_asignaciones_14);

      if ($numero_fecha_asignaciones_14 == 0) {
      $color_fecha_asignaciones_14 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_14 == 1) {
      $color_fecha_asignaciones_14 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_14 == 2) {
      $color_fecha_asignaciones_14 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_14 == 3) {
      $color_fecha_asignaciones_14 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_14 == 4) {
      $color_fecha_asignaciones_14 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_14 >= 5 AND $numero_fecha_asignaciones_14 <= 10) {
      $color_fecha_asignaciones_14 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_14 >= 11 AND $numero_fecha_asignaciones_14 <= 20) {
      $color_fecha_asignaciones_14 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_14 >= 21 AND $numero_fecha_asignaciones_14 <= 30) {
      $color_fecha_asignaciones_14 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_14 >= 31 AND $numero_fecha_asignaciones_14 <= 40) {
      $color_fecha_asignaciones_14 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_14 >= 41 AND $numero_fecha_asignaciones_14 <= 50) {
      $color_fecha_asignaciones_14 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_14 >= 51) {
      $color_fecha_asignaciones_14 = 'd70098';
    }

    $sql_fecha_asignaciones_15 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-15' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_15 = mysql_query($sql_fecha_asignaciones_15);
    $numero_fecha_asignaciones_15 = mysql_num_rows($result_fecha_asignaciones_15);

      if ($numero_fecha_asignaciones_15 == 0) {
      $color_fecha_asignaciones_15 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_15 == 1) {
      $color_fecha_asignaciones_15 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_15 == 2) {
      $color_fecha_asignaciones_15 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_15 == 3) {
      $color_fecha_asignaciones_15 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_15 == 4) {
      $color_fecha_asignaciones_15 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_15 >= 5 AND $numero_fecha_asignaciones_15 <= 10) {
      $color_fecha_asignaciones_15 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_15 >= 11 AND $numero_fecha_asignaciones_15 <= 20) {
      $color_fecha_asignaciones_15 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_15 >= 21 AND $numero_fecha_asignaciones_15 <= 30) {
      $color_fecha_asignaciones_15 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_15 >= 31 AND $numero_fecha_asignaciones_15 <= 40) {
      $color_fecha_asignaciones_15 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_15 >= 41 AND $numero_fecha_asignaciones_15 <= 50) {
      $color_fecha_asignaciones_15 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_15 >= 51) {
      $color_fecha_asignaciones_15 = 'd70098';
    }

    $sql_fecha_asignaciones_16 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-16' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_16 = mysql_query($sql_fecha_asignaciones_16);
    $numero_fecha_asignaciones_16 = mysql_num_rows($result_fecha_asignaciones_16);

    if ($numero_fecha_asignaciones_16 == 0) {
      $color_fecha_asignaciones_16 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_16 == 1) {
      $color_fecha_asignaciones_16 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_16 == 2) {
      $color_fecha_asignaciones_16 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_16 == 3) {
      $color_fecha_asignaciones_16 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_16 == 4) {
      $color_fecha_asignaciones_16 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_16 >= 5 AND $numero_fecha_asignaciones_16 <= 10) {
      $color_fecha_asignaciones_16 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_16 >= 11 AND $numero_fecha_asignaciones_16 <= 20) {
      $color_fecha_asignaciones_16 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_16 >= 21 AND $numero_fecha_asignaciones_16 <= 30) {
      $color_fecha_asignaciones_16 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_16 >= 31 AND $numero_fecha_asignaciones_16 <= 40) {
      $color_fecha_asignaciones_16 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_16 >= 41 AND $numero_fecha_asignaciones_16 <= 50) {
      $color_fecha_asignaciones_16 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_16 >= 51) {
      $color_fecha_asignaciones_16 = 'd70098';
    }

    $sql_fecha_asignaciones_17 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-17' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_17 = mysql_query($sql_fecha_asignaciones_17);
    $numero_fecha_asignaciones_17 = mysql_num_rows($result_fecha_asignaciones_17);

          if ($numero_fecha_asignaciones_17 == 0) {
      $color_fecha_asignaciones_17 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_17 == 1) {
      $color_fecha_asignaciones_17 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_17 == 2) {
      $color_fecha_asignaciones_17 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_17 == 3) {
      $color_fecha_asignaciones_17 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_17 == 4) {
      $color_fecha_asignaciones_17 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_17 >= 5 AND $numero_fecha_asignaciones_17 <= 10) {
      $color_fecha_asignaciones_17 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_17 >= 11 AND $numero_fecha_asignaciones_17 <= 20) {
      $color_fecha_asignaciones_17 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_17 >= 21 AND $numero_fecha_asignaciones_17 <= 30) {
      $color_fecha_asignaciones_17 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_17 >= 31 AND $numero_fecha_asignaciones_17 <= 40) {
      $color_fecha_asignaciones_17 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_17 >= 41 AND $numero_fecha_asignaciones_17 <= 50) {
      $color_fecha_asignaciones_17 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_17 >= 51) {
      $color_fecha_asignaciones_17 = 'd70098';
    }

    $sql_fecha_asignaciones_18 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-18' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_18 = mysql_query($sql_fecha_asignaciones_18);
    $numero_fecha_asignaciones_18 = mysql_num_rows($result_fecha_asignaciones_18);

          if ($numero_fecha_asignaciones_18 == 0) {
      $color_fecha_asignaciones_18 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_18 == 1) {
      $color_fecha_asignaciones_18 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_18 == 2) {
      $color_fecha_asignaciones_18 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_18 == 3) {
      $color_fecha_asignaciones_18 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_18 == 4) {
      $color_fecha_asignaciones_18 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_18 >= 5 AND $numero_fecha_asignaciones_18 <= 10) {
      $color_fecha_asignaciones_18 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_18 >= 11 AND $numero_fecha_asignaciones_18 <= 20) {
      $color_fecha_asignaciones_18 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_18 >= 21 AND $numero_fecha_asignaciones_18 <= 30) {
      $color_fecha_asignaciones_18 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_18 >= 31 AND $numero_fecha_asignaciones_18 <= 40) {
      $color_fecha_asignaciones_18 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_18 >= 41 AND $numero_fecha_asignaciones_18 <= 50) {
      $color_fecha_asignaciones_18 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_18 >= 51) {
      $color_fecha_asignaciones_18 = 'd70098';
    }

    $sql_fecha_asignaciones_19 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-19' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_19 = mysql_query($sql_fecha_asignaciones_19);
    $numero_fecha_asignaciones_19 = mysql_num_rows($result_fecha_asignaciones_19);

          if ($numero_fecha_asignaciones_19 == 0) {
      $color_fecha_asignaciones_19 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_19 == 1) {
      $color_fecha_asignaciones_19 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_19 == 2) {
      $color_fecha_asignaciones_19 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_19 == 3) {
      $color_fecha_asignaciones_19 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_19 == 4) {
      $color_fecha_asignaciones_19 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_19 >= 5 AND $numero_fecha_asignaciones_19 <= 10) {
      $color_fecha_asignaciones_19 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_19 >= 11 AND $numero_fecha_asignaciones_19 <= 20) {
      $color_fecha_asignaciones_19 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_19 >= 21 AND $numero_fecha_asignaciones_19 <= 30) {
      $color_fecha_asignaciones_19 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_19 >= 31 AND $numero_fecha_asignaciones_19 <= 40) {
      $color_fecha_asignaciones_19 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_19 >= 41 AND $numero_fecha_asignaciones_19 <= 50) {
      $color_fecha_asignaciones_19 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_19 >= 51) {
      $color_fecha_asignaciones_19 = 'd70098';
    }

    $sql_fecha_asignaciones_20 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-20' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_20 = mysql_query($sql_fecha_asignaciones_20);
    $numero_fecha_asignaciones_20 = mysql_num_rows($result_fecha_asignaciones_20);

          if ($numero_fecha_asignaciones_20 == 0) {
      $color_fecha_asignaciones_20 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_20 == 1) {
      $color_fecha_asignaciones_20 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_20 == 2) {
      $color_fecha_asignaciones_20 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_20 == 3) {
      $color_fecha_asignaciones_20 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_20 == 4) {
      $color_fecha_asignaciones_20 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_20 >= 5 AND $numero_fecha_asignaciones_20 <= 10) {
      $color_fecha_asignaciones_20 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_20 >= 11 AND $numero_fecha_asignaciones_20 <= 20) {
      $color_fecha_asignaciones_20 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_20 >= 21 AND $numero_fecha_asignaciones_20 <= 30) {
      $color_fecha_asignaciones_20 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_20 >= 31 AND $numero_fecha_asignaciones_20 <= 40) {
      $color_fecha_asignaciones_20 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_20 >= 41 AND $numero_fecha_asignaciones_20 <= 50) {
      $color_fecha_asignaciones_20 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_20 >= 51) {
      $color_fecha_asignaciones_20 = 'd70098';
    }

    $sql_fecha_asignaciones_21 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-21' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_21 = mysql_query($sql_fecha_asignaciones_21);
    $numero_fecha_asignaciones_21 = mysql_num_rows($result_fecha_asignaciones_21);

    if ($numero_fecha_asignaciones_21 == 0) {
      $color_fecha_asignaciones_21 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_21 == 1) {
      $color_fecha_asignaciones_21 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_21 == 2) {
      $color_fecha_asignaciones_21 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_21 == 3) {
      $color_fecha_asignaciones_21 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_21 == 4) {
      $color_fecha_asignaciones_21 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_21 >= 5 AND $numero_fecha_asignaciones_21 <= 10) {
      $color_fecha_asignaciones_21 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_21 >= 11 AND $numero_fecha_asignaciones_21 <= 20) {
      $color_fecha_asignaciones_21 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_21 >= 21 AND $numero_fecha_asignaciones_21 <= 30) {
      $color_fecha_asignaciones_21 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_21 >= 31 AND $numero_fecha_asignaciones_21 <= 40) {
      $color_fecha_asignaciones_21 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_21 >= 41 AND $numero_fecha_asignaciones_21 <= 50) {
      $color_fecha_asignaciones_21 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_21 >= 51) {
      $color_fecha_asignaciones_21 = 'd70098';
    }

    $sql_fecha_asignaciones_22 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-22' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_22 = mysql_query($sql_fecha_asignaciones_22);
    $numero_fecha_asignaciones_22 = mysql_num_rows($result_fecha_asignaciones_22);

    if ($numero_fecha_asignaciones_22 == 0) {
      $color_fecha_asignaciones_22 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_22 == 1) {
      $color_fecha_asignaciones_22 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_22 == 2) {
      $color_fecha_asignaciones_22 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_22 == 3) {
      $color_fecha_asignaciones_22 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_22 == 4) {
      $color_fecha_asignaciones_22 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_22 >= 5 AND $numero_fecha_asignaciones_22 <= 10) {
      $color_fecha_asignaciones_22 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_22 >= 11 AND $numero_fecha_asignaciones_22 <= 20) {
      $color_fecha_asignaciones_22 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_22 >= 21 AND $numero_fecha_asignaciones_22 <= 30) {
      $color_fecha_asignaciones_22 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_22 >= 31 AND $numero_fecha_asignaciones_22 <= 40) {
      $color_fecha_asignaciones_22 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_22 >= 41 AND $numero_fecha_asignaciones_22 <= 50) {
      $color_fecha_asignaciones_22 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_22 >= 51) {
      $color_fecha_asignaciones_22 = 'd70098';
    }

    $sql_fecha_asignaciones_23 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-23' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_23 = mysql_query($sql_fecha_asignaciones_23);
    $numero_fecha_asignaciones_23 = mysql_num_rows($result_fecha_asignaciones_23);

          if ($numero_fecha_asignaciones_23 == 0) {
      $color_fecha_asignaciones_23 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_23 == 1) {
      $color_fecha_asignaciones_23 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_23 == 2) {
      $color_fecha_asignaciones_23 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_23 == 3) {
      $color_fecha_asignaciones_23 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_23 == 4) {
      $color_fecha_asignaciones_23 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_23 >= 5 AND $numero_fecha_asignaciones_23 <= 10) {
      $color_fecha_asignaciones_23 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_23 >= 11 AND $numero_fecha_asignaciones_23 <= 20) {
      $color_fecha_asignaciones_23 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_23 >= 21 AND $numero_fecha_asignaciones_23 <= 30) {
      $color_fecha_asignaciones_23 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_23 >= 31 AND $numero_fecha_asignaciones_23 <= 40) {
      $color_fecha_asignaciones_23 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_23 >= 41 AND $numero_fecha_asignaciones_23 <= 50) {
      $color_fecha_asignaciones_23 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_23 >= 51) {
      $color_fecha_asignaciones_23 = 'd70098';
    }

    $sql_fecha_asignaciones_24 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-24' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_24 = mysql_query($sql_fecha_asignaciones_24);
    $numero_fecha_asignaciones_24 = mysql_num_rows($result_fecha_asignaciones_24);

    if ($numero_fecha_asignaciones_24 == 0) {
      $color_fecha_asignaciones_24 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_24 == 1) {
      $color_fecha_asignaciones_24 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_24 == 2) {
      $color_fecha_asignaciones_24 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_24 == 3) {
      $color_fecha_asignaciones_24 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_24 == 4) {
      $color_fecha_asignaciones_24 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_24 >= 5 AND $numero_fecha_asignaciones_24 <= 10) {
      $color_fecha_asignaciones_24 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_24 >= 11 AND $numero_fecha_asignaciones_24 <= 20) {
      $color_fecha_asignaciones_24 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_24 >= 21 AND $numero_fecha_asignaciones_24 <= 30) {
      $color_fecha_asignaciones_24 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_24 >= 31 AND $numero_fecha_asignaciones_24 <= 40) {
      $color_fecha_asignaciones_24 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_24 >= 41 AND $numero_fecha_asignaciones_24 <= 50) {
      $color_fecha_asignaciones_24 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_24 >= 51) {
      $color_fecha_asignaciones_24 = 'd70098';
    }

    $sql_fecha_asignaciones_25 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-25' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_25 = mysql_query($sql_fecha_asignaciones_25);
    $numero_fecha_asignaciones_25 = mysql_num_rows($result_fecha_asignaciones_25);

    if ($numero_fecha_asignaciones_25 == 0) {
      $color_fecha_asignaciones_25 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_25 == 1) {
      $color_fecha_asignaciones_25 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_25 == 2) {
      $color_fecha_asignaciones_25 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_25 == 3) {
      $color_fecha_asignaciones_25 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_25 == 4) {
      $color_fecha_asignaciones_25 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_25 >= 5 AND $numero_fecha_asignaciones_25 <= 10) {
      $color_fecha_asignaciones_25 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_25 >= 11 AND $numero_fecha_asignaciones_25 <= 20) {
      $color_fecha_asignaciones_25 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_25 >= 21 AND $numero_fecha_asignaciones_25 <= 30) {
      $color_fecha_asignaciones_25 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_25 >= 31 AND $numero_fecha_asignaciones_25 <= 40) {
      $color_fecha_asignaciones_25 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_25 >= 41 AND $numero_fecha_asignaciones_25 <= 50) {
      $color_fecha_asignaciones_25 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_25 >= 51) {
      $color_fecha_asignaciones_25 = 'd70098';
    }

    $sql_fecha_asignaciones_26 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-26' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_26 = mysql_query($sql_fecha_asignaciones_26);
    $numero_fecha_asignaciones_26 = mysql_num_rows($result_fecha_asignaciones_26);

    if ($numero_fecha_asignaciones_26 == 0) {
      $color_fecha_asignaciones_26 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_26 == 1) {
      $color_fecha_asignaciones_26 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_26 == 2) {
      $color_fecha_asignaciones_26 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_26 == 3) {
      $color_fecha_asignaciones_26 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_26 == 4) {
      $color_fecha_asignaciones_26 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_26 >= 5 AND $numero_fecha_asignaciones_26 <= 10) {
      $color_fecha_asignaciones_26 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_26 >= 11 AND $numero_fecha_asignaciones_26 <= 20) {
      $color_fecha_asignaciones_26 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_26 >= 21 AND $numero_fecha_asignaciones_26 <= 30) {
      $color_fecha_asignaciones_26 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_26 >= 31 AND $numero_fecha_asignaciones_26 <= 40) {
      $color_fecha_asignaciones_26 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_26 >= 41 AND $numero_fecha_asignaciones_26 <= 50) {
      $color_fecha_asignaciones_26 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_26 >= 51) {
      $color_fecha_asignaciones_26 = 'd70098';
    }

    $sql_fecha_asignaciones_27 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-27' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_27 = mysql_query($sql_fecha_asignaciones_27);
    $numero_fecha_asignaciones_27 = mysql_num_rows($result_fecha_asignaciones_27);

    if ($numero_fecha_asignaciones_27 == 0) {
      $color_fecha_asignaciones_27 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_27 == 1) {
      $color_fecha_asignaciones_27 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_27 == 2) {
      $color_fecha_asignaciones_27 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_27 == 3) {
      $color_fecha_asignaciones_27 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_27 == 4) {
      $color_fecha_asignaciones_27 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_27 >= 5 AND $numero_fecha_asignaciones_27 <= 10) {
      $color_fecha_asignaciones_27 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_27 >= 11 AND $numero_fecha_asignaciones_27 <= 20) {
      $color_fecha_asignaciones_27 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_27 >= 21 AND $numero_fecha_asignaciones_27 <= 30) {
      $color_fecha_asignaciones_27 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_27 >= 31 AND $numero_fecha_asignaciones_27 <= 40) {
      $color_fecha_asignaciones_27 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_27 >= 41 AND $numero_fecha_asignaciones_27 <= 50) {
      $color_fecha_asignaciones_27 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_27 >= 51) {
      $color_fecha_asignaciones_27 = 'd70098';
    }

    $sql_fecha_asignaciones_28 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-28' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_28 = mysql_query($sql_fecha_asignaciones_28);
    $numero_fecha_asignaciones_28 = mysql_num_rows($result_fecha_asignaciones_28);

    if ($numero_fecha_asignaciones_28 == 0) {
      $color_fecha_asignaciones_28 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_28 == 1) {
      $color_fecha_asignaciones_28 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_28 == 2) {
      $color_fecha_asignaciones_28 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_28 == 3) {
      $color_fecha_asignaciones_28 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_28 == 4) {
      $color_fecha_asignaciones_28 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_28 >= 5 AND $numero_fecha_asignaciones_28 <= 10) {
      $color_fecha_asignaciones_28 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_28 >= 11 AND $numero_fecha_asignaciones_28 <= 20) {
      $color_fecha_asignaciones_28 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_28 >= 21 AND $numero_fecha_asignaciones_28 <= 30) {
      $color_fecha_asignaciones_28 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_28 >= 31 AND $numero_fecha_asignaciones_28 <= 40) {
      $color_fecha_asignaciones_28 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_28 >= 41 AND $numero_fecha_asignaciones_28 <= 50) {
      $color_fecha_asignaciones_28 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_28 >= 51) {
      $color_fecha_asignaciones_28 = 'd70098';
    }

    $sql_fecha_asignaciones_29 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-29' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_29 = mysql_query($sql_fecha_asignaciones_29);
    $numero_fecha_asignaciones_29 = mysql_num_rows($result_fecha_asignaciones_29);

    if ($numero_fecha_asignaciones_29 == 0) {
      $color_fecha_asignaciones_29 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_29 == 1) {
      $color_fecha_asignaciones_29 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_29 == 2) {
      $color_fecha_asignaciones_29 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_29 == 3) {
      $color_fecha_asignaciones_29 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_29 == 4) {
      $color_fecha_asignaciones_29 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_29 >= 5 AND $numero_fecha_asignaciones_29 <= 10) {
      $color_fecha_asignaciones_29 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_29 >= 11 AND $numero_fecha_asignaciones_29 <= 20) {
      $color_fecha_asignaciones_29 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_29 >= 21 AND $numero_fecha_asignaciones_29 <= 30) {
      $color_fecha_asignaciones_29 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_29 >= 31 AND $numero_fecha_asignaciones_29 <= 40) {
      $color_fecha_asignaciones_29 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_29 >= 41 AND $numero_fecha_asignaciones_29 <= 50) {
      $color_fecha_asignaciones_29 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_29 >= 51) {
      $color_fecha_asignaciones_29 = 'd70098';
    }

    $sql_fecha_asignaciones_30 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-30' AND horaasignacion != 'ok' ";
    $result_fecha_asignaciones_30 = mysql_query($sql_fecha_asignaciones_30);
    $numero_fecha_asignaciones_30 = mysql_num_rows($result_fecha_asignaciones_30);

    if ($numero_fecha_asignaciones_30 == 0) {
      $color_fecha_asignaciones_30 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_30 == 1) {
      $color_fecha_asignaciones_30 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_30 == 2) {
      $color_fecha_asignaciones_30 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_30 == 3) {
      $color_fecha_asignaciones_30 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_30 == 4) {
      $color_fecha_asignaciones_30 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_30 >= 5 AND $numero_fecha_asignaciones_30 <= 10) {
      $color_fecha_asignaciones_30 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_30 >= 11 AND $numero_fecha_asignaciones_30 <= 20) {
      $color_fecha_asignaciones_30 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_30 >= 21 AND $numero_fecha_asignaciones_30 <= 30) {
      $color_fecha_asignaciones_30 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_30 >= 31 AND $numero_fecha_asignaciones_30 <= 40) {
      $color_fecha_asignaciones_30 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_30 >= 41 AND $numero_fecha_asignaciones_30 <= 50) {
      $color_fecha_asignaciones_30 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_30 >= 51) {
      $color_fecha_asignaciones_30 = 'd70098';
    }

        $sql_fecha_asignaciones_31 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '2016-12-31' AND horaasignacion != 'ok' ";
        $result_fecha_asignaciones_31 = mysql_query($sql_fecha_asignaciones_31);
        $numero_fecha_asignaciones_31 = mysql_num_rows($result_fecha_asignaciones_31);

    if ($numero_fecha_asignaciones_31 == 0) {
      $color_fecha_asignaciones_31 = 'FFFFFF';
    }

    else if ($numero_fecha_asignaciones_31 == 1) {
      $color_fecha_asignaciones_31 = 'D4E0F0';
    }

    else if ($numero_fecha_asignaciones_31 == 2) {
      $color_fecha_asignaciones_31 = '92B9F0';
    }

    else if ($numero_fecha_asignaciones_31 == 3) {
      $color_fecha_asignaciones_31 = '79ABF0';
    }

    else if ($numero_fecha_asignaciones_31 == 4) {
      $color_fecha_asignaciones_31 = '4D90F0';
    }

    else if ($numero_fecha_asignaciones_31 >= 5 AND $numero_fecha_asignaciones_31 <= 10) {
      $color_fecha_asignaciones_31 = '1273ff';
    }

    else if ($numero_fecha_asignaciones_31 >= 11 AND $numero_fecha_asignaciones_31 <= 20) {
      $color_fecha_asignaciones_31 = 'ffe0f6';
    }

    else if ($numero_fecha_asignaciones_31 >= 21 AND $numero_fecha_asignaciones_31 <= 30) {
      $color_fecha_asignaciones_31 = 'feabe6';
    }

    else if ($numero_fecha_asignaciones_31 >= 31 AND $numero_fecha_asignaciones_31 <= 40) {
      $color_fecha_asignaciones_31 = 'ff74d6';
    }

    else if ($numero_fecha_asignaciones_31 >= 41 AND $numero_fecha_asignaciones_31 <= 50) {
      $color_fecha_asignaciones_31 = 'fe46c8';
    }

    else if ($numero_fecha_asignaciones_31 >= 51) {
      $color_fecha_asignaciones_31 = 'd70098';
    }
?>

        <table>
          <tbody>
              <!--
            <tr>
              <td style="text-align:left" width="100%"><h6>Calendario en desarrollo (No muestra datos reales)</h6></td>
            </tr>
              -->
            <tr>
              <td class="calcell" style="text-align:left;color:#999999">Dic 2016</td>
              <td class="calcell">
              </td>
            </tr>
          </tbody>
        </table>

<table width="90%">
  <tbody>
  <tr>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">L</font></span></td>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">M</font></span></td>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">M</font></span></td>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">J</font></span></td>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">V</font></span></td>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">S</font></span></td>
    <td class="calcell" style="text-align:center" width="14%"><span><font color="#333333">D</font></span></td>
  </tr>
  <tr>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Dic 30"><font color="#333333"></font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Dic 30"><font color="#333333"></font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Dic 30"><font color="#333333"></font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_01 ?>"><span><a href="today?d=01&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Dic 1"><font color="#333333">1</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_02 ?>"><span><a href="today?d=02&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_02 ?> llamadas programadas para: Dic 2"><font color="#333333">2</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_03 ?>"><span><a href="today?d=03&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_03 ?> llamadas programadas para: Dic 3"><font color="#333333">3</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_04 ?>"><span><a href="today?d=04&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_04 ?> llamadas programadas para: Dic 4"><font color="#333333">4</font></a></span></td>
  </tr>
  <tr>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_05 ?>"><span><a href="today?d=05&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_05 ?> llamadas programadas para: Dic 5"><font color="#333333">5</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_06 ?>"><span><a href="today?d=06&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_06 ?> llamadas programadas para: Dic 6"><font color="#333333">6</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_07 ?>"><span><a href="today?d=07&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_07 ?> llamadas programadas para: Dic 7"><font color="#333333">7</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_08 ?>"><span><a href="today?d=08&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_08 ?> llamadas programadas para: Dic 8"><font color="#333333">8</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_09 ?>"><span><a href="today?d=09&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_09 ?> llamadas programadas para: Dic 9"><font color="#333333">9</font></a></span></td>    
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_10 ?>"><span><a href="today?d=10&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_10 ?> llamadas programadas para: Dic 10"><font color="#333333">10</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_11 ?>"><span><a href="today?d=11&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_11 ?> llamadas programadas para: Dic 11"><font color="#333333">11</font></a></span></td>
  </tr>
  <tr>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_12 ?>"><span><a href="today?d=12&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_12 ?> llamadas programadas para: Dic 12"><font color="#333333">12</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_13 ?>"><span><a href="today?d=13&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_13 ?> llamadas programadas para: Dic 13"><font color="#333333">13</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_14 ?>"><span><a href="today?d=14&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_14 ?> llamadas programadas para: Dic 14"><font color="#333333">14</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_15 ?>"><span><a href="today?d=15&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_15 ?> llamadas programadas para: Dic 15"><font color="#333333">15</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_16 ?>"><span><a href="today?d=16&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_16 ?> llamadas programadas para: Dic 16"><font color="#333333">16</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_17 ?>"><span><a href="today?d=17&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_17 ?> llamadas programadas para: Dic 17"><font color="#333333">17</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_18 ?>"><span><a href="today?d=18&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_18 ?> llamadas programadas para: Dic 18"><font color="#333333">18</font></a></span></td>
  </tr>
  <tr>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_19 ?>"><span><a href="today?d=19&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_19 ?> llamadas programadas para: Dic 19"><font color="#333333">19</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_20 ?>"><span><a href="today?d=20&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_20 ?> llamadas programadas para: Dic 20"><font color="#333333">20</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_21 ?>"><span><a href="today?d=21&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_21 ?> llamadas programadas para: Dic 21"><font color="#333333">21</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_22 ?>"><span><a href="today?d=22&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_22 ?> llamadas programadas para: Dic 22"><font color="#333333">22</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_23 ?>"><span><a href="today?d=23&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_23 ?> llamadas programadas para: Dic 23"><font color="#333333">23</font></a></span></td>
        <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_24 ?>"><span><a href="today?d=24&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_24 ?> llamadas programadas para: Dic 24"><font color="#333333">24</font></a></span></td>
        <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_25 ?>"><span><a href="today?d=25&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_25 ?> llamadas programadas para: Dic 25"><font color="#333333">25</font></a></span></td>
  </tr>
  <tr>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_26 ?>"><span><a href="today?d=26&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_26 ?> llamadas programadas para: Dic 26"><font color="#333333">26</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_27 ?>"><span><a href="today?d=27&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_27 ?> llamadas programadas para: Dic 27"><font color="#333333">27</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_28 ?>"><span><a href="today?d=28&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_28 ?> llamadas programadas para: Dic 28"><font color="#333333">28</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_29 ?>"><span><a href="today?d=29&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_29 ?> llamadas programadas para: Dic 29"><font color="#333333">29</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_30 ?>"><span><a href="today?d=30&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_30 ?> llamadas programadas para: Dic 30"><font color="#333333">30</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_30 ?>"><span><a href="today?d=31&m=12&y=2016<?= $filtrarporvendedorADM ?>" title="<?= $numero_fecha_asignaciones_31 ?> llamadas programadas para: Dic 31"><font color="#333333">31</font></a></span></td>
    <td class="calcell" style="text-align:center" width="14%" bgcolor="<?= $color_fecha_asignaciones_00 ?>"><span><a href="#" title="<?= $numero_fecha_asignaciones_01 ?> llamadas programadas para: Dic 30"><font color="#333333"></font></a></span></td>
    </tr>
  </tbody>
</table>


<?php
include('calendar-info.php');
?>
    </td>
    <td>&nbsp;</td>
  </tr>
  </tbody>
</table>

</body>

</html>