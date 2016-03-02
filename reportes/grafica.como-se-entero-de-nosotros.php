<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>¿Cómo se entero de nosotros?</title>

  <link href="dist/css/vendor/normalize.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="dist/css/vendor/foundation.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="dist/css/pizza.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <script src="dist/js/vendor/modernizr.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  

</head>
<body>
  <div class="row">
    <div class="large-12 columns">
      <h3>¿Cómo se entero de nosotros?</h3>
    </div>
  </div>


<?php
$dbh = 'localhost';

/*
$dbu = 'armando';
$dbp = 'AUXdiseno';
$dbn = 'crmequipo';
*/

$dbu = 'jcnoble';
$dbp = '4tp2009jk';
$dbn = 'jcnoble';

$dbu2 = 'jcnoble';
$dbp2 = '4tp2009jk';
$dbn2 = 'jcnoble';

$mysql_hostname = $dbh;
$mysql_user = $dbu;
$mysql_password = $dbp;
$mysql_database = "$dbn";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");


/*
  $result = mysql_query("SELECT * FROM contacto WHERE asignadoa = 'ventascampo3'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    
    if ($i > 0) {

    }

    $total = mysql_num_rows($result); 
    echo $total;

  }
*/


 /*
4.Recomendacion
01.Internet
02.Correo
06.Cliente
2.Correo
05.Eventos
08.Otros
04.Recomendacion
02.Revista
Recomendacion
Otro
03.Correo
07.Soy proveedor
01.Google
08.Youtube
02.Pagina web
04.Telemarketing
13.Otro
03.Directorio web
12.Recomendacion
11.Volante impresion
*/
/*
Google
Pagina web
Emailing
Directorio web
Vendedor de campo
Call center
Youtube
Volante impreso
Telemarketing
Fabebook
Twiter
Equipo
Seccion amarilla
Television
Revista digital
0
Correo Electronico
Exposicion comercial
Email de ATP
Visita del vendedor de campo
Vision Digital
Signs of the Times
PeoPe
Llamada del personal de ventas
prueba
Atencion en CallCenter
medio
Facebook
*/

  $sql1 = "SELECT * FROM contacto WHERE medio = 'Google'";
  $medio1 = 'Google';
  $result1 = mysql_query($sql1);
  $numero1 = mysql_num_rows($result1);
  $numero1;

  $sql2 = "SELECT * FROM contacto WHERE medio = 'Pagina web'";
  $medio2 = 'Pagina web';
  $result2 = mysql_query($sql2);
  $numero2 = mysql_num_rows($result2);
  $numero2;

  $sql3 = "SELECT * FROM contacto WHERE medio = 'Emailing' OR medio = 'Email de ATP'";
  $medio3 = 'Emailing';
  $result3 = mysql_query($sql3);
  $numero3 = mysql_num_rows($result3);
  $numero3;

  $sql4 = "SELECT * FROM contacto WHERE medio = 'Directorio web'";
  $medio4 = 'Directorio';
  $result4 = mysql_query($sql4);
  $numero4 = mysql_num_rows($result4);
  $numero4;

  $sql5 = "SELECT * FROM contacto WHERE medio = 'Vendedor de campo' OR medio = 'Visita del vendedor de campo'";
  $medio5 = 'Vendedor de campo';
  $result5 = mysql_query($sql5);
  $numero5 = mysql_num_rows($result5);
  $numero5;

  $sql6 = "SELECT * FROM contacto WHERE medio = 'Call center' OR medio = 'Atencion en CallCenter'";
  $medio6 = 'Call center';
  $result6 = mysql_query($sql6);
  $numero6 = mysql_num_rows($result6);
  $numero6;

  $sql7 = "SELECT * FROM contacto WHERE medio = 'Youtube'";
  $medio7 = 'Youtube';
  $result7 = mysql_query($sql7);
  $numero7 = mysql_num_rows($result7);
  $numero7;

  $sql8 = "SELECT * FROM contacto WHERE medio = 'Volante impreso'";
  $medio8 = 'Volante impreso';
  $result8 = mysql_query($sql8);
  $numero8 = mysql_num_rows($result8);
  $numero8;

  $sql9 = "SELECT * FROM contacto WHERE medio = 'Telemarketing'";
  $medio9 = 'Telemarketing';
  $result9 = mysql_query($sql9);
  $numero9 = mysql_num_rows($result9);
  $numero9;

  $sql10 = "SELECT * FROM contacto WHERE medio = 'Fabebook' OR medio = 'Facebook'";
  $medio10= 'Facebook';
  $result10 = mysql_query($sql10);
  $numero10 = mysql_num_rows($result10);
  $numero10;

  $sql11 = "SELECT * FROM contacto WHERE medio = 'Twiter'";
  $medio11= 'Twitter';
  $result11 = mysql_query($sql11);
  $numero11 = mysql_num_rows($result11);
  $numero11;

  $sql12 = "SELECT * FROM contacto WHERE medio = 'Seccion amarilla'";
  $medio12= 'Seccion amarilla';
  $result12 = mysql_query($sql12);
  $numero12 = mysql_num_rows($result12);
  $numero12;

  $sql13 = "SELECT * FROM contacto WHERE medio = 'Television'";
  $medio13= 'Television';
  $result13 = mysql_query($sql13);
  $numero13 = mysql_num_rows($result13);
  $numero13;

  $sql14 = "SELECT * FROM contacto WHERE medio = 'Revista digital' OR medio = 'Vision Digital' OR medio = 'Signs of the Times' OR medio = 'PeoPe'";
  $medio14= 'Revista digital';
  $result14 = mysql_query($sql14);
  $numero14 = mysql_num_rows($result14);
  $numero14;

  $sql15 = "SELECT * FROM contacto WHERE medio = 'Correo Electronico'";
  $medio15= 'Correo Electronico';
  $result15 = mysql_query($sql15);
  $numero15 = mysql_num_rows($result15);
  $numero15;

  $sql16 = "SELECT * FROM contacto WHERE medio = 'Exposicion comercial'";
  $medio16= 'Exposicion comercial';
  $result16 = mysql_query($sql16);
  $numero16 = mysql_num_rows($result16);
  $numero16;


  $sql17 = "SELECT * FROM contacto WHERE medio = 'Llamada del personal de ventas'";
  $medio17= 'Llamada del personal de ventas';
  $result17 = mysql_query($sql17);
  $numero17 = mysql_num_rows($result17);
  $numero17;

