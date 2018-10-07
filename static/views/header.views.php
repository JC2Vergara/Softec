<header id="header" class="bg">
	<nav id="nav">
		<div class="navL">
			<a href="<?php echo RUTA; ?>"><img src="<?php echo RUTA; ?>static/image/static/logo.jpg"></a>
		</div>
		<div class="navR">
			<ul>

				<li class="server">
					<a href="#subMenu"><i class="fas fa-bullhorn"></i> Servicios</a>

					<div class="subMenu bg">
						<ul>
							<li><a href="<?php echo RUTA."Servicios/Web/"; ?>"><i class="fas fa-desktop"></i> Desarrollo Web</a></li>
							<li><a href="<?php echo RUTA."Servicios/Grafico/"; ?>"><i class="fas fa-layer-group"></i> Diseño Gráfico</a></li>
							<li><a href="<?php echo RUTA."Servicios/Marketing/"; ?>"><i class="fas fa-chart-line"></i> Marketing</a></li>
							<!-- <li><a href=""></a></li> -->
						</ul>
					</div>

				</li>
				<li><a href="<?php echo RUTA; ?>Proyectos/"><i class="fas fa-project-diagram"></i> Proyectos</a></li>
				<li><a href="<?php echo RUTA; ?>Chat/"><i class="fas fa-comment"></i>Chat</a></li>
				<li><a href="<?php echo RUTA; ?>Blog/"><i class="fas fa-file-alt"></i> Blog</a></li>
				<li><a href="<?php echo RUTA; ?>Contacto/"><i class="fas fa-headset"></i> Contacto</a></li>
			</ul>
		</div>
	</nav>
</header>