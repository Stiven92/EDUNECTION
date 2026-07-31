<?php

	class Consultas{

		private $conexion;

		public function __construct(){
			$cnn = new Conexion();
			$this->conexion = $cnn->get_conexion();
		}


		//login of entrance or main 
		public function getUserUsuario($email){
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

		public function obtenerUsuarioPorCredenciales($correo, $id_rol, $id_institucion) {
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

		



	





	} //CIERRE CLASE

?>