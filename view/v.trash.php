<?php
  include('inc/menu-superior.php');

  if(!@mysql_connect("$dbh", "$dbu", "$dbp")) {
  
    echo "<h2>".$TEXT['cds-error']."</h2>";
      die();
        }
  mysql_select_db("$dbn1");

  mysql_query("SET NAMES 'utf8'");

?>

    <div class="container theme-showcase">

      <!-- Main jumbotron for a primary marketing message or call to action -->

  <div id="loading"></div>
  <div id="content"></div>


<script>

function mostrardiv() {
div = document.getElementById('flotante');
div.style.display = '';
}

function cerrar() {
div = document.getElementById('flotante');
div.style.display='none';
}

</script>

<!--
<table style="width:400px;">
  <tr>
    <td align="left">
      <input name="escliente" value="sincorreo@cat.com" checked="checked" onclick="javascript:cerrar();this.form.email.value = this.value;" tabindex="" type="radio">
    </td>
    <td align="left">
      <input name="escliente" value="" onclick="javascript:mostrardiv();this.form.email.value = this.value;" tabindex="" type="radio">      
    </td>
  </tr>
  <tr>
    <td align="left">
      Ocultar Páginas
    </td>
    <td align="left">
      Mostrar Páginas
    </td>
  </tr>
</table>
-->


<div id="flotante" style="display:none;">

<table width="100%">
  <tr>
    <td>
      <ul id="pagination">

<?php
//Show page links
    for($i=1; $i<=$pages; $i++) {
      echo '<li id="'.$i.'">'.$i.'</li>';
    }
?>

    </ul> 
    </td>
  </tr>
</table>

</div>
      
</div> <!-- /container -->