<?php

if(!@mysql_connect("localhost", "jcnoble", "4tp2009jk")) {
    echo "<h2>".$TEXT['cds-error']."</h2>";
      die();
        }
  mysql_select_db("jcnoble");
  mysql_query("SET NAMES 'utf8'");

?>
<form class="form-signin" action="registrar_cliente.php" name="registrar_cliente" method="post">
	<div class="row">
        <div class="col-sm-12">
			<select name="" id="" class="form-control">
				<option value="">Seleccione un Cliente</option>
<?php

  $result = mysql_query("SELECT * FROM jcnoble.contacto ORDER BY nombre asc limit 0,999");
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) { }
      echo "<option value=''>".$row['nombre']."</option>";
  }
  $i++;

?>
			</select>
		</div>
	</div>	
	
	<br />
	<button class="btn btn-lg btn-primary btn-block" type="submit">Consultar</button>
</form>