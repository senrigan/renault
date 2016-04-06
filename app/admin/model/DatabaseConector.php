<?php 
	class DatabaseConector{
		var $user;
		var $password;
		var $dbname;
		var $port;
		var $host;
		var $conexion;

		public function __construct($user,$password,$dbname,$host,$port){
			$this->user=$user;
			$this->password=$password;
			$this->dbname=$dbname;
			$this->port=$port;
			$this->host=$host;
		}

		public function closeConexion(){
			pg_close($this->conexion);
		}

		public function closeConexionDef($conect){
			pg_close($conect);
		}

		public function openConexion(){
			$cadenaConexion = "host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->password";
			return pg_connect($cadenaConexion) ;
		}	


		public function executeQuery($query){
			return pg_query($this->conexion , $query);
		}


		public function executeQueryDefine($query , $conect){
			return pg_query($conect, $query);
		}	
	}

?>