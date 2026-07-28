<!DOCTYPE html>
<html lang="es">

<?php 
include 'layout/head.php';
?>

	<body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader"></span>
		</div>
		<!-- END PRELOADER -->

		<?php include 'layout/navbar.php'; ?>

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<br>
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<br>
						<h1>Nuestro Blog</h1>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li> / Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- END SECTION TOP -->


		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="single_blog">
							<img src="../assets/img/blog/1.jpg" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>10 Mayo, 2026 | <a href="blog_single.php">Educación</a></span>
								<h2><a href="blog_single.php">La transformación digital en las instituciones educativas</a></h2>
								<a class="btn_one" href="blog_single.php">Leer más <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="single_blog">
							<img src="../assets/img/blog/2.jpg" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>18 Mayo, 2026 | <a href="blog_single.php">Tecnología</a></span>
								<h2><a href="blog_single.php">Beneficios de gestionar calificaciones de forma digital</a></h2>
								<a class="btn_one" href="blog_single.php">Leer más <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="single_blog">
							<img src="../assets/img/blog/3.jpg" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>25 Mayo, 2026 | <a href="blog_single.php">Innovación</a></span>
								<h2><a href="blog_single.php">Cómo mejorar la comunicación entre docentes y acudientes</a></h2>
								<a class="btn_one" href="blog_single.php">Leer más <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
						<div class="single_blog">
							<img src="../assets/img/blog/4.jpg" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>02 Junio, 2026 | <a href="blog_single.php">Plataforma</a></span>
								<h2><a href="blog_single.php">Cinco razones para implementar Edunection en tu institución</a></h2>
								<a class="btn_one" href="blog_single.php">Leer más <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
						<div class="single_blog">
							<img src="../assets/img/blog/5.jpg" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>08 Junio, 2026 | <a href="blog_single.php">Educación</a></span>
								<h2><a href="blog_single.php">La importancia del seguimiento académico en tiempo real</a></h2>
								<a class="btn_one" href="blog_single.php">Leer más <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="single_blog">
							<img src="../assets/img/blog/6.jpg" class="img-fluid" alt="image" />
							<div class="content_box">
								<span>15 Junio, 2026 | <a href="blog_single.php">SENA</a></span>
								<h2><a href="blog_single.php">Edunection: un proyecto desarrollado por aprendices SENA</a></h2>
								<a class="btn_one" href="blog_single.php">Leer más <i class="ti-arrow-top-right"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- END BLOG -->

		<?php include 'layout/foother_last_jquery.php'; ?>

	</body>
</html>