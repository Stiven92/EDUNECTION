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

		



	





	} //CIERRE CLASE

?>