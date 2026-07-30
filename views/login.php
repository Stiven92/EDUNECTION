<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - EDUNECTION</title>
    <link rel="stylesheet" href="../assets/css/styleDashboard.css"> 

</head>

<body>
    
    <!-- START PRELOADER -->
    <div class="preloaders">
        <span class="loader"></span>
    </div>
    <!-- END PRELOADER -->

    <div class="auth-wrapper">
        <div class="auth-card">

            <div class="login-logo">
                <img src="../assets/img/logos/logo_blanco.svg" alt="Logo Edunection" class="logo">
            </div>

            <br><br>

            <h2>INICIAR SESIÓN</h2>

            <br><br>

            <form action="../controllers/LoginController.php" method="POST">

                <div class="form-row">

                    <div class="form-group">
                        <label>Institución Educativa</label>

                        <div class="select-wrapper">

                            <select class="form-input form-select" name="id_institucion" required>

                                <option value="">Seleccione una institución</option>

                                <?php foreach($instituciones as $institucion){ ?>

                                    <option value="<?= $institucion['id_institucion']; ?>">
                                        <?= $institucion['nombre']; ?>
                                    </option>

                                <?php } ?>

                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Rol</label>

                        <div class="select-wrapper">

                            <select class="form-input form-select" name="id_rol" required>

                                <option value="">Seleccione un rol</option>

                                <?php foreach($roles as $rol){ ?>

                                    <option value="<?= $rol['id_rol']; ?>">
                                        <?= $rol['nombre']; ?>
                                    </option>

                                <?php } ?>

                            </select>

                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input
                        type="email"
                        class="form-input"
                        name="correo"
                        placeholder="Ingresa tu correo electrónico"
                        required>
                </div>

                <div class="form-group">
                    <label>Contraseña</label>
                    <input
                        type="password"
                        class="form-input"
                        name="password"
                        placeholder="Ingresa tu contraseña"
                        required>
                </div>

                <button type="submit" class="btn-submit">
                    Iniciar Sesión
                </button>

                <br><br>

                <a href="reset_password.php" class="btn-outline">
                    Restablecer Contraseña
                </a>

            </form>
        </div>
    </div>

</body>

</html>