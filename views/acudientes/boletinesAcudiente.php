<!DOCTYPE html>
<html lang="es">

<?php 
include'../layoutRol/HeadRol.php'
 ?>    <title>Boletines de Calificaciones - EDUNECTION</title>
</head>
<body>

    <!-- Header & Navegación -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardAcudiente.php" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo Pulpo" class="logo-icon">
                <span>EDUNECTION</span>
            </a>

            <nav class="nav-links">
                <a href="dashboardAcudiente.php" class="nav-item">Inicio</a>
                <a href="estudiantes.php" class="nav-item">Mi Acudido</a>
                <a href="actividades.php" class="nav-item">Tareas</a>
                <a href="boletinesAcudiente.php" class="nav-item active">Boletines</a>

                <div class="nav-dropdown">
                    <button class="dropdown-btn">
                        <span>Más</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="asistencias.php" class="dropdown-item">
                            <i class="fa-solid fa-calendar-check"></i> Asistencias
                        </a>
                        <a href="calificaciones.php" class="dropdown-item">
                            <i class="fa-solid fa-star"></i> Calificaciones
                        </a>
                        <a href="horario.php" class="dropdown-item">
                            <i class="fa-solid fa-clock"></i> Horario
                        </a>
                        <a href="observador.php" class="dropdown-item">
                            <i class="fa-solid fa-eye"></i> Observador
                        </a>
                        <a href="docentes.php" class="dropdown-item">
                            <i class="fa-solid fa-chalkboard-user"></i> Profesores
                        </a>
                    </div>
                </div>
            </nav>

            <div class="nav-icons">
                <a href="mensajes.php" class="icon-btn"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesAcudiente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container report-layout">

        <!-- Encabezado de Página -->
        <div class="page-header-flex">
            <div>
                <h2>Boletines de Calificaciones</h2>
                <p>Consulta y descarga los informes académicos periódicos de tu acudido.</p>
            </div>
        </div>

        <!-- Filtros de Consulta -->
        <div class="observer-filters-card">
            <div class="filter-group span-2">
                <label><i class="fa-solid fa-user-graduate"></i> Estudiante Acudido</label>
                <select class="custom-select">
                    <option value="1" selected>Ramiro Torrez González (Curso 1004)</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-calendar-days"></i> Año Lectivo</label>
                <select class="custom-select">
                    <option value="2026" selected>2026</option>
                    <option value="2025">2025</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-layer-group"></i> Periodo</label>
                <select class="custom-select">
                    <option value="1" selected>Primer Periodo</option>
                    <option value="2">Segundo Periodo</option>
                    <option value="3">Tercer Periodo</option>
                    <option value="4">Cuarto Periodo</option>
                </select>
            </div>
        </div>

        <!-- Resumen del Informe Seleccionado -->
        <div class="table-card">
            <div class="card-header-flex" style="padding: 20px; border-bottom: 1px solid #e5e7eb; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h3 style="margin: 0; font-size: 1.1rem; color: #1e293b;">Informe de Desempeño Academicó - Primer Periodo</h3>
                    <small class="text-muted">Estudiante: Ramiro Torrez González | Director de Grupo: Prof. Juan José González</small>
                </div>
                <button class="btn-primary-action" style="background-color: #2563eb; color: #fff; padding: 10px 16px; border: none; border-radius: 6px; cursor: pointer; display: flex; align-items: center; gap: 8px;">
                    <i class="fa-solid fa-file-pdf"></i> Descargar PDF
                </button>
            </div>

            <!-- Tabla de Asignaturas y Notas -->
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Docente</th>
                        <th style="width: 100px; text-align: center;">I.H. (Horas)</th>
                        <th style="width: 100px; text-align: center;">Nota Final</th>
                        <th style="width: 140px; text-align: center;">Desempeño</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Matemáticas</strong></td>
                        <td>Prof. María Mares Fernández</td>
                        <td style="text-align: center;">5</td>
                        <td style="text-align: center;"><strong>4.5</strong></td>
                        <td style="text-align: center;">
                            <span class="fault-badge" style="background-color: #dcfce7; color: #15803d; padding: 4px 10px; border-radius: 12px; font-weight: 600;">
                                Superior
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Física</strong></td>
                        <td>Prof. Juan José González</td>
                        <td style="text-align: center;">4</td>
                        <td style="text-align: center;"><strong>3.8</strong></td>
                        <td style="text-align: center;">
                            <span class="fault-badge" style="background-color: #e0f2fe; color: #0369a1; padding: 4px 10px; border-radius: 12px; font-weight: 600;">
                                Alto
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Lengua Castellana</strong></td>
                        <td>Prof. Fernando Rodríguez</td>
                        <td style="text-align: center;">4</td>
                        <td style="text-align: center;"><strong>3.2</strong></td>
                        <td style="text-align: center;">
                            <span class="fault-badge" style="background-color: #fef3c7; color: #b45309; padding: 4px 10px; border-radius: 12px; font-weight: 600;">
                                Básico
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

<?php 
include'../layoutRol/footerRol.php'
 ?>

</body>
</html>