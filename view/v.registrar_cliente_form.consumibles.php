<form action="registrar_cliente.php" name="registrar_cliente" method="post" onsubmit="return validaCampos(this)">
	<div class="row">
		<div class="col-md-3">
			<div>* Nombre Completo</div>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
		</div>
		<div class="col-md-2">
			<div>Empresa</div>
			<input type="text" name="empresa" class="form-control" placeholder="Empresa">
		</div>
		<div class="col-md-4">
			<div>Nombre de Facturación</div>
			<input type="text" name="contacto2" class="form-control" placeholder="Nombre de Facturación">
		</div>
		<div class="col-md-3">
			<div>Número de Orden</div>
			<input type="text" name="contacto3" class="form-control" placeholder="Número de Orden">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-3">
			<div clas="label">Dirección</div>
			<input type="text" name="direccion" class="form-control" placeholder="Direccion"> 
		</div>
		<div class="col-md-3">
			<div clas="label">* Pais</div>
			<select class="form-control" id="pais" name="pais" >
				<option></option>
				<option value="Mexico" selected>Mexico</option>
				<option value="Argentina">Argentina</option> 
				<option value="Armenia">Armenia</option> 
				<option value="Aruba">Aruba</option> 
				<option value="Australia">Australia</option> 
				<option value="Austria">Austria</option> 
				<option value="Bahamas">Bahamas</option> 
				<option value="Bahrain">Bahrain</option> 
				<option value="Bangladesh">Bangladesh</option> 
				<option value="Barbados">Barbados</option> 
				<option value="Belarus">Belarus</option> 
				<option value="Belgium">Belgium</option> 
				<option value="Belize">Belize</option> 
				<option value="Benin">Benin</option> 
				<option value="Bermuda">Bermuda</option> 
				<option value="Bhutan">Bhutan</option> 
				<option value="Bolivia">Bolivia</option> 
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
				<option value="Botswana">Botswana</option> 
				<option value="Bouvet Island">Bouvet Island</option> 
				<option value="Brazil">Brazil</option> 
				<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
				<option value="Brunei Darussalam">Brunei Darussalam</option> 
				<option value="Bulgaria">Bulgaria</option> 
				<option value="Burkina Faso">Burkina Faso</option> 
				<option value="Burundi">Burundi</option> 
				<option value="Cambodia">Cambodia</option> 
				<option value="Cameroon">Cameroon</option> 
				<option value="Canada">Canada</option> 
				<option value="Cape Verde">Cape Verde</option> 
				<option value="Cayman Islands">Cayman Islands</option> 
				<option value="Central African Republic">Central African Republic</option> 
				<option value="Chad">Chad</option> 
				<option value="Chile">Chile</option> 
				<option value="China">China</option> 
				<option value="Christmas Island">Christmas Island</option> 
				<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
				<option value="Colombia">Colombia</option> 
				<option value="Comoros">Comoros</option> 
				<option value="Congo">Congo</option> 
				<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
				<option value="Cook Islands">Cook Islands</option> 
				<option value="Costa Rica">Costa Rica</option> 
				<option value="Cote D'ivoire">Cote D'ivoire</option> 
				<option value="Croatia">Croatia</option> 
				<option value="Cuba">Cuba</option> 
				<option value="Cyprus">Cyprus</option> 
				<option value="Czech Republic">Czech Republic</option> 
				<option value="Denmark">Denmark</option> 
				<option value="Djibouti">Djibouti</option> 
				<option value="Dominica">Dominica</option> 
				<option value="Dominican Republic">Dominican Republic</option> 
				<option value="Ecuador">Ecuador</option> 
				<option value="Egypt">Egypt</option> 
				<option value="El Salvador">El Salvador</option> 
				<option value="Equatorial Guinea">Equatorial Guinea</option> 
				<option value="Eritrea">Eritrea</option> 
				<option value="Estonia">Estonia</option> 
				<option value="Ethiopia">Ethiopia</option> 
				<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
				<option value="Faroe Islands">Faroe Islands</option> 
				<option value="Fiji">Fiji</option> 
				<option value="Finland">Finland</option> 
				<option value="France">France</option> 
				<option value="French Guiana">French Guiana</option> 
				<option value="French Polynesia">French Polynesia</option> 
				<option value="French Southern Territories">French Southern Territories</option> 
				<option value="Gabon">Gabon</option> 
				<option value="Gambia">Gambia</option> 
				<option value="Georgia">Georgia</option> 
				<option value="Germany">Germany</option> 
				<option value="Ghana">Ghana</option> 
				<option value="Gibraltar">Gibraltar</option> 
				<option value="Greece">Greece</option> 
				<option value="Greenland">Greenland</option> 
				<option value="Grenada">Grenada</option> 
				<option value="Guadeloupe">Guadeloupe</option> 
				<option value="Guam">Guam</option> 
				<option value="Guatemala">Guatemala</option> 
				<option value="Guinea">Guinea</option> 
				<option value="Guinea-bissau">Guinea-bissau</option> 
				<option value="Guyana">Guyana</option> 
				<option value="Haiti">Haiti</option> 
				<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
				<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
				<option value="Honduras">Honduras</option> 
				<option value="Hong Kong">Hong Kong</option> 
				<option value="Hungary">Hungary</option> 
				<option value="Iceland">Iceland</option> 
				<option value="India">India</option> 
				<option value="Indonesia">Indonesia</option> 
				<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
				<option value="Iraq">Iraq</option> 
				<option value="Irlanda">Irlanda</option> 
				<option value="Israel">Israel</option> 
				<option value="Italy">Italy</option> 
				<option value="Jamaica">Jamaica</option> 
				<option value="Japan">Japan</option> 
				<option value="Jordan">Jordan</option> 
				<option value="Kazakhstan">Kazakhstan</option> 
				<option value="Kenya">Kenya</option> 
				<option value="Kiribati">Kiribati</option> 
				<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
				<option value="Korea, Republic of">Korea, Republic of</option> 
				<option value="Kuwait">Kuwait</option> 
				<option value="Kyrgyzstan">Kyrgyzstan</option> 
				<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
				<option value="Latvia">Latvia</option> 
				<option value="Lebanon">Lebanon</option> 
				<option value="Lesotho">Lesotho</option> 
				<option value="Liberia">Liberia</option> 
				<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
				<option value="Liechtenstein">Liechtenstein</option> 
				<option value="Lithuania">Lithuania</option> 
				<option value="Luxembourg">Luxembourg</option> 
				<option value="Macao">Macao</option> 
				<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
				<option value="Madagascar">Madagascar</option> 
				<option value="Malawi">Malawi</option> 
				<option value="Malaysia">Malaysia</option> 
				<option value="Maldives">Maldives</option> 
				<option value="Mali">Mali</option> 
				<option value="Malta">Malta</option> 
				<option value="Marshall Islands">Marshall Islands</option> 
				<option value="Martinique">Martinique</option> 
				<option value="Mauritania">Mauritania</option> 
				<option value="Mauritius">Mauritius</option> 
				<option value="Mayotte">Mayotte</option> 
				<option value="Mexico">Mexico</option> 
				<option value="Moldova, Republic of">Moldova, Republic of</option> 
				<option value="Monaco">Monaco</option> 
				<option value="Mongolia">Mongolia</option> 
				<option value="Montserrat">Montserrat</option> 
				<option value="Morocco">Morocco</option> 
				<option value="Mozambique">Mozambique</option> 
				<option value="Myanmar">Myanmar</option> 
				<option value="Namibia">Namibia</option> 
				<option value="Nauru">Nauru</option> 
				<option value="Nepal">Nepal</option> 
				<option value="Netherlands">Netherlands</option> 
				<option value="Netherlands Antilles">Netherlands Antilles</option> 
				<option value="New Caledonia">New Caledonia</option> 
				<option value="New Zealand">New Zealand</option> 
				<option value="Nicaragua">Nicaragua</option> 
				<option value="Niger">Niger</option> 
				<option value="Nigeria">Nigeria</option> 
				<option value="Niue">Niue</option> 
				<option value="Norfolk Island">Norfolk Island</option> 
				<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
				<option value="Norway">Norway</option> 
				<option value="Oman">Oman</option> 
				<option value="Pakistan">Pakistan</option> 
				<option value="Palau">Palau</option> 
				<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
				<option value="Panama">Panama</option> 
				<option value="Papua New Guinea">Papua New Guinea</option> 
				<option value="Paraguay">Paraguay</option> 
				<option value="Peru">Peru</option> 
				<option value="Philippines">Philippines</option> 
				<option value="Pitcairn">Pitcairn</option> 
				<option value="Poland">Poland</option> 
				<option value="Portugal">Portugal</option> 
				<option value="Puerto Rico">Puerto Rico</option> 
				<option value="Qatar">Qatar</option> 
				<option value="Reunion">Reunion</option> 
				<option value="Romania">Romania</option> 
				<option value="Russian Federation">Russian Federation</option> 
				<option value="Rwanda">Rwanda</option> 
				<option value="Saint Helena">Saint Helena</option> 
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
				<option value="Saint Lucia">Saint Lucia</option> 
				<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
				<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
				<option value="Samoa">Samoa</option> 
				<option value="San Marino">San Marino</option> 
				<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
				<option value="Saudi Arabia">Saudi Arabia</option> 
				<option value="Senegal">Senegal</option> 
				<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
				<option value="Seychelles">Seychelles</option> 
				<option value="Sierra Leone">Sierra Leone</option> 
				<option value="Singapore">Singapore</option> 
				<option value="Slovakia">Slovakia</option> 
				<option value="Slovenia">Slovenia</option> 
				<option value="Solomon Islands">Solomon Islands</option> 
				<option value="Somalia">Somalia</option> 
				<option value="South Africa">South Africa</option> 
				<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
				<option value="Spain">Spain</option> 
				<option value="Sri Lanka">Sri Lanka</option> 
				<option value="Sudan">Sudan</option> 
				<option value="Suriname">Suriname</option> 
				<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
				<option value="Swaziland">Swaziland</option> 
				<option value="Sweden">Sweden</option> 
				<option value="Switzerland">Switzerland</option> 
				<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
				<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
				<option value="Tajikistan">Tajikistan</option> 
				<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
				<option value="Thailand">Thailand</option> 
				<option value="Timor-leste">Timor-leste</option> 
				<option value="Togo">Togo</option> 
				<option value="Tokelau">Tokelau</option> 
				<option value="Tonga">Tonga</option> 
				<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
				<option value="Tunisia">Tunisia</option> 
				<option value="Turkey">Turkey</option> 
				<option value="Turkmenistan">Turkmenistan</option> 
				<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
				<option value="Tuvalu">Tuvalu</option> 
				<option value="Uganda">Uganda</option> 
				<option value="Ukraine">Ukraine</option> 
				<option value="United Arab Emirates">United Arab Emirates</option> 
				<option value="United Kingdom">United Kingdom</option> 
				<option value="United States">United States</option> 
				<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
				<option value="Uruguay">Uruguay</option> 
				<option value="Uzbekistan">Uzbekistan</option> 
				<option value="Vanuatu">Vanuatu</option> 
				<option value="Venezuela">Venezuela</option> 
				<option value="Viet Nam">Viet Nam</option> 
				<option value="Virgin Islands, British">Virgin Islands, British</option> 
				<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
				<option value="Wallis and Futuna">Wallis and Futuna</option> 
				<option value="Western Sahara">Western Sahara</option> 
				<option value="Yemen">Yemen</option> 
				<option value="Zambia">Zambia</option> 
				<option value="Zimbabwe">Zimbabwe</option>
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
		<div class="col-md-3">
			<div clas="label">Ciudad</div>
			<input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
		</div>
	</div>

