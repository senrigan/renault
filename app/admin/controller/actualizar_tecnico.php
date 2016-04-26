<?php
	include '../model/DatabaseConectorStatic.php';
	$id_Tecnico=$_REQUEST['idTecnico'];
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$firtName=$_POST["modfirstname"];
	$lastFatherName=$_POST["modlastnamepatern"];
	$lastMomName=$_POST["modlastnamemother"];
	if (is_uploaded_file($_FILES['modwizard-picture']['tmp_name'])) {
		$local=$_SERVER['SERVER_NAME'];
		$isIP = (bool)ip2long($_SERVER['HTTP_HOST']);

		if($local=="localhost" || $isIP==true) {
			$target_path=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
		}else{
			$target_path=$_SERVER['DOCUMENT_ROOT']."/media/userImage/";

		}
		//$target_path = $_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
		$target_path = $target_path . basename( $_FILES['modwizard-picture']['name']);
		$nameImage= $_FILES['modwizard-picture']['name'];
		if( !$_FILES['modwizard-picture']['name']){
				$nameImage="static/tecnico.png";
		}
		if(move_uploaded_file($_FILES['modwizard-picture']['tmp_name'], $target_path)) {
			$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName' , imagen_perfil='$nameImage' WHERE  id=$id_Tecnico ";


		} else{
			$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName'  WHERE  id=$id_Tecnico ";

		}
	}else{
		$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName'  WHERE  id=$id_Tecnico ";

	}



	$resultado=$conector->executeQueryDefine($query,$conexion);
	pg_close($conexion);
	if($resultado){
		echo 1;
	}else{
		echo 0;
	}

	/*
	include '../model/DatabaseConectorStatic.php';
	$id_Tecnico=$_REQUEST['idTecnico'];
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();


	$firtName=$_POST["firstname"];
	$lastFatherName=$_POST["lastnamePatern"];
	$lastMomName=$_POST["lastnameMother"];

	if (is_uploaded_file($_FILES['wizard_picture']['name'])) {
		$target_path = $_SERVER['DOCUMENT_ROOT']."/media/userImage/";
		$target_path = $target_path . basename( $_FILES['wizard_picture']['name']);
		$nameImage= $_FILES['wizard_picture']['name'];
		if( !$_FILES['wizard_picture']['name']){
				$nameImage="static/tecnico.png";
		}
		if(move_uploaded_file($_FILES['wizard_picture']['tmp_name'], $target_path)) {
		echo "El archivo ". basename( $_FILES['wizard_picture']['name']). " ha sido subido";
			$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName' , imagen_perfil='$nameImage' WHERE  id=$id_Tecnico ";


		} else{
		//echo "Ha ocurrido un error, trate de nuevo!";
				$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName'  WHERE  id=$id_Tecnico ";

		}
	}else{
		$query="UPDATE  tecnicos  SET nombre='$firtName' , a_paterno='$lastFatherName' , a_materno='$lastMomName'  WHERE  id=$id_Tecnico ";

	}



	$resultado=$conector->executeQueryDefine($query,$conexion);
	pg_close($conexion);
	if($resultado){
		echo 1;
	}else{
		echo 0;
	}*/


?>
