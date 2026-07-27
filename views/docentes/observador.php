<!DOCTYPE html>
<html lang="es">

<?php 
include'layout/Headdocentes.php'
 ?>
    <title>Observador del Estudiante - EDUNECTION</title>
</head>
<body>

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
    <main class="container observer-layout">

        <!-- Encabezado de Página con Botón de Nuevo Registro -->
        <div class="page-header-flex">
            <div>
                <h2>Observador del Estudiante</h2>
                <p>Registro convivencial y de compromisos disciplinares.</p>
            </div>
            <button class="btn-primary-action">
                <i class="fa-solid fa-plus"></i> Registrar Anotación
            </button>
        </div>

        <!-- Filtros de Búsqueda -->
        <div class="observer-filters-card">
            <div class="filter-group">
                <label><i class="fa-solid fa-graduation-cap"></i> Curso</label>
                <select class="custom-select">
                    <option value="1004" selected>1004</option>
                    <option value="1101">1101</option>
                    <option value="901">901</option>
                </select>
            </div>

            <div class="filter-group span-2">
                <label><i class="fa-solid fa-user-graduate"></i> Alumno</label>
                <select class="custom-select">
                    <option value="1" selected>Ramiro Torrez Gonzalez</option>
                    <option value="2">Juan Jose Gonzalez</option>
                    <option value="3">Fernando Rodriguez</option>
                </select>
            </div>

            <div class="filter-group span-2">
                <label><i class="fa-solid fa-chalkboard-user"></i> Docente</label>
                <select class="custom-select">
                    <option value="1" selected>Pepito Perez Rodriguez Fernandez</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-regular fa-calendar"></i> Fecha</label>
                <input type="date" class="form-input-date" value="2026-03-26">
            </div>
        </div>

        <!-- Tabla de Registros del Observador -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th style="width: 140px;">Tipo de Falta</th>
                        <th style="width: 120px;">Fecha</th>
                        <th>Observación del Docente</th>
                        <th>Compromiso del Estudiante</th>
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
                            <p class="table-text-content">Faltó el respeto a uno de sus compañeros durante la clase de matemáticas.</p>
                        </td>
                        <td>
                            <p class="table-text-content commitment">El estudiante se ha comprometido a no volver a faltar el respeto a sus compañeros y ofrecer una disculpa pública.</p>
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
                            <p class="table-text-content">Llegada tardía recurrente al inicio de la jornada escolar sin justificación.</p>
                        </td>
                        <td>
                            <p class="table-text-content commitment">El acudiente se compromete a garantizar el ingreso puntual a la institución.</p>
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