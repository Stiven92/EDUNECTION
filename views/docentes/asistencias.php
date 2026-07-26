<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencias - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tu ruta exacta de CSS -->
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
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
    <main class="container attendance-layout">

        <!-- Encabezado de Página con Botón de Guardar -->
        <div class="page-header-flex">
            <div>
                <h2>Control de Asistencia</h2>
                <p>Toma asistencia de los estudiantes del curso seleccionado.</p>
            </div>
            <button class="btn-save-attendance">
                <i class="fa-solid fa-floppy-disk"></i> Guardar Asistencia
            </button>
        </div>

        <!-- Filtros de Asistencia -->
        <div class="attendance-filters-card">
            <div class="filter-group">
                <label><i class="fa-solid fa-graduation-cap"></i> Curso</label>
                <select class="custom-select">
                    <option value="1104" selected>Curso 1104</option>
                    <option value="1101">Curso 1101</option>
                    <option value="901">Curso 901</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-regular fa-calendar"></i> Fecha</label>
                <input type="date" class="form-input-date" value="2026-03-26">
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

        <!-- Tabla de Tomar Asistencia -->
        <div class="table-card">
            <div class="attendance-table-header">
                <i class="fa-solid fa-users"></i> Listado de Estudiantes - Curso 1104
            </div>

            <table class="data-table attendance-table">
                <thead>
                    <tr>
                        <th style="text-align: left; padding-left: 24px;">Nombre del Estudiante</th>
                        <th class="text-center">Presente</th>
                        <th class="text-center">Ausente</th>
                        <th class="text-center">Tardanza</th>
                        <th class="text-center">Falla Justificada</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Estudiante 1 -->
                    <tr>
                        <td class="font-bold student-name">
                            <i class="fa-regular fa-user student-icon"></i> Juan Jose Gonzalez
                        </td>
                        <td class="text-center">
                            <label class="attendance-option present">
                                <input type="radio" name="att_1" checked>
                                <span class="check-btn"><i class="fa-regular fa-circle-check"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option absent">
                                <input type="radio" name="att_1">
                                <span class="check-btn"><i class="fa-regular fa-circle-xmark"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option late">
                                <input type="radio" name="att_1">
                                <span class="check-btn"><i class="fa-regular fa-clock"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option justified">
                                <input type="radio" name="att_1">
                                <span class="check-btn"><i class="fa-regular fa-file-lines"></i></span>
                            </label>
                        </td>
                    </tr>

                    <!-- Estudiante 2 -->
                    <tr>
                        <td class="font-bold student-name">
                            <i class="fa-regular fa-user student-icon"></i> Stiven Torres Mendieta
                        </td>
                        <td class="text-center">
                            <label class="attendance-option present">
                                <input type="radio" name="att_2">
                                <span class="check-btn"><i class="fa-regular fa-circle-check"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option absent">
                                <input type="radio" name="att_2">
                                <span class="check-btn"><i class="fa-regular fa-circle-xmark"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option late">
                                <input type="radio" name="att_2" checked>
                                <span class="check-btn"><i class="fa-regular fa-clock"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option justified">
                                <input type="radio" name="att_2">
                                <span class="check-btn"><i class="fa-regular fa-file-lines"></i></span>
                            </label>
                        </td>
                    </tr>

                    <!-- Estudiante 3 -->
                    <tr>
                        <td class="font-bold student-name">
                            <i class="fa-regular fa-user student-icon"></i> Fernando Rodriguez
                        </td>
                        <td class="text-center">
                            <label class="attendance-option present">
                                <input type="radio" name="att_3">
                                <span class="check-btn"><i class="fa-regular fa-circle-check"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option absent">
                                <input type="radio" name="att_3" checked>
                                <span class="check-btn"><i class="fa-regular fa-circle-xmark"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option late">
                                <input type="radio" name="att_3">
                                <span class="check-btn"><i class="fa-regular fa-clock"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option justified">
                                <input type="radio" name="att_3">
                                <span class="check-btn"><i class="fa-regular fa-file-lines"></i></span>
                            </label>
                        </td>
                    </tr>

                    <!-- Estudiante 4 -->
                    <tr>
                        <td class="font-bold student-name">
                            <i class="fa-regular fa-user student-icon"></i> Ramiro Torrez Gonzalez
                        </td>
                        <td class="text-center">
                            <label class="attendance-option present">
                                <input type="radio" name="att_4" checked>
                                <span class="check-btn"><i class="fa-regular fa-circle-check"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option absent">
                                <input type="radio" name="att_4">
                                <span class="check-btn"><i class="fa-regular fa-circle-xmark"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option late">
                                <input type="radio" name="att_4">
                                <span class="check-btn"><i class="fa-regular fa-clock"></i></span>
                            </label>
                        </td>
                        <td class="text-center">
                            <label class="attendance-option justified">
                                <input type="radio" name="att_4">
                                <span class="check-btn"><i class="fa-regular fa-file-lines"></i></span>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Leyenda / Convenciones -->
        <div class="attendance-legend-card">
            <span class="legend-title">Leyenda de Estados:</span>
            <div class="legend-items">
                <span class="legend-item present"><i class="fa-regular fa-circle-check"></i> Presente</span>
                <span class="legend-item absent"><i class="fa-regular fa-circle-xmark"></i> Ausente</span>
                <span class="legend-item late"><i class="fa-regular fa-clock"></i> Tardanza</span>
                <span class="legend-item justified"><i class="fa-regular fa-file-lines"></i> Falla Justificada</span>
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