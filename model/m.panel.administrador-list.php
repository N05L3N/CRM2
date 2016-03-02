<tr>
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active" colspan="5">

<div class="row">
  <div class="col-md-2">
    <a href="panel.php?dataview=grid">
        <button type="submit" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-th"></span> Vista Detallada
        </button>
      </a>
  </div>
  <div class="col-md-2">
        <a href="panel.php?dataview=list">
          <button type="submit" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-th-list"></span> Vista Compacta
          </button>
        </a>
  </div>
  <div class="col-md-8"></div>
</div>

  </th>
<?php
}
else {

  include('model/m.menu-superior-vendedor.php');
?>

  <th class="active">
    <ul>
      <li><a href="">Hoy » <button type="button" class="btn btn-success btn-xs"><?= $numero_asignacionesHoy ?></button></a></li>
      <li><a href="">Asignaciones » <button type="button" class="btn btn-primary btn-xs"><?= $numero_asignacionesTotal ?></button></a></li>
      <li><a href="">Atrasados » <button type="button" class="btn btn-danger btn-xs"> <?= $numero_pendientes?></button></a></li>
    </ul>
  </th>
  <th colspan="2"></th>


<?php
}
?>  
</tr>







<tr>
  <!--<th class="active">No:</th>-->
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active" width="5%">Folio</th>
  <th class="active" width="80%">Comentario</th>
  <th class="active" width="10%">Vendedor</th>
  <th class="active" width="5%">Estado de la Venta</th>
<?php
}
else {
?>
  <th class="active">Información General</th>
  <th class="active" width="20%">Datos del Cliente</th>
  <th class="active">Estado de la Venta</th>
<?php
}
?>  
  
</tr>
<!-- Primera Columna -->
<?php
  # mysql_query ("SET NAMES 'utf8'");

  $per_page = 300;


$select = 'asignadoa, ciudad, comentarios, email, equipodeinteres, estado, fecha, formulario, id, lada, nombre, nombre_recomendador, pais, telefono, usuario';
$buscador = $_SESSION['buscador'];

  if ($buscador != '') {
      $result = mysql_query("SELECT $select FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR formulario LIKE '%$buscador%' OR id LIKE '%$buscador%' ORDER BY fecha desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
  }

  else {



  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor == '') {
          $result = mysql_query("SELECT $select FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
      }
      else {
          $result = mysql_query("SELECT $select FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");
      }
  }

  else {
      if ($filtrarporvendedor == '') {
        $result = mysql_query("SELECT $select FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");   
      }
      else {
       $result = mysql_query("SELECT $select FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");   
      }
  }


  } # Buscador
  
  # SELECT $select FROM contacto WHERE fecha <= '2014-03-20' AND fecha >= '2014-03-26' ORDER BY fecha desc, id desc
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    
    if ($i > 0) {

    }



?>
<tr  onmouseover="javascript:mostrar<?= $row['id'] ?>();" onmouseout="javascript:ocultar<?= $row['id'] ?>();" style="font-size:12px;">
  
  <td style="background-color:#ffffff;" width="20">
<style>
.off<?= $row['id'] ?> {
  height: 0px;
  display: none;
  -webkit-transition: all 5s ease;
  -moz-transition: all 5s ease;
  -ms-transition: all 5s ease;
  -o-transition: all 5s ease;
  transition: all 5s ease;
}

.on<?= $row['id'] ?> {
 display: block; 
 -webkit-transition: all 5s ease;
-moz-transition: all 5s ease;
-ms-transition: all 5s ease;
-o-transition: all 5s ease;
transition: all 5s ease;
}

</style>
<script type="text/javascript">

  function mostrar<?= $row['id'] ?> () {
    $(".datos<?= $row['id'] ?>").addClass("on<?= $row['id'] ?>");
    $(".datos<?= $row['id'] ?>").removeClass("off<?= $row['id'] ?>");
  }

  function ocultar<?= $row['id'] ?> () {
    $(".datos<?= $row['id'] ?>").removeClass("on<?= $row['id'] ?>");
    $(".datos<?= $row['id'] ?>").addClass("off<?= $row['id'] ?>");

  }

</script>
    <a href="cliente.php?id=<?= $row['id'] ?>&vendedor=<?= $row['asignadoa'] ?>" style="text-decoration:none; color:black;">
    <?= $row['id'] ?>
  </a>
  </td>
  
  <td>
    <a href="cliente.php?id=<?= $row['id'] ?>&vendedor=<?= $row['asignadoa'] ?>" style="text-decoration:none; color:black;">
    <div id="<?= $row['id'] ?>"></div>
    <p data-toggle="tooltip" data-placement="left" title="<?= $row['comentarios'] ?>"><?= substr($row['comentarios'], 0, 300); ?></p>
  </a>

<div class="datos<?= $row['id'] ?> off<?= $row['id'] ?>">
  <a href="cliente.php?id=<?= $row['id'] ?>&vendedor=<?= $row['asignadoa'] ?>" style="text-decoration:none; color:black;">
  <div style="font-size:13px;">
      
      <b>Folio:</b> <?= $row['id'] ?>
      <br />

      <b>Nombre:</b> <?= $row['nombre'] ?><?= $row['apellidos'] ?>
      <br />
      
      <b>E-mail:</b> <?= $row['email'] ?>
      <br />
      
      <b>Télefono:</b><?= $row['lada'] ?> <?= $row['telefono'] ?>
      <br />

      <b>Pais:</b> <?= $row['pais'] ?>
      <br />

      <b>Estado:</b> <?= $row['estado'] ?>
      <br />

      <b>Ciudad:</b> <?= $row['ciudad'] ?>
      <br />

      <b>Interesado en:</b> <?= $row['equipodeinteres'] ?>
      <br />
      

<?php 
  $fechaE = explode("-", $row['fecha']);
?>
      <b>Fecha:</b> <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>
      <br />
      
<?php
  if ($row['formulario'] == 'RYG' OR $row['formulario'] == 'RYG1') {
?>
      <b>Registro de:</b> Recomienda y Gana
      <br />          
        <b>Correo del recomendador:</b> <?= ''.$row['usuario'].'@avanceytec.com.mx' ?>
        <br />
        <b>Nombre del recomendador:</b> <?= ''.$row['nombre_recomendador'].''; ?>
<?php  

  }

  else {
?>
        <b>Registro de:</b> <acronym title="<?= $row['formulario'] ?>">Seguimiento</acronym>
<?php
  }
?>
      
  </div>
</a>
</div>

  </td>
  
<?php  

if ($filtrarporvendedor == '') {
?>
<td style="background-color:#ffffff;">
<?php
  include('inc/i.form.asignar-seguimiento-list.php');
?>
</td>
<?php
}
else {
  
}

# Incluye un TD width 300
?>
<td width="100">
<?php include('model/m.panel.administrador.td5-list.php');?>
</td>



  
</tr>
<?php
      
  }
  
  $i++;
  $cont++;
?>