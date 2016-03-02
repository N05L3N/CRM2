<?php
if ($row['estadodeventa'] == 'si') {
    
    echo 'Factura: <b>'.$row['numerodefactura'].'</b>';
    echo '<br />';
    echo '<b>Asignado a:</b>'.$row['asignadoa'].'';
    echo '<br />';
    echo '<i>'.$row['comentariovendedor'].'</i>';
    
  }
else { 
}

if ($row['estadodeventa'] == 'no') {
    echo '<b>No se vendio</b>';
    echo '<br />';
    echo '<b>Asignado a:</b>'.$row['asignadoa'].'';
    echo '<br />';
    echo '<i>'.$row['comentariovendedor'].'</i>';
  }

else  {

}

#Estado de la venta:
if ($row['estadodeventa'] == 'En proceso')
  {
   
    echo '<b>En proceso</b>';
    echo '<br />';
    echo '<b>Asignado a:</b>'.$row['asignadoa'].'';
    echo '<br />';
    echo '<i>'.$row['comentariovendedor'].'</i>';
  }
else  
{

}

if ($row['estadodeventa'] == '' OR $row['estadodeventa'] == '0')
  {
    
    echo '<br />';
    
    if ($row['asignadoa'] == '') {
      echo '<b>Aún sin asignación</b>';
    }

    # Para no mostrar la asignación de Perl en 0
    else { 
      if ($row['asignadoa'] == '0') {
      echo '<b>Aún sin asignación</b>';   
      }
      else {
            echo '<b>Asignado a:</b>'.$row['asignadoa'].'';
        }
        #  / Para no mostrar la asignación de Perl en 0



    }


    echo '<br />';
    echo '<i>'.$row['comentariovendedor'].'</i>';

}
else  {

}

?>