<?php
	session_start();
	//require "funciones/funciones.php";
	//$con=conecta();
	
	$email=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];
	echo 1;
	
	/*
	$pass_txt = md5($pass);
	$sql="SELECT * FROM usuarios WHERE email='$email' AND pass='$pass_txt' AND activo='1' AND eliminado='0' ";
	$res=mysql_query($sql,$con);
	$num=mysql_num_rows($res);
	if($num==0){
		//usaurio valido
		//
		//
		echo 0;
	} else{
		$id_user=mysql_result($res,0,"id");
		$nom_user=mysql_result($res,0, "nombre")." ".mysql_result($res,0, "apellidos");
		
		$_SESSION['id_user']=$id_user;
		$_SESSION['nom_user']=$nom_user;
		//$num=1;
		echo 1;
	}
	*/

?>