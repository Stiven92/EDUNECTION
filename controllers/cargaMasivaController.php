<?php

include("../models/mdb.php");
include("../models/mconsultas.php");

require __DIR__ . '/../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use DateTime;
use Exception;

if ($_FILES) {

    date_default_timezone_set('America/Bogota');
    $fecSis = date("Y-m-d H:i:s");

    $arcExc = isset($_FILES['archivoPlano']['name']) ? $_FILES['archivoPlano']['name'] : NULL;

    if ($arcExc && $_FILES['archivoPlano']['error'] == UPLOAD_ERR_OK) {

        $ruta_temporal = $_FILES['archivoPlano']['tmp_name'];

        // ==========================================
        // CAPTURA DE EXCEPCIONES EN PHPSPREADSHEET
        // ==========================================
        try {
            $arcExc2 = IOFactory::load($ruta_temporal);
            $sheet = $arcExc2->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
        } catch (Exception $e) {
            echo "<script>
                    alert('Error al leer el archivo Excel: Formato no válido o archivo dañado.');
                    history.back();
                  </script>";
            exit();
        }

    } else {

        echo "<script>
                alert('Error al subir el archivo');
                history.back();
              </script>";
        exit();

    }

    $consultas = new Consultas();
    $rol = $_POST["rol_usuario"];

    $plantillasRoles = [
        1 => "PLANTILLA DE CARGA MASIVA - ADMINISTRADORES",
        2 => "PLANTILLA DE CARGA MASIVA - DIRECTIVOS",
        3 => "PLANTILLA DE CARGA MASIVA - DOCENTES",
        4 => "PLANTILLA DE CARGA MASIVA - ESTUDIANTES",
        5 => "PLANTILLA DE CARGA MASIVA - ACUDIENTES"
    ];

    $tituloPlantilla = trim($sheet->getCell("A1")->getValue());

    if (!isset($plantillasRoles[$rol])) {
        echo "<script>
                alert('Rol no válido');
                history.back();
              </script>";
        exit();
    }

    if ($tituloPlantilla != $plantillasRoles[$rol]) {
        echo "<script>
                alert('La plantilla no corresponde al tipo de usuario seleccionado.');
                history.back();
              </script>";
        exit();
    }

    $insertados = 0;
    $fallidos = 0;

    switch ($rol) {

        case 1:
            for ($row = 4; $row <= $highestRow; $row++) {

                $id_institucion = $sheet->getCell("a" . $row)->getValue();
                $id_rol = $sheet->getCell("b" . $row)->getValue();
                $correo = $sheet->getCell("c" . $row)->getValue();
                $nombre = $sheet->getCell("d" . $row)->getValue();
                $apellido = $sheet->getCell("e" . $row)->getValue();
                $id_tipo_doc = $sheet->getCell("f" . $row)->getValue();
                $documento_indentidad = $sheet->getCell("g" . $row)->getValue();
                $telefono = $sheet->getCell("h" . $row)->getValue();
                $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                if (empty($correo)) continue; // Omitir filas vacías

                $idUsuario = $consultas->registrarUsuarioMasivo($correo, $password, $id_rol, $id_institucion);

                if ($idUsuario) {
                    $datos = [
                        "id_institucion" => $id_institucion,
                        "nombre" => $nombre,
                        "apellido" => $apellido,
                        "id_tipo_doc" => $id_tipo_doc,
                        "documento_indentidad" => $documento_indentidad,
                        "telefono" => $telefono
                    ];

                    if ($consultas->registrarAdministradorMasivo($idUsuario, $datos)) {
                        $insertados++;
                    } else {
                        $fallidos++;
                    }
                } else {
                    $fallidos++;
                }
            }
            break;

        case 2:
            for ($row = 4; $row <= $highestRow; $row++) {

                $id_institucion = $sheet->getCell("a" . $row)->getValue();
                $id_rol = $sheet->getCell("b" . $row)->getValue();
                $correo = $sheet->getCell("c" . $row)->getValue();
                $nombre = $sheet->getCell("d" . $row)->getValue();
                $apellido = $sheet->getCell("e" . $row)->getValue();
                $id_tipo_doc = $sheet->getCell("f" . $row)->getValue();
                $documento_indentidad = $sheet->getCell("g" . $row)->getValue();
                $telefono = $sheet->getCell("h" . $row)->getValue();
                $cargo = $sheet->getCell("i" . $row)->getValue();
                $id_eps = $sheet->getCell("j" . $row)->getValue();
                $tipo_sangre = $sheet->getCell("k" . $row)->getValue();
                $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                if (empty($correo)) continue;

                $idUsuario = $consultas->registrarUsuarioMasivo($correo, $password, $id_rol, $id_institucion);

                if ($idUsuario) {
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

                    if ($consultas->registrarDirectivoMasivo($idUsuario, $datos)) {
                        $insertados++;
                    } else {
                        $fallidos++;
                    }
                } else {
                    $fallidos++;
                }
            }
            break;

        case 3:
            for ($row = 4; $row <= $highestRow; $row++) {

                $id_institucion = $sheet->getCell("a" . $row)->getValue();
                $id_rol = $sheet->getCell("b" . $row)->getValue();
                $correo = $sheet->getCell("c" . $row)->getValue();
                $nombre = $sheet->getCell("d" . $row)->getValue();
                $apellido = $sheet->getCell("e" . $row)->getValue();
                $id_tipo_doc = $sheet->getCell("f" . $row)->getValue();
                $documento_indentidad = $sheet->getCell("g" . $row)->getValue();
                $telefono = $sheet->getCell("h" . $row)->getValue();
                $especialidad = $sheet->getCell("i" . $row)->getValue();
                $id_eps = $sheet->getCell("j" . $row)->getValue();
                $tipo_sangre = $sheet->getCell("k" . $row)->getValue();
                $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                if (empty($correo)) continue;

                $idUsuario = $consultas->registrarUsuarioMasivo($correo, $password, $id_rol, $id_institucion);

                if ($idUsuario) {
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

                    if ($consultas->registrarDocenteMasivo($idUsuario, $datos)) {
                        $insertados++;
                    } else {
                        $fallidos++;
                    }
                } else {
                    $fallidos++;
                }
            }
            break;

        case 4:
            for ($row = 4; $row <= $highestRow; $row++) {

                $id_institucion = $sheet->getCell("a" . $row)->getValue();
                $id_rol = $sheet->getCell("b" . $row)->getValue();
                $correo = $sheet->getCell("c" . $row)->getValue();
                $nombre = $sheet->getCell("d" . $row)->getValue();
                $apellido = $sheet->getCell("e" . $row)->getValue();
                $id_tipo_doc = $sheet->getCell("f" . $row)->getValue();
                $documento_indentidad = $sheet->getCell("g" . $row)->getValue();

                $cellFecha = $sheet->getCell("h" . $row);
                $valFecha = $cellFecha->getValue();

                if (!empty($valFecha)) {
                    if (is_numeric($valFecha)) {
                        $fecha_nacimiento = Date::excelToDateTimeObject($valFecha)->format('Y-m-d');
                    } else {
                        $valFechaStr = trim((string) $valFecha);
                        $fecha = DateTime::createFromFormat('d/m/Y', $valFechaStr);
                        if (!$fecha) {
                            $fecha = DateTime::createFromFormat('Y-m-d', $valFechaStr);
                        }
                        $fecha_nacimiento = ($fecha !== false) ? $fecha->format('Y-m-d') : null;
                    }
                } else {
                    $fecha_nacimiento = null;
                }

                $sexo = $sheet->getCell("i" . $row)->getValue();
                $direccion = $sheet->getCell("j" . $row)->getValue();
                $id_municipio = $sheet->getCell("k" . $row)->getValue();
                $id_zona = $sheet->getCell("l" . $row)->getValue();
                $telefono = $sheet->getCell("m" . $row)->getValue();
                $id_eps = $sheet->getCell("n" . $row)->getValue();
                $tipo_sangre = $sheet->getCell("o" . $row)->getValue();
                $id_grado = $sheet->getCell("p" . $row)->getValue();
                $id_curso = $sheet->getCell("q" . $row)->getValue();
                $observaciones = $sheet->getCell("r" . $row)->getValue();

                $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                if (empty($correo)) continue;

                $idUsuario = $consultas->registrarUsuarioMasivo($correo, $password, $id_rol, $id_institucion);

                if ($idUsuario) {
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

                    if ($consultas->registrarMatriculaMasiva($idUsuario, $datos)) {
                        $insertados++;
                    } else {
                        $fallidos++;
                    }
                } else {
                    $fallidos++;
                }
            }
            break;

        case 5:
            for ($row = 4; $row <= $highestRow; $row++) {

                $id_institucion = $sheet->getCell("a" . $row)->getValue();
                $id_rol = $sheet->getCell("b" . $row)->getValue();
                $correo = $sheet->getCell("c" . $row)->getValue();
                $nombre = $sheet->getCell("d" . $row)->getValue();
                $apellido = $sheet->getCell("e" . $row)->getValue();
                $id_tipo_doc = $sheet->getCell("f" . $row)->getValue();
                $documento_indentidad = $sheet->getCell("g" . $row)->getValue();
                $telefono = $sheet->getCell("h" . $row)->getValue();
                $direccion = $sheet->getCell("i" . $row)->getValue();
                $ocupacion = $sheet->getCell("j" . $row)->getValue();

                $password = password_hash($documento_indentidad, PASSWORD_DEFAULT);

                if (empty($correo)) continue;

                $idUsuario = $consultas->registrarUsuarioMasivo($correo, $password, $id_rol, $id_institucion);

                if ($idUsuario) {
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

                    if ($consultas->registrarAcudienteMasivo($idUsuario, $datos)) {
                        $insertados++;
                    } else {
                        $fallidos++;
                    }
                } else {
                    $fallidos++;
                }
            }
            break;

        default:
            echo "<script>
                    alert('Rol no válido');
                    history.back();
                  </script>";
            exit();
    }

    echo "<script>
            alert('Carga masiva finalizada. Registros exitosos: {$insertados}. Registros omitidos/fallidos: {$fallidos}');
            location.href='../views/admin/registrar.php';
          </script>";

} else {
    echo "<script>
            location.href='../views/admin/registrar.php';
          </script>";
}
?>