<?php
	include "../model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	//$query="DELETE FROM elemento_control";
	//$resultado=$conector->executeQueryDefine($query,$conexion);
	$idTecnico=$_REQUEST["id"];
	if(isset($idTecnico)){
		//var_dump($_REQUEST);

		$planeado=$_REQUEST["planeado"];
		$trabajando=$_REQUEST["trabajando"];
		//var_dump($id);
		//var_dump($planeado);
		//var_dump($trabajando);
		$query="UPDATE tablero_control  SET h0800=null, h0830=null, h0900=null, h0930=null,".
       "h1000=null, h1030=null, h1100=null, h1130=null, h1200=null, h1230=null, h1300=null,".
       "h1330=null, h1400=null, h1430=null, h1500=null, h1530=null, h1600=null, h1630=null,".
       "h1700=null, h1730=null, h1800=null, h1830=null, h1900=null, h1930=null, h2000=null,".
       "lavado=null, control_calidad=null, terminado=null, tot=null, partes=null, ".
       "aut=null WHERE tecnico=$idTecnico AND  (status=1 OR status=2) ";
       $resultado=$conector->executeQueryDefine($query,$conexion);

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

					case "food":
						$tipoElemento=6;
						break;
				}

				$query="INSERT INTO elemento_control VALUES (DEFAULT,$tipoElemento,'{$texto}',-1 ) returning id";
				$resultado=$conector->executeQueryDefine($query,$conexion);
				$filas = pg_fetch_all($resultado);
				if(sizeof($filas)>0){
						$idElemento=$filas[0]['id'];
						$query ="UPDATE tablero_control SET $plan=$idElemento WHERE tecnico=$idTecnico AND status=1";
						//echo "query".$query;
						$resultado=$conector->executeQueryDefine($query,$conexion);
						//echo("\n id elemento $idElemento \n");
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
					case "food":
						$tipoElemento=6;

						break;
				}
				$query="INSERT INTO elemento_control VALUES (DEFAULT,$tipoElemento,'{$texto}',-1 ) returning id";
				$resultado=$conector->executeQueryDefine($query,$conexion);
				$filas = pg_fetch_all($resultado);
				if(sizeof($filas)>0){
						$idElemento=$filas[0]['id'];
						//echo $idElemento;
						$query ="UPDATE tablero_control SET $plan=$idElemento WHERE tecnico=$idTecnico AND status=2";
						$resultado=$conector->executeQueryDefine($query,$conexion);

						//echo "query".$query;
						//echo("\n id elemento $idElemento \n");
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
