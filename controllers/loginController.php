<?php 
session_start();

include("../models/mdb.php");
include("../models/mconsultas.php");

    if ($_POST) {
        $id_institucion = $_POST['id_institucion'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $rol = $_POST['id_perfil'];

        $getUser = new Consultas();
        $buscar = null;

        if ($rol) {
            $buscar = $getUser->getUserUsuario($correo);
        }

        if ($buscar && $id_institucion == $buscar['id_institucion'] && $rol == $buscar['id_rol'] && password_verify($password, $buscar['password'])) {

            // Guardamos la sesión
            $_SESSION['id_usuario'] = $buscar['id_usuario'];
            $_SESSION['id_institucion'] = $buscar['id_institucion'];
            $_SESSION['id_rol'] = $buscar['id_rol'];
            $_SESSION['correo'] = $buscar['correo'];
            $_SESSION['estado'] = $buscar['estado'];

            switch ($rol) {
                case 5:
                    echo "<script>alert('Bienvenido acudiente')</script>";
                    echo "<script>location.href='../views/acudientes/dashboardAcudiente.php'</script>";
                    break;

                case 4:
                    echo "<script>alert('Bienvenido Estudiante')</script>";
                    echo "<script>location.href='../views/estudiantes/dashboardEstudiante.php'</script>";
                    break;

                case 3:
                    echo "<script>alert('Bienvenido Docente')</script>";
                    echo "<script>location.href='../views/docentes/dashboardDocente.php'</script>";
                    break;

                case 2:
                    echo "<script>alert('Bienvenido Directivo')</script>";
                    echo "<script>location.href='../views/directivo/dashboardDirectivo.php'</script>";
                    break;

                case 1:
                    echo "<script>alert('Bienvenido ADMIN')</script>";
                    echo "<script>location.href='../views/admin/dashboardAdmin.php'</script>";
                    break;

                default:
                    echo "<script>alert('Rol no válido')</script>";
                    echo "<script>location.href='../views/login.php'</script>";
                    break;
            }

        } else {
            echo "<script>alert('Datos incorrectos')</script>";
            echo "<script>location.href='../views/login.php'</script>";
        }

    } else {

        header("Location: ../views/login.php");
        exit;

    }


?>


