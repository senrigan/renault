<?php
	include "../model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	

	/*
	$user = "pruebas";
	$password = "admin";
	$dbname = "renault";
	$port = "5432";
	$host = "localhost";
	$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

	$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
	*/
	
	
	$user=$_POST["user"];
	$password=$_POST["password"];
	$typecount=$_POST["typecount"];
	

	$query ="SELECT * FROM cuentas WHERE cuenta='$user' password='$password' privileges='$typecount' ";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	$numReg = pg_num_rows($resultado);
	if($numReg==0){
		$query ="INSERT INTO cuentas VALUES (DEFAULT , '{$user}' , '{$password}' , '{$typecount}'  )";

		$resultado=$conector->executeQueryDefine($query,$conexion);

		//$resultado = pg_query($conexion, $query) or die("No se pudo generar registro alguno");
		$numReg = pg_num_rows($resultado);

		pg_close($conexion);

	}else{
		echo "<script>alert('esta cuenta ya esta registrada');</script>"
	}
	

?>