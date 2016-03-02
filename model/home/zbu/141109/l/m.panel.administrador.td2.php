<a href="cliente.php?id=<?= $row['id'] ?>&vendedor=<?= $row['asignadoa'] ?>" style="text-decoration:none; color:black;">
<div style="height:120px;overflow-y:scroll;overflow-x:hidden;">
<div style="font-size:13px;">
<?php
# Nombre
echo '
<b>Nombre:</b> '.$row['nombre'].'
<br />
<b>E-mail:</b><acronym title="'.$row['email'].'">'.$row['email'].'</acronym>
<br />
<b>Télefono:</b>('.$row['lada'].')'.$row['telefono'].'
<br />
<b>Pais:</b> '.$row['pais'].'
<br />';
?>

<?php 
	$fechaE = explode("-", $row['fecha']);
?>
<b>Fecha:</b> <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>


<?php
echo '<br />
<b>Comentario:</b> '.$row['comentarios'].'
<br />
<b>Interesado en:</b> '.$row['equipodeinteres'].'
<br />';

if ($row['formulario'] == 'RYG' OR $row['formulario'] == 'RYG1') {
  echo '<b>Registro de:</b> Recomienda y Gana<br />';
  echo '<b>Correo del recomendador:</b> '.$row['usuario'].'@avanceytec.com.mx';
  echo '<br />';
  echo '<b>Nombre del recomendador:</b> '.$row['nombre_recomendador'].'';
  
}

else {
  echo '<b>Registro de:</b> Seguimiento';
}
?>
</div>
</div>
</a>