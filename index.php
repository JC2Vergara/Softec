<?php 

	require 'include/config.softec.php';
	require 'include/funcs.softec.php';
	require 'include/app.softec.php';


	if (isset($_GET['real'])) {
		$g = explode('/' , limpiarTexto($_GET['real']))[0];
		if ($g == 'chat') {
			require 'Chat.php';
		}elseif ($g == 'blog') {
			require 'Blog.php';
		}elseif ($g == 'contacto') {
			require 'Contacto.php';
		}elseif ($g == 'pago') {
			require 'Pago.php';
		}elseif ($g == 'servicios') {
			require 'Servicios.php';
		}elseif ($g == 'proyectos') {
			require 'Proyectos.php';
		}elseif ($g == 'admin') {
			header("Location: ".RUTA."admin/index.php");
		}else{
			header("Location: ".RUTA."Error.php?e=false&type=1");
		}
	}else{
		require 'static/views/index.views.php';
	}



 ?>

 