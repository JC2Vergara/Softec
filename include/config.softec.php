<?php 

	define('RUTA', 'http://localhost/Softec/');
	define('CARGANDO', '<div class="loading"><ul><li></li><li></li><li></li><li></li><li></li></ul></div>');
	
	define('ENLACES', '
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" type="image/x-icon" href="'.RUTA.'image/static/favicon.ico">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<!-- CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="'.RUTA.'static/css/generales.css">
		<link rel="stylesheet" type="text/css" href="'.RUTA.'static/css/ef.css">
		<!-- JavaScript -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="'.RUTA.'static/js/generales.js"></script>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	');
	

	$bd_config = array(
		'servidor' => 'localhost',
		'basedatos' => 'youmusik',
		'usuario' => 'root',
		'pass' => ''
	);


 ?>