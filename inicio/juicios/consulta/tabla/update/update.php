<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $curp= mysql_real_escape_string($_POST['consulta']);

  $ultima_actuacion= mysql_real_escape_string($_POST['ultima_actuacion']);
  $s_actuacion_01= mysql_real_escape_string($_POST['s_actuacion_01']);
  $s_actuacion_02= mysql_real_escape_string($_POST['s_actuacion_02']);
  $estado_procesal_tramite_pendiente= mysql_real_escape_string($_POST['estado_procesal']);
  $comentario_01= mysql_real_escape_string($_POST['comentario_01']);
  $lugar= mysql_real_escape_string($_POST['distrito_juidicial']);
   $fecha= mysql_real_escape_string($_POST['datepicker']);

  
 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Inserción Juicio')";



$sql="UPDATE relacion_juicios SET ";

if(!empty($_POST['datepicker']))
$sql.="fecha = '$fecha'";

if(!empty($_POST['ultima_actuacion']))
$sql.=", ultima_actuacion = '$ultima_actuacion'";

if(!empty($_POST['s_actuacion_01']))
$sql.=", s_actuacion_01 = '$s_actuacion_01'";

if(!empty($_POST['s_actuacion_02']))
$sql.=", s_actuacion_02 = '$s_actuacion_02'";

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
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }
  
    mysql_query($sqlact,$con);
  echo '<script> alert("Editado Exitosamente"); window.location="../../"; </script>';

 mysql_close($con);
?>