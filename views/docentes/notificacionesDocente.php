<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificaciones - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
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
                <a href="dashboard.html" class="nav-item">Inicio</a>
                <a href="cursos.html" class="nav-item">Cursos</a>
                <a href="estudiantes.html" class="nav-item">Estudiantes</a>
                <a href="actividades.html" class="nav-item">Actividades</a>
            </nav>

            <div class="nav-icons">
                <button class="icon-btn"><i class="fa-regular fa-envelope"></i></button>
                <button class="icon-btn active-notification"><i class="fa-regular fa-bell"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-user"></i></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container notifications-layout">

        <!-- Título de la Sección -->
        <div class="page-header">
            <h2>Notificaciones</h2>
            <p>Revisa los comunicados, avisos e información importante de tu institución.</p>
        </div>

        <!-- Barra de Búsqueda -->
        <div class="search-box-container">
            <div class="search-input-wrapper">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" placeholder="Buscar notificación..." class="search-input">
            </div>
            <button class="btn-search">Buscar</button>
        </div>

        <!-- Contenedor Principal de Lista -->
        <div class="notifications-card">
            
            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-users"></i></div>
                    <span class="notification-title">Comunicado 22 - Reunión de Padres</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-book"></i></div>
                    <span class="notification-title">Nueva Actividad en MATEMÁTICAS</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    <span class="notification-title">Comunicado 15 - Evento Institucional</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-clock"></i></div>
                    <span class="notification-title">Recordatorio Actividad-03 de ESPAÑOL</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <span class="notification-title">Nuevo Mensaje de Cristian Fernando Gonzalez</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-file-invoice"></i></div>
                    <span class="notification-title">Comunicado 14 - Entrega de Boletines</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-download"></i></div>
                    <span class="notification-title">Tus Boletines ya están disponibles para descargar</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <span class="notification-title">Comunicado 10 - Reunión de Docentes y Directivos</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

            <div class="notification-item">
                <div class="notification-left">
                    <div class="badge-icon"><i class="fa-solid fa-check-to-slot"></i></div>
                    <span class="notification-title">Tu actividad “Guía_03_Investigación” de ECONOMÍA ha sido calificada</span>
                </div>
                <a href="#" class="btn-details">
                    <span>Ver detalles</span>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>

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