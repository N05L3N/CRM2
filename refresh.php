<?php
session_start();
$id_seguimiento = $_GET['id'];
$vendedor = $_GET['vendedor'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Refresh <?= $id_seguimiento ?></title>
	<script type="text/javascript">
		if(top.location!=this.location) top.location=this.location;
   	</script>
   	<meta http-equiv="refresh" content="0;url=cliente2.php?id=<?= $id_seguimiento ?>&vendedor=<?= $vendedor ?>">
</head>
<body>
  	
</body>
</html>
<?php
	# header("Location: cliente2.php?id=$id_seguimiento");
?>