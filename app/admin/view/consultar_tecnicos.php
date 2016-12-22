


<table class='table'>
	<caption>Tabla de los tecnicos registrados</caption>
	<thead>
		<tr>
			<th>Imagen</th>
		    <th>Nombre</th>
		    <th>Apellido Paterno</th>
		    <th>Apellido Materno</th>

		</tr>
	</thead>
	<tbody>

<?php
	include "../model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$query="SELECT * FROM tecnicos ORDER BY id ASC";
	$resultado=$conector->executeQueryDefine($query,$conexion);

	/*include '../model/DatabaseConector.php';
	$conector=new DatabaseConector("pruebas","admin","renault","localhost","5432");
	$conexion=$conector->openConexion();
	$query="SELECT * FROM tecnicos";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	*/
	if(!$resultado){
		echo "ocurrio un error al consultar la base de datos";
		exit;
	}else{

		$filas = pg_fetch_all($resultado);

		$conector->closeConexionDef($conexion);
		if($filas==false){
			$sizeElement=0;
		}else{
			$sizeElement=sizeof($filas);
		}

		if($sizeElement>0)
		for($i=0;$i<$sizeElement;$i++){
			echo "<tr> <td >";
			//echo getcwd()."../../media/userImage/".$filas[$i]['imagen_perfil'];
			$idtec=$filas[$i]["id"];
			$nombreImagen=trim($filas[$i]['imagen_perfil']);
			$local=$_SERVER['SERVER_NAME'];
				$isIP = (bool)ip2long($_SERVER['SERVER_NAME']);
			if($local=="localhost" || $isIP==true){
				//$ubicacion=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/".$filas[$i]['imagen_perfil'];

				$ubicacion="http://".$local.":".$_SERVER['SERVER_PORT']."/renault/media/userImage/".$filas[$i]['imagen_perfil'];;


			}else{
				$ubicacion="/media/userImage/".$filas[$i]['imagen_perfil'];

			}
			//$ubicacion=$_SERVER['DOCUMENT_ROOT']."/media/userImage/".$filas[$i]['imagen_perfil'];
			//$imagenesUsuario=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
			$imagenesUsuario="../../media/userImage/";
			$ubicacion=trim($ubicacion);

			//echo "".strcmp($ubicacion, $ubi);
			if($filas[$i]['imagen_perfil']){

					//$ubicacion=$local."/renault/media/userImage/".$filas[$i]['imagen_perfil'];
					echo "<image src='".$ubicacion."' class='img-thumbnail modimage' width='100' height='100' >";


			}else{
				echo "<image src=".$imagenesUsuario."static/tecnico.png".
					" class='img-thumbnail modimage' width='100' height='100' >";
			}

			echo "</td>".
				"<td>".$filas[$i]['nombre']."</td>".
				"<td>".$filas[$i]['a_paterno']."</td>".
				"<td>".$filas[$i]['a_materno']."</td>";
			?>

				<td><button  type='button' class='btn btn-warning'   onclick=<?php echo "modificarTecnico(".($idtec).")" ;?>>Modificar</button>
				<button  type='button' class='btn btn-danger'  onclick=<?php echo "eliminarTecnico(".($idtec).")"; ?> >Eliminar</button></td>
			<?php
			"</tr>";
		}

	//print_r($arr);
	}

?>

	</tbody>
</table>
