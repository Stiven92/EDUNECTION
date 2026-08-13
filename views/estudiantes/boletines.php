<?php include("../../controllers/SessionEstudianteController.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
<?php 
include '../layoutRol/HeadRol.php';
?>
    <title>Boletines Académicos - EDUNECTION</title>
</head>
<body>

    <!-- Header & Navegación -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboard.html" class="logo">
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
                <a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesDocente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container report-layout">

        <!-- Encabezado de Página -->
        <div class="page-header">
            <h2>Boletines Académicos</h2>
            <p>Consulta y descarga los informes de calificaciones por periodo del estudiante.</p>
        </div>

        <!-- Filtros de Selección (Alumno, Curso, Periodo) -->
        <div class="report-filters-card">
            <div class="filter-item">
                <label><i class="fa-solid fa-user-graduate"></i> Alumno</label>
                <select class="custom-select">
                    <option value="1" selected>Ramiro Torrez Gonzalez</option>
                    <option value="2">Juan Jose Gonzalez</option>
                    <option value="3">Fernando Rodriguez</option>
                </select>
            </div>

            <div class="filter-item">
                <label><i class="fa-solid fa-graduation-cap"></i> Curso</label>
                <div class="course-badge-value">
                    <span>Curso 1104</span>
                </div>
            </div>

            <div class="filter-item">
                <label><i class="fa-regular fa-calendar-check"></i> Periodo Actual</label>
                <select class="custom-select">
                    <option value="1">Periodo 1</option>
                    <option value="2" selected>Periodo 2</option>
                    <option value="3">Periodo 3</option>
                </select>
            </div>
        </div>

        <!-- Layout con Tabla de Boletines + Tarjeta del Colegio -->
        <div class="report-content-grid">
            
            <!-- Columna Izquierda: Tabla de Boletines -->
            <div class="table-card">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Año</th>
                            <th>Fecha Publicación</th>
                            <th>Estado</th>
                            <th style="text-align: center;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-bold">Periodo 1</td>
                            <td>2026</td>
                            <td><i class="fa-regular fa-calendar icon-date"></i> 25/03/2026</td>
                            <td><span class="status-tag active">Disponible</span></td>
                            <td style="text-align: center;">
                                <div class="action-buttons">
                                    <button class="btn-action view" title="Ver boletín">
                                        <i class="fa-regular fa-eye"></i>
                                        <span>Ver</span>
                                    </button>
                                    <button class="btn-action download" title="Descargar boletín PDF">
                                        <i class="fa-solid fa-download"></i>
                                        <span>Descargar</span>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-bold">Periodo 2</td>
                            <td>2026</td>
                            <td class="text-muted-cell">Por definir</td>
                            <td><span class="status-tag pending">No Disponible</span></td>
                            <td style="text-align: center;">
                                <div class="action-buttons">
                                    <button class="btn-action view disabled" disabled>
                                        <i class="fa-regular fa-eye"></i>
                                        <span>Ver</span>
                                    </button>
                                    <button class="btn-action download disabled" disabled>
                                        <i class="fa-solid fa-download"></i>
                                        <span>Descargar</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Columna Derecha: Tarjeta Institucional (Escudo / Detalle) -->
            <div class="institution-card">
                <div class="badge-logo-wrapper">
                    <img src="img/college-logo.png" alt="Escudo Institucional" class="college-badge-img" onerror="this.src='https://cdn-icons-png.flaticon.com/512/3135/3135715.png'">
                </div>
                <h3>Unidad Educativa Simón Bolívar</h3>
                <p>Boletín Oficial de Calificaciones</p>
                <div class="institution-info-pills">
                    <span><i class="fa-solid fa-shield-halved"></i> Documento Verificado</span>
                    <span><i class="fa-solid fa-print"></i> Formato PDF</span>
                </div>
            </div>

        </div>

    </main>

<?php 
include '../layoutRol/footerRol.php';
?>

</body>
</html>