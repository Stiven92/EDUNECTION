<?php

require_once("../../controllers/DetalleUsuarioController.php");
require_once("../../controllers/ObtenerDatosUsuariosController.php");


// =====================================================
// DATOS GENERALES DEL USUARIO
// =====================================================

$usuario = $usuario ?? [];
$detalle = $detalle ?? [];

$idUsuario = $usuario['id_usuario'] ?? '';
$correo = $usuario['correo'] ?? '';
$rol = $usuario['rol'] ?? '';
$institucion = $usuario['institucion'] ?? '';
$estado = $usuario['estado'] ?? '';
$fechaCreacion = $usuario['fecha_creacion'] ?? '';


// =====================================================
// DATOS PERSONALES
// =====================================================

$nombres = $detalle['nombre'] ?? '';
$apellidos = $detalle['apellido'] ?? '';

$tipoDocumento = $detalle['tipo_documento'] ?? '';
$documento = $detalle['documento'] ?? '';

$telefono = $detalle['telefono'] ?? '';


// Nombre completo

$nombreCompleto = trim($nombres . ' ' . $apellidos);

if (empty($nombreCompleto)) {
    $nombreCompleto = 'Usuario';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Editar Usuario | Edunection</title>


    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet"
    >


    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    >


    <link
        rel="stylesheet"
        href="../../assets/css/styleDashboard.css"
    >

</head>


<body>


<form
    action="../../controllers/actualizarUsuarioController.php"
    method="POST"
    class="detalle-usuario"
>


    <!-- =====================================================
         ID
    ====================================================== -->

    <input
        type="hidden"
        name="id_usuario"
        value="<?= htmlspecialchars($idUsuario) ?>"
    >



    <!-- =====================================================
         ENCABEZADO
    ====================================================== -->

    <div class="publish-card detalle-header">


        <div class="detalle-header-content">


            <div class="detalle-avatar">

                <i class="fa-solid fa-user"></i>

            </div>


            <div class="detalle-header-info">

                <h1>

                    Editando a:
                    <?= htmlspecialchars($nombreCompleto) ?>

                </h1>


                <p>

                    <i class="fa-solid fa-envelope"></i>

                    <?= htmlspecialchars($correo) ?>

                </p>


                <div class="detalle-header-tags">

                    <span class="type-tag purple">

                        <i class="fa-solid fa-user-tag"></i>

                        <?= htmlspecialchars($rol ?: 'Sin rol') ?>

                    </span>


                    <?php if ($estado === 'Activo'): ?>

                        <span class="detalle-status activo">

                            <i class="fa-solid fa-circle"></i>

                            Activo

                        </span>

                    <?php else: ?>

                        <span class="detalle-status inactivo">

                            <i class="fa-solid fa-circle"></i>

                            <?= htmlspecialchars($estado ?: 'Sin estado') ?>

                        </span>

                    <?php endif; ?>

                </div>

            </div>

        </div>


        <div class="detalle-user-id">

            <span>ID de usuario</span>

            <strong>

                #<?= htmlspecialchars($idUsuario) ?>

            </strong>

        </div>


    </div>



    <!-- =====================================================
         INFORMACIÓN DE LA CUENTA
    ====================================================== -->

    <div class="publish-card detalle-card">


        <div class="form-section-title">

            <i class="fa-solid fa-user-lock"></i>

            Información de la Cuenta

        </div>


        <p class="detalle-section-description">

            Modifica la información general asociada a la cuenta.

        </p>


        <div class="detalle-grid">


            <!-- CORREO -->

            <div class="form-group">

                <label
                    class="input-label"
                    for="correo"
                >
                    Correo electrónico
                </label>


                <input
                    type="email"
                    id="correo"
                    name="correo"
                    class="form-input"
                    value="<?= htmlspecialchars($correo) ?>"
                    required
                >

            </div>



            <!-- ROL -->

            <div class="form-group">

                <label class="input-label">

                    Rol

                </label>


                <!--
                    El rol NO se puede modificar.
                    Se muestra solamente.
                -->

                <input
                    type="text"
                    class="form-input"
                    value="<?= htmlspecialchars($rol ?: 'Sin rol') ?>"
                    disabled
                >

            </div>



            <!-- INSTITUCIÓN -->

            <div class="form-group">

                <label class="input-label">

                    Institución

                </label>


                <!--
                    La institución tampoco se modifica
                    desde este formulario.
                -->

                <input
                    type="text"
                    class="form-input"
                    value="<?= htmlspecialchars($institucion ?: 'No registrada') ?>"
                    disabled
                >

            </div>



            <!-- ESTADO DE CUENTA -->

            <div class="form-group">

                <label
                    class="input-label"
                    for="estado"
                >

                    Estado

                </label>


                <select
                    id="estado"
                    name="estado"
                    class="form-input"
                >

                    <option
                        value="Activo"
                        <?= $estado === 'Activo' ? 'selected' : '' ?>
                    >
                        Activo
                    </option>


                    <option
                        value="Inactivo"
                        <?= $estado === 'Inactivo' ? 'selected' : '' ?>
                    >
                        Inactivo
                    </option>

                </select>

            </div>


        </div>

    </div>



    <!-- =====================================================
         INFORMACIÓN PERSONAL
    ====================================================== -->

    <div class="publish-card detalle-card">


        <div class="form-section-title">

            <i class="fa-solid fa-id-card"></i>

            Información Personal

        </div>


        <p class="detalle-section-description">

            Modifica la información de identificación y contacto.

        </p>


        <div class="detalle-grid">


            <!-- NOMBRES -->

            <div class="form-group">

                <label
                    class="detalle-label"
                    for="nombre"
                >
                    Nombres
                </label>


                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    class="form-input"
                    value="<?= htmlspecialchars($nombres) ?>"
                    required
                >

            </div>



            <!-- APELLIDOS -->

            <div class="form-group">

                <label
                    class="detalle-label"
                    for="apellido"
                >
                    Apellidos
                </label>


                <input
                    type="text"
                    id="apellido"
                    name="apellido"
                    class="form-input"
                    value="<?= htmlspecialchars($apellidos) ?>"
                    required
                >

            </div>



            <!-- TIPO DOCUMENTO -->

            <div class="form-group">

                <label
                    class="detalle-label"
                    for="tipo_documento"
                >

                    Tipo de documento

                </label>


                <select
                    id="tipo_documento"
                    name="tipo_documento"
                    class="form-input"
                >

                    <?php foreach (($tiposDoc ?? []) as $tipo): ?>

                        <option
                            value="<?= htmlspecialchars($tipo['id_tipo_documento']) ?>"
                            <?= $tipo['id_tipo_documento'] == ($detalle['id_tipo_documento'] ?? '') ? 'selected' : '' ?>
                        >

                            <?= htmlspecialchars($tipo['nombre']) ?>

                        </option>

                    <?php endforeach; ?>

                </select>

            </div>



            <!-- DOCUMENTO -->

            <div class="form-group">

                <label
                    class="detalle-label"
                    for="documento"
                >

                    Número de documento

                </label>


                <input
                    type="text"
                    id="documento"
                    name="documento"
                    class="form-input"
                    value="<?= htmlspecialchars($documento) ?>"
                >

            </div>



            <!-- TELÉFONO -->

            <div class="form-group">

                <label
                    class="detalle-label"
                    for="telefono"
                >

                    Teléfono

                </label>


                <input
                    type="tel"
                    id="telefono"
                    name="telefono"
                    class="form-input"
                    value="<?= htmlspecialchars($telefono) ?>"
                >

            </div>


        </div>

    </div>



    <!-- =====================================================
         DIRECTIVO
    ====================================================== -->

    <?php if ($rol === 'Directivo'): ?>


        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-user-tie"></i>

                Información del Directivo

            </div>


            <p class="detalle-section-description">

                Información adicional correspondiente al perfil directivo.

            </p>


            <div class="detalle-grid">


                <!-- CARGO -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="cargo"
                    >
                        Cargo
                    </label>


                    <input
                        type="text"
                        id="cargo"
                        name="cargo"
                        class="form-input"
                        value="<?= htmlspecialchars($detalle['cargo'] ?? '') ?>"
                    >

                </div>



                <!-- EPS -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="eps"
                    >
                        EPS
                    </label>


                    <select
                        id="eps"
                        name="id_eps"
                        class="form-input"
                    >

                        <?php foreach (($listaEPS ?? []) as $eps): ?>

                            <option
                                value="<?= htmlspecialchars($eps['id_eps']) ?>"
                                <?= $eps['id_eps'] == ($detalle['id_eps'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($eps['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- TIPO DE SANGRE -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="tipo_sangre"
                    >

                        Tipo de sangre

                    </label>


                    <select
                        id="tipo_sangre"
                        name="id_tipo_sangre"
                        class="form-input"
                    >

                        <?php foreach (($tiposSangre ?? []) as $sangre): ?>

                            <option
                                value="<?= htmlspecialchars($sangre['id_tipo_sangre']) ?>"
                                <?= $sangre['id_tipo_sangre'] == ($detalle['id_tipo_sangre'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($sangre['tipo']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


            </div>

        </div>


    <?php endif; ?>



    <!-- =====================================================
         DOCENTE
    ====================================================== -->

    <?php if ($rol === 'Docente'): ?>


        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-chalkboard-user"></i>

                Información del Docente

            </div>


            <p class="detalle-section-description">

                Información adicional correspondiente al perfil docente.

            </p>


            <div class="detalle-grid">


                <!-- ESPECIALIDAD -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="especialidad"
                    >
                        Especialidad
                    </label>


                    <input
                        type="text"
                        id="especialidad"
                        name="especialidad"
                        class="form-input"
                        value="<?= htmlspecialchars($detalle['especialidad'] ?? '') ?>"
                    >

                </div>



                <!-- EPS -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="eps"
                    >
                        EPS
                    </label>


                    <select
                        id="eps"
                        name="id_eps"
                        class="form-input"
                    >

                        <?php foreach (($listaEPS ?? []) as $eps): ?>

                            <option
                                value="<?= htmlspecialchars($eps['id_eps']) ?>"
                                <?= $eps['id_eps'] == ($detalle['id_eps'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($eps['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- TIPO DE SANGRE -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="tipo_sangre"
                    >

                        Tipo de sangre

                    </label>


                    <select
                        id="tipo_sangre"
                        name="id_tipo_sangre"
                        class="form-input"
                    >

                        <?php foreach (($tiposSangre ?? []) as $sangre): ?>

                            <option
                                value="<?= htmlspecialchars($sangre['id_tipo_sangre']) ?>"
                                <?= $sangre['id_tipo_sangre'] == ($detalle['id_tipo_sangre'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($sangre['tipo']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>


            </div>

        </div>


    <?php endif; ?>



    <!-- =====================================================
         ESTUDIANTE
    ====================================================== -->

    <?php if ($rol === 'Estudiante'): ?>


        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-graduation-cap"></i>

                Información del Estudiante

            </div>


            <p class="detalle-section-description">

                Información personal y académica correspondiente
                al estudiante.

            </p>


            <div class="detalle-grid">


                <!-- FECHA DE NACIMIENTO -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="fecha_nacimiento"
                    >

                        Fecha de nacimiento

                    </label>


                    <input
                        type="date"
                        id="fecha_nacimiento"
                        name="fecha_nacimiento"
                        class="form-input"
                        value="<?= htmlspecialchars($detalle['fecha_nacimiento'] ?? '') ?>"
                    >

                </div>



                <!-- SEXO -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="sexo"
                    >

                        Sexo

                    </label>


                    <select
                        id="sexo"
                        name="id_sexo"
                        class="form-input"
                    >

                        <?php foreach (($sexos ?? []) as $sexo): ?>

                            <option
                                value="<?= htmlspecialchars($sexo['id_sexo']) ?>"
                                <?= $sexo['id_sexo'] == ($detalle['id_sexo'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($sexo['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- DIRECCIÓN -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="direccion"
                    >

                        Dirección

                    </label>


                    <input
                        type="text"
                        id="direccion"
                        name="direccion"
                        class="form-input"
                        value="<?= htmlspecialchars($detalle['direccion'] ?? '') ?>"
                    >

                </div>



                <!-- MUNICIPIO -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="municipio"
                    >

                        Municipio

                    </label>


                    <select
                        id="municipio"
                        name="id_municipio"
                        class="form-input"
                    >

                        <?php foreach (($municipios ?? []) as $municipio): ?>

                            <option
                                value="<?= htmlspecialchars($municipio['id_municipio']) ?>"
                                <?= $municipio['id_municipio'] == ($detalle['id_municipio'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($municipio['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- ZONA -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="zona"
                    >

                        Zona

                    </label>


                    <select
                        id="zona"
                        name="id_zona"
                        class="form-input"
                    >

                        <?php foreach (($zonas ?? []) as $zona): ?>

                            <option
                                value="<?= htmlspecialchars($zona['id_zona']) ?>"
                                <?= $zona['id_zona'] == ($detalle['id_zona'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($zona['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- EPS -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="eps"
                    >

                        EPS

                    </label>


                    <select
                        id="eps"
                        name="id_eps"
                        class="form-input"
                    >

                        <?php foreach (($listaEPS ?? []) as $eps): ?>

                            <option
                                value="<?= htmlspecialchars($eps['id_eps']) ?>"
                                <?= $eps['id_eps'] == ($detalle['id_eps'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($eps['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- TIPO DE SANGRE -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="tipo_sangre"
                    >

                        Tipo de sangre

                    </label>


                    <select
                        id="tipo_sangre"
                        name="id_tipo_sangre"
                        class="form-input"
                    >

                        <?php foreach (($tiposSangre ?? []) as $sangre): ?>

                            <option
                                value="<?= htmlspecialchars($sangre['id_tipo_sangre']) ?>"
                                <?= $sangre['id_tipo_sangre'] == ($detalle['id_tipo_sangre'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($sangre['tipo']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- GRADO -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="grado"
                    >

                        Grado

                    </label>


                    <select
                        id="grado"
                        name="id_grado"
                        class="form-input"
                    >

                        <?php foreach (($grados ?? []) as $grado): ?>

                            <option
                                value="<?= htmlspecialchars($grado['id_grado']) ?>"
                                <?= $grado['id_grado'] == ($detalle['id_grado'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($grado['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- CURSO -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="curso"
                    >

                        Curso

                    </label>


                    <select
                        id="curso"
                        name="id_curso"
                        class="form-input select-curso"
                    >

                        <?php foreach (($cursos ?? []) as $curso): ?>

                            <option
                                value="<?= htmlspecialchars($curso['id_curso']) ?>"
                                <?= $curso['id_curso'] == ($detalle['id_curso'] ?? '') ? 'selected' : '' ?>
                            >

                                <?= htmlspecialchars($curso['nombre']) ?>

                            </option>

                        <?php endforeach; ?>

                    </select>

                </div>



                <!-- ESTADO DE MATRÍCULA -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="estado_matricula"
                    >

                        Estado de matrícula

                    </label>


                        <select name="id_estado_matricula" class="form-input">

                            <?php foreach ($estadosMatricula as $estadoMatricula): ?>

                                <option
                                    value="<?= $estadoMatricula['id_estado_matricula'] ?>"
                                    <?= $estadoMatricula['id_estado_matricula'] == ($detalle['id_estado_matricula'] ?? '') ? 'selected' : '' ?>
                                >
                                    <?= htmlspecialchars($estadoMatricula['nombre']) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>

                </div>



                <!-- OBSERVACIONES -->

                <div class="form-group detalle-info-full">

                    <label
                        class="detalle-label"
                        for="observaciones"
                    >

                        Observaciones

                    </label>


                    <textarea
                        id="observaciones"
                        name="observaciones"
                        class="form-input"
                        rows="4"
                    ><?= htmlspecialchars($detalle['observaciones'] ?? '') ?></textarea>

                </div>


            </div>

        </div>


    <?php endif; ?>



    <!-- =====================================================
         ACUDIENTE
    ====================================================== -->

    <?php if ($rol === 'Acudiente'): ?>


        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-people-roof"></i>

                Información del Acudiente

            </div>


            <p class="detalle-section-description">

                Información adicional correspondiente al acudiente.

            </p>


            <div class="detalle-grid">


                <!-- DIRECCIÓN -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="direccion"
                    >

                        Dirección de residencia

                    </label>


                    <input
                        type="text"
                        id="direccion"
                        name="direccion"
                        class="form-input"
                        value="<?= htmlspecialchars($detalle['direccion'] ?? '') ?>"
                    >

                </div>



                <!-- OCUPACIÓN -->

                <div class="form-group">

                    <label
                        class="detalle-label"
                        for="ocupacion"
                    >

                        Ocupación

                    </label>


                    <input
                        type="text"
                        id="ocupacion"
                        name="ocupacion"
                        class="form-input"
                        value="<?= htmlspecialchars($detalle['ocupacion'] ?? '') ?>"
                    >

                </div>


            </div>

        </div>


    <?php endif; ?>



    <!-- =====================================================
         ACCIONES
    ====================================================== -->

    <div class="detalle-actions">


        <a
            href="registrar.php"
            class="btn-cancel"
        >

            <i class="fa-solid fa-xmark"></i>

            Cancelar

        </a>


        <button
            type="submit"
            class="btn-publish"
        >

            <i class="fa-solid fa-floppy-disk"></i>

            Guardar Cambios

        </button>


    </div>


</form>


</body>

</html>