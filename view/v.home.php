<?php
	include('v.home.0.php');
?>

<!--

<div class="jumbotron">
	<div class="container">
		<h1>Hello, world!</h1>
        	<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        	<p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
	</div>
</div>

-->

<div class="container theme-showcase">

      <div class="row">
        <div class="col-md-4">
          <h3>Programados al día de hoy: <?= $numero_asignacionesHoy ?></h3>
          <p><a class="btn btn-success" href="diary.php" role="button">Ver »</a></p>
        </div>
        <div class="col-md-4">
          <h3>Mis Asignaciones: <?= $numero_asignacionesTotal ?></h3>
          <p><a class="btn btn-primary" href="panel.php" role="button">Ver »</a></p>
       </div>
        <div class="col-md-4">
          <h3>Pendientes: <?= $numero_pendientes ?></h3>
          <p><a class="btn btn-danger" href="late.php" role="button">Ver »</a></p>
        </div>
      </div>
<!--
      <hr>

      <pre><?= $sql_asignacionesHoy ?></pre>
      <br />
      <pre><?= $sql_agendados ?></pre>
      <br />
      <pre><?= $sql_pendientes ?></pre>
-->
</div> <!-- /container -->