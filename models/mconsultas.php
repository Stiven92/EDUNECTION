<?php

	class Consultas{

		private $conexion;

		public function __construct(){
			$cnn = new Conexion();
			$this->conexion = $cnn->get_conexion();
		}


		public function registrarUsuario($correo, $password, $id_perfil, $id_institucion){

			// Verificar si el correo ya existe
			$sql = 'SELECT correo FROM usuario WHERE correo = :correo';
			$res = $this->conexion->prepare($sql);
			$res->bindParam(':correo', $correo);

			try {

				$res->execute();
				$existe = $res->fetch();

				if($existe){

					echo "<script>alert('El correo electrónico ya se encuentra registrado.')</script>";
					echo "<script>history.back()</script>";
					exit();

				}else{

					// Registrar usuario
					$sql = 'INSERT INTO usuario
							(id_institucion, id_rol, correo, password)
							VALUES
							(:id_institucion, :id_rol, :correo, :password)';

					$res = $this->conexion->prepare($sql);

					$res->bindParam(':id_institucion', $id_institucion);
					$res->bindParam(':id_rol', $id_perfil);
					$res->bindParam(':correo', $correo);
					$res->bindParam(':password', $password);

					try {

						$res->execute();

						// Devuelve el ID del usuario recién registrado
						return $this->conexion->lastInsertId();

					} catch (Exception $e) {

						echo "<script>alert('Error al registrar el usuario.')</script>";
						echo "<script>history.back()</script>";
						exit();

					}

				}

			} catch (Exception $e) {

				echo "<script>alert('Error al validar la información del usuario.')</script>";
				echo "<script>history.back()</script>";
				exit();
			}

		}


		public function registrarAdministrador($idUsuario,$datos){

			$sql = "INSERT INTO administrador
					(
						id_usuario,
						id_institucion,
						nombres,
						apellidos,
						id_tipo_documento,
						numero_documento,
						numero_telefonico
					)
					VALUES
					(
						:id_usuario,
						:id_institucion,
						:nombres,
						:apellidos,
						:id_tipo_documento,
						:numero_documento,
						:numero_telefonico
					)";

			$res = $this->conexion->prepare($sql);

			$res->bindParam(":id_usuario",$idUsuario);
			$res->bindParam(":id_institucion",$datos["id_institucion"]);
			$res->bindParam(":nombres",$datos["nombre"]);
			$res->bindParam(":apellidos",$datos["apellido"]);
			$res->bindParam(":id_tipo_documento",$datos["id_tipo_doc"]);
			$res->bindParam(":numero_documento",$datos["documento_indentidad"]);
			$res->bindParam(":numero_telefonico",$datos["telefono"]);

			try{

				$res->execute();

			}catch(Exception $e){

				echo "<script>alert('Error al registrar el administrador')</script>";
				echo "<script>history.back()</script>";

			}

		}


		public function registrarDirectivo($idUsuario,$datos){

			$sql = "INSERT INTO directivo
					(
						id_usuario,
						nombres,
						apellidos,
						id_tipo_documento,
						numero_documento,
						fecha_nacimiento,
						id_sexo,
						direccion,
						id_municipio,
						id_zona,
						numero_telefonico,
						cargo,
						id_eps,
						id_tipo_sangre
						
					)
					VALUES
					(
						:id_usuario,
						:nombres,
						:apellidos,
						:id_tipo_documento,
						:numero_documento,
						:fecha_nacimiento,
						:id_sexo,
						:direccion,
						:id_municipio,
						:id_zona,
						:numero_telefonico,
						:cargo,
						:id_eps,
						:id_tipo_sangre
						
					)";

			$res = $this->conexion->prepare($sql);

			$res->bindParam(":id_usuario",$idUsuario);
			$res->bindParam(":nombres",$datos["nombre"]);
			$res->bindParam(":apellidos",$datos["apellido"]);
			$res->bindParam(":id_tipo_documento",$datos["id_tipo_doc"]);
			$res->bindParam(":numero_documento",$datos["documento_indentidad"]);
			$res->bindParam(":fecha_nacimiento",$datos["fecha_nacimiento"]);
			$res->bindParam(":id_sexo",$datos["sexo"]);
			$res->bindParam(":direccion",$datos["direccion"]);
			$res->bindParam(":id_municipio",$datos["id_municipio"]);
			$res->bindParam(":id_zona",$datos["id_zona"]);
			$res->bindParam(":numero_telefonico",$datos["telefono"]);
			$res->bindParam(":id_eps",$datos["id_eps"]);
			$res->bindParam(":id_tipo_sangre",$datos["tipo_sangre"]);
			$res->bindParam(":cargo",$datos["cargo"]);

			try{

				$res->execute();

			}catch(Exception $e){

				echo "<script>alert('Error al registrar el directivo');</script>";
				echo "<script>history.back();</script>";

			}

		}


		public function registrarDocente($idUsuario,$datos){

			$sql = "INSERT INTO docente
					(
						id_usuario,
						id_institucion,
						nombres,
						apellidos,
						id_tipo_documento,
						numero_documento,
						numero_telefonico,
						especialidad,
						id_eps,
						id_tipo_sangre
					)
					VALUES
					(
						:id_usuario,
						:id_institucion,
						:nombres,
						:apellidos,
						:id_tipo_documento,
						:numero_documento,
						:numero_telefonico,
						:especialidad,
						:id_eps,
						:id_tipo_sangre
					)";

			$res = $this->conexion->prepare($sql);

			$res->bindParam(":id_usuario",$idUsuario);
			$res->bindParam(":id_institucion",$datos["id_institucion"]);
			$res->bindParam(":nombres",$datos["nombre"]);
			$res->bindParam(":apellidos",$datos["apellido"]);
			$res->bindParam(":id_tipo_documento",$datos["id_tipo_doc"]);
			$res->bindParam(":numero_documento",$datos["documento_indentidad"]);
			$res->bindParam(":numero_telefonico",$datos["telefono"]);
			$res->bindParam(":especialidad",$datos["especialidad"]);

			try{

				$res->execute();

			}catch(Exception $e){

				echo "<script>alert('Error al registrar el docente')</script>";
				echo "<script>history.back()</script>";

			}

		}


		public function registrarMatricula($idUsuario, $datos){

		    // Buscar el año lectivo activo de la institución
		    $sql = "SELECT id_anio_lectivo
		            FROM anio_lectivo
		            WHERE id_institucion = :institucion
		            AND estado = 'Activo'
		            LIMIT 1";

		    $res = $this->conexion->prepare($sql);
		    $res->bindParam(':institucion', $datos["id_institucion"]);

		    try{

		        $res->execute();
		        $anio = $res->fetch(PDO::FETCH_ASSOC);

		        if(!$anio){

		            echo "<script>
		                    alert('No existe un año lectivo activo para esta institución');
		                    history.back();
		                  </script>";
		            exit();

		        }

		        $sql = "INSERT INTO matricula(
		                    id_usuario,
		                    id_institucion,
		                    nombres,
		                    apellidos,
		                    id_tipo_documento,
		                    numero_documento,
		                    fecha_nacimiento,
		                    id_sexo,
		                    direccion,
		                    id_municipio,
		                    id_zona,
		                    numero_telefonico,
		                    id_eps,
		                    id_tipo_sangre,
		                    id_anio_lectivo,
		                    id_grado,
		                    id_curso,
		                    observaciones
		                )
		                VALUES(
		                    :id_usuario,
		                    :id_institucion,
		                    :nombres,
		                    :apellidos,
		                    :id_tipo_documento,
		                    :numero_documento,
		                    :fecha_nacimiento,
		                    :id_sexo,
		                    :direccion,
		                    :id_municipio,
		                    :id_zona,
		                    :numero_telefonico,
		                    :id_eps,
		                    :id_tipo_sangre,
		                    :id_anio_lectivo,
		                    :id_grado,
		                    :id_curso,
		                    :observaciones
		                )";

		        $res = $this->conexion->prepare($sql);

		        $res->bindParam(':id_usuario', $idUsuario);
		        $res->bindParam(':id_institucion', $datos["id_institucion"]);
		        $res->bindParam(':nombres', $datos["nombre"]);
		        $res->bindParam(':apellidos', $datos["apellido"]);
		        $res->bindParam(':id_tipo_documento', $datos["id_tipo_doc"]);
		        $res->bindParam(':numero_documento', $datos["documento_indentidad"]);
		        $res->bindParam(':fecha_nacimiento', $datos["fecha_nacimiento"]);
		        $res->bindParam(':id_sexo', $datos["sexo"]);
		        $res->bindParam(':direccion', $datos["direccion"]);
		        $res->bindParam(':id_municipio', $datos["id_municipio"]);
		        $res->bindParam(':id_zona', $datos["id_zona"]);
		        $res->bindParam(':numero_telefonico', $datos["telefono"]);
		        $res->bindParam(':id_eps', $datos["id_eps"]);
		        $res->bindParam(':id_tipo_sangre', $datos["tipo_sangre"]);

		        // Año lectivo activo encontrado automáticamente
		        $res->bindParam(':id_anio_lectivo', $anio["id_anio_lectivo"]);

		        $res->bindParam(':id_grado', $datos["id_grado"]);
		        $res->bindParam(':id_curso', $datos["id_curso"]);
		        $res->bindParam(':observaciones', $datos["observaciones"]);

		        $res->execute();

		        return true;

		    }catch(Exception $e){

		        echo "<script>
		                alert('Error al registrar la matrícula');
		                history.back();
		              </script>";

		        // Si quieres depurar errores durante el desarrollo:
		        // echo $e->getMessage();

		        return false;

		    }

		}


		public function registrarAcudiente($idUsuario,$datos){

			$sql = "INSERT INTO acudiente
					(
						id_usuario,
						id_institucion,
						nombres,
						apellidos,
						id_tipo_documento,
						numero_documento,
						numero_telefonico,
						direccion,
						ocupacion
					)
					VALUES
					(
						:id_usuario,
						:id_institucion,
						:nombres,
						:apellidos,
						:id_tipo_documento,
						:numero_documento,
						:numero_telefonico,
						:direccion,
						:ocupacion
					)";

			$res = $this->conexion->prepare($sql);

			$res->bindParam(":id_usuario",$idUsuario);
			$res->bindParam(":id_institucion",$datos["id_institucion"]);
			$res->bindParam(":nombres",$datos["nombre"]);
			$res->bindParam(":apellidos",$datos["apellido"]);
			$res->bindParam(":id_tipo_documento",$datos["id_tipo_doc"]);
			$res->bindParam(":numero_documento",$datos["documento_indentidad"]);
			$res->bindParam(":numero_telefonico",$datos["telefono"]);
			$res->bindParam(":direccion",$datos["direccion"]);
			$res->bindParam(":ocupacion",$datos["ocupacion"]);

			try{

				$res->execute();

			}catch(Exception $e){

				echo "<script>alert('Error al registrar el acudiente')</script>";
				echo "<script>history.back()</script>";

			}

		}






		//login of entrance or main 
		public function getUserAcudiente($email){
			$sql = 'SELECT * FROM clientes WHERE email=:email';
			$res = $this->conexion->prepare($sql);
			$res->bindParam(':email', $email);

			try {
				$res->execute();
			    $f = $res->fetch();
			    return $f;
			} catch (Exception $e) {
				echo "<script>alert('Error al buscar usuario!!')</script>";
				echo "<script>location.href='../views/login.php'</script>";
			}
		}

		

		public function getUserAdministrador($email){
			$sql = 'SELECT * FROM clientes WHERE email=:email';
			$res = $this->conexion->prepare($sql);
			$res->bindParam(':email', $email);

			try {
				$res->execute();
			    $f = $res->fetch();
			    return $f;
			} catch (Exception $e) {
				echo "<script>alert('Error al buscar usuario!!')</script>";
				echo "<script>location.href='../views/login.php'</script>";
			}
		}


		public function getUserEstudiente($email){
			$sql = 'SELECT * FROM clientes WHERE email=:email';
			$res = $this->conexion->prepare($sql);
			$res->bindParam(':email', $email);

			try {
				$res->execute();
			    $f = $res->fetch();
			    return $f;
			} catch (Exception $e) {
				echo "<script>alert('Error al buscar usuario!!')</script>";
				echo "<script>location.href='../views/login.php'</script>";
			}
		}


		public function getUserDirectivo($email){
			$sql = 'SELECT * FROM clientes WHERE email=:email';
			$res = $this->conexion->prepare($sql);
			$res->bindParam(':email', $email);

			try {
				$res->execute();
			    $f = $res->fetch();
			    return $f;
			} catch (Exception $e) {
				echo "<script>alert('Error al buscar usuario!!')</script>";
				echo "<script>location.href='../views/login.php'</script>";
			}
		}


		public function getUserDocente($email){
			$sql = 'SELECT * FROM clientes WHERE email=:email';
			$res = $this->conexion->prepare($sql);
			$res->bindParam(':email', $email);

			try {
				$res->execute();
			    $f = $res->fetch();
			    return $f;
			} catch (Exception $e) {
				echo "<script>alert('Error al buscar usuario!!')</script>";
				echo "<script>location.href='../views/login.php'</script>";
			}
		}



	} //CIERRE CLASE

?>