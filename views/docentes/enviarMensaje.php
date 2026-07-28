<!DOCTYPE html>
<html lang="es">
<head>
<?php 
include'../layoutRol/HeadRol.php'
 ?>
    <title>Enviar Mensaje - EDUNECTION</title>

</head>
<body>

    <!-- Header & Navegación -->
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

                <!-- Desplegable Más -->
                <div class="nav-dropdown">
                    <button type="button" class="dropdown-btn">
                        <span>Más</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="boletines.html" class="dropdown-item">
                            <i class="fa-solid fa-file-invoice"></i> Boletines
                        </a>
                        <a href="calificar.html" class="dropdown-item">
                            <i class="fa-solid fa-star"></i> Calificar
                        </a>
                        <a href="observador.html" class="dropdown-item">
                            <i class="fa-solid fa-eye"></i> Observador del Estudiante
                        </a>
                    </div>
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
    <main class="container compose-layout">

        <!-- Encabezado de Página con opción de Volver -->
        <div class="page-header-action">
            <a href="mensajes.html" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Volver a Mensajes
            </a>
            <h2>Redactar Mensaje</h2>
        </div>

        <!-- Tarjeta Editor de Mensaje -->
        <div class="compose-card">
            
            <!-- Barra de Herramientas del Editor -->
            <div class="compose-toolbar">
                <span class="toolbar-title"><i class="fa-regular fa-paper-plane"></i> Nuevo Mensaje</span>
                <div class="toolbar-actions">
                    <button type="button" class="tool-btn" title="Adjuntar enlace"><i class="fa-solid fa-link"></i></button>
                    <button type="button" class="tool-btn" title="Insertar imagen"><i class="fa-regular fa-image"></i></button>
                    <button type="button" class="tool-btn" title="Programar envío"><i class="fa-regular fa-clock"></i></button>
                    <a href="mensajes.html" class="tool-btn close" title="Cancelar y cerrar"><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>

            <!-- Formulario principal -->
            <form class="compose-form">
                
                <!-- Campo Para: -->
                <div class="form-row">
                    <label for="destinatario" class="form-label">Para:</label>
                    <div class="recipient-input-wrapper">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        <input type="text" id="destinatario" placeholder="Buscar usuario por nombre o correo..." class="form-input">
                        <button type="button" class="btn-search-inline">Buscar</button>
                    </div>
                </div>

                <!-- Campo Asunto: -->
                <div class="form-row">
                    <label for="asunto" class="form-label">Asunto:</label>
                    <input type="text" id="asunto" placeholder="Escribe el asunto del mensaje" class="form-input">
                </div>

                <!-- Editor de Texto / Mensaje -->
                <div class="form-row body-row">
                    <textarea placeholder="Escribe tu mensaje aquí..." class="form-textarea"></textarea>
                </div>

                <!-- Footer de Acciones -->
                <div class="compose-footer">
                    <label class="btn-attach-file">
                        <i class="fa-solid fa-paperclip"></i>
                        <span>Adjuntar Archivos</span>
                        <input type="file" multiple style="display: none;">
                    </label>

                    <button type="submit" class="btn-send-message">
                        <i class="fa-solid fa-paper-plane"></i>
                        <span>Enviar</span>
                    </button>
                </div>

            </form>

        </div>

    </main>

<?php 
include'../layoutRol/footerRol.php'
 ?>

</body>
</html>