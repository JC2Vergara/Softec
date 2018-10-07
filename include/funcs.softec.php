<?php 


	function limpiarTexto($limpia){
		$limpia = trim($limpia);
		$limpia = stripslashes($limpia);
		$limpia = filter_var($limpia, FILTER_SANITIZE_STRING);
		$limpia = strtolower($limpia);
		return $limpia;
	}


 ?>