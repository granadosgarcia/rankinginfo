<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";

 $curp= mysql_real_escape_string($_POST['consulta']);

 $actor_nombres= mysql_real_escape_string($_POST['actor_nombres']);
 $actor_apellido_paterno= mysql_real_escape_string($_POST['actor_apellido_paterno']);
 $actor_apellido_materno= mysql_real_escape_string($_POST['actor_apellido_materno']);
 
 
 $demandado_nombres= mysql_real_escape_string($_POST['demandado_nombres']);
 $demandado_apellido_paterno= mysql_real_escape_string($_POST['demandado_apellido_paterno']);
 $demandado_apellido_materno= mysql_real_escape_string($_POST['demandado_apellido_materno']);
 
  $juicio= mysql_real_escape_string($_POST['juicio']);
  $expediente= mysql_real_escape_string($_POST['expediente']);
  $juzgado= mysql_real_escape_string($_POST['juzgado']);
  $estatus= mysql_real_escape_string($_POST['estatus']);
  $ultima_actuacion= mysql_real_escape_string($_POST['ultima_actuacion']);
  $s_actuacion_01= mysql_real_escape_string($_POST['s_actuacion_01']);
  $s_actuacion_02= mysql_real_escape_string($_POST['s_actuacion_02']);
  $estado_procesal_tramite_pendiente= mysql_real_escape_string($_POST['estado_procesal_tramite_pendiente']);
  $comentario_01= mysql_real_escape_string($_POST['comentario_01']);
  $lugar= mysql_real_escape_string($_POST['lugar']);
   $fecha= mysql_real_escape_string($_POST['datepicker']);

  
 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insercion Juicio')";



$sql="UPDATE relacion_juicios SET ";

if(!empty($_POST['datepicker']))
$sql.="fecha = '$fecha'";
if(!empty($_POST['actor_nombres']))
$sql.=", actor_nombres = '$actor_nombres'";

if(!empty($_POST['actor_apellido_paterno']))
$sql.=", actor_apellido_paterno = '$actor_apellido_paterno'";

if(!empty($_POST['actor_apellido_materno']))
$sql.=", actor_apellido_materno = '$actor_apellido_materno'";

if(!empty($_POST['demandado_nombres']))
$sql.=", demandado_nombres = '$demandado_nombres'";

if(!empty($_POST['demandado_apellido_paterno']))
$sql.=", demandado_apellido_paterno = '$demandado_apellido_paterno'";

if(!empty($_POST['demandado_apellido_materno']))
$sql.=", demandado_apellido_materno = '$demandado_apellido_materno'";

if(!empty($_POST['juicio']))
$sql.=", juicio = '$juicio'";


if(!empty($_POST['expediente']))
$sql.=", expediente = '$expediente'";


if(!empty($_POST['juzgado']))
$sql.=", juzgado = '$juzgado'";


if(!empty($_POST['estatus']))
$sql.=", estatus = '$estatus'";


if(!empty($_POST['ultima_actuacion']))
$sql.=", ultima_actuacion = '$ultima_actuacion'";

if(!empty($_POST['s_actuacion_01']))
$sql.=", s_actuacion_01 = '$s_actuacion_01'";

if(!empty($_POST['s_actuacion_02']))
$sql.=", s_actuacion_02 = '$s_actuacion_02'";

if(!empty($_POST['estado_procesal_tramite_pendiente']))
$sql.=", estado_procesal_tramite_pendiente = '$estado_procesal_tramite_pendiente'";

if(!empty($_POST['comentario_01']))
$sql.=", comentario_01 = '$comentario_01'";

if(!empty($_POST['lugar']))
$sql.=", lugar = '$lugar'";

$sql.=" WHERE 
id ='$curp'";

	if (!mysql_query($sql,$con))
  {
  echo $sql."<br>";
  die('Error al insertar el registro a la base de datos ' . mysql_error());
  }
  
    mysql_query($sqlact,$con);
  echo '<script> alert("Editado Exitosamente"); window.location="../../"; </script>';

 mysql_close($con);
?>