<?php
	include "../../admin/model/DatabaseConectorStatic.php";
	$conector=new DatabaseConectorStat();
	$conexion=$conector->openConexion();
	$query="SELECT * FROM tablero_control ";
	$resultado=$conector->executeQueryDefine($query,$conexion);
	$filas = pg_fetch_all($resultado);
	$conector->closeConexionDef($conexion);
	$sizeElement=sizeof($filas);
	//include "../../admin/model/DatabaseConectorStatic.php";
	function checarElemento($elemento,$num){
		$result="";
		if(isset($elemento)|| !is_null($elemento)){
			$conector=new DatabaseConectorStat();
			$conexion=$conector->openConexion();
			
			$query="SELECT * FROM elemento_control where id=$elemento ";
			$resultado=$conector->executeQueryDefine($query,$conexion);
			$filas=pg_fetch_all($resultado);
			$conector->closeConexionDef($conexion);
			$tipo=$filas[0]["tipo"];
			$contenido=$filas[0]["contenido"];
			$referencia=$filas[0]["referencia"];
		
			switch($tipo){
				case 1:
					$result="<div class='blue' id='bluec'$num name='blue'$num style='border-style: none; cursor: move;'>$contenido</div>";
					break;
				case 2:
					$result="<div class='white' id='whitec'$num name='white'$num style='border-style: none; cursor: move;'>$contenido</div>";
					break;
				case 3:
					$result= "<div class='yellow' id='yellow'$num name='yellow'$num style='border-style: none; cursor: move;'>$contenido</div>";
					
					break;
				case 4:
					$result="<div  class='redips-drag redips-clone red' id='red' name='red' height='40px' width='40px'>$contenido</div>";
					break;
				case 5:
					$result="<div class='birthday' id='birthdayc'$num name='birthday'$num style='border-style: none; cursor: move;'>".
							"<img src='../../../static/images/admin/birthday.jpg' alt='' height='40px' width='40px'>".
							"</div>";
					break;
				case 6:
					$result= "<div class='food' id='foodc'$num name='food'$num style='border-style: none; cursor: move;'>".
							"<img src='../../../static/images/admin/comida.jpg' alt='' height='40px' width='40px'>".
							"</div>";
					break;
				default:
					break;
			}
			return $result;
		}else{

			return $result;
		}
		
	}
