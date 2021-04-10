<?php  
	class conexion{
		public function conectar(){
			$conexion = new PDO("mysql:host=localhost;dbname=pdof","root","");
			return $conexion;
		}
	}
?>