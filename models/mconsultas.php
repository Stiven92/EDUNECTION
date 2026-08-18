<?php

class Consultas
{

	private $conexion;

	public function __construct()
	{
		$cnn = new Conexion();
		$this->conexion = $cnn->get_conexion();
	}

//para el login ------------------------------------------------------------------- 
	public function getUserUsuario($correo){
		
		$sql = 'SELECT * FROM usuario WHERE correo=:correo ';
		$res = $this->conexion->prepare($sql);
		$res->bindParam(':correo', $correo);
			
		try {
			$res->execute();
		    $f = $res->fetch();
		    return $f;
		} catch (Exception $e) {
		echo "<script>alert('Error al buscar usuario!!')</script>";
		echo "<script>location.href='../views/login.php'</script>";
		}
	}

	


	//guradar la inastitucion------------------------------------------------------------------- 
	public function saveInstitucion($nombre_institucion, $codigo_dane_nit, $tipo_sector, $departamento, $municipio, $direccion, $telefono_institucional, $correo_institucional, $jornadas, $logo) {
	    try {
	        $sql = "INSERT INTO institucion (
	                    nombre,
	                    codigo_dane,
	                    direccion,
	                    id_departamento,
	                    id_municipio,
	                    numero_telefonico,
	                    correo,
	                    fecha_registro,
	                    logo
	                ) VALUES (
	                    :nombre,
	                    :codigo_dane,
	                    :direccion,
	                    :id_departamento,
	                    :id_municipio,
	                    :numero_telefonico,
	                    :correo,
	                    CURDATE(),
	                    :logo
	                )";

	        $res = $this->conexion->prepare($sql);

	        $res->bindParam(":nombre", $nombre_institucion);
	        $res->bindParam(":codigo_dane", $codigo_dane_nit);
	        $res->bindParam(":direccion", $direccion);
	        $res->bindValue(":id_departamento", (int)$departamento, PDO::PARAM_INT);
	        $res->bindValue(":id_municipio", (int)$municipio, PDO::PARAM_INT);
	        $res->bindParam(":numero_telefonico", $telefono_institucional);
	        $res->bindParam(":correo", $correo_institucional);
	        $res->bindParam(":logo", $logo);

	        $res->execute();

	        $id_institucion = $this->conexion->lastInsertId();

	        if ($id_institucion && !empty($jornadas)) {
	            $sqlJornada = "INSERT INTO institucion_jornada (id_institucion, id_jornada) VALUES (:id_institucion, :id_jornada)";
	            $stmtJornada = $this->conexion->prepare($sqlJornada);
	            $stmtJornada->execute([
	                ':id_institucion' => $id_institucion,
	                ':id_jornada'     => (int)$jornadas
	            ]);
	        }

	        return true;

	    } catch (PDOException $e) {
	        return false;
	    }
	}




	public function registrarUsuario($correo, $password, $id_perfil, $id_institucion)
	{

		// Verificar si el correo ya existe
		$sql = 'SELECT correo FROM usuario WHERE correo = :correo';
		$res = $this->conexion->prepare($sql);
		$res->bindParam(':correo', $correo);

		try {

			$res->execute();
			$existe = $res->fetch();

			if ($existe) {

				echo "<script>alert('El correo electrónico ya se encuentra registrado.')</script>";
				echo "<script>history.back()</script>";
				exit();

			} else {

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


	public function registrarAdministrador($idUsuario, $datos)
	{

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

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);

		try {

			$res->execute();

		} catch (Exception $e) {

			echo "<script>alert('Error al registrar el administrador')</script>";
			echo "<script>history.back()</script>";

		}

	}


	public function registrarDirectivo($idUsuario, $datos)
	{

		$sql = "INSERT INTO directivo
		            (
		                id_usuario,
		                id_institucion,
		                nombres,
		                apellidos,
		                id_tipo_documento,
		                numero_documento,
		                numero_telefonico,
		                cargo,
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
		                :cargo,
		                :id_eps,
		                :id_tipo_sangre
		            )";

		$res = $this->conexion->prepare($sql);

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);
		$res->bindParam(":cargo", $datos["cargo"]);
		$res->bindParam(":id_eps", $datos["id_eps"]);
		$res->bindParam(":id_tipo_sangre", $datos["tipo_sangre"]);

		try {

			$res->execute();

		} catch (Exception $e) {

			echo "<script>alert('Error al registrar el directivo');</script>";
			echo "<script>history.back();</script>";

		}

	}


	public function registrarDocente($idUsuario, $datos)
	{

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

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);
		$res->bindParam(":especialidad", $datos["especialidad"]);
		$res->bindParam(":id_eps", $datos["id_eps"]);
		$res->bindParam(":id_tipo_sangre", $datos["tipo_sangre"]);

		try {

			$res->execute();
			return true;

		} catch (Exception $e) {

			echo "<script>
		                alert('Error al registrar Docente');
		                history.back();
		              </script>";

			return false;


		}

	}


	public function registrarMatricula($idUsuario, $datos)
	{

		// Buscar el año lectivo activo
		$sql = "SELECT id_anio_lectivo
		            FROM anio_lectivo
		            WHERE id_institucion = :institucion
		            AND estado = 'Activo'
		            LIMIT 1";

		$res = $this->conexion->prepare($sql);
		$res->bindParam(":institucion", $datos["id_institucion"]);

		try {

			$res->execute();
			$anio = $res->fetch(PDO::FETCH_ASSOC);

			if (!$anio) {

				echo "<script>
		                    alert('No existe un año lectivo activo para esta institución');
		                    history.back();
		                  </script>";
				exit();

			}

			// Campos opcionales
			$idCurso = null;

			if (isset($datos["id_curso"]) && $datos["id_curso"] != "") {
				$idCurso = $datos["id_curso"];
			}

			$observaciones = !empty($datos["observaciones"])
				? $datos["observaciones"]
				: null;

			$sql = "INSERT INTO matricula
		                (
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
		                VALUES
		                (
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

			$res->bindParam(":id_usuario", $idUsuario);
			$res->bindParam(":id_institucion", $datos["id_institucion"]);
			$res->bindParam(":nombres", $datos["nombre"]);
			$res->bindParam(":apellidos", $datos["apellido"]);
			$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
			$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
			$res->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"]);
			$res->bindParam(":id_sexo", $datos["sexo"]);
			$res->bindParam(":direccion", $datos["direccion"]);
			$res->bindParam(":id_municipio", $datos["id_municipio"]);
			$res->bindParam(":id_zona", $datos["id_zona"]);
			$res->bindParam(":numero_telefonico", $datos["telefono"]);
			$res->bindParam(":id_eps", $datos["id_eps"]);
			$res->bindParam(":id_tipo_sangre", $datos["tipo_sangre"]);
			$res->bindParam(":id_anio_lectivo", $anio["id_anio_lectivo"]);
			$res->bindParam(":id_grado", $datos["id_grado"]);

			$res->bindValue(":id_curso", $idCurso, is_null($idCurso) ? PDO::PARAM_NULL : PDO::PARAM_INT);
			$res->bindValue(":observaciones", $observaciones, is_null($observaciones) ? PDO::PARAM_NULL : PDO::PARAM_STR);

			$res->execute();

			return true;

		} catch (Exception $e) {

			echo "<script>
		                alert('Error al registrar la matrícula');
		                history.back();
		              </script>";

			return false;

		}

	}


	public function registrarAcudiente($idUsuario, $datos)
	{

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

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);
		$res->bindParam(":direccion", $datos["direccion"]);
		$res->bindParam(":ocupacion", $datos["ocupacion"]);

		try {

			$res->execute();

		} catch (Exception $e) {

			echo "<script>alert('Error al registrar el acudiente')</script>";
			echo "<script>history.back()</script>";

		}

	}





	public function registrarUsuarioMasivo($correo, $password, $id_perfil, $id_institucion){

	    // Verificar si el correo ya existe
	    $sql = "SELECT correo FROM usuario WHERE correo = :correo";

	    $res = $this->conexion->prepare($sql);
	    $res->bindParam(":correo", $correo);

	    try{

	        $res->execute();

	        $existe = $res->fetch();

	        if($existe){

	            echo "<script>alert('Error, correos ya registrados en el sistema')</script>";
				echo "<script>history.back()</script>";
				exit();

	        }

	        // Registrar usuario
	        $sql = "INSERT INTO usuario
	                (
	                    id_institucion,
	                    id_rol,
	                    correo,
	                    password
	                )
	                VALUES
	                (
	                    :id_institucion,
	                    :id_rol,
	                    :correo,
	                    :password
	                )";

	        $res = $this->conexion->prepare($sql);

	        $res->bindParam(":id_institucion",$id_institucion);
	        $res->bindParam(":id_rol",$id_perfil);
	        $res->bindParam(":correo",$correo);
	        $res->bindParam(":password",$password);

			try {

				$res->execute();

				// Devuelve el ID del usuario recién registrado
				return $this->conexion->lastInsertId();

				} catch (Exception $e) {

					echo "<script>alert('Error al registrar usuarioss.')</script>";
					echo "<script>history.back()</script>";
					exit();

				}

		}catch (Exception $e) {

			echo "<script>alert('Error al validar la información de los usuarios.')</script>";
			echo "<script>history.back()</script>";
			exit();
		}

	}


	public function registrarAdministradorMasivo($idUsuario,$datos){

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
	        echo "<script>alert('Carga masiva de Administradores exitosa!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

	    }catch(Exception $e){

	        echo "<script>alert('Error al realizar carga masiva!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

	    }

	}


	public function registrarDirectivoMasivo($idUsuario, $datos){

		$sql = "INSERT INTO directivo
		            (
		                id_usuario,
		                id_institucion,
		                nombres,
		                apellidos,
		                id_tipo_documento,
		                numero_documento,
		                numero_telefonico,
		                cargo,
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
		                :cargo,
		                :id_eps,
		                :id_tipo_sangre
		            )";

		$res = $this->conexion->prepare($sql);

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);
		$res->bindParam(":cargo", $datos["cargo"]);
		$res->bindParam(":id_eps", $datos["id_eps"]);
		$res->bindParam(":id_tipo_sangre", $datos["tipo_sangre"]);

		try {

			$res->execute();
			echo "<script>alert('Carga masiva de Directivos exitosa!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

		} catch (Exception $e) {

	        echo "<script>alert('Error al realizar carga masiva!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";
		}

	}


	public function registrarDocenteMasivo($idUsuario, $datos)
	{

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

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);
		$res->bindParam(":especialidad", $datos["especialidad"]);
		$res->bindParam(":id_eps", $datos["id_eps"]);
		$res->bindParam(":id_tipo_sangre", $datos["tipo_sangre"]);

		try {

			$res->execute();
			echo "<script>alert('Carga masiva de Docentes exitosa!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

		} catch (Exception $e) {

	        echo "<script>alert('Error al realizar carga masiva!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";
		}


	}


	public function registrarMatriculaMasiva($idUsuario, $datos)
	{

		// Buscar el año lectivo activo
		$sql = "SELECT id_anio_lectivo
		            FROM anio_lectivo
		            WHERE id_institucion = :institucion
		            AND estado = 'Activo'
		            LIMIT 1";

		$res = $this->conexion->prepare($sql);
		$res->bindParam(":institucion", $datos["id_institucion"]);

		try {

			$res->execute();
			$anio = $res->fetch(PDO::FETCH_ASSOC);

			if (!$anio) {

		        echo "<script>alert('No existe un año lectivo activo para esta institución')</script>";
				echo "<script>location.href='../views/admin/registrar.php'</script>";
				exit();

			}

			// Campos opcionales
			$idCurso = null;

			if (isset($datos["id_curso"]) && $datos["id_curso"] != "") {
				$idCurso = $datos["id_curso"];
			}

			$observaciones = !empty($datos["observaciones"])
				? $datos["observaciones"]
				: null;

			$sql = "INSERT INTO matricula
		                (
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
		                VALUES
		                (
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

			$res->bindParam(":id_usuario", $idUsuario);
			$res->bindParam(":id_institucion", $datos["id_institucion"]);
			$res->bindParam(":nombres", $datos["nombre"]);
			$res->bindParam(":apellidos", $datos["apellido"]);
			$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
			$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
			$res->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"]);
			$res->bindParam(":id_sexo", $datos["sexo"]);
			$res->bindParam(":direccion", $datos["direccion"]);
			$res->bindParam(":id_municipio", $datos["id_municipio"]);
			$res->bindParam(":id_zona", $datos["id_zona"]);
			$res->bindParam(":numero_telefonico", $datos["telefono"]);
			$res->bindParam(":id_eps", $datos["id_eps"]);
			$res->bindParam(":id_tipo_sangre", $datos["tipo_sangre"]);
			$res->bindParam(":id_anio_lectivo", $anio["id_anio_lectivo"]);
			$res->bindParam(":id_grado", $datos["id_grado"]);

			$res->bindValue(":id_curso", $idCurso, is_null($idCurso) ? PDO::PARAM_NULL : PDO::PARAM_INT);
			$res->bindValue(":observaciones", $observaciones, is_null($observaciones) ? PDO::PARAM_NULL : PDO::PARAM_STR);

			$res->execute();

			echo "<script>alert('Carga masiva de Matrículas exitosa!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

		} catch (Exception $e) {

			echo "<script>alert('Error al realizar carga masiva!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

		}

	}


	public function registrarAcudienteMasivo($idUsuario, $datos)
	{

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

		$res->bindParam(":id_usuario", $idUsuario);
		$res->bindParam(":id_institucion", $datos["id_institucion"]);
		$res->bindParam(":nombres", $datos["nombre"]);
		$res->bindParam(":apellidos", $datos["apellido"]);
		$res->bindParam(":id_tipo_documento", $datos["id_tipo_doc"]);
		$res->bindParam(":numero_documento", $datos["documento_indentidad"]);
		$res->bindParam(":numero_telefonico", $datos["telefono"]);
		$res->bindParam(":direccion", $datos["direccion"]);
		$res->bindParam(":ocupacion", $datos["ocupacion"]);

		try {

			$res->execute();
			echo "<script>alert('Carga masiva de Acudientes exitosa!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";

		} catch (Exception $e) {

	        echo "<script>alert('Error al realizar carga masiva!!')</script>";
			echo "<script>location.href='../views/admin/registrar.php'</script>";
		}


	}


	public function obtenerUsuario($idUsuario){

	    $sql = "SELECT
	                u.id_usuario,
	                u.id_institucion,
	                i.nombre AS institucion,
	                u.id_rol,
	                r.nombre AS rol,
	                u.correo,
	                u.estado,
	                u.fecha_creacion

	            FROM usuario u

	            INNER JOIN institucion i
	                ON u.id_institucion = i.id_institucion

	            INNER JOIN rol r
	                ON u.id_rol = r.id_rol

	            WHERE u.id_usuario = :id_usuario";

	    $stmt = $this->conexion->prepare($sql);

	    $stmt->bindParam(
	        ':id_usuario',
	        $idUsuario,
	        PDO::PARAM_INT
	    );

	    $stmt->execute();

	    return $stmt->fetch(PDO::FETCH_ASSOC);
	}


	public function obtenerAdministrador($idUsuario){

	    $sql = "SELECT
	                u.id_usuario,
	                u.correo,
	                u.estado,
	                u.fecha_creacion,

	                i.nombre AS institucion,

	                r.nombre AS rol,

	                a.id_administrador,
	                a.nombres AS nombre,
	                a.apellidos AS apellido,
	                a.id_tipo_documento,
	                td.nombre AS tipo_documento,
	                a.numero_documento AS documento,
	                a.numero_telefonico AS telefono

	            FROM usuario u

	            INNER JOIN administrador a
	                ON u.id_usuario = a.id_usuario

	            LEFT JOIN institucion i
	                ON u.id_institucion = i.id_institucion

	            LEFT JOIN rol r
	                ON u.id_rol = r.id_rol

	            LEFT JOIN tipo_documento td
	                ON a.id_tipo_documento = td.id_tipo_documento

	            WHERE u.id_usuario = :id_usuario";

	    $stmt = $this->conexion->prepare($sql);

	    $stmt->bindParam(':id_usuario', $idUsuario, PDO::PARAM_INT);

	    $stmt->execute();

	    return $stmt->fetch(PDO::FETCH_ASSOC);
	}


	public function obtenerDirectivo($idUsuario){

	    $sql = "SELECT
	                u.id_usuario,
	                u.correo,
	                u.estado,
	                u.fecha_creacion,

	                i.nombre AS institucion,

	                r.nombre AS rol,

	                d.id_directivo,
	                d.nombres AS nombre,
	                d.apellidos AS apellido,

	                d.id_tipo_documento,
	                td.nombre AS tipo_documento,

	                d.numero_documento AS documento,
	                d.numero_telefonico AS telefono,

	                d.cargo,

	                d.id_eps,
	                e.nombre AS eps,

	                d.id_tipo_sangre,
	                ts.tipo AS tipo_sangre

	            FROM usuario u

	            INNER JOIN directivo d
	                ON u.id_usuario = d.id_usuario

	            LEFT JOIN institucion i
	                ON u.id_institucion = i.id_institucion

	            LEFT JOIN rol r
	                ON u.id_rol = r.id_rol

	            LEFT JOIN tipo_documento td
	                ON d.id_tipo_documento = td.id_tipo_documento

	            LEFT JOIN eps e
	                ON d.id_eps = e.id_eps

	            LEFT JOIN tipo_sangre ts
	                ON d.id_tipo_sangre = ts.id_tipo_sangre

	            WHERE u.id_usuario = :id_usuario";

	    $stmt = $this->conexion->prepare($sql);

	    $stmt->bindParam(':id_usuario', $idUsuario, PDO::PARAM_INT);

	    $stmt->execute();

	    return $stmt->fetch(PDO::FETCH_ASSOC);
	}















	public function obtenerUsuarioPorCredenciales($correo, $id_rol, $id_institucion)
	{
		// Ejemplo usando PDO con sentencias preparadas
		$sql = "SELECT u.*, i.estado AS estado_institucion 
		            FROM usuario u
		            INNER JOIN institucion i ON u.id_institucion = i.id_institucion
		            WHERE u.correo = :correo 
		              AND u.id_rol = :id_rol 
		              AND u.id_institucion = :id_institucion
		              AND u.estado = 'Activo'
		              AND i.estado = 'Activa'";

		$stmt = $this->conexion->prepare($sql);
		$stmt->bindParam(':correo', $correo);
		$stmt->bindParam(':id_rol', $id_rol);
		$stmt->bindParam(':id_institucion', $id_institucion);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}


	//para quitar los datos quemados

	// En mconsultas.php


	public function obtenerDepartamentos()
	{
		$sql = "SELECT id_departamento, nombre FROM departamento";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}



	public function obtenerjornada()
	{
		$sql = "SELECT id_jornada, nombre FROM jornada";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


	public function obtenerInstituciones()
	{
		$sql = "SELECT * FROM institucion WHERE estado = 'Activa'";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}



	public function obtenerRoles()
	{
		$sql = "SELECT id_rol, nombre FROM rol";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerTiposDocumento()
	{
		$sql = "SELECT id_tipo_documento, nombre, abreviatura FROM tipo_documento";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerSexos()
	{
		$sql = "SELECT id_sexo, nombre FROM sexo";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerTiposSangre()
	{
		$sql = "SELECT id_tipo_sangre, tipo FROM tipo_sangre";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerMunicipios()
	{
		$sql = "SELECT id_municipio, nombre FROM municipio";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerZonas()
	{
		$sql = "SELECT id_zona, nombre FROM zona";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerEPS()
	{
		$sql = "SELECT id_eps, nombre FROM eps";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerAniosLectivos()
	{
		$sql = "SELECT id_anio_lectivo, anio FROM anio_lectivo WHERE estado = 'Activo'";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerGrados()
	{
		$sql = "SELECT id_grado, id_nivel_educativo, nombre FROM grado";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerCursos()
	{
		$sql = "SELECT id_curso, nombre FROM curso";
		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function obtenerListaUsuarios()
	{
		$sql = "SELECT 
                u.id_usuario, 
                u.correo, 
                u.fecha_creacion, 
                u.estado,
                r.nombre AS rol, 
                i.nombre AS institucion
            FROM usuario u
            INNER JOIN rol r ON u.id_rol = r.id_rol
            INNER JOIN institucion i ON u.id_institucion = i.id_institucion
            ORDER BY u.id_usuario DESC";

		$stmt = $this->conexion->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

//descarga del reporte
public function obtenerReporteUsuariosPlano() {
    $sql = "SELECT 
                u.id_usuario, 
                u.correo, 
                r.nombre AS rol, 
                i.nombre AS institucion,
                u.estado,
                u.fecha_creacion
            FROM usuario u
            INNER JOIN rol r ON u.id_rol = r.id_rol
            INNER JOIN institucion i ON u.id_institucion = i.id_institucion
            ORDER BY u.id_usuario DESC";

    $stmt = $this->conexion->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}



} //CIERRE CLASE

?>