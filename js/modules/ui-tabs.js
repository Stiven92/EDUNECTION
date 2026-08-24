//Este archivo maneja la navegación visual entre pestañas.
export function switchTab(tabName, userTableInstance) {
    // Cambio visual de los botones estilo Bootstrap
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('btn-primary', 'text-white', 'active');
        btn.classList.add('bg-white', 'text-secondary', 'link-primary');
    });

    const selectedBtn = document.getElementById(`${tabName}-tab`);
    if (selectedBtn) {
        selectedBtn.classList.remove('bg-white', 'text-secondary', 'link-primary');
        selectedBtn.classList.add('btn-primary', 'text-white', 'active');
    }

    // Ocultar/Mostrar contenedores de pestañas
    const tabRegistro = document.getElementById('tab-registro');
    const tabMasiva = document.getElementById('tab-masiva');
    const tabListado = document.getElementById('tab-listado');

    if (tabRegistro) tabRegistro.style.display = (tabName === 'registro') ? 'block' : 'none';
    if (tabMasiva) tabMasiva.style.display = (tabName === 'masiva') ? 'block' : 'none';
    if (tabListado) tabListado.style.display = (tabName === 'listado') ? 'block' : 'none';

    // Reajuste de dimensiones de la tabla cuando se hace visible
    if (tabName === 'listado' && userTableInstance) {
        setTimeout(() => {
            userTableInstance.columns.adjust().draw();
        }, 100);
    }
}