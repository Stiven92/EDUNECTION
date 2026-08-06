<?php

    include("../models/mdb.php");
    include("../models/mconsultas.php");

    require __DIR__ . '/../vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Shared\Date;

    if($_FILES){

        date_default_timezone_set('America/Bogota');
        $fecSis = date("Y-m-d H:i:s");

        $arcExc = isset($_FILES['archivoPlano']['name']) ? $_FILES['archivoPlano']['name'] : NULL;

        if ($arcExc && $_FILES['archivoPlano']['error'] == UPLOAD_ERR_OK) {

            $ruta_temporal = $_FILES['archivoPlano']['tmp_name'];

            // Ahora puedes cargar el archivo directamente desde la ubicación temporal con PhpSpreadsheet
            $arcExc2 = IOFactory::load($ruta_temporal);

            $sheet =$arcExc2->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();

        }else{

            echo "<script>
                    alert('Error al subir el archivo');
                    history.back();
                  </script>";

            exit();

        }

        $consultas = new Consultas();

        $rol = $_POST["rol_usuario"];

        switch($rol){

            case 1:

                for($row = 4; $row <= $highestRow; $row++){

                    $id_institucion = $sheet->getCell("a".$row)->getValue();
                    $id_rol = $sheet->getCell("b".$row)->getValue();
                    $correo = $sheet->getCell("c".$row)->getValue();
                    $nombre = $sheet->getCell("d".$row)->getValue();
                    $apellido = $sheet->getCell("e".$row)->getValue();
                    $id_tipo_doc = $sheet->getCell("f".$row)->getValue();
                    $documento_indentidad = $sheet->getCell("g".$row)->getValue();
                    $telefono = $sheet->getCell("h".$row)->getValue();
                    $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                    $idUsuario = $consultas->registrarUsuarioMasivo(
                        $correo,
                        $password,
                        $id_rol,
                        $id_institucion
                    );

                    if($idUsuario){

                        $datos = [

                            "id_institucion" => $id_institucion,
                            "nombre" => $nombre,
                            "apellido" => $apellido,
                            "id_tipo_doc" => $id_tipo_doc,
                            "documento_indentidad" => $documento_indentidad,
                            "telefono" => $telefono

                        ];

                        $consultas->registrarAdministradorMasivo($idUsuario,$datos);

                    }

                }

            break;



            case 2:

                for($row = 4; $row <= $highestRow; $row++){

                    $id_institucion = $sheet->getCell("a".$row)->getValue();
                    $id_rol = $sheet->getCell("b".$row)->getValue();
                    $correo = $sheet->getCell("c".$row)->getValue();
                    $nombre = $sheet->getCell("d".$row)->getValue();
                    $apellido = $sheet->getCell("e".$row)->getValue();
                    $id_tipo_doc = $sheet->getCell("f".$row)->getValue();
                    $documento_indentidad = $sheet->getCell("g".$row)->getValue();
                    $telefono = $sheet->getCell("h".$row)->getValue();
                    $cargo = $sheet->getCell("i".$row)->getValue();
                    $id_eps = $sheet->getCell("j".$row)->getValue();
                    $tipo_sangre = $sheet->getCell("k".$row)->getValue();
                    $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                    $idUsuario = $consultas->registrarUsuarioMasivo(
                        $correo,
                        $password,
                        $id_rol,
                        $id_institucion
                    );

                    if($idUsuario){

                        $datos = [

                            "id_institucion" => $id_institucion,
                            "nombre" => $nombre,
                            "apellido" => $apellido,
                            "id_tipo_doc" => $id_tipo_doc,
                            "documento_indentidad" => $documento_indentidad,
                            "telefono" => $telefono,
                            "cargo" => $cargo,
                            "id_eps" => $id_eps,
                            "tipo_sangre" => $tipo_sangre


                        ];

                        $consultas->registrarDirectivoMasivo($idUsuario,$datos);

                    }

                }

            break;



            case 3:

                for($row = 4; $row <= $highestRow; $row++){

                    $id_institucion = $sheet->getCell("a".$row)->getValue();
                    $id_rol = $sheet->getCell("b".$row)->getValue();
                    $correo = $sheet->getCell("c".$row)->getValue();
                    $nombre = $sheet->getCell("d".$row)->getValue();
                    $apellido = $sheet->getCell("e".$row)->getValue();
                    $id_tipo_doc = $sheet->getCell("f".$row)->getValue();
                    $documento_indentidad = $sheet->getCell("g".$row)->getValue();
                    $telefono = $sheet->getCell("h".$row)->getValue();
                    $especialidad = $sheet->getCell("i".$row)->getValue();
                    $id_eps = $sheet->getCell("j".$row)->getValue();
                    $tipo_sangre = $sheet->getCell("k".$row)->getValue();
                    $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                    $idUsuario = $consultas->registrarUsuarioMasivo(
                        $correo,
                        $password,
                        $id_rol,
                        $id_institucion
                    );

                    if($idUsuario){

                        $datos = [

                            "id_institucion" => $id_institucion,
                            "nombre" => $nombre,
                            "apellido" => $apellido,
                            "id_tipo_doc" => $id_tipo_doc,
                            "documento_indentidad" => $documento_indentidad,
                            "telefono" => $telefono,
                            "especialidad" => $especialidad,
                            "id_eps" => $id_eps,
                            "tipo_sangre" => $tipo_sangre

                        ];

                        $consultas->registrarDocenteMasivo($idUsuario,$datos);

                    }

                }

            break;



            case 4:

                for($row = 4; $row <= $highestRow; $row++){

                    $id_institucion = $sheet->getCell("a".$row)->getValue();
                    $id_rol = $sheet->getCell("b".$row)->getValue();
                    $correo = $sheet->getCell("c".$row)->getValue();     
                    $nombre = $sheet->getCell("d".$row)->getValue();
                    $apellido = $sheet->getCell("e".$row)->getValue();
                    $id_tipo_doc = $sheet->getCell("f".$row)->getValue();
                    $documento_indentidad = $sheet->getCell("g".$row)->getValue();
                    $fecha_nacimiento = $sheet->getCell("h".$row)->getValue();
                    $sexo = $sheet->getCell("i".$row)->getValue();
                    $direccion = $sheet->getCell("j".$row)->getValue();
                    $id_municipio = $sheet->getCell("k".$row)->getValue();
                    $id_zona = $sheet->getCell("l".$row)->getValue();
                    $telefono = $sheet->getCell("m".$row)->getValue();
                    $id_eps = $sheet->getCell("n".$row)->getValue();
                    $tipo_sangre = $sheet->getCell("o".$row)->getValue();
                    $id_grado = $sheet->getCell("p".$row)->getValue();
                    $id_curso = $sheet->getCell("q".$row)->getValue();
                    $observaciones = $sheet->getCell("r".$row)->getValue();

                    $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                    $idUsuario = $consultas->registrarUsuarioMasivo(
                        $correo,
                        $password,
                        $id_rol,
                        $id_institucion
                    );

                    if($idUsuario){

                        $datos = [

                            "id_institucion" => $id_institucion,
                            "nombre" => $nombre,
                            "apellido" => $apellido,
                            "id_tipo_doc" => $id_tipo_doc,
                            "documento_indentidad" => $documento_indentidad,
                            "fecha_nacimiento" => $fecha_nacimiento,
                            "sexo" => $sexo,
                            "direccion" => $direccion,
                            "id_municipio" => $id_municipio,
                            "id_zona" => $id_zona,
                            "telefono" => $telefono,
                            "id_eps" => $id_eps,
                            "tipo_sangre" => $tipo_sangre,
                            "id_grado" => $id_grado,
                            "id_curso" => $id_curso,
                            "observaciones" => $observaciones

                        ];

                        $consultas->registrarMatriculaMasiva($idUsuario, $datos);

                    }

                }

            break;



            case 5:

                for($row = 4; $row <= $highestRow; $row++){

                    $id_institucion = $sheet->getCell("a".$row)->getValue();
                    $id_rol = $sheet->getCell("b".$row)->getValue();
                    $correo = $sheet->getCell("c".$row)->getValue();
                    $nombre = $sheet->getCell("d".$row)->getValue();
                    $apellido = $sheet->getCell("e".$row)->getValue();
                    $id_tipo_doc = $sheet->getCell("f".$row)->getValue();
                    $documento_indentidad = $sheet->getCell("g".$row)->getValue();
                    $telefono = $sheet->getCell("h".$row)->getValue();
                    $direccion = $sheet->getCell("i".$row)->getValue();
                    $ocupacion = $sheet->getCell("j".$row)->getValue();

                    $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                    $idUsuario = $consultas->registrarUsuarioMasivo(
                        $correo,
                        $password,
                        $id_rol,
                        $id_institucion
                    );

                    if($idUsuario){

                        $datos = [

                            "id_institucion" => $id_institucion,
                            "nombre" => $nombre,
                            "apellido" => $apellido,
                            "id_tipo_doc" => $id_tipo_doc,
                            "documento_indentidad" => $documento_indentidad,
                            "telefono" => $telefono,
                            "direccion" => $direccion,
                            "ocupacion" => $ocupacion

                        ];

                        $consultas->registrarAcudienteMasivo($idUsuario,$datos);

                    }

                }

            break;


            default:

                echo "<script>

                        alert('Rol no válido');

                        history.back();

                      </script>";

            break;

        }

    }else{

        echo "<script>

                location.href='../views/admin/registrar.php';

              </script>";

    }


 ?>