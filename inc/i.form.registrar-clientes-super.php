<!--
<form class="form-signin" action="registrar_cliente.php" name="registrar_cliente" method="post">
	<div class="row">
        <div class="col-sm-6">
			<input type="hidden" name="id" class="form-control" placeholder="ID">
			<input type="text" name="nombre" class="form-control" placeholder="Nombres">
		</div>
		<div class="col-sm-6">
			<input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
			<input type="hidden" name="contacto2" class="form-control" placeholder="contacto2">
			<input type="hidden" name="contacto3" class="form-control" placeholder="contacto3">
		</div>
	</div>	
	
	<input type="text" name="direccion" class="form-control" placeholder="Direccion">
	<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
	<input type="text" name="pais" class="form-control" placeholder="Pais">
	<input type="text" name="estado" class="form-control" placeholder="Estado">
	<input type="text" name="lada" class="form-control" placeholder="Lada">
	<input type="text" name="telefono" class="form-control" placeholder="Telefono">
	<input type="text" name="email" class="form-control" placeholder="Email">
	<input type="text" name="medio" class="form-control" placeholder="Medio">
	<input type="text" name="giro" class="form-control" placeholder="Giro">
	<input type="text" name="comentarios" class="form-control" placeholder="Comentarios">
	<input type="hidden" name="fecha" class="form-control" placeholder="Fecha">
	<input type="hidden" name="hora" class="form-control" placeholder="Hora">
	<input type="hidden" name="formulario" class="form-control" placeholder="Formulario">
	<input type="text" name="equipodeinteres" class="form-control" placeholder="Equipodeinteres">
	<input type="text" name="comeqenatp" class="form-control" placeholder="Comeqenatp">
	<input type="text" name="eqclosqcuenta" class="form-control" placeholder="Eqclosqcuenta">
	<input type="text" name="antacteq" class="form-control" placeholder="Antacteq">
	<input type="text" name="escliente" class="form-control" placeholder="Escliente">
	<input type="text" name="numerodecliente" class="form-control" placeholder="Numerodecliente">
	<input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivodeconsulta">
	<input type="text" name="empresa" class="form-control" placeholder="Empresa">
	<input type="hidden" name="usuario" class="form-control" placeholder="Usuario">
	
	<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
</form>
-->


<?php
# AUTO

echo '<textarea style="width:600px; height:200px; background-color:black; color:white;">';

$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 1 AND idformrecomiendaygana <= 1390 ORDER BY idformrecomiendaygana ASC limit 0,1390");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 101 AND idformrecomiendaygana <= 200 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 178 AND idformrecomiendaygana <= 200 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 201 AND idformrecomiendaygana <= 300 ORDER BY idformrecomiendaygana ASC limit 0,581");

#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 301 AND idformrecomiendaygana <= 400 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 401 AND idformrecomiendaygana <= 500 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 501 AND idformrecomiendaygana <= 600 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 601 AND idformrecomiendaygana <= 700 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 701 AND idformrecomiendaygana <= 800 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 801 AND idformrecomiendaygana <= 900 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 901 AND idformrecomiendaygana <= 1000 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 1001 AND idformrecomiendaygana <= 1100 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 1101 AND idformrecomiendaygana <= 1200 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 1201 AND idformrecomiendaygana <= 1300 ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 1301 AND idformrecomiendaygana <= 1400 ORDER BY idformrecomiendaygana ASC limit 0,581");
mysql_query ("SET NAMES 'utf8'");
  $i = 0;

    while ($row_importar = mysql_fetch_array($result_importar))
      
      {
        if ($i > 0)
          { }
            
			#$id = $row_importar['idformrecomiendaygana'];
      		$id = 0;
			$nombre_recomendador = $row_importar['nombre'];
			$sucursal_recomendador = $row_importar['sucursal'];
			$nombre = $row_importar['recomendado'];
			$email = $row_importar['email'];
			$telefono = $row_importar['telefono'];
			$medio = $row_importar['medio'];
			$giro = $row_importar['giro'];
			$escliente = $row_importar['escliente'];
			$numerodecliente= $row_importar['numerodecliente'];
			$equipodeinteres = $row_importar['productodeinteres'];
			$ciudad = $row_importar['poblacion'];
			$fechadecontacto = $row_importar['fechadecontacto'];
			$comentarios = $row_importar['comentario'];
			$comentario_vendedor = $row_importar['comentariovendedor'];
			$asignadoa = $row_importar['asignadoa'];
			$fechaasignacion = $row_importar['fechaasignacion'];
			$fechaventa = $row_importar['fechaventa'];
			$estadodeventa = $row_importar['estadodeventa'];
			$numerodefactura = $row_importar['numerodefactura'];
			$fecha = $row_importar['fecha'];
			$Hora = $row_importar['hora'];
			$formulario = $row_importar['formulario'];
			$usuario = $row_importar['usuario'];

$contacto2;
$contacto3;
$direccion;
$pais;
$estado;
$lada;
$comeqenatp;
$eqclosqcuenta;
$antacteq;
$motivodeconsulta;
$empresa;

echo 'INSERT INTO contacto (id,nombre,contacto2,contacto3,direccion,ciudad,pais,estado,lada,telefono,email,medio,giro,comentarios,fecha,Hora,formulario,equipodeinteres,comeqenatp,eqclosqcuenta,antacteq,escliente,numerodecliente,motivodeconsulta,empresa,nombre_recomendador,sucursal_recomendador,comentario_vendedor,asignadoa,fechadecontacto,fechaasignacion,fechaventa,estadodeventa,numerodefactura,usuario) VALUES (\''.$id.'\', \''.$nombre.'\', \''.$contacto2.'\', \''.$contacto3.'\', \''.$direccion.'\', \''.$ciudad.'\', \''.$pais.'\', \''.$estado.'\', \''.$lada.'\', \''.$telefono.'\', \''.$email.'\', \''.$medio.'\', \''.$giro.'\', \''.$comentarios.'\', \''.$fecha.'\', \''.$Hora.'\', \''.$formulario.'\', \''.$equipodeinteres.'\', \''.$comeqenatp.'\', \''.$eqclosqcuenta.'\', \''.$antacteq.'\', \''.$escliente.'\', \''.$numerodecliente.'\', \''.$motivodeconsulta.'\', \''.$empresa.'\', \''.$nombre_recomendador.'\', \''.$sucursal_recomendador.'\', \''.$comentario_vendedor.'\', \''.$asignadoa.'\', \''.$fechadecontacto.'\', \''.$fechaasignacion.'\', \''.$fechaventa.'\', \''.$estadodeventa.'\', \''.$numerodefactura.'\', \''.$usuario.'\');';

        $i++; 
      }
      echo '</textarea>';
