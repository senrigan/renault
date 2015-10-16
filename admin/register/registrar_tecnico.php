<?php
	$target_path = "userImage/";
	$target_path = $target_path . basename( $_FILES['wizard-picture']['name']); 
	if(move_uploaded_file($_FILES['wizard-picture']['tmp_name'], $target_path)) { 
		echo "El archivo ". basename( $_FILES['wizard-picture']['name']). " ha sido subido";
	} else{
	echo "Ha ocurrido un error, trate de nuevo!";
	}
?>