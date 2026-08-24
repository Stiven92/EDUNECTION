<?php

    require_once "../models/mdb.php";
    require_once "../models/mconsultas.php";

    $consultas = new Consultas();

    if ($_POST) {

        // ID DEL USUARIO

        $idUsuario = $_POST['id_usuario'] ?? '';

        if (empty($idUsuario)) {
            echo "<script>
                    alert('No se recibió el ID del usuario');
                    history.back();
                  </script>";
            exit;
        }


        // OBTENER USUARIO ACTUAL

        $usuario = $consultas->obtenerUsuario($idUsuario);

        if (!$usuario) {

            echo "<script>
                    alert('El usuario no existe');
                    history.back();
                  </script>";

            exit;
        }


        // DATOS GENERALES DEL USUARIO

        $datosUsuario = [

            "correo" => $_POST['correo'] ?? '',

            "estado" => $_POST['estado'] ?? ''

        ];


        // Actualizar tabla usuario

        $consultas->actualizarUsuario(
            $idUsuario,
            $datosUsuario
        );


        // DATOS PERSONALES GENERALES

        $datos = [

            "nombres" => $_POST['nombre'] ?? '',

            "apellidos" => $_POST['apellido'] ?? '',

            "id_tipo_documento" => $_POST['tipo_documento'] ?? '',

            "numero_documento" => $_POST['documento'] ?? '',

            "numero_telefonico" => $_POST['telefono'] ?? ''

        ];


        // ACTUALIZAR INFORMACIÓN SEGÚN EL ROL

        switch ($usuario['id_rol']) {


            // ADMINISTRADOR

            case 1:

                $consultas->actualizarAdministrador(
                    $idUsuario,
                    $datos
                );

                break;



            // DIRECTIVO

            case 2:

                $datos['cargo'] = $_POST['cargo'] ?? '';

                $datos['id_eps'] = $_POST['id_eps'] ?? '';

                $datos['id_tipo_sangre'] =
                    $_POST['id_tipo_sangre'] ?? '';


                $consultas->actualizarDirectivo(
                    $idUsuario,
                    $datos
                );

                break;



            // DOCENTE

            case 3:

                $datos['especialidad'] =
                    $_POST['especialidad'] ?? '';

                $datos['id_eps'] =
                    $_POST['id_eps'] ?? '';

                $datos['id_tipo_sangre'] =
                    $_POST['id_tipo_sangre'] ?? '';


                $consultas->actualizarDocente(
                    $idUsuario,
                    $datos
                );

                break;



            // ESTUDIANTE

            case 4:

                // Fecha de nacimiento
                $datos['fecha_nacimiento'] =
                    $_POST['fecha_nacimiento'] ?? '';


                // Sexo
                $datos['id_sexo'] =
                    $_POST['id_sexo'] ?? '';


                // Dirección
                $datos['direccion'] =
                    $_POST['direccion'] ?? '';


                // Municipio
                $datos['id_municipio'] =
                    $_POST['id_municipio'] ?? '';


                // Zona
                $datos['id_zona'] =
                    $_POST['id_zona'] ?? '';


                // EPS
                $datos['id_eps'] =
                    $_POST['id_eps'] ?? '';


                // Tipo de sangre
                $datos['id_tipo_sangre'] =
                    $_POST['id_tipo_sangre'] ?? '';


                // Grado
                $datos['id_grado'] =
                    $_POST['id_grado'] ?? '';


                // Curso
                $datos['id_curso'] =
                    $_POST['id_curso'] ?? '';


                // Estado de matrícula
                $datos['id_estado_matricula'] =
                    $_POST['id_estado_matricula'] ?? '';


                // Observaciones
                $datos['observaciones'] =
                    $_POST['observaciones'] ?? '';


                $consultas->actualizarMatricula(
                    $idUsuario,
                    $datos
                );

                break;



            // ACUDIENTE

            case 5:

                // Dirección
                $datos['direccion'] =
                    $_POST['direccion'] ?? '';


                // Ocupación
                $datos['ocupacion'] =
                    $_POST['ocupacion'] ?? '';


                $consultas->actualizarAcudiente(
                    $idUsuario,
                    $datos
                );

                break;


            // ROL NO VÁLIDO
            default:

            echo "<script>
                    alert('El usuario tiene un rol no válido');
                    history.back();
                  </script>";
            exit;
            
        }

        echo "<script>
                location.href='../views/admin/detalleUsuario.php?id=$idUsuario';
              </script>";

    } else {

        header(
            "Location: ../views/admin/registrar.php"
        );

        exit;
    }

?>