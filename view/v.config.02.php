<h4 class="sub-header">Agregar</h4>
          <div class="table-responsive">
          <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Marca</th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM ecrm_equipos_data2 ORDER BY id ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
    $i++;
    }
?>      

      <tr>
      <form class="form-signin" action="config.php" name="registrar_equipo" method="post">
      <td><input type="text" name="nombre_equipo" class="form-control" placeholder="Nombre"></td>
      <td>
      <select name="marca" class="form-control">
        <option value=""></option>
        <option value="ROLAND">ROLAND</option>
        <option value="ORIONJET">ORIONJET</option>
        <option value="ORION 3D">ORION 3D</option>
        <option value="GRAPHTEC">GRAPHTEC</option>
        <option value="GLADIART">GLADIART</option>
        <option value="EPILOG">EPILOG</option>
        <option value="SUBLIMART">SUBLIMART</option>
        <option value="EPSON">EPSON</option>
        <option value="ORIONCUT">ORIONCUT</option>
        <option value="FORTSHTOFF">FORTSHTOFF</option>
        <option value="WELDER">WELDER</option>
        <option value="SILHOUETTE">SILHOUETTE</option>
        <option value="ZEBRA">ZEBRA</option>
        <option value="LETRAS DE CANAL">LETRAS DE CANAL</option>
        <option value="ACCESORIOS">ACCESORIOS</option>
        <option value="ANAJET">ANAJET</option>
        <option value="METALNOX">METALNOX</option>
        <option value="FOTOBOTONES">FOTOBOTONES</option>
        <option value="XUV JET ">XUV JET </option>
        <option value="SUMMA ">SUMMA </option>
        <option value="BLADE ONE ">BLADE ONE </option>
        <option value="MUTOH ">MUTOH </option>
        <option value="LAMINADORA ORION">LAMINADORA ORION</option>
      </select></td>
    <td>
      <input type="submit" value="Agregar Equipo">
    </td>
    </form>
    </tr>
</tbody>
</table>
</div>