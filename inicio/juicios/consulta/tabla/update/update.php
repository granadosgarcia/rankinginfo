<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $curp= mysql_real_escape_string($_REQUEST['consulta']);

  $utlima_actuacion= mysql_real_escape_string($_REQUEST['utlima_actuacion']);
  $estado_procesal_tramite_pendiente= mysql_real_escape_string($_REQUEST['estado_procesal']);
  $comentario_01= mysql_real_escape_string($_REQUEST['comentario_01']);
   $fecha= mysql_real_escape_string($_REQUEST['datepicker']);
   $originalDate = $fecha;
   $newDate = date("Y-m-d", strtotime($originalDate));
   $fecha= $newDate;  
 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Inserción Juicio')";



$sql="UPDATE relacion_juicios SET ";

if(!empty($_REQUEST['datepicker']))
$sql.="fecha = '$fecha'";

if(!empty($_REQUEST['utlima_actuacion']))
$sql.=", ultima_actuacion = '$utlima_actuacion'";


if(!empty($_REQUEST['estado_procesal']))
$sql.=", estado_procesal = '$estado_procesal_tramite_pendiente'";

if(!empty($_REQUEST['comentario_01']))
$sql.=", comentario_01 = '$comentario_01'";



$sql.=" WHERE 
expediente ='$curp'";


	if (!mysql_query($sql,$con))
  {
	  include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/errorsql.php";
  }
  
    mysql_query($sqlact,$con);
  echo '<script> alert("Editado Exitosamente"); window.location="../../"; </script>';

 mysql_close($con);
?>