<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - EDUNECTION</title>
    <!-- Cargamos la tipografía moderna Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Íconos simples -->
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
                <a href="estudiantes.php" class="nav-item">Estudiantes</a>
                <a href="actividades.php" class="nav-item active">Actividades</a>
            </nav>

            <div class="nav-icons">
                <a href="mensajes.php" class="icon-btn active"><i class="fa-regular fa-envelope"></i></a>
                <a href="notificacionesDocente.php" class="icon-btn"><i class="fa-regular fa-bell"></i></a>
                <a href="perfil.php" class="icon-btn"><i class="fa-regular fa-user"></i></a>
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
                <h3 class="profile-name">Pepito Pérez Rodríguez</h3>
            </div>

            <div class="profile-info">
                <div class="info-group">
                    <label>ID Documento</label>
                    <span>1204437</span>
                </div>
                <div class="info-group">
                    <label>Correo Electrónico</label>
                    <span>pepitoperez@gmail.com</span>
                </div>
                <div class="info-group">
                    <label>Teléfono</label>
                    <span>3104403337</span>
                </div>
                <div class="info-group">
                    <label>Institución Educativa</label>
                    <span>Unidad Educativa Simón Bolívar</span>
                </div>
                <div class="info-group">
                    <label>Director de Curso</label>
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
                <h2>¡Bienvenido de nuevo, Pepito!</h2>
                <p>Desde aquí puedes gestionar tus asignaturas, registrar calificaciones, consultar estudiantes y
                    comunicarte con la comunidad.</p>
            </div>

            <!-- Grilla 2 columnas (Cursos y Actividades) -->
            <div class="dash-grid-2">
                <!-- Mis Cursos -->
                <div class="dash-card">
                    <div class="card-title">
                        <span>Mis Cursos</span>
                        <i class="fa-solid fa-chevron-right card-title-icon"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-folder"></i></div>
                            <span class="item-text-primary">Curso 1104</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-folder"></i></div>
                            <span class="item-text-primary">Curso 903</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-folder"></i></div>
                            <span class="item-text-primary">Curso 1101</span>
                        </div>
                        <i class="fa-solid fa-ellipsis-vertical" style="color: #cbd5e1;"></i>
                    </div>
                </div>

                <!-- Actividades Publicadas -->
                <div class="dash-card">
                    <div class="card-title">
                        <span>Actividades Publicadas</span>
                        <i class="fa-solid fa-chevron-right card-title-icon"></i>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Actividad-01</div>
                                <div class="item-text-secondary">Entrega: 25/05/2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Actividad-02</div>
                                <div class="item-text-secondary">Entrega: 08/07/2026</div>
                            </div>
                        </div>
                    </div>

                    <div class="item-row">
                        <div class="item-left">
                            <div class="badge-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <div class="item-text-primary">Investigación-05</div>
                                <div class="item-text-secondary">Entrega: 27/10/2026</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evidencias Recibidas -->
            <div class="dash-card">
                <div class="card-title">
                    <span>Evidencias Recibidas</span>
                    <i class="fa-solid fa-chevron-right card-title-icon"></i>
                </div>

                <div class="item-row">
                    <div class="item-left">
                        <div class="badge-icon"><i class="fa-solid fa-id-card"></i></div>
                        <div>
                            <div class="item-text-primary">Ramiro Torres González</div>
                            <div class="item-text-secondary">Actividad-01</div>
                        </div>
                    </div>
                    <span class="status-tag" style="background-color: #f1f5f9; color: #475569;">Curso 802</span>
                </div>

                <div class="item-row">
                    <div class="item-left">
                        <div class="badge-icon"><i class="fa-solid fa-id-card"></i></div>
                        <div>
                            <div class="item-text-primary">María Alfonsa Marines</div>
                            <div class="item-text-secondary">Actividad-02</div>
                        </div>
                    </div>
                    <span class="status-tag" style="background-color: #f1f5f9; color: #475569;">Curso 1102</span>
                </div>
            </div>

        </section>

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