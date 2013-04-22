<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $curp= mysql_real_escape_string($_POST['consulta']);

  $utlima_actuacion= mysql_real_escape_string($_POST['utlima_actuacion']);
  $estado_procesal_tramite_pendiente= mysql_real_escape_string($_POST['estado_procesal']);
  $comentario_01= mysql_real_escape_string($_POST['comentario_01']);
  $lugar= mysql_real_escape_string($_POST['distrito_juidicial']);
   $fecha= mysql_real_escape_string($_POST['datepicker']);
   $originalDate = $fecha;
   $newDate = date("Y-m-d", strtotime($originalDate));
   $fecha= $newDate;  
 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Inserción Juicio')";



$sql="UPDATE relacion_juicios SET ";

if(!empty($_POST['datepicker']))
$sql.="fecha = '$fecha'";

if(!empty($_POST['utlima_actuacion']))
$sql.=", ultima_actuacion = '$utlima_actuacion'";


if(!empty($_POST['estado_procesal']))
$sql.=", estado_procesal = '$estado_procesal_tramite_pendiente'";

if(!empty($_POST['comentario_01']))
$sql.=", comentario_01 = '$comentario_01'";

if(!empty($_POST['distrito_juidicial']))
$sql.=", distrito_juidicial = '$lugar'";

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