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
mysql_query ("SET NAMES 'utf8'");
?>