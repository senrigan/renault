<?php 
	class DatabaseConectorStat{
		static $user="root";
		static $password="root";
		static $dbname="renault";
		static $port="3906";
		static $host="localhost";
		static $conexion;
		
		/*
		static $user="iwxdbrzwzwmcvq";
		static $password="lekuhNVuNVpk42jhFTQXuXTzwQ";
		static $dbname="dcv72crt7q7fa1";
		static $port="5432";
		static $host="ec2-54-83-36-203.compute-1.amazonaws.com";
		static $conexion;
		*/
		public function __construct(){
			
		}

		public function closeConexion(){
			//pg_close(self::$conexion);
			//mysql_close(self::$conexion);
			mysqli_close(self::$conexion);
		}

		public function closeConexionDef($conect){
			//pg_close($conect);
			//mysql_close($conect);
			mysqli_close($conect);

		}

		public function openConexion(){
			/*$cadenaConexion = "host=".self::$host." port=".self::$port." dbname=".self::$dbname." user=".self::$user." password=".self::$password."";
			*/
			//return pg_connect($cadenaConexion) ;
			//return mysql_connect($cadenaConexion);
			 $mysqli = new mysqli(self::$host.":".self::$port, self::$user, self::$password, self::$dbname);

			return $mysqli;
			//return 	mysqli_connect($cadenaConexion);

		}	


		public function executeQuery($query){
			//return pg_query(self::$conexion , $query);
			//return mysql_query(self::$conexion,$query); 
			return 	mysqli_query(self::$conexion,$query);

		}


		public function executeQueryDefine($query , $conect){
			//return pg_query($conect, $query);
			//return mysql_query($conect,$query);
			return 	mysqli_query($conect,$query);

		}	
	}

?>