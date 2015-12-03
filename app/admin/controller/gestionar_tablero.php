<?php
	include "../model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();

	$idTecnico=$_REQUEST["id"];
	if(isset($idTecnico)){
		var_dump($_REQUEST);

		$planeado=$_REQUEST["planeado"];
		$trabajando=$_REQUEST["trabajando"];
		//var_dump($id);
		//var_dump($planeado);
		//var_dump($trabajando);
		echo "////////////";
		foreach ($planeado as $plan => $value) {
			if($value!="-"){
				$tipoElemento=$value["id"];
				$texto=$value["text"];
				
				echo "$plan $tipoElemento $texto \n ";
				switch ($tipoElemento) {
					case 'blue':
						$tipoElemento=1;
						break;
					
					case "white":
						$tipoElemento=2;
						break;
					case "yellow":
						$tipoElemento=3;
						break;
					case "red":
						$tipoElemento=4;
						break;
					case "birthday":
						$tipoElemento=5;
						break;
						$tipoElemento=6;
					case "food":
						break;
				}
				$query="INSERT INTO elemento_control VALUES (DEFAULT,$tipoElemento,'{$texto}',-1 ) returning id";
				$resultado=$conector->executeQueryDefine($query,$conexion);
				$filas = pg_fetch_all($resultado);
				if(sizeof($filas)>0){
						$idElemento=$filas[0]['id'];
						echo("\n id elemento $idElemento \n");
				}else{
					echo "hubo error al insertar elemento de control";
				}

			}
		}
		foreach ($trabajando as $plan => $value) {
			if($value!="-"){
				$tipoElemento=$value["id"];
				$texto=$value["text"];
				echo "$plan $tipoElemento $texto \n ";
				switch ($tipoElemento) {
					case 'blue':
						# code...
						$tipoElemento=1;
						break;
					
					case "white":
						$tipoElemento=2;
						break;
					case "yellow":
						$tipoElemento=3;
						break;
					case "red":
						$tipoElemento=4;
						break;
					case "birthday":
						$tipoElemento=5;
						break;
						$tipoElemento=6;
					case "food":
						break;
				}
				$query="INSERT INTO elemento_control VALUES (DEFAULT,$tipoElemento,'{$texto}',-1 ) returning id";
				$resultado=$conector->executeQueryDefine($query,$conexion);
				$filas = pg_fetch_all($resultado);
				if(sizeof($filas)>0){
						$idElemento=$filas[0]['id'];
						echo("\n id elemento $idElemento \n");
				}else{
					echo "hubo error al insertar elemento de control";
				}



			}
		}
		
	}else{
		echo "hubo error";
	}
	/*$json = file_get_contents('php://input');
	$data=json_decode($json);  
	echo $data;
	*/
	//var_dump($obj);
?>