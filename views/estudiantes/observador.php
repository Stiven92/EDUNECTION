<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../layoutRol/HeadRol.php'; ?>
    <title>Mi Observador - EDUNECTION</title>
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
    <main class="container observer-layout">

        <!-- Encabezado de Página (Solo informativo para el estudiante) -->
        <div class="page-header-flex">
            <div>
                <h2>Mi Observador del Estudiante</h2>
                <p>Consulta tu historial convivencial, observaciones recibidas y compromisos registrados.</p>
            </div>
        </div>

        <!-- Filtros de Consulta para el Estudiante -->
        <div class="observer-filters-card">
            <div class="filter-group span-2">
                <label><i class="fa-solid fa-book"></i> Asignatura</label>
                <select class="custom-select">
                    <option value="todas" selected>Todas las asignaturas</option>
                    <option value="matematicas">Matemáticas</option>
                    <option value="espanol">Español</option>
                    <option value="ingles">Inglés</option>
                </select>
            </div>

            <div class="filter-group span-2">
                <label><i class="fa-solid fa-chalkboard-user"></i> Docente</label>
                <select class="custom-select">
                    <option value="todos" selected>Todos los docentes</option>
                    <option value="1">Pepito Pérez Rodríguez</option>
                    <option value="2">María Alfonsa Marines</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-regular fa-calendar"></i> Fecha desde</label>
                <input type="date" class="form-input-date" value="2026-01-01">
            </div>
        </div>

        <!-- Tabla de Registros del Observador -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th style="width: 140px;">Tipo de Registro</th>
                        <th style="width: 120px;">Fecha</th>
                        <th style="width: 180px;">Docente / Materia</th>
                        <th>Observación del Docente</th>
                        <th>Mi Compromiso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="fault-badge type-1">
                                <i class="fa-solid fa-triangle-exclamation"></i> Falta Tipo I
                            </span>
                        </td>
                        <td>
                            <span class="date-text"><i class="fa-regular fa-calendar icon-date"></i> 15/02/2026</span>
                        </td>
                        <td>
                            <div class="table-text-content">
                                <strong>Pepito Pérez</strong><br>
                                <small style="color: #64748b;">Matemáticas</small>
                            </div>
                        </td>
                        <td>
                            <p class="table-text-content">Faltó el respeto a uno de sus compañeros durante la clase de matemáticas.</p>
                        </td>
                        <td>
                            <p class="table-text-content commitment">Me comprometo a no volver a faltar el respeto a mis compañeros y ofrecer una disculpa pública.</p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="fault-badge type-1">
                                <i class="fa-solid fa-triangle-exclamation"></i> Falta Tipo I
                            </span>
                        </td>
                        <td>
                            <span class="date-text"><i class="fa-regular fa-calendar icon-date"></i> 10/02/2026</span>
                        </td>
                        <td>
                            <div class="table-text-content">
                                <strong>María Alfonsa</strong><br>
                                <small style="color: #64748b;">Español</small>
                            </div>
                        </td>
                        <td>
                            <p class="table-text-content">Llegada tardía recurrente al inicio de la jornada escolar sin justificación.</p>
                        </td>
                        <td>
                            <p class="table-text-content commitment">Mi acudiente y yo nos comprometemos a garantizar la llegada puntual a la institución.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

    <?php include '../layoutRol/footerRol.php'; ?>

</body>

</html>