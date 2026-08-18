<?php

require_once("../../controllers/DetalleUsuarioController.php");


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Usuario | Edunection</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
</head>


<body>


<!-- =====================================================
     CONTENEDOR PRINCIPAL
====================================================== -->

<div class="detalle-usuario">


    <!-- =================================================
         ENCABEZADO
    ================================================== -->

    <div class="publish-card detalle-header">


        <div class="detalle-header-content">


            <!-- Avatar -->

            <div class="detalle-avatar">

                <i class="fa-solid fa-user"></i>

            </div>


            <!-- Información principal -->

            <div class="detalle-header-info">

                <h1>

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


        <!-- ID -->

        <div class="detalle-user-id">

            <span>ID de usuario</span>

            <strong>
                #<?= htmlspecialchars($idUsuario) ?>
            </strong>

        </div>


    </div>



    <!-- =================================================
         INFORMACIÓN DE LA CUENTA
    ================================================== -->

    <div class="publish-card detalle-card">


        <div class="form-section-title">

            <i class="fa-solid fa-user-lock"></i>

            Información de la Cuenta

        </div>


        <p class="detalle-section-description">

            Información general asociada a la cuenta del usuario.

        </p>


        <div class="detalle-grid">


            <!-- CORREO -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Correo electrónico
                </span>

                <span class="detalle-value">
                    <?= htmlspecialchars($correo ?: 'No registrado') ?>
                </span>

            </div>


            <!-- ROL -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Rol
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($rol ?: 'No registrado') ?>

                </span>

            </div>


            <!-- INSTITUCIÓN -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Institución
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($institucion ?: 'No registrada') ?>

                </span>

            </div>


            <!-- ESTADO -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Estado
                </span>

                <span class="detalle-value">

                    <?php if ($estado === 'Activo'): ?>

                        <span class="detalle-status activo">

                            <i class="fa-solid fa-circle"></i>

                            Activo

                        </span>

                    <?php else: ?>

                        <span class="detalle-status inactivo">

                            <i class="fa-solid fa-circle"></i>

                            <?= htmlspecialchars($estado ?: 'No registrado') ?>

                        </span>

                    <?php endif; ?>

                </span>

            </div>


            <!-- FECHA -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Fecha de creación
                </span>

                <span class="detalle-value">

                    <?php

                    if (!empty($fechaCreacion)) {

                        echo date(
                            'd/m/Y H:i',
                            strtotime($fechaCreacion)
                        );

                    } else {

                        echo 'No registrada';

                    }

                    ?>

                </span>

            </div>


        </div>

    </div>



    <!-- =================================================
         INFORMACIÓN PERSONAL
    ================================================== -->

    <div class="publish-card detalle-card">


        <div class="form-section-title">

            <i class="fa-solid fa-id-card"></i>

            Información Personal

        </div>


        <p class="detalle-section-description">

            Información de identificación y contacto del usuario.

        </p>


        <div class="detalle-grid">


            <!-- NOMBRES -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Nombres
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($nombres ?: 'No registrado') ?>

                </span>

            </div>


            <!-- APELLIDOS -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Apellidos
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($apellidos ?: 'No registrado') ?>

                </span>

            </div>


            <!-- TIPO DOCUMENTO -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Tipo de documento
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($tipoDocumento ?: 'No registrado') ?>

                </span>

            </div>


            <!-- DOCUMENTO -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Número de documento
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($documento ?: 'No registrado') ?>

                </span>

            </div>


            <!-- TELÉFONO -->

            <div class="detalle-info">

                <span class="detalle-label">
                    Teléfono
                </span>

                <span class="detalle-value">

                    <?= htmlspecialchars($telefono ?: 'No registrado') ?>

                </span>

            </div>


        </div>

    </div>



    <!-- =================================================
         INFORMACIÓN ESPECÍFICA SEGÚN EL ROL
    ================================================== -->



    <?php if ($rol === 'Directivo'): ?>


        <!-- DIRECTIVO -->

        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-user-tie"></i>

                Información del Directivo

            </div>


            <p class="detalle-section-description">

                Información adicional correspondiente al perfil directivo.

            </p>


            <div class="detalle-grid">


                <div class="detalle-info">

                    <span class="detalle-label">
                        Cargo
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['cargo'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        EPS
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['eps'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Tipo de sangre
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['tipo_sangre'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


            </div>

        </div>


    <?php elseif ($rol === 'Docente'): ?>


        <!-- DOCENTE -->

        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-chalkboard-user"></i>

                Información del Docente

            </div>


            <p class="detalle-section-description">

                Información adicional correspondiente al perfil docente.

            </p>


            <div class="detalle-grid">


                <div class="detalle-info">

                    <span class="detalle-label">
                        Especialidad
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['especialidad'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        EPS
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['eps'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Tipo de sangre
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['tipo_sangre'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


            </div>

        </div>


    <?php elseif ($rol === 'Estudiante'): ?>


        <!-- ESTUDIANTE -->

        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-graduation-cap"></i>

                Información del Estudiante

            </div>


            <p class="detalle-section-description">

                Información personal y académica correspondiente al estudiante.

            </p>


            <div class="detalle-grid">


                <div class="detalle-info">

                    <span class="detalle-label">
                        Fecha de nacimiento
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['fecha_nacimiento'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Sexo
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['sexo'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Dirección
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['direccion'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Municipio
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['municipio'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Zona
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['zona'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        EPS
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['eps'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Tipo de sangre
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['tipo_sangre'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Año lectivo
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['anio_lectivo'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Grado
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['grado'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Curso
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['curso'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Estado de matrícula
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['estado_matricula'] ?? 'No registrado'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info detalle-info-full">

                    <span class="detalle-label">
                        Observaciones
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['observaciones'] ?? 'Sin observaciones'
                        ) ?>

                    </span>

                </div>


            </div>

        </div>


    <?php elseif ($rol === 'Acudiente'): ?>


        <!-- ACUDIENTE -->

        <div class="publish-card detalle-card">


            <div class="form-section-title">

                <i class="fa-solid fa-people-roof"></i>

                Información del Acudiente

            </div>


            <p class="detalle-section-description">

                Información adicional correspondiente al acudiente.

            </p>


            <div class="detalle-grid">


                <div class="detalle-info">

                    <span class="detalle-label">
                        Dirección de residencia
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['direccion'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


                <div class="detalle-info">

                    <span class="detalle-label">
                        Ocupación
                    </span>

                    <span class="detalle-value">

                        <?= htmlspecialchars(
                            $detalle['ocupacion'] ?? 'No registrada'
                        ) ?>

                    </span>

                </div>


            </div>

        </div>


    <?php endif; ?>



    <!-- =================================================
         ACCIONES
    ================================================== -->

    <div class="detalle-actions">


        <a
            href="registrar.php"
            class="btn-cancel"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Volver al listado

        </a>


        <a
            href="editarUsuario.php?id=<?= htmlspecialchars($idUsuario) ?>"
            class="btn-publish"
        >

            <i class="fa-solid fa-pen"></i>

            Editar Usuario

        </a>


    </div>


</div>


</body>

</html>