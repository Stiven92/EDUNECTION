<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!-- Header & Navegación Administrador -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardAdmin.php" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo Pulpo" class="logo-icon">
                <span>EDUNECTION</span>
            </a>

            <nav class="nav-links">
                <a href="dashboardAdmin.php" class="nav-item">Inicio</a>
                <a href="estudiantes.php" class="nav-item active">Usuarios</a>
                <a href="docentes.php" class="nav-item">Docentes</a>
                <a href="cursosAdmin.php" class="nav-item">Cursos</a>

                <!-- Desplegable Gestión -->
                <div class="nav-dropdown">
                    <button type="button" class="dropdown-btn">
                        <span>Gestión</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="matricularEstudiante.php" class="dropdown-item active">
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
            <h2 id="page-title">Registrar Nuevo Usuario</h2>
        </div>

        <!-- Pestañas de Selección (Individual vs Carga Masiva) -->
        <div class="tab-container">
            <button class="tab-btn active" onclick="switchTab('individual')">
                <i class="fa-solid fa-user"></i> Registro Individual
            </button>
            <button class="tab-btn" onclick="switchTab('masiva')">
                <i class="fa-solid fa-file-csv"></i> Carga Masiva (Archivo Plano)
            </button>
        </div>

        <!-- OPCIÓN 1: Formulario Individual de Registro -->
        <div id="tab-individual" class="publish-card tab-content active">
            <form class="publish-form" action="../controller/registrarEstudianteController.php" method="POST">
                <!-- Selección de Rol Principal -->
                <div class="form-section-title">
                    <i class="fa-solid fa-user-shield"></i> Rol en el Sistema
                </div>

                <div class="form-group">
                    <label for="id_perfil" class="input-label">Seleccione el Rol a Registrar</label>
                    <select id="id_perfil" name="id_perfil" class="custom-select" required
                        onchange="actualizarCamposPorRol(this.value)">
                        <option value="" disabled selected>Seleccione un Rol...</option>
                        <option value="1">Administrador</option>
                        <option value="2">Directivo</option>
                        <option value="3">Docente</option>
                        <option value="4">Estudiante</option>
                        <option value="5">Acudiente</option>
                    </select>
                </div>

                <hr class="form-divider">

                <!-- Sección 1: Datos de Identificación -->
                <div class="form-section-title">
                    <i class="fa-solid fa-id-card"></i> Datos de Identificación
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="id_tipo_doc" class="input-label">Tipo de Documento</label>
                        <select id="id_tipo_doc" name="id_tipo_doc" class="custom-select" required>
                            <option value="" disabled selected>Seleccione...</option>
                            <option value="1">Tarjeta de Identidad (T.I.)</option>
                            <option value="2">Cédula de Ciudadanía (C.C.)</option>
                            <option value="3">Registro Civil (R.C.)</option>
                            <option value="4">Cédula de Extranjería (C.E.)</option>
                            <option value="5">Pasaporte (P.A.)</option>
                            <option value="6">Permiso por Protección Temporal (P.P.T.)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="documento_indentidad" class="input-label">Número de Documento</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-hashtag input-icon"></i>
                            <input type="text" id="documento_indentidad" name="documento_indentidad" class="form-input"
                                placeholder="Ej: 1098765432" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="nombre" class="input-label">Nombres</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-user input-icon"></i>
                            <input type="text" id="nombre" name="nombre" class="form-input"
                                placeholder="Ej: Ramiro Andrés" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido" class="input-label">Apellidos</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-user input-icon"></i>
                            <input type="text" id="apellido" name="apellido" class="form-input"
                                placeholder="Ej: Torres González" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="fecha_nacimiento" class="input-label">Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-input-date"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="sexo" class="input-label">Sexo</label>
                        <select id="sexo" name="sexo" class="custom-select" required>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sexo" class="input-label">Tipo de Sangre</label>
                        <select id="sangre_id" name="tipo_sangre" class="custom-select" required>
                            <option value="1">O+</option>
                            <option value="2">O-</option>
                            <option value="3">A+</option>
                            <option value="4">A-</option>
                            <option value="5">B+</option>
                            <option value="6">B-</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option>

                        </select>
                    </div>
                </div>

                <!-- SECCIÓN DINÁMICA: Campos específicos por rol según la base de datos -->
                <div id="campos-especificos" class="form-grid-2" style="display: none;">

                    <!-- Campo exclusivo para Docentes -->
                    <div class="form-group campo-rol campo-docente" style="display: none;">
                        <label for="especialidad" class="input-label">Especialidad</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-graduation-cap input-icon"></i>
                            <input type="text" id="especialidad" name="especialidad" class="form-input"
                                placeholder="Ej: Matemáticas, Ciencias...">
                        </div>
                    </div>

                    <!-- Campo exclusivo para Directivos -->
                    <div class="form-group campo-rol campo-directivo" style="display: none;">
                        <label for="cargo" class="input-label">Cargo</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-briefcase input-icon"></i>
                            <input type="text" id="cargo" name="cargo" class="form-input"
                                placeholder="Ej: Rector, Coordinador...">
                        </div>
                    </div>

                </div>

                <hr class="form-divider">

                <!-- Sección 2: Contacto y Salud -->
                <div class="form-section-title">
                    <i class="fa-solid fa-address-book"></i> Datos de Contacto y Salud
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="telefono" class="input-label">Teléfono</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-phone input-icon"></i>
                            <input type="tel" id="telefono" name="telefono" class="form-input"
                                placeholder="Ej: 3001234567">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="correo_electronico" class="input-label">Correo Electrónico</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-envelope input-icon"></i>
                            <input type="email" id="correo_electronico" name="correo_electronico" class="form-input"
                                placeholder="usuario@correo.com" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="direccion" class="input-label">Dirección de Residencia</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-location-dot input-icon"></i>
                            <input type="text" id="direccion" name="direccion" class="form-input"
                                placeholder="Ej: Calle 12 # 34-56">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="id_eps" class="input-label">EPS</label>
                        <select id="id_eps" name="id_eps" class="custom-select">
                            <option value="" disabled selected>Seleccione EPS...</option>
                            <option value="1">Nueva EPS</option>
                            <option value="2">Sura</option>
                            <option value="3">Sanitas</option>
                            <option value="4">Compensar</option>
                            <option value="5">Famisanar</option>
                            <option value="6">Salud Total</option>
                            <option value="7">Coosalud</option>
                            <option value="8">Aliansalud</option>
                            <option value="9">Capital Salud</option>
                            <option value="10">Mutual Ser</option>
                            <option value="11">Emssanar</option>
                            <option value="12">SOS</option>
                            <option value="13">Asmet Salud</option>
                            <option value="14">Comfachocó</option>
                            <option value="15">No aplica</option>
                        </select>
                    </div>
                </div>

                <!-- Campos Ocultos Generales -->
                <input type="hidden" name="activo_inactivo" value="1">
                <input type="hidden" name="id_institucion" value="1">

                <!-- Botones de Acción -->
                <div class="publish-actions">
                    <a href="dashboardAdmin.php" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish" id="btn-submit-text">
                        <i class="fa-solid fa-user-check"></i> Registrar Usuario
                    </button>
                </div>

            </form>
        </div>

        <!-- OPCIÓN 2: Carga Masiva mediante Archivo Plano -->
        <div id="tab-masiva" class="publish-card tab-content" style="display: none;">
            <form class="publish-form" action="procesarCargaMasiva.php" method="POST" enctype="multipart/form-data">

                <div class="form-section-title">
                    <i class="fa-solid fa-file-import"></i> Carga Masiva de Usuarios
                </div>

                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 10px;">
                    Sube un archivo plano (CSV o TXT) con la lista de nuevos usuarios. El archivo debe incluir la
                    columna del rol correspondiente.
                </p>

                <!-- Área Dropzone para Archivo Plano -->
                <div class="file-upload-dropzone">
                    <i class="fa-solid fa-cloud-arrow-up dropzone-icon"></i>
                    <div class="dropzone-text">
                        <span id="file-name-display">Arrastra y suelta tu archivo plano aquí o haz clic para
                            buscar</span>
                        <small>Formatos permitidos: .csv, .txt, .xlsx (Máx. 10MB)</small>
                    </div>
                    <input type="file" name="archivo_usuarios" id="archivo_usuarios" class="file-input-hidden"
                        accept=".csv, .txt, .xlsx" required onchange="showFileName(this)">
                </div>

                <!-- Botones de Acción -->
                <div class="publish-actions">
                    <a href="dashboardAdmin.php" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish">
                        <i class="fa-solid fa-upload"></i> Subir y Procesar Archivo
                    </button>
                </div>

            </form>
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

    <!-- Script de Interacción Dinámica y Pestañas -->
    <script>
        function switchTab(tabName) {
            const tabIndividual = document.getElementById('tab-individual');
            const tabMasiva = document.getElementById('tab-masiva');
            const btns = document.querySelectorAll('.tab-btn');

            btns.forEach(btn => btn.classList.remove('active'));

            if (tabName === 'individual') {
                tabIndividual.style.display = 'block';
                tabMasiva.style.display = 'none';
                btns[0].classList.add('active');
            } else {
                tabIndividual.style.display = 'none';
                tabMasiva.style.display = 'block';
                btns[1].classList.add('active');
            }
        }

        function showFileName(input) {
            const fileNameDisplay = document.getElementById('file-name-display');
            if (input.files && input.files[0]) {
                fileNameDisplay.innerHTML = `<strong>Archivo seleccionado:</strong> ${input.files[0].name}`;
            }
        }

        // Función para mostrar/ocultar campos según las tablas (directivo, docente, etc.)
        function actualizarCamposPorRol(idRol) {
            const contenedorEspecifico = document.getElementById('campos-especificos');
            const camposRol = document.querySelectorAll('.campo-rol');
            const btnSubmit = document.getElementById('btn-submit-text');

            // Ocultar todos los campos dinámicos
            camposRol.forEach(campo => campo.style.display = 'none');
            contenedorEspecifico.style.display = 'none';

            // Mapeo según la tabla `rol` que tienes en MySQL:
            // 1: Administrador, 2: Directivo, 3: Docente, 4: Estudiante, 5: Acudiente
            if (idRol === "2") { // Directivo
                contenedorEspecifico.style.display = 'grid';
                document.querySelector('.campo-directivo').style.display = 'block';
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Directivo';
            } else if (idRol === "3") { // Docente
                contenedorEspecifico.style.display = 'grid';
                document.querySelector('.campo-docente').style.display = 'block';
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Docente';
            } else if (idRol === "4") { // Estudiante
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Estudiante';
            } else if (idRol === "5") { // Acudiente
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Acudiente';
            } else { // Administrador
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Administrador';
            }
        }
    </script>

</body>

</html>