<?php
	require_once("configure.inc");
	abstract class DataObject{

		protected static function conectar(){
			try{
				$conexion = new PDO(DB_DSN, DB_USUARIO, DB_CONTRASENIA);
				$conexion->setAttribute(PDO::ATTR_PERSISTENT, true);
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e){
				die("Conexion fallida:".$e->getMessage());
		        }

			return $conexion;
		}

		protected static function desconectar($conexion){
			$conexion="";
		}
	}
?>
