<tr>
	<th>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Folio
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a href="<?= $url ?>&orderFolio=ASC"><span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span> Ascendente</a></li>
				<li role="presentation"><a href="<?= $url ?>&orderFolio=DESC"><span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span> Descendente</a></li>
			</ul>
		</div>
	</th>
	<th>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Usuario
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a href="<?= $url ?>&orderUsuario=ASC"><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> Ascendente</a></li>
				<li role="presentation"><a href="<?= $url ?>&orderUsuario=DESC"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> Descendente</a></li>
			</ul>
		</div>
	</th>
	<th>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Cliente
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a href="<?= $url ?>&orderNombre=ASC"><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> Ascendente</a></li>
				<li role="presentation"><a href="<?= $url ?>&orderNombre=DESC"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> Descendente</a></li>
			</ul>
		</div>
	</th>
	<th>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Comentario
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a href="<?= $url ?>&orderComentario=ASC"><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> Ascendente</a></li>
				<li role="presentation"><a href="<?= $url ?>&orderComentario=DESC"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> Descendente</a></li>
			</ul>
		</div>
	</th>
	<th>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Fecha
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a href="<?= $url ?>&orderFecha=ASC"><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> Ascendente</a></li>
				<li role="presentation"><a href="<?= $url ?>&orderFecha=DESC"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> Descendente</a></li>
			</ul>
		</div>
	</th>
	<th>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Próxima Llamada
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation"><a href="<?= $url ?>&orderProximaLlamada=ASC"><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span> Ascendente</a></li>
				<li role="presentation"><a href="<?= $url ?>&orderProximaLlamada=DESC"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span> Descendente</a></li>
			</ul>
		</div>
	</th>
	<th>
		<div class="dropdown">
			<style>
				div.subrayado:hover {
					background-color: #3d86c5;
				}
			</style>
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
				Status
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
				<li role="presentation">
					<form action="history" method="post" id="form-filtrarStatus-Facturado">
						<input type="hidden" name="filtrarStatus" value="Facturado">
						<div onclick="document.getElementById('form-filtrarStatus-Facturado').submit();" style="font-weight:100; margin-left:20px; cursor:pointer;" class="subrayado">
							Facturado
						</div>
						<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
						<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
						<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
					</form>
				</li>
				<li role="presentation">
					<form action="history" method="post" id="form-filtrarStatus-Correo">
						<input type="hidden" name="filtrarStatus" value="Correo">
						<div onclick="document.getElementById('form-filtrarStatus-Correo').submit();" style="font-weight:100; margin-left:20px; cursor:pointer;" class="subrayado">
							Correo
						</div>
						<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
						<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
						<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
					</form>
				</li>
				<li role="presentation">
					<form action="history" method="post" id="form-filtrarStatus-Llamada">
						<input type="hidden" name="filtrarStatus" value="Llamada">
						<div onclick="document.getElementById('form-filtrarStatus-Llamada').submit();" style="font-weight:100; margin-left:20px; cursor:pointer;" class="subrayado">
							Llamada
						</div>
						<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
						<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
						<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
					</form>
				</li>
				<li role="presentation">
					<form action="history" method="post" id="form-filtrarStatus-llamadaycorreo">
						<input type="hidden" name="filtrarStatus" value="llamadaycorreo">
						<div onclick="document.getElementById('form-filtrarStatus-llamadaycorreo').submit();" style="font-weight:100; margin-left:20px; cursor:pointer;" class="subrayado">
							Correo y Llamada
						</div>
						<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
						<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
						<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
					</form>
				</li>
				<li role="presentation">
					<form action="history" method="post" id="form-filtrarStatus-Descartado">
						<input type="hidden" name="filtrarStatus" value="Descartado">
						<div onclick="document.getElementById('form-filtrarStatus-Descartado').submit();" style="font-weight:100; margin-left:20px; cursor:pointer;" class="subrayado">
							Descartado
						</div>
						<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
						<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
						<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
					</form>
				</li>
			</ul>
		</div>
	</th>
</tr>
<!--
<tr>
	<td colspan="6">
		<?= $url ?>
		<br>
		<?= $HTTP_HOST ?>
		<br>
		<?= $REQUEST_URI ?>
		<br>
		<?= strlen($url) ?>
		
	</td>
</tr>
-->