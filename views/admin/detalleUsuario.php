<?php
require_once "../../controllers/DetalleUsuarioController.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detalle del Usuario | EDUNECTION</title>

    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <main class="user-detail-page">

        <div class="user-detail-card">

            <!-- ENCABEZADO -->
            <div class="user-detail-header">

                <div class="user-detail-avatar">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="user-detail-title">

                    <h2>
                        <?= htmlspecialchars($usuario['nombre'] . ' ' . $usuario['apellido']) ?>
                    </h2>

                    <p>
                        <?= htmlspecialchars($usuario['correo']) ?>
                    </p>

                    <span class="type-tag purple">
                        <?= htmlspecialchars($usuario['rol']) ?>
                    </span>

                </div>

            </div>


            <!-- INFORMACIÓN DE CUENTA -->
            <div class="detail-section">

                <div class="detail-section-title">
                    <i class="fa-solid fa-user-lock"></i>
                    Información de Cuenta
                </div>

                <div class="detail-grid">

                    <div class="detail-item">
                        <span class="detail-label">ID Usuario</span>
                        <span class="detail-value">
                            #<?= $usuario['id_usuario'] ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Correo electrónico</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['correo']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Rol</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['rol']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Institución</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['institucion']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Fecha de creación</span>
                        <span class="detail-value">
                            <?= date('d/m/Y H:i', strtotime($usuario['fecha_creacion'])) ?>
                        </span>
                    </div>

                </div>

            </div>


            <!-- INFORMACIÓN PERSONAL -->
            <div class="detail-section">

                <div class="detail-section-title">
                    <i class="fa-solid fa-id-card"></i>
                    Información Personal
                </div>

                <div class="detail-grid">

                    <div class="detail-item">
                        <span class="detail-label">Nombres</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['nombre']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Apellidos</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['apellido']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Tipo de documento</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['tipo_documento']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Número de documento</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['documento']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Teléfono</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['telefono']) ?>
                        </span>
                    </div>

                    <div class="detail-item">
                        <span class="detail-label">Dirección</span>
                        <span class="detail-value">
                            <?= htmlspecialchars($usuario['direccion']) ?>
                        </span>
                    </div>

                </div>

            </div>


            <!-- INFORMACIÓN ESPECÍFICA DEL ROL -->

            <?php if ($usuario['rol'] === 'Administrador'): ?>

                <div class="detail-section">

                    <div class="detail-section-title">
                        <i class="fa-solid fa-user-shield"></i>
                        Información del Administrador
                    </div>

                    <!-- Campos propios del administrador -->

                </div>


            <?php elseif ($usuario['rol'] === 'Directivo'): ?>

                <div class="detail-section">

                    <div class="detail-section-title">
                        <i class="fa-solid fa-building-user"></i>
                        Información del Directivo
                    </div>

                    <div class="detail-grid">

                        <div class="detail-item">
                            <span class="detail-label">Cargo</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['cargo']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Tipo de sangre</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['tipo_sangre']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">EPS</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['eps']) ?>
                            </span>
                        </div>

                    </div>

                </div>


            <?php elseif ($usuario['rol'] === 'Docente'): ?>

                <div class="detail-section">

                    <div class="detail-section-title">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        Información del Docente
                    </div>

                    <div class="detail-grid">

                        <div class="detail-item">
                            <span class="detail-label">Especialidad</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['especialidad']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Tipo de sangre</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['tipo_sangre']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">EPS</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['eps']) ?>
                            </span>
                        </div>

                    </div>

                </div>


            <?php elseif ($usuario['rol'] === 'Estudiante'): ?>

                <div class="detail-section">

                    <div class="detail-section-title">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Información del Estudiante
                    </div>

                    <div class="detail-grid">

                        <div class="detail-item">
                            <span class="detail-label">Fecha de nacimiento</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['fecha_nacimiento']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Sexo</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['sexo']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Tipo de sangre</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['tipo_sangre']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">EPS</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['eps']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Municipio</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['municipio']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Zona</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['zona']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Año lectivo</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['anio_lectivo']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Grado</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['grado']) ?>
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-label">Curso / Grupo</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['curso']) ?>
                            </span>
                        </div>

                    </div>

                </div>


            <?php elseif ($usuario['rol'] === 'Acudiente'): ?>

                <div class="detail-section">

                    <div class="detail-section-title">
                        <i class="fa-solid fa-user-tie"></i>
                        Información del Acudiente
                    </div>

                    <div class="detail-grid">

                        <div class="detail-item">
                            <span class="detail-label">Ocupación</span>
                            <span class="detail-value">
                                <?= htmlspecialchars($usuario['ocupacion']) ?>
                            </span>
                        </div>

                    </div>

                </div>

            <?php endif; ?>


            <!-- ACCIONES -->
            <div class="detail-actions">

                <a href="registrar.php" class="btn-cancel">
                    <i class="fa-solid fa-arrow-left"></i>
                    Volver
                </a>

                <a
                    href="editarUsuario.php?id=<?= $usuario['id_usuario'] ?>"
                    class="btn-publish"
                >
                    <i class="fa-solid fa-pen"></i>
                    Editar Usuario
                </a>

            </div>

        </div>

    </main>

</body>

</html>