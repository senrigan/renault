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
	$local=$_SERVER['SERVER_NAME'];
	$isIP = (bool)ip2long($_SERVER['HTTP_HOST']);
	if($local=="localhost" || $isIP==true){
		$path="/renault/media/userImage/";
		$target_path = $_SERVER['DOCUMENT_ROOT'].$path;
	}else{
		$path="/media/userImage/";
		$target_path = $local.$path;
	}
	//;

	$firtName=$_POST["firstname"];
	$lastFatherName=$_POST["lastnamePatern"];
	$lastMomName=$_POST["lastnameMother"];
	//if( $_FILES['wizard-picture']['name']){

	//echo $_POST['wizard-picture'];
	//echo "undifinido"+!isset($_POST['wizard-picture']);
	if(!isset($_POST['wizard-picture'])){
		if(is_uploaded_file($_FILES['wizard-picture']['tmp_name'])){
			$nameImage= $_FILES['wizard-picture']['name'];
				$target_path = $target_path . basename($nameImage);
				//echo $_FILES['modwizard-picture']['tmp_name'];

					if(move_uploaded_file($_FILES['wizard-picture']['tmp_name'], $target_path)) {

						//echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
						$query="SELECT * FROM tecnicos where nombre='$firtName' AND a_paterno='$lastFatherName' AND a_materno='$lastMomName' ";
						$resultado=$conector->executeQueryDefine($query,$conexion);
						$numReg = pg_num_rows($resultado);
						if($numReg==0){
							$query ="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' ) returning id";

							//$resultado = pg_query($conexion, $query) or die("No se pudo generar registro alguno");


							$resultado=$conector->executeQueryDefine($query,$conexion);
							$filas = pg_fetch_all($resultado);
							$idTecnico=$filas[0]['id'];

							$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,1)  ";
							$resultado=$conector->executeQueryDefine($query,$conexion);
							$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,2)  ";
							$resultado=$conector->executeQueryDefine($query,$conexion);

							pg_close($conexion);
							echo "1";//tecnico registrado
						}else{
							echo "0";//tecnico repetido
						}


				}

		}else{
			$nameImage="tecnico.png";
				$target_path = $target_path . basename($nameImage);
				//echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
				$query="SELECT * FROM tecnicos where nombre='$firtName' AND a_paterno='$lastFatherName' AND a_materno='$lastMomName' ";
				$resultado=$conector->executeQueryDefine($query,$conexion);
				$numReg = pg_num_rows($resultado);
				if($numReg==0){
					$query="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' ) returning id";

					//$query ="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' ) returning id";

					//$resultado = pg_query($conexion, $query) or die("No se pudo generar registro alguno");


					$resultado=$conector->executeQueryDefine($query,$conexion);
					$filas = pg_fetch_all($resultado);
					$idTecnico=$filas[0]['id'];

					$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,1)  ";
					$resultado=$conector->executeQueryDefine($query,$conexion);
					$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,2)  ";
					$resultado=$conector->executeQueryDefine($query,$conexion);

					pg_close($conexion);
					echo "1";//tecnico registrado
				}else{
					echo "0";//tecnico repetido
				}

		}

}else{
	$nameImage="tecnico.png";
		$target_path = $target_path . basename($nameImage);
		//echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
		$query="SELECT * FROM tecnicos where nombre='$firtName' AND a_paterno='$lastFatherName' AND a_materno='$lastMomName' ";
		$resultado=$conector->executeQueryDefine($query,$conexion);
		$numReg = pg_num_rows($resultado);
		if($numReg==0){
			$query="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' ) returning id";

			//$query ="INSERT INTO tecnicos VALUES (DEFAULT , '{$firtName}' , '{$lastFatherName}' , '{$lastMomName}' , '{$nameImage}' ) returning id";

			//$resultado = pg_query($conexion, $query) or die("No se pudo generar registro alguno");


			$resultado=$conector->executeQueryDefine($query,$conexion);
			$filas = pg_fetch_all($resultado);
			$idTecnico=$filas[0]['id'];

			$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,1)  ";
			$resultado=$conector->executeQueryDefine($query,$conexion);
			$query="INSERT INTO tablero_control (id,tecnico,status) VALUES(DEFAULT,$idTecnico,2)  ";
			$resultado=$conector->executeQueryDefine($query,$conexion);

			pg_close($conexion);
			echo "1";//tecnico registrado
		}else{
			echo "0";//tecnico repetido
		}

}
?>
