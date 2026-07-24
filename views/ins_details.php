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
						<h1>Detalles del instructor</h1>
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li> / detalles del instructor</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
	<!-- START AGENT PROFILE -->
	<section class="template_agent section-padding">
		<div class="container">
			<div class="row">
			  <div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="single_agent">
						<div class="single_agent_image">
							<img src="../assets/img/team/team1.jpg" class="img-fluid" alt=""/>
						</div>
						<div class="single_agent_content">
							<h4>Khela hobe ahy hay</h4>
							<h5>Instructor de Ciencias</h5>
							<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.</p>
							<ul>
								<li><i class="fa fa-envelope-o"></i>contact@gmail.com</li>
								<li><i class="fa fa-phone"></i>(+123) 425 857 954 148</li>
								<li><i class="fa fa-plane"></i>www.example.com</li>
								<li><i class="fa fa-skype"></i>skype.myinfo88</li>
							</ul>
						</div>
						<div class="agent_social">
							<ul class="list-inline">
								<li><a href="#" class="top_f_facebook"><img src="../assets/img/fb.svg" alt="" /></a></li>
								<li><a href="#" class="top_f_facebook"><img src="../assets/img/pn.svg" alt="" /></a></li>
								<li><a href="#" class="top_f_facebook"><img src="../assets/img/ins.svg" alt="" /></a></li>
							</ul>
						</div>
					</div><!--- END SINGLE ITEM -->		
			  </div><!--- END COL -->				  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->		
	</section>
	<!-- END AGENT PROFILE -->	
		
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
    </body>
</html>