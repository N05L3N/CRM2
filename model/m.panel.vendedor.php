  <tr>
      <th class="active" align="center" width="10" style="background-color:white;"></th>
      <th class="active" width="200" style="background-color:white;">Información general</th>
      <th class="active" width="200" style="background-color:white;">Comentario</th>      
      <th class="active" style="background-color:white;"></th>
  </tr>

<!-- Primera Columna -->
<?php
  # mysql_query ("SET NAMES 'utf8'");
  # Comentar el SET NAMES Evita código de acentos

$buscador = $_SESSION['buscador'];

# Todas las asignaciones
# $per_page = $_SESSION['numero_asignacionesTotal'];
$per_page = '100';

  if ($buscador != '') {
      $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
  }

  else {

    if ($fecha_inicio_filtro == '--') {
      $result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
    }

    else {
      $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND asignadoa = '$usuario' ORDER BY fechaasignacion desc, id desc limit $start,500");
      # SELECT * FROM contacto WHERE fecha <= '2014-03-20' AND fecha >= '2014-03-26' ORDER BY fecha desc, id desc
    }

  } // Termina IF del Buscador


  
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    
    if ($i > 0) {
    }



if ( $row['asignadoa'] == $usuario) {
  # if ( $row['fecha'] >= '2014-08-28') { # Fecha de condición equipo
    if ( $row['fecha'] >= '2000-08-28') { 
  


  











      echo "<tr>";
?>
    <td style="background-color:#ffffff;" width="5%">
        <?php include('model/m.panel.vendedor.td1.php');?>
    </td>
    <td style="background-color:#ffffff;" width="20%">
        <?php include('model/m.panel.vendedor.td2.php');?>
    </td>
    <td style="background-color:#ffffff;" width="50%">
        <?php include('model/m.panel.vendedor.td3.php');?>
    </td>
    <td style="background-color:#ffffff;" width="25%">
      <?php include('model/m.panel.vendedor.td5.php');?>
    </td>

<?php

        echo "</tr>";


} // Filtro por busqueda por fecha 
else {
  
}


} // Filtro por busqueda por usuario 
else {
  
}

  }

  $i++;
?>