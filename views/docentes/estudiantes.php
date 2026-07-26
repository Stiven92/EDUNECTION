<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes - EDUNECTION</title>
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
                <a href="dashboardDocente.php" class="nav-item">Inicio</a>
                <a href="cursos.php" class="nav-item">Cursos</a>
                <a href="estudiantes.php" class="nav-item active">Estudiantes</a>
                <a href="actividades.php" class="nav-item">Actividades</a>
            </nav>

            <div class="nav-icons">
<a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
<a href="notificaciones.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
<a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container students-layout">

        <!-- Header con Título y Badges de Filtro Activo -->
        <div class="students-header">
            <div class="page-header">
                <h2>Listado de Estudiantes</h2>
                <p>Consulta el estado académico y las observaciones del grupo seleccionado.</p>
            </div>
            
            <div class="filter-pills">
                <div class="filter-pill">
                    <span class="label">Curso:</span>
                    <span class="value">1104</span>
                </div>
                <div class="filter-pill">
                    <span class="label">Asignatura:</span>
                    <span class="value">Matemáticas</span>
                </div>
            </div>
        </div>

        <!-- Barra de Búsqueda y Botón Acción Secundario -->
        <div class="students-action-bar">
            <div class="search-box-container search-student">
                <div class="search-input-wrapper">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" placeholder="Buscar estudiante por nombre o ID..." class="search-input">
                </div>
                <button class="btn-search">Buscar</button>
            </div>

            <a href="actividades.html" class="btn-secondary-action">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Ver Actividades</span>
            </a>
        </div>

        <!-- Tabla Estilizada de Estudiantes -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Estudiante</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Juan Jose Gonzalez</span>
                            </div>
                        </td>
                        <td><span class="status-tag active">Activo</span></td>
                        <td><span class="obs-tag positive">Buen desempeño Académico</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Stiven Torres Mendieta</span>
                            </div>
                        </td>
                        <td><span class="status-tag active">Activo</span></td>
                        <td><span class="obs-tag neutral">Ninguna</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Cristian Alejandro Piña</span>
                            </div>
                        </td>
                        <td><span class="status-tag inactive">Inactivo</span></td>
                        <td><span class="obs-tag neutral">Ninguna</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Fernando Rodriguez</span>
                            </div>
                        </td>
                        <td><span class="status-tag active">Activo</span></td>
                        <td><span class="obs-tag warning">Bajo Rendimiento</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Juan Jose Gonzalez</span>
                            </div>
                        </td>
                        <td><span class="status-tag active">Activo</span></td>
                        <td><span class="obs-tag positive">Buen desempeño Académico</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Stiven Torres Mendieta</span>
                            </div>
                        </td>
                        <td><span class="status-tag active">Activo</span></td>
                        <td><span class="obs-tag neutral">Ninguna</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Cristian Alejandro Piña</span>
                            </div>
                        </td>
                        <td><span class="status-tag inactive">Inactivo</span></td>
                        <td><span class="obs-tag neutral">Ninguna</span></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="student-user-info">
                                <div class="avatar-small"><i class="fa-solid fa-user"></i></div>
                                <span class="student-name">Fernando Rodriguez</span>
                            </div>
                        </td>
                        <td><span class="status-tag active">Activo</span></td>
                        <td><span class="obs-tag warning">Bajo Rendimiento</span></td>
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