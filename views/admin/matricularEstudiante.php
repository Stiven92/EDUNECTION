<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricular Estudiante - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Ruta exacta de tu CSS -->
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
</head>
<body>

    <!-- Header & Navegación Administrador -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo Pulpo" class="logo-icon">
                <span>EDUNECTION</span>
            </a>
            
            <nav class="nav-links">
                <a href="dashboardAdmin.php" class="nav-item">Inicio</a>
                <a href="estudiantes.php" class="nav-item active">Estudiantes</a>
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
                            <i class="fa-solid fa-user-plus"></i> Nueva Matrícula
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
            <a href="estudiantes.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Volver a Estudiantes
            </a>
            <h2>Matricular Estudiante</h2>
        </div>

        <!-- Pestañas de Selección (Individual vs Carga Masiva) -->
        <div class="tab-container">
            <button class="tab-btn active" onclick="switchTab('individual')">
                <i class="fa-solid fa-user"></i> Matrícula Individual
            </button>
            <button class="tab-btn" onclick="switchTab('masiva')">
                <i class="fa-solid fa-file-csv"></i> Carga Masiva (Archivo Plano)
            </button>
        </div>

        <!-- OPCIÓN 1: Formulario Individual de Matrícula -->
        <div id="tab-individual" class="publish-card tab-content active">
            <form class="publish-form" action="procesarMatricula.php" method="POST">
                
                <!-- Sección 1: Datos de Identificación -->
                <div class="form-section-title">
                    <i class="fa-solid fa-id-card"></i> Datos del Estudiante
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="id_tipo_doc" class="input-label">Tipo de Documento</label>
                        <select id="id_tipo_doc" name="id_tipo_doc" class="custom-select" required>
                            <option value="" disabled selected>Seleccione...</option>
                            <option value="1">Tarjeta de Identidad (T.I.)</option>
                            <option value="2">Cédula de Ciudadanía (C.C.)</option>
                            <option value="3">Cédula de Extranjería (C.E.)</option>
                            <option value="4">Registro Civil (R.C.)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="documento_indentidad" class="input-label">Número de Documento</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-hashtag input-icon"></i>
                            <input type="text" id="documento_indentidad" name="documento_indentidad" class="form-input" placeholder="Ej: 1098765432" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="nombre" class="input-label">Nombres</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-user input-icon"></i>
                            <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Ej: Ramiro Andrés" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido" class="input-label">Apellidos</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-user input-icon"></i>
                            <input type="text" id="apellido" name="apellido" class="form-input" placeholder="Ej: Torres González" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="fecha_nacimiento" class="input-label">Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-input-date" required>
                    </div>

                    <div class="form-group">
                        <label for="id_genero" class="input-label">Género</label>
                        <select id="id_genero" name="id_genero" class="custom-select" required>
                            <option value="" disabled selected>Seleccione...</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                            <option value="3">Otro</option>
                        </select>
                    </div>
                </div>

                <hr class="form-divider">

                <!-- Sección 2: Contacto y Ubicación -->
                <div class="form-section-title">
                    <i class="fa-solid fa-address-book"></i> Datos de Contacto y Salud
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="telefono" class="input-label">Teléfono</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-phone input-icon"></i>
                            <input type="tel" id="telefono" name="telefono" class="form-input" placeholder="Ej: 3001234567">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="correo_electronico" class="input-label">Correo Electrónico</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-envelope input-icon"></i>
                            <input type="email" id="correo_electronico" name="correo_electronico" class="form-input" placeholder="estudiante@correo.com" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="direccion" class="input-label">Dirección de Residencia</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-location-dot input-icon"></i>
                            <input type="text" id="direccion" name="direccion" class="form-input" placeholder="Ej: Calle 12 # 34-56">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="id_eps" class="input-label">EPS</label>
                        <select id="id_eps" name="id_eps" class="custom-select">
                            <option value="" disabled selected>Seleccione EPS...</option>
                            <option value="1">Sura</option>
                            <option value="2">Sanitas</option>
                            <option value="3">Compensar</option>
                            <option value="4">Salud Total</option>
                            <option value="5">Nueva EPS</option>
                        </select>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="id_estado_civil" class="input-label">Estado Civil</label>
                        <select id="id_estado_civil" name="id_estado_civil" class="custom-select">
                            <option value="1" selected>Soltero(a)</option>
                            <option value="2">Casado(a)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sexo" class="input-label">Sexo</label>
                        <select id="sexo" name="sexo" class="custom-select">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>

                <!-- Campos ocultos/por defecto -->
                <input type="hidden" name="activo_inactivo" value="1">
                <input type="hidden" name="id_perfil" value="3">

                <!-- Botones de Acción -->
                <div class="publish-actions">
                    <a href="estudiantes.php" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish">
                        <i class="fa-solid fa-user-check"></i> Registrar Estudiante
                    </button>
                </div>

            </form>
        </div>

        <!-- OPCIÓN 2: Carga Masiva mediante Archivo Plano -->
        <div id="tab-masiva" class="publish-card tab-content" style="display: none;">
            <form class="publish-form" action="procesarMatriculaMasiva.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-section-title">
                    <i class="fa-solid fa-file-import"></i> Carga Masiva de Estudiantes
                </div>

                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 10px;">
                    Sube un archivo plano (CSV o TXT) con la lista de nuevos estudiantes. Asegúrate de seguir la estructura de columnas correspondiente.
                </p>

                <!-- Área Dropzone para Archivo Plano -->
                <div class="file-upload-dropzone">
                    <i class="fa-solid fa-cloud-arrow-up dropzone-icon"></i>
                    <div class="dropzone-text">
                        <span id="file-name-display">Arrastra y suelta tu archivo plano aquí o haz clic para buscar</span>
                        <small>Formatos permitidos: .csv, .txt, .xlsx (Máx. 10MB)</small>
                    </div>
                    <input type="file" name="archivo_estudiantes" id="archivo_estudiantes" class="file-input-hidden" accept=".csv, .txt, .xlsx" required onchange="showFileName(this)">
                </div>



                <!-- Botones de Acción -->
                <div class="publish-actions">
                    <a href="estudiantes.php" class="btn-cancel">Cancelar</a>
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

    <!-- Script de interacción de pestañas y nombre de archivo -->
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
    </script>

</body>
</html>