<?php
	if(!isset($_SESSION["typecount"])){
		header('Location: user/login.html');

	}else{
		$typecount=$_SESSION["typecount"];
		if($typecount==2){//admin acount
			header('location: admin/index.html');
		}else if($typecount==1){
			
		}
		//echo "ya hay una session creada";
	}
?>