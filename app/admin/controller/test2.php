	<?php 
	$local=$_SERVER['SERVER_NAME'];
	echo "server name".$_SERVER['SERVER_NAME'].$_SERVER['SERVER_PORT']."<br>";
	echo "docuemn roort".$_SERVER['DOCUMENT_ROOT']."<br>";
	if($local=="localhost"){
		$ubicacion=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
	}else{
		$ubicacion=$_SERVER['DOCUMENT_ROOT']."/media/userImage/";

	}
	?>