	<?php require_once "../controllers/ObtenerDatosUsuariosController.php";
	?>


<!DOCTYPE html>
<html lang="es">

	<?php
	include 'layout/head.php';
	?>

	<body data-spy="scroll" data-offset="80">

	<div class="preloaders">
	    <span class="loader"></span>
	</div>

	<?php include 'layout/navbar.php'; ?>

	<section class="section-top">
	    <div class="container">
	        <div class="col-lg-10 offset-lg-1 text-center">
	            <br><br>

	            <div class="section-top-title wow fadeInRight"
	                 data-wow-duration="1s"
	                 data-wow-delay="0.3s">

	                <h1>Instituciones</h1> 

	                <ul>
	                    <li><a href="index.php">Inicio</a></li>
	                    <li> / Instituciones</li>
	                </ul>

	                <p class="mt-3">
	                    Descubre las instituciones educativas registradas en Edunection
	                    y conoce su oferta académica.
	                </p>

	            </div>

	        </div>
	    </div>
	</section>


	<section class="home_course section-padding">

    <div class="container">

		<!-- BARRA DE BUSQUEDA -->
		<div class="row justify-content-center mb-5">

			<div class="col-lg-8 col-md-10 col-sm-12">

				<div class="home_sb2">

					<form action="institutions.php"  onsubmit="return false;" method="GET" class="banner_subs2">

						<input type="text"
						id="searchInput" 
						class="form-control home_si2" 
						placeholder="Buscar institución educativa"
						autocomplete="off">



					</form>

				</div>

			</div>

		</div>
		<!-- FIN BARRA DE BUSQUEDA -->

		<div class="row" id="contenedorInstituciones">
		    <?php foreach ($instituciones as $f): ?>
		        <div class="col-lg-4 col-sm-6 col-xs-12">
		            <div class="single_course">
		                <div class="single_c_img">
		                    <img src="<?= $f['logo']; ?>" class="img-fluid" alt="institution-image" />
		                </div>
		                <h4><a href="login.php?id=<?= $f['id_institucion']; ?>"><?= $f['nombre']; ?></a></h4>
		                <p><span class="ti-email"></span> <?= $f['correo']; ?></p>
		                <br>
		                <p><span class="ti-world"></span> <?= $f['numero_telefonico']; ?></p>
		            </div>
		        </div><!-- END COL -->
		    <?php endforeach; ?>
		</div><!--- END ROW -->
	</section>

	<?php include 'layout/foother_last_jquery.php'; ?>

	</body>
	<script>
	document.addEventListener('DOMContentLoaded', () => {

    const searchInput = document.getElementById('searchInput');
    // Seleccionamos la columna de cada institución
    const tarjetas = document.querySelectorAll('#contenedorInstituciones > div');

    function filtrarInstituciones() {
        const textoBusqueda = searchInput ? searchInput.value.toLowerCase().trim() : '';

        tarjetas.forEach(tarjeta => {
            // Obtenemos todo el texto legible de la tarjeta (nombre, correo, teléfono)
            const textoTarjeta = tarjeta.textContent.toLowerCase();

            // Comprobar si coincide con lo que el usuario escribe
            const coincideBusqueda = textoTarjeta.includes(textoBusqueda);

            // Mostrar u ocultar la columna contenedora
            if (coincideBusqueda) {
                tarjeta.style.display = '';
            } else {
                tarjeta.style.display = 'none';
            }
        });
    }

    // Escuchar el evento de búsqueda en tiempo real
    if (searchInput) {
        searchInput.addEventListener('input', filtrarInstituciones);
    }
});

	</script>
</html>