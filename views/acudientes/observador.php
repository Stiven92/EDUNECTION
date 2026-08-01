<?php include("../controllers/SessionAcudienteController.php"); ?>

<!DOCTYPE html>
<html lang="es">

<?php 
include'../layoutRol/HeadRol.php'
 ?>    <title>Observador del Estudiante - EDUNECTION</title>
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
              <a href="boletinesAcudiente.php" class="nav-item">Boletines</a>
              <a href="calificacionesAcudiente.php" class="nav-item">Calificaciones</a>
              <a href="observador.php" class="nav-item">Observador</a>
              <a href="mensajes.php" class="nav-item">Mensajes</a>
            </nav>

            <div class="nav-icons">
                <a href="mensajes.php" class="icon-btn"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesAcudiente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container observer-layout">

        <!-- Encabezado de Página -->
        <div class="page-header-flex">
            <div>
                <h2>Observador del Estudiante</h2>
                <p>Historial convivencial, observaciones pedagógicas y compromisos asignados.</p>
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

            <div class="filter-group span-2">
                <label><i class="fa-solid fa-chalkboard-user"></i> Filtrar por Docente</label>
                <select class="custom-select">
                    <option value="0" selected>Todos los docentes</option>
                    <option value="1">María Mares Fernández (Matemáticas)</option>
                    <option value="2">Juan José González (Física)</option>
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
                        <th>Docente / Asignatura</th>
                        <th>Observación Registrada</th>
                        <th>Compromiso Establecido</th>
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
                            <strong>Prof. María Mares</strong><br>
                            <small class="text-muted">Matemáticas</small>
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
                            <strong>Coordinación Disciplinaria</strong><br>
                            <small class="text-muted">Convivencia</small>
                        </td>
                        <td>
                            <p class="table-text-content">Llegada tardía recurrente al inicio de la jornada escolar sin justificación.</p>
                        </td>
                        <td>
                            <p class="table-text-content commitment">El acudiente se compromete a garantizar el ingreso puntual del estudiante a la institución.</p>
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