<?php
	
	class basededatos{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_opstions[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			//self::$conexion=new PDO("mysql:host=localhost;dbname=tuinvest_univalleApp","tuinvest_santi","carlos*109611",$pdo_opstions);
			self::$conexion=new PDO("mysql:host=localhost;dbname=usuarios2019","root","",$pdo_opstions);
			return self::$conexion;
		}
	}
			
	
?>

