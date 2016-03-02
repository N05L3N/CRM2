
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h3 class="page-header">Usuarios Reclamaciones</h3>

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

  $result = mysql_query("SELECT * FROM usuarios_reclamaciones ORDER BY tipo ASC limit 100");
  
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

  $result = mysql_query("SELECT * FROM usuarios_reclamaciones ORDER BY id_usuario ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
      echo "<tr>";  
      echo '<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario_reclamaciones">';
      
      echo '<td><input type="text" class="form-control" name="u_nombre1_reclamaciones" value="'.$row['nombre1'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_nombre2_reclamaciones" value="'.$row['nombre2'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_apellido1_reclamaciones" value="'.$row['apellido1'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_apellido2_reclamaciones" value="'.$row['apellido2'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_usuario_reclamaciones" value="'.$row['usuario'].'"></td>';
      echo '<td><input type="text" class="form-control" name="u_clave_reclamaciones" value="'.$row['clave'].'"></td>';
      echo '<td colspan="2"><input type="text" class="form-control" name="u_correo_reclamaciones" value="'.$row['correo'].'"></td>';
      
      echo '<td>';

      echo'<select name="u_tipo_reclamaciones" class="form-control">';

      if ($row['tipo'] == 'administrador') {
        echo '<optgroup label="Equipo">';
        echo '<option value="administrador" selected>Administrador</option>';
        echo '<option value="vendedor">Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="administradorcompras">Administrador Compras</option>';
        echo '<option value="compras">Compras</option>';
        echo  '</optgroup>';
      }

      else if ($row['tipo'] == 'vendedor') {
       echo '<optgroup label="Equipo">';
        echo '<option value="administrador">Administrador</option>';
        echo '<option value="vendedor" selected>Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="administradorcompras">Administrador Compras</option>';
        echo '<option value="compras">Compras</option>';
        echo  '</optgroup>';
      }

      else if ($row['tipo'] == 'administradorcompras') {
       echo '<optgroup label="Equipo">';
        echo '<option value="administrador">Administrador</option>';
        echo '<option value="vendedor">Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="administradorcompras" selected>Administrador Compras</option>';
        echo '<option value="compras">Compras</option>';
        echo  '</optgroup>';
      }

      else if ($row['tipo'] == 'compras') {
        echo '<optgroup label="Equipo">';
        echo '<option value="administrador">Administrador</option>';
        echo '<option value="vendedor">Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="administradorcompras">Administrador Compras</option>';
        echo '<option value="compras" selected>Compras</option>';
        echo  '</optgroup>';
      }

      else {
        echo '<optgroup label="Equipo">';
        echo '<option value="administrador">Administrador</option>';
        echo '<option value="vendedor">Vendedor</option>';
        echo  '</optgroup>';
        echo '<optgroup label="Compras">';
        echo '<option value="administradorcompras">Administrador Compras</option>';
        echo '<option value="compras">Compras</option>';
        echo  '</optgroup>';
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
      echo '<td><input type="text" name="nombre1_reclamaciones" class="form-control" placeholder="1er Nombre"></td>';
      echo '<td><input type="text" name="nombre2_reclamaciones" class="form-control" placeholder="2do Nombre"></td>';
      echo '<td><input type="text" name="apellido1_reclamaciones" class="form-control" placeholder="Apellido Paterno"></td>';
      echo '<td><input type="text" name="apellido2_reclamaciones" class="form-control" placeholder="Apellido Materno"></td>';
      echo '<td><input type="text" name="usuario_reclamaciones" class="form-control" placeholder="Nombre de Usuario"></td>';
      echo '<td><input type="text" name="clave_reclamaciones" readonly="readonly" value="'.$keygen.'" class="form-control" placeholder="Contraseña"></td>';
      echo '<td colspan="2"><input type="text" name="correo_reclamaciones" class="form-control" placeholder="Correo"></td>';
      echo '<td>
      <select name="tipo_reclamaciones" class="form-control">
        <option value=""></option>
        <optgroup label="Equipo">
          <option value="administrador">Administrador</option>
          <option value="vendedor">Vendedor</option>
        </optgroup>
        <optgroup label="Compras">
          <option value="administradorcompras">Administrador Compras</option>
          <option value="compras">Compras</option>
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

  $result = mysql_query("SELECT * FROM usuarios_reclamaciones ORDER BY id_usuario ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
      echo "<tr>";  
      echo '<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario_reclamaciones">';
      
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
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="d_id_usuario_reclamaciones">';
      echo '<input type="hidden" class="form-control" name="d_confirmar_reclamaciones" value="">';
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