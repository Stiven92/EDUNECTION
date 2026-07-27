<!DOCTYPE html>
<html lang="es">

<?php 
include'layout/Headdocentes.php'
 ?>
    <title>Mensajes - EDUNECTION</title>
 
</head>

<body>

    <!-- Header & Navegación -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboard.html" class="logo">
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
                        <a href="asistencias.php" class="dropdown-item">
                            <i class="fa-solid fa-star"></i> Asistencias
                        </a>
                        <a href="boletines.php" class="dropdown-item">
                            <i class="fa-solid fa-file-invoice"></i> Boletines
                        </a>
                        <a href="calificar.php" class="dropdown-item">
                            <i class="fa-solid fa-star"></i> Calificar
                        </a>
                        <a href="horario.php" class="dropdown-item">
                            <i class="fa-solid fa-file-invoice"></i> Horario
                        </a>
                        <a href="observador.php" class="dropdown-item">
                            <i class="fa-solid fa-eye"></i> Observador del Estudiante
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
    <main class="container messages-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Buzón de Mensajes</h2>
            <p>Comunícate con docentes, directivos y acudientes de manera rápida.</p>
        </div>

        <!-- Layout General del Inbox (2 Columnas) -->
        <div class="inbox-container">

            <!-- COLUMNA IZQUIERDA: Menú y Lista de Mensajes -->
            <aside class="inbox-sidebar">
                <a href="enviarMensaje.php" class="btn-compose">
                    <i class="fa-solid fa-pen"></i>
                    <span>Redactar Mensaje</span>
                </a>

                <!-- Menú de Navegación del Mail -->
                <div class="inbox-nav">
                    <a href="#" class="inbox-nav-item active">
                        <i class="fa-solid fa-inbox"></i>
                        <span>Recibidos</span>
                        <span class="badge-count">4</span>
                    </a>
                    <a href="#" class="inbox-nav-item">
                        <i class="fa-paper-plane fa-regular"></i>
                        <span>Enviados</span>
                    </a>
                    <a href="#" class="inbox-nav-item">
                        <i class="fa-regular fa-trash-can"></i>
                        <span>Mensajes Eliminados</span>
                    </a>
                </div>

                <!-- Buscador de Mensajes -->
                <div class="search-message-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Buscar mensajes...">
                </div>

                <!-- Lista Corta de Mensajes -->
                <div class="messages-list">

                    <div class="message-item active">
                        <div class="message-item-header">
                            <span class="sender-name">Maria Mares Fernandez</span>
                            <span class="message-date">10/02/2026</span>
                        </div>
                        <h4 class="message-subject">Incapacidad con excusa médica</h4>
                        <p class="message-preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    </div>

                    <div class="message-item">
                        <div class="message-item-header">
                            <span class="sender-name">Juan David Gonzalez</span>
                            <span class="message-date">30/04/2026</span>
                        </div>
                        <h4 class="message-subject">Solicitud cambio de contraseña</h4>
                        <p class="message-preview">Estimado profesor, le escribo para solicitar apoyo...</p>
                    </div>

                    <div class="message-item">
                        <div class="message-item-header">
                            <span class="sender-name">Stiven Mendieta</span>
                            <span class="message-date">08/04/2026</span>
                        </div>
                        <h4 class="message-subject">Reunión de Docentes y Directivos</h4>
                        <p class="message-preview">Buenas tardes a todos, los invito a la próxima sesión...</p>
                    </div>

                    <div class="message-item">
                        <div class="message-item-header">
                            <span class="sender-name">Cristian Alejandro Piña</span>
                            <span class="message-date">15/03/2026</span>
                        </div>
                        <h4 class="message-subject">Citación del acudiente</h4>
                        <p class="message-preview">Se solicita la presencia del acudiente en coordinación...</p>
                    </div>

                </div>
            </aside>

            <!-- COLUMNA DERECHA: Visor de Mensaje Seleccionado -->
            <section class="inbox-reader">

                <!-- Header del Mensaje -->
                <div class="reader-header">
                    <div class="reader-title-area">
                        <h3 class="reader-subject">Incapacidad con excusa médica</h3>
                        <span class="reader-date"><i class="fa-regular fa-calendar"></i> 10/02/2026</span>
                    </div>

                    <div class="reader-meta">
                        <div class="meta-row">
                            <span class="meta-label">Remitente:</span>
                            <span class="meta-value">Maria Mares Fernandez</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Destinatario:</span>
                            <span class="meta-value">Pepito Perez Rodriguez Fernandez</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-label">Asunto:</span>
                            <span class="meta-value">Incapacidad con excusa médica</span>
                        </div>
                    </div>
                </div>

                <!-- Cuerpo del Mensaje -->
                <div class="reader-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Proin vitae rhoncus turpis. In tempor maximus est, ac consequat turpis convallis eget. Ut
                        volutpat est sit amet sodales interdum. Nam quis nibh in eros fermentum bibendum. In tincidunt
                        at dolor vel vestibulum.</p>
                    <p>Aliquam elit massa, ornare eget sapien nec, sodales cursus orci. Cras sit amet lectus eu nunc
                        mollis malesuada. Donec elementum, neque nec efficitur dictum, nibh risus tempor nisl, at
                        hendrerit nisl eros a libero.</p>
                </div>

                <!-- Footer del Lector (Archivos + Responder) -->
                <div class="reader-footer">
                    <button class="btn-attachment">
                        <i class="fa-solid fa-paperclip"></i>
                        <span>Archivos Adjuntos (1)</span>
                    </button>

                    <button class="btn-reply">
                        <i class="fa-solid fa-reply"></i>
                        <span>Responder Mensaje</span>
                    </button>
                </div>

            </section>

        </div>

    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-content">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-weight: 800; color: var(--primary-blue);">EDUNECTION</span>
                <span style="font-size: 0.85rem; color: var(--text-muted);">© 2026 Todos los derechos reservados.</span>
            </div>
            <div style="font-size: 0.85rem; color: var(--text-muted);">
                Soporte: edunection@gmail.com | +57 6086611649
            </div>
        </div>
    </footer>

</body>

</html>