<form action="reportes-<?= $idReporte ?>.php" method="post">
			
<select name="rep10_vendedor">
	<option value=""></option>
	<?php 
		include('model/m.select.vendedores-actuales.php');
	?>
</select>
		
<br /><br />

<table cellpadding="0" cellspacing="0" style="border-collapse: collapse; border: 1px solid #cccccc;" border="1">
	<tr>
		<td colspan="4" align="center">
			<input type="submit" value="Confirmara descarga" src="" style="margin-left:5px; margin-right:5px;"/>
		</td>
	</tr>
</table>	
</form>