  <?php
        include '../model/DatabaseConectorStatic.php';
        $id_Tecnico=$_REQUEST['idTecnico'];
        $conector=new DatabaseConectorStat();
        $conexion=$conector->openConexion();
        $query="SELECT * FROM tecnicos WHERE id=$id_Tecnico ";
        $resultado=$conector->executeQueryDefine($query,$conexion);
        if(!$resultado){
          echo "ocurrio un error al consultar la base de datos";
          exit;
        }else{
          
          $filas = pg_fetch_all($resultado);
          $conector->closeConexionDef($conexion);
          $jsonvar=json_encode($filas);
          echo $jsonvar;
         /* $sizeElement=sizeof($filas);
          $nombre=$filas[0]['nombre'];
          $apaterno=$filas[0]['a_paterno'];
          $amaterno=$filas[0]['a_materno'];
          $imagen=$filas[0]['imagen_perfil'];
          $ubicacion=$_SERVER['DOCUMENT_ROOT']."/media/userImage/".$imagen;
          if(!file_exists($ubicacion)){
              $imagen="static/tecnico.png";
          }*/
        }
                          
?>