<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;


include("../models/mdb.php");
include("../models/mconsultas.php");

$usuarios = new Consultas();
$obtenerReporteUsuarios = $usuarios->obtenerReporteUsuariosPlano();

date_default_timezone_set('America/Bogota');
$fecha2 = date("Y-m-d H:i:s");

function imgToBase64($path)
{
    if (file_exists($path) && is_file($path)) {

        $mime = mime_content_type($path);
        $data = file_get_contents($path);
        return 'data:image/' . $mime . ';base64,' . base64_encode($data);
    }
    // Si no encuentra la imagen, retorna transparente
    return 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
}

$rutaImagenFija = __DIR__ . '/../assets/img/logos/logo_azul.png';
$logoBase64 = imgToBase64($rutaImagenFija);


$html = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
 <style>
    body { font-family: Arial, sans-serif; font-size: 11px; margin: 15px; }
    h2 { text-align: center; color: #333; margin-bottom: 5px; }
    .fecha { text-align: right; font-size: 10px; color: #666; margin-bottom: 15px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 15px; }
    th, td { border: 1px solid #ccc; padding: 4px 6px; text-align: left; } /* Reduje padding para ahorrar espacio vertical */
    th { background-color: #2562ea; color: white; }
    tr:nth-child(even) { background-color: #f9f9f9; }
    .monto { text-align: right; }
</style>
<title>Reporte de Registros</title>

</head>
<body>

<body>
    <table style="width: 100%; border: none; margin-bottom: 10px;">
        <tr style="background: transparent;">
            <td style="border: none; width: 20%;">
                <img src="' . $logoBase64 . '" style="width: 90px; height: auto;" alt="Logo">
            </td>
            <td style="border: none; text-align: center;">
                <h2 style="margin: 0;">REPORTE DE USUARIOS REGISTRADOS</h2>
                <div class="fecha">Generado el: ' . $fecha2 . '</div>
            </td>
        </tr>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Institución</th>
                <th>Estado</th>
                <th>Fecha Creacion</th>
            </tr>
        </thead>
        <tbody>';

foreach ($obtenerReporteUsuarios as $r) {
    $html .= '<tr>
        <td>' . $r['id_usuario'] . '</td>
        <td>' . $r['correo'] . '</td>
        <td>' . $r['rol'] . '</td>
        <td>' . $r['institucion'] . '</td>
        <td>' . $r['estado'] . '</td>
        <td>' . $r['fecha_creacion'] . '</td>
    </tr>';
}

$html .= '
        </tbody>
    </table>

</body>
</html>';


// 4. Inicializar y configurar Dompdf
$options = new Options();
$options->set('isRemoteEnabled', true); // Permite cargar imágenes externas o CSS si los necesitas

$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);

// 5. Configurar tamaño del papel y orientación
// Recomendado "landscape" (horizontal) porque son 8 columnas
$dompdf->setPaper('letter', 'landscape');

// 6. Renderizar HTML a PDF
$dompdf->render();

// 7. Enviar la descarga directamente al navegador (ya no requiere headers manuales)
$dompdf->stream("Reporte_Vehiculos.pdf", array("Attachment" => false));
?>