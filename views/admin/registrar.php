<?php //include("../../controllers/SessionAdministradorController.php"); ?>
<?php require_once "../../controllers/ObtenerDatosUsuariosController.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión y Registro de Usuarios - EDUNECTION</title>

    <!-- Tipografía Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 CSS & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- DataTables CSS para Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="../../assets/css/customStyle.css">
</head>

<body>

    <!-- Header / Navbar Principal -->
    <header class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top navbar-custom shadow-sm">
        <div class="container-fluid header-container d-flex align-items-center justify-content-between">
            <a class="navbar-brand d-flex align-items-center gap-3 fw-bold text-primary py-0 me-0"
                href="dashboardAdmin.php">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo EDUNECTION" height="40"
                    class="d-inline-block">
                <span class="fs-4 fw-extrabold text-primary" style="letter-spacing: -0.5px;">EDUNECTION</span>
            </a>

            <button class="navbar-toggler border-0 p-1" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarEDUNECTION">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarEDUNECTION">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav-pill-container d-flex align-items-center gap-4 px-3">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="usuarios.php">Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="docentes.php">Docentes</a></li>
                    <li class="nav-item"><a class="nav-link" href="cursosAdmin.php">Cursos</a></li>

                    <li class="nav-item nav-dropdown">
                        <button type="button" class="nav-link dropdown-btn border-0 bg-transparent">
                            <span>Gestión</span>
                            <i class="fa-solid fa-chevron-down ms-1"></i>
                        </button>
                        <div class="custom-dropdown-menu">
                            <a href="matricularEstudiante.php" class="custom-dropdown-item"><i
                                    class="fa-solid fa-user-plus"></i> Nuevo Registro</a>
                            <a href="reportes.php" class="custom-dropdown-item"><i class="fa-solid fa-chart-pie"></i>
                                Reportes Generales</a>
                        </div>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-2 mt-2 mt-lg-0">
                    <button class="btn btn-action-icon" type="button" title="Mensajes"><i
                            class="fa-regular fa-envelope"></i></button>
                    <button class="btn btn-action-icon" type="button" title="Notificaciones"><i
                            class="fa-regular fa-bell"></i></button>
                    <button class="btn btn-action-icon" type="button" title="Perfil"><i
                            class="fa-regular fa-user"></i></button>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenedor Principal -->
    <main class="container py-4 container-custom">

        <div class="d-flex align-items-center gap-3 mb-4">
            <a href="dashboardAdmin.php"
                class="btn btn-link text-secondary link-primary text-decoration-none fw-semibold p-0 d-inline-flex align-items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Volver al Inicio
            </a>
            <h2 id="page-title" class="fw-bold text-dark m-0">Gestión de Usuarios del Sistema</h2>
        </div>

        <!-- Pestañas de Selección -->
        <div class="d-flex flex-wrap gap-3 mb-4" id="userTabs" role="tablist">
            <button
                class="btn btn-primary fw-semibold px-4 py-2 rounded-3 shadow-sm d-inline-flex align-items-center tab-btn active"
                id="registro-tab" onclick="switchTab('registro')" type="button">
                <i class="fa-solid fa-user-plus me-2"></i>Registrar Usuario
            </button>
            <button
                class="btn bg-white text-secondary link-primary fw-semibold px-4 py-2 rounded-3 shadow-sm border-0 d-inline-flex align-items-center tab-btn"
                id="masiva-tab" onclick="switchTab('masiva')" type="button">
                <i class="fa-solid fa-file-csv me-2"></i>Carga Masiva
            </button>
            <button
                class="btn bg-white text-secondary link-primary fw-semibold px-4 py-2 rounded-3 shadow-sm border-0 d-inline-flex align-items-center tab-btn"
                id="listado-tab" onclick="switchTab('listado')" type="button">
                <i class="fa-solid fa-users me-2"></i>Lista de Usuarios
            </button>
        </div>

        <!-- Pestaña 1: FORMULARIO DE REGISTRO DE USUARIOS -->
        <div id="tab-registro" class="card shadow-sm border-0 rounded-4 p-4 mb-4">
            <form class="publish-form" action="../../controllers/RegistrarController.php" method="POST">
                <h5 class="fw-bold text-primary mb-3"><i class="fa-solid fa-key me-2"></i>1. Datos de Cuenta e
                    Institución</h5>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="correo_electronico" class="form-label fw-semibold text-secondary">Correo Electrónico
                            (Usuario)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted border-end-0"><i
                                    class="fa-regular fa-envelope"></i></span>
                            <input type="email" id="correo_electronico" name="correo_electronico"
                                class="form-control border-start-0 ps-0" placeholder="ejemplo@dominio.com" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="id_institucion" class="form-label fw-semibold text-secondary">Institución
                            Educativa</label>
                        <select id="id_institucion" name="id_institucion" class="form-select" required>
                            <option value="" disabled selected>Seleccione Institución...</option>
                            <?php foreach ($instituciones as $inst): ?>
                                <option value="<?= $inst['id_institucion'] ?>"><?= htmlspecialchars($inst['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="id_perfil" class="form-label fw-semibold text-secondary">Rol del Usuario</label>
                        <select id="id_perfil" name="id_perfil" class="form-select" required
                            onchange="actualizarCamposPorRol(this.value)">
                            <option value="" disabled selected>Seleccione Rol...</option>
                            <?php foreach ($roles as $rol): ?>
                                <option value="<?= $rol['id_rol'] ?>"><?= htmlspecialchars($rol['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- CONTENEDOR DINÁMICO -->
                <div id="secciones-dinamicas" style="display: none;">
                    <hr class="my-4 text-muted opacity-25">
                    <h5 class="fw-bold text-primary mb-3"><i class="fa-solid fa-id-card me-2"></i>2. Información
                        Personal del Usuario</h5>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-semibold text-secondary">Nombres</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-regular fa-user"></i></span>
                                <input type="text" id="nombre" name="nombre" class="form-control border-start-0 ps-0"
                                    placeholder="Ej: Ramiro Andrés">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="apellido" class="form-label fw-semibold text-secondary">Apellidos</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-regular fa-user"></i></span>
                                <input type="text" id="apellido" name="apellido"
                                    class="form-control border-start-0 ps-0" placeholder="Ej: Torres González">
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="id_tipo_doc" class="form-label fw-semibold text-secondary">Tipo de
                                Documento</label>
                            <select id="id_tipo_doc" name="id_tipo_doc" class="form-select">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php foreach ($tiposDoc as $td): ?>
                                    <option value="<?= $td['id_tipo_documento'] ?>"><?= htmlspecialchars($td['nombre']) ?>
                                        (<?= htmlspecialchars($td['abreviatura']) ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="documento_indentidad" class="form-label fw-semibold text-secondary">Número de
                                Documento</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-solid fa-hashtag"></i></span>
                                <input type="text" id="documento_indentidad" name="documento_indentidad"
                                    class="form-control border-start-0 ps-0" placeholder="Ej: 1098765432">
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6" id="grupo-nacimiento" style="display: none;">
                            <label for="fecha_nacimiento" class="form-label fw-semibold text-secondary">Fecha de
                                Nacimiento</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-regular fa-calendar"></i></span>
                                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
                                    class="form-control border-start-0 ps-0">
                            </div>
                        </div>

                        <div class="col-md-6" id="grupo-sexo" style="display: none;">
                            <label for="sexo" class="form-label fw-semibold text-secondary">Sexo</label>
                            <select id="sexo" name="sexo" class="form-select">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php foreach ($sexos as $sexo): ?>
                                    <option value="<?= $sexo['id_sexo'] ?>"><?= htmlspecialchars($sexo['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-md-6" id="grupo-sangre" style="display: none;">
                            <label for="tipo_sangre" class="form-label fw-semibold text-secondary">Tipo de
                                Sangre</label>
                            <select id="tipo_sangre" name="tipo_sangre" class="form-select">
                                <option value="" disabled selected>Seleccione...</option>
                                <?php foreach ($tiposSangre as $ts): ?>
                                    <option value="<?= $ts['id_tipo_sangre'] ?>"><?= htmlspecialchars($ts['tipo']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div id="campos-especificos" class="row g-3 mb-3" style="display: none;">
                        <div class="col-md-6 campo-rol campo-docente" style="display: none;">
                            <label for="especialidad" class="form-label fw-semibold text-secondary">Especialidad</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-solid fa-graduation-cap"></i></span>
                                <input type="text" id="especialidad" name="especialidad"
                                    class="form-control border-start-0 ps-0" placeholder="Ej: Matemáticas, Ciencias...">
                            </div>
                        </div>

                        <div class="col-md-6 campo-rol campo-directivo" style="display: none;">
                            <label for="cargo" class="form-label fw-semibold text-secondary">Cargo</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-solid fa-briefcase"></i></span>
                                <input type="text" id="cargo" name="cargo" class="form-control border-start-0 ps-0"
                                    placeholder="Ej: Rector, Coordinador...">
                            </div>
                        </div>

                        <div class="col-md-6 campo-rol campo-acudiente" style="display: none;">
                            <label for="ocupacion" class="form-label fw-semibold text-secondary">Ocupación</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-solid fa-user-tie"></i></span>
                                <input type="text" id="ocupacion" name="ocupacion"
                                    class="form-control border-start-0 ps-0"
                                    placeholder="Ej: Ingeniero, Comerciante...">
                            </div>
                        </div>
                    </div>

                    <hr class="my-4 text-muted opacity-25">
                    <h5 class="fw-bold text-primary mb-3"><i class="fa-solid fa-address-book me-2"></i>3. Datos de
                        Contacto y Salud</h5>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="telefono" class="form-label fw-semibold text-secondary">Teléfono</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-solid fa-phone"></i></span>
                                <input type="tel" id="telefono" name="telefono" class="form-control border-start-0 ps-0"
                                    placeholder="Ej: 3001234567">
                            </div>
                        </div>

                        <div class="col-md-6" id="grupo-direccion">
                            <label for="direccion" class="form-label fw-semibold text-secondary">Dirección de
                                Residencia</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0"><i
                                        class="fa-solid fa-location-dot"></i></span>
                                <input type="text" id="direccion" name="direccion"
                                    class="form-control border-start-0 ps-0" placeholder="Ej: Calle 12 # 34-56">
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3" id="grupo-residencia-estudiante" style="display: none;">
                        <div class="col-md-6">
                            <label for="id_municipio" class="form-label fw-semibold text-secondary">Municipio de
                                Residencia</label>
                            <select id="id_municipio" name="id_municipio" class="form-select">
                                <option value="" disabled selected>Seleccione Municipio...</option>
                                <?php if (!empty($municipios)): ?>
                                    <?php foreach ($municipios as $mun): ?>
                                        <option value="<?= $mun['id_municipio'] ?>"><?= htmlspecialchars($mun['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="id_zona" class="form-label fw-semibold text-secondary">Zona de
                                Residencia</label>
                            <select id="id_zona" name="id_zona" class="form-select">
                                <option value="" disabled selected>Seleccione Zona...</option>
                                <?php foreach ($zonas as $zona): ?>
                                    <option value="<?= $zona['id_zona'] ?>"><?= htmlspecialchars($zona['nombre']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 mb-3" id="grupo-eps" style="display: none;">
                        <div class="col-md-6">
                            <label for="id_eps" class="form-label fw-semibold text-secondary">EPS</label>
                            <select id="id_eps" name="id_eps" class="form-select">
                                <option value="" disabled selected>Seleccione EPS...</option>
                                <?php foreach ($listaEPS as $eps): ?>
                                    <option value="<?= $eps['id_eps'] ?>"><?= htmlspecialchars($eps['nombre']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div id="grupo-academico-estudiante" style="display: none;">
                        <hr class="my-4 text-muted opacity-25">
                        <h5 class="fw-bold text-primary mb-3"><i class="fa-solid fa-graduation-cap me-2"></i>4.
                            Información Académica y Matrícula</h5>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="id_anio_lectivo" class="form-label fw-semibold text-secondary">Año
                                    Lectivo</label>
                                <select id="id_anio_lectivo" name="id_anio_lectivo" class="form-select">
                                    <option value="" disabled selected>Seleccione Año...</option>
                                    <?php foreach ($aniosLectivos as $al): ?>
                                        <option value="<?= $al['id_anio_lectivo'] ?>"><?= htmlspecialchars($al['anio']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="id_grado" class="form-label fw-semibold text-secondary">Grado</label>
                                <select id="id_grado" name="id_grado" class="form-select">
                                    <option value="" disabled selected>Seleccione Grado...</option>
                                    <?php foreach ($grados as $grado): ?>
                                        <option value="<?= $grado['id_grado'] ?>"><?= htmlspecialchars($grado['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="id_curso" class="form-label fw-semibold text-secondary">Curso /
                                    Grupo</label>
                                <select id="id_curso" name="id_curso" class="form-select">
                                    <option value="" disabled selected>Seleccione Curso (Opcional)...</option>
                                    <?php foreach ($cursos as $curso): ?>
                                        <option value="<?= $curso['id_curso'] ?>"><?= htmlspecialchars($curso['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="observaciones" class="form-label fw-semibold text-secondary">Observaciones de
                                Matrícula</label>
                            <textarea id="observaciones" name="observaciones" class="form-control" rows="3"
                                placeholder="Anotaciones o detalles adicionales sobre la matrícula..."></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4 pt-3 border-top">
                        <a href="dashboardAdmin.php" class="btn btn-light px-4 py-2 fw-semibold border">Cancelar</a>
                        <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold" id="btn-submit-text">
                            <i class="fa-solid fa-user-check me-2"></i>Registrar Usuario
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!-- Pestaña 2: CARGA MASIVA DE USUARIOS (CSV / EXCEL) -->
        <div id="tab-masiva" style="display: none;">
            <div class="card shadow-sm border-0 rounded-4 p-4 mb-4">
                <h5 class="fw-bold text-primary mb-3">
                    <i class="fa-solid fa-file-csv me-2"></i>Carga Masiva de Usuarios
                </h5>
                <p class="text-muted">Suba un archivo plano (CSV o Excel) para importar múltiples usuarios
                    simultáneamente al sistema.</p>

                <form action="../../controllers/CargaMasivaController.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-3 mb-4">
                        <div class="row mt-4 mb-4">
                            <div class="col-md-6">
                                <label for="id_perfil_masivo" class="form-label fw-semibold text-secondary">
                                    <i class="fa-solid fa-user-gear me-1"></i> Tipo de usuario a registrar:
                                </label>
                                <select id="id_perfil_masivo" name="id_perfil" class="form-select" required
                                    onchange="cambiarPlantilla()">
                                    <option value="" disabled selected>Seleccione Rol del archivo...</option>
                                    <?php foreach ($roles as $rol): ?>
                                        <option value="<?= $rol['id_rol'] ?>"
                                            data-plantilla="../../publics/plantillas/plantilla_<?= strtolower($rol['nombre']) ?>.xlsx">
                                            <?= htmlspecialchars($rol['nombre']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="dropzone-box text-center p-4 rounded-4 position-relative" id="dropzone">
                                <input type="file" id="archivo_masivo" name="archivo_masivo"
                                    accept=".csv, .xlsx, .xls, .txt" required class="dropzone-input"
                                    onchange="mostrarNombreArchivo(this)">
                                <div class="dropzone-content">
                                    <div class="dropzone-icon mb-2">
                                        <i class="fa-solid fa-cloud-arrow-up text-primary fs-1"></i>
                                    </div>
                                    <p class="fw-bold text-dark mb-1" id="file-name-display">
                                        Arrastra y suelta tu archivo aquí o haz clic para buscar
                                    </p>
                                    <span class="text-muted small">Formatos permitidos: .csv, .txt, .xlsx (Máx.
                                        10MB)</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-3 border-top mt-4"> recordemos
                            <a href="dashboardAdmin.php"
                                class="text-secondary text-decoration-none fw-semibold">Cancelar</a>
                            <div class="d-flex gap-2">
                                <a id="btn-descargar-plantilla" href="javascript:void(0);"
                                    class="btn btn-light text-muted border-0 fw-semibold px-3 py-2 d-inline-flex align-items-center gap-2 disabled"
                                    aria-disabled="true" style="background-color: #e2e8f0; pointer-events: none;">
                                    <i class="fa-solid fa-file-excel"></i> Descargar Plantilla
                                </a>
                                <button type="submit"
                                    class="btn btn-success fw-semibold px-4 py-2 d-inline-flex align-items-center gap-2"
                                    style="background-color: #10b981; border: none;">
                                    <i class="fa-solid fa-upload"></i> Procesar Usuarios
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="bulk-instructions-card">
                <div class="accordion mb-4" id="accordionBulkInstructions">
                    <div class="card border shadow-sm">
                        <div class="card-header bg-white p-3 cursor-pointer" id="headingBulk">
                            <button
                                class="btn w-100 text-start p-0 d-flex align-items-center justify-content-between text-decoration-none shadow-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseBulk"
                                aria-expanded="false" aria-controls="collapseBulk">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="text-primary fs-3"><i class="fa-solid fa-circle-info"></i></div>
                                    <div>
                                        <h3 class="h5 mb-0 text-dark">Instrucciones para la carga masiva</h3>
                                        <p class="text-muted small mb-0">Ten en cuenta estas recomendaciones antes de
                                            procesar los usuarios.</p>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chevron-down text-secondary"></i>
                            </button>
                        </div>

                        <div id="collapseBulk" class="collapse" aria-labelledby="headingBulk"
                            data-bs-parent="#accordionBulkInstructions">
                            <div class="card-body p-4">
                                <div class="row g-3">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="p-3 bg-light rounded border h-100 d-flex gap-3 align-items-start">
                                            <span
                                                class="badge bg-primary rounded-circle p-2 d-flex align-items-center justify-content-center"
                                                style="width: 28px; height: 28px;">1</span>
                                            <div>
                                                <h6 class="fw-bold mb-1">Selecciona el rol</h6>
                                                <p class="small text-muted mb-0">Elige correctamente el tipo de usuario
                                                    que vas a registrar.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="p-3 bg-light rounded border h-100 d-flex gap-3 align-items-start">
                                            <span
                                                class="badge bg-primary rounded-circle p-2 d-flex align-items-center justify-content-center"
                                                style="width: 28px; height: 28px;">2</span>
                                            <div>
                                                <h6 class="fw-bold mb-1">Utiliza la plantilla correcta</h6>
                                                <p class="small text-muted mb-0">Descarga y utiliza la plantilla
                                                    correspondiente al rol seleccionado.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="p-3 bg-light rounded border h-100 d-flex gap-3 align-items-start">
                                            <span
                                                class="badge bg-primary rounded-circle p-2 d-flex align-items-center justify-content-center"
                                                style="width: 28px; height: 28px;">3</span>
                                            <div>
                                                <h6 class="fw-bold mb-1">No modifiques las columnas</h6>
                                                <p class="small text-muted mb-0">Conserva los nombres y el orden de las
                                                    columnas de la plantilla.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="p-3 bg-light rounded border h-100 d-flex gap-3 align-items-start">
                                            <span
                                                class="badge bg-primary rounded-circle p-2 d-flex align-items-center justify-content-center"
                                                style="width: 28px; height: 28px;">4</span>
                                            <div>
                                                <h6 class="fw-bold mb-1">Revisa los datos</h6>
                                                <p class="small text-muted mb-0">Verifica que los campos obligatorios
                                                    estén completos y correctamente diligenciados.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="p-3 bg-light rounded border h-100 d-flex gap-3 align-items-start">
                                            <span
                                                class="badge bg-primary rounded-circle p-2 d-flex align-items-center justify-content-center"
                                                style="width: 28px; height: 28px;">5</span>
                                            <div>
                                                <h6 class="fw-bold mb-1">Evita duplicados</h6>
                                                <p class="small text-muted mb-0">Comprueba que no existan usuarios
                                                    repetidos antes de cargar el archivo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="p-3 bg-light rounded border h-100 d-flex gap-3 align-items-start">
                                            <span
                                                class="badge bg-primary rounded-circle p-2 d-flex align-items-center justify-content-center"
                                                style="width: 28px; height: 28px;">6</span>
                                            <div>
                                                <h6 class="fw-bold mb-1">Verifica el archivo</h6>
                                                <p class="small text-muted mb-0">Asegúrate de cargar el archivo
                                                    correspondiente al rol seleccionado.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div>
                                    <div class="d-flex align-items-center gap-2 mb- llaman">
                                        <i class="fa-solid fa-list-check text-primary"></i>
                                        <h4 class="h6 mb-0 fw-bold">Valores para los campos ID</h4>
                                    </div>

                                    <p class="small text-muted">
                                        Algunos campos de la plantilla requieren un ID numérico. Utiliza únicamente los
                                        valores correspondientes a cada opción.
                                    </p>

                                    <div class="row g-3 mt-1">
                                        <div class="col-md-6">
                                            <div class="p-3 bg-light rounded border h-100">
                                                <span class="fw-bold d-block mb-2 text-dark border-bottom pb-1">ID Tipo
                                                    de Documento</span>
                                                <div class="d-flex flex-column gap-1 small">
                                                    <?php if (!empty($tiposDoc)): ?>
                                                        <?php foreach ($tiposDoc as $td): ?>
                                                            <span><strong><?= $td['id_tipo_documento'] ?></strong> —
                                                                <?= htmlspecialchars($td['nombre']) ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="p-3 bg-light rounded needn't">
                                                <span class="fw-bold d-block mb-2 text-dark border-bottom pb-1">ID
                                                    EPS</span>
                                                <div class="d-flex flex-column gap-1 small">
                                                    <?php if (!empty($listaEPS)): ?>
                                                        <?php foreach ($listaEPS as $eps): ?>
                                                            <span><strong><?= $eps['id_eps'] ?></strong> —
                                                                <?= htmlspecialchars($eps['nombre']) ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="p-3 bg-light rounded border h-100">
                                                <span class="fw-bold d-block mb-2 text-dark border-bottom pb-1">ID Tipo
                                                    de Sangre</span>
                                                <div class="d-flex flex-column gap-1 small">
                                                    <?php if (!empty($tiposSangre)): ?>
                                                        <?php foreach ($tiposSangre as $ts): ?>
                                                            <span><strong><?= $ts['id_tipo_sangre'] ?></strong> —
                                                                <?= htmlspecialchars($ts['tipo']) ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="p-3 bg-light rounded border h-100">
                                                <span class="fw-bold d-block mb-2 text-dark border-bottom pb-1">ID
                                                    Sexo</span>
                                                <div class="d-flex flex-column gap-1 small">
                                                    <span><strong>1</strong> — Masculino</span>
                                                    <span><strong>2</strong> — Femenino</span>
                                                </div>
                                                PQAry
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="p-3 bg-light rounded border h-100">
                                                <span class="fw-bold d-block mb-2 text-dark border-bottom pb-1">ID
                                                    Municipio</span>
                                                <div class="d-flex flex-column gap-1 small">
                                                    <?php if (!empty($municipios)): ?>
                                                        <?php foreach ($municipios as $mun): ?>
                                                            <span><strong>
                                                                    <?= $mun['id_municipio'] ?>
                                                                </strong> —
                                                                <?= htmlspecialchars($mun['nombre']) ?>
                                                            </span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pestaña 3: LISTADO DE USUARIOS -->
        <div id="tab-listado" style="display: none;">
            <div class="row g-3 align-items-center mb-4">

                <div class="col-md-4">
                    <div class="input-group bg-white rounded-3 border shadow-sm">
                        <span class="input-group-text bg-transparent border-0 text-muted ps-3">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" id="dtSearchInput" class="form-control border-0 shadow-none ps-1"
                            placeholder="Buscar usuario, correo o ID...">
                    </div>
                </div>

                <div class="col-md-3">
                    <select id="dtRoleSelect" class="form-select bg-white border shadow-sm rounded-3">
                        <option value="">Seleccione Rol</option>
                        <option value="">Todos</option>
                        <?php foreach ($roles as $rol): ?>
                            <option value="<?= htmlspecialchars($rol['nombre']) ?>">
                                <?= htmlspecialchars($rol['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-5 d-flex justify-content-md-end gap-2">
                    <a href="../../controllers/exportarReporte.php"
                        class="btn btn-light bg-white border shadow-sm fw-semibold text-primary rounded-3 px-3">
                        <i class="fa-solid fa-file-excel me-2 text-success"></i>Reporte Excel (.xlsx)
                    </a>
                    <a href="../../controllers/exportarPdf.php" target="_blank"
                        class="btn btn-light bg-white border shadow-sm fw-semibold text-primary rounded-3 px-3">
                        <i class="fa-solid fa-file-pdf me-2 text-primary"></i>Reporte PDF (.pdf)
                    </a>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-0">
                    <table class="table align-middle mb-0" id="userTable" style="width:100%">
                        <thead class="bg-light text-uppercase small text-muted">
                            <tr>
                                <th class="ps-4 py-3"># ID</th>
                                <th class="py-3">Correo / Usuario</th>
                                <th class="py-3">Institución</th>
                                <th class="py-3">Rol</th>
                                <th class="py-3">Fecha Creación</th>
                                <th class="text-center pe-4 py-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            <?php if (!empty($usuarios)): ?>
                                <?php foreach ($usuarios as $usr): ?>
                                    <tr>
                                        <td class="ps-4 fw-bold text-dark">#
                                            <?= $usr['id_usuario'] ?>
                                        </td>
                                        <td>
                                            <a href="detalleUsuario.php?id=<?= $usr['id_usuario'] ?>"
                                                class="text-decoration-none d-flex align-items-center gap-3">
                                                <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center"
                                                    style="width: 36px; height: 36px; flex-shrink: 0;">
                                                    <i class="fa-regular fa-user"></i>
                                                </div>
                                                <span class="fw-bold text-dark">
                                                    <?= htmlspecialchars($usr['correo']) ?>
                                                </span>
                                            </a>
                                        </td>
                                        <td><span class="text-secondary small">
                                                <?= htmlspecialchars($usr['institucion']) ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill fw-normal px-3 py-2"
                                                style="background-color: #f3e8ff; color: #7e22ce;">
                                                <?= htmlspecialchars($usr['rol']) ?>
                                            </span>
                                        </td>
                                        <td><span class="text-secondary small">
                                                <?= date('d/m/Y H:i', strtotime($usr['fecha_creacion'])) ?>
                                            </span>
                                        </td>
                                        <td class="text-center pe-4">
                                            <a href="editarUsuario.php?id=<?= $usr['id_usuario'] ?>"
                                                class="btn btn-sm btn-light border-0 rounded-circle text-secondary p-2"
                                                style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;"
                                                title="Editar">
                                                <i class="fa-solid fa-pen small"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- Scripts de Librerías -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script type="module" src="../../js/main.js"></script>
</body>

</html>