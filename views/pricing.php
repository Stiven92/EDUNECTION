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
						<h1>Planes de Precios</h1>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li> / Precios</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
		<!-- START PRICING -->
		<section id="pricing" class="pricing-content section-padding">
			<div class="container">										
				<div class="row text-center">									
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>Inicial</h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">$29</h1>
							<h5>Mensual</h5>
							<ul>
								<li>15 sitios web</li>
								<li>50GB de espacio en disco</li>
								<li>50 cuentas de correo</li>
								<li>50GB de ancho de banda mensual</li>
								<li>10 subdominios</li>
								<li>15 dominios</li>
								<li>Soporte ilimitado</li>
							</ul>
							<a class="btn_one" href="#">Empezar</a>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>Popular</h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">$49</h1>
							<h5>Mensual</h5>
							<ul>
								<li>15 sitios web</li>
								<li>50GB de espacio en disco</li>
								<li>50 cuentas de correo</li>
								<li>50GB de ancho de banda mensual</li>
								<li>10 subdominios</li>
								<li>15 dominios</li>
								<li>Soporte ilimitado</li>
							</ul>
							<a class="btn_one" href="#">Empezar</a>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single-pricing single-pricing-white">
							<div class="price-head">								
								<h2>Avanzado</h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<span class="price-label">El mejor</span>
							<h1 class="price">$69</h1>
							<h5>Mensual</h5>
							<ul>
								<li>15 sitios web</li>
								<li>50GB de espacio en disco</li>
								<li>50 cuentas de correo</li>
								<li>50GB de ancho de banda mensual</li>
								<li>10 subdominios</li>
								<li>15 dominios</li>
								<li>Soporte ilimitado</li>
							</ul>
							<a class="btn_one" href="#">Empezar</a>
						</div>
					</div><!--- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END PRICING -->

		<!-- START COMPANY PARTNER LOGO  -->
		<div class="partner-logo section-padding">
			<div class="container">
				<div class="row part_bg">
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="partner_title">
							<h3>Ayudando a más de <span>86.000</span> empresas globales a dar el siguiente paso</h3>
						</div>					
					</div><!-- END COL  -->
					<div class="col-lg-8 col-sm-8 col-xs-12 text-center">
						<div class="partner">
							<a href="#"><img src="../assets/img/clients/1.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/2.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/3.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/4.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/5.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/2.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/1.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/3.png" alt="imagen"></a>
							<a href="#"><img src="../assets/img/clients/4.png" alt="imagen"></a>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</div>
		<!-- END COMPANY PARTNER LOGO -->			
		
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
    </body>
</html>