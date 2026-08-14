<?php

    require_once __DIR__ . "/../models/mdb.php";
    require_once __DIR__ . "/../models/mconsultas.php";

    $consultas = new Consultas();


    // Verificar que se haya recibido el id del usuario
    if (isset($_GET['id']) && !empty($_GET['id'])) {

        $idUsuario = $_GET['id'];


        // Obtener información general del usuario
        $usuario = $consultas->obtenerUsuario($idUsuario);

        // var_dump($usuario);
        // die();


        // Verificar que el usuario exista
        if ($usuario) {

            // Obtener información dependiendo del rol
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

    } else {

        echo "<script>
            alert('No se especificó el usuario');
            history.back();
        </script>";

        exit;

    }

?>