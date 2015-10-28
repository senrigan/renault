<?php
	include "../../admin/model/DatabaseConector.php";

	session_start();
	
	//require "funciones/funciones.php";
	//$con=conecta();
	
	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

	$conector=new DatabaseConector("pruebas","admin","renault","localhost","5432");
	$conexion=$conector->openConexion();
	//$user=trim($user);
	//$pass=trim($pass);
	$query="SELECT * FROM cuentas WHERE user='$user' AND password='$pass' ";
	echo $query;
	$resultado=$conector->executeQueryDefine($query,$conexion);

	$num=pg_num_rows($resultado);
	if($num==0){
		//usuario  invalido
		echo 0;
	}else{
		$filas = pg_fetch_all($resultado);
		$conector->closeConexionDef($conexion);
		$userName=$filas[0]['user'];
		$idUser=$filas[0]['id'];
		$_SESSION['id_user']=$id_user;
		$_SESSION['userName']=$userName;
		echo 1;
	}
	
	/*if(!$resultado){
		echo "ocurrio un error al consultar la base de datos";
		exit;
	}else{
		
		$sizeElement=sizeof($filas);
		for($i=0;$i<$sizeElement;$i++){

		}
	}
	echo 1;
	*/

	/*
	$pass_txt = md5($pass);
	$sql="SELECT * FROM usuarios WHERE email='$email' AND pass='$pass_txt' AND activo='1' AND eliminado='0' ";
	$res=mysql_query($sql,$con);
	$num=mysql_num_rows($res);
	if($num==0){
		//usaurio valido
		//
		//
		echo 0;
	} else{
		$id_user=mysql_result($res,0,"id");
		$nom_user=mysql_result($res,0, "nombre")." ".mysql_result($res,0, "apellidos");
		
		$_SESSION['id_user']=$id_user;
		$_SESSION['nom_user']=$nom_user;
		//$num=1;
		echo 1;
	}
	*/

?>