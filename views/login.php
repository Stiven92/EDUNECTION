<?php
require_once "../controllers/ObtenerDatosUsuariosController.php";
?>
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

            

            <form action="../controllers/LoginController.php" method="POST">
                
                <!-- Selección de Institución Educativa -->


                <?php
                // Captura el 'id' enviado por la URL. Si no viene ninguno, queda vacío o null
                $id_seleccionado = $_GET['id'] ?? null; 
                ?>

                <div class="form-group">
                    <label for="id_institucion" class="input-label">Institución Educativa</label>
                    <select id="id_institucion" name="id_institucion" class="custom-select" required>
                        <!-- Si no viene ningún id por URL, muestra este placeholder seleccionado -->
                        <option value="" disabled <?= empty($id_seleccionado) ? 'selected' : '' ?>>Seleccione Institución...</option>
                        
                        <?php foreach ($instituciones as $inst): ?>
                            <option value="<?= $inst['id_institucion'] ?>" <?= ($inst['id_institucion'] == $id_seleccionado) ? 'selected' : '' ?>>
                                <?= htmlspecialchars($inst['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Selección de Rol de Usuario -->
                <div class="form-group">
                    <label for="id_perfil" class="input-label">Rol del Usuario</label>
                    <select id="id_perfil" name="id_perfil" class="custom-select" required onchange="actualizarCamposPorRol(this.value)">
                        <option value="" disabled selected>Seleccione Rol...</option>
                        <?php foreach ($roles as $rol): ?>
                            <option value="<?= $rol['id_rol'] ?>">
                                <?= htmlspecialchars($rol['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Correo Electrónico -->
                <div class="form-group">
                    <label for="correo" class="input-label">Correo Electrónico</label>
                    <input 
                        type="email" 
                        id="correo"
                        name="correo" 
                        class="form-input" 
                        placeholder="Ingresa tu correo electrónico" 
                        required>
                </div>

                <!-- Contraseña -->
                <div class="form-group">
                    <label for="password" class="input-label">Contraseña</label>
                    <input 
                        type="password" 
                        id="password"
                        name="password" 
                        class="form-input" 
                        placeholder="Ingresa tu contraseña" 
                        required>
                </div>


                <!-- Botones de Acción -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">
                        Iniciar Sesión
                    </button>

                    <a href="reset_password.php" class="btn-outline">
                        Restablecer Contraseña
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>