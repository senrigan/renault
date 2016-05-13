<?php
include "../model/DatabaseConectorStatic.php";
$cmd=$_REQUEST["command"];
if(isset($idTecnico)){

    $conector=new DatabaseConectorStat();
    $conexion=$conector->openConexion();
    $query="DELETE FROM elemento_control";
    $resultado=$conector->executeQueryDefine($query,$conexion);
    echo "ok";
}

 ?>
