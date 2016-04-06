<?php
	include '../model/DatabaseConectorStatic.php';
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$id=$_REQUEST["idmoduser"];
	$user=$_POST["user"];
	$password=$_POST["password"];
	$typecount=$_POST["typecount"];
	$query="UPDATE cuentas SET cuenta='$user' , password='$password' , privileges=$typecount WHERE id=$id ";
	//echo $query;
	$resultado=$conector->executeQueryDefine($query,$conexion);
	pg_close($conexion);
	if($resultado){
		echo 1;
	}else{
		echo "0";
	}











?>
