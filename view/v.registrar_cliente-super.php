<?php
  include('inc/menu-superior.php');
?>
    <div class="container theme-showcase">
<?php
#CONFIMR
$result_registrar_cliente = mysql_query("SELECT * FROM contacto ORDER BY id desc limit 0,1");
mysql_query ("SET NAMES 'utf8'");
  $i = 0;
    echo '<table>';
    while ($row_registrar_cliente = mysql_fetch_array($result_registrar_cliente))
      
      {
        if ($i > 0)
          { }
            
            echo '<tr>';
            echo '<td colspan="2">'.$row_registrar_cliente['id'].'</td>';
            echo '<td>'.$row_registrar_cliente['nombre'].'</td>';
            echo '</tr>';
              $i++; 
      }
echo '</table>';
#CONIRM
?>
      <div class="page-header">
        
      </div>

      <div class="row">
        
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Dar de alta un cliente</h3>
            </div>
            <div class="panel-body">
              
            <?php
               include('inc/i.form.registrar-clientes-super.php');
            ?>

            </div>
          </div>
        </div>
        <div class="col-sm-3"></div>

      </div>

    </div> <!-- /container -->