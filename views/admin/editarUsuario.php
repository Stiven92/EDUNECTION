<?php

require_once("../../controllers/DetalleUsuarioController.php");

// DATOS GENERALES DEL USUARIO
$usuario = $usuario ?? [];
$detalle = $detalle ?? [];

$idUsuario = $usuario['id_usuario'] ?? '';
$correo = $usuario['correo'] ?? '';
$rol = $usuario['rol'] ?? '';
$institucion = $usuario['institucion'] ?? '';
$estado = $usuario['estado'] ?? '';
$fechaCreacion = $usuario['fecha_creacion'] ?? '';

// DATOS PERSONALES
$nombres = $detalle['nombre'] ?? '';
$apellidos = $detalle['apellido'] ?? '';
$tipoDocumento = $detalle['tipo_documento'] ?? '';
$documento = $detalle['documento'] ?? '';
$telefono = $detalle['telefono'] ?? '';

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
    <title>Editar Usuario | Edunection</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
</head>

<body>

    <form action="../../controllers/actualizarUsuarioController.php" method="POST" class="detalle-usuario">

        <input type="hidden" name="id_usuario" value="<?= htmlspecialchars($idUsuario) ?>">

        <!-- ENCABEZADO -->
        <div class="publish-card detalle-header">
            <div class="detalle-header-content">
                <div class="detalle-avatar">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="detalle-header-info">
                    <h1>Editando a: <?= htmlspecialchars($nombreCompleto) ?></h1>
                    <p><i class="fa-solid fa-envelope"></i> <?= htmlspecialchars($correo) ?></p>
                </div>
            </div>

            <div class="detalle-user-id">
                <span>ID de usuario</span>
                <strong>#<?= htmlspecialchars($idUsuario) ?></strong>
            </div>
        </div>

        <!-- INFORMACIÓN DE LA CUENTA -->
        <div class="publish-card detalle-card">
            <div class="form-section-title">
                <i class="fa-solid fa-user-lock"></i> Información de la Cuenta
            </div>

            <br>

            <div class="detalle-grid">
                <div class="form-group">
                    <label class="input-label" for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" class="form-input" value="<?= htmlspecialchars($correo) ?>" required>
                </div>

                <div class="form-group">
                    <label class="input-label" for="rol">Rol</label>
                    <select id="rol" name="rol" class="form-input">
                        <option value="Directivo" <?= $rol === 'Directivo' ? 'selected' : '' ?>>Directivo</option>
                        <option value="Docente" <?= $rol === 'Docente' ? 'selected' : '' ?>>Docente</option>
                        <option value="Estudiante" <?= $rol === 'Estudiante' ? 'selected' : '' ?>>Estudiante</option>
                        <option value="Acudiente" <?= $rol === 'Acudiente' ? 'selected' : '' ?>>Acudiente</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="detalle-label" for="estado">Estado</label>
                    <select id="estado" name="estado" class="form-input">
                        <option value="Activo" <?= $estado === 'Activo' ? 'selected' : '' ?>>Activo</option>
                        <option value="Inactivo" <?= $estado === 'Inactivo' ? 'selected' : '' ?>>Inactivo</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- INFORMACIÓN PERSONAL -->
        <div class="publish-card detalle-card">
            <div class="form-section-title">
                <i class="fa-solid fa-id-card"></i> Información Personal
            </div>

            <div class="detalle-grid">
                <div class="form-group">
                    <label class="detalle-label" for="nombre">Nombres</label>
                    <input type="text" id="nombre" name="nombre" class="form-input" value="<?= htmlspecialchars($nombres) ?>" required>
                </div>

                <div class="form-group">
                    <label class="detalle-label" for="apellido">Apellidos</label>
                    <input type="text" id="apellido" name="apellido" class="form-input" value="<?= htmlspecialchars($apellidos) ?>" required>
                </div>

                <div class="form-group">
                    <label class="detalle-label" for="tipo_documento">Tipo de documento</label>
                    <select id="tipo_documento" name="tipo_documento" class="form-input">
                        <option value="CC" <?= $tipoDocumento === 'CC' ? 'selected' : '' ?>>CC</option>
                        <option value="TI" <?= $tipoDocumento === 'TI' ? 'selected' : '' ?>>TI</option>
                        <option value="CE" <?= $tipoDocumento === 'CE' ? 'selected' : '' ?>>CE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="detalle-label" for="documento">Número de documento</label>
                    <input type="text" id="documento" name="documento" class="form-input" value="<?= htmlspecialchars($documento) ?>">
                </div>

                <div class="form-group">
                    <label class="detalle-label" for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" class="form-input" value="<?= htmlspecialchars($telefono) ?>">
                </div>
            </div>
        </div>

        <!-- CAMPOS SEGÚN EL ROL (EJEMPLO: ESTUDIANTE) -->
        <?php if ($rol === 'Estudiante'): ?>
            <div class="publish-card detalle-card">
                <div class="form-section-title">
                    <i class="fa-solid fa-graduation-cap"></i> Información del Estudiante
                </div>

                <div class="detalle-grid">
                    <div class="form-group">
                        <label class="detalle-label" for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-input" value="<?= htmlspecialchars($detalle['fecha_nacimiento'] ?? '') ?>">
                    </div>

                    <div class="form-group">
                        <label class="detalle-label" for="grado">Grado</label>
                        <input type="text" id="grado" name="grado" class="form-input" value="<?= htmlspecialchars($detalle['grado'] ?? '') ?>">
                    </div>

                    <div class="form-group form-group-full">
                        <label class="detalle-label" for="observaciones">Observaciones</label>
                        <textarea id="observaciones" name="observaciones" class="form-input" rows="3"><?= htmlspecialchars($detalle['observaciones'] ?? '') ?></textarea>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- ACCIONES -->
        <div class="detalle-actions">
            <a href="registrar.php" class="btn-cancel">
                <i class="fa-solid fa-xmark"></i> Cancelar
            </a>

            <button type="submit" class="btn-publish">
                <i class="fa-solid fa-floppy-disk"></i> Guardar Cambios
            </button>
        </div>

    </form>

</body>
</html>