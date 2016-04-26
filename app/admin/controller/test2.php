	<?php
	$local=$_SERVER['SERVER_NAME'];
	echo "server name".$_SERVER['SERVER_NAME'].$_SERVER['SERVER_PORT']."<br>";
	echo "docuemn roort".$_SERVER['DOCUMENT_ROOT']."<br>";
		$isIP = (bool)ip2long($_SERVER['SERVER_NAME']);
	if($local=="localhost"|| $isIP==true){
		$ubicacion=$_SERVER['DOCUMENT_ROOT']."renault/media/userImage/";
	}else{
		$ubicacion=$_SERVER['DOCUMENT_ROOT']."/media/userImage/";

	}

	$isIP = (bool)ip2long($_SERVER['SERVER_NAME']);
	if($isIP==true){
		echo "es una ip";
	}
	?>
