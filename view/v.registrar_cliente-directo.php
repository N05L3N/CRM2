<?php
  #include('inc/menu-superior.php');
?>
    <div class="container theme-showcase">
      
      <div class="row">
        
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Dar de alta un cliente</h3>
            </div>
            <div class="panel-body">
              
            <?php
              require 'view/v.registrar_cliente-directo_form.php';
            ?>

            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>

      </div>

    </div> <!-- /container -->