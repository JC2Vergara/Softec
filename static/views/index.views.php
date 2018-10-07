<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio | Softec</title>
	<?php echo ENLACES; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>static/css/index.css">
	<script src="<?php echo RUTA; ?>static/js/index.js"></script>
</head>
<body>
	<?php require 'header.views.php'; ?>
	<!-- <div class="wrap"> -->

		<section id="slider">
			<div class="slider">
			  <div class="arrows">
			    <a class="previous" href="#"><i class="fas fa-angle-left"></i></a>
			    <a class="next" href="#"><i class="fas fa-angle-right"></i></a>
			  </div>
			  <div class="slides">
					<div class="slide active blue" >
						<h2>Timezones</h2>
						<p>Clocks+ helps you break the barriers of space and time to get information for any city you like. You can search for and organise your favorite cities so that you can easily find out the correct local time.</p>
						<a target="_blank" href="https://itunes.apple.com/gb/app/clocks+/id937380413?mt=8">Check me out <i class="fas fa-angle-right"></i></a>
					</div>
					<div class="slide white" >
						<h2>Alarms</h2>
						<p>Nobody wants to miss out on important events, but sometimes, it’s hard to find the time in another city. Clocks+ lets you set alarms for your favorite cities in a simple and intuitive way.</p>
						<a target="_blank" href="https://itunes.apple.com/gb/app/clocks+/id937380413?mt=8">Start the Clock <i class="fas fa-angle-right"></i></a>
					</div>
					<div class="slide red" >
						<h2>Widgets/Today Extension</h2>
						<p>Clocks+ wouldn’t be a modern app without Widgets. Your favorite cities appear in the Today View with just a swipe down, for quick glancing, Did we mention that they look awesome, too?</p>
						<a target="_blank" href="https://itunes.apple.com/gb/app/clocks+/id937380413?mt=8">Download on AppStore <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
				<div class="bullets">
				</div>
			</div>
		</section>




		<section id="somos">
			<div class="caracteristicas">
				<h3>Caracteristicas</h3>
				<div class="conteGeCara">
					<div class="contePor conteCara">
						<h3>¿Porqué nosotros?</h3>
						<div class="line"><div></div></div>
						<p>En Softec contamos con todo un equipo de profesionales en el mundo del diseño de paginas web, redes sociales y demás servicios integrales dispuestos a llevar a tu empresa a otro nivel creando sitios web funcionales.</p>
						<p>El mundo mira hacia el internet y ¿tú ya esta ahí?, ¿ya das soluciones a tus posibles clientes desde tu pagina web?.</p>
						<p>Llegar a otro nivel esta al alcance de todos pero no con la ayuda de cualquiera, nosotros estamos conscientes de la importancia que tiene tu empresa y es por eso que ponemos a tu disposición todo nuestro equipo no solo para diseñar tu pagina web, sino para brindarte toda una gama de servicios y soluciones para tu beneficio inmediato... </p>
					</div>
					<div class="caraDes conteCara">
						<h3>Nuestras Características</h3>
						<div class="line"><div></div></div>
						<div class="cara cara1">
							<div class="icoCara">
								<i class="fas fa-users"></i>
							</div>
							<div class="textCara">
								<h4>Equipo especializado</h4>
								<p>Contamos con un equipo profesional en cada área para ofrecerte resultados superiores a los esperados</p>
							</div>
						</div>
						<div class="cara cara2">
							<div class="icoCara">
								<i class="fab fa-html5"></i>
							</div>
							<div class="textCara">
								<h4>Tecnología de punta</h4>
								<p>Trabajamos con las más actuales tecnologías y estándares del mercado para el mejor funcionamiento y alcance de nuestros sitios web</p>
							</div>
						</div>
						<div class="cara cara3">
							<div class="icoCara">
								<i class="fas fa-desktop"></i>
							</div>
							<div class="textCara">
								<h4>En todos lados</h4>
								<p>Desarrollamos sitios responsivos y optimizados para todos los dispositivos, pensando en la máxima captación de potenciales clientes</p>
							</div>
						</div>
						<div class="cara cara4">
							<div class="icoCara">
								<i class="far fa-gem"></i>
							</div>
							<div class="textCara">
								<h4>Experiencia a tu servicio</h4>
								<p>Contamos con más de 12 años de experiencia a tu disposición</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="servicios" style="background-image: url('<?php echo RUTA; ?>static/image/static/bg.jpg');">
			<div class="serverConte">
				<h3>Nuestros servicios</h3>
				<div class="servers">
					<div class="icoServer"><i class="fas fa-desktop"></i></div>
					<div class="textServer">
						<h3>Desarrollo Web</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi corporis earum quae voluptatibus repudiandae magnam nemo, veniam illo esse. Laboriosam.</p>
						<a href="<?php echo RUTA."Servicios/Web/"; ?>" class="btn">¡Me interesa!</a>
					</div>
				</div>
				<div class="change servers">
					<div class="icoServer"><i class="fas fa-layer-group"></i></div>
					<div class="textServer">
						<h3>Diseño Gráfico</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi corporis earum quae voluptatibus repudiandae magnam nemo, veniam illo esse. Laboriosam.</p>
						<a href="<?php echo RUTA."Servicios/Grafico/"; ?>" class="btn">¡Me interesa!</a>
					</div>
				</div>
				<div class="servers">
					<div class="icoServer"><i class="fas fa-chart-line"></i></div>
					<div class="textServer">
						<h3>Marketing</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi corporis earum quae voluptatibus repudiandae magnam nemo, veniam illo esse. Laboriosam.</p>
						<a href="<?php echo RUTA."Servicios/Marketing/"; ?>" class="btn">¡Me interesa!</a>
					</div>
				</div>
			</div>
		</section>


		<section id="team">
			<div class="container">
				<h3>Conoce nuestro equipo</h3>
				<div class="row">
					<?php for($i = 0; $i <= 3; $i++): ?>
						<div class="column">
							<div class="imgBox">
								<img src="https://www.somosmamas.com.ar/wp-content/uploads/2017/11/cortes-de-cabello-para-mujer-mediano.jpg">
								<div class="details">
									<h3>Nombre <br><span>CEO and Founder</span></h3>
									<ul>
										<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
										<li><a href=""><i class="fab fa-instagram"></i></a></li>
										<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					<?php endfor?>
				</div>
				<div style="clear: both;"></div>
			</div>
		</section>
		<section id="testimonios">
			<section id="testim" class="testim">
<!--         <div class="testim-cover"> -->
	            <div class="wrap">

	                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
	                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
	                <ul id="testim-dots" class="dots">
	                    <li class="dot active"></li><!--
	                    --><li class="dot"></li><!--
	                    --><li class="dot"></li><!--
	                    --><li class="dot"></li><!--
	                    --><li class="dot"></li>
	                </ul>
	                <div id="testim-content" class="cont">
	                    
	                    <div class="active">
	                        <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>
	                        <h2>Lorem P. Ipsum</h2>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
	                    </div>

	                    <div>
	                        <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
	                        <h2>Mr. Lorem Ipsum</h2>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
	                    </div>

	                    <div>
	                        <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
	                        <h2>Lorem Ipsum</h2>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
	                    </div>

	                    <div>
	                        <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
	                        <h2>Lorem De Ipsum</h2>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
	                    </div>

	                    <div>
	                        <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
	                        <h2>Ms. Lorem R. Ipsum</h2>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
	                    </div>

	                </div>

	            </div>
<!--         </div> -->
    		</section>
		</section>
	<!-- </div> -->
	<?php require 'footer.views.php'; ?>
</body>
</html>