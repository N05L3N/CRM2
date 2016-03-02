<?php

	function selectEcrm_equipos_data2($campo) {

		$result = mysql_query("SELECT DISTINCT($campo) FROM ecrm_equipos_data2 ORDER BY $campo ASC limit 0,9999");
		$i = 0;
		
		while ($row = mysql_fetch_array($result)) {

			if ($i > 0) {}

				echo '<option value="' . $row[$campo] . '">' . $row[$campo] . '</option>';

			$i++;
		}

	}

	function selectPais() {

		$selectPais = array('','Mexico','Argentina','Australia','Austria','Bahamas','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Bouvet Island','Brazil','Bulgaria','Burundi','Cambodia','Cameroon','Canada','Cape Verde','Cayman Islands','Central African Republic','Chile','China','Colombia','Congo','Costa Rica','Croatia','Cuba','Cyprus','Denmark','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Faroe Islands','Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guadeloupe','Guam','Guatemala','Guinea','Guyana','Haiti','Honduras','Hong Kong','Hungary','Iceland','India','Indonesia','Iran','Iraq','Irlanda','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Korea','Kuwait','Latvia','Lebanon','Lesotho','Liberia','Libyan Arab Jamahiriya','Liechtenstein','Lithuania','Luxembourg','Macao','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Martinique','Mauritania','Mauritius','Mayotte','Mexico','Monaco','Mongolia','Montserrat','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norfolk Island','Northern Mariana Islands','Norway','Oman','Pakistan','Palau','Palestinian Territory, Occupied','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Pitcairn','Poland','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russian Federation','Rwanda','Saint Helena','Saint Kitts and Nevis','Saint Lucia','Saint Pierre and Miquelon','Saint Vincent and The Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia and Montenegro','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','Spain','Sri Lanka','Sudan','Suriname','Svalbard and Jan Mayen','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Taiwan, Province of China','Tajikistan','Tanzania, United Republic of','Thailand','Timor-leste','Togo','Tokelau','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Tuvalu','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','United States Minor Outlying Islands','Uruguay','Uzbekistan','Vanuatu','Venezuela','Viet Nam','Virgin Islands, British','Virgin Islands, U.S.','Wallis and Futuna','Western Sahara','Yemen','Zambia','Zimbabwe',);
		$selectPaisTotal = count($selectPais);
		
		for ($i=0; $i < $selectPaisTotal; $i++) { 
			
			echo '<option value="' . $selectPais[$i] . '">' . $selectPais[$i] . '</option>';    
		
		}

	}

	$usuario = $_SESSION["usuario"];

#  echo 'Z'.$_SERVER['SERVER_ADDR'].'Z';
#  echo "<br />";
#  echo 'Z'.$_SERVER['REMOTE_ADDR'].'Z';

