<?php
static $user="root";
		static $password="root";
		static $dbname="renault";
		static $port="3906";
		static $host="localhost";
		static $conexion;
//$link = mysql_connect('localhost', 'root', 'root');
//$mysqli = new mysqli('localhost:3906', 'root', 'root', 'renault');
$mysqli = new mysqli($host.":".$port, $user, $password, $dbname);
if ($mysqli->connect_errno) {
	echo 'error';
}else{

	//$conexion=$conector->openConexion();
	$query="SELECT * FROM  cuentas where cuenta like 'user'  ";
	//$resultado=$conector->executeQueryDefine($query,$conexion);
	$resultado=mysqli_query($mysqli,$query);
	$num=mysqli_num_rows($resultado);
	echo "numero de filas".$num."<br>";

	//$array=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
	$rows=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
	//$rows = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
	echo "<br>rows ";
	echo json_encode($rows);
	echo "<br>";
	foreach ($rows as $key =>$value) {
		# code...
		echo "<br>".$value["id"]."<br>".$value["cuenta"]."<br>".$value["password"]."<br>".$value["privileges"];
		//echo "row".$key."<br>";

	}
	/*foreach ($array as $key =>$value) {
		echo "key ".$key;
		//echo $value;
		# code...
	}*/
	//echo implode(" ",$array);
	//echo json_encode($array);
   	mysqli_free_result($resultado);

	//echo $host.":".$port.$user.$password.$dbname;
}
mysqli_close($mysqli);

//if connection is not successful you will see text error
/*
if (!$link) {
       die('Could not connect: ' . mysql_error());
}
*/
//if connection is successfuly you will see message bellow
//echo 'Connected successfully';
 
//mysql_close($link);
/*

 $user="root";
		 $password="root";
		$dbname="renault";
		 $port="3906";
		 $host="localhost";
		 $conexion;
*/
/*$servername = "localhost";
$username = "root";
$password = "root";
*/
// Create connection
/*
$cadenaConexion = "host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password."";
			//return pg_connect($cadenaConexion) ;
			$conn= mysql_connect($cadenaConexion);
*/
//$conn = new mysqli($servername, $username, $password);

// Check connection
/*
if($conn){
	echo "connect suceffull";
}else{
	echo "connection fail";
}
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/
?>