<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
$date=gmdate(DATE_RFC822);
$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Calificacion Empleado')";

 $curp= mysql_real_escape_string($_SESSION['curp']);
 $emp_desempeno= mysql_real_escape_string($_GET['emp_desempeno']);
 $coment= mysql_real_escape_string($_GET['coment']);
 $nombre_evaluador= mysql_real_escape_string($_GET['nombre_evaluador']);
 $empresa_evaluador= mysql_real_escape_string($_GET['empresa_evaluador']);
 $puesto_evaluador= mysql_real_escape_string($_GET['puesto_evaluador']);

if(!empty($_GET['arr_pagos']) || !empty($_GET['arr_propiedad_actual']) || !empty($_GET['arr_propiedad_anterior']) || !empty($_GET['arr_general']) || !empty($_GET['coment'])){
$sql="INSERT INTO emp_calif(";
if(!empty($_GET['emp_desempeno']))
$sql.="emp_desempeno,";
if(!empty($_GET['coment']))
$sql.="comentario,";
$sql.="fecha,";
if(!empty($_GET['nombre_evaluador']))
$sql.="nombre_evaluador,";
if(!empty($_GET['empresa_evaluador']))
$sql.="empresa_evaluador,";
if(!empty($_GET['puesto_evaluador']))
$sql.="puesto_evaluador,";
$sql.="curp";
$sql.=")";

$sql.="VALUES(";
if(!empty($_GET['emp_desempeno']))
$sql.="'$emp_desempeno',";
if(!empty($_GET['coment']))
$sql.="'$coment',";
$sql.="CURDATE(),";
if(!empty($_GET['nombre_evaluador']))
$sql.="'$nombre_evaluador',";
if(!empty($_GET['empresa_evaluador']))
$sql.="'$empresa_evaluador',";
if(!empty($_GET['puesto_evaluador']))
$sql.="'$puesto_evaluador',";
$sql.="'$curp'";
$sql.=")";


	
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

