
	<?php require_once "../controllers/ObtenerDatosUsuariosController.php";
	?>
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

		<!-- START HOME -->
		<section class="home_bg hb_height" style="background-image: url(assets/img/bg/home-bg.jpg); background-size:cover; background-position: center center;">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-6 col-sm-12 col-xs-12">
		                <div class="hero-text ht_top">
		                	<br>
		                	<br>
		                    <h1><span>Edunection </span>Conectando a la comunidad educativa</h1>
		                    <p>
		                        Edunection es un software académico diseñado para facilitar la gestión escolar mediante herramientas modernas que fortalecen la comunicación, la organización y el seguimiento del proceso educativo.
		                    </p>
		                </div>

					<div class="home_sb2">
						<form action="#" class="banner_subs2">
							<input type="text" class="form-control home_si2" placeholder="Buscar Institución Educativa" required="required">
							<button type="button" class="subscribe__btn">Buscar <i class="fa fa-paper-plane-o"></i></button>
						</form>
					</div>	
		            </div>

		            <div class="col-lg-6 col-sm-12 col-xs-12">
		                <div class="hero-text-img">
		                    <img src="../assets/img/home-img2.png" class="img-fluid" alt="" />

		                    <div class="home_ps">
		                        <span class="ti-layout-grid2"></span>
		                        <h2>+10</h2>
		                        <p>Módulos</p>
		                    </div>

		                </div>
		            </div>

		        </div>
		    </div>
		</section>
		<!-- END HOME -->


		<!-- START COUNTER -->
		<section class="count_area counter_feature">
		    <div class="container">
		        <div class="row">

		            <div class="col-lg-3 col-sm-6 col-xs-12">
		                <div class="single-counter">
		                    <span class="ti-user sc_one"></span>
		                    <h2>4</h2>
		                    <p>Roles del sistema</p>
		                </div>
		            </div>

					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-mobile sc_four"></span>
							<h2>2</h2>
							<p>Versiones disponibles</p>
						</div>
					</div>

		            <div class="col-lg-3 col-sm-6 col-xs-12">
		                <div class="single-counter">
		                    <span class="ti-world sc_three"></span>
		                    <h2>24/7</h2>
		                    <p>Acceso desde cualquier lugar</p>
		                </div>
		            </div>

		            <div class="col-lg-3 col-sm-6 col-xs-12">
		                <div class="single-counter">
		                    <span class="ti-comments sc_four"></span>
		                    <h2>100%</h2>
		                    <p>Comunicación integrada</p>
		                </div>
		            </div>

		        </div>
		    </div>
		</section>
		<!-- END COUNTER -->


		<!-- START CATEGORY -->
		<section class="top_cat__area section-padding" style="background-image: url(assets/img/bg/shape-1.png); background-size:cover; background-position: center center;">
		    <div class="container">

		        <div class="section-title text-center">
		            <h2>¿Por qué elegir Edunection?</h2>
		            <p>
		                Somos una plataforma creada para simplificar la gestión académica y ofrecer una experiencia
		                más organizada, eficiente y accesible para toda la comunidad educativa.
		            </p>
		        </div>

		        <div class="row">

		            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
		                <div class="single_tp">
		                    <span class="sc_one">01</span>
		                    <h3>Gestión<br>Académica</h3>
		                    <p>
		                        Administra actividades, tareas y procesos escolares desde un único lugar.
		                    </p>
		                </div>
		            </div>

		            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
		                <div class="single_tp">
		                    <span class="sc_two">02</span>
		                    <h3>Calificaciones<br>Digitales</h3>
		                    <p>
		                        Consulta, registra y realiza seguimiento al desempeño académico fácilmente.
		                    </p>
		                </div>
		            </div>

		            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
		                <div class="single_tp">
		                    <span class="sc_three">03</span>
		                    <h3>Comunicación<br>Efectiva</h3>
		                    <p>
		                        Facilita la interacción entre docentes, estudiantes y acudientes.
		                    </p>
		                </div>
		            </div>

		            <div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
		                <div class="single_tp">
		                    <span class="sc_four">04</span>
		                    <h3>Boletines<br>Virtuales</h3>
		                    <p>
		                        Publica y consulta boletines académicos de manera rápida y segura.
		                    </p>
		                </div>
		            </div>

		        </div>
		    </div>
		</section>
		<!-- END CATEGORY -->


		<!-- START ABOUT US -->
		<section class="ab_area section-padding">
		    <div class="container">

		        <div class="row">

		            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
		                <div class="ab_img">
		                    <img src="../assets/img/about1.png" class="img-fluid" alt="image">
		                </div>
		            </div>

		            <div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
		                <div class="ab_content">

		                    <h2>Una solución creada para modernizar la gestión de los colegios</h2>

		                    <p>
		                        Edunection es un proyecto desarrollado por aprendices del Servicio Nacional de Aprendizaje (SENA),
		                        cuyo propósito es fortalecer la administración académica mediante una plataforma web intuitiva,
		                        segura y de fácil acceso.
		                    </p>

		                    <p>
		                        Nuestro software integra diferentes herramientas que ayudan a docentes, estudiantes y acudientes
		                        a mantenerse conectados, facilitando el seguimiento del proceso educativo y optimizando la
		                        comunicación dentro de la institución.
		                    </p>

		                    <ul>
		                        <li>
		                            <span class="ti-check"></span>
		                            Gestión centralizada de actividades y procesos académicos.
		                        </li>

		                        <li>
		                            <span class="ti-check"></span>
		                            Comunicación directa entre estudiantes, docentes y acudientes.
		                        </li>

		                        <li>
		                            <span class="ti-check"></span>
		                            Consulta de calificaciones, boletines y novedades desde cualquier dispositivo.
		                        </li>
		                    </ul>

		                    <a class="btn_one" href="about.php">
		                        Conoce más <i class="ti-arrow-top-right"></i>
		                    </a>

		                </div>
		            </div>

		        </div>
		    </div>
		</section>
		<!-- END ABOUT US -->
	
		<!-- START CATEGORY -->
		<section class="top_cat__area section-padding" style="background-image: url(assets/img/bg/section-2.jpg); background-size:cover; background-position: center center;">
		    <div class="container">

		        <div class="section-title text-center">
		            <h2>Herramientas que impulsan la educación</h2>
		            <p>
		                Edunection integra en una sola plataforma las funcionalidades necesarias para
		                optimizar la gestión académica y fortalecer la comunicación entre todos los
		                miembros de la comunidad educativa.
		            </p>
		        </div>

		        <div class="row">
		            <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
		                <div class="cat_list">
		                    <ul>
		                        <li><a href="#"><img src="../assets/img/e1.png" alt="category-image" /> Actividades Académicas</a></li>
		                        <li><a href="#"><img src="../assets/img/e2.png" alt="category-image" /> Calificaciones</a></li>
		                        <li><a href="#"><img src="../assets/img/e3.png" alt="category-image" /> Mensajería</a></li>
		                        <li><a href="#"><img src="../assets/img/e4.png" alt="category-image" /> Boletines</a></li>
		                        <li><a href="#"><img src="../assets/img/e5.png" alt="category-image" /> Asistencia</a></li>
		                        <li><a href="#"><img src="../assets/img/e6.png" alt="category-image" /> Horarios</a></li>
		                        <li><a href="#"><img src="../assets/img/e7.png" alt="category-image" /> Comunicados</a></li>
		                        <li><a href="#"><img src="../assets/img/e8.png" alt="category-image" /> Seguimiento Académico</a></li>
		                        <li><a href="#"><img src="../assets/img/e9.png" alt="category-image" /> Gestión de Usuarios</a></li>
		                        <li><a href="#"><img src="../assets/img/e2.png" alt="category-image" /> Reportes</a></li>
		                        <li><a href="#"><img src="../assets/img/e3.png" alt="category-image" /> Panel Administrativo</a></li>
		                        <li><a href="#"><img src="../assets/img/e7.png" alt="category-image" /> Configuración</a></li>
		                    </ul>
		                </div>
		            </div><!--- END COL -->
		        </div><!--- END ROW -->

		    </div><!--- END CONTAINER -->
		</section>
		<!-- END CATEGORY -->	

		<!-- START COURSE -->
		<section class="home_course section-padding">
			<div class="container">
				<div class="row">

					<?php foreach ($instituciones as $f): ?>
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="single_course">
								<div class="single_c_img">
									<img src="<?= $f['logo']; ?>" class="img-fluid" alt="institution-image" />
									
								</div>
								<h4><a href="login.php?id=<?= $f['id_institucion']; ?>"><?= $f['nombre']; ?></a></h4>
								<p><span class="ti-email"></span> <?= $f['correo']; ?></p>
								<br>
								<p><span class="ti-world"></span> <?= $f['numero_telefonico']; ?></p>
	
							</div>
						</div><!-- END COL -->
					<?php endforeach; ?>

				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END COURSE -->
				
		<!-- START VIDEO -->
		<section class="vid_area section-padding">
			<div class="container">																
				<div class="row">
					<div class="col-lg-12 vp_top wow fadeInUDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="video-area" style="background-image: url(assets/img/bg/video.jpg);  background-size:cover; background-position: center center;">
							<a href="https://www.youtube.com/watch?v=RXv_uIN6e-Y" class="magnific_popup video-button"><i class="fa fa-play"></i></a>
						</div>
					</div><!--- END COL -->	
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END VIDEO -->			
		
		<!-- START TEAM -->
		<section class="team_area section-padding">
			<div class="container">

				<div class="section-title text-center">
					<h2>Conoce a nuestro equipo</h2>
					<p>
						Edunection es un proyecto desarrollado por tres aprendices del Servicio Nacional
						de Aprendizaje (SENA), comprometidos con crear una plataforma que facilite la
						gestión académica y fortalezca la comunicación en las instituciones educativas.
					</p>
				</div>

				<div class="row justify-content-center">

					<!-- Integrante 1 -->
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team2.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>

							<div class="team-prof">
								<h3>Stiven Mendieta</h3>
								<span>Desarrollador Full Stack</span>
							</div>

						</div>
					</div><!-- END COL -->


					<!-- Integrante 2 -->
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team2.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>

							<div class="team-prof">
								<h3>José Fernando Gonzalez</h3>
								<span>Desarrollador Backend</span>
							</div>

						</div>
					</div><!-- END COL -->


					<!-- Integrante 3 -->
					<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src="../assets/img/team/team2.jpg" alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>

							<div class="team-prof">
								<h3>Juan David Gonzalez</h3>
								<span>Diseñador UI/UX</span>
							</div>

						</div>
					</div><!-- END COL -->

				</div><!-- END ROW -->

			</div><!-- END CONTAINER -->
		</section>
		<!-- END TEAM -->

		<!-- START PROMO -->
		<section class="ab_area section-padding">
			<div class="container">
				<div class="row">

					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="ab_content">

							<h2>¿Por qué elegir Edunection para tu institución educativa?</h2>

							<p>
								Edunection es una plataforma desarrollada para simplificar la gestión académica,
								mejorar la comunicación entre los diferentes actores de la comunidad educativa y
								facilitar el acceso a la información desde cualquier lugar.
							</p>

							<p>
								Nuestro objetivo es brindar una solución moderna, intuitiva y segura que permita
								a docentes, estudiantes y acudientes optimizar sus procesos diarios mediante una
								experiencia digital eficiente.
							</p>

							<ul>
								<li>
									<span class="ti-check"></span>
									Gestiona actividades, calificaciones y boletines desde una sola plataforma.
								</li>

								<li>
									<span class="ti-check"></span>
									Fortalece la comunicación entre docentes, estudiantes y acudientes.
								</li>

								<li>
									<span class="ti-check"></span>
									Accede a la información académica de forma rápida, segura y organizada.
								</li>
							</ul>

							<a class="btn_one" href="services.php">
								Conocer las funciones <i class="ti-arrow-top-right"></i>
							</a>

						</div>
					</div><!-- END COL -->


					<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="ab_img">

							<img src="../assets/img/about3.png" class="img-fluid" alt="Edunection">

						</div>
					</div><!-- END COL -->

				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END PROMO -->

		<!-- START BLOG -->
		<section id="blog" class="blog_area section-padding">
			<div class="container">

				<div class="section-title text-center">
					<h2>Novedades y artículos</h2>
					<p>
						Mantente informado sobre las últimas novedades de Edunection, consejos para la
						transformación digital de las instituciones educativas y noticias relacionadas
						con la innovación en la gestión académica.
					</p>
				</div>

				<div class="row">

					<!-- Artículo 1 -->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="single_blog">
							<img src="../assets/img/blog/1.jpg" class="img-fluid" alt="image" />

							<div class="content_box">
								<span>Julio 2026 | <a href="blog.php">Edunection</a></span>

								<h2>
									<a href="blog.php">
										¿Cómo una plataforma académica optimiza la gestión y la comunicación escolar?

									</a>
								</h2>

								<a class="btn_one" href="blog.php">
									Leer más <i class="ti-arrow-top-right"></i>
								</a>
							</div>

						</div>
					</div><!-- END COL -->


					<!-- Artículo 2 -->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="single_blog">
							<img src="../assets/img/blog/2.jpg" class="img-fluid" alt="image" />

							<div class="content_box">
								<span>Julio 2026 | <a href="blog.php">Innovación</a></span>

								<h2>
									<a href="blog.php">
										La importancia de la comunicación entre docentes, estudiantes y acudientes
									</a>
								</h2>

								<a class="btn_one" href="blog.php">
									Leer más <i class="ti-arrow-top-right"></i>
								</a>
							</div>

						</div>
					</div><!-- END COL -->


					<!-- Artículo 3 -->
					<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<div class="single_blog">
							<img src="../assets/img/blog/3.jpg" class="img-fluid" alt="image" />

							<div class="content_box">
								<span>Julio 2026 | <a href="blog.php">Tecnología</a></span>

								<h2>
									<a href="blog.php">
										Edunection: una solución desarrollada por aprendices del SENA
									</a>
								</h2>

								<a class="btn_one" href="blog.php">
									Leer más <i class="ti-arrow-top-right"></i>
								</a>
							</div>

						</div>
					</div><!-- END COL -->

				</div><!-- END ROW -->

			</div><!-- END CONTAINER -->
		</section>
		<!-- END BLOG -->
		
		<?php 
        include'layout/foother_last_jquery.php'
		 ?>
    </body>
</html>