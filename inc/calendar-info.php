<style>

td.td-color {
	height:10px;
	width:20%;
}

td.td-info {
	font-size:100%;
	text-align:center;
}

div.div-info {
	padding:2px;
	text-align:center;
	width:90%;
}

table.table-info {
	width:50%;
	margin-top: 10px;
}

</style>

<hr>

<div class="div-info">

<table class="table-info">
	<tr>
		<td bgcolor="<?= $color_01 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_02 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_03 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_04 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_05 ?>" class="td-color"></td>
	</tr>
	<tr>
		<td width="16%" nowrap="nowrap" class="td-info">1 <br> Llamada</td>
		<td width="16%" nowrap="nowrap" class="td-info">2 <br> Llamadas</td>
		<td width="16%" nowrap="nowrap" class="td-info">3 <br> Llamadas</td>
		<td width="16%" nowrap="nowrap" class="td-info">4 <br> Llamadas</td>
		<td width="16%" nowrap="nowrap" class="td-info">5 - 10 <br> Llamadas</td>
	</tr>
	<tr>
		<td colspan="5" class="td-color"></td>
	</tr>
	<tr>
		<td bgcolor="<?= $color_06 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_07 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_08 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_09 ?>" class="td-color"></td>
		<td bgcolor="<?= $color_10 ?>" class="td-color"></td>
	</tr>
	<tr>
		<td nowrap="nowrap" class="td-info">11 - 20 <br> Llamadas</td>
		<td nowrap="nowrap" class="td-info">21 - 30 <br> Llamadas</td>
		<td nowrap="nowrap" class="td-info">31 - 40 <br> Llamadas</td>
		<td nowrap="nowrap" class="td-info">41 - 50 <br> Llamadas</td>
		<td nowrap="nowrap" class="td-info">51 + <br> Llamadas</td>
	</tr>
</table>

</div>