<hr>

	<div class="row">
		<div class="col-md-2">
		<div clas="label">Lada</div>
			<input type="text" name="lada" class="form-control" placeholder="Lada">
		</div>
		<div class="col-md-4">
			<div clas="label">Telefono</div>
			<input type="text" name="telefono" class="form-control" placeholder="Telefono">
		</div>
		<div class="col-md-6">
			<div clas="label">* Email</div>
			<input type="text" name="email" class="form-control" placeholder="Email">
		</div>
	</div>

<hr>


	<div class="row">
		<div class="col-md-4">
			<div clas="label">* Producto</div>
			<input type="text" name="equipodeinteres" class="form-control" placeholder="Producto">
		</div>
		<div class="col-md-4">
			<div clas="label">Medio</div>
			<select class="form-control" id="medio" name="medio" >
				<option></option>
				<option value="Llamada REALIZADA a cliente PROSPECTO">Llamada REALIZADA a cliente PROSPECTO</option>
				<option value="Llamada ENTRANTE por cliente REGISTRADO">Llamada ENTRANTE por cliente REGISTRADO</option>
				<option value="Llamada REALIZADA a cliente REGISTRADO">Llamada REALIZADA a cliente REGISTRADO</option>
				<option value="Llamada ENTRANTE por cliente PROSPECTO">Llamada ENTRANTE por cliente PROSPECTO</option>
				<option value="Seguimiento Ventas Equipo">Seguimiento Ventas Equipo</option>
				<option value="Facebook">Facebook</option>
				<option value="Twitter">Twitter</option>
				<option value="Mercado Libre">Mercado Libre</option>
				<option value="YouTube">YouTube</option>
				<option value="Seguimiento Tintas">Seguimiento Tintas</option>
			</select>
		</div>
		<div class="col-md-4">
			<div clas="label">* Giro</div>
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
	</div>

<hr>

	<div class="row">
		<div class="col-md-12">
		<div clas="label">Comentarios</div>
			<textarea name="comentarios" placeholder="Comentarios" class="form-control" cols="30" rows="5" style="resize: none;"></textarea>
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

usuario<br />
<?php

	$usuario = $_SESSION["usuario"];
?>

<input type="text" name="usuario" readonly="readonly" value="<?= $usuario ?>" class="form-control" placeholder="Usuario">

</form>