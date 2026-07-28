<!DOCTYPE html>
<html lang="es">


<?php 
include'../layoutRol/HeadRol.php'
 ?>
    <title>Horario Docente - EDUNECTION</title>
 

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
                <a href="actividades.php" class="nav-item">Actividades</a>

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
                <button class="icon-btn"><i class="fa-regular fa-envelope"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-bell"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-user"></i></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container schedule-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Horario de Clases</h2>
            <p>Consulta tu asignación de cursos e intensidad horaria semanal.</p>
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
                            <td><div class="class-box"><span>Curso 1004</span></div></td>
                            <td><div class="class-box"><span>Curso 1101</span></div></td>
                            <td><div class="class-box"><span>Curso 1004</span></div></td>
                            <td><div class="class-box"><span>Curso 1003</span></div></td>
                            <td><div class="class-box"><span>Curso 901</span></div></td>
                        </tr>

                        <!-- Franja 2 -->
                        <tr>
                            <td class="time-slot">
                                <span class="time-text">08:00 - 09:00</span>
                            </td>
                            <td><div class="class-box"><span>Curso 1004</span></div></td>
                            <td><div class="class-box"><span>Curso 901</span></div></td>
                            <td><div class="class-box"><span>Curso 1003</span></div></td>
                            <td><div class="class-box"><span>Curso 1003</span></div></td>
                            <td><div class="class-box"><span>Curso 901</span></div></td>
                        </tr>

                        <!-- Franja 3 -->
                        <tr>
                            <td class="time-slot">
                                <span class="time-text">09:00 - 10:00</span>
                            </td>
                            <td><div class="class-box"><span>Curso 1101</span></div></td>
                            <td><div class="class-box"><span>Curso 1003</span></div></td>
                            <td><div class="class-box"><span>Curso 1003</span></div></td>
                            <td><div class="class-box"><span>Curso 1003</span></div></td>
                            <td><div class="class-box"><span>Curso 1004</span></div></td>
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

<?php 
include'../layoutRol/footerRol.php'
 ?>
</body>
</html>