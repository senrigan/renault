<?php
	include "../model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	



	/*$user = "pruebas";
	$password = "admin";
	$dbname = "renault";
	$port = "5432";
	$host = "localhost";
	$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

	$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
	*/
	$target_path = $_SERVER['DOCUMENT_ROOT']."/renault/media/userImage/";
	$target_path = $target_path . basename( $_FILES['wizard-picture']['name']); 
	if( $_FILES['wizard-picture']['name']){
		$nameImage= $_FILES['wizard-picture']['name'];	
	}else{
		$nameImage="tecnico.png";
	}
	
	$firtName=$_POST["firstname"];
	$lastFatherName=$_POST["lastnamePatern"];
	$lastMomName=$_POST["lastnameMother"];
	if(move_uploaded_file($_FILES['wizard-picture']['tmp_name'], $target_path)) { 
		//echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
		$query="SELECT * FROM tecnicos where nombre='$firtName' AND a_paterno='$lastFatherName' AND a_materno='$lastMomName' ";
		$resultado=$conector->executeQueryDefine($query,$conexion);
		$numReg = pg_num_rows($resultado);
		if($numReg==0){
			$query ="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' ) returning id_tecnico";

			//$resultado = pg_query($conexion, $query) or die("No se pudo generar registro alguno");
			

			$resultado=$conector->executeQueryDefine($query,$conexion);
			$filas = pg_fetch_all($resultado);
			$idTecnico=$filas[0]['id_tecnico'];
			
			$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,1)  ";
			$resultado=$conector->executeQueryDefine($query,$conexion);
			$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,2)  ";
			$resultado=$conector->executeQueryDefine($query,$conexion);

			pg_close($conexion);
		}else{
			echo "<javascript>alert('este tecnico ya esta registrado')</javascript>";
		}
	} else{

		echo "Ha ocurrido un error, trate de nuevo!";
	}

	
	

	
	
	
?>