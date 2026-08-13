<?php include("../../controllers/SessionEstudianteController.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include '../layoutRol/HeadRol.php'; ?>
    <title>Mis Calificaciones - EDUNECTION</title>
</head>

<body>

    <!-- Header / Navbar Estudiante -->
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
                <a href="mensajes.php" class="icon-btn"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesEstudiante.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container grades-layout">

        <!-- Header de la vista -->
        <div class="page-header">
            <h2>Mis Calificaciones</h2>
            <p>Consulta el desglose de tus notas, observaciones y promedio académico por asignatura.</p>
        </div>

        <!-- Filtros principales -->
        <div class="grades-filters-card">
            <div class="filter-col">
                <label><i class="fa-solid fa-book"></i> Asignatura</label>
                <select class="custom-select">
                    <option value="todas">Todas las asignaturas</option>
                    <option value="matematicas" selected>Matemáticas</option>
                    <option value="espanol">Español</option>
                    <option value="ingles">Inglés</option>
                </select>
            </div>

            <div class="filter-col">
                <label><i class="fa-regular fa-calendar-check"></i> Periodo</label>
                <select class="custom-select">
                    <option value="1">Periodo 1</option>
                    <option value="2" selected>Periodo 2</option>
                    <option value="3">Periodo 3</option>
                </select>
            </div>

            <div class="filter-col">
                <label><i class="fa-solid fa-graduation-cap"></i> Curso</label>
                <div class="static-badge">802</div>
            </div>

            <div class="filter-col">
                <label><i class="fa-regular fa-calendar"></i> Mes</label>
                <select class="custom-select">
                    <option value="todos">Todos los meses</option>
                    <option value="abril" selected>Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                </select>
            </div>
        </div>

        <!-- Resumen de estado y promedio -->
        <div class="grades-summary-grid">
            <div class="summary-card">
                <span class="summary-label">Estado Académico</span>
                <span class="status-pill-success"><i class="fa-solid fa-circle-check"></i> Alumno Activo</span>
            </div>

            <div class="summary-card progress-card">
                <div class="progress-info">
                    <span class="summary-label">Promedio General</span>
                    <span class="average-score">3.9 / 5.0</span>
                </div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 78%;"></div>
                </div>
            </div>

            <div class="summary-card">
                <span class="summary-label">Pendientes de Entrega</span>
                <span class="pending-count">1</span>
            </div>
        </div>

        <!-- Tabla de Calificaciones del Estudiante -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Actividad</th>
                        <th>Tipo</th>
                        <th>Fecha Entrega</th>
                        <th>Nota</th>
                        <th>Estado</th>
                        <th>Observación del Docente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-bold">Actividad-01</td>
                        <td><span class="type-tag">Actividad</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 30/04/2026</td>
                        <td><span class="score-badge High">4.8</span></td>
                        <td>
                            <span class="status-badge approved">
                                <i class="fa-regular fa-circle-check"></i> Aprobado
                            </span>
                        </td>
                        <td class="text-muted-cell">Excelente desempeño y desarrollo del taller.</td>
                    </tr>

                    <tr>
                        <td class="font-bold">Taller-02</td>
                        <td><span class="type-tag green">Taller</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 02/05/2026</td>
                        <td><span class="score-badge High">4.5</span></td>
                        <td>
                            <span class="status-badge approved">
                                <i class="fa-regular fa-circle-check"></i> Aprobado
                            </span>
                        </td>
                        <td class="text-muted-cell">Buen trabajo, sigue practicando los ejercicios finales.</td>
                    </tr>

                    <tr>
                        <td class="font-bold">Investigación-01</td>
                        <td><span class="type-tag purple">Investigación</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 10/05/2026</td>
                        <td><span class="score-badge Low">2.5</span></td>
                        <td>
                            <span class="status-badge failed">
                                <i class="fa-regular fa-circle-xmark"></i> Reprobado
                            </span>
                        </td>
                        <td class="text-muted-cell">Faltaron bibliografías y profundizar en las conclusiones.</td>
                    </tr>

                    <tr>
                        <td class="font-bold">Evaluación Parcial</td>
                        <td><span class="type-tag red">Examen</span></td>
                        <td><i class="fa-regular fa-calendar icon-date"></i> 18/05/2026</td>
                        <td><span class="score-badge neutral">-</span></td>
                        <td>
                            <span class="status-badge pending">
                                <i class="fa-regular fa-clock"></i> Pendiente
                            </span>
                        </td>
                        <td class="text-muted-cell">En proceso de revisión por parte del docente.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Leyenda de Convenciones -->
        <div class="grades-legend-card">
            <span class="legend-title">Convenciones de Estado:</span>
            <div class="legend-items">
                <span class="legend-item approved"><i class="fa-regular fa-circle-check"></i> Aprobado</span>
                <span class="legend-item failed"><i class="fa-regular fa-circle-xmark"></i> Reprobado</span>
                <span class="legend-item pending"><i class="fa-regular fa-clock"></i> Pendiente</span>
                <span class="legend-item not-submitted"><i class="fa-regular fa-circle-minus"></i> No Entregado</span>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php include '../layoutRol/footerRol.php'; ?>

</body>
</html>