<?php
	//include "../../admin/model/DatabaseConector.php";
	include "../../admin/model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$query="SELECT * FROM  cuentas ";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	//$filas = pg_fetch_all($resultado);
	
	//$sizeElement=sizeof($filas);
	session_start();
	
	//require "funciones/funciones.php";
	//$con=conecta();
	
	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];

	/*$conector=new DatabaseConector("pruebas","admin","renault","localhost","5432");
	$conexion=$conector->openConexion();
	$user=trim($user);
	$pass=trim($pass);
	//$query="SELECT * FROM cuentas WHERE user='$user' AND password='$pass' ";
	$query="SELECT * FROM cuentas  ";

	$resultado=$conector->executeQueryDefine($query,$conexion);
	*/
	$num=pg_num_rows($resultado);
	$result=0;
	if($num==0){
		//usuario  invalido
		echo $result;
	}else{
		$filas = pg_fetch_all($resultado);
		$conector->closeConexionDef($conexion);
		for($i=0;$i<$num;$i++){
			$userName=$filas[$i]['cuenta'];
			$idUser=$filas[$i]['id'];
			$privileges=$filas[$i]['privileges'];
			$password=$filas[$i]['password'];
			if(strcmp($userName,$user)==0 && strcmp($pass,$password)==0){
				$_SESSION['id_user']=$idUser;
				$_SESSION['userName']=$userName;
				$_SESSION['typecount']=$privileges;
				if($privileges==1){
					header("location : view/tablero.php");
					$result= 1;


				}else if($privileges==2){
					header("location : ../../admin/index.html");
					$result=2;
				}
			}
		}
		
		
	}
	$conector->closeConexionDef($conexion);
	echo $result;
	
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