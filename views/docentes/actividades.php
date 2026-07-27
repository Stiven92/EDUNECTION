<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
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
    <main class="container activities-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Gestión de Actividades</h2>
            <p>Crea, gestiona y consulta las tareas e investigaciones asignadas a tus grupos.</p>
        </div>

        <!-- Barra de Filtros (Curso, Asignatura, Periodo) -->
        <div class="filters-card">
            <div class="filter-group">
                <label><i class="fa-solid fa-graduation-cap"></i> Curso</label>
                <select class="custom-select">
                    <option value="1104" selected>Curso 1104</option>
                    <option value="1103">Curso 1103</option>
                    <option value="903">Curso 903</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-book"></i> Asignatura</label>
                <select class="custom-select">
                    <option value="matematicas" selected>Matemáticas</option>
                    <option value="espanol">Español</option>
                    <option value="economia">Economía</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-regular fa-calendar-check"></i> Periodo</label>
                <select class="custom-select">
                    <option value="1">Periodo 1</option>
                    <option value="2" selected>Periodo 2</option>
                    <option value="3">Periodo 3</option>
                </select>
            </div>
        </div>

        <!-- Barra de Acciones: Botón Crear + Búsqueda -->
        <div class="activities-action-bar">
            <a href="publicarActividad.php" class="btn-create-activity">
                <i class="fa-solid fa-plus"></i>
                <span>Nueva Actividad</span>
            </a>

            <div class="search-box-container search-activity">
                <div class="search-input-wrapper">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" placeholder="Buscar actividad por nombre o descripción..." class="search-input">
                </div>
                <button class="btn-search">Buscar</button>
            </div>
        </div>

        <!-- Tabla Estilizada de Actividades -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Fecha Publicación</th>
                        <th>Fecha Entrega</th>
                        <th style="text-align: center;">Archivos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-bold">Actividad-01</td>
                        <td class="text-muted-cell">Actividad a Realizar en clase</td>
                        <td><span class="type-tag">Guía de Aprendizaje</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 22/04/2026</td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 30/04/2026</td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar archivo">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Actividad-02</td>
                        <td class="text-muted-cell">Actividad a Realizar en clase</td>
                        <td><span class="type-tag">Guía de Aprendizaje</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 22/04/2026</td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 30/04/2026</td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar archivo">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Investigación-01</td>
                        <td class="text-muted-cell">Trabajo de consulta individual</td>
                        <td><span class="type-tag purple">Investigación</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 25/04/2026</td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 05/05/2026</td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar archivo">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Taller-03</td>
                        <td class="text-muted-cell">Ejercicios preparatorios para examen</td>
                        <td><span class="type-tag green">Taller</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 01/05/2026</td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 10/05/2026</td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar archivo">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Actividad-05</td>
                        <td class="text-muted-cell">Actividad a Realizar en clase</td>
                        <td><span class="type-tag">Guía de Aprendizaje</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 02/05/2026</td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 15/05/2026</td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar archivo">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
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