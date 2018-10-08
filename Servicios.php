<?php 

	if ($g != ''  OR $g != 'servicios') {
		
		require 'static/views/Servicios.views.php';
	}else{
		header('Location:'.RUTA);
	}

 ?>