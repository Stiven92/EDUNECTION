<?php 
include("../models/mdb.php");
include("../models/mconsultas.php");

if ($_POST) {
    $nombre_institucion     = $_POST['nombre_institucion'] ?? '';
    $codigo_dane_nit        = $_POST['codigo_dane_nit'] ?? '';
    $tipo_sector            = $_POST['tipo_sector'] ?? '';
    $departamento           = !empty($_POST['departamento']) ? (int)$_POST['departamento'] : 1;
    $municipio              = !empty($_POST['municipio']) ? (int)$_POST['municipio'] : 1;
    $direccion              = $_POST['direccion'] ?? '';
    $telefono_institucional = $_POST['telefono_institucional'] ?? '';
    $correo_institucional   = $_POST['correo_institucional'] ?? '';
    $jornadas               = $_POST['jornada'] ?? null;

    // Procesamiento de la Imagen
    $rutaFoto1 = "";
    if (isset($_FILES['imagen_apoyo_1']) && $_FILES['imagen_apoyo_1']['error'] == 0) {
        $nombreImagen = time() . "_" . $_FILES['imagen_apoyo_1']['name'];
        $directorioDestino = "../assets/img/logo_colegio/";



        $rutaFoto1 = $directorioDestino . $nombreImagen;
        move_uploaded_file($_FILES['imagen_apoyo_1']['tmp_name'], $rutaFoto1);
    }

    $save = new Consultas();

    $saveInstitucion = $save->saveInstitucion(
        $nombre_institucion, 
        $codigo_dane_nit, 
        $tipo_sector, 
        $departamento, 
        $municipio, 
        $direccion, 
        $telefono_institucional, 
        $correo_institucional, 
        $jornadas,
        $rutaFoto1 // Se envía la ruta de la imagen recibida
    );

    if ($saveInstitucion) {
        echo "<script>alert('Institución registrada exitosamente');</script>";
        echo "<script>location.href='../views/admin/instituciones.php';</script>";
    } else {
        echo "<script>alert('Error al registrar la institución'); history.back();</script>";
    }
}
?>