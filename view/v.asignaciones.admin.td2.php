<?php 
  $fechaE = explode("-", $rows['fecha']);
?>

<div style="font-size:13px;" id="<?= $rows['id'] ?>">

<table class="table table-bordered table-condensed table-striped" style="font-size:12px; margin:0;">
      <tr>
            <th>
                  Folio:
            </th>
            <td>
                  <?= $rows['id'] ?>
            </td>
      </tr>
      <tr><th>Nombre: </th><td><?= $rows['nombre'] ?><?= $rows['apellidos'] ?></td></tr>
      <tr><th>Email: </th><td><?= $rows['email'] ?></td></tr>
      <tr><th>Télefono: </th><td><?= $rows['lada'] ?> <?= $rows['telefono'] ?></td></tr>
      <tr><th>Pais: </th><td><?= $rows['pais'] ?></td></tr>
      <tr><th>Estado: </th><td><?= $rows['estado'] ?></td></tr>
      <tr><th>Ciudad: </th><td><?= $rows['ciudad'] ?></td></tr>
      <tr><th>Interesado en: </th><td><?= $rows['equipodeinteres'] ?></td></tr>
      <tr><th>Registro de: </th><td><?= $rows['formulario'] ?></td></tr>
      <tr><th>Fecha: </th><td><?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?></td></tr>

      


<?php
      if ($rows['formulario'] == 'RYG' OR $rows['formulario'] == 'RYG1') {
?>

      <tr><th>Registro de: </th><td>Recomienda y Gana</td></tr>
      <tr><th>Correo del recomendador:</th><td><?= ''.$rows['usuario'].'@avanceytec.com.mx' ?></td></tr>
      <tr><th>Nombre del recomendador: </th><td><?= ''.$rows['nombre_recomendador'].''; ?></td></tr>

<?php  

      }

      else {
?>
      <tr><th>Registro de:</th><td><acronym title="<?= $rows['formulario'] ?>">Seguimiento</acronym></td></tr>
<?php
      }
?>

      </table>      
</div>