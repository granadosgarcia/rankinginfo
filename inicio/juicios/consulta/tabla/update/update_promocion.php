<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";



$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insertar Promocion')";

$kevin = mysql_real_escape_string($_GET["comentario"]);
$kevin1 = mysql_real_escape_string($_GET["fecha_notificacion"]);
$kevin2 = mysql_real_escape_string($_GET["fecha_promocion"]);
$kevin3 = mysql_real_escape_string($_GET["tipo"]);

 $curp= mysql_real_escape_string($_SESSION['curp']);

if(!empty($_GET['fecha_notificacion'])){
$originalDate = $kevin1;
$kevin1 = date("Y-m-d", strtotime($originalDate));
}

if(!empty($_GET['fecha_promocion']))
{
$originalDate1 = $kevin2;
$kevin2 = date("Y-m-d", strtotime($originalDate1));
}

$sql="INSERT INTO promocion(";
$sql.="tipo,";
if(!empty($_GET['comentario']))
$sql.="comentario,";
if(!empty($_GET['fecha_notificacion']))
$sql.="fecha_notificacion,";
if(!empty($_GET['fecha_promocion']))
$sql.="fecha_promocion,";
$sql.="expediente";
$sql.=")";
$sql.="VALUES(";
$sql.="'$kevin3',";
if(!empty($_GET['comentario']))
$sql.="'$kevin',";
if(!empty($_GET['fecha_notificacion']))
$sql.="'$kevin1',";
if(!empty($_GET['fecha_promocion']))
$sql.="'$kevin2',";
$sql.="'$curp'";


$sql.=")";

	
	if (!mysql_query($sql,$con))
  {
  echo $sql;
  die('Error 1 al insertar el registro a la base de datos ' . mysql_error());
  }
$id = mysql_insert_id();
 mysql_query($sqlact,$con);
echo '<script>window.close(); </script>';

 mysql_close($con);
 
 
?>
<!DOCTYPE html>

<html><head>
	 <script>
 window.onunload = function() {
    if (window.opener && !window.opener.closed) {
        window.opener.popUpClosed();
    }
};
 </script>
</head><body style="background-color: black;"></body></html>