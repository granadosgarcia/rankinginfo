<?php
	session_start();

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$user = $_POST['usuario'];
$pass = $_POST['contrasena1'];

//Protejer de MySQL Injections

$pass = stripslashes($pass);
$user = stripslashes($user);

$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);

//------------------------------

$sql1="SELECT nombre_usuario FROM usuario
	WHERE nombre_usuario='$user'";
	
$nombre = mysql_query($sql1);

$row = mysql_fetch_array($nombre);

$contador = mysql_num_rows($nombre);

if($contador == 1){
		
		$sql="SELECT password FROM usuario
			WHERE nombre_usuario='$user'";
			
		$sql2 = "SELECT nombre,privilegios,id FROM usuario
			WHERE nombre_usuario='$user'";
				
		$result=mysql_query($sql);
		$nombrecompleto=mysql_query($sql2);
	
	while($row = mysql_fetch_array($result) and $nombreses=mysql_fetch_array($nombrecompleto)){
	if($row['password'] == crypt($pass,$row['password']))
	{
	$_SESSION['usuario']= $user;
	$_SESSION['nombreusuario']= $nombreses['nombre'];
	$_SESSION['privilegios']= $nombreses['privilegios'];
	$_SESSION['usuario_id']= $nombreses['id'];
	echo "<script>window.location='inicio/index.php'; </script>";
	}

	
}

}

echo "<script>window.location='index.php'; </script>";


mysql_close($con);
?>
