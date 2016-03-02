<?php

#  echo 'Z'.$_SERVER['SERVER_ADDR'].'Z';
#  echo "<br />";
#  echo 'Z'.$_SERVER['REMOTE_ADDR'].'Z';

?>
<form action="registrar_cliente-directo.php" name="registrar_cliente" method="post">
  
  <input type="hidden" name="contacto2" class="form-control" placeholder="contacto2">
  <input type="hidden" name="contacto3" class="form-control" placeholder="contacto3">
  <input type="hidden" name="comeqenatp" class="form-control" placeholder="Comeqenatp">
  <input type="hidden" name="eqclosqcuenta" class="form-control" placeholder="Eqclosqcuenta">
  <input type="hidden" name="antacteq" class="form-control" placeholder="Antacteq">
  <input type="hidden" name="escliente" class="form-control" placeholder="Escliente">
  <input type="hidden" name="numerodecliente" class="form-control" placeholder="Numerodecliente">
  <input type="hidden" name="empresa" class="form-control" placeholder="Empresa">
  <!-- <input type="hidden" name="giro" value="Correo Directo" class="form-control" placeholder=""> -->

  <div class="row">
        <div class="col-md-6">
          <div>Nombres</div>
      <input type="text" name="nombre" class="form-control" placeholder="Nombres">
    </div>
    <div class="col-md-6">
      <div clas="label">Apellidos</div>
      <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
    </div>
  </div>

  <hr>

  <hr>

  <div class="row">
    <div class="col-md-3">
      <div clas="label">Direccion</div>
      <input type="text" name="direccion" class="form-control" placeholder="Direccion"> 
    </div>
    <div class="col-md-3">
      <div clas="label">Ciudad</div>
      <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
    </div>
    <div class="col-md-3">
      <div clas="label">Pais</div>
      <input type="text" name="pais" class="form-control" placeholder="Pais">
    </div>
    <div class="col-md-3">
      <div clas="label">Estado</div>
      <input type="text" name="estado" class="form-control" placeholder="Estado">
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-2">
      <div clas="label">Lada</div>
      <input type="text" name="lada" class="form-control" placeholder="Lada">
    </div>
    <div class="col-md-2">
      <div clas="label">Telefono</div>
      <input type="text" name="telefono" class="form-control" placeholder="Telefono">
    </div>
    <div class="col-md-2">
      <div clas="label">Email</div>
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="col-md-3">
      <div clas="label">Medio</div>
      


<select class="form-control" id="medio" name="medio" >
    
  <option></option>
  
  <optgroup label="Internet">
  <option value="Google">&nbsp;Google</option>
  <option value="Email de ATP">&nbsp;Email de ATP</option>
  <option value="Fabebook">&nbsp;Fabebook</option>
  <option value="Twiter">&nbsp;Twiter</option>
  <option value="Youtube">&nbsp;Youtube</option>
  <option value="Correo Electronico">&nbsp;Correo Electrónico</option>
  <option value="Seccion amarilla">&nbsp;Sección amarilla</option>
  
  </optgroup><optgroup label="Por personal de ventas">
  <option value="Llamada del personal de ventas">&nbsp;Llamada del personal de ventas</option>
  <option value="Visita del vendedor de campo">&nbsp;Visita del vendedor de campo</option>
  <option value="Atencion en CallCenter">&nbsp;Atención en CallCenter</option>
  
  </optgroup><optgroup label="Medios Impresos">
  <option value="Vision Digital">&nbsp;Visión Digital</option>
  <option value="Signs of the Times">&nbsp;Signs of the Times</option>
  <option value="PeoPe">&nbsp;PeoPe</option>
  
  
  
  </optgroup><optgroup label="Otros">
  <option value="Recomendacion">&nbsp;Recomendación</option>
  
  <option value="Exposicion comercial">&nbsp;Exposición comercial</option>
  <option value="Otro">&nbsp;Otro</option>
        </optgroup></select>

    </div>
    <div class="col-md-3">
      <div clas="label">Giro</div>
      


<select class="form-control" id="giro" name="giro" >
<option><!--Seleccione una opci&#243;n --></option>
      <option value="Impresores Digitales">&nbsp;Impresores Digitales</option>
      <option value="Rotulistas">&nbsp;Rotulistas</option>
      <option value="Disenadores y Publicistas">&nbsp;Diseñadores y Publicistas</option>
      <option value="Anuncieros">&nbsp;Anuncieros</option>
      <option value="Manufactureros">&nbsp;Manufactureros</option>
      <option value="Promocionales">&nbsp;Promocionales</option>
      <option value="Maquiladora">&nbsp;Maquiladora</option>
      <option value="Comercio">&nbsp;Comercio</option>
      <option value="Industria">&nbsp;Industria</option>
      <option value="Gobierno">&nbsp;Gobierno</option>
      <option value="Serigrafistas">&nbsp;Serigrafistas</option>
      <option value="Envasador">&nbsp;Envasador</option>
      <option value="Publico en General">&nbsp;Público en General</option>
      <option value="Otros">&nbsp;Otros</option>    
</select>

    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-12">
      <div clas="label">Comentarios</div>
      <textarea name="comentarios" class="form-control" id="" cols="30" rows="10" style="resize:none;"></textarea>
    </div>
  </div>
  
  <hr>

  <div class="row">
    <div class="col-md-6">
      <div clas="label">Equipo de interes</div>
      <input type="text" name="equipodeinteres" class="form-control" placeholder="Equipodeinteres">
    </div>
    <div class="col-md-6">
      <div clas="label">Motivo de consulta</div>
      <input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivodeconsulta">
    </div>
  </div>

  <hr>

  

  <hr>

  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>   
    </div>
    <div class="col-md-4">
      
    </div>
  </div>  


<input type="hidden" name="usuario" readonly="readonly" value="directo" class="form-control" placeholder="Usuario">

</form>