<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$date=gmdate(DATE_RFC822);

if(!empty($_GET['arr_pagos']) || !empty($_GET['arr_propiedad_actual']) || !empty($_GET['arr_propiedad_anterior']) || !empty($_GET['arr_general']) || !empty($_GET['coment'])){
$sql="INSERT INTO calificacion(
emp_desempeno,
emp_calif_anterior,
comentario,
fecha
)

VALUES(
'$_GET[emp_desempeno]',
'$_GET[emp_calif_anterior]',
'$_GET[coment]',
CURDATE()
)";


	
	if (!mysql_query($sql,$con))
  {
  die('Error 1 al insertar el registro a la base de datos ' . mysql_error());
  }
$id = mysql_insert_id();

$sql1="INSERT INTO emp_calif(
curp,
clave
)

VALUES(
'$_SESSION[curp]',
'$id'
)";


	
	if (!mysql_query($sql1,$con))
  {
  die('Error 2 al insertar el registro a la base de datos ' . mysql_error());
  }

 
echo '<script> alert("Calificacion Agregada Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
 }
 
 else echo '<script> window.location = "../../"; </script>';

?>

