<?php

    //Confirmar se aun no hay una sesión iniciada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once __DIR__ . "/../models/mdb.php";
    require_once __DIR__ . "/../models/mconsultas.php";


    if (!isset($_SESSION['id_usuario']) || empty($_SESSION['id_usuario'])) {

        header("Location: ../views/login.php");
        exit;

    }


    $consultas = new Consultas();

    $idUsuario = $_SESSION['id_usuario'];


    // Obtener información general del usuario
    $usuario = $consultas->obtenerUsuario($idUsuario);


    if ($usuario) {

        switch ($usuario['id_rol']) {

            // Administrador
            case 1:

                $detalle = $consultas->obtenerAdministrador($idUsuario);

            break;


            // Directivo
            case 2:

                $detalle = $consultas->obtenerDirectivo($idUsuario);

            break;


            // Docente
            case 3:

                $detalle = $consultas->obtenerDocente($idUsuario);

            break;


            // Estudiante
            case 4:

                $detalle = $consultas->obtenerEstudiante($idUsuario);

            break;


            // Acudiente
            case 5:

                $detalle = $consultas->obtenerAcudiente($idUsuario);

            break;


            default:

                echo "<script>
                    alert('El rol del usuario no es válido');
                    history.back();
                </script>";

                exit;

        }

    } else {

        echo "<script>
            alert('El usuario no existe');
            history.back();
        </script>";

        exit;

    }

?>