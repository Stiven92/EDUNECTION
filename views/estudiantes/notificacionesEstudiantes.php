<?php include("../controllers/SessionEstudianteController.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../layoutRol/HeadRol.php'; ?>
    <title>Notificaciones - EDUNECTION</title>
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
              <a href="dashboardEstudiante.php" class="nav-item">Inicio</a>
              <a href="actividades.php" class="nav-item">Actividades</a>
              <a href="asistencias.php" class="nav-item">Asistencias</a>
              <a href="boletines.php" class="nav-item">Boletines</a>

              <div class="nav-dropdown">
                <button class="dropdown-btn">
                  <span>Más</span>
                  <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu">
                  <a href="calificar.php" class="dropdown-item">
                    <i class="fa-solid fa-star"></i> Calificaciones
                  </a>
                  <a href="horario.php" class="dropdown-item">
                    <i class="fa-solid fa-clock"></i> Horario
                  </a>
                  <a href="observador.php" class="dropdown-item">
                    <i class="fa-solid fa-eye"></i> Observador
                  </a>
                  <a href="mensajes.php" class="dropdown-item">
                    <i class="fa-solid fa-envelope"></i> Mensajes
                  </a>
                  <a href="notificacionesEstudiantes.php" class="dropdown-item">
                    <i class="fa-solid fa-bell"></i> Notificaciones
                  </a>
                </div>
              </div>
            </nav>

            <div class="nav-icons">
                <a href="mensajes.php" class="icon-btn" aria-label="Mensajes"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesDocente.php" class="icon-btn active" aria-label="Notificaciones"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn" aria-label="Perfil"><i class="fa-regular fa-user"></i></a>
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

    <?php include '../layoutRol/footerRol.php'; ?>

</body>

</html>