//Importa los módulos y expone lo necesario al ámbito global (si tus eventos en el HTML usan atributos como onclick="..." u onchange="...").
import { switchTab } from './modules/ui-tabs.js';
import { initUserTable } from './modules/datatable-user.js';
import { mostrarNombreArchivo, cambiarPlantilla, actualizarCamposPorRol } from './modules/form-dynamic.js';

let userTable = null;

$(document).ready(function () {
    // Inicializar DataTable
    userTable = initUserTable();
});

// Exponer funciones a 'window' para que sigan funcionando inline desde el HTML (onclick / onchange)
window.switchTab = (tabName) => switchTab(tabName, userTable);
window.mostrarNombreArchivo = mostrarNombreArchivo;
window.cambiarPlantilla = cambiarPlantilla;
window.actualizarCamposPorRol = actualizarCamposPorRol;