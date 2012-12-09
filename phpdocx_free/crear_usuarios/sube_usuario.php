<?php

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$user = $_POST['usuario'];
$password_nice = crypt($_POST['contrasena']);
$nombre = $_POST['nombre'];
$privi= $_POST['privilegios'];




$sql="INSERT INTO usuario (nombre_usuario, password, nombre, privilegios)
	VALUES( '$user', '$password_nice','$nombre','$privi')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "Usuario creado";
mysql_close($con)




?>
