<?php include("../controllers/SessionAcudienteController.php"); ?>

<!DOCTYPE html>
<html lang="es">

<?php 
include'../layoutRol/HeadRol.php'
 ?>    <title>Panel de Control - EDUNECTION</title>

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
                <a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesAcudiente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container dashboard-layout">

        <!-- Sidebar Perfil del Acudiente -->
        <aside class="profile-card">
            <div class="profile-header">
                <div class="avatar-circle">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <h3 class="profile-name">Carlos Pérez Gómez</h3>
            </div>

            <div class="profile-info">
                <div class="info-group">
                    <label>ID Documento</label>
                    <span>79844321</span>
                </div>
                <div class="info-group">
                    <label>Correo Electrónico</label>
                    <span>carlos.perez@gmail.com</span>
                </div>
                <div class="info-group">
                    <label>Teléfono</label>
                    <span>3158804422</span>
                </div>
                <div class="info-group">
                    <label>Institución Educativa</label>
                    <span>Unidad Educativa Simón Bolívar</span>
                </div>
                <div class="info-group">
                    <label>Estudiante Acudido</label>
                    <span>Pepito Pérez Rodríguez</span>
                </div>
                <div class="info-group">
                    <label>Curso del Acudido</label>
                    <span>Curso 1104</span>
                </div>
                <div class="info-group">
                    <label>Estado</label>
                    <div><span class="status-tag">Activo</span></div>
                </div>
            </div>
        </aside>

        <!-- Contenido Principal -->
        <section>
            <!-- Card de Bienvenida -->
            <div class="dash-card welcome-card">
                <h2>¡Bienvenido de nuevo, Carlos!</h2>
                <p>Desde aquí puedes realizar el seguimiento académico de tu acudido, consultar calificaciones, revisar tareas pendientes y comunicarte con la institución.</p>
            </div>

            <!-- Grilla 2 columnas (Asignaturas y Tareas Pendientes) -->
            <div class="dash-grid-2">
                <!-- Asignaturas del Acudido -->
                <div class="dash-card">
                    <div class="card-title">
                        <span>Asignaturas del Estudiante</span>
                        <i class="fa-solid fa-chevron-right card-title-icon"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-book"></i></div>
                            <span class="item-text-primary">Matemáticas - 1104</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-flask"></i></div>
                            <span class="item-text-primary">Física y Química - 1104</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-language"></i></div>
                            <span class="item-text-primary">Español y Literatura - 1104</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>
                </div>

                <!-- Tareas y Actividades Próximas -->
                <div class="dash-card">
                    <div class="card-title">
                        <span>Tareas Próximas</span>
                        <i class="fa-solid fa-chevron-right card-title-icon"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Taller de Cálculo (Matemáticas)</div>
                                <div class="item-text-secondary">Entrega: 25/05/2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Informe de Cinetica (Física)</div>
                                <div class="item-text-secondary">Entrega: 08/07/2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Ensayo Literario (Español)</div>
                                <div class="item-text-secondary">Entrega: 27/10/2026</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Últimas Notas / Notificaciones Académicas -->
            <div class="dash-card">
                <div class="card-title">
                    <span>Calificaciones Recientes</span>
                    <i class="fa-solid fa-chevron-right card-title-icon"></i>
                </div>

                <div class="item-row">
                    <div class="item-left">
                        <div class="badge-icon"><i class="fa-solid fa-star"></i></div>
                        <div>
                            <div class="item-text-primary">Evaluación Parcial - Matemáticas</div>
                            <div class="item-text-secondary">Nota: 4.5 / 5.0</div>
                        </div>
                    </div>
                    <span class="status-tag" style="background-color: #dcfce7; color: #166534;">Aprobado</span>
                </div>

                <div class="item-row">
                    <div class="item-left">
                        <div class="badge-icon"><i class="fa-solid fa-star"></i></div>
                        <div>
                            <div class="item-text-primary">Exposición de Química</div>
                            <div class="item-text-secondary">Nota: 4.0 / 5.0</div>
                        </div>
                    </div>
                    <span class="status-tag" style="background-color: #dcfce7; color: #166534;">Aprobado</span>
                </div>
            </div>

        </section>

    </main>

<?php 
include'../layoutRol/footerRol.php'
 ?>
</body>

</html>