# AUTO



#IMPORTAR
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana ORDER BY idformrecomiendaygana desc limit 0,10");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE usuario = 'ymoreno' ORDER BY idformrecomiendaygana ASC limit 0,581");
#$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 1 AND idformrecomiendaygana <= 100 ORDER BY idformrecomiendaygana ASC limit 0,581");
$result_importar = mysql_query("SELECT * FROM formrecomiendaygana WHERE idformrecomiendaygana >= 101 AND idformrecomiendaygana <= 200 ORDER BY idformrecomiendaygana ASC limit 0,581");


mysql_query ("SET NAMES 'utf8'");
  $i = 0;

    while ($row_importar = mysql_fetch_array($result_importar))
      
      {
        if ($i > 0)
          { }
            
			$id = $row_importar['idformrecomiendaygana'];
			$nombre_recomendador = $row_importar['nombre'];
			$sucursal_recomendador = $row_importar['sucursal'];
			$nombre = $row_importar['recomendado'];
			$email = $row_importar['email'];
			$telefono = $row_importar['telefono'];
			$medio = $row_importar['medio'];
			$giro = $row_importar['giro'];
			$escliente = $row_importar['escliente'];
			$numerodecliente= $row_importar['numerodecliente'];
			$equipodeinteres = $row_importar['productodeinteres'];
			$ciudad = $row_importar['poblacion'];
			$fechadecontacto = $row_importar['fechadecontacto'];
			$comentarios = $row_importar['comentario'];
			$comentario_vendedor = $row_importar['comentariovendedor'];
			$asignadoa = $row_importar['asignadoa'];
			$fechaasignacion = $row_importar['fechaasignacion'];
			$fechaventa = $row_importar['fechaventa'];
			$estadodeventa = $row_importar['estadodeventa'];
			$numerodefactura = $row_importar['numerodefactura'];
			$fecha = $row_importar['fecha'];
			$Hora = $row_importar['hora'];
			$formulario = $row_importar['formulario'];
			$usuario = $row_importar['usuario'];

$contacto2;
$contacto3;
$direccion;
$pais;
$estado;
$lada;
$comeqenatp;
$eqclosqcuenta;
$antacteq;
$motivodeconsulta;
$empresa;

?>
<form class="form-signin" action="registrar_cliente.php" name="registrar_cliente" method="post">
	<table>
	<tr>
		<td><button class="btn btn-md btn-primary btn-block" type="submit">Guardar</button></td>
		<td><input type="text" name="id" value="<?php echo $id;?>"></td>
		<td><input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
		<!--<td><input type="hidden" name="contacto2" value="<?php echo $contacto2;?>"></td>-->
		<!--<td><input type="hidden" name="contacto3" value="<?php echo $contacto3;?>"></td>-->
		<!--<td><input type="hidden" name="direccion" value="<?php echo $direccion;?>"></td>-->
		<td><input type="text" name="ciudad" value="<?php echo $ciudad;?>"></td>
		<!--<td><input type="hidden" name="pais" value="<?php echo $pais;?>"></td>-->
		<!--<td><input type="hidden" name="estado" value="<?php echo $estado;?>"></td>-->
		<!--<td><input type="hidden" name="lada" value="<?php echo $lada;?>"></td>-->
		<td><input type="text" name="telefono" value="<?php echo $telefono;?>"></td>
		<td><input type="text" name="email" value="<?php echo $email;?>"></td>
		<td><input type="text" name="medio" value="<?php echo $medio;?>"></td>
		<td><input type="text" name="giro" value="<?php echo $giro;?>"></td>
		<td><input type="text" name="comentarios" value="<?php echo $comentarios;?>"></td>
		<td><input type="text" name="fecha" value="<?php echo $fecha;?>"></td>
		<td><input type="text" name="Hora" value="<?php echo $Hora;?>"></td>
		<td><input type="text" name="formulario" value="<?php echo $formulario;?>"></td>
		<td><input type="text" name="equipodeinteres" value="<?php echo $equipodeinteres;?>"></td>
		<!--<td><input type="hidden" name="comeqenatp" value="<?php echo $comeqenatp;?>"></td>-->
		<!--<td><input type="hidden" name="eqclosqcuenta" value="<?php echo $eqclosqcuenta;?>"></td>-->
		<!--<td><input type="hidden" name="antacteq" value="<?php echo $antacteq;?>"></td>-->
		<td><input type="text" name="escliente" value="<?php echo $escliente;?>"></td>
		<td><input type="text" name="numerodecliente" value="<?php echo $numerodecliente;?>"></td>
		<!--<td><input type="hidden" name="motivodeconsulta" value="<?php echo $motivodeconsulta;?>"></td>-->
		<!--<td><input type="hidden" name="empresa" value="<?php echo $empresa;?>"></td>-->
		<td><input type="text" name="nombre_recomendador" value="<?php echo $nombre_recomendador;?>"></td>
		<td><input type="text" name="sucursal_recomendador" value="<?php echo $sucursal_recomendador;?>"></td>
		<td><input type="text" name="comentario_vendedor" value="<?php echo $comentario_vendedor;?>"></td>
		<td><input type="text" name="asignadoa" value="<?php echo $asignadoa;?>"></td>
		<td><input type="text" name="fechadecontacto" value="<?php echo $fechadecontacto;?>"></td>
		<td><input type="text" name="fechaasignacion" value="<?php echo $fechaasignacion;?>"></td>
		<td><input type="text" name="fechaventa" value="<?php echo $fechaventa;?>"></td>
		<td><input type="text" name="estadodeventa" value="<?php echo $estadodeventa;?>"></td>
		<td><input type="text" name="numerodefactura" value="<?php echo $numerodefactura;?>"></td>
		<td><input type="text" name="usuario" value="<?php echo $usuario;?>"></td>
	</tr>
	</table>
</form>
<?php

        $i++; 
      }

