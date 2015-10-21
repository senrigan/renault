<?php
	$user = "pruebas";
	$password = "admin";
	$dbname = "renault";
	$port = "5432";
	$host = "localhost";
	$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

	$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
	echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";

	$target_path = "userImage/";
	$target_path = $target_path . basename( $_FILES['wizard-picture']['name']); 
	$nameImage= $_FILES['wizard-picture']['name'];
	$firtName=$_POST["firstname"];
	$lastFatherName=$_POST["lastnamePatern"];
	$lastMomName=$_POST["lastnameMother"];





	if(move_uploaded_file($_FILES['wizard-picture']['tmp_name'], $target_path)) { 
		echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
	} else{
	//echo "Ha ocurrido un error, trate de nuevo!";
	}


	$query ="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' )";

	$resultado = pg_query($conexion, $query) or die("No se pudo generar registro alguno");
	$numReg = pg_num_rows($resultado);

	pg_close($conexion);

	
	
	
?>