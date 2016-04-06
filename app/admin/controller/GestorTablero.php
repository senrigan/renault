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
						$elemento="<div class='redips-drag  blue moved' id='blue' name='blue'></div>";
						break;
					case 2:
						$elemento="<div class='white redips-drag moved' id='whitec' name='white'$idElemento style='border-style: none; cursor: move;'>$contenido</div>";
						break;
					case 3:
						$elemento="<div class='yellow redips-drag moved' id='yellow' name='yellow' style='border-style: none; cursor: move;'>$contenido</div>";

						break;
					case 4:
						$elemento="<div  class='redips-drag  red moved' id='red' name='red' height='40px' width='40px'>$contenido</div>";
						break;
					case 5:
						$elemento="<div class='redips-drag  birthday moved' id='birthdayc'$idElemento name='birthday'$idElemento style='border-style: none; cursor: move;'>".
								"<img src='../../../static/images/admin/birthday.png' alt='' height='45px' width='40px'>".
								"</div>";
						break;
					case 6:
						$elemento= "<div class=' redips-drag  food moved' id='foodc'$idElemento name='food'$idElemento style='border-style: none; cursor: move;'>".
								"<img src='../../../static/images/admin/comida.png' alt='' height='45px' width='40px'>".
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