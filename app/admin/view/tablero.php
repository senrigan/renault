<?php
include "../../admin/model/DatabaseConectorStatic.php";
$conector=new DatabaseConectorStat();
$conexion=$conector->openConexion();
$query="SELECT * FROM tablero_control ";
$resultado=$conector->executeQueryDefine($query,$conexion);
$filas = pg_fetch_all($resultado);
$conector->closeConexionDef($conexion);
$sizeElement=sizeof($filas);


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
		<link rel="stylesheet" href="../../../static/javascript/jquery/jquery-ui/jquery-ui.css"/>
	</head>
	<body onload="REDIPS.drag.init()" >
		
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
							$tecnicoActual=-1;
							for($i=0;$i<$sizeElement;$i++){
								$idEmpleado=$filas[$i]["tecnico"];
								if($tecnicoActual!=$idEmpleado){
									$tecnicoActual=$idEmpleado;
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
	  								$ubicacion="http://".$_SERVER['SERVER_NAME']."/media/userImage/";
	  								$sizeElement=sizeof($filas);
	  								$nombre=$filasTecnicos[0]["nombre"];
	  								$apaterno=$filasTecnicos[0]["a_paterno"];
	  								$amaterno=$filasTecnicos[0]["a_materno"];
	  								$imagen=$filasTecnicos[0]["imagen_perfil"];
									$ubicacion=$ubicacion.$imagen;
									echo "<tr class='r1'>".
											"<td id='$idEmpleado' name='$idEmpleado' class='redips-only last' colspan='' rowspan='2'>$nombre $apaterno $amaterno</td>".
											"<td class='redips-only last' colspan='' rowspan='2'><image src='$ubicacion'  width='100' height='100' ></td>".
											"<td class='redips-only last'>Planeado</td>".
											"<td class='c1' ></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
										
											"<td class='c1'></td>".

											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"<td class='c1'></td>".
											"</tr>";

									echo "<tr class='rd' >".
											
											"<td class='redips-only last'>Trabajando</td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
										
											"<td colspan='' rowspan='' headers=''>".
											
											"</td>".

											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											"<td></td>".
											
										"</tr>";
						
								}
								


							}

						 ?>
						
						
					
					
					</tbody>
						
					</table>
					<div id="left" name="left">
						<table id="table1" name="table1">
							<thead>
								<tr>
									<th class="redips-only last" colspan="5" rowspan="" headers="" scope="">
										Elementos de arrastre
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
											<img src="../../../static/images/admin/birthday.jpg" alt="" height="40px" width="40px">
										</div>
									</td>
									<td class="dark" colspan="" rowspan="" headers="">
										<div  class="redips-drag redips-clone food" id="food" name="food" >
											<img src="../../../static/images/admin/comida.jpg" alt="" height="40px" width="40px">

										</div>
									</td>
									<td class="redips-trash" colspan="" rowspan="" headers="">
										<div  id="Trash">
											<img src="../../../static/images/admin/trash.png" alt="" height="40px" width="40px">
										</div>
										
									</td>

									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="right" name="right">
					<button onclick="guardarTablero()" >Guardar Cambios</button>
					
				</div>
				
			</div>

			<div aria-labelledby="ui-id-1" role="dialog" tabindex="-1" style="display: none; outline: 0px none; z-index: 1000;" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-dialog-buttons">
			<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
				<span class="ui-dialog-title" id="ui-id-1">jQuery dialog</span>
				<a role="button" class="ui-dialog-titlebar-close ui-corner-all" href="#">
					<span class="ui-icon ui-icon-closethick">close</span>
				</a>
			</div>
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
