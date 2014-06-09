<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";



$sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Reporta Error')";

$kevin3 = mysql_real_escape_string($_GET["comentario"]);
$kevin = mysql_real_escape_string($_GET["campo"]);
$curp= mysql_real_escape_string($_SESSION['curp']);


$originalDate = date();
$kevin1 = date("Y-m-d", strtotime($originalDate));



$sql="INSERT INTO errores_juicios(";
$sql.="date,";
if(!empty($_GET['comentario']))
$sql.="explicacion,";
if(!empty($_GET['campo']))
$sql.="input,";

$sql.="id_juicio";
$sql.=")";

$sql.="VALUES(";
$sql.="'$kevin1',";

if(!empty($_GET['comentario']))
$sql.="'$kevin3',";
if(!empty($_GET['campo']))
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
