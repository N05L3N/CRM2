<script>

function mostrardiv() {
div = document.getElementById('flotante');
div.style.display = '';
}

function cerrar() {
div = document.getElementById('flotante');
div.style.display='none';
}

</script>


<h4 class="sub-header">Eliminar</h4>
  <div class="table-responsive">
  <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th></th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM ecrm_equipos_data2 ORDER BY id ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}

?>
      <tr>
      <form class="form-signin" action="config.php" method="post">
      <input type="hidden" value="<?= $row['id'] ?>" name="id">
      <td><?= $row['nombre'] ?></td>
      <td><?= $row['marca'] ?></td>
      <td align="center">
      <input type="submit" name="confirmar" value="Eliminar Equipo" onMouseOver="javascript:this.value='Aceptar';" onMouseOut="javascript:this.value='Eliminar Equipo';">
      </form>
    </td>
      </tr>
<?php
    $i++;
    }
?>            
              </tbody>
            </table>
          </div>
</div>