<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";



$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insertar Notificación')";

$kevin = mysql_real_escape_string($_GET["comentario"]);
 $curp= mysql_real_escape_string($_SESSION['curp']);




$sql="INSERT INTO notificacion(";
if(!empty($_GET['comentario']))
$sql.="comentario,";
$sql.="expediente";
$sql.=")";
$sql.="VALUES(";
if(!empty($_GET['comentario']))
$sql.="'$kevin',";
$sql.="'$curp'";


$sql.=")";

	
	if (!mysql_query($sql,$con))
  {
  echo $sql;
  die('Error 1 al insertar el registro a la base de datos ' . mysql_error());
  }
$id = mysql_insert_id();
 mysql_query($sqlact,$con);
echo '<script> alert("Notificacion Agregada Exitosamente"); window.close(); </script>';

 mysql_close($con);
 
 
?>
<!DOCTYPE html>

<html><head> <script>
 window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
};
 </script></head><body style="background-color: black;"></body></html>