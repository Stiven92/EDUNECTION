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
						<h1>Instructor Details</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li> / instructor details</li>
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
							<h5>Science Instructor</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever type book.</p>
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