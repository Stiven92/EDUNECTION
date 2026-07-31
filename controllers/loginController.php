<?php 
session_start();

include("../models/mdb.php");
include("../models/mconsultas.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Recepción y desinfección básica de datos
    $school   = isset($_POST['school']) ? trim($_POST['school']) : null;
    $email    = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;
    $rol      = isset($_POST['rol']) ? intval($_POST['rol']) : null;

    if (empty($school) || empty($email) || empty($password) || empty($rol)) {
        echo "<script>alert('Por favor, llene todos los campos del formulario.');</script>";
        echo "<script>location.href='../views/login.php';</script>";
        exit();
    }

    $getUser = new Consultas();

    // 2. Consulta combinada: Busca el usuario asociado exactamente a ese ROL y a esa INSTITUCIÓN
    $buscarUsuario = $getUser->obtenerUsuarioPorCredenciales($email, $rol, $school);

    if ($buscarUsuario) {

        // 3. Verificación de la contraseña encriptada
        if (password_verify($password, $buscarUsuario['password'])) {
            
            // Credenciales válidas: Guardar en sesión
            $_SESSION['id']             = $buscarUsuario['id_usuario'];
            $_SESSION['rol']            = $buscarUsuario['id_rol'];
            $_SESSION['id_institucion'] = $buscarUsuario['id_institucion'];

            // 4. Redirección según el rol
            switch ($rol) {
                case 1:
                    echo "<script>location.href='../views/admin/';</script>";
                    break;
                case 2:
                    echo "<script>location.href='../views/ConDashboard.php';</script>";
                    break;
                case 3:
                    echo "<script>location.href='../views/docentes/dashboardDocente.php';</script>";
                    break;
                case 4:
                    echo "<script>location.href='../views/estudiantes/dashboardEstudiante.php';</script>";
                    break;
                case 5:
                    echo "<script>location.href='../views/acudiente/dasboardAcudiente.php';</script>";
                    break;
                default:
                    echo "<script>location.href='../views/ClientDashboard.php';</script>";
                    break;
            }
            exit();

        } else {
            echo "<script>alert('Error: Contraseña incorrecta.');</script>";
            echo "<script>location.href='../views/login.php';</script>";
            exit();
        }

    } else {
        // Si no retorna ningún registro, significa que:
        // - El usuario no existe.
        // - El rol seleccionado no coincide con el usuario.
        // - El usuario NO pertenece a la institución seleccionada.
        // - La cuenta o la institución están inactivas.
        echo "<script>alert('Error: Datos incorrectos o el usuario no está vinculado a esta institución.');</script>";
        echo "<script>location.href='../views/login.php';</script>";
        exit();
    }
}
?>