  <h4 class="sub-header">Consulta</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
                <tr>
                  <th>Marca</th>
                  <th>Nombre</th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM ecrm_equipos_data2 ORDER BY id ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
      echo "<tr>";  
      echo '<td>'.$row['marca'].'</td>';
      echo '<td>'.$row['nombre'].'</td>';
      echo "</tr>";

    $i++;
    }
?>
              </tbody>
            </table>
          </div>