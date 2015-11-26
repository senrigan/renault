<?php
	$id=$_REQUEST["id"];
	if(isset($id)){
		var_dump($_REQUEST);

		$planeado=$_REQUEST["plan"];
		$trabajando=$_REQUEST["trab"];
		var_dump($id);
		var_dump($planeado);
		var_dump($trabajando);
	}else{
		echo "hubo error";
	}
	/*$json = file_get_contents('php://input');
	$data=json_decode($json);  
	echo $data;
	*/
	//var_dump($obj);
?>