<?php include("../../controllers/SessionEstudianteController.php"); ?>

<!DOCTYPE html>
<html lang="es">

<?php 
include'../layoutRol/HeadRol.php'
 ?>
<title>Mis Actividades - EDUNECTION</title>
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
                <a href="misCursos.php" class="nav-item">Mis Cursos</a>
                <a href="actividades.php" class="nav-item active">Actividades</a>

                <div class="nav-dropdown">
                    <button class="dropdown-btn">
                        <span>Más</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="misCalificaciones.php" class="dropdown-item">
                            <i class="fa-solid fa-star"></i> Mis Calificaciones
                        </a>
                        <a href="boletines.php" class="dropdown-item">
                            <i class="fa-solid fa-file-invoice"></i> Boletines
                        </a>
                        <a href="horario.php" class="dropdown-item">
                            <i class="fa-solid fa-calendar-days"></i> Horario
                        </a>
                        <a href="observador.php" class="dropdown-item">
                            <i class="fa-solid fa-eye"></i> Mi Observador
                        </a>
                    </div>
                </div>
            </nav>

            <div class="nav-icons">
                <a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesEstudiante.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container activities-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Mis Actividades</h2>
            <p>Consulta, descarga tus tareas pendientes y realiza el envío de tus trabajos asignados.</p>
        </div>

        <!-- Barra de Filtros (Asignatura, Estado, Periodo) -->
        <div class="filters-card">
            <div class="filter-group">
                <label><i class="fa-solid fa-book"></i> Asignatura</label>
                <select class="custom-select">
                    <option value="todas" selected>Todas las asignaturas</option>
                    <option value="matematicas">Matemáticas</option>
                    <option value="espanol">Español</option>
                    <option value="economia">Economía</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-list-check"></i> Estado</label>
                <select class="custom-select">
                    <option value="todos" selected>Todos los estados</option>
                    <option value="pendiente">Pendientes</option>
                    <option value="entregado">Entregados</option>
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

        <!-- Barra de Acciones: Buscador -->
        <div class="activities-action-bar">
            <div class="search-box-container search-activity" style="width: 100%;">
                <div class="search-input-wrapper">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" placeholder="Buscar actividad por nombre o descripción..." class="search-input">
                </div>
                <button class="btn-search">Buscar</button>
            </div>
        </div>

        <!-- Tabla Estilizada de Actividades del Estudiante -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Actividad</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Fecha Límite</th>
                        <th style="text-align: center;">Estado</th>
                        <th style="text-align: center;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-bold">Actividad-01</td>
                        <td class="text-muted-cell">Actividad a Realizar en clase</td>
                        <td><span class="type-tag">Guía de Aprendizaje</span></td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 30/04/2026</td>
                        <td style="text-align: center;">
                            <span class="status-tag warning">Pendiente</span>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar Material">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                            <a href="entregarActividad.php?id=1" class="btn-icon-upload" title="Subir Tarea">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Actividad-02</td>
                        <td class="text-muted-cell">Actividad a Realizar en clase</td>
                        <td><span class="type-tag">Guía de Aprendizaje</span></td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 30/04/2026</td>
                        <td style="text-align: center;">
                            <span class="status-tag success">Entregado</span>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar Material">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                            <a href="verEntrega.php?id=2" class="btn-icon-view" title="Ver mi Entrega">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Investigación-01</td>
                        <td class="text-muted-cell">Trabajo de consulta individual</td>
                        <td><span class="type-tag purple">Investigación</span></td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 05/05/2026</td>
                        <td style="text-align: center;">
                            <span class="status-tag warning">Pendiente</span>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar Material">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                            <a href="entregarActividad.php?id=3" class="btn-icon-upload" title="Subir Tarea">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Taller-03</td>
                        <td class="text-muted-cell">Ejercicios preparatorios para examen</td>
                        <td><span class="type-tag green">Taller</span></td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 10/05/2026</td>
                        <td style="text-align: center;">
                            <span class="status-tag warning">Pendiente</span>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar Material">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                            <a href="entregarActividad.php?id=4" class="btn-icon-upload" title="Subir Tarea">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="font-bold">Actividad-05</td>
                        <td class="text-muted-cell">Actividad a Realizar en clase</td>
                        <td><span class="type-tag">Guía de Aprendizaje</span></td>
                        <td><i class="fa-solid fa-clock-rotate-left icon-date warning"></i> 15/05/2026</td>
                        <td style="text-align: center;">
                            <span class="status-tag success">Entregado</span>
                        </td>
                        <td style="text-align: center;">
                            <button class="btn-icon-download" title="Descargar Material">
                                <i class="fa-solid fa-file-arrow-down"></i>
                            </button>
                            <a href="verEntrega.php?id=5" class="btn-icon-view" title="Ver mi Entrega">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

    <!-- Footer -->
<?php 
include'../layoutRol/footerRol.php'
 ?>

</body>

</html>