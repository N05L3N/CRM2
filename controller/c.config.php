<?php
  if ($administrar_usuario == 'crmequipo') {
    include('view/v.usuarios.crmequipo.php');
  }

  else if ($administrar_usuario == 'reclamaciones') {
    include('view/v.usuarios.reclamaciones.php');
  }

  else if ($administrar_usuario == 'ryg') {
    include('view/v.usuarios.ryg.php');
  }

  else if ($administrar_usuario == 'crmcat') {
    include('view/v.usuarios.crmcat.php');
  }

  else {

  }
?>