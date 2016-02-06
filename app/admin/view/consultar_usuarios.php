<script src="../../static/javascript/admin/gestor_usuario.js"></script>
<link rel="stylesheet" href="../../static/css/bootstrap/css/bootstrap-theme.min.css" />
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

	include "../model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
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
			
			
			$tipo=$filas[$i]['privileges'];
			$cuenta="";
			if($tipo==1){//usuario normal
				$cuenta="usuario normal";
			}else if($tipo==2){
				$cuenta="administrador";
			}
			$id=$filas[$i]['id'];
			echo "<td>".$filas[$i]['cuenta']."</td>".
				"<td>".$cuenta."</td>".
				"<td>";
			
			echo "<button type='button' class='btn btn-warning' onclick='hola($id)'>Modificar</button>";
			echo "<button type='button' class='btn btn-danger'  onclick=".
				"eliminarUsuario(".$id.") >Eliminar</button></td>";
			echo "</tr>";

		
			
		
		}
		
	}
	
?>
		
	</tbody>
</table>


