<style>
    
.hasDatepicker {
	display: inline-block;
}

img.ui-datepicker-trigger {
	cursor: pointer;
    	display: inline-block;
    	position: absolute;
    	width: 16%;
}

/**/

div.on {
	display: block;
}

div.off {
	display: none;
}

</style>

<script>

	function RadiosLimpiar (){
		document.getElementById ("comentariovendedor").value = "";
	}
	
	/* Descartados */

	function RadiosDescartado1 (){
		document.getElementById ("comentariovendedor").value = "Se canaliza a Socio (Cotización del Extranjero)";
	}

	function RadiosDescartado2 (){
		document.getElementById ("comentariovendedor").value = "Se canaliza a Maplasa (No ofrecemos el Servicio";
	}

	function RadiosDescartado3 (){
		document.getElementById ("comentariovendedor").value = "Se canaliza a lista de clientes autorizados";
	}

	function RadiosDescartado4 (){
		document.getElementById ("comentariovendedor").value = "Los datos (Teléfono y Correo) son incorrectos";
	}

	function RadiosDescartado5 (){
		document.getElementById ("comentariovendedor").value = "Ya compro con la competencia (Favor de escribir la razón en los comentarios)";
	}

	function RadiosDescartado6 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	/* Llamada */

	function RadiosLlamada1 (){
		document.getElementById ("comentariovendedor").value = "Se le informa por medio de Llamada";
	}

	function RadiosLlamada2 (){
		document.getElementById ("comentariovendedor").value = "No contesto llamada";
	}

	function RadiosLlamada3 (){
		document.getElementById ("comentariovendedor").value = "No existe telefono";
	}

	function RadiosLlamada4 (){
		document.getElementById ("comentariovendedor").value = "Se llamo, pero no se encontro a la persona interesada";
	}

	/* Correo */

	function RadiosCorreo1 (){
		document.getElementById ("comentariovendedor").value = "Se Mando información por correo";
	}

	function RadiosCorreo2 (){
		document.getElementById ("comentariovendedor").value = "Se Solicita más Información acerca del prodducto poe correo";
	}

	function RadiosCorreo3 (){
		document.getElementById ("comentariovendedor").value = "Se le envio información del producto y se le aviso por correo";
	}

	function RadiosCorreo4 (){
		document.getElementById ("comentariovendedor").value = "Otro";
	}

	/* llamada y Correo */

	function RadiosLlamadayCorreo1 (){
		document.getElementById ("comentariovendedor").value = "Se le brinda información por correo y llamada";
	}



	/* Descartados Ventas Campo */

	function RadiosDescartadoVentasCampo1 (){
		document.getElementById ("comentariovendedor").value = "No pertenece al Giro, no corresponde a productos que comercializamos ";
	}

	function RadiosDescartadoVentasCampo2 (){
		document.getElementById ("comentariovendedor").value = "No quisieron recibirnos ";
	}

	function RadiosDescartadoVentasCampo3 (){
		document.getElementById ("comentariovendedor").value = "Datos incorrectos, imposible localizar prospecto";
	}

	function RadiosDescartadoVentasCampo4 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function RadiosDescartadoVentasCampo5 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function RadiosDescartadoVentasCampo6 (){
		document.getElementById ("comentariovendedor").value = "Otro";
	}

	/**/

	function RadiosVisitaNoConcretadaVentasCampo1 (){
		document.getElementById ("comentariovendedor").value = "No se localizó a la persona de compras y/o encargado";
	}

	function RadiosVisitaNoConcretadaVentasCampo2 (){
		document.getElementById ("comentariovendedor").value = "No nos recibieron (Cliente Ocupado)";
	}

	function RadiosVisitaNoConcretadaVentasCampo3 (){
		document.getElementById ("comentariovendedor").value = "Negocio Cerrado Temporalmente (Hora de comida, cierre temporal etc.)";
	}

	function RadiosVisitaNoConcretadaVentasCampo4 (){
		document.getElementById ("comentariovendedor").value = "Cambio de ubicación de negocio";
	}

	function RadiosVisitaNoConcretadaVentasCampo5 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function RadiosVisitaNoConcretadaVentasCampo6 (){
		document.getElementById ("comentariovendedor").value = "Otro";
	}









	/* Estatus de la venta */

	function mostrarRadiosDescartado () {
		$("#RadiosDescartado").addClass("on");
		$("#RadiosDescartado").removeClass("off");
		
		$("#RadiosLlamada").addClass("off");
		$("#RadiosCorreo").addClass("off");
		$("#RadiosLlamadayCorreo").addClass("off");
		$("#FechaDeVenta").addClass("off");

	}

