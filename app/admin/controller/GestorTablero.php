<?php
	class GestorTablero{

		public function __construct(){
			
		}

		public function obtenerElemento($idElemento){
			$elemento="";
			if(isset($idElemento)){
				$conector=new DatabaseConectorStat();
				$conexion=$conector->openConexion();
				$query="SELECT * FROM elemento_control  where id=$idElemento";
				$resultado=$conector->executeQueryDefine($query,$conexion);
				$filas = pg_fetch_all($resultado);
				$conector->closeConexionDef($conexion);
				$sizeElement=sizeof($filas);
				$tipo=$filas[0]["tipo"];
				$contenido=$filas[0]["contenido"];
				//$referencia=$filas["referencia"];

				switch ($tipo) {
					case 1:
						$elemento="<div class='redips-drag  blue' id='blue' name='blue'></div>";
						break;
					case 2:
						$elemento="<div class='white redips-drag' id='whitec' name='white'$num style='border-style: none; cursor: move;'>$contenido</div>";
						break;
					case 3:
						$elemento="<div class='yellow redips-drag' id='yellow' name='yellow' style='border-style: none; cursor: move;'>$contenido</div>";

						break;
					case 4:
						$elemento="<div  class='redips-drag  red' id='red' name='red' height='40px' width='40px'>$contenido</div>";
						break;
					case 5:
						$elemento="<div class='redips-drag  birthday' id='birthdayc'$num name='birthday'$num style='border-style: none; cursor: move;'>".
								"<img src='../../../static/images/admin/birthday.jpg' alt='' height='40px' width='40px'>".
								"</div>";
						break;
					case 6:
						$elemento= "<div class=' redips-drag  food' id='foodc'$num name='food'$num style='border-style: none; cursor: move;'>".
								"<img src='../../../static/images/admin/comida.jpg' alt='' height='40px' width='40px'>".
								"</div>";
						break;
					
					default:
						# code...
						break;
				}
			}

			return $elemento;
			
		}

	}
?>