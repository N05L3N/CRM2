<h4 class="sub-header">Actualizar</h4>
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
    

?>      

      <tr>
      <form class="form-signin" action="config.php" name="registrar_equipo" method="post">
      
      <td>
        <input type="hidden" name="u_id" class="form-control" value="<?= $row['id'] ?>" readonly="readonly" size="1">
        <input type="text" name="u_nombre_equipo" class="form-control" placeholder="Nombre" value="<?= $row['nombre'] ?>"></td>
      <td>
      <select name="marca" class="form-control">

<?php

$arrayEquipos = array(
'1' => 'ROLAND'
,'2' => 'ORIONJET'
,'3' => 'ORION 3D'
,'4' => 'GRAPHTEC'
,'5' => 'GLADIART'
,'6' => 'EPILOG'
,'7' => 'SUBLIMART'
,'8' => 'EPSON'
,'9' => 'ORIONCUT'
,'10' => 'FORTSHTOFF'
,'11' => 'WELDER'
,'12' => 'SILHOUETTE'
,'13' => 'ZEBRA'
,'14' => 'LETRAS DE CANAL'
,'15' => 'ACCESORIOS'
,'16' => 'ANAJET'
,'17' => 'METALNOX'
,'18' => 'FOTOBOTONES'
,'19' => 'XUV JET '
,'20' => 'SUMMA '
,'21' => 'BLADE ONE '
,'22' => 'MUTOH '
,'23' => 'LAMINADORA ORION'
);

$cuantos = count($arrayEquipos);
$cuantos++;
  
        echo '<option value=""></option>';
  for ($i=1; $i < $cuantos; $i++) {
      if ($row['marca'] == $arrayEquipos[$i]) {
        echo '<option value="'.$arrayEquipos[$i].'" selected>'.$arrayEquipos[$i].'</option>';
      }
      else {
          echo '<option value="'.$arrayEquipos[$i].'">'.$arrayEquipos[$i].'</option>';
      }

  }


?>
<!--
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
-->        
      </select></td>
    <td>
      <input type="submit" value="Actualizar Equipo">
    </td>
    </form>
    </tr>

<?php

$i++;
    }
?>

</tbody>
</table>
</div>