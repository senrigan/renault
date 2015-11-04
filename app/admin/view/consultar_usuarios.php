<script src="../../../static/javascript/jquery-1.11.3.min.js"></script>
<script src="../../../static/javascript/admin/gestor_usuario.js"></script>
<link rel="stylesheet" href="../../../static/css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../static/css/bootstrap/css/bootstrap-theme.min.css">

<table class='table'>
	<caption>Tabla de los usuarios registrados</caption>
	<thead>
		<tr>
			<th>cuenta</th>
		    <th>privilegios</th>

		</tr>
	</thead>
	<tbody>

<?php
	include '../model/DatabaseConector.php';
	$conector=new DatabaseConector("pruebas","admin","renault","localhost","5432");
	$conexion=$conector->openConexion();
	$query="SELECT * FROM cuentas ";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	if(!$resultado){
		echo "ocurrio un error al consultar la base de datos";
		exit;
	}else{
		$filas = pg_fetch_all($resultado);
		$conector->closeConexionDef($conexion);
		$sizeElement=sizeof($filas);
		for($i=0;$i<$sizeElement;$i++){
			echo "<tr> ";
			//echo getcwd()."../../../media/userImage/".$filas[$i]['imagen_perfil'];
			
			//echo "".strcmp($ubicacion, $ubi);
			
			
			echo "<td>".$filas[$i]['cuenta']."</td>".
				"<td>".$filas[$i]['privileges']."</td>".
				"<td>";
		?>
			<button type='button' class='btn btn-warning' onclick=<?php echo "modificarUsuario('modificar_usuario.php?idusuario=".($i+1)."')"; ?> >Modificar</button>
			<button type='button' class='btn btn-danger'>Eliminar</button></td>.
			</tr>;
		<?php	
		}
		
	//print_r($arr);
	}
	
?>
		
	</tbody>
</table>