?>
<form action="registrar_cliente.php" name="registrar_cliente" method="post" onsubmit="return validaCampos(this)">		
	<div class="row">
		<div class="col-md-6">
			<div>* Nombres</div>
			<input type="text" name="nombre" class="form-control" placeholder="Nombres">
		</div>
		<div class="col-md-6">
			<div clas="label">Apellidos</div>
			<input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<div>Nombre de contacto #2</div>
			<input type="text" name="contacto2" class="form-control" placeholder="contacto2">
		</div>
		<div class="col-md-6">
			<div>Nombre de contacto #3</div>
			<input type="text" name="contacto3" class="form-control" placeholder="contacto3">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<div clas="label">Direccion"</div>
			<input type="text" name="direccion" class="form-control" placeholder="Direccion"> 
		</div>
		<div class="col-md-3">
			<div clas="label">Ciudad</div>
			<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
		</div>
		<div class="col-md-3">
			<div clas="label">Pais</div>		
			<select class="form-control" id="pais" name="pais" >
				<?php selectPais() ?>
			</select>
		</div>
		<div class="col-md-3">
			<div clas="label">Estado</div>
			<select class="form-control" id="estado" name="estado" >
				<option value=""></option>
				<option value="Aguascalientes">Aguascalientes</option>
				<option value="Baja California">Baja California</option>
				<option value="Baja California">Baja California</option>
				<option value="Campeche">Campeche</option>
				<option value="Chiapas">Chiapas</option>
				<option value="Chihuahua">Chihuahua</option>
				<option value="Coahuila">Coahuila</option>
				<option value="Colima">Colima</option>
				<option value="Distrito Federal">Distrito Federal</option>
				<option value="Durango">Durango</option>
				<option value="Guanajuato">Guanajuato</option>
				<option value="Guerrero">Guerrero</option>
				<option value="Hidalgo">Hidalgo</option>
				<option value="Jalisco">Jalisco</option>
				<option value="Mexico">Mexico</option>
				<option value="Michoacan">Michoacan</option>
				<option value="Morelos">Morelos</option>
				<option value="Nayarit">Nayarit</option>
				<option value="Nuevo Leon">Nuevo Leon</option>
				<option value="Oaxaca">Oaxaca</option>
				<option value="Puebla">Puebla</option>
				<option value="Queretaro">Queretaro</option>
				<option value="Quintana Roo">Quintana Roo</option>
				<option value="San Luis Potosí">San Luis Potosí</option>
				<option value="Sinaloa">Sinaloa</option>
				<option value="Sonora">Sonora</option>
				<option value="Tabasco">Tabasco</option>
				<option value="Tamaulipas">Tamaulipas</option>
				<option value="Tlaxcala">Tlaxcala</option>
				<option value="Veracruz">Veracruz</option>
				<option value="Yucatan">Yucatan</option>
				<option value="Zacatecas">Zacatecas</option>
				<option value="Otro">-- No soy de Mexico --</option>
			</select>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div clas="label">Lada</div>
			<input type="text" name="lada" class="form-control" placeholder="Lada">
		</div>
		<div class="col-md-4">
			<div clas="label">Telefono</div>
			<input type="text" name="telefono" class="form-control" placeholder="Telefono">
		</div>
		<div class="col-md-4">
			<div clas="label">Email</div>
			<input type="text" name="email" class="form-control" placeholder="Email">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div clas="label">* Marca</div>
			<select class="form-control" id="marca" name="marca" >
				<option value=""></option>
				<?php selectEcrm_equipos_data2('marca') ?>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">* Equipo</div>
			<select class="form-control" id="equipo" name="equipo" >
				<option value=""></option>
				<?php selectEcrm_equipos_data2('nombre') ?>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">* Precio</div>
			<input type="text" name="precio" class="form-control" placeholder="Precio">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div clas="label">Medio</div>
			<select class="form-control" id="medio" name="medio" >
				<option></option>
				<optgroup label="Internet">
					<option value="Google">&nbsp;Google</option>
					<option value="Email de ATP">&nbsp;Email de ATP</option>
					<option value="Facebook">&nbsp;Facebook</option>
					<option value="Twiter">&nbsp;Twiter</option>
					<option value="Youtube">&nbsp;Youtube</option>
					<option value="Correo Electronico">&nbsp;Correo Electronico</option>
					<option value="Seccion amarilla">&nbsp;Seccion amarilla</option>
				</optgroup>
				<optgroup label="Por personal de ventas">
					<option value="Llamada del personal de ventas">&nbsp;Llamada del personal de ventas</option>
					<option value="Visita del vendedor de campo">&nbsp;Visita del vendedor de campo</option>
					<option value="Atencion en CallCenter">&nbsp;Atencion en CallCenter</option>
				</optgroup>
				<optgroup label="Medios Impresos">
					<option value="Vision Digital">&nbsp;Vision Digital</option>
					<option value="Signs of the Times">&nbsp;Signs of the Times</option>
					<option value="PeoPe">&nbsp;PeoPe</option>
				</optgroup>
				<optgroup label="Otros">
					<option value="Recomendacion">&nbsp;Recomendacion</option>
					<option value="Exposicion comercial">&nbsp;Exposicion comercial</option>
					<option value="Otro">&nbsp;Otro</option>
				</optgroup>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">Giro</div>
			<select class="form-control" id="giro" name="giro" >
				<option></option>
				<option value="Impresores Digitales">&nbsp;Impresores Digitales</option>
				<option value="Rotulistas">&nbsp;Rotulistas</option>
				<option value="Disenadores y Publicistas">&nbsp;Diseñadores y Publicistas</option>
				<option value="Anuncieros">&nbsp;Anuncieros</option>
				<option value="Manufactureros">&nbsp;Manufactureros</option>
				<option value="Promocionales">&nbsp;Promocionales</option>
				<option value="Maquiladora">&nbsp;Maquiladora</option>
				<option value="Comercio">&nbsp;Comercio</option>
				<option value="Industria">&nbsp;Industria</option>
				<option value="Gobierno">&nbsp;Gobierno</option>
				<option value="Serigrafistas">&nbsp;Serigrafistas</option>
				<option value="Envasador">&nbsp;Envasador</option>
				<option value="Publico en General">&nbsp;Público en General</option>
				<option value="Otros">&nbsp;Otros</option>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">Comentarios</div>
			<input type="text" name="comentarios" class="form-control" placeholder="Comentarios">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div clas="label">Equipo de interes</div>
			<input type="text" name="equipodeinteres" class="form-control" placeholder="Equipodeinteres">
		</div>
		<div class="col-md-4">
			<div clas="label">¿Compro equipo en ATP?</div>
			<input type="text" name="comeqenatp" class="form-control" placeholder="Comeqenatp">
		</div>
		<div class="col-md-4">
			<div clas="label">Equipos con los que cuenta</div>
			<input type="text" name="eqclosqcuenta" class="form-control" placeholder="Eqclosqcuenta">
		</div>
	</div>
	<hr>
	<div>
		<div class="col-md-4">
			<div clas="label">Antiguedad actual del equipo</div>
			<input type="text" name="antacteq" class="form-control" placeholder="Antacteq">
		</div>
		<div class="col-md-4">
			<div clas="label">Es cliente</div>
			<input type="text" name="escliente" class="form-control" placeholder="Escliente">
		</div>
		<div class="col-md-4">
			<div clas="label">Numero de cliente</div>
			<input type="text" name="numerodecliente" class="form-control" placeholder="Numerodecliente">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<div clas="label">Motivo de consulta</div>
			<input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivodeconsulta">
		</div>
		<div class="col-md-6">
			<div clas="label">Empresa</div>
			<input type="text" name="empresa" class="form-control" placeholder="Empresa">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>   
		</div>
		<div class="col-md-4"></div>
	</div>

	<input type="hidden" name="usuario" readonly="readonly" value="<?= $usuario ?>" class="form-control" placeholder="Usuario">

</form>