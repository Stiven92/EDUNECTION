<!DOCTYPE html>
<html lang="es"> 

	<?php 
    include'layout/head.php'
	 ?>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader"></span>
		</div>
		<!-- END PRELOADER -->		

		<?php 
        include'layout/navbar.php'
		 ?>		

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>Página no encontrada</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li> / 404</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
	<!-- START 404 -->
	<section class="zero_area section-padding">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="error_page">
						<img src="../assets/img/404.svg" class="img-fluid" alt="404 error" />
						<h2>Oops! Página no encontrada</h2>
						<p>Mmm. Tenemos problemas para encontrar ese sitio. Inténtalo de nuevo más tarde o comprueba tu conexión a la red..</p>
						<div class="home_btn">
							<a href="index.php" class="btn_one">volver a casa </a>
						</div>	
					</div>
			  </div><!--- END COL -->				  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END 404 -->	
		
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
    </body>
</html>