?>
<html>
	<head>
		<script src="../../../static/javascript/jquery-1.11.3.min.js"></script>

		<link rel="stylesheet" href="../../../static/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../static/css/bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="../../../static/css/bootstrap/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="../../../static/css/style.css" type="text/css" media="screen"/>
	
		
		<script type="text/javascript" src="../../../static/javascript/script.js"></script>
		<script src="../../../static/javascript/admin/gestor_tablero.js"></script>

	</head>
	<body  >
		
			<div id="right"  width="100%">
				<div id="redips-drag" width="100%">
					<table id="table2" name="table2" border="1" width="100%" >
						<thead>
							<tr>
								<th class="redips-only last" colspan="31" rowspan="" headers="" scope="col">CONTROL DE PROGRESO DE TRABAJO</th>
								
								
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">Detenidos</th>
							</tr>
							<tr>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope=""> Tecnicos</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">ID</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">Status Trabajo</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">8</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">9</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">10</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">11</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">12</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">13</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">14</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">15</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">16</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">17</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">18</th>
								<th class="redips-only last" colspan="2" rowspan="" headers="" scope="">19</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">Lavado</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">C.C</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">TermSS</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">T.O.T</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">Partes</th>
								<th class="redips-only last" colspan="" rowspan="2" headers="" scope="">AUT</th>
							</tr>
							<tr>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>

								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>

								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">00</th>
								<th class="redips-only last" colspan="" rowspan="" headers="" scope="">30</th>

							
							

							</tr>
						</thead>
						
						<tbody>
						<?php
						$empleadoActual=-1;
						for($i=0;$i<$sizeElement;$i++){
							$idTablero=$filas[$i]["idTablero"];
							$idEmpleado=$filas[$i]["tecnico"];
							$status=$filas[$i]["status"];
							$h0800=$filas[$i]["h0800"];
							$h0830=$filas[$i]["h0830"];
							$h0900=$filas[$i]["h0900"];
							$h0930=$filas[$i]["h0930"];
							$h1000=$filas[$i]["h1000"];
							$h1030=$filas[$i]["h1030"];
							$h1100=$filas[$i]["h1100"];
							$h1130=$filas[$i]["h1130"];
							$h1200=$filas[$i]["h1200"];
							$h1230=$filas[$i]["h1230"];
							$h1300=$filas[$i]["h1300"];
							$h1330=$filas[$i]["h1330"];
							$h1400=$filas[$i]["h1400"];
							$h1430=$filas[$i]["h1430"];
							$h1500=$filas[$i]["h1500"];
							$h1530=$filas[$i]["h1530"];
							$h1600=$filas[$i]["h1600"];
							$h1630=$filas[$i]["h1630"];
							$h1700=$filas[$i]["h1700"];
							$h1730=$filas[$i]["h1730"];
							$h1800=$filas[$i]["h1800"];
							$h1830=$filas[$i]["h1830"];
							$h1900=$filas[$i]["h1900"];
							$h1930=$filas[$i]["h1930"];
							$h2000=$filas[$i]["h2000"];
							$lavado=$filas[$i]["lavado"];
							$control=$filas[$i]["control_calidad"];
							$terminado=$filas[$i]["terminado"];
							$tot=$filas[$i]["ToT"];
							$partes=$filas[$i]["partes"];
							$aut=$filas[$i]["AUT"];

							$h0800=checarElemento($h0800,$i);
							$h0830=checarElemento($h0830,$i);
							$h0900=checarElemento($h0900,$i);
							$h0930=checarElemento($h0930,$i);
							$h1000=checarElemento($h1000,$i);
							$h1030=checarElemento($h1030,$i);
							$h1100=checarElemento($h1100,$i);
							$h1130=checarElemento($h1130,$i);
							$h1200=checarElemento($h1200,$i);
							$h1230=checarElemento($h1230,$i);
							$h1300=checarElemento($h1300,$i);
							$h1330=checarElemento($h1330,$i);
							$h1400=checarElemento($h1400,$i);
							$h1430=checarElemento($h1430,$i);
							$h1500=checarElemento($h1500,$i);
							$h1530=checarElemento($h1530,$i);
							$h1600=checarElemento($h1600,$i);
							$h1630=checarElemento($h1630,$i);
							$h1700=checarElemento($h1700,$i);
							$h1730=checarElemento($h1730,$i);
							$h1800=checarElemento($h1800,$i);
							$h1830=checarElemento($h1830,$i);
							$h1900=checarElemento($h1930,$i);
							$h1930=checarElemento($h2000,$i);
							$h2000=checarElemento($lavado,$i);
							$control=checarElemento($control,$i);
							$terminado=checarElemento($terminado,$i);
							$tot=checarElemento($tot,$i);
							$partes=checarElemento($partes,$i);
							$aut=checarElemento($aut,$i);
							
							if($empleadoActual!=$idEmpleado){
								$empleadoActual=$idEmpleado;
								$conexion2=$conector->openConexion();
								$query="SELECT * FROM tecnicos where id_tecnico=$idEmpleado";
								$resultado=$conector->executeQueryDefine($query,$conexion2);
								$filasTecnicos = pg_fetch_all($resultado);
								$conector->closeConexionDef($conexion2);
								$nombre=$filasTecnicos[0]["nombre"];
								$apaterno=$filasTecnicos[0]["a_paterno"];
								$amaterno=$filasTecnicos[0]["a_materno"];
								$imagen=$filasTecnicos[0]["imagen_perfil"];
								$ubicacion="http://".$_SERVER['SERVER_NAME']."/media/userImage/";
								$ubicacion=$ubicacion.$imagen;
								//planeado
									echo "<tr class='r1'>".
									"<td id='$idEmpleado' name='$idEmpleado' class='redips-only last' colspan='' rowspan='2'>$nombre $apaterno $amaterno</td>".
									"<td class='redips-only last' colspan='' rowspan='2'><image src='$ubicacion'  width='100' height='100' ></td>".
									"<td class='redips-only last'>Planeado</td>".
									"<td class='c1' >$h0800</td>".//0800
									"<td class='c1'>$h0830</td>".//0830
									"<td class='c1'>$h0900</td>".//0900
									"<td class='c1'>$h0930</td>".//0930
									"<td class='c1'>$h1000</td>".//1000
									"<td class='c1'>$h1030</td>".//1030
									"<td class='c1'>$h1100</td>".//1100
									"<td class='c1'>$h1130</td>".//1130
									"<td class='c1'>$h1200</td>".//1200
									"<td class='c1'>$h1230</td>".//1230
									"<td class='c1'>$h1300</td>".//1300
									"<td class='c1'>$h1330</td>".//1330
									"<td class='c1'>$h1400</td>".//1400
									"<td class='c1'>$h1430</td>".//1430
									"<td class='c1'>$h1500</td>".//1500
									"<td class='c1'>$h1530</td>".//1530
									"<td class='c1'>$h1600</td>".//1600
									"<td class='c1'>$h1630</td>".//1630
									"<td class='c1'>$h1700</td>".//1700
									"<td class='c1'>$h1730</td>".//1730
									"<td class='c1'>$h1800</td>".//1800
									"<td class='c1'>$h1830</td>".//1830
									"<td class='c1'>$h1900</td>".//1900
									"<td class='c1'>$h1930</td>".//1930
									//"<td class='c1'></td>".//2000
									"<td class='c1'>$lavado</td>".//lavado
									"<td class='c1'>$control</td>".//control_calidad
									"<td class='c1'>$terminado</td>".//termiando
									"<td class='c1'>$tot</td>".//tot
									"<td class='c1'>$partes</td>".//partes
									"<td class='c1'>$aut</td>".//aut
									"</tr>";
								
							}else{
								//echo "el mismo empleado";
								//trabajando
									echo "<tr class='rd' >".											
										"<td class='redips-only last'>Trabajando</td>".
										"<td>$h0800</td>".//0800
										"<td>$h0830</td>".//0830
										"<td>$h0900</td>".//0900
										"<td>$h0930</td>".//0930
										"<td>$h1000</td>".//1000
										"<td>$h1030</td>".//1030
										"<td>$h1100</td>".//1100
										"<td>$h1130</td>".//1130
										"<td>$h1200</td>".//1200
										"<td>$h1230</td>".//1230
										"<td>$h1300</td>".//1300
										"<td>$h1330</td>".//1330
										"<td>$h1400</td>".//1400
										"<td>$h1430</td>".//1430
										"<td>$h1500</td>".//1500
										"<td>$h1530</td>".//1530
										"<td>$h1600</td>".//1600
									
										"<td>$h1630</td>".//1630

										"<td>$h1700</td>".//1700
										"<td>$h1730</td>".//1730
										"<td>$h1800</td>".//1800
										"<td>$h1830</td>".//1830
										"<td>$h1900</td>".//1900
										"<td>$h1930</td>".//2000
										"<td>$lavado</td>".//lavado
										"<td>$control</td>".//control_calidad
										"<td>$terminado</td>".//terminado
										"<td>$tot</td>".//tot
										"<td>$partes</td>".//partes
										"<td>$aut</td>".//aut
										
									"</tr>";

								
							}
					
							

						}

					?>
						<?php
						/* 
							$tecnicoActual=-1;
							for($i=0;$i<$sizeElement;$i++){
								$idEmpleado=$filas[$i]["idEmpleado"];
								if($tecnicoActual!=$idEmpleado){
									$tecnicoActual=$idEmpleado;
									$status=$filas[$i]["statusTrabajo"];
									$h0800=$filas[$i]["h0800"];
									$h0830=$filas[$i]["h0830"];
									$h0900=$filas[$i]["h0900"];
									$h0930=$filas[$i]["h0930"];
									$h1000=$filas[$i]["h1000"];
									$h1030=$filas[$i]["h1030"];
									$h1100=$filas[$i]["h1100"];
									$h1130=$filas[$i]["h1130"];
									$h1200=$filas[$i]["h1200"];
									$h1230=$filas[$i]["h1230"];
									$h1300=$filas[$i]["h1300"];
									$h1330=$filas[$i]["h1330"];
									$h1400=$filas[$i]["h1400"];
									$h1430=$filas[$i]["h1430"];
									$h1500=$filas[$i]["h1500"];
									$h1530=$filas[$i]["h1530"];
									$h1600=$filas[$i]["h1600"];
									$h1630=$filas[$i]["h1630"];
									$h1700=$filas[$i]["h1700"];
									$h1730=$filas[$i]["h1730"];
									$h1800=$filas[$i]["h1800"];
									$h1830=$filas[$i]["h1830"];
									$h1900=$filas[$i]["h1900"];
									$lavado=$filas[$i]["lavado"];
									$control_calida=$filas[$i]["control_calidad"];
									$terminado=$filas[$i]["terminado"];
									$Tot=$filas[$i]["ToT"];
									$partes=$filas[$i]["partes"];
									$AUT=$filas[$i]["AUT"];
									
									$query="SELECT * FROM tecnicos where id_tecnico=$idEmpleado ";
									$conexion=$conector->openConexion();
	  								$resultado=$conector->executeQueryDefine($query,$conexion);
	 								$filasTecnicos = pg_fetch_all($resultado);
	  								$conector->closeConexionDef($conexion);
	  								$sizeElement=sizeof($filas);
	  								$nombre=$filasTecnicos[0]["nombre"];
	  								$apaterno=$filasTecnicos[0]["a_paterno"];
	  								$amaterno=$filasTecnicos[0]["a_materno"];
	  								$imagen=$filasTecnicos[0]["imagen_perfil"];
								
						
								}
								


							}*/
							//echo "final de la tabla";

						 ?>
						
						
					
					
					</tbody>
						
					</table>
					
				</div>
				
				
			</div>

		

		
	</body>

</html>

