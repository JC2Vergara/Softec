<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<?php echo ENLACES; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>static/css/contacto.css">
</head>
<body style="background-image: url(<?php echo RUTA; ?>static/image/static/bg.jpg);">
	<?php require 'header.views.php'; ?>
	<div class="contactoConte">
		<section id="contacto">
			<div class="form">
				<form>
					<h2>Contacto</h2>
					<div class="input-box">
						<i class="far fa-address-card"></i>
						<input type="" name="" placeholder="Nombres...">
					</div>
					<div class="input-box">
						<i class="fas fa-at"></i>
						<input type="" name="" placeholder="Email...">
					</div>
					<div class="input-box">
						<i class="fas fa-mobile-alt"></i>
						<input type="" name="" placeholder="Celular...">
					</div>
					<div class="input-box">
						<i class="far fa-comment"></i>
						<textarea placeholder="Mensaje..."></textarea>
					</div>
					<div class="input-box">
						<button class="btn">Enviar</button>
					</div>
				</form>
			</div>
		</section>
	</div>
</body>
</html>