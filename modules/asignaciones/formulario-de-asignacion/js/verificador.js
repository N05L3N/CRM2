function vacio(cadena) 
{ // DECLARACION DE CONSTANTES 
var blanco = " \n\t" + String.fromCharCode(13); // blancos 
// DECLARACION DE VARIABLES 
var i; // indice en cadena 
var es_vacio; // cadena es vacio o no 
for(i = 0, es_vacio = true; (i < cadena.length) && es_vacio; i++) // INICIO 
es_vacio = blanco.indexOf(cadena.charAt(i)) != - 1; 
return(es_vacio); 
} 
function salta_alfanumerico(cadena, i, otros) 
{ // DECLARACION DE VARIABLES 
var j; // indice en cadena 
var car; // caracter de cadena 
var alfanum; // cadena[j] es alfanumerico u otros 
for(j = i, alfanum = true; (j < cadena.length) && alfanum; j++) // INICIO 
{ 
car = cadena.charAt(j); 
alfanum = alfanumerico(car) || (otros.indexOf(car) != -1); 
} 
if(!alfanum) // lee "alfanumX" 
j--; 
return(j); 
}

/* dice si car es alfanumerico */ 
function alfanumerico(car) 
{ 
return(alfabetico(car) || numerico(car)); 
} 


/* dice si car es alfabetico */ 
function alfabetico(car) // DECLARACION DE CONSTANTES 
{ // caracteres alfabeticos 
var alfa = "ABCDEFGHIJKLMNOPQRSTUWXYZabcdefghijklmnopqrstuvxyz"; 
return(alfa.indexOf(car) != - 1); // INICIO 
} 


/* dice si car es numerico */ 
function numerico(car) 
{ // DECLARACION DE CONSTANTES 
var num = "0123456789"; // caracteres numericos 
return(num.indexOf(car) != - 1); // INICIO 
} 


function email(cadena, otros) 
{ // DECLARACION-INICIALIZACION VARIABLES 
var i, j; // indice en cadena 
var es_email = 0 < cadena.length; // cadena es email o no 
i = salta_alfanumerico(cadena, 0, otros); // INICIO 
if(es_email = 0 < i) // lee "alfanum*" 
if(es_email = (i < cadena.length)) 
if(es_email = cadena.charAt(i) == '@') // lee "alfanum@*" 
{ 
i++; 
j = salta_alfanumerico(cadena, i, otros); 
if(es_email = i < j) // lee "alfanum@alfanum*" 
if(es_email = j < cadena.length) 
if(es_email = cadena.charAt(j) == '\.') 
{ // lee "alfanum@alfanum.*" 
j++; 
i = salta_alfanumerico(cadena, j, otros); 
if(es_email = j < i) // lee "alfanum@alfanum.alfanum*" 
while(es_email && (i < cadena.length)) 
if(es_email = cadena.charAt(i) == '\.') 
{ 
i++; 
j = salta_alfanumerico(cadena, i, otros); 
if(es_email = i < j) // lee "alfanum@alfanum.alfanum[.alfanum]*" 
i = j; 
} 
} 
} 
return(es_email); 
} 


function validaCampos(form1){

if(vacio(form1.nombre.value))
alert("El campo: [Nombre] no puede estar vacio");
/*
else if(vacio(form1.ciudad.value))
alert("El campo: [Ciudad] no puede estar vacio");

else if(vacio(form1.email.value))
alert("El campo: [e-mail] no puede estar vacio");

else if(vacio(form1.telefono.value))
alert("El campo: [Telefono] no puede estar vacío");

else if(vacio(form1.giro.value))
alert("No ha puesto su giro");

else if(vacio(form1.comoseentero.value))
alert("El campo: [Como se entero de nosotros] no puede estar vacio");

else if(vacio(form1.productosolicitado.value))
alert("El campo: [Producto solicitado] no puede estar vacio");
*/


else 
form1.submit(); 
return(false); 
} 
function enviar() { 
//validaCampos(); 
document.getElementById("form1").submit(); 
} 