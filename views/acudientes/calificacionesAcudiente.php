<?php include("../../controllers/SessionAcudienteController.php"); ?>

<!DOCTYPE html>
<html lang="es">

<?php 
include'../layoutRol/HeadRol.php'
 ?>    <title>Calificaciones Detalladas - EDUNECTION</title>
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
    <main class="container grades-layout">

        <!-- Encabezado de Página -->
        <div class="page-header-flex">
            <div>
                <h2>Seguimiento de Calificaciones</h2>
                <p>Revisa el detalle de notas parciales, entregas y evaluaciones de tu acudido.</p>
            </div>
        </div>

        <!-- Filtros de Búsqueda -->
        <div class="observer-filters-card">
            <div class="filter-group span-2">
                <label><i class="fa-solid fa-user-graduate"></i> Estudiante Acudido</label>
                <select class="custom-select">
                    <option value="1" selected>Ramiro Torrez González (Curso 1004)</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-book"></i> Asignatura</label>
                <select class="custom-select">
                    <option value="mat" selected>Matemáticas</option>
                    <option value="fis">Física</option>
                    <option value="len">Lengua Castellana</option>
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

        <!-- Tarjeta del Promedio Acumulado -->
        <div class="observer-filters-card" style="margin-bottom: 20px; background: #f8fafc; border-left: 4px solid #2563eb;">
            <div style="display: flex; justify-content: space-between; align-items: center; width: 100%; width: -webkit-fill-available;">
                <div>
                    <h4 style="margin: 0 0 5px 0; color: #1e293b;">Promedio Parcial de Matemáticas</h4>
                    <span class="text-muted">Docente: Prof. María Mares Fernández</span>
                </div>
                <div style="text-align: right;">
                    <span style="font-size: 1.8rem; font-weight: 700; color: #2563eb;">4.5</span>
                    <small style="display: block; color: #16a34a; font-weight: 600;">Desempeño Superior</small>
                </div>
            </div>
        </div>

        <!-- Tabla de Detalle de Actividades -->
        <div class="table-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Actividad / Evaluación</th>
                        <th style="width: 140px;">Fecha de Entrega</th>
                        <th style="width: 100px; text-align: center;">Porcentaje</th>
                        <th style="width: 100px; text-align: center;">Calificación</th>
                        <th>Retroalimentación del Docente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <strong>Taller de Álgebra y Funciones</strong><br>
                            <small class="text-muted">Trabajo Individual</small>
                        </td>
                        <td>
                            <span class="date-text"><i class="fa-regular fa-calendar icon-date"></i> 12/02/2026</span>
                        </td>
                        <td style="text-align: center;">25%</td>
                        <td style="text-align: center;">
                            <strong style="color: #16a34a; font-size: 1.05rem;">5.0</strong>
                        </td>
                        <td>
                            <p class="table-text-content">Excelente desarrollo de los ejercicios y sustentación clara.</p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Evaluación Parcial - Ecuaciones</strong><br>
                            <small class="text-muted">Examen Escrito</small>
                        </td>
                        <td>
                            <span class="date-text"><i class="fa-regular fa-calendar icon-date"></i> 28/02/2026</span>
                        </td>
                        <td style="text-align: center;">35%</td>
                        <td style="text-align: center;">
                            <strong style="color: #2563eb; font-size: 1.05rem;">4.2</strong>
                        </td>
                        <td>
                            <p class="table-text-content">Buen dominio del tema, revisar procedimiento en el punto 3.</p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <strong>Guía de Métodos de Factorización</strong><br>
                            <small class="text-muted">Tarea en Clase</small>
                        </td>
                        <td>
                            <span class="date-text"><i class="fa-regular fa-calendar icon-date"></i> 10/03/2026</span>
                        </td>
                        <td style="text-align: center;">20%</td>
                        <td style="text-align: center;">
                            <strong style="color: #2563eb; font-size: 1.05rem;">4.5</strong>
                        </td>
                        <td>
                            <p class="table-text-content">Entregado a tiempo y con todas las actividades completas.</p>
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