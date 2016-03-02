<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h3 class="page-header">Usuarios Recomienda y Gana</h3>

  <h4 class="sub-header">Consulta</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
                <tr>
                  <th colspan="4">Nombre</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Correo</th>
                  <th>Tipo</th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM usuarios_ryg ORDER BY tipo ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
      echo "<tr>";  
      echo '<td>'.$row['nombre1'].'</td>';
      echo '<td>'.$row['nombre2'].'</td>';
      echo '<td>'.$row['apellido1'].'</td>';
      echo '<td>'.$row['apellido2'].'</td>';
      echo '<td>'.$row['usuario'].'</td>';
      echo '<td>'.$row['clave'].'</td>';
      echo '<td>'.$row['correo'].'</td>';
      echo '<td>'.$row['tipo'].'</td>';
      echo "</tr>";

    $i++;
    }
?>
              </tbody>
            </table>
          </div>



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
    
      echo "<tr>";  
      echo '<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario_ryg">';
      
      echo '<td><input type="text" class="form-control" name="u_nombre1_ryg" value="'.$row['nombre1'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_nombre2_ryg" value="'.$row['nombre2'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_apellido1_ryg" value="'.$row['apellido1'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_apellido2_ryg" value="'.$row['apellido2'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_usuario_ryg" value="'.$row['usuario'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_clave_ryg" value="'.$row['clave'].'"></td>';
      echo '<td colspan="2"><input type="text" class="form-control" name="u_correo_ryg" value="'.$row['correo'].'"></td>';
      
      echo '<td>';

      echo'<select name="u_tipo_ryg" class="form-control">';

      if ($row['tipo'] == 'administrador') {
        echo '<optgroup label="Equipo">';
        echo '<option value="administrador" selected>Administrador</option>';
        echo '<option value="vendedor">Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="recomendador">Recomendador</option>';
        echo  '</optgroup>';
      }

      else if ($row['tipo'] == 'vendedor') {
       echo '<optgroup label="Equipo">';
        echo '<option value="administrador">Administrador</option>';
        echo '<option value="vendedor" selected>Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="recomendador">Recomendador</option>';
        echo  '</optgroup>';
      }

      else if ($row['tipo'] == 'recomendador') {
       echo '<optgroup label="Equipo">';
        echo '<option value="administrador">Administrador</option>';
        echo '<option value="vendedor">Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Recomendador">';
        echo '<option value="recomendador" selected>recomendador</option>';
        echo  '</optgroup>';
      }

      else {
        
      }

      
        
      echo'</select></td>';

      echo '</td>';
      
      echo '<td align="center" style="vertical-align:middle;"><button class="btn btn-primary btn-xs" type="submit">Actualizar</button></form></td>';

      echo "</tr>";

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







  <h4 class="sub-header">Eliminar</h4>
          <div class="table-responsive">
          <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="4">Nombre</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Correo</th>
                  <th>Tipo</th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM usuarios_ryg ORDER BY id_usuario ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
      echo "<tr>";  
      echo '<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario_ryg">';
      
       echo '<td>'.$row['nombre1'].'</td>';
      echo '<td>'.$row['nombre2'].'</td>';
      echo '<td>'.$row['apellido1'].'</td>';
      echo '<td>'.$row['apellido2'].'</td>';
      echo '<td>'.$row['usuario'].'</td>';
      echo '<td>'.$row['clave'].'</td>';
      echo '<td>'.$row['correo'].'</td>';
      echo '<td>'.$row['tipo'].'</td>';
      
      echo '<td align="center">';
      echo '<form class="form-signin" action="usuarios.php" name="eliminar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="d_id_usuario_ryg">';
      echo '<input type="hidden" class="form-control" name="d_confirmar_ryg" value="">';
      echo '<button class="btn btn-danger btn-xs" type="submit" onfocus="javascript:this.form.d_confirmar.value =\'confirm\';">Eliminar Usuario</button>';
      echo '</form>';
      echo '</td>';
      echo "</tr>";

    $i++;
    }
?>            
              </tbody>
            </table>
          </div>


</div>