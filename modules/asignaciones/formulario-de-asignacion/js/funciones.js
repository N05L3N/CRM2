$(document).ready(function () {
	var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	//var telefonoreg = /^[0-9]+$/;
	//var telefonoreg = /^[a-zA-Z0-9_\.\-]+$/;
	$(".boton").click(function (){
		$(".error").remove();		
		if( $(".nombre").val() == "" ){
			$(".nombre").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
		}
			else if( $(".sucursal").val() == ""){
			$(".sucursal").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".recomendado").val() == ""){
			$(".recomendado").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".email").val() == ""){
			$(".email").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".telefono").val() == ""){
			$(".telefono").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".medio").val() == ""){
			$(".medio").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".giro").val() == ""){
			$(".giro").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".productodeinteres").val() == ""){
			$(".productodeinteres").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".poblacion").val() == ""){
			$(".poblacion").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".fechadecontacto").val() == ""){
			$(".fechadecontacto").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			else if( $(".comentario").val() == ""){
			$(".comentario").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}

			else if( $(".mensaje").val() == "" ){
			$(".mensaje").focus().after("<span class='error'>Campo obligatorio</span>");
			return false;
			}
			
			
			/*else if( $(".email").val() == "" || !emailreg.test($(".email").val()) ){
				$(".email").focus().after("<span class='error'>Favor de poner correo valido, sin espacios.</span>");
				return false;
			}
			else if( $(".telefono").val() == "" || !telefonoreg.test($(".telefono").val()) ){
				$(".telefono").focus().after("<span class='error'>Favor de poner tel&eacute;fono, sin espacios, &uacute;nicamente n&uacute;meros.</span>");
				return false;
			}
			*/
			
			
			
			
		
	});
	$(".nombre, .asunto, .mensaje").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();			
			return false;
		}		
	});
	$(".email").keyup(function(){
		if( $(this).val() != "" && telefonoreg.test($(this).val())){
			$(".error").fadeOut();			
			return false;
		}
	});
});