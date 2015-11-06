<?php
	session_start();
	if(is_null($_SESSION["typecount"])){
		header('Location: user/login.html');

	}else{
		$typecount=$_SESSION["typecount"];
		if($typecount==2){//admin acount
			header('location: admin/index.php');
		}else if($typecount==1){//user count
			header('location: user/index.php');
		}
		//echo "ya hay una session creada";
	}
?>