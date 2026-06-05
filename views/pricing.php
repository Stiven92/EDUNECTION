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
						<h1>Pricing Plan</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li> / Pricing</li>
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
								<h2>Starter</h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">$29</h1>
							<h5>Monthly</h5>
							<ul>
								<li>15 website</li>
								<li>50GB Disk Space</li>
								<li>50 Email Accounts</li>
								<li>50GB Monthly Bandwidth</li>
								<li>10 Subdomains</li>
								<li>15 Domains</li>
								<li>Unlimited Support</li>
							</ul>
							<a class="btn_one" href="#">Get start</a>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single-pricing">
							<div class="price-head">								
								<h2>popular</h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<h1 class="price">$49</h1>
							<h5>Monthly</h5>
							<ul>
								<li>15 website</li>
								<li>50GB Disk Space</li>
								<li>50 Email Accounts</li>
								<li>50GB Monthly Bandwidth</li>
								<li>10 Subdomains</li>
								<li>15 Domains</li>
								<li>Unlimited Support</li>
							</ul>
							<a class="btn_one" href="#">Get start</a>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single-pricing single-pricing-white">
							<div class="price-head">								
								<h2>Advance</h2>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<span class="price-label">Best</span>
							<h1 class="price">$69</h1>
							<h5>Monthly</h5>
							<ul>
								<li>15 website</li>
								<li>50GB Disk Space</li>
								<li>50 Email Accounts</li>
								<li>50GB Monthly Bandwidth</li>
								<li>10 Subdomains</li>
								<li>15 Domains</li>
								<li>Unlimited Support</li>
							</ul>
							<a class="btn_one" href="#">Get start</a>
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
							<h3>Helping <span>86,000+</span> global companies take the gloves off </h3>
						</div>					
					</div><!-- END COL  -->
					<div class="col-lg-8 col-sm-8 col-xs-12 text-center">
						<div class="partner">
							<a href="#"><img src="../assets/img/clients/1.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/2.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/3.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/4.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/5.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/2.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/1.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/3.png" alt="image"></a>
							<a href="#"><img src="../assets/img/clients/4.png" alt="image"></a>
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