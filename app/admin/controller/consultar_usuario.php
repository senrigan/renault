<?php 
  include '../model/DatabaseConectorStatic.php';
  $id_usuario=$_REQUEST['idusuario'];
  $conector=new DatabaseConectorStat();
  $conexion=$conector->openConexion();
  $query="SELECT * FROM cuentas WHERE id=$id_usuario ";
  $resultado=$conector->executeQueryDefine($query,$conexion);

  $filas = pg_fetch_all($resultado);
  $conector->closeConexionDef($conexion);

  $jsonvar=json_encode($filas);
  echo $jsonvar;
?>