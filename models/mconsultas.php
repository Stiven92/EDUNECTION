<?php

	class Consultas{

		private $conexion;

		public function __construct(){
			$cnn = new Conexion();
			$this->conexion = $cnn->get_conexion();
		}

	





	} //CIERRE CLASE

?>