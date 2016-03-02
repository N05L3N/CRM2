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