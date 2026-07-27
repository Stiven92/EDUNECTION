<!DOCTYPE html>
<html lang="es">

<?php 
include'layout/Headdocentes.php'
 ?>
    <title>Publicar Actividad - EDUNECTION</title>

<body>

    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardDocente.php" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo Pulpo" class="logo-icon">
                <span>EDUNECTION</span>
            </a>

            <nav class="nav-links">
                <a href="dashboardDocente.php" class="nav-item">Inicio</a>
                <a href="cursos.php" class="nav-item">Cursos</a>
                <a href="estudiantes.php" class="nav-item">Estudiantes</a>
                <a href="actividades.php" class="nav-item active">Actividades</a>

                <div class="nav-dropdown">
                    <button class="dropdown-btn">
                        <span>Más</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="boletines.php" class="dropdown-item">
                            <i class="fa-solid fa-file-invoice"></i> Boletines
                        </a>
                        <a href="calificar.php" class="dropdown-item">
                            <i class="fa-solid fa-star"></i> Calificar
                        </a>
                        <a href="observador.php" class="dropdown-item">
                            <i class="fa-solid fa-eye"></i> Observador del Estudiante
                        </a>
                        <a href="horario.php" class="dropdown-item">
                            <i class="fa-solid fa-file-invoice"></i> Horario
                        </a>
                    </div>
            </nav>

            <div class="nav-icons">
                <a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesDocente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <main class="container publish-layout">

        <!-- Header con botón de volver -->
        <div class="page-header-action">
            <a href="actividades.html" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Volver a Actividades
            </a>
            <h2>Publicar Nueva Actividad</h2>
        </div>

        <!-- Badges Contextuales de Curso y Asignatura -->
        <div class="context-info-bar">
            <div class="context-pill">
                <i class="fa-solid fa-graduation-cap"></i>
                <span class="context-label">Curso:</span>
                <span class="context-value">1104</span>
            </div>
            <div class="context-pill">
                <i class="fa-solid fa-book"></i>
                <span class="context-label">Asignatura:</span>
                <span class="context-value">Matemáticas</span>
            </div>
        </div>

        <!-- Tarjeta del Formulario -->
        <div class="publish-card">
            <form class="publish-form">

                <!-- Título -->
                <div class="form-group">
                    <label for="titulo" class="input-label">Título de la Actividad</label>
                    <div class="input-with-icon">
                        <i class="fa-solid fa-pen-nib input-icon"></i>
                        <input type="text" id="titulo" class="form-input"
                            placeholder="Escribe el título de la Actividad" required>
                    </div>
                </div>

                <!-- Descripción -->
                <div class="form-group">
                    <label for="descripcion" class="input-label">Descripción de la Actividad</label>
                    <textarea id="descripcion" class="form-textarea"
                        placeholder="Añade una descripción o las instrucciones para esta Actividad..."
                        rows="4"></textarea>
                </div>

                <!-- Fila Doble: Tipo + Fecha -->
                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="tipo" class="input-label">Tipo de Actividad</label>
                        <select id="tipo" class="custom-select">
                            <option value="guia" selected>Guía de Trabajo</option>
                            <option value="taller">Taller Práctico</option>
                            <option value="investigacion">Investigación</option>
                            <option value="evaluacion">Evaluación</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="fecha" class="input-label">Fecha de Entrega</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-calendar input-icon"></i>
                            <input type="date" id="fecha" class="form-input">
                        </div>
                    </div>
                </div>

                <!-- Anexar Archivos -->
                <div class="form-group">
                    <label class="input-label">Anexar Archivo (Opcional)</label>
                    <div class="file-upload-dropzone">
                        <i class="fa-solid fa-cloud-arrow-up dropzone-icon"></i>
                        <div class="dropzone-text">
                            <span>Haz clic para adjuntar o arrastra aquí tu archivo</span>
                            <small>Soporta PDF, DOCX, PPTX o ZIP (Máx. 20MB)</small>
                        </div>
                        <input type="file" class="file-input-hidden">
                    </div>
                </div>

                <!-- Acciones del Formulario -->
                <div class="publish-actions">
                    <a href="actividades.html" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish">
                        <i class="fa-solid fa-paper-plane"></i> Publicar Actividad
                    </button>
                </div>

            </form>
        </div>

    </main>

   <?php 
include'layout/footerdocentes.php'
 ?>

</body>

</html>