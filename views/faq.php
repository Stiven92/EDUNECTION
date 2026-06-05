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
						<h1>Faq</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li> / Faq</li>
						</ul>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
		
		<!-- START FAQ -->
		<section class="faq_area section-padding">
			<div class="container">															
				<div class="row justify-content-center">		
					<div class="col-lg-7 col-sm-12 col-xs-12">
						<div class="accordion" id="accordionExample">
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								How does it create content?
							  </button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that.
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Is the content original?
							  </button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that.
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								How to write long-form blogs?
							  </button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that.
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
							  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How do I view my usage?
							  </button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that.
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->	
						  <div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
							  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
								How does it create content?
							  </button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
							  <div class="accordion-body">
								Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that. Great value and so easy to use and saves me so much time! I was shocked by how much time and brain energy it saved me. Simple & easy gotta love that.
							  </div>
							</div>
						  </div><!-- END ACCORDION ITEM  -->					  
						</div>						
					</div><!-- END COL  -->	
					<div class="col-lg-5 col-sm-12 col-xs-12">
						<div class="faq_img">
							<img src="../assets/img/faq.jpg" alt="faq image" />
						</div>
					</div>					
				</div><!--END  ROW  -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END FAQ -->				
		
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
    </body>
</html>