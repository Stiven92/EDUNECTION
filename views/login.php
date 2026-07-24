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
            <div class="logo">
                <!-- Si usas una imagen tag: -->
                <img src="../assets/img/logo_blanco.svg" alt="Logo Pulpo" class="logo-icon">
                
            </div>
            <br>
            <br>

            <h2>Iniciar Sesión</h2>
            <br>
            <br>

            <form action="dashboard.html">
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" class="form-input" placeholder="Ingresa tu Correo Electrónico" required>
                </div>

                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-input" placeholder="Ingresa tu Contraseña" required>
                </div>

                <button type="submit" class="btn-submit">Iniciar Sesión</button>
                <br>
                <br>
                <a href="reset_password.html" class="btn-outline">Reestablecer Contraseña</a>
            </form>
        </div>
    </div>

</body>

</html>