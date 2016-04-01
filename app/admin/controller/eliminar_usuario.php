<?php
	include '../model/DatabaseConectorStatic.php';
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$id=$_REQUEST["idusuario"];
	$query="DELETE FROM cuentas WHERE id=$id";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	pg_close($conexion);
	if($resultado){
		echo 1;
	}else{
		echo 0;
	}











?>
