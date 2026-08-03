<?php

	include("../models/mdb.php");
	include("../models/mconsultas.php");

	if(!empty($_POST)){

		$consultas = new Consultas();

		// Contraseña temporal
		$password = password_hash($_POST["documento_indentidad"], PASSWORD_DEFAULT);

		// Registrar usuario
		$idUsuario = $consultas->registrarUsuario(

			$correo = $_POST["correo_electronico"],
			$password,
			$id_perfil = $_POST["id_perfil"],
			$id_institucion = $_POST["id_institucion"]

		);

		// Si el usuario fue registrado correctamente
		if($idUsuario){

			switch($_POST["id_perfil"]){

				// Administrador
				case 1:

					$consultas->registrarAdministrador($idUsuario,$_POST);

				break;

				// Directivo
				case 2:

					$consultas->registrarDirectivo($idUsuario,$_POST);

				break;

				// Docente
				case 3:

					$consultas->registrarDocente($idUsuario,$_POST);

				break;

				// Estudiante
				case 4:

					$consultas->registrarMatricula($idUsuario,$_POST);

				break;

				// Acudiente
				case 5:

					$consultas->registrarAcudiente($idUsuario,$_POST);

				break;

				default:

					echo "<script>
						alert('Rol no válido');
						history.back();
					</script>";

				break;

			}

			echo "<script>
				alert('Usuario registrado correctamente');
				location.href='../views/admin/registrar.php';
			</script>";

		}else{

			echo "<script>
				alert('Error al registrar el usuario');
				history.back();
			</script>";

		}

	}else{

		echo "<script>
			location.href='../views/admin/registrar.php';
		</script>";

	}

?>