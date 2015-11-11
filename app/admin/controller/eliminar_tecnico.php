<?php
	function tieneElemento($registro){
		if(isset($registro) || $registro==""){
			return false;
		}else{
			return true;	
		}
		
	}
	include '../model/DatabaseConectorStatic.php';
	$id_Tecnico=$_REQUEST['idTecnico'];
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	
	$firtName=$_POST["firstname"];
	$lastFatherName=$_POST["lastnamePatern"];
	$lastMomName=$_POST["lastnameMother"];
	
	$query="SELECT * FROM tablero_control where idEmpleado=$id_Tecnico";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	$filas = pg_fetch_all($resultado);
	$sizeElement=sizeof($filas);
	$borrable=true;
	for($i=0;$i<$sizeElement;$i++){
			$status=$filas[$i]["statusTrabajo"];
			$h0800=$filas[$i]["h0800"];
			$h0830=$filas[$i]["h0830"];
			$h0900=$filas[$i]["h0900"];
			$h0930=$filas[$i]["h0930"];
			$h1000=$filas[$i]["h1000"];
			$h1030=$filas[$i]["h1030"];
			$h1100=$filas[$i]["h1100"];
			$h1130=$filas[$i]["h1130"];
			$h1200=$filas[$i]["h1200"];
			$h1230=$filas[$i]["h1230"];
			$h1300=$filas[$i]["h1300"];
			$h1330=$filas[$i]["h1330"];
			$h1400=$filas[$i]["h1400"];
			$h1430=$filas[$i]["h1430"];
			$h1500=$filas[$i]["h1500"];
			$h1530=$filas[$i]["h1530"];
			$h1600=$filas[$i]["h1600"];
			$h1630=$filas[$i]["h1630"];
			$h1700=$filas[$i]["h1700"];
			$h1730=$filas[$i]["h1730"];
			$h1800=$filas[$i]["h1800"];
			$h1830=$filas[$i]["h1830"];
			$h1900=$filas[$i]["h1900"];
			$lavado=$filas[$i]["lavado"];
			$control_calida=$filas[$i]["control_calidad"];
			$terminado=$filas[$i]["terminado"];
			$Tot=$filas[$i]["ToT"];
			$partes=$filas[$i]["partes"];
			$AUT=$filas[$i]["AUT"];

			if(tieneElemento($h0800) ||
				tieneElemento($h0830) ||
				tieneElemento($h0900) ||
				tieneElemento($h0930) ||
				tieneElemento($h1000) ||
				tieneElemento($h1030) ||
				tieneElemento($h1100) ||
				tieneElemento($h1130) ||
				tieneElemento($h1200) ||
				tieneElemento($h1230) ||
				tieneElemento($h1300) ||
				tieneElemento($h1330) ||
				tieneElemento($h1400) ||
				tieneElemento($h1430) ||
				tieneElemento($h1500) ||
				tieneElemento($h1530) ||
				tieneElemento($h1600) ||
				tieneElemento($h1630) ||
				tieneElemento($h1700) ||
				tieneElemento($h1730) ||
				tieneElemento($h1800) ||
				tieneElemento($h1830) ||
				tieneElemento($h1900) ||
				tieneElemento($lavado) ||
				tieneElemento($control_calidad) ||
				tieneElemento($terminado) ||
				tieneElemento($ToT) ||
				tieneElemento($partes) ||
				tieneElemento($AUT)){
				$borrable=false;
				break;
			}
	}
	if($borrable){
		$query="DELETE FROM tecnicos WHERE id_tecnico=$id_Tecnico";
		$resultado=$conector->executeQueryDefine($query,$conexion);

		pg_close($conexion);
		if($resultado){
			echo "el tecnico fue borrado satisfactoriamente";
		}else{
			echo "el tecnico no puede ser borrado";
		}
	}else{
		echo "el tecnico tiene trabajos pendientes  es neceario eliminar sus trabajos "
	}
	
	
	
	
?>