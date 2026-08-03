
<!DOCTYPE html>
<html lang="es">

<?php 
include'../layoutRol/HeadRol.php'
 ?>    <title>Estudiantes - EDUNECTION</title>

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

            <a href="actividades.php" class="btn-secondary-action">
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

<?php 
include'../layoutRol/footerRol.php'
 ?>

</body>

</html>