
<?php include("../../controllers/SessionAdministradorController.php"); ?>

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
    <main class="container usuarios-layout">

        <div class="page-header-action">
            <a href="dashboardAdmin.php" class="btn-back">
                <i class="fa-solid fa-arrow-left"></i> Volver al Inicio
            </a>
            <h2 id="page-title">Gestión de Usuarios del Sistema</h2>
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

        <!-- OPCIÓN 1: Formulario Individual de Registro -->
        <div id="tab-registro" class="publish-card registro-individual-card">
            <!-- Dirección al Controlador RegistrarController.php -->
            <form class="publish-form" action="../../controllers/RegistrarController.php" method="POST">

                <!-- PASO 1: Datos de Cuenta e Institución -->
                <div class="form-section-title">
                    <i class="fa-solid fa-key"></i> 1. Datos de Cuenta e Institución
                </div>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="correo_electronico" class="input-label">Correo Electrónico (Usuario)</label>
                        <div class="input-with-icon">
                            <i class="fa-regular fa-envelope input-icon"></i>
                            <input type="email" id="correo_electronico" name="correo_electronico" class="form-input"
                                placeholder="ejemplo@dominio.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="id_institucion" class="input-label">Institución Educativa</label>
                        <select id="id_institucion" name="id_institucion" class="custom-select" required>
                            <option value="" disabled selected>Seleccione Institución...</option>
                            <?php foreach ($instituciones as $inst): ?>
                                <option value="<?= $inst['id_institucion'] ?>"><?= htmlspecialchars($inst['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="id_perfil" class="input-label">Rol del Usuario</label>
                    <select id="id_perfil" name="id_perfil" class="custom-select" required
                        style="width: 50%;"
                        onchange="actualizarCamposPorRol(this.value)">
                        <option value="" disabled selected>Seleccione Rol...</option>
                        <?php foreach ($roles as $rol): ?>
                            <option value="<?= $rol['id_rol'] ?>">
                                <?= htmlspecialchars($rol['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- CONTENEDOR DINÁMICO: Oculto por defecto hasta seleccionar un Rol -->
                <div id="secciones-dinamicas" style="display: none;">

                    <hr class="form-divider">

                    <!-- PASO 2: Información Personal del Usuario -->
                    <div class="form-section-title">
                        <i class="fa-solid fa-id-card"></i> 2. Información Personal del Usuario
                    </div>

                    <br>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="nombre" class="input-label">Nombres</label>
                            <div class="input-with-icon">
                                <i class="fa-regular fa-user input-icon"></i>
                                <input type="text" id="nombre" name="nombre" class="form-input"
                                    placeholder="Ej: Ramiro Andrés">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellido" class="input-label">Apellidos</label>
                            <div class="input-with-icon">
                                <i class="fa-regular fa-user input-icon"></i>
                                <input type="text" id="apellido" name="apellido" class="form-input"
                                    placeholder="Ej: Torres González">
                            </div>
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="id_tipo_doc" class="input-label">Tipo de Documento</label>
                            <select id="id_tipo_doc" name="id_tipo_doc" class="custom-select">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php foreach ($tiposDoc as $td): ?>
                                    <option value="<?= $td['id_tipo_documento'] ?>">
                                        <?= htmlspecialchars($td['nombre']) ?> (
                                        <?= htmlspecialchars($td['abreviatura']) ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="documento_indentidad" class="input-label">Número de Documento</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-hashtag input-icon"></i>
                                <input type="text" id="documento_indentidad" name="documento_indentidad" class="form-input"
                                    placeholder="Ej: 1098765432">
                            </div>
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <!-- Campo Fecha Nacimiento (Exclusivo Estudiantes) -->
                        <div class="form-group" id="grupo-nacimiento" style="display: none;">
                            <label for="fecha_nacimiento" class="input-label">Fecha de Nacimiento</label>
                            <div class="input-with-icon">
                                <i class="fa-regular fa-calendar input-icon"></i>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-input">
                            </div>
                        </div>

                        <!-- Campo Sexo (Exclusivo Estudiantes) -->
                        <div class="form-group" id="grupo-sexo" style="display: none;">
                            <label for="sexo" class="input-label">Sexo</label>
                            <select id="sexo" name="sexo" class="custom-select">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php foreach ($sexos as $sexo): ?>
                                    <option value="<?= $sexo['id_sexo'] ?>">
                                        <?= htmlspecialchars($sexo['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Campo Tipo de Sangre (Estudiante, Docente y Directivo) -->
                        <div class="form-group" id="grupo-sangre" style="display: none;">
                            <label for="tipo_sangre" class="input-label">Tipo de Sangre</label>
                            <select id="tipo_sangre" name="tipo_sangre" class="custom-select">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php foreach ($tiposSangre as $ts): ?>
                                    <option value="<?= $ts['id_tipo_sangre'] ?>">
                                        <?= htmlspecialchars($ts['tipo']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- SECCIÓN DINÁMICA: Especialidad (Docente), Cargo (Directivo) u Ocupación (Acudiente) -->
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

                        <!-- Campo exclusivo para Acudientes -->
                        <div class="form-group campo-rol campo-acudiente" style="display: none;">
                            <label for="ocupacion" class="input-label">Ocupación</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-user-tie input-icon"></i>
                                <input type="text" id="ocupacion" name="ocupacion" class="form-input"
                                    placeholder="Ej: Ingeniero, Comerciante...">
                            </div>
                        </div>

                    </div>

                    <hr class="form-divider">

                    <!-- PASO 3: Datos de Contacto y Salud -->
                    <div class="form-section-title">
                        <i class="fa-solid fa-address-book"></i> 3. Datos de Contacto y Salud
                    </div>

                    <br>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="telefono" class="input-label">Teléfono</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-phone input-icon"></i>
                                <input type="tel" id="telefono" name="telefono" class="form-input"
                                    placeholder="Ej: 3001234567">
                            </div>
                        </div>

                        <div class="form-group" id="grupo-direccion">
                            <label for="direccion" class="input-label">Dirección de Residencia</label>
                            <div class="input-with-icon">
                                <i class="fa-solid fa-location-dot input-icon"></i>
                                <input type="text" id="direccion" name="direccion" class="form-input"
                                    placeholder="Ej: Calle 12 # 34-56">
                            </div>
                        </div>
                    </div>

                    <!-- Municipio y Zona de Residencia (Exclusivos para Estudiantes) -->
                    <div class="form-grid-2" id="grupo-residencia-estudiante" style="display: none;">
                        <div class="form-group">
                            <label for="id_municipio" class="input-label">Municipio de Residencia</label>
                            <select id="id_municipio" name="id_municipio" class="custom-select">
                                <option value="" disabled selected>Seleccione Municipio...</option>
                                <option value="1">Villeta</option>
                                <option value="2">Bogotá D.C.</option>
                                <option value="3">Facatativá</option>
                                <option value="4">Guaduas</option>
                                <option value="5">Sasaima</option>
                                <option value="6">Albán</option>
                                <option value="7">Otro</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_zona" class="input-label">Zona de Residencia</label>
                            <select id="id_zona" name="id_zona" class="custom-select">
                                <option value="" disabled selected>Seleccione Zona...</option>
                                <?php foreach ($zonas as $zona): ?>
                                    <option value="<?= $zona['id_zona'] ?>">
                                        <?= htmlspecialchars($zona['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- Campo EPS (Estudiante, Docente y Directivo) -->
                    <div class="form-grid-2" id="grupo-eps" style="display: none;">
                        <div class="form-group">
                            <label for="id_eps" class="input-label">EPS</label>
                            <select id="id_eps" name="id_eps" class="custom-select">
                                <option value="" disabled selected>Seleccione EPS...</option>
                                <?php foreach ($listaEPS as $eps): ?>
                                    <option value="<?= $eps['id_eps'] ?>">
                                        <?= htmlspecialchars($eps['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- PASO 4: Información Académica (Exclusivo para Estudiantes) -->
                    <div id="grupo-academico-estudiante" style="display: none;">
                        <hr class="form-divider">
                        <div class="form-section-title">
                            <i class="fa-solid fa-graduation-cap"></i> 4. Información Académica y Matrícula
                        </div>

                        <br>

                        <div class="form-grid-2">
                            <div class="form-group">
                                <label for="id_anio_lectivo" class="input-label">Año Lectivo</label>
                                <select id="id_anio_lectivo" name="id_anio_lectivo" class="custom-select">
                                    <option value="" disabled selected>Seleccione Año...</option>
                                    <?php foreach ($aniosLectivos as $al): ?>
                                        <option value="<?= $al['id_anio_lectivo'] ?>">
                                            <?= htmlspecialchars($al['anio']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="id_grado" class="input-label">Grado</label>
                                <select id="id_grado" name="id_grado" class="custom-select">
                                    <option value="" disabled selected>Seleccione Grado...</option>
                                    <?php foreach ($grados as $grado): ?>
                                        <option value="<?= $grado['id_grado'] ?>">
                                            <?= htmlspecialchars($grado['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div class="form-group">
                                <label for="id_curso" class="input-label">Curso / Grupo</label>
                                <select id="id_curso" name="id_curso" class="custom-select">
                                    <option value="" disabled selected>Seleccione Curso (Opcional)...</option>
                                    <?php foreach ($cursos as $curso): ?>
                                        <option value="<?= $curso['id_curso'] ?>">
                                            <?= htmlspecialchars($curso['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="observaciones" class="input-label">Observaciones de Matrícula</label>
                            <textarea id="observaciones" name="observaciones" class="form-input" rows="3"
                                placeholder="Anotaciones o detalles adicionales sobre la matrícula..."></textarea>
                        </div>
                    </div>

                    <!-- Botones de Acción -->
                    <div class="publish-actions">
                        <a href="dashboardAdmin.php" class="btn-cancel">Cancelar</a>
                        <button type="submit" class="btn-publish" id="btn-submit-text">
                            <i class="fa-solid fa-user-check"></i> Registrar Usuario
                        </button>
                    </div>

                </div> <!-- Cierre de #secciones-dinamicas -->

            </form>
        </div>

        <!-- OPCIÓN 2: Carga Masiva -->
        <div id="tab-masiva" class="publish-card tab-content carga-masiva-card" style="display: none;">
            <form class="publish-form" action="../../controllers/cargaMasivaController.php" method="POST"
                enctype="multipart/form-data">

                <div class="form-section-title">
                    <i class="fa-solid fa-file-import"></i> Carga Masiva de Cuentas de Usuario
                </div>

                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 15px;">
                    Sube un archivo (.xlsx, .csv o .txt) que contenga la información de los usuarios.
                </p>

                <!-- Selector de Tipo/Rol de Usuario -->
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="rol_usuario" style="display: block; font-weight: 600; margin-bottom: 8px;">
                        <i class="fa-solid fa-user-gear"></i> Tipo de usuario a registrar:
                    </label>

                    <select name="rol_usuario" id="rol_usuario" class="form-control" required
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                        onchange="cambiarPlantilla()">

                        <?php foreach ($roles as $rol): ?>
                            <option value="<?= $rol['id_rol'] ?>"
                                data-plantilla="../../publics/plantillas/plantilla_<?= strtolower($rol['nombre']) ?>.xlsx">
                                <?= htmlspecialchars($rol['nombre']) ?>
                            </option>
                        <?php endforeach; ?>

                    </select>
                </div>

                <!-- Dropzone de Carga de Archivo -->
                <div class="file-upload-dropzone">
                    <i class="fa-solid fa-cloud-arrow-up dropzone-icon"></i>
                    <div class="dropzone-text">
                        <span id="file-name-display">Arrastra y suelta tu archivo aquí o haz clic para buscar</span>
                        <small>Formatos permitidos: .csv, .txt, .xlsx (Máx. 10MB)</small>
                    </div>
                    <input type="file" name="archivoPlano" id="archivoPlano" class="file-input-hidden"
                        accept=".xls, .xlsx" required onchange="showFileName(this)">
                </div>

                <div class="publish-actions"
                    style="display: flex; justify-content: space-between; align-items: center; margin-top: 25px;">
                    <!-- Botón a la izquierda -->
                    <a href="dashboardAdmin.php" class="btn-cancel">Cancelar</a>

                    <!-- Grupo de acciones a la derecha -->
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <a href="../../publics/plantillas/plantilla_carga_usuarios.xlsx" id="btn-descargar-plantilla"
                            download class="btn-action download" style="text-decoration: none;">
                            <i class="fa-solid fa-file-excel"></i> Descargar Plantilla
                        </a>

                        <button type="submit" class="btn-publish">
                            <i class="fa-solid fa-upload"></i> Procesar Usuarios
                        </button>
                    </div>
                </div>

            </form>
        </div>

        <!-- OPCIÓN 3: Listado de Usuarios Registrados -->
        <!-- OPCIÓN 3: Listado de Usuarios Registrados -->
        <div id="tab-listado" class="tab-content" style="display: none;">

            <!-- Barra de acciones (Búsqueda + Botón de Descarga) -->
            <!-- Barra de búsqueda, filtros y descargas -->
            <div class="users-toolbar">

                <div class="users-filters">

                    <!-- BUSCADOR -->
                    <div class="search-input-wrapper search-student">

                        <i class="fa-solid fa-magnifying-glass search-icon"></i>

                        <input
                            type="text"
                            class="search-input"
                            id="searchInput"
                            placeholder="Buscar usuario, correo o ID..."
                        >

                    </div>


                    <!-- FILTRO -->
                    <div class="role-filter-wrapper">

                        <select id="roleFilter" class="role-filter">

                            <option value="">Todos los roles</option>

                            <option value="Administrador">Administrador</option>

                            <option value="Directivo">Directivo</option>

                            <option value="Docente">Docente</option>

                            <option value="Estudiante">Estudiante</option>

                            <option value="Acudiente">Acudiente</option>

                        </select>

                        <i class="fa-solid fa-chevron-down"></i>

                    </div>

                </div>


                <!-- DESCARGAS -->
                <div class="users-downloads">

                    <a
                        href="../../controllers/exportarReporte.php"
                        class="user-download-btn"
                    >
                        <i class="fa-solid fa-file-excel"></i>
                        Reporte Excel (.xlsx)
                    </a>


                    <a
                        href="../../controllers/exportarPdf.php"
                        class="user-download-btn"
                    >
                        <i class="fa-solid fa-file-pdf"></i>
                        Reporte PDF (.pdf)
                    </a>

                </div>

            </div>

            <!-- Tabla de Usuarios -->
           <div class="table-card users-table-container">

                <table class="data-table users-table" id="userTable">

                    <thead>
                        <tr>
                            <th># ID</th>
                            <th>Correo / Usuario</th>
                            <th>Institución</th>
                            <th>Rol</th>
                            <th>Fecha Creación</th>
                            <th style="text-align: center;">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (!empty($usuarios)): ?>

                            <?php foreach ($usuarios as $usr): ?>

                                <tr>

                                    <td class="font-bold">
                                        #<?= $usr['id_usuario'] ?>
                                    </td>

                                    <td>

                                        <div class="student-user-info">

                                            <div class="avatar-small">
                                                <i class="fa-regular fa-user"></i>
                                            </div>

                                            <span class="student-name">
                                                <?= htmlspecialchars($usr['correo']) ?>
                                            </span>

                                        </div>

                                    </td>

                                    <td>
                                        <span class="text-muted-cell">
                                            <?= htmlspecialchars($usr['institucion']) ?>
                                        </span>
                                    </td>

                                    <td>
                                        <span class="type-tag purple">
                                            <?= htmlspecialchars($usr['rol']) ?>
                                        </span>
                                    </td>

                                    <td>
                                        <span class="date-text">
                                            <?= date('d/m/Y H:i', strtotime($usr['fecha_creacion'])) ?>
                                        </span>
                                    </td>

                                    <td style="text-align: center;">

                                        <a
                                            href="editarUsuario.php?id=<?= $usr['id_usuario'] ?>"
                                            class="tool-btn"
                                            title="Editar"
                                        >
                                            <i class="fa-solid fa-pen"></i>
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="6" style="text-align:center;">
                                    No se encontraron usuarios registrados.
                                </td>
                            </tr>

                        <?php endif; ?>

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

    <!-- Script de Pestañas y Lógica de Filtrado Dinámico por Rol -->
    <script>
        function cambiarPlantilla() {
            const selectRol = document.getElementById('rol_usuario');
            const opcionSeleccionada = selectRol.options[selectRol.selectedIndex];
            const rutaPlantilla = opcionSeleccionada.getAttribute('data-plantilla');
            const btnDescargar = document.getElementById('btn-descargar-plantilla');

            if (btnDescargar && rutaPlantilla) {
                btnDescargar.setAttribute('href', rutaPlantilla);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            cambiarPlantilla();
        })

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

        function actualizarCamposPorRol(idRol) {
            const seccionesDinamicas = document.getElementById('secciones-dinamicas');

            if (!idRol) {
                seccionesDinamicas.style.display = 'none';
                return;
            }

            seccionesDinamicas.style.display = 'block';

            // Elementos base
            const selectTipoDoc = document.getElementById('id_tipo_doc');
            const inputNumDoc = document.getElementById('documento_indentidad');
            const inputNombre = document.getElementById('nombre');
            const inputApellido = document.getElementById('apellido');

            selectTipoDoc.setAttribute('required', 'required');
            inputNumDoc.setAttribute('required', 'required');
            inputNombre.setAttribute('required', 'required');
            inputApellido.setAttribute('required', 'required');

            // Elementos dinámicos
            const contenedorEspecifico = document.getElementById('campos-especificos');
            const camposRol = document.querySelectorAll('.campo-rol');
            const btnSubmit = document.getElementById('btn-submit-text');

            const grupoSangre = document.getElementById('grupo-sangre');
            const selectSangre = document.getElementById('tipo_sangre');
            const grupoEps = document.getElementById('grupo-eps');
            const selectEps = document.getElementById('id_eps');

            const grupoNacimiento = document.getElementById('grupo-nacimiento');
            const inputNacimiento = document.getElementById('fecha_nacimiento');

            const grupoSexo = document.getElementById('grupo-sexo');
            const selectSexo = document.getElementById('sexo');

            const grupoResidenciaEstudiante = document.getElementById('grupo-residencia-estudiante');
            const selectMunicipio = document.getElementById('id_municipio');
            const selectZona = document.getElementById('id_zona');

            const grupoDireccion = document.getElementById('grupo-direccion');
            const inputDireccion = document.getElementById('direccion');

            const grupoAcademico = document.getElementById('grupo-academico-estudiante');
            const selectAnio = document.getElementById('id_anio_lectivo');
            const selectGrado = document.getElementById('id_grado');

            // Reset visibilidad de especificidades
            camposRol.forEach(campo => campo.style.display = 'none');
            contenedorEspecifico.style.display = 'none';

            // 1. FECHA NACIMIENTO, MUNICIPIO Y ZONA: Solo para Estudiantes ('4')
            if (idRol === "4") {
                grupoNacimiento.style.display = 'block';
                inputNacimiento.setAttribute('required', 'required');

                grupoResidenciaEstudiante.style.display = 'grid';
                selectMunicipio.setAttribute('required', 'required');
                selectZona.setAttribute('required', 'required');
            } else {
                grupoNacimiento.style.display = 'none';
                inputNacimiento.removeAttribute('required');
                inputNacimiento.value = '';

                grupoResidenciaEstudiante.style.display = 'none';
                selectMunicipio.removeAttribute('required');
                selectMunicipio.value = '';
                selectZona.removeAttribute('required');
                selectZona.value = '';
            }

            // 2. DIRECCIÓN DE RESIDENCIA: No se solicita para Directivos ('2') ni Docentes ('3')
            if (idRol === "2" || idRol === "3") {
                grupoDireccion.style.display = 'none';
                inputDireccion.removeAttribute('required');
                inputDireccion.value = '';
            } else {
                grupoDireccion.style.display = 'block';
            }

            // 3. SEXO: Solo para Estudiantes ('4')
            if (idRol === "4") {
                grupoSexo.style.display = 'block';
                selectSexo.setAttribute('required', 'required');
            } else {
                grupoSexo.style.display = 'none';
                selectSexo.removeAttribute('required');
                selectSexo.value = '';
            }

            // 4. ACADÉMICOS: Solo para Estudiantes ('4')
            if (idRol === "4") {
                grupoAcademico.style.display = 'block';
                selectAnio.setAttribute('required', 'required');
                selectGrado.setAttribute('required', 'required');
            } else {
                grupoAcademico.style.display = 'none';
                selectAnio.removeAttribute('required');
                selectAnio.value = '';
                selectGrado.removeAttribute('required');
                selectGrado.value = '';
            }

            // 5. TIPO DE SANGRE Y EPS: Para Directivos ('2'), Docentes ('3') y Estudiantes ('4')
            if (idRol === "2" || idRol === "3" || idRol === "4") {
                grupoSangre.style.display = 'block';
                selectSangre.setAttribute('required', 'required');

                grupoEps.style.display = 'grid';
                selectEps.setAttribute('required', 'required');
            } else {
                grupoSangre.style.display = 'none';
                selectSangre.removeAttribute('required');
                selectSangre.value = '';

                grupoEps.style.display = 'none';
                selectEps.removeAttribute('required');
                selectEps.value = '';
            }

            // 6. CAMPOS ESPECÍFICOS SEGÚN ROL Y BOTÓN
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
                contenedorEspecifico.style.display = 'grid';
                document.querySelector('.campo-acudiente').style.display = 'block';
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Acudiente';
            } else { // Administrador ('1')
                btnSubmit.innerHTML = '<i class="fa-solid fa-user-check"></i> Registrar Administrador';
            }
        }
        
        //hace funcional la barra de busqueda
        document.addEventListener('DOMContentLoaded', () => {

            const searchInput = document.getElementById('searchInput');
            const roleFilter = document.getElementById('roleFilter');
            const filas = document.querySelectorAll('#userTable tbody tr');

            function filtrarUsuarios() {

                const textoBusqueda = searchInput.value.toLowerCase().trim();
                const rolSeleccionado = roleFilter.value.toLowerCase().trim();

                filas.forEach(fila => {

                    // Evita intentar filtrar la fila de "No se encontraron usuarios"
                    if (fila.cells.length < 4) {
                        return;
                    }

                    // Todo el contenido de la fila
                    const textoFila = fila.textContent.toLowerCase();

                    // El rol está en la cuarta columna
                    const rolUsuario = fila.cells[3].textContent.toLowerCase().trim();

                    // Comprobar búsqueda
                    const coincideBusqueda = textoFila.includes(textoBusqueda);

                    // Comprobar rol
                    const coincideRol =
                        rolSeleccionado === '' ||
                        rolUsuario === rolSeleccionado;

                    // Mostrar solamente si cumple ambos filtros
                    if (coincideBusqueda && coincideRol) {
                        fila.style.display = '';
                    } else {
                        fila.style.display = 'none';
                    }

                });
            }

            // Buscar mientras escribe
            searchInput.addEventListener('input', filtrarUsuarios);

            // Filtrar al cambiar el rol
            roleFilter.addEventListener('change', filtrarUsuarios);

        });

    </script>

</body>

</html>