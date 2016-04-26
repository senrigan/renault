<?php
	class DatabaseConectorStat{
		/*static $user="pruebas";
		static $password="admin";
		static $dbname="renault";
		static $port="5432";
		static $host="localhost";
		static $conexion;
		*/

		static $user="iwxdbrzwzwmcvq";
		static $password="lekuhNVuNVpk42jhFTQXuXTzwQ";
		static $dbname="dcv72crt7q7fa1";
		static $port="5432";
		static $host="ec2-54-83-36-203.compute-1.amazonaws.com";
		static $conexion;

		function DatabaseConectorStat(){
			$local=$_SERVER['SERVER_NAME'];
				$isIP = (bool)ip2long($_SERVER['HTTP_HOST']);
			 if($local=="localhost" || $isIp==true){

				self::$user="pruebas";
				self::$password="admin";
				self::$dbname="renault";
				self::$port="5432";
				self::$host="localhost";

			 }else{

				self::$user="iwxdbrzwzwmcvq";
				self::$password="lekuhNVuNVpk42jhFTQXuXTzwQ";
				self::$dbname="dcv72crt7q7fa1";
				self::$port="5432";
				self::$host="ec2-54-83-36-203.compute-1.amazonaws.com";

			  }
		}

		public function closeConexion(){
			pg_close(self::$conexion);
		}

		public function closeConexionDef($conect){
			pg_close($conect);
		}

		public function openConexion(){
			$cadenaConexion = "host=".self::$host." port=".self::$port." dbname=".self::$dbname." user=".self::$user." password=".self::$password."";
			return pg_connect($cadenaConexion) ;
		}


		public function executeQuery($query){
			return pg_query(self::$conexion , $query);
		}


		public function executeQueryDefine($query , $conect){
			return pg_query($conect, $query);
		}
	}

?>
