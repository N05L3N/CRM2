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