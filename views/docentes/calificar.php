<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones - EDUNECTION</title>
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
    <main class="container grades-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Gestión de Calificaciones</h2>
            <p>Consulta y asigna las notas detalladas por asignatura y periodo.</p>
        </div>

        <!-- Barra de Filtros -->
        <div class="grades-filters-card">
            <div class="filter-col span-2">
                <label><i class="fa-solid fa-user-graduate"></i> Alumno</label>
                <select class="custom-select">
                    <option value="1" selected>Ramiro Torrez Gonzalez</option>
                    <option value="2">Juan Jose Gonzalez</option>
                    <option value="3">Fernando Rodriguez</option>
                </select>
            </div>

            <div class="filter-col">
                <label><i class="fa-solid fa-book"></i> Asignatura</label>
                <select class="custom-select">
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
                    <option value="abril" selected>Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                </select>
            </div>
        </div>

        <!-- Tarjetas Resumen de Estado / Promedio -->
        <div class="grades-summary-grid">
            <div class="summary-card">
                <span class="summary-label">Estado del Alumno</span>
                <span class="status-pill-success"><i class="fa-solid fa-circle-check"></i> Activo</span>
            </div>

            <div class="summary-card progress-card">
                <div class="progress-info">
                    <span class="summary-label">Promedio Actual</span>
                    <span class="average-score">3.5 / 5.0</span>
                </div>
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill" style="width: 70%;"></div>
                </div>
            </div>

            <div class="summary-card">
                <span class="summary-label">Actividades Pendientes</span>
                <span class="pending-count">0</span>
            </div>
        </div>

        <!-- Tabla de Calificaciones -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Actividad</th>
                        <th>Tipo</th>
                        <th>Fecha</th>
                        <th>Nota</th>
                        <th>Estado</th>
                        <th>Observación</th>
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
                        <td class="text-muted-cell">Excelente desempeño</td>
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
                        <td class="text-muted-cell">Buen desarrollo de ejercicios</td>
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
                        <td class="text-muted-cell">Faltaron conclusiones clave</td>
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
                        <td class="text-muted-cell">En espera de corrección</td>
                    </tr>
                </tbody>
            </table>
            <!-- En lugar de solo ver la notificación, los envías al formulario dinámico -->
            <a href="calificar.php?id_entrega=123" class="btn-compose">
                <i class="fa-solid fa-star"></i>
                <span>Calificar Entrega</span>
            </a>
        </div>

        <!-- Leyenda de Estados -->
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