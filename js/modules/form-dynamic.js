//Gestiona la lógica reactiva del formulario (cambio de rol, subida de archivos y descargas).
export function mostrarNombreArchivo(input) {
    const fileNameDisplay = document.getElementById('file-name-display');
    if (input.files && input.files[0]) {
        fileNameDisplay.innerHTML = `<strong>Archivo seleccionado:</strong> ${input.files[0].name}`;
    }
}

export function cambiarPlantilla() {
    const selectRol = document.getElementById('id_perfil_masivo');
    const btnDescargar = document.getElementById('btn-descargar-plantilla');

    if (selectRol && selectRol.selectedIndex !== -1 && btnDescargar) {
        const opcionSeleccionada = selectRol.options[selectRol.selectedIndex];
        const rutaPlantilla = opcionSeleccionada.getAttribute('data-plantilla');

        if (rutaPlantilla && rutaPlantilla.trim() !== '') {
            btnDescargar.setAttribute('href', rutaPlantilla);
            btnDescargar.classList.remove('disabled', 'text-muted');
            btnDescargar.classList.add('text-primary');
            btnDescargar.style.backgroundColor = '#eef2ff';
            btnDescargar.style.pointerEvents = 'auto';
            btnDescargar.removeAttribute('aria-disabled');
        } else {
            deshabilitarBotonDescarga(btnDescargar);
        }
    }
}

function deshabilitarBotonDescarga(btn) {
    btn.setAttribute('href', 'javascript:void(0);');
    btn.classList.add('disabled', 'text-muted');
    btn.classList.remove('text-primary');
    btn.style.backgroundColor = '#e2e8f0';
    btn.style.pointerEvents = 'none';
    btn.setAttribute('aria-disabled', 'true');
}

export function actualizarCamposPorRol(idRol) {
    const seccionesDinamicas = document.getElementById('secciones-dinamicas');

    if (!idRol) {
        seccionesDinamicas.style.display = 'none';
        return;
    }

    seccionesDinamicas.style.display = 'block';

    const selectTipoDoc = document.getElementById('id_tipo_doc');
    const inputNumDoc = document.getElementById('documento_indentidad');
    const inputNombre = document.getElementById('nombre');
    const inputApellido = document.getElementById('apellido');

    selectTipoDoc.setAttribute('required', 'required');
    inputNumDoc.setAttribute('required', 'required');
    inputNombre.setAttribute('required', 'required');
    inputApellido.setAttribute('required', 'required');

    const contenedorEspecifico = document.getElementById('campos-especificos');
    const camposRol = document.querySelectorAll('.campo-rol');
    const btnSubmit = document.getElementById('btn-submit-text');

    const grupoSangre = document.getElementById('grupo-sangre');
    const selectSangre = document.getElementById('tipo_sangre');
    const grupoEps = document.getElementById('grupo-eps');
    const selectEps = document.getElementById('id_eps');

    const grupoNacimiento = document.getElementById('grupo-nacimiento');
    const inputNacimiento = document.getElementById('fecha_nacimiento');

    const grupoSexo = document.getElementById('grupo-sexo');
    const selectSexo = document.getElementById('sexo');

    const grupoResidenciaEstudiante = document.getElementById('grupo-residencia-estudiante');
    const selectMunicipio = document.getElementById('id_municipio');
    const selectZona = document.getElementById('id_zona');

    const grupoDireccion = document.getElementById('grupo-direccion');
    const inputDireccion = document.getElementById('direccion');

    const grupoAcademico = document.getElementById('grupo-academico-estudiante');
    const selectAnio = document.getElementById('id_anio_lectivo');
    const selectGrado = document.getElementById('id_grado');

    camposRol.forEach(campo => campo.style.display = 'none');
    contenedorEspecifico.style.display = 'none';

    if (idRol === "4") {
        grupoNacimiento.style.display = 'block';
        inputNacimiento.setAttribute('required', 'required');

        grupoResidenciaEstudiante.style.display = 'grid';
        selectMunicipio.setAttribute('required', 'required');
        selectZona.setAttribute('required', 'required');
    } else {
        grupoNacimiento.style.display = 'none';
        inputNacimiento.removeAttribute('required');
        inputNacimiento.value = '';

        grupoResidenciaEstudiante.style.display = 'none';
        selectMunicipio.removeAttribute('required');
        selectMunicipio.value = '';
        selectZona.removeAttribute('required');
        selectZona.value = '';
    }

    if (idRol === "1" || idRol === "2" || idRol === "3") {
        grupoDireccion.style.display = 'none';
        inputDireccion.removeAttribute('required');
        inputDireccion.value = '';
    } else {
        grupoDireccion.style.display = 'block';
    }

    if (idRol === "4") {
        grupoSexo.style.display = 'block';
        selectSexo.setAttribute('required', 'required');
    } else {
        grupoSexo.style.display = 'none';
        selectSexo.removeAttribute('required');
        selectSexo.value = '';
    }

    if (idRol === "4") {
        grupoAcademico.style.display = 'block';
        selectAnio.setAttribute('required', 'required');
        selectGrado.setAttribute('required', 'required');
    } else {
        grupoAcademico.style.display = 'none';
        selectAnio.removeAttribute('required');
        selectAnio.value = '';
        selectGrado.removeAttribute('required');
        selectGrado.value = '';
    }

    if (idRol === "2" || idRol === "3" || idRol === "4") {
        grupoSangre.style.display = 'block';
        selectSangre.setAttribute('required', 'required');

        grupoEps.style.display = 'grid';
        selectEps.setAttribute('required', 'required');
    } else {
        grupoSangre.style.display = 'none';
        selectSangre.removeAttribute('required');
        selectSangre.value = '';

        grupoEps.style.display = 'none';
        selectEps.removeAttribute('required');
        selectEps.value = '';
    }

    if (idRol === "2") {
        contenedorEspecifico.style.display = 'grid';
        document.querySelector('.campo-directivo').style.display = 'block';
        btnSubmit.innerHTML = '<i class="fa-solid fa-user-check me-2"></i> Registrar Directivo';
    } else if (idRol === "3") {
        contenedorEspecifico.style.display = 'grid';
        document.querySelector('.campo-docente').style.display = 'block';
        btnSubmit.innerHTML = '<i class="fa-solid fa-user-check me-2"></i> Registrar Docente';
    } else if (idRol === "4") {
        btnSubmit.innerHTML = '<i class="fa-solid fa-user-check me-2"></i> Registrar Estudiante';
    } else if (idRol === "5") {
        contenedorEspecifico.style.display = 'grid';
        document.querySelector('.campo-acudiente').style.display = 'block';
        btnSubmit.innerHTML = '<i class="fa-solid fa-user-check me-2"></i> Registrar Acudiente';
    } else {
        btnSubmit.innerHTML = '<i class="fa-solid fa-user-check me-2"></i> Registrar Administrador';
    }
}