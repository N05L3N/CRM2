
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