<h4 class="sub-header">Actualizar</h4>
          <div class="table-responsive">
          <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="4">Nombre</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th colspan="2">Correo</th>
                  <th>Tipo</th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM usuarios_ryg ORDER BY id_usuario ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    

    $i++;
    }
$keygen = 'C'.rand(1000,10000).'';
      echo '<tr>';
      echo '<form class="form-signin" action="usuarios.php" name="registrar_usuario" method="post">';
      echo '<td><input type="text" name="nombre1_ryg" class="form-control" placeholder="1er Nombre"></td>';
      echo '<td><input type="text" name="nombre2_ryg" class="form-control" placeholder="2do Nombre"></td>';
      echo '<td><input type="text" name="apellido1_ryg" class="form-control" placeholder="Apellido Paterno"></td>';
      echo '<td><input type="text" name="apellido2_ryg" class="form-control" placeholder="Apellido Materno"></td>';
      echo '<td><input type="text" name="usuario_ryg" class="form-control" placeholder="Nombre de Usuario"></td>';
      echo '<td><input type="text" name="clave_ryg" readonly="readonly" value="'.$keygen.'" class="form-control" placeholder="Contraseña"></td>';
      echo '<td colspan="2"><input type="text" name="correo_ryg" class="form-control" placeholder="Correo"></td>';
      echo '<td>
      <select name="tipo_ryg" class="form-control">
        <option value=""></option>
        <optgroup label="Equipo">
          <option value="administrador">Administrador</option>
          <option value="vendedor">Vendedor</option>
        </optgroup>
        <optgroup label="Recomendador">
          <option value="recomendador">Recomendador</option>
        <optgroup/>

        </optgroup>
      </select></td>';
      echo '<td><button class="btn btn-success btn-xs" type="submit" onfocus="javascript:this.form.d_confirmar.value =\'confirm\';">Agregar Usuario</button></td>';
      echo '</form>';
      echo '</tr>';
?>      
              </tbody>
            </table>
          </div>