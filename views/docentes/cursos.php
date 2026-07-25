<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - EDUNECTION</title>
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
                <a href="cursos.html" class="nav-item active">Cursos</a>
                <a href="estudiantes.html" class="nav-item">Estudiantes</a>
                <a href="actividades.html" class="nav-item">Actividades</a>
            </nav>

            <div class="nav-icons">
                <button class="icon-btn"><i class="fa-regular fa-envelope"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-bell"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-user"></i></button>
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