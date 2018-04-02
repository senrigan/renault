<?php
	//include "../../admin/model/DatabaseConector.php";
	include "../../admin/model/DatabaseConectorStatic.php";
	$user=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$query="SELECT * FROM  cuentas where cuenta like '".$user."'";
	//echo "query".$query." <br>";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	//$filas = pg_fetch_all($resultado);
	
	//$sizeElement=sizeof($filas);
	session_start();
	
	//require "funciones/funciones.php";
	//$con=conecta();
	
	

	/*$conector=new DatabaseConector("pruebas","admin","renault","localhost","5432");
	$conexion=$conector->openConexion();
	$user=trim($user);
	$pass=trim($pass);
	//$query="SELECT * FROM cuentas WHERE user='$user' AND password='$pass' ";
	$query="SELECT * FROM cuentas  ";

	$resultado=$conector->executeQueryDefine($query,$conexion);
	*/
	//$num=pg_num_rows($resultado);
	$num=mysqli_num_rows($resultado);
	//echo "numr rows ".$num;
	$result=0;
	if($num==0){
		//usuario  invalido
		echo $result;
	}else{
		//$filas = pg_fetch_all($resultado);
		//$filas =mysqli_fetch_all($resultado,MYSQLI_ASSOC);
		//$filas =mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		//$filas = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		$rows=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
		foreach ($rows as $key => $value) {
			$userName=$value['cuenta'];
			$idUser=$value['id'];
			$privileges=$value['privileges'];
			$password=$value['password'];
			//echo "username".$userName." ".strcmp($userName,$user)."<br>";
			//echo "password ".$password." ".strcmp($pass,$password)."<br>";
			if(strcmp($userName,$user)==0 && strcmp($pass,$password)==0){
				$_SESSION['id_user']=$idUser;
				$_SESSION['userName']=$userName;
				$_SESSION['typecount']=$privileges;
				if($privileges==1){
					//header("Location: view/tablero.php");
					$result= 1;
				}else if($privileges==2){
					//header("Location: ../../admin/index.php");
					$result=2;
				}
			}
		}
	}
	mysqli_free_result($resultado);
	$conector->closeConexionDef($conexion);
	echo $result;

?>