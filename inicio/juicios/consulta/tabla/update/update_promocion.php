<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";

$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insertar Promocion')";

$kevin = mysql_real_escape_string($_GET["comentario"]);
$kevin1 = mysql_real_escape_string($_GET["fecha_notificacion"]);
$kevin2 = mysql_real_escape_string($_GET["fecha_promocion"]);

$sql="INSERT INTO promocion(";
if(!empty($_GET['comentario']))
$sql.="promocion,";
if(!empty($_GET['fecha_notificacion']))
$sql.="fecha_notificacion,";
if(!empty($_GET['fecha_promocion']))
$sql.="fecha_promocion,";
$sql.=")";
$sql.="VALUES(";
if(!empty($_GET['comentario']))
$sql.="'$kevin',";
if(!empty($_GET['fecha_notificacion']))
$sql.="'$kevin1',";
if(!empty($_GET['fecha_promocion']))
$sql.="'$kevin2'";

$sql.=")";

	
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
 
 else echo '<script> window.close(); </script>';
?>
<!DOCTYPE html>

<html><head></head><body style="background-color: black;"></body></html>