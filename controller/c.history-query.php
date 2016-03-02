<?php

if ($whereUser == '' AND $filterDate1 == '' AND $filterDate1 == '' AND $filtrarStatus == '') {
	$WHERE = '';
}
else {
	$WHERE = 'WHERE';
}


if ($filtrarporvendedor != '') {
	if ($filterDate1 == '--' OR $filterDate1 == '') {
  		if ($filterDate2 == '--' OR $filterDate2 == '') {
          		if ($filtrarStatus == '') {
            			$whereDate = '';
            			$whereUser = "(usuario = '$filtrarporvendedor')";
            			$whereStatus = '';
          		}
          		else {
	            		$whereUser = "(usuario = '$filtrarporvendedor') AND ";
            			$whereDate = '';
            			$whereStatus = "(estadodeventa = '$filtrarStatus')";
       	   	}
		}
		else {
	    		$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
    			$whereUser = "(usuario = '$filtrarporvendedor') AND";
  		}
	}
	else {
        	if ($filtrarStatus == '') {
			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
            		$whereUser = "(usuario = '$filtrarporvendedor') AND";
            		$whereStatus = '';
        	}
		else {
			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND ";
            		$whereUser = "(usuario = '$filtrarporvendedor') AND ";
            		$whereStatus = "(estadodeventa = '$filtrarStatus')";
        	}
	}
}


else {
	
	if ($filtrarStatus == '') {

		if ($filterDate1 == '--' OR $filterDate1 == '' OR $filterDate2 == '--' OR $filterDate2 == '') {
			$WHERE = '';
		}
		else {
			
			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
		}
		
	}
	else {
		if ($filterDate1 == '--' OR $filterDate1 == '' OR $filterDate2 == '--' OR $filterDate2 == '') {
			$whereStatus = "(estadodeventa = '$filtrarStatus')";	
		}
		else {
			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
			$whereStatus = "(estadodeventa = '$filtrarStatus')";	
		}
	}

	/*
	if ($filterDate1 == '--' OR $filterDate1 == '') {
  		if ($filterDate2 == '--' OR $filterDate2 == '') {
          		if ($filtrarStatus == '') {
            			$whereDate = '';
            			$whereUser = "";
            			$whereStatus = '';
          		}
          		else {
	            		$whereUser = "";
            			$whereDate = '';
            			$whereStatus = "(estadodeventa = '$filtrarStatus')";
       	   	}
		}
		else {
	    		$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
    			$whereUser = "";
  		}
	}
	else {
        	if ($filtrarStatus == '') {
			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
            		$whereUser = "";
            		$whereStatus = '';
        	}
		else {
			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
            		$whereUser = "";
            		$whereStatus = "(estadodeventa = '$filtrarStatus')";
        	}
	}
	*/
}

?>