<div style="font-size:13px;">
<?php

	if ($row['escliente'] == '') {

?>
	<b>Cliente:</b> Si

<?php
	}

	else {

?>	
  	<b>Cliente:</b> <?= $row['escliente'] ?>
<?php

	}
	
?>
	<br />
	<b>Número cliente:</b> <?= $row['numerodecliente'] ?>
	<br />
	<b>Estado:</b> <?= $row['estado'] ?><br />
	<b>Ciudad:</b> <?= $row['ciudad'] ?>
	<br />
	<b>Comentario:</b><i> <?= $row['motivodeconsulta'] ?></i>
</div>