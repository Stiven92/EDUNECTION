<?php include("../../controllers/SessionEstudianteController.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../layoutRol/HeadRol.php'; ?>
    <title>Mi Horario - EDUNECTION</title>
</head>
<body>

    <!-- Header & Navegación Estudiante -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardEstudiante.php" class="logo">
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
                <a href="notificacionesEstudiante.php" class="icon-btn" aria-label="Notificaciones"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn" aria-label="Perfil"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container schedule-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Mi Horario de Clases</h2>
            <p>Consulta la distribución de tus asignaturas y horarios semanales.</p>
        </div>

        <!-- Contenedor del Horario -->
        <div class="schedule-card">
            <div class="schedule-table-wrapper">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th class="time-col"><i class="fa-regular fa-clock"></i> Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Franja 1 -->
                        <tr>
                            <td class="time-slot">
                                <span class="time-text">07:00 - 08:00</span>
                            </td>
                            <td><div class="class-box"><span>Matemáticas</span></div></td>
                            <td><div class="class-box"><span>Español</span></div></td>
                            <td><div class="class-box"><span>Matemáticas</span></div></td>
                            <td><div class="class-box"><span>Inglés</span></div></td>
                            <td><div class="class-box"><span>Ciencias</span></div></td>
                        </tr>

                        <!-- Franja 2 -->
                        <tr>
                            <td class="time-slot">
                                <span class="time-text">08:00 - 09:00</span>
                            </td>
                            <td><div class="class-box"><span>Matemáticas</span></div></td>
                            <td><div class="class-box"><span>Ciencias</span></div></td>
                            <td><div class="class-box"><span>Inglés</span></div></td>
                            <td><div class="class-box"><span>Inglés</span></div></td>
                            <td><div class="class-box"><span>Ciencias</span></div></td>
                        </tr>

                        <!-- Franja 3 -->
                        <tr>
                            <td class="time-slot">
                                <span class="time-text">09:00 - 10:00</span>
                            </td>
                            <td><div class="class-box"><span>Español</span></div></td>
                            <td><div class="class-box"><span>Inglés</span></div></td>
                            <td><div class="class-box"><span>Inglés</span></div></td>
                            <td><div class="class-box"><span>Inglés</span></div></td>
                            <td><div class="class-box"><span>Matemáticas</span></div></td>
                        </tr>

                        <!-- Franja Receso -->
                        <tr class="break-row">
                            <td class="time-slot break-time">
                                <span class="time-text">10:00 - 10:30</span>
                            </td>
                            <td colspan="5">
                                <div class="break-box">
                                    <i class="fa-solid fa-mug-hot"></i>
                                    <span>RECESO / DESCANSO</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <?php include '../layoutRol/footerRol.php'; ?>
</body>
</html>