#IMPORTAR

/*

ymoreno
torreon
atpdis
mexicali
atpaguascalientes
compras
gerenteregional1
queretaro
atpleon
atpculiacan
gerentesoportetecnico
atpjuarez
kumasoftware
obregon
atphermosillo
jcnoble
tijuana
maguilar
gerenciaoperaciones
monterrey
comprasint2
atpsanluispotosi
atpveracruz

SELECT * FROM `formrecomiendaygana` WHERE `usuario` = 'ymoreno'; 581

SELECT * FROM `formrecomiendaygana` WHERE `email` like 'amariscal@avanceytec.com.mx';
SELECT * FROM `formrecomiendaygana` WHERE `email` like 'auxdiseno@avanceytec.com.mx';
SELECT * FROM `formrecomiendaygana` WHERE `email` like 'prueba@prueba.com';
SELECT * FROM `formrecomiendaygana`; 1,390 


SELECT distinct formulario FROM `formrecomiendaygana`; VEN | ADM
UPDATE `formrecomiendaygana` SET `formulario`='RYG' WHERE `formulario` ='VEN';
UPDATE `formrecomiendaygana` SET `formulario`='RYG' WHERE `formulario` ='ADM';


CONTACTO 42,495	9:16
CONTACTO 43,441	10:56

946
SELECT * FROM `contacto` WHERE formulario = 'RYG';  1,394
SELECT * FROM `formrecomiendaygana`;	            1,390



SELECT * FROM `contacto` WHERE formulario = 'RYG'; 98
SELECT * FROM `contacto` WHERE formulario = 'RYG'; 198


Mostrando registros 0 - 29 ( 175 total, La consulta tardó 0.0009 seg) [id: 42669 - 42640]


comentarios
equipodeinteres
comentario_vendedor

SELECT * FROM `contacto` WHERE comentarios like '%\'%' 29

SELECT comentarios FROM `contacto` WHERE comentarios like '%\'%'

update contacto set comentarios = replace(comentarios,'\'', '');







update contacto set comentarios = replace(comentarios,'\'', '');
update contacto set equipodeinteres = replace(equipodeinteres,'\'', '');
update contacto set comentario_vendedor = replace(comentario_vendedor,'\'', '');


update formrecomiendaygana set telefono = replace(telefono,'\'', '');
update formrecomiendaygana set comentario = replace(comentario,'\'', '');
update formrecomiendaygana set productodeinteres = replace(productodeinteres,'\'', '');
update formrecomiendaygana set comentariovendedor = replace(comentariovendedor,'\'', '');

*/
?>