<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$date=gmdate(DATE_RFC822);
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Calificacion Arrendado')";

if(!empty($_GET['arr_pagos']) || !empty($_GET['arr_propiedad_actual']) || !empty($_GET['arr_propiedad_anterior']) || !empty($_GET['arr_general']) || !empty($_GET['coment'])){
$sql="INSERT INTO arr_calif(
arr_pagos,
arr_propiedad_actual,
arr_propiedad_anterior,
arr_general,
comentario,
fecha,
curp
)

VALUES(
'$_GET[arr_pagos]',
'$_GET[arr_propiedad_actual]',
'$_GET[arr_propiedad_anterior]',
'$_GET[arr_general]',
'$_GET[coment]',
CURDATE(),
'$_SESSION[curp]'
)";


	
	if (!mysql_query($sql,$con))
  {
  echo $sql;
  die('Error 1 al insertar el registro a la base de datos ' . mysql_error());
  }
$id = mysql_insert_id();
 mysql_query($sqlact,$con);
echo '<script> alert("Calificacion Agregada Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
 }
 
 else echo '<script> window.location = "../../"; </script>';

?>