?>

  <div class="row">
    <div class="large-4 small-4 columns">

      <div style="background:linear-gradient(-90deg,#222,#444,#666);">
      <ul data-pie-id="pie">
        <?php 
          echo '<li data-value="'.$numero1.'" data-text="'.$medio1.' {{percent}} ({{value}} total)">'.$medio1.' = '.$numero1.'</li>';
          echo '<li data-value="'.$numero2.'" data-text="'.$medio2.' {{percent}} ({{value}} total)">'.$medio2.' = '.$numero2.'</li>';
          echo '<li data-value="'.$numero3.'" data-text="'.$medio3.' {{percent}} ({{value}} total)">'.$medio3.' = '.$numero3.'</li>';
          echo '<li data-value="'.$numero4.'" data-text="'.$medio4.' {{percent}} ({{value}} total)">'.$medio4.' = '.$numero4.'</li>';
          echo '<li data-value="'.$numero5.'" data-text="'.$medio5.' {{percent}} ({{value}} total)">'.$medio5.' = '.$numero5.'</li>';
          echo '<li data-value="'.$numero6.'" data-text="'.$medio6.' {{percent}} ({{value}} total)">'.$medio6.' = '.$numero6.'</li>';
          echo '<li data-value="'.$numero7.'" data-text="'.$medio7.' {{percent}} ({{value}} total)">'.$medio7.' = '.$numero7.'</li>';
          echo '<li data-value="'.$numero8.'" data-text="'.$medio8.' {{percent}} ({{value}} total)">'.$medio8.' = '.$numero8.'</li>';
          echo '<li data-value="'.$numero9.'" data-text="'.$medio9.' {{percent}} ({{value}} total)">'.$medio9.' = '.$numero9.'</li>';
          echo '<li data-value="'.$numero10.'" data-text="'.$medio10.' {{percent}} ({{value}} total)">'.$medio10.' = '.$numero10.'</li>';
          echo '<li data-value="'.$numero11.'" data-text="'.$medio11.' {{percent}} ({{value}} total)">'.$medio11.' = '.$numero11.'</li>';
          echo '<li data-value="'.$numero12.'" data-text="'.$medio12.' {{percent}} ({{value}} total)">'.$medio12.' = '.$numero12.'</li>';
          echo '<li data-value="'.$numero13.'" data-text="'.$medio13.' {{percent}} ({{value}} total)">'.$medio13.' = '.$numero13.'</li>';
          echo '<li data-value="'.$numero14.'" data-text="'.$medio14.' {{percent}} ({{value}} total)">'.$medio14.' = '.$numero14.'</li>';
          echo '<li data-value="'.$numero15.'" data-text="'.$medio15.' {{percent}} ({{value}} total)">'.$medio15.' = '.$numero15.'</li>';
          echo '<li data-value="'.$numero16.'" data-text="'.$medio16.' {{percent}} ({{value}} total)">'.$medio16.' = '.$numero16.'</li>';
          echo '<li data-value="'.$numero17.'" data-text="'.$medio17.' {{percent}} ({{value}} total)">'.$medio17.' = '.$numero17.'</li>';
        ?>
        <!--<li data-value="40" data-text="Goats {{percent}} ({{value}} total)">Goat (32)</li>-->
      </ul>
      </div>

    </div>
    <div class="large-8 small-8 columns">
      <div id="pie"></div>
    </div>
  </div>

  <br><br><br>

  <script src="dist/js/vendor/dependencies.js"></script>
  <script src="dist/js/pizza.js"></script>
  <script>
    $(window).load(function() {
      Pizza.init();
      $(document).foundation();
    });
  </script>
</body>
</html>