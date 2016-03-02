<div style="font-size:13px;">
      
      <b>Folio:</b> <?= $row2['id'] ?>
      <br />

      <b>Nombre:</b> <?= $row2['nombre'] ?><?= $row2['apellidos'] ?>
      <br />
      
      <b>E-mail:</b> <?= $row2['email'] ?>
      <br />
      
      <b>Télefono:</b><?= $row2['lada'] ?> <?= $row2['telefono'] ?>
      <br />

      <b>Pais:</b> <?= $row2['pais'] ?>
      <br />

      <b>Estado:</b> <?= $row2['estado'] ?>
      <br />

      <b>Ciudad:</b> <?= $row2['ciudad'] ?>
      <br />

      <b>Interesado en:</b> <?= $row2['equipodeinteres'] ?>
      <br />
      
      <b>Registro de:</b> <?= $row2['formulario'] ?>
      <br />

<?php 
  $fechaE = explode("-", $row2['fecha']);
?>
      <b>Fecha:</b> <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>
      <br />
      
  </div>