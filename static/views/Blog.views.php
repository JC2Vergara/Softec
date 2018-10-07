<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<?php echo ENLACES; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>static/css/blog.css">
</head>
<body>
	<?php require 'header.views.php'; ?>
	<div class="wrap">
		<div id="blog">
			<section id="postU">
				<?php for($i = 0; $i <= 5; $i++): ?>
					<div class="post post<?php echo $i; ?>" id="<?php echo $i; ?>">
						<div class="imgPost">
							<img src="<?php echo RUTA; ?>static/image/static/bg.jpg">
							<div class="icoImgEn">
								<a href=""><i class="fas fa-angle-right"></i></a>
							</div>
						</div>
						<div class="infoTextPost">
							<div class="textInfoL">
								<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, dolore.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quisquam asperiores perspiciatis exercitationem sunt repellendus. Quisquam aut, velit ea fugiat?</p>
								<div class="mas">
									<a href="" class="btn">Leer mas.</a>
								</div>
							</div>
							<div class="infoAdd">
								<div class="date">
									<p>Abril 03, 2018</p>
								</div>
								<div class="comment">
									<p>10 comentarios</p>
								</div>
								<div class="autor">
									<p>Jean Carlo</p>
								</div>
								<div class="autor">
									<a href="">Programacion</a>
								</div> 
							</div>
						</div>
					</div>
				<?php endfor; ?>
			<div class="page">
				<ul>
					<li>
						<a href=""><i class="fas fa-angle-left"></i></a>
						<a href="" class="activePage">1</a>
						<a href="">2</a>
						<a href="">3</a>
						<a href="">4</a>
						<a href="">5</a>
						<a href=""><i class="fas fa-angle-right"></i></a>
					</li>
				</ul>
			</div>
			</section>
			<section id="aside">
				<aside class="aside">
					<div class="buscar">
						<input type="search" name="" class="input" placeholder="Buscar...">
					</div>
					<div class="postRecent">
						<h3>Publicaciones Recientes</h3>
						<?php for ($i = 0 ; $i <= 5 ; $i++): ?>
							<a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, quidem.</a>
						<?php endfor;?>
					</div>
					<div class="postCategoria">
						<h3>Categorias</h3>
						<div class="catePost">
							<div class="lC">
								<a href="">Diseño web</a>
								<a href="">Diseño Grafico</a>
							</div>
							<div class="rC">
								<a href="">Empresas</a>
								<a href="">Programacion</a>
							</div>
						</div>
					</div>
				</aside>
			</section>
		</div>
	</div>
</body>
</html>