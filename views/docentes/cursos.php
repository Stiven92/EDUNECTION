<?php include("../../controllers/SessionDocenteController.php"); ?>
<!DOCTYPE html>
<html lang="es">


<?php 
include'../layoutRol/HeadRol.php'
 ?>    <title>Cursos - EDUNECTION</title>
  

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
                <a href="cursos.php" class="nav-item active">Cursos</a>
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
                <a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesDocente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container courses-layout">

        <!-- Título de la Sección -->
        <div class="page-header">
            <h2>Gestión de Cursos</h2>
            <p>Selecciona un curso para consultar actividades, notas y estudiantes asignados.</p>
        </div>

        <!-- Barra de Búsqueda -->
        <div class="search-box-container">
            <div class="search-input-wrapper">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" placeholder="Buscar curso (ej: 1104, 903)..." class="search-input">
            </div>
            <button class="btn-search">Buscar</button>
        </div>

        <!-- Grid de Tarjetas de Cursos (3 Columnas) -->
        <div class="courses-grid">

            <!-- Curso 1 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 1104</h3>
                    <p class="course-subtitle">Educación Media / Secundario</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 2 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 1103</h3>
                    <p class="course-subtitle">Educación Media / Secundario</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 3 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 1101</h3>
                    <p class="course-subtitle">Educación Media / Secundario</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 4 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 1002</h3>
                    <p class="course-subtitle">Educación Media / Secundario</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 5 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 904</h3>
                    <p class="course-subtitle">Básica Secundaria</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 6 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 903</h3>
                    <p class="course-subtitle">Básica Secundaria</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 7 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 902</h3>
                    <p class="course-subtitle">Básica Secundaria</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 8 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 805</h3>
                    <p class="course-subtitle">Básica Secundaria</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Curso 9 -->
            <div class="course-card">
                <div class="course-header">
                    <div class="badge-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <span class="activities-count"><i class="fa-solid fa-list-check"></i> 10 Actividades</span>
                </div>
                <div class="course-body">
                    <h3 class="course-number">Curso 803</h3>
                    <p class="course-subtitle">Básica Secundaria</p>
                </div>
                <a href="#" class="btn-course-enter">
                    <span>Ingresar</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>

    </main>

<?php 
include'../layoutRol/footerRol.php'
 ?>

</body>

</html>