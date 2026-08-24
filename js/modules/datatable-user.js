//Aísla la inicialización de DataTables y sus filtros.
export function initUserTable() {
    let userTable = null;

    if (!$.fn.DataTable.isDataTable('#userTable')) {
        userTable = $('#userTable').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
            },
            dom: "<'table-responsive'tr>" +
                 "<'d-flex justify-content-between align-items-center p-3'ip>",
            pageLength: 10,
            order: [[0, 'desc']],
            columnDefs: [
                { orderable: false, targets: 5 }
            ]
        });
    }

    // Evento buscador global
    $('#dtSearchInput').on('keyup change clear', function () {
        if (userTable) userTable.search(this.value).draw();
    });

    // Evento filtro por Rol
    $('#dtRoleSelect').on('change', function () {
        var selectedRole = $(this).val();
        if (userTable) {
            if (selectedRole === "") {
                userTable.column(3).search('').draw();
            } else {
                userTable.column(3).search('^' + selectedRole + '$', true, false).draw();
            }
        }
    });

    return userTable;
}