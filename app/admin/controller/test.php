<?php 
	$local=$_SERVER['SERVER_NAME'];
	if($local=="localhost"){
		$ubicacion=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
	}else{
		$ubicacion=$_SERVER['DOCUMENT_ROOT']."/media/userImage/";

	}
	echo $ubicacion;
?>