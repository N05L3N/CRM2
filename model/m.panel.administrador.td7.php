<?php
#
#echo '('.$_SESSION['datetime10'].')';
#echo '<br />';
#echo '('.$_SESSION['datetime20'].')';

$datetime10 = $_SESSION['datetime10'];
$datetime20 = $_SESSION['datetime20'];

  if ($datetime10 == '0000-00-00') {
    # echo 'prueba';
  }
  else {
      $datetime1 = date_create($datetime10);
      $datetime2 = date_create($datetime20);
      $interval = date_diff($datetime1, $datetime2);
      echo $interval->format('%R%a días');
  }

#
?>