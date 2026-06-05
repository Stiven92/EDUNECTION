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

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="index.php"><img src="../assets/img/logo.png" alt=""></a>          				
						</div>
					</div><!--- END Col -->
					
					<div class="col-60 d-flex">
						<nav id="main-menu">
							<ul>
								<li class="menu-item-has-children"><a href="#">Home</a>
									<ul>										
										<li><a href="index.php">Home 01</a></li>
										<li><a href="index2.php">Home 02</a></li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>				  				  
								<li class="menu-item-has-children"><a href="course.php">Course</a>
									<ul>										
										<li><a href="course.php">Course</a></li>
										<li><a href="course_details.php">Course Details</a></li>
									</ul>
								</li>								
								<li class="menu-item-has-children"><a href="#">Pages</a>
									<ul>										
										<li><a href="instructor.php">Instructor</a></li>
										<li><a href="ins_details.php">Instructor Details</a></li>
										<li><a href="pricing.php">Pricing Plan</a></li>
										<li><a href="faq.php">Faq Page</a></li>			
										<li><a href="404.php">404</a></li>				
									</ul>
								</li>							
								<li class="menu-item-has-children"><a href="blog.php">Blog</a>
									<ul>										
										<li><a href="blog.php">Blog</a></li>
										<li><a href="blog_single.php">Blog Details</a></li>
									</ul>
								</li>							  
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
					</div><!--- END Col -->
					
					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<a href="../admin/html/index.php" class="header-btn">Sign In</a>
						<a href="contact.php" class="btn_one">Sign Up</a>
					</div><!--- END Col -->
					
					
					<ul class="mobile_menu">						
						<li><a href="#">Home</a>
							<ul class="sub-menu">										
								<li><a href="index.php">Home 01</a></li>
								<li><a href="index2.php">Home 02</a></li>						
							</ul>
						</li>	
						<li><a href="about.php">About</a></li>						
						<li><a href="#">Course</a>
							<ul class="sub-menu">										
								<li><a href="course.php">Course</a></li>
								<li><a href="course_details.php">Course Deails</a></li>									
							</ul>
						</li>
						<li><a href="#">Pages</a>
							<ul class="sub-menu">									
								<li><a href="instructor.php">Instructor</a></li>
								<li><a href="ins_details.php">Instructor Details</a></li>
								<li><a href="pricing.php">Pricing Plan</a></li>
								<li><a href="faq.php">Faq Page</a></li>			
								<li><a href="404.php">404</a></li>							
							</ul>
						</li>			
						<li><a href="blog.php">Blog</a>
							<ul class="sub-menu">										
								<li><a href="blog.php">Blog</a></li>
								<li><a href="blog_single.php">Blog Details</a></li>
							</ul>
						</li>						
						<li><a href="contact.php">Contact</a></li>
					</ul>			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->	

		<!-- START SECTION TOP -->
		<section class="section-top">
			<div class="container">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h1>Our instructor</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li> / instructor</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
		<!-- START TEAM -->
		<section class="team_area section-padding">
			<div class="container">									
				<div class="section-title text-center">
					<h2>Meet our Instructors</h2>
					<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
				</div>						
				<div class="row">													
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team1.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Bilkis Vabi</h3>
								<span>Web designer</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>04 Course</u></span>
								<span class="ti-user"> <u>27 Student</u></span>
							</div>									
						</div>
					</div><!--- END COL -->										
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team2.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Mood Wasim</h3>
								<span>TemplateMonster company</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>06 Course</u></span>
								<span class="ti-user"> <u>41 Student</u></span>
							</div>							
						</div>
					</div><!--- END COL -->										
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team3.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Shyinn tim</h3>
								<span>Codecanyou</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>13 Course</u></span>
								<span class="ti-user"> <u>31 Student</u></span>
							</div>
						</div>
					</div><!--- END COL -->										
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team4.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Shorif shorifa</h3>
								<span>Tsc chottor</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>07 Course</u></span>
								<span class="ti-user"> <u>24 Student</u></span>
							</div>
						</div>
					</div><!--- END COL -->							  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TEAM -->	
		
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
    </body>
</html>