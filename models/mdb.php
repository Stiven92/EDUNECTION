<?php 

	session_start();

	class Conexion{
		public function get_conexion(){

			$host = "localhost";
			$db = "automarket";
			$user = "root"; 
			$pass = "";

			try{
				$conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
				// echo "<script>alert('Conectado a la base de datos')</script>";
				return $conexion;
			}catch (Exception $e){
				echo 'No se pudo conectar a la BD';
			}

		}
	}

 ?>