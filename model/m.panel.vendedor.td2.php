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
      
      <b>Registro de:</b> <?= $row['formulario'] ?>
      <br />

<?php 
  $fechaE = explode("-", $row['fecha']);
?>
      <b>Fecha:</b> <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>
      <br />
      
  </div>