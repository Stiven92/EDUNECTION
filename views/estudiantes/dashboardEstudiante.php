<?php include("../../controllers/SessionEstudianteController.php"); ?>
<!DOCTYPE html>
<html lang="es">

<?php include '../layoutRol/HeadRol.php'; ?>
<title>Panel de Control - EDUNECTION</title>

</head>

<body>

    <!-- Header & Navegación -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardEstudiante.php" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo EDUNECTION" class="logo-icon">
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
                <a href="mensajes.php" class="icon-btn active" title="Mensajes"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesEstudiante.php" class="icon-btn" title="Notificaciones"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn" title="Perfil"><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container dashboard-layout">

        <!-- Sidebar Perfil -->
        <aside class="profile-card">
            <div class="profile-header">
                <div class="avatar-circle">
                    <i class="fa-solid fa-user"></i>
                </div>
                <h3 class="profile-name">Juan Esteban Mendieta</h3>
            </div>

            <div class="profile-info">
                <div class="info-group">
                    <label>ID Documento</label>
                    <span>1004589211</span>
                </div>
                <div class="info-group">
                    <label>Correo Electrónico</label>
                    <span>juan.mendieta@estudiante.edu.co</span>
                </div>
                <div class="info-group">
                    <label>Teléfono</label>
                    <span>3124567890</span>
                </div>
                <div class="info-group">
                    <label>Institución Educativa</label>
                    <span>Unidad Educativa Simón Bolívar</span>
                </div>
                <div class="info-group">
                    <label>Curso Actual</label>
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
                <h2>¡Bienvenido de nuevo, Juan!</h2>
                <p>Desde aquí puedes consultar tus asignaturas, revisar tareas pendientes, verificar tus calificaciones y estar al día con tus actividades escolares.</p>
            </div>

            <!-- Grilla 2 columnas (Mis Asignaturas y Actividades Pendientes) -->
            <div class="dash-grid-2">
                <!-- Mis Asignaturas -->
                <div class="dash-card">
                    <div class="card-title">
                        <span>Mis Asignaturas</span>
                        <i class="fa-solid fa-chevron-right card-title-icon"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-book"></i></div>
                            <span class="item-text-primary">Matemáticas</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-book"></i></div>
                            <span class="item-text-primary">Español</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-book"></i></div>
                            <span class="item-text-primary">Inglés</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>
                </div>

                <!-- Actividades Pendientes -->
                <div class="dash-card">
                    <div class="card-title">
                        <span>Actividades Pendientes</span>
                        <i class="fa-solid fa-chevron-right card-title-icon"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Taller de Álgebra - P2</div>
                                <div class="item-text-secondary">Entrega: 25/05/2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Ensayo Literatura</div>
                                <div class="item-text-secondary">Entrega: 08/07/2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Proyecto Guía de Inglés</div>
                                <div class="item-text-secondary">Entrega: 27/10/2026</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Últimas Entregas / Calificaciones -->
            <div class="dash-card">
                <div class="card-title">
                    <span>Últimas Calificaciones Recibidas</span>
                    <i class="fa-solid fa-chevron-right card-title-icon"></i>
                </div>

                <div class="item-row">
                    <div class="item-left">
                        <div class="badge-icon"><i class="fa-solid fa-star"></i></div>
                        <div>
                            <div class="item-text-primary">Actividad-01 - Matemáticas</div>
                            <div class="item-text-secondary">Calificado por: Prof. Pepito Pérez</div>
                        </div>
                    </div>
                    <span class="status-tag" style="background-color: #dcfce7; color: #166534;">4.8 / 5.0</span>
                </div>

                <div class="item-row">
                    <div class="item-left">
                        <div class="badge-icon"><i class="fa-solid fa-star"></i></div>
                        <div>
                            <div class="item-text-primary">Taller-02 - Español</div>
                            <div class="item-text-secondary">Calificado por: Prof. María Alfonsa</div>
                        </div>
                    </div>
                    <span class="status-tag" style="background-color: #dcfce7; color: #166534;">4.5 / 5.0</span>
                </div>
            </div>

        </section>

    </main>

<?php include '../layoutRol/footerRol.php'; ?>

</body>

</html>