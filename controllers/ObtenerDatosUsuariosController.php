<?php

// __DIR__ representa la carpeta física 'controllers'
require_once __DIR__ . "/../models/mdb.php";
require_once __DIR__ . "/../models/mconsultas.php";

// ... resto de tu código ...

// Instanciar la clase de consultas
$consultas = new Consultas();

// Obtener la información requerida para el formulario y la lista
$departamentos = $consultas->obtenerDepartamentos();
$jornada       = $consultas->obtenerjornada();
$instituciones = $consultas->obtenerInstituciones();
$roles         = $consultas->obtenerRoles();
$tiposDoc      = $consultas->obtenerTiposDocumento();
$sexos         = $consultas->obtenerSexos();
$tiposSangre   = $consultas->obtenerTiposSangre();
$municipios    = $consultas->obtenerMunicipios();
$zonas         = $consultas->obtenerZonas();
$listaEPS      = $consultas->obtenerEPS();
$aniosLectivos = $consultas->obtenerAniosLectivos();
$grados        = $consultas->obtenerGrados();
$cursos        = $consultas->obtenerCursos();
$usuarios      = $consultas->obtenerListaUsuarios();

// Cargar/Incluir la Vista para que pueda consumir las variables creadas

//require_once __DIR__ . "/../views/admin/registrar.php";//este es para que solo sea este archivo 

