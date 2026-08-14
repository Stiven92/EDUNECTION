<?php //include("../../controllers/SessionAdministradorController.php"); ?>

<?php
require_once "../../controllers/ObtenerDatosUsuariosController.php";
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión y Registro de Usuarios - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
</head>

<body>

    <!-- Header & Navegación -->
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
            <a href="instituciones.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Volver a Instituciones
            </a>
            <h2>Registrar Nueva Institución</h2>
        </div>

        <!-- Tarjeta de Formulario Principal -->
        <div class="publish-card">
            <form class="publish-form" action="../../controllers/saveColegio.php" method="POST"
                enctype="multipart/form-data">

                <!-- Sección 1: Información General -->
                <div class="form-section-title">
                    <i class="fa-solid fa-school"></i> Datos Básicos de la Institución
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="nombre_institucion" class="input-label">Nombre de la Institución</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-graduation-cap input-icon"></i>
                            <input type="text" id="nombre_institucion" name="nombre_institucion" class="form-input"
                                placeholder="Ej: Instituto Educativo San José" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="codigo_dane_nit" class="input-label">DANE / NIT</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-hashtag input-icon"></i>
                            <input type="text" id="codigo_dane_nit" name="codigo_dane_nit" class="form-input"
                                placeholder="Ej: 123456789-0" required>
                        </div>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="tipo_sector" class="input-label">Sector</label>
                        <select id="tipo_sector" name="tipo_sector" class="custom-select" required>
                            <option value="" disabled selected>Seleccione el sector...</option>
                            <option value="Oficial / Público">Oficial / Público</option>
                            <option value="No Oficial / Privado">No Oficial / Privado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jornada" class="input-label">Jornada Actual</label>
                        <select id="jornada" name="jornada" class="custom-select" required>
                            <option value="" disabled selected>Seleccione jornada...</option>
                            <?php if (!empty($jornada) && is_array($jornada)): ?>
                                <?php foreach ($jornada as $jor): ?>
                                    <option value="<?= $jor['id_jornada'] ?>">
                                        <?= htmlspecialchars($jor['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                </div>

                <hr class="form-divider">

                <!-- Sección 2: Datos de Contacto y Ubicación -->
                <div class="form-section-title">
                    <i class="fa-solid fa-location-dot"></i> Ubicación y Contacto
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="departamento" class="input-label">Departamento</label>
                        <select id="departamento" name="departamento" class="custom-select" >
                            <option value="" disabled selected>Seleccione un departamento...</option>
                            <?php foreach ($departamentos as $dep): ?>
                                <option value="<?= $dep['id_departamento'] ?>">
                                    <?= htmlspecialchars($dep['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_municipio" class="input-label">Municipio / Ciudad</label>
                        <select id="id_municipio" name="municipio" class="custom-select" required>
                            <option value="" disabled selected>Seleccione municipio...</option>
                            <?php foreach ($municipios as $mun): ?>
                                <option value="<?= $mun['id_municipio'] ?>">
                                    <?= htmlspecialchars($mun['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="direccion" class="input-label">Dirección Principal</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-map-pin input-icon"></i>
                            <input type="text" id="direccion" name="direccion" class="form-input"
                                placeholder="Ej: Carrera 5 # 10-20" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono_institucional" class="input-label">Teléfono de Contacto</label>
                        <div class="input-with-icon">
                            <i class="fa-solid fa-phone input-icon"></i>
                            <input type="tel" id="telefono_institucional" name="telefono_institucional"
                                class="form-input" placeholder="Ej: 6018765432" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="correo_institucional" class="input-label">Correo Electrónico Oficial</label>
                    <div class="input-with-icon">
                        <i class="fa-regular fa-envelope input-icon"></i>
                        <input type="email" id="correo_institucional" name="correo_institucional" class="form-input"
                            placeholder="contacto@institucion.edu.co" required>
                    </div>
                </div>

                <hr class="form-divider">

                <!-- Sección 3: Logo Escolar -->
                <div class="form-section-title">
                    <i class="fa-solid fa-image"></i> Escudo o Logo Institucional
                </div>

                <div class="file-upload-dropzone">
                    <i class="fa-solid fa-cloud-arrow-up dropzone-icon"></i>
                    <div class="dropzone-text">
                        <span id="file-name-display">Arrastra y suelta la imagen del escudo aquí o haz clic para
                            seleccionar</span>
                        <small>Formatos permitidos: .png, .jpg, .svg (Máx. 5MB)</small>
                    </div>
                    <input type="file" name="imagen_apoyo_1" id="logo_institucion" class="file-input-hidden"
                        accept="image/png, image/jpeg, image/svg+xml" onchange="showFileName(this)">
                </div>

                <!-- Botones de Acción -->
                <div class="publish-actions">
                    <a href="instituciones.php" class="btn-cancel">Cancelar</a>
                    <button type="submit" class="btn-publish">
                        <i class="fa-solid fa-building-circle-check"></i> Registrar Institución
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

    <!-- Script para visualizar nombre del archivo de logo cargado -->
    <script>
        function showFileName(input) {
            const fileNameDisplay = document.getElementById('file-name-display');
            if (input.files && input.files[0]) {
                fileNameDisplay.innerHTML = `<strong>Escudo seleccionado:</strong> ${input.files[0].name}`;
            }
        }
    </script>

</body>

</html>