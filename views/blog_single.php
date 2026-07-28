<!DOCTYPE html>
<html lang="es">

<!DOCTYPE html>
<html lang="es">

<?php
include 'layout/head.php'
?>

<body data-spy="scroll" data-offset="80">

    <!-- START PRELOADER -->
    <div class="preloaders">
        <span class="loader"></span>
    </div>
    <!-- END PRELOADER -->

    <?php
    include 'layout/navbar.php'
    ?>

    <!-- START SECTION TOP -->
    <section class="section-top">
        <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                    <h1>Detalle del Blog</h1>
                    <ul>
                        <li><a href="blog.php">Blogs</a></li>
                        <li> / Detalle del Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TOP -->


    <!-- START BLOG -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-sm-12 col-xs-12">

                    <div class="arti_single">

                        <div class="arti_sp">

                            <h2>Edunection: Innovación tecnológica para fortalecer la educación</h2>

                            <img src="../assets/img/blog/1.jpg" class="img-fluid" alt="Blog image" />

                            <p>
                                La implementación de plataformas digitales permite a las instituciones educativas optimizar su funcionamiento diario y ofrecer una mejor experiencia a toda la comunidad académica. Edunection reúne herramientas para la gestión institucional, el seguimiento del rendimiento estudiantil y la comunicación en tiempo real, promoviendo una educación más organizada, eficiente y conectada con las necesidades actuales de docentes, estudiantes y acudientes.
                            </p>
                            <br>
                            <p>
                                Edunection es una plataforma académica desarrollada por aprendices del Servicio Nacional de Aprendizaje (SENA) con el propósito de modernizar la gestión educativa mediante herramientas digitales. Su objetivo es facilitar la administración de instituciones educativas, optimizar la comunicación entre docentes, estudiantes y acudientes, y centralizar procesos académicos como el registro de actividades, calificaciones, asistencia y boletines en un único sistema accesible desde cualquier dispositivo.
                            </p>

                        </div>

                        <div class="share_sp">
                            <h4>Compartir</h4>
                            <ul>
                                <li><a href="#"><span class="ti-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="ti-instagram"></span> Instagram</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- END ARTI SINGLE -->


					<div class="author_part">

					    <h3 class="blog_head_title">Sobre el autor</h3>

					    <div class="single_author">

					        <img src="../assets/img/blog/author.jpg" alt="" />

					        <h4>Juan David González</h4>

					        <p>
								Aprendiz del Tecnólogo en Análisis y Desarrollo de Software del SENA e integrante del equipo desarrollador de Edunection, una plataforma diseñada para optimizar la gestión académica y fortalecer la comunicación entre las instituciones educativas y su comunidad.
					        </p>

					    </div>

					</div>


                    <div class="comments_part">

                        <h3 class="blog_head_title">Comentarios</h3>

                        <div class="single_comment">

                            <img src="../assets/img/blog/c1.jpg" alt="" />

                            <h4>Laura Gómez</h4>

                            <p>
                                Excelente iniciativa. Plataformas como Edunection facilitan la comunicación entre docentes, estudiantes y acudientes, haciendo más eficiente el seguimiento académico.
                            </p>

                        </div>
                        <!-- END SINGLE COMMENT -->


                        <div class="single_comment sc_left">

                            <img src="../assets/img/blog/c3.jpg" alt="" />

                            <h4>Carlos Martínez</h4>

                            <p>
                                Me gusta el enfoque del proyecto. Integrar toda la información académica en una sola plataforma mejora significativamente la organización institucional.
                            </p>

                        </div>
                        <!-- END SINGLE COMMENT -->


                        <div class="single_comment single_comment_mbnone">

                            <img src="../assets/img/blog/c2.jpg" alt="" />

                            <h4>María Rodríguez</h4>

                            <p>
                                Una propuesta muy interesante para impulsar la transformación digital en las instituciones educativas y mejorar la experiencia de toda la comunidad académica.
                            </p>

                        </div>
                        <!-- END SINGLE COMMENT -->

                    </div>
                    <!-- END COMMENTS PART -->	
					                    <div class="comment_form">

                        <h3 class="blog_head_title">Agregar un comentario</h3>

                        <div class="contact comment-box">

                            <form id="contact-form" method="post" enctype="multipart/form-data">

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" class="form-control" id="first-name" placeholder="Nombre" required="required">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" id="first-email" placeholder="Correo electrónico" required="required">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Asunto" required="required">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <textarea rows="6" name="message" class="form-control" id="description" placeholder="Escribe tu comentario" required="required"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="actions">
                                            <button type="submit" value="Enviar comentario" name="submit" id="submitButton" class="btn btn_one" title="Enviar comentario">
                                                Enviar comentario
                                            </button>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                    <!-- END COMMENT FORM -->

                </div>
                <!-- END COL -->


                <div class="col-lg-5 col-sm-12 col-xs-12">

                    <div class="sidebar-post">
                        <div class="blog_search">
                            <input type="text" class="form-control" placeholder="Buscar artículo...">
                        </div>
                    </div>

                    <div class="sidebar-post">

                        <div class="sidebar_title">
                            <h4>Publicaciones populares</h4>
                        </div>

                        <div class="single_popular">
                            <a href="blog_single.php"><img src="../assets/img/blog/blog-1.png" alt="" /></a>
                            <h5><a href="blog_single.php">La transformación digital en las instituciones educativas</a></h5>
                        </div>

                        <div class="single_popular">
                            <a href="blog_single.php"><img src="../assets/img/blog/blog-2.png" alt="" /></a>
                            <h5><a href="blog_single.php">Cómo Edunection fortalece la comunicación escolar</a></h5>
                        </div>

                        <div class="single_popular">
                            <a href="blog_single.php"><img src="../assets/img/blog/blog-3.png" alt="" /></a>
                            <h5><a href="blog_single.php">Beneficios de gestionar calificaciones de forma digital</a></h5>
                        </div>

                        <div class="single_popular">
                            <a href="blog_single.php"><img src="../assets/img/blog/blog-4.png" alt="" /></a>
                            <h5><a href="blog_single.php">Cinco ventajas de una plataforma académica integrada</a></h5>
                        </div>

                        <div class="single_popular">
                            <a href="blog_single.php"><img src="../assets/img/blog/blog-5.png" alt="" /></a>
                            <h5><a href="blog_single.php">El futuro de la educación con herramientas digitales</a></h5>
                        </div>

                    </div>

                    <div class="sidebar-post">

                        <div class="sidebar_title">
                            <h4>Categorías</h4>
                        </div>

                        <div class="single_category">

                            <ul>

                                <li><a href="#">Educación <sup>12</sup></a></li>

                                <li><a href="#">Tecnología <sup>8</sup></a></li>

                                <li><a href="#">Innovación <sup>6</sup></a></li>

                                <li><a href="#">Instituciones <sup>9</sup></a></li>

                                <li><a href="#">Gestión Académica <sup>7</sup></a></li>

                                <li><a href="#">SENA <sup>5</sup></a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="sidebar-post">

                        <div class="tag">

                            <div class="sidebar_title">
                                <h4>Etiquetas populares</h4>
                            </div>

                            <a href="#">Edunection</a>
                            <a href="#">Educación</a>
                            <a href="#">Tecnología</a>
                            <a href="#">Instituciones</a>
                            <a href="#">SENA</a>
                            <a href="#">Docentes</a>
                            <a href="#">Estudiantes</a>
                            <a href="#">Software</a>

                        </div>

                    </div>

                    <div class="sidebar-post">

                        <div class="sidebar_title">
                            <h4>Síguenos</h4>
                        </div>

                        <div class="single_social">

                            <ul>

                                <li><a href="#"><div class="social_item b_facebook"><i class="fa fa-facebook"></i><span class="item-list">Facebook</span></div></a></li>

                                <li><a href="#"><div class="social_item b_youtube"><i class="fa fa-youtube"></i><span class="item-list">YouTube</span></div></a></li>

                                <li><a href="#"><div class="social_item b_rss"><i class="fa fa-instagram"></i><span class="item-list">Instagram</span></div></a></li>

                            </ul>

                        </div>

                    </div>

                </div>
                <!-- END COL -->

            </div>
            <!-- END ROW -->

        </div>
        <!-- END CONTAINER -->

    </section>
    <!-- END BLOG -->

    <?php
    include 'layout/foother_last_jquery.php'
    ?>

</body>

</html>