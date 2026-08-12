<?php
require_once "../vendor/autoload.php";
require_once "../models/mconsultas.php"; 
require_once "../models/mdb.php"; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

// Obtener datos
$consultas = new Consultas();
$datos = $consultas->obtenerReporteUsuariosPlano();

// Crear una nueva hoja de cálculo
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle("Reporte Usuarios");

// Definir los encabezados de las columnas
$encabezados = ['ID Usuario', 'Correo / Usuario', 'Rol', 'Institución', 'Estado', 'Fecha Creación'];
$sheet->fromArray($encabezados, NULL, 'A1');

// Estilar los encabezados (Negrita, fondo azul corporativo, texto blanco)
$styleHeader = [
    'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['rgb' => '1E40AF'] // Color azul
    ],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
];
$sheet->getStyle('A1:F1')->applyFromArray($styleHeader);

// Llenar los datos fila por fila
if (!empty($datos)) {
    $filaNumero = 2;
    foreach ($datos as $fila) {
        $sheet->fromArray([
            $fila['id_usuario'],
            $fila['correo'],
            $fila['rol'],
            $fila['institucion'],
            $fila['estado'],
            $fila['fecha_creacion']
        ], NULL, "A{$filaNumero}");
        $filaNumero++;
    }
}

// Autoajustar el ancho de las columnas de la A a la F
foreach (range('A', 'F') as $col) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// Configurar los encabezados HTTP para forzar la descarga del .xlsx
$nombreArchivo = "reporte_usuarios_" . date('Y-m-d_H-i-s') . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');
header('Cache-Control: max-age=0');

// Guardar y enviar la salida al navegador
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit();
?>