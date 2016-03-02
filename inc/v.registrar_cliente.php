<?php
  include('inc/menu-superior.php');
?>
    <div class="container theme-showcase">
      <table class="table table-bordered table-condensed table-hover">
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Contacto2</th>
          <th>Contacto3</th>
          <th>Direccion</th>
          <th>Ciudad</th>
          <th>Pais</th>
          <th>Estado</th>
          <th>Lada</th>
          <th>Telefono</th>
          <th>Email</th>
          <th>Medio</th>
          <th>Giro</th>
          <th>Comentarios</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Formulario</th>
          <th>Equipodeinteres</th>
          <th>Comeqenatp</th>
          <th>Eqclosqcuenta</th>
          <th>Antacteq</th>
          <th>Escliente</th>
          <th>Numerodecliente</th>
          <th>Motivodeconsulta</th>
          <th>Empresa</th>
          <th>Nombre_recomendador</th>
          <th>Sucursal_recomendador</th>
          <th>Comentario_vendedor</th>
          <th>Asignadoa</th>
          <th>Fechadecontacto</th>
          <th>Fechaasignacion</th>
          <th>Fechaventa</th>
          <th>Estadodeventa</th>
          <th>Numerodefactura</th>
          <th>Usuario</th>
        </tr>
      <tr>
<?php
  #CONFIMR
  $result_registrar_cliente = mysql_query("SELECT * FROM contacto ORDER BY id desc limit 0,1");
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;
    while ($row_registrar_cliente = mysql_fetch_array($result_registrar_cliente)) {
      if ($i > 0) {
      }
      $id = $row_registrar_cliente['id'];
      $nombre = $row_registrar_cliente['nombre'];
      $contacto2 = $row_registrar_cliente['contacto2'];
      $contacto3 = $row_registrar_cliente['contacto3'];
      $direccion = $row_registrar_cliente['direccion'];
      $ciudad = $row_registrar_cliente['ciudad'];
      $pais = $row_registrar_cliente['pais'];
      $estado = $row_registrar_cliente['estado'];
      $lada = $row_registrar_cliente['lada'];
      $telefono = $row_registrar_cliente['telefono'];
      $email = $row_registrar_cliente['email'];
      $medio = $row_registrar_cliente['medio'];
      $giro = $row_registrar_cliente['giro'];
      $comentarios = $row_registrar_cliente['comentarios'];
      $fecha = $row_registrar_cliente['fecha'];
      $Hora = $row_registrar_cliente['Hora'];
      $formulario = $row_registrar_cliente['formulario'];
      $equipodeinteres = $row_registrar_cliente['equipodeinteres'];
      $comeqenatp = $row_registrar_cliente['comeqenatp'];
      $eqclosqcuenta = $row_registrar_cliente['eqclosqcuenta'];
      $antacteq = $row_registrar_cliente['antacteq'];
      $escliente = $row_registrar_cliente['escliente'];
      $numerodecliente = $row_registrar_cliente['numerodecliente'];
      $motivodeconsulta = $row_registrar_cliente['motivodeconsulta'];
      $empresa = $row_registrar_cliente['empresa'];
      $nombre_recomendador = $row_registrar_cliente['nombre_recomendador'];
      $sucursal_recomendador = $row_registrar_cliente['sucursal_recomendador'];
      $comentario_vendedor = $row_registrar_cliente['comentario_vendedor'];
      $asignadoa = $row_registrar_cliente['asignadoa'];
      $fechadecontacto = $row_registrar_cliente['fechadecontacto'];
      $fechaasignacion = $row_registrar_cliente['fechaasignacion'];
      $fechaventa = $row_registrar_cliente['fechaventa'];
      $estadodeventa = $row_registrar_cliente['estadodeventa'];
      $numerodefactura = $row_registrar_cliente['numerodefactura'];
      $usuario = $row_registrar_cliente['usuario'];

      echo '<td>'.$id.'</td>';
      echo '<td>'.$nombre.'</td>';
      echo '<td>'.$contacto2.'</td>';
      echo '<td>'.$contacto3.'</td>';
      echo '<td>'.$direccion.'</td>';
      echo '<td>'.$ciudad.'</td>';
      echo '<td>'.$pais.'</td>';
      echo '<td>'.$estado.'</td>';
      echo '<td>'.$lada.'</td>';
      echo '<td>'.$telefono.'</td>';
      echo '<td>'.$email.'</td>';
      echo '<td>'.$medio.'</td>';
      echo '<td>'.$giro.'</td>';
      echo '<td>'.$comentarios.'</td>';
      echo '<td>'.$fecha.'</td>';
      echo '<td>'.$Hora.'</td>';
      echo '<td>'.$formulario.'</td>';
      echo '<td>'.$equipodeinteres.'</td>';
      echo '<td>'.$comeqenatp.'</td>';
      echo '<td>'.$eqclosqcuenta.'</td>';
      echo '<td>'.$antacteq.'</td>';
      echo '<td>'.$escliente.'</td>';
      echo '<td>'.$numerodecliente.'</td>';
      echo '<td>'.$motivodeconsulta.'</td>';
      echo '<td>'.$empresa.'</td>';
      echo '<td>'.$nombre_recomendador.'</td>';
      echo '<td>'.$sucursal_recomendador.'</td>';
      echo '<td>'.$comentario_vendedor.'</td>';
      echo '<td>'.$asignadoa.'</td>';
      echo '<td>'.$fechadecontacto.'</td>';
      echo '<td>'.$fechaasignacion.'</td>';
      echo '<td>'.$fechaventa.'</td>';
      echo '<td>'.$estadodeventa.'</td>';
      echo '<td>'.$numerodefactura.'</td>';
      echo '<td>'.$usuario.'</td>';

      $i++;
    }
  #CONIRM
?>
  </tr>
</table>

      <div class="row">
        
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Dar de alta un cliente</h3>
            </div>
            <div class="panel-body">
              
            <?php
              require 'view/i.form.registrar-clientes.php';
            ?>

            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>

      </div>

    </div> <!-- /container -->