<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pie</title>

  <link href="dist/css/vendor/normalize.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="dist/css/vendor/foundation.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="dist/css/pizza.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <script src="dist/js/vendor/modernizr.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  

</head>
<body>
  <div class="row">
    <div class="large-12 columns">
      <h3>Graphs</h3>
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
  $sql1 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo1'";
  $result1 = mysql_query($sql1);
  $numero1 = mysql_num_rows($result1);
  $numero1;

  $sql2 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo2'";
  $result2 = mysql_query($sql2);
  $numero2 = mysql_num_rows($result2);
  $numero2;

  $sql3 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo3'";
  $result3 = mysql_query($sql3);
  $numero3 = mysql_num_rows($result3);
  $numero3;

  $sql4 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo4'";
  $result4 = mysql_query($sql4);
  $numero4 = mysql_num_rows($result4);
  $numero4;

  $sql5 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo5'";
  $result5 = mysql_query($sql5);
  $numero5 = mysql_num_rows($result5);
  $numero5;

  $sql6 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo6'";
  $result6 = mysql_query($sql6);
  $numero6 = mysql_num_rows($result6);
  $numero6;

  $sql7 = "SELECT * FROM contacto WHERE asignadoa = 'ventasequipo7'";
  $result7 = mysql_query($sql7);
  $numero7 = mysql_num_rows($result7);
  $numero7;
?>





  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-pie-id="pie">
        <?php 
          echo '<li data-value="'.$numero1.'">'.$numero1.'</li>';
          echo '<li data-value="'.$numero2.'">'.$numero2.'</li>';
          echo '<li data-value="'.$numero3.'">'.$numero3.'</li>';
          echo '<li data-value="'.$numero4.'">'.$numero4.'</li>';
          echo '<li data-value="'.$numero5.'">'.$numero5.'</li>';
          echo '<li data-value="'.$numero6.'">'.$numero6.'</li>';
          echo '<li data-value="'.$numero7.'" data-text="Goats {{percent}} ({{value}} total)">'.$numero7.'</li>';
        ?>
        <!--<li data-value="40" data-text="Goats {{percent}} ({{value}} total)">Goat (32)</li>-->
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="pie"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-pie-id="donut" data-options='{"donut":"true"}'>
        <li data-value="60">Water Buffalo (60)</li>
        <li data-value="20">Bison (20)</li>
        <li data-value="12">Sheep (12)</li>
        <li data-value="32">Goat (32)</li>
        <li data-value="50">Shetland Pony (50)</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="donut"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-bar-id="bar">
        <li data-value="200">Water Buffalo (300)</li>
        <li data-value="178">Bison (178)</li>
        <li data-value="12">Sheep (12)</li>
        <li data-value="32">Goat (32)</li>
        <li data-value="250">Shetland Pony (250)</li>
        <li data-value="99">Wild Ant (99)</li>
        <li data-value="78">Chameleon (78)</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="bar" style="height: 450px;"></div>
    </div>
  </div>

  <div class="row">
    <div class="large-4 small-4 columns">
      <ul data-line-id="line">
        <li data-y="0" data-x="0">Water Buffalo</li>
        <li data-y="10" data-x="10">Bison</li>
        <li data-y="20" data-x="20">Bison</li>
        <li data-y="30" data-x="30">Bison</li>
        <li data-y="35" data-x="40">Bison</li>
        <li data-y="50" data-x="200">Bison</li>
      </ul>
    </div>
    <div class="large-8 small-8 columns">
      <div id="line" style="height: 450px;"></div>
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