/*	
		function ocultarRadiosDescartado () {
			$("#RadiosDescartado").removeClass("on");
			$("#RadiosDescartado").addClass("off");
		}
*/

	function mostrarRadiosLlamada () {
		$("#RadiosLlamada").addClass("on");
		$("#RadiosLlamada").removeClass("off");

		$("#RadiosDescartado").addClass("off");
		$("#RadiosCorreo").addClass("off");
		$("#RadiosLlamadayCorreo").addClass("off");
		$("#FechaDeVenta").addClass("off");
	}

	function mostrarRadiosCorreo () {
		$("#RadiosCorreo").addClass("on");
		$("#RadiosCorreo").removeClass("off");

		$("#RadiosDescartado").addClass("off");
		$("#RadiosLlamada").addClass("off");
		$("#RadiosLlamadayCorreo").addClass("off");
		$("#FechaDeVenta").addClass("off");
	}

	function mostrarRadiosLlamadayCorreo () {
		$("#RadiosLlamadayCorreo").addClass("on");
		$("#RadiosLlamadayCorreo").removeClass("off");

		$("#RadiosDescartado").addClass("off");
		$("#RadiosLlamada").addClass("off");
		$("#RadiosCorreo").addClass("off");
		$("#FechaDeVenta").addClass("off");
	}

	function mostrarFechaDeVenta () {
		$("#FechaDeVenta").addClass("on");
		$("#FechaDeVenta").removeClass("off");
		
		$("#RadiosDescartado").addClass("off");
		$("#RadiosLlamada").addClass("off");
		$("#RadiosCorreo").addClass("off");
		$("#RadiosLlamadayCorreo").addClass("off");

		$("#RadiosDescartadoVentasCampo").addClass("off");
		$("#RadiosVisitaNoConcretadaVentasCampo").addClass("off");
	}

	/* Ventas Campo */

	function mostrarRadiosDescartadoVentasCampo () {
		$("#RadiosDescartadoVentasCampo").addClass("on");
		$("#RadiosDescartadoVentasCampo").removeClass("off");

		$("#RadiosVisitaNoConcretadaVentasCampo").addClass("off");
		$("#FechaDeVentaVentasCampo").addClass("off");
		$("#FechaDeVenta").addClass("off");
	}

	function mostrarRadiosVisitaNoConcretadaVentasCampo () {
		$("#RadiosVisitaNoConcretadaVentasCampo").addClass("on");
		$("#RadiosVisitaNoConcretadaVentasCampo").removeClass("off");
		
		$("#RadiosDescartadoVentasCampo").addClass("off");
		$("#FechaDeVentaVentasCampo").addClass("off");
		$("#FechaDeVenta").addClass("off");
	}




</script>

<div class="container-fluid">


<?php

	if ($_GET["file"] == 1) {
		
?>	

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="alert alert-success fade in" role="alert">
      				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
      				<h5>El Archivo se subio correctamente</h5>
      			</div>
		</div>
	</div>

<?php
	
	}

	else {

	}

?>

<?php

	if ($_SESSION["h4Mensaje"] == 11) {
		
?>	

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="alert alert-warning fade in" role="alert">
      				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
      				<h5>La fecha no puede ser antes de la fecha actual</h5>
      			</div>
		</div>
	</div>

<?php

	}

	else {

	}

	$POSTestadodeventa = $_SESSION["POSTestadodeventa"];
	$POSTfechaanoprox = $_SESSION["POSTfechaanoprox"] ;
	$POSTfechamesprox = $_SESSION["POSTfechamesprox"] ;
	$POSTfechadiaprox = $_SESSION["POSTfechadiaprox"] ;
	$POSTestadodeventa = $_SESSION["POSTestadodeventa"] ;
	$POSTcomentariovendedor = $_SESSION["POSTcomentariovendedor"] ;

	include('inc/i.form.seguimientos.actualizar-venta2-1verde.01.php');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.02.php');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.03.php');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.04.php');


?>

</div>