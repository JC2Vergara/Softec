<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat</title>
	<?php echo ENLACES; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>static/css/chat.css">
	<script src="<?php echo RUTA; ?>static/js/chat.js"></script>
</head>
<body>
	<?php require 'header.views.php'; ?>
	<div class="wrap">
		<div class="inicia">
			<h3 class="enca colorText">¡Mas Informacion!</h3>
			<p class="colorText">Inicia un chat con unos de nuestros profesionales, te responderan de inmediato.</p>
			<div class="formChat">
				<div class="group">
					<label for="nombreChat" class="colorText">¿Como Te Llamas?</label>
					<input type="text" name="" id="nombreChat" placeholder="¿Como Te Llamas?" class="input colorText">
				</div>
				<div class="group">
					<label for="emailChat" class="colorText">¿Tu Email?</label>
					<input type="email" name="" id="emailChat" placeholder="¿Tu Email?" class="input colorText">
				</div>
				<div class="chatIni">
					<button class="btn">Deseo empezar</button>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>