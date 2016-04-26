<?php




include "../../admin/model/DatabaseConectorStatic.php";
include "../controller/GestorTablero.php";
session_start();
if($_SESSION['usuario']['typecount']!=2){
	header('Location: ../../user/login.html');

}
$conector=new DatabaseConectorStat();
$conexion=$conector->openConexion();
$query="SELECT * FROM tecnicos ORDER BY id ASC";
$resultado=$conector->executeQueryDefine($query,$conexion);
$tecnicos=pg_fetch_all($resultado);
$conector->closeConexionDef($conexion);






?>


<html>
	<head>

		<script src="../../../static/javascript/jquery-1.11.3.min.js"></script>
		<script src="../../../static/javascript/admin/gestor_tablero.js"></script>

		<link rel="stylesheet" href="../../../static/css/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../static/css/bootstrap/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="../../../static/css/bootstrap/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="../../../static/css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript">
			var redipsURL = '../../../static/javascript/drag-and-drop-table-row/';
		</script>

		<script type="text/javascript" src="../../../static/javascript/redips-drag-min.js"></script>
		<script type="text/javascript" src="../../../static/javascript/script.js"></script>
		<script type="text/javascript" src="../../../static/javascript/jquery/jquery-ui/jquery-ui.min.js"></script>
		<script src="../../../static/javascript/staticvar.js"></script>
		<link rel="stylesheet" href="../../../static/javascript/jquery/jquery-ui/jquery-ui.css"/>
		<link rel="stylesheet" href="../../../static/css/tablero.css"/>
	</head>
	<body class="content" onload="REDIPS.drag.init()" >

			<div id="right"  width="100%">
				<div id="redips-drag" width="100%">
					<table class="tablehead" id="table2" name="table2" border="1" width="100%" >
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
						  if(!$tecnicos){
								$tecnicosSize=0;
							}else{
									$tecnicosSize=sizeof($tecnicos);
							}


							$gestor=new GestorTablero();

							for($j=0;$j<$tecnicosSize;$j++){
								$idTecnico=$tecnicos[$j]["id"];
								$query="SELECT * FROM tablero_control where tecnico=$idTecnico ORDER BY status ASC";
								$conexion=$conector->openConexion();
								$resultado=$conector->executeQueryDefine($query,$conexion);
								$filas=pg_fetch_all($resultado);
								$conector->closeConexionDef($conexion);

								$numfilas=pg_num_rows($resultado);
								if($numfilas==2){

									for($i=0;$i<$numfilas;$i++){
										//echo($i."\n");
										$idEmpleado=$filas[$i]["tecnico"];
										$status=$filas[$i]["status"];
										$h0800=$gestor->obtenerElemento($filas[$i]["h0800"]);
										$h0830=$gestor->obtenerElemento($filas[$i]["h0830"]);
										$h0900=$gestor->obtenerElemento($filas[$i]["h0900"]);
										$h0930=$gestor->obtenerElemento($filas[$i]["h0930"]);
										$h1000=$gestor->obtenerElemento($filas[$i]["h1000"]);
										$h1030=$gestor->obtenerElemento($filas[$i]["h1030"]);
										$h1100=$gestor->obtenerElemento($filas[$i]["h1100"]);
										$h1130=$gestor->obtenerElemento($filas[$i]["h1130"]);
										$h1200=$gestor->obtenerElemento($filas[$i]["h1200"]);
										$h1230=$gestor->obtenerElemento($filas[$i]["h1230"]);
										$h1300=$gestor->obtenerElemento($filas[$i]["h1300"]);
										$h1330=$gestor->obtenerElemento($filas[$i]["h1330"]);
										$h1400=$gestor->obtenerElemento($filas[$i]["h1400"]);
										$h1430=$gestor->obtenerElemento($filas[$i]["h1430"]);
										$h1500=$gestor->obtenerElemento($filas[$i]["h1500"]);
										$h1530=$gestor->obtenerElemento($filas[$i]["h1530"]);
										$h1600=$gestor->obtenerElemento($filas[$i]["h1600"]);
										$h1630=$gestor->obtenerElemento($filas[$i]["h1630"]);
										$h1700=$gestor->obtenerElemento($filas[$i]["h1700"]);
										$h1730=$gestor->obtenerElemento($filas[$i]["h1730"]);
										$h1800=$gestor->obtenerElemento($filas[$i]["h1800"]);
										$h1830=$gestor->obtenerElemento($filas[$i]["h1830"]);
										$h1900=$gestor->obtenerElemento($filas[$i]["h1900"]);
										$h1930=$gestor->obtenerElemento($filas[$i]["h1930"]);

										$lavado=$gestor->obtenerElemento($filas[$i]["lavado"]);
										$control_calida=$gestor->obtenerElemento($filas[$i]["control_calidad"]);
										$terminado=$gestor->obtenerElemento($filas[$i]["terminado"]);
										$Tot=$gestor->obtenerElemento($filas[$i]["tot"]);
										$partes=$gestor->obtenerElemento($filas[$i]["partes"]);
										$AUT=$gestor->obtenerElemento($filas[$i]["aut"]);

										$tecnicoActual=$idEmpleado;


										/*$query="SELECT * FROM tecnicos where id_tecnico=$idEmpleado ";
										$conexion=$conector->openConexion();
		  								$resultado=$conector->executeQueryDefine($query,$conexion);
		 								$filasTecnicos = pg_fetch_all($resultado);
		  								$conector->closeConexionDef($conexion);
		  								*/
												$isIP = (bool)ip2long($_SERVER['HTTP_HOST']);
		  								$local=$_SERVER['SERVER_NAME'];
		  								if($local=="localhost" || $isIp==true){
		  									$ubicacion="http://".$local.":".$_SERVER['SERVER_PORT']."/renault/media/userImage/";
		  									//.$filas[$i]['imagen_perfil'];
		  									//$ubicacion=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
		  								}else{
		  									$ubicacion="http://".$_SERVER['SERVER_NAME']."/media/userImage/";

		  								}
		  								$sizeElement=sizeof($filas);
		  								$nombre=$tecnicos[$j]["nombre"];
		  								$apaterno=$tecnicos[$j]["a_paterno"];
		  								$amaterno=$tecnicos[$j]["a_materno"];
		  								$imagen=$tecnicos[$j]["imagen_perfil"];
										$ubicacion=$ubicacion.$imagen;
										if($status==1){
											echo "<tr class='r1'>".
												"<td class='cellstitle' id='$idEmpleado' name='$idEmpleado' class='redips-only last' colspan='' rowspan='2'>$nombre $apaterno $amaterno</td>".
												"<td class='cellstitle redips-only last' colspan='' rowspan='2'><image src='$ubicacion'  width='100%' height='auto'   ></td>".
												"<td class='redips-only last'>Planeado</td>".
												"<td class='c1' >$h0800</td>".
												"<td class='c1'>$h0830</td>".
												"<td class='c1'>$h0900</td>".
												"<td class='c1'>$h0930</td>".
												"<td class='c1'>$h1000</td>".
												"<td class='c1'>$h1030</td>".
												"<td class='c1'>$h1100</td>".
												"<td class='c1'>$h1130</td>".
												"<td class='c1'>$h1200</td>".
												"<td class='c1'>$h1230</td>".
												"<td class='c1'>$h1300</td>".
												"<td class='c1'>$h1330</td>".
												"<td class='c1'>$h1400</td>".
												"<td class='c1'>$h1430</td>".
												"<td class='c1'>$h1500</td>".
												"<td class='c1'>$h1530</td>".
												"<td class='c1'>$h1600</td>".

												"<td class='c1'>$h1630</td>".

												"<td class='c1'>$h1700</td>".
												"<td class='c1'>$h1730</td>".
												"<td class='c1'>$h1800</td>".
												"<td class='c1'>$h1830</td>".
												"<td class='c1'>$h1900</td>".
												"<td class='c1'>$h1930</td>".
												"<td class='c1'>".
												"</td>".
												"<td class='c1'>$control_calida</td>".
												"<td class='c1'>$terminado</td>".
												"<td class='c1'>$Tot</td>".
												"<td class='c1'>$partes</td>".
												"<td class='c1'>$AUT</td>".
												"</tr>";
										}
										if($status==2){
													echo "<tr class='rd' >".

													"<td class='redips-only last'>Trabajando</td>".
													"<td>$h0800</td>".
													"<td>$h0830</td>".
													"<td>$h0900</td>".
													"<td>$h0930</td>".
													"<td>$h1000</td>".
													"<td>$h1030</td>".
													"<td>$h1100</td>".
													"<td>$h1130</td>".
													"<td>$h1200</td>".
													"<td>$h1230</td>".
													"<td>$h1300</td>".
													"<td>$h1330</td>".
													"<td>$h1400</td>".
													"<td>$h1430</td>".
													"<td>$h1500</td>".
													"<td>$h1530</td>".
													"<td>$h1600</td>".

													"<td colspan='' rowspan='' headers=''>".
													$h1630.
													"</td>".

													"<td>$h1700</td>".
													"<td>$h1730</td>".
													"<td>$h1800</td>".
													"<td>$h1830</td>".
													"<td>$h1900</td>".
													"<td>$h1930</td>".
													"<td>$lavado</td>".
													"<td>$control_calida</td>".
													"<td>$terminado</td>".
													"<td>$Tot</td>".
													"<td>$partes</td>".
													"<td>$AUT</td>".

												"</tr>";
										}
									}
								}

							}
							/*$query="SELECT * FROM tablero_control  ORDER BY  tecnico,status ASC";
							$conexion=$conector->openConexion();
							$resultado=$conector->executeQueryDefine($query,$conexion);
							$filas = pg_fetch_all($resultado);
							$conector->closeConexionDef($conexion);
							$sizeElement=sizeof($filas);
							$tecnicoActual=-1;
							*/

						 ?>




					</tbody>

					</table>
					<br><br><br>
					<div id="left" name="left">
						<table id="table1" name="table1">
							<thead>
								<tr>
									<th class="redips-only last" colspan="7" rowspan="" headers="" scope="">
										Elementos de arrastre
									</th>
									<th class="redips-only last" colspan="1" rowspan="" headers="" scope="">
										Funciones
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="" rowspan="" headers="">
										<div class="redips-drag redips-clone blue" id="blue" name="blue">
										</div>

									</td>
									<td class="redisp-dark" colspan="" rowspan="" headers="">
										<div class="redips-drag redips-clone white" id="white" name="white">
										</div>

									</td>
									<td class="dark" colspan="" rowspan="" headers="">
										<div  class="redips-drag redips-clone yellow" id="yellow" name="yellow" >

										</div>
									</td>
									<td class="dark" colspan="" rowspan="" headers="">
										<div  class="redips-drag redips-clone red" id="red" name="red" height="40px" width="40px">
										</div>

									</td>
									<td class="dark" colspan="" rowspan="" headers="">
										<div  class="redips-drag redips-clone birthday" id="birthday" name="birthday" >
											<img src="../../../static/images/admin/birthday.png" alt="" height="40px" width="40px">
										</div>
									</td>
									<td class="dark" colspan="" rowspan="" headers="">
										<div  class="redips-drag redips-clone food" id="food" name="food" >
											<img src="../../../static/images/admin/comida.png" alt="" height="40px" width="40px">

										</div>
									</td>
									<td class="redips-trash" colspan="" rowspan="" headers="">
										<div  id="Trash">
											<img src="../../../static/images/admin/trash.png" alt="" height="40px" width="40px">
										</div>


									</td>
									<td>
										<div class="">

											<button type="button" class="btn btn-default btn-lg" onclick="regresarMenu()">Menu Principal</button>
												<button class="btn btn-default btn-lg" onclick="guardarTablero()" >Guardar Cambios</button>
										</div>
									</td>

								</tr>
							</tbody>
						</table>

					</div>
				</div>
				<div id="right" name="right">


				</div>

			</div>

			<div aria-labelledby="ui-id-1" role="dialog" tabindex="-1" style="display: none; outline: 0px none; z-index: 1000;" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-dialog-buttons">

			<?php
				/*<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
				<span class="ui-dialog-title" id="ui-id-1">jQuery dialog</span>
				<a role="button" class="ui-dialog-titlebar-close ui-corner-all" href="#">
					<span class="ui-icon ui-icon-closethick">close</span>
				</a>
			</div>*/
			?>

			<div class="ui-dialog-content ui-widget-content" id="dialog">Please choose action!</div>
			<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
				<div class="ui-dialog-buttonset">
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button">
						<span class="ui-button-text">Shift</span>
					</button>
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button">
						<span class="ui-button-text">Switch</span>
					</button>
					<button aria-disabled="false" role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" type="button">
						<span class="ui-button-text">Overwrite</span></button>
				</div>
			</div>

			<div id="dialog2" name="dialog2" >
				Insertar Texto
				<div>
               		<input id="contentDiv" name="contentDiv" type="text" >
				</div>
			</div>


		</div>


	</body>

</html>
