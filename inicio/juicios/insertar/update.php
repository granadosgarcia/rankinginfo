<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/sesion.php";
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/con.php";
?>
<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/css_js.php";


 $actor_nombres= mysql_real_escape_string($_POST['actor_nombres']);
 $actor_apellido_paterno= mysql_real_escape_string($_POST['actor_apellido_paterno']);
 $actor_apellido_materno= mysql_real_escape_string($_POST['actor_apellido_materno']);
 
 
 $demandado_nombres= mysql_real_escape_string($_POST['demandado_nombres']);
 $demandado_apellido_paterno= mysql_real_escape_string($_POST['demandado_apellido_paterno']);
 $demandado_apellido_materno= mysql_real_escape_string($_POST['demandado_apellido_materno']);
 
  $juicio= mysql_real_escape_string($_POST['juicio']);
  $expediente= mysql_real_escape_string($_POST['expediente']);
  $juzgado= mysql_real_escape_string($_POST['juzgado']);
  $ultima_actuacion= mysql_real_escape_string($_POST['ultima_actuacion']);
  $estado_procesal= mysql_real_escape_string($_POST['estado_procesal']);
  $comentario_01= mysql_real_escape_string($_POST['comentario_01']);
  $distrito_juidicial= mysql_real_escape_string($_POST['distrito_juidicial']);
   $fecha= mysql_real_escape_string($_POST['datepicker']);

	$originalDate = $fecha;
	$newDate = date("Y-m-d", strtotime($originalDate));
  
 $sqlact="
INSERT INTO actividades (id_usuario, fecha, actividad)
VALUES ('$_SESSION[usuario_id]', NOW(), 'Insercion Juicio')";



$sql="INSERT INTO relacion_juicios(";

if(!empty($_POST['datepicker']))
$sql.="fecha";
if(!empty($_POST['actor_nombres']))
$sql.=",actor_nombres";

if(!empty($_POST['actor_apellido_paterno']))
$sql.=",actor_apellido_paterno";

if(!empty($_POST['actor_apellido_materno']))
$sql.=",actor_apellido_materno";

if(!empty($_POST['demandado_nombres']))
$sql.=",demandado_nombres";

if(!empty($_POST['demandado_apellido_paterno']))
$sql.=",demandado_apellido_paterno";

if(!empty($_POST['demandado_apellido_materno']))
$sql.=",demandado_apellido_materno";

if(!empty($_POST['juicio']))
$sql.=",juicio";


if(!empty($_POST['expediente']))
$sql.=",expediente";


if(!empty($_POST['juzgado']))
$sql.=",juzgado";


if(!empty($_POST['ultima_actuacion']))
$sql.=",ultima_actuacion";

if(!empty($_POST['estado_procesal']))
$sql.=",estado_procesal";

if(!empty($_POST['comentario_01']))
$sql.=",comentario_01";

if(!empty($_POST['distrito_juidicial']))
$sql.=",distrito_juidicial";

$sql.=")

VALUES(";
if(!empty($_POST['datepicker']))
$sql.="'$newDate'";

if(!empty($_POST['actor_nombres']))
$sql.=",'$actor_nombres'";

if(!empty($_POST['actor_apellido_paterno']))
$sql.=",'$actor_apellido_paterno'";

if(!empty($_POST['actor_apellido_materno']))
$sql.=",'$actor_apellido_materno'";

if(!empty($_POST['demandado_nombres']))
$sql.=",'$demandado_nombres'";

if(!empty($_POST['demandado_apellido_paterno']))
$sql.=",'$demandado_apellido_paterno'";

if(!empty($_POST['demandado_apellido_materno']))
$sql.=",'$demandado_apellido_materno'";

if(!empty($_POST['juicio']))
$sql.=",'$juicio'";

if(!empty($_POST['expediente']))
$sql.=",'$expediente'";

if(!empty($_POST['juzgado']))
$sql.=",'$juzgado'";

if(!empty($_POST['ultima_actuacion']))
$sql.=",'$ultima_actuacion'";

if(!empty($_POST['estado_procesal']))
$sql.=",'$estado_procesal'";

if(!empty($_POST['comentario_01']))
$sql.=",'$comentario_01'";

if(!empty($_POST['distrito_juidicial']))
$sql.=",'$distrito_juidicial'";

$sql.=")";	

    mysql_query($sqlact,$con);

	if (!mysql_query($sql,$con))
  {
include_once $_SERVER['DOCUMENT_ROOT']."/rankinginfo/conexion/errorsql.php";
  }
  else {
  echo '<script> alert("Agregado Exitosamente"); history.go(-2); </script>';
  		}
  		
  		
 mysql_close($con);
?>