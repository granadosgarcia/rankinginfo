<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$date=gmdate(DATE_RFC822);
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Calificacion Empleado')";

 $curp= mysql_real_escape_string($_SESSION['curp']);
 $emp_desempeno= mysql_real_escape_string($_SESSION['emp_desempeno']);
 $coment= mysql_real_escape_string($_SESSION['coment']);
 $nombre_evaluador= mysql_real_escape_string($_SESSION['nombre_evaluador']);
 $empresa_evaluador= mysql_real_escape_string($_SESSION['empresa_evaluador']);
 $puesto_evaluador= mysql_real_escape_string($_SESSION['puesto_evaluador']);

if(!empty($_GET['arr_pagos']) || !empty($_GET['arr_propiedad_actual']) || !empty($_GET['arr_propiedad_anterior']) || !empty($_GET['arr_general']) || !empty($_GET['coment'])){
$sql="INSERT INTO emp_calif(
emp_desempeno,
comentario,
fecha,
curp,
nombre_evaluador,
empresa_evaluador,
puesto_evaluador
)

VALUES(
'$emp_desempeno',
'$coment',
CURDATE(),
'$curp',
'$nombre_evaluador',
'$empresa_evaluador',
'$puesto_evaluador'
)";


	
	if (!mysql_query($sql,$con))
  {
  echo $sql;
  die('Error 1 al insertar el registro a la base de datos ' . mysql_error());
  }
 mysql_query($sqlact, $con);
echo '<script> alert("Calificacion Agregada Exitosamente"); window.location = "../../"; </script>';

 mysql_close($con);
 }
 
 else echo '<script> window.location = "../../"; </script>';

?>

