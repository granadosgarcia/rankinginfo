<?php

include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/privilegios10.php";

 $user= mysql_real_escape_string($_POST['usuario']);
 $password_nice= crypt($_POST['contrasena']);
 $nombre= mysql_real_escape_string($_POST['nombre']);
 $privi= mysql_real_escape_string($_POST['privilegios']);





$sql="INSERT INTO usuario (nombre_usuario, password, nombre, privilegios)
	VALUES( '$user', '$password_nice','$nombre','$privi')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

  echo '<script> alert("Usuario Creado Exitosamente"); window.location = "../"; </script>';
mysql_close($con)




?>
