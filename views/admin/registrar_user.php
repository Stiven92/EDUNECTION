<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
</head>

<body>

    <!-- Header & Navegación Administrador -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardAdmin.php" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo EDUNECTION" class="logo-icon">
                <span>EDUNECTION</span>
            </a>

            <nav class="nav-links">
                <a href="dashboardAdmin.php" class="nav-item">Inicio</a>
                <a href="usuarios.php" class="nav-item active">Usuarios</a>
                <a href="docentes.php" class="nav-item">Docentes</a>
                <a href="cursosAdmin.php" class="nav-item">Cursos</a>

                <!-- Desplegable Gestión -->
                <div class="nav-dropdown">
                    <button type="button" class="dropdown-btn">
                        <span>Gestión</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="matricularEstudiante.php" class="dropdown-item">
                            <i class="fa-solid fa-user-plus"></i> Nuevo Registro
                        </a>
                        <a href="reportes.php" class="dropdown-item">
                            <i class="fa-solid fa-chart-pie"></i> Reportes Generales
                        </a>
                    </div>
                </div>
            </nav>

            <div class="nav-icons">
                <button class="icon-btn"><i class="fa-regular fa-envelope"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-bell"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-user"></i></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container publish-layout">

        <div class="page-header-action">
            <a href="dashboardAdmin.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Volver al Inicio
            </a>
            <h2 id="page-title">Gestión de Usuarios de Sistema</h2>
        </div>

        <!-- Pestañas de Selección -->
        <div class="tab-container">
            <button class="tab-btn active" onclick="switchTab('registro')">
                <i class="fa-solid fa-user-plus"></i> Registrar Usuario
            </button>
            <button class="tab-btn" onclick="switchTab('masiva')">
                <i class="fa-solid fa-file-csv"></i> Carga Masiva
            </button>
            <button class="tab-btn" onclick="switchTab('listado')">
                <i class="fa-solid fa-users"></i> Lista de Usuarios
            </button>
        </div>

        <!-- OPCIÓN 1: Formulario Individual (Tabla: usuario) -->
        <div id="tab-registro" class="publish-card tab-content active">
            <form class="publish-form" action="../controller/usuarioController.php?action=crear" method="POST">

                <div class="form-section-title">
                    <i class="fa-solid fa-key"></i> Credenciales y Acceso
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="correo" class="input-label">Correo Electrónico</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-envelope input-icon"></i>
                            <input type="email" id="correo" name="correo" class="form-input"
                                placeholder="ejemplo@dominio.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="input-label">Contraseña</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-lock input-icon"></i>
                            <input type="password" id="password" name="password" class="form-input"
                                placeholder="••••••••" required>
                        </div>
                    </div>
                </div>

                <hr class="form-divider">

                <div class="form-section-title">
                    <i class="fa-solid fa-building-columns"></i> Institución y Rol
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="id_institucion" class="input-label">Institución Educativa</label>
                        <select id="id_institucion" name="id_institucion" class="custom-select" required>
                            <option value="" disabled selected>Seleccione Institución...</option>
                            <!-- Dinámico vía PHP -->
                            <option value="1">Institución Educativa Principal</option>
                            <option value="2">Sede Secundaria</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_rol" class="input-label">Rol de Usuario</label>
                        <select id="id_rol" name="id_rol" class="custom-select" required>
                            <option value="" disabled selected>Seleccione Rol...</option>
                            <option value="1">Administrador</option>
                            <option value="2">Directivo</option>
                            <option value="3">Docente</option>
                            <option value="4">Estudiante</option>
                            <option value="5">Acudiente</option>
                        </select>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="estado" class="input-label">Estado de la Cuenta</label>
                        <select id="estado" name="estado" class="custom-select" required>
                            <option value="Activo" selected>Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>

                <!-- Botones de Acción -->
                <div class="publish-actions">
                    <a href="dashboardAdmin.php" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish">
                        <i class="fa-solid fa-user-check"></i> Crear Usuario
                    </button>
                </div>

            </form>
        </div>

        <!-- OPCIÓN 2: Carga Masiva -->
        <div id="tab-masiva" class="publish-card tab-content" style="display: none;">
            <form class="publish-form" action="../controller/usuarioController.php?action=carga_masiva" method="POST"
                enctype="multipart/form-data">

                <div class="form-section-title">
                    <i class="fa-solid fa-file-import"></i> Carga Masiva de Cuentas de Usuario
                </div>

                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 10px;">
                    Sube un archivo plano (CSV o TXT) que contenga los campos:
                    <code>id_institucion, id_rol, correo, password, estado</code>.
                </p>

                <div class="file-upload-dropzone">
                    <i class="fa-solid fa-cloud-arrow-up dropzone-icon"></i>
                    <div class="dropzone-text">
                        <span id="file-name-display">Arrastra y suelta tu archivo aquí o haz clic para buscar</span>
                        <small>Formatos permitidos: .csv, .txt, .xlsx (Máx. 10MB)</small>
                    </div>
                    <input type="file" name="archivo_usuarios" id="archivo_usuarios" class="file-input-hidden"
                        accept=".csv, .txt, .xlsx" required onchange="showFileName(this)">
                </div>

                <div class="publish-actions">
                    <a href="dashboardAdmin.php" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish">
                        <i class="fa-solid fa-upload"></i> Procesar Usuarios
                    </button>
                </div>

            </form>
        </div>

        <!-- OPCIÓN 3: Listado de Usuarios Registrados -->
        <div id="tab-listado" class="tab-content" style="display: none;">
            <div class="students-action-bar">
                <div class="search-input-wrapper search-student">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" class="search-input" placeholder="Buscar por correo o ID...">
                </div>
            </div>

            <div class="table-card">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th># ID</th>
                            <th>Correo / Usuario</th>
                            <th>Institución</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Fecha Creación</th>
                            <th style="text-align: center;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de renderizado dinámico en PHP -->
                        <tr>
                            <td class="font-bold">#1</td>
                            <td>
                                <div class="student-user-info">
                                    <div class="avatar-small">
                                        <i class="fa-regular fa-user"></i>
                                    </div>
                                    <span class="student-name">admin@edunection.edu.co</span>
                                </div>
                            </td>
                            <td><span class="text-muted-cell">Institución Principal</span></td>
                            <td><span class="type-tag purple">Administrador</span></td>
                            <td><span class="status-tag active">Activo</span></td>
                            <td><span class="date-text">2026-03-30 10:00</span></td>
                            <td style="text-align: center;">
                                <a href="editarUsuario.php?id=1" class="tool-btn" title="Editar"><i
                                        class="fa-solid fa-pen"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">#2</td>
                            <td>
                                <div class="student-user-info">
                                    <div class="avatar-small">
                                        <i class="fa-regular fa-user"></i>
                                    </div>
                                    <span class="student-name">docente.mate@edunection.edu.co</span>
                                </div>
                            </td>
                            <td><span class="text-muted-cell">Institución Principal</span></td>
                            <td><span class="type-tag green">Docente</span></td>
                            <td><span class="status-tag active">Activo</span></td>
                            <td><span class="date-text">2026-03-30 10:15</span></td>
                            <td style="text-align: center;">
                                <a href="editarUsuario.php?id=2" class="tool-btn" title="Editar"><i
                                        class="fa-solid fa-pen"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

    <!-- Script de Pestañas e Interacción -->
    <script>
        function switchTab(tabName) {
            const tabs = {
                'registro': document.getElementById('tab-registro'),
                'masiva': document.getElementById('tab-masiva'),
                'listado': document.getElementById('tab-listado')
            };

            const btns = document.querySelectorAll('.tab-btn');
            btns.forEach(btn => btn.classList.remove('active'));

            Object.keys(tabs).forEach(key => {
                if (tabs[key]) tabs[key].style.display = 'none';
            });

            if (tabName === 'registro') {
                tabs['registro'].style.display = 'block';
                btns[0].classList.add('active');
            } else if (tabName === 'masiva') {
                tabs['masiva'].style.display = 'block';
                btns[1].classList.add('active');
            } else if (tabName === 'listado') {
                tabs['listado'].style.display = 'block';
                btns[2].classList.add('active');
            }
        }

        function showFileName(input) {
            const fileNameDisplay = document.getElementById('file-name-display');
            if (input.files && input.files[0]) {
                fileNameDisplay.innerHTML = `<strong>Archivo seleccionado:</strong> ${input.files[0].name}`;
            }
        }
    </script>

</body>

</html>