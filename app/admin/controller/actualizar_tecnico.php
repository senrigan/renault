<?php
	include '../model/DatabaseConectorStatic.php';
	$id_Tecnico=$_REQUEST['idTecnico'];
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	

	$target_path = $_SERVER['DOCUMENT_ROOT']."/media/userImage/";
	$target_path = $target_path . basename( $_FILES['wizard-picture']['name']); 
	$nameImage= $_FILES['wizard-picture']['name'];
	if( !$_FILES['wizard-picture']['name']){
			$nameImage="static/tecnico.png";	
	}
	
	$firtName=$_POST["firstname"];
	$lastFatherName=$_POST["lastnamePatern"];
	$lastMomName=$_POST["lastnameMother"];
	if(move_uploaded_file($_FILES['wizard-picture']['tmp_name'], $target_path)) { 
		echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
			$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName' , imagen_perfil='$nameImage' WHERE  id=$id_Tecnico ";


	} else{
	//echo "Ha ocurrido un error, trate de nuevo!";
			$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName'  WHERE  id=$id_Tecnico ";

	}
	$resultado=$conector->executeQueryDefine($query,$conexion);
	pg_close($conexion);
	if($resultado){
		echo 1;
	}else{
		echo 0;
	}
	
	
?>