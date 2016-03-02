<?php 

  $id = $rows['id'];

?>
<!--
<form action="cliente.php" method="post" id="cliente<?php echo $id; ?>">
	<input type="text" name="id" value="<?php echo $id; ?>">

	<a href="javascript:{}" onclick="document.getElementById('cliente<?php echo $id;?>').submit();">
		<button class="btn btn-primary btn-md">
			Actualizar
    	</button>
    </a>
</form>
-->

<a href="cliente.php?id=<?php echo $id;?>" id="<?php echo $id;?>">
	<button class="btn btn-primary btn-md">
		Actualizar
	</button>
</a>