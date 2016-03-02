<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Fecha |CRM Equipo</a></li>
            <li>
              <form action="model/m.sesion.administrar_usuario.php" method="post">
              <input type="hidden" id="administrar_usuario" name="administrar_usuario" value="crmequipo" />
              <button type="button" onClick="this.form.submit();">Administrar</button>
              </form>
            </li>
          </ul>
          
          
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Recomienda y Gana</a></li>
            <li>
                <form action="model/m.sesion.administrar_usuario.php" method="post">
                <input type="hidden" id="administrar_usuario" name="administrar_usuario" value="ryg" />
                <button type="button" onClick="this.form.submit();">Administrar</button>
                </form>
            </li>
          </ul>
        
          
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Reclamaciones</a></li>
            <li>
              <form action="model/m.sesion.administrar_usuario.php" method="post">
              <input type="hidden" id="administrar_usuario" name="administrar_usuario" value="reclamaciones" />
              <button type="button" onClick="this.form.submit();">Administrar</button>
              </form>
            </li>
          </ul>

          <!--
          <ul class="nav nav-sidebar">
            <li class="active"><a href="">CRM CAT</a></li>
            <li><a href="#">Administrar</a></li>
          </ul>
        -->
        </div>
<?php
  require('controller/c.usuarios.php');
?>      
      </div>
</div>