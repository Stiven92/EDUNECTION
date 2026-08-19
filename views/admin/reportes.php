<?php //include("../../controllers/SessionAdministradorController.php"); ?>

<?php
require_once "../../controllers/ObtenerDatosUsuariosController.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión y Registro de Usuarios - EDUNECTION</title>
    <!-- Tipografía y FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/styleDashboard.css">
</head>

<body>

    <!-- Header & Navegación -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="dashboardAdmin.php" class="logo">
                <img src="../../assets/img/logos/logo_azul.png" alt="Logo EDUNECTION" class="logo-icon">
                <span>EDUNECTION</span>
            </a>

            <nav class="nav-links">
                <a href="dashboardAdmin.php" class="nav-item">Inicio</a>
                <a href="usuarios.php" class="nav-item active">Usuarios</a>
                <a href="docentes.php" class="nav-item">Docentes</a>
                <a href="cursosAdmin.php" class="nav-item">Cursos</a>

                <!-- Desplegable Gestión -->
                <div class="nav-dropdown">
                    <button type="button" class="dropdown-btn">
                        <span>Gestión</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a href="matricularEstudiante.php" class="dropdown-item">
                            <i class="fa-solid fa-user-plus"></i> Nuevo Registro
                        </a>
                        <a href="reportes.php" class="dropdown-item">
                            <i class="fa-solid fa-chart-pie"></i> Reportes Generales
                        </a>
                    </div>
                </div>
            </nav>

            <div class="nav-icons">
                <button class="icon-btn"><i class="fa-regular fa-envelope"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-bell"></i></button>
                <button class="icon-btn"><i class="fa-regular fa-user"></i></button>
            </div>
        </div>
    </header>

    <!-- Contenido Principal: Gráfico -->
    <main class="container" style="margin-top: 30px; margin-bottom: 30px;">
        <div id="container" style="width: 100%; height: 400px;"></div>
    </main>

    <!-- Scripts de Highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>


<?php
// Extraes únicamente la columna 'nombre' de la variable $instituciones que viene de tu controlador
$nombresInstituciones = array_column($instituciones, 'nombre');
?>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('container', {
                chart: {
                    type: 'bar',
                    backgroundColor: '#f8fafc'
                },
                title: {
                    text: 'Gestión de Instituciones',
                    style: {
                        color: '#1e293b',      // Color del texto
                        fontSize: '18px',
                        fontWeight: 'bold'
                    }
                },

                subtitle: {
                    text:
                        'Source: <a ' +
                        'href="https://en.wikipedia.org/wiki/List_of_continents_and_continental_subregions_by_population"' +
                        'target="_blank">Wikipedia.org</a>',
                    style: {
                        color: '#1e293b',      // Color del texto
                        fontSize: '18px',
                        fontWeight: 'bold'
                    }
                },

         
                xAxis: {
                    // Inyectas la nueva variable con la lista de nombres
                    categories: <?php echo json_encode($nombresInstituciones, JSON_UNESCAPED_UNICODE); ?>,
                    title: { text: null },
                    gridLineWidth: 1,
                    lineWidth: 0,


                 },




                yAxis: {
                    min: 0,
                    title: {
                        text: 'Population (millions)',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    },
                    gridLineWidth: 0
                },
                tooltip: {
                    headerFormat: `<div style="display: flex">
                            <div>
                                <svg width="10" height="30">
                                <path d="M 1.5 1.5 L 1.5 28.5" stroke="{series.color}"
                                    stroke-width="3" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div>
                                <div class="highcharts-header">
                                    {point.key}
                                </div>`,
                    pointFormat: `<span style="color: var(--highcharts-neutral-color)">
                                {series.name}
                            </span>
                            <b style="padding-left: 0.5em">{point.y}</b>`,
                    footerFormat: '</div>',
                    useHTML: true,
                    valueSuffix: ' million'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderColor: 'var(--highcharts-neutral-color-10, #1e293b)',
                    borderRadius: 4,
                    borderWidth: 1,
                    backgroundColor: 'var(--highcharts-background-color, #1e293b)'
                },
                credits: {
                    enabled: false
                },
                plotOptions: {
                    bar: {
                        borderRadius: '50%',
                        dataLabels: {
                            enabled: true
                        },
                        groupPadding: 0.1
                    }
                },
                series: [

                    {
                        name: 'Year 1990',
                        data: [632, 727,]
                    },
                    {
                        name: 'Year 2000',
                        data: [814, 841, ]
                    },
                    {
                        name: 'Year 2021',
                        data: [1393, 1031, ]
                    }
                    
                ]
            });
        });
    </script>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-content">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="font-weight: 800; color: var(--primary-blue);">EDUNECTION</span>
                <span style="font-size: 0.85rem; color: var(--text-muted);">© 2026 Todos los derechos reservados.</span>
            </div>
            <div style="font-size: 0.85rem; color: var(--text-muted);">
                Soporte: edunection@gmail.com | +57 6086611649
            </div>
        </div>
    </footer>

    <!-- Script para visualizar nombre del archivo de logo cargado -->
    <script>
        function showFileName(input) {
            const fileNameDisplay = document.getElementById('file-name-display');
            if (input.files && input.files[0]) {
                fileNameDisplay.innerHTML = `<strong>Escudo seleccionado:</strong> ${input.files[0].name}`;
            }
        }
    </script>

</body